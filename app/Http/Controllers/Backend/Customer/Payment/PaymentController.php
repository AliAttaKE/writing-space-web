<?php

namespace App\Http\Controllers\Backend\Customer\Payment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function make_payment(Request $request){
        //$input=$request->all();
        $input=$request->paginate(5);
        
        return response()->json(['success' => true,'message'=>$input]);
    }
}
