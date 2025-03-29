
@extends('customers.Layouts.master')
@section('title')
    Create Order
@endsection
@section('content')
    <div class="container">

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title"> Create Order</h4>
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
                            <button type="button" class="btn btn-primary woworder" data-toggle="modal"
                                    data-target="#exampleModal"> Create Order
                            </button>
                            @include('customers.create.add')
                        </div>
                        <h5 class="text-center">New Orders: (Pending Admin Approval)</h5>
                        <div class="body table-responsive">
                            <table class="table"  id="myTable">
                                <thead>
                                <tr>
                                    <th>Sno</th>
                                    <th>OrderNo</th>
                                    <th>Subject</th>
                                    <th>Status</th>
                                    <th class="w-25">Actions</th>




                                </tr>
                                </thead>
                                <tbody>
                                <td>1</td>
                                <td>45</td>
                                <td>Computer</td>
                                <td><label class="badge badge-info" data-toggle="modal" data-target="#active_inactive">In-process</label>

                                </td>


                                <td>
                                    <button type="button" class="btn bg-blue btn-circle waves-effect waves-circle waves-float" data-toggle="modal" data-target="#exampleModal2">
                                        <i class="material-icons" href="#">edit</i>
                                    </button>
                                    <button type="button" class="btn bg-red btn-circle waves-effect waves-circle waves-float" data-toggle="modal" data-target="#exampleModalCenter1}}">
                                        <i class="material-icons"> delete  </i>
                                    </button>

                                </td>
{{--                                <?php--}}
{{--                                $count=1--}}
{{--                                ?>--}}
{{--                                @foreach($create_order as $row)--}}
{{--                                    <tr>--}}
{{--                                        <td scope="row">{{$count++}}</td>--}}
{{--                                        <td><a href="{{route('new-order.show',$row->id)}}">{{$row->id}}</a></td>--}}
{{--                                        <td>{{$row->erp_subject_name}}</td>--}}
{{--                                        <td>{{$row->erp_paper_type}}</td>--}}
{{--                                        <td>{{$row->erp_paper_format}}</td>--}}
{{--                                        <td>{{$row->erp_language_name}}--}}
{{--                                        <td>{{$row->erp_academic_name}}</td>--}}

{{--                                        <td>{{$row->erp_number_Pages}}</td>--}}
{{--                                        <td>{{$row->erp_copy_sources}} </td>--}}






{{--                                        <td>--}}
{{--                                            <button type="button" class="btn bg-blue btn-circle waves-effect waves-circle waves-float" data-toggle="modal" data-target="#exampleModal1{{$row->id}}">--}}
{{--                                                <i class="material-icons">edit</i>--}}
{{--                                            </button>--}}


{{--                                            @include('management.order_admin.CreateOrder.editmodal')--}}
{{--                                            <button type="button" class="btn bg-red btn-circle waves-effect waves-circle waves-float" data-toggle="modal" data-target="#exampleModalCenter1{{$row->id}}">--}}
{{--                                                <i class="material-icons"> delete  </i>--}}
{{--                                            </button>--}}
{{--                                            <div class="modal fade" id="exampleModalCenter1{{$row->id}}" tabindex="-1" role="dialog"--}}
{{--                                                 aria-labelledby="exampleModalCenterTitle" aria-hidden="true">--}}
{{--                                                <div class="modal-dialog modal-dialog-centered" role="document">--}}
{{--                                                    <div class="modal-content">--}}
{{--                                                        <div class="modal-header">--}}
{{--                                                            <h5 class="modal-title" id="exampleModalCenterTitle">Delete--}}
{{--                                                            </h5>--}}
{{--                                                            <button type="button" class="close" data-dismiss="modal"--}}
{{--                                                                    aria-label="Close">--}}
{{--                                                                <span aria-hidden="true">&times;</span>--}}
{{--                                                            </button>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="modal-body">--}}
{{--                                                            Are you sure want to proceed this action?--}}
{{--                                                        </div>--}}
{{--                                                        <div class="modal-footer">--}}
{{--                                                            <button type="submit" class="btn btn-danger waves-effect"--}}
{{--                                                                    data-dismiss="modal">Close</button>--}}
{{--                                                            <form action="{{route('create-order.destroy',$row->id)}}" method="post">--}}
{{--                                                                @csrf--}}
{{--                                                                @method('DELETE')--}}
{{--                                                                <button type="submit" class="btn btn-info waves-effect">Delete</button>--}}
{{--                                                            </form>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}

{{--                                                </div>--}}

{{--                                            </div>--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            <button type="button" class="btn btn-primary text-white" data-toggle="modal" data-target="#exampleModal{{$row->id}}">Progress--}}
{{--                                            </button>--}}

{{--                                            <div class="modal fade" id="exampleModal{{$row->id}}" tabindex="-1" role="dialog"--}}
{{--                                                 aria-labelledby="exampleModalCenterTitle" aria-hidden="true">--}}
{{--                                                <div class="modal-dialog modal-dialog-centered" role="document">--}}
{{--                                                    <div class="modal-content">--}}
{{--                                                        <div class="modal-header">--}}
{{--                                                            <h5 class="modal-title" id="exampleModalCenterTitle">Progress Order--}}
{{--                                                            </h5>--}}
{{--                                                            <button type="button" class="close" data-dismiss="modal"--}}
{{--                                                                    aria-label="Close">--}}
{{--                                                                <span aria-hidden="true">&times;</span>--}}
{{--                                                            </button>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="modal-body">--}}
{{--                                                            Are you sure want to send in Progress Order?--}}
{{--                                                        </div>--}}
{{--                                                        <div class="modal-footer">--}}

{{--                                                            <button type="submit" class="btn btn-danger waves-effect"--}}
{{--                                                                    data-dismiss="modal">Close</button>--}}
{{--                                                            <form action="{{route('create-order.update',$row->id)}}" method="post">--}}
{{--                                                                @csrf--}}
{{--                                                                @method('PUT')--}}
{{--                                                                <button type="submit" value="orderProcess" name="orderProcess" class="btn btn-info waves-effect">Send</button>--}}
{{--                                                            </form>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div></td>--}}
{{--                                    </tr>--}}
{{--                                @endforeach--}}
{{--                                <?php--}}
{{--                                $count++;--}}
{{--                                ?>--}}
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div> </div></div>



    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    {{--    @if ($errors->any())--}}
    {{--    <script>--}}
    {{--        jQuery(document).ready(function() {--}}
    {{--            jQuery( ".woworder" ).trigger( "click" );--}}
    {{--        })--}}

    {{--    </script>--}}
    {{--    @endif--}}
@endsection
