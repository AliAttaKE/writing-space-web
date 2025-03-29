<form action="{{route('commission.store')}}" method="post">
    @csrf
    <div class="academic_level">
        <div class="modal-body">
            <div class="modal-body">
                <label for="email_address1">Status</label>
                <div class="row">
                    <div class="col-sm-3 col-lg-3">
                        <div class="form-check form-check-radio">
                            <label>
                                <input checked name="status" type="radio"  class="status" value="1" />
                                <span>Enable</span>
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-3 col-lg-3">
                        <div class="form-check form-check-radio">
                            <label>
                                <input name="status" type="radio" class="status" value="0" />
                                <span>Disable</span>
                            </label>
                        </div>
                    </div>

                </div>


                <label for="email_address1">Level Name</label>
                <div class="form-group">
                    <div class="form-line">
                        <input type="text" id="email_address1"
                               class="form-control" name="level_name"
                               placeholder="Type Level Name ">
                    </div>
                </div>
            </div>
        </div>




        <div class="modal-footer">
            <div class="modal-footer">
                <button type="submit" class="btn btn-danger waves-effect"
                        data-dismiss="modal">Close</button>
                <button type="submit"
                        class="btn btn-info waves-effect">Create Level</button>
            </div>
        </div>
    </div>
</form>
