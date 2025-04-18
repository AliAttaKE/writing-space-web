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
                <h1 class="page-heading d-flex text-gray-900 fw-bold fs-1 flex-column justify-content-center my-0 fs-color-white custom-fs-23">Coupon</h1>
                <!--end::Title-->

            </div>
            <!--end::Page title-->
            <!--begin::Actions-->
            <div class="d-flex align-items-center gap-2 gap-lg-3">


                <!--begin::Primary button-->
                <a href="#" class="btn btn-sm fw-bold badge-custom-bg" data-bs-toggle="modal" data-bs-target="#kt_modal_academic_order">Coupon</a>
                <!--end::Primary button-->
            </div>
            <!--end::Actions-->
        </div>
        <!--end::Toolbar container-->
    </div>
    <!--end::Toolbar-->
    <!--begin::Content--> @if ($errors->any())
    <div class="alert alert-danger">
        <ul class="list-unstyled">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div id="kt_app_content" class="app-content flex-column-fluid ">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-xxl">
            <div class="d-flex justify-content-center">
                <!--begin::Card-->
                <div class="card col-md-7 cardbody card-custom-bg">
                    <!--begin::Page title-->
                    <div class="page-title d-flex flex-column justify-content-center pt-6 px-6 flex-wrap me-3">
                        <!--begin::Title-->
                        <!--end::Title-->

                    </div>
                    <!--end::Page title-->
                    <!--begin::Card header-->
                    <div class="card-header border-0 pt-6">

                        <!--begin::Card title-->
                        <div class="card-title">
                            <!--begin::Search-->
                            <div class="d-flex align-items-center position-relative my-1">
                                <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-5">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                                <input type="text" data-kt-user-table-filter="search" class="form-control form-control-solid w-250px ps-13 btn-dark-primary" placeholder="Search" />
                            </div>
                            <!--end::Search-->
                        </div>
                        <!--begin::Card title-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body py-4">
                        <!--begin::Table-->
                        <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_new_coupon">
                            <thead>
                                <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                    <!--<th class="w-30px pe-2 pb-8">-->
                                    <!--    <div class="form-check form-check-sm form-check-custom form-check-solid me-3">-->
                                    <!--        <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_table_users .form-check-input" value="1" />-->
                                    <!--    </div>-->
                                    <!--</th>-->
                                    <th class="min-w-80px fw_800 pb-8">Coupon</th>
                                    <th class="min-w-80px fw_800 pb-8">Discount</th>
                                    <th class="min-w-80px fw_800 pb-8">Start Date</th>
                                    <th class="min-w-80px fw_800 pb-8">End Date</th>
                                     <th class="min-w-80px fw_800 pb-8">Status</th>
                                    <th class="min-w-50px fw_800 pb-8">Action</th>

                                </tr>

                            </thead>
                            <tbody class="text-gray-600 fw-semibold">

                                @if($coupons)
                                @foreach ($coupons as $coupon )


                                <tr>
                                    <!--<td>-->
                                    <!--    <div class="form-check form-check-sm form-check-custom form-check-solid">-->
                                    <!--        <input class="form-check-input" type="checkbox" value="1" />-->
                                    <!--    </div>-->
                                    <!--</td>-->
                                    <td class="text-white"> {{ $coupon->code}}</td>
                                    <td class="text-white"> {{ $coupon->discount}}</td>
                                    <td class="text-white"> {{ $coupon->start_date}}</td>
                                    <td class="text-white"> {{ $coupon->end_date}}</td>
                                      <td class="{{ $coupon->Active == 1 ? 'text-success' : 'text-danger' }}">
                                        {{ $coupon->Active == 1 ? 'Active' : 'Inactive' }}
                                    </td>
                                    <td><a href="#" class="btn badge-custom-bg btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4 badge-custom-bg" data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link d-flex justify-content-center px-3 edit1 text-white" data-bs-toggle="modal" data-bs-target="#kt_modal_academic_order_edit">Edit</a>
                                                <input type="hidden" value="{{ $coupon->id}}" id="title_id">
                                                <input type="hidden" value="{{ $coupon->code}}" id="title_name">
                                                <input type="hidden" value="{{ $coupon->discount}}" id="title_discount">
                                                <input type="hidden" value="{{ $coupon->start_date}}" id="title_start">
                                                <input type="hidden" value="{{ $coupon->end_date}}" id="title_end">
                                                <input type="hidden" value="{{ $coupon->discount_value}}" id="discount_value">
                                                <input type="hidden" value="{{ $coupon->per_user_use}}" id="per_user_use">
                                                <input type="hidden" value="{{ $coupon->total_user}}" id="total_user">
                                                <input type="hidden" value="{{ $coupon->min_pages}}" id="min_pages">
                                                 <input type="hidden" value="{{ $coupon->Active}}" id="Active">

                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link d-flex justify-content-center px-3 text-white" onclick="confirmDelete({{ $coupon->id}})">Delete</a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                                @endif


                            </tbody>
                        </table>
                        <!--end::Table-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->
            </div>
            <!--end::Content container-->
        </div>
    </div>
    <!--end::Content-->
