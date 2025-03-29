<form action="{{route('role-Assign.store')}}" method="post">
    @csrf
    <div class="academic_level">
        <div class="modal-body">
            <div class="modal-body">
                <label for="email_address1">User Name</label>
                <div class="form-group">
                    <div class="form-line">
                        <select class="form-control select2" readonly id="Quiz-type" name="user_id" data-placeholder="Select">
                            <option value="{{$data->id}}"> {{$data->name}}</option>
                        </select>
                    </div>
                </div>
                <label for="email_address1">Status</label>
                <div class="form-group">
                    <div class="form-line">
                        <select class="form-control select2" readonly id="status" name="status" data-placeholder="Select">
                            <option {{$data->status == 0 ? 'selected' : '' }}  value="0"> Pending</option>
                            <option {{$data->status == 1 ? 'selected' : '' }}  value="1"> Approve</option>
                            <option  {{$data->status ==2 ? 'selected' : '' }} value="2"> Block</option>
                        </select>
                    </div>
                </div>
                <label for="email_address1">Commission</label>
{{--                <div class="form-group">--}}
{{--                    <div class="form-line">--}}
{{--                        <select class="form-control select2" id="Quiz-type" name="Commission_id" data-placeholder="Select" required>--}}
{{--                            <option  selected disabled value="" > Select Role</option>--}}
{{--                        @foreach($datas['commission'] as $commission )--}}
{{--                                <option value="{{$commission->id}}"> {{$commission->package_name}}</option>--}}
{{--                            @endforeach--}}
{{--                        </select>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <label for="email_address1">Monitor</label>
                <div class="row">
                    <div class="col-sm-3 col-lg-3">
                        <div class="form-check form-check-radio">
                            <label>
                                <input  {{$data->monitor == 1 ? 'checked' : '' }} name="monitor" class="erp_status" type="radio"  value="1" />
                                <span>Yes</span>
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-3 col-lg-3">
                        <div class="form-check form-check-radio">
                            <label>
                                <input  {{$data->monitor == 0 ? 'checked' : '' }}  name="monitor" class="erp_status" type="radio" value="0" />
                                <span>No</span>
                            </label>
                        </div>
                    </div>
                </div>




            </div>
        </div>

        <div class="modal-footer">
            <div class="modal-footer">
                <button type="submit" class="btn btn-danger waves-effect"
                        data-dismiss="modal">Close</button>
                <button type="submit"
                        class="btn btn-info waves-effect">Submit</button>
            </div>
        </div>
    </div>
</form>
