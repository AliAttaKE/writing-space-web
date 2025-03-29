@extends('management/layouts/master')
@section('title')
     Assign Roles
@endsection
@section('content')
    <div class="container">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title"> Assign Roles</h4>
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
                            <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#exampleModal">Assign Role
                            </button>
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="formModal" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="create_questions">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="formModal">Assign Role</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                        </div>

                                        @include('management/ManageSetting/RoleAssign/add')
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="body table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th class="col-lg-2">ID</th>
                                <th class="col-lg-4">User Name</th>
                                <th class="col-lg-3">Role</th>
                                <th class="col-lg-3">Level</th>
                                <th class="col-lg-3"> Monitor</th>
                                <th class="col-lg-3">Commission</th>
                                <th class="col-lg-3">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                                $count=1
                                ?>
                            @foreach($data['roles'] as $roleassigner)
                            <tr>
                                <th scope="row">{{$count++}}</th>
                                <td>{{$roleassigner->user->name}}</td>
                                <td>{{$roleassigner->role->erp_work_flow_role}}</td>
                                <td>{{$roleassigner->level->erp_commission_level}}</td>
                                <td>{{$roleassigner->user->monitor == '1' ? 'Yes' : 'No'}}</td>
                                <td>{{$roleassigner->package->package_name}}</td>

                                <form action="{{route('role-Assign.update',$roleassigner->id)}}" method="post">
                                    @csrf
                                    @method('PUT')
                                <td>
                                    <button type="button" class="btn bg-blue btn-circle waves-effect waves-circle waves-float" data-toggle="modal" data-target="#exampleModal{{$roleassigner->id}}">
                                        <i class="material-icons">edit</i>
                                    </button>
                                   @include('management/ManageSetting/RoleAssign/edit')
                                </form>
                                    <button type="button" class="btn bg-red btn-circle waves-effect waves-circle waves-float" data-toggle="modal" data-target="#exampleModalCenter{{$roleassigner->id}}">
                                        <i class="material-icons"> delete  </i>
                                    </button>
                                    <div class="modal fade" id="exampleModalCenter{{$roleassigner->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                                                    <form action="{{route('role-Assign.destroy',$roleassigner->id)}}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                    <button type="submit" class="btn btn-info waves-effect">Delete</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    $count++;
                                    ?>
                                    @endforeach
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
{{--@include('management/ManageSetting/addCommission/index')--}}



@endsection
