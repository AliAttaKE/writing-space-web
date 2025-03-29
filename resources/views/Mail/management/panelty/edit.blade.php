
<div class="modal fade" id="exampleModal2{{$panelties->id}}" tabindex="-1" role="dialog"
     aria-labelledby="formModal" aria-hidden="true">
    <div class="modal-dialog" role="document">

        <div class="modal-content">
            <div class="create_questions">
                <div class="modal-header">
                    <h5 class="modal-title" id="formModal">Edit Penalty</h5>
                    <button type="button" class="close" data-dismiss="modal"
                            aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">


                    <form action="{{route('panelty.update',$panelties->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <label for="">Status</label>
                        <div class="row">
                            <div class="col-sm-3 col-lg-3">
                                <div class="form-check form-check-radio">
                                    <label>
                                        <input {{$panelties->erp_status == '1' ? 'checked' : ''}} name="erp_status" class="erp_status" type="radio"  value="1" />
                                        <span>Enable</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-3 col-lg-3">
                                <div class="form-check form-check-radio">
                                    <label>
                                        <input {{$panelties->erp_status == '0' ? 'checked' : ''}} name="erp_status" class="erp_status" type="radio" value="0" />
                                        <span>Disable</span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <label for="">Title </label>
                        <div class="form-group">
                            <div class="form-line">
                            </div>
                            <input  value=" {{$panelties->erp_title}}"  type="text" id="erp_question_text"
                                    class="form-control" name="erp_title"
                                    placeholder="Type title Here">
                        </div>



                        <div class="">
                            <label for="email_address1">Message</label>
                            <textarea  name="erp_message"  class="form-control" id="erp_comment_text" cols="30" rows="10">  {{$panelties->erp_message}}</textarea>
                        </div>









                                <div class="mt-4">


                                    <select class="form-control select2 test" name="erp_panelty"  data-placeholder="Select">

                                        <option {{$panelties->erp_panelty == '1' ? 'selected' : ''}} value="1">Plus</option>
                                        <option {{$panelties->erp_panelty == '0' ? 'selected' : ''}} value="0">minus</option>

                                    </select>

                                </div>







                </div>
                <div class="modal-footer">
                    <button type="" class="btn btn-danger waves-effect" data-dismiss="modal">Cancel
                    </button>
                    <button type="submit" class="btn btn-info waves-effect" >
                        update Penalty
                    </button>
                </div>
            </div>
        </div>
        </form>
    </div>
</div>



