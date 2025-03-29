@extends('custom_layout.master')
@section('main_content')


<!--begin::App-->
<meta name="csrf-token" content="{{ csrf_token() }}">

<!--begin::Content wrapper-->
<div class="d-flex flex-column flex-column-fluid">
    <!--begin::Toolbar-->
    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
        <!--begin::Toolbar container-->
        <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                <!--begin::Title-->
                <h1 class="page-heading d-flex text-gray-900 fw-bold fs-1 flex-column justify-content-center my-0 fs-color-white custom-fs-23">Update Promotion Offer</h1>
                <!--end::Title-->
            </div>
            <!--end::Page title-->
        </div>
        <!--end::Toolbar container-->
    </div>
    <!--end::Toolbar-->


    <div id="kt_app_content" class="app-content flex-column-fluid ">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-xxl">
            <!--begin::Card-->
            <div class="card card-custom-bg message-summ">
                <!--begin::Card body-->
                <div class="card-body py-4">
                    <form action="{{ route('admin.promotion.update', $promotion->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                <span class="required">Title</span>
                        
                                <span class="ms-1" data-bs-toggle="tooltip" title="Specify your unique app name">
                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span
                                            class="path2"></span><span class="path3"></span></i></span>
                            </label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" class="form-control form-control-lg form-control-solid titlename" name="title" placeholder="Title" value="{{$promotion->title}}" />
                            <!--end::Input-->
                        </div>
                        
                        
                        <div class="mb-3">
                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                <span class="required">Description</span>
                        
                                <span class="ms-1" data-bs-toggle="tooltip" title="Specify your unique app name">
                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span
                                            class="path2"></span><span class="path3"></span></i></span>
                            </label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" class="form-control form-control-lg form-control-solid titlename" id="description"
                                name="description" placeholder="Description" value="{{$promotion->description}}" />
                            <!--end::Input-->
                        </div>
                        
                        <!--begin::Label-->
                        <div class="mb-3">
                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                <span class="required">Coupon</span>
                                {{-- <a href="#" onclick="generate()" style="margin-left: auto">Auto generate Coupon</a> --}}
                                <span class="ms-1" data-bs-toggle="tooltip" title="Specify your unique app name">
                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span
                                            class="path2"></span><span class="path3"></span></i></span>
                            </label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" class="form-control form-control-lg form-control-solid titlename" id="code" name="coupon"
                                placeholder="Code" value="{{$promotion->coupon}}" />
                            <!--end::Input-->
                        </div>
                        
                        
                        <div class="mb-3">
                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                <span class="required">Discount</span>
                                <span class="ms-1" data-bs-toggle="tooltip" title="Specify your unique app name">
                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span
                                            class="path2"></span><span class="path3"></span></i></span>
                            </label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="number" class="form-control form-control-lg form-control-solid titlename" name="discount"
                                 placeholder="Add Discount" value="{{$promotion->discount}}" />
                        
                            <!--end::Input-->
                        </div>
                        
                        <div class="mb-3">
                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                <span class="required">Start Date</span>
                                <span class="ms-1" data-bs-toggle="tooltip" title="Specify your unique app name">
                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span
                                            class="path2"></span><span class="path3"></span></i></span>
                            </label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="date" class="form-control form-control-lg " id="start_date"   name="start_date"
                                placeholder="Start_date" value="{{$promotion->start_date}}" />
                            <!--end::Input-->
                        </div>

                        <div class="mb-3">
                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                <span class="required">End Date</span>
                                <span class="ms-1" data-bs-toggle="tooltip" title="Specify your unique app name">
                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span
                                            class="path2"></span><span class="path3"></span></i></span>
                            </label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="date" class="form-control form-control-lg form-control-solid" id="end_date"   name="end_date"
                                placeholder="End Date" value="{{$promotion->end_date}}"/>
                            <!--end::Input-->
                        </div>

                        {{-- <div id="discount_everyday"></div> --}}
                        @php
                            $discountPerArray = json_decode($promotion->decrease_everyday);
                            $countDays = count($discountPerArray);
                        @endphp
                        @foreach ($discountPerArray as $key => $discount )
                        <div class="mb-3">
                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                <span class="required">Discount Decrease Day-{{$key+1}}</span>
                                <span class="ms-1" data-bs-toggle="tooltip" title="Specify your unique app name">
                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span
                                            class="path2"></span><span class="path3"></span></i></span>
                            </label>
                            <input type="number" class="form-control form-control-lg form-control-solid titlename" name="decrease_everyday[{{$key}}]" value="{{$discount}}"
                                placeholder="Add Discount" />
                        </div>
                        @endforeach
                        {{-- <div class="mb-3">
                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                <span class="required">Discount Decrease EveryDay</span>
                                <span class="ms-1" data-bs-toggle="tooltip" title="Specify your unique app name">
                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span
                                            class="path2"></span><span class="path3"></span></i></span>
                            </label>
                            <input type="number" class="form-control form-control-lg form-control-solid titlename" name="decrease_everyday[]"
                                placeholder="Add Discount" />
                        </div> --}}
                        
                        <div class="mb-3">
                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                <span class="required">Status</span>
                                <span class="ms-1" data-bs-toggle="tooltip" title="Specify your unique app name">
                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span
                                            class="path2"></span><span class="path3"></span></i></span>
                            </label>
                            <select class="form-control form-control-lg form-control-solid titlename" name="status">
                                <option value="Active" {{$promotion->status == 'Active' ? 'selected' : ''}}>Active</option>
                                <option value="InActive" {{$promotion->status == 'InActive' ? 'selected' : ''}}>InActive</option>
                            </select>
                        </div>

                        <div class="mb-3 mt-3">
                            <button type="submit" class="btn btn-sm fw-bold badge-custom-bg">Update</button>
                            <a href="{{route('admin.promotions.index')}}" class="btn btn-sm fw-bold badge-custom-bg">Go Back</a>
                        </div>

                    </form>
                </div>

            </div>

        </div>
    </div>

