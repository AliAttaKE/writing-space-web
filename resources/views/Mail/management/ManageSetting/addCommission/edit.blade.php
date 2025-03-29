
<div class="modal fade" id="exampleModal1{{$addcommission->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="create_questions">
            <div class="modal-header">
                <h5 class="modal-title" id="formModal">Create Salary/Commission/daily bids/daily claims</h5>
                <button type="button" class="close" data-dismiss="modal"
                        aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('addCommission.update',$addcommission->id)}}" method="post">
                    @csrf
                    @method('PUT')

                    <label for="email_address1">Package Name</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text"
                                   class="form-control" value="{{$addcommission->package_name}}" name="package_name"
                                   placeholder="Package Name">
                        </div>
                    </div>
                    <br>
                    <div>
                        <label for="">Role Level</label>
                        <select class="form-control select2" name="role_id" id="Quiz-type" data-placeholder="Select">
                            @foreach($workflow as $workflows)
                                <option value="{{$workflows->id}}">{{$workflows->erp_work_flow_role}}</option>
                            @endforeach
                        </select>
                        <br>
                    </div>
                    <div>
                        <label for="">Level</label>

                        <select class="form-control select2" name="level_id" id="Quiz-level_id" data-placeholder="Select">
                            @foreach($commission as $commissions)
                                <option value="{{$commissions->id}}">{{$commissions->erp_commission_level}}</option>
                            @endforeach
                        </select>
                        <br>
                    </div>
                    <label for="email_address1">No of daily bids allowed:</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input value="{{$addcommission->erp_daily_bids}}" type="number" min="0" id="email_address1"
                                   class="form-control" name="daily_bids"
                                   placeholder="Daily Bids Allowed">
                        </div>
                    </div>
                    <br>
                    <label for="email_address1">No of daily claims allowed</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input value="{{$addcommission->erp_daily_claims}}" type="number" min="0" id="email_address1"
                                   class="form-control" name="daily_claims"
                                   placeholder="Daily Claims Allowed">
                        </div>
                    </div>
                    <br>


        <div class="modal-header">
            <h5 class="modal-title" id="formModal">Commissions per page (300 words)</h5>
        </div>


            <div>
                <label for="email_address1"><b>Order(s) due within</b></label>
            </div>
            <br>


            <label for="email_address1">8 Hours:</label>
            <div class="form-group">
                <div class="form-line">
                    <input value="{{$addcommission->erp_eight_hrs}}" type="number" min="0"
                           class="form-control" name="erp_eight_hrs"
                           placeholder="Hours">
                </div>
            </div>
            <br>
            <label for="email_address1">24 Hours:</label>
            <div class="form-group">
                <div class="form-line">
                    <input value="{{$addcommission->erp_tf_hrs}}" type="number" min="0"
                           class="form-control" name="erp_tf_hrs"
                           placeholder="Hours">
                </div>
            </div>
            <br>
            <label for="email_address1">48 Hours:</label>
            <div class="form-group">
                <div class="form-line">
                    <input value="{{$addcommission->erp_fe_hrs}}" type="number" min="0"
                           class="form-control" name="erp_fe_hrs"
                           placeholder="Hours">
                </div>
            </div>
            <br>
            <label for="email_address1">3 days</label>
            <div class="form-group">
                <div class="form-line">
                    <input value="{{$addcommission->erp_three_days}}" type="number" min="0"
                           class="form-control" name="erp_three_days"
                           placeholder="Days">
                </div>
            </div>
            <br>
            <label for="email_address1">5 Days</label>
            <div class="form-group">
                <div class="form-line">
                    <input value="{{$addcommission->erp_five_days}}" type="number" min="0"
                           class="form-control" name="erp_five_days"
                           placeholder="Days">
                </div>
            </div>
            <br>
            <br>
            <div>
                <label for="email_address1"><b>Order(s) due after</b></label>
            </div>
            <br>
            <label for="email_address1">7 Days</label>
            <div class="form-group">
                <div class="form-line">
                    <input value="{{$addcommission->erp_seven_days}}" type="number" min="0"
                           class="form-control" name="erp_seven_days"
                           placeholder="Days">
                </div>
            </div>
            <br>
                    <label for="email_address1">14 days</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input value="{{$addcommission->erp_fourteen_days}}" type="number" min="0"
                                   class="form-control" name="erp_fourteen_days"
                                   placeholder="Days">
                        </div>
                    </div>
                    <br>
                    <label for="email_address1">14+ Days</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input value="{{$addcommission->erp_fourteen_plus_days}}" type="number" min="0"
                                   class="form-control" name="erp_fourteen_plus_days"
                                   placeholder="Days">
                        </div>
                    </div>
                    <br>
            </div>

        <div class="modal-footer">
            <button class="btn btn-danger waves-effect"
                    data-dismiss="modal">Cancel</button>
            <button type="submit"
                    class="btn btn-info waves-effect">Update</button>
        </div>
            </form>

</div>
    </div>
</div>
</div>
