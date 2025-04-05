@extends('custom_layout.master')
@section('main_content')

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
                                <h1 class="page-heading d-flex text-gray-900 fw-bold fs-1 flex-column justify-content-center my-0">Place Orders</h1>
                                <!--end::Title-->

                            </div>
                            <!--end::Page title-->
                            <!--begin::Actions-->
                            <div class="d-flex align-items-center gap-2 gap-lg-3">

                                <!--begin::Secondary button-->
                                <button class="btn btn-sm fw-bold btn-primary">Progress All</button>
                                <!--end::Secondary button-->
                                <!--begin::Primary button-->
                                <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_placeOrder">Place Order</a>
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
                                            <input type="text" data-kt-user-table-filter="search" class="form-control form-control-solid w-250px ps-13" placeholder="Search" />
                                        </div>
                                        <!--end::Search-->
                                    </div>
                                    <!--begin::Card title-->
                                    <!--begin::Card toolbar-->
                                    <div class="card-toolbar">
                                        <!--begin::Toolbar-->
                                        <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                                            <!--begin::Filter-->
                                            <button type="button" class="btn btn-light-primary me-3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                <i class="ki-duotone ki-filter fs-2">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>Filter</button>
                                            <!--begin::Menu 1-->
                                            <div class="menu menu-sub menu-sub-dropdown w-300px w-md-325px" data-kt-menu="true">
                                                <!--begin::Header-->
                                                <div class="px-7 py-5">
                                                    <div class="fs-5 text-gray-900 fw-bold">Filter Options</div>
                                                </div>
                                                <!--end::Header-->
                                                <!--begin::Separator-->
                                                <div class="separator border-gray-200"></div>
                                                <!--end::Separator-->
                                                <!--begin::Content-->
                                                <div class="px-7 py-5" data-kt-user-table-filter="form">
                                                    <!--begin::Input group-->
                                                    <div class="mb-3">
                                                        <label class="form-label fs-6 fw-semibold">Order Id:</label>
                                                        <input type="text" placeholder="Order Id" name="order-id" autocomplete="off" class="form-control bg-transparent" />
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="mb-3">
                                                        <label class="form-label fs-6 fw-semibold">Topic:</label>
                                                        <input type="text" placeholder="Topic" name="topic" autocomplete="off" class="form-control bg-transparent" />
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="mb-3">
                                                        <label class="form-label fs-6 fw-semibold">Status:</label>
                                                        <input type="text" placeholder="Status" name="status" autocomplete="off" class="form-control bg-transparent" />
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Actions-->
                                                    <div class="d-flex justify-content-end">
                                                        <button type="reset" class="btn btn-light btn-active-light-primary fw-semibold me-2 px-6" data-kt-menu-dismiss="true" data-kt-user-table-filter="reset">Reset</button>
                                                        <button type="submit" class="btn btn-primary fw-semibold px-6" data-kt-menu-dismiss="true" data-kt-user-table-filter="filter">Apply</button>
                                                    </div>
                                                    <!--end::Actions-->
                                                </div>
                                                <!--end::Content-->
                                            </div>
                                            <!--end::Menu 1-->
                                            <!--end::Filter-->
                                            <!--begin::Export-->
                                            <button type="button" class="btn btn-light-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_export_users">
                                                <i class="ki-duotone ki-exit-up fs-2">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>Export</button>
                                            <!--end::Export-->
                                        </div>
                                        <!--end::Toolbar-->
                                        <!--begin::Group actions-->
                                        <div class="d-flex justify-content-end align-items-center d-none" data-kt-user-table-toolbar="selected">
                                            <div class="fw-bold me-5">
                                                <span class="me-2" data-kt-user-table-select="selected_count"></span>Selected
                                            </div>
                                            <button type="button" class="btn btn-danger" data-kt-user-table-select="delete_selected">Delete Selected</button>
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
                                                        <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal" aria-label="Close">
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
                                                        <form id="kt_modal_export_users_form" class="form" action="#">
                                                            <!--begin::Input group-->
                                                            <div class="fv-row mb-10">
                                                                <!--begin::Label-->
                                                                <label class="fs-6 fw-semibold form-label mb-2">Select Status:</label>
                                                                <!--end::Label-->
                                                                <!--begin::Input-->
                                                                <select name="role" data-control="select2" data-placeholder="Select Status" data-hide-search="true" class="form-select form-select-solid fw-bold">
                                                                    <option></option>
                                                                    <option value="Administrator">Enable</option>
                                                                    <option value="Analyst">Disable</option>
                                                                </select>
                                                                <!--end::Input-->
                                                            </div>
                                                            <!--end::Input group-->
                                                            <!--begin::Input group-->
                                                            <div class="fv-row mb-10">
                                                                <!--begin::Label-->
                                                                <label class="required fs-6 fw-semibold form-label mb-2">Select Export Format:</label>
                                                                <!--end::Label-->
                                                                <!--begin::Input-->
                                                                <select name="format" data-control="select2" data-placeholder="Select a format" data-hide-search="true" class="form-select form-select-solid fw-bold">
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
                                                                <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">Discard</button>
                                                                <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
                                                                    <span class="indicator-label">Submit</span>
                                                                    <span class="indicator-progress">Please wait...
                                                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
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
                                            <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                                <th class="w-10px pe-2 pb-8">
                                                    <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                                        <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_table_users .form-check-input" value="1" />
                                                    </div>
                                                </th>
                                                <th class="min-w-90px fw_800 pb-8">order No</th>
                                                <th class="min-w-50px fw_800 pb-8">Topic</th>
                                                <th class="min-w-70px fw_800 pb-8">Pages</th>
                                                <th class="min-w-70px fw_800 pb-8">Order Date</th>
                                                <th class="min-w-80px fw_800 pb-8">Due Date</th>
                                                <th class="min-w-80px fw_800 pb-8">Status</th>
                                                <th class="min-w-50px fw_800 pb-8">Action</th>

                                            </tr>

                                        </thead>
                                        <tbody class="text-gray-600 fw-semibold">
                                            @if($order)
                                            @foreach($order as $o)
                                            <tr>
                                                <td>
                                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="checkbox" value="{{$o->id}}" />
                                                    </div>
                                                </td>
                                                <td><a href="order-details.php">{{$o->order_id}}</a></td>
                                                <td class="limit-text">{{$o->subject}}</td>

                                                <td>{{$o->number_of_pages}}</td>
                                                <td>{{ \Carbon\Carbon::parse($o->created_at)->addMonth()->format('d F Y h:iA')  }}</td>
                                                <td>{{ \Carbon\Carbon::parse($o->created_at)->add($o->deadline)->format('Y/m/d h:iA') }}</td>

                                                <td><span class="badge badge-light-danger fw-bold me-auto px-4 py-3">{{$o->order_show}}</span></td>
                                                <td><a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                                        <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                                    <!--begin::Menu-->
                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <button type="button" class="btn menu-link d-flex justify-content-center fs-7 w-100" data-bs-toggle="modal" data-bs-target="#view-invoice_{{$o->id}}">View</button>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link d-flex justify-content-center px-3" onclick="confirmDelete({{$o->id}})">Delete</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="/images/myw3schoolsimage.jpg" class="menu-link d-flex justify-content-center px-3" download>Download</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                </td>
                                            </tr>
                                            <div class="modal fade view-invoice" id="view-invoice_{{$o->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header border-0">
                                                            <h5 class="modal-title" id="exampleModalLabel">Invoice</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                                                                                        <img alt="Logo" src="assets/media/ws/ws-dark-name-logo.png" />
                                                                                    </a>
                                                                                    <!--end::Logo-->
                                                                                </div>
                                                                                <!--end::Top-->
                                                                                <!--begin::Wrapper-->
                                                                                <div class="m-0">
                                                                                    <!--begin::Label-->
                                                                                    <div class="fw-bold fs-3 text-gray-800 mb-8">Order #{{$o->order_id}}</div>
                                                                                    <!--end::Label-->
                                                                                    <!--begin::Row-->
                                                                                    <div class="row g-5 mb-12">
                                                                                        <!--end::Col-->
                                                                                        <div class="col-md-3">
                                                                                            <!--end::Label-->
                                                                                            <div class="fw-semibold fs-7 text-gray-600 mb-1">Subject:</div>
                                                                                            <!--end::Label-->
                                                                                            <!--end::Text-->
                                                                                            <div class="fw-bold fs-6 text-gray-800">{{$o->subject}}</div>
                                                                                            <!--end::Text-->
                                                                                        </div>
                                                                                        <!--end::Col-->
                                                                                        <!--end::Col-->
                                                                                        <div class="col-md-3">
                                                                                            <!--end::Label-->
                                                                                            <div class="fw-semibold fs-7 text-gray-600 mb-1">Academic level:</div>
                                                                                            <!--end::Label-->
                                                                                            <!--end::Text-->
                                                                                            <div class="fw-bold fs-6 text-gray-800">{{$o->academic_level}}</div>
                                                                                            <!--end::Text-->
                                                                                        </div>
                                                                                        <!--end::Col-->
                                                                                        <div class="col-md-3">
                                                                                            <!--end::Label-->
                                                                                            <div class="fw-semibold fs-7 text-gray-600 mb-1">Type of Paper:</div>
                                                                                            <!--end::Label-->
                                                                                            <!--end::Text-->
                                                                                            <div class="fw-bold fs-6 text-gray-800">{{$o->type_of_paper}}</div>
                                                                                            <!--end::Text-->
                                                                                        </div>
                                                                                        <!--end::Col-->
                                                                                        <!--end::Col-->
                                                                                        <div class="col-md-3">
                                                                                            <!--end::Label-->
                                                                                            <div class="fw-semibold fs-7 text-gray-600 mb-1">Paper Format:</div>
                                                                                            <!--end::Label-->
                                                                                            <!--end::Text-->
                                                                                            <div class="fw-bold fs-6 text-gray-800">{{$o->paper_format}}</div>
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
                                                                                            <div class="fw-semibold fs-7 text-gray-600 mb-1">Language and Spelling:</div>
                                                                                            <!--end::Label-->
                                                                                            <!--end::Text-->
                                                                                            <div class="fw-bold fs-6 text-gray-800">{{$o->language_spelling}}</div>
                                                                                            <!--end::Text-->
                                                                                        </div>
                                                                                        <!--end::Col-->
                                                                                        <!--end::Col-->
                                                                                        <div class="col-md-3">
                                                                                            <!--end::Label-->
                                                                                            <div class="fw-semibold fs-7 text-gray-600 mb-1">Number of pages:</div>
                                                                                            <!--end::Label-->
                                                                                            <!--end::Text-->
                                                                                            <div class="fw-bold fs-6 text-gray-800">{{$o->number_of_pages}}</div>
                                                                                            <!--end::Text-->
                                                                                        </div>
                                                                                        <!--end::Col-->
                                                                                        {{-- <div class="col-md-3"> --}}
                                                                                            <!--end::Label-->
                                                                                            {{-- <div class="fw-semibold fs-7 text-gray-600 mb-1">Spacing:</div> --}}
                                                                                            <!--end::Label-->
                                                                                            <!--end::Text-->
                                                                                            {{-- <div class="fw-bold fs-6 text-gray-800">{{$o->spacing}}</div> --}}
                                                                                            <!--end::Text-->
                                                                                        {{-- </div> --}}
                                                                                        <!--end::Col-->
                                                                                        <div class="col-md-3">
                                                                                            <!--end::Label-->
                                                                                            <div class="fw-semibold fs-7 text-gray-600 mb-1">Power Point Slides:</div>
                                                                                            <!--end::Label-->
                                                                                            <!--end::Text-->
                                                                                            <div class="fw-bold fs-6 text-gray-800">{{$o->powerpoint_slide}}</div>
                                                                                            <!--end::Text-->

                                                                                        </div>
                                                                                        <div class="col-md-3">
                                                                                            <!--end::Label-->
                                                                                            <div class="fw-semibold fs-7 text-gray-600 mb-1">Sources:</div>
                                                                                            <!--end::Label-->
                                                                                            <!--end::Text-->
                                                                                            <div class="fw-bold fs-6 text-gray-800">{{$o->no_of_extra_sources}}</div>
                                                                                            <!--end::Text-->

                                                                                        </div>
                                                                                        <div class="col-md-3">
                                                                                            <!--end::Label-->
                                                                                            <div class="fw-semibold fs-7 text-gray-600 mb-1">Order Date:</div>
                                                                                            <!--end::Label-->
                                                                                            <!--end::Text-->
                                                                                            <div class="fw-bold fs-6 text-gray-800"> {{ \Carbon\Carbon::parse($o->created_at)->addMonth()->format('d F Y h:iA')  }}</div>
                                                                                            <!--end::Text-->

                                                                                        </div>
                                                                                        <div class="col-md-3">
                                                                                            <!--end::Label-->
                                                                                            <div class="fw-semibold fs-7 text-gray-600 mb-1">DeadLine:</div>
                                                                                            <!--end::Label-->
                                                                                            <!--end::Text-->
                                                                                            <div class="fw-bold fs-6 text-gray-800">{{ \Carbon\Carbon::parse($o->created_at)->add($o->deadline)->format('Y/m/d h:iA') }}</div>
                                                                                            <!--end::Text-->

                                                                                        </div>
                                                                                        <div class="col-md-3">
                                                                                            <!--end::Label-->
                                                                                            <div class="fw-semibold fs-7 text-gray-600 mb-1">Statistical Analysis:</div>
                                                                                            <!--end::Label-->
                                                                                            <!--end::Text-->
                                                                                            <div class="fw-bold fs-6 text-gray-800">{{$o->statistical_analysis}}</div>
                                                                                            <!--end::Text-->

                                                                                        </div>
                                                                                        <div class="col-md-3">
                                                                                            <!--end::Label-->
                                                                                            <div class="fw-semibold fs-7 text-gray-600 mb-1">Order Type:</div>
                                                                                            <!--end::Label-->
                                                                                            <!--end::Text-->
                                                                                            <div class="fw-bold fs-6 text-gray-800">{{$o->order_type}}</div>
                                                                                            <!--end::Text-->

                                                                                        </div>
                                                                                    </div>
                                                                                    <!--end::Content-->
                                                                                    <!--begin::Row-->
                                                                                    <div class="row g-5 mb-12">
                                                                                        <!--end::Col-->
                                                                                        <div class="col-sm-9">

                                                                                            <br>
                                                                                            <div class="col-md-12">
                                                                                                <!--end::Label-->
                                                                                                <div class="fw-semibold fs-7 text-gray-600 mb-1">Description:</div>
                                                                                                <!--end::Label-->
                                                                                                <!--end::Text-->


                                                                                                <div class="fw-bold fs-6 text-gray-800">{!! $o->description !!}</div>

                                                                                                <!--end::Text-->
                                                                                            </div>
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
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2>Place Order</h2>
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
                <div class="stepper stepper-pills stepper-column d-flex flex-column flex-xl-row flex-row-fluid" id="kt_modal_create_app_stepper">
                    <!--begin::Aside-->
                    <div class="d-flex justify-content-center justify-content-xl-start flex-row-auto w-100 w-xl-300px">
                        <!--begin::Nav-->
                        <div class="stepper-nav ps-lg-10">
                            <!--begin::Step 1-->
                            <div data-kt-stepper-content="true" data-kt-stepper-content-for="stepper-id" data-kt-stepper-type="step" class='step_name'>
                                <div class="stepper-item current" data-kt-stepper-element="nav">
                                    <!--begin::Wrapper-->
                                    <div class="stepper-wrapper">
                                        <!--begin::Icon-->
                                        <div class="stepper-icon w-40px h-40px">
                                            <i class="ki-duotone ki-check stepper-check fs-2"></i> <span class="stepper-number">1</span>
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Label-->
                                        <div class="stepper-label">
                                            <h3 class="stepper-title">
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
                            <div data-kt-stepper-content="true" data-kt-stepper-content-for="stepper-id" data-kt-stepper-type="step" class='step_name'>
                                <div class="stepper-item" data-kt-stepper-element="nav">
                                    <!--begin::Wrapper-->
                                    <div class="stepper-wrapper">
                                        <!--begin::Icon-->
                                        <div class="stepper-icon w-40px h-40px">
                                            <i class="ki-duotone ki-check stepper-check fs-2"></i> <span class="stepper-number">2</span>
                                        </div>
                                        <!--begin::Icon-->
                                        <!--begin::Label-->
                                        <div class="stepper-label">
                                            <h3 class="stepper-title">
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
                            <div data-kt-stepper-content="true" data-kt-stepper-content-for="stepper-id" data-kt-stepper-type="step" class='step_name'>
                                <div class="stepper-item" data-kt-stepper-element="nav">
                                    <!--begin::Wrapper-->
                                    <div class="stepper-wrapper">
                                        <!--begin::Icon-->
                                        <div class="stepper-icon w-40px h-40px">
                                            <i class="ki-duotone ki-check stepper-check fs-2"></i> <span class="stepper-number">3</span>
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Label-->
                                        <div class="stepper-label">
                                            <h3 class="stepper-title">
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
                            <div data-kt-stepper-content="true" data-kt-stepper-content-for="stepper-id" data-kt-stepper-type="step" class='step_name'>
                                <div class="stepper-item" data-kt-stepper-element="nav">
                                    <!--begin::Wrapper-->
                                    <div class="stepper-wrapper">
                                        <!--begin::Icon-->
                                        <div class="stepper-icon w-40px h-40px">
                                            <i class="ki-duotone ki-check stepper-check fs-2"></i> <span class="stepper-number">4</span>
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Label-->
                                        <div class="stepper-label">
                                            <h3 class="stepper-title">
                                                Billing
                                            </h3>
                                            <div class="stepper-desc">
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
                            <div data-kt-stepper-content="true" data-kt-stepper-content-for="stepper-id" data-kt-stepper-type="step" class='step_name'>
                                <div class="stepper-item mark-completed" data-kt-stepper-element="nav">
                                    <!--begin::Wrapper-->
                                    <div class="stepper-wrapper">
                                        <!--begin::Icon-->
                                        <div class="stepper-icon w-40px h-40px">
                                            <i class="ki-duotone ki-check stepper-check fs-2"></i> <span class="stepper-number">5</span>
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Label-->
                                        <div class="stepper-label">
                                            <h3 class="stepper-title">
                                                Completed
                                            </h3>
                                            <div class="stepper-desc">
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
                            <form class="form" novalidate="novalidate" id="kt_modal_create_app_form" method='post' action="{{route('admin.createPlaceOrder')}}">
                                <!--begin::Step 1-->
                                @csrf
                                <div data-kt-stepper-content="true" data-kt-stepper-content-for="stepper-id" data-kt-stepper-type="step" class='step'>
                                    <!-- ... Step content ... -->

                                    <div class="current" data-kt-stepper-element="content">
                                        <div class="w-100">
                                            <!--begin::heading-->
                                            <div class="d-flex align-items-center fs-3 fw-semibold mb-4">
                                                <h3>Order Basic Info</h3><span class="ms-1" data-bs-toggle="tooltip" title="Specify your apps framework">
                                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>
                                            </div>
                                            <!--end::heading-->

                                                <!--begin::Input group-->
                                                <div class="fv-row mb-10">
                                                    <!--begin::Label-->
                                                    <p>Subject or Discipline: "If the required type of paper is missing, feel free to pick “Other” and write your specific type of paper in the appeared tab.</p>
                                                    <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                        <span class="required">Subject or Discipline:</span>
                                                        <span class="ms-1" data-bs-toggle="tooltip" title="Specify your unique app name">
                                                            <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>
                                                    </label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <select name="subject" class="form-select form-select-solid " data-control="select2" data-hide-search="true" data-placeholder="Choose">
                                                        <option></option>
                                                        <option value="Aboriginal Studies">Aboriginal Studies</option>
                                                        <option value="Abortion">Abortion</option>
                                                        <option value="Accounting / Finance (general)">Accounting / Finance (general)</option>
                                                        <option value="Accounting: Corporate Finance">&nbsp;&nbsp;&nbsp;Accounting: Corporate Finance</option>
                                                        <option value="Accounting: Economic History">&nbsp;&nbsp;&nbsp;Accounting: Economic History</option>
                                                        <option value="Accounting: Economic Theory">&nbsp;&nbsp;&nbsp;Accounting: Economic Theory</option>
                                                        <option value="Accounting: Economics">&nbsp;&nbsp;&nbsp;Accounting: Economics</option>
                                                        <option value="Accounting: Intl. Economics">&nbsp;&nbsp;&nbsp;Accounting: Intl. Economics</option>
                                                        <option value="Accounting: Intl. Finance">&nbsp;&nbsp;&nbsp;Accounting: Intl. Finance</option>
                                                        <option value="Accounting: Money / Banking">&nbsp;&nbsp;&nbsp;Accounting: Money / Banking</option>
                                                        <option value="Accounting: Personal Finance">&nbsp;&nbsp;&nbsp;Accounting: Personal Finance</option>
                                                        <option value="Admissions Essays / Letters">Admissions Essays / Letters</option>
                                                        <option value="Advertising">Advertising</option>
                                                        <option value="Aeronautics">Aeronautics</option>
                                                        <option value="Africa / African Studies">Africa / African Studies</option>
                                                        <option value="African-Americans (general)">African-Americans (general)</option>
                                                        <option value="African-Americans: Civil Rights">&nbsp;&nbsp;&nbsp;African-Americans: Civil Rights</option>
                                                        <option value="African-Americans: Historical">&nbsp;&nbsp;&nbsp;African-Americans: Historical</option>
                                                        <option value="African-Americans: Leaders">&nbsp;&nbsp;&nbsp;African-Americans: Leaders</option>
                                                        <option value="African-Americans: Philosophy">&nbsp;&nbsp;&nbsp;African-Americans: Philosophy</option>
                                                        <option value="African-Americans: Politics">&nbsp;&nbsp;&nbsp;African-Americans: Politics</option>
                                                        <option value="African-Americans: Racism">&nbsp;&nbsp;&nbsp;African-Americans: Racism</option>
                                                        <option value="African-Americans: Social Issues">&nbsp;&nbsp;&nbsp;African-Americans: Social Issues</option>
                                                        <option value="African-Americans: Slavery">&nbsp;&nbsp;&nbsp;African-Americans: Slavery</option>
                                                        <option value="Aging">Aging</option>
                                                        <option value="Agriculture">Agriculture</option>
                                                        <option value="American History">American History</option>
                                                        <option value="American Indian Studies">American Indian Studies</option>
                                                        <option value="Anatomy">Anatomy</option>
                                                        <option value="Animals / Animal Rights">Animals / Animal Rights</option>
                                                        <option value="Anthropology">Anthropology</option>
                                                        <option value="Aquaculture">Aquaculture</option>
                                                        <option value="Archaeology">Archaeology</option>
                                                        <option value="Architecture">Architecture</option>
                                                        <option value="Argumentative">Argumentative</option>
                                                        <option value="Art (general)">Art (general)</option>
                                                        <option value="Art: Ancient">&nbsp;&nbsp;&nbsp;Art: Ancient</option>
                                                        <option value="Art: Artists">&nbsp;&nbsp;&nbsp;Art: Artists</option>
                                                        <option value="Art: Design">&nbsp;&nbsp;&nbsp;Art: Design</option>
                                                        <option value="Art: Famous Works">&nbsp;&nbsp;&nbsp;Art: Famous Works</option>
                                                        <option value="Art: Genre">&nbsp;&nbsp;&nbsp;Art: Genre</option>
                                                        <option value="Art: Graphic Arts">&nbsp;&nbsp;&nbsp;Art: Graphic Arts</option>
                                                        <option value="Art: Photographic">&nbsp;&nbsp;&nbsp;Art: Photographic</option>
                                                        <option value="Art: Political Aspects">&nbsp;&nbsp;&nbsp;Art: Political Aspects</option>
                                                        <option value="Art: Social Aspects">&nbsp;&nbsp;&nbsp;Art: Social Aspects</option>
                                                        <option value="Asia / Asian Studies (general)">Asia / Asian Studies (general)</option>
                                                        <option value="Asia: China">&nbsp;&nbsp;&nbsp;Asia: China</option>
                                                        <option value="Asia: India">&nbsp;&nbsp;&nbsp;Asia: India</option>
                                                        <option value="Asia: Japan">&nbsp;&nbsp;&nbsp;Asia: Japan</option>
                                                        <option value="Asia: Korea">&nbsp;&nbsp;&nbsp;Asia: Korea</option>
                                                        <option value="Astronomy">Astronomy</option>
                                                        <option value="Authors">Authors</option>
                                                        <option value="Aviation">Aviation</option>
                                                        <option value="Banking">Banking</option>
                                                        <option value="Biography">Biography</option>
                                                        <option value="Biology">Biology</option>
                                                        <option value="Birth Control">Birth Control</option>
                                                        <option value="Broadcasting">Broadcasting</option>
                                                        <option value="Bureaucracy">Bureaucracy</option>
                                                        <option value="Business (general)">Business (general)</option>
                                                        <option value="Business: Advertising">&nbsp;&nbsp;&nbsp;Business: Advertising</option>
                                                        <option value="Business: Applied Operations">&nbsp;&nbsp;&nbsp;Business: Applied Operations</option>
                                                        <option value="Business: Plans">&nbsp;&nbsp;&nbsp;Business: Plans</option>
                                                        <option value="Business: Theory">&nbsp;&nbsp;&nbsp;Business: Theory</option>
                                                        <option value="Business: Case Studies">&nbsp;&nbsp;&nbsp;Business: Case Studies</option>
                                                        <option value="Business: Companies">&nbsp;&nbsp;&nbsp;Business: Companies</option>
                                                        <option value="Business: Consumer Behavior">&nbsp;&nbsp;&nbsp;Business: Consumer Behavior</option>
                                                        <option value="Business: Ethics">&nbsp;&nbsp;&nbsp;Business: Ethics</option>
                                                        <option value="Business: Human Resources">&nbsp;&nbsp;&nbsp;Business: Human Resources</option>
                                                        <option value="Business: Industries">&nbsp;&nbsp;&nbsp;Business: Industries</option>
                                                        <option value="Business: Information Systems">&nbsp;&nbsp;&nbsp;Business: Information Systems</option>
                                                        <option value="Business: International">&nbsp;&nbsp;&nbsp;Business: International</option>
                                                        <option value="Business: Law">&nbsp;&nbsp;&nbsp;Business: Law</option>
                                                        <option value="Business: Management">&nbsp;&nbsp;&nbsp;Business: Management</option>
                                                        <option value="Business: Management Theory">&nbsp;&nbsp;&nbsp;Business: Management Theory</option>
                                                        <option value="Business: Marketing">&nbsp;&nbsp;&nbsp;Business: Marketing</option>
                                                        <option value="Business: Operations">&nbsp;&nbsp;&nbsp;Business: Operations</option>
                                                        <option value="Business: Small">&nbsp;&nbsp;&nbsp;Business: Small</option>
                                                        <option value="Business: Technical Writing">&nbsp;&nbsp;&nbsp;Business: Technical Writing</option>
                                                        <option value="Canada / Canadian">Canada / Canadian</option>
                                                        <option value="Capital Punishment">Capital Punishment</option>
                                                        <option value="Careers">Careers</option>
                                                        <option value="Caribbean">Caribbean</option>
                                                        <option value="Case Studies">Case Studies</option>
                                                        <option value="Chemistry">Chemistry</option>
                                                        <option value="Child Abuse">Child Abuse</option>
                                                        <option value="Child Care">Child Care</option>
                                                        <option value="Children">Children</option>
                                                        <option value="China / Chinese">China / Chinese</option>
                                                        <option value="Civil War">Civil War</option>
                                                        <option value="Communication (general)">Communication (general)</option>
                                                        <option value="Communication: Journalism">&nbsp;&nbsp;&nbsp;Communication: Journalism</option>
                                                        <option value="Communication: Language">&nbsp;&nbsp;&nbsp;Communication: Language</option>
                                                        <option value="Communication: Media">&nbsp;&nbsp;&nbsp;Communication: Media</option>
                                                        <option value="Communication: Non-verbal">&nbsp;&nbsp;&nbsp;Communication: Non-verbal</option>
                                                        <option value="Communication: Speech">&nbsp;&nbsp;&nbsp;Communication: Speech</option>
                                                        <option value="Communication: Television">&nbsp;&nbsp;&nbsp;Communication: Television</option>
                                                        <option value="Communism">Communism</option>
                                                        <option value="Computer Science">Computer Science</option>
                                                        <option value="Computers (general)">Computers (general)</option>
                                                        <option value="Computers: Industry">&nbsp;&nbsp;&nbsp;Computers: Industry</option>
                                                        <option value="Computers: Technology">&nbsp;&nbsp;&nbsp;Computers: Technology</option>
                                                        <option value="Computers: Connections">&nbsp;&nbsp;&nbsp;Computers: Connections</option>
                                                        <option value="Computers: Hardware">&nbsp;&nbsp;&nbsp;Computers: Hardware</option>
                                                        <option value="Computers: History">&nbsp;&nbsp;&nbsp;Computers: History</option>
                                                        <option value="Computers: Internet">&nbsp;&nbsp;&nbsp;Computers: Internet</option>
                                                        <option value="Computers: Operating Systems">&nbsp;&nbsp;&nbsp;Computers: Operating Systems</option>
                                                        <option value="Computers: Software">&nbsp;&nbsp;&nbsp;Computers: Software</option>
                                                        <option value="Computers: Social Networking">&nbsp;&nbsp;&nbsp;Computers: Social Networking</option>
                                                        <option value="Computers: Wireless">&nbsp;&nbsp;&nbsp;Computers: Wireless</option>
                                                        <option value="Construction">Construction</option>
                                                        <option value="Consumerism">Consumerism</option>
                                                        <option value="Cooking">Cooking</option>
                                                        <option value="Corporal Punishment">Corporal Punishment</option>
                                                        <option value="Corrections / Police (general)">Corrections / Police (general)</option>
                                                        <option value="Corrections: Courts">&nbsp;&nbsp;&nbsp;Corrections: Courts</option>
                                                        <option value="Corrections: Criminal Justice">&nbsp;&nbsp;&nbsp;Corrections: Criminal Justice</option>
                                                        <option value="Corrections: Forensics">&nbsp;&nbsp;&nbsp;Corrections: Forensics</option>
                                                        <option value="Corrections: Intelligence">&nbsp;&nbsp;&nbsp;Corrections: Intelligence</option>
                                                        <option value="Corrections: Juvenile Justice">&nbsp;&nbsp;&nbsp;Corrections: Juvenile Justice</option>
                                                        <option value="Corrections: Law Enforcement">&nbsp;&nbsp;&nbsp;Corrections: Law Enforcement</option>
                                                        <option value="Corrections: Lawyers">&nbsp;&nbsp;&nbsp;Corrections: Lawyers</option>
                                                        <option value="Corrections: Organized Crime">&nbsp;&nbsp;&nbsp;Corrections: Organized Crime</option>
                                                        <option value="Corrections: Police Misconduct">&nbsp;&nbsp;&nbsp;Corrections: Police Misconduct</option>
                                                        <option value="Corrections: Prisons">&nbsp;&nbsp;&nbsp;Corrections: Prisons</option>
                                                        <option value="Corrections: Public Perception">&nbsp;&nbsp;&nbsp;Corrections: Public Perception</option>
                                                        <option value="Corrections: Sentencing">&nbsp;&nbsp;&nbsp;Corrections: Sentencing</option>
                                                        <option value="Cosmetology">Cosmetology</option>
                                                        <option value="Counseling">Counseling</option>
                                                        <option value="Creative Writing">Creative Writing</option>
                                                        <option value="Criminal Justice (general)">Criminal Justice (general)</option>
                                                        <option value="Criminal Justice: Juveniles">&nbsp;&nbsp;&nbsp;Criminal Justice: Juveniles</option>
                                                        <option value="Criminal Justice: Corrections">&nbsp;&nbsp;&nbsp;Criminal Justice: Corrections</option>
                                                        <option value="Criminal Justice: Courts">&nbsp;&nbsp;&nbsp;Criminal Justice: Courts</option>
                                                        <option value="Criminal Justice: Police">&nbsp;&nbsp;&nbsp;Criminal Justice: Police</option>
                                                        <option value="Criminal Justice: Prisons">&nbsp;&nbsp;&nbsp;Criminal Justice: Prisons</option>
                                                        <option value="Criminal Justice: Intelligence">&nbsp;&nbsp;&nbsp;Criminal Justice: Intelligence</option>
                                                        <option value="Criminal Justice: Organized Crime">&nbsp;&nbsp;&nbsp;Criminal Justice: Organized Crime</option>
                                                        <option value="Criminal Justice: Forensics">&nbsp;&nbsp;&nbsp;Criminal Justice: Forensics</option>
                                                        <option value="Criminology">Criminology</option>
                                                        <option value="Cuba">Cuba</option>
                                                        <option value="Culture">Culture</option>
                                                        <option value="Death / Dying (general)">Death / Dying (general)</option>
                                                        <option value="Death: Euthanasia">&nbsp;&nbsp;&nbsp;Death: Euthanasia</option>
                                                        <option value="Death: Suicide">&nbsp;&nbsp;&nbsp;Death: Suicide</option>
                                                        <option value="Death: Elderly">&nbsp;&nbsp;&nbsp;Death: Elderly</option>
                                                        <option value="Death Penalty">Death Penalty</option>
                                                        <option value="Disease">Disease</option>
                                                        <option value="Drama (general)">Drama (general)</option>
                                                        <option value="Drama: American">&nbsp;&nbsp;&nbsp;Drama: American</option>
                                                        <option value="Drama: English">&nbsp;&nbsp;&nbsp;Drama: English</option>
                                                        <option value="Drama: World">&nbsp;&nbsp;&nbsp;Drama: World</option>
                                                        <option value="Drugs / Alcohol">Drugs / Alcohol</option>
                                                        <option value="E-commerce">E-commerce</option>
                                                        <option value="Ecology">Ecology</option>
                                                        <option value="Economics (general)">Economics (general)</option>
                                                        <option value="Economics: Banking">&nbsp;&nbsp;&nbsp;Economics: Banking</option>
                                                        <option value="Economics: Economists">&nbsp;&nbsp;&nbsp;Economics: Economists</option>
                                                        <option value="Economics: Inflation">&nbsp;&nbsp;&nbsp;Economics: Inflation</option>
                                                        <option value="Economics: International Trade">&nbsp;&nbsp;&nbsp;Economics: International Trade</option>
                                                        <option value="Economics: Taxation">&nbsp;&nbsp;&nbsp;Economics: Taxation</option>
                                                        <option value="Education (general)">Education (general)</option>
                                                        <option value="Education: Administration">&nbsp;&nbsp;&nbsp;Education: Administration</option>
                                                        <option value="Education: Classroom Mgmt.">&nbsp;&nbsp;&nbsp;Education: Classroom Mgmt.</option>
                                                        <option value="Education: Coaching">&nbsp;&nbsp;&nbsp;Education: Coaching</option>
                                                        <option value="Education: Computers">&nbsp;&nbsp;&nbsp;Education: Computers</option>
                                                        <option value="Education: Counseling">&nbsp;&nbsp;&nbsp;Education: Counseling</option>
                                                        <option value="Education: Countries">&nbsp;&nbsp;&nbsp;Education: Countries</option>
                                                        <option value="Education: Curriculum">&nbsp;&nbsp;&nbsp;Education: Curriculum</option>
                                                        <option value="Education: Foreign Countries">&nbsp;&nbsp;&nbsp;Education: Foreign Countries</option>
                                                        <option value="Education: Higher Education">&nbsp;&nbsp;&nbsp;Education: Higher Education</option>
                                                        <option value="Education: Homeschooling">&nbsp;&nbsp;&nbsp;Education: Homeschooling</option>
                                                        <option value="Education: Inclusion">&nbsp;&nbsp;&nbsp;Education: Inclusion</option>
                                                        <option value="Education: Mainstreaming">&nbsp;&nbsp;&nbsp;Education: Mainstreaming</option>
                                                        <option value="Education: Mathematics">&nbsp;&nbsp;&nbsp;Education: Mathematics</option>
                                                        <option value="Education: Multiculturalism">&nbsp;&nbsp;&nbsp;Education: Multiculturalism</option>
                                                        <option value="Education: Politics">&nbsp;&nbsp;&nbsp;Education: Politics</option>
                                                        <option value="Education: Physical Education">&nbsp;&nbsp;&nbsp;Education: Physical Education</option>
                                                        <option value="Education: Public vs. Private">&nbsp;&nbsp;&nbsp;Education: Public vs. Private</option>
                                                        <option value="Education: Reading">&nbsp;&nbsp;&nbsp;Education: Reading</option>
                                                        <option value="Education: Social Issues">&nbsp;&nbsp;&nbsp;Education: Social Issues</option>
                                                        <option value="Education: Special Education">&nbsp;&nbsp;&nbsp;Education: Special Education</option>
                                                        <option value="Education: Teaching Methods">&nbsp;&nbsp;&nbsp;Education: Teaching Methods</option>
                                                        <option value="Education: Technology">&nbsp;&nbsp;&nbsp;Education: Technology</option>
                                                        <option value="Education: Theory">&nbsp;&nbsp;&nbsp;Education: Theory</option>
                                                        <option value="Employment">Employment</option>
                                                        <option value="Energy">Energy</option>
                                                        <option value="Engineering">Engineering</option>
                                                        <option value="English Literature">English Literature</option>
                                                        <option value="Environmental Science">Environmental Science</option>
                                                        <option value="Ethics / Morality">Ethics / Morality</option>
                                                        <option value="Evolution">Evolution</option>
                                                        <option value="Exercise">Exercise</option>
                                                        <option value="Family / Marriage">Family / Marriage</option>
                                                        <option value="Feminism / Feminists">Feminism / Feminists</option>
                                                        <option value="Film">Film</option>
                                                        <option value="Finance">Finance</option>
                                                        <option value="First Aid">First Aid</option>
                                                        <option value="Foreign Relations">Foreign Relations</option>
                                                        <option value="Forensics">Forensics</option>
                                                        <option value="France / French">France / French</option>
                                                        <option value="Gay / Lesbian (general)">Gay / Lesbian (general)</option>
                                                        <option value="Gay: Adoption">&nbsp;&nbsp;&nbsp;Gay: Adoption</option>
                                                        <option value="Gay: AIDS">&nbsp;&nbsp;&nbsp;Gay: AIDS</option>
                                                        <option value="Gay: Civil Rights">&nbsp;&nbsp;&nbsp;Gay: Civil Rights</option>
                                                        <option value="Gay: Discrimination">&nbsp;&nbsp;&nbsp;Gay: Discrimination</option>
                                                        <option value="Gay: Equality">&nbsp;&nbsp;&nbsp;Gay: Equality</option>
                                                        <option value="Gay: Homosexuality">&nbsp;&nbsp;&nbsp;Gay: Homosexuality</option>
                                                        <option value="Gay: Marriage">&nbsp;&nbsp;&nbsp;Gay: Marriage</option>
                                                        <option value="Gay: Raising Children">&nbsp;&nbsp;&nbsp;Gay: Raising Children</option>
                                                        <option value="Gay: Sex">&nbsp;&nbsp;&nbsp;Gay: Sex</option>
                                                        <option value="Gender / Sexuality">Gender / Sexuality</option>
                                                        <option value="Genetics">Genetics</option>
                                                        <option value="Geography">Geography</option>
                                                        <option value="Germany / German">Germany / German</option>
                                                        <option value="Gerontology">Gerontology</option>
                                                        <option value="Global Politics (general)">Global Politics (general)</option>
                                                        <option value="Global Politics: Comparative">&nbsp;&nbsp;&nbsp;Global Politics: Comparative</option>
                                                        <option value="Global Politics: World Affairs">&nbsp;&nbsp;&nbsp;Global Politics: World Affairs</option>
                                                        <option value="Globalization">Globalization</option>
                                                        <option value="Government (general)">Government (general)</option>
                                                        <option value="Government: Campaigns">&nbsp;&nbsp;&nbsp;Government: Campaigns</option>
                                                        <option value="Government: Elections">&nbsp;&nbsp;&nbsp;Government: Elections</option>
                                                        <option value="Government: Federal">&nbsp;&nbsp;&nbsp;Government: Federal</option>
                                                        <option value="Government: Fiscal Policy">&nbsp;&nbsp;&nbsp;Government: Fiscal Policy</option>
                                                        <option value="Government: Foreign Policy">&nbsp;&nbsp;&nbsp;Government: Foreign Policy</option>
                                                        <option value="Government: Agencies">&nbsp;&nbsp;&nbsp;Government: Agencies</option>
                                                        <option value="Government: Intl. Relations">&nbsp;&nbsp;&nbsp;Government: Intl. Relations</option>
                                                        <option value="Government: Local">&nbsp;&nbsp;&nbsp;Government: Local</option>
                                                        <option value="Government: Military Agencies">&nbsp;&nbsp;&nbsp;Government: Military Agencies</option>
                                                        <option value="Government: Politicians">&nbsp;&nbsp;&nbsp;Government: Politicians</option>
                                                        <option value="Government: Presidents">&nbsp;&nbsp;&nbsp;Government: Presidents</option>
                                                        <option value="Government: Social Security">&nbsp;&nbsp;&nbsp;Government: Social Security</option>
                                                        <option value="Government: State">&nbsp;&nbsp;&nbsp;Government: State</option>
                                                        <option value="Government: Theory">&nbsp;&nbsp;&nbsp;Government: Theory</option>
                                                        <option value="Government: Welfare">&nbsp;&nbsp;&nbsp;Government: Welfare</option>
                                                        <option value="Graphics / Graphic Design">Graphics / Graphic Design</option>
                                                        <option value="Greek Studies">Greek Studies</option>
                                                        <option value="Health (general)">Health (general)</option>
                                                        <option value="Health: Exercise">&nbsp;&nbsp;&nbsp;Health: Exercise</option>
                                                        <option value="Health: First Aid">&nbsp;&nbsp;&nbsp;Health: First Aid</option>
                                                        <option value="Health: Human Sexuality">&nbsp;&nbsp;&nbsp;Health: Human Sexuality</option>
                                                        <option value="Health: Nursing">&nbsp;&nbsp;&nbsp;Health: Nursing</option>
                                                        <option value="Health: Nutrition">&nbsp;&nbsp;&nbsp;Health: Nutrition</option>
                                                        <option value="Health: Public Health Issues">&nbsp;&nbsp;&nbsp;Health: Public Health Issues</option>
                                                        <option value="Health: Safety">&nbsp;&nbsp;&nbsp;Health: Safety</option>
                                                        <option value="Healthcare">Healthcare</option>
                                                        <option value="Higher Education">Higher Education</option>
                                                        <option value="History (general)">History (general)</option>
                                                        <option value="History: Ancient">&nbsp;&nbsp;&nbsp;History: Ancient</option>
                                                        <option value="History: Asian">&nbsp;&nbsp;&nbsp;History: Asian</option>
                                                        <option value="History: Civil War">&nbsp;&nbsp;&nbsp;History: Civil War</option>
                                                        <option value="History: Colonial America">&nbsp;&nbsp;&nbsp;History: Colonial America</option>
                                                        <option value="History: European">&nbsp;&nbsp;&nbsp;History: European</option>
                                                        <option value="History: Great Britain">&nbsp;&nbsp;&nbsp;History: Great Britain</option>
                                                        <option value="History: Greek / Roman">&nbsp;&nbsp;&nbsp;History: Greek / Roman</option>
                                                        <option value="History: Holocaust Studies">&nbsp;&nbsp;&nbsp;History: Holocaust Studies</option>
                                                        <option value="History: Israel">&nbsp;&nbsp;&nbsp;History: Israel</option>
                                                        <option value="History: Latin">&nbsp;&nbsp;&nbsp;History: Latin</option>
                                                        <option value="History: Middle East">&nbsp;&nbsp;&nbsp;History: Middle East</option>
                                                        <option value="History: Pre-Colonial America">&nbsp;&nbsp;&nbsp;History: Pre-Colonial America</option>
                                                        <option value="History: Presidents">&nbsp;&nbsp;&nbsp;History: Presidents</option>
                                                        <option value="History: Russia / USSR">&nbsp;&nbsp;&nbsp;History: Russia / USSR</option>
                                                        <option value="History: U.S. (after 1865)">&nbsp;&nbsp;&nbsp;History: U.S. (after 1865)</option>
                                                        <option value="History: U.S. (before 1865)">&nbsp;&nbsp;&nbsp;History: U.S. (before 1865)</option>
                                                        <option value="History: Wars (miscellaneous)">&nbsp;&nbsp;&nbsp;History: Wars (miscellaneous)</option>
                                                        <option value="History: World War I">&nbsp;&nbsp;&nbsp;History: World War I</option>
                                                        <option value="History: World War II">&nbsp;&nbsp;&nbsp;History: World War II</option>
                                                        <option value="Holocaust">Holocaust</option>
                                                        <option value="Homosexuality">Homosexuality</option>
                                                        <option value="Housing">Housing</option>
                                                        <option value="Human Resources">Human Resources</option>
                                                        <option value="Human Rights">Human Rights</option>
                                                        <option value="Human Sexuality">Human Sexuality</option>
                                                        <option value="Immigration">Immigration</option>
                                                        <option value="India / Indian">India / Indian</option>
                                                        <option value="Indonesia / Indonesian">Indonesia / Indonesian</option>
                                                        <option value="Information Technology">Information Technology</option>
                                                        <option value="International Relations">International Relations</option>
                                                        <option value="Internet">Internet</option>
                                                        <option value="Japan / Japanese">Japan / Japanese</option>
                                                        <option value="Jewish Studies">Jewish Studies</option>
                                                        <option value="Juvenile Delinquency / Crime">Juvenile Delinquency / Crime</option>
                                                        <option value="Korea / Korean">Korea / Korean</option>
                                                        <option value="Labor / Union Studies">Labor / Union Studies</option>
                                                        <option value="Languages">Languages</option>
                                                        <option value="Latin America (general)">Latin America (general)</option>
                                                        <option value="Latin America: Caribbean">&nbsp;&nbsp;&nbsp;Latin America: Caribbean</option>
                                                        <option value="Latin America: Brazil">&nbsp;&nbsp;&nbsp;Latin America: Brazil</option>
                                                        <option value="Latin America: Central America">&nbsp;&nbsp;&nbsp;Latin America: Central America</option>
                                                        <option value="Latin America: Costa Rica">&nbsp;&nbsp;&nbsp;Latin America: Costa Rica</option>
                                                        <option value="Latin America: Cuba">&nbsp;&nbsp;&nbsp;Latin America: Cuba</option>
                                                        <option value="Latin America: Guatemala">&nbsp;&nbsp;&nbsp;Latin America: Guatemala</option>
                                                        <option value="Latin America: Mexico">&nbsp;&nbsp;&nbsp;Latin America: Mexico</option>
                                                        <option value="Latin America: Puerto Rico">&nbsp;&nbsp;&nbsp;Latin America: Puerto Rico</option>
                                                        <option value="Latin America: South America">&nbsp;&nbsp;&nbsp;Latin America: South America</option>
                                                        <option value="Law (general)">Law (general)</option>
                                                        <option value="Law: Business">&nbsp;&nbsp;&nbsp;Law: Business</option>
                                                        <option value="Law: Constitutional Law">&nbsp;&nbsp;&nbsp;Law: Constitutional Law</option>
                                                        <option value="Law: Corrections">&nbsp;&nbsp;&nbsp;Law: Corrections</option>
                                                        <option value="Law: Courts">&nbsp;&nbsp;&nbsp;Law: Courts</option>
                                                        <option value="Law: Enforcement">&nbsp;&nbsp;&nbsp;Law: Enforcement</option>
                                                        <option value="Law: Historic Trials">&nbsp;&nbsp;&nbsp;Law: Historic Trials</option>
                                                        <option value="Law: International">&nbsp;&nbsp;&nbsp;Law: International</option>
                                                        <option value="Law: Legal Briefs">&nbsp;&nbsp;&nbsp;Law: Legal Briefs</option>
                                                        <option value="Law: Legal Issues">&nbsp;&nbsp;&nbsp;Law: Legal Issues</option>
                                                        <option value="Law: Litigation">&nbsp;&nbsp;&nbsp;Law: Litigation</option>
                                                        <option value="Law: Supreme Court">&nbsp;&nbsp;&nbsp;Law: Supreme Court</option>
                                                        <option value="Law: Theory">&nbsp;&nbsp;&nbsp;Law: Theory</option>
                                                        <option value="Law: Trial System">&nbsp;&nbsp;&nbsp;Law: Trial System</option>
                                                        <option value="Leadership">Leadership</option>
                                                        <option value="Learning">Learning</option>
                                                        <option value="Linguistics">Linguistics</option>
                                                        <option value="Literature (general)">Literature (general)</option>
                                                        <option value="Literature: African">&nbsp;&nbsp;&nbsp;Literature: African</option>
                                                        <option value="Literature: African-American">&nbsp;&nbsp;&nbsp;Literature: African-American</option>
                                                        <option value="Literature: American">&nbsp;&nbsp;&nbsp;Literature: American</option>
                                                        <option value="Literature: Ancient">&nbsp;&nbsp;&nbsp;Literature: Ancient</option>
                                                        <option value="Literature: Asian">&nbsp;&nbsp;&nbsp;Literature: Asian</option>
                                                        <option value="Literature: Authors">&nbsp;&nbsp;&nbsp;Literature: Authors</option>
                                                        <option value="Literature: British">&nbsp;&nbsp;&nbsp;Literature: British</option>
                                                        <option value="Literature: Canadian">&nbsp;&nbsp;&nbsp;Literature: Canadian</option>
                                                        <option value="Literature: Caribbean">&nbsp;&nbsp;&nbsp;Literature: Caribbean</option>
                                                        <option value="Literature: Children's">&nbsp;&nbsp;&nbsp;Literature: Children's</option>
                                                        <option value="Literature: Classic (Greek/Roman)">&nbsp;&nbsp;&nbsp;Literature: Classic (Greek/Roman)</option>
                                                        <option value="Literature: English">&nbsp;&nbsp;&nbsp;Literature: English</option>
                                                        <option value="Literature: French">&nbsp;&nbsp;&nbsp;Literature: French</option>
                                                        <option value="Literature: German">&nbsp;&nbsp;&nbsp;Literature: German</option>
                                                        <option value="Literature: Greek / Roman">&nbsp;&nbsp;&nbsp;Literature: Greek / Roman</option>
                                                        <option value="Literature: Irish / Scottish">&nbsp;&nbsp;&nbsp;Literature: Irish / Scottish</option>
                                                        <option value="Literature: Italian">&nbsp;&nbsp;&nbsp;Literature: Italian</option>
                                                        <option value="Literature: Latin-American">&nbsp;&nbsp;&nbsp;Literature: Latin-American</option>
                                                        <option value="Literature: Medieval">&nbsp;&nbsp;&nbsp;Literature: Medieval</option>
                                                        <option value="Literature: Portuguese">&nbsp;&nbsp;&nbsp;Literature: Portuguese</option>
                                                        <option value="Literature: Russian">&nbsp;&nbsp;&nbsp;Literature: Russian</option>
                                                        <option value="Literature: Shakespeare">&nbsp;&nbsp;&nbsp;Literature: Shakespeare</option>
                                                        <option value="Literature: Spanish">&nbsp;&nbsp;&nbsp;Literature: Spanish</option>
                                                        <option value="Literature: World">&nbsp;&nbsp;&nbsp;Literature: World</option>
                                                        <option value="Mainstreaming">Mainstreaming</option>
                                                        <option value="Management (general)">Management (general)</option>
                                                        <option value="Management: Motivation">&nbsp;&nbsp;&nbsp;Management: Motivation</option>
                                                        <option value="Management: Theory">&nbsp;&nbsp;&nbsp;Management: Theory</option>
                                                        <option value="Marketing">Marketing</option>
                                                        <option value="Mass Communications">Mass Communications</option>
                                                        <option value="Mathematics">Mathematics</option>
                                                        <option value="Media">Media</option>
                                                        <option value="Medical / Medicine (general)">Medical / Medicine (general)</option>
                                                        <option value="Medical: AIDS">&nbsp;&nbsp;&nbsp;Medical: AIDS</option>
                                                        <option value="Medical: Alternative Medicine">&nbsp;&nbsp;&nbsp;Medical: Alternative Medicine</option>
                                                        <option value="Medical: Cancer">&nbsp;&nbsp;&nbsp;Medical: Cancer</option>
                                                        <option value="Medical: Dentistry">&nbsp;&nbsp;&nbsp;Medical: Dentistry</option>
                                                        <option value="Medical: Diseases">&nbsp;&nbsp;&nbsp;Medical: Diseases</option>
                                                        <option value="Medical: Disorders">&nbsp;&nbsp;&nbsp;Medical: Disorders</option>
                                                        <option value="Medical: Doctoring">&nbsp;&nbsp;&nbsp;Medical: Doctoring</option>
                                                        <option value="Medical: Epidemiology">&nbsp;&nbsp;&nbsp;Medical: Epidemiology</option>
                                                        <option value="Medical: Ethics">&nbsp;&nbsp;&nbsp;Medical: Ethics</option>
                                                        <option value="Medical: Health Care">&nbsp;&nbsp;&nbsp;Medical: Health Care</option>
                                                        <option value="Medical: Holistic Medicine">&nbsp;&nbsp;&nbsp;Medical: Holistic Medicine</option>
                                                        <option value="Medical: Issues">&nbsp;&nbsp;&nbsp;Medical: Issues</option>
                                                        <option value="Medical: Nursing">&nbsp;&nbsp;&nbsp;Medical: Nursing</option>
                                                        <option value="Medical: Pharmacy">&nbsp;&nbsp;&nbsp;Medical: Pharmacy</option>
                                                        <option value="Medical: Treatment">&nbsp;&nbsp;&nbsp;Medical: Treatment</option>
                                                        <option value="Meteorology">Meteorology</option>
                                                        <option value="Mexico / Mexican-American">Mexico / Mexican-American</option>
                                                        <option value="Middle East">Middle East</option>
                                                        <option value="Military">Military</option>
                                                        <option value="Morality">Morality</option>
                                                        <option value="Motivation">Motivation</option>
                                                        <option value="Multiculturalism">Multiculturalism</option>
                                                        <option value="Music">Music</option>
                                                        <option value="Mythology (general)">Mythology (general)</option>
                                                        <option value="Mythology: Ancient Beliefs">&nbsp;&nbsp;&nbsp;Mythology: Ancient Beliefs</option>
                                                        <option value="Mythology: Bible">&nbsp;&nbsp;&nbsp;Mythology: Bible</option>
                                                        <option value="Mythology: Christianity">&nbsp;&nbsp;&nbsp;Mythology: Christianity</option>
                                                        <option value="Mythology: Church">&nbsp;&nbsp;&nbsp;Mythology: Church</option>
                                                        <option value="Mythology: Cults">&nbsp;&nbsp;&nbsp;Mythology: Cults</option>
                                                        <option value="Mythology: Eastern">&nbsp;&nbsp;&nbsp;Mythology: Eastern</option>
                                                        <option value="Mythology: Greek / Roman">&nbsp;&nbsp;&nbsp;Mythology: Greek / Roman</option>
                                                        <option value="Mythology: Islam">&nbsp;&nbsp;&nbsp;Mythology: Islam</option>
                                                        <option value="Mythology: Judaism">&nbsp;&nbsp;&nbsp;Mythology: Judaism</option>
                                                        <option value="Mythology: Medieval">&nbsp;&nbsp;&nbsp;Mythology: Medieval</option>
                                                        <option value="Mythology: Native Indian">&nbsp;&nbsp;&nbsp;Mythology: Native Indian</option>
                                                        <option value="Mythology: People">&nbsp;&nbsp;&nbsp;Mythology: People</option>
                                                        <option value="Mythology: Political Issues">&nbsp;&nbsp;&nbsp;Mythology: Political Issues</option>
                                                        <option value="Mythology: Religion">&nbsp;&nbsp;&nbsp;Mythology: Religion</option>
                                                        <option value="Mythology: Superstition">&nbsp;&nbsp;&nbsp;Mythology: Superstition</option>
                                                        <option value="Mythology: Theology">&nbsp;&nbsp;&nbsp;Mythology: Theology</option>
                                                        <option value="Mythology: World">&nbsp;&nbsp;&nbsp;Mythology: World</option>
                                                        <option value="Native Americans">Native Americans</option>
                                                        <option value="Nature">Nature</option>
                                                        <option value="News">News</option>
                                                        <option value="Novels">Novels</option>
                                                        <option value="Nuclear Energy">Nuclear Energy</option>
                                                        <option value="Nursing">Nursing</option>
                                                        <option value="Nutrition">Nutrition</option>
                                                        <option value="Occult">Occult</option>
                                                        <option value="Oceanography">Oceanography</option>
                                                        <option value="Organized Crime">Organized Crime</option>
                                                        <option value="Pakistan / Pakistani">Pakistan / Pakistani</option>
                                                        <option value="Paleontology">Paleontology</option>
                                                        <option value="Parapsychology">Parapsychology</option>
                                                        <option value="Parenting">Parenting</option>
                                                        <option value="Pharmacy">Pharmacy</option>
                                                        <option value="Philosophy (general)">Philosophy (general)</option>
                                                        <option value="Philosophy: Existence of God">&nbsp;&nbsp;&nbsp;Philosophy: Existence of God</option>
                                                        <option value="Philosophy: Famous Figures">&nbsp;&nbsp;&nbsp;Philosophy: Famous Figures</option>
                                                        <option value="Philosophy: Free Will">&nbsp;&nbsp;&nbsp;Philosophy: Free Will</option>
                                                        <option value="Philosophy: Greek">&nbsp;&nbsp;&nbsp;Philosophy: Greek</option>
                                                        <option value="Philosophy: Philosophers">&nbsp;&nbsp;&nbsp;Philosophy: Philosophers</option>
                                                        <option value="Philosophy: Religious">&nbsp;&nbsp;&nbsp;Philosophy: Religious</option>
                                                        <option value="Philosophy: Utopia">&nbsp;&nbsp;&nbsp;Philosophy: Utopia</option>
                                                        <option value="Photography">Photography</option>
                                                        <option value="Physical Education (PE)">Physical Education (PE)</option>
                                                        <option value="Physics">Physics</option>
                                                        <option value="Physiology">Physiology</option>
                                                        <option value="Planets">Planets</option>
                                                        <option value="Plays">Plays</option>
                                                        <option value="Poetry / Poets (general)">Poetry / Poets (general)</option>
                                                        <option value="Poetry / Poets: American">&nbsp;&nbsp;&nbsp;Poetry / Poets: American</option>
                                                        <option value="Poetry / Poets: English">&nbsp;&nbsp;&nbsp;Poetry / Poets: English</option>
                                                        <option value="Police">Police</option>
                                                        <option value="Political Science / Politics (general)">Political Science / Politics (general)</option>
                                                        <option value="Politics: Campaigns">&nbsp;&nbsp;&nbsp;Politics: Campaigns</option>
                                                        <option value="Politics: Elections">&nbsp;&nbsp;&nbsp;Politics: Elections</option>
                                                        <option value="Politics: Federal">&nbsp;&nbsp;&nbsp;Politics: Federal</option>
                                                        <option value="Politics: Fiscal Policy">&nbsp;&nbsp;&nbsp;Politics: Fiscal Policy</option>
                                                        <option value="Politics: Foreign Policy">&nbsp;&nbsp;&nbsp;Politics: Foreign Policy</option>
                                                        <option value="Politics: Government Agencies">&nbsp;&nbsp;&nbsp;Politics: Government Agencies</option>
                                                        <option value="Politics: International Relations">&nbsp;&nbsp;&nbsp;Politics: International Relations</option>
                                                        <option value="Politics: Local">&nbsp;&nbsp;&nbsp;Politics: Local</option>
                                                        <option value="Politics: Military Agencies">&nbsp;&nbsp;&nbsp;Politics: Military Agencies</option>
                                                        <option value="Politics: Politicians">&nbsp;&nbsp;&nbsp;Politics: Politicians</option>
                                                        <option value="Politics: Presidential Studies">&nbsp;&nbsp;&nbsp;Politics: Presidential Studies</option>
                                                        <option value="Politics: Social Security">&nbsp;&nbsp;&nbsp;Politics: Social Security</option>
                                                        <option value="Politics: State">&nbsp;&nbsp;&nbsp;Politics: State</option>
                                                        <option value="Politics: Theory">&nbsp;&nbsp;&nbsp;Politics: Theory</option>
                                                        <option value="Politics: Voting">&nbsp;&nbsp;&nbsp;Politics: Voting</option>
                                                        <option value="Politics: Welfare">&nbsp;&nbsp;&nbsp;Politics: Welfare</option>
                                                        <option value="Pollution">Pollution</option>
                                                        <option value="Population">Population</option>
                                                        <option value="Pornography">Pornography</option>
                                                        <option value="Privacy">Privacy</option>
                                                        <option value="Pros and Cons">Pros and Cons</option>
                                                        <option value="Programming">Programming</option>
                                                        <option value="Psychiatry">Psychiatry</option>
                                                        <option value="Psychology (general)">Psychology (general)</option>
                                                        <option value="Psychology: Abnormal">&nbsp;&nbsp;&nbsp;Psychology: Abnormal</option>
                                                        <option value="Psychology: Adolescent">&nbsp;&nbsp;&nbsp;Psychology: Adolescent</option>
                                                        <option value="Psychology: Behaviorism">&nbsp;&nbsp;&nbsp;Psychology: Behaviorism</option>
                                                        <option value="Psychology: Child">&nbsp;&nbsp;&nbsp;Psychology: Child</option>
                                                        <option value="Psychology: Cognitive">&nbsp;&nbsp;&nbsp;Psychology: Cognitive</option>
                                                        <option value="Psychology: Counseling">&nbsp;&nbsp;&nbsp;Psychology: Counseling</option>
                                                        <option value="Psychology: Developmental">&nbsp;&nbsp;&nbsp;Psychology: Developmental</option>
                                                        <option value="Psychology: Disorders">&nbsp;&nbsp;&nbsp;Psychology: Disorders</option>
                                                        <option value="Psychology: Dreams">&nbsp;&nbsp;&nbsp;Psychology: Dreams</option>
                                                        <option value="Psychology: Experimental">&nbsp;&nbsp;&nbsp;Psychology: Experimental</option>
                                                        <option value="Psychology: Freud">&nbsp;&nbsp;&nbsp;Psychology: Freud</option>
                                                        <option value="Psychology: History">&nbsp;&nbsp;&nbsp;Psychology: History</option>
                                                        <option value="Psychology: Jung">&nbsp;&nbsp;&nbsp;Psychology: Jung</option>
                                                        <option value="Psychology: Parapsychology">&nbsp;&nbsp;&nbsp;Psychology: Parapsychology</option>
                                                        <option value="Psychology: Personality">&nbsp;&nbsp;&nbsp;Psychology: Personality</option>
                                                        <option value="Psychology: Physiology">&nbsp;&nbsp;&nbsp;Psychology: Physiology</option>
                                                        <option value="Psychology: Piaget">&nbsp;&nbsp;&nbsp;Psychology: Piaget</option>
                                                        <option value="Psychology: Psychotherapy">&nbsp;&nbsp;&nbsp;Psychology: Psychotherapy</option>
                                                        <option value="Psychology: Rogers">&nbsp;&nbsp;&nbsp;Psychology: Rogers</option>
                                                        <option value="Psychology: Social">&nbsp;&nbsp;&nbsp;Psychology: Social</option>
                                                        <option value="Psychology: Testing">&nbsp;&nbsp;&nbsp;Psychology: Testing</option>
                                                        <option value="Psychology: Theories">&nbsp;&nbsp;&nbsp;Psychology: Theories</option>
                                                        <option value="Psychology: Therapy">&nbsp;&nbsp;&nbsp;Psychology: Therapy</option>
                                                        <option value="Public Administration">Public Administration</option>
                                                        <option value="Public Relations">Public Relations</option>
                                                        <option value="Race / Racism">Race / Racism</option>
                                                        <option value="Reading">Reading</option>
                                                        <option value="Real Estate">Real Estate</option>
                                                        <option value="Recreation / Leisure">Recreation / Leisure</option>
                                                        <option value="Religion (general)">Religion (general)</option>
                                                        <option value="Religion: Bible">&nbsp;&nbsp;&nbsp;Religion: Bible</option>
                                                        <option value="Religion: Buddhism">&nbsp;&nbsp;&nbsp;Religion: Buddhism</option>
                                                        <option value="Religion: Christianity">&nbsp;&nbsp;&nbsp;Religion: Christianity</option>
                                                        <option value="Religion: Church vs. State">&nbsp;&nbsp;&nbsp;Religion: Church vs. State</option>
                                                        <option value="Religion: Cults">&nbsp;&nbsp;&nbsp;Religion: Cults</option>
                                                        <option value="Religion: Eastern">&nbsp;&nbsp;&nbsp;Religion: Eastern</option>
                                                        <option value="Religion: Famous People">&nbsp;&nbsp;&nbsp;Religion: Famous People</option>
                                                        <option value="Religion: Hinduism">&nbsp;&nbsp;&nbsp;Religion: Hinduism</option>
                                                        <option value="Religion: Islam">&nbsp;&nbsp;&nbsp;Religion: Islam</option>
                                                        <option value="Religion: Janism">&nbsp;&nbsp;&nbsp;Religion: Janism</option>
                                                        <option value="Religion: Judaism">&nbsp;&nbsp;&nbsp;Religion: Judaism</option>
                                                        <option value="Religion: Koran">&nbsp;&nbsp;&nbsp;Religion: Koran</option>
                                                        <option value="Religion: Political Issues">&nbsp;&nbsp;&nbsp;Religion: Political Issues</option>
                                                        <option value="Religion: Shinto">&nbsp;&nbsp;&nbsp;Religion: Shinto</option>
                                                        <option value="Religion: Superstition">&nbsp;&nbsp;&nbsp;Religion: Superstition</option>
                                                        <option value="Religion: Taoism">&nbsp;&nbsp;&nbsp;Religion: Taoism</option>
                                                        <option value="Religion: Theology">&nbsp;&nbsp;&nbsp;Religion: Theology</option>
                                                        <option value="Religion: Tora">&nbsp;&nbsp;&nbsp;Religion: Tora</option>
                                                        <option value="Religion: World">&nbsp;&nbsp;&nbsp;Religion: World</option>
                                                        <option value="Roman Studies">Roman Studies</option>
                                                        <option value="Russia / Russian">Russia / Russian</option>
                                                        <option value="Safety">Safety</option>
                                                        <option value="School Issues">School Issues</option>
                                                        <option value="Science">Science</option>
                                                        <option value="Security">Security</option>
                                                        <option value="Shakespeare">Shakespeare</option>
                                                        <option value="Slavery">Slavery</option>
                                                        <option value="Social Media">Social Media</option>
                                                        <option value="Sociology (general)">Sociology (general)</option>
                                                        <option value="Sociology: Counseling">&nbsp;&nbsp;&nbsp;Sociology: Counseling</option>
                                                        <option value="Sociology: Family Issues">&nbsp;&nbsp;&nbsp;Sociology: Family Issues</option>
                                                        <option value="Sociology: Human Services">&nbsp;&nbsp;&nbsp;Sociology: Human Services</option>
                                                        <option value="Sociology: Politics">&nbsp;&nbsp;&nbsp;Sociology: Politics</option>
                                                        <option value="Sociology: Problems">&nbsp;&nbsp;&nbsp;Sociology: Problems</option>
                                                        <option value="Sociology: Race">&nbsp;&nbsp;&nbsp;Sociology: Race</option>
                                                        <option value="Sociology: Research">&nbsp;&nbsp;&nbsp;Sociology: Research</option>
                                                        <option value="Sociology: Services">&nbsp;&nbsp;&nbsp;Sociology: Services</option>
                                                        <option value="Sociology: Sex / Aids">&nbsp;&nbsp;&nbsp;Sociology: Sex / Aids</option>
                                                        <option value="Sociology: Social Work">&nbsp;&nbsp;&nbsp;Sociology: Social Work</option>
                                                        <option value="Sociology: Theories">&nbsp;&nbsp;&nbsp;Sociology: Theories</option>
                                                        <option value="Sociology: Theorists">&nbsp;&nbsp;&nbsp;Sociology: Theorists</option>
                                                        <option value="Sociology: Therapy">&nbsp;&nbsp;&nbsp;Sociology: Therapy</option>
                                                        <option value="Sociology: Utopian Societies">&nbsp;&nbsp;&nbsp;Sociology: Utopian Societies</option>
                                                        <option value="Sociology: Welfare">&nbsp;&nbsp;&nbsp;Sociology: Welfare</option>
                                                        <option value="Software">Software</option>
                                                        <option value="Soviet Union / USSR">Soviet Union / USSR</option>
                                                        <option value="Speech">Speech</option>
                                                        <option value="Sports (general)">Sports (general)</option>
                                                        <option value="Sports: Advertising">&nbsp;&nbsp;&nbsp;Sports: Advertising</option>
                                                        <option value="Sports: Athletic Fitness">&nbsp;&nbsp;&nbsp;Sports: Athletic Fitness</option>
                                                        <option value="Sports: Business">&nbsp;&nbsp;&nbsp;Sports: Business</option>
                                                        <option value="Sports: Coaching">&nbsp;&nbsp;&nbsp;Sports: Coaching</option>
                                                        <option value="Sports: College">&nbsp;&nbsp;&nbsp;Sports: College</option>
                                                        <option value="Sports: Culture">&nbsp;&nbsp;&nbsp;Sports: Culture</option>
                                                        <option value="Sports: Drugs">&nbsp;&nbsp;&nbsp;Sports: Drugs</option>
                                                        <option value="Sports: Economics">&nbsp;&nbsp;&nbsp;Sports: Economics</option>
                                                        <option value="Sports: Gambling">&nbsp;&nbsp;&nbsp;Sports: Gambling</option>
                                                        <option value="Sports: High School">&nbsp;&nbsp;&nbsp;Sports: High School</option>
                                                        <option value="Sports: Law">&nbsp;&nbsp;&nbsp;Sports: Law</option>
                                                        <option value="Sports: Management">&nbsp;&nbsp;&nbsp;Sports: Management</option>
                                                        <option value="Sports: Medicine">&nbsp;&nbsp;&nbsp;Sports: Medicine</option>
                                                        <option value="Sports: Olympics">&nbsp;&nbsp;&nbsp;Sports: Olympics</option>
                                                        <option value="Sports: Political Issues">&nbsp;&nbsp;&nbsp;Sports: Political Issues</option>
                                                        <option value="Sports: Professional Athletes">&nbsp;&nbsp;&nbsp;Sports: Professional Athletes</option>
                                                        <option value="Sports: Recreational">&nbsp;&nbsp;&nbsp;Sports: Recreational</option>
                                                        <option value="Sports: Social Issues">&nbsp;&nbsp;&nbsp;Sports: Social Issues</option>
                                                        <option value="Sports: Steroids">&nbsp;&nbsp;&nbsp;Sports: Steroids</option>
                                                        <option value="Sports: Teams">&nbsp;&nbsp;&nbsp;Sports: Teams</option>
                                                        <option value="Sports: Violence">&nbsp;&nbsp;&nbsp;Sports: Violence</option>
                                                        <option value="Sports: Women">&nbsp;&nbsp;&nbsp;Sports: Women</option>
                                                        <option value="Sports: Youth">&nbsp;&nbsp;&nbsp;Sports: Youth</option>
                                                        <option value="Teaching (general)">Teaching (general)</option>
                                                        <option value="Teaching: Administration">&nbsp;&nbsp;&nbsp;Teaching: Administration</option>
                                                        <option value="Teaching: Classroom Mgmt.">&nbsp;&nbsp;&nbsp;Teaching: Classroom Mgmt.</option>
                                                        <option value="Teaching: Coaching">&nbsp;&nbsp;&nbsp;Teaching: Coaching</option>
                                                        <option value="Teaching: Computers">&nbsp;&nbsp;&nbsp;Teaching: Computers</option>
                                                        <option value="Teaching: Counseling">&nbsp;&nbsp;&nbsp;Teaching: Counseling</option>
                                                        <option value="Teaching: Countries">&nbsp;&nbsp;&nbsp;Teaching: Countries</option>
                                                        <option value="Teaching: Curriculum">&nbsp;&nbsp;&nbsp;Teaching: Curriculum</option>
                                                        <option value="Teaching: ESL">&nbsp;&nbsp;&nbsp;Teaching: ESL</option>
                                                        <option value="Teaching: Foreign Countries">&nbsp;&nbsp;&nbsp;Teaching: Foreign Countries</option>
                                                        <option value="Teaching: Higher Education">&nbsp;&nbsp;&nbsp;Teaching: Higher Education</option>
                                                        <option value="Teaching: Homeschooling">&nbsp;&nbsp;&nbsp;Teaching: Homeschooling</option>
                                                        <option value="Teaching: Inclusion">&nbsp;&nbsp;&nbsp;Teaching: Inclusion</option>
                                                        <option value="Teaching: Mathematics">&nbsp;&nbsp;&nbsp;Teaching: Mathematics</option>
                                                        <option value="Teaching: Politics">&nbsp;&nbsp;&nbsp;Teaching: Politics</option>
                                                        <option value="Teaching: Physical Education">&nbsp;&nbsp;&nbsp;Teaching: Physical Education</option>
                                                        <option value="Teaching: Public vs. Private">&nbsp;&nbsp;&nbsp;Teaching: Public vs. Private</option>
                                                        <option value="Teaching: Reading">&nbsp;&nbsp;&nbsp;Teaching: Reading</option>
                                                        <option value="Teaching: Social Issues">&nbsp;&nbsp;&nbsp;Teaching: Social Issues</option>
                                                        <option value="Teaching: Special Education">&nbsp;&nbsp;&nbsp;Teaching: Special Education</option>
                                                        <option value="Teaching: Teaching Methods">&nbsp;&nbsp;&nbsp;Teaching: Teaching Methods</option>
                                                        <option value="Teaching: Technology">&nbsp;&nbsp;&nbsp;Teaching: Technology</option>
                                                        <option value="Teaching: Theory">&nbsp;&nbsp;&nbsp;Teaching: Theory</option>
                                                        <option value="Technical Writing">Technical Writing</option>
                                                        <option value="Technology">Technology</option>
                                                        <option value="Television">Television</option>
                                                        <option value="Terrorism">Terrorism</option>
                                                        <option value="Theology">Theology</option>
                                                        <option value="Theory">Theory</option>
                                                        <option value="Therapy">Therapy</option>
                                                        <option value="Topography">Topography</option>
                                                        <option value="Tourism">Tourism</option>
                                                        <option value="Transportation (general)">Transportation (general)</option>
                                                        <option value="Transportation: Aviation">&nbsp;&nbsp;&nbsp;Transportation: Aviation</option>
                                                        <option value="Transportation: Boat">&nbsp;&nbsp;&nbsp;Transportation: Boat</option>
                                                        <option value="Transportation: Bus">&nbsp;&nbsp;&nbsp;Transportation: Bus</option>
                                                        <option value="Transportation: Car">&nbsp;&nbsp;&nbsp;Transportation: Car</option>
                                                        <option value="Transportation: Environment">&nbsp;&nbsp;&nbsp;Transportation: Environment</option>
                                                        <option value="Transportation: Freight">&nbsp;&nbsp;&nbsp;Transportation: Freight</option>
                                                        <option value="Transportation: Public">&nbsp;&nbsp;&nbsp;Transportation: Public</option>
                                                        <option value="Transportation: Railroads">&nbsp;&nbsp;&nbsp;Transportation: Railroads</option>
                                                        <option value="Transportation: SUV">&nbsp;&nbsp;&nbsp;Transportation: SUV</option>
                                                        <option value="Urban Studies">Urban Studies</option>
                                                        <option value="Vietnam">Vietnam</option>
                                                        <option value="Violence">Violence</option>
                                                        <option value="War">War</option>
                                                        <option value="Weather">Weather</option>
                                                        <option value="Western Civilization (general)">Western Civilization (general)</option>
                                                        <option value="Western Civ: Ancient Civilizations">&nbsp;&nbsp;&nbsp;Western Civ: Ancient Civilizations</option>
                                                        <option value="Western Civ: England (pre-1800)">&nbsp;&nbsp;&nbsp;Western Civ: England (pre-1800)</option>
                                                        <option value="Western Civ: Europe's Culture">&nbsp;&nbsp;&nbsp;Western Civ: Europe's Culture</option>
                                                        <option value="Western Civ: Europe's History">&nbsp;&nbsp;&nbsp;Western Civ: Europe's History</option>
                                                        <option value="Western Civ: France (pre-1800)">&nbsp;&nbsp;&nbsp;Western Civ: France (pre-1800)</option>
                                                        <option value="Western Civ: Greeks / Greece">&nbsp;&nbsp;&nbsp;Western Civ: Greeks / Greece</option>
                                                        <option value="Western Civ: Romans / Italy">&nbsp;&nbsp;&nbsp;Western Civ: Romans:Italy</option>
                                                        <option value="Witchcraft / Magic / Voodoo">Witchcraft / Magic / Voodoo</option>
                                                        <option value="Women (general)">Women (general)</option>
                                                        <option value="Women: Abortion">&nbsp;&nbsp;&nbsp;Women: Abortion</option>
                                                        <option value="Women: Achievements">&nbsp;&nbsp;&nbsp;Women: Achievements</option>
                                                        <option value="Women: Activists">&nbsp;&nbsp;&nbsp;Women: Activists</option>
                                                        <option value="Women: Birth Control">&nbsp;&nbsp;&nbsp;Women: Birth Control</option>
                                                        <option value="Women: Civil Rights">&nbsp;&nbsp;&nbsp;Women: Civil Rights</option>
                                                        <option value="Women: Cultures">&nbsp;&nbsp;&nbsp;Women: Cultures</option>
                                                        <option value="Women: Employment">&nbsp;&nbsp;&nbsp;Women: Employment</option>
                                                        <option value="Women: Feminism / Feminists">&nbsp;&nbsp;&nbsp;Women: Feminism / Feminists</option>
                                                        <option value="Women: Foreign Countries">&nbsp;&nbsp;&nbsp;Women: Foreign Countries</option>
                                                        <option value="Women: Gender / Society">&nbsp;&nbsp;&nbsp;Women: Gender / Society</option>
                                                        <option value="Women: Health Issues">&nbsp;&nbsp;&nbsp;Women: Health Issues</option>
                                                        <option value="Women: Sexuality">&nbsp;&nbsp;&nbsp;Women: Sexuality</option>
                                                        <option value="Women: Social Issues">&nbsp;&nbsp;&nbsp;Women: Social Issues</option>
                                                        <option value="Women: Workforce">&nbsp;&nbsp;&nbsp;Women: Workforce</option>
                                                        <option value="World Literature">World Literature</option>
                                                        <option value="Writing">Writing</option>
                                                        <option value="Zoology">Zoology</option>
                                                        <option value="Other (not listed above) ">Other (not listed above) </option>

                                                    </select>
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="fv-row row">
                                                    <!--begin::col-->
                                                    <div class="col-12 mb-10">
                                                        <!--begin::Label-->
                                                        <p>
                                                            Paper Instructions: "To ensure that the final paper meets your requirements, make sure your instructions are as clear and detailed as possible. This will decrease the chance of revisions in your order."
                                                        </p>
                                                        <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                            <span class="required">Message:</span>
                                                            <span class="ms-1" data-bs-toggle="tooltip" title="Specify your unique app name">
                                                                <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>
                                                        </label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <textarea-ordering-page name='description'></textarea-ordering-page>
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::col-->

                                                </div>
                                                <!--end::Input group-->

                                        </div>
                                    </div>
                                    <!--end::Step 1-->

                                </div>

                                <div data-kt-stepper-content="true" data-kt-stepper-content-for="stepper-id" data-kt-stepper-type="step" class='step'>
                                    <!--begin::Step 2-->
                                    <div data-kt-stepper-element="content">
                                        <div class="w-100">

                                                <!--begin::Input group-->
                                                <div class="fv-row">
                                                    <!--begin::heading-->
                                                    <div class="d-flex align-items-center fs-3 fw-semibold mb-4">
                                                        <h3>Order Basic Info</h3><span class="ms-1" data-bs-toggle="tooltip" title="Specify your apps framework">
                                                            <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>
                                                    </div>
                                                    <!--end::heading-->
                                                    <!--begin::Input group-->
                                                    <div class="fv-row row">
                                                        <!--begin::col-->
                                                        <div class="col-m12 mb-10">
                                                            <!--begin::Label-->
                                                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                                <span class="required">Academic Level</span>
                                                                <span class="ms-1" data-bs-toggle="tooltip" title="Specify your unique app name">
                                                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>
                                                            </label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <select name="academic_level" class="form-select form-select-solid " data-control="select2" data-hide-search="true" data-placeholder="Choose">
                                                                <option></option>
                                                                <option value="High School">High School</option>
                                                                <option value="Collage Freshman ">Collage Freshman </option>
                                                                <option value="Collage Sophomore">Collage Sophomore</option>
                                                                <option value="Collage Junior">Collage Junior</option>
                                                                <option value="Collage Senior">Collage Senior</option>
                                                                <option value="Master">Master</option>
                                                                <option value="Doctoral">Doctoral</option>
                                                                <option value="Corporate/Professional">Corporate/Professional</option>

                                                            </select>
                                                            <!--end::Input-->
                                                            <p>"Please select the option that is the closest to your next obtainable degree."</p>
                                                        </div>
                                                        <!--end::col-->

                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="fv-row row">
                                                        <!--begin::col-->
                                                        <div class="col-12 mb-10">
                                                            <!--begin::Label-->
                                                            <p>Type of Paper: "If the required type of paper is missing, feel free to pick “Other” and write your specific type of paper in the appeared tab."</p>
                                                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                                <span class="required">Type of Paper:</span>
                                                                <span class="ms-1" data-bs-toggle="tooltip" title="Specify your unique app name">
                                                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>
                                                            </label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <select name="type_of_paper" class="form-select form-select-solid " data-control="select2" data-hide-search="true" data-placeholder="Choose">
                                                                <option value="Term Paper">Term Paper</option>
                                                                <option value="Marketing Plan">Marketing Plan</option>
                                                                <option value="Annotated Bibliography">Annotated Bibliography</option>
                                                                <option value="Article Review">Article Review</option>
                                                                <option value="Creative Writing">Creative Writing</option>
                                                                <option value="Peer Reviewed Journal">Peer Reviewed Journal</option>
                                                                <option value="Poem">Poem</option>
                                                                <option value="White Paper">White Paper</option>
                                                                <option value="Admission Essay">Admission Essay</option>
                                                                <option value="Application Essay">Application Essay</option>
                                                                <option value="Journal Professional">Journal Professional</option>
                                                                <option value="Corporate">Corporate</option>
                                                                <option value="Power Point Presentation">Power Point Presentation</option>
                                                                <option value="Resume">Resume</option>
                                                                <option value="Website Content">Website Content</option>
                                                                <option value="Capstone Project">Capstone Project</option>
                                                                <option value="Case Study">Case Study</option>
                                                                <option value="Business Plan">Business Plan</option>
                                                                <option value="Essay">Essay</option>
                                                                <option value="Book Report">Book Report</option>
                                                                <option value="Research Paper">Research Paper</option>
                                                                <option value="Dissertation or Thesis complete">Dissertation or Thesis complete</option>
                                                                <option value="Only the Introduction chapter">Only the Introduction chapter</option>
                                                                <option value="Only the Hypothesis chapter">Only the Hypothesis chapter</option>
                                                                <option value="Only the Literature Review chapter">Only the Literature Review chapter</option>
                                                                <option value="Only the Methodology chapter">Only the Methodology chapter</option>
                                                                <option value="Only the Conclusion chapter">Only the Conclusion chapter</option>
                                                                <option value="Multiple Chapters">Multiple Chapters</option>
                                                                <option value="Research Proposal">Research Proposal</option>
                                                                <option value="Book Review">Book Review</option>
                                                                <option value="Business Proposal">Business Proposal</option>
                                                                <option value="SWOT">SWOT</option>
                                                                <option value="Other (explain in description)">Other (explain in description)</option>
                                                                <option value="Other (not listed above)">Other (not listed above)</option>

                                                            </select>
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
                                                            <p><strong>Paper Format:</strong> "Format of your in-text citations, references and title page. The format/citation style also applies to any Works Cited and/or References pages."</p>
                                                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                                <span class="required">Paper Format:</span>
                                                                <span class="ms-1" data-bs-toggle="tooltip" title="Specify your unique app name">
                                                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>
                                                            </label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <select name="paper_format" class="form-select form-select-solid " data-control="select2" data-hide-search="true" data-placeholder="Choose">
                                                                <option></option>
                                                                <option value="None">None</option>
                                                                <option value="Let the writer choose">Let the writer choose</option>
                                                                <option value="MLA">MLA</option>
                                                                <option value="APA">APA</option>
                                                                <option value="Turabian">Turabian</option>
                                                                <option value="Huavard">Huavard</option>
                                                                <option value="AMA">AMA</option>
                                                                <option value="Chicago">Chicago</option>
                                                                <option value="BCE">BCE</option>
                                                                <option value="IEEE">IEEE</option>
                                                                <option value="AIP">AIP</option>
                                                                <option value="ACS">ACS</option>
                                                                <option value="Bluebook">Bluebook</option>
                                                                <option value="Does Not Matter">Does Not Matter</option>
                                                                <option value="Other (Not Listed Above)">Other (Not Listed Above)</option>

                                                            </select>
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
                                                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                                <span class="required">Language and spelling style:</span>
                                                                <span class="ms-1" data-bs-toggle="tooltip" title="Specify your unique app name">
                                                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>
                                                            </label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <select name="language_spelling" class="form-select form-select-solid fw-bold" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-kt-user-table-filter="role" data-hide-search="true">
                                                                <option value='British English'>British English</option>
                                                                <option value="American English">American English</option>
                                                            </select>
                                                            <!--end::Input-->
                                                            <p>For Example: color (American) ---- Colour (British)</p>
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
                                                            <p><strong>Number of Pages:</strong>"Select the number of pages needed. Do not include Bibliography, Works Cited, or References pages because they are free."</p>
                                                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                                <span class="required">Number of Pages:</span>
                                                                <span class="ms-1" data-bs-toggle="tooltip" title="Specify your unique app name">
                                                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>
                                                            </label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <input type="number" class="form-control form-control-lg form-control-solid" name="number_of_pages" placeholder="10" value="10" />
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
                                                            <p>Spacing: “Double spaced pages contain approximately 300 words each, while single-spaced have 600.” Spacing:</p>
                                                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                                <span class="required">Spacing:</span>
                                                                <span class="ms-1" data-bs-toggle="tooltip" title="Specify your unique app name">
                                                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>
                                                            </label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <select name='spacing' class="form-select form-select-solid fw-bold" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-kt-user-table-filter="role" data-hide-search="true">
                                                                <option>Single</option>
                                                                <option value="Administrator">Double</option>
                                                            </select>
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
                                                            <p><strong>PowerPoint Slides: </strong>"The number of Power Point slides that will be delivered to you separately from your paper. Useful for those who need to present in front of class."</p>
                                                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                                <span class="required">PowerPoint Slides:</span>
                                                                <span class="ms-1" data-bs-toggle="tooltip" title="Specify your unique app name">
                                                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>
                                                            </label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <input type="number" class="form-control form-control-lg form-control-solid" name="powerpoint_slide" placeholder="10" value="10" />
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

                                <div data-kt-stepper-content="true" data-kt-stepper-content-for="stepper-id" data-kt-stepper-type="step" class='step'>
                                    <!--begin::Step 3-->
                                    <div data-kt-stepper-element="content">
                                        <div class="w-100">
                                            <!--begin::heading-->
                                            <div class="d-flex align-items-center fs-3 fw-semibold mb-4">
                                                <h3>Order Basic Info</h3><span class="ms-1" data-bs-toggle="tooltip" title="Specify your apps framework">
                                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>
                                            </div>
                                            <!--end::heading-->

                                                <!--begin::Input group-->
                                                <div class="fv-row mb-10">
                                                    <!--begin::Label-->
                                                    <p class="mb-3">
                                                        <strong>Sources:</strong> "This number of entries will be in your reference list or bibliography page.”
                                                    </p>
                                                    <p class="mb-3"><strong>FREE SOURCES:</strong> If needed, you may request one (1) free source for every one (1) page of text that you order. For example, if you order 20 pages of text, you can request up to 20 sources for free.”</p>
                                                    <p class="mb-3">
                                                        <strong>EXTRA SOURCES:</strong> There is an additional cost of $1 per each extra source that exceeds the number of pages that you order. For example, if you order 10 pages and request 15 sources, there will be a total additional cost of $5 for the 5 extra sources.
                                                    </p>
                                                    <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                        <span class="required">No. of EXTRA SOURCES:</span>
                                                        <span class="ms-1" data-bs-toggle="tooltip" title="Specify your unique app name">
                                                            <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>
                                                    </label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="number" class="form-control form-control-lg form-control-solid" name="no_of_extra_sources" placeholder="10" value="10" />
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-10">
                                                    <!--begin::Label-->
                                                    <p><strong>Deadline:</strong> "The time in which you will receive your completed paper. The countdown starts when we receive payment for your order. Please note that revision requests may exceed your deadline."</p>
                                                    <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                        <span class="required">Deadline:</span>
                                                        <span class="ms-1" data-bs-toggle="tooltip" title="Specify your unique app name">
                                                            <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>
                                                    </label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <select class="form-select form-select-solid fw-bold" name='deadline' data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-kt-user-table-filter="role" data-hide-search="true">
                                                        <option value="8 Hours">8 Hours</option>
