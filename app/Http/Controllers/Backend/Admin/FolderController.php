<?php

namespace App\Http\Controllers\Backend\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Folder;
use Illuminate\Support\Facades\Storage;
use DB;
use App\Models\files;
use App\Models\File;
use ZipArchive;
use Illuminate\Support\Facades\Auth;

class FolderController extends Controller
{
    public function create()
    {

       
       // $folder = Folder::orderBy('created_at', 'desc')->get();
        $folder = Folder::orderBy('created_at', 'desc')->get();
    
        $folderCount = Folder::count();

        $files = File::get();
        $filestotal = 0; // Initialize the total size
        
        if ($files) {
            // Add up the total_size values from all files
            foreach ($files as $file) {
                $filestotal += $file->total_size;
            }
        }
        

        $units = ['B', 'KB', 'MB', 'GB', 'TB'];
                                                
        for ($i = 0; $filestotal >= 1024 && $i < count($units) - 1; $i++) {
            $filestotal /= 1024;
        }
        
        $totalfiles = round($filestotal, 0) . ' ' . $units[$i];

      



        return view('backend.admin.Folder.file_management',compact('folder','folderCount','totalfiles'));
    }
    
    
     public function create_customer()
    {

       
        $folder = Folder::where('user_id', Auth::user()->id)->orderBy('created_at', 'desc')->get();

    
        $folderCount = Folder::where('user_id', Auth::user()->id)->count();

        $files = File::get();
        $filestotal = 0; // Initialize the total size
        
        if ($files) {
            // Add up the total_size values from all files
            foreach ($files as $file) {
                $filestotal += $file->total_size;
            }
        }
        

        $units = ['B', 'KB', 'MB', 'GB', 'TB'];
                                                
        for ($i = 0; $filestotal >= 1024 && $i < count($units) - 1; $i++) {
            $filestotal /= 1024;
        }
        
        $totalfiles = round($filestotal, 0) . ' ' . $units[$i];

      

// dd($totalfiles);

        return view('backend.admin.Folder.file_management_customer',compact('folder','folderCount','totalfiles'));
    }

    public function store(Request $request)
    {

        $randomNumber = rand(1000000, 9999999);
        $randomNumber2 = rand(10, 99);
    
        $randomNumber = 'WS-'.$randomNumber.'-'.$randomNumber2;

       


        // Validation can be added here based on your requirements


        $path = "public/uploads_folders/" . $randomNumber;

$permissions = 0775;
        if (!Storage::exists($path)) {
            // Storage::makeDirectory($path);
             Storage::makeDirectory($path, $permissions, true);
            $folder = new Folder();
            $folder->name = $randomNumber;
            $folder->description = $randomNumber;
             $folder->user_id = Auth::id();
            $folder->save();
      




   
            return redirect()->back();
        } else {
            return "Folder already exists: $path";
        }
   
    }
    
    
    
     public function store_customer(Request $request)
    {

        $randomNumber = rand(1000000, 9999999);
        $randomNumber2 = rand(10, 99);
    
        $randomNumber = 'WS-'.$randomNumber.'-'.$randomNumber2;

       


        // Validation can be added here based on your requirements


        $path = "public/uploads_folders/" . $randomNumber;
$permissions = 0775;


        if (!Storage::exists($path)) {
            // Storage::makeDirectory($path);
             Storage::makeDirectory($path, $permissions, true);
            $folder = new Folder();
            $folder->name = $randomNumber;
            $folder->description = $randomNumber;
            $folder->save();
   
            return redirect()->back();
        } else {
            return "Folder already exists: $path";
        }
   
    }


    public function downloadFolder($id)
    {
        $folder = Folder::find($id);

        if (!$folder) {
            abort(404);
        }

        $zipFileName = $folder->name . '.zip';
        $zipFilePath = storage_path('app/public/uploads_folders/' . $zipFileName);

        // Create a new ZipArchive instance
        $zip = new ZipArchive;
        if ($zip->open($zipFilePath, ZipArchive::CREATE) !== true) {
         
            abort(500, 'Could not create or open ZipArchive.');
        }

        // Add all files from the folder to the zip
        $files = Storage::files('public/uploads_folders/' . $folder->name);

        if ($files) {
            // Add all files from the folder to the zip
            foreach ($files as $file) {
                $zip->addFile(storage_path('app/' . $file), basename($file));
            }
    
            // Close the zip file
            $zip->close();
    
            // Download the zip file
            return response()->download($zipFilePath)->deleteFileAfterSend(true);
        } else {
            // Handle the case where the folder is empty
        
           return redirect()->back()->with('error', 'Empty Folder.');
        }

     
    }
    
    
    
     public function downloadFolder_customer($id)
    {
        $folder = Folder::find($id);

        if (!$folder) {
            abort(404);
        }

        $zipFileName = $folder->name . '.zip';
        $zipFilePath = storage_path('app/public/uploads_folders/' . $zipFileName);

        // Create a new ZipArchive instance
        $zip = new ZipArchive;
        if ($zip->open($zipFilePath, ZipArchive::CREATE) !== true) {
         
            abort(500, 'Could not create or open ZipArchive.');
        }

        // Add all files from the folder to the zip
        $files = Storage::files('public/uploads_folders/' . $folder->name);

        if ($files) {
            // Add all files from the folder to the zip
            foreach ($files as $file) {
                $zip->addFile(storage_path('app/' . $file), basename($file));
            }
    
            // Close the zip file
            $zip->close();
    
            // Download the zip file
            return response()->download($zipFilePath)->deleteFileAfterSend(true);
        } else {
            // Handle the case where the folder is empty
        
           return redirect()->back()->with('error', 'Empty Folder.');
        }

     
    }

    public function shareFolder($id)
    {
       
        $folder = Folder::find($id);

        if (!$folder) {
            abort(404, 'Folder not found');
        }

        // Generate the shareable link
        $shareableLink = route('folder.show', ['id' => $folder->id]);

        dd($shareableLink);

        return view('folder.share', compact('folder', 'shareableLink'));
    }
    
    
     public function shareFolder_customer($id)
    {
       
        $folder = Folder::find($id);

        if (!$folder) {
            abort(404, 'Folder not found');
        }

        // Generate the shareable link
        $shareableLink = route('folder.show', ['id' => $folder->id]);

        dd($shareableLink);

        return view('folder.share', compact('folder', 'shareableLink'));
    }
    
    
}
