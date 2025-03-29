
@extends('management.layouts.master')
@section('title')
    New Orders
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
                                <h4 class="page-title"> New Orders</h4>
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
                       
                    <h5 class="text-center">New Orders</h5>
                <div class="body table-responsive">
                    <table class="table"  id="myTable">
                        <thead>
                        <tr>

                            <th>OrderNo</th>
                            <th>Subject</th>
                            <th>P.Type</th>
                            <th>P.Format</th>
                            <th>Language</th>
                            <th> Level</th>
                            <th>Pages</th>
                            <th> Sources</th>





                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $count=1
                        ?>
{{--                        @if($data['new_order'] != null )--}}
{{--                        @foreach($data['new_order'] as $row)--}}
{{--                            @if($row != null)--}}

{{--                            <tr>--}}

{{--                                <td><a href="{{route('new-order.show',$row->id)}}">{{$row->id}}</a></td>--}}
{{--                                <td>{{$row->erp_subject_name}}</td>--}}
{{--                                <td>{{$row->erp_paper_type}}</td>--}}
{{--                                <td>{{$row->erp_paper_format}}</td>--}}
{{--                                <td>{{$row->erp_language_name}}--}}
{{--                                <td>{{$row->erp_academic_name}}</td>--}}
{{--                                <td>{{$row->erp_number_Pages}}</td>--}}
{{--                                <td>{{$row->erp_copy_sources}} </td>--}}

{{--                            </tr>--}}
{{--                            <?php--}}
{{--                            $count++;--}}
{{--                            ?>--}}
{{--                            @endif--}}
{{--                            @endforeach--}}
{{--                            @endif--}}

                        @foreach($data['teamorder'] as $row)
                            @if($row != null)

                                <tr>
                                    <td><a href="{{route('new-order.show',$row->id)}}">{{$row->id}}</a></td>
                                    <td>{{$row->erp_subject_name}}</td>
                                    <td>{{$row->erp_paper_type}}</td>
                                    <td>{{$row->erp_paper_format}}</td>
                                    <td>{{$row->erp_language_name}}
                                    <td>{{$row->erp_academic_name}}</td>
                                    <td>{{$row->erp_number_Pages}}</td>
                                    <td>{{$row->erp_copy_sources}} </td>

                                </tr>

                            @endif
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div> </div></div>

    <div class="container">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title"> New Orders</h4>
                            </li>
                        </ul>
                    </div>
{{--                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 mt">--}}
{{--                        <a href="http://wms.writing-space.com/inprogress-order">--}}
{{--                            <button type="button" class="btn btn-primary float-right mt-3"> Back--}}
{{--                            </button>--}}
{{--                        </a>--}}
{{--                    </div>--}}

                </div>
                <div class="card">
                    <div class="card">
                        <div class="header">

                            <h5 class="text-center">
                                Bids with Open Bids
                            </h5>
                            <div class="body table-responsive">
                                <table class="table"  id="myTable">
                                    <thead>
                                    <tr>

                                        <th>OrderNo</th>
                                        <th>Subject</th>
                                        <th>P.Type</th>
                                        <th>P.Format</th>
                                        <th>Language</th>
                                        <th> Level</th>
                                        <th>Pages</th>
                                        <th> Sources</th>





                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $count=1
                                    ?>

                                    @foreach($data['bids'] as $row)
                                        @if($row != null)


                                            @if($row['order']['erp_status'] == 1)

                                            <tr>
                                                <td><a href="{{route('new-order.show',$row['order']['id'])}}">
                                                        {{$row['order']['id']}}</a></td>
                                                <td>{{$row['order']['erp_subject_name']}}</td>
                                                <td>{{$row['order']['erp_paper_type']}}</td>
                                                <td>{{$row['order']['erp_paper_format']}}</td>
                                                <td>{{$row['order']['erp_language_name']}}
                                                <td>{{$row['order']['erp_academic_name']}}</td>
                                                <td>{{$row['order']['erp_number_Pages']}}</td>
                                                <td>{{$row['order']['erp_copy_sources']}} </td>
                                            </tr>
                                                @endif

                                        @endif
                                    @endforeach


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>                </div>
            </div> </div></div>
@endsection
