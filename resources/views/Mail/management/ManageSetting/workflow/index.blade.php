
@extends('management/layouts/master')
@section('title')
    Work Flow
@endsection
@section('content')

    <div class="container">

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title"> Roles</h4>
                            </li>

                        </ul>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <button type="button" class="btn btn-primary float-right mt-3"> Back
                        </button>
                    </div>

                </div>
                @include('management/layouts/error')
                <div class="card">

                    <div class="header">
                        <!-- #START# Modal Form Example -->
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#exampleModal">Add Roles
                            </button>
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="formModal" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="create_questions">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="formModal">Add Roles</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>

                                        </div>


                                        @include('management/ManageSetting/workflow/add')
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                    <div class="body table-responsive">
                        <table class="table" id="myTable">
                            <thead>
                            <tr>
                                <th class="col-lg-2">#</th>
                                <th class="col-lg-4">Role Name</th>
                                <th class="col-lg-3">Status</th>
                                <th class="col-lg-3">Actions</th>

                            </tr>
                            </thead>
                            <tbody>

                                <?php
                                    $count=1
                                        ?>
                            @foreach($workflow as $workflows)
                            <tr>
                                <th scope="row">{{$count++}}</th>
                                <td>{{$workflows->erp_work_flow_role}}</td>

                                @if($workflows->erp_work_flow_status == '1')
                                    {{--                            <td>{{$quizes->erp_quiz_status}}</td>--}}
                                    <td><label class="badge badge-info" data-toggle="modal" data-target="#active_inactive">Enable</label></td>

                                @else
                                    <td><label class="badge badge-danger" data-toggle="modal" data-target="#active_inactive">Disabled</label></td>

                                @endif


                                <form action="{{route('workflow.update',$workflows->id)}}" method="post">
                                    @csrf
                                    @method('PUT')

                                <td>


                                    <button type="button" class="btn bg-blue btn-circle waves-effect waves-circle waves-float" data-toggle="modal" data-target="#exampleModal{{$workflows->id}}">
                                        <i class="material-icons">edit</i>
                                    </button>
                                    @include('management/ManageSetting/workflow/edit')


                                    </form>
                                    <button type="button" class="btn bg-red btn-circle waves-effect waves-circle waves-float" data-toggle="modal" data-target="#exampleModalCenter{{$workflows->id}}">
                                        <i class="material-icons"> delete  </i>
                                    </button>


                                @if ($workflows->erp_work_flow_status == '0')


                                    <div class="modal fade" id="exampleModalCenter{{$workflows->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalCenterTitle">Delete
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    Are you sure you want to proceed with this action?
                                                </div>
                                                <div class="modal-footer">

                                                    <button type="submit" class="btn btn-danger waves-effect" data-dismiss="modal">Close</button>
                                                    <form action="{{route('workflow.destroy',$workflows->id)}}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                    <button  type="submit" class="btn btn-info waves-effect">Delete</button>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @else
                                    <div class="modal fade" id="exampleModalCenter{{$workflows->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content bg-danger">
                                                <div class="modal-header">
                                                    <h5 class="modal-title text-white " id="exampleModalCenterTitle" >Alert
                                                        <i class="fas fa-exclamation-triangle"></i></h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                        <span aria-hidden="true" class="text-white">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body text-white">
                                                    Only Disabled Roles will be deleted
                                                </div>
                                                <div class="modal-footer">

                                                    <button type="submit" class="btn btn-danger waves-effect"
                                                            data-dismiss="modal">Close</button>


                                                </div>
                                            </div>
                                        </div>
                                    </div>




                                </td>
                                @endif





                            </tr>
                            @endforeach
                                <?php
                                $count++
                                ?>

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>


@endsection

