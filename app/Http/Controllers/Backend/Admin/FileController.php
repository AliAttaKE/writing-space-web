<?php

namespace App\Http\Controllers\Backend\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\File;
use App\Models\Folder;
use DB;
use Illuminate\Support\Facades\Storage;
use ZipArchive;
use App\Models\FileChatGPT;
use App\Models\Orders;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Models\Email;
use App\Models\User;

class FileController extends Controller
{
    public function updateStatus(Request $request)
    {

        // Validate the incoming request
        $request->validate([
            'selectedProducts' => 'required|array',
            'selectedProducts.*' => 'exists:file_chat_g_p_t_s,id',
            'status' => 'required|boolean',
        ]);

        // Update the status of selected products
        FileChatGPT::whereIn('id', $request->selectedProducts)
               ->update(['status' => $request->status]);

        // Optionally, you can redirect the user after successful update
        return redirect(config('app.url').'/admin/order/file')->with('success', 'Status updated successfully.');
    }


    public function view_file_order_by_chatgpt(Request $request)
    {
        $files = FileChatGPT::get();
        return view('backend.admin.File.file_chatgpt_show', compact('files'));
    }



 public function order_file_change_status(Request $request)
{
    $fileId = $request->input('fileId');
    $currentStatus = $request->input('currentStatus');

    $file = FileChatGPT::find($fileId);

    if (!$file) {
        return response()->json(['error' => 'File not found'], 404);
    }

    // Toggle status
    $file->status = $currentStatus == 0 ? 1 : 0;
    $file->save();

    $orderId = $file->order_id;
    $order = Orders::find($orderId);

    if (!$order) {
        return response()->json(['error' => 'Order not found'], 404);
    }

    $user = User::find($order->user_id);

    if (!$user) {
        return response()->json(['error' => 'User not found'], 404);
    }

    if ($file->status == 1) {
        Orders::where('order_id', $orderId)->update(['order_status' => 'Delivered']);

      $emailSubject = 'Good News: Your Order ID ' . $orderId . ' Has Been Delivered!';
$emailContent = "
    <p>Hi {$user->name},</p>
    <p>We are pleased to announce that your order ID {$orderId} has been delivered! You can now download and access your materials through your Writing Space dashboard.</p>
    <p><strong>What’s Next?</strong></p>
    <ul>
        <li>We hope you find everything to your satisfaction. Please review your delivered materials in this order’s details page and let us know if there are any issues or further assistance needed.</li>
        <li>If you’d like any small adjustments, you can post a free revision within 7 days and we’ll be happy to help.</li>
    </ul>
    <p>Thank you for trusting us with your academic needs. We look forward to serving you again!</p>
    <p>Best regards,<br>Customer Success Team<br>Writing Space</p>";


        Mail::html($emailContent, function ($message) use ($user, $emailSubject) {
            $message->to($user->email)->subject($emailSubject);
        });
    }

    return response()->json(['message' => 'Status changed successfully'], 200);
}




    public function sharefile($id, $folder_name)
    {

        $files = File::find($id);
        $folder_name = $folder_name;

        return view('backend.admin.File.file_view_print',compact('files','folder_name'));
    }



