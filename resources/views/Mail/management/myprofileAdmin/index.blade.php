@extends('management/layouts/master')
@section('title')
    My Profile
@endsection
@section('content')

    <div class="container">
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
            <div class=" image d-none">
                <img src="{{asset('management/images/usrbig.jpg')}}" class="img-circle user-img-circle"
                     alt="User Image" />
            </div>
        </div>
        <div class="row">
        <div class="col-md-4 ">
            <div class="card body">
                @if(auth()->user()->erp_image == null)
                <div class="row">
                    <div class="contact-photo">
                        <a href="{{url('myprofile')}}" style="width:80px;" >
                            <img  src="{{asset('management/images/profile.png')}}" class="img-circle user-img-circle" alt="User Image" />
                        </a>
                    </div>
                </div>

                @else
                    <div class="row">
                    <div class="contact-photo">
                        <a href="{{url('myprofile')}}" style="width:80px;" >
                            <img  src="{{asset('image/announcement'.'/'.auth()->user()->erp_image)}}" class="img-circle user-img-circle" alt="User Image" />
                        </a>
                    </div>
                </div>
                @endif
                <div class="contact-usertitle">
                    <div class="contact-usertitle-name"> {{auth()->user()->name}} </div>
                    <div class="contact-usertitle-job">
                        <button type="button" class="btn btn-border-radius bg-primary waves-effect">{{auth()->user()->user_type}} </button></div>
                </div>
{{--                <ul class="list-group list-group-unbordered">--}}
{{--                    <li class="list-group-item">--}}
{{--                        <b>All Contacts</b>--}}
{{--                        <a class="pull-right">1,200</a>--}}
{{--                    </li>--}}
{{--                    <li class="list-group-item">--}}
{{--                        Friends--}}
{{--                        <a class="pull-right">450</a>--}}
{{--                    </li>--}}
{{--                    <li class="list-group-item">--}}
{{--                        Family--}}
{{--                        <a class="pull-right">345</a>--}}
{{--                    </li>--}}
{{--                    <li class="list-group-item">--}}
{{--                        Office--}}
{{--                        <a class="pull-right">172</a>--}}
{{--                    </li>--}}
{{--                    <li class="list-group-item">--}}
{{--                        Social--}}
{{--                        <a class="pull-right">432</a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--                <div class="newLabelBtn">--}}
{{--                    <button type="button" class="btn btn-border-radius bg-purple waves-effect">New--}}
{{--                        Label</button>--}}
{{--                </div>--}}
            </div>
        </div>
        <div class="col-md-8 ">

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


                            <form method="POST" id="home" action="{{route('myprofile.update',auth()->user()->id)}}" enctype="multipart/form-data"">
                              @csrf
                              @method('PUT')
                            <div class="row ">
                                <div class="col-sm-12">
                                    @if(auth()->user()->erp_image == null)
                                    <label> Add Profile image</label>
                                    <div class="file-field input-field">
                                        <div class="btn">
                                            <span>File</span>
                                            <input name="erp_image" type="file">
                                        </div>
                                        <div class="file-path-wrapper">
                                            <input class="file-path validate" name="erp_image" type="text">
                                        </div>
                                    </div>
                                    @else
                                    <label>  Edit Profile image</label>
                                    <div class="file-field input-field">
                                        <div class="btn">
                                            <span>File</span>
                                            <input name="erp_image" type="file">
                                        </div>
                                        <div class="file-path-wrapper">
                                            <input class="file-path validate" name="erp_image" type="text">
                                        </div>
                                    </div>
                                    @endif
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" value="{{auth()->user()->name}}" name="name"  id="name" class="form-control" placeholder="Full Name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="email" value="{{auth()->user()->email}}"  name="email" id="email" class="form-control" placeholder="Email" readonly>


                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="number"  min="0" value="{{auth()->user()->cell_number}}" name="cell_number" id="cell_number" class="form-control" placeholder="Cell Number">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="number" min="0" value="{{auth()->user()->alternative_number}}" name="alternative_number" id="alternative_number" class="form-control" placeholder="Alternative Number">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="varchar"  value="{{auth()->user()->address}}" name="address"  id="address" class="form-control" placeholder="Address">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" value="{{auth()->user()->country}}" name="country" id="country" class="form-control" placeholder="Country">
                                        </div>
                                    </div>
                                    <div>
{{--                                        <button onclick="document.getElementById('profile').submit()" class="btn btn-primary waves-effect"--}}
{{--                                                data-dismiss="modal" data-dismiss="modal">Update</button>--}}
                                        <button type="submit" class="btn btn-primary waves-effect"
                                                data-dismiss="modal" data-dismiss="modal">Update</button>
                                    </div>
                                </div>


                            </div>
                          </form>

                        </div>

                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <form method="POST" id="home" action="{{url('security',auth()->user()->id)}}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

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
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="password" class="form-control" placeholder="Re-type New Password" name="confirm_password" >
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
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
    </div>










@endsection

