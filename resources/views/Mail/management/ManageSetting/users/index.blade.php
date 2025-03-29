
@extends('management/layouts/master')
@section('title')
    Users
@endsection
@section('content')

    <div class="container">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title"> Users</h4>
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
                            <strong>Role Based</strong></h2>

                        <!-- #START# Modal Form Example -->
                        <ul class="nav nav-tabs">
                            <li class="active"><a  data-toggle="tab" href="#tab1" class="active">All Workers</a></li>
                            <li><a  data-toggle="tab" href="#Newworker">New Workers Accounts</a></li>
                            <li><a  data-toggle="tab" href="#onerole">One Role Accounts</a></li>
                            <li><a  data-toggle="tab" href="#multiple">Multiple Roles Accounts</a></li>
                            <li><a  data-toggle="tab" href="#blockeduser">Blocked Accounts</a></li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1">
                                <div class="body table-responsive">
                                    <table class="table" id="myTable">
                                        <thead>
                                        <tr>
                                            <th>S.No</th>
                                            <th>Full Name</th>
                                            <th>Email</th>
                                            <th>Ph Number</th>
                                            <th>Joining Date</th>
                                            <th>Status</th>
                                            <th> Details</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <?php $count=1
                                            ?>
                                            @foreach($datas['user'] as $data)
                                                <tr>
                                            <td scope="row">{{$count ++}}</td>
                                            <td>{{$data->name}}</td>
                                            <td>{{$data->email}}</td>
                                            <td>
                                                @if($data['user'] != null)
                                                {{$data->cell_number}}
                                                @else
                                                {{'N/A'}}
                                                    @endif
                                            </td>
                                            <td>{{date('d-M-y', strtotime($data->created_at))}}</td>
                                                    @if($data->status == '1')
                                                        <td><label class="badge badge-success" data-toggle="modal" data-target="#active_inactive">Approved</label></td>

                                                    @elseif($data->status == '2')
                                                        <td><label class="badge badge-danger" data-toggle="modal" data-target="#active_inactive">Blocked</label></td>

                                                    @else
                                                        <td><label class="badge badge-info" data-toggle="modal" data-target="#active_inactive">Pending</label></td>

                                                    @endif
                                                    <td>
                                                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                                           <a href="{{URl('user-management',$data->id)}}">
                                                               <button type="button" class="btn btn-primary">View
                                                            </button>
                                                           </a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                                                <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#exampleModal{{$data->id}}">Assign
                                                                </button>
                                                                <div class="modal fade" id="exampleModal{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="formModal" aria-hidden="true">
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

                                                                            @include('management/ManageSetting/users/addRole')
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                    </td>
                                                </tr>
                                                <?php $count++ ?>
                                                @endforeach
                                        </tbody>
                                    </table>
                                </div>


                            </div>
                            <div class="tab-pane fade" id="Newworker" role="tabpanel" aria-labelledby="tab3">
                            <div class="body table-responsive">
                                <table class="table" id="myTable">
                                    <thead>
                                    <tr>
                                        <th>S.No</th>
                                        <th>Full Name</th>
                                        <th>Email</th>
                                        <th>Phone Number</th>
                                        <th>Joining Date</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php $count=1 ?>
                                    @foreach($datas['new'] as $data)
                                        <tr>
                                            <td scope="row">{{$count}}</td>
                                            <td>{{$data->name}}</td>
                                            <td>{{$data->email}}</td>
                                            <td>{{$data->cell_number}}</td>
                                            <td>{{date('d-M-y', strtotime($data->created_at))}}</td>
                                            @if($data->status == '1')
                                                <td><label class="badge badge-success" data-toggle="modal" data-target="#active_inactive">Approved</label></td>

                                            @elseif($data->status == '2')
                                                <td><label class="badge badge-danger" data-toggle="modal" data-target="#active_inactive">Blocked</label></td>

                                            @else
                                                <td><label class="badge badge-info" data-toggle="modal" data-target="#active_inactive">Pending</label></td>

                                                    @endif
                                            <td>
                                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                                        <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#exampleModal{{$count}}">Assign
                                                        </button>
                                                        <div class="modal fade" id="exampleModal{{$count}}" tabindex="-1" role="dialog" aria-labelledby="formModal" aria-hidden="true">
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

                                                                    @include('management/ManageSetting/users/addRole')
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                            </td>
                                        </tr>
                                        <?php $count++ ?>
                                    @endforeach


                                    </tbody>
                                </table>
                            </div>
                        </div>
                            <div class="tab-pane fade" id="onerole" role="tabpanel" aria-labelledby="tab4">
                                <div class="body table-responsive">
                                    <table class="table" >
                                        <thead>
                                        <tr>
                                            <th>S.No</th>
                                            <th>Full Name</th>
                                            <th>Email</th>
                                            <th>Phone Number</th>
                                            <th>Joining Date</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                            @foreach($datas['userbyrole'] as $data)
                                                @if (count($data['roles']) == 1)

                                                        <?php $count=1 ?>
                                                        <tr>
                                                    <td scope="row">{{$count++}}</td>
                                                    <td>{{$data['name']}}</td>
                                                    <td>{{$data['email']}}</td>
                                                    <td>{{$data['phone']}}</td>
                                                    <td>{{date('d-M-y', strtotime($data['date']))}}</td>
                                                    @if($data['status'] == '1')
                                                        <td><label class="badge badge-success" data-toggle="modal" data-target="#active_inactive">Approved</label></td>

                                                    @elseif($data['status']== '2')
                                                        <td><label class="badge badge-danger" data-toggle="modal" data-target="#active_inactive">Blocked</label></td>

                                                    @else
                                                        <td><label class="badge badge-info" data-toggle="modal" data-target="#active_inactive">Pending</label></td>

                                                            @endif
                                                           <td>

                                                                <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#exampleModal1{{$count}}">Assign
                                                                </button>
                                                                   <div class="modal fade" id="exampleModal1{{$count}}" tabindex="-1" role="dialog" aria-labelledby="formModal" aria-hidden="true">
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
                                                                            <form action="{{route('role-Assign.store')}}" method="post">
                                                                    @csrf
                                                                    <div class="academic_level">
                                                                        <div class="modal-body">
                                                                            <div class="modal-body">
                                                                                <label for="email_address1">User Name</label>
                                                                                <div class="form-group">
                                                                                    <div class="form-line">
                                                                                        <select class="form-control select2" readonly id="Quiz-type" name="user_id" data-placeholder="Select">
                                                                                            <option value="{{$data['id']}}"> {{$data['name']}}</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <label for="email_address1">Status</label>
                                                                                <div class="form-group">
                                                                                    <div class="form-line">
                                                                                        <select class="form-control select2" readonly id="status" name="status" data-placeholder="Select">
                                                                                            <option value="0"> Pending</option>
                                                                                            <option value="1"> Approve</option>
                                                                                            <option value="2"> Block</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <label for="email_address1">Commission</label>
                                                                                <div class="form-group">
                                                                                    <div class="form-line">
                                                                                        <select class="form-control select2" id="Quiz-type" name="Commission_id" data-placeholder="Select">
                                                                                            <option  selected disabled value=""> Select Role</option>
                                                                                        @foreach($datas['commission'] as $commission )
                                                                                                <option value="{{$commission->id}}"> {{$commission->package_name}}</option>
                                                                                            @endforeach
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <div class="modal-footer">
                                                                                <button type="submit" class="btn btn-danger waves-effect"
                                                                                        data-dismiss="modal">Close</button>
                                                                                <button type="submit"
                                                                                        class="btn btn-info waves-effect">Submit</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                          </form>

                                                                        </div>
                                                                    </div>
                                                                </div>

                                                        </td>

                                        </tr>
                                                    @endif
                                        <?php $count++ ?>

                                                    @endforeach



                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="multiple" role="tabpanel" aria-labelledby="tab5">
                                <div class="body table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>S.No</th>
                                            <th>Full Name</th>
                                            <th>Email</th>
                                            <th>Phone Number</th>
                                            <th>Joining Date</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                        <?php $count=1 ?>


                                        @foreach($datas['userbyrole'] as $data)

                                                @if (count($data['roles']) > 1 )

                                                    <td scope="row">{{$count}}</td>
                                                    <td>{{$data['name']}}</td>
                                                    <td>{{$data['email']}}</td>
                                                    <td>{{$data['phone']}}</td>
                                                    <td>{{date('d-M-y', strtotime($data['date']))}}</td>
                                                    @if($data['status'] == '1')
                                                        <td><label class="badge badge-success" data-toggle="modal" data-target="#active_inactive">Approved</label></td>
                                                    @elseif($data['status']== '2')
                                                        <td><label class="badge badge-danger" data-toggle="modal" data-target="#active_inactive">Blocked</label></td>
                                                    @else
                                                        <td><label class="badge badge-info" data-toggle="modal" data-target="#active_inactive">Pending</label></td>
                                                            @endif
                                                <td>
                                                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                                                <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#exampleModal2{{$count}}">Assign
                                                                </button>
                                                                <div class="modal fade" id="exampleModal2{{$count}}" tabindex="-1" role="dialog" aria-labelledby="formModal" aria-hidden="true">
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
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                </td>
                                                @endif
                                                <?php $count++ ?>
                                                @endforeach
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="blockeduser" role="tabpanel" aria-labelledby="tab7">
                                <div class="body table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                        <tr>
                                            <th>S.No</th>
                                            <th>Full Name</th>
                                            <th>Email</th>
                                            <th>Phone Number</th>
                                            <th>Joining Date</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $count=1 ?>
                                        @foreach($datas['user'] as $data)

                                            @if ($data->status == 2)


                                            <tr>
                                                <td scope="row">{{$count}}</td>
                                                <td>{{$data->name}}</td>
                                                <td>{{$data->email}}</td>
                                                <td>{{$data->cell_number}}</td>
                                                <td>{{date('d-M-y', strtotime($data->created_at))}}</td>
                                                @if($data->status == '1')
                                                    <td><label class="badge badge-success" data-toggle="modal" data-target="#active_inactive">Approved</label></td>
                                                @elseif($data->status == '2')
                                                    <td><label class="badge badge-danger" data-toggle="modal" data-target="#active_inactive">Blocked</label></td>
                                                @else
                                                    <td><label class="badge badge-info" data-toggle="modal" data-target="#active_inactive">Pending</label></td>
                                                        @endif
                                                <td>
                                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                                            <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#exampleModal{{$data->id}}">Assign
                                                            </button>
                                                            <div class="modal fade" id="exampleModal{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="formModal" aria-hidden="true">
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

                                                                        @include('management/ManageSetting/users/addRole')
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </td>
                                            </tr>
                                            @endif
                                            <?php $count++ ?>
                                        @endforeach


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab8" role="tabpanel" aria-labelledby="tab8">
                                <div class="body table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>Radio Button</th>
                                            <th>S.No</th>
                                            <th>Full Name</th>
                                            <th>Email</th>
                                            <th>Signup Date</th>
                                            <th>Joining Date</th>
                                            <th>Worker Profile</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                            <td>@fat</td>
                                            <td>@fat</td>





                                        </tr>


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab9" role="tabpanel" aria-labelledby="tab9">
                                <div class="body table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>Radio Button</th>
                                            <th>S.No</th>
                                            <th>Full Name</th>
                                            <th>Email</th>
                                            <th>Signup Date</th>
                                            <th>Joining Date</th>
                                            <th>Worker Profile</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                            <td>@fat</td>
                                            <td>@fat</td>





                                        </tr>


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab10" role="tabpanel" aria-labelledby="tab10">
                                <div class="body table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>Radio Button</th>
                                            <th>S.No</th>
                                            <th>Full Name</th>
                                            <th>Email</th>
                                            <th>Signup Date</th>
                                            <th>Joining Date</th>
                                            <th>Worker Profile</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                            <td>@fat</td>
                                            <td>@fat</td>





                                        </tr>


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                    </div>




                </div>
            </div>
        </div>
    </div>


@endsection

