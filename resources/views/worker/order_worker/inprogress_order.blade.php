@extends('worker/layouts/master')
@section('title')
    In Progress Orders
@endsection
@section('content')

    {{--    @dd($data);--}}

    {{--  2 order  --}}
    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-12">

        <div class="card my-4">
            <div class="header">
                <h2 class="text-center">
                    <strong>    In Progress Orders
                    </strong>
                </h2>


            </div>


            <!-- #START# Modal Form Example -->

            <div class="body table-responsive">
                <table class="table" id="myTable">
                    <thead>

                        <th class="ml-2 ">
                           Sno
                        </th>

                        <th>OrderNo</th>
                        <th>Subject</th>
                        <th>P.type</th>
                        <th>p.format</th>
                        <th>Language</th>
                        <th>Level</th>
                        <th>Pages</th>
                        <th>Sources</th>
                        <th> Action</th>

                    </thead>
                    <tbody>
                    <tr>
                        <?php
                        $count = 1
                        ?>
{{--                        @dd($data['inprogress']);--}}
                        @if($data['inprogress'] != "Null")

                            @foreach($data['inprogress'] as $row)
                                <td>{{$count++}}</td></td>
                                <td><a href="{{route('in-progress-orders.show',$row['order']->id)}}">{{$row['order']->id}}</a></td>

                                <td>{{$row['order']->erp_subject_name}}</td>
                                <td>{{$row['order']->erp_paper_type}}</td>
                                <td>{{$row['order']->erp_paper_format}}</td>
                                <td>{{$row['order']->erp_language_name}}</td>
                                <td>{{$row['order']->erp_academic_name}}</td>
                                <td>{{$row['order']->erp_number_Pages}}</td>
                                <td>{{$row['order']->erp_copy_sources}}</td>

                                <td>
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                            data-target=".bd-example-modal-{{$row['order']->id}}">Submit
                                    </button>

                                    @include('worker/order_worker/submitModal')
                                </td>
                    </tr>
                    <?php
                    $count++;
                    ?>
                    @endforeach
                    @else
                        <td> No data Found</td>
                    @endif

                    </tbody>
                </table>
            </div>
        </div>

    </div>
    {{--  3  --}}

    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-12">

        <div class="card my-4">
            <div class="header">
                <h2 class="text-center">
                    <strong>Deadline Extension Order</strong></h2>


            </div>


            <!-- #START# Modal Form Example -->

            <div class="body table-responsive">
                <table class="table" id="myTable">
                    <thead>

                    <th class="ml-2 ">
                        Sno
                    </th>

                    <th>OrderNo</th>
                    <th>Subject</th>
                    <th>P.type</th>
                    <th>p.format</th>
                    <th>Language</th>
                    <th>Level</th>
                    <th>Pages</th>
                    <th>Sources</th>
                    <th> Action</th>

                    </thead>
                    <tbody>
                    <tr>
                        <?php
                        $count = 1
                        ?>
                        {{--                        @dd($data['inprogress']);--}}
                        @if($data['deadline'] != "Null")

                            @foreach($data['deadline'] as $row)
                                <td>{{$count++}}</td></td>
                                <td><a href="{{route('in-progress-orders.show',$row['order']->id)}}">{{$row['order']->id}}</a></td>


                                <td>{{$row['order']->erp_subject_name}}</td>
                                <td>{{$row['order']->erp_paper_type}}</td>
                                <td>{{$row['order']->erp_paper_format}}</td>
                                <td>{{$row['order']->erp_language_name}}</td>
                                <td>{{$row['order']->erp_academic_name}}</td>
                                <td>{{$row['order']->erp_number_Pages}}</td>
                                <td>{{$row['order']->erp_copy_sources}}</td>

                                <td>
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                            data-target=".bd-example-modal-{{$row['order']->id}}">Submit
                                    </button>

                                    @include('worker/order_worker/submitModal')
                                </td>
                    </tr>
                    <?php
                    $count++;
                    ?>
                    @endforeach
                    @else
                        <td> No data Found</td>
                    @endif

                    </tbody>
                </table>
            </div>
        </div>

    </div>
    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-12">
        <div class="card my-4">
            <div class="header">
                <h2 class="text-center">
                    <strong>Revision Requests</strong></h2>


            </div>


            <!-- #START# Modal Form Example -->

            <div class="body table-responsive">
                <table class="table" id="myTable">
                    <thead>

                    <th class="ml-2 ">
                        Sno
                    </th>

                    <th>OrderNo</th>
                    <th>Subject</th>
                    <th>P.type</th>
                    <th>p.format</th>
                    <th>Language</th>
                    <th>Level</th>
                    <th>Pages</th>
                    <th>Sources</th>
                    <th> Action</th>

                    </thead>
                    <tbody>
                    <tr>
                        <?php
                        $count = 1
                        ?>
                        {{--                        @dd($data['inprogress']);--}}
                        @if($data['revision'] != "Null")

                            @foreach($data['revision'] as $row)
                                <td>{{$count++}}</td></td>
                                <td><a href="{{route('in-progress-orders.show',$row['order']->id)}}">{{$row['order']->id}}</a></td>


                                <td>{{$row['order']->erp_subject_name}}</td>
                                <td>{{$row['order']->erp_paper_type}}</td>
                                <td>{{$row['order']->erp_paper_format}}</td>
                                <td>{{$row['order']->erp_language_name}}</td>
                                <td>{{$row['order']->erp_academic_name}}</td>
                                <td>{{$row['order']->erp_number_Pages}}</td>
                                <td>{{$row['order']->erp_copy_sources}}</td>

                                <td>
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                            data-target=".bd-example-modal-{{$row['order']->id}}">Submit
                                    </button>

                                    @include('worker/order_worker/submitModal')
                                </td>
                    </tr>
                    <?php
                    $count++;
                    ?>
                    @endforeach
                    @else
                        <td> No data Found</td>
                    @endif

                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
