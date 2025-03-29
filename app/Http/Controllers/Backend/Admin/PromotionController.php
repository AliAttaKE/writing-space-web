<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use App\Models\Promotion;
use Illuminate\Http\Request;

class PromotionController extends Controller
{
    public function index()
    {       
        $promotions= Promotion::latest()->get();
        return view('backend.admin.promotion.index',compact('promotions'));
    }
  
    public function create()
    {       
        return view('backend.admin.promotion.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'coupon'            => 'required',
            'discount'          => 'required',
            'start_date'        => 'required',
            'end_date'          => 'required',
            'decrease_everyday' => 'required|array',
            'title'             => 'required',
            'description'       => 'required',
            'status'            => 'required',
        ]);
        
        $validatedData['decrease_everyday'] = json_encode($validatedData['decrease_everyday']);
        Promotion::create($validatedData);
        return redirect()->back();
    }
  
    public function edit($id)
    {   
        $promotion = Promotion::findOrFail($id);
        return view('backend.admin.promotion.edit', compact('promotion'));
    }
  
    public function update(Request $request, $id)
    {      
        $validatedData = $request->validate([
            'coupon'            => 'required',
            'discount'          => 'required',
            'start_date'        => 'required',
            'end_date'          => 'required',
            'decrease_everyday' => 'required|array',
            'title'             => 'required',
            'description'       => 'required',
            'status'            => 'required',
        ]);
        
        try {
            $coupon = Promotion::findOrFail($id);
            $validatedData['decrease_everyday'] = json_encode($validatedData['decrease_everyday']);
            $coupon->update($validatedData);
            return redirect()->back();
        } catch (\Exception $e) {
            return redirect()->back();
        }
                
    }
    public function destroy($id)
    {
        $coupon = Promotion::find($id);
        if (!$coupon) {
            return response()->json(['error' => 'Promotion format not found'], 404);
        }
        $coupon->delete();
        return response()->json(['success' => 'Promotion  format deleted successfully'], 200);
    }



   
}

