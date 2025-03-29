<li class="dropdown">
    <a href="#" onClick="return false;" class="dropdown-toggle" data-toggle="dropdown"
       role="button">
        <i class="far fa-bell"></i>
@if(\App\Helpers\Qs::notifycounts() != 0)
        <span class="label-count bg-orange"></span>
    @endif
    </a>
    <ul class="dropdown-menu pullDown">
        <li class="header text-left px-4">
            NOTIFICATIONS
            <span class="float-right">
{{--                {{\App\Helpers\Qs::notifycounts()}}--}}
                <a class="text-danger" href="{{url('notifications')}}">
                                {{\App\Helpers\Qs::notifycounts()}}
                    UNREAD
                            </a>

            </span>
        </li>
        <li class="body w-100">
            <ul class="menu">
                <?php $count =0?>
                @foreach(\App\Helpers\Qs::notifications() as $notifications)
                    @php
                        $notificationsdetail=json_decode($notifications->data);

                    @endphp
                    <li class="on" data-url="{{$notificationsdetail->url}}">
                        <a class="d-flex align-items-center ">
                            <input class="url" type="hidden" value="{{url('/seen',$notifications->id)}}">
                            {{--                                        <a  class="redirect" >wow</a>--}}
                            <span class="table-img msg-user">
                                                <img src="{{asset('management/images/load.png')}}" alt="">
                                            </span>
                            <span class="menu-info">
{{--                                                <span class="menu-title">{{\Illuminate\Support\Facades\Auth::user()->name}}</span>--}}
                                                <span class="menu-desc">
                                                    <i class="material-icons">access_time</i> {{  date("d-M-Y", strtotime($notifications->created_at)) }}
                                                </span>
                                                <span class="menu-desc {{$notifications->read_at == null ? 'text-dark fw-900' : ''}}">{{$notificationsdetail->msg}}</span>
                                            </span>
                        </a>
                    </li>
                    <?php $count ++?>
                @endforeach
                    @if(\App\Helpers\Qs::notifications()->isNotEmpty())
                <li>
                    <a class="py-0 text-danger text-center" href="{{url('/notifications')}}" class="text-dark">View All Notifications</a>
                </li>
                    @else
                        <h6 class="text-center text-uppercase py-5">No Notification Yet</h6>
                        @endif
            </ul>
        </li>

    </ul>
</li>

<script>
    $(document).ready(function() {
        $('.on').on('click',function (){
            var wow = $(this);
            var url = $(this).find('.url').val();
            $.ajax({
                type:'POST',
                method:'PUT',
                url:url,
                data:{
                    _token: "{{ csrf_token() }}",
                    seen:1,
                },
                success: function( msg ) {
                    var dd = jQuery(wow).data('url');
                    window.location.replace(dd);
                }
            });
        })
    });
</script>
