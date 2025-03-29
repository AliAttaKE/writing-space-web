@extends('management.layouts.master')
@section('title')
    Progress Order
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
                                <h4 class="page-title"> Progress Order</h4>
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
{{--                inprogress--}}
                <div class="card">

                    <div class="header">
                        <h5 class="text-center">In Progress Orders</h5>
                    <div class="body table-responsive" >
                        <table class="" id="myTable">
                            <thead>
                            <tr>
                               <th> Sno
                                </th>
                                <th>OrderNo</th>
                                <th> order status</th>
                                <th>order flow</th>
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
                            @if (array_key_exists("inprogress_order",$data))


                            @foreach($data['inprogress_order'] as $row)

                                @if($row != null)

                                <tr>
                                    <td scope="row">{{$count++}}</td>
                                    <td><a href="{{route('new-order.show',$row->id)}}">{{$row->id}}</a></td>
                                    <td>
                                        @foreach($data['status'] as $stat)
                                         @if($stat->erp_order_id == $row->id )

                                                <label class="badge badge-info" data-toggle="modal" data-target="#active_inactive">
                                                    {{$stat['commissionwork']['RoleName']['erp_work_flow_role']}} :
                                                    {{$stat['users']['name']}}

                                                </label>
                                            @endif
                                                @endforeach
                                    </td>
                                   <td>
                                       @foreach($data['name'] as $dat)
                                        @if($row->erp_team == $dat->id)


                                                @foreach (json_decode($dat->erp_package) as $member)

                                                   <label class="badge badge-info" data-toggle="modal" data-target="#active_inactive">
                                                <?php

                                                       $role = DB::table('add_commission')->where('id',(int)$member)->get()->first();

                                                       if($role != null)

                                                       $rolename = DB::table('add_commission')->where('erp_role_id',$role->erp_role_id)->get()->first();


                                                       $workflow = DB::table('work_flow')->where('id',$rolename->erp_role_id)->get()->first();
                                                       ?>
                                                       {{$workflow->erp_work_flow_role}}
                                                   </label>
                                               @endforeach

                                        @endif

                                    @endforeach
                                        </td>



                                    <td>{{$row->erp_subject_name}}</td>
                                    <td>{{$row['papertype']['erp_document_title']}}</td>



                                    <td>{{$row['paperformat']['erp_title']}}</td>
                                    <td>{{$row->erp_language_name}}</td>
                                    <td>{{$row->erp_academic_name}}</td>
                                    <td>{{$row->erp_number_Pages}}</td>
                                    <td>{{$row->erp_copy_sources}}</td>

                                </tr>
                                @endif
                            @endforeach
                            @endif
                            <?php
                            $count++;
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


{{--                late workers order--}}

                <div class="card">

                    <div class="header">
                        <h5 class="text-center">In Progress Late (worker) Orders</h5>
                        <div class="body table-responsive" >
                            <table class="" id="myTable">
                                <thead>
                                <tr>
                                    <th> Sno
                                    </th>
                                    <th>OrderNo</th>
                                    <th> order status</th>

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




                                    @foreach($data['inprog'] as $row)

                                        @if($row != null)

                                            @php

                                                $currentDate = date('Y-m-d H:i:s');

                                            @endphp


                                            @if($currentDate >= $row->bid_date)

                                               <tr>
                                                <td scope="row">{{$count++}}</td>
                                                <td><a href="{{route('new-order.show',$row->erp_order_id)}}">{{$row->erp_order_id}}</a></td>

                                                   <td>  <label class="badge badge-info" data-toggle="modal" data-target="#active_inactive">
                                                       {{$row->commissionwork->RoleName->erp_work_flow_role}}:{{$row->users->name}}
                                                       </label>
                                                   </td>

{{--  <td>--}}

{{--                                                    --}}
{{--                                                    @foreach($data['status'] as $stat)--}}
{{--                                                        @if($stat->erp_order_id == $row->erp_order_id)--}}

