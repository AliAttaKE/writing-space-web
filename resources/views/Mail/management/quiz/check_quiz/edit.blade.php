


@extends('management/layouts/master')
@section('title')
    Quiz
@endsection
@section('content')
    <div class="container pt-3">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row ">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <ul class="breadcrumb breadcrumb-style ">
                        <li class="breadcrumb-item">
                            <h4 class="page-title">Check Quiz</h4>
                        </li>

                    </ul>
                </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 mt">
                      <a href="{{url('checkquiz')}}" > <button type="button" class="btn btn-primary float-right"> Back
                          </button> </a>
                    </div>
                </div>

                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Quiz</strong> Details</h2>
                        <!-- #START# Modal Form Example -->

                    </div>
                    <div class="body table-responsive">
                        <table class="table" id="myTable">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Quiz Title</th>
                                <th>Quiz Type</th>
                                <th>No of Questions</th>
                                <th>Quiz format</th>
                                <th>Quiz Status</th>

                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $data)
                            <tr>
                                <th scope="row">1</th>
                                <td>{{$data['erp_quiz_name']}}</td>
                                <td>{{$data['erp_quiz_type']}}</td>
                                <td>{{$data['erp_quiz_question_count']}}</td>
                                <td>{{$data['erp_quiz_result_type']}}</td>
{{--@dd($data['user_quiz_status'] == null)--}}

                                @if($data['user_quiz_status'] == null)
                                  @php  $result = 'Checking'; @endphp
                                @elseif($data['user_quiz_status'] == 1)
                                    @php  $result = 'Passed'; @endphp
                                @else
                                    @php  $result = 'Failed'; @endphp
                                @endif

                                <td>{{$result}}</td>
                                <td>

                                    <a href="{{route('checkquiz.show',$data['worker_quiz_answers_id'])}}?type={{$_GET['type']}}&user_id={{$data['erp_user_id']}}">
                                        <button type="button" class="btn btn-primary waves-effect">
                                            View
                                        </button>
                                    </a>

{{--                                    <button type="button" class="btn btn-primary" data-toggle="modal"--}}
{{--                                            data-target="#exampleModalCenter"> Re-assign--}}
{{--                                        </button>--}}
                                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                                         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalCenterTitle">Re-assign
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    Are you sure want to re-assign this Quiz
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-danger waves-effect"
                                                            data-dismiss="modal">Cancel</button>
                                                    <button type="submit"
                                                    class="btn btn-info waves-effect" data-dismiss="modal">yes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                            </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


@endsection
