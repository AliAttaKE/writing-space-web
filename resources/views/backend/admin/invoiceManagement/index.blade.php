@extends('custom_layout.master')
@section('main_content')
    <div class="d-flex flex-column flex-column-fluid">


        
        <!--begin::Toolbar-->
        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <!--begin::Toolbar container-->
            <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                <!--begin::Page title-->
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                    <!--begin::Title-->
                    <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0 fs-color-white custom-fs-17">
                        Invoice Management</h1>
                    <!--end::Title-->
                    <!--begin::Breadcrumb-->
                    <!-- <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        
                        <li class="breadcrumb-item fs-color-white custom-fs-13">Invoice Management</li>
                        
                    </ul> -->
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->

                <!--begin::Actions-->
                <div class="d-flex align-items-center gap-2 gap-lg-3">

                    <!--begin::Primary button-->
                    <a href="{{route('admin.create.custom.invoice')}}" class="btn btn-sm fw-bold btn-primary badge-custom-bg custom-fs-13 ">Create Invoice</a>
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
                <!--begin::Layout-->
                <div class="d-flex flex-column flex-lg-row">
                    <!--begin::Content-->
                    <div class="flex-lg-row-fluid mb-10 mb-lg-0 me-lg-7 me-xl-10">

                        <!--begin::Card-->
                        <div class="card mb-10 card-custom-bg table-summ">
                            <!--begin::Card header-->
                            <div class="card-header border-0 pt-6 d-flex justify-content-between">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <!--begin::Search-->
                                    <div class="d-flex align-items-center position-relative my-1">
                                        <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-5">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                        <input type="text" data-kt-user-table-filter="search"
                                            class="form-control form-control-solid w-250px ps-13 btn-dark-primary"
                                            placeholder="Search" />
                                    </div>
                                    <!--end::Search-->
                                </div>
                                <!--begin::Card title-->
                                <!--begin::Card toolbar-->
                                <div class="card-toolbar">
                                    <!--begin::Toolbar-->
                                    <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                                        <!--begin::Filter-->
                                        <!--<button type="button" class="btn btn-light-primary me-3"-->
                                        <!--    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">-->
                                        <!--    <i class="ki-duotone ki-filter fs-2">-->
                                        <!--        <span class="path1"></span>-->
                                        <!--        <span class="path2"></span>-->
                                        <!--    </i>Filter</button>-->
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
                                            <form id="filterForm" action="{{ route('admin.invoices.index') }}"
                                                method="GET" enctype="multipart/form-data">
                                                <div class="px-7 py-5" data-kt-user-table-filter="form">
                                                    <!--begin::Input group-->
                                                    <div class="mb-3">
                                                        <label class="form-label fs-6 fw-semibold">Invoice Id:</label>
                                                        <input type="text" placeholder="Invoice Id" name="invoice_id"
                                                        value="{{Request::get('invoice_id')}}"
                                                            autocomplete="off" class="form-control bg-transparent" />
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="mb-3">
                                                        <label class="form-label fs-6 fw-semibold">Item:</label>
                                                        <input type="text" placeholder="Item" name="item_name"
                                                        value="{{Request::get('item_name')}}"
                                                            autocomplete="off" class="form-control bg-transparent" />
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Actions-->
                                                    <div class="d-flex justify-content-end">
                                                        <button type="reset"
                                                            class="btn btn-light btn-active-light-primary fw-semibold me-2 px-6"
                                                            onclick="window.location.href = '{{ route('admin.invoices.index') }}' ">Reset</button>
                                                        <button type="submit"
                                                            class="btn btn-primary fw-semibold px-6">Apply</button>
                                                    </div>
                                                    <!--end::Actions-->
                                                </div>
                                            </form>
                                            <!--end::Content-->
                                        </div>
                                        <!--end::Menu 1-->
                                        <!--end::Filter-->
                                        <!--begin::Export-->
                                        <button type="button" class="btn badge-custom-bg me-3" {{-- data-bs-toggle="modal" data-bs-target="#kt_modal_export_users" --}}
                                            onclick="window.location.href='{{ route('admin.export.invoices') }}'">
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
                                        <div class="modal-dialog modal-dialog-centered mw-650px">
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
                                                    <form id="kt_modal_export_users_form" class="form" action="#">
                                                        <!--begin::Input group-->
                                                        <div class="fv-row mb-10">
                                                            <!--begin::Label-->
                                                            <label class="fs-6 fw-semibold form-label mb-2">Select
                                                                Roles:</label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <select name="role" data-control="select2"
                                                                data-placeholder="Select a role" data-hide-search="true"
                                                                class="form-select form-select-solid fw-bold">
                                                                <option></option>
                                                                <option value="Administrator">Administrator</option>
                                                                <option value="Analyst">Analyst</option>
                                                                <option value="Developer">Developer</option>
                                                                <option value="Support">Support</option>
                                                                <option value="Trial">Trial</option>
                                                            </select>
                                                            <!--end::Input-->
                                                        </div>
                                                        <!--end::Input group-->
                                                        <!--begin::Input group-->
                                                        <div class="fv-row mb-10">
                                                            <!--begin::Label-->
                                                            <label class="required fs-6 fw-semibold form-label mb-2">Select
                                                                Export Format:</label>
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
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body py-4">
                                <!--begin::Table-->
                                <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_invoice">
                                    <thead>
                                        <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                            {{-- <th class="w-10px pe-2">
                                            <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                                <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_table_users .form-check-input" value="1" />
                                            </div>
                                        </th> --}}
                                            <th class="min-w-100px">Invoice Id</th>
                                            <th class="min-w-100px">Bill From</th>
                                            <th class="min-w-80px">Bill To</th>
                                            <th class="min-w-60px">Item</th>
                                            <th class="min-w-60px">Page</th>
                                            <th class="min-w-70px">Price Per Page</th>
                                            <th class="min-w-60px">Total</th>
                                            <th class="text-end min-w-70px">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-gray-600 fw-semibold">
                                        @foreach ($invoices as $key => $invoice)
                                            <tr>
                                                {{-- <td>
                                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="1" />
                                            </div>
                                        </td> --}}
                                                <td class="text-white">{{ $invoice->order_id }}</td>
                                                <td class="">
                                                    <div class="">
                                                        <div class=" mb-3">
                                                            <div class="col">
                                                                <h6 class="fs-6 mb-0 fs-color-white custom-fs-13">Name:</h6>
                                                            </div>
                                                            <div class="col">
                                                                <h6 class="fs-6 fs-color-white custom-fs-13">{{ $invoice->name }}</h6>
                                                            </div>
                                                        </div>
                                                        <div class=" mb-3">
                                                            <div class="col">
                                                                <h6 class="fs-6 mb-0 fs-color-white custom-fs-13">Email:</h6>
                                                            </div>
                                                            <div class="col">
                                                                <h6 class="fs-6 fs-color-white custom-fs-13"> {{ $invoice->email }}</h6>
                                                            </div>
                                                        </div>
                                                        <div class="">
                                                            <div class="col">
                                                                <h6 class="fs-6 mb-0 fs-color-white custom-fs-13">Invoice From:</h6>
                                                            </div>
                                                            <div class="col">
                                                                <h6 class="fs-6 fs-color-white custom-fs-13">{{ $invoice->name }}</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="">
                                                    <div class="">
                                                        <div class=" mb-3">
                                                            <div class="col">
                                                                <h6 class="fs-6 mb-0 fs-color-white custom-fs-13">Name:</h6>
                                                            </div>
                                                            <div class="col">
                                                                <h6 class="fs-6 fs-color-white custom-fs-13">{{ $invoice->to_name }}</h6>
                                                            </div>
                                                        </div>
                                                        <div class=" mb-3">
                                                            <div class="col">
                                                                <h6 class="fs-6 mb-0 fs-color-white custom-fs-13">Email:</h6>
                                                            </div>
                                                            <div class="col">
                                                                <h6 class="fs-6 fs-color-white custom-fs-13">{{ $invoice->to_email }}</h6>
                                                            </div>
                                                        </div>
                                                        <div class="">
                                                            <div class="col">
                                                                <h6 class="fs-6 mb-0 fs-color-white custom-fs-13">Invoice For:</h6>
                                                            </div>
                                                            <div class="col">
                                                                <h6 class="fs-6 fs-color-white custom-fs-13">{{ $invoice->to_name }}</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="">
                                                    <div class="">
                                                        <div class=" mb-3">
                                                            <div class="col">
                                                                <h6 class="fs-6 mb-0 fs-color-white custom-fs-13">Item Name:</h6>
                                                            </div>
                                                            <div class="col">
                                                                <h6 class="fs-6 fs-color-white custom-fs-13">{{ $invoice->item_name }}</h6>
                                                            </div>
                                                        </div>
                                                        <div class=" mb-3">
                                                            <div class="col">
                                                                <h6 class="fs-6 mb-0 fs-color-white custom-fs-13">Discription:</h6>
                                                            </div>
                                                            <div class="col">
                                                                <h6 class="fs-6 limit-text fs-color-white custom-fs-13"> {{ $invoice->description }}
                                                                </h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td> {{ $invoice->page }}</td>
                                                <td class="text-white"><i class="bi bi-currency-dollar me-3"></i>
                                                    {{ $invoice->price_per_page }}</td>
                                                <td class="text-white"><i class="bi bi-currency-dollar me-3"></i>{{ $invoice->total }}</td>
                                                <td class="text-end">
                                                    <a href="#"
                                                        class="btn badge-custom-bg fs-color-white btn-flex btn-center btn-sm"
                                                        data-kt-menu-trigger="click"
                                                        data-kt-menu-placement="bottom-end">Actions
                                                        <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                                    <!--begin::Menu-->
                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600  fw-semibold fs-7 w-125px py-4 badge-custom-bg"
                                                        data-kt-menu="true">
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" data-id="{{$invoice->id}}"
                                                                {{-- data-bs-toggle="modal" data-bs-target="#view_invoice{{$invoice->invoice_id}}" --}}
                                                                class="menu-link invoice-menu px-3 d-flex justify-content-center viewInvoice text-white">View</a>
                                                             
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        {{-- <div class="menu-item px-3">
                                                            <a href="#"
                                                                class="menu-link px-3 d-flex justify-content-center text-white">Edit</a>
                                                        </div> --}}
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#"
                                                                class="menu-link d-flex justify-content-center px-3 text-white invoice-menu"
                                                                onclick="confirmDelete()">Delete</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <!--<div class="menu-item px-3">-->
                                                        <!--    <a href="#"-->
                                                        <!--    onclick="window.location.href='{{ route('admin.generate.invoice.by.id', ['id' => $invoice->id]) }}'"-->
                                                        <!--        class="menu-link d-flex justify-content-center px-3"-->
                                                        <!--        download>Download</a>-->
                                                        <!--</div>-->
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu-->
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <!--end::Table-->
                                <!--begin::Notes-->
                                <div class="mb-0 mt-10 row justify-content-between">
                                    <!--begin::Row-->
                                    <div class="row mb-5 col-5">
                                        <!--begin::Col-->
                                        <!--<div class="col-6">-->
                                        <!--    <a href="#"-->
                                            
                                        <!--        class="btn btn-dark-primary w-100">Download</a>-->
                                        <!--</div>-->
                                        <!--end::Col-->
                                    </div>
                                    <div class="col-3">
                                        <!--end::Row-->
                                        <button type="submit" href="#" class="btn btn-primary badge-custom-bg w-100"
                                            id="kt_invoice_submit_button">
                                            <i class="ki-duotone ki-triangle fs-3">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>Send Invoice</button>
                                    </div>
                                </div>
                                <!--end::Notes-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card-->

                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Layout-->
            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Content wrapper-->

       
