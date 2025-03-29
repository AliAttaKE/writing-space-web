@extends('management.layouts.master')
@section('title')
    Subscription
@endsection
@section('content')





<div class="container">
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <ul class="breadcrumb breadcrumb-style ">
                        <li class="breadcrumb-item">
                            <h4 class="page-title"> Subscriptions</h4>
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
                <form id="" action="{{route('subscriptions.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="row col-md-12">
                     <div class="p-4 col-md-8">
                         <div class="form-group col-md-11">
                             <div class="form-line">
                                 <input type="text" id="erp_question_text"
                                        class="form-control" name="name"
                                        placeholder="Name">
                             </div>
                         </div>
{{--                         <div class="form-group col-md-11">--}}
{{--                             <div class="form-line">--}}
{{--                                 <input type="text" id="erp_question_text"--}}
{{--                                        class="form-control" name="slug"--}}
{{--                                        placeholder="slug">--}}
{{--                             </div>--}}
{{--                         </div>--}}
                         <div class="m-1 col-md-11">
                             <div class="erp_comment_text">
                                 <div class="erp_comment_text">
                                     <label for="email_address1"> Description</label>
                                     <textarea name="description"  class="form-control" id="erp_comment_text" cols="5" rows="5"></textarea>
                                 </div>
                             </div>
                         </div>
                  <div class="row">
                         <div class="m-3 col-md-5">

                             <div class="form-group">
                                 <div class="form-line">
                                     <input type="number" id="erp_question_text"
                                            class="form-control" name="actual_price"
                                            placeholder="Regular Price" min="0">
                                 </div>
                             </div>
                         </div>
                         <div class="m-3 col-md-5">
                             <div class="form-group">
                                 <div class="form-line">
                                     <input type="number" id="erp_question_text"
                                            class="form-control" name="compare_price"
                                            placeholder="Compare price" min="0">
                                 </div>
                             </div>
                         </div>
                    </div>

                         <div class="row">
                             <div class="m-3 col-md-5">
                                 <label for="email_address1">Subscription Duration </label>
                                 <div class="form-group">
                                     <div class="form-line">
                                         <input type="number" id="erp_question_text"
                                                class="form-control" name="duration"
                                                placeholder=" no of days" min="1">
                                     </div>
                                 </div>
                             </div>
                             <div class="p-5 col-md-5">
                                 <select class="form-control select2" name="duration_type" id="Quiz-type" data-placeholder="Select">
                                     <option value="">Select</option>
                                     <option {{ old('duration') == 'days' ? 'Selected' : '' }}  value="days">days</option>
                                     <option {{ old('duration') == 'week' ? 'Selected' : '' }}  value="week">weeks</option>
                                     <option {{ old('duration') == 'month' ? 'Selected' : '' }}  value="month">months</option>
                                     <option {{ old('duration') == 'year' ? 'Selected' : '' }}  value="year"> years</option>
                                 </select>

                             </div>
                         </div>
                         <div class="row">
                             <div class="m-3 col-md-10">
                                 <label for="email_address1"><strong>  Maximum </strong> Number of Pages Allowed to be Purchased by all customer </label>
                                 <div class="form-group">
                                     <div class="form-line">
                                         <input type="number" id="erp_question_text"
                                                class="form-control" name="stock"
                                                placeholder="max no of pages" min="1">
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="row">
                             <div class="m-3 col-md-5">
                                 <label for="email_address1"><strong>  Minimum </strong> Number of Pages Allowed to be Purchased by one customer </label>
                                 <div class="form-group">
                                     <div class="form-line">
                                         <input type="number" id="erp_question_text"
                                                class="form-control" name="min_purchase"
                                                placeholder="min no of pages" min="1">
                                     </div>
                                 </div>
                             </div>
                             <div class="m-3 col-md-5">
                                 <label for="email_address1"> <strong> Maximum </strong> Number of Pages Allowed to be Purchased by one customer</label>
                                 <div class="form-group">
                                     <div class="form-line">
                                         <input type="number" id="erp_question_text"
                                                class="form-control" name="max_purchase"
                                                placeholder="max no of pages" min="1">
                                     </div>
                                 </div>
                             </div>
                         </div>


                     </div>

                    <div class="p-2 col-md-4">

                        <label for="email_address1">Status</label>
                        <div class="row">
                            <div class="col-sm-3 col-lg-3">
                                <div class="form-check form-check-radio">
                                    <label>
                                        <input name="status" class="erp_status" type="radio"  value="1" />
                                        <span>Enable</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-3 col-lg-3">
                                <div class="form-check form-check-radio">
                                    <label>
                                        <input name="status" class="" type="radio" value="0" />
                                        <span>Disable</span>
                                    </label>
                                </div>
                            </div>
                        </div>

