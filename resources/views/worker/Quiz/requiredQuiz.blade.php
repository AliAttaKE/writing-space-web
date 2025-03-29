@extends('worker/layouts/master')
@section('title')
    Required Quiz
@endsection
@section('content')
    <div class="container pt-3">
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <ul class="breadcrumb breadcrumb-style ">
                        <li class="breadcrumb-item">
                            <h4 class="page-title"> Required Quiz</h4>
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
                    <h2>
                        <strong>Required</strong> Quizes</h2>
                    <!-- #START# Modal Form Example -->


                </div>
                <div class="body table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Quiz Name</th>
                            <th>Quiz Format</th>
                            <th>No of Questions</th>
                            <th>Quiz Distribution</th>

                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>

                            <td>xxxx </td>
                            <td>

                            <a href="{{route('take_quiz.edit',1)}}">

                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter"> Take Quiz
                                </button></td>
                            </a>
                        </tr>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


@endsection