<!--end::Content wrapper-->
<div class="modal fade" id="view_invoice" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content badge-custom-bg">
            <div class="modal-header border-0">
                <h5 class="modal-title fs-color-white custom-fs-23" id="exampleModalLabel">Invoice</h5>
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
                                            <img alt="Logo" src="{{asset('backend/assets/media/ws/ws-light-logo.png')}}" />
                                        </a>
                                        <!--end::Logo-->
                                    </div>
                                    <!--end::Top-->
                                    <!--begin::Wrapper-->
                                    <div class="m-0">
                                        <!--begin::Label-->
                                        <div class="fw-bold fs-3 text-gray-800 mb-8 fs-color-white custom-fs-13" id="order_id"></div>
                                       
                                        <!--end::Label-->
                                        <!--begin::Row-->
                                        <div class="row g-5 mb-11">
                                            <!--end::Col-->
                                            <div class="col-sm-6">
                                                <!--end::Label-->
                                                <div class="fw-semibold fs-7 fs-color-white custom-fs-13 mb-1">Issue Date:</div>
                                                <!--end::Label-->
                                                <!--end::Col-->
                                                <div class="fw-bold fs-color-white custom-fs-13" id="created_at"></div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Row-->
                                        <!--begin::Row-->
                                        <div class="row g-5 mb-12">
                                            <!--end::Col-->
                                            <div class="col-sm-6">
                                                <!--end::Label-->
                                                <div class="fw-semibold fs-color-white custom-fs-13 mb-1">Issue For:</div>
                                                <!--end::Label-->
                                                <!--end::Text-->
                                                <div class="fw-bold fs-color-white custom-fs-13" id="name"></div>
                                                <!--end::Text-->
                                                <!--end::Description-->
                                                <div class="fw-semibold fs-color-white custom-fs-13" id="email">
                                                    <br />
                                                    <span id="note"></span>
                                                    
                                                </div>
                                                <!--end::Description-->
                                            </div>
                                            <!--end::Col-->
                                            <!--end::Col-->
                                            <div class="col-sm-6">
                                                <!--end::Label-->
                                                <div class="fw-semibold fs-color-white custom-fs-13 mb-1">Issued By:</div>
                                                <!--end::Label-->
                                                <!--end::Text-->
                                                <div class="fw-bold fs-color-white custom-fs-13" id="to_name"></div>
                                                <!--end::Text-->
                                                <!--end::Description-->
                                                <div class="fw-semibold fs-color-white custom-fs-13" id="to_email">
                                                    <br />
                                                    <span id="to_note"></span>
                                                    
                                                </div>
                                                <!--end::Description-->
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Row-->

                                        {{-- @php
                                            $item_names = json_decode($invoice->item_name);
                                            $descriptions = json_decode($invoice->description);
                                            $pagess = json_decode($invoice->pages);
                                            $price_per_pages = json_decode($invoice->price_per_page);
                                        @endphp --}}

                                       
                                        <!--begin::Content-->
                                        <div class="flex-grow-1 mb-12">
                                            <!--end::Label-->
                                            {{-- <div class="fw-semibold fs-color-white custom-fs-13 mb-1">Item Name:</div> --}}
                                            <!--end::Label-->
                                           
                                            {{-- @for ($i = 0; $i < count($item_names); $i++)
                                            @php
                                                $totalPrice = 0;
                                                $tax = 0;
                                                $discount = 0; 
                                                $totalPrice += $pagess[$i] * $price_per_pages[$i];
                                            @endphp --}}

                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Item name</th>
                                                        <th>Description</th>
                                                        <th>Pages</th>
                                                        <th>Price/page</th>
                                                    </tr>
                                                </thead>
                                                <tbody >
                                                    <!-- Data rows will be dynamically added here -->
                                                    <tr>
                                                        <td id="item_name"></td>
                                                        <td id="description"></td>
                                                        <td id="page"></td>
                                                        <td id="price_per_page"></td>
                                                    </tr>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <td colspan="2" class="text-end" id="total">Sub-Total: <b></b></td>
                                                        <td colspan="2" class="text-end" id="_tax">Tax: </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2" class="text-end" id="_discount">Discount: </td>
                                                        <td colspan="2" class="text-end" id="total">Total: <b></b></td>
                                                    </tr>
                                                </tfoot>
                                            </table>

                                          
                                            <!--end::Text-->
                                            <div class="fw-bold fs-6 text-gray-800"></div>
                                            <!--end::Text-->
                                            <!--end::Description-->
                                            <div class="fw-semibold fs-7 text-gray-600"></div>
                                            {{-- @endfor --}}
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Content-->
                                        <!--begin::Row-->
                                        <div class="row g-5 mb-12">
                                            <!--end::Col-->
                                            <div class="col-sm-4">
                                                <!--end::Label-->
                                                {{-- <div class="fw-semibold fs-7 text-gray-600 mb-1">Page:</div> --}}
                                                <!--end::Label-->
                                                <!--end::Text-->
                                                {{-- <div class="fw-bold fs-6 text-gray-800">2</div> --}}
                                                <!--end::Text-->
                                            </div>
                                            <!--end::Col-->
                                            <!--end::Col-->
                                            <div class="col-sm-4">
                                                <!--end::Label-->
                                                {{-- <div class="fw-semibold fs-7 text-gray-600 mb-1">Price Per Page:</div> --}}
                                                <!--end::Label-->
                                                <!--end::Text-->
                                                {{-- <div class="fw-bold fs-6 text-gray-800"><i class="bi bi-currency-dollar me-3"></i> 10</div> --}}
                                                <!--end::Text-->
                                            </div>
                                            <!--end::Col-->
                                            <!--end::Col-->
                                            <div class="col-sm-4">
                                                <!--end::Label-->
                                                {{-- <div class="fw-semibold fs-7 text-gray-600 mb-1">Total:</div> --}}
                                                <!--end::Label-->
                                                <!--end::Text-->
                                                {{-- <div class="fw-bold fs-6 text-gray-800"><i class="bi bi-currency-dollar me-3"></i> 25</div> --}}
                                                <!--end::Text-->
                                            </div>
                                            <!--end::Col-->
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
                    <button type="button" 
                    class="btn btn-dark-primary my-1 me-12 downloadInvoice" 
                    >Download Invoice</button>
                </div>

                <div class="">
                    <button type="button" 
                    class="btn btn-dark-primary my-1 me-12 sendInvoiceByEmail"
                    >Send Invoice</button>
                </div>
                
                <div class="">
                    <button type="button" class="btn btn-dark-primary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>

    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <i class="ki-duotone ki-arrow-up">
            <span class="path1"></span>
            <span class="path2"></span>
        </i>
    </div>
    <!--end::Scrolltop-->
    <!--begin::Javascript-->
    <script>
        var hostUrl = "assets/";
    </script>
    <script>
        $(document).ready(function() {        
        // view in modal
        let invoice;
        $(document).on('click', '.viewInvoice', function (e){
            e.preventDefault();
            $('#view_invoice').modal('show');
            var invoice_id = $(this).data('id');
            $.ajax({
                type: "GET",
                url: '{{ route("admin.invoice.view", ["invoice_id" => "__invoice_id"]) }}'.replace('__invoice_id', invoice_id),
                dataType: "json",
                success: function (response) {
                    var data = response;

                    var subTotal = 0;
                    var tax = 0;
                    var discount = 0;
                    var total = 0;

                    if (data) {

                        $('#invoice-data').empty();
                        $('#_subTotal b').text('');
                        $('#_tax').append('');
                        $('#_discount').append('');
                        $('#_total b').text('');
                        $('#invoice_id').text(data.id || '');
                        $('#user_id').text(data.user_id || '');
                        $('#created_at').text(data.created_at || '');
                        // $('#invoice_id').text(data.invoice_id || '');
                        $('#order_id').text(data.order_id || '');
                        $('#description').text(data.description || '');
                        $('#to_name').text(data.to_name || '');
                        $('#to_email').text(data.to_email || '');
                        $('#from_note').text(data.from_note || '');
                        $('#name').text(data.name || '');
                        $('#email').text(data.email || '');
                        $('#item_name').text(data.item_name || '');
                        $('#description').text(data.description || '');
                        $('#page').text(data.page || '');
                        $('#price_per_page').text(data.price_per_page || '');
                        // $('#to_note').text(data.to_note || '');
                        total = (data.price_per_page * data.page);
                        

                        $('#total b').text(subTotal.toFixed(2));
                        $('#_tax').append(tax.toFixed(2));
                        $('#_discount').append(discount.toFixed(2));
                        $('#total b').text(total.toFixed(2));


                        //download invoice
                       


                    }else {
                        console.log('No data available.');
                    }

                }
            });

        });

        $(document).on('click', '.downloadInvoice', function (){
            let order_id =   $('#order_id').text();
            console.log(order_id);
            $.ajax({
                type: "GET",
                url: '{{ route("admin.generate.invoice", ["order_id" => "__order_id"]) }}'.replace('__order_id', order_id),
                dataType: "json", 
                success: function (response) {
                    console.log(response.message);
                    if(response.status)
                    {
                        toastr.success(response.message);
                    }
                }
            
            
            });//ajax
        })

        // send invoice by email
        $(document).on('click', '.sendInvoiceByEmail', function (e){
            var email = $('#email').text();
            console.log(email);
            $.ajax({
                type: "GET",
                url: '{{ route("admin.invoice.by.email", ["email" => "__email"]) }}'.replace('__email', email),
                dataType: "json", 
                success: function (response) {
                    console.log(response.message);
                    if(response.status)
                    {
                        toastr.success(response.message);
                    }
                }
            
            });//ajax
        });


        // Delete Action
        $(document).on('click', '.delete-invoice', function(e) {
            e.preventDefault();
            var invoiceId = $(this).data('invoice-id');

            // Make an AJAX request to delete the invoice
            $.ajax({
                url: '/invoices/' + invoiceId,
                type: 'DELETE',
                success: function(response) {
                    // Reload or update the table after successful deletion
                    // You can use DataTables or other similar plugins to update the table
                    console.log(response);
                },
                error: function(xhr) {
                    // Handle errors
                    console.log(xhr.responseText);
                }
            });
        });
    });



        // Function to handle table search
        function handleTableSearch() {
            // Get the search input value
            var searchText = $('[data-kt-user-table-filter="search"]').val().toLowerCase();
            console.log(searchText)
            // Loop through each table row
            $('#kt_table_invoice tbody tr').each(function() {
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
    <script>
        $(document).ready(function() {
            // Initialize DataTables
            var table = $('#kt_table_invoice').DataTable();

            // Filter form submission
            $('[data-kt-user-table-filter="filter"]').on('click', function(e) {
                e.preventDefault();

                // Get filter values
                var invoiceId = $('input[name="invoice-id"]').val();
                var item = $('input[name="item"]').val();

                // Apply filters
                table.columns(1).search(invoiceId).draw();
                table.columns(2).search(item).draw();
            });

            // Reset filter form
            $('[data-kt-user-table-filter="reset"]').on('click', function(e) {
                e.preventDefault();

                // Reset input fields
                $('input[name="invoice-id"]').val('');
                $('input[name="item"]').val('');

                // Clear filters
                table.columns().search('').draw();
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#kt_table_invoice').DataTable();
        });
    </script>
@endsection