{{--                                                            <label class="badge badge-info" data-toggle="modal" data-target="#active_inactive">--}}
{{--                                                                {{$stat['commissionwork']['RoleName']['erp_work_flow_role']}} :--}}
{{--                                                                {{$stat['users']['name']}}--}}

{{--                                                            </label>--}}
{{--                                                        @endif--}}
{{--                                                    @endforeach--}}
{{--                                                </td> --}}
{{--                                                <td>--}}

{{--                                                    @foreach($data['name'] as $dat)--}}
{{--                                                        @if($row->erp_team_id == $dat->id)--}}

{{--                                                            @foreach (json_decode($dat->erp_package) as $member)--}}

{{--                                                                <label class="badge badge-info" data-toggle="modal" data-target="#active_inactive">--}}
{{--                                                                    <?php--}}

{{--                                                                    $role = DB::table('add_commission')->where('id',(int)$member)->get()->first();--}}

{{--                                                                    if($role != null)--}}

{{--                                                                        $rolename = DB::table('add_commission')->where('erp_role_id',$role->erp_role_id)->get()->first();--}}


{{--                                                                    $workflow = DB::table('work_flow')->where('id',$rolename->erp_role_id)->get()->first();--}}
{{--                                                                    ?>--}}
{{--                                                                    {{$workflow->erp_work_flow_role}}--}}
{{--                                                                </label>--}}
{{--                                                            @endforeach--}}

{{--                                                        @endif--}}

{{--                                                    @endforeach--}}
{{--                                                </td>--}}


                                                <td>{{$row->order->erp_subject_name}}</td>
                                                <td>{{$row->order->papertype->erp_document_title}}</td>



                                                <td>{{$row->order->paperformat->erp_title}}</td>
                                                <td>{{$row->order->erp_language_name}}</td>
                                                <td>{{$row->order->erp_academic_name}}</td>
                                                <td>{{$row->order->erp_number_Pages}}</td>
                                                <td>{{$row->order->erp_copy_sources}}</td>

                                            </tr>

                                                @endif
                                        @endif
                                    @endforeach
{{--                                @endif--}}
                                <?php
                                $count++;
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

{{--                late customer order--}}

                <div class="card">

                    <div class="header">
                        <h5 class="text-center">In Progress Late (Customer) Orders</h5>
                        <div class="body table-responsive" >
                            <table class="" id="myTable">
                                <thead>
                                <tr>
                                    <th> Sno
                                    </th>
                                    <th>OrderNo</th>
                                    <th> order status</th>

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




                                @foreach($data['inprog'] as $row)

                                    @if($row != null)

                                        @php

                                            $currentDate = date('Y-m-d H:i:s');

                                        @endphp

                                        @if($currentDate >= $row->order->erp_datetime)

                                            <tr>
                                                <td scope="row">{{$count++}}</td>
                                                <td><a href="{{route('new-order.show',$row->erp_order_id)}}">{{$row->erp_order_id}}</a></td>

                                                <td>  <label class="badge badge-info" data-toggle="modal" data-target="#active_inactive">
                                                        {{$row->commissionwork->RoleName->erp_work_flow_role}}:{{$row->users->name}}
                                                    </label>
                                                </td>

                                                {{--  <td>--}}

                                                {{--                                                    --}}
                                                {{--                                                    @foreach($data['status'] as $stat)--}}
                                                {{--                                                        @if($stat->erp_order_id == $row->erp_order_id)--}}

                                                {{--                                                            <label class="badge badge-info" data-toggle="modal" data-target="#active_inactive">--}}
                                                {{--                                                                {{$stat['commissionwork']['RoleName']['erp_work_flow_role']}} :--}}
                                                {{--                                                                {{$stat['users']['name']}}--}}

                                                {{--                                                            </label>--}}
                                                {{--                                                        @endif--}}
                                                {{--                                                    @endforeach--}}
                                                {{--                                                </td> --}}
                                                {{--                                                <td>--}}

                                                {{--                                                    @foreach($data['name'] as $dat)--}}
                                                {{--                                                        @if($row->erp_team_id == $dat->id)--}}

                                                {{--                                                            @foreach (json_decode($dat->erp_package) as $member)--}}

                                                {{--                                                                <label class="badge badge-info" data-toggle="modal" data-target="#active_inactive">--}}
                                                {{--                                                                    <?php--}}

                                                {{--                                                                    $role = DB::table('add_commission')->where('id',(int)$member)->get()->first();--}}

                                                {{--                                                                    if($role != null)--}}

                                                {{--                                                                        $rolename = DB::table('add_commission')->where('erp_role_id',$role->erp_role_id)->get()->first();--}}


                                                {{--                                                                    $workflow = DB::table('work_flow')->where('id',$rolename->erp_role_id)->get()->first();--}}
                                                {{--                                                                    ?>--}}
                                                {{--                                                                    {{$workflow->erp_work_flow_role}}--}}
                                                {{--                                                                </label>--}}
                                                {{--                                                            @endforeach--}}

                                                {{--                                                        @endif--}}

                                                {{--                                                    @endforeach--}}
                                                {{--                                                </td>--}}


                                                <td>{{$row->order->erp_subject_name}}</td>
                                                <td>{{$row->order->papertype->erp_document_title}}</td>



                                                <td>{{$row->order->paperformat->erp_title}}</td>
                                                <td>{{$row->order->erp_language_name}}</td>
                                                <td>{{$row->order->erp_academic_name}}</td>
                                                <td>{{$row->order->erp_number_Pages}}</td>
                                                <td>{{$row->order->erp_copy_sources}}</td>

                                            </tr>

                                        @endif
                                    @endif
                                @endforeach
                                {{--                                @endif--}}
                                <?php
                                $count++;
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

