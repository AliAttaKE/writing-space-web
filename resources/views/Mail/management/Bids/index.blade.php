@extends('management/layouts/master')
@section('title')
    Bids
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
                                <h4 class="page-title">Bids</h4>
                            </li>

                        </ul>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <button type="button" class="btn btn-primary float-right mt-3 m-2">Bids</button>
{{--                        @if($bids->erp_claims>0)--}}
                       <button type="button" class="btn btn-primary float-right mt-3 m-2">Claims</button>
{{--                        @else--}}

{{--                        @endif--}}
                        <a href="{{url()->previous()}}">
                            <button type="button" class="btn btn-primary float-right mt-3"> Back
                            </button>
                        </a>
                    </div>

                </div>
                <div class="card">
                    <div class="header">
                    <div class="body table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th class="col-lg-2">ID</th>
                                <th class="col-lg-2">Name</th>
                                <th class="col-lg-2">Role</th>
                                <th class="col-lg-2">Bids</th>
                                <th class="col-lg-2">Claims</th>
                                <th class="col-lg-2">Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $count=1
                            ?>
                            @foreach($data as $row)
                                <tr>
                                    <th scope="row">{{$count}}</th>
{{--                                    @dd($row['role']->erp_work_flow_role);--}}
                                    <td>{{$row['UserName']['name']}}</td>
                                    <td>{{$row['role']['erp_work_flow_role']}}</td>
                                    <td>{{$row->erp_bids}}</td>
                                    <td>{{$row->erp_claims}}</td>
                                    <td>
                                        <button type="button" class="btn bg-red btn-circle waves-effect waves-circle waves-float" data-toggle="modal" data-target="#exampleModalCenter1{{$row->id}}">
                                            <i class="material-icons"> delete  </i>
                                        </button>
                                        <div class="modal fade" id="exampleModalCenter1{{$row->id}}" tabindex="-1" role="dialog"
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
                                                        <form action="{{route('bids.destroy',$row->id)}}" method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-info waves-effect">Delete</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
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













@endsection
