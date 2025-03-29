@extends('custom_layout.master')
@section('main_content')

<meta name="csrf-token" content="{{ csrf_token() }}">
<style>
   .modal-footer .btn {
    padding: 10px 20px;
    font-size: 16px;
}

.modal-footer {
    border-top: 1px solid #dee2e6;
    padding-top: 20px;
}

.form-group label {
    font-size: 16px;
}

</style>


    <!--begin::App-->
    <!--begin::Content wrapper-->
    <div class="d-flex flex-column flex-column-fluid">
        <!--begin::Toolbar-->
        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <!--begin::Toolbar container-->
            <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                <!--begin::Page title-->
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                    <!--begin::Title-->
                    <h1 class="page-heading d-flex text-gray-900 fw-bold fs-1 flex-column justify-content-center text-color my-0">Place
                        Orders</h1>
                    <!--end::Title-->

                </div>
                <!--end::Page title-->
                <!--begin::Actions-->
                <div class="d-flex align-items-center gap-2 gap-lg-3">

                    <!--begin::Secondary button-->
                    <button class="btn btn-sm fw-bold btn-primary btn-dark-primary badge-custom-bg">Progress All</button>
                    <!--end::Secondary button-->
                    <!--begin::Primary button-->
                    <a href="#" class="btn btn-sm fw-bold btn-primary badge-custom-bg" data-bs-toggle="modal"
                        data-bs-target="#kt_modal_create_placeOrder">Place Order</a>


                    <a href="#" class="btn btn-sm fw-bold btn-primary badge-custom-bg" data-bs-toggle="modal"
                        data-bs-target="#kt_modal_Import_Order">Import Order (.csv)</a>
                    <!--end::Primary button-->
                </div>
                <!--end::Actions-->
            </div>
            <!--end::Toolbar container-->
        </div>
        <!--end::Toolbar-->
        <!--begin::Content-->
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container container-xxl">
                <!--begin::Card-->
                <div class="card">
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
                                <input type="text" data-kt-user-table-filter="search"
                                    class="form-control form-control-solid w-250px ps-13 btn-dark-primary" placeholder="Search" />
                            </div>
                            <!--end::Search-->
                        </div>
                        <!--begin::Card title-->
                        <!--begin::Card toolbar-->
                        <div class="card-toolbar">
                            <!--begin::Toolbar-->
                            <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                                <!--begin::Filter-->
                                <button type="button" class="btn me-3 badge-custom-bg d-none"  data-kt-menu-trigger="click"
                                    data-kt-menu-placement="bottom-end">
                                    <i class="ki-duotone ki-filter fs-2 text-white">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>Filter</button>
                                <!--begin::Menu 1-->
                                <div class="menu menu-sub menu-sub-dropdown w-300px w-md-325px badge-custom-bg" data-kt-menu="true">
                                    <!--begin::Header-->
                                    <div class="px-7 py-5">
                                        <div class="fs-5 fs-color-white custom-fs-23 fw-bold">Filter Options</div>
                                    </div>
                                    <!--end::Header-->
                                    <!--begin::Separator-->
                                    <div class="separator border-gray-200"></div>
                                    <!--end::Separator-->
                                    <form
                                        id="filterForm" 
                                        action="{{ route('admin.placeOrder') }}" 
                                        method="GET"
                                        enctype="multipart/form-data">
                                        <!--begin::Content-->
                                        <div class="px-7 py-5">
                                            <!--begin::Input group-->
                                            <div class="mb-3">
                                                <label class="form-label fs-6 fw-semibold fs-color-white custom-fs-17">Order Id:</label>
                                                <input type="text" placeholder="Order Id" name="order_id" id="field_1"
                                                    value="{{ Request::get('order_id') }}" autocomplete="off"
                                                    class="form-control btn-dark-primary" />
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="mb-3">
                                                <label class="form-label fs-6 fw-semibold fs-color-white custom-fs-17">Topic:</label>
                                                <input type="text" placeholder="Topic" name="topic" id="field_2"
                                                    value="{{ Request::get('topic') }}" autocomplete="off"
                                                    class="form-control btn-dark-primary" />
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="mb-3">
                                                <label class="form-label fs-6 fw-semibold fs-color-white custom-fs-17">Status:</label>
                                                <input type="text" placeholder="Status" name="order_status"
                                                    id="field_3" value="{{ Request::get('order_status') }}"
                                                    autocomplete="off" class="form-control btn-dark-primary" />
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Actions-->
                                            <div class="d-flex justify-content-end">
                                                <button type="reset"
                                                    class="btn btn-dark-primary fw-semibold me-2 px-6 resetFormButton">Reset</button>
                                                <button type="submit"
                                                    class="btn btn-dark-primary fw-semibold px-6">Apply</button>
                                            </div>
                                            <!--end::Actions-->
                                        </div>
                                        <!--end::Content-->
                                    </form>
                                </div>
                                <!--end::Menu 1-->
                                <!--end::Filter-->
                                <!--begin::Export-->
                                <button type="button" class="btn me-3 badge-custom-bg exportOrders" {{-- data-bs-toggle="modal" data-bs-target="#kt_modal_export_users" --}}
                                    onclick="window.location.href='{{ route('admin.export.orders', ['value' => 'Pending']) }}'">
                                    <i class="ki-duotone ki-exit-up fs-2 text-white">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>Export</button>
                                <!--end::Export-->
                            </div>
                            <!--end::Toolbar-->
                            <!--begin::Group actions-->
                            <div class="d-flex justify-content-end align-items-center d-none"
                                data-kt-user-table-toolbar="selected">
                                <div class="fw-bold me-5">
                                    <span class="me-2" data-kt-user-table-select="selected_count"></span>Selected
                                </div>
                                <button type="button" class="btn btn-danger"
                                    data-kt-user-table-select="delete_selected">Delete Selected</button>
                            </div>
                            <!--end::Group actions-->
                            <!--begin::Modal - Adjust Balance-->
                            <div class="modal fade" id="kt_modal_export_users" tabindex="-1" aria-hidden="true">
                                <!--begin::Modal dialog-->
                                <div class="modal-dialog modal-dialog-centered mw-650px ">
                                    <!--begin::Modal content-->
                                    <div class="modal-content">
                                        <!--begin::Modal header-->
                                        <div class="modal-header">
                                            <!--begin::Modal title-->
                                            <h2 class="fw-bold">Export Users</h2>
                                            <!--end::Modal title-->
                                            <!--begin::Close-->
                                            <div class="btn btn-icon btn-sm btn-active-icon-primary"
                                                data-bs-dismiss="modal" aria-label="Close">
                                                <i class="ki-duotone ki-cross fs-1">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </div>
                                            <!--end::Close-->
                                        </div>
                                        <!--end::Modal header-->
                                        <!--begin::Modal body-->
                                        <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                                            <!--begin::Form-->
                                            <form id="kt_modal_export_orders_form" class="form" action="#">
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-10">
                                                    <!--begin::Label-->
                                                    {{-- <label class="fs-6 fw-semibold form-label mb-2">Select Status:</label> --}}
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    {{-- <select name="role" data-control="select2" data-placeholder="Select Status" data-hide-search="true" class="form-select form-select-solid fw-bold">
                                                                    <option></option>
                                                                    <option value="Administrator">Enable</option>
                                                                    <option value="Analyst">Disable</option>
                                                                </select> --}}
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-10">
                                                    <!--begin::Label-->
                                                    <label class="required fs-6 fw-semibold form-label mb-2">Select Export
                                                        Format:</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <select name="format" data-control="select2"
                                                        data-placeholder="Select a format" data-hide-search="true"
                                                        class="form-select form-select-solid fw-bold">
                                                        <option></option>
                                                        <option value="excel">Excel</option>
                                                        <option value="pdf">PDF</option>
                                                        <option value="cvs">CVS</option>
                                                        <option value="zip">ZIP</option>
                                                    </select>
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Actions-->
                                                <div class="text-center">
                                                    <button type="reset" class="btn btn-light me-3"
                                                        data-bs-dismiss="modal">Discard</button>
                                                    <button type="submit" class="btn btn-primary"
                                                        data-kt-users-modal-action="submit">
                                                        <span class="indicator-label">Submit</span>
                                                        <span class="indicator-progress">Please wait...
                                                            <span
                                                                class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                    </button>
                                                </div>
                                                <!--end::Actions-->
                                            </form>
                                            <!--end::Form-->
                                        </div>
                                        <!--end::Modal body-->
                                    </div>
                                    <!--end::Modal content-->
                                </div>
                                <!--end::Modal dialog-->
                            </div>
                            <!--end::Modal - New Card-->
                        </div>
                        <!--end::Card toolbar-->
                    </div>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="list-unstyled">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body py-4">
                        <!--begin::Table-->
                        <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_new_orders">
                            <thead>
                                <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0 custom-style">
                                    {{-- <th class="w-10px pe-2 pb-8">
                                                    <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                                        <input class="form-check-input" type="checkbox" id="selectAll" name="all[]" />
                                                    </div>
                                                </th> --}}
                                    <th class="min-w-90px fw_800 pb-8">order No</th>
                                    <th class="min-w-50px fw_800 pb-8">Subject</th>
                                    <th class="min-w-70px fw_800 pb-8">Pages</th>
                                    <th class="min-w-70px fw_800 pb-8">Order Date</th>
                                    <th class="min-w-80px fw_800 pb-8">Due Date</th>
                                    <th class="min-w-80px fw_800 pb-8">Status</th>
                                    <th class="min-w-50px fw_800 pb-8">Action</th>

                                </tr>

                            </thead>
                            <tbody class="text-gray-600 fw-semibold custom-style">
                                @if ($order)
                                    @foreach ($order as $o)
                                        <tr>
                                            {{-- <td>
                                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="checkbox" id="checkbox_{{$o->id}}" name="checkBox_id[]" data-id="{{$o->id}}"/>
                                                    </div>
                                                </td> --}}
                                            <td><a class="fs-color-yellow"
                                                    href="{{ route('admin.admin-order-detail', [$o->order_id]) }}">{{ $o->order_id }}</a>
                                            </td>
                                            <td class="limit-text">{{ $o->subject }}</td>

                                            <td>{{ $o->number_of_pages }}</td>
                                            <td>{{ \Carbon\Carbon::parse($o->created_at)->format('Y/m/d h:iA') }}</td>
                                            <td>{{ \Carbon\Carbon::parse($o->deadline)->format('Y/m/d h:iA') }}</td>

                                            <td><span
                                                    class="badge badge-light-danger fw-bold me-auto px-4 py-3 badge-custom-bg">{{ $o->order_show }}</span>
                                            </td>
                                            <td><a href="#"
                                                    class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm badge-custom-bg"
                                                    data-kt-menu-trigger="click"
                                                    data-kt-menu-placement="bottom-end">Actions
                                                    <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                                <!--begin::Menu-->
                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4 badge-custom-bg"
                                                    data-kt-menu="true">
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <button type="button"
                                                            class="btn menu-link d-flex justify-content-center fs-7 w-100 text-white"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#view-invoice_{{ $o->id }}">View</button>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#"
                                                            class="menu-link d-flex justify-content-center px-3 text-white"
                                                            onclick="confirmDelete({{ $o->id }})">Delete</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <!--<a href="#" class="menu-link d-flex justify-content-center px-3" download>Download</a>-->

                                                    </div>
                                                    <!--end::Menu item-->
                                                </div>
                                            </td>
                                        </tr>
                                        <div class="modal fade" id="view-invoice_{{ $o->id }}" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                <div class="modal-content badge-custom-bg">
                                                    <div class="modal-header border-0">
                                                        <!-- <h5 class="modal-title" id="exampleModalLabel">Invoice</h5> -->
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="">
                                                            <!--begin::Body-->
                                                            <div class="card-body">
                                                                <!--begin::Layout-->
                                                                <div class="d-flex flex-column flex-xl-row">
                                                                    <!--begin::Content-->
                                                                    <div class="flex-lg-row-fluid me-xl-18 mb-10 mb-xl-0">
                                                                        <!--begin::Invoice 2 content-->
                                                                        <div class="mt-n1">
                                                                            <!--begin::Top-->
                                                                            <div class="d-flex flex-stack pb-10">
                                                                                <!--begin::Logo-->
                                                                                <a href="#">
                                                                                    <img alt="Logo"
                                                                                        src="{{ asset('backend/assets/media/ws/ws-light-logo.png') }}" />
                                                                                </a>
                                                                                <!--end::Logo-->
                                                                            </div>
                                                                            <!--end::Top-->
                                                                            <!--begin::Wrapper-->
                                                                            <div class="m-0">
                                                                                <!--begin::Label-->
                                                                                <div
                                                                                    class="fw-bold fs-3 text-gray-800 mb-8 fs-color-white custom-fs-13">
                                                                                    Order #{{ $o->order_id }}</div>
                                                                                <!--end::Label-->
                                                                                <!--begin::Row-->
                                                                                <div class="row g-5 mb-12">
                                                                                    <!--end::Col-->
                                                                                    <div class="col-md-3">
                                                                                        <!--end::Label-->
                                                                                        <div
                                                                                            class="fw-semibold fs-color-white custom-fs-13 mb-1 ">
                                                                                            Subject:</div>
                                                                                        <!--end::Label-->
                                                                                        <!--end::Text-->
                                                                                        <div
                                                                                            class="fw-bold fs-color-white custom-fs-13">
                                                                                            {{ $o->subject }}</div>
                                                                                        <!--end::Text-->
                                                                                    </div>
                                                                                    <!--end::Col-->
                                                                                    <!--end::Col-->
                                                                                    <div class="col-md-3">
                                                                                        <!--end::Label-->
                                                                                        <div
                                                                                            class="fw-semibold fs-color-white custom-fs-13 mb-1">
                                                                                            Academic level:</div>
                                                                                        <!--end::Label-->
                                                                                        <!--end::Text-->
                                                                                        <div class="fw-bold fs-color-white custom-fs-13">
                                                                                            {{ $o->academic_level }}
                                                                                        </div>
                                                                                        <!--end::Text-->
                                                                                    </div>
                                                                                    <!--end::Col-->
                                                                                    <div class="col-md-3">
                                                                                        <!--end::Label-->
                                                                                        <div
                                                                                            class="fw-semibold fs-color-white custom-fs-13 mb-1">
                                                                                            Type of Paper:</div>
                                                                                        <!--end::Label-->
                                                                                        <!--end::Text-->
                                                                                        <div
                                                                                            class="fw-bold fs-color-white custom-fs-13">
                                                                                            {{ $o->type_of_paper }}</div>
                                                                                        <!--end::Text-->
                                                                                    </div>
                                                                                    <!--end::Col-->
                                                                                    <!--end::Col-->
                                                                                    <div class="col-md-3">
                                                                                        <!--end::Label-->
                                                                                        <div
                                                                                            class="fw-semibold fs-color-white custom-fs-13 mb-1">
                                                                                            Paper Format:</div>
                                                                                        <!--end::Label-->
                                                                                        <!--end::Text-->
                                                                                        <div
                                                                                            class="fw-bold fs-color-white custom-fs-13">
                                                                                            {{ $o->paper_format }}</div>
                                                                                        <!--end::Text-->
                                                                                    </div>
                                                                                    <!--end::Col-->
                                                                                </div>
                                                                                <!--end::Row-->
                                                                                <!--begin::Content-->
                                                                                <div class="row g-5 mb-12">
                                                                                    <!--end::Col-->
                                                                                    <div class="col-md-3">
                                                                                        <!--end::Label-->
                                                                                        <div
                                                                                            class="fw-semibold fs-color-white custom-fs-13 mb-1">
                                                                                            Language and Spelling:</div>
                                                                                        <!--end::Label-->
                                                                                        <!--end::Text-->
                                                                                        <div
                                                                                            class="fw-bold fs-color-white custom-fs-13">
                                                                                            {{ $o->language_spelling }}
                                                                                        </div>
                                                                                        <!--end::Text-->
                                                                                    </div>
                                                                                    <!--end::Col-->
                                                                                    <!--end::Col-->
                                                                                    <div class="col-md-3">
                                                                                        <!--end::Label-->
                                                                                        <div
                                                                                            class="fw-semibold fs-color-white custom-fs-13 mb-1">
                                                                                            Number of pages:</div>
                                                                                        <!--end::Label-->
                                                                                        <!--end::Text-->
                                                                                        <div
                                                                                            class="fw-bold fs-color-white custom-fs-13fs-6 text-gray-800">
                                                                                            {{ $o->number_of_pages }}</div>
                                                                                        <!--end::Text-->
                                                                                    </div>
                                                                                    <!--end::Col-->
                                                                                    <div class="col-md-3">
                                                                                        <!--end::Label-->
                                                                                        <div
                                                                                            class="fw-semibold fs-color-white custom-fs-13 mb-1">
                                                                                            Spacing:</div>
                                                                                        <!--end::Label-->
                                                                                        <!--end::Text-->
                                                                                        <div
                                                                                            class="fw-bold fs-color-white custom-fs-13">
                                                                                            {{ $o->spacing }}</div>
                                                                                        <!--end::Text-->
                                                                                    </div>
                                                                                    <!--end::Col-->
                                                                                    <div class="col-md-3">
                                                                                        <!--end::Label-->
                                                                                        <div
                                                                                            class="fw-semibold fs-color-white custom-fs-13 mb-1">
                                                                                            Power Point Slides:</div>
                                                                                        <!--end::Label-->
                                                                                        <!--end::Text-->
                                                                                        <div
                                                                                            class="fw-bold fs-color-white custom-fs-13">
                                                                                            {{ $o->powerpoint_slide }}
                                                                                        </div>
                                                                                        <!--end::Text-->

                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <!--end::Label-->
                                                                                        <div
                                                                                            class="fw-semibold fs-color-white custom-fs-13fs-7 text-gray-600 mb-1">
                                                                                            No# Extra Sources:</div>
                                                                                        <!--end::Label-->
                                                                                        <!--end::Text-->
                                                                                        <div
                                                                                            class="fw-bold fs-color-white custom-fs-13">
                                                                                            {{ $o->no_of_extra_sources }}
                                                                                        </div>
                                                                                        <!--end::Text-->

                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <!--end::Label-->
                                                                                        <div
                                                                                            class="fw-semibold fs-color-white custom-fs-13 mb-1">
                                                                                            Order Date:</div>
                                                                                        <!--end::Label-->
                                                                                        <!--end::Text-->
                                                                                        <div
                                                                                            class="fw-bold fs-color-white custom-fs-13">
                                                                                            {{ \Carbon\Carbon::parse($o->created_at)->format('Y/m/d h:iA') }}
                                                                                        </div>
                                                                                        <!--end::Text-->

                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <!--end::Label-->
                                                                                        <div
                                                                                            class="fw-semibold fs-color-white custom-fs-13 mb-1">
                                                                                            DeadLine:</div>
                                                                                        <!--end::Label-->
                                                                                        <!--end::Text-->
                                                                                        <div
                                                                                            class="fw-bold fs-color-white custom-fs-13">
                                                                                            {{ \Carbon\Carbon::parse($o->deadline)->format('Y/m/d h:iA') }}
                                                                                        </div>
                                                                                        <!--end::Text-->

                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <!--end::Label-->
                                                                                        <div
                                                                                            class="fw-semibold fs-color-white custom-fs-13 mb-1">
                                                                                            Statistical Analysis:</div>
                                                                                        <!--end::Label-->
                                                                                        <!--end::Text-->
                                                                                        <div
                                                                                            class="fw-bold fs-color-white custom-fs-13">
                                                                                            {{ $o->statistical_analysis }}
                                                                                        </div>
                                                                                        <!--end::Text-->

                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <!--end::Label-->
                                                                                        <div
                                                                                            class="fw-semibold fs-color-white custom-fs-13 mb-1">
                                                                                            Order Type:</div>
                                                                                        <!--end::Label-->
                                                                                        <!--end::Text-->
                                                                                        <div
                                                                                            class="fw-bold fs-color-white custom-fs-13">
                                                                                            {{ $o->order_type }}</div>
                                                                                        <!--end::Text-->

                                                                                    </div>
                                                                                </div>
                                                                                <!--end::Content-->
                                                                                <!--begin::Row-->
                                                                                <div class="row g-5 mb-12">
                                                                                    <!--end::Col-->
                                                                                    <div class="col-sm-9">

                                                                                        <br>
                                                                                        <!--<div class="col-md-12">-->
                                                                                            <!--end::Label-->
                                                                                        <!--    <div-->
                                                                                        <!--        class="fw-semibold fs-7 text-gray-600 mb-1">-->
                                                                                        <!--        Description:</div>-->
                                                                                            <!--end::Label-->
                                                                                            <!--end::Text-->


                                                                                        <!--    <div-->
                                                                                        <!--        class="fw-bold fs-6 text-gray-800">-->
                                                                                        <!--        {{$o->description}}-->
                                                                                        <!--    </div>-->

                                                                                            <!--end::Text-->
                                                                                        <!--</div>-->
                                                                                        <br>


                                                                                    </div>
                                                                                </div>
                                                                                <!--end::Row-->
                                                                            </div>
                                                                            <!--end::Wrapper-->
                                                                        </div>
                                                                        <!--end::Invoice 2 content-->
                                                                    </div>
                                                                    <!--end::Content-->

                                                                </div>
                                                                <!--end::Layout-->
                                                            </div>
                                                            <!--end::Body-->
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer border-0 justify-content-between">
                                                        <div class="">
                                                            <button type="button" class="btn btn-dark-primary"
                                                                data-bs-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
    <!--begin::Modal - Create App-->
    <div class="modal fade" id="kt_modal_create_placeOrder" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-900px">
            <!--begin::Modal content-->
            <div class="modal-content badge-custom-bg">
                <!--begin::Modal header-->
                <div class="modal-header">
                    <!--begin::Modal title-->
                    <h2 class="fs-color-white custom-fs-23">Place Order</h2>
                    <!--end::Modal title-->
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Modal header-->
                <!--begin::Modal body-->
                <div class="modal-body py-lg-10 px-lg-10">
                    <!--begin::Stepper-->
                    <div class="stepper stepper-pills stepper-column d-flex flex-column flex-xl-row flex-row-fluid"
                        id="kt_modal_create_app_stepper">
                        <!--begin::Aside-->
                        <div class="d-flex justify-content-center justify-content-xl-start flex-row-auto w-100 w-xl-300px">
                            <!--begin::Nav-->
                            <div class="stepper-nav ps-lg-10">
                                <!--begin::Step 1-->
                                <div data-kt-stepper-content="true" data-kt-stepper-content-for="stepper-id"
                                    data-kt-stepper-type="step" class='step_name'>
                                    <div class="stepper-item current" data-kt-stepper-element="nav">
                                        <!--begin::Wrapper-->
                                        <div class="stepper-wrapper">
                                            <!--begin::Icon-->
                                            <div class="stepper-icon w-40px h-40px">
                                                <i class="ki-duotone ki-check stepper-check fs-2"></i> <span
                                                    class="stepper-number">1</span>
                                            </div>
                                            <!--end::Icon-->
                                            <!--begin::Label-->
                                            <div class="stepper-label">
                                                <h3 class="stepper-title fs-color-white custom-fs-17">
                                                    Order Basic Info
                                                </h3>
                                            </div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Line-->
                                        <div class="stepper-line h-40px"></div>
                                        <!--end::Line-->
                                    </div>
                                </div>

                                <!--end::Step 1-->
                                <!--begin::Step 2-->
                                <div data-kt-stepper-content="true" data-kt-stepper-content-for="stepper-id"
                                    data-kt-stepper-type="step" class='step_name'>
                                    <div class="stepper-item" data-kt-stepper-element="nav">
                                        <!--begin::Wrapper-->
                                        <div class="stepper-wrapper">
                                            <!--begin::Icon-->
                                            <div class="stepper-icon w-40px h-40px">
                                                <i class="ki-duotone ki-check stepper-check fs-2"></i> <span
                                                    class="stepper-number">2</span>
                                            </div>
                                            <!--begin::Icon-->
                                            <!--begin::Label-->
                                            <div class="stepper-label">
                                                <h3 class="stepper-title fs-color-white custom-fs-17">
                                                    Order Basic Info
                                                </h3>
                                            </div>
                                            <!--begin::Label-->
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Line-->
                                        <div class="stepper-line h-40px"></div>
                                        <!--end::Line-->
                                    </div>
                                </div>

                                <!--end::Step 2-->
                                <!--begin::Step 3-->
                                <div data-kt-stepper-content="true" data-kt-stepper-content-for="stepper-id"
                                    data-kt-stepper-type="step" class='step_name'>
                                    <div class="stepper-item" data-kt-stepper-element="nav">
                                        <!--begin::Wrapper-->
                                        <div class="stepper-wrapper">
                                            <!--begin::Icon-->
                                            <div class="stepper-icon w-40px h-40px">
                                                <i class="ki-duotone ki-check stepper-check fs-2"></i> <span
                                                    class="stepper-number">3</span>
                                            </div>
                                            <!--end::Icon-->
                                            <!--begin::Label-->
                                            <div class="stepper-label">
                                                <h3 class="stepper-title fs-color-white custom-fs-17">
                                                    Order Basic Info
                                                </h3>
                                            </div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Line-->
                                        <div class="stepper-line h-40px"></div>
                                        <!--end::Line-->
                                    </div>
                                </div>

                                <!--end::Step 3-->
                                <!--begin::Step 4-->
                                <div data-kt-stepper-content="true" data-kt-stepper-content-for="stepper-id"
                                    data-kt-stepper-type="step" class='step_name'>
                                    <div class="stepper-item" data-kt-stepper-element="nav">
                                        <!--begin::Wrapper-->
                                        <div class="stepper-wrapper">
                                            <!--begin::Icon-->
                                            <div class="stepper-icon w-40px h-40px">
                                                <i class="ki-duotone ki-check stepper-check fs-2"></i> <span
                                                    class="stepper-number">4</span>
                                            </div>
                                            <!--end::Icon-->
                                            <!--begin::Label-->
                                            <div class="stepper-label">
                                                <h3 class="stepper-title fs-color-white custom-fs-17">
                                                    Billing
                                                </h3>
                                                <div class="stepper-desc fs-color-white custom-fs-13">
                                                    Provide payment details
                                                </div>
                                            </div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Line-->
                                        <div class="stepper-line h-40px"></div>
                                        <!--end::Line-->
                                    </div>
                                </div>
                                <!--end::Step 4-->
                                <!--begin::Step 5-->
                                <div data-kt-stepper-content="true" data-kt-stepper-content-for="stepper-id"
                                    data-kt-stepper-type="step" class='step_name'>
                                    <div class="stepper-item mark-completed" data-kt-stepper-element="nav">
                                        <!--begin::Wrapper-->
                                        <div class="stepper-wrapper">
                                            <!--begin::Icon-->
                                            <div class="stepper-icon w-40px h-40px">
                                                <i class="ki-duotone ki-check stepper-check fs-2"></i> <span
                                                    class="stepper-number">5</span>
                                            </div>
                                            <!--end::Icon-->
                                            <!--begin::Label-->
                                            <div class="stepper-label">
                                                <h3 class="stepper-title fs-color-white custom-fs-17">
                                                    Completed
                                                </h3>
                                                <div class="stepper-desc fs-color-white custom-fs-13">
                                                    Review and Submit
                                                </div>
                                            </div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                </div>
                                <!--end::Step 5-->
                            </div>
                            <!--end::Nav-->
                        </div>
                        <!--begin::Aside-->
                        <!--begin::Content-->
                        <div class="flex-row-fluid py-lg-5 px-lg-15">
                            <!--begin::Form-->
                            <div data-kt-stepper="true">
                                <form class="form" novalidate="novalidate" id="kt_modal_create_app_form"
                                    method='post' action="{{ route('admin.createPlaceOrder') }}">
                                    <!--begin::Step 1-->
                                    @csrf
                                    <div data-kt-stepper-content="true" data-kt-stepper-content-for="stepper-id"
                                        data-kt-stepper-type="step" class='step'>
                                        <!-- ... Step content ... -->

                                        <div class="current" data-kt-stepper-element="content">
                                            <div class="w-100">
                                                <!--begin::heading-->
                                                <div class="d-flex align-items-center fs-3 fw-semibold mb-4">
                                                    <h3 class="fs-color-white custom-fs-17">Order Basic Info</h3><span class="ms-1" data-bs-toggle="tooltip"
                                                        title="Specify your apps framework">
                                                        <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                                                class="path1"></span><span class="path2"></span><span
                                                                class="path3"></span></i></span>
                                                </div>
                                                <!--end::heading-->

                                                <!--begin::Input group-->
                                                <div class="fv-row mb-10">
                                                    <!--begin::Label-->
                                                    <p class="fs-color-white custom-fs-13">Subject or Discipline: "If the required type of paper is missing,
                                                        feel free to pick “Other” and write your specific type of paper in
                                                        the appeared tab.</p>
                                                    <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                        <span class="required fs-color-white custom-fs-17">Subject or Discipline:</span>
                                                        <span class="ms-1" data-bs-toggle="tooltip"
                                                            title="Specify your unique app name">
                                                            <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                                                    class="path1"></span><span
                                                                    class="path2"></span><span
                                                                    class="path3"></span></i></span>
                                                    </label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <select name="subject" id="subject" class="form-select form-select-solid btn-dark-primary"
                                                        data-control="select2" data-hide-search="true"
                                                        data-placeholder="Choose">
                                                        <option value=""></option>
                                                        @if ($subjects)
                                                            @foreach ($subjects as $s)
                                                                <option value="{{ $s->title }}">{{ $s->title }}
                                                                </option>
                                                            @endforeach
                                                        @endif
                                                    </select>
                                                    <!--end::Input-->
                                                    <p id="error_title" class="text-danger"></p>
                                                </div>
                                                
                                                
                                                
                                                <div class="fv-row mb-10">
                                                    <!--begin::Label-->
                                                 
                                                    <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                        <span class="required fs-color-white custom-fs-17">Topic:</span>
                                                        <span class="ms-1" data-bs-toggle="tooltip"
                                                            title="Specify your unique app name">
                                                            <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                                                    class="path1"></span><span
                                                                    class="path2"></span><span
                                                                    class="path3"></span></i></span>
                                                    </label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                   
                                                   
                                                       
                                                       <input type="text" name="topic" id="topic_" class="form-control form-control-lg form-control-solid btn-dark-primary"
                                                       placeholder="Enter title"/>
                                                       <p id="error_topic" class="text-danger"></p>
                                                   
                                                    <!--end::Input-->
                                                </div>
                                                
                                                
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="fv-row row">
                                                    <!--begin::col-->
                                                    <div class="col-12 mb-10">
                                                        <!--begin::Label-->
                                                        <p class="fs-color-white custom-fs-13">
                                                            Paper Instructions: "To ensure that the final paper meets your
                                                            requirements, make sure your instructions are as clear and
                                                            detailed as possible. This will decrease the chance of revisions
                                                            in your order."
                                                        </p>
                                                        <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                            <span class="required fs-color-white custom-fs-17">Message:</span>
                                                            <span class="ms-1" data-bs-toggle="tooltip"
                                                                title="Specify your unique app name">
                                                                <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span><span
                                                                        class="path3"></span></i></span>
                                                        </label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <div class="form-group btn-dark-primary">
                                                            <div id="editor" style="height: 300px; background: transparent;" class="text-white" id="message_"></div>
                                                            <textarea class="text-white" name='mce_0' id="mce_0" style="display: none; color:white !important;" id="message_"></textarea>
                                                            <p id="error_message" class="text-white"></p>
                                                        </div>
                                                        <!--<textarea-ordering-page name='description'></textarea-ordering-page>-->
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::col-->

                                                </div>
                                                <!--end::Input group-->

                                            </div>
                                        </div>
                                        <!--end::Step 1-->

                                    </div>

                                    <div data-kt-stepper-content="true" data-kt-stepper-content-for="stepper-id"
                                        data-kt-stepper-type="step" class='step'>
                                        <!--begin::Step 2-->
                                        <div data-kt-stepper-element="content">
                                            <div class="w-100">

                                                <!--begin::Input group-->
                                                <div class="fv-row">
                                                    <!--begin::heading-->
                                                    <div class="d-flex align-items-center fs-3 fw-semibold mb-4">
                                                        <h3 class="fs-color-white custom-fs-17">Order Basic Info</h3><span class="ms-1"
                                                            data-bs-toggle="tooltip" title="Specify your apps framework">
                                                            <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                                                    class="path1"></span><span
                                                                    class="path2"></span><span
                                                                    class="path3"></span></i></span>
                                                    </div>
                                                    <!--end::heading-->
                                                    <!--begin::Input group-->
                                                    <div class="fv-row row">
                                                        <!--begin::col-->
                                                        <div class="col-m12 mb-10">
                                                            <!--begin::Label-->
                                                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                                <span class="required fs-color-white custom-fs-17">Academic Level</span>
                                                                <span class="ms-1" data-bs-toggle="tooltip"
                                                                    title="Specify your unique app name">
                                                                    <i
                                                                        class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                                                            class="path1"></span><span
                                                                            class="path2"></span><span
                                                                            class="path3"></span></i></span>
                                                            </label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <select name="academic_level" id="academic_level"
                                                                class="form-select form-select-solid btn-dark-primary"
                                                                data-control="select2" data-hide-search="true"
                                                                data-placeholder="Choose">
                                                                <option></option>
                                                                @if ($academic)
                                                                    @foreach ($academic as $s)
                                                                        <option value="{{ $s->title }}">
                                                                            {{ $s->title }}</option>
                                                                    @endforeach
                                                                @endif

                                                            </select>
                                                            <!--end::Input-->
                                                            <p class="fs-color-white custom-fs-13">
                                                                "Please select the option that is the closest to your next
                                                                obtainable degree."
                                                            </p>
                                                            <p id="academic_level_msg" class="text-danger"></p>
                                                        </div>
                                                        <!--end::col-->

                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="fv-row row">
                                                        <!--begin::col-->
                                                        <div class="col-12 mb-10">
                                                            <!--begin::Label-->
                                                            <p class="fs-color-white custom-fs-13">Type of Paper: "If the required type of paper is missing,
                                                                feel free to pick “Other” and write your specific type of
                                                                paper in the appeared tab."</p>
                                                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                                <span class="required fs-color-white custom-fs-17">Type of Paper:</span>
                                                                <span class="ms-1" data-bs-toggle="tooltip"
                                                                    title="Specify your unique app name">
                                                                    <i
                                                                        class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                                                            class="path1"></span><span
                                                                            class="path2"></span><span
                                                                            class="path3"></span></i></span>
                                                            </label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <select name="type_of_paper" id="type_of_paper"
                                                                class="form-select form-select-solid btn-dark-primary"
                                                                data-control="select2" data-hide-search="true"
                                                                data-placeholder="Choose">
                                                                <option></option>
                                                                @if ($term)
                                                                    @foreach ($term as $s)
                                                                        <option value="{{ $s->title }}">
                                                                            {{ $s->title }}</option>
                                                                    @endforeach
                                                                @endif

                                                            </select>
                                                            <!--end::Input-->
                                                            <p id="type_of_paper_msg" class="text-danger"></p>
                                                        </div>
                                                        <!--end::col-->

                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="fv-row row">
                                                        <!--begin::col-->
                                                        <div class="col-12 mb-10">
                                                            <!--begin::Label-->
                                                            <p class="fs-color-white custom-fs-13"><strong>Paper Format:</strong> "Format of your in-text
                                                                citations, references and title page. The format/citation
                                                                style also applies to any Works Cited and/or References
                                                                pages."</p>
                                                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                                <span class="required">Paper Format:</span>
                                                                <span class="ms-1" data-bs-toggle="tooltip"
                                                                    title="Specify your unique app name">
                                                                    <i
                                                                        class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                                                            class="path1"></span><span
                                                                            class="path2"></span><span
                                                                            class="path3"></span></i></span>
                                                            </label>
                                                            <!--end::Label-->
                                                            <!--begin::Input--> 
                                                            <select name="paper_format" id="paper_format"
                                                                class="form-select form-select-solid btn-dark-primary"
                                                                data-control="select2" data-hide-search="true"
                                                                data-placeholder="Choose">
                                                                <option></option>

                                                                @if ($paper_format)
                                                                    @foreach ($paper_format as $p)
                                                                        <option value="{{ $p->title }}">
                                                                            {{ $p->title }}</option>
                                                                    @endforeach
                                                                @endif

                                                            </select>
                                                            <!--end::Input-->
                                                            <p id="paper_format_msg" class="text-danger"></p>

                                                        </div>
                                                        <!--end::col-->

                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="fv-row row">
                                                        <!--begin::col-->
                                                        <div class="col-12 mb-10">
                                                            <!--begin::Label-->
                                                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                                <span class="required fs-color-white custom-fs-17">Language and spelling style:</span>
                                                                <span class="ms-1" data-bs-toggle="tooltip"
                                                                    title="Specify your unique app name">
                                                                    <i
                                                                        class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                                                            class="path1"></span><span
                                                                            class="path2"></span><span
                                                                            class="path3"></span></i></span>
                                                            </label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <select name="language_spelling" id="language_spelling"
                                                                class="form-select form-select-solid fw-bold btn-dark-primary"
                                                                data-kt-select2="true" data-placeholder="Select option"
                                                                data-allow-clear="true" data-kt-user-table-filter="role"
                                                                data-hide-search="true">
                                                                <option></option>
                                                                <option value='British English'>British English</option>
                                                                <option value="American English">American English</option>
                                                            </select>
                                                            <!--end::Input-->
                                                            <p class="fs-color-white custom-fs-13">For Example: color (American) ---- Colour (British)</p>
                                                            <p id="language_spelling_msg" class="text-danger"></p>
                                                        </div>
                                                        <!--end::col-->

                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->

                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="fv-row row">
                                                        <!--begin::col-->
                                                        <div class="col-12 mb-10">
                                                            <!--begin::Label-->
                                                            <p class="fs-color-white custom-fs-13"><strong>Number of Pages:</strong>"Select the number of pages
                                                                needed. Do not include Bibliography, Works Cited, or
                                                                References pages because they are free."</p>
                                                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                                <span class="required fs-color-white custom-fs-17">Number of Pages:</span>
                                                                <span class="ms-1" data-bs-toggle="tooltip"
                                                                    title="Specify your unique app name">
                                                                    <i
                                                                        class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                                                            class="path1"></span><span
                                                                            class="path2"></span><span
                                                                            class="path3"></span></i></span>
                                                            </label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <input type="number"
                                                                class="form-control form-control-lg form-control-solid btn-dark-primary"
                                                                name="number_of_pages" placeholder="10" id="number_of_pages"/>
                                                                <p id="number_of_pages_msg" class="text-danger"></p>
                                                            <!--end::Input-->
                                                        </div>
                                                        <!--end::col-->

                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="fv-row row">
                                                        <!--begin::col-->
                                                        <div class="col-12 mb-10">
                                                            <!--begin::Label-->
                                                            <p class="fs-color-white custom-fs-13">Spacing: “Double spaced pages contain approximately 300 words
                                                                each, while single-spaced have 600.” Spacing:</p>
                                                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                                <span class="required">Spacing:</span>
                                                                <span class="ms-1" data-bs-toggle="tooltip"
                                                                    title="Specify your unique app name">
                                                                    <i
                                                                        class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                                                            class="path1"></span><span
                                                                            class="path2"></span><span
                                                                            class="path3"></span></i></span>
                                                            </label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <select name='spacing' id="spacing"
                                                                class="form-select form-select-solid fw-bold btn-dark-primary"
                                                                data-kt-select2="true" data-placeholder="Select option"
                                                                data-allow-clear="true" data-kt-user-table-filter="role"
                                                                data-hide-search="true">
                                                                <option></option>
                                                                <option value="double">Double</option>
                                                                <option value="single">Single</option>
                                                            </select>
                                                            <!--end::Input-->
                                                            <p id="spacing_msg" class="text-danger"></p>
                                                        </div>
                                                        <!--end::col-->

                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="fv-row row">
                                                        <!--begin::col-->
                                                        <div class="col-12 mb-10">
                                                            <!--begin::Label-->
                                                            <p class="fs-color-white custom-fs-13"><strong>PowerPoint Slides: </strong>"The number of Power
                                                                Point slides that will be delivered to you separately from
                                                                your paper. Useful for those who need to present in front of
                                                                class."</p>
                                                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                                <span class="required fs-color-white custom-fs-17">PowerPoint Slides:</span>
                                                                <span class="ms-1" data-bs-toggle="tooltip"
                                                                    title="Specify your unique app name">
                                                                    <i
                                                                        class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                                                            class="path1"></span><span
                                                                            class="path2"></span><span
                                                                            class="path3"></span></i></span>
                                                            </label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <input type="number"
                                                                class="form-control form-control-lg form-control-solid btn-dark-primary"
                                                                name="powerpoint_slide" placeholder="10" id="powerpoint_slide"
                                                                />
                                                                <p id="powerpoint_slide_msg" class="text-danger"></p>
                                                            <!--end::Input-->
                                                        </div>
                                                        <!--end::col-->

                                                    </div>
                                                    <!--end::Input group-->
                                                </div>
                                                <!--end::Input group-->

                                            </div>
                                        </div>
                                        <!--end::Step 2-->

                                    </div>

                                    <div data-kt-stepper-content="true" data-kt-stepper-content-for="stepper-id"
                                        data-kt-stepper-type="step" class='step'>
                                        <!--begin::Step 3-->
                                        <div data-kt-stepper-element="content">
                                            <div class="w-100">
                                                <!--begin::heading-->
                                                <div class="d-flex align-items-center fs-3 fw-semibold mb-4">
                                                    <h3 class="fs-color-white custom-fs-17">Order Basic Info</h3><span class="ms-1" data-bs-toggle="tooltip"
                                                        title="Specify your apps framework">
                                                        <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                                                class="path1"></span><span class="path2"></span><span
                                                                class="path3"></span></i></span>
                                                </div>
                                                <!--end::heading-->

                                                <!--begin::Input group-->
                                                <div class="fv-row mb-10">
                                                    <!--begin::Label-->
                                                    <p class="mb-3 fs-color-white custom-fs-13">
                                                        <strong>Sources:</strong> "This number of entries will be in your
                                                        reference list or bibliography page.”
                                                    </p>
                                                    <p class="mb-3 fs-color-white custom-fs-13"><strong>FREE SOURCES:</strong> If needed, you may
                                                        request one (1) free source for every one (1) page of text that you
                                                        order. For example, if you order 20 pages of text, you can request
                                                        up to 20 sources for free.”</p>
                                                    <p class="mb-3 fs-color-white custom-fs-13">
                                                        <strong>EXTRA SOURCES:</strong> There is an additional cost of $1
                                                        per each extra source that exceeds the number of pages that you
                                                        order. For example, if you order 10 pages and request 15 sources,
                                                        there will be a total additional cost of $5 for the 5 extra sources.
                                                    </p>
                                                    <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                        <span class="required fs-color-white custom-fs-17">No. of EXTRA SOURCES:</span>
                                                        <span class="ms-1" data-bs-toggle="tooltip"
                                                            title="Specify your unique app name">
                                                            <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                                                    class="path1"></span><span
                                                                    class="path2"></span><span
                                                                    class="path3"></span></i></span>
                                                    </label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="number" id="number_"
                                                        class="form-control form-control-lg form-control-solid btn-dark-primary no_of_extra_sources"
                                                        name="no_of_extra_sources" placeholder="0"
                                                        />
                                                         <p id="number_msg" class="text-danger"></p>
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-10">
                                                    <!--begin::Label-->
                                                    <p class="fs-color-white custom-fs-13"><strong>Deadline:</strong> "The time in which you will receive your
                                                        completed paper. The countdown starts when we receive payment for
                                                        your order. Please note that revision requests may exceed your
                                                        deadline."</p>
                                                    <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                        <span class="required fs-color-white custom-fs-17">Deadline:</span>
                                                        <span class="ms-1" data-bs-toggle="tooltip"
                                                            title="Specify your unique app name">
                                                            <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                                                    class="path1"></span><span
                                                                    class="path2"></span><span
                                                                    class="path3"></span></i></span>
                                                    </label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <select class="form-select form-select-solid fw-bold btn-dark-primary" name='deadline' id="deadline"
                                                        data-kt-select2="true" data-placeholder="Select option"
                                                        data-allow-clear="true" data-kt-user-table-filter="role"
                                                        data-hide-search="true">
                                                        <option></option>
                                                        @if ($deadline)
                                                            @foreach ($deadline as $d)
                                                                @if ($d->title !== '14+ Days')
                                                                    <option value="{{ $d->title }}">
                                                                        {{ $d->title }}</option>
                                                                @else
                                                                    <option value="25 Days">{{ $d->title }}</option>
                                                                @endif
                                                            @endforeach
                                                        @endif


                                                    </select>
                                                    <!--end::Input-->
                                                    <p id="deadline_msg" class="text-danger"></p>
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-10">
                                                    <!--begin::Label-->
                                                    <p class="fs-color-white custom-fs-13"><strong>Statistical Analysis:</strong> If your order requires
                                                        statistical analysis or a significant amount of mathematical
                                                        calculations, there will be an additional charge of 15%. To see a
                                                        list of features that qualify as "statistical analysis,"
                                                        <strong>click here.</strong></p>
                                                    <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                        <span class="required fs-color-white custom-fs-17">Statistical Analysis:</span>
                                                        <span class="ms-1" data-bs-toggle="tooltip"
                                                            title="Specify your unique app name">
                                                            <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                                                    class="path1"></span><span
                                                                    class="path2"></span><span
                                                                    class="path3"></span></i></span>
                                                    </label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <select class="form-select form-select-solid fw-bold btn-dark-primary" id="statistical_analysis"
                                                        name='statistical_analysis' data-kt-select2="true"
                                                        data-placeholder="Select option" data-allow-clear="true"
                                                        data-kt-user-table-filter="role" data-hide-search="true">
                                                        <option></option>
                                                        <option value="yes">Yes</option>
                                                        <option value="no">No</option>
                                                    </select>
                                                    <!--end::Input-->
                                                    <p id="statistical_analysis_msg" class="text-danger"></p>
                                                </div>
                                                <!--end::Input group-->

                                            </div>
                                        </div>
                                        <!--end::Step 3-->
                                    </div>

                                    {{-- <div data-kt-stepper-content="true" data-kt-stepper-content-for="stepper-id" data-kt-stepper-type="step" class='step'>
                                    <!--begin::Step 4-->
                                    <div data-kt-stepper-element="content">
                                        <div class="w-100">
                                            <!--begin::Input group-->
                                            <div class="d-flex flex-column mb-7 fv-row">
                                                <!--begin::Label-->
                                                <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                                    <span class="required fs-color-white custom-fs-17">Name On Card</span>
                                                    <span class="ms-1" data-bs-toggle="tooltip" title="Specify a card holder's name">
                                                        <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>
                                                </label>
                                                <!--end::Label-->
                                                <input type="text" class="form-control form-control-solid btn-dark-primary" placeholder="" name="card_name" value="Max Doe" />
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="d-flex flex-column mb-7 fv-row">
                                                <!--begin::Label-->
                                                <label class="required fs-6 fw-semibold form-label mb-2 fs-color-white custom-fs-17">Card Number</label>
                                                <!--end::Label-->
                                                <!--begin::Input wrapper-->
                                                <div class="position-relative">
                                                    <!--begin::Input-->
                                                    <input type="text" class="form-control form-control-solid btn-dark-primary" placeholder="Enter card number" name="card_number" value="4111 1111 1111 1111" />
                                                    <!--end::Input-->
                                                    <!--begin::Card logos-->
                                                    <div class="position-absolute translate-middle-y top-50 end-0 me-5">
                                                        <img src="assets/media/svg/card-logos/visa.svg" alt="" class="h-25px" />
                                                        <img src="assets/media/svg/card-logos/mastercard.svg" alt="" class="h-25px" />
                                                        <img src="assets/media/svg/card-logos/american-express.svg" alt="" class="h-25px" />
                                                    </div>
                                                    <!--end::Card logos-->
                                                </div>
                                                <!--end::Input wrapper-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="row mb-10">
                                                <!--begin::Col-->
                                                <div class="col-md-8 fv-row">
                                                    <!--begin::Label-->
                                                    <label class="required fs-6 fw-semibold form-label mb-2 fs-color-white custom-fs-17">Expiration Date</label>
                                                    <!--end::Label-->
                                                    <!--begin::Row-->
                                                    <div class="row fv-row">
                                                        <!--begin::Col-->
                                                        <div class="col-6">
                                                            <select name="card_expiry_month" class="form-select form-select-solid btn-dark-primary" data-control="select2" data-hide-search="true" data-placeholder="Month">
                                                                <option></option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                                <option value="7">7</option>
                                                                <option value="8">8</option>
                                                                <option value="9">9</option>
                                                                <option value="10">10</option>
                                                                <option value="11">11</option>
                                                                <option value="12">12</option>
                                                            </select>
                                                        </div>
                                                        <!--end::Col-->
                                                        <!--begin::Col-->
                                                        <div class="col-6">
                                                            <select name="card_expiry_year" class="form-select form-select-solid btn-dark-primary" data-control="select2" data-hide-search="true" data-placeholder="Year">
                                                                <option></option>
                                                                <option value="2023">2023</option>
                                                                <option value="2024">2024</option>
                                                                <option value="2025">2025</option>
                                                                <option value="2026">2026</option>
                                                                <option value="2027">2027</option>
                                                                <option value="2028">2028</option>
                                                                <option value="2029">2029</option>
                                                                <option value="2030">2030</option>
                                                                <option value="2031">2031</option>
                                                                <option value="2032">2032</option>
                                                                <option value="2033">2033</option>
                                                            </select>
                                                        </div>
                                                        <!--end::Col-->
                                                    </div>
                                                    <!--end::Row-->
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-md-4 fv-row">
                                                    <!--begin::Label-->
                                                    <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                                        <span class="required fs-color-white custom-fs-17">CVV</span>
                                                        <span class="ms-1" data-bs-toggle="tooltip" title="Enter a card CVV code">
                                                            <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>
                                                    </label>
                                                    <!--end::Label-->
                                                    <!--begin::Input wrapper-->
                                                    <div class="position-relative">
                                                        <!--begin::Input-->
                                                        <input type="text" class="form-control form-control-solid btn-dark-primary" minlength="3" maxlength="4" placeholder="CVV" name="card_cvv" />
                                                        <!--end::Input-->
                                                        <!--begin::CVV icon-->
                                                        <div class="position-absolute translate-middle-y top-50 end-0 me-3">
                                                            <i class="ki-duotone ki-credit-cart fs-2hx"><span class="path1"></span><span class="path2"></span></i>
                                                        </div>
                                                        <!--end::CVV icon-->
                                                    </div>
                                                    <!--end::Input wrapper-->
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="d-flex flex-stack">
                                                <!--begin::Label-->
                                                <div class="me-5">
                                                    <label class="fs-6 fw-semibold form-label fs-color-white custom-fs-13">Save Card for further billing?</label>
                                                    <div class="fs-7 fw-semibold fs-color-white custom-fs-13">If you need more info, please check budget planning</div>
                                                </div>
                                                <!--end::Label-->
                                                <!--begin::Switch-->
                                                <label class="form-check form-switch form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="1" checked="checked" />
                                                    <span class="form-check-label fw-semibold text-muted">
                                                        Save Card
                                                    </span>
                                                </label>
                                                <!--end::Switch-->
                                            </div>
                                            <!--end::Input group-->
                                        </div>
                                    </div>
                                    <!--end::Step 4-->
                                </div> --}}

                                    <div data-kt-stepper-content="true" data-kt-stepper-content-for="stepper-id"
                                        data-kt-stepper-type="step" class='step'>
                                        <!--begin::Step 5-->
                                        <div data-kt-stepper-element="content">
                                            <div class="w-100 text-center">
                                                <!--begin::Heading-->
                                                <h1 class="fw-bold text-gray-900 mb-3 fs-color-white custom-fs-23">Congratulations!</h1>
                                                <!--end::Heading-->
                                                <!--begin::Description-->
                                                <div class="text-muted fw-semibold fs-3 fs-color-white custom-fs-17">
                                                    Submited Your Order.
                                                </div>
                                                <!--end::Description-->
                                                <!--begin::Illustration-->
                                                <div class="text-center px-4 py-15">
                                                    <img src="assets/media/illustrations/sketchy-1/9.png" alt=""
                                                        class="mw-100 mh-300px" />
                                                </div>
                                                <!--end::Illustration-->
                                            </div>
                                        </div>
                                        <!--end::Step 5-->
                                    </div>
                                    <!--begin::Actions-->
                                    <div class="d-flex flex-stack pt-10">
                                        <!--begin::Wrapper-->
                                        <div class="me-2">
                                            <button type="button" class="btn btn-lg btn-dark-primary me-3"
                                                id='previous' style='display:none;'>
                                                <i class="ki-duotone ki-arrow-left fs-3 me-1"><span
                                                        class="path1"></span><span class="path2"></span></i> Back
                                            </button>
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Wrapper-->
                                        <div>
                                            <button type="submit" class="btn btn-lg btn-dark-primary" id='submit'
                                                style='display:none;'>
                                                <span class="indicator-label">
                                                    Submit
                                                    <i class="ki-duotone ki-arrow-right fs-3 ms-2 me-0"><span
                                                            class="path1"></span><span class="path2"></span></i> </span>
                                                <span class="indicator-progress">
                                                    Please wait... <span
                                                        class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                                </span>
                                            </button>


                                            <button type="button" class="btn btn-lg btn-dark-primary"
                                                data-kt-stepper-action="next" id='next'>
                                                Continue
                                                <i class="ki-duotone ki-arrow-right fs-3 ms-1 me-0"><span
                                                        class="path1"></span><span class="path2"></span></i> </button>
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Actions-->
                                </form>
                                <!--end::Form-->
                            </div>
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Stepper-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <!--end::Modal - Create App-->



    {{-- shariq --}}

    <div class="modal fade" id="kt_modal_Import_Order" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-900px">
            <!--begin::Modal content-->
            <div class="modal-content badge-custom-bg">
                <!--begin::Modal header-->
                <div class="modal-header">
                    <!--begin::Modal title-->
                    <h2 class="fs-color-white custom-fs-23">Place Order</h2>
                    <!--end::Modal title-->
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Modal header-->
                <!--begin::Modal body-->
                <div class="modal-body py-lg-10 px-lg-10">
                    <!--begin::Stepper-->
                    <div class="stepper stepper-pills stepper-column d-flex flex-column flex-xl-row flex-row-fluid"
                        id="kt_modal_create_app_stepper">
                        <!--begin::Aside-->
                       
                        <!--begin::Aside-->
                        <!--begin::Content-->
                        <div class="flex-row-fluid py-lg-5 px-lg-15">
                            <!--begin::Form-->
                          
                            <form id="importForm" enctype="multipart/form-data">
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="file" class="font-weight-bold">Choose CSV File</label>
                                        <input type="file" name="file" class="form-control" required>
                                    </div>
                                </div>
                            
                                <div class="modal-footer">
                                    <div class="row w-100">
                                        <div class="col-md-6 text-left">
                                            <a target="_blank" href="{{asset('/imporat_file_order.csv')}}" class="btn btn-dark">
                                                <i class="fas fa-download"></i> Download Sample File
                                            </a>
                                        </div>
                                        <div class="col-md-6 text-right">
                                            <button type="button" id="importButton" class="btn btn-primary">
                                                <i class="fas fa-file-import"></i> Import
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            

                                  

                              

                               
                                <!--end::Form-->
                            </div>
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Stepper-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    
@endsection
@section('customJs')

    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

    <script>

        $(document).on('click','.resetFormButton', function (){
              window.location.href = "{{route('admin.placeOrder')}}";
        });
        // Initialize Quill
        var quill = new Quill('#editor', {
            theme: 'snow', // Choose the theme (snow or bubble)
            placeholder: 'Write something...',
            modules: {
                toolbar: [
                    [{
                        'header': [1, 2, 3, 4, 5, false]
                    }],
                    ['bold', 'italic', 'underline', 'strike'],
                    ['link', 'image', 'video'],
                    ['clean']
                ]
            }
        });

        // Update the hidden textarea with Quill content
       var form = document.querySelector('form');