<option value="24 Hours">24 Hours</option>
<option value="48 Hours">48 Hours</option>
<option value="3 Days">3 Days</option>
<option value="5 Days">5 Days</option>
<option value="7 Days">7 Days</option>
<option value="14 Days">14 Days</option>
<option value="14+">14+</option>

                                                    </select>
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-10">
                                                    <!--begin::Label-->
                                                    <p><strong>Statistical Analysis:</strong> If your order requires statistical analysis or a significant amount of mathematical calculations, there will be an additional charge of 15%. To see a list of features that qualify as "statistical analysis," <strong>click here.</strong></p>
                                                    <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                        <span class="required">Statistical Analysis:</span>
                                                        <span class="ms-1" data-bs-toggle="tooltip" title="Specify your unique app name">
                                                            <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>
                                                    </label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <select class="form-select form-select-solid fw-bold" name='statistical_analysis' data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-kt-user-table-filter="role" data-hide-search="true">
                                                        <option></option>
                                                        <option value="yes">Yes</option>
                                                        <option value="no">No</option>
                                                    </select>
                                                    <!--end::Input-->
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
                                                    <span class="required">Name On Card</span>
                                                    <span class="ms-1" data-bs-toggle="tooltip" title="Specify a card holder's name">
                                                        <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>
                                                </label>
                                                <!--end::Label-->
                                                <input type="text" class="form-control form-control-solid" placeholder="" name="card_name" value="Max Doe" />
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="d-flex flex-column mb-7 fv-row">
                                                <!--begin::Label-->
                                                <label class="required fs-6 fw-semibold form-label mb-2">Card Number</label>
                                                <!--end::Label-->
                                                <!--begin::Input wrapper-->
                                                <div class="position-relative">
                                                    <!--begin::Input-->
                                                    <input type="text" class="form-control form-control-solid" placeholder="Enter card number" name="card_number" value="4111 1111 1111 1111" />
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
                                                    <label class="required fs-6 fw-semibold form-label mb-2">Expiration Date</label>
                                                    <!--end::Label-->
                                                    <!--begin::Row-->
                                                    <div class="row fv-row">
                                                        <!--begin::Col-->
                                                        <div class="col-6">
                                                            <select name="card_expiry_month" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Month">
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
                                                            <select name="card_expiry_year" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Year">
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
                                                        <span class="required">CVV</span>
                                                        <span class="ms-1" data-bs-toggle="tooltip" title="Enter a card CVV code">
                                                            <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>
                                                    </label>
                                                    <!--end::Label-->
                                                    <!--begin::Input wrapper-->
                                                    <div class="position-relative">
                                                        <!--begin::Input-->
                                                        <input type="text" class="form-control form-control-solid" minlength="3" maxlength="4" placeholder="CVV" name="card_cvv" />
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
                                                    <label class="fs-6 fw-semibold form-label">Save Card for further billing?</label>
                                                    <div class="fs-7 fw-semibold text-muted">If you need more info, please check budget planning</div>
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

                                <div data-kt-stepper-content="true" data-kt-stepper-content-for="stepper-id" data-kt-stepper-type="step" class='step'>
                                    <!--begin::Step 5-->
                                    <div data-kt-stepper-element="content">
                                        <div class="w-100 text-center">
                                            <!--begin::Heading-->
                                            <h1 class="fw-bold text-gray-900 mb-3">Congratulations!</h1>
                                            <!--end::Heading-->
                                            <!--begin::Description-->
                                            <div class="text-muted fw-semibold fs-3">
                                                Submited Your Order.
                                            </div>
                                            <!--end::Description-->
                                            <!--begin::Illustration-->
                                            <div class="text-center px-4 py-15">
                                                <img src="assets/media/illustrations/sketchy-1/9.png" alt="" class="mw-100 mh-300px" />
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
                                        <button type="button" class="btn btn-lg btn-light-primary me-3" id='previous' style='display:none;'>
                                            <i class="ki-duotone ki-arrow-left fs-3 me-1"><span class="path1"></span><span class="path2"></span></i> Back
                                        </button>
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Wrapper-->
                                    <div>
                                        <button type="submit" class="btn btn-lg btn-primary" id='submit' style='display:none;'>
                                            <span class="indicator-label">
                                                Submit
                                                <i class="ki-duotone ki-arrow-right fs-3 ms-2 me-0"><span class="path1"></span><span class="path2"></span></i> </span>
                                            <span class="indicator-progress">
                                                Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                            </span>
                                        </button>


                                        <button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="next" id='next'>
                                            Continue
                                            <i class="ki-duotone ki-arrow-right fs-3 ms-1 me-0"><span class="path1"></span><span class="path2"></span></i> </button>
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
<!--begin::Javascript-->
@endsection