</div>
<!--end::Content wrapper-->
<!--begin::Drawers-->
<!--end::Drawers-->
<!--begin::Scrolltop-->
<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
    <i class="ki-duotone ki-arrow-up">
        <span class="path1"></span>
        <span class="path2"></span>
    </i>
</div>
<!--end::Scrolltop-->
<div class="modal fade" id="kt_modal_academic_order" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="{{ route('admin.coupon.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-content badge-custom-bg">
                <div class="modal-header">
                    <h5 class="modal-title fs-color-white custom-fs-23" id="exampleModalLabel">Create Coupon</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!--begin::Label-->
                    <div class="mb-3">
                        <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                            <span class="required fs-color-white custom-fs-13">Code</span>
                            <a href="#" onclick="generate()" style="margin-left: auto" class="">Auto generate Coupon</a>
                            <span class="ms-1" data-bs-toggle="tooltip" title="Specify your unique app name">
                                <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>
                        </label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input type="text" class="form-control form-control-lg btn-dark-primary form-control-solid titlename" id="code" name="code" placeholder="Code" />
                        <!--end::Input-->
                    </div>
                    <div class="mb-3">
                        <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                            <span class="required fs-color-white custom-fs-13">Discount Value</span>
                            <span class="ms-1" data-bs-toggle="tooltip" title="Specify your unique app name">
                                <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>
                        </label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <select class="form-control btn-dark-primary" name='discount_value'>
                            <option selected disabled>Choose Discount Value</option>
                            <option value="Percentage">Percentage</option>
                            <option value="Fixed Amount">Fixed Amount</option>


                        </select>
                        <!--end::Input-->
                    </div>

                    <div class="mb-3">
                        <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                            <span class="required fs-color-white custom-fs-13">Discount</span>
                            <span class="ms-1" data-bs-toggle="tooltip" title="Specify your unique app name">
                                <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>
                        </label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input type="text" class="form-control form-control-lg btn-dark-primary form-control-solid titlename numbers-only1 fix" name="discount" placeholder="Add Discount" />
                        <input type="number" style="display:none" class="form-control form-control-lg btn-dark-primary form-control-solid titlename numbers-only1 persentage" min="1" max="100" name="discount" placeholder="Add Discount" oninput="validateDiscount(this)"  />
                        <!--end::Input-->
                    </div>

                    <div class="mb-3">
                        <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                            <span class="required fs-color-white custom-fs-13">Start Date</span>
                            <span class="ms-1" data-bs-toggle="tooltip" title="Specify your unique app name">
                                <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>
                        </label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input type="date" class="form-control form-control-lg btn-dark-primary form-control-solid titlename" name="start_date" placeholder="Start_date" />
                        <!--end::Input-->
                    </div>
                    <div class="mb-3">
                        <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                            <span class="required fs-color-white custom-fs-13">End Date</span>
                            <span class="ms-1" data-bs-toggle="tooltip" title="Specify your unique app name">
                                <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>
                        </label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input type="date" class="form-control form-control-lg btn-dark-primary form-control-solid titlename" name="end_date" placeholder="End Date" />
                        <!--end::Input-->
                    </div>

                    <div class="mb-3">
                        <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                            <span class="required fs-color-white custom-fs-13">Total Users</span>
                            <span class="ms-1" data-bs-toggle="tooltip" title="Specify your unique app name">
                                <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>
                        </label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input type="text" class="form-control form-control-lg btn-dark-primary form-control-solid numbers-only2 " name="total_user" placeholder="Total use" />
                        <!--end::Input-->

                    </div>

                    <div class="mb-3">
                        <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                            <span class="required fs-color-white custom-fs-13">Per User use</span>
                            <span class="ms-1" data-bs-toggle="tooltip" title="Specify your unique app name">
                                <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>
                        </label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input type="text" class="form-control form-control-lg btn-dark-primary form-control-solid titleset numbers-only3" name="per_user_use" placeholder="Per User use" />
                        <!--end::Input-->
                    </div>
                    
                    <div class="mb-3">
                        <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                            <span class="required fs-color-white custom-fs-13">Minimum Pages</span>
                            <span class="ms-1" data-bs-toggle="tooltip" title="Specify your unique app name">
                                <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>
                        </label>
                        <input type="number" class="form-control form-control-lg btn-dark-primary form-control-solid titleset numbers-only3" name="min_pages" placeholder="Minimum Pages" />
                    </div>


                    <div class="mb-3">
                        <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                            <span class="required fs-color-white custom-fs-13">Visible to Customer</span>
                        </label>
                        <select class="form-control btn-dark-primary" name="Active">
                            <option value="1" selected>Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </div>
                    
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-dark-primary">Save</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="modal fade" id="kt_modal_academic_order_edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content badge-custom-bg">
            <div class="modal-header">
                <h5 class="modal-title fs-color-white custom-fs-23" id="exampleModalLabel">Coupon</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('admin.coupon.update')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
                <!--begin::Label-->
                <div class="mb-3">
                    <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                        <span class="required fs-color-white custom-fs-13">Code</span>
                        <span class="ms-1" data-bs-toggle="tooltip" title="Specify your unique app name">
                            <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>
                    </label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <input type="text" class="form-control form-control-lg btn-dark-primary form-control-solid titleset titlesetclass" name="code" placeholder="Code" value="code" />
                
                    <input type="hidden" class="form-control form-control-lg form-control-solid btn-dark-primary titlesetid " name="titleid" placeholder="" value="" />
                  <!--end::Input-->
                    <div>

                        <div class="mb-3">
                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                <span class="required fs-color-white custom-fs-13">discount</span>
                                <span class="ms-1" data-bs-toggle="tooltip" title="Specify your unique app name">
                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>
                            </label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" class="form-control form-control-lg btn-dark-primary form-control-solid discountset numbers-only4" oninput="validateDiscount(this)"  name="discount" placeholder="Discount" value="discount" />
                            <input type="hidden" class="form-control form-control-lg btn-dark-primary form-control-solid titlesetid" name="titleid" placeholder="Service Type" value="Service Type" />
                            <!--end::Input-->
                            <div>
                                <div class="mb-3">
                                    <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                        <span class="required fs-color-white custom-fs-13">Start_date</span>
                                        <span class="ms-1" data-bs-toggle="tooltip" title="Specify your unique app name">
                                            <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="date" class="form-control form-control-lg btn-dark-primary form-control-solid start_dateset" name="start_date" placeholder="Start_date" value="start_date" />
                                    <input type="hidden" class="form-control form-control-lg form-control-solid btn-dark-primary titlesetid" name="titleid" placeholder="" value=" "/>
                                    <!--end::Input-->
                                    <div>

                                    <div class="mb-3">
                                        <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                            <span class="required fs-color-white custom-fs-13">End_date</span>
                                            <span class="ms-1" data-bs-toggle="tooltip" title="Specify your unique app name">
                                                <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="date" class="form-control form-control-lg btn-dark-primary form-control-solid end_dateset" name="end_date" placeholder="End_date" />
                                        <!--end::Input-->
                                    </div>

                                    <div class="mb-3">
                                        <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                            <span class="required fs-color-white custom-fs-13">Total Users</span>
                                            <span class="ms-1" data-bs-toggle="tooltip" title="Specify your unique app name">
                                                <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" class="form-control form-control-lg btn-dark-primary form-control-solid numbers-only2 total_user" name="total_user" placeholder="Total use" />
                                        <!--end::Input-->
                
                                    </div>
                
                                    <div class="mb-3">
                                        <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                            <span class="required fs-color-white custom-fs-13">Per User use</span>
                                            <span class="ms-1" data-bs-toggle="tooltip" title="Specify your unique app name">
                                                <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" class="form-control form-control-lg btn-dark-primary form-control-solid titleset numbers-only3 per_user_use" name="per_user_use" placeholder="Per User use" />
                                        <!--end::Input-->
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                            <span class="required fs-color-white custom-fs-13">Minimum Pages</span>
                                            <span class="ms-1" data-bs-toggle="tooltip" title="Specify your unique app name">
                                                <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>
                                        </label>
                                        <input type="number" class="form-control form-control-lg btn-dark-primary form-control-solid titleset numbers-only3 min_pages" name="min_pages" placeholder="Minimum Pages" />
                                    </div>
                                    
                                    
                                      <div class="mb-3">
                                        <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                            <span class="required fs-color-white custom-fs-13">Visible to Customer</span>
                                        </label>
                                        <select class="form-control btn-dark-primary active-status-dropdown" name="Active">
                                            <option value="1">Active</option>
                                            <option value="0">Inactive</option>
                                        </select>
                                        
                                    </div>


                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-dark-primary format_changes">Update</button>
                                        </div>


                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        </div>
    </div>
