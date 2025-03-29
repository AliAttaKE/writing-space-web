@extends('worker/layouts/master')
@section('title')
    Edit
@endsection
@section('content')
    <div class="container pt-3">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title"> Plagiarism Quiz</h4>
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
                        <h2>
                            <strong>No  of  Questions</strong></h2>
                        <!-- #START# Modal Form Example -->
                        <div class="container">



                            <div class="row mt-4">
                                <div class="col">
                                    Question 1: What is a day today?
                                </div>

                            </div>

                            <div class="row mt-4">
                                <div class="col">
                                    <label>
                                        <input name="group1" type="radio">
                                        <span>Monday</span>
                                    </label>
                                </div>
                                <div class="col">

                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="col">
                                    <label>
                                        <input name="group1" type="radio">
                                        <span>Wednesday</span>
                                    </label>
                                </div>
                                <div class="col">

                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col">
                                    <label>
                                        <input name="group1" type="radio">
                                        <span>Thursday</span>
                                    </label>
                                </div>
                                <div class="col">

                                </div>
                            </div>



                            <div>

                            </div></div>

                        {{--<div class="container">
                            <div class="row mt-4">
                                <div class="col">

                                    <select class="form-control select2" name="result" id="Quiz-type" data-placeholder="Select">
                                        <option value="fail">Fail</option>
                                        <option value="pass">Pass</option>

                                    </select>

                                </div>


                            </div>
                        </div>--}}







                    </div>
                    <div class="header">

                        <!-- #START# Modal Form Example -->
                        <div class="container">



                            <div class="row mt-4">
                                <div class="col">
                                    Question 2: How did you spend your day yesterday?
                                </div>

                            </div>

                            <div class="row mt-4 col-6">
                                <textarea name="comment_text" class="form-control" id="comment_text" cols="10" rows="6"></textarea>
                            </div>




                            </div>



                            <div>

                            </div></div>
                    <div class="header">

                        <!-- #START# Modal Form Example -->
                        <div class="container">



                            <div class="row mt-4">
                                <div class="">
                                    Question 3: Write an essay on “US War in Iraq"?
                                </div>

                            </div>

                            <div class="file_upload">
                                <div class="modal-body">
                                    <form>
                                        <div class="file-field input-field " >
                                            <div class="btn ">
                                                <span>File</span>
                                                <input name="file" type="file">
                                            </div>
                                            <div class="file-path-wrapper col-6">
                                                <input class="file-path validate" name="file" type="text">
                                            </div>
                                        </div>


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

                                    </form>
                                </div>
                            </div>
                            <span> Only PDF, DOC, DOCX, PNG, JPG, JPEG, GIF files are supported.</span>


                        </div>



                        <div>

                        </div></div>

                        {{--<div class="container">
                            <div class="row mt-4">
                                <div class="col">

                                    <select class="form-control select2" name="result" id="Quiz-type" data-placeholder="Select">
                                        <option value="fail">Fail</option>
                                        <option value="pass">Pass</option>

                                    </select>

                                </div>


                            </div>
                        </div>--}}







                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection
