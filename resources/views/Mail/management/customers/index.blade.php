
@extends('management/layouts/master')
@section('title')
    Customers
@endsection
@section('content')

    <div class="container">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title"> Customers</h4>
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

                        <!-- #START# Modal Form Example -->
                        <ul class="nav nav-tabs">
                            <li class="active"><a  data-toggle="tab" href="#tab1" class="active">Registered </a></li>
                            <li><a  data-toggle="tab" href="#Newworker">Subscribers</a></li>

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
                                            <th>Joining Date</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $count=1 ?>
                                        @foreach($datas as $data)
                                            <tr>
                                                <td scope="row">{{$count}}</td>
                                                <td>{{$data->name}}</td>
                                                <td>{{$data->email}}
                                                <td>{{date('d-M-y', strtotime($data->created_at))}}</td>
                                                @if($data->status == '1')
                                                    <td><label class="badge badge-success" data-toggle="modal" data-target="#active_inactive">Active</label></td>
                                                @elseif($data->status == '0')
                                                    <td><label class="badge badge-danger" data-toggle="modal" data-target="#active_inactive">Deactive</label></td>
                                                @endif
                                                <td>
                                                    <a href="{{route('users.show',$data->id)}}">
                                                        <button type="button" class="btn bg-blue btn-circle waves-effect waves-circle waves-float">
                                                        <i class="material-icons" href="#">edit</i>
                                                        </button>
                                                    </a>

                                                    <button type="button" class="btn bg-red btn-circle waves-effect waves-circle waves-float" data-toggle="modal" data-target="#exampleModalCenter{{$data->id}}">
                                                        <i class="material-icons"> delete  </i>
                                                    </button>

{{--                                                    @if ($announcements->erp_status == '0')--}}

{{--                                                        <div class="modal fade" id="exampleModalCenter{{$announcements->id}}" tabindex="-1" role="dialog"--}}
{{--                                                             aria-labelledby="exampleModalCenterTitle" aria-hidden="true">--}}
{{--                                                            <div class="modal-dialog modal-dialog-centered" role="document">--}}
{{--                                                                <div class="modal-content">--}}
{{--                                                                    <div class="modal-header">--}}
{{--                                                                        <h5 class="modal-title" id="exampleModalCenterTitle">Delete--}}
{{--                                                                        </h5>--}}
{{--                                                                        <button type="button" class="close" data-dismiss="modal"--}}
{{--                                                                                aria-label="Close">--}}
{{--                                                                            <span aria-hidden="true">&times;</span>--}}
{{--                                                                        </button>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="modal-body">--}}
{{--                                                                        Are you sure want to proceed this action?                                           </div>--}}
{{--                                                                    <div class="modal-footer">--}}

{{--                                                                        <button type="submit" class="btn btn-danger waves-effect"--}}
{{--                                                                                data-dismiss="modal">Close</button>--}}
{{--                                                                        <form action="{{route('announcement.destroy',$announcements->id)}}" method="post">--}}
{{--                                                                            @csrf--}}
{{--                                                                            @method('DELETE')--}}

{{--                                                                            <button type="submit" class="btn btn-info waves-effect">Delete</button>--}}

{{--                                                                        </form>--}}

{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    @else--}}
{{--                                                        <div class="modal fade" id="exampleModalCenter{{$announcements->id}}" tabindex="-1" role="dialog"--}}
{{--                                                             aria-labelledby="exampleModalCenterTitle" aria-hidden="true">--}}
{{--                                                            <div class="modal-dialog modal-dialog-centered" role="document">--}}
{{--                                                                <div class="modal-content bg-danger">--}}
{{--                                                                    <div class="modal-header">--}}
{{--                                                                        <h5 class="modal-title text-white " id="exampleModalCenterTitle" >Alert--}}
{{--                                                                            <i class="fas fa-exclamation-triangle"></i></h5>--}}
{{--                                                                        <button type="button" class="close" data-dismiss="modal"--}}
{{--                                                                                aria-label="Close">--}}
{{--                                                                            <span aria-hidden="true" class="text-white">&times;</span>--}}
{{--                                                                        </button>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="modal-body text-white">--}}
{{--                                                                        Only Disabled Announcement will be deleted--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="modal-footer">--}}

{{--                                                                        <button type="submit" class="btn btn-danger waves-effect"--}}
{{--                                                                                data-dismiss="modal">Close</button>--}}


