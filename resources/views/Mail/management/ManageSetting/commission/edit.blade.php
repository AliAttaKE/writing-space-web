<div class="modal fade" id="exampleModal{{$commissions->id}}" tabindex="-1" role="dialog" aria-labelledby="formModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="create_questions">
                <div class="modal-header">
                    <h5 class="modal-title" id="formModal">Edit Level</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
            </div>
            <div class="academic_level">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-3 col-lg-2">
                            <div class="form-check form-check-radio">
                                <label>
                                    <input {{$commissions->erp_commission_status == '1' ? 'checked' : ''}} name="status" type="radio"  class="status" value="1" />
                                    <span>Enable</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-3 col-lg-2">
                            <div class="form-check form-check-radio">
                                <label>
                                    <input {{$commissions->erp_commission_status == '0' ? 'checked' : ''}} name="status" type="radio" class="status" value="0" />
                                    <span>Disable</span>
                                </label>
                            </div>
                        </div>

                    </div>

                    <label for="email_address1">Level Name:</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input value="{{$commissions->erp_commission_level}}" type="text" id="email_address1" class="form-control" name="level_name" placeholder="Type Level ">
                        </div>
                    </div>
                    <br>

                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-danger waves-effect" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-info waves-effect">Save Changes</button>
            </div>
        </div>
    </div>

</div>
