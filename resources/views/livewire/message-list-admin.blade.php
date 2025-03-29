<div wire:poll.750ms="fetch_data">
    <div class="card-body p-0 px-5">
        <!--begin::Table-->
        <table class="table table-hover table-row-dashed fs-6 gy-5 my-0" id="kt_table_inbox_message">
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
            <a href="{{route('admin.reply-message',[$d->order_id])}}" class="fs-color-yellow">
           {{$d->order_id}}
            </a>
        </td>
        <td class="fs-7 pe-9" >
            @if($d->New_message != 0)
            <span class="fw-semibold" style="text-align: center;
            background: #f52020;
            border-radius: 10px;
            padding: 5px 20px;
            color: white;">  Unread ({{$d->New_message}})</span>
            @else
            <span class="fw-semibold">All Read </span>
            @endif
        </td>
        <td class="fs-7 pe-9">
            <span class="fw-semibold">   {{$d->updated_at}}</span>
        </td>
        <td>
            <span class="badge badge-custom-bg me-2">{{$d->order_status}}</span>
        </td>
    </tr>
    @endforeach
    @endif
</tbody>
</table>
</div>