</div>

<!--begin::Javascript-->
@endsection

@section('customJs')


<script>
    // Function to handle table search
    function handleTableSearch() {
        // Get the search input value
        var searchText = $('[data-kt-user-table-filter="search"]').val().toLowerCase();
        console.log(searchText)
        // Loop through each table row
        $('#kt_table_new_coupon tbody tr').each(function() {
            // Check if any cell contains the search text
            console.log(this)
            var rowText = $(this).text().toLowerCase();
            if (rowText.indexOf(searchText) === -1) {
                // Hide the row if it doesn't match the search text
                $(this).hide();
            } else {
                // Show the row if it matches the search text
                $(this).show();
            }
        });
    }

    // Attach the search handler to the input change event
    $('[data-kt-user-table-filter="search"]').on('input', function() {
        handleTableSearch();
    });
</script>
<script>
    $(document).ready(function() {



        $(".edit1").click(function() {
            // Find the common ancestor div for the clicked element
            var container = $(this).closest('.menu-item');
            var title = container.find('#title_name').val();
            var titleId = container.find('#title_id').val();
            var discount = container.find('#title_discount').val();
            var start_date = container.find('#title_start').val();
            var end_date = container.find('#title_end').val();
            var discount_value = container.find('#discount_value').val();
            var per_user_use = container.find('#per_user_use').val();
            var total_user = container.find('#total_user').val();
            var min_pages = container.find('#min_pages').val();
              var activeStatus = container.find('#Active').val();

            $('.titleset').val('');
            $('.titlesetid').val('');
            $('.discountset').val('');
            $('.start_dateset').val('');
            $('.end_dateset').val('');

            $('.discount_value').val('');
            $('.per_user_use').val('');
            $('.total_user').val('');
            $('.min_pages').val('');

         
         

            $('.titleset').val(title);
            $('.titlesetid').val(titleId);
            $('.discountset').val(discount);
            $('.start_dateset').val(start_date);
            $('.end_dateset').val(end_date);

            $('.discount_value').val(discount_value);
            $('.per_user_use').val(per_user_use);
            $('.total_user').val(total_user);
            $('.min_pages').val(min_pages);
               $('.active-status-dropdown').val(activeStatus).trigger('change');

            // Display an alert with the values
            
        });





        // Initialize DataTables
        var table = $('#kt_table_new_coupon').DataTable();

        // Filter form submission
        $('[data-kt-user-table-filter="filter"]').on('click', function(e) {
            e.preventDefault();

            // Get filter values
            var orderId = $('input[name="order-id"]').val();
            var topic = $('input[name="topic"]').val();
            var status = $('input[name="status"]').val();

            // Apply filters
            table.columns(1).search(orderId).draw();
            table.columns(2).search(topic).draw();
            table.columns(6).search(status).draw();
        });

        // Reset filter form
        $('[data-kt-user-table-filter="reset"]').on('click', function(e) {
            e.preventDefault();

            // Reset input fields
            $('input[name="order-id"]').val('');
            $('input[name="topic"]').val('');
            $('input[name="status"]').val('');

            // Clear filters
            table.columns().search('').draw();
        });
    });