    public function sharefile_customer($id, $folder_name)
    {

        $files = File::find($id);
        $folder_name = $folder_name;
        // dd($folder_name);
        return view('backend.admin.File.file_view_print_customer',compact('files','folder_name'));
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
           return "Empty Folder.";
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
           return "Empty Folder.";
        }


    }


    public function downloadfile($id, $folder_name)
    {
        $files = File::find($id);

        if (!$files) {
            abort(404);
        }

        $filePath = storage_path('app/public/uploads_folders/'.$folder_name.'/'.$files->file_name);
        $updatetime  = File::where('id',$id)->update(['download_time' => now()]);

        return response()->download($filePath);

    }

    public function downloadfile_all(Request $request, $folder_name)
    {
        $fileIds = $request->input('selected_ids');

        // dd($request->all(), $fileIds);
            $filePaths = [];
            if ($request->has('delete') && $request->input('delete') === 'yes') {
                foreach ($fileIds as $fileId) {
                    $file = File::findOrFail($fileId);

                    if (!$file) {
                        abort(404);
                    }
                    $filePath = 'public/uploads_folders/'.$folder_name.'/'.$file->file_name;
                    Storage::delete($filePath);
                    $file->delete();
                }


                return back()->with('success', 'Successfully deleted');
            }




        if ($request->has('download') && $request->input('download') === 'yes') {

            foreach ($fileIds as $fileId) {
                $file->update(['download_time' => now()]);
                $filePath = storage_path('app/public/uploads_folders/'.$folder_name.'/'.$file->file_name);
                $filePaths[] = $filePath;

            }

            $zipFile = storage_path('app/public/'.$folder_name.'.zip');
            $zip = new \ZipArchive();
            $zip->open($zipFile, \ZipArchive::CREATE | \ZipArchive::OVERWRITE);

            foreach ($filePaths as $filePath) {
                $zip->addFile($filePath, basename($filePath));
            }
            $zip->close();
            return response()->download($zipFile)->deleteFileAfterSend(true);
        }
    }

    public function downloadfile_customer_all(Request $request,$folder_name)
    {
        $fileIds = $request->input('selectedIds');

        // dd($request->all(), $fileIds);
            $filePaths = [];
            if ($request->has('delete') && $request->input('delete') === 'yes') {
                foreach ($fileIds as $fileId) {
                    $file = File::findOrFail($fileId);

                    if (!$file) {
                        abort(404);
                    }
                    $filePath = 'public/uploads_folders/'.$folder_name.'/'.$file->file_name;
                    Storage::delete($filePath);
                    $file->delete();
                }


                return back()->with('success', 'Successfully deleted');
            }




        if ($request->has('download') && $request->input('download') === 'yes') {

            foreach ($fileIds as $fileId) {
                $file = File::findOrFail($fileId);
                $file->update(['download_time' => now()]);
                $filePath = storage_path('app/public/uploads_folders/'.$folder_name.'/'.$file->file_name);
                $filePaths[] = $filePath;

            }

            $zipFile = storage_path('app/public/'.$folder_name.'.zip');
            $zip = new \ZipArchive();
            $zip->open($zipFile, \ZipArchive::CREATE | \ZipArchive::OVERWRITE);

            foreach ($filePaths as $filePath) {
                $zip->addFile($filePath, basename($filePath));
            }
            $zip->close();
            return response()->download($zipFile)->deleteFileAfterSend(true);
        }

    }
    // public function downloadfile_customer_all(Request $request, $id, $folder_name)
    // {
    //     $fileIds = explode(',', $request->input('seleted_ids'));

    //     // dd($request->all(), $fileIds);

    //     $filePaths = [];
    //     foreach ($fileIds as $fileId) {

    //         $file = File::findOrFail($fileId);

    //         if (!$file) {
    //             abort(404);
    //         }

    //         if ($request->has('delete') && $request->input('delete') === 'yes') {
    //             $filePath = 'public/uploads_folders/'.$folder_name.'/'.$file->file_name;
    //             Storage::delete($filePath);
    //             $file->delete();
    //             return back()->with('success', 'File deleted successfully');
    //         }

    //         $file->update(['download_time' => now()]);
    //         $filePath = storage_path('app/public/uploads_folders/'.$folder_name.'/'.$file->file_name);
    //         $filePaths[] = $filePath;
    //     }

    //     if ($request->has('download') && $request->input('download') === 'yes') {
    //         $zipFile = storage_path('app/public/'.$folder_name.'.zip');
    //         $zip = new \ZipArchive();
    //         $zip->open($zipFile, \ZipArchive::CREATE | \ZipArchive::OVERWRITE);

    //         foreach ($filePaths as $filePath) {
    //             $zip->addFile($filePath, basename($filePath));
    //         }
    //         $zip->close();
    //         return response()->download($zipFile)->deleteFileAfterSend(true);
    //     }
    // }

    public function downloadfile_customer($id, $folder_name)
    {
        $files = File::find($id);

        if (!$files) {
            abort(404);
        }

        $filePath = storage_path('app/public/uploads_folders/'.$folder_name.'/'.$files->file_name);
        $updatetime  = File::where('id',$id)->update(['download_time' => now()]);

        return response()->download($filePath);

    }
    public function completedOrderFileDownload($order_id = null, $file_id = null)
    {
        $order = Orders::where('order_id', $order_id)->first();
        $file = FileChatGPT::findOrFail($file_id);
        $folder_name = $order->order_id;
        // dd($file, $order);

        if (!$file) {
            abort(404);
        }

      //  $filePath = storage_path('app/public/completed_by_writer/'.$folder_name.'/'.$file->file_name);

      $filePath = storage_path('app/public/'.$file->file_path);
      $updatetime  = FileChatGPT::where('order_id', $order_id)->update(['download_time' => now() ]);

        return response()->download($filePath);

    }



    public function deletefile($id, $folder_name)
    {


        $files = File::find($id);

        if (!$files) {
            abort(404);
        }

        $filePath = 'public/uploads_folders/'.$folder_name.'/'.$files->file_name;
        Storage::delete($filePath);
        $files->delete();

        return response()->json(['message' => 'File deleted successfully']);
    }



    public function deletefile_customer($id, $folder_name)
    {

        $files = File::find($id);

        if (!$files) {
            abort(404);
        }

        $filePath = 'public/uploads_folders/'.$folder_name.'/'.$files->file_name;

        // Delete the file from storage
        Storage::delete($filePath);

        // Optionally, you can also delete the record from the database
        $files->delete();

        return response()->json(['message' => 'File deleted successfully']);
    }

    public function deletefile_admin($id, $folder_name)
    {
        dd('ok');
        $files = File::find($id);
        if (!$files) {
            abort(404);
        }

        $filePath = 'public/uploads_folders/'.$folder_name.'/'.$files->file_name;

        // Delete the file from storage
        Storage::delete($filePath);

        // Optionally, you can also delete the record from the database
        $files->delete();

        return response()->json(['message' => 'File deleted successfully']);
    }


    public function view($id)
    {

        // Fetch the folder with the given ID
        $folder = Folder::find($id);

             $files = DB::table('folders')
        ->join('files', 'folders.id', '=', 'files.folder_id')
        ->select('files.*')
        ->latest('files.created_at')
        ->where('folders.id', $folder->id)
        ->paginate(5);


        $filesCount = $files->total();


        $totalSize = 0;
        foreach ($files as $file) {
            $totalSize += $file->total_size;
        }


        $units = ['B', 'KB', 'MB', 'GB', 'TB'];

        for ($i = 0; $totalSize >= 1024 && $i < count($units) - 1; $i++) {
            $totalSize /= 1024;
        }

        $formattedSize = round($totalSize, 0) . ' ' . $units[$i];
        if (!$folder) {
            return abort(404);
        }
        return view('backend.admin.File.file_show', compact('folder','files','filesCount','formattedSize','id'));
    }

    public function view_all(Request $request, $id)
    {
        $fileIds = $request->input('selected_ids');
        // dd($request->all());
        if ($request->has('delete') && $request->input('delete') === 'yes') {
            $folder = Folder::findOrFail($id);
            $files = DB::table('folders')
                ->join('files', 'folders.id', '=', 'files.folder_id')
                ->select('files.*')
                ->latest('files.created_at')
                ->where('folders.id', $folder->id)
                ->get();

            foreach ($files as $file) {
                $fileModel = File::findOrFail($file->id);
                if (!$fileModel) {
                    abort(404);
                }
                $filePath = 'public/uploads_folders/' . $folder->name . '/' . $fileModel->file_name;
                Storage::delete($filePath);
                $fileModel->delete();
            }

            return back()->with('success', 'Successfully deleted');
        }

        if ($request->has('download') && $request->input('download') === 'yes'){
            $folder = Folder::findOrFail($id);
            $files = File::where('folder_id', $folder->id)->get();

            $filePaths = [];
            foreach ($files as $file) {
                $file->update(['download_time' => now()]);
                $filePath = storage_path('app/public/uploads_folders/' . $folder->name . '/' . $file->file_name);
                if (file_exists($filePath)) {
                    $filePaths[] = $filePath;
                } else {
                    return back()->with('error', 'File not found: ' . $filePath);
                }
            }

            $zipFile = storage_path('app/public/' . $folder->name . '.zip');
            $zip = new \ZipArchive();
            if ($zip->open($zipFile, \ZipArchive::CREATE | \ZipArchive::OVERWRITE) === true) {
                foreach ($filePaths as $filePath) {
                    $zip->addFile($filePath, basename($filePath));
                }
                $zip->close();
                return response()->download($zipFile)->deleteFileAfterSend(true);
            } else {
                return back()->with('error', 'Failed to create zip archive');
            }
        }

    }

  public function view_customer_all(Request $request, $id)
    {

        $fileIds = $request->input('selected_ids');
        // dd($request->all());
        if ($request->has('delete') && $request->input('delete') === 'yes') {
            $folder = Folder::findOrFail($id);
            $files = DB::table('folders')
                ->join('files', 'folders.id', '=', 'files.folder_id')
                ->select('files.*')
                ->latest('files.created_at')
                ->where('folders.id', $folder->id)
                ->get();

            foreach ($files as $file) {
                $fileModel = File::findOrFail($file->id);
                if (!$fileModel) {
                    abort(404);
                }
                $filePath = 'public/uploads_folders/' . $folder->name . '/' . $fileModel->file_name;
                Storage::delete($filePath);
                $fileModel->delete();
            }

            return back()->with('success', 'Successfully deleted');
        }

        if ($request->has('download') && $request->input('download') === 'yes'){
            $folder = Folder::findOrFail($id);
            $files = File::where('folder_id', $folder->id)->get();

            $filePaths = [];
            foreach ($files as $file) {
                $file->update(['download_time' => now()]);
                $filePath = storage_path('app/public/uploads_folders/' . $folder->name . '/' . $file->file_name);
                if (file_exists($filePath)) {
                    $filePaths[] = $filePath;
                } else {
                    return back()->with('error', 'File not found: ' . $filePath);
                }
            }

            $zipFile = storage_path('app/public/' . $folder->name . '.zip');
            $zip = new \ZipArchive();
            if ($zip->open($zipFile, \ZipArchive::CREATE | \ZipArchive::OVERWRITE) === true) {
                foreach ($filePaths as $filePath) {
                    $zip->addFile($filePath, basename($filePath));
                }
                $zip->close();
                return response()->download($zipFile)->deleteFileAfterSend(true);
            } else {
                return back()->with('error', 'Failed to create zip archive');
            }
        }



        // return view('backend.admin.File.file_show_customer', compact('folder','files','filesCount','formattedSize','id'));
    }
  public function view_customer($id)
    {

        $folder = Folder::findOrFail($id);
        if(!$folder)
        {
            abort(404);
        }
        $files = DB::table('folders')
            ->join('files', 'folders.id', '=', 'files.folder_id')
            ->select('files.*')
            ->latest('files.created_at')
            ->where('folders.id', $folder->id)
            ->get();
        $filesCount = count($files);
        $totalSize = 0;
        foreach ($files as $file) {
           //echo $file->total_size . "<br>";
            $totalSize += $file->total_size;
        }
        //dd($totalSize);
        $units = ['B', 'KB', 'MB', 'GB', 'TB'];
        for ($i = 0; $totalSize >= 1024 && $i < count($units) - 1; $i++) {
            $totalSize /= 1024;
        }

        $formattedSize = round($totalSize, 0) . ' ' . $units[$i];
        return view('backend.admin.File.file_show_customer', compact('folder','files','filesCount','formattedSize','id'));
    }


    public function upload(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:pdf,doc,docx,txt,rtf,xlsx,csv,pptx,jpg,jpeg,png,gif|max:512000',
        ], [
            'file.max' => 'The file size must not exceed 500 MB.',
        ]);
        $file = $request->file('file');



        $size = $file->getSize();
        $sizetotal = $file->getSize();

        $units = ['B', 'KB', 'MB', 'GB', 'TB'];

        for ($i = 0; $size >= 1024 && $i < count($units) - 1; $i++) {
            $size /= 1024;
        }

        $formattedSize = round($size, 0) . ' ' . $units[$i];








        $originalName = $file->getClientOriginalName();
        $extension = $file->getClientOriginalExtension();

        // Generate a unique filename to store the file
        $fileName = time() . '_' . Str::random(10) . '.' . $extension;

        // Store the file in the desired folder
        $filePath = $file->storeAs('public/uploads_folders/' . $request->folder_name, $fileName);


        $fileModel = new File();
        $fileModel->file_name = $fileName;
        $fileModel->title = $originalName;
        $fileModel->Writer = $request->Writer;
        $fileModel->file_path = $filePath;
        $fileModel->folder_id = $request->folder_id;
        $fileModel->Size = $formattedSize;
        $fileModel->total_size = $sizetotal;
        $fileModel->file_type = $file->getClientOriginalExtension();
        $fileModel->save();

        return redirect()->back()->with('success', 'File uploaded successfully.');
    }



    public function upload_customer(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'file' => 'required|mimes:pdf,doc,docx,txt,rtf,xlsx,csv,pptx,jpg,jpeg,png,gif|max:512000',
        ], [
            'file.max' => 'The file size must not exceed 500 MB.',
        ]);



        $file = $request->file('file');
        $originalName = $file->getClientOriginalName();
        $extension = $file->getClientOriginalExtension();


        $fileName = time() . '_' . Str::random(10) . '.' . $extension;


        $filePath = $file->storeAs('public/uploads_folders/' . $request->folder_name, $fileName);


        $size = $file->getSize();
        $formattedSize = $this->formatSizeUnits($size);



        // Save file details to database
        $fileModel = new File();
        $fileModel->file_name = $fileName;
        $fileModel->title = $originalName;
        $fileModel->writer = $request->Writer; // Adjust this based on your actual field name
        $fileModel->file_path = $filePath;
        $fileModel->folder_id = $request->folder_id; // Adjust this based on your actual field name
        $fileModel->size = $formattedSize;
        $fileModel->total_size = $size; // Store the original size if needed
        $fileModel->file_type = $extension; // Store the file extension
        $fileModel->save();

        // Redirect back with success message
        return back()->with('success', 'File uploaded successfully.');
    }

    // Helper function to format file size
    private function formatSizeUnits($bytes)
    {
        $units = ['B', 'KB', 'MB', 'GB', 'TB'];
        $i = floor(log($bytes, 1024));
        return round($bytes / (1024 ** $i), 2) . ' ' . $units[$i];
    }




}
