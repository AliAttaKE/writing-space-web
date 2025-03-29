@extends('customers/Layouts/master')
@section('title')
    referral -  {{config('app.name')}}
@endsection
@section('content')

    <div class="container">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title"> referral</h4>
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
                        <div class="p-4 col-md-8">
                            <div class="form-group col-md-11">
                                <div class="form-line">
                                    <input type="text" id="erp_question_text"
                                           class="form-control" name="name"
                                           placeholder="Enter friends Email">
                                </div>
                            </div>
                            <div class="form-group col-md-11">
                                <div class="form-line">
                                    <input type="text" id="erp_question_text"
                                           class="form-control" name="name"
                                           placeholder="Hi, it is CO, important " >
                                </div>
                            </div>
                            <div class="m-1 col-md-11">
                                <div class="erp_comment_text">
                                    <div class="erp_comment_text">
                                        <label for="email_address1"> Description</label>
                                        <textarea name="description"  class="form-control" id="erp_comment_text" cols="5" rows="5"></textarea>
                                    </div>
                                </div>
                            </div>
                            <h3 class="text-right">
                                                            <div class="mt-5 col-md-11">
                                                                <button type="submit" class="btn btn-info waves-effect col-md-1 col-md-4" >
                                                                    Send Email
                                                                </button>
                                                            </div>
                                                        </h3>
                        </div>

                        <div class="p-2 col-md-4">

                            <label for="email_address1">About</label>

                            <label for="email_address1">You should give your special promo code or your referral link to your friends. Once they use this code or follow your link to place an order with us, you will get % of this order and all their future orders.</label>

                            <label for="email_address1">referral Link</label>
                            <label>
                                <strong>
                                https://opskill.com/supreme/order?ref=190
                                </strong>
                            </label>



                        </div>

                    </div>



                    </form>


                </div>

            </div>
        </div>
    </div>
    </div>
@endsection
