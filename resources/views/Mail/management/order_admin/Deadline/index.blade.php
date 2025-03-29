@extends('management.layouts.master')
@section('title')
    Page Request
@endsection
@section('content')
    <div class="container">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title"> Deadline Extension </h4>


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
                @include('management.layouts.error')
                <div class="card">
                    <div class="header">
                        <!-- #START# Modal Form Example -->
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        </div>
                        <table class="table" id="myTable">
                            <thead>
                            <tr>
                                <th>Sno</th>
                                <th>order ID</th>
                                <th>Username</th>
                                <th>Erp Previous</th>
                                <th>Deadline Extension</th>
                                <th> Extension Type</th>
                                <th> Status</th>
                                <th >Actions</th>
                                <th >New Deadline</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $count = 1
                            ?>

                            @foreach($data as $row)


                                @if ($row->deadlineext != null)
                                    <tr>
                                        <td scope="row">{{$count++}}</td>
                                        <td> {{$row->erp_order_id}}</td>
                                        <td> {{$row['user']['name']}}</td>



                                        @if ($row->exttype == 'bid')
                                            <td> {{date('d-M-Y h.i.A',strtotime($row->erp_datetime))}}</td>
                                        @else
                                            <td> {{date('d-M-Y h.i.A',strtotime($row['order']['erp_datetime']))}}</td>

                                        @endif

                                        <td> {{date('d-M-Y h.i.A',strtotime($row->deadlineext))}}</td>


                                        <td> {{$row->exttype}} </td>
                                        @if ($row->exttype == 'bid')

                                        <td> User</td>
                                        @else
                                           <td> {{"Client"}} </td>
                                        @endif
                                        @if($row->deadlinestatus == '0')
                                            <td><label class="badge badge-info" data-toggle="modal"
                                                       data-target="#active_inactive">Pending</label>
                                            </td>
                                        @elseif($row->deadlinestatus == '1')
                                            <td><label class="badge badge-primary" data-toggle="modal"
                                                       data-target="#active_inactive">Approved</label>
                                            </td>
                                        @elseif($row->deadlinestatus == '2')
                                            <td><label class="badge badge-danger" data-toggle="modal"
                                                       data-target="#active_inactive">Rejected</label>
                                            </td>
                                        @endif

                                        <td class="d-inline-block">
                                            <div class="row">
                                                <div class="mx-3">
                                                    <button type="button" value="1" name="deadlinestatus"
                                                            class="btn btn-primary text-white" data-toggle="modal"
                                                            data-target="#exampleModalCenter{{$row->id}}">
                                                        Approved
                                                    </button>
                                                    <form action="{{url('deadlineextupdate',$row->id)}}" method="post">
                                                        @csrf
                                                        <input value="1" type="hidden" name="deadlinestatus">
                                                        <input value="{{$row->deadlineext}}" type="hidden" name="deadlineext">
                                                        <input value="{{$row->erp_datetime}}" type="hidden" name="erp_datetime">
                                                        <input value="{{$row->erp_order_id}}" type="hidden" name="erp_order_id">



                                                        <div class="modal fade" id="exampleModalCenter{{$row->id}}"
                                                             tabindex="-1" role="dialog"
                                                             aria-labelledby="exampleModalCenterTitle"
                                                             aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered"
                                                                 role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title"
                                                                            id="exampleModalCenterTitle">Approved
                                                                        </h5>
                                                                        <button type="button" class="close"
                                                                                data-dismiss="modal"
                                                                                aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        Are you sure want to proceed this action?
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="submit"
                                                                                class="btn btn-danger waves-effect"
                                                                                data-dismiss="modal">Close
                                                                        </button>
                                                                        <button type="submit"
                                                                                class="btn btn-info waves-effect">Submit
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div>
                                                <button type="button" value="1" name="deadlinestatus"
                                                        class="btn btn-danger text-white" data-toggle="modal"
                                                        data-target="#exampleModalCenter1{{$row->id}}">
                                                    Reject
                                                </button>
                                                <form action="{{url('deadlineextupdate',$row->id)}}" method="post">
                                                    @csrf

                                                    <input value="2" type="hidden" name="deadlinestatus">
                                                    <input value="{{$row->deadlineext}}" type="hidden" name="deadlineext">
                                                    <input value="{{$row->erp_datetime}}" type="hidden" name="erp_datetime">
                                                    <input value="{{$row->erp_order_id}}" type="hidden" name="erp_order_id">
                                                    <input value="{{$row['order']['erp_datetime']}}" type="hidden" name="erp_date">


                                                    <div class="modal fade" id="exampleModalCenter1{{$row->id}}"
                                                         tabindex="-1" role="dialog"
                                                         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title"
                                                                        id="exampleModalCenterTitle">Reject
                                                                    </h5>
                                                                    <button type="button" class="close"
                                                                            data-dismiss="modal"
                                                                            aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Are you sure want to proceed this action?
                                                                </div>
                                                                <div class="modal-footer">

                                                                    <button type="submit"
                                                                            class="btn btn-danger waves-effect"
                                                                            data-dismiss="modal">Close
                                                                    </button>

                                                                    <button type="submit"
                                                                            class="btn btn-info waves-effect">Submit
                                                                    </button>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </form>
                                            </div>
                                            </div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-primary text-white" data-toggle="modal"
                                                    data-target="#exampleModal2{{$row->id}}">New
                                            </button>
                                        </td>
                                    </tr>
                                    <div class="modal fade" id="exampleModal2{{$row->id}}" tabindex="-1" role="dialog"
                                         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <form action="{{url('extension-update',$row->id)}}" method="post">
                                                    @csrf



                                                    <input value="2" type="hidden" name="deadlinestatus">
                                                    <input value="{{$row->deadlineext}}" type="hidden" name="deadlineext">
                                                    <input value="{{$row->erp_datetime}}" type="hidden" name="erp_datetime">
                                                    <input value="{{$row->erp_order_id}}" type="hidden" name="erp_order_id">
                                                    <input value="{{$row['order']['erp_datetime']}}" type="hidden" name="erp_date">



                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalCenterTitle">Deadline Extension
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">

                                                        <div class="container">
                                                            <div class="row col-md-12">

                                                                <div class="col-md-12 form-group">
                                                                    <label for="email_address1">Deadline </label>

                                                                    <div class="form-line">
                                                                        <input id="DateTime"
                                                                               type="datetime-local"
                                                                               name="DateTime"
                                                                               value="{{date('Y-m-d\TH:i', strtotime($row['order']['erp_datetime']))}}" readonly>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row col-md-12">
                                                                <div class="col-md-12 form-group">
                                                                    <label for="email_address1">Requested </label>

                                                                    <div class="form-line">
                                                                        <input id="DateTime"
                                                                               type="datetime-local"
                                                                               name="DateTime"
                                                                               value="{{date('Y-m-d\TH:i', strtotime($row->deadlineext))}}" readonly>

                                                                    </div>

                                                                </div>
                                                                <div class="col-md-12x form-group">
                                                                    <label for="email_address1">New deadline </label>

                                                                    <div class="form-line">
                                                                        <input id="DateTime"
                                                                               type="datetime-local"
                                                                               name="DateTime"
                                                                               value="{{date('Y-m-d\TH:i', strtotime($row->DateTime))}}">

                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12 form-group">



                                                                </div>



                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">

                                                        <button type="submit" class="btn btn-danger waves-effect"
                                                                data-dismiss="modal">Close
                                                        </button>
                                                        <button type="submit" class="btn btn-info waves-effect">Update
                                                        </button>


                                                    </div>
                                                </form>

                                        </div>
                                    </div>

                                 @endif
                        @endforeach
                    </div>
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
