@extends('management/layouts/master')
@section('title')
    Commission
@endsection
@section('content')


    <div class="container">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title"> dw</h4>
                            </li>

                        </ul>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <button type="button" class="btn btn-primary float-right mt-3"> Back
                        </button>
                    </div>

                </div>
                <div class="card">
                    <div class="header">
                        <!-- #START# Modal Form Example -->
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#exampleModal">Add Level
                            </button>
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="formModal" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="create_questions">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="formModal">Add Level</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="academic_level">
                                            <div class="modal-body">
                                                <label for="email_address1">Level Name</label>
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" id="email_address1"
                                                               class="form-control" name="quiz_name"
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
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="body table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th class="col-lg-2">ID</th>
                                <th class="col-lg-4">Level Name</th>
                                <th class="col-lg-3">Status</th>
                                <th class="col-lg-3">Actions</th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Gold</td>
                                <td><label class="badge badge-info" data-toggle="modal" data-target="#active_inactive">Enable</label>
                                </td>



                                <td>


                                    <button type="button" class="btn bg-blue btn-circle waves-effect waves-circle waves-float" data-toggle="modal" data-target="#exampleModal1">
                                        <i class="material-icons">edit</i>
                                    </button>
                                    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="formModal" aria-hidden="true">
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
                                                        <form>
                                                            <label for="email_address1">Level Name:</label>
                                                            <div class="form-group">
                                                                <div class="form-line">
                                                                    <input type="text" id="email_address1" class="form-control" name="quiz_name" placeholder="Type Level ">
                                                                </div>
                                                            </div>
                                                            <br>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-danger waves-effect" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-info waves-effect">Save Changes</button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <button type="button" class="btn bg-red btn-circle waves-effect waves-circle waves-float" data-toggle="modal" data-target="#exampleModalCenter1">
                                        <i class="material-icons"> delete  </i>
                                    </button>



                                    <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalCenterTitle">Delete
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    Are you sure you want to proceed with this action?
                                                </div>
                                                <div class="modal-footer">

                                                    <button type="submit" class="btn btn-danger waves-effect" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-info waves-effect">Delete</button>
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



    <div class="container">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ul class="breadcrumb breadcrumb-style ">
                        <li class="breadcrumb-item">
                            <h4 class="page-title">Role Based</h4>
                        </li>

                        {{--                        <li class="breadcrumb-item active"></li>--}}
                    </ul>
                </div>
                <div class="card">
                    <div class="header">
                        <!-- #START# Modal Form Example -->
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <button type="button" class="btn btn-primary " data-toggle="modal"
                                    data-target="#Modal"> Add COmmission
                            </button>
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
                                                    <div>
                                                        <label for="">Role Level</label>
                                                        <select class="form-control select2" name="quiz_type" id="Quiz-type" data-placeholder="Select">
                                                            <option value="check_boxes">Role 1</option>
                                                            <option value="flie_upload">Role 2</option>
                                                            <option value="comment_box"> Role 3</option>
                                                        </select>
                                                        <br>
                                                    </div>
                                                    <div>
                                                        <label for="">Level</label>
                                                        <select class="form-control select2" name="quiz_type" id="Quiz-type" data-placeholder="Select">
                                                            <option value="check_boxes">Level 1</option>
                                                            <option value="flie_upload">Level 2</option>
                                                            <option value="comment_box"> Level 3</option>
                                                        </select>
                                                        <br>
                                                    </div>
                                                    <label for="email_address1">No of daily bids allowed:</label>
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="text" id="email_address1"
                                                                   class="form-control" name="question_text"
                                                                   placeholder="Daily Bids Allowed">
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <label for="email_address1">No of daily claims allowed</label>
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="text" id="email_address1"
                                                                   class="form-control" name="question_text"
                                                                   placeholder="Daily Claims Allowed">
                                                        </div>
                                                    </div>
                                                    <br>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="question_checkbox">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="formModal">Commissions per page (300 words)</h5>
                                            </div>
                                            <div class="modal-body">
                                                <form>
                                                    <div>
                                                        <label for="email_address1"><b>Order(s) due within</b></label>
                                                    </div>
                                                    <br>
                                                    <form>
                                                    {{--                                            <button type="button"--}}
                                                    {{--                                                    class="btn btn-primary m-t-15 waves-effect">LOGIN</button>--}}


                                            <label for="email_address1">8 Hours:</label>
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text"
                                                           class="form-control" name="question_text"
                                                           placeholder="Hours">
                                                </div>
                                            </div>
                                            <br>
                                            <label for="email_address1">24 Hours:</label>
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text"
                                                           class="form-control" name="question_text"
                                                           placeholder="Hours">
                                                </div>
                                            </div>
                                            <br>
                                            <label for="email_address1">48 Hours:</label>
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text"
                                                           class="form-control" name="question_text"
                                                           placeholder="Hours">
                                                </div>
                                            </div>
                                            <br>
                                            <label for="email_address1">4 Days</label>
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text"
                                                           class="form-control" name="question_text"
                                                           placeholder="Days">
                                                </div>
                                            </div>
                                            <br>
                                                        <label for="email_address1">6 Days</label>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text"
                                                                       class="form-control" name="question_text"
                                                                       placeholder="Days">
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
                                                                <input type="text"
                                                                       class="form-control" name="question_text"
                                                                       placeholder="Days">
                                                            </div>
                                                        </div>
                                                        <br>
                                        </div>
                                        </form>
















                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-danger waves-effect"
                                                    data-dismiss="modal">Cancel</button>
                                            <button type="submit"
                                                    class="btn btn-info waves-effect">Create</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>




                    <div class="body table-responsive">
                        <div class="row ">
                            <div class="col-lg-9 col-9">
                                <ul class="nav nav-tabs tab-nav-right" role="tablist">
                                    <li>
                                        <a href="#tab1" data-toggle="tab" class="show">Potential Recruits</a>
                                    </li>
                                    <li>
                                        <a href="#tab2" data-toggle="tab" class="">All Workers</a>
                                    </li>
                                    <li>
                                        <a href="#tab3" data-toggle="tab" class="active">New Workers Accounts</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <table class="tab1 tab2 tab3">
                            <thead>
                            <tr>
                                <th>Package/level</th>
                                <th>No of bids</th>
                                <th>No of claims</th>
                                <th>8 hours order</th>
                                <th>24 hours order</th>
                                <th>48 hours order</th>
                                <th>4 days order</th>
                                <th>6 days order</th>
                                <th>7 days order</th>
                                <th>Action</th>

                                {{--                                <th>Actions</th>--}}
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>xxx</td>
                                <td>xxx</td>
                                <td>xxx</td>
                                <td>xxx</td>
                                <td>xxx</td>
                                <td>xxx</td>
                                <td>xxx</td>
                                <td>xxx</td>
                                <td>xxx</td>

                                <td>  <button type="button" class="btn btn-primary " data-toggle="modal"
                                              data-target="#Modal2"> Edit
                                    </button>
                                    <div class="modal fade" id="Modal2" tabindex="-1" role="dialog"
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
                                                            <div>
                                                                <label for="">Role Level</label>
                                                                <select class="form-control select2" name="quiz_type" id="Quiz-type" data-placeholder="Select">
                                                                    <option value="check_boxes">Role 1</option>
                                                                    <option value="flie_upload">Role 2</option>
                                                                    <option value="comment_box"> Role 3</option>
                                                                </select>
                                                                <br>
                                                            </div>
                                                            <div>
                                                                <label for="">Level</label>
                                                                <select class="form-control select2" name="quiz_type" id="Quiz-type" data-placeholder="Select">
                                                                    <option value="check_boxes">Level 1</option>
                                                                    <option value="flie_upload">Level 2</option>
                                                                    <option value="comment_box"> Level 3</option>
                                                                </select>
                                                                <br>
                                                            </div>
                                                            <label for="email_address1">No of daily bids allowed:</label>
                                                            <div class="form-group">
                                                                <div class="form-line">
                                                                    <input type="text" id="email_address1"
                                                                           class="form-control" name="question_text"
                                                                           placeholder="Daily Bids Allowed">
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <label for="email_address1">No of daily claims allowed</label>
                                                            <div class="form-group">
                                                                <div class="form-line">
                                                                    <input type="text" id="email_address1"
                                                                           class="form-control" name="question_text"
                                                                           placeholder="Daily Claims Allowed">
                                                                </div>
                                                            </div>
                                                            <br>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="formModal">Commissions per page (300 words)</h5>
                                                </div>
                                                <div class="modal-body">
                                                    <form>
                                                        <div>
                                                            <label for="email_address1"><b>Order(s) due within</b></label>
                                                        </div>
                                                        <br>
                                                        <form>
                                                            {{--                                            <button type="button"--}}
                                                            {{--                                                    class="btn btn-primary m-t-15 waves-effect">LOGIN</button>--}}


                                                            <label for="email_address1">8 Hours:</label>
                                                            <div class="form-group">
                                                                <div class="form-line">
                                                                    <input type="text"
                                                                           class="form-control" name="question_text"
                                                                           placeholder="Hours">
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <label for="email_address1">24 Hours:</label>
                                                            <div class="form-group">
                                                                <div class="form-line">
                                                                    <input type="text"
                                                                           class="form-control" name="question_text"
                                                                           placeholder="Hours">
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <label for="email_address1">48 Hours:</label>
                                                            <div class="form-group">
                                                                <div class="form-line">
                                                                    <input type="text"
                                                                           class="form-control" name="question_text"
                                                                           placeholder="Hours">
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <label for="email_address1">4 Days</label>
                                                            <div class="form-group">
                                                                <div class="form-line">
                                                                    <input type="text"
                                                                           class="form-control" name="question_text"
                                                                           placeholder="Days">
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <label for="email_address1">6 Days</label>
                                                            <div class="form-group">
                                                                <div class="form-line">
                                                                    <input type="text"
                                                                           class="form-control" name="question_text"
                                                                           placeholder="Days">
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
                                                                    <input type="text"
                                                                           class="form-control" name="question_text"
                                                                           placeholder="Days">
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
                                </td>
                                {{--                                <td><button type="button" class="btn bg-red btn-circle waves-effect waves-circle waves-float">--}}
                                {{--                                        <i class="material-icons">delete</i>--}}
                                {{--                                    </button> <button type="button" class="btn bg-blue btn-circle waves-effect waves-circle waves-float">--}}
                                {{--                                        <i class="material-icons">edit</i>--}}
                                {{--                                    </button> </td>--}}
                            </tr>



                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>






@endsection
