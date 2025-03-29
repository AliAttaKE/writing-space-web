@extends('management/layouts/master')
@section('title')
    Assign Quiz
@endsection
@section('content')
    <div class="container pt-3">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title"> Assigned Quizzes</h4>
                            </li>

                        </ul>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 ">
                        <a href="{{url()->previous()}}">
                            <button type="button" class="btn btn-primary float-right mt-3"> Back
                            </button>
                        </a>
                    </div>


                </div>
                @include('management.layouts.error')
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Assigned</strong> Quizzes</h2>
                        <!-- #START# Modal Form Example -->


                    </div>
                    <div class="body table-responsive">
                        <table class="table" id="myTable">
                            <thead>


                            <tr>
                                <th>#</th>
                                <th> Name</th>
                                <th> Email</th>
{{--                                <th>Quiz Name</th>--}}
{{--                                <th>Quiz Format</th>--}}
{{--                                <th>Quiz Distribution</th>--}}


                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>


                            @foreach($data['quiz'] as $datas)





{{--                                  @dd($datas);--}}
{{--                                @dd($datas['UserName']['name']);--}}
{{--                                  @dd($datas['Quiz']->erp_quiz_name);--}}
  <?php

      $count=1

  ?>

                            <tr>

                                <td scope="row">{{ $count ?? '' }}</td>

                                <td> {{$datas['UserName'] ? $datas['UserName']['name'] : " " }} </td>
                                <td> {{$datas['UserName'] ? $datas['UserName']['email'] : " " }} </td>


{{--                                <td> {{$datas['Quiz'] ? $datas['Quiz']['erp_quiz_name'] : " " }} </td>--}}
{{--                                <td> {{$datas['Quiz'] ? $datas['Quiz']['erp_quiz_formats'] : " " }} </td>--}}
{{--                                <td> {{$datas['Quiz'] ? $datas['Quiz']['erp_quiz_timer'] : " " }} </td>--}}

                                <td>





                                        <button type="submit" class="btn bg-red btn-circle waves-effect waves-circle waves-float" data-toggle="modal" data-target="#exampleModalCenter{{$datas->id}}">
                                            <i class="material-icons"> delete  </i>
                                        </button>


                                        <div class="modal fade" id="exampleModalCenter{{$datas->id}}" tabindex="-1" role="dialog"
                                             aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalCenterTitle">Delete
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
                                                        <form action="{{route('assignquiz.destroy',$datas->id)}}" method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                                class="btn btn-info waves-effect">Delete</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>









                                    <a href="{{route('quiz.show',$datas->users_id)}}" >
                                        <button type="button" class="btn bg-purple btn-circle waves-effect waves-circle waves-float">
                                            <i class="fas fa-arrow-right"></i>
                                        </button>
                                    </a>





                                </td>




                            </tr>
<?php
$count++;
?>
                            @endforeach




                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Signup</strong> Quizzes</h2>
                        <!-- #START# Modal Form Example -->


                    </div>
                    <div class="body table-responsive">
                        <table class="table" id="myTable2">
                            <thead>


                            <tr>
                                <th>#</th>

                                <th>Quiz Name</th>
                                <th>Quiz Format</th>
                                <th>Quiz Distribution</th>
{{--                                <th>Passing no</th>--}}
                                <th> Actions</th>
                            </tr>
                            </thead>
                            <tbody>


                            @foreach($data['signup'] as $sign)

                               <?php

                                  $count=1
                               ?>

                                <tr>
                                    <td>{{$count++}}</td>
                                    <td> {{$sign->erp_quiz_name}} </td>
                                    <td> {{$sign->erp_quiz_formats}} </td>
                                    <td> {{$sign->erp_quiz_timer}} </td>
                                    <td>

                                        <button class="btn btn-primary waves-effect" data-toggle="modal" data-target="#exampleModalCenter{{$sign->id}}">
                                          Sequence ({{$sign->erp_order_by}})
                                        </button>

                                        <div class="modal fade" id="exampleModalCenter{{$sign->id}}" tabindex="-1" role="dialog"
                                             aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <form action="{{url('/quizsequence',$sign->id)}}" method="post">
                                                        @csrf
                                                        @method('PUT')
                                                    <div class="modal-body text-center">

                                                    </div>
                                                    <div class="form-group">

                                                        <div class="form-line col-md-10 mx-5">
                                                            <input type="text" value="{{$sign->erp_order_by}}"
                                                                   class="form-control" name="erp_order_by"
                                                                   placeholder="Make your sequence">
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">

                                                        <button type="submit" class="btn btn-danger waves-effect"
                                                                data-dismiss="modal">Close</button>



                                                            <button type="submit"
                                                                    class="btn btn-info waves-effect">Submit</button>

                                                    </div>
                                                    </form>
                                                </div>

                                            </div>
                                        </div>

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

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                </div>
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Assign</strong> Quiz Form</h2>
                    </div>
                    <div class="header">
                    <div class="body table-responsive">
                        <h2>
                            <strong>select</strong> Worker
                        </h2>
                        <form action="{{route('assignquiz.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                        <div class="mt-4">
                            <label for="level">Select Level</label>
                            <select class="form-control select2 " name="level_id" id="level_id" data-placeholder="Select" >
                                <option value=""> Select Level</option>
                                @foreach($data['levels'] as $level)
                                <option value="{{$level->id}}">{{$level->erp_commission_level}}</option>
                                @endforeach
                            </select>

                        </div>
                        <div class="mt-4">
                            <label for="password">Select Role</label>
                            <select class="form-control " name="role_id"  id="role_id" data-placeholder="Select">
                                <option value="" disabled selected>Select Role</option>
                            </select>

                        </div>
                        <div class="mt-4">
                            <label for="password">Select Worker</label>
                            <select class="form-control select2 " name="users_id" id="users_id" data-placeholder="Select">
                                <option value="" disabled selected>Select Worker</option>
                            </select>
                        </div>
                        <h2 class="pt-4">
                            <strong>Select</strong> Quiz
                        </h2>
                        <div class="mt-4">
                            <label for="password">Select Quiz Type</label>
                            <select class="form-control select2 " name="quiz_type" id="quiz_type" data-placeholder="Select">
                                <option value="">Select Quiz Type</option>
                               <option value="login">Login</option>
                                <option value="signup">Signup</option>
                            </select>
                        </div>
                        <div class="mt-4">
                            <label for="quiz">Select Quiz</label>
                            <select class="form-control select2 " name="quizzes" id="quizzes" data-placeholder="Select">
                                <option value="">Select Quiz</option>
                            </select>
                        </div>
                        <div style="text-align:right;">
                        <button type="submit" class="btn btn-primary mt-3">submit</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
