<?php

namespace App\Http\Controllers\Backend\Admin;
use ZipArchive;
use App\Models\Paper;

use App\Models\Category;
use App\Models\Subject;
use App\Models\Paper_Format;
use App\Models\Term_of_paper;
use App\Models\WordCount;

use Illuminate\Support\Str;
use App\Exports\PaperExport;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Models\Email;
use App\Mail\EmailTemplate;
use Illuminate\Support\Facades\Mail;
use Spatie\PdfToText\Pdf;

class LibrarayController extends Controller
{
   
    
    public function downloadLibraryFiles($id)
    
    {
        
        
        
        
                $user = auth()->user();

        
        try {
            // Fetch the paper record from the database
            $paper = Paper::findOrFail($id);
    
            // Construct file paths
            $filePaths = [
                'summary' => public_path('uploads/html_files/' . $paper->paper_summary),
                'outline' => public_path('uploads/html_files/' . $paper->paper_outline),
                'ai_report' => public_path('uploads/html_files/' . $paper->turnitin_ai_report),
                'plagiarism_report' => public_path('uploads/html_files/' . $paper->turnitin_plg_report),
                'paper' => public_path('uploads/html_files/' . $paper->paper),
            ];
    
            // Log paths for debugging
            \Log::info('File paths retrieved:', $filePaths);
    
            // Verify file existence and collect available files
            $availableFiles = [];
            foreach ($filePaths as $key => $path) {
                if ($path && file_exists($path)) {
                    $availableFiles[$key] = $path;
                } else {
                    \Log::warning("File not found or path is empty: $key with path $path");
                }
            }
    
            // Return an error if no files are available
            if (empty($availableFiles)) {
                \Log::error("No files available for download for paper ID: $id");
                return redirect()->back()->with('error', 'No files available for download.');
            }
    
            // Create a temporary ZIP file
            $zipFileName = 'paper_files_' . $id . '.zip';
            $zipFilePath = storage_path('app/' . $zipFileName);
    
            $zip = new ZipArchive;
            if ($zip->open($zipFilePath, ZipArchive::CREATE) === TRUE) {
                // Add files to the ZIP archive
                foreach ($availableFiles as $key => $file) {
                    $zip->addFile($file, basename($file));
                }
                $zip->close();
            } else {
                return redirect()->back()->with('error', 'Could not create ZIP file.');
            }
    
      // Updated email content
$emailContent = "
    <p>Hi {$user->name},</p>

    <p>Thanks for diving into our extensive library at Writing Space! We’re excited to be part of your academic journey and are here to provide you with the tools you need to excel. It’s great to see you making the most of the resources we offer.</p>

    <p>As you explore the insights and knowledge contained in your downloaded paper, we want to ensure you’re fully informed about how to use these materials responsibly. Please remember, the paper you’ve downloaded is for personal use and study guidance only. It cannot be submitted to any Turnitin repository.</p>

    <p>If you want to verify the authenticity of the paper or check it for originality, you are welcome to use Turnitin’s non-repository service. This way, you can verify that our work maintains the highest standards of academic integrity without the paper being stored in Turnitin’s database.</p>

    <p><strong>A friendly reminder:</strong> Submitting library content as your own is not allowed and violates our terms of service. We take academic honesty very seriously, and breaking this rule could result in severe consequences, including suspension from our services.</p>

    <p>Thank you for choosing Writing Space to support your academic efforts. If you have any questions or need further assistance, feel free to reach out to our support team. We’re here to help you every step of the way!</p>

    <p>Enjoy your academic journey, and let’s make it a successful one!</p>

    <p>Best Regards,<br>
    Customer Success Team<br>
    Writing Space</p>
";


// Send the email
Mail::html($emailContent, function ($message) use ($user) {
    $message->to($user->email)
            ->subject('Thanks for Downloading Your Paper from Writing-Space!');
});

           
           
            return response()->download($zipFilePath)->deleteFileAfterSend(true);
    
        } catch (\Exception $e) {
            \Log::error('An error occurred: ' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }
    
    
    
    
    
    public function exportLibraries()
    {
        $nu = rand(11,999);
        $data = Paper::get();
        if($data->isNotEmpty()){
            return Excel::download(new PaperExport, 'LIBRARIES-LIST-'.$nu.'.xlsx');
        }else{
            return back();
        }
    }

    public function create()
    {
        $subjects = Subject::orderBy('title', 'asc')->get();
        $citations = Paper_Format::orderBy('title', 'asc')->get();
        $paperTypes = Term_of_paper::orderBy('title', 'asc')->get();
        $words = WordCount::get(); 
        return view('backend.admin.libraryManagement.create',compact('subjects','citations','paperTypes','words'));
    }
  
    public function index(Request $request)
    {
        // $papers = Paper::latest()->get();// model paper is libaray model
        $papers = Paper::latest()
                ->when($request->paper_title != null, function ($q) use ($request) {
                    return $q->where('paper_title', $request->paper_title);
                })
                ->when($request->subject_topic != null, function ($q) use ($request) {
                    return $q->where('subject_topic', $request->subject_topic);
                })
                ->when($request->paper_type != null, function ($q) use ($request) {
                    return $q->where('paper_type', $request->paper_type);
                })
                ->when($request->word_count != null, function ($q) use ($request) {
                    return $q->where('word_count', $request->word_count);
                })
                // ->when($request->citation_style != null, function ($q) use ($request) {
                //     return $q->where('citation_style', $request->citation_style);
                // })
                ->get();
 
            // dd($papers);

        return view('backend.admin.libraryManagement.index',compact('papers'));
    }
  
    




    // public function store(Request $request)
    // {   
    //     $request->validate([
    //         'subject_topic' => 'required',
    //         'paper_title' => 'required',
    //         'word_count' => 'required',
    //         'paper_type' => 'required',
    //         'paper_summary' => 'required|mimes:pdf|max:2048',
    //         'paper_outline' => 'required|mimes:pdf|max:2048',
    //         'turnitin_ai_report' => 'required|mimes:pdf|max:2048',
    //         'turnitin_plg_report' => 'required|mimes:pdf|max:2048',
    //         'paper' => 'required|mimes:pdf|max:2048',
    //         'status' => 'required',
    //         'citation' => 'required',
    //     ]);
        
    //     $input = [];
    

       
    //     foreach (['paper_summary', 'paper_outline', 'turnitin_ai_report', 'turnitin_plg_report', 'paper'] as $fileField) {

          
    //         if ($request->hasFile($fileField)) {
    //             $fileFieldInstance = $request->file($fileField);
    //             $extension = $fileFieldInstance->extension();
    //             $fileName = $fileField.'-'.time().'.'.$extension;
    //             $storedPath = $fileFieldInstance->move(public_path('uploads/pdf_files'), $fileName);
              
    //             // Attempt to extract text from PDF
    //             try {
    //                 $htmlContent = Pdf::getText($storedPath);
    //                 dd($htmlContent);
    //                 // Store HTML content
    //                 file_put_contents(public_path('uploads/html_files/'.$fileName.'.html'), $htmlContent);
    
    //                 // Save file name to input array
    //                 $input[$fileField] = $fileName.'.html';
    //             } catch (\Exception $e) {
    //                 // Log or handle the error
    //                 \Log::error("Failed to extract text from PDF: ".$e->getMessage());
                    
    //                 // Optionally, you can return an error message to the user
    //                 return back()->with('error', 'Failed to process PDF file: '.$e->getMessage());
    //             }
    //         }
    //     }
        
    //     $paper = new Paper([
    //         'subject_topic' => $request->input('subject_topic'),
    //         'paper_title' => $request->input('paper_title'),
    //         'word_count' => $request->input('word_count'),
    //         'paper_type' => $request->input('paper_type'),
    //         'citation' => $request->input('citation'),
    //         'paper_summary' => $input['paper_summary'] ?? null,
    //         'paper_outline' => $input['paper_outline'] ?? null,
    //         'turnitin_ai_report' => $input['turnitin_ai_report'] ?? null,
    //         'turnitin_plg_report' => $input['turnitin_plg_report'] ?? null,
    //         'paper' => $input['paper'] ?? null,
    //         'status' => $request->input('status'),
    //     ]);
    
    //     $paper->save();
        
    //     if ($paper) {
    //         return back()->with('success', 'Library created successfully.');
    //     }
    // }
    
    




    public function store(Request $request)
    {   
        // dd($request->all());
        $request->validate([
            'subject_topic' => 'required',
            'paper_title' => 'required',
            'word_count' => 'required',
            'plagiarism' => 'required',
            'ai_report' => 'required',
            'paper_type' => 'required',
            'paper_summary' => 'required|mimes:pdf|max:2048',
            'paper_outline' => 'required|mimes:pdf|max:2048',
            'turnitin_ai_report' => 'required|mimes:pdf|max:2048',
            'turnitin_plg_report' => 'required|mimes:pdf|max:2048',
            'paper' => 'required|mimes:pdf|max:2048',
            'status' => 'required',
            'citation' => 'required',
        ]);
        
        $input = [];

        foreach (['paper_summary', 'paper_outline', 'turnitin_ai_report', 'turnitin_plg_report', 'paper'] as $key => $fileField) {
            if ($request->hasFile($fileField)) {
                $fileFieldInstance = $request->file($fileField);
                $extension = $fileFieldInstance->extension();
                $originalName = $fileFieldInstance->getClientOriginalName();
                $fileName = $fileField.'-'.time().'.'.$extension;
                $storedPath = $fileFieldInstance->move(public_path('uploads/html_files'), $fileName);
                $input[$fileField] = $fileName;
            }
        }
        


        
        $paper = new Paper([
            'subject_topic' => $request->input('subject_topic'),
            'paper_title' => $request->input('paper_title'),
            'word_count' => $request->input('word_count'),
              'ai_report' => $request->ai_report,
            'plagiarism' => $request->plagiarism,
            'paper_type' => $request->input('paper_type'),
            'citation' => $request->input('citation'),
            'paper_summary' => $input['paper_summary'] ?? null,
            'paper_outline' => $input['paper_outline'] ?? null,
            'turnitin_ai_report' => $input['turnitin_ai_report'] ?? null,
            'turnitin_plg_report' => $input['turnitin_plg_report'] ?? null,
            'paper' => $input['paper'] ?? null,
            'status' => $request->input('status'),
        ]);
    
        // Associate the selected category
        // $category = Category::find($request->input('category_id'));
        // $paper->category()->associate($category);
        $paper->save();
        if($paper)
        {
            // return redirect()->route('admin.library.index')->with('success', 'Library created successfully.');
            return back()->with('success', 'Library created successfully.');
        }
    }
    /**
     * Display the specified resource.
     */
    
  
    /**
     * Show the form for editing the specified resource.
     */
    

    public function edit($id, Paper $paper)
    {
        $paper = Paper::findOrFail($id);
        $subjects = Subject::orderBy('title', 'asc')->get();
        $citations = Paper_Format::orderBy('title', 'asc')->get();
        $paperTypes = Term_of_paper::orderBy('title', 'asc')->get();
        $words = WordCount::get(); 

        return view('backend.admin.libraryManagement.edit', compact('paper','subjects','citations','paperTypes','words'));
    }

    public function fileDestroy(Request $request)
    {

        $request->validate([
            'id' => 'required|numeric',
            'filename' => 'required|string',
        ]);

        $paper = Paper::findOrFail($request->id);


        switch ($request->filename) {
            case $paper->paper_summary:
                // Delete or update logic for paper_summary
                $paper->update(['paper_summary' => null]);
                break;
            case $paper->paper_outline:
                // Delete or update logic for paper_outline
                Storage::delete('uploads/html_files/' . $paper->paper_outline);
                $paper->update(['paper_outline' => null]);
                break;
            case $paper->turnitin_ai_report:
                // Delete or update logic for turnitin_ai_report
                Storage::delete('uploads/html_files/' . $paper->turnitin_ai_report);
                $paper->update(['turnitin_ai_report' => null]);
                break;
            case $paper->turnitin_plg_report:
                // Delete or update logic for turnitin_plg_report
                Storage::delete('uploads/html_files/' . $paper->turnitin_plg_report);
                $paper->update(['turnitin_plg_report' => null]);
                break;
            case $paper->paper:
                // Delete or update logic for paper
                Storage::delete('uploads/html_files/' . $paper->paper);
                $paper->update(['paper' => null]);
                break;
            default:
                return response()->json(['success' => false, 'message' => 'File not found', 'paper' => $paper]);
        }
        return response()->json(['success' => true, 'message' => 'File deleted successfully']);
    }



    public function update(Request $request, $id)
    {
        // dd($request->all());
        $request->validate([
            'subject_topic' => 'required',
            'paper_title' => 'required',
            'word_count' => 'required',
            'paper_type' => 'required',
            'citation' => 'required',
            'status' => 'required',
        ]);

       
        // Find the existing Paper instance
        $paper = Paper::findOrFail($id);

        $input = [];

        // foreach (['paper_summary', 'paper_outline','turnitin_ai_report','turnitin_plg_report','paper'] as $fileField) {
        //     if ($request->hasFile($fileField)) {
        //         $fileFieldInstance = $request->file($fileField);
        //         $extension = $fileFieldInstance->extension();
        //         $fileName = Str::uuid() . '.' . $extension;
        //         $storedPath = $fileFieldInstance->storeAs('uploads/html_files', $fileName);
        //         $input[$fileField] = $fileName;
        //     }
        // }
        foreach (['paper_summary', 'paper_outline', 'turnitin_ai_report', 'turnitin_plg_report', 'paper'] as $key => $fileField) {
            if ($request->hasFile($fileField)) {
                $fileFieldInstance = $request->file($fileField);
                $extension = $fileFieldInstance->extension();
                $originalName = $fileFieldInstance->getClientOriginalName();
                $fileName = $fileField.'-'.time().'.'.$extension;
                $storedPath = $fileFieldInstance->move(public_path('uploads/html_files'), $fileName);
                $input[$fileField] = $fileName;
            }
        }


        // Update the Paper instance
        $paper->update([
            'subject_topic' => $request->input('subject_topic'),
            'paper_title' => $request->input('paper_title'),
            'word_count' => $request->input('word_count'),
            'paper_type' => $request->input('paper_type'),
            'citation' => $request->input('citation'),
            'ai_report' => $request->ai_report,
            'plagiarism' => $request->plagiarism,
            'paper_summary' => $input['paper_summary'] ?? $paper->paper_summary,
            'paper_outline' => $input['paper_outline'] ?? $paper->paper_outline,
            'turnitin_ai_report' => $input['turnitin_ai_report'] ?? $paper->turnitin_ai_report,
            'turnitin_plg_report' => $input['turnitin_plg_report'] ?? $paper->turnitin_plg_report,
            'paper' => $input['paper'] ?? $paper->paper,
            'status' => $request->input('status'),
        ]);

        // // Check if 'status' is set before trying to access it
        // if ($request->has('status')) {
        //     $paper->status = $request->input('status');
        // }

        // // Associate the selected category
        // $category = Category::find($request->input('category_id'));
        // $paper->category()->associate($category);

        // Save the updated Paper instance
        $paper->save();
        return back()->with('success', 'Paper updated successfully.');
    }

  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $paper = Paper::find($id);
        if ($paper) {
            File::delete(public_path('uploads/html_files/' . $paper->paper_summary));
            File::delete(public_path('uploads/html_files/' . $paper->paper_outline));
            File::delete(public_path('uploads/html_files/' . $paper->turnitin_ai_report));
            File::delete(public_path('uploads/html_files/' . $paper->turnitin_plg_report));
            File::delete(public_path('uploads/html_files/' . $paper->paper));
            $paper->delete();
            return redirect()->route('admin.library.index')->with('success', 'Record and associated files deleted successfully.');
        }

        return redirect()->route('admin.library.index')->with('error', 'Record not found.');
    }

}
