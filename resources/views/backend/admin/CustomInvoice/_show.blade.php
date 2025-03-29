<div class="card mb-10">
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
                    class="form-control form-control-solid w-250px ps-13"
                    placeholder="Search">
            </div>
            <!--end::Search-->
        </div>
        <!--begin::Card title-->
        <!--begin::Card toolbar-->
        <div class="card-toolbar">
            <!--begin::Toolbar-->
            <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                <!--begin::Filter-->
                <button type="button" class="btn btn-light-primary me-3"
                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                    <i class="ki-duotone ki-filter fs-2">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>Filter</button>
                <!--begin::Menu 1-->
                <div class="menu menu-sub menu-sub-dropdown w-300px w-md-325px"
                    data-kt-menu="true">
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
                            <label class="form-label fs-6 fw-semibold">Invoice Id:</label>
                            <input type="text" placeholder="Invoice Id" name="invoice-id"
                                autocomplete="off" class="form-control bg-transparent">
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="mb-3">
                            <label class="form-label fs-6 fw-semibold">Item:</label>
                            <input type="text" placeholder="Item" name="item"
                                autocomplete="off" class="form-control bg-transparent">
                        </div>
                        <!--end::Input group-->
                        <!--begin::Actions-->
                        <div class="d-flex justify-content-end">
                            <button type="reset"
                                class="btn btn-light btn-active-light-primary fw-semibold me-2 px-6"
                                data-kt-menu-dismiss="true"
                                data-kt-user-table-filter="reset">Reset</button>
                            <button type="submit" class="btn btn-primary fw-semibold px-6"
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
                <button type="button" class="btn btn-light-primary me-3" data-bs-toggle="modal"
                    data-bs-target="#kt_modal_export_users">
                    <i class="ki-duotone ki-exit-up fs-2">
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

                                <td>{{$invoice->invoice_id}}</td>
                                <td class="">
                                    <div class="">
                                        <div class=" mb-3">
                                            <div class="col">
                                                <h6 class="fs-6 mb-0">Name:</h6>
                                            </div>
                                            <div class="col">
                                                <h6 class="fs-6">{{$invoice->from_name}}</h6>
                                            </div>
                                        </div>
                                        <div class=" mb-3">
                                            <div class="col">
                                                <h6 class="fs-6 mb-0">Email:</h6>
                                            </div>
                                            <div class="col">
                                                <h6 class="fs-6">{{$invoice->from_email}}</h6>
                                            </div>
                                        </div>
                                        <div class="">
                                            <div class="col">
                                                <h6 class="fs-6 mb-0">Invoice From:</h6>
                                            </div>
                                            <div class="col">
                                                <h6 class="fs-6">{{$invoice->from_note}}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="">
                                    <div class="">
                                        <div class=" mb-3">
                                            <div class="col">
                                                <h6 class="fs-6 mb-0">Name:</h6>
                                            </div>
                                            <div class="col">
                                                <h6 class="fs-6">{{$invoice->to_name}}</h6>
                                            </div>
                                        </div>
                                        <div class=" mb-3">
                                            <div class="col">
                                                <h6 class="fs-6 mb-0">Email:</h6>
                                            </div>
                                            <div class="col">
                                                <h6 class="fs-6">{{$invoice->to_email}}</h6>
                                            </div>
                                        </div>
                                        <div class="">
                                            <div class="col">
                                                <h6 class="fs-6 mb-0">Invoice For:</h6>
                                            </div>
                                            <div class="col">
                                                <h6 class="fs-6">{{$invoice->to_note}}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    {{$invoice->created_at}}
                                </td>
                               
                                <td class="text-end">
                                    <a href="#"
                                        class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm"
                                        data-kt-menu-trigger="click"
                                        data-kt-menu-placement="bottom-end">Actions
                                        <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                        data-kt-menu="true">

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="{{route('admin.send.custom.invoice', ['id' => $invoice->id])}}"
                                                class="menu-link px-3 d-flex justify-content-center">Send Invoice</a>
                                        </div>
                                        <!--end::Menu item-->
                                        
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="{{ route('admin.view.custom.invoice', ['id' => $invoice->id]) }}"
                                                class="menu-link px-3 d-flex justify-content-center">View</a>
                                             
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#"
                                                data-bs-toggle="modal" data-bs-target="#view_invoice{{$invoice->invoice_id}}"
                                                class="menu-link px-3 d-flex justify-content-center">View in Modal</a>
                                             
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#"
                                                class="menu-link px-3 d-flex justify-content-center">Edit</a>
                                        </div>
                                        <!--end::Menu item-->
                                        
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#"
                                                class="menu-link d-flex justify-content-center px-3"
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
            <div class="row">
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
            </div>
        </div>
        <!--end::Table-->
        <!--begin::Notes-->
        <div class="mb-0 mt-10 row justify-content-between">
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
        </div>
        <!--end::Notes-->
    </div>
    <!--end::Card body-->
