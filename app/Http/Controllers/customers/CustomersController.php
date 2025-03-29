<?php

namespace App\Http\Controllers\customers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('customers/Dashboard/index');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\customers  $customers
     * @return \Illuminate\Http\Response
     */
    public function show(customers $customers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\customers  $customers
     * @return \Illuminate\Http\Response
     */
    public function edit(customers $customers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\customers  $customers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, customers $customers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\customers  $customers
     * @return \Illuminate\Http\Response
     */
    public function destroy(customers $customers)
    {
        //
    }

//      customer login


    public function customer()
    {

        return view('customers/login.index');
    }

    public function customer_login()
    {

        return view('customers/login.login');
    }


    public function customer_register()
    {

        return view('customers/login.register');
    }
    public function customer_cart()
    {

        return view('customers/login.cart');
    }
    public function createOrder_customer()
    {

        return view('customers.create.index');
    }

    public function Order_status()
    {

        return view('customers.create.create');
    }




    public function deadline_customer()
    {

        return view('customers/Deadline.deadline');
    }
    public function page_request()
    {

        return view('customers/Deadline.pageReq');
    }

    public function customer_profile()
    {

        return view('customers/login.profile');
    }

    public function courses()
    {

        return view('customers/subscription.index');
    }
    public function referal()
    {
        return view('customers/referal.index');
    }




}
