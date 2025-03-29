<div class="modal fade" id="exampleModal1{{$row->id}}" tabindex="-1" role="dialog" aria-labelledby="formModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="create_questions">
                <div class="modal-header">
                    <h5 class="modal-title" id="formModal">Update Questions</h5>
                    <button type="button" class="close" data-dismiss="modal"
                            aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>

                </div>
                <div class="modal-body">
                    <form action="{{route('question.update',$row->id)}}" method="post">
                        <input type="hidden" name="q_id" value="{{$qustion_id}}">
                        @csrf
                        @method('PUT')
                        <label for="email_address1">Status</label>
                        <div class="row">
                            <div class="col-sm-3 col-lg-3">
                                <div class="form-check form-check-radio">
                                    <label>
                                        <input name="erp_status" {{$row->erp_status == '1' ? 'checked' : ''}} type="radio" value="1" />
                                        <span>Enable</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-3 col-lg-3">
                                <div class="form-check form-check-radio">
                                    <label>
                                        <input name="erp_status" {{$row->erp_status == '0' ? 'checked' : ''}} type="radio" value="0" />
                                        <span>Disable</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <label for="email_address1">Question text</label>
                        <div class="record2">
                            <div class="multiple_data ">
                                <div class="row my-2 ">
                                    <div class="col-lg-12">
                                        <input class="ckeditor" type="text" name="erp_question_text" value="{!!$row->erp_question_text!!}">
                                    </div>

                                </div>
                            </div>
                        </div>




                        @if($quiz->erp_quiz_result == 'immediate')

                            <input name="erp_quiz_type" type="hidden" value="check_boxes">

                            <div class="question_checkbo">
                                <h5 class="modal-title" id="formModal">Question Checkbox</h5>
                                <div class="ajeeb2">
                                    <div class="multiple_branches ">
                                        <div class="row my-2 ">
                                            <div class="col-lg-1">
                                                <a href="javascript:void(0);" class="add_button" title="Add field"><i class="fas fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    @if($row->erp_quiz_type == 'check_boxes')
                                        @foreach($row['questions_data'] as $questiondata)
                                            <input type="hidden" name="questiondata_id" value="{{$questiondata->id}}">
                                            @foreach(json_decode($questiondata['erp_checkbox_option']) as $text => $ans)
                                                <div class="multiple_branches ">
                                                    <div class="row">
                                                        <div class="col-2">
                                                                <input class="form-heck-input"  id="erp_question_option" name="erp_question_option[]" value="{{$ans}}" type="number">
                                                        </div>
                                                        <div class="col-9">
                                                            <input type="text" name="erp_question_hint[]"  value="{{$text}}">
                                                        </div>
                                                        <div class="col-1">
                                                            <a class="fas fa-window-close remove_button"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        @else
                            <div>
                                <label for="">Quiz Type</label>
                                <input name="invisible" type="hidden" value="immediate">
                                <select class="form-control select2" value="{{$row->erp_quiz_type}}" name="erp_quiz_type" id="erp_quiz_type" data-placeholder="Select">
                                    <option  value="">Select Quiz Type</option>
                                    <option  {{$row->erp_quiz_type == 'check_boxes'? 'selected': ''}} value="check_boxes">check boxes</option>
                                    <option {{$row->erp_quiz_type == 'file_upload'? 'selected': ''}} value="file_upload">File upload</option>
                                    <option {{$row->erp_quiz_type == 'comment_box'? 'selected': ''}} value="comment_box"> comment box</option>
                                </select>
                                <br>
                            </div>
                            <div class="question_checkbox">
                                <h5 class="modal-title" id="formModal">Question Checkbox</h5>
                                <div class="ajeeb2">
                                    <div class="multiple_branches ">
                                        <div class="row my-2 ">
                                            <div class="col-lg-1">
                                                <a href="javascript:void(0);" class="add_button" title="Add field"><i class="fas fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    @if($row->erp_quiz_type == 'check_boxes')
                                        @foreach($row['questions_data'] as $questiondata)
                                            <input type="hidden" name="questiondata_id" value="{{$questiondata->id}}">
                                            @foreach(json_decode($questiondata['erp_checkbox_option']) as $text => $ans)
                                                <div class="multiple_branches ">
                                                    <div class="row">
                                                        <div class="col-2">
                                                            <input class="form-heck-input"  id="erp_question_option" name="erp_question_option[]" value="{{$ans}}" type="number">
                                                        </div>
                                                        <div class="col-9">
                                                            <input type="text" name="erp_question_hint[]"  value="{{$text}}">
                                                        </div>
                                                        <div class="col-lg-1">
                                                            <a class="fas fa-window-close remove_button"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        @endif




                        <div class="file_upload">
                            <h5 class="modal-title" id="formModal">File Upload</h5>

                            <label for="email_address1">Allowable file types</label>
                            <div class="row">
                                <div class="col-sm-3 col-lg-3">
                                    <div class="form-check form-check-radio">
                                        <label>
                                            <input name="pdf" type="radio" value="1" />
                                            <span>PDF</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-3 col-lg-3">
                                    <div class="form-check form-check-radio">
                                        <label>
                                            <input name="pdf" type="radio" value="2" />
                                            <span>DOC</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-3 col-lg-3">
                                    <div class="form-check form-check-radio">
                                        <label>
                                            <input name="pdf" type="radio" value="3" />
                                            <span>DOCX</span>
                                        </label>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-sm-3 col-lg-3">
                                    <div class="form-check form-check-radio">
                                        <label>
                                            <input name="pdf" type="radio" value="4" />
                                            <span>PNG</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-3 col-lg-3">
                                    <div class="form-check form-check-radio">
                                        <label>
                                            <input name="pdf" type="radio" value="5" />
                                            <span>JPG</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-3 col-lg-3">
                                    <div class="form-check form-check-radio">
                                        <label>
                                            <input name="pdf" type="radio" value="6" />
                                            <span>JPEG</span>
                                        </label>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="comment_box">

                        </div>
                        <div class="modal-footer">
                            <button type="" class="btn btn-danger waves-effect" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-info waves-effect">Update Questions</button>
                        </div>
                    </form>
                    <div class="d-none" style="display:none;">
                        <div class="multiple_branches ">
                            <div class="row">
                                <div class="col-sm-6 col-lg-1">
                                    <label class="form-check-label">
                                        <input class="form-check-input"  id="erp_question_option" value="{{$row->erp_question_option}}" name="erp_question_option[]" type="checkbox">
                                        <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                                    </label>
                                </div>
                                <div class="col-lg-10">
                                    <input type="text" name="erp_question_hint[]"  value="{{$row->erp_question_hint}}">
                                </div>
                                <div class="col-lg-1">
                                    <a class="fas fa-window-close remove_button"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-none" style="display:none;">
                        <div class="multiple_data ">
                            <div class="row">
                                <div class="col-lg-11">
                                    <input type="text" name="erp_question_text[]"  value="{{$row->erp_question_text}}">
                                </div>
                                <div class="col-lg-1">
                                    <a class="fas fa-window-close remove_button"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </div>

    </div>
</div>