{{--                        <label for="email_address1">Categories</label>--}}
{{--                        <div class="file-field input-field">--}}
{{--                            <select class="form-control select2 " id="" name="erp_timetype" data-placeholder="Select">--}}
{{--                                <option value="simple">silver</option>--}}
{{--                                <option value="subscription">Gold </option>--}}
{{--                            </select>--}}
{{--                        </div>--}}


{{--                        <div class="file-field input-field">--}}
{{--                            <div class="btn">--}}
{{--                                <span>File</span>--}}
{{--                                <input name="erp_file" type="file">--}}
{{--                            </div>--}}
{{--                            <div class="file-path-wrapper">--}}
{{--                                <input class="file-path validate" name="erp_file" type="text">--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <div class="col-md-">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number" id="erp_question_text"
                                           class="form-control" name="pages_no"
                                           placeholder="no of pages price" min="0">
                                </div>
                            </div>
                        </div>
                        <div class=" col-md-">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="erp_question_text"
                                           class="form-control" name="price_pp"
                                           placeholder="price per page">
                                </div>
                            </div>
                        </div>
{{--                        <div class=" container d-flex justify-content-center" >--}}
{{--                            @if (in_array($extension = pathinfo($announcements['erp_file'], PATHINFO_EXTENSION), ['jpg', 'png', 'bmp','jpeg','PNG',]))--}}


{{--                                <img style="" src="{{asset('image/announcement'.'/'.$announcements->erp_file)}}" height="200px" width="200px">--}}
{{--                            @elseif($announcements->erp_file == "")--}}

{{--                            @else--}}
{{--                                <i class="fa fa-file fa-3x" aria-hidden="true" height="200px" width="200px"> </i>--}}
{{--                            @endif--}}
{{--                        </div>--}}

{{--                        <label for="email_address1">Product Type</label>--}}
{{--                        <div class="mt-4">--}}
{{--                            <div class="product">--}}
{{--                                <select class="form-control select2 " id="" name="erp_timetype" data-placeholder="Select">--}}
{{--                                    <option value="simple">simple</option>--}}
{{--                                    <option value="subscription">Subscription </option>--}}
{{--                                </select>--}}
{{--                                <div class="mt-4 hid " id="">--}}
{{--                                    <div class="types">--}}
{{--                                        <select class="form-control select2 " id="" name="erp_timetype" data-placeholder="Select">--}}
{{--                                            <option value="simple">Immediate</option>--}}
{{--                                            <option value="subs">Scheduled </option>--}}
{{--                                        </select>--}}

{{--                                        <div class="mt-4 hidden" id="">--}}
{{--                                            <input type="date"  name="Date">--}}
{{--                                        </div>--}}

{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <label for="email_address1">Start Time</label>
                        <div class="mt-4">
                            <div class="products">
                                <select class="form-control select2 " id="" name="start" data-placeholder="Select">
                                    <option value="immediate">immediate</option>
                                    <option value="scheduled">Scheduled </option>
                                </select>
                                <div class="mt-4 hidd" id="">

                                    <label for="email_address1">Select days</label>
                                    <div class="types">
                                        <select class="form-control select2 " id="" name="start_date" data-placeholder="Select">

                                            <option value="1"> 1 </option>
                                            <option value="2"> 2</option>
                                            <option value="3"> 3</option>
                                            <option value="4"> 4 </option>
                                            <option value="5"> 5 </option>
                                            <option value="6"> 6 </option>
                                            <option value="7"> 7 </option>
                                            <option value="8"> 8 </option>
                                            <option value="9"> 9 </option>
                                            <option value="10"> 10 </option>
                                            <option value="11"> 11 </option>
                                            <option value="12"> 12 </option>
                                            <option value="13"> 13 </option>
                                            <option value="14"> 14 </option>
                                            <option value="15"> 15 </option>
                                            <option value="16"> 16 </option>
                                            <option value="17"> 17 </option>
                                            <option value="18"> 18 </option>
                                            <option value="19"> 19 </option>
                                            <option value="20"> 20 </option>
                                            <option value="21"> 21 </option>
                                            <option value="22"> 22 </option>
                                            <option value="23"> 23 </option>
                                            <option value="24"> 24</option>
                                            <option value="25"> 25 </option>
                                            <option value="26"> 26 </option>
                                            <option value="27"> 27 </option>
                                            <option value="28"> 28 </option>
                                            <option value="29"> 29 </option>
                                            <option value="30"> 30 </option>
                                            <option value="31"> 31 </option>



                                        </select>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <input name="product_type" type="hidden" value="subscription">

                       <h3 class="text-right">
                           <div class="mt-3 ml-5 mt-5">

                        <button type="submit" class="btn btn-info waves-effect col-md-1 col-md-4" >
                            Create
                        </button>
                        </div>
                       </h3>
                    </div>

                </div>

                </form>



                </div>

            </div>
        </div>
    </div>
</div>

@endsection

