@extends('worker/layouts/master')
@section('title')
     Order Details
@endsection
@section('content')

    <div class="container">
        <div class="row">


    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>

                <ul class="header-dropdown m-r--5">
                    <li class="dropdown">
                        <a href="#" onclick="return false;" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="material-icons">more_vert</i>
                        </a>
                        <ul class="dropdown-menu pull-right">
                            <li>
                                <a href="#" onclick="return false;">Action</a>
                            </li>
                            <li>
                                <a href="#" onclick="return false;">Another action</a>
                            </li>
                            <li>
                                <a href="#" onclick="return false;">Something else here</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="body">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs tab-nav-right" role="tablist">
                    <li role="presentation">
                        <a href="#home" data-toggle="tab" class="show active">Order Detail</a>
                    </li>
                    <li role="presentation">
                        <a href="#Messages" data-toggle="tab" class="">Messages</a>
                    </li>
                    <li role="presentation">
                        <a href="#Upload" data-toggle="tab" class="">Upload File</a>
                    </li>
                    <li role="presentation">
                        <a href="#setting" data-toggle="tab" class="">Client History and Bids</a>
                    </li>
                    <li role="presentation">
                        <a href="#clients" data-toggle="tab" class="">Client Review</a>
                    </li>


                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active show" id="home">
                        <div class="tab-content">

                            <!--Orders tab Start-->
                            <div id="tab1" class="pt-3 tab-pane fade in active show">
                                <div class="row blockquote bg-white">

                                    <div class="col-md-2 col-12 ">
                                        <button class="btn btn-primary text-left mb-3 h-auto width100 btnOrdersDetail" style="display: block;
                                    width: 100%" data-type="return-to-available" data-toggle="modal" data-target="#exampleModal">Hide /Unhide Order
                                        </button>
                                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="formModal" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title ml-3" style="color: black" id="exampleModalCenterTitle">Hide / Unhide Order
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <label for="">
                                                            Are you sure you want to Hide this order?
                                                        </label>

                                                    </div>
                                                    <div class="modal-footer">

                                                        <button type="submit" class="btn btn-danger waves-effect" data-dismiss="modal">yes, i conform</button>
                                                        <button type="submit" class="btn btn-info waves-effect">No</button>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <button class="btn btn-primary text-left mb-3 h-auto width100 btnOrdersDetail " style="display: block;
                                    width: 100%" data-type="return-to-available" data-toggle="modal" data-target="#Modal">Claim
                                        </button>

                                        <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="formModal" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="create_questions">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" style="color: black" id="formModal">Claim</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                        </div>

                                                        <div class="modal-body">

                                                            <form>

                                                                <div>

                                                                    <label for="">All Deadlines are in Eastern Standard Time (EST) US</label>
                                                                    <br>
                                                                </div>
                                                                <div class="">

                                                                       <label for="" class="py-3">
                                                                           Deadline extension request
                                                                       </label>



                                                                </div>


                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <div class="form-line">

                                                                            <input id="party" type="datetime-local" name="partydate" value="2017-06-01T08:30">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="comment_box" style="display: none;">
                                                                    <div class="modal-body">



                                                                        <label for="email_address1">Reason</label>
                                                                        <textarea name="comment_text" class="form-control" id="comment_text" cols="30" rows="10"></textarea>




                                                                        <br>






                                                                    </div>
                                                                </div></form>

                                                        </div>
                                                    </div>
















                                                    <div class="modal-footer">

                                                        <button type="submit" class="btn btn-danger waves-effect" data-dismiss="modal">Yes, I conform</button>
                                                        <button type="submit" class="btn btn-info waves-effect">NO</button>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <button class="btn btn-primary text-left mb-3 h-auto width100 btnOrdersDetail" style="display: block;
                                    width: 100%" data-type="return-to-available" data-toggle="modal" data-target="#result">Bids
                                        </button>
                                        <div class="modal fade" id="result" tabindex="-1" role="dialog" aria-labelledby="formModal" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="create_questions">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" style="color: black" id="formModal">Bids</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">

                                                            <form>

                                                                <div>
                                                                    <label for="">All Deadlines are in Eastern Standard Time (EST) US</label>

                                                                    <br>

                                                                </div>
                                                                <div class="">

                                                                    <label for="" class="py-3">
                                                                        Deadline extension request
                                                                    </label>



                                                                </div>

                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <div class="form-line">

                                                                            <input id="party" type="datetime-local" name="partydate" value="2017-06-01T08:30">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="comment_box" style="display: none;">
                                                                    <div class="modal-body">



                                                                        <label for="email_address1">Reason</label>
                                                                        <textarea name="comment_text" class="form-control" id="comment_text" cols="30" rows="10"></textarea>




                                                                        <br>






                                                                    </div>
                                                                </div></form>

                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">

                                                        <button type="submit" class="btn btn-danger waves-effect" data-dismiss="modal">Yes, I conform</button>
                                                        <button type="submit" class="btn btn-info waves-effect">No</button>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <a href="review-deadline.html" class="btn btn-primary h-auto text-left mb-3 width100" data-toggle="modal" data-target="#exampleModal_5" data-whatever="@mdo" style="display: block;
                                    width: 100%" data-type="review-deadline">Deadline Extension Request
                                        </a>

                                        <div class="modal fade" id="exampleModal_5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" style="color: black" id="formModal">Deadline Extension Request</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form>
                                                            <div class="form-group">
                                                                <label for="recipient-name" >Select Deadline</label>
                                                                <select class="form-control" id="exampleFormControlSelect1">
                                                                    <option> Select</option>
                                                                    <option> Deadline 1</option>
                                                                    <option> Deadline 2</option>

                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="message-text" >Original Date and Time</label>
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <div class="form-line">

                                                                            <input id="party" type="datetime-local" name="partydate" value="2017-06-01T08:30">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="message-text" >New Date and Time</label>
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <div class="form-line">

                                                                            <input id="party" type="datetime-local" name="partydate" value="2017-06-01T08:30">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">

                                                                <label for="email_address1">Reason</label>
                                                                <textarea name="comment_text" class="form-control" id="comment_text" cols="30" rows="10"></textarea>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Submit</button>
                                                        <button type="button" class="btn btn-primary">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>




                                        <button class="btn btn-primary text-left mb-3 h-auto width100 btnOrdersDetail" style="display: block;
                                    width: 100%" data-type="return-to-available" data-toggle="modal" data-target="#result1">Request Revision
                                        </button>
                                        <div class="modal fade" id="result1" tabindex="-1" role="dialog" aria-labelledby="formModal" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="create_questions">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" style="color: black" id="formModal">Request Revision</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">

                                                            <form>


                                                                <div>
                                                                    <label for="">Select Role</label>
                                                                    <select class="form-control select2" name="quiz_type" id="Quiz-type" data-placeholder="Select">
                                                                        <option value="0">Select</option>
                                                                        <option value="">Role 1</option>
                                                                        <option value="">Role 2</option>
                                                                    </select>
                                                                    <br>
                                                                </div>
                                                                <div>
                                                                    <label for="">Select Worker</label>
                                                                    <select class="form-control select2" name="quiz_type" id="Quiz-type" data-placeholder="Select">
                                                                        <option value="0">Select </option>
                                                                        <option value="">Worker 1</option>
                                                                        <option value="">Worker 2</option>
                                                                    </select>
                                                                    <br>
                                                                </div>
                                                                <div class="form-group">

                                                                    <label for="email_address1">Reason</label>
                                                                    <textarea name="comment_text" class="form-control" id="comment_text" cols="30" rows="10"></textarea>
                                                                </div>
                                                            </form>


                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">

                                                        <button type="submit" class="btn btn-danger waves-effect" data-dismiss="modal">Submit</button>
                                                        <button type="submit" class="btn btn-info waves-effect">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <button class="btn btn-primary text-left mb-3 h-auto width100 btnOrdersDetail" style="display: block;
                                    width: 100%" data-type="return-to-available" data-toggle="modal" data-target="#result2">Request More Pages
                                        </button>
                                        <div class="modal fade" id="result2" tabindex="-1" role="dialog" aria-labelledby="formModal" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="create_questions">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" style="color: black" id="formModal">Request More Pages</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">

                                                            <form>

                                                                <div>
                                                                    <label for="">No of Pages</label>
                                                                    <input type="number" class="form-control">
                                                                    <br>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="message-text" >Select Deadline</label>
                                                                    <div class="col-sm-12">
                                                                        <div class="form-group">
                                                                            <div class="form-line">

                                                                                <input id="party" type="datetime-local" name="partydate" value="2017-06-01T08:30">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group">

                                                                    <label for="email_address1">Reason</label>
                                                                    <textarea name="comment_text" class="form-control" id="comment_text" cols="30" rows="10"></textarea>
                                                                </div>

                                                            </form>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">

                                                        <button type="submit" class="btn btn-danger waves-effect" data-dismiss="modal">Save</button>
                                                        <button type="submit" class="btn btn-info waves-effect">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <button class="btn btn-primary text-left mb-3 h-auto width100 btnOrdersDetail" style="display: block;
                                    width: 100%" data-type="return-to-available" data-toggle="modal" data-target="#Download">Download Order Summary
                                        </button>
                                        <div class="modal fade" id="Download" tabindex="-1" role="dialog" aria-labelledby="formModal" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="create_questions">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" style="color: black" id="formModal">Download Order Summary</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                        <button class="btn btn-primary text-left mb-3 h-auto width100 btnOrdersDetail" style="display: block;
                                    width: 100%" data-type="return-to-available" data-toggle="modal" data-target="#Flag">Flag
                                        </button>
                                        <div class="modal fade" id="Flag" tabindex="-1" role="dialog" aria-labelledby="formModal" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="create_questions">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" style="color: black" id="formModal">Flag</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                        </div>
                                                        <div class="container">
                                                            <div class="form-group row">

                                                                <div class="col-sm-12">
                                                                    <div class="form-group">

                                                                        <label for="email_address1">Are you sure you want to Flag this order?</label>
                                                                        <textarea name="comment_text" class="form-control" id="comment_text" cols="30" rows="10"></textarea>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="modal-footer pb-0"><button type="button" class="btn btn-primary">Yes</button> <button type="button" data-dismiss="modal" class="btn btn-primary">No
                                                                </button></div>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>

                                        </div>

                                        <button class="btn btn-primary text-left mb-3 h-auto width100 btnOrdersDetail" style="display: block;
                                    width: 100%" data-type="return-to-available" data-toggle="modal" data-target="#Reasons">Return To Available
                                        </button>
                                        <div class="modal fade" id="Reasons" tabindex="-1" role="dialog" aria-labelledby="formModal" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="create_questions">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" style="color: black" id="formModal">Return To Available</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">×</span>
                                                            </button>

                                                        </div>
                                                        <div class="card-body text-dark">

                                                            <div class="form-group">

                                                                <label for="email_address1">Reason</label>
                                                                <textarea name="comment_text" class="form-control" id="comment_text" cols="30" rows="10"></textarea>
                                                            </div>


                                                            <div class="modal-footer">

                                                                <button type="submit" class="btn btn-danger waves-effect" data-dismiss="modal">Submit</button>
                                                                <button type="submit" class="btn btn-info waves-effect">Cancel</button>
                                                            </div>


                                                        </div>

                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="row">
                                            <div class="col-md-4 mb-3">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered">
                                                        <tbody>
                                                        <tr>
                                                            <td>Team:</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Role 1:</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Role 2:</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Role 3:</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered">
                                                        <tbody>
                                                        <tr>
                                                            <td>Role 2 Deadline:</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Time Left</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered">
                                                        <tbody>
                                                        <tr>
                                                            <td>Profits: $XXX</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Role 1: $XXX</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Role 2: $XXX</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Role 3: $XXX</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered">
                                                        <tbody>
                                                        <tr>
                                                            <td>Order ID</td>
                                                            <td> Number of Pages</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Topic</td>
                                                            <td>Spacing</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Sources</td>
                                                            <td>Customer’s Deadline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Paper Format</td>
                                                            <td>Academic Level</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Paper Type</td>
                                                            <td>Subject</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered">
                                                        <tbody>
                                                        <tr>
                                                            <td>PowerPoint: Yes/No</td>
                                                        </tr>
                                                        <tr>
                                                            <td>1-Page Summary: Yes/No</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Statistical Analysis: Yes/No</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Abstract: Yes/No</td>
                                                        </tr>
                                                        <tr>
                                                            <td>A Copy of Sources: Yes/No</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Outline in Bullets: Yes/No</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>


                                            <div class="col-md-6 mb-3">
                                                <div class="blockquote">
                                                    <label class="active">Instruction Details</label>
                                                    <textarea name="" id="" cols="30" rows="10" class="form-control">xxxxxxx</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="ordersDetailModal" class="modal fade" role="dialog">
                                    <div class="modal-dialog">
                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Modal Header</h4>
                                                <button type="button" class="close" data-dismiss="modal">×
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="orderBody return-to-available-body">
                                                    <h5>
                                                        Are you sure you want to proceed with this action?
                                                    </h5>
                                                    <div class="modal-footer pb-0">
                                                        <button type="button" class="btn btn-primary">Yes</button>
                                                        <button type="button" class="btn btn-primary" data-dismiss="modal">No
                                                        </button>
                                                    </div>
                                                </div>

                                                <div class="orderBody bonus-penalty-body">

                                                    <form>
                                                        <div class="form-group row">
                                                            <label class="col-sm-4">Select Worker</label>
                                                            <div class="col-sm-8">
                                                                <div class="dropdown">
                                                                    <select name="" id="" class="form-control">
                                                                        <option value="0">Select</option>
                                                                        <option value="">Worker 1</option>
                                                                        <option value="">Worker 2</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-4">Select Action</label>
                                                            <div class="col-sm-8">
                                                                <div class="dropdown">
                                                                    <select name="" id="" class="form-control">
                                                                        <option value="0">Select</option>
                                                                        <option value="0">Action 1</option>
                                                                        <option value="0">Action 2</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label class="col-sm-4">Enter Amount</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control" id="" placeholder="Enter Amount Here">
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label class="col-sm-4">Reason</label>
                                                            <div class="col-sm-8">
                                                                <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
                                                            </div>
                                                        </div>

                                                    </form>

                                                    <div class="modal-footer pb-0">
                                                        <button type="button" class="btn btn-primary">Submit</button>
                                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel
                                                        </button>
                                                    </div>
                                                </div>

                                                <div class="orderBody request-revision-body">
                                                    <form>
                                                        <div class="form-group row">
                                                            <label class="col-sm-4">Select Worker</label>
                                                            <div class="col-sm-8">
                                                                <div class="dropdown">
                                                                    <select name="" id="" class="form-control">
                                                                        <option value="0">Select</option>
                                                                        <option value="">Worker 1</option>
                                                                        <option value="">Worker 2</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label class="col-sm-4">Reason</label>
                                                            <div class="col-sm-8">
                                                                <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
                                                            </div>
                                                        </div>

                                                    </form>

                                                    <div class="modal-footer pb-0">
                                                        <button type="button" class="btn btn-primary">Submit</button>
                                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel
                                                        </button>
                                                    </div>

                                                </div>

                                                <div class="orderBody force-assign-body">
                                                    <form>
                                                        <div class="form-group row">
                                                            <label class="col-sm-4">Select Team/Group</label>
                                                            <div class="col-sm-8">
                                                                <div class="dropdown">
                                                                    <select name="" id="" class="form-control">
                                                                        <option value="0">Select</option>
                                                                        <option value="">Team/Group 1</option>
                                                                        <option value="">Team/Group 2</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-4">Select Role</label>
                                                            <div class="col-sm-8">
                                                                <div class="dropdown">
                                                                    <select name="" id="" class="form-control">
                                                                        <option value="0">Select</option>
                                                                        <option value="">Role 1</option>
                                                                        <option value="">Role 2</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-4">Select Worker</label>
                                                            <div class="col-sm-8">
                                                                <div class="dropdown">
                                                                    <select name="" id="" class="form-control">
                                                                        <option value="0">Select</option>
                                                                        <option value="">Worker 1</option>
                                                                        <option value="">Worker 2</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label class="col-sm-4">Reason</label>
                                                            <div class="col-sm-8">
                                                                <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
                                                            </div>
                                                        </div>

                                                    </form>

                                                    <div class="modal-footer pb-0">
                                                        <button type="button" class="btn btn-primary">Confirm</button>
                                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel
                                                        </button>
                                                    </div>
                                                </div>

                                                <div class="orderBody order-status-body">
                                                    <div class="row">
                                                        <div class="col-md-5"><label>Change Order Status</label></div>
                                                        <div class="col-md-7">

                                                            <select name="" id="" class="form-control">
                                                                <option value="">Select</option>
                                                                <option value="">New Order</option>
                                                                <option value="">Available Order</option>
                                                                <option value="">Open Bid</option>
                                                                <option value="">Hidden Order</option>
                                                                <option value="">Pending Order</option>
                                                                <option value="">Pending Late Order</option>
                                                                <option value="">Pending Late Order</option>
                                                                <option value="">Orders Completed</option>
                                                                <option value="">Orders Completed</option>
                                                                <option value="">Pending Rewrite</option>
                                                                <option value="">Rewrite Order Completed</option>
                                                                <option value="">Rewrite Order Completed</option>
                                                                <option value="">Cancelled</option>
                                                                <option value="">Dispute</option>
                                                                <option value="">Refunded</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="modal-footer pb-0">
                                                        <button type="button" class="btn btn-primary">Save</button>
                                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel
                                                        </button>
                                                    </div>
                                                </div>

                                                <div class="orderBody flag-body">
                                                    <h5>
                                                        Are you sure you want to Flag this order?
                                                    </h5>

                                                    <div class="modal-footer pb-0">
                                                        <button type="button" class="btn btn-primary">Yes</button>
                                                        <button type="button" class="btn btn-primary" data-dismiss="modal">No
                                                        </button>
                                                    </div>
                                                </div>

                                                <div class="orderBody order-hidden-body">
                                                    order-hidden Popup Body

                                                    <div class="modal-footer pb-0">
                                                        <button type="button" class="btn btn-primary">Yes</button>
                                                        <button type="button" class="btn btn-primary" data-dismiss="modal">No
                                                        </button>
                                                    </div>
                                                </div>

                                                <div class="orderBody order-return-body">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered">
                                                            <thead>
                                                            <tr>
                                                                <th>Worker’s Name</th>
                                                                <th>Role</th>
                                                                <th>Reason</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td>XXXXX</td>
                                                                <td>XXXXX</td>
                                                                <td>XXXXX</td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="modal-footer pb-0">
                                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Orders tab Ends-->

                            <!--Messages Start-->
                            <div id="tab2" class="pt-3 tab-pane">
                                <div class="container">
                                    <div class="col-lg-12 grid-margin stretch-card m-0"><div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-3 border border-dark p-3">
                                                        <label>View Messages From</label>
                                                    </div>
                                                    <div class="col-md-6 border border-dark p-3">
                                                        <label>Message Details</label>
                                                    </div>
                                                    <div class="col-md-3 border border-dark p-3 ">
                                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg3">Compose Message</button>
                                                        <div class="modal fade bd-example-modal-lg3" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-lg">
                                                                <div class="modal-content">
                                                                    <div class="card">
                                                                        <div class="card-body">

                                                                            <h5 class="mb-5 text-primary ">Upload File as Worker</h5>

                                                                            @foreach($data['workers'] as $team)
                                                                            <div class="row">
                                                                                <div class="col-md-12">
                                                                                    <label for="">Select Group</label>

                                                                                    <select class="form-control select2" name="quiz_type" id="Quiz-type" data-placeholder="Select">
                                                                                        <option value="option1">{{$team['workers']['erp_team_name']}}</option>
                                                                                    </select>

                                                                                </div>

                                                                                @endforeach


                                                                                <div class="col-md-12">
                                                                                    <label for="">Select Role</label>

                                                                                    <select class="form-control select2" name="quiz_type" id="Quiz-type" data-placeholder="Select">
                                                                                        <option value="option1">Option1</option>
                                                                                        <option value="option2">option2</option>
                                                                                        <option value="option3"> option3</option>
                                                                                    </select>

                                                                                </div>
                                                                            </div>



                                                                            <div class="row">
                                                                                <div class="col-md-12 blockquote mt-5">
                                                                                    <form>
                                                                                        <div class="form-group row">
                                                                                            <div class="col-sm-12">
                                                                                                <input type="text" id="email_address1" class="form-control" name="question_text" placeholder="TO">

                                                                                            </div>
                                                                                            <br>
                                                                                            <br>
                                                                                            <div class="col-sm-12 py-3">
                                                                                                <input type="text" id="email_address1" class="form-control" name="question_text" placeholder="From">

                                                                                            </div>
                                                                                            <br>

                                                                                        </div>

                                                                                        <div class="form-group row">

                                                                                            <div class="col-sm-12">
                                                                                                <input type="text" id="email_address1" class="form-control" name="question_text" placeholder="CC">

                                                                                            </div>

                                                                                        </div>


                                                                                        <div class="form-group row py-3">

                                                                                            <div class="col-sm-12">
                                                                                                <input type="text" id="email_address1" class="form-control" name="question_text" placeholder="BCC">

                                                                                            </div>
                                                                                        </div>
                                                                                        <br>
                                                                                        <div class="row">
                                                                                            <div class="col-md-12">
                                                                                                <label for="">Select Group</label>

                                                                                                <select class="form-control select2" name="quiz_type" id="Quiz-type" data-placeholder="Select">
                                                                                                    <option value="option1">Option1</option>
                                                                                                    <option value="option2">option2</option>
                                                                                                    <option value="option3"> option3</option>
                                                                                                </select>

                                                                                            </div>

                                                                                        </div>
                                                                                        <br>
                                                                                        <div class="form-group row py-3">

                                                                                            <div class="col-sm-12">
                                                                                                <input type="text" id="email_address1" class="form-control" name="question_text" placeholder="Subject">

                                                                                            </div>
                                                                                        </div>
                                                                                        <br>
                                                                                        <div class="form-group row">

                                                                                            <div class="col-sm-12">


                                                                                                <label for="email_address1">Post Work Cited / Bibliography page *:</label>
                                                                                                <textarea name="comment_text" class="form-control" id="comment_text" cols="30" rows="10"></textarea>
                                                                                                <button type="button" style="background-color: #6837d8" class="form-control btn btn-info">Spell-Check</button>
                                                                                                <br>
                                                                                            </div>
                                                                                        </div>











                                                                                        <div class="row">
                                                                                            <div class="col-md-6 ">
                                                                                                <div class="file-field input-field">


                                                                                                </div>

                                                                                                <label class="btn btn-primary h-auto fileUploadInput mt-2" for="file">Sent</label>
                                                                                            </div>

                                                                                        </div>

                                                                                    </form>
                                                                                </div>
                                                                            </div>


                                                                        </div>

                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3 border border-dark p-3">
                                                        <label class="mt-2"><a href="#">All Messages</a></label>
                                                        <ul><li class="list-unstyled"><label><a href="#">Ascending</a></label></li>
                                                            <li class="list-unstyled">
                                                                <label><a href="#">Descending</a></label>
                                                            </li>
                                                        </ul> <hr>
                                                        <label class="mt-2"><a href="#">Admin</a></label> <hr>
                                                        <label class="mt-2"><a href="#">Customer</a>
                                                        </label> <hr> <label class="mt-2"><a href="#">Team</a></label>
                                                        <ul>
                                                            <li class="list-unstyled"><label><a href="#">Worker
                                                                        1</a></label></li> <li class="list-unstyled"><label><a href="#">Worker
                                                                        2</a></label></li></ul>
                                                    </div>
                                                    <div class="col-md-9 border border-dark p-3"><div class="message-body"><div class="blockquote mr-3"><label class="m-0"><strong>From:</strong> Role and
                                                                    Sub-Role (If Worker) + Name</label> <label class="m-0"><strong>To:</strong> Role and
                                                                    Sub-Role (If Worker) + Name</label> <label class="m-0"><strong>Date:</strong>
                                                                    DD-MM-YYYY</label> <label class="m-0"><strong>Subject:</strong>
                                                                    XXXX</label> <hr> <label class="m-0"><strong>Details</strong></label> <hr> <label class="m-0">XXXX</label></div> <div class="blockquote mr-3"><label class="m-0"><strong>From:</strong> Role and
                                                                    Sub-Role (If Worker) + Name</label> <label class="m-0"><strong>To:</strong> Role and
                                                                    Sub-Role (If Worker) + Name</label> <label class="m-0"><strong>Date:</strong>
                                                                    DD-MM-YYYY</label> <label class="m-0"><strong>Subject:</strong>
                                                                    XXXX</label> <hr> <label class="m-0"><strong>Details</strong></label> <hr> <label class="m-0">XXXX</label></div> <div class="blockquote mr-3"><label class="m-0"><strong>From:</strong> Role and
                                                                    Sub-Role (If Worker) + Name</label> <label class="m-0"><strong>To:</strong> Role and
                                                                    Sub-Role (If Worker) + Name</label> <label class="m-0"><strong>Date:</strong>
                                                                    DD-MM-YYYY</label> <label class="m-0"><strong>Subject:</strong>
                                                                    XXXX</label> <hr> <label class="m-0"><strong>Details</strong></label> <hr> <label class="m-0">XXXX</label></div> <div class="blockquote mr-3"><label class="m-0"><strong>From:</strong> Role and
                                                                    Sub-Role (If Worker) + Name</label> <label class="m-0"><strong>To:</strong> Role and
                                                                    Sub-Role (If Worker) + Name</label> <label class="m-0"><strong>Date:</strong>
                                                                    DD-MM-YYYY</label> <label class="m-0"><strong>Subject:</strong>
                                                                    XXXX</label> <hr> <label class="m-0"><strong>Details</strong></label> <hr> <label class="m-0">XXXX</label></div> <div class="blockquote mr-3"><label class="m-0"><strong>From:</strong> Role and
                                                                    Sub-Role (If Worker) + Name</label> <label class="m-0"><strong>To:</strong> Role and
                                                                    Sub-Role (If Worker) + Name</label> <label class="m-0"><strong>Date:</strong>
                                                                    DD-MM-YYYY</label>
                                                                <label class="m-0">
                                                                    <strong>Subject:</strong>
                                                                    XXXX</label>
                                                                <label class="m-0">
                                                                    <strong>Subject:</strong>
                                                                    XXXX</label>
                                                                <label class="m-0">
                                                                    <strong>Subject:</strong>
                                                                    XXXX</label>
                                                                <hr>
                                                                <label class="m-0"><strong>Details</strong></label>
                                                                <hr>
                                                                <label class="m-0">XXXX</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="row justify-content-center"><div class="col-md-4 p-3 text-center">
                                                    </div>

                                                    <div class="row ml-auto">
                                                        <div class="col-lg-12 col-12">
                                                            <div class="col-sm-12 col-md-7">
                                                                <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                                                                    <ul class="pagination"><li class="paginate_button page-item previous" id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link">1</a>
                                                                        </li>
                                                                        <li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" class="page-link">2</a>
                                                                        </li><li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0" class="page-link">3</a>
                                                                        </li>
                                                                        <li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="4" tabindex="0" class="page-link">4</a>
                                                                        </li>
                                                                        <li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="5" tabindex="0" class="page-link">5</a>
                                                                        </li>
                                                                        <li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="6" tabindex="0" class="page-link">6</a></li>
                                                                        <li class="paginate_button page-item next" id="DataTables_Table_0_next">
                                                                            <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="7" tabindex="0" class="page-link">Next</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                </div>

                            </div>
                            <!--Messages Ends-->

                            <!--File Upload Starts-->

                            <div id="tab3" class="pt-3 tab-pane">
                                <div class="row">
                                    <button type="button" class="btn btn-primary ml-4" data-toggle="modal" data-target=".bd-example-modal-lg10">Upload File As Worker</button>

                                    <div class="modal fade bd-example-modal-lg10" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="col-lg-12 grid-margin stretch-card">
                                                    <div class="card">
                                                        <div class="card-body">

                                                            <h5 class="mb-4 text-primary">Upload File as Worker</h5>


                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <label for="">Select Group</label>

                                                                    <select class="form-control select2" name="quiz_type" id="Quiz-type" data-placeholder="Select">
                                                                        <option value="option1">Option1</option>
                                                                        <option value="option2">option2</option>
                                                                        <option value="option3"> option3</option>
                                                                    </select>

                                                                </div>
                                                                <div class="col-md-12">
                                                                    <label for="">Select Role</label>

                                                                    <select class="form-control select2" name="quiz_type" id="Quiz-type" data-placeholder="Select">
                                                                        <option value="option1">Option1</option>
                                                                        <option value="option2">option2</option>
                                                                        <option value="option3"> option3</option>
                                                                    </select>

                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <button type="button" class="btn btn-primary mt-3">Edit</button>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-12 blockquote mt-5">
                                                                    <form>
                                                                        <div class="form-group row">
                                                                            <div class="col-sm-12">
                                                                                <input type="text" id="email_address1" class="form-control" name="question_text" placeholder="Main Title">
                                                                                <small style="color: #414244">EXAMPLE: "Causes and Effects of the Great
                                                                                    Depression of 1929"
                                                                                </small>
                                                                            </div>
                                                                            <br>
                                                                        </div>
                                                                        <br>
                                                                        <div class="form-group row">

                                                                            <div class="col-sm-12">
                                                                                <input type="text" id="email_address1" class="form-control" name="question_text" placeholder="Secondary Title">
                                                                                <small style="color: #414244">EXAMPLE: "Great Depression of 1929: Causes
                                                                                    and Effects"
                                                                                </small>
                                                                            </div>

                                                                        </div>

                                                                        <br>
                                                                        <div class="form-group row">

                                                                            <div class="col-sm-12">
                                                                                <input type="text" id="email_address1" class="form-control" name="question_text" placeholder="Three Keywords">
                                                                                <small style="color: #414244">EXAMPLE (must be comma-separated): Great Depression, 1929, Black Tuesday
                                                                                </small>
                                                                            </div>
                                                                        </div>
                                                                        <br>

                                                                        <div class="form-group row">

                                                                            <div class="col-sm-12">


                                                                                <label for="email_address1">Post Work Cited / Bibliography page *:</label>
                                                                                <textarea name="comment_text" class="form-control" id="comment_text" cols="30" rows="10"></textarea>
                                                                                <br>
                                                                            </div>
                                                                        </div>


                                                                        <br>
                                                                        <label for="">Category 1</label>

                                                                        <select class="form-control select2" name="quiz_type" id="Quiz-type" data-placeholder="Select">
                                                                            <option value="option1">Option1</option>
                                                                            <option value="option2">option2</option>
                                                                            <option value="option3"> option3</option>
                                                                        </select>


                                                                        <br>
                                                                        <label for="">Category 1</label>

                                                                        <select class="form-control select2" name="quiz_type" id="Quiz-type" data-placeholder="Select">
                                                                            <option value="option1">Option1</option>
                                                                            <option value="option2">option2</option>
                                                                            <option value="option3"> option3</option>
                                                                        </select>
                                                                        <br>

                                                                        <div class="row ">
                                                                            <div class="col-md-2">
                                                                                <button type="button" class="btn btn-primary mb-2">
                                                                                    Send
                                                                                </button>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <label>Upload Additional files for Workers and
                                                                                    Customer</label>
                                                                                <label>Here you need to upload all the Resource
                                                                                    files used to complete the order:</label>
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <select name="" id="" class="form-control">
                                                                                    <option value="">Select</option>
                                                                                    <option value="">worker</option>
                                                                                    <option value="">Customer</option>
                                                                                    <option value="">Both</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-6 ">
                                                                                <div class="file-field input-field">
                                                                                    <div class="btn">
                                                                                        <span>File</span>
                                                                                        <input type="file">
                                                                                    </div>
                                                                                    <div class="file-path-wrapper">
                                                                                        <input class="file-path validate" type="text">
                                                                                    </div>
                                                                                </div>

                                                                                <label class="btn btn-primary h-auto fileUploadInput mt-2" for="file">Sent</label>
                                                                            </div>
                                                                        </div>

                                                                    </form>
                                                                </div>
                                                            </div>


                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                    <div class="container">
                                        <div class="body table-responsive py-5">
                                            <table class="table">
                                                <thead>
                                                <tr>
                                                    <th class="ml-2 ">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" value="20">
                                                            <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                                                        </label>

                                                    </th>
                                                    <th>Orderno</th>
                                                    <th>Topic:</th>
                                                    <th>Words</th>
                                                    <th>Sources</th>
                                                    <th>Due</th>
                                                    <th>Citation</th>
                                                    <th>Subject</th>
                                                    <th>Level</th>
                                                    <th>	Total</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <th scope="row">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" value="20">
                                                            <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                                                        </label>
                                                    </th>
                                                    <td><a href="OrderDetail">xxx</a></td>
                                                    <td>xxx</td>
                                                    <td>xxx</td>
                                                    <td>xxx</td>
                                                    <td>xxx</td>
                                                    <td>xxx</td>
                                                    <td>xxx</td>
                                                    <td>xxx</td>
                                                    <td>xxx</td>

                                                </tr>


                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!--File Upload Ends-->

                            <!--Client History and bids Starts-->
                            <div id="tab4" class="tab-pane ">
                                <div class="card">



                                    <!-- #START# Modal Form Example -->
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">



                                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="formModal" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="formModal">New Quiz</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form>
                                                            <label for="email_address1">Name</label>
                                                            <div class="form-group">
                                                                <div class="form-line">
                                                                    <input type="text" id="email_address1" class="form-control" name="quiz_name" placeholder="Type quiz name Here">
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <label for="password">Quiz format</label>


                                                                <select class="form-control select2" name="format" data-placeholder="Select">
                                                                    <option value="1">one question per screen</option>
                                                                    <option value="2">show all questions on a page</option>


                                                                </select>

                                                            </div>
                                                            <div class="mt-4">
                                                                <label for="password">Quiz distribution time</label>


                                                                <select class="form-control select2 " name="time" data-placeholder="Select">
                                                                    <option></option>
                                                                    <option value="1">upon singup</option>
                                                                    <option value="2">upon login</option>
                                                                    <option value="3">Both of the above</option>

                                                                </select>

                                                            </div>

                                                            <br>


                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button    " class="btn btn-info waves-effect">Create Quiz</button>
                                                        <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="body table-responsive">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th class="ml-2 ">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" value="20">
                                                        <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                                                    </label>

                                                </th>
                                                <th>Orderno</th>
                                                <th>Topic:</th>
                                                <th>Words</th>
                                                <th>Sources</th>
                                                <th>Due</th>
                                                <th>Citation</th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th scope="row">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" value="20">
                                                        <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                                                    </label>
                                                </th>
                                                <td><a href="OrderDetail">xxx</a></td>
                                                <td>xxx</td>
                                                <td>xxx</td>
                                                <td>xxx</td>
                                                <td>xxx</td>
                                                <td>xxx</td>


                                            </tr>


                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <!--Client History and bids Ends-->

                            <!--Review Starts-->
                            <div id="tab5" class="pt-3 tab-pane">
                                <div class="row">
                                    <div class="col-lg-12 grid-margin stretch-card">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="mb-4 text-primary">Client Review</h5>
                                                <h5 class="mb-4 text-primary">Order Incomplete. Complete the order for Customer Feedback</h5>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <form>
                                                            <div class="form-group row py-4">
                                                                <label class="col-sm-4" style="font-size: 20px">Research Skills:</label>
                                                                <div class="col-sm-6">
                                                                    <div id="rating" class="rating">
                                                                        <span><i class="fa fa-star" style="color: orange;"></i></span>
                                                                        <span><i class="fa fa-star" style="color: orange;"></i></span>
                                                                        <span><i class="fa fa-star" style="color: orange;"></i></span>
                                                                        <span><i class="fa fa-star" style="color: orange;"></i></span>
                                                                        <span><i class="fa fa-star" style="color: orange;"></i></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row py-4">
                                                                <label class="col-sm-4" style="font-size: 20px">Writing Quality:</label>
                                                                <div class="col-sm-6">
                                                                    <div id="rating" class="rating">
                                                                        <span><i class="fa fa-star" style="color: orange;"></i></span>
                                                                        <span><i class="fa fa-star" style="color: orange;"></i></span>
                                                                        <span><i class="fa fa-star" style="color: orange;"></i></span>
                                                                        <span><i class="fa fa-star" style="color: orange;"></i></span>
                                                                        <span><i class="fa fa-star" style="color: orange;"></i></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row py-4">
                                                                <label class="col-sm-4" style="font-size: 20px">Meeting Deadlines:</label>
                                                                <div class="col-sm-6">
                                                                    <div id="rating" class="rating">
                                                                        <span><i class="fa fa-star" style="color: orange;"></i></span>
                                                                        <span><i class="fa fa-star" style="color: orange;"></i></span>
                                                                        <span><i class="fa fa-star" style="color: orange;"></i></span>
                                                                        <span><i class="fa fa-star" style="color: orange;"></i></span>
                                                                        <span><i class="fa fa-star" style="color: orange;"></i></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row py-4">
                                                                <label class="col-sm-4" style="font-size: 20px">Clarity in
                                                                    Communication:</label>
                                                                <div class="col-sm-6">
                                                                    <div id="rating" class="rating">
                                                                        <span><i class="fa fa-star" style="color: orange;"></i></span>
                                                                        <span><i class="fa fa-star" style="color: orange;"></i></span>
                                                                        <span><i class="fa fa-star" style="color: orange;"></i></span>
                                                                        <span><i class="fa fa-star" style="color: orange;"></i></span>
                                                                        <span><i class="fa fa-star" style="color: orange;"></i></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row py-4">
                                                                <label class="col-sm-4" style="font-size: 20px">Promptness in
                                                                    Communication:</label>
                                                                <div class="col-sm-6">
                                                                    <div id="rating" class="rating">
                                                                        <span><i class="fa fa-star" style="color: orange;"></i></span>
                                                                        <span><i class="fa fa-star" style="color: orange;"></i></span>
                                                                        <span><i class="fa fa-star" style="color: orange;"></i></span>
                                                                        <span><i class="fa fa-star" style="color: orange;"></i></span>
                                                                        <span><i class="fa fa-star" style="color: orange;"></i></span>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="form-group row py-4">
                                                                <label class="col-sm-4" style="font-size: 20px"> No Review found</label>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Review Ends-->
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="Messages">
                        <div class="container">
                            <div class="col-lg-12 grid-margin stretch-card m-0"><div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-3 border border-dark p-3">
                                                <label>View Messages From</label>
                                            </div>
                                            <div class="col-md-6 border border-dark p-3">
                                                <label>Message Details</label>
                                            </div>
                                            <div class="col-md-3 border border-dark p-3 ">
                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg2">Compose Message</button>
                                                <div class="modal fade bd-example-modal-lg2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="card">
                                                                <div class="card-body">

                                                                    <h5 class="mb-4 text-primary">Upload File as Worker</h5>


                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <label for="">Select Group</label>

                                                                            <select class="form-control select2" name="quiz_type" id="Quiz-type" data-placeholder="Select">
                                                                                <option value="option1">Option1</option>
                                                                                <option value="option2">option2</option>
                                                                                <option value="option3"> option3</option>
                                                                            </select>

                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <label for="">Select Role</label>

                                                                            <select class="form-control select2" name="quiz_type" id="Quiz-type" data-placeholder="Select">
                                                                                <option value="option1">Option1</option>
                                                                                <option value="option2">option2</option>
                                                                                <option value="option3"> option3</option>
                                                                            </select>

                                                                        </div>
                                                                    </div>



                                                                    <div class="row">
                                                                        <div class="col-md-12 blockquote mt-5">
                                                                            <form>
                                                                                <div class="form-group row">
                                                                                    <div class="col-sm-12">
                                                                                        <input type="text" id="email_address1" class="form-control" name="question_text" placeholder="TO">

                                                                                    </div>
                                                                                    <br>
                                                                                    <br>
                                                                                    <div class="col-sm-12 py-3">
                                                                                        <input type="text" id="email_address1" class="form-control" name="question_text" placeholder="From">

                                                                                    </div>
                                                                                    <br>

                                                                                </div>

                                                                                <div class="form-group row">

                                                                                    <div class="col-sm-12">
                                                                                        <input type="text" id="email_address1" class="form-control" name="question_text" placeholder="CC">

                                                                                    </div>

                                                                                </div>


                                                                                <div class="form-group row py-3">

                                                                                    <div class="col-sm-12">
                                                                                        <input type="text" id="email_address1" class="form-control" name="question_text" placeholder="BCC">

                                                                                    </div>
                                                                                </div>
                                                                                <br>
                                                                                <div class="row">
                                                                                    <div class="col-md-12">
                                                                                        <label for="">Select Group</label>

                                                                                        <select class="form-control select2" name="quiz_type" id="Quiz-type" data-placeholder="Select">
                                                                                            <option value="option1">Option1</option>
                                                                                            <option value="option2">option2</option>
                                                                                            <option value="option3"> option3</option>
                                                                                        </select>

                                                                                    </div>

                                                                                </div>
                                                                                <br>
                                                                                <div class="form-group row py-3">

                                                                                    <div class="col-sm-12">
                                                                                        <input type="text" id="email_address1" class="form-control" name="question_text" placeholder="Subject">

                                                                                    </div>
                                                                                </div>
                                                                                <br>
                                                                                <div class="form-group row">

                                                                                    <div class="col-sm-12">


                                                                                        <label for="email_address1">Post Work Cited / Bibliography page *:</label>
                                                                                        <textarea name="comment_text" class="form-control" id="comment_text" cols="30" rows="10"></textarea>
                                                                                        <button type="button" style="background-color: #6837d8" class="form-control btn btn-info">Spell-Check</button>
                                                                                        <br>
                                                                                    </div>
                                                                                </div>











                                                                                <div class="row">
                                                                                    <div class="col-md-6 ">
                                                                                        <div class="file-field input-field">


                                                                                        </div>

                                                                                        <label class="btn btn-primary h-auto fileUploadInput mt-2" for="file">Sent</label>
                                                                                    </div>

                                                                                </div>

                                                                            </form>
                                                                        </div>
                                                                    </div>


                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3 border border-dark p-3">
                                                <label class="mt-2"><a href="#">All Messages</a></label>
                                                <ul><li class="list-unstyled"><label><a href="#">Ascending</a></label></li>
                                                    <li class="list-unstyled">
                                                        <label><a href="#">Descending</a></label>
                                                    </li>
                                                </ul> <hr>
                                                <label class="mt-2"><a href="#">Admin</a></label> <hr>
                                                <label class="mt-2"><a href="#">Customer</a>
                                                </label> <hr> <label class="mt-2"><a href="#">Team</a></label>
                                                <ul>
                                                    <li class="list-unstyled"><label><a href="#">Worker
                                                                1</a></label></li> <li class="list-unstyled"><label><a href="#">Worker
                                                                2</a></label></li></ul>
                                            </div>
                                            <div class="col-md-9 border border-dark p-3"><div class="message-body"><div class="blockquote mr-3"><label class="m-0"><strong>From:</strong> Role and
                                                            Sub-Role (If Worker) + Name</label> <label class="m-0"><strong>To:</strong> Role and
                                                            Sub-Role (If Worker) + Name</label> <label class="m-0"><strong>Date:</strong>
                                                            DD-MM-YYYY</label> <label class="m-0"><strong>Subject:</strong>
                                                            XXXX</label> <hr> <label class="m-0"><strong>Details</strong></label> <hr> <label class="m-0">XXXX</label></div> <div class="blockquote mr-3"><label class="m-0"><strong>From:</strong> Role and
                                                            Sub-Role (If Worker) + Name</label> <label class="m-0"><strong>To:</strong> Role and
                                                            Sub-Role (If Worker) + Name</label> <label class="m-0"><strong>Date:</strong>
                                                            DD-MM-YYYY</label> <label class="m-0"><strong>Subject:</strong>
                                                            XXXX</label> <hr> <label class="m-0"><strong>Details</strong></label> <hr> <label class="m-0">XXXX</label></div> <div class="blockquote mr-3"><label class="m-0"><strong>From:</strong> Role and
                                                            Sub-Role (If Worker) + Name</label> <label class="m-0"><strong>To:</strong> Role and
                                                            Sub-Role (If Worker) + Name</label> <label class="m-0"><strong>Date:</strong>
                                                            DD-MM-YYYY</label> <label class="m-0"><strong>Subject:</strong>
                                                            XXXX</label> <hr> <label class="m-0"><strong>Details</strong></label> <hr> <label class="m-0">XXXX</label></div> <div class="blockquote mr-3"><label class="m-0"><strong>From:</strong> Role and
                                                            Sub-Role (If Worker) + Name</label> <label class="m-0"><strong>To:</strong> Role and
                                                            Sub-Role (If Worker) + Name</label> <label class="m-0"><strong>Date:</strong>
                                                            DD-MM-YYYY</label> <label class="m-0"><strong>Subject:</strong>
                                                            XXXX</label> <hr> <label class="m-0"><strong>Details</strong></label> <hr> <label class="m-0">XXXX</label></div> <div class="blockquote mr-3"><label class="m-0"><strong>From:</strong> Role and
                                                            Sub-Role (If Worker) + Name</label> <label class="m-0"><strong>To:</strong> Role and
                                                            Sub-Role (If Worker) + Name</label> <label class="m-0"><strong>Date:</strong>
                                                            DD-MM-YYYY</label>
                                                        <label class="m-0">
                                                            <strong>Subject:</strong>
                                                            XXXX</label>
                                                        <label class="m-0">
                                                            <strong>Subject:</strong>
                                                            XXXX</label>
                                                        <label class="m-0">
                                                            <strong>Subject:</strong>
                                                            XXXX</label>
                                                        <hr>
                                                        <label class="m-0"><strong>Details</strong></label>
                                                        <hr>
                                                        <label class="m-0">XXXX</label>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row justify-content-center"><div class="col-md-4 p-3 text-center">
                                            </div>

                                            <div class="row ml-auto">
                                                <div class="col-lg-12 col-12">
                                                    <div class="col-sm-12 col-md-7">
                                                        <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                                                            <ul class="pagination"><li class="paginate_button page-item previous" id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link">1</a>
                                                                </li>
                                                                <li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" class="page-link">2</a>
                                                                </li><li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0" class="page-link">3</a>
                                                                </li>
                                                                <li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="4" tabindex="0" class="page-link">4</a>
                                                                </li>
                                                                <li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="5" tabindex="0" class="page-link">5</a>
                                                                </li>
                                                                <li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="6" tabindex="0" class="page-link">6</a></li>
                                                                <li class="paginate_button page-item next" id="DataTables_Table_0_next">
                                                                    <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="7" tabindex="0" class="page-link">Next</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="Upload">
                        <div class="container">
                            <div class="row">
                                <button type="button" class="btn btn-primary ml-4" data-toggle="modal" data-target=".bd-example-modal-lg">Upload File As Worker</button>

                                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="col-lg-12 grid-margin stretch-card">
                                                <div class="card">
                                                    <div class="card-body">

                                                        <h5 class="mb-4 text-primary">Upload File as Worker</h5>


                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <label for="">Select Group</label>

                                                                <select class="form-control select2" name="quiz_type" id="Quiz-type" data-placeholder="Select">
                                                                    <option value="option1">Option1</option>
                                                                    <option value="option2">option2</option>
                                                                    <option value="option3"> option3</option>
                                                                </select>

                                                            </div>
                                                            <div class="col-md-12">
                                                                <label for="">Select Role</label>

                                                                <select class="form-control select2" name="quiz_type" id="Quiz-type" data-placeholder="Select">
                                                                    <option value="option1">Option1</option>
                                                                    <option value="option2">option2</option>
                                                                    <option value="option3"> option3</option>
                                                                </select>

                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-2">
                                                                <button type="button" class="btn btn-primary mt-3">Edit</button>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-12 blockquote mt-5">
                                                                <form>
                                                                    <div class="form-group row">
                                                                        <div class="col-sm-12">
                                                                            <input type="text" id="email_address1" class="form-control" name="question_text" placeholder="Main Title">
                                                                            <small style="color: #414244">EXAMPLE: "Causes and Effects of the Great
                                                                                Depression of 1929"
                                                                            </small>
                                                                        </div>
                                                                        <br>
                                                                    </div>
                                                                    <br>
                                                                    <div class="form-group row">

                                                                        <div class="col-sm-12">
                                                                            <input type="text" id="email_address1" class="form-control" name="question_text" placeholder="Secondary Title">
                                                                            <small style="color: #414244">EXAMPLE: "Great Depression of 1929: Causes
                                                                                and Effects"
                                                                            </small>
                                                                        </div>

                                                                    </div>

                                                                    <br>
                                                                    <div class="form-group row">

                                                                        <div class="col-sm-12">
                                                                            <input type="text" id="email_address1" class="form-control" name="question_text" placeholder="Three Keywords">
                                                                            <small style="color: #414244">EXAMPLE (must be comma-separated): Great Depression, 1929, Black Tuesday
                                                                            </small>
                                                                        </div>
                                                                    </div>
                                                                    <br>

                                                                    <div class="form-group row">

                                                                        <div class="col-sm-12">


                                                                            <label for="email_address1">Post Work Cited / Bibliography page *:</label>
                                                                            <textarea name="comment_text" class="form-control" id="comment_text" cols="30" rows="10"></textarea>
                                                                            <br>
                                                                        </div>
                                                                    </div>


                                                                    <br>
                                                                    <label for="">Category 1</label>

                                                                    <select class="form-control select2" name="quiz_type" id="Quiz-type" data-placeholder="Select">
                                                                        <option value="option1">Option1</option>
                                                                        <option value="option2">option2</option>
                                                                        <option value="option3"> option3</option>
                                                                    </select>


                                                                    <br>
                                                                    <label for="">Category 1</label>

                                                                    <select class="form-control select2" name="quiz_type" id="Quiz-type" data-placeholder="Select">
                                                                        <option value="option1">Option1</option>
                                                                        <option value="option2">option2</option>
                                                                        <option value="option3"> option3</option>
                                                                    </select>
                                                                    <br>

                                                                    <div class="row ">
                                                                        <div class="col-md-2">
                                                                            <button type="button" class="btn btn-primary mb-2">
                                                                                Send
                                                                            </button>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <label>Upload Additional files for Workers and
                                                                                Customer</label>
                                                                            <label>Here you need to upload all the Resource
                                                                                files used to complete the order:</label>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <select name="" id="" class="form-control">
                                                                                <option value="">Select</option>
                                                                                <option value="">worker</option>
                                                                                <option value="">Customer</option>
                                                                                <option value="">Both</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-6 ">
                                                                            <div class="file-field input-field">
                                                                                <div class="btn">
                                                                                    <span>File</span>
                                                                                    <input type="file">
                                                                                </div>
                                                                                <div class="file-path-wrapper">
                                                                                    <input class="file-path validate" type="text">
                                                                                </div>
                                                                            </div>

                                                                            <label class="btn btn-primary h-auto fileUploadInput mt-2" for="file">Sent</label>
                                                                        </div>
                                                                    </div>

                                                                </form>
                                                            </div>
                                                        </div>


                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>
                                <div class="container">

                                    <div class="body table-responsive py-5">

                                        <h5 class="text-center">Worker’s Role (Name) Final File</h5>
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th class="ml-2 ">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" value="20">
                                                        <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                                                    </label>

                                                </th>
                                                <th>Main Title</th>
                                                <th>Secondary Title</th>
                                                <th>3 Keywords</th>
                                                <th>Bibliography</th>
                                                <th>Category 1</th>
                                                <th>Category 2</th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th scope="row">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" value="20">
                                                        <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                                                    </label>
                                                </th>
                                                <td><a href="OrderDetail">xxx</a></td>
                                                <td>xxx</td>
                                                <td>xxx</td>
                                                <td>xxx</td>
                                                <td>xxx</td>
                                                <td>xxx</td>

                                            </tr>

                                            <tr>
                                                <th scope="row">

                                                </th>
                                                <td><a>Upload New File:</a></td>
                                                <td></td>

                                                <td>Send To Customer:</td>
                                                <td></td>
                                                <td></td>

                                            </tr>

                                            <tr>
                                                <th scope="row">

                                                </th>
                                                <td><a>xxxx</a></td>
                                                <td></td>
                                                <td>
                                                    <button class="btn btn-primary">Edit</button>

                                                    <button class="btn btn-primary">Sent</button>
                                                </td>
                                                <td> xxx</td>
                                                <td> xxx</td>
                                                <td> xxx</td>

                                            </tr>


                                            </tbody>
                                        </table>
                                                     </div>



                                    <div class="body table-responsive py-5">

                                        <h5 class="text-center"> Final File</h5>
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th class="ml-2 ">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" value="20">
                                                        <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                                                    </label>

                                                </th>
                                                <th>Main Title</th>
                                                <th>Secondary Title</th>
                                                <th>3 Keywords</th>
                                                <th>Bibliography</th>
                                                <th>Category 1</th>
                                                <th>Category 2</th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th scope="row">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" value="20">
                                                        <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                                                    </label>
                                                </th>
                                                <td><a href="OrderDetail">xxx</a></td>
                                                <td>xxx</td>
                                                <td>xxx</td>
                                                <td>xxx</td>
                                                <td>xxx</td>
                                                <td>xxx</td>

                                            </tr>

                                            <tr>
                                                <th scope="row">

                                                </th>
                                                <td><a>Upload New File:</a></td>
                                                <td></td>

                                                <td>Send To Customer:</td>
                                                <td></td>
                                                <td></td>

                                            </tr>

                                            <tr>
                                                <th scope="row">

                                                </th>
                                                <td><a>xxxx</a></td>
                                                <td></td>
                                                <td>
                                                    <button class="btn btn-primary">Edit</button>

                                                    <button class="btn btn-primary">Sent</button>
                                                </td>
                                                <td> xxx</td>
                                                <td> xxx</td>
                                                <td> xxx</td>

                                            </tr>


                                            </tbody>
                                        </table>
                                                                 </div>


                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg_2">Upload Additional File (s)</button>

                                    <div class="modal fade bd-example-modal-lg_2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Modal Header</h4>
                                                    <button type="button" class="close" data-dismiss="modal">×
                                                    </button>


                                                </div>
                                                <div class="container">

                                                <p for="">Upload Additional files for Workers and Customer</p>
                                                <label for="">Here you need to upload all the Resource files used to complete the order:</label>

                                                    <div class="row pt-5">
                                                        <div class="col-md-12">
                                                            <select name="" id="" class="form-control">
                                                                <option value="">Select</option>
                                                                <option value="">worker</option>
                                                                <option value="">Customer</option>
                                                                <option value="">Both</option>
                                                            </select>
                                                        </div>
                                                        <div class="px-3">

                                                        <button class="btn btn-primary text-right">Attach file</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                                                         </div>

                                    <div class="body table-responsive py-5">

                                        <h5 class="text-center"> Files Uploaded By Admin</h5>
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th class="ml-2 ">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" value="20">
                                                        <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                                                    </label>

                                                </th>
                                                <th>File Name</th>
                                                <th>File Type</th>
                                                <th>File Size</th>
                                                <th>Upload Time</th>
                                                <th>Download</th>


                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th scope="row">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" value="20">
                                                        <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                                                    </label>
                                                </th>
                                                <td><a href="OrderDetail">xxx</a></td>
                                                <td>xxx</td>
                                                <td>xxx</td>
                                                <td>xxx</td>
                                                <td><a href="">link</a></td>


                                            </tr>






                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="body table-responsive py-5">

                                        <h5 class="text-center">Files Uploaded By Customer Name</h5>
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th class="ml-2 ">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" value="20">
                                                        <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                                                    </label>

                                                </th>
                                                <th>File Name</th>
                                                <th>File Type</th>
                                                <th>File Size</th>
                                                <th>Upload Time</th>
                                                <th>Download</th>


                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th scope="row">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" value="20">
                                                        <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                                                    </label>
                                                </th>
                                                <td><a href="OrderDetail">xxx</a></td>
                                                <td>xxx</td>
                                                <td>xxx</td>
                                                <td>xxx</td>
                                                <td><a href="">link</a></td>


                                            </tr>






                                            </tbody>
                                        </table>
                                    </div>


                                    <div class="body table-responsive py-5">

                                        <h5 class="text-center"> Files Uploaded by Worker Name (Team and Sub Role)</h5>
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th class="ml-2 ">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" value="20">
                                                        <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                                                    </label>

                                                </th>
                                                <th>File Name</th>
                                                <th>File Type</th>
                                                <th>File Size</th>
                                                <th>Upload Time</th>
                                                <th>Download</th>


                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th scope="row">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" value="20">
                                                        <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                                                    </label>
                                                </th>
                                                <td><a href="OrderDetail">xxx</a></td>
                                                <td>xxx</td>
                                                <td>xxx</td>
                                                <td>xxx</td>
                                                <td><a href="">link</a></td>


                                            </tr>






                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="setting">
                        <div class="card">



                            <!-- #START# Modal Form Example -->
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">



                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="formModal" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="formModal">New Quiz</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form>
                                                    <label for="email_address1">Name</label>
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="text" id="email_address1" class="form-control" name="quiz_name" placeholder="Type quiz name Here">
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <label for="password">Quiz format</label>


                                                        <select class="form-control select2" name="format" data-placeholder="Select">
                                                            <option value="1">one question per screen</option>
                                                            <option value="2">show all questions on a page</option>


                                                        </select>

                                                    </div>
                                                    <div class="mt-4">
                                                        <label for="password">Quiz distribution time</label>


                                                        <select class="form-control select2 " name="time" data-placeholder="Select">
                                                            <option></option>
                                                            <option value="1">upon singup</option>
                                                            <option value="2">upon login</option>
                                                            <option value="3">Both of the above</option>

                                                        </select>

                                                    </div>

                                                    <br>


                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button    " class="btn btn-info waves-effect">Create Quiz</button>
                                                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="body table-responsive">
                                <p class="text-center">List of Past Orders you did for this customer</p>
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th class="ml-2 ">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="20">
                                                <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                                            </label>

                                        </th>
                                        <th>Worker’s Name</th>
                                        <th>Worker’s Role</th>
                                        <th>Worker’s Group</th>
                                        <th>Deadline Given by Worker</th>
                                        <th>Customer’s Deadline</th>
                                        <th>Previous History with customer</th>
                                        <th>Message this <br> Worker</th>
                                        <th>Assign button</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="20">
                                                <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                                            </label>
                                        </th>
                                        <td><a href="OrderDetail">xxx</a></td>
                                        <td>xxx</td>
                                        <td>xxx</td>
                                        <td>xxx</td>
                                        <td>xxx</td>
                                        <td>
                                            <a href="">#1234567</a> <br>
                                            <a href="">#1234567</a> <br>
                                            <a href="">#1234567</a> <br>
                                            <a href="">#1234567</a> <br>
                                        </td>
                                        <td class="text-center">
                                            <textarea id="w3review" name="w3review" rows="2" cols="25"></textarea> <br>
                                            <button class="btn btn-primary ">Send</button>
                                        </td>
                                        <td>

                                            <button class="btn btn-primary">Assign</button>
                                        </td>



                                    </tr>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="clients">
                        <div class="row">
                            <div class="col-lg-12 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="mb-4 text-primary">Client Review</h5>
                                        <h5 class="mb-4 text-primary">Order Incomplete. Complete the order for Customer Feedback</h5>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <form>
                                                    <div class="form-group row py-4">
                                                        <label class="col-sm-4" style="font-size: 20px">Research Skills:</label>
                                                        <div class="col-sm-6">
                                                            <div id="rating" class="rating">
                                                                <span><i class="fa fa-star" style="color: orange;"></i></span>
                                                                <span><i class="fa fa-star" style="color: orange;"></i></span>
                                                                <span><i class="fa fa-star" style="color: orange;"></i></span>
                                                                <span><i class="fa fa-star" style="color: orange;"></i></span>
                                                                <span><i class="fa fa-star" style="color: orange;"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row py-4">
                                                        <label class="col-sm-4" style="font-size: 20px">Writing Quality:</label>
                                                        <div class="col-sm-6">
                                                            <div id="rating" class="rating">
                                                                <span><i class="fa fa-star" style="color: orange;"></i></span>
                                                                <span><i class="fa fa-star" style="color: orange;"></i></span>
                                                                <span><i class="fa fa-star" style="color: orange;"></i></span>
                                                                <span><i class="fa fa-star" style="color: orange;"></i></span>
                                                                <span><i class="fa fa-star" style="color: orange;"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row py-4">
                                                        <label class="col-sm-4" style="font-size: 20px">Meeting Deadlines:</label>
                                                        <div class="col-sm-6">
                                                            <div id="rating" class="rating">
                                                                <span><i class="fa fa-star" style="color: orange;"></i></span>
                                                                <span><i class="fa fa-star" style="color: orange;"></i></span>
                                                                <span><i class="fa fa-star" style="color: orange;"></i></span>
                                                                <span><i class="fa fa-star" style="color: orange;"></i></span>
                                                                <span><i class="fa fa-star" style="color: orange;"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row py-4">
                                                        <label class="col-sm-4" style="font-size: 20px">Clarity in
                                                            Communication:</label>
                                                        <div class="col-sm-6">
                                                            <div id="rating" class="rating">
                                                                <span><i class="fa fa-star" style="color: orange;"></i></span>
                                                                <span><i class="fa fa-star" style="color: orange;"></i></span>
                                                                <span><i class="fa fa-star" style="color: orange;"></i></span>
                                                                <span><i class="fa fa-star" style="color: orange;"></i></span>
                                                                <span><i class="fa fa-star" style="color: orange;"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row py-4">
                                                        <label class="col-sm-4" style="font-size: 20px">Promptness in
                                                            Communication:</label>
                                                        <div class="col-sm-6">
                                                            <div id="rating" class="rating">
                                                                <span><i class="fa fa-star" style="color: orange;"></i></span>
                                                                <span><i class="fa fa-star" style="color: orange;"></i></span>
                                                                <span><i class="fa fa-star" style="color: orange;"></i></span>
                                                                <span><i class="fa fa-star" style="color: orange;"></i></span>
                                                                <span><i class="fa fa-star" style="color: orange;"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row py-4">
                                                        <label class="col-sm-4" style="font-size: 20px"> No Review found</label>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>





            </div>
            </div>
        </div>
    </div>
        </div>
    </div>

@endsection