{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    @endif--}}

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
                                        @foreach($datas as $data)
                                            <tr>
                                                <td scope="row">{{$count}}</td>
                                                <td>{{$data->name}}</td>
                                                <td>{{$data->email}}</td>
                                                <td>{{$data->cell_number}}</td>


                                                <td>{{date('d-M-y', strtotime($data->created_at))}}</td>
                                                @if($data->status == '1')
                                                    <td><label class="badge badge-success" data-toggle="modal" data-target="#active_inactive">Active</label></td>

                                                @elseif($data->status == '0')
                                                    <td><label class="badge badge-danger" data-toggle="modal" data-target="#active_inactive">Deactive</label></td>


                                                @endif
                                                <td>
                                                    <button type="button" class="btn bg-blue btn-circle waves-effect waves-circle waves-float" data-toggle="modal" data-target="#exampleModal2{{$data->id}}">
                                                        <i class="material-icons" href="#">edit</i>
                                                    </button>


                                                    {{--                                                    @include('management/announcement/edit')--}}








                                                    <button type="button" class="btn bg-red btn-circle waves-effect waves-circle waves-float" data-toggle="modal" data-target="#exampleModalCenter{{$data->id}}">
                                                        <i class="material-icons"> delete  </i>
                                                    </button>

                                                    {{--                                                    @if ($announcements->erp_status == '0')--}}

                                                    {{--                                                        <div class="modal fade" id="exampleModalCenter{{$announcements->id}}" tabindex="-1" role="dialog"--}}
                                                    {{--                                                             aria-labelledby="exampleModalCenterTitle" aria-hidden="true">--}}
                                                    {{--                                                            <div class="modal-dialog modal-dialog-centered" role="document">--}}
                                                    {{--                                                                <div class="modal-content">--}}
                                                    {{--                                                                    <div class="modal-header">--}}
                                                    {{--                                                                        <h5 class="modal-title" id="exampleModalCenterTitle">Delete--}}
                                                    {{--                                                                        </h5>--}}
                                                    {{--                                                                        <button type="button" class="close" data-dismiss="modal"--}}
                                                    {{--                                                                                aria-label="Close">--}}
                                                    {{--                                                                            <span aria-hidden="true">&times;</span>--}}
                                                    {{--                                                                        </button>--}}
                                                    {{--                                                                    </div>--}}
                                                    {{--                                                                    <div class="modal-body">--}}
                                                    {{--                                                                        Are you sure want to proceed this action?                                           </div>--}}
                                                    {{--                                                                    <div class="modal-footer">--}}

                                                    {{--                                                                        <button type="submit" class="btn btn-danger waves-effect"--}}
                                                    {{--                                                                                data-dismiss="modal">Close</button>--}}
                                                    {{--                                                                        <form action="{{route('announcement.destroy',$announcements->id)}}" method="post">--}}
                                                    {{--                                                                            @csrf--}}
                                                    {{--                                                                            @method('DELETE')--}}

                                                    {{--                                                                            <button type="submit" class="btn btn-info waves-effect">Delete</button>--}}

                                                    {{--                                                                        </form>--}}

                                                    {{--                                                                    </div>--}}
                                                    {{--                                                                </div>--}}
                                                    {{--                                                            </div>--}}
                                                    {{--                                                        </div>--}}
                                                    {{--                                                    @else--}}
                                                    {{--                                                        <div class="modal fade" id="exampleModalCenter{{$announcements->id}}" tabindex="-1" role="dialog"--}}
                                                    {{--                                                             aria-labelledby="exampleModalCenterTitle" aria-hidden="true">--}}
                                                    {{--                                                            <div class="modal-dialog modal-dialog-centered" role="document">--}}
                                                    {{--                                                                <div class="modal-content bg-danger">--}}
                                                    {{--                                                                    <div class="modal-header">--}}
                                                    {{--                                                                        <h5 class="modal-title text-white " id="exampleModalCenterTitle" >Alert--}}
                                                    {{--                                                                            <i class="fas fa-exclamation-triangle"></i></h5>--}}
                                                    {{--                                                                        <button type="button" class="close" data-dismiss="modal"--}}
                                                    {{--                                                                                aria-label="Close">--}}
                                                    {{--                                                                            <span aria-hidden="true" class="text-white">&times;</span>--}}
                                                    {{--                                                                        </button>--}}
                                                    {{--                                                                    </div>--}}
                                                    {{--                                                                    <div class="modal-body text-white">--}}
                                                    {{--                                                                        Only Disabled Announcement will be deleted--}}
                                                    {{--                                                                    </div>--}}
                                                    {{--                                                                    <div class="modal-footer">--}}

                                                    {{--                                                                        <button type="submit" class="btn btn-danger waves-effect"--}}
                                                    {{--                                                                                data-dismiss="modal">Close</button>--}}


                                                    {{--                                                                    </div>--}}
                                                    {{--                                                                </div>--}}
                                                    {{--                                                            </div>--}}
                                                    {{--                                                        </div>--}}
                                                    {{--                                                    @endif--}}

                                                </td>

                                            </tr>
                                            <?php $count++ ?>
                                        @endforeach
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

