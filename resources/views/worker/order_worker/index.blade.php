@extends('worker/layouts/master')
@section('title')
    Create Order
@endsection
@section('content')
    <div class="container">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title"> Create Order</h4>
                            </li>

                        </ul>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 mt">
                        <button type="button" class="btn btn-primary float-right mt-3"> Back
                        </button>
                    </div>

                </div>
                <div class="card">
                    <div class="header">
                        <!-- #START# Modal Form Example -->
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <button type="button" class="btn btn-primary " data-toggle="modal"
                                    data-target="#exampleModal"> Create order

                            </button>
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                 aria-labelledby="formModal" aria-hidden="true">
                                <div class="modal-dialog" style="max-width: 80%" role="document">
                                    <div class="modal-content " >
                                        <div class="create_questions">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="formModal">Paper Details:</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form>
                                                    <label><b>Topic:</b> "Please provide us with a clear topic
                                                        of your assignment up to 300 symbols. If you don’t have a specific
                                                        topic, use the default writer’s choice option or use the “Subject or
                                                        Discipline” chosen above." </label>


                                                    <label for="email_address1">Topic</label>

                                                    <div class="form-line">
                                                        <select class="form-control select2" name="quiz_type" id="Quiz-type" data-placeholder="Select">
                                                            <option value="option1">Option1</option>
                                                            <option value="option2">option2</option>
                                                            <option value="option3"> option3</option>
                                                        </select>
                                                        <input type="text" class="form-control" id="">
                                                    </div>
                                                    <br>

                                                    <div>

                                                        <label><b>Paper Instructions:</b> "To ensure that the final paper meets your
                                                            requirements,
                                                            make sure your instructions are as clear and detailed as possible. This
                                                            will decrease the chance of revisions in your order."</label>
                                                        <label for="email_address1">Message</label>
                                                        <textarea name="comment_text"  class="form-control" id="comment_text" cols="30" rows="10"></textarea>
                                                        <br>
                                                    </div>

                                                    <label for="email_address1">Academic Level:</label>

                                                    <div class="form-line">
                                                        <select class="form-control select2" name="quiz_type" id="Quiz-type" data-placeholder="Select">
                                                            <option value="option1">Option1</option>
                                                            <option value="option2">option2</option>
                                                            <option value="option3"> option3</option>
                                                        </select>
                                                        <br>
                                                        <label for="">"Please select the option that is the closest to your next obtainable degree."</label>
                                                    </div>
                                                    <br><br>
                                                    <label><b>Type of Paper:</b> "If the required type of paper is missing, feel free to pick “Other” and write your specific type of paper in the appeared tab."
                                                    </label>


                                                    <label for="email_address1">Type of Paper:</label>

                                                    <div class="form-line">
                                                        <select class="form-control select2" name="quiz_type" id="Quiz-type" data-placeholder="Select">
                                                            <option value="option1">Option1</option>
                                                            <option value="option2">option2</option>
                                                            <option value="option3"> option3</option>
                                                        </select>

                                                    </div>
                                                    <br><br>

                                                    <label><b>Subject or Discipline:</b> "If the required type of paper is missing, feel free to pick “Other” and write your specific type of paper in the appeared tab."
                                                    </label>


                                                    <label for="email_address1">Subject or Discipline:</label>

                                                    <div class="form-line">
                                                        <select class="form-control select2" name="quiz_type" id="Quiz-type" data-placeholder="Select">
                                                            <option value="option1">Option1</option>
                                                            <option value="option2">option2</option>
                                                            <option value="option3"> option3</option>
                                                        </select>

                                                    </div>
                                                    <br><br>
                                                    <label><b>Paper Format: </b> "Format of your in-text citations, references and title page. The format/citation style also applies to any Works Cited and/or References pages."
                                                    </label>


                                                    <label for="email_address1">Paper Format:</label>

                                                    <div class="form-line">
                                                        <select class="form-control select2" name="quiz_type" id="Quiz-type" data-placeholder="Select">
                                                            <option value="option1">Option1</option>
                                                            <option value="option2">option2</option>
                                                            <option value="option3"> option3</option>
                                                        </select>

                                                    </div>
                                                    <br><br>
                                                    <label for="email_address1">Language and spelling style:</label>

                                                    <div class="form-line">
                                                        <select class="form-control select2" name="quiz_type" id="Quiz-type" data-placeholder="Select">
                                                            <option value="option1">Option1</option>
                                                            <option value="option2">option2</option>
                                                            <option value="option3"> option3</option>
                                                        </select>
                                                        <br>
                                                        <label for="email_address1">For Example: color (American) ---- Colour (British)</label>

                                                    </div>
                                                    <br> <br>
                                                    <label for="email_address1">Will you provide any resource materials:</label>

                                                    <div class="form-line">
                                                        <select class="form-control select2" name="quiz_type" id="Quiz-type" data-placeholder="Select">
                                                            <option value="option1">Option1</option>
                                                            <option value="option2">option2</option>
                                                            <option value="option3"> option3</option>
                                                        </select>
                                                        <br><br>
                                                        <label><b>Paper Format: </b> "Select the number of pages needed. Do not include Bibliography, Works Cited, or References pages because they are free."
                                                        </label>


                                                        <label for="email_address1">Number of Pages:</label>

                                                        <div class="form-line">
                                                            <select class="form-control select2" name="quiz_type" id="Quiz-type" data-placeholder="Select">
                                                                <option value="option1">Option1</option>
                                                                <option value="option2">option2</option>
                                                                <option value="option3"> option3</option>
                                                            </select>

                                                        </div>
                                                        <br><br>
                                                        <label><b>Spacing: </b> “Double spaced pages contain approximately 300 words each, while single-spaced have 600.”
                                                        </label>


                                                        <label for="email_address1">Spacing:</label>

                                                        <div class="form-line">
                                                            <select class="form-control select2" name="quiz_type" id="Quiz-type" data-placeholder="Select">
                                                                <option value="option1">Option1</option>
                                                                <option value="option2">option2</option>
                                                                <option value="option3"> option3</option>
                                                            </select>

                                                        </div>
                                                        <br><br>
                                                        <label><b>PowerPoint Slides:</b> "The number of Power Point slides that will be delivered to you separately from your paper. Useful for those who need to present in front of class."
                                                        </label>


                                                        <label for="email_address1">PowerPoint Slides:</label>

                                                        <div class="form-line">
                                                            <input type="text" class="form-control" id="">

                                                        </div>
                                                        <br><br>
                                                        <label><b>Sources: </b> "This number of entries will be in your reference list or bibliography page.”
                                                        </label>
                                                        <br><br>
                                                        <label><b>FREE SOURCES:  </b> If needed, you may request one (1) free source for every one (1) page of text that you order. For example, if you order 20 pages of text, you can request up to 20 sources for free.”
                                                        </label>
                                                        <br><br>
                                                        <label><b>EXTRA SOURCES: </b>  There is an additional cost of $1 per each extra source that exceeds the number of pages that you order. For example, if you order 10 pages and request 15 sources, there will be a total additional cost of $5 for the 5 extra sources.
                                                        </label>
                                                        <br><br>
                                                        <label for="email_address1">No. of EXTRA SOURCES:</label>

                                                        <div class="form-line">
                                                            <input type="text" class="form-control" id="">

                                                        </div>
                                                        <br><br>
                                                        <label><b>Deadline: </b>  "The time in which you will receive your completed paper. The countdown starts when we receive payment for your order. Please note that revision requests may exceed your deadline."
                                                        </label>


                                                        <label for="email_address1">Deadline:</label>

                                                        <div class="form-line">
                                                            <select class="form-control select2" name="quiz_type" id="Quiz-type" data-placeholder="Select">
                                                                <option value="option1">Option1</option>
                                                                <option value="option2">option2</option>
                                                                <option value="option3"> option3</option>
                                                            </select>

                                                        </div>
                                                        <br><br>
                                                        <label for="email_address1">Copy of Sources:</label>

                                                        <div class="form-line">
                                                            <select class="form-control select2" name="quiz_type" id="Quiz-type" data-placeholder="Select">
                                                                <option value="option1">Option1</option>
                                                                <option value="option2">option2</option>
                                                                <option value="option3"> option3</option>
                                                            </select>

                                                        </div>
                                                        <br><br>
                                                        <label for="email_address1">1 Page Summary:</label>

                                                        <div class="form-line">
                                                            <select class="form-control select2" name="quiz_type" id="Quiz-type" data-placeholder="Select">
                                                                <option value="option1">Option1</option>
                                                                <option value="option2">option2</option>
                                                                <option value="option3"> option3</option>
                                                            </select>

                                                        </div>
                                                        <br><br>
                                                        <label for="email_address1">Paper Outline in Bullets:</label>

                                                        <div class="form-line">
                                                            <select class="form-control select2" name="quiz_type" id="Quiz-type" data-placeholder="Select">
                                                                <option value="option1">Option1</option>
                                                                <option value="option2">option2</option>
                                                                <option value="option3"> option3</option>
                                                            </select>

                                                        </div>
                                                        <br><br>
                                                        <label for="email_address1">Abstract Page:</label>

                                                        <div class="form-line">
                                                            <select class="form-control select2" name="quiz_type" id="Quiz-type" data-placeholder="Select">
                                                                <option value="option1">Option1</option>
                                                                <option value="option2">option2</option>
                                                                <option value="option3"> option3</option>
                                                            </select>

                                                        </div>
                                                        <br><br>
                                                        <label><b>Statistical Analysis:  </b>  If your order requires statistical analysis or a significant amount of mathematical calculations, there will be an additional charge of 15%. To see a list of features that qualify as "statistical analysis,"   <b>click here.</b>
                                                        </label>


                                                        <label for="email_address1">Statistical Analysis:</label>

                                                        <div class="form-line">
                                                            <select class="form-control select2" name="quiz_type" id="Quiz-type" data-placeholder="Select">
                                                                <option value="option1">Option1</option>
                                                                <option value="option2">option2</option>
                                                                <option value="option3"> option3</option>
                                                            </select>

                                                        </div>
                                                        <br><br>
                                                </form>
                                            </div>
                                        </div>

                                        {{--                                        <div class="file_upload">--}}
                                        {{--                                            <div class="modal-header">--}}
                                        {{--                                                <h5 class="modal-title" id="formModal">File Upload</h5>--}}
                                        {{--                                            </div>--}}
                                        {{--                                            <div class="modal-body">--}}
                                        {{--                                                <form>--}}
                                        {{--                                                    <div class="file-field input-field">--}}
                                        {{--                                                        <div class="btn">--}}
                                        {{--                                                            <span>File</span>--}}
                                        {{--                                                            <input name="file" type="file">--}}
                                        {{--                                                        </div>--}}
                                        {{--                                                        <div class="file-path-wrapper">--}}
                                        {{--                                                            <input class="file-path validate" name="file" type="text">--}}
                                        {{--                                                        </div>--}}
                                        {{--                                                    </div>--}}



                                        {{--                                                    <br>--}}


                                        {{--                                                </form>--}}
                                        {{--                                            </div>--}}
                                        {{--                                        </div>--}}













                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-danger waves-effect"
                                                    data-dismiss="modal">Cancel</button>
                                            <button type="submit"
                                                    class="btn btn-info waves-effect"data-dismiss="modal">Place Order</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="body table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Date / Time</th>
                                <th>Status</th>
                                <th class="w-25">Actions</th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td><label class="badge badge-info" data-toggle="modal" data-target="#active_inactive">Enable</label></td>

                                <td>
                                    <button type="button" class="btn bg-blue btn-circle waves-effect waves-circle waves-float" data-toggle="modal" data-target="#exampleModal1">
                                        <i class="material-icons">edit</i>
                                    </button>
                                    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog"
                                         aria-labelledby="formModal" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="create_questions">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="formModal">Edit Paper Format</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>

                                                </div>





                                                <div class="academic_level">

                                                    <div class="modal-body">
                                                        <form>

                                                            <label for="email_address1">Status</label>
                                                            <div class="row">
                                                                <div class="col-sm-3 col-lg-2">
                                                                    <div class="form-check form-check-radio">
                                                                        <label>
                                                                            <input name="pdf" type="radio" value="1" />
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
                                                            <label for="email_address1">Edit Paper Format:</label>
                                                            <select class="form-control select2" name="format" data-placeholder="Select">

                                                                <option value="">Document 1</option>
                                                                <option value="">Document 2</option>
                                                                <option value="">Document 3</option>
                                                                <option value="">Document 4</option>

                                                            </select>



                                                            <br>
                                                            {{--                                            <button type="button"--}}
                                                            {{--                                                    class="btn btn-primary m-t-15 waves-effect">LOGIN</button>--}}
                                                        </form>



                                                    </div>
                                                </div>



                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-danger waves-effect"
                                                            data-dismiss="modal">Close</button>
                                                    <button type="submit"
                                                            class="btn btn-info waves-effect" data-dismiss="modal">save changes</button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <button type="button" class="btn bg-red btn-circle waves-effect waves-circle waves-float" data-toggle="modal" data-target="#exampleModalCenter1">
                                        <i class="material-icons"> delete  </i>
                                    </button>
                                    <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog"
                                         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalCenterTitle">Delete
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    Are you sure want to proceed this action?
                                                </div>
                                                <div class="modal-footer">

                                                    <button type="submit" class="btn btn-danger waves-effect"
                                                            data-dismiss="modal">Close</button>
                                                    <button type="submit"
                                                            class="btn btn-info waves-effect"data-dismiss="modal">Delete</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
