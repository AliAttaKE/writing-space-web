@extends('management/layouts/master')
@section('title')
    Quiz -
@endsection
@section('content')

<div class="container">
    <div class="card">
    <div class="row">
        <div class="col-lg-12 col-12">
            <ul class="nav nav-tabs" id="myTab" role="tablist" style="padding: 20px 30px";>
                <li class="nav-item" >
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Password</a>
                </li>

            </ul>
            <div class="tab-content" id="myTabContent" style="padding: 20px 30px";>
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="row ">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="Username">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="password" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="password" class="form-control" placeholder="Cell Number">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="password" class="form-control" placeholder="Alternative Number">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="password" class="form-control" placeholder="Address">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="password" class="form-control" placeholder="Country">
                                </div>
                            </div>
                            <div>
                                <button type="button" class="btn waves-effect" style = "color:white;background-color: #2196f3;padding: 0px 20px;border-radius: 7px;">Edit</button>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="row ">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="Old Password">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="password" class="form-control" placeholder="New Password">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="password" class="form-control" placeholder="Re-type New Password">
                                </div>
                            </div>

                            <div>
                                <button type="button" class="btn waves-effect" style = "color:white;background-color: #2196f3;padding: 0px 15px;border-radius: 7px;">Update</button>


                                <button type="button" class="btn waves-effect" style = "color:white;background-color: #2196f3;padding: 0px 15px;border-radius: 7px;">Cancel</button>
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

