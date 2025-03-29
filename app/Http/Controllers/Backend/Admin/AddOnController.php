<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Addons;

class AddOnController extends Controller
{
    public function index()
    {       
        $addons= Addons::latest()->paginate(5);
     
        return view('backend.admin.Addons.addons_limit',compact('addons'));
    }
    
    
  public function get(Request $request)
{
    try {
        
        $paper = Addons::first();

            if ($paper->renaming > $request->totalSubscription) {
               
                 return response()->json(['success' => 'Package limit exceeded'], 200);
            } else {
                
                return response()->json(['success' => 'Package limit not exceeded'], 200);
            }
        

        
        return response()->json(['success' => 'Package Limit']);
    } catch (\Exception $e) {
        // Return an error response if something goes wrong during creation
        return response()->json(['error' => 'Oops! Something went wrong'], 500);
    }
}


  

  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'paper_summary' => 'required',
            'paper_utline_in_bullets' => 'required',
            'paper_abstract' => 'required',
            'turnitin_report' => 'required',
        ]);
    
        try {
            // Create a new record
            // PakageLimit::create($validatedData);

            $Addons =  new Addons;
            $Addons->paper_summary = $request->paper_summary;
            $Addons->paper_utline_in_bullets = $request->paper_utline_in_bullets;
            $Addons->paper_abstract = $request->paper_abstract;
            $Addons->turnitin_report = $request->turnitin_report;
       
          
            $Addons->save();




    
            // Return a success response
            return response()->json(['success' => 'Addons created successfully']);
        } catch (\Exception $e) {
            // Return an error response if something goes wrong during creation
            return response()->json(['error' => 'Oops! Something went wrong'], 500);
        }
    }
  

  

    

    


    public function update(Request $request)
    
    {
            
            $validatedData = $request->validate([
                'paper_summary2' => 'required',
                'paper_utline_in_bullets2' => 'required',
                'tipaper_abstracttle2' => 'required',
                'turnitin_report2' => 'required',
            ]);
        
            try {
                // Create a new record
                $Addons = Addons::findOrFail($request->title_id);
               
                $Addons->paper_summary = $request->paper_summary2;
            $Addons->paper_utline_in_bullets = $request->paper_utline_in_bullets2;
            $Addons->paper_abstract = $request->tipaper_abstracttle2;
            $Addons->turnitin_report = $request->turnitin_report2;
              
                $Addons->save();
        
                // Return a success response
                return response()->json(['success' => 'Addons Update successfully']);
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
        
        
        $paperFormat = Addons::find($id);
    
        if (!$paperFormat) {
            // Pakage Limit not found
            return response()->json(['error' => 'Addons not found'], 404);
        }
    
        $paperFormat->delete();
    
        return response()->json(['success' => 'Addons deleted successfully'], 200);
    }
}
