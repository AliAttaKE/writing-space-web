@extends('worker/layouts/master')
@section('title')
    Manage Message
@endsection
@section('content')
    <style>
         .message-data {
            margin-bottom: 15px;
        }
        .message-data .message-data-name {
             font-size: 13px;
             font-weight: 700;
         }
        .message-data-time {
             color: #434651;
             padding-left: 6px;
         }
    .other-message {
             background: #d9e7ea;
         }
        .message {
             color: #444;
             padding: 18px 20px;
             line-height: 26px;
             font-size: 13px;
             -webkit-border-radius: 7px;
             -moz-border-radius: 7px;
             -ms-border-radius: 7px;
             border-radius: 7px;
             margin-bottom: 30px;
             width: 90%;
             position: relative;
         }
 .chat-with {
             font-weight: bold;
             font-size: 16px;
         }
         .my-message {
             background: #e8e8e8;
         }
         .nestedmsg{
         width: 70%;
         /*float: right;*/
         }
         .admincorrected{
             background: #add7ad;
             padding: 20px;
             border-radius: 10px;
         }
    </style>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-11 col-lg-11 mx-auto">
        <div class="card">
            <div class="chat">
                <div class="chat-header clearfix">
                    <div class="chat-about">
                        <div class="chat-with text-uppercase" style="font-style: italic">Order Name : {{$data[0]['order_name']}}</div>
                        <div class="chat-with text-uppercase" style="font-style: italic">order no : {{$data[0]['order_id']}}</div>

                        {{--                        <div class="chat-num-messages">2 new messages</div>--}}
                    </div>
                </div>
                    <div class="chat-history " id="chat-" style="overflow: hidden;overflow-x: hidden; width: auto; height: 100%;">
                        <ul>
                            @foreach($data as $row)
{{--                                @dd($row);--}}
{{--                                @dd($row['message']->message_for_sender != null);--}}
                            <li class="{{($row['sender'] == Auth()->user()->name) ? 'clearfix' : ''}}
                            {{($row['message']->message_for_receiver != null || $row['message']->message_for_sender != null && $row['sender'] == Auth()->user()->name) ? 'my-3 admincorrected' : ''}} ">
                                <div class="message-data {{($row['sender'] == Auth()->user()->name) ? 'text-right' : ''}}">
                                    <span class="message-data-name">From {{$row['sender']}} to {{$row['receiver']}}</span>
                                    <span class="message-data-time">{{date_format($row['message']->created_at,"d-M-Y , h : i A")}}</span>
                                </div>
                                <div class="message  {{($row['sender'] == Auth()->user()->name) ? 'other-message float-right' : 'my-message'}}">
                                    <p class="font-weight-bold m-0">{{$row['message']->subject}}</p>
                                    <p>{{$row['message']->description}}</p>
                                    <div class="row">
                                    </div>
                                </div>

                                    @if($row['sender'] == Auth()->user()->name && $row['message']->message_for_sender != null)
                               <ul class="nestedmsg float-right">
                                   <li class="{{($row['sender'] == Auth()->user()->name) ? 'clearfix' : ''}}">
                                       <div class="message-data {{($row['sender'] == Auth()->user()->name) ? 'text-right' : ''}}">
                                           <span class="message-data-name">Admin Correct you</span>
                                       </div>
                                       <div class="message  my-message float-right">
                                           <p class="font-weight-bold m-0">{{$row['message']->message_for_sender}}</p>
                                       </div>
                                   </li>
                               </ul>
                                @elseif($row['receiver'] == Auth()->user()->name && $row['message']->message_for_receiver != null)
                                    <ul class="nestedmsg ">
                                        <li class="{{($row['sender'] == Auth()->user()->name) ? 'clearfix' : ''}}">
                                            <div class="message-data {{($row['sender'] == Auth()->user()->name) ? 'text-right' : ''}}">
                                                <span class="message-data-name">Admin Correct you</span>
                                            </div>
                                            <div class="message  my-message">
                                                <p class="font-weight-bold m-0">{{$row['message']->message_for_receiver}}</p>
                                            </div>
                                        </li>
                                    </ul>
                                    @endif
                            </li>
                            @endforeach
                        </ul>
                    </div>
{{--                <div class="slimScrollBar" style="background: rgb(0, 0, 0); width: 5px; position: absolute; top: 105px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 344.617px;"></div>--}}
{{--                <div class="slimScrollRail" style="width: 5px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div>--}}
            </div>

        </div>
    </div>
</div>
@endsection
