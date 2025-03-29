@extends('management.layouts.master')
@section('title')
    Customer-Details
@endsection
@section('content')





    <div class="container">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title"> Customer-Details</h4>
                            </li>

                        </ul>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <button type="button" class="btn btn-primary float-right mt-3"> Back
                        </button>
                    </div>

                </div>
                @include('management.layouts.error')

                <div class="card">

                    <div class="row col-md-12">
                        <div class="m-4 col-md-6">
                            <div class="form-group col-md-6">
                                <form action="{{route('users.update',$data->id)}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                    <label for="email_address1">Satus</label>
                                <div class="row">
                                    <div class="col-sm-3 col-lg-6">
                                        <div class="form-check form-check-radio">
                                            <label>
                                                <input {{$data->status == '1' ? 'checked' : ''}} name="status" class="erp_status" type="radio"  value="1" />
                                                <span>Active</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-lg-6">
                                        <div class="form-check form-check-radio">
                                            <label>
                                                <input {{$data->status == '0' ? 'checked' : ''}} name="status" class="erp_status" type="radio" value="0" />
                                                <span>Deactive</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-line">
                                    <label for="email_address1"> Name </label>
                                    <h6> {{$data->name}} </h6>


                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="form-line">
                                    <label for="email_address1"> Email </label>
                                    <h6> {{$data->email}} </h6>


                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="form-line">
                                    <label for="email_address1"> Phone </label>
                                    @if($data->cellnumber != null)
                                    <h6> {{$data->cell_number}} </h6>
                                    @else
                                    <h6> N/A</h6>
                                        @endif


                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="form-line">
                                    <label for="email_address1"> Address </label>
                                    @if($data->address != null)
                                        <h6> {{$data->address}} </h6>
                                    @else
                                        <h6> N/A</h6>
                                    @endif


                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="form-line">
                                    <label for="email_address1"> Country </label>
                                    @if($data->country != null)
                                        <h6> {{$data->country}} </h6>
                                    @else
                                        <h6> N/A</h6>
                                    @endif


                                </div>
                            </div>
                            <h3 class="text-center">
                            <button type="submit" class="btn btn-info waves-effect" >
                                Update
                            </button>
                            </h3>
                        </form>


                                </div>
                            </div>


                        </div>

                    </div>



                    </form>


                </div>

            </div>
        </div>
    </div>
    </div>

@endsection

