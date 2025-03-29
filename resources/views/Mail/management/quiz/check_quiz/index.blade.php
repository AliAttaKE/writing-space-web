


@extends('management/layouts/master')
@section('title')
   Check Quiz
@endsection
@section('content')
    <div class="container pt-3">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title"> Check Quiz</h4>
                            </li>

                        </ul>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 mt">
                        <a href="{{url()->previous()}}">
                            <button type="button" class="btn btn-primary float-right mt-3"> Back
                            </button>
                        </a>
                    </div>

                </div>
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Register </strong> Quiz</h2>
                        <!-- #START# Modal Form Example -->

                    <div class="body table-responsive">
                        <table class="table" id="myTable">
                            <thead>

                            <tr>
                                <th></th>
                                <th> Name</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($register as $datas)
{{--                                @dd($register)--}}
                            <tr>

                                <th scope="row">1</th>
                                <td>{{$datas['erp_user_name']}}</td>

                                <td>{{$datas['erp_user_email']}}</td>
                                <td class="text-capitalize">{{$datas['user_is_approved'] == '1'? 'Approved  ':'Pending'}}</td>

                                   <td>

                                       <a href="{{route('checkquiz.edit',$datas['erp_user_id'])}}?type=signup">
                                           <button type="button" class="btn btn-primary waves-effect">
                                               View Details
                                           </button>
                                       </a>

                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Login  </strong> Quiz</h2>
                        <!-- #START# Modal Form Example -->

                        <div class="body table-responsive">
                            <table class="table" id="myTable2">
                                <thead>

                                <tr>
                                    <th></th>
                                    <th> Name</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($login as $datas)
                                    <tr>

                                        <th scope="row">1</th>
                                        <td>{{$datas['erp_user_name']}}</td>

                                        <td>{{$datas['erp_user_email']}}</td>
                                        <td class="text-capitalize">{{$datas['user_is_approved'] == '1'? 'Approved  ':'Pending'}}</td>

                                        <td>

                                            <a href="{{route('checkquiz.edit',$datas['erp_user_id'])}}?type=login">
                                                <button type="button" class="btn btn-primary waves-effect">
                                                    View Details
                                                </button>
                                            </a>

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
        </div>


@endsection
