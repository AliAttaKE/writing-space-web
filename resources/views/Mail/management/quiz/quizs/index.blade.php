 @extends('management/layouts/master')
@section('title')
    Quiz -
@endsection
@section('content')
    <div class="container">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title"> All Quiz</h4>
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
                @include('management/layouts/error')
                <div class="card">
                    <div class="header">
                        <!-- #START# Modal Form Example -->
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <button type="button" class="btn btn-primary " data-toggle="modal"
                                    data-target="#exampleModal"> Create Quiz
                            </button>
                      </div>

                    </div>
                    <div class="body table-responsive">
                        <table class="table" id="myTable">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Quiz Name</th>
                                <th>Quiz Format</th>
                                <th>Quiz Type</th>
                                <th>No of Questions</th>
                                <th> Result</th>
                                <th>Time</th>
                                <th>Status</th>
                                <th>Actions</th>
                                <th>Add Questions</th>

                            </tr>
                            </thead>
                            <tbody>

                             <?php
                            $count=1
                            ?>
                            @foreach($quiz as $quizes)
                                <tr>
                                    <th scope="row">{{$count++}}</th>
                                    <td>{{$quizes->erp_quiz_name}}</td>
                                    <td>{{$quizes->erp_quiz_formats}}</td>
                                    <td>{{$quizes->erp_quiz_type}}</td>
                                    <td>Null</td>
                                    <td>{{$quizes->erp_quiz_result}} </td>
                                    <td>{{$quizes->erp_quiz_timer}}</td>

                                        {{--                            <td>{{$quizes->erp_quiz_status}}</td>--}}
                                        <td>
                                            @if($quizes->erp_quiz_status == '1')
                                            <label class="badge badge-info" data-toggle="modal" data-target="#active_inactive">Enable</label>
                                            @else
                                            <label class="badge badge-danger" data-toggle="modal" data-target="#active_inactive">Disabled</label>
                                            @endif
                                        </td>



                                    <td>


                                                <button type="button" class="btn bg-blue btn-circle waves-effect waves-circle waves-float" data-toggle="modal" data-target="#editmodal{{$quizes->id}}">
                                                    <i class="material-icons">edit</i>
                                                </button>
                                                @include('management/quiz/quizs/edit')



                                            <button type="button" class="btn bg-red btn-circle waves-effect waves-circle waves-float" data-toggle="modal" data-target="#exampleModalCenter{{$quizes->id}}">
                                                <i class="material-icons"> delete  </i>
                                            </button>

                                        @if($quizes->erp_quiz_status == '0')

                                            <div class="modal fade" id="exampleModalCenter{{$quizes->id}}" tabindex="-1" role="dialog"
                                                 aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalCenterTitle" >Delete
                                                            </h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Are you sure want to proceed this action?
                                                        </div>
                                                        <div class="modal-footer">

                                                            <button type="submit" class="btn btn-danger waves-effect"
                                                                    data-dismiss="modal">Close</button>

                                                            <form action="{{route('quiz.destroy',$quizes->id)}}" method="post">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit"
                                                                        class="btn btn-info waves-effect" >Delete</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @else
                                            <div class="modal fade" id="exampleModalCenter{{$quizes->id}}" tabindex="-1" role="dialog"
                                                 aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content bg-danger">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title text-white font-20" id="exampleModalCenterTitle" >Alert
                                                                <i class="fas fa-exclamation-triangle"></i></h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                <span aria-hidden="true" class="text-white">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body text-white">
                                                            Only Disabled Quiz will be deleted
                                                        </div>
                                                        <div class="modal-footer">

                                                            <button type="submit" class="btn btn-danger waves-effect"
                                                                    data-dismiss="modal">Close</button>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                        </td>
                                        <td>
                                            <a href="{{route('question.show',$quizes->id)}}" >
                                                <button type="button" class="btn bg-purple btn-circle waves-effect waves-circle waves-float">
                                                    <i class="fas fa-arrow-right"></i>
                                                </button>
                                            </a>
                                        </td>



                                </tr>
                            @endforeach
                             <?php
                             $count++;
                             ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('management/quiz/quizs/add')
{{--    <script>--}}
{{--        $(document).ready(function() {--}}



{{--            $(document).on('click','#butsave', function() {--}}

{{--                var modal = $(this).parents('.modal');--}}
{{--                var name = $('#quiz_name').val();--}}
{{--                var formats = $('#quiz_format').val();--}}
{{--                var quiz_type = $('#quiz_type').val();--}}
{{--                var status = $('.status:checked').val();--}}
{{--                var timer = $('#timer').val();--}}

{{--                $.ajax({--}}
{{--                    type:'POST',--}}
{{--                    url:"{{ route('quizs.store') }}",--}}
{{--                    data: {--}}
{{--                        _token: '{{csrf_token()}}',--}}
{{--                        name : name,--}}
{{--                        formats: formats,--}}
{{--                        quiz_type: quiz_type,--}}
{{--                        status: status,--}}
{{--                        timer: timer,--}}
{{--                    },--}}

{{--                    success:function(data){--}}

{{--                        if(data){--}}
{{--                            $(modal).modal('hide');--}}
{{--                            $(modal).css('display','none');--}}
{{--                            $('.error').html(data);--}}
{{--                        }--}}
{{--                    }--}}
{{--                });--}}

{{--            });--}}
{{--        });--}}
{{--    </script>--}}
@endsection
