<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use App\Models\Email_Type;
use Illuminate\Http\Request;

class Email_TypeController extends Controller
{
    public function index()
    {       
        $papers= Email_Type::latest()->get();
        return view('backend.admin.EmailType.email_type',compact('papers'));         
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
        ]);
        
        $input = $request->all();
       
    
        try {
        $data =  Email_Type::create($input);
            return response()->json(['success' => 'Email Type created successfully']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Oops! Something went wrong'], 500);
        }
    }
 
    public function update(Request $request)
    {
        dd($request->all());
        $validatedData = $request->validate([
            'name' => 'required',
        ]);
    
        try {
            $paperFormat = Email_Type::findOrFail($request->title_id);
            $input['title'] = strtolower(str_replace(' ', '_', $input['type']));
            $paperFormat->update($validatedData);
    
            // Return a success response
            return response()->json(['success' => 'Paper format Update successfully']);
        } catch (\Exception $e) {
            // Return an error response if something goes wrong during creation
            return response()->json(['error' => 'Oops! Something went wrong'], 500);
        }

                
    }





  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $paperFormat = Email_Type::find($id);
    
        if (!$paperFormat) {
            // Paper format not found
            return response()->json(['error' => 'Paper format not found'], 404);
        }
    
        $paperFormat->delete();
    
        return response()->json(['success' => 'Paper format deleted successfully'], 200);
    }
}
