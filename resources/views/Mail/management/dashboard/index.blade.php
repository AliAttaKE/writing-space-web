@extends('management/layouts/master')
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
                        {{(count($data['all']))}}
                        <i class="material-icons col-green">trending_up</i>
                    </h3>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6">
                <div class="counter-box text-center white">
                    <div class="text font-17 m-b-5">New Orders</div>
                    <h3 class="m-b-10">
                        {{(count($data['new']))}}
                        <i class="material-icons col-green">trending_up</i>
                    </h3>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="counter-box text-center white">
                    <div class="text font-17 m-b-5">Orders In Progress</div>
                    <h3 class="m-b-10">
                       {{(count($data['prog']))}}
                        <i class="material-icons col-green">trending_up</i>
                    </h3>
                </div>
            </div>
        </div>
         <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="counter-box text-center white">
                    <div class="text font-17 m-b-5">Compelete Orders</div>
                    <h3 class="m-b-10">{{(count($data['comp']))}}
                        <i class="material-icons col-green">trending_up</i>
                    </h3>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="counter-box text-center white">
                    <div class="text font-17 m-b-5">Flagged Orders</div>
                    <h3 class="m-b-10">
                        {{(count($data['flag']))}}
                        <i class="material-icons col-green">trending_up</i>
                    </h3>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="counter-box text-center white">
                    <div class="text font-17 m-b-5">Disputed orders</div>
                    <h3 class="m-b-10">
                        {{(count($data['disputed']))}}
                        <i class="material-icons col-green">trending_up</i>
                    </h3>
                </div>
            </div>
        </div>

        <!-- #END# Widgets -->
{{--        --}}

    </div>

    <div class="container-fluid pt-3">
        <div class="row clearfix">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title"> STATISTICS</h4>
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="card col-12">
                    <div class="header">
                        <h2>
                            <strong>Funds Summary
                            </strong></h2>

                        <div class="pb-2 pt-2 d-flex justify-content-between">

                            <span>Payout:</span>
                            <span>{{'$'}}{{$data['payout']}} </span>
                        </div>
{{--                        <div class="pb-2 d-flex justify-content-between">--}}

{{--                            <span>Commission:</span>--}}
{{--                            <span>wdwd</span>--}}
{{--                        </div>--}}
                        <div class="pb-2 d-flex justify-content-between">

                            <span>Bonuses:</span>
                            <span>{{$data['bonus']}}</span>
                        </div> <div class="pb-2 d-flex justify-content-between">

                            <span>Penalties:</span>
                            <span>{{$data['penalty']}}</span>
                        </div> <div class="pb-2 d-flex justify-content-between">

{{--                            <span>Refunds:</span>--}}
{{--                            <span>wdwd</span>--}}
                        </div>



                    </div>

                </div>
                <div class="card col-12">
                    <div class="header">
                        <h2>
                            <strong>Orders Summary
                            </strong></h2>

                        <div class="pb-2 pt-2 d-flex justify-content-between">

                            <span>New Orders:</span>
                            <span> {{(count($data['new']))}}</span>
                        </div>
{{--                        <div class="pb-2 d-flex justify-content-between">--}}

{{--                            <span>Available Orders:</span>--}}
{{--                            <span>wdwd</span>--}}
{{--                        </div>--}}
                        <div class="pb-2 d-flex justify-content-between">

                            <span>In-Progress Order::</span>
                            <span> {{(count($data['prog']))}}</span>
                        </div>
                        <div class="pb-2 d-flex justify-content-between">

                            <span>Flagged Orders:</span>
                            <span>  {{(count($data['flag']))}}</span>
                        </div> <div class="pb-2 d-flex justify-content-between">

                            <span>Revisions:</span>
                            <span>{{count($data['revision'])}}</span>
                        </div> <div class="pb-2 d-flex justify-content-between">

                            <span>Completed Orders:</span>
                            <span>{{(count($data['comp']))}}</span>
                        </div>



                    </div>

                </div>
                <div class="card col-12">
                    <div class="header">
                        <h2>
                            <strong>Updates & Notifications

                            </strong></h2>

                        <div class="pb-2 pt-2 d-flex justify-content-between">

                            <span>Messages to Admin:</span>
                            <span>{{count($data['admin_message'])}}</span>
                        </div>
                        <div class="pb-2 d-flex justify-content-between">

                            <span>Messages within Teams:</span>
                            <span>{{count($data['admin_message'])}}</span></span>
                        </div>
                        <div class="pb-2 d-flex justify-content-between">

                            <span>Files to Admin:</span>
                            <span>{{count($data['sub'])}}</span>
                        </div> <div class="pb-2 d-flex justify-content-between">

                            <span>Announcements:</span>
                            <span>{{count($data['announc'])}}</span>
                        </div> <div class="pb-2 d-flex justify-content-between">

                            <span>Deadline Approvals:</span>
                            <span>{{count($data['deadline_approve'])}}</span>
                        </div>



                    </div>

                </div>
                <div class="card col-12">
                    <div class="header">
                        <h2>
                            <strong>Workers Summary
                            </strong></h2>

                        <div class="pb-2 pt-2 d-flex justify-content-between">

                            <span>Total Workers:</span>
                            <span>{{count($data['workers'])}}</span>
                        </div>
                        <div class="pb-2 d-flex justify-content-between">

                            <span>New Workers:</span>
                            <span>{{count($data['new_worker'])}}</span>
                        </div>
                        <div class="pb-2 d-flex justify-content-between">

                            <span>Reliable Workers:</span>
                            <span>{{count($data['reliable'])}}</span>
                        </div>



                    </div>

                </div>
            </div>
        </div>
@endsection
