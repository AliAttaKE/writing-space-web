@extends('worker/layouts/master')
@section('title')
    Manage Files
@endsection
@section('content')
    <style>
        .nested-table{
            width: 90%;
            margin: 40px auto;

        }
    </style>
    <div class="container pt-3">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title"> Manage Files</h4>
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
                                  <th>Order</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if($data != null)
                                @foreach($data  as $key => $value)

                                <tr class="border-0">
                                    <th class="border-bottom-0 p-0">

                                        <div class="card m-0">
                                            <table>
                                                <thead>
                                                <tr style="background:#ebebeb;">
                                                    <th>
                                                     Order No : {{$key}}
                                                    </th>
                                                </tr>
                                                </thead>
                                            </table>
                                            <table class="nested-table">
                                                <thead>
                                                <tr>
                                                    <th>Main Title</th>
                                                    <th>Sec Title</th>
                                                    <th>Keywords</th>
                                                    <th>Category 1</th>
                                                    <th>Category 2</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($value as $file)
                                                    <tr>
                                                        <td>{{$file->title}}</td>
                                                        <td>{{$file->sec_title}}</td>
                                                        <td>
                                                            {{$file->keywords}}
                                                        </td>
                                                        <td>
                                                            {{$file->cat_1}}
                                                        </td>
                                                        <td>
                                                            {{$file->cat_2}}
                                                        </td>

                                                    </tr>
                                                @endforeach
                                                </tbody>

                                            </table>
                                        </div>
                                        </th>

                                </tr>
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

