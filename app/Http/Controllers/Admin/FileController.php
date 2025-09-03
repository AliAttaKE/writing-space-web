<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\File; // aapka 'files' table ka model
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class FileController extends Controller
{
    public function download($id, $folder_name)
    {
        // File record
        $file = File::findOrFail($id);

        // Relative path in 'public' disk (storage/app/public/...)
        $relativePath = "uploads_folders/{$folder_name}/{$file->file_name}";

        // Agar kuch log absolute store karte hain to normalize:
        if (Str::startsWith($relativePath, ['storage/app/public/', 'public/'])) {
            $relativePath = (string) Str::after($relativePath, 'public/');
        }

        // File exists?
        if (!Storage::disk('public')->exists($relativePath)) {
            // Last resort: direct filesystem path (rarely needed if disk is set up)
            $fsPath = storage_path('app/public/'.$relativePath);
            if (!is_file($fsPath)) {
                abort(404, 'File not found.');
            }
            // download via response() if not on disk
            // Update download_time
            if (\Schema::hasColumn($file->getTable(), 'download_time')) {
                $file->forceFill(['download_time' => now()])->save();
            }
            return response()->download($fsPath, $file->file_name);
        }

        // Stamp download_time
        if (\Schema::hasColumn($file->getTable(), 'download_time')) {
            $file->forceFill(['download_time' => now()])->save();
        }

        // Stream download
        return Storage::disk('public')->download($relativePath, $file->file_name);
    }
}
