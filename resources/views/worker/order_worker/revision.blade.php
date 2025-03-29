@extends('worker/layouts/master')
@section('title')
    Revisions
@endsection
@section('content')

    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-12">
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <ul class="breadcrumb breadcrumb-style ">
                    <li class="breadcrumb-item">

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
            <h2 class="text-center">
                <strong>Revision</strong> </h2>



        </div>


           
            <div class="body table-responsive">
                <table class="table">
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
                        <td><a href="order-detail">xxx</a></td>
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
