@extends('custom_layout.master')
@section('main_content')
    <!--begin::Content wrapper-->
    <div class="d-flex flex-column flex-column-fluid">

        <!--begin::Toolbar-->
        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <!--begin::Toolbar container-->
            <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                <!--begin::Page title-->
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                    <!--begin::Title-->
                    <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0 fs-color-white custom-fs-23">
                        Invoice Management</h1>
                    <!--end::Title-->
                    <!--begin::Breadcrumb-->
                    <!-- <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">

                        <li class="breadcrumb-item text-muted fs-color-white custom-fs-13">Invoice Management</li>

                    </ul> -->
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->

                <!--begin::Actions-->
                <div class="d-flex align-items-center gap-2 gap-lg-3">
                    <!--begin::Primary button-->
                    <a href="{{ route('admin.invoices.index') }}" class="btn btn-sm fw-bold badge-custom-bg">Back</a>
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
                        <div class="card mb-10 card-custom-bg message-summ">
                            <!--begin::Card body-->
                            <div class="card-body p-12">
                                <!--begin::Form-->
                                <form action="{{ route('admin.store.custom.invoice') }}"  enctype="multipart/form-data"
                                    method="POST" id="kt_invoice_form">
                                    @csrf
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-column align-items-start flex-xxl-row">
                                        <!--begin::Input group-->
                                        <div class="d-flex align-items-center flex-equal fw-row me-4 order-2"
                                            data-bs-toggle="tooltip" data-bs-trigger="hover"
                                            data-bs-original-title="Specify invoice date" data-kt-initialized="1">
                                            <!--begin::Date-->
                                            <div class="fs-6 fw-bold fs-color-white custom-fs-13 text-nowrap">Date:</div>
                                            <!--end::Date-->
                                            <!--begin::Input-->
                                            <div class="position-relative d-flex align-items-center w-150px">
                                                <!--begin::Datepicker-->
                                                <input type="date" id="date" name="date"
                                                    class="form-control ms-3 btn-dark-primary">
                                                <!--end::Datepicker-->
                                                <!--begin::Icon-->
                                                <!--end::Icon-->
                                            </div>
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="d-flex flex-center flex-equal fw-row text-nowrap order-1 order-xxl-2 me-4"
                                            data-bs-toggle="tooltip" data-bs-trigger="hover"
                                            data-bs-original-title="Enter invoice number" data-kt-initialized="1">
                                            <span class="fs-2x fw-bold text-gray-800 fs-color-white custom-fs-23">Invoice #</span>
                                            <input type="text" name="invoice_id"
                                                class="form-control form-control-flush fw-bold text-muted fs-3 w-320px fs-color-white custom-fs-23"
                                                id="invoiceRandomNumber" readonly>

                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Top-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed my-10"></div>
                                    <!--end::Separator-->

                                    <!--begin::Wrapper-->
                                    <div class="mb-0">
                                        <!--begin::Row-->
                                        <div class="row gx-10 mb-5 invoice-form">
                                            <!--begin::Col-->
                                            <div class="col-lg-6">
                                                <label class="form-label fs-6 fw-bold text-gray-700 mb-3 fs-color-white custom-fs-13">Bill From</label>
                                                <!--begin::Input group-->
                                                <div class="mb-5">
                                                    <input type="text" class="form-control form-control-solid btn-dark-primary"
                                                        name="from_name" placeholder="Name">
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="mb-5">
                                                    <input type="text" class="form-control form-control-solid btn-dark-primary"
                                                        name="from_email" placeholder="Email">
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="mb-5">
                                                    <textarea class="form-control form-control-solid btn-dark-primary" name="from_note" rows="3"
                                                        placeholder="Who is this invoice from?"></textarea>
                                                </div>
                                                <!--end::Input group-->
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-lg-6">
                                                <label class="form-label fs-6 fw-bold text-gray-700 mb-3 fs-color-white custom-fs-13">Bill To</label>
                                                <!--begin::Input group-->
                                                <div class="mb-5">
                                                    <input type="text" class="form-control form-control-solid btn-dark-primary"
                                                        name="to_name" placeholder="Name">
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="mb-5">
                                                    <input type="text" class="form-control form-control-solid btn-dark-primary"
                                                        name="to_email" id="to_email" placeholder="Email">
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="mb-5">
                                                    <textarea name="to_note" class="form-control form-control-solid btn-dark-primary" rows="3" placeholder="What is this invoice for?"></textarea>
                                                </div>
                                                <!--end::Input group-->
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Row-->
                                        <!--begin::Table wrapper-->
                                        <div class="table-responsive mb-10">
                                            <!--begin::Table-->
                                            <table class="table g-5 gs-0 mb-0 fw-bold text-gray-700"
                                                data-kt-element="items">
                                                <!--begin::Table head-->
                                                <thead>
                                                    <tr class="border-bottom fs-7 fw-bold text-gray-700 text-uppercase">
                                                        <th class="min-w-300px w-475px">Item</th>
                                                        <th class="min-w-100px w-100px">Page</th>
                                                        <th class="min-w-150px w-150px">Price Per Page</th>
                                                        <th class="min-w-100px w-150px text-end">Total</th>
                                                        <th class="min-w-75px w-75px text-end">Action</th>
                                                    </tr>
                                                </thead>
                                                <!--end::Table head-->
                                                <!--begin::Table body-->
                                                <tbody id="newItem">
                                                    <tr class="border-bottom border-bottom-dashed" data-kt-element="item">
                                                        <td class="pe-7">
                                                            <input type="text" class="form-control form-control-solid mb-2 btn-dark-primary" name="item_name[]" placeholder="Item name">
                                                            <input type="text" class="form-control form-control-solid btn-dark-primary" name="description[]" placeholder="Description">
                                                        </td>
                                                        <td class="ps-0">
                                                            <input class="form-control form-control-solid btn-dark-primary" type="number" min="1" name="pages[]" placeholder="1"
                                                                value="1" id="pages_0"> <!-- Added id="pages_0" -->
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control form-control-solid text-end btn-dark-primary" name="price_per_page[]"
                                                                placeholder="0.00" value="0.00" id="price_per_page_0"> <!-- Added id="price_per_page_0" -->
                                                        </td>
                                                        <td class="pt-8 text-end text-nowrap">$ <span data-kt-element="total" id="total_0">0.00</span></td> <!-- Added id="total_0" -->
                                                        <td class="pt-5 text-end">
                                                            <button type="button" class="btn btn-sm btn-icon btn-active-color-primary"
                                                                data-kt-element="remove-item">
                                                                <i class="ki-duotone ki-trash fs-3">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                    <span class="path3"></span>
                                                                    <span class="path4"></span>
                                                                    <span class="path5"></span>
                                                                </i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </tbody>


                                                <!--end::Table body-->
                                                <!--begin::Table foot-->
                                                <tfoot>
                                                    <tr
                                                        class="border-top border-top-dashed align-top fs-6 fw-bold text-gray-700">
                                                        <th class="text-primary">
                                                            <button class="btn btn-link py-1 addItemButton"
                                                                >Add item</button>
                                                        </th>
                                                        <th colspan="2"
                                                            class="border-bottom border-bottom-dashed ps-0">
                                                            <div class="d-flex flex-column align-items-start">
                                                                <div class="fs-5">Subtotal</div>
                                                                <button class="btn btn-link py-1 fs-color-white custom-fs-13" data-bs-toggle="tooltip"
                                                                    data-bs-trigger="hover"
                                                                    data-bs-original-title="Coming soon"
                                                                    data-kt-initialized="1">Add tax</button>
                                                                <button class="btn btn-link py-1 fs-color-white custom-fs-13" data-bs-toggle="tooltip"
                                                                    data-bs-trigger="hover"
                                                                    data-bs-original-title="Coming soon"
                                                                    data-kt-initialized="1">Add discount</button>
                                                            </div>
                                                        </th>
                                                        <th colspan="2"
                                                            class="border-bottom border-bottom-dashed text-end">$
                                                            <span id="_sub_total">0.00</span>
                                                        </th>
                                                    </tr>
                                                    <tr class="align-top fw-bold text-gray-700">
                                                        <th></th>
                                                        <th colspan="2" class="fs-4 ps-0">Total</th>
                                                        <th colspan="2" class="text-end fs-4 text-nowrap">$
                                                            <span id="_grand_total">0.00</span>
                                                        </th>
                                                    </tr>


                                                </tfoot>
                                                <!--end::Table foot-->
                                            </table>
                                        </div>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Wrapper-->


                                    <div class="mb-0 mt-10 row justify-content-between">
                                        <!--begin::Row-->
                                        <div class="row mb-5 col-5">
                                            <!--begin::Col-->
                                            {{-- <div class="col-6">
                                                <a href="#" class="btn btn-light btn-active-light-primary w-100">Download</a>
                                            </div> --}}
                                            <!--end::Col-->
                                        </div>
                                        <div class="col-3">
                                            <!--end::Row-->
                                            <button type="button" class="btn badge-custom-bg w-100"
                                                id="kt_invoice_submit_button">
                                                <i class="ki-duotone ki-triangle fs-3">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                </i>
                                                Create Invoice
                                            </button>
                                        </div>
                                    </div>


                                </form>
                                <!--end::Form-->

                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card-->

                        {{-- Show custom invoice records --}}
                        {{-- @include('backend.admin.CustomInvoice._show', ['customInvoices' => $customInvoices]) --}}
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
                                            placeholder="Search Invoice">
                                    </div>
                                    <!--end::Search-->
                                </div>
                                <!--begin::Card title-->
                                <!--begin::Card toolbar-->
                                <div class="card-toolbar">
                                    <!--begin::Toolbar-->
                                    <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                                        <!--begin::Filter-->
                                        <button type="button" class="btn badge-custom-bg me-3 d-none"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            <i class="ki-duotone ki-filter fs-2 text-white">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>Filter</button>
                                        <!--begin::Menu 1-->
                                        <div class="menu menu-sub menu-sub-dropdown w-300px w-md-325px badge-custom-bg"
                                            data-kt-menu="true">
                                            <!--begin::Header-->
                                            <div class="px-7 py-5">
                                                <div class="fs-5 text-white fw-bold">Filter Options</div>
                                            </div>
                                            <!--end::Header-->
                                            <!--begin::Separator-->
                                            <div class="separator border-gray-200"></div>
                                            <!--end::Separator-->
                                            <!--begin::Content-->
                                            <div class="px-7 py-5" data-kt-user-table-filter="form">
                                                <!--begin::Input group-->
                                                <div class="mb-3">
                                                    <label class="form-label fs-6 fw-semibold text-white">Invoice Id:</label>
                                                    <input type="text" placeholder="Invoice Id" name="invoice-id"
                                                        autocomplete="off" class="form-control bg-transparent btn-dark-primary">
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="mb-3">
                                                    <label class="form-label fs-6 fw-semibold text-white">Item:</label>
                                                    <input type="text" placeholder="Item" name="item"
                                                        autocomplete="off" class="form-control bg-transparent btn-dark-primary">
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Actions-->
                                                <div class="d-flex justify-content-end">
                                                    <button type="reset"
                                                        class="btn btn-dark-primary fw-semibold me-2 px-6"
                                                        data-kt-menu-dismiss="true"
                                                        data-kt-user-table-filter="reset">Reset</button>
                                                    <button type="submit" class="btn btn-dark-primary fw-semibold px-6"
                                                        data-kt-menu-dismiss="true"
                                                        data-kt-user-table-filter="filter">Apply</button>
                                                </div>
                                                <!--end::Actions-->
                                            </div>
                                            <!--end::Content-->
                                        </div>
                                        <!--end::Menu 1-->
                                        <!--end::Filter-->
                                        <!--begin::Export-->
                                        <button type="button" class="btn badge-custom-bg me-3 " data-bs-toggle="modal"
                                            data-bs-target="#kt_modal_export_users">
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
                                            <span class="me-2"
                                                data-kt-user-table-select="selected_count"></span>Selected
                                        </div>
                                        <button type="button" class="btn btn-danger"
                                            data-kt-user-table-select="delete_selected">Delete Selected</button>
                                    </div>
                                    <!--end::Group actions-->
                                    <!--begin::Modal - Adjust Balance-->
                                    <div class="modal fade" id="kt_modal_export_users" tabindex="-1"
                                        aria-hidden="true">
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
                                                                class="form-select form-select-solid fw-bold select2-hidden-accessible"
                                                                data-select2-id="select2-data-1-0jid" tabindex="-1"
                                                                aria-hidden="true" data-kt-initialized="1">
                                                                <option data-select2-id="select2-data-3-ajh6"></option>
                                                                <option value="Administrator">Administrator</option>
                                                                <option value="Analyst">Analyst</option>
                                                                <option value="Developer">Developer</option>
                                                                <option value="Support">Support</option>
                                                                <option value="Trial">Trial</option>
                                                            </select><span
                                                                class="select2 select2-container select2-container--bootstrap5"
                                                                dir="ltr" data-select2-id="select2-data-2-bpuu"
                                                                style="width: 100%;"><span class="selection"><span
                                                                        class="select2-selection select2-selection--single form-select form-select-solid fw-bold"
                                                                        role="combobox" aria-haspopup="true"
                                                                        aria-expanded="false" tabindex="0"
                                                                        aria-disabled="false"
                                                                        aria-labelledby="select2-role-fd-container"
                                                                        aria-controls="select2-role-fd-container"><span
                                                                            class="select2-selection__rendered"
                                                                            id="select2-role-fd-container" role="textbox"
                                                                            aria-readonly="true"
                                                                            title="Select a role"><span
                                                                                class="select2-selection__placeholder">Select
                                                                                a role</span></span><span
                                                                            class="select2-selection__arrow"
                                                                            role="presentation"><b
                                                                                role="presentation"></b></span></span></span><span
                                                                    class="dropdown-wrapper"
                                                                    aria-hidden="true"></span></span>
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
                                                                class="form-select form-select-solid fw-bold select2-hidden-accessible"
                                                                data-select2-id="select2-data-4-n8tr" tabindex="-1"
                                                                aria-hidden="true" data-kt-initialized="1">
                                                                <option data-select2-id="select2-data-6-5mha"></option>
                                                                <option value="excel">Excel</option>
                                                                <option value="pdf">PDF</option>
                                                                <option value="cvs">CVS</option>
                                                                <option value="zip">ZIP</option>
                                                            </select><span
                                                                class="select2 select2-container select2-container--bootstrap5"
                                                                dir="ltr" data-select2-id="select2-data-5-k64x"
                                                                style="width: 100%;"><span class="selection"><span
                                                                        class="select2-selection select2-selection--single form-select form-select-solid fw-bold"
                                                                        role="combobox" aria-haspopup="true"
                                                                        aria-expanded="false" tabindex="0"
                                                                        aria-disabled="false"
                                                                        aria-labelledby="select2-format-1t-container"
                                                                        aria-controls="select2-format-1t-container"><span
                                                                            class="select2-selection__rendered"
                                                                            id="select2-format-1t-container"
                                                                            role="textbox" aria-readonly="true"
                                                                            title="Select a format"><span
                                                                                class="select2-selection__placeholder">Select
                                                                                a format</span></span><span
                                                                            class="select2-selection__arrow"
                                                                            role="presentation"><b
                                                                                role="presentation"></b></span></span></span><span
                                                                    class="dropdown-wrapper"
                                                                    aria-hidden="true"></span></span>
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
                                <div id="kt_table_invoice_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                    <div class="table-responsive">
                                        <table class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer"
                                            id="kt_table_invoice" aria-describedby="kt_table_invoice_info">
                                            <thead>
                                                <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">

                                                    <th class="min-w-100px sorting" tabindex="0"
                                                        aria-controls="kt_table_invoice" rowspan="1" colspan="1"
                                                        aria-label="Invoice Id: activate to sort column ascending"
                                                        style="width: 103.578px;">Invoice Id</th>
                                                    <th class="min-w-100px sorting" tabindex="0"
                                                        aria-controls="kt_table_invoice" rowspan="1" colspan="1"
                                                        aria-label="Bill From: activate to sort column ascending"
                                                        style="width: 249.141px;">Bill From</th>
                                                    <th class="min-w-80px sorting" tabindex="0"
                                                        aria-controls="kt_table_invoice" rowspan="1" colspan="1"
                                                        aria-label="Bill To: activate to sort column ascending"
                                                        style="width: 249.141px;">Bill To</th>

                                                    <th class="min-w-80px sorting" tabindex="0"
                                                        aria-controls="kt_table_invoice" rowspan="1" colspan="1"
                                                        aria-label="Bill To: activate to sort column ascending"
                                                        style="width: 249.141px;">Created Date</th>

                                                    <th class="text-end min-w-70px sorting" tabindex="0"
                                                        aria-controls="kt_table_invoice" rowspan="1" colspan="1"
                                                        aria-label="Actions: activate to sort column ascending"
                                                        style="width: 98.8906px;">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody class="text-gray-600 fw-semibold">

                                                    @foreach ($customInvoices as $invoice)
                                                    <tr class="odd">

                                                        <td class="text-white">{{$invoice->invoice_id}}</td>
                                                        <td class="">
                                                            <div class="">
                                                                <div class=" mb-3">
                                                                    <div class="col">
                                                                        <h6 class="fs-6 mb-0 fs-color-white custom-fs-13">Name:</h6>
                                                                    </div>
                                                                    <div class="col">
                                                                        <h6 class="fs-6 fs-color-white custom-fs-13">{{$invoice->from_name}}</h6>
                                                                    </div>
                                                                </div>
                                                                <div class=" mb-3">
                                                                    <div class="col">
                                                                        <h6 class="fs-6 mb-0 fs-color-white custom-fs-13">Email:</h6>
                                                                    </div>
                                                                    <div class="col">
                                                                        <h6 class="fs-6 fs-color-white custom-fs-13">{{$invoice->from_email}}</h6>
                                                                    </div>
                                                                </div>
                                                                <div class="">
                                                                    <div class="col">
                                                                        <h6 class="fs-6 mb-0 fs-color-white custom-fs-13">Invoice From:</h6>
                                                                    </div>
                                                                    <div class="col">
                                                                        <h6 class="fs-6 fs-color-white custom-fs-13">{{$invoice->from_note}}</h6>
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
                                                                        <h6 class="fs-6 fs-color-white custom-fs-13">{{$invoice->to_name}}</h6>
                                                                    </div>
                                                                </div>
                                                                <div class=" mb-3">
                                                                    <div class="col">
                                                                        <h6 class="fs-6 mb-0 fs-color-white custom-fs-13">Email:</h6>
                                                                    </div>
                                                                    <div class="col">
                                                                        <h6 class="fs-6 fs-color-white custom-fs-13">{{$invoice->to_email}}</h6>
                                                                    </div>
                                                                </div>
                                                                <div class="">
                                                                    <div class="col">
                                                                        <h6 class="fs-6 mb-0 fs-color-white custom-fs-13">Invoice For:</h6>
                                                                    </div>
                                                                    <div class="col">
                                                                        <h6 class="fs-6 fs-color-white custom-fs-13">{{$invoice->to_note}}</h6>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-white">
                                                            {{$invoice->created_at}}
                                                        </td>

                                                        <td class="text-end">
                                                            <a href="#"
                                                                class="btn badge-custom-bg btn-flex btn-center btn-sm"
                                                                data-kt-menu-trigger="click"
                                                                data-kt-menu-placement="bottom-end">Actions
                                                                <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                                            <!--begin::Menu-->
                                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4 badge-custom-bg"
                                                                data-kt-menu="true">

                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a
                                                                    {{-- href="{{route('admin.send.custom.invoice', ['id' => $invoice->id])}}" --}}
                                                                        class="menu-link px-3 d-flex justify-content-center sendEmailByid text-white" data-id="{{$invoice->id}}">Send Invoice</a>
                                                                </div>
                                                                <!--end::Menu item-->

                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="{{ route('admin.view.custom.invoice', ['id' => $invoice->id]) }}"
                                                                        class="menu-link px-3 d-flex justify-content-center text-white">Edit</a>

                                                                </div>
                                                                <!--end::Menu item-->

                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="#" data-id="{{$invoice->id}}"
                                                                        {{-- data-bs-toggle="modal" data-bs-target="#view_invoice{{$invoice->invoice_id}}" --}}
                                                                        class="menu-link px-3 d-flex justify-content-center viewInvoice text-white">View</a>

                                                                </div>
                                                                <!--end::Menu item-->

                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="#"
                                                                        class="menu-link d-flex justify-content-center px-3 text-white"
                                                                        onclick="confirmDelete({{$invoice->id}})">Delete</a>
                                                                </div>
                                                                <!--end::Menu item-->

                                                            </div>
                                                            <!--end::Menu-->
                                                        </td>
                                                    </tr>
                                                    @endforeach



                                            </tbody>
                                        </table>
                                    </div>
                                    <div>
                                        {{$customInvoices->links()}}
                                    </div>
                                    {{-- <div class="row">
                                        <div
                                            class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start">
                                            <div class="dataTables_length" id="kt_table_invoice_length"><label><select
                                                        name="kt_table_invoice_length" aria-controls="kt_table_invoice"
                                                        class="form-select form-select-sm form-select-solid">
                                                        <option value="10">10</option>
                                                        <option value="25">25</option>
                                                        <option value="50">50</option>
                                                        <option value="100">100</option>
                                                    </select></label></div>
                                            <div class="dataTables_info" id="kt_table_invoice_info" role="status"
                                                aria-live="polite">Showing 1 to 1 of 1 records</div>
                                        </div>
                                        <div
                                            class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end">
                                            <div class="dataTables_paginate paging_simple_numbers"
                                                id="kt_table_invoice_paginate">
                                                <ul class="pagination">
                                                    <li class="paginate_button page-item previous disabled"
                                                        id="kt_table_invoice_previous"><a href="#"
                                                            aria-controls="kt_table_invoice" data-dt-idx="0"
                                                            tabindex="0" class="page-link"><i class="previous"></i></a>
                                                    </li>
                                                    <li class="paginate_button page-item active"><a href="#"
                                                            aria-controls="kt_table_invoice" data-dt-idx="1"
                                                            tabindex="0" class="page-link">1</a></li>
                                                    <li class="paginate_button page-item next disabled"
                                                        id="kt_table_invoice_next"><a href="#"
                                                            aria-controls="kt_table_invoice" data-dt-idx="2"
                                                            tabindex="0" class="page-link"><i class="next"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div> --}}
                                </div>
                                <!--end::Table-->
                                <!--begin::Notes-->
                                {{-- <div class="mb-0 mt-10 row justify-content-between">
                                    <!--begin::Row-->
                                    <div class="row mb-5 col-5">
                                        <!--begin::Col-->
                                        <div class="col-6">
                                            <a href="#"
                                                class="btn btn-light btn-active-light-primary w-100">Download</a>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <div class="col-3">
                                        <!--end::Row-->
                                        <button type="submit" href="#" class="btn btn-primary w-100"
                                            id="kt_invoice_submit_button">
                                            <i class="ki-duotone ki-triangle fs-3">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>Send Invoice</button>
                                    </div>
                                </div> --}}
                                <!--end::Notes-->
                            </div>
                            <!--end::Card body-->
                        </div>


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
<div class="modal fade view-invoice" id="view_invoice" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                        <div class="fw-bold fs-color-white custom-fs-13 mb-8" id="id_modal_invoice" style="display: none;"></div>
                                        <div class="fw-bold fs-color-white custom-fs-13 mb-8" id="invoice_id"></div>
                                        <!--end::Label-->
                                        <!--begin::Row-->
                                        <div class="row g-5 mb-11">
                                            <!--end::Col-->
                                            <div class="col-sm-6">
                                                <!--end::Label-->
                                                <div class="fw-semibold fs-color-white custom-fs-13 mb-1">Issue Date:</div>
                                                <!--end::Label-->
                                                <!--end::Col-->
                                                <div class="fw-bold fs-color-white custom-fs-13" id="issue_date"></div>
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
                                            <!--end::Col-->
                                            <div class="col-sm-6">
                                                <!--end::Label-->
                                                <div class="fw-semibold fs-color-white custom-fs-13 mb-1">Issued By:</div>
                                                <!--end::Label-->
                                                <!--end::Text-->
                                                <div class="fw-bold fs-color-white custom-fs-13" id="from_name"></div>
                                                <!--end::Text-->
                                                <!--end::Description-->
                                                <div class="fw-semibold fs-color-white custom-fs-13" id="from_email">
                                                    <br />
                                                    <span id="from_note"></span>

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
                                                <tbody id="invoice-data">
                                                    <!-- Data rows will be dynamically added here -->
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <td colspan="2" class="text-end" id="_subTotal">Sub-Total: <b></b></td>
                                                        <td colspan="2" class="text-end" id="_tax">Tax: </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2" class="text-end" id="_discount">Discount: </td>
                                                        <td colspan="2" class="text-end" id="_total">Total: <b></b></td>
                                                    </tr>
                                                </tfoot>
                                            </table>

                                            {{-- <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>item name</th>
                                                        <th>description</th>
                                                        <th>pages</th>
                                                        <th>price/page</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="mb-3" style="border-bottom: 1px solid black;">
                                                        <td scope="row">{{ $item_names[$i] }}</td>
                                                        <td>{{ $descriptions[$i] }}</td>
                                                        <td>{{ $pagess[$i] }}</td>
                                                        <td>{{ $price_per_pages[$i] }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2" class="text-end" id="_subTotal">Sub-Total: <b>{{$totalPrice}}</b> </td>
                                                        <td colspan="" class="text-end" id="_tax">Tax: {{$tax != 0 ? $tax : '0'}}</td>
                                                        <td colspan="" class="text-end" id="_discount">Discount: {{$discount != 0 ? $discount : '0'}}</td>
                                                    </tr>
                                                    <tr>

                                                        <td colspan="4"  class="text-end" id="_total">Total: <b>{{$totalPrice}}</b></td>
                                                    </tr>
                                                </tbody>
                                            </table> --}}
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

                {{-- <div class="">
                    <button type="button"
                    class="btn btn-success my-1 me-12 modalInvoiceDownload"
                    >Download Invoice</button>
                </div> --}}

                <div class="">
                    <button type="button"
                    class="btn btn-dark-primary my-1 me-12 sendInvoiceByEmail"
                    >Send Invoice</button>
                </div>

                <div class="">
                    <button type="button" class="btn badge-custom-bg-2" data-bs-dismiss="modal">Close</button>
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
@endsection
@section('customJs')
<script>
    $(document).ready( function (){

        //download invoice from modal;
        $(document).on('click', '.modalInvoiceDownload', function (e){
            // alert('okay');
            var id = $("#id_modal_invoice").text();
            // console.log(id);

            $.ajax({
                type: "GET",
                url: '{{ route("admin.generate.custom.invoice", ["id" => "__id"]) }}'.replace('__id', id),
                success: function (response) {
                    console.log(response.message);
                    if(response.status)
                    {
                        toastr.success(response.message);
                    }
                }


            });//ajax

        });


        $('#kt_invoice_submit_button').on('click', function(e){
            e.preventDefault();
            if ($("#to_email").val().trim() !== "") {
                // alert('ok');
                $("#kt_invoice_form").submit();
            }
        });


        function updateRowTotal(row) {
            var pages = parseFloat(row.find('input[name="pages[]"]').val());
            var pricePerPage = parseFloat(row.find('input[name="price_per_page[]"]').val());
            var itemTotal = pages * pricePerPage;
            row.find('span[data-kt-element="total"]').text(itemTotal.toFixed(2));
            return itemTotal;
        }


        function updateTotal() {
            var total = 0;
            $('#newItem tr[data-kt-element="item"]').each(function() {
                total += updateRowTotal($(this));
            });
            $('#_sub_total').text(total.toFixed(2));
            updateGrandTotal();
        }


        function updateGrandTotal() {
            var subTotal = parseFloat($('#_sub_total').text());

            var grandTotal = subTotal;
            $('#_grand_total').text(grandTotal.toFixed(2));
        }


        $(document).on('click', '.addItemButton', function(e) {
            e.preventDefault();
            var newRow = $('#newItem tr:last').clone();
            newRow.find('input[type="text"]').val('');
            newRow.find('input[type="number"]').val('1');
            newRow.find('span[data-kt-element="total"]').text('0.00');
            $('#newItem').append(newRow);
            updateTotal();
        });


        $(document).on('click', '[data-kt-element="remove-item"]', function() {
            if ($('#newItem tr').length > 1) {
                $(this).closest('tr').remove();
            } else {
                $(this).closest('tr').find('input[type="text"]').val('');
                $(this).closest('tr').find('input[type="number"]').val('1');
                $(this).closest('tr').find('span[data-kt-element="total"]').text('0.00');
            }
            updateTotal();
        });


        $(document).on('input', 'input[name="pages[]"], input[name="price_per_page[]"]', function() {
            var row = $(this).closest('tr');
            updateRowTotal(row);
            updateTotal();
        });


    });
</script>
<script>
    // Function to handle table search
    function handleTableSearch() {
        // Get the search input value
        var searchText = $('[data-kt-user-table-filter="search"]').val().toLowerCase();
console.log(searchText)
        // Loop through each table row
        $('#kt_table_invoice tbody tr').each(function () {
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
    $('[data-kt-user-table-filter="search"]').on('input', function () {
        handleTableSearch();
    });

</script>
<script>
$(document).ready(function() {


    // send invoice by email
    $(document).on('click', '.sendInvoiceByEmail', function (e){
        // alert('ok');
        var email = $('#to_email').text();
        // console.log(email);
        $.ajax({
            type: "GET",
            url: '{{ route("admin.send.invoice.by.email", ["email" => "__email"]) }}'.replace('__email', email),
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

    //send email
    $(document).on('click', '.sendEmailByid', function (e){
        e.preventDefault()
        // alert('ok');
        var id = $(this).data('id');
        // console.log(id);
        $.ajax({
            type: "GET",
            url: '{{ route("admin.send.custom.invoice", ["id" => "__id"]) }}'.replace('__id', id),
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


    // view in modal
    $(document).on('click', '.viewInvoice', function (e){
        e.preventDefault();
        $('#view_invoice').modal('show');
        var invoice_id = $(this).data('id');
        $.ajax({
            type: "GET",
            url: '{{ route("admin.view.json.invoice", ["invoice_id" => "__invoice_id"]) }}'.replace('__invoice_id', invoice_id),
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




                    $('#id_modal_invoice').text(data.id || '');
                    $('#user_id').text(data.user_id || '');
                    $('#issue_date').text(data.date || '');
                    $('#invoice_id').text(data.invoice_id || '');
                    $('#from_name').text(data.from_name || '');
                    $('#from_email').text(data.from_email || '');
                    $('#from_note').text(data.from_note || '');
                    $('#to_name').text(data.to_name || '');
                    $('#to_email').text(data.to_email || '');
                    $('#to_note').text(data.to_note || '');

                    var itemNames = JSON.parse(data.item_name || '[]');
                    var descriptions = JSON.parse(data.description || '[]');
                    var pages = JSON.parse(data.pages || '[]');
                    var pricePerPage = JSON.parse(data.price_per_page || '[]');

                    for (var i = 0; i < itemNames.length; i++) {
                        var newRow = '<tr>' +
                            '<td>' + itemNames[i] + '</td>' +
                            '<td>' + descriptions[i] + '</td>' +
                            '<td>' + pages[i] + '</td>' +
                            '<td>' + pricePerPage[i] + '</td>' +
                            '</tr>';

                        $('#invoice-data').append(newRow);

                        // Calculate sub-total
                        subTotal += pages[i] * pricePerPage[i];
                    }

                    // tax = 0.1 * subTotal;
                    // discount = 0.05 * subTotal;
                    total = subTotal + tax - discount;

                    $('#_subTotal b').text(subTotal.toFixed(2));
                    $('#_tax').append(tax.toFixed(2));
                    $('#_discount').append(discount.toFixed(2));
                    $('#_total b').text(total.toFixed(2));
                }else {
                    console.log('No data available.');
                }

                console.log('data is: ' + data.date)
            }
        });

    });




    function generateRandomNumber() {
        var randomNumber = Math.floor(Math.random() * (99999999 - 11111 + 1)) + 11111;
        return 'CUSTOM-INVOICE-' + randomNumber;
    }
    $('#invoiceRandomNumber').val(generateRandomNumber());

    // add new item row & remove;
    // $(document).on('click', '.addItemButton', function(e){
    //     e.preventDefault();

    //     var newRow = $('#newItem tr:last').clone();

    //     newRow.find('input[type="text"]').val('');
    //     newRow.find('input[type="number"]').val('1');
    //     newRow.find('span[data-kt-element="total"]').text('0.00');
    //     $('#newItem').append(newRow);
    // });

    // $(document).on('click', '[data-kt-element="remove-item"]', function() {
    //     if ($('#newItem tr').length > 1) {
    //         $(this).closest('tr').remove();
    //     } else {
    //         $(this).closest('tr').find('input[type="text"]').val('');
    //         $(this).closest('tr').find('input[type="number"]').val('1');
    //         $(this).closest('tr').find('span[data-kt-element="total"]').text('0.00');
    //     }
    // });








});//main document


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
                type: "GET",
                url: '{{ route("admin.destroy.custom.invoice", ["id" => "__id"]) }}'.replace('__id', id),
                data: "data",
                dataType: "json",
                success: function (response) {
                    console.log(response);
                    Swal.fire('Deleted!', 'Your data has been deleted.', 'success');
                }
            });


        }
    });
}

</script>
@endsection
