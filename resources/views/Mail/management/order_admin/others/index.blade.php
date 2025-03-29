
@extends('management.layouts.master')
@section('title')
    Others Orders
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
                                <h4 class="page-title"> Others Orders</h4>
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
{{--                Cancel Orders--}}
                <div class="card">
                    <div class="header">
                        <h5 class="text-center">Cancel Orders</h5>
                        <div class="body table-responsive">
                            <table class="table"  id="myTable">
                                <thead>
                                <tr>
                                    <th>Sno</th>
                                    <th>OrderNo</th>
                                    <th>Subject</th>
                                    <th>P.Type</th>
                                    <th>P.Format</th>
                                    <th>Language</th>
                                    <th> Level</th>
                                    <th>Pages</th>
                                    <th> Sources</th>
{{--                                    <th> Reasons</th>--}}
                                </tr>
                                </thead>
                                <tbody>

                                <?php
                                $count=1
                                ?>
                                @if($data['cancel'] != null || !empty($data['cancel'] ))
                                    @foreach($data['cancel'] as $row)

                                        <tr>
                                            <td>{{$count}}</td>
                                            <td><a href="{{route('new-order.show',$row->id)}}">{{$row->id}}</a></td>
                                            <td>{{$row->erp_subject_name}}</td>
                                            <td>{{$row->erp_paper_type}}</td>
                                            <td>{{$row->erp_paper_format}}</td>
                                            <td>{{$row->erp_language_name}}
                                            <td>{{$row->erp_academic_name}}</td>
                                            <td>{{$row->erp_number_Pages}}</td>
                                            <td>{{$row->erp_copy_sources}} </td>
                                            <td>
                                                <!-- Button trigger modal -->
{{--                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter{{$row->id}}">--}}
{{--                                                    Reason--}}
{{--                                                </button>--}}

                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModalCenter{{$row->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLongTitle">Username: {{$row['users'] != null ?$row['users'] ['name'] : null}}</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p><strong>

                                                                        Reason: {{$row->reason}}

                                                                    </strong></p>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php
                                        $count++;
                                        ?>
                                    @endforeach
                                @endif

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
{{--                Refunded Orders--}}
                <div class="card">
                    <div class="header">
                        <h5 class="text-center">Refunded Orders</h5>
                        <div class="body table-responsive">
                            <table class="table"  id="myTable">
                                <thead>
                                <tr>
                                    <th>Sno</th>
                                    <th>OrderNo</th>
                                    <th>Subject</th>
                                    <th>P.Type</th>
                                    <th>P.Format</th>
                                    <th>Language</th>
                                    <th> Level</th>
                                    <th>Pages</th>
                                    <th> Sources</th>
{{--                                    <th> Reasons</th>--}}

                                </tr>
                                </thead>
                                <tbody>

                                <?php
                                $count=1
                                ?>
                                @if($data['refunded'] != null || !empty($data['refunded'] ))
                                    @foreach($data['refunded'] as $row)

                                        <tr>
                                            <td>{{$count}}</td>
                                            <td><a href="{{route('new-order.show',$row->id)}}">{{$row->id}}</a></td>
                                            <td>{{$row->erp_subject_name}}</td>
                                            <td>{{$row->erp_paper_type}}</td>
                                            <td>{{$row->erp_paper_format}}</td>
                                            <td>{{$row->erp_language_name}}
                                            <td>{{$row->erp_academic_name}}</td>
                                            <td>{{$row->erp_number_Pages}}</td>
                                            <td>{{$row->erp_copy_sources}} </td>
                                            <td>
                                                <!-- Button trigger modal -->
{{--                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter{{$row->id}}">--}}
{{--                                                    Reason--}}
{{--                                                </button>--}}

                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModalCenter{{$row->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
{{--                                                                <h5 class="modal-title" id="exampleModalLongTitle">Username: {{$row['users']['name']}}</h5>--}}
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p><strong> Reason: {{$row->reason}} </strong></p>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php
                                        $count++;
                                        ?>
                                    @endforeach
                                @endif

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
{{--                Disputed Orders--}}
                <div class="card">
                    <div class="header">
                        <h5 class="text-center">Disputed Orders</h5>
                        <div class="body table-responsive">
                            <table class="table"  id="myTable">
                                <thead>
                                <tr>
                                    <th>Sno</th>
                                    <th>OrderNo</th>
                                    <th>Subject</th>
                                    <th>P.Type</th>
                                    <th>P.Format</th>
                                    <th>Language</th>
                                    <th> Level</th>
                                    <th>Pages</th>
                                    <th> Sources</th>
{{--                                    <th> Reasons</th>--}}
                                </tr>
                                </thead>
                                <tbody>

                                <?php
                                $count=1
                                ?>
                                @if($data['disputed'] != null || !empty($data['disputed'] ))
                                    @foreach($data['disputed'] as $row)

                                        <tr>
                                            <td>{{$count}}</td>
                                            <td><a href="{{route('new-order.show',$row->id)}}">{{$row->id}}</a></td>
                                            <td>{{$row->erp_subject_name}}</td>
                                            <td>{{$row->erp_paper_type}}</td>
                                            <td>{{$row->erp_paper_format}}</td>
                                            <td>{{$row->erp_language_name}}
                                            <td>{{$row->erp_academic_name}}</td>
                                            <td>{{$row->erp_number_Pages}}</td>
                                            <td>{{$row->erp_copy_sources}} </td>
                                            <td>
                                                <!-- Button trigger modal -->
{{--                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter{{$row->id}}">--}}
{{--                                                    Reason--}}
{{--                                                </button>--}}

                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModalCenter{{$row->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
{{--                                                                <h5 class="modal-title" id="exampleModalLongTitle">Username: {{$row['users']['name']}}</h5>--}}
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p><strong> Reason: {{$row->reason}} </strong></p>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php
                                        $count++;
                                        ?>
                                    @endforeach
                                @endif

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

{{--                  Flag orders--    }}--}}
                <div class="card">
                    <div class="header">
                        <h5 class="text-center">Flag Orders</h5>
                        <div class="body table-responsive">
                            <table class="table"  id="myTable">
                                <thead>
                                <tr>
                                    <th>Sno</th>
                                    <th>OrderNo</th>
                                    <th>Subject</th>
                                    <th>P.Type</th>
                                    <th>P.Format</th>
                                    <th>Language</th>
                                    <th> Level</th>
                                    <th>Pages</th>
                                    <th> Sources</th>
{{--                                    <th> Reasons</th>--}}

                                </tr>
                                </thead>
                                <tbody>

                                <?php
                                $count=1
                                ?>
                                @if($data['flag'] != null || !empty($data['flag'] ))
                                    @foreach($data['flag'] as $row)

                                        <tr>
                                            <td>{{$count}}</td>
                                            <td><a href="{{route('new-order.show',$row->id)}}">{{$row->id}}</a></td>
                                            <td>{{$row->erp_subject_name}}</td>
                                            <td>{{$row->erp_paper_type}}</td>
                                            <td>{{$row->erp_paper_format}}</td>
                                            <td>{{$row->erp_language_name}}
                                            <td>{{$row->erp_academic_name}}</td>
                                            <td>{{$row->erp_number_Pages}}</td>
                                            <td>{{$row->erp_copy_sources}} </td>
                                            <td>
                                                <!-- Button trigger modal -->
{{--                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter{{$row->id}}">--}}
{{--                                                    Reason--}}
{{--                                                </button>--}}

                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModalCenter{{$row->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLongTitle">Username: {{$row['users']['name']}}</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p><strong> Reason: {{$row->reason}} </strong></p>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php
                                        $count++;
                                        ?>
                                    @endforeach
                                @endif

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div> </div></div>
@endsection
