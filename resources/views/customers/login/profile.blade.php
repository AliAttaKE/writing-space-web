@extends('customers/Layouts/master')
@section('title')
    My -  {{config('app.name')}}
@endsection
@section('content')



    <div class="container">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <ul class="breadcrumb breadcrumb-style ">
                        <li class="breadcrumb-item">
                            <h4 class="page-title"> My Profile</h4>
                        </li>

                    </ul>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <button type="button" class="btn btn-primary float-right mt-3"> Back
                    </button>
                </div>

            </div>
            <div class="card">
                @include('management.layouts.error')

                <div class="row">
                    <div class="col-lg-12 col-12">
                        <ul class="nav nav-tabs" id="myTab" role="tablist" style="padding: 20px 30px";>

                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">PROFILE</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">SECURITY</a>
                            </li>



                        </ul>
                        <div class="tab-content" id="myTabContent" style="padding: 20px 30px";>
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">


{{--                                <form method="POST" id="home" action="{{route('myprofile-user.update',auth()->user()->id)}}" enctype="multipart/form-data"">--}}
{{--                                @csrf--}}
{{--                                @method('PUT')--}}
                                <div class="row ">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" value="" name="name"  id="name" class="form-control" placeholder="Full Name">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="email" value=""  name="email" id="email" class="form-control" placeholder="Email" readonly>


                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="number"  min="0" value="" name="cell_number" id="cell_number" class="form-control" placeholder="Cell Number">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="number" min="0" value="" name="alternative_number" id="alternative_number" class="form-control" placeholder="Alternative Number">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="varchar"  value="" name="address"  id="address" class="form-control" placeholder="Address">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" value="" name="country" id="country" class="form-control" placeholder="Country">
                                            </div>
                                        </div>
                                        <div>
                                            {{--                                                                                    <button onclick="document.getElementById('profile').submit()" class="btn btn-primary waves-effect"--}}
                                            {{--                                                                                            data-dismiss="modal" data-dismiss="modal">Update</button>--}}
                                            <button type="submit" class="btn btn-primary waves-effect"
                                                    data-dismiss="modal" data-dismiss="modal">Update</button>
                                        </div>
                                    </div>


                                </div>
                                </form>

                            </div>

                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <form method="POST" id="home" action="" enctype="multipart/form-data">
{{--                                    @csrf--}}
{{--                                    @method('PUT')--}}

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="password" class="form-control" placeholder="Current Password" name="password" >
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="password" class="form-control" placeholder="New Password" name="new_password" >
{{--                                                    @error('password')--}}
                                                    <span class="invalid-feedback" role="alert">
{{--                                        <strong>{{ $message }}</strong>--}}
                                    </span>
{{--                                                    @enderror--}}
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="password" class="form-control" placeholder="Re-type New Password" name="confirm_password" >
{{--                                                    @error('password')--}}
{{--                                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                                    @enderror--}}
                                                </div>
                                            </div>

                                            <div>
                                                <button type="submit" class="btn btn-primary waves-effect"
                                                        data-dismiss="modal" data-dismiss="modal">Update</button>

                                            </div>
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

@endsection
