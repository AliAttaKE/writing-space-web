@extends('worker/layouts/master')
@section('title')
    Completed Quiz
@endsection
@section('content')
    <div class="container pt-3">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title"> Completed Quiz</h4>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <a href="{{ url()->previous() }}">
                            <button type="button" class="btn btn-primary float-right mt-3"> Back
                            </button>
                        </a>
                    </div>
                </div>
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Completed</strong> Quizes
                        </h2>
                    </div>
                    <div class="body table-responsive">
                        <table class="table" id=myTable>
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Quiz Name</th>
                                <th>No of Questions</th>
                                <th>Quiz Distribution</th>
                                <th> Status</th>

                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>

                            <@foreach($data as $datas)
                                <tr>
                                    <th scope="row">{{auth()->user()->id}}</th>
                                    <td>{{$datas['erp_quiz_name']}}</td>
                                    <td>{{$datas['erp_no_question']}}</td>
                                    <td>{{$datas['erp_quiz_timer']}} </td>
                                    <td class="text-capitalize">{{$datas['erp_quiz_passed'] == '1'? 'passed  ':'failed'}}</td>

                                    <td>

                                        <a href="{{route('view_quiz.show',$datas['quiz_answer_id'])}}">

                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter"> View
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
