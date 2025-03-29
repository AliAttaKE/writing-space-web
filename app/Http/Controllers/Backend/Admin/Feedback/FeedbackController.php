<?php

namespace App\Http\Controllers\Backend\Admin\Feedback;

use App\Models\Feedback;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FeedbackController extends Controller
{
    public function index()
    {
         $feedbacks = Feedback::latest()->get();
          //$feedbacks = Feedback::latest()->paginate(5);
    
        // dd($feedbacks);
        return view('backend.admin.feedbackManage.index', compact('feedbacks'));
    }

    public function destroy(Feedback $feedback)
    {
        $feedback->delete();
        return back()->with('success', 'Deleted successfully!');
    }
}
