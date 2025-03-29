@extends('worker/layouts/master')
@section('title')
    Other Orders
@endsection
@section('content')
    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-12">
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <ul class="breadcrumb breadcrumb-style ">
                    <li class="breadcrumb-item">

                    </li>

                </ul>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <button type="button" class="btn btn-primary float-right mt-3"> Back
                </button>
            </div>

        </div>
    <div class="card my-4">
        <div class="header">
            <h2 class="text-center">
                <strong>Disputed Order</strong> </h2>



        </div>


            <!-- #START# Modal Form Example -->

            <div class="body table-responsive">
                <table class="table" id="myTable">
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
{{--                        <th> Reason</th>--}}

                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $count=1
                    ?>
                    @if($data['disputed'] != null || !empty($data['disputed'] ))
                        @foreach($data['disputed'] as $row)
                            @if(count($row['teamuser']) >= 1)
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
{{--                                        <button class="btn btn-primary waves-effect" data-toggle="modal" data-target="#disputed{{$count}}">--}}
{{--                                            Reason--}}
{{--                                        </button>--}}

                                        <div class="modal fade" id="disputed{{$count}}" tabindex="-1" role="dialog"
                                             aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content py-5">
{{$row->reason}}
                                                </div>

                                            </div>
                                        </div>

                                    </td>
                                </tr>
                            @endif
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

{{-- 2   --}}

    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-12">

        <div class="card my-4">
            <div class="header">
                <h2 class="text-center">
                    <strong>Cancelled Orders</strong> </h2>



            </div>


            <!-- #START# Modal Form Example -->

            <div class="body table-responsive">
                <table class="table" id="myTable2">
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
{{--                        <th> Reason</th>--}}

                    </tr>
                    </thead>
                    <tbody>

                    <?php
                    $count=1
                    ?>
                    @if($data['cancel'] != null || !empty($data['cancel'] ))
                        @foreach($data['cancel'] as $row)
                            @if(count($row['teamuser']) >= 1)
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
{{--                                    <button class="btn btn-primary waves-effect" data-toggle="modal" data-target="#cancel{{$count}}">--}}
{{--                                        Reason--}}
{{--                                    </button>--}}

                                    <div class="modal fade" id="cancel{{$count}}" tabindex="-1" role="dialog"
                                         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content py-5">
                                                {{$row->reason}}
                                            </div>

                                        </div>
                                    </div>

                                </td>
                            </tr>
                            @endif
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



{{--    3  --}}


    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-12">

        <div class="card my-4">
            <div class="header">
                <h2 class="text-center">
                    <strong>Refunded Orders</strong> </h2>



            </div>


            <!-- #START# Modal Form Example -->

            <div class="body table-responsive">
                <table class="table" id="myTable3">
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
{{--                        <th>Reason</th>--}}
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $count=1
                    ?>
                    @if($data['refunded'] != null || !empty($data['refunded'] ))
                        @foreach($data['refunded'] as $row)
                            @if(count($row['teamuser']) >= 1)
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
{{--                                        <button class="btn btn-primary waves-effect" data-toggle="modal" data-target="#cancel{{$count}}">--}}
{{--                                            Reason--}}
{{--                                        </button>--}}

                                        <div class="modal fade" id="cancel{{$count}}" tabindex="-1" role="dialog"
                                             aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content py-5">
                                                    {{$row->reason}}
                                                </div>

                                            </div>
                                        </div>

                                    </td>
                                </tr>
                            @endif
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

@endsection
