<form action="{{route('role-Assign.store')}}" method="post">
    @csrf
    <div class="academic_level">
        <div class="modal-body">
            <div class="modal-body">
                <label for="email_address1">User Name</label>
                <div class="form-group">
                    <div class="form-line">

                        <h6>{{$data->name}} </h6>
                    </div>
                </div>
                <label for="email_address1">Email</label>
                <div class="form-group">
                    <div class="form-line">

                        <h6>{{$data->email}} </h6>
                    </div>
                </div>
                <label for="email_address1">Phone number</label>
                <div class="form-group">
                    <div class="form-line">
                        @if($data->cell_number != null)
                        <h6>{{$data->cell_number}} </h6>
                        @else
                        <h6>{{'N/A'}}</h6>
                            @endif
                    </div>
                </div>
                <label for="email_address1">Address</label>
                <div class="form-group">
                    <div class="form-line">
                        @if($data->address != null)
                            <h6>{{$data->address}} </h6>
                        @else
                            <h6>{{'N/A'}}</h6>
                        @endif
                    </div>
                </div>
                <label for="email_address1">Country</label>
                <div class="form-group">
                    <div class="form-line">
                        @if($data->country != null)
                            <h6>{{$data->country}} </h6>
                        @else
                            <h6>{{'N/A'}}</h6>
                        @endif
                    </div>
                </div>
                <label for="email_address1">Status</label>
                <div class="form-group">
                    @if($data->status == 0)
                        <h6>Pending </h6>

                    @elseif($data->status ==1)
                        <h6>Approved </h6>

                    @elseif($data->status ==2)
                        <h6> Blocked </h6>


                        @endif


                </div>
                <label for="email_address1">Monitor</label>

                @if($data->monitor == 1)
                    <h6> Yes </h6>

                @elseif($data->monitor  ==0)
                    <h6> No </h6>


                @endif



            </div>
        </div>


    </div>
</form>
