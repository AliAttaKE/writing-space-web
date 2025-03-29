@extends('management.layouts.master')
@section('title')
    Academic Level
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
                                <h4 class="page-title"> Monitor Messages</h4>
                            </li>

                        </ul>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
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
{{--                            <button type="button" class="btn btn-primary " data-toggle="modal"--}}
{{--                                    data-target="#exampleModal">Add Academic Level--}}
{{--                            </button>--}}
{{--                            @include('management.OrderSettings.academic_level.add')--}}
                        </div>
                    </div>
                    <div class="body table-responsive">
                        <table class="table" id="myTable">
                            <thead>
                            <tr>
                                <th>S.NO</th>
                                <th>Order No</th>
                                <th>From</th>
                                <th>To</th>
                                <th>Message</th>
                                <th>Write Messages to Sender</th>
                                <th>Write Messages to Receiver</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $count=1
                            ?>
                            @if($data != null)
                            @foreach($data as $row)
                                <tr>
                                    <th scope="row">{{$count}}</th>
                                    <td>{{$row['order_id']}}</td>
                                    <td>{{$row['sender']}}</td>
                                    <td>{{$row['receiver']}}</td>
                                    <td>
                                        <form action="{{route('monitor-message.update',$row['message_id'])}}" method="POST">
                                            @method('PUT')
                                            @csrf
                                            <textarea name="description" id="" cols="30" rows="10">{{$row['description']}}</textarea>
                                            <button type="submit" class="btn btn-primary btn-block">SEND</button>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="{{route('monitor-message.update',$row['message_id'])}}" method="POST">
                                            @method('PUT')
                                            @csrf
                                        <textarea   name="message_for_sender" id="" cols="30" rows="10" required>{{$row['message_for_sender']}}</textarea>
                                        <button type="submit" class="btn btn-primary btn-block">SEND</button>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="{{route('monitor-message.update',$row['message_id'])}}" method="POST">
                                            @method('PUT')
                                            @csrf
                                            <textarea name="message_for_receiver" id="" cols="30" rows="10" required>{{$row['message_for_receiver']}}</textarea>
                                            <button type="submit" class="btn btn-primary btn-block">SEND</button>
                                        </form>
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
        </div>
    </div>


@endsection