</script>

<script>
    function confirmDelete(id) {

        Swal.fire({
            title: 'Are you sure?',
            text: 'You will not be able to recover this data!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {


                $.ajax({
                    type: 'get',
                    // url: '/admin/services/delete/' + id,
                    url: "{{ route('admin.coupon.destroy', ['id' => ':id']) }}".replace(':id', id),

                    data: {
                        id: id
                    }, // Assuming id is a parameter you want to send
                    success: function(response) {
                        // Handle the success response here
                        console.log(response);
                        location.reload(true);
                    },
                    error: function(error) {
                        // Handle any errors here
                        console.error(error);
                    }
                });


                Swal.fire('Deleted!', 'Your data has been deleted.', 'success');
            }
        });
    }
</script>
<!-- Add jQuery library -->




<script>
    var currentStep = 1;

    function updateStepper() {
        // Get all steps
        var steps = document.querySelectorAll('.step');

        // Remove 'current' class from all steps
        steps.forEach(function(step) {
            $(step).find('[data-kt-stepper-element="content"]').removeClass('current');
            $(step).hide();
        });

        // Add 'current' class to the current step
        $(steps[currentStep - 1]).find('[data-kt-stepper-element="content"]').addClass('current');
        $(steps[currentStep - 1]).show();

        const backButton = document.querySelector('#previous');
        const continueButton = document.querySelector('#next');
        const submitButton = document.querySelector('#submit');

        if (currentStep === 1) {
            backButton.style.display = 'none';
            continueButton.style.display = 'block';
            submitButton.style.display = 'none';
        } else if (currentStep < 5) {
            backButton.style.display = 'block';
            continueButton.style.display = 'block';
            submitButton.style.display = 'none';
        } else {
            backButton.style.display = 'block';
            continueButton.style.display = 'none';
            submitButton.style.display = 'block';
        }

    }

    function active_button() {
        var steps = document.querySelectorAll('.step_name');

        // Remove 'current' class from all steps
        steps.forEach(function(step) {
            $(step).find('[data-kt-stepper-element="nav"]').removeClass('current');

        });

        // Add 'current' class to the current step
        $(steps[currentStep - 1]).find('[data-kt-stepper-element="nav"]').addClass('current');

    }
    const continueButton = document.querySelector('#next');
    continueButton.addEventListener("click", function() {
        // Go to the next step (if not already at the last step)
        if (currentStep < 5) {
            currentStep++;
            updateStepper();
            active_button()
        }
    });
    const backButton = document.querySelector('#previous');
    backButton.addEventListener("click", function() {
        if (currentStep > 1) {
            currentStep--;
            updateStepper();
            active_button()
        }
    });