@section('customJs')
<script src="{{ asset('backend/assets/plugins/global/plugins.bundle.js') }}"></script>

<script>
    var hostUrl = "assets/";
</script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
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
<script>
    function confirmDelete() {
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
                // TODO: Add your deletion logic here
                // For now, let's show an alert
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

        // Add 'current' class to the current step
        $(steps[currentStep - 1]).find('[data-kt-stepper-element="nav"]').addClass('current');

    }
    const continueButton = document.querySelector('#next');
    continueButton.addEventListener("click", function() {
        // Go to the next step (if not already at the last step)
        if (currentStep < 4) {
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

    function confirmDelete(id)
 {
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


                $.ajax({
                    type: 'get',
                    url: '/admin/deletePlaceOrder/' + id,
                    data: { id: id }, // Assuming id is a parameter you want to send
                    success: function (response) {
                        // Handle the success response here
                        console.log(response);
                        location.reload(true);
                    },
                    error: function (error) {
                        // Handle any errors here
                        console.error(error);
                    }
                });


                Swal.fire('Deleted!', 'Your data has been deleted.', 'success');
            }
        });
    }
</script>
<!--begin::Global Javascript Bundle(mandatory for all pages)-->
<!--end::Custom Javascript-->
<!--end::Javascript-->
@endsection
