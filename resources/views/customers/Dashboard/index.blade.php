@extends('customers/Layouts/master')
@section('title')
    Dashboard -  {{config('app.name')}}
@endsection
@section('content')
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ul class="breadcrumb breadcrumb-style ">
                        <li class="breadcrumb-item">
                            <h4 class="page-title">Dashboard</h4>
                        </li>
                        <li class="breadcrumb-item bcrumb-1">
                            <a href="{{url('home')}}">
                                <i class="fas fa-home"></i>Home</a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>


        <!-- Widgets -->

        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="counter-box text-center white">
                    <div class="text font-17 m-b-5">Total Orders</div>
                    <h3 class="m-b-10">
                        8
{{--                        {{(count($data['all']))}}--}}
                        <i class="material-icons col-green">trending_up</i>
                    </h3>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="counter-box text-center white">
                    <div class="text font-17 m-b-5">New Orders</div>
                    <h3 class="m-b-10">
                        9
{{--                        {{(count($data['new']))}}--}}
                        <i class="material-icons col-green">trending_up</i>
                    </h3>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="counter-box text-center white">
                    <div class="text font-17 m-b-5">Orders In Progress</div>
                    <h3 class="m-b-10">
                        5
{{--                        {{(count($data['prog']))}}--}}
                        <i class="material-icons col-green">trending_up</i>
                    </h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="counter-box text-center white">
                    <div class="text font-17 m-b-5">Compelete Orders</div>
                    <h3 class="m-b-10">
                        5
                        {{--                        {{(count($data['prog']))}}--}}
                        <i class="material-icons col-green">trending_up</i>
                    </h3>
                       
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="counter-box text-center white">
                    <div class="text font-17 m-b-5">Flagged Orders</div>
                    <h3 class="m-b-10">
                        3
{{--                        {{(count($data['flag']))}}--}}
                        <i class="material-icons col-green">trending_up</i>
                    </h3>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="counter-box text-center white">
                    <div class="text font-17 m-b-5">Disputed orders</div>
                    <h3 class="m-b-10">
                        5
{{--                        {{(count($data['disputed']))}}--}}
                        <i class="material-icons col-green">trending_up</i>
                    </h3>
                </div>
            </div>
        </div>

        <!-- #END# Widgets -->
        {{--        --}}

    </div>
@endsection
