@extends('management/layouts/master')
@section('title')
    My Profile
@endsection
@section('content')


    <div class="container">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <ul class="breadcrumb breadcrumb-style ">
                        <li class="breadcrumb-item">
                            <h4 class="page-title"> User's Profile</h4>
                        </li>

                    </ul>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <button type="button" class="btn btn-primary float-right mt-3"> Back
                    </button>
                </div>
            </div>
            @include('management.layouts.error')

            <div class="row">
            <div class="col-md-4 ">
                <div class="card body">

                    @if($data->erp_image == null)
                    <div class="row">
                        <div class="contact-photo">
                             <img  src="{{asset('management/images/profile.png')}}"  class="img-circle user-img-circle "
                                   alt="User Image" />
                        </div>
                    </div>
                    @else
                        <div class="row">
                            <div class="contact-photo">
                                <img  src="{{asset('image/announcement'.'/'.$data->erp_image)}}" class="img-circle user-img-circle "
                                      alt="User Image" />
                            </div>
                        </div>
                    @endif

                    <div class="contact-usertitle">
                            <div class="contact-usertitle-name"> <h3> {{$data->name}}</h3></div>
                        <div class="contact-usertitle-job"> {{$data->user_type}} </div>
                    </div>
                    <ul class="list-group list-group-unbordered">

                        <li class="list-group-item">
                            Bids

                            @if(!empty($data['bids']))
                                @foreach($data['bids'] as $row)

                                    <div class="form-group">
                                        <div class="form-line">
                                            <a class="pull-right ">{{$row['role']['erp_work_flow_role']}} : {{$row['erp_bids']}}</a>
                                        </div>
                                    </div>
                                    <br>
                                @endforeach
                            @else
                                <div class="form-group">
                                    <input type="text" value=" {{'Not Available'}}"  name="email" id="email" class="form-control" placeholder="Email" readonly>
                                </div>

                            @endif

                        </li>
                        <li class="list-group-item">
                            Claims

                            @if(!empty($data['bids']))
                                @foreach($data['bids'] as $row)

                                    <div class="form-group">
                                        <div class="form-line">
                                            <a class="pull-right ">{{$row['role']['erp_work_flow_role']}} : {{$row['erp_claims']}}</a>
                                        </div>
                                    </div>
                                    <br>
                                @endforeach
                            @else
                                <div class="form-group">
                                    <input type="text" value=" {{'Not Available'}}"  name="email" id="email" class="form-control" placeholder="Email" readonly>
                                </div>
                            @endif
                        </li>
                       
                    </ul>


                    @if($data->status == 1)

                    <div class="newLabelBtn">
                        <button type="button" class="btn btn-border-radius bg-primary waves-effect text-white">User Status: active</button>
                    </div>
                    @elseif($data->status == 0)
                        <div class="newLabelBtn">
                            <button type="button" class="btn btn-border-radius bg-purple waves-effect text-white">User Status: inactive
                                </button>
                        </div>
                    @elseif($data->status == 2)
                        <div class="newLabelBtn">
                            <button type="button" class="btn btn-border-radius  bg-danger waves-effect text-white">User Status: blocked
                                </button>
                        </div>
                        @endif


                </div>

            </div>




                    <div class="col-md-8 col-8">
                        <div class="card">

                        <ul class="nav nav-tabs" id="myTab" role="tablist" style="padding: 20px 30px";>

                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">PROFILE</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">SECURITY</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="sum-tab" data-toggle="tab" href="#sum" role="tab" aria-controls="sum" aria-selected="false">Summary</a>
                            </li>


                        </ul>
                        <div class="tab-content" id="myTabContent" style="padding: 20px 30px";>
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">


                                <form method="POST" id="home" action="{{route('myprofile.update',auth()->user()->id)}}" enctype="multipart/form-data"">
                                @csrf
                                @method('PUT')
                                <div class="row ">
                                    <div class="col-sm-12">
                                        
                                        <div class="form-group">
                                            <div class="form-line">
                                                <label> Name</label>
                                                <input type="text"value="{{$data->name != null ? $data->name : 'N/a'}}" name="name"  id="name" class="form-control" placeholder="Full Name" readonly>                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <label> Email</label>
                                                <input type="email" value="{{$data->email != null ? $data->email : 'N/a'}}"  name="email" id="email" class="form-control" placeholder="Email" readonly>

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <label> cell number</label>
                                                <input type="text" value="{{$data->cell_number != null ? $data->cell_number : 'N/a'}}" name="country" id="country" class="form-control" placeholder="Country" readonly>                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-line">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <label> Alternative number</label>
                                                <input type="text" value="{{$data->alternative_number != null ? $data->alternative_number : 'N/a'}}" name="country" id="country" class="form-control" placeholder="Country" readonly>                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <label> Address</label>
                                                <input type="varchar"  value="{{$data->address != null ? $data->address : 'N/a'}}" name="address"  id="address" class="form-control" placeholder="Address" readonly>                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <label> Country</label>
                                                <input type="varchar"  value="{{$data->country != null ? $data->country : 'N/a'}}" name="address"  id="address" class="form-control" placeholder="Address" readonly>                                            </div>
                                        </div>
                                        <div>
                                            {{--                                        <button onclick="document.getElementById('profile').submit()" class="btn btn-primary waves-effect"--}}
                                            {{--                                                data-dismiss="modal" data-dismiss="modal">Update</button>--}}
{{--                                            <button type="submit" class="btn btn-primary waves-effect"--}}
{{--                                                    data-dismiss="modal" data-dismiss="modal">Update</button>--}}
                                        </div>
                                    </div>


                                </div>
                                </form>

                            </div>

                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <form method="POST" id="home" action="{{Url('/user-password')}}" enctype="multipart/form-data">
                                    @csrf


                                    <input type="hidden" value="{{$data->id}}" name="user_id" >

                                    <div class="row">
                                        <div class="col-sm-12">
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

                            <div class="tab-pane fade" id="sum" role="tabpanel" aria-labelledby="sum-tab">
                     @include('management/ManageSetting/users/userManagement/summary')
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

