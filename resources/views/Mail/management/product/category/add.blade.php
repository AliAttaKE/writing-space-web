
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
     aria-labelledby="formModal" aria-hidden="true">
    <div class="modal-dialog" role="document">

        <div class="modal-content">
            <div class="create_questions">
                <div class="modal-header">
                    <h5 class="modal-title" id="formModal">Create Category</h5>
                    <button type="button" class="close" data-dismiss="modal"
                            aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form id="" action="{{url('add_category')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <label for="email_address1">Status</label>
                        <div class="row">
                            <div class="col-sm-3 col-lg-3">
                                <div class="form-check form-check-radio">
                                    <label>
                                        <input name="status" class="status" type="radio"  value="1" />
                                        <span>Enable</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-3 col-lg-3">
                                <div class="form-check form-check-radio">
                                    <label>
                                        <input name="status" class="status" type="radio" value="0" />
                                        <span>Disable</span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <label for="email_address1">Name </label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" id="erp_question_text"
                                       class="form-control" name="name"
                                       placeholder="Type title Here">
                            </div>
                        </div>
                        <label for="email_address1">Slug </label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" id="erp_question_text"
                                       class="form-control" name="slug"
                                       placeholder="Type title Here">
                            </div>
                        </div>
                        <div class="file-field input-field">
                            <div class="btn">
                                <span>File</span>
                                <input name="image" type="file">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" name="image" type="text">
                            </div>
                        </div>


                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger waves-effect" data-dismiss="modal">Cancel
                    </button>
                    <button type="submit" class="btn btn-info waves-effect" >
                        Create Category
                    </button>
                </div>
            </div>
        </div>
        </form>
    </div>
</div>
