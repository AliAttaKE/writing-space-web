
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
     aria-labelledby="formModal" aria-hidden="true">
    <div class="modal-dialog" role="document">

        <div class="modal-content">
            <div class="create_questions">
                <div class="modal-header">
                    <h5 class="modal-title" id="formModal">Create Penalty</h5>
                    <button type="button" class="close" data-dismiss="modal"
                            aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form id="" action="{{route('panelty.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <label for="email_address1">Status</label>
                        <div class="row">
                            <div class="col-sm-3 col-lg-3">
                                <div class="form-check form-check-radio">
                                    <label>
                                        <input name="erp_status" class="erp_status" type="radio"  value="1" />
                                        <span>Enable</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-3 col-lg-3">
                                <div class="form-check form-check-radio">
                                    <label>
                                        <input name="erp_status" class="erp_status" type="radio" value="0" />
                                        <span>Disable</span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <label for="email_address1">Title </label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" id="erp_question_text"
                                       class="form-control" name="erp_title"
                                       placeholder="Type title Here">
                            </div>
                        </div>


                            <div class="">
                                <label for="email_address1">Description</label>
                                <textarea name="erp_message"  class="form-control"  cols="30" rows="10"></textarea>
                            </div>








                        <div class="mt-4">

                            <div>
                                <select class="form-control"  name="erp_panelty" data-placeholder="Select">


                                    <option value="1">Plus</option>
                                    <option value="0">Minus</option>

                                </select>


                        </div>

                </div>

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-danger waves-effect" data-dismiss="modal">Cancel
                </button>
                <button type="submit" class="btn btn-info waves-effect" >
                    Create Penalty
                </button>
            </div>
        </div>
    </div>
    </form>
</div>
</div>
