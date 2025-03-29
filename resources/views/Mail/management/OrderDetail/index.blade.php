@extends('management.layouts.master')
@section('title')
    Order Details
@endsection
@section('content')
    <style>
        .types {
            font-style: italic;
            background-color: #f1efef;
            color: #070808;
            font-size: 14px;
            /*font-weight: 700;*/
            letter-spacing: 0.5px;
            padding: 10px 15px 10px 15px;
            border-radius: 20px;
            text-align: center;
            /*display: inline-block;*/
            margin: 3px auto !important;
            display: inline-flex;
            align-items: center;
        }
    </style>
    <div class="container ">

    @if($data['new_order'] != null)

    @if($data['new_order']['order']['erp_team'] != null)

        @endif

    <div class="block-header">
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <ul class="breadcrumb breadcrumb-style  ">




                <li class="breadcrumb-item">
                    <h4 class="page-title">  Order ID :
                        {{$data['new_order']['order']['id']}}</h4>
                </li>


                <li class="breadcrumb-item bcrumb-1 fw-bold text-dark text-uppercase">
                    <strong>
                        Topic:
                        {{$data['new_order']['order']['erp_order_topic']}}
                    </strong>
                </li>

                <li class="breadcrumb-item bcrumb-1 fw-bold text-dark text-uppercase">
                    <strong>
                        SUBJECT:
                        {{$data['new_order']['order']['erp_subject_name']}}
                    </strong>

                </li>

            </ul>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 mt">
            <a href="http://wms.writing-space.com/new-order/529">
                <button type="button" class="btn btn-primary float-right mt-3"> Back
                </button>
            </a>
        </div>

    </div>
    </div>
    <div class="row">


        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card pb-4">






                <span class="">

                    </span>


                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs tab-nav-right d-block" role="tablist">
                        <li role="presentation">
            <div class="col-md-12">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#tab1" class="active">Order Details</a></li>
                    <li><a data-toggle="tab" href="#Messages">Messages</a></li>
                    <li><a data-toggle="tab" href="#tab3">Upload File</a></li>
                    <li><a data-toggle="tab" href="#tab4">Client History and Bids </a></li>
                    <li><a data-toggle="tab" href="#tab5">Client Review</a></li>
                </ul>
                @include('management.layouts.error')

                <div class="tab-content">

                           <!--OrderDetail Starts-->
                           @include('management/order_admin/Tabs/OrderDetail')
                           <!--Messages Ends-->


                           <!--Messages Start-->
                           @include('management/order_admin/Tabs/Messages')
                           <!--Messages Ends-->


                           <!--File Upload Starts-->
                            @include('management.order_admin.Tabs.UploadFile')
                            @include('management.order_admin.Tabs.SubmitModal')
                            <!--File Upload Ends-->


                            <!--Client history starts-->
                            @include('management/order_admin/Tabs/ClientHistory')
                           <!--Client history Ends-->


                           <!--Review Starts-->
                           @include('management/order_admin/Tabs/ClientReview')
                           <!--Review Ends-->

                    @include('management/order_admin/Tabs/allmessages')


                </div>
            </div>

                        </li></ul></div>
            </div>
            </div>
        </div>
    </div>


    @else
        <div class="block-header">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <ul class="breadcrumb breadcrumb-style  ">




                        <li class="breadcrumb-item">
                            <h4 class="page-title">  Order ID :
                                {{$data['order']['id']}}</h4>
                        </li>


                        <li class="breadcrumb-item bcrumb-1 fw-bold text-dark text-uppercase">
                            <strong>
                                Topic:
                                {{$data['order']['erp_order_topic']}}
                            </strong>
                        </li>

                        <li class="breadcrumb-item bcrumb-1 fw-bold text-dark text-uppercase">
                            <strong>
                                SUBJECT:
                                {{$data['order']['erp_subject_name']}}
                            </strong>

                        </li>

                    </ul>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 mt">
                    <a href="http://wms.writing-space.com/new-order/529">
                        <button type="button" class="btn btn-primary float-right mt-3"> Back
                        </button>
                    </a>
                </div>

            </div>
        </div>
        <div class="row">


            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card pb-4">

                <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#tab1" class="active">Order Details</a></li>
            <li><a data-toggle="tab" href="#Messages">Messages</a></li>
            <li><a data-toggle="tab" href="#tab3">Upload File</a></li>
            <li><a data-toggle="tab" href="#tab4">Client History and Bids </a></li>
            <li><a data-toggle="tab" href="#tab5">Client Review</a></li>
        </ul>
        <div class="tab-content">

            <!--OrderDetail Starts-->
        @include('management/order_admin/Tabs2/OrderDetail')
        <!--Messages Ends-->


            <!--Messages Start-->
        @include('management/order_admin/Tabs2/Messages')
{{--        <!--Messages Ends-->--}}


{{--            <!--File Upload Starts-->--}}
        @include('management.order_admin.Tabs2.UploadFile')
{{--        @include('management.order_admin.Tabs.SubmitModal')--}}
{{--        <!--File Upload Ends-->--}}


{{--            <!--Client history starts-->--}}
        @include('management/order_admin/Tabs2/ClientHistory')
{{--        <!--Client history Ends-->--}}


{{--            <!--Review Starts-->--}}
        @include('management/order_admin/Tabs/ClientReview')
        <!--Review Ends-->

        </div>

                </div>
            </div>
        </div>

    @endif
    </div>
@endsection
