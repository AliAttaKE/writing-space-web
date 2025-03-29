
@extends('management.layouts.master')
@section('title')
    New Orders
@endsection
@section('content')
    <div class="container">
        @include('management.layouts.error')
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title"> Completed Order</h4>
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
                        <h5 class="text-center">Completed Orders</h5>
                        <div class="body table-responsive">
                            <table class="table"  id="myTable">
                                <thead>
                                <tr>
                                    <th>Sno</th>
                                    <th>OrderNo</th>
                                    <th>Subject</th>
                                    <th>P.Type</th>
                                    <th>P.Format</th>
                                    <th>Language</th>
                                    <th> Level</th>
                                    <th>Pages</th>
                                    <th> Sources</th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php
                                $count=1
                                ?>
                                @if($data != null)
                                    @foreach($data as $row)

                                        <tr>
                                            <td>{{$count}}</td>
                                            <td><a href="{{route('new-order.show',$row->id)}}">{{$row->id}}</a></td>
                                            <td>{{$row->erp_subject_name}}</td>
                                            <td>{{$row->erp_paper_type}}</td>
                                            <td>{{$row->erp_paper_format}}</td>
                                            <td>{{$row->erp_language_name}}
                                            <td>{{$row->erp_academic_name}}</td>
                                            <td>{{$row->erp_number_Pages}}</td>
                                            <td>{{$row->erp_copy_sources}} </td>
                                        </tr>
                                        <?php
                                        $count++;
                                        ?>
                                    @endforeach
                                @endif

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>



{{--                delievred orders--}}

                <div class="card">
                    <div class="header">
                        <h5 class="text-center">Orders Delivered </h5>
                        <div class="body table-responsive">
                            <table class="table"  id="myTable">
                                <thead>
                                <tr>
                                    <th>Sno</th>
                                    <th>OrderNo</th>
                                    <th>Subject</th>
                                    <th>P.Type</th>
                                    <th>P.Format</th>
                                    <th>Language</th>
                                    <th> Level</th>
                                    <th>Pages</th>
                                    <th> Sources</th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php
                                $count=1
                                ?>
                                @if($data != null)
                                    @foreach($data as $row)

                                        <tr>
                                            <td>{{$count}}</td>
                                            <td><a href="{{route('new-order.show',$row->id)}}">{{$row->id}}</a></td>
                                            <td>{{$row->erp_subject_name}}</td>
                                            <td>{{$row->erp_paper_type}}</td>
                                            <td>{{$row->erp_paper_format}}</td>
                                            <td>{{$row->erp_language_name}}
                                            <td>{{$row->erp_academic_name}}</td>
                                            <td>{{$row->erp_number_Pages}}</td>
                                            <td>{{$row->erp_copy_sources}} </td>
                                        </tr>
                                        <?php
                                        $count++;
                                        ?>
                                    @endforeach
                                @endif

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div> </div></div>
@endsection