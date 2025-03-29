<?php

namespace App\Http\Controllers\Management\products;

use App\Http\Controllers\Controller;
use App\Models\Management\Panelty\Panelty;
use App\Models\Management\TeamOrder\TeamOrder;
use App\Models\Management\products\product;
use App\Models\Management\products\categories;
use App\Models\Management\subscription\productpivot;
use App\Models\Management\subscription\subscription;

use App\Models\Worker\order_worker\RequestPages;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('management/product/subscription/index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('management/product/subscription/create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Management\products\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Management\products\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Management\products\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Management\products\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product)
    {
        //
    }

    public function product_categories()
    {
        $category = categories::get()->all();
        return view('management/product/category/index',compact('category'));


    }

    public function add_categories(Request  $request)
    {
        if($request->file('image')){
            $ext = $request->file('image')->getClientOriginalExtension();
            $txt = time().rand(100,1000).'.'.$ext;

            $request->image->move(public_path('image/category'),$txt);
        }

        else
        {
            $txt = '';
        }

        $data=[
            'name'=>$request->name,
            'slug'=>$request->slug,
            'image'=>$txt,
            'status'=>$request->status,
        ];

        $cat = categories::Create($data);
        return redirect()->back()->with('success','Category Added successfully');


    }
    public function products()
    {

        return view('management/product/products/index');


    }
    public function product_add()
    {

        return view('management/product/products/create');


    }

    public function product_store(Request $request)
    {


        $this->validate($request,[

            'name' => 'required',
            'description' => 'required',
            'actual_price' => 'required',
            'compare_price' => 'required',
            'status' => 'required',
            'product_type' => 'required',
            'start_date' =>  'required',
            'duration' => 'required',
            'duration_type'=> 'required',
            '7'

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
            'product_type'=>$request->product_type,
        ];
        $sub = subscription::Create($data);
        $row = [
            'product_id' => $sub->id,
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

        $subpivot = productpivot::Create($row);

        return redirect()->back()->with('success','Product Added successfully');


    }





}
