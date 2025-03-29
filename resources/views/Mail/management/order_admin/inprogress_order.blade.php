@extends('management/layouts/master')
@section('title')
    In Progress Orders
@endsection
@section('content')
    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-12">
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <ul class="breadcrumb breadcrumb-style ">
                    <li class="breadcrumb-item">
                        <h4 class="page-title"> In Progress Order</h4>
                    </li>

                </ul>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <button type="button" class="btn btn-primary float-right mt-3"> Back
                </button>
            </div>

        </div>
    <div class="card my-4">
        <div class="header">
            <h2>
                <strong>In Progress Order </strong>  (Pending Admin Approval)</h2>
            <!-- #START# Modal Form Example -->


        </div><!-- #START# Modal Form Example -->

            <!-- #START# Modal Form Example -->







            <div class="body table-responsive">
                <table class="table" id="myTable">
                    <thead>
                    <tr>
                        <th class="ml-2 ">
                            <label class="form-check-label" >
                                <input class="form-check-input" type="checkbox" value="" >
                                <span class="form-check-sign" >
                                                <span class="check"></span>
                                            </span>
                            </label>

                        </th>
                        <th>OrderNo </th>
                        <th>Topic</th>
                        <th>Words</th>
                        <th>Sources</th>
                        <th>Due</th>
                        <th>Citation</th>
                        <th>Subject</th>
                        <th>Level</th>
                        <th>Total</th>
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
    </div>

@endsection
