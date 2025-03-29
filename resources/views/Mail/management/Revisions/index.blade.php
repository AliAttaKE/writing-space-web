@extends('management/layouts/master')
@section('title')
    Revisions
@endsection
@section('content')

    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-12">
        <ul class="breadcrumb breadcrumb-style ">
            <li class="breadcrumb-item">
                <h4 class="page-title">Revisions </h4>
            </li>

        </ul>
    </div>
                <div class="card my-4">
                    <div class="header">


                        <!-- #START# Modal Form Example -->
                        <div class="col-xs-12 col-sm-6 col-md-12 col-lg-12">

                            <div class="row my-4">

                            <div class="col-lg-4 col-12">
                                <p>Stats for September 2020</p>
                                <p>View Details for:</p>
                                <div class="form-group">
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>5</option>
                                        <option>5</option>
                                        <option>5</option>
                                        <option>5</option>
                                        <option>5</option>
                                        <option>5</option>
                                        <option>5</option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-12">
                                <p>Stats for September 2020</p>
                                <p>View Details for:</p>
                                <div class="form-group">
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>5</option>
                                        <option>5</option>
                                        <option>5</option>
                                        <option>5</option>
                                        <option>5</option>
                                        <option>5</option>
                                        <option>5</option>

                                    </select>



                                </div>

                            </div>
                                <div class="col-lg-4 col-12 my-5">
                                    <button class="btn my-4" style="color: white; background-color: #0c7cd5"   >View</button>

                                </div>


                            </div>
                            <div class="row my-2">
                                <div class="col-lg-4 col-12 ">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Sort Orders by:</label>
                                        <select class="form-control" id="exampleFormControlSelect1">
                                            <option>OrderName</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-12">
                                    <h5 class="text-center">New Orders: (Pending Admin Approval)</h5>
                                </div>
                            </div>
                        </div>





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
                                            <form>
                                                <label for="email_address1">Name</label>
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" id="email_address1"
                                                               class="form-control" name="quiz_name"
                                                               placeholder="Type quiz name Here">
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
                                                {{--                                            <button type="button"--}}
                                                {{--                                                    class="btn btn-primary m-t-15 waves-effect">LOGIN</button>--}}
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button    "
                                                    class="btn btn-info waves-effect">Create Quiz</button>
                                            <button type="button" class="btn btn-danger waves-effect"
                                                    data-dismiss="modal">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <div class="body table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th class="ml-2 ">
                                        <label class="form-check-label" >
                                            <input class="form-check-input" type="checkbox" value="" >
                                            <span class="form-check-sign" >
                                                <span class="check"></span>
                                            </span>
                                        </label>

                                    </th>
                                    <th>OrderNo </th>
                                    <th>Topic</th>
                                    <th>Words</th>
                                    <th>Sources</th>
                                    <th>Due</th>
                                    <th>Citation</th>
                                    <th>Subject</th>
                                    <th>Level</th>
                                    <th>Total</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">
                                        <label class="form-check-label" >
                                            <input class="form-check-input" type="checkbox" value="" >
                                            <span class="form-check-sign" >
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
            </div>
        </div>



@endsection