</div>

<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
    <i class="ki-duotone ki-arrow-up">
        <span class="path1"></span>
        <span class="path2"></span>
    </i>
</div>
@endsection

@section('customJs')
{{-- <script>
    $(document).ready(function()
    {
        var start_date;
        var end_date;

        $('#start_date').change(function() {
            start_date = new Date($(this).val());
            updateDaysDifference();
        });

        $('#end_date').change(function() {
            end_date = new Date($(this).val());
            updateDaysDifference();
        });

        function updateDaysDifference() {
            if (start_date && end_date) {

                $('#discount_everyday').empty();

                var days = [];
                var current_date = new Date(start_date);

                while (current_date <= end_date) 
                {
                    days.push(new Date(current_date));
                    current_date.setDate(current_date.getDate() + 1);
                    var addfileds = '';
                    addfileds =  `<div class="mb-3">
                                <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                    <span class="required">Discount Decrease EveryDay</span>
                                    <span class="ms-1" data-bs-toggle="tooltip" title="Specify your unique app name">
                                        <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span
                                                class="path2"></span><span class="path3"></span></i></span>
                                </label>
                                <input type="number" class="form-control form-control-lg form-control-solid titlename" name="decrease_everyday[]"
                                    placeholder="Add Discount" />
                            </div>`;
                    
                    $('#discount_everyday').append(addfileds);

                }
            }
        }
    });

    function generate() {
        var couponCode = generateRandomCode();
        document.getElementById('code').value = couponCode;
    }

    function generateRandomCode() 
    {
        var characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        var codeLength = 8;
        var couponCode = '';
        for (var i = 0; i < codeLength; i++) {
            var randomIndex = Math.floor(Math.random() * characters.length);
            couponCode += characters.charAt(randomIndex);
        }
        return couponCode;
    }

    function validateDiscount(input) 
    {
        let value = parseInt(input.value);
        if (value < 1) {
            input.value = 1; 
        }

        if (value > 100) {
            input.value = 100;
        }
    }
    
</script> --}}

@endsection