</script>
<script>
    //Reuest Post Data store 

    $(document).ready(function() {
        $('.formatclick').on('click', function() {
            var titlename = $('.titlename').val();



            $.ajax({
                url: '{{ url("admin/coupon/store") }}',
                type: 'POST',
                data: {
                    'title': titlename
                },
                dataType: 'json',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    console.log(response);
                    Swal.fire('Success!', response.success, 'success');
                    location.reload();
                },
                error: function(xhr) {
                    // Handle error response
                    var errors = xhr.responseJSON.errors;

                    if (errors && errors.email) {
                        // Display the validation error message with SweetAlert
                        Swal.fire('Error!', errors.email[0], 'error');
                    } else {
                        // Display a generic error message
                        console.error('Oops! Something went wrong');
                        // Display a generic error message with SweetAlert
                        Swal.fire('Error!', 'Oops! Something went wrong', 'error');
                    }
                }
            });



        });


        //Request Post Edit
        $('.format_changes').on('click', function() {

          
            var title_id = $('.titlesetid').val();
            
            var title_name = $('.titlesetclass').val();
            var title_discount = $('.discountset').val();
            var title_start = $('.start_dateset').val();
            var title_end = $('.end_dateset').val();

          


            $.ajax({
                url: '{{ url("admin/coupon/update") }}',
                type: 'POST',
                data: {
                    'title_id': title_id,
                    'code': title_name,
                    'discount': title_discount,
                    'start_date': title_start,
                    'end_date': title_end,


                },
                dataType: 'json',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    console.log(response);
                    Swal.fire('Success!', response.success, 'success');
                    location.reload();
                    // $('.editmodel').modal('hide');

                    // var targetDiv = $('.cardbody');
                    // var contentUrl = '/admin/servicess'; // Replace with the actual URL

                    // // Use jQuery load to fetch and update the content
                    // targetDiv.load(contentUrl)

                },
                error: function(xhr) {
                    // Handle error response
                    var errors = xhr.responseJSON.errors;

                    if (errors && errors.email) {
                        // Display the validation error message with SweetAlert
                        Swal.fire('Error!', errors.email[0], 'error');
                    } else {
                        // Display a generic error message
                        console.error('Oops! Something went wrong');
                        // Display a generic error message with SweetAlert
                       Swal.fire('Success!', 'Update Data coupon!', 'success');
                    }
                }
            });



        });




    });

    function generate() {
        var couponCode = generateRandomCode();
        document.getElementById('code').value = couponCode;
    }

    function generateRandomCode() {
        // Define characters that can be used in the coupon code
        var characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';

        // Set the length of the coupon code
        var codeLength = 8;

        // Initialize the coupon code
        var couponCode = '';

        // Generate a random code using the specified characters and length
        for (var i = 0; i < codeLength; i++) {
            var randomIndex = Math.floor(Math.random() * characters.length);
            couponCode += characters.charAt(randomIndex);
        }

        return couponCode;
    }
    
       var inputField1 = document.querySelector('.numbers-only1');