quill.on('text-change', function() {
    // Get Quill content as HTML
    var quillContent = quill.root.innerHTML;
    // Update the hidden textarea with HTML content
    document.querySelector('#mce_0').value = quillContent;
    document.querySelector('#mce_0').innerHTML = quillContent;
});
    </script>


    <script>
        // Function to handle table search
        function handleTableSearch() {
            // Get the search input value
            var searchText = $('[data-kt-user-table-filter="search"]').val().toLowerCase();
            console.log(searchText)
            // Loop through each table row
            $('#kt_table_new_orders tbody tr').each(function() {
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

            // Initialize DataTables
            var table = $('#kt_table_new_orders').DataTable();

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
        document.getElementById('deleteLink').addEventListener('click', function(event) {
            event.preventDefault();

            Swal.fire({
                title: 'First You Have To Disable Row!',
                icon: 'warning',
                customClass: {
                    confirmButton: 'btn btn-danger', // Example: Change confirm button color
                    title: 'text-danger' // Custom class for the title text color
                }
            });
        });
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

                


            } else if (currentStep < 4) {
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

            $(steps[currentStep - 1]).find('[data-kt-stepper-element="nav"]').addClass('current');

        }

        const continueButton = document.querySelector('#next');
        continueButton.addEventListener("click", function() {
            
            var selectElement = document.getElementById('subject');
            var errorMsg = document.getElementById('error_title');

            if (selectElement.value === '') {
                errorMsg.innerText = 'Please select a value';   
                return; 
            } else {
                errorMsg.innerText = ''; 
            }

            var inputTopic = document.getElementById('topic_');    
            var errorMsg = document.getElementById('error_topic');
            if (inputTopic.value === '') {
                errorMsg.innerText = 'Please fill topic';   
                return; 
            }else {
                errorMsg.innerText = ''; 
            }
            
            var textareaValue = document.getElementById('mce_0').value;  
            var errorMsg = document.getElementById('error_message');
            if (textareaValue === '') {
                errorMsg.innerText = 'Please enter a message';
                return;
            } else {
                errorMsg.innerText = ''; 
            }

            

            if(currentStep && currentStep === 2) {

                var selectLevelElement = document.getElementById('academic_level');
                var errorMsg = document.getElementById('academic_level_msg');
                if (selectLevelElement.value === '') {
                    errorMsg.innerText = 'Please select academic level';   
                    return; 
                } else {
                    errorMsg.innerText = ''; 
                }

                var selectLevelElement = document.getElementById('type_of_paper');
                var errorMsg = document.getElementById('type_of_paper_msg');
                if (selectLevelElement.value === '') {
                    errorMsg.innerText = 'Please select type of paper';   
                    return; 
                } else {
                    errorMsg.innerText = ''; 
                }

                var selectLevelElement = document.getElementById('paper_format');
                var errorMsg = document.getElementById('paper_format_msg');
                if (selectLevelElement.value === '') {
                    errorMsg.innerText = 'Please select paper format';   
                    return; 
                } else {
                    errorMsg.innerText = ''; 
                }

                var selectLevelElement = document.getElementById('language_spelling');
                var errorMsg = document.getElementById('language_spelling_msg');
                if (selectLevelElement.value === '') {
                    errorMsg.innerText = 'Please select languague spelling';   
                    return; 
                } else {
                    errorMsg.innerText = ''; 
                }

                var inputTopic = document.getElementById('number_of_pages');    
                var errorMsg = document.getElementById('number_of_pages_msg');
                if (inputTopic.value === '') {
                    errorMsg.innerText = 'Please fill number of pages';   
                    return; 
                }else {
                    errorMsg.innerText = ''; 
                }

                var selectLevelElement = document.getElementById('spacing');
                var errorMsg = document.getElementById('spacing_msg');
                if (selectLevelElement.value === '') {
                    errorMsg.innerText = 'Please select spacing';   
                    return; 
                } else {
                    errorMsg.innerText = ''; 
                }

                

                var inputTopic = document.getElementById('powerpoint_slide');    
                var errorMsg = document.getElementById('powerpoint_slide_msg');
                if (inputTopic.value === '') {
                    errorMsg.innerText = 'Please fill power point slide';   
                    return; 
                }else {
                    errorMsg.innerText = ''; 
                }
                
                
            }
            
            if(currentStep && currentStep === 3) {

                var inputTopic = document.getElementById('number_');    
                var errorMsg = document.getElementById('number_msg');
                if (inputTopic.value === '') {
                    errorMsg.innerText = 'Please fill extra sources';   
                    return; 
                }else {
                    errorMsg.innerText = ''; 
                }
                

                var selectLevelElement = document.getElementById('deadline');
                var errorMsg = document.getElementById('deadline_msg');
                if (selectLevelElement.value === '') {
                    errorMsg.innerText = 'Please select deadline';   
                    return; 
                } else {
                    errorMsg.innerText = ''; 
                }

                var selectLevelElement = document.getElementById('statistical_analysis');
                var errorMsg = document.getElementById('statistical_analysis_msg');
                if (selectLevelElement.value === '') {
                    errorMsg.innerText = 'Please select statistical analysis';   
                    return; 
                } else {
                    errorMsg.innerText = ''; 
                }
            }

           

            if (currentStep < 4) {
                currentStep++;
                updateStepper();
                active_button()
            }


            console.log(`currentStep: ${currentStep}`);

        });
        const backButton = document.querySelector('#previous');
        backButton.addEventListener("click", function() {
            if (currentStep > 1) {
                currentStep--;
                updateStepper();
                active_button()
            }
        });


       




        function confirmDelete(id) {
            console.log(id);
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

                    var url = '{{ route('admin.deletePlaceOrder', ['id' => ':id']) }}';
                    url = url.replace(':id', id);
                    $.ajax({
                        type: 'post',
                        url: url,
                        data: {
                            id: id,
                            _token: '{{ csrf_token() }}'
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




        $('#number_of_pages').on('input', function() {
    var number_of_pages = $(this).val(); 

   
    var no_of_extra_sourcesww =   $('.no_of_extra_sources').val(number_of_pages); 

});








    </script>



<script>
    $(document).ready(function() {

        $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
        $('#importButton').on('click', function() {
            // Validate file input
            let fileInput = $('input[name="file"]')[0];
            if (fileInput.files.length === 0) {
                Swal.fire({
                    icon: 'error',
                    title: 'Validation Error',
                    text: 'Please select a file to upload.'
                });
                return;
            }

            // Create FormData object
            let formData = new FormData($('#importForm')[0]);

            // Show loader
            // Swal.fire({
            //     title: 'Processing...',
            //     text: 'Please wait while the file is being uploaded.',
            //     allowOutsideClick: false,
            //     didOpen: () => {
            //         Swal.showLoading();
            //     }
            // });


            // Send AJAX request
            $.ajax({
                url: "{{ route('admin.import.data') }}",
                method: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    // Close the loader
                    Swal.close();

                    // Show success message
                    Swal.fire({
                        icon: 'success',
                        title: 'Success',
                        text: 'Data imported successfully.'
                    }).then(() => {
                        // Reload the page after the success message is confirmed
                        location.reload();
                    });
                },
                error: function(xhr) {
                    // Close the loader
                    Swal.close();

                    // Prepare error message
                    let errorMessage = 'An error occurred while importing the data.';
                    if (xhr.responseJSON) {
                        // If there are specific validation errors
                        if (xhr.responseJSON.errors) {
                            errorMessage = '';
                            $.each(xhr.responseJSON.errors, function(key, messages) {
                                // Combine all error messages into a single string
                                errorMessage += messages.join(' ') + ' ';
                            });
                        } else if (xhr.responseJSON.message) {
                            // Generic error message
                            errorMessage = xhr.responseJSON.message;
                        }
                    }

                    // Show error message
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: errorMessage.trim()
                    });
                }
            });
        });
    });
</script>

@endsection
