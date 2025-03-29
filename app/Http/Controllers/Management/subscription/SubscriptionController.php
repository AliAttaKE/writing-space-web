<?php

namespace App\Http\Controllers\Management\subscription;
use App\Http\Controllers\Controller;
use App\Models\Management\subscription\subscriptionpivot;
use App\Models\Management\subscription\subscription;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {



        $this->validate($request,[

            'name' => 'required',
//            'slug' => 'required',
            'description' => 'required',
            'actual_price' => 'required',
            'compare_price' => 'required',
            'status' => 'required',
            'product_type' => 'required',
             'start_date' =>  'required',
            'duration' => 'required',
            'duration_type'=> 'required',

        ]);
        if($request->start == 'immediate')
        {
            $days = 0;
        }

        else
        {
            $days = $request->start_date;
        }


    $data=[

            'name'=>$request->name,
            'slug'=>$request->slug,
            'description'=>$request->description,
            'actual_price'=>$request->actual_price,
            'compare_price'=>$request->compare_price,
            'status'=>$request->status,

             ];
        $sub = subscription::Create($data);


        $row = [
                  'subscription_id' => $sub->id,
                  'duration' => $request->duration,
                  'duration_type' => $request->duration_type,
                  'start_date' => $days,
                  'pages_no' => $request->pages_no,
                  'price_pp' => $request->price_pp,
                  'actual_price'=>$request->actual_price,
                  'compare_price'=>$request->compare_price,
                  'product_type' => $request->product_type,
                  'stock'=>$request->stock,
                  'min_purchase'=>$request->min_purchase,
                  'max_purchase'=>$request->max_purchase,

        ];
        $subpivot = subscriptionpivot::Create($row);

        return redirect()->back()->with('success','Subscription Added successfully');



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\subscription  $subscription
     * @return \Illuminate\Http\Response
     */
    public function show(subscription $subscription)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\subscription  $subscription
     * @return \Illuminate\Http\Response
     */
    public function edit(subscription $subscription)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\subscription  $subscription
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, subscription $subscription)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\subscription  $subscription
     * @return \Illuminate\Http\Response
     */
    public function destroy(subscription $subscription)
    {
        //
    }
}
