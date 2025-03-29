<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
     aria-labelledby="formModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form id="question" action="{{route('question.store')}}" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="q_id" value="{{$qustion_id}}">
            @csrf
            <div class="modal-content">
                <div class="create_questions">
                    <div class="modal-header">
                        <h5 class="modal-title" id="formModal">Create Questions</h5>
                        <button type="button" class="close" data-dismiss="modal"
                                aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="error"></div>
                        <input type="hidden" name="erp_quiz_id" id="erp_quiz_id" value="1">
                        <label for="email_address1">Status</label>
                        <div class="row">
                            <div class="col-sm-3 col-lg-3">
                                <div class="form-check form-check-radio">
                                    <label>
                                        <input checked name="erp_status" class="erp_status" type="radio"  value="1" />
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
                        <div>
                            <label for="email_address1">Question text</label>
                            <div class="record2">
                                <div class="multiple_data ">
                                    <div class="row my-2 ">
                                        <div class="col-lg-12">
                                            <input class="ckeditor" type="text" name="erp_question_text" value="">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                            <label for="">Quiz Type</label>
                            @if($quiz->erp_quiz_result == 'immediate')

                            <input name="erp_quiz_type" type="hidden" value="check_boxes">



                            <h5 class="modal-title" id="formModal">Question Checkbox</h5>

                                    <div class="ajeeb2">
                                        <div class="multiple_branches ">
                                            <div class="row my-2 ">
                                                <div class="col-sm-2 col-lg-2">
                                                    <label class="form-check-label">
                                                        <input class="f"  id="erp_question_option" name="erp_question_option[]" value="0" type="number">
                                                        <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                                                    </label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <input class="" type="text" name=erp_question_hint[]" value="">
                                                </div>
                                                <div class="col-lg-1">
                                                    <a href="javascript:void(0);" class="add_button" title="Add field"><i class="fas fa-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    @else
                            <select class="form-control select2 mt-3" name="erp_quiz_type" id="erp_quiz_type" data-placeholder="Select">
                            <option value="">Select Quiz Type</option>
                            <option value="check_boxes">check boxes</option>
                                            <option value="file_upload">File upload</option>
                                            <option value="comment_box"> comment box</option>
                                        </select>
                                        <br>





                      <div class="question_checkbox">
                          <h5 class="modal-title" id="formModal">Question Checkbox</h5>
                            <div class="ajeeb2">
                                <div class="multiple_branches ">
                                    <div class="row my-2 ">
                                        <div class="col-sm-2 col-lg-2">
                                            <label class="form-check-label">
                                                <input class="form-check-in"  id="erp_question_option" name="erp_question_option[]" value="0" type="number">
                                                <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                                            </label>
                                        </div>
                                        <div class="col-lg-9">
                                            <input class="" type="text" name=erp_question_hint[]" value="">
                                        </div>
                                        <div class="col-lg-1">
                                            <a href="javascript:void(0);" class="add_button" title="Add field"><i class="fas fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                      </div>

                        <div class="file_upload">
                            <h5 class="modal-title" id="formModal">File Upload</h5>
                            <label for="email_address1">Allowable file types</label>
                            <div class="row">
                                <div class="col-sm-3 col-lg-3">
                                    <div class="form-check form-check-radio">
                                        <label>
                                            <input name="file_allow[]" type="checkbox" value="pdf" />
                                            <span>PDF</span>
                                        </label>

                                    </div>
                                </div>
                                <div class="col-sm-3 col-lg-3">
                                    <div class="form-check form-check-radio">
                                        <label>
                                            <input name="file_allow[]" type="checkbox" value="doc" />
                                            <span>DOC</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-3 col-lg-3">
                                    <div class="form-check form-check-radio">
                                        <label>
                                            <input name="file_allow[]" type="checkbox" value="docx" />
                                            <span>DOCX</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3 col-lg-3">
                                    <div class="form-check form-check-radio">
                                        <label>
                                            <input name="file_allow[]" type="checkbox" value="png" />
                                            <span>PNG</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-3 col-lg-3">
                                    <div class="form-check form-check-radio">
                                        <label>
                                            <input name="file_allow[]" type="checkbox" value="jpg" />
                                            <span>JPG</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-3 col-lg-3">
                                    <div class="form-check form-check-radio">
                                        <label>
                                            <input name="file_allow[]" type="checkbox" value="jpeg" />
                                            <span>JPEG</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="comment_box">

                        </div>
                    </div>
                    @endif
                    <div class="modal-footer">
                        <button type="" class="btn btn-danger waves-effect" data-dismiss="modal">Cancel
                        </button>
                        <button type="submit" class="btn btn-info waves-effect" >
                            Create Questions
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="d-none  multinone" style="display:none;">
    <div class="multiple_branches ">
        <div class="row">
            <div class="col-sm-6 col-lg-2">
                <label class="form-check-label">
                    <input class="form-check-inpu"  id="erp_question_option" name="erp_question_option[]" value="0" type="number">
                    <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                </label>

            </div>
            <div class="col-lg-9">
                <input type="text" name="erp_question_hint[]" value="">
            </div>
            <div class="col-lg-1">
                <a class="fas fa-window-close remove_button"></a>
            </div>
        </div>
    </div>
</div>
<div class="d-none  record" style="display:none;">
    <div class="multiple_data ">
        <div class="row">
            <div class="col-lg-11">
                <input type="text" name="erp_question_text[]" value="">
            </div>
            <div class="col-lg-1">
                <a class="fas fa-window-close remove_button"></a>
            </div>
        </div>
    </div>
</div>
