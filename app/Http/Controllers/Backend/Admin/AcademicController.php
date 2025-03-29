<?php

namespace App\Http\Controllers\Backend\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Academic_level;




class AcademicController extends Controller
{
    public function index()
    {       
        $papers= Academic_level::latest()->get();
     
        return view('backend.admin.AcademicLevel.academic_level',compact('papers'));
                   
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'title' => 'required',
        ]);

     
    
        try {
            // Create a new record
            Academic_level::create($validatedData);
    
            // Return a success response
            return response()->json(['success' => 'Academic created successfully']);
        } catch (\Exception $e) {
            // Return an error response if something goes wrong during creation
            return response()->json(['error' => 'Oops! Something went wrong'], 500);
        }
    }
  

  

    

    


    public function update(Request $request)
    
    {
            
            $validatedData = $request->validate([
                'title' => 'required',
            ]);
        
            try {
                // Create a new record
                $paperFormat = Academic_level::findOrFail($request->title_id);
                $paperFormat->update($validatedData);
        
                // Return a success response
                return response()->json(['success' => 'Academic Update successfully']);
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
        $paperFormat = Academic_level::find($id);
    
        if (!$paperFormat) {
            // Paper format not found
            return response()->json(['error' => 'Academic not found'], 404);
        }
    
        $paperFormat->delete();
    
        return response()->json(['success' => 'Academic deleted successfully'], 200);
    }
}
