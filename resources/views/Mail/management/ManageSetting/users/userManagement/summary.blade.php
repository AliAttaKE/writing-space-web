<div class="row ">
    <div class="col-sm-12">
        <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#exampleModal1">Change status
        </button>
        <div class="form-group mt-4">

            <div class="form-line">

                <label><strong> User Status </strong> </label>
                @if($data->status == 1)
                    <input type="text"value="{{'active'}}" name="name"  id="name" class="form-control" placeholder="Full Name" readonly>                                            </div>
            @elseif($data->status == 0)

                <input type="text"value="{{'inactive'}}" name="name"  id="name" class="form-control" placeholder="Full Name" readonly>                                            </div>

        @elseif($data->status == 2)

            <input type="text"value="{{'blocked'}}" name="name"  id="name" class="form-control" placeholder="Full Name" readonly>                                            </div>
    @endif
        </div>
<label><strong> Account Status </strong></label>

<div class="form-group">
    <div class="form-line">
        <input type="email" value="{{$data->erp_terminate == 1 ? 'terminated' : 'Commenced' }}"  name="email" id="email" class="form-control" placeholder="Email" readonly>
    </div>
</div>

<label><strong> Role(s) </strong></label>

@if(!empty($data['roles']))
@foreach($data['roles'] as $row)
        <div class="form-group">
            <div class="form-line">
                <input type="email" value="{{$row['role'] != null ? $row['role']['erp_work_flow_role'] : 'N/A' }}"  name="email" id="email" class="form-control" placeholder="Email" readonly>
            </div>
        </div>
@endforeach
    @else
        <div class="form-group">
        <input type="text" value=" {{'Not assigned yet'}}"  name="email" id="email" class="form-control" placeholder="Email" readonly>
        </div>
            @endif


<label> <strong> Level </strong>  </label>

@if(!empty($data['level']))
@foreach($data['level'] as $row)

    <div class="form-group">
        <div class="form-line">

            <input type="email" value="{{$row['level']['erp_commission_level']}}"  name="email" id="email" class="form-control" placeholder="Email" readonly>

        </div>
    </div>

@endforeach
    @else
        <div class="form-group">
            <input type="text" value=" {{'Not assigned yet'}}"  name="email" id="email" class="form-control" placeholder="Email" readonly>
        </div>
   @endif
<label> <strong> Bids </strong>  </label>
@if(!empty($data['bids']))
@foreach($data['bids'] as $row)

    <div class="form-group">
        <div class="form-line">
            <input type="email" value="{{$row['role']['erp_work_flow_role']}} : {{$row['erp_bids']}}"  name="email" id="email" class="form-control" placeholder="Email" readonly>
        </div>
    </div>
@endforeach
@else
    <div class="form-group">
        <input type="text" value=" {{'Not Available'}}"  name="email" id="email" class="form-control" placeholder="Email" readonly>
    </div>
@endif
<label> <strong> Claims </strong>  </label>
@if(!empty($data['bids']))
    @foreach($data['bids'] as $row)

        <div class="form-group">
            <div class="form-line">
                <input type="email" value="{{$row['role']['erp_work_flow_role']}} : {{$row['erp_claims']}}"  name="email" id="email" class="form-control" placeholder="Email" readonly>
            </div>
        </div>
    @endforeach
@else
    <div class="form-group">
        <input type="text" value=" {{'Not Available'}}"  name="email" id="email" class="form-control" placeholder="Email" readonly>
    </div>
@endif


@include('management/ManageSetting/users/userManagement/roles')
@include('management/ManageSetting/users/userManagement/account')
@include('management/ManageSetting/users/userManagement/orderDetails')



        <div>
            {{--                                        <button onclick="document.getElementById('profile').submit()" class="btn btn-primary waves-effect"--}}
            {{--                                                data-dismiss="modal" data-dismiss="modal">Update</button>--}}
            {{--                                            <button type="submit" class="btn btn-primary waves-effect"--}}
            {{--                                                    data-dismiss="modal" data-dismiss="modal">Update</button>--}}
        </div>
    </div>


</div>
