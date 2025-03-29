@extends('worker/layouts/master')
@section('title')
       All Feedback
@endsection
@section('content')
    <div class="container my-5">
        @include('worker.layouts.error')
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-lg-4 col-4">
                        <div><img src="{{asset('management/images/logo_23e95417-e868-4de7-96b3-74c3eebc48a2_180x (1).png')}}" height="80px" alt=""></div>
                    </div>
                    <div class="col-lg-8 col-8 my-5">
                        <h4>Emirati Coffee Client Feedback Form </h4>
                    </div>
                    <div class="col-lg-12 col-12">
                        <div class="card">
                            <div class="header">
                                <div class="body table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th class="col-lg-2">ID</th>
                                            <th class="col-lg-2">Username</th>
                                            <th class="col-lg-2">Coustomer Services</th>
                                            <th class="col-lg-2">Feedback Beans</th>
                                            <th class="col-lg-2">Delievery drives</th>
                                            <th class="col-lg-2">Show Feedback</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $count=1
                                        ?>
                                        @foreach($data as $row)
                                            <tr>
                                                <th scope="row">{{$count++}}</th>
                                                <td>{{$row['UserName']->name}}</td>
                                                <td>{{$row->erp_coutomer_services}}</td>
                                                <td>{{$row->erp_feedback_beans}}</td>
                                                <td>{{$row->erp_delivery_drives}}</td>
                                                <td>
                                                    <button type="button" class="btn btn-primary text-white" data-toggle="modal" data-target="#exampleModal{{$row->id}}">Show Feedback
                                                    </button>

                                                    <div class="modal fade" id="exampleModal{{$row->id}}" tabindex="-1" role="dialog"
                                                         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                            <div class="modal-content">
                                                            <div class="create_questions">
                                                                <div class="modal-header">

                                                                    <h5 class="modal-title" id="formModal">{{$row['UserName']->name}}</h5>
                                                                    <button type="button" class="close" data-dismiss="modal"
                                                                            aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div></div>
                                                                <div class="modal-body">
                                                                <div class="form-group">
                                                                    <label for="formGroupExampleInput">Feedback on our coutomer services?</label>
                                                                    <p>{{$row->erp_coutomer_services}}</p>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="formGroupExampleInput" >Feedback on our beans?</label>
                                                                    <p>{{$row->erp_feedback_beans}}</p>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="formGroupExampleInput" >Feedback on delivery and delivery drives?</label>
                                                                    <p>{{$row->erp_delivery_drives}}</p>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="formGroupExampleInput" >Requirements and Needs</label>
                                                                    <p>{{$row->erp_requirement_need}}</p>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="formGroupExampleInput" >Genteral Feedback</label>
                                                                    <p>{{$row->erp_general_feedback}}</p>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="formGroupExampleInput" >Current type of beans clients is using and why?</label>
                                                                    <p>{{$row->erp_beans_clients}}</p>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="formGroupExampleInput" >is the client interested in having a retail shelve to sell our beans? <br>
                                                                        and capsules and instant coffee in their shop?</label>
                                                                    <div>
                                                                        <p>{{$row->erp_feedback_message}}</p>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="formGroupExampleInput" >Suggestion</label>
                                                                    <p>{{$row->erp_suggestion}}</p>
                                                                </div>
                                                            </div>
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
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection
