

<div wire:poll.750ms="fetch_data">
    <div class="card-body px-10 msg-cus">
        <!--begin::Table-->
        <table class="table table-hover table-row-dashed fs-6 gy-5 my-0" id="kt_inbox_listing">
            <thead class="">
                <tr>

                    <th class="min-w-80px">Order Id</th>
                    <th class="min-w-125px">New Message</th>
                    <th class="min-w-125px">Last Modified</th>
                    <th class="min-w-125px">Status</th>
                </tr>
            </thead>



        <tbody>
    @if($data)
    @foreach ($data as $d)

    <tr>


        <td class="ps-9">
            <a href="{{route('customer.reply-message',[$d->order_id])}}">
           {{$d->order_id}}
            </a>
        </td>
        <td class="fs-7 pe-9" >
            @if($d->New_message != 0)
            <span class="fw-semibold" style="text-align: center;
            background: #f52020;
            border-radius: 100px;
            padding: 5px;
            color: white;">  Unread ({{$d->New_message}})  </span>
            @else
            <span class="fw-semibold">All Read </span>
            @endif
        </td>
        <td class="fs-7 pe-9">
            <span class="fw-semibold">   {{$d->updated_at->format('F j, Y g:i A')}}</span>

        </td>


        @if(auth()->user()->id == 1)
    <td>
        <span class="badge badge-custom-bg me-2">
            {{$d->order_status}}
        </span>
    </td>
@else
    <td>
        <span class="badge badge-custom-bg me-2">
            @if($d->order_status == 'Completed')
                In-Progress
            @else
                {{$d->order_status}}
            @endif
        </span>
    </td>
@endif




    </tr>
    @endforeach
    @endif
        </tbody>
</table>
</div>
