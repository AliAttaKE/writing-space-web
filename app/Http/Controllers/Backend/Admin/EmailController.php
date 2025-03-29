<?php

namespace App\Http\Controllers\Backend\Admin;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator;

use App\Models\Email;
use App\Models\Email_Type;


class EmailController extends Controller
{ 
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('backend.emails.create');
    }
  
    public function index()
    {
        $emails = Email::latest()->get();
        $emailTypes = Email_Type::get();
        foreach ($emailTypes as $emailtype){
            $emailtype['title'] = strtolower(str_replace(' ', '_', $emailtype['title']));
        }

        return view('backend.admin.emailAutomation.index',compact('emails','emailTypes'));
    }
  
    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
       
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
            'image' => 'nulllable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'type'=>'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()->first()]);
        }

        $input = $request->all();
        $input['type'] = strtolower(str_replace(' ', '_', $input['type']));

        if ($image = $request->file('image')) {
            $destinationPath = 'images/emails';
            $emailTempImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $emailTempImage);
            $input['image'] = "$emailTempImage";
        }

        $emails = Email::create($input);

        if ($emails) {
            return response()->json(['success' => 'Email template created successfully!', 'emails' => $emails]);
        } else {
            return response()->json(['error' => 'Something went wrong!2']);
        }
    }

  
    /**
     * Display the specified resource.
     */
    public function show(Email $email): View
    {
        return view('backend.emails.show',compact('email'));
    }
  
    public function edit($id)
    {
        $email = Email::find($id);
        $emailTypes = Email_Type::get();
        if ($email) {
            return response()->json(['success' => 'Email template created successfully!', 'email' => $email, 'emailTypes' => $emailTypes]);
        } else {
            return response()->json(['error' => 'Something went wrong!']);
        }
    }
    
    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Allow image to be nullable
        ]);
    
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()->first()]);
        }
    
        $email = Email::find($request->id);
    
        if ($email) {
            $oldImagePath = public_path('images/emails/' . $email->image);
    
            $input = $request->all();
    
            if ($request->hasFile('image')) {
                // Upload new image
                $destinationPath = 'images/emails';
                $newImage = $request->file('image');
                $newImageName = date('YmdHis') . '.' . $newImage->getClientOriginalExtension();
                $newImage->move($destinationPath, $newImageName);
    
                $input['image'] = $newImageName;
 
                if (File::exists($oldImagePath)) {
                    File::delete($oldImagePath);
                }
            }
           

            $email->update($input);
            return response()->json(['success' => 'Email template updated successfully!', 'email' => $email]);
        }
    
        return response()->json(['error' => 'Email template not found']);
    }
    
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): RedirectResponse
    {
        $email = Email::find($id);
        if ($email) {
            File::delete(public_path('images/emails/' . $email->image));
            $email->delete();
            return redirect()->route('admin.emails.index')->with('success', 'Email deleted successfully.');
        }

        return redirect()->route('admin.emails.index')->with('error', 'Email template not found.');

        
}

         
        
}
     