</div>


<!--end::Content wrapper-->
<div class="modal fade" id="view_invoice{{$invoice->invoice_id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                            <img alt="Logo" src="{{asset('backend/assets/media/ws/ws-dark-name-logo.png')}}" />
                                        </a>
                                        <!--end::Logo-->
                                    </div>
                                    <!--end::Top-->
                                    <!--begin::Wrapper-->
                                    <div class="m-0">
                                        <!--begin::Label-->
                                        <div class="fw-bold fs-3 text-gray-800 mb-8">{{$invoice->invoice_id}}</div>
                                        <!--end::Label-->
                                        <!--begin::Row-->
                                        <div class="row g-5 mb-11">
                                            <!--end::Col-->
                                            <div class="col-sm-6">
                                                <!--end::Label-->
                                                <div class="fw-semibold fs-7 text-gray-600 mb-1">Issue Date:</div>
                                                <!--end::Label-->
                                                <!--end::Col-->
                                                <div class="fw-bold fs-6 text-gray-800">{{$invoice->date}}</div>
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
                                                <div class="fw-semibold fs-7 text-gray-600 mb-1">Issue For:</div>
                                                <!--end::Label-->
                                                <!--end::Text-->
                                                <div class="fw-bold fs-6 text-gray-800">{{$invoice->to_name}}</div>
                                                <!--end::Text-->
                                                <!--end::Description-->
                                                <div class="fw-semibold fs-7 text-gray-600">{{$invoice->to_email}}
                                                    <br />
                                                    {{$invoice->to_note}}
                                                </div>
                                                <!--end::Description-->
                                            </div>
                                            <!--end::Col-->
                                            <!--end::Col-->
                                            <div class="col-sm-6">
                                                <!--end::Label-->
                                                <div class="fw-semibold fs-7 text-gray-600 mb-1">Issued By:</div>
                                                <!--end::Label-->
                                                <!--end::Text-->
                                                <div class="fw-bold fs-6 text-gray-800">{{$invoice->from_name}}</div>
                                                <!--end::Text-->
                                                <!--end::Description-->
                                                <div class="fw-semibold fs-7 text-gray-600">{{$invoice->from_email}}
                                                    <br />
                                                    {{$invoice->from_note}}
                                                </div>
                                                <!--end::Description-->
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Row-->

                                        @php
                                            $item_names = json_decode($invoice->item_name);
                                            $descriptions = json_decode($invoice->description);
                                            $pagess = json_decode($invoice->pages);
                                            $price_per_pages = json_decode($invoice->price_per_page);
                                        @endphp

                                       
                                        <!--begin::Content-->
                                        <div class="flex-grow-1 mb-12">
                                            <!--end::Label-->
                                            {{-- <div class="fw-semibold fs-7 text-gray-600 mb-1">Item Name:</div> --}}
                                            <!--end::Label-->
                                           
                                            @for ($i = 0; $i < count($item_names); $i++)
                                            @php
                                                $totalPrice = 0;
                                                $tax = 0;
                                                $discount = 0; 
                                                $totalPrice += $pagess[$i] * $price_per_pages[$i];
                                            @endphp
                                            <table class="table">
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
                                            </table>
                                            <!--end::Text-->
                                            <div class="fw-bold fs-6 text-gray-800"></div>
                                            <!--end::Text-->
                                            <!--end::Description-->
                                            <div class="fw-semibold fs-7 text-gray-600"></div>
                                            @endfor
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
                    class="btn btn-success my-1 me-12" 
                    onclick="window.location.href='{{ route('admin.generate.custom.invoice', ['id' => $invoice->id]) }}'">Download Invoice</button>
                </div>
                <div class="">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>