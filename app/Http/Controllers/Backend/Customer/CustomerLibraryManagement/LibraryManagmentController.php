<?php

namespace App\Http\Controllers\Backend\Customer\CustomerLibraryManagement;

use App\Models\Paper;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Subject;
use App\Models\Paper_Format;
use App\Models\Term_of_paper;
use App\Models\WordCount;

class LibraryManagmentController extends Controller
{
    public function showLibrary(Request $request)
    {
        $query = Paper::where('status', 'Enable');
        
        $subject = $request->get('subject');
        $termOption = $request->get('termOption');
        $wordCount = $request->get('wordCount');
        $citation = $request->get('citation');

        if (!empty($subject)) {
            $query->where('subject_topic', $subject);
        }
        if (!empty($termOption)) {
            $query->where('paper_type', $termOption);
        }
        if (!empty($wordCount)) {
            $query->where('word_count', $wordCount);
        }
        if (!empty($citation)) {
            $query->where('citation', $citation);
        }


        $libraries = $query->latest()->get();



        return view('backend.customer.libraryManagement.index', compact('libraries', 'subject', 'termOption', 'wordCount', 'citation'));
    }


}
