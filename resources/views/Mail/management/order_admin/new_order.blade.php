@extends('management/layouts/master')
@section('title')
    New Order
@endsection
@section('content')
    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-12">
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <ul class="breadcrumb breadcrumb-style ">
                    <li class="breadcrumb-item">
                        <h4 class="page-title"> New Order</h4>
                    </li>

                </ul>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 mt">
                <button type="button" class="btn btn-primary float-right mt-3"> Back
                </button>
            </div>

        </div>
    <div class="card my-4">
        <div class="header">
                <div class="col-lg-12 col-12"><h4 class="page-title"></h4>
                    <h5 class="text-center">New Orders: (Pending Admin Approval)</h5>
                </div>
            <div class="body table-responsive">
                <table class="table">
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
                        <th class="w-25">Actions</th>
                        <th class="w-25">Progress</th>




                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">
                            <label class="form-check-label" >
                                <input class="form-check-input" type="checkbox" value="" >
                                <span class="form-check-sign" >
                                                <span class="check"></span>
                                            </span>
                            </label>
                        </th>
                        <td><a href="OrderDetail">xxx</a></td>
                        <td>xxx</td>
                        <td>xxx</td>
                        <td>xxx</td>
                        <td>xxx</td>
                        <td>xxx</td>
                        <td>xxx</td>
                        <td>xxx</td>
                        <td>xxx</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
    </div>

@endsection