{{--                revision--}}

                <div class="card">
                    <div class="header">
                        <h5 class="text-center">Revision Requests Order</h5>
                        <div class="body table-responsive" >
                            <table class="" id="myTable2">
                                <thead>
                                <tr>
                                    <th> Sno
                                    </th>
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
                                @if (array_key_exists("revision_order",$data))
                                    @foreach($data['revision_order'] as $row)
                                        @if($row != null)
                                    <tr>
                                        <td scope="row">{{$count++}}</td>
                                        <td><a href="{{route('new-order.show',$row->id)}}">{{$row->id}}</a></td>
                                        <td>{{$row->erp_subject_name}}</td>
                                        <td>{{$row->erp_paper_type}}</td>
                                        <td>{{$row->erp_paper_format}}</td>
                                        <td>{{$row->erp_language_name}}</td>
                                        <td>{{$row->erp_academic_name}}</td>
                                        <td>{{$row->erp_number_Pages}}</td>
                                        <td>{{$row->erp_copy_sources}}</td>

                                    </tr>
                                    @endif
                                @endforeach
                                        @endif
                                <?php
                                $count++;
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
{{--                deadline ext--}}
                <div class="card">
                    <div class="header">
                        <h5 class="text-center">Deadline Extension Requests Order</h5>
                        <div class="body table-responsive" >
                            <table class="" id="myTable3">
                                <thead>
                                <tr>
                                    <th> Sno
                                    </th>
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
                                @if (array_key_exists("dealine_ext",$data))
                                    @foreach($data['dealine_ext'] as $row)
                                        @if($row != Null)
                                        <tr>
                                            <td scope="row">{{$count++}}</td>
                                            <td><a href="{{route('new-order.show',$row->id)}}">{{$row->id}}</a></td>
                                            <td>{{$row->erp_subject_name}}</td>
                                            <td>{{$row->erp_paper_type}}</td>
                                            <td>{{$row->erp_paper_format}}</td>
                                            <td>{{$row->erp_language_name}}</td>
                                            <td>{{$row->erp_academic_name}}</td>
                                            <td>{{$row->erp_number_Pages}}</td>
                                            <td>{{$row->erp_copy_sources}}</td>

                                        </tr>
                                        @endif
                                    @endforeach
                                @endif
                                <?php
                                $count++;
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


            </div>
    </div>
@endsection
