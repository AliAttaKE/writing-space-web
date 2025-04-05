<!--begin::Content wrapper-->
<div class="d-flex flex-column flex-column-fluid">
    <!--begin::Toolbar-->
    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
        <!--begin::Toolbar container-->
        <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                <!--begin::Title-->
                <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0 fs-color-white custom-fs-23">Invoice Management</h1>
                <!--end::Title-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted fs-color-white custom-fs-13">Invoice Management</li>
                    <!--end::Item-->
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->
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
                    <div class="card mb-10">
                        <!--begin::Card body-->
                        <div class="card-body p-12">
                            <!--begin::Form-->
                            <form action="" id="kt_invoice_form">
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-column align-items-start flex-xxl-row">
                                    <!--begin::Input group-->
                                    <div class="d-flex align-items-center flex-equal fw-row me-4 order-2" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Specify invoice date">
                                        <!--begin::Date-->
                                        <div class="fs-6 fw-bold text-gray-700 text-nowrap">Date:</div>
                                        <!--end::Date-->
                                        <!--begin::Input-->
                                        <div class="position-relative d-flex align-items-center w-150px">
                                            <!--begin::Datepicker-->
                                            <input type="datetime-local" id="meeting-time" name="meeting-time" value="2018-06-12T19:30" min="2018-06-07T00:00" max="2018-06-14T00:00" class="form-control ms-3" />
                                            <!--end::Datepicker-->
                                            <!--begin::Icon-->
                                            <i class="ki-duotone ki-down fs-4 position-absolute ms-4 end-0"></i>
                                            <!--end::Icon-->
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="d-flex flex-center flex-equal fw-row text-nowrap order-1 order-xxl-2 me-4" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Enter invoice number">
                                        <span class="fs-2x fw-bold text-gray-800">Invoice #</span>
                                        <input type="text" class="form-control form-control-flush fw-bold text-muted fs-3 w-125px" value="2021001" placehoder="..." />
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
                                            <label class="form-label fs-6 fw-bold text-gray-700 mb-3">Bill From</label>
                                            <!--begin::Input group-->
                                            <div class="mb-5">
                                                <input type="text" class="form-control form-control-solid" placeholder="Name" />
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="mb-5">
                                                <input type="text" class="form-control form-control-solid" placeholder="Email" />
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="mb-5">
                                                <textarea name="notes" class="form-control form-control-solid" rows="3" placeholder="Who is this invoice from?"></textarea>
                                            </div>
                                            <!--end::Input group-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-lg-6">
                                            <label class="form-label fs-6 fw-bold text-gray-700 mb-3">Bill To</label>
                                            <!--begin::Input group-->
                                            <div class="mb-5">
                                                <input type="text" class="form-control form-control-solid" placeholder="Name" />
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="mb-5">
                                                <input type="text" class="form-control form-control-solid" placeholder="Email" />
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="mb-5">
                                                <textarea name="notes" class="form-control form-control-solid" rows="3" placeholder="What is this invoice for?"></textarea>
                                            </div>
                                            <!--end::Input group-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                    <!--begin::Table wrapper-->
                                    <div class="table-responsive mb-10">
                                        <!--begin::Table-->
                                        <table class="table g-5 gs-0 mb-0 fw-bold text-gray-700" data-kt-element="items">
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
                                            <tbody>
                                                <tr class="border-bottom border-bottom-dashed" data-kt-element="item">
                                                    <td class="pe-7">
                                                        <input type="text" class="form-control form-control-solid mb-2" name="name[]" placeholder="Item name" />
                                                        <input type="text" class="form-control form-control-solid" name="description[]" placeholder="Description" />
                                                    </td>
                                                    <td class="ps-0">
                                                        <input class="form-control form-control-solid" type="number" min="1" name="quantity[]" placeholder="1" value="1" data-kt-element="quantity" />
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control form-control-solid text-end" name="price[]" placeholder="0.00" value="0.00" data-kt-element="price" />
                                                    </td>
                                                    <td class="pt-8 text-end text-nowrap">$
                                                        <span data-kt-element="total">0.00</span>
                                                    </td>
                                                    <td class="pt-5 text-end">
                                                        <button type="button" class="btn btn-sm btn-icon btn-active-color-primary" data-kt-element="remove-item">
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
                                                <tr class="border-top border-top-dashed align-top fs-6 fw-bold text-gray-700">
                                                    <th class="text-primary">
                                                        <button class="btn btn-link py-1" data-kt-element="add-item">Add item</button>
                                                    </th>
                                                    <th colspan="2" class="border-bottom border-bottom-dashed ps-0">
                                                        <div class="d-flex flex-column align-items-start">
                                                            <div class="fs-5">Subtotal</div>
                                                            <button class="btn btn-link py-1" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Coming soon">Add tax</button>
                                                            <button class="btn btn-link py-1" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Coming soon">Add discount</button>
                                                        </div>
                                                    </th>
                                                    <th colspan="2" class="border-bottom border-bottom-dashed text-end">$
                                                        <span data-kt-element="sub-total">0.00</span>
                                                    </th>
                                                </tr>
                                                <tr class="align-top fw-bold text-gray-700">
                                                    <th></th>
                                                    <th colspan="2" class="fs-4 ps-0">Total</th>
                                                    <th colspan="2" class="text-end fs-4 text-nowrap">$
                                                        <span data-kt-element="grand-total">0.00</span>
                                                    </th>
                                                </tr>
                                            </tfoot>
                                            <!--end::Table foot-->
                                        </table>
                                    </div>
                                    <!--end::Table-->
                                    <!--begin::Item template-->
                                    <table class="table d-none" data-kt-element="item-template">
                                        <tr class="border-bottom border-bottom-dashed" data-kt-element="item">
                                            <td class="pe-7">
                                                <input type="text" class="form-control form-control-solid mb-2" name="name[]" placeholder="Item name" />
                                                <input type="text" class="form-control form-control-solid" name="description[]" placeholder="Description" />
                                            </td>
                                            <td class="ps-0">
                                                <input class="form-control form-control-solid" type="number" min="1" name="quantity[]" placeholder="1" data-kt-element="quantity" />
                                            </td>
                                            <td>
                                                <input type="text" class="form-control form-control-solid text-end" name="price[]" placeholder="0.00" data-kt-element="price" />
                                            </td>
                                            <td class="pt-8 text-end">$
                                                <span data-kt-element="total">0.00</span>
                                            </td>
                                            <td class="pt-5 text-end">
                                                <button type="button" class="btn btn-sm btn-icon btn-active-color-primary" data-kt-element="remove-item">
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
                                    </table>
                                    <table class="table d-none" data-kt-element="empty-template">
                                        <tr data-kt-element="empty">
                                            <th colspan="5" class="text-muted text-center py-10">No items</th>
                                        </tr>
                                    </table>
                                    <!--end::Item template-->

                                </div>
                                <!--end::Wrapper-->
                            </form>
                            <!--end::Form-->

                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->
                    <!--begin::Card-->
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
                                    <input type="text" data-kt-user-table-filter="search" class="form-control form-control-solid w-250px ps-13" placeholder="Search Invoice" />
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
                                                <label class="form-label fs-6 fw-semibold">Invoice Id:</label>
                                                <input type="text" placeholder="Invoice Id" name="invoice-id" autocomplete="off" class="form-control bg-transparent" />
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="mb-3">
                                                <label class="form-label fs-6 fw-semibold">Item:</label>
                                                <input type="text" placeholder="Item" name="item" autocomplete="off" class="form-control bg-transparent" />
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
                                    <div class="modal-dialog modal-dialog-centered mw-650px">
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
                                                        <label class="fs-6 fw-semibold form-label mb-2">Select
                                                            Roles:</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <select name="role" data-control="select2" data-placeholder="Select a role" data-hide-search="true" class="form-select form-select-solid fw-bold">
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
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body py-4">
                            <!--begin::Table-->
                            <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_invoice">
                                <thead>
                                    <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                        <th class="w-10px pe-2">
                                            <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                                <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_table_users .form-check-input" value="1" />
                                            </div>
                                        </th>
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
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="1" />
                                            </div>
                                        </td>
                                        <td>0348984</td>
                                        <td class="">
                                            <div class="">
                                                <div class=" mb-3">
                                                    <div class="col">
                                                        <h6 class="fs-6 mb-0">Name:</h6>
                                                    </div>
                                                    <div class="col">
                                                        <h6 class="fs-6">Abeer</h6>
                                                    </div>
                                                </div>
                                                <div class=" mb-3">
                                                    <div class="col">
                                                        <h6 class="fs-6 mb-0">Email:</h6>
                                                    </div>
                                                    <div class="col">
                                                        <h6 class="fs-6">abeer@elementary-solutions.com</h6>
                                                    </div>
                                                </div>
                                                <div class="">
                                                    <div class="col">
                                                        <h6 class="fs-6 mb-0">Invoice From:</h6>
                                                    </div>
                                                    <div class="col">
                                                        <h6 class="fs-6">xyz</h6>
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
                                                        <h6 class="fs-6">Abeer</h6>
                                                    </div>
                                                </div>
                                                <div class=" mb-3">
                                                    <div class="col">
                                                        <h6 class="fs-6 mb-0">Email:</h6>
                                                    </div>
                                                    <div class="col">
                                                        <h6 class="fs-6">abeer@elementary-solutions.com</h6>
                                                    </div>
                                                </div>
                                                <div class="">
                                                    <div class="col">
                                                        <h6 class="fs-6 mb-0">Invoice For:</h6>
                                                    </div>
                                                    <div class="col">
                                                        <h6 class="fs-6">xyz</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="">
                                            <div class="">
                                                <div class=" mb-3">
                                                    <div class="col">
                                                        <h6 class="fs-6 mb-0">Item Name:</h6>
                                                    </div>
                                                    <div class="col">
                                                        <h6 class="fs-6">xyz</h6>
                                                    </div>
                                                </div>
                                                <div class=" mb-3">
                                                    <div class="col">
                                                        <h6 class="fs-6 mb-0">Discription:</h6>
                                                    </div>
                                                    <div class="col">
                                                        <h6 class="fs-6 limit-text">I used this website and i got inspired</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>2</td>
                                        <td><i class="bi bi-currency-dollar me-3"></i>10</td>
                                        <td><i class="bi bi-currency-dollar me-3"></i>25</td>
                                        <td class="text-end">
                                            <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                                <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                            <!--begin::Menu-->
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <button type="button" class="menu-link px-3 d-flex justify-content-center btn w-100 fs-7" data-bs-toggle="modal" data-bs-target="#view-invoice">View</button>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="invoice-manager.php" class="menu-link px-3 d-flex justify-content-center">Edit</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link d-flex justify-content-center px-3" onclick="confirmDelete()">Delete</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="/images/myw3schoolsimage.jpg" class="menu-link d-flex justify-content-center px-3" download>Download</a>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu-->
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <!--end::Table-->
                            <!--begin::Notes-->
                            <div class="mb-0 mt-10 row justify-content-between">
                                <!--begin::Row-->
                                <div class="row mb-5 col-5">
                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <a href="#" class="btn btn-light btn-active-light-primary w-100">Download</a>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <div class="col-3">
                                    <!--end::Row-->
                                    <button type="submit" href="#" class="btn btn-primary w-100" id="kt_invoice_submit_button">
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
<div class="modal fade view-invoice" id="view-invoice" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                        <div class="fw-bold fs-3 text-gray-800 mb-8">Invoice #34782</div>
                                        <!--end::Label-->
                                        <!--begin::Row-->
                                        <div class="row g-5 mb-11">
                                            <!--end::Col-->
                                            <div class="col-sm-6">
                                                <!--end::Label-->
                                                <div class="fw-semibold fs-7 text-gray-600 mb-1">Issue Date:</div>
                                                <!--end::Label-->
                                                <!--end::Col-->
                                                <div class="fw-bold fs-6 text-gray-800">12 Apr 2021</div>
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
                                                <div class="fw-bold fs-6 text-gray-800">Abeer</div>
                                                <!--end::Text-->
                                                <!--end::Description-->
                                                <div class="fw-semibold fs-7 text-gray-600">abeer@elementary-solutions.com
                                                    <br />xyz
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
                                                <div class="fw-bold fs-6 text-gray-800">Abeer</div>
                                                <!--end::Text-->
                                                <!--end::Description-->
                                                <div class="fw-semibold fs-7 text-gray-600">abeer@elementary-solutions.com
                                                    <br />xyz
                                                </div>
                                                <!--end::Description-->
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Row-->
                                        <!--begin::Content-->
                                        <div class="flex-grow-1 mb-12">
                                            <!--end::Label-->
                                            <div class="fw-semibold fs-7 text-gray-600 mb-1">Item Name:</div>
                                            <!--end::Label-->
                                            <!--end::Text-->
                                            <div class="fw-bold fs-6 text-gray-800">xyz</div>
                                            <!--end::Text-->
                                            <!--end::Description-->
                                            <div class="fw-semibold fs-7 text-gray-600">I have visited this website and i got inspired by it's designing etc.
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Content-->
                                        <!--begin::Row-->
                                        <div class="row g-5 mb-12">
                                            <!--end::Col-->
                                            <div class="col-sm-4">
                                                <!--end::Label-->
                                                <div class="fw-semibold fs-7 text-gray-600 mb-1">Page:</div>
                                                <!--end::Label-->
                                                <!--end::Text-->
                                                <div class="fw-bold fs-6 text-gray-800">2</div>
                                                <!--end::Text-->
                                            </div>
                                            <!--end::Col-->
                                            <!--end::Col-->
                                            <div class="col-sm-4">
                                                <!--end::Label-->
                                                <div class="fw-semibold fs-7 text-gray-600 mb-1">Price Per Page:</div>
                                                <!--end::Label-->
                                                <!--end::Text-->
                                                <div class="fw-bold fs-6 text-gray-800"><i class="bi bi-currency-dollar me-3"></i> 10</div>
                                                <!--end::Text-->
                                            </div>
                                            <!--end::Col-->
                                            <!--end::Col-->
                                            <div class="col-sm-4">
                                                <!--end::Label-->
                                                <div class="fw-semibold fs-7 text-gray-600 mb-1">Total:</div>
                                                <!--end::Label-->
                                                <!--end::Text-->
                                                <div class="fw-bold fs-6 text-gray-800"><i class="bi bi-currency-dollar me-3"></i> 25</div>
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
                    <button type="button" class="btn btn-success my-1 me-12" onclick="window.print();">Print Invoice</button>
                </div>
                <div class="">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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
