@extends('worker/layouts/master')
@section('title')
    Manage Message
@endsection
@section('content')
    <div class="container pt-3">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title"> Manage Message</h4>
                            </li>

                        </ul>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <button type="button" class="btn btn-primary float-right mt-3"> Back
                        </button>
                    </div>

                </div>
                <div class="card">
                    <div class="header">
                        <div class="body table-responsive">
                            <table class="table" id="myTable">
                                <thead>
                                <tr>
                                    <th>S.NO</th>
                                    <th>Order No</th>
                                    <th>Date</th>
                                    <th>Order Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $count =1?>
                                @if($data != null)
                                @foreach($data as $key => $value)
                                    <tr>
                                        <td>{{$count}}</td>
                                        <td>
                                            <a href="{{url('manage_message',$key)}}">
                                                {{$key}}
                                            </a>
                                        </td>
                                        <td>{{$value['created_at']}}</td>
                                        <td>{{$value['erp_status']}}</td>

                                    </tr>
                                    <?php $count++?>
                                @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

