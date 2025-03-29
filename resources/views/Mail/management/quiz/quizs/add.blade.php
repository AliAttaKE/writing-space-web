    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
     aria-labelledby="formModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formModal">New Quiz</h5>
                <button type="button" class="close" data-dismiss="modal"
                        aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('quiz.store')}}" method="post">
                    @csrf
                    <label for="email_address1">Status</label>
                    <div class="row">
                        <div class="col-sm-3 col-lg-2">
                            <div class="form-check form-check-radio">
                                <label>
                                    <input checked name="status" type="radio"  class="status" value="1" />
                                    <span>Enable</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-3 col-lg-2">
                            <div class="form-check form-check-radio">
                                <label>
                                    <input name="status" type="radio" class="status" value="0" />
                                    <span>Disable</span>
                                </label>
                            </div>
                        </div>

                    </div>
                    <label for="email_address1">Name</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" id="quiz_name"
                                   class="form-control" name="name"
                                   placeholder="Type quiz name Here">
                        </div>
                    </div>

                    <div>
                        <label for="password">Quiz Passage</label>

                        <div class="form-group">

                                <div class="col-sm-12 focused">
                                    <label for="email_address1" class="active">Text</label>
                                    <textarea name="erp_quiz_passage" class="form-control" id="description" cols="30" rows="10" style="border:#a0aec0 solid 1px;">  </textarea>
                                </div>

                        </div>

                    </div>

                    <div>
                        <label for="password">Quiz format</label>


                        <select class="form-control select2" id="quiz_format" name="quiz_format" data-placeholder="Select">
                            <option value="single">one question per screen</option>
                            <option value="multiple">show all questions on a page</option>


                        </select>

                    </div>

                    <div class="mt-4">
                        <label for="password" name="quiz_type" >Quiz distribution time</label>


                        <select class="form-control select2 " name="quiz_type" id="quiz_type" data-placeholder="Select">
                            <option value="signup">upon singup</option>
                            <option value="login">upon login</option>
{{--                            <option value="both">Both of the above</option>--}}

                        </select>

                    </div>

                    <div class="mt-4">
                        <label for="password" name="result" >Result</label>

  <div class="result">
                        <select class="form-control select2 " name="quiz_result" id="quiz_result" data-placeholder="Select">
                            <option value="normal">Normal Result</option>
                            <option value="immediate">Immediate Result</option>


                        </select>
                        <div class="mt-4 num" >

                            <div class="form-line">
                                <input type="number" id="passing"
                                       class="form-control" min="0" name="quiz_passing"
                                       placeholder="passing num of questions">
                            </div>
                        </div>

  </div>

                    </div>


                     <br>
                    <label for="email_address1" >Timer</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="number" id="timer"
                                   class="form-control" min="0" name="timer"
                                   placeholder="">
                        </div>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-danger waves-effect"
                        data-dismiss="modal">Cancel</button>
                <button type="submit"
                        class="btn btn-info waves-effect">Create Quiz</button>
            </div>
        </div>

    </div>
</div>
</div>
