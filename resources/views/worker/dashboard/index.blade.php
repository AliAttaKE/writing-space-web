@extends('worker/layouts/master')
@section('title')
    Dashboard -  {{config('app.name')}}
@endsection
@section('content')
    @include('management.layouts.error')


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


        <div class="mb-5 slimScrollBar" id="style-1" style="max-height: 300px;overflow-y:auto;overflow-x:hidden">

            <div class="row">
                <div class="col-lg-12 col-sm-12">
                    <div class="counter-box white">
                        <div class="container">
                            <div class="row mt-5">
                                <div class="col">
                                    <h2>
                                        <strong >Announcement <i class="fa fa-bullhorn" aria-hidden="true"></i>
                                        </strong></h2>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            @foreach( $data['announcement'] as $announcements)

                <div class="row">
                    <div class="col-lg-12 col-sm-12">
                        <div class="counter-box white">
                            <div class="container">
                                <div class="row mt-4 align-items-center">

                                    <div class="col-9">
                                        <strong class="font-weight-bold font-21">  {{$announcements->erp_title}} </strong>
                                    </div>
                                    <div class="col-3   text-right">
                                        <strong class=" font-12"> Post Date :{{$announcements->erp_timetype == 'immediate'? $announcements->created_at:$announcements->Date}}</strong>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col">
                                    <strong class="font-16">{{$announcements->erp_message}}</strong>
                                </div>

                            </div>


                            <div class="row mt-4">
                                <div class="col-12">
                                    @if ($announcements->erp_file == '')

                                    @else
                                        <div class="row">
                                            <div class="col">
                                                <strong class="font-12">Click here</strong>
                                            </div>

                                        </div>
                                        <div class="mt-3">
                                            <a  class="btn btn-default btn-circle waves-effect waves-circle waves-float" href="{{asset('image/announcement'.'/'.$announcements->erp_file)}}" download>
                                                <i class="material-icons">publish</i>
                                            </a>
                                        </div>


                                    @endif



                                </div>



                            </div>


                            <div>

                            </div>
                        </div>


                    </div>

                </div>
        </div>

        @endforeach
    </div>
{{--        @include('worker/Orders/multipleorder')--}}
        

{{--stats    --}}

        <div class="container-fluid  pt-3">
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
                                <span>{{$data['payout']}} </span>
                            </div>

                            <div class="pb-2 d-flex justify-content-between">

                                <span>Bonuses:</span>
                                <span>{{$data['bonus']}}</span>
                            </div>
                            <div class="pb-2 d-flex justify-content-between">

                                <span>Penalties:</span>
                                <span>{{$data['penalty']}}</span>
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
                                {{--                            <span> {{(count($data['new']))}}</span>--}}
                            </div>
                            {{--                        <div class="pb-2 d-flex justify-content-between">--}}

                            {{--                            <span>Available Orders:</span>--}}
                            {{--                            <span>wdwd</span>--}}
                            {{--                        </div>--}}
                            <div class="pb-2 d-flex justify-content-between">

                                <span>In-Progress Order::</span>
                                <span> {{(count($data['inprogress']))}}</span>
                            </div>
                            <div class="pb-2 d-flex justify-content-between">

                                <span>Flagged Orders:</span>
                                {{--                            <span>  {{(count($data['flag']))}}</span>--}}
                            </div>
                            <div class="pb-2 d-flex justify-content-between">

                                <span>Revisions:</span>
                                <span>{{count($data['revision'])}}</span>
                            </div>
                            <div class="pb-2 d-flex justify-content-between">

                                <span>Completed Orders:</span>
                                <span>{{(count($data['compeleted']))}}</span>
                            </div>


                        </div>

                    </div>
                    <div class="card col-12">
                        <div class="header">
                            <h2>
                                <strong>Updates & Notifications

                                </strong></h2>

                            <div class="pb-2 pt-2 d-flex justify-content-between">

                                {{--                            <span>{{count($data['admin_message'])}}</span>--}}
                            </div>
                            <div class="pb-2 d-flex justify-content-between">

                                <span>New Messages:</span>
                                {{--                            <span>{{count($data['admin_message'])}}</span></span>--}}
                            </div>
                            <div class="pb-2 d-flex justify-content-between">

                                <span>New Files:</span>
                                {{--                            <span>{{count($data['sub'])}}</span>--}}
                            </div>
                            <div class="pb-2 d-flex justify-content-between">

                                <span>Announcements:</span>
                                {{--                            <span>{{count($data['announc'])}}</span>--}}

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
                                {{--                            <span>{{count($data['new_worker'])}}</span>--}}
                            </div>
                            <div class="pb-2 d-flex justify-content-between">

                                <span>Reliable Workers:</span>
                                {{--                            <span>{{count($data['reliable'])}}</span>--}}
                            </div>


                        </div>

                    </div>
                </div>
            </div>











@endsection
