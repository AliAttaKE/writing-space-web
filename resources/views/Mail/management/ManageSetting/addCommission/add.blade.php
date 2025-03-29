<div class="modal fade" id="Modal" tabindex="-1" role="dialog"
     aria-labelledby="formModal" aria-hidden="true">
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
                    <form action="{{route('addCommission.store')}}" method="post">
                        @csrf

                        <label for="email_address1">Status</label>
                        <div class="row">
                            <div class="col-sm-3 col-lg-2">
                                <div class="form-check form-check-radio">
                                    <label>
                                        <input checked name="pdf" type="radio" value="1" />
                                        <span>Enable</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-3 col-lg-2">
                                <div class="form-check form-check-radio">
                                    <label>
                                        <input name="pdf" type="radio" value="0" />
                                        <span>Disable</span>
                                    </label>
                                </div>
                            </div>

                        </div>
                        <label for="email_address1">Package Name</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text"
                                       class="form-control" name="package_name"
                                       placeholder="Package Name">
                            </div>
                        </div>
                        <br>
                        <div>
                            <label for="">Role Level</label>
                            <select class="form-control select2" id="Quiz-type" name="role_id" data-placeholder="Select">
                                @foreach($workflow as $workflows)
                                    <option value="{{$workflows->id}}" >{{$workflows->erp_work_flow_role}}</option>
                                @endforeach
                            </select>
                            <br>
                        </div>

                        <div>
                            <label for="">Level</label>

                            <select class="form-control select2" id="Quiz-type" name="level_id" data-placeholder="Select">
                                @foreach($commission as $commissions)
                                    <option value="{{$commissions->id}}">{{$commissions->erp_commission_level}}</option>
                                @endforeach
                            </select>

                        </div>
                        <label class="mt-4" for="email_address1">No of daily bids allowed:</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="number" min="0" id="email_address1"
                                       class="form-control" name="daily_bids"
                                       placeholder="Daily Bids Allowed">
                            </div>
                        </div>
                        <br>
                        <label for="email_address1">No of daily claims allowed</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="number" min="0" id="email_address1"
                                       class="form-control" name="daily_claims"
                                       placeholder="Daily Claims Allowed">
                            </div>
                        </div>
                        <br>



                        <div class="modal-header">
                            <h5 class="modal-title" id="formModal">Commissions per page (300 words)</h5>
                        </div>
                        <div class="modal-body">

                            <div>
                                <label for="email_address1"><b>Order(s) due within</b></label>
                            </div>
                            <br>

                            {{--                                            <button type="button"--}}
                            {{--                                                    class="btn btn-primary m-t-15 waves-effect">LOGIN</button>--}}


                            <label for="email_address1">8 Hours:</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number"
                                           class="form-control" name="erp_eight_hrs"
                                           placeholder="Hours"  min="0">
                                </div>
                            </div>
                            <br>
                            <label for="email_address1">24 Hours:</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number"
                                           class="form-control" name="erp_tf_hrs"
                                           placeholder="Hours"  min="0">
                                </div>
                            </div>
                            <br>
                            <label for="email_address1">48 Hours:</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number"
                                           class="form-control" name="erp_fe_hrs"
                                           placeholder="Hours"  min="0">
                                </div>
                            </div>
                            <br>
                            <label for="email_address1">3 Days</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number"
                                           class="form-control" name="erp_three_days"
                                           placeholder="Days"  min="0">
                                </div>
                            </div>
                            <br>
                            <label for="email_address1">5 Days</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number"
                                           class="form-control" name="erp_five_days"
                                           placeholder="Days"  min="0">
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
                                    <input type="number"
                                           class="form-control" name="erp_seven_days"
                                           placeholder="Days"  min="0">
                                </div>
                            </div>
                            <br>
                            <label for="email_address1">14 Days</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number"
                                           class="form-control" name="erp_fourteen_days"
                                           placeholder="Days"  min="0">
                                </div>
                            </div>
                            <br>
                            <label for="email_address1">14+ Days</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number"
                                           class="form-control" name="erp_fourteen_plus_days"
                                           placeholder="Days"  min="0">
                                </div>
                            </div>
                            <br>
                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-danger waves-effect"
                                    data-dismiss="modal">Cancel</button>
                            <button type="submit"
                                    class="btn btn-info waves-effect">Create</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