inputField1.onkeydown = function(event) {
  
  if(isNaN(event.key) && event.key !== 'Backspace') {
    event.preventDefault();
  }
};
    
    
       var inputField2 = document.querySelector('.numbers-only2');

inputField2.onkeydown = function(event) {
  
  if(isNaN(event.key) && event.key !== 'Backspace') {
    event.preventDefault();
  }
};
    
    
       var inputField3 = document.querySelector('.numbers-only3');

inputField3.onkeydown = function(event) {
  
  if(isNaN(event.key) && event.key !== 'Backspace') {
    event.preventDefault();
  }
};
       var inputField4 = document.querySelector('.numbers-only4');

inputField4.onkeydown = function(event) {
  
  if(isNaN(event.key) && event.key !== 'Backspace') {
    event.preventDefault();
  }
};


var discountDropdown = document.querySelector('select[name="discount_value"]');
var percentageInputs = document.getElementsByClassName('persentage');
var fixedAmountInputs = document.getElementsByClassName('fix');

discountDropdown.addEventListener('change', function() {
    var selectedValue = discountDropdown.value;

    if (selectedValue === 'Percentage') {
        // Show percentage inputs and hide fixed amount inputs
        for (var i = 0; i < percentageInputs.length; i++) {
            percentageInputs[i].style.display = 'block';
        }
        for (var i = 0; i < fixedAmountInputs.length; i++) {
            fixedAmountInputs[i].style.display = 'none';
        }
    } else if (selectedValue === 'Fixed Amount') {
        // Show fixed amount inputs and hide percentage inputs
        for (var i = 0; i < percentageInputs.length; i++) {
            percentageInputs[i].style.display = 'none';
        }
        for (var i = 0; i < fixedAmountInputs.length; i++) {
            fixedAmountInputs[i].style.display = 'block';
        }
    } else {
        // Hide both percentage and fixed amount inputs
        for (var i = 0; i < percentageInputs.length; i++) {
            percentageInputs[i].style.display = 'none';
        }
        for (var i = 0; i < fixedAmountInputs.length; i++) {
            fixedAmountInputs[i].style.display = 'none';
        }
    }
});


 function validateDiscount(input) {
        // Get the entered value and convert it to a number
        let value = parseInt(input.value);

        // Check if the value is less than 1
        if (value < 1) {
            input.value = 1; // Set the value to the minimum allowed value (1)
        }

        // Check if the value is greater than 100
        if (value > 100) {
            input.value = 100; // Set the value to the maximum allowed value (100)
        }
    }




  
</script>








@endsection
<!--begin::Global Javascript Bundle(mandatory for all pages)-->
<!--end::Custom Javascript-->
<!--end::Javascript-->