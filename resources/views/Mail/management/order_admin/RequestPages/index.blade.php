@extends('management.layouts.master')
@section('title')
    Page Request
@endsection
@section('content')
    <div class="container">
        @include('management.layouts.error')
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title"> Page Request</h4>
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
                <div class="card">
                    <div class="header">
                        <!-- #START# Modal Form Example -->
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">


                        </div>
                        {{--                        <h5 class="text-center">New Orders: (Pending Admin Approval)</h5>--}}
                        <div class="body table-responsive">
                            <table class="table" id="myTable">
                                <thead>
                                <tr>
                                    <th>Sno</th>
                                    <th>Order ID</th>
                                    <th>Order Name</th>
                                    <th>User Name</th>
                                    <th>Commission</th>
                                    <th>Pages</th>
                                    <th>Status</th>
                                    <th>Action</th>


                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $count = 1
                                ?>
                                @foreach($data['req'] as $row)
                                    <tr>
                                        <td scope="row">{{$count++}}</td>
                                        <td> {{$row->order['id']}} </td>
                                        <td>{{$row->order['erp_order_topic']}}</td>
                                        <td> {{$row['users']['name']}}</td>
                                        <td> {{$row->commissionwork['package_name']}}</td>
                                        <td> {{$row->order['erp_number_Pages']}} </td>
                                        @if($row->status == '0')

                                            <td><label class="badge badge-info" data-toggle="modal"
                                                       data-target="#active_inactive">Pending</label>

                                            </td>

                                        @elseif($row->status == 1)
                                            <td><label class="badge badge-primary" data-toggle="modal"
                                                       data-target="#active_inactive">Approved</label>

                                            </td>
                                        @else($row->status == 2)
                                            <td><label class="badge badge-danger" data-toggle="modal"
                                                       data-target="#active_inactive">Rejected</label>

                                            </td>

                                        @endif
                                        @if($row->status == 1)
                                        <td>
                                            <button type="button" class="btn btn-primary text-white" data-toggle="modal"
                                                    data-target="#exampleModal{{$row->id}}" disabled>Progress
                                            </button>
                                        </td>
                                        @else
                                            <td>
                                                <button type="button" class="btn btn-primary text-white" data-toggle="modal"
                                                        data-target="#exampleModal{{$row->id}}">Progress
                                                </button>
                                            </td>
                                            @endif
                                    </tr>

                                </tbody>
                                </tr>
                                <div class="modal fade" id="exampleModal{{$row->id}}" tabindex="-1" role="dialog"
                                     aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <form action="{{route('PageRequest.update',$row->id)}}" method="post"
                                                  enctype="multipart/form-data">



                                                <input value="{{$row->order['id']}}" type="hidden" name="order_id">



                                                @csrf
                                                @method('PUT')
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalCenterTitle">Progress Order
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">

                                                    <div class="container">
                                                        <div class="row col-md-12">
                                                            <div class="col-md-5">
                                                                <label for="email_address1">Deadline </label>
                                                                <input type="text" id="erp_question_text"
                                                                       class="form-control" value="erp_deadline" readonly>
                                                            </div>
                                                            <div class="col-md-7 form-group">
                                                                <label for="email_address1">Deadline </label>

                                                                <div class="form-line">
                                                                    <input id="DateTime"
                                                                           type="datetime-local"
                                                                           name="DateTime"
                                                                           value="{{date('Y-m-d\TH:i', strtotime($row->DateTime))}}">

                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="row col-md-12">
                                                            <div class="col-md-6">
                                                                <label for="email_address1">Previous No of
                                                                    Pages </label>
                                                                <input type="text" id="erp_question_text"
                                                                       class="form-control"
                                                                      value="{{$row->order['erp_number_Pages']}}" readonly>
                                                            </div>
                                                            <div class="col-md-6 form-group">
                                                                <label for="email_address1">New no of Pages </label>

                                                                <div class="form-line">
                                                                    <input value="{{$row->pages_no}}" type="text"
                                                                           id="erp_question_text"
                                                                           class="form-control" name="pages_no">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 form-group">

                                                                    <select  class="form-control select2 " id="" name="status" data-placeholder="Select">
                                                                        <option {{$row->status == '0' ? 'selected' : ''}} value="0">Pending</option>
                                                                        <option {{$row->status == '1' ? 'selected' : ''}} value="1">Approve</option>
                                                                        <option {{$row->status == '2' ? 'selected' : ''}} value="2">Reject </option>
                                                                    </select>


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
                                            </form>
                                        </div>
                                    </div>
                                </div>
                        </div>

                        @endforeach
                    </div>


                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div></div>
@endsection
