@extends('management/layouts/master')
@section('title')
    Dashboard -  {{config('app.name')}}
@endsection
@section('content')
    <style>
        .on{
            cursor: pointer;
        }
        .on:hover {
            background: #0000000f;
        }
    </style>
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card rounded-0">
                <div class="header">
                    <h5>
                        NOTIFICATIONS <i class="far fa-bell"></i>
                        <span class="float-right fw-bold text-danger ">{{\App\Helpers\Qs::notifycounts()}} UNREAD</span>
                    </h5>
                </div>
                <div class="body">
                    <?php $count =0?>
                    @foreach($data as $notifications)
                        @php
                            $notificationsdetail=json_decode($notifications->data);
                        @endphp

                        {{--                            <a class="on" data-url="{{$notificationsdetail->url}}">--}}

                        <div class="on row align-items-center py-3" data-url="{{$notificationsdetail->url}}">
                            <input class="url" type="hidden" value="{{url('/seen',$notifications->id)}}">
                            <div class="col-md-2 m-0">
                            <span class="table-img msg-user">
                                                <img src="{{asset('management/images/load.png')}}" alt="">
                                            </span>
                            </div>
                            <div class="col-md-8 m-0">
                                <input class="url" type="hidden" value="{{url('/seen',$notifications->id)}}">
                                {{--                                        <a  class="redirect" >wow</a>--}}

                                <div class="menu-info">
                                    <p class="menu-desc d-flex align-items-center">
                                        <i class="material-icons">access_time</i> {{  date("d-M-Y", strtotime($notifications->created_at)) }}
                                    </p>
                                    <p class="menu-desc {{$notifications->read_at == null ? 'text-dark fw-900' : ''}}">{{$notificationsdetail->msg}}</p>
                                </div>
                            </div>

                        </div>
                        {{--                            </a>--}}
                        <?php $count ++?>
                    @endforeach
                </div>
            </div>

        </div>
    </div>

    {{--<script>--}}
    {{--    $(document).ready(function() {--}}
    {{--        $('.on').on('click',function (){--}}
    {{--            var wow = $(this);--}}
    {{--            var url = $(this).find('.url').val();--}}
    {{--            $.ajax({--}}
    {{--                type:'POST',--}}
    {{--                method:'PUT',--}}
    {{--                url:url,--}}
    {{--                data:{--}}
    {{--                    _token: "{{ csrf_token() }}",--}}
    {{--                    seen:1,--}}
    {{--                },--}}
    {{--                success: function( msg ) {--}}
    {{--                    var dd = jQuery(wow).data('url');--}}
    {{--                    window.location.replace(dd);--}}
    {{--                }--}}
    {{--            });--}}
    {{--        })--}}
    {{--    });--}}
    {{--</script>--}}
@endsection

