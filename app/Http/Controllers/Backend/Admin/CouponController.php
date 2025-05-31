<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Models\Coupon;
use App\Http\Controllers\Controller;
use App\Models\Coupon_Used;
use Carbon\Carbon;
use App\Models\Promotion;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    public function index()
    {
        $coupons = Coupon::latest()->get();
        return view('backend.admin.Coupon.coupon', compact('coupons'));
            
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'code' => 'required',
            'discount' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'discount_value' => 'required',
            'per_user_use' => 'required',
            'total_user' => 'required',
            'min_pages' => 'required',
            'Active' => 'required',
        ]);

        Coupon::create($validatedData);
        // return $this->index();
        return redirect()->route('admin.coupons.index');
    }









    public function update(Request $request)
    {

        $request->validate([
            'code' => 'required',
            'discount' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
             'Active' => 'required',
        ]);

        try {
            $coupon = Coupon::findOrFail($request->titleid);
            $coupon->update($request->all());
            return back()->with('success', 'Coupon updated successfully');
            // return response()->json(['success' => 'Coupon  format Update successfully']);
        } catch (\Exception $e) {
            return back()->with('error', 'Something went wrong');
            // return response()->json(['error' => 'Oops! Something went wrong'], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $coupon = Coupon::find($id);

        if (!$coupon) {
            // Paper format not found
            return response()->json(['error' => 'Coupon format not found'], 404);
        }

        $coupon->delete();

        return response()->json(['success' => 'Coupon  format deleted successfully'], 200);
    }



    public function coupon_check(Request $request)
    {

        
        $coupon = Coupon::where('code', $request->coupon)->first();
        if ($coupon) {
            if ($coupon->start_date <= Carbon::now() &&  $coupon->end_date >= Carbon::now()) {
                $coupon_total = Coupon_Used::where('coupon', '=', $request->coupon)->distinct()->get();
                if ($coupon_total->count() >= $coupon->total_user) {
                    return response()->json(['error' => 'Coupon exceed total user limit'], 400);
                } else {
                    $coupon_user = Coupon_Used::where('coupon', '=', $request->coupon)->where('user_id', '=', Auth()->user()->id)->get();

                    if ($request->nopage < $coupon->min_pages) {
                        
                        return response()->json([
                            'error' => "Minimum Required Pages for this Coupon is: {$coupon->min_pages}."
                        ], 400);
                        
                        

                    } else {
                        if ($coupon_user->count() >= $coupon->per_user_use) {
                            return response()->json(['error' => 'Coupon already used'], 400);
                        } else {
                                                       return response()->json(['success' => 'Coupon applied successfully.', 'coupon' => $coupon], 200);
                        }
                    }
                  
                }
            } else {
                return response()->json(['error' => 'Coupon Found but not available right now'], 400);
            }
        } else {
            return response()->json(['error' => 'Coupon not found'], 404);
        }
    }
    // public function check_coupon(Request $request)
    // {


    //     $coupon = $request->coupon;
    //     $promotion = Promotion::where('coupon', $coupon)->first();




    //     $endDateTimestamp = strtotime($promotion->end_date);


    //     $currentTimestamp = time();

    //     if ($currentTimestamp <= $endDateTimestamp) {



    //         return response()->json(['error' => 'The promotion has ended'], 404);
    //     } else {


    //         return $promotion;
    //         return response()->json(['success' => 'The promotion is still ongoing or ends today', 'coupon' => $promotion], 200);



    //         if ($promotion) {
    //             return response()->json(['success' => 'Coupon avail successfully', 'coupon' => $promotion], 200);
    //         } else {
    //             return response()->json(['error' => 'Coupon not found'], 404);
    //         }
    //     }
    // }

    public function check_coupon(Request $request)
{
    $coupon = $request->coupon;
    $promotion = Promotion::where('coupon', $coupon)->first();

    // Check if the promotion exists
    if (!$promotion) {
        return response()->json(['error' => 'Coupon not found'], 404);
    }

    // Get the end date of the promotion
    $endDateTimestamp = strtotime($promotion->end_date);
    $currentTimestamp = time();

    // Check if the promotion has ended
    if ($currentTimestamp > $endDateTimestamp) {
        return response()->json(['error' => 'The promotion has ended'], 404);
    }

    

    // If the promotion is valid
    return response()->json(['success' => 'Coupon available successfully', 'coupon' => $promotion], 200);
}

}
