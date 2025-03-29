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
                                            <input type="text" data-kt-user-table-filter="search" class="form-control form-control-solid w-250px ps-13" placeholder="Search Order" />
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

                                            <tr>
                                                <td>
                                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="checkbox" value="1" />
                                                    </div>
                                                </td>
                                                <td><a href="order-details.php">0319832</a></td>
                                                <td class="limit-text">The Brave Kings Man Story 1994</td>

                                                <td>2</td>
                                                <td>12/24/2023 12:45Pm</td>
                                                <td>12/31/2023 12:45Pm</td>
                                                <td><span class="badge badge-light-danger fw-bold me-auto px-4 py-3">Disabled</span></td>
                                                <td><a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                                        <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                                    <!--begin::Menu-->
                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="order-details.php" class="menu-link d-flex justify-content-center px-3">View</a>
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
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="checkbox" value="1" />
                                                    </div>
                                                </td>
                                                <td><a href="order-details.php">0319832</a></td>
                                                <td class="limit-text">The Brave Kings Man Story 1994</td>

                                                <td>2</td>
                                                <td>12/24/2023 12:45Pm</td>
                                                <td>12/31/2023 12:45Pm</td>
                                                <td><span class="badge badge-light-success fw-bold me-auto px-4 py-3">Enabled</span></td>
                                                <td><a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                                        <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                                    <!--begin::Menu-->
                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="order-details.php" class="menu-link d-flex justify-content-center px-3">View</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link d-flex justify-content-center px-3" id="deleteLink" data-kt-users-table-filter="delete_row">Delete</a>
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
                            <form class="form" novalidate="novalidate" id="kt_modal_create_app_form">
                                <!--begin::Step 1-->
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
                                            <form action="">
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
                                                    <select name="card_expiry_month" class="form-select form-select-solid " data-control="select2" data-hide-search="true" data-placeholder="Choose">
                                                        <option></option>
                                                        <option value="27422">Aboriginal Studies</option>
                                                        <option value="27421">Abortion</option>
                                                        <option value="27420">Accounting / Finance (general)</option>
                                                        <option value="27419">&nbsp;&nbsp;&nbsp;Accounting: Corporate Finance</option>
                                                        <option value="27418">&nbsp;&nbsp;&nbsp;Accounting: Economic History</option>
                                                        <option value="27417">&nbsp;&nbsp;&nbsp;Accounting: Economic Theory</option>
                                                        <option value="27416">&nbsp;&nbsp;&nbsp;Accounting: Economics</option>
                                                        <option value="27415">&nbsp;&nbsp;&nbsp;Accounting: Intl. Economics</option>
                                                        <option value="27414">&nbsp;&nbsp;&nbsp;Accounting: Intl. Finance</option>
                                                        <option value="27413">&nbsp;&nbsp;&nbsp;Accounting: Money / Banking</option>
                                                        <option value="27412">&nbsp;&nbsp;&nbsp;Accounting: Personal Finance</option>
                                                        <option value="27411">Admissions Essays / Letters</option>
                                                        <option value="27410">Advertising</option>
                                                        <option value="27409">Aeronautics</option>
                                                        <option value="27408">Africa / African Studies</option>
                                                        <option value="27407">African-Americans (general)</option>
                                                        <option value="27406">&nbsp;&nbsp;&nbsp;African-Americans: Civil Rights</option>
                                                        <option value="27405">&nbsp;&nbsp;&nbsp;African-Americans: Historical</option>
                                                        <option value="27404">&nbsp;&nbsp;&nbsp;African-Americans: Leaders</option>
                                                        <option value="27403">&nbsp;&nbsp;&nbsp;African-Americans: Philosophy</option>
                                                        <option value="27402">&nbsp;&nbsp;&nbsp;African-Americans: Politics</option>
                                                        <option value="27401">&nbsp;&nbsp;&nbsp;African-Americans: Racism</option>
                                                        <option value="27400">&nbsp;&nbsp;&nbsp;African-Americans: Social Issues</option>
                                                        <option value="27399">&nbsp;&nbsp;&nbsp;African-Americans: Slavery</option>
                                                        <option value="27398">Aging</option>
                                                        <option value="27397">Agriculture</option>
                                                        <option value="27396">American History</option>
                                                        <option value="27395">American Indian Studies</option>
                                                        <option value="27394">Anatomy</option>
                                                        <option value="27393">Animals / Animal Rights</option>
                                                        <option value="27392">Anthropology</option>
                                                        <option value="27391">Aquaculture</option>
                                                        <option value="27390">Archaeology</option>
                                                        <option value="27389">Architecture</option>
                                                        <option value="27388">Argumentative</option>
                                                        <option value="27387">Art (general)</option>
                                                        <option value="27386">&nbsp;&nbsp;&nbsp;Art: Ancient</option>
                                                        <option value="27385">&nbsp;&nbsp;&nbsp;Art: Artists</option>
                                                        <option value="27384">&nbsp;&nbsp;&nbsp;Art: Design</option>
                                                        <option value="27383">&nbsp;&nbsp;&nbsp;Art: Famous Works</option>
                                                        <option value="27382">&nbsp;&nbsp;&nbsp;Art: Genre</option>
                                                        <option value="27381">&nbsp;&nbsp;&nbsp;Art: Graphic Arts</option>
                                                        <option value="27380">&nbsp;&nbsp;&nbsp;Art: Photographic</option>
                                                        <option value="27379">&nbsp;&nbsp;&nbsp;Art: Political Aspects</option>
                                                        <option value="27378">&nbsp;&nbsp;&nbsp;Art: Social Aspects</option>
                                                        <option value="27377">Asia / Asian Studies (general)</option>
                                                        <option value="27376">&nbsp;&nbsp;&nbsp;Asia: China</option>
                                                        <option value="27375">&nbsp;&nbsp;&nbsp;Asia: India</option>
                                                        <option value="27374">&nbsp;&nbsp;&nbsp;Asia: Japan</option>
                                                        <option value="27373">&nbsp;&nbsp;&nbsp;Asia: Korea</option>
                                                        <option value="27372">Astronomy</option>
                                                        <option value="27371">Authors</option>
                                                        <option value="27370">Aviation</option>
                                                        <option value="27369">Banking</option>
                                                        <option value="27368">Biography</option>
                                                        <option value="27367">Biology</option>
                                                        <option value="27366">Birth Control</option>
                                                        <option value="27365">Broadcasting</option>
                                                        <option value="27364">Bureaucracy</option>
                                                        <option value="27363">Business (general)</option>
                                                        <option value="27362">&nbsp;&nbsp;&nbsp;Business: Advertising</option>
                                                        <option value="27361">&nbsp;&nbsp;&nbsp;Business: Applied Operations</option>
                                                        <option value="27360">&nbsp;&nbsp;&nbsp;Business: Plans</option>
                                                        <option value="27359">&nbsp;&nbsp;&nbsp;Business: Theory</option>
                                                        <option value="27358">&nbsp;&nbsp;&nbsp;Business: Case Studies</option>
                                                        <option value="27357">&nbsp;&nbsp;&nbsp;Business: Companies</option>
                                                        <option value="27356">&nbsp;&nbsp;&nbsp;Business: Consumer Behavior</option>
                                                        <option value="27355">&nbsp;&nbsp;&nbsp;Business: Ethics</option>
                                                        <option value="27354">&nbsp;&nbsp;&nbsp;Business: Human Resources</option>
                                                        <option value="27353">&nbsp;&nbsp;&nbsp;Business: Industries</option>
                                                        <option value="27352">&nbsp;&nbsp;&nbsp;Business: Information Systems</option>
                                                        <option value="27351">&nbsp;&nbsp;&nbsp;Business: International</option>
                                                        <option value="27350">&nbsp;&nbsp;&nbsp;Business: Law</option>
                                                        <option value="27349">&nbsp;&nbsp;&nbsp;Business: Management</option>
                                                        <option value="27348">&nbsp;&nbsp;&nbsp;Business: Management Theory</option>
                                                        <option value="27347">&nbsp;&nbsp;&nbsp;Business: Marketing</option>
                                                        <option value="27346">&nbsp;&nbsp;&nbsp;Business: Operations</option>
                                                        <option value="27345">&nbsp;&nbsp;&nbsp;Business: Small</option>
                                                        <option value="27344">&nbsp;&nbsp;&nbsp;Business: Technical Writing</option>
                                                        <option value="27343">Canada / Canadian</option>
                                                        <option value="27342">Capital Punishment</option>
                                                        <option value="27341">Careers</option>
                                                        <option value="27340">Caribbean</option>
                                                        <option value="27339">Case Studies</option>
                                                        <option value="27338">Chemistry</option>
                                                        <option value="27337">Child Abuse</option>
                                                        <option value="27336">Child Care</option>
                                                        <option value="27335">Children</option>
                                                        <option value="27334">China / Chinese</option>
                                                        <option value="27333">Civil War</option>
                                                        <option value="27332">Communication (general)</option>
                                                        <option value="27331">&nbsp;&nbsp;&nbsp;Communication: Journalism</option>
                                                        <option value="27330">&nbsp;&nbsp;&nbsp;Communication: Language</option>
                                                        <option value="27329">&nbsp;&nbsp;&nbsp;Communication: Media</option>
                                                        <option value="27328">&nbsp;&nbsp;&nbsp;Communication: Non-verbal</option>
                                                        <option value="27327">&nbsp;&nbsp;&nbsp;Communication: Speech</option>
                                                        <option value="27326">&nbsp;&nbsp;&nbsp;Communication: Television</option>
                                                        <option value="27325">Communism</option>
                                                        <option value="27324">Computer Science</option>
                                                        <option value="27323">Computers (general)</option>
                                                        <option value="27322">&nbsp;&nbsp;&nbsp;Computers: Industry</option>
                                                        <option value="27321">&nbsp;&nbsp;&nbsp;Computers: Technology</option>
                                                        <option value="27320">&nbsp;&nbsp;&nbsp;Computers: Connections</option>
                                                        <option value="27319">&nbsp;&nbsp;&nbsp;Computers: Hardware</option>
                                                        <option value="27318">&nbsp;&nbsp;&nbsp;Computers: History</option>
                                                        <option value="27317">&nbsp;&nbsp;&nbsp;Computers: Internet</option>
                                                        <option value="27316">&nbsp;&nbsp;&nbsp;Computers: Operating Systems</option>
                                                        <option value="27315">&nbsp;&nbsp;&nbsp;Computers: Software</option>
                                                        <option value="27314">&nbsp;&nbsp;&nbsp;Computers: Social Networking</option>
                                                        <option value="27313">&nbsp;&nbsp;&nbsp;Computers: Wireless</option>
                                                        <option value="27312">Construction</option>
                                                        <option value="27311">Consumerism</option>
                                                        <option value="27310">Cooking</option>
                                                        <option value="27309">Corporal Punishment</option>
                                                        <option value="27308">Corrections / Police (general)</option>
                                                        <option value="27307">&nbsp;&nbsp;&nbsp;Corrections: Courts</option>
                                                        <option value="27306">&nbsp;&nbsp;&nbsp;Corrections: Criminal Justice</option>
                                                        <option value="27305">&nbsp;&nbsp;&nbsp;Corrections: Forensics</option>
                                                        <option value="27304">&nbsp;&nbsp;&nbsp;Corrections: Intelligence</option>
                                                        <option value="27303">&nbsp;&nbsp;&nbsp;Corrections: Juvenile Justice</option>
                                                        <option value="27302">&nbsp;&nbsp;&nbsp;Corrections: Law Enforcement</option>
                                                        <option value="27301">&nbsp;&nbsp;&nbsp;Corrections: Lawyers</option>
                                                        <option value="27300">&nbsp;&nbsp;&nbsp;Corrections: Organized Crime</option>
                                                        <option value="27299">&nbsp;&nbsp;&nbsp;Corrections: Police Misconduct</option>
                                                        <option value="27298">&nbsp;&nbsp;&nbsp;Corrections: Prisons</option>
                                                        <option value="27297">&nbsp;&nbsp;&nbsp;Corrections: Public Perception</option>
                                                        <option value="27296">&nbsp;&nbsp;&nbsp;Corrections: Sentencing</option>
                                                        <option value="27295">Cosmetology</option>
                                                        <option value="27294">Counseling</option>
                                                        <option value="27293">Creative Writing</option>
                                                        <option value="27292">Criminal Justice (general)</option>
                                                        <option value="27291">&nbsp;&nbsp;&nbsp;Criminal Justice: Juveniles</option>
                                                        <option value="27290">&nbsp;&nbsp;&nbsp;Criminal Justice: Corrections</option>
                                                        <option value="27289">&nbsp;&nbsp;&nbsp;Criminal Justice: Courts</option>
                                                        <option value="27288">&nbsp;&nbsp;&nbsp;Criminal Justice: Police</option>
                                                        <option value="27287">&nbsp;&nbsp;&nbsp;Criminal Justice: Prisons</option>
                                                        <option value="27286">&nbsp;&nbsp;&nbsp;Criminal Justice: Intelligence</option>
                                                        <option value="27285">&nbsp;&nbsp;&nbsp;Criminal Justice: Organized Crime</option>
                                                        <option value="27284">&nbsp;&nbsp;&nbsp;Criminal Justice: Forensics</option>
                                                        <option value="27283">Criminology</option>
                                                        <option value="27282">Cuba</option>
                                                        <option value="27281">Culture</option>
                                                        <option value="27280">Death / Dying (general)</option>
                                                        <option value="27279">&nbsp;&nbsp;&nbsp;Death: Euthanasia</option>
                                                        <option value="27278">&nbsp;&nbsp;&nbsp;Death: Suicide</option>
                                                        <option value="27277">&nbsp;&nbsp;&nbsp;Death: Elderly</option>
                                                        <option value="27276">Death Penalty</option>
                                                        <option value="27275">Disease</option>
                                                        <option value="27274">Drama (general)</option>
                                                        <option value="27273">&nbsp;&nbsp;&nbsp;Drama: American</option>
                                                        <option value="27272">&nbsp;&nbsp;&nbsp;Drama: English</option>
                                                        <option value="27271">&nbsp;&nbsp;&nbsp;Drama: World</option>
                                                        <option value="27270">Drugs / Alcohol</option>
                                                        <option value="27269">E-commerce</option>
                                                        <option value="27268">Ecology</option>
                                                        <option value="27267">Economics (general)</option>
                                                        <option value="27266">&nbsp;&nbsp;&nbsp;Economics: Banking</option>
                                                        <option value="27265">&nbsp;&nbsp;&nbsp;Economics: Economists</option>
                                                        <option value="27264">&nbsp;&nbsp;&nbsp;Economics: Inflation</option>
                                                        <option value="27263">&nbsp;&nbsp;&nbsp;Economics: International Trade</option>
                                                        <option value="27262">&nbsp;&nbsp;&nbsp;Economics: Taxation</option>
                                                        <option value="27261">Education (general)</option>
                                                        <option value="27260">&nbsp;&nbsp;&nbsp;Education: Administration</option>
                                                        <option value="27259">&nbsp;&nbsp;&nbsp;Education: Classroom Mgmt.</option>
                                                        <option value="27258">&nbsp;&nbsp;&nbsp;Education: Coaching</option>
                                                        <option value="27257">&nbsp;&nbsp;&nbsp;Education: Computers</option>
                                                        <option value="27256">&nbsp;&nbsp;&nbsp;Education: Counseling</option>
                                                        <option value="27255">&nbsp;&nbsp;&nbsp;Education: Countries</option>
                                                        <option value="27254">&nbsp;&nbsp;&nbsp;Education: Curriculum</option>
                                                        <option value="27253">&nbsp;&nbsp;&nbsp;Education: Foreign Countries</option>
                                                        <option value="27252">&nbsp;&nbsp;&nbsp;Education: Higher Education</option>
                                                        <option value="27251">&nbsp;&nbsp;&nbsp;Education: Homeschooling</option>
                                                        <option value="27250">&nbsp;&nbsp;&nbsp;Education: Inclusion</option>
                                                        <option value="27249">&nbsp;&nbsp;&nbsp;Education: Mainstreaming</option>
                                                        <option value="27248">&nbsp;&nbsp;&nbsp;Education: Mathematics</option>
                                                        <option value="27247">&nbsp;&nbsp;&nbsp;Education: Multiculturalism</option>
                                                        <option value="27246">&nbsp;&nbsp;&nbsp;Education: Politics</option>
                                                        <option value="27245">&nbsp;&nbsp;&nbsp;Education: Physical Education</option>
                                                        <option value="27244">&nbsp;&nbsp;&nbsp;Education: Public vs. Private</option>
                                                        <option value="27243">&nbsp;&nbsp;&nbsp;Education: Reading</option>
                                                        <option value="27242">&nbsp;&nbsp;&nbsp;Education: Social Issues</option>
                                                        <option value="27241">&nbsp;&nbsp;&nbsp;Education: Special Education</option>
                                                        <option value="27240">&nbsp;&nbsp;&nbsp;Education: Teaching Methods</option>
                                                        <option value="27239">&nbsp;&nbsp;&nbsp;Education: Technology</option>
                                                        <option value="27238">&nbsp;&nbsp;&nbsp;Education: Theory</option>
                                                        <option value="27237">Employment</option>
                                                        <option value="27236">Energy</option>
                                                        <option value="27235">Engineering</option>
                                                        <option value="27234">English Literature</option>
                                                        <option value="27233">Environmental Science</option>
                                                        <option value="27232">Ethics / Morality</option>
                                                        <option value="27231">Evolution</option>
                                                        <option value="27230">Exercise</option>
                                                        <option value="27229">Family / Marriage</option>
                                                        <option value="27228">Feminism / Feminists</option>
                                                        <option value="27227">Film</option>
                                                        <option value="27226">Finance</option>
                                                        <option value="27225">First Aid</option>
                                                        <option value="27224">Foreign Relations</option>
                                                        <option value="27222">Forensics</option>
                                                        <option value="27223">France / French</option>
                                                        <option value="27220">Gay / Lesbian (general)</option>
                                                        <option value="27221">&nbsp;&nbsp;&nbsp;Gay: Adoption</option>
                                                        <option value="27219">&nbsp;&nbsp;&nbsp;Gay: AIDS</option>
                                                        <option value="27217">&nbsp;&nbsp;&nbsp;Gay: Civil Rights</option>
                                                        <option value="27218">&nbsp;&nbsp;&nbsp;Gay: Discrimination</option>
                                                        <option value="27216">&nbsp;&nbsp;&nbsp;Gay: Equality</option>
                                                        <option value="27215">&nbsp;&nbsp;&nbsp;Gay: Homosexuality</option>
                                                        <option value="27213">&nbsp;&nbsp;&nbsp;Gay: Marriage</option>
                                                        <option value="27214">&nbsp;&nbsp;&nbsp;Gay: Raising Children</option>
                                                        <option value="27211">&nbsp;&nbsp;&nbsp;Gay: Sex</option>
                                                        <option value="27212">Gender / Sexuality</option>
                                                        <option value="27210">Genetics</option>
                                                        <option value="27209">Geography</option>
                                                        <option value="27208">Germany / German</option>
                                                        <option value="27207">Gerontology</option>
                                                        <option value="27206">Global Politics (general)</option>
                                                        <option value="27205">&nbsp;&nbsp;&nbsp;Global Politics: Comparative</option>
                                                        <option value="27204">&nbsp;&nbsp;&nbsp;Global Politics: World Affairs</option>
                                                        <option value="27202">Globalization</option>
                                                        <option value="27203">Government (general)</option>
                                                        <option value="27201">&nbsp;&nbsp;&nbsp;Government: Campaigns</option>
                                                        <option value="27200">&nbsp;&nbsp;&nbsp;Government: Elections</option>
                                                        <option value="27198">&nbsp;&nbsp;&nbsp;Government: Federal</option>
                                                        <option value="27199">&nbsp;&nbsp;&nbsp;Government: Fiscal Policy</option>
                                                        <option value="27197">&nbsp;&nbsp;&nbsp;Government: Foreign Policy</option>
                                                        <option value="27196">&nbsp;&nbsp;&nbsp;Government: Agencies</option>
                                                        <option value="27194">&nbsp;&nbsp;&nbsp;Government: Intl. Relations</option>
                                                        <option value="27195">&nbsp;&nbsp;&nbsp;Government: Local</option>
                                                        <option value="27193">&nbsp;&nbsp;&nbsp;Government: Military Agencies</option>
                                                        <option value="27192">&nbsp;&nbsp;&nbsp;Government: Politicians</option>
                                                        <option value="27191">&nbsp;&nbsp;&nbsp;Government: Presidents</option>
                                                        <option value="27190">&nbsp;&nbsp;&nbsp;Government: Social Security</option>
                                                        <option value="27189">&nbsp;&nbsp;&nbsp;Government: State</option>
                                                        <option value="27188">&nbsp;&nbsp;&nbsp;Government: Theory</option>
                                                        <option value="27187">&nbsp;&nbsp;&nbsp;Government: Welfare</option>
                                                        <option value="27186">Graphics / Graphic Design</option>
                                                        <option value="27185">Greek Studies</option>
                                                        <option value="27184">Health (general)</option>
                                                        <option value="27183">&nbsp;&nbsp;&nbsp;Health: Exercise</option>
                                                        <option value="27182">&nbsp;&nbsp;&nbsp;Health: First Aid</option>
                                                        <option value="27181">&nbsp;&nbsp;&nbsp;Health: Human Sexuality</option>
                                                        <option value="27180">&nbsp;&nbsp;&nbsp;Health: Nursing</option>
                                                        <option value="27179">&nbsp;&nbsp;&nbsp;Health: Nutrition</option>
                                                        <option value="27178">&nbsp;&nbsp;&nbsp;Health: Public Health Issues</option>
                                                        <option value="27177">&nbsp;&nbsp;&nbsp;Health: Safety</option>
                                                        <option value="27175">Healthcare</option>
                                                        <option value="27176">Higher Education</option>
                                                        <option value="27174">History (general)</option>
                                                        <option value="27173">&nbsp;&nbsp;&nbsp;History: Ancient</option>
                                                        <option value="27172">&nbsp;&nbsp;&nbsp;History: Asian</option>
                                                        <option value="27171">&nbsp;&nbsp;&nbsp;History: Civil War</option>
                                                        <option value="27170">&nbsp;&nbsp;&nbsp;History: Colonial America</option>
                                                        <option value="27169">&nbsp;&nbsp;&nbsp;History: European</option>
                                                        <option value="27168">&nbsp;&nbsp;&nbsp;History: Great Britain</option>
                                                        <option value="27167">&nbsp;&nbsp;&nbsp;History: Greek / Roman</option>
                                                        <option value="27166">&nbsp;&nbsp;&nbsp;History: Holocaust Studies</option>
                                                        <option value="27165">&nbsp;&nbsp;&nbsp;History: Israel</option>
                                                        <option value="27164">&nbsp;&nbsp;&nbsp;History: Latin</option>
                                                        <option value="27163">&nbsp;&nbsp;&nbsp;History: Middle East</option>
                                                        <option value="27161">&nbsp;&nbsp;&nbsp;History: Pre-Colonial America</option>
                                                        <option value="27162">&nbsp;&nbsp;&nbsp;History: Presidents</option>
                                                        <option value="27160">&nbsp;&nbsp;&nbsp;History: Russia / USSR</option>
                                                        <option value="27159">&nbsp;&nbsp;&nbsp;History: U.S. (after 1865)</option>
                                                        <option value="27158">&nbsp;&nbsp;&nbsp;History: U.S. (before 1865)</option>
                                                        <option value="27157">&nbsp;&nbsp;&nbsp;History: Wars (miscellaneous)</option>
                                                        <option value="27156">&nbsp;&nbsp;&nbsp;History: World War I</option>
                                                        <option value="27155">&nbsp;&nbsp;&nbsp;History: World War II</option>
                                                        <option value="27152">Holocaust</option>
                                                        <option value="27153">Homosexuality</option>
                                                        <option value="27154">Housing</option>
                                                        <option value="27151">Human Resources</option>
                                                        <option value="27150">Human Rights</option>
                                                        <option value="27149">Human Sexuality</option>
                                                        <option value="27148">Immigration</option>
                                                        <option value="27147">India / Indian</option>
                                                        <option value="27146">Indonesia / Indonesian</option>
                                                        <option value="27145">Information Technology</option>
                                                        <option value="27144">International Relations</option>
                                                        <option value="27143">Internet</option>
                                                        <option value="27142">Japan / Japanese</option>
                                                        <option value="27141">Jewish Studies</option>
                                                        <option value="27140">Juvenile Delinquency / Crime</option>
                                                        <option value="27139">Korea / Korean</option>
                                                        <option value="27138">Labor / Union Studies</option>
                                                        <option value="27137">Languages</option>
                                                        <option value="27136">Latin America (general)</option>
                                                        <option value="27135">&nbsp;&nbsp;&nbsp;Latin America: Caribbean</option>
                                                        <option value="27134">&nbsp;&nbsp;&nbsp;Latin America: Brazil</option>
                                                        <option value="27133">&nbsp;&nbsp;&nbsp;Latin America: Central America</option>
                                                        <option value="27132">&nbsp;&nbsp;&nbsp;Latin America: Costa Rica</option>
                                                        <option value="27131">&nbsp;&nbsp;&nbsp;Latin America: Cuba</option>
                                                        <option value="27130">&nbsp;&nbsp;&nbsp;Latin America: Guatemala</option>
                                                        <option value="27129">&nbsp;&nbsp;&nbsp;Latin America: Mexico</option>
                                                        <option value="27127">&nbsp;&nbsp;&nbsp;Latin America: Puerto Rico</option>
                                                        <option value="27128">&nbsp;&nbsp;&nbsp;Latin America: South America</option>
                                                        <option value="27126">Law (general)</option>
                                                        <option value="27125">&nbsp;&nbsp;&nbsp;Law: Business</option>
                                                        <option value="27124">&nbsp;&nbsp;&nbsp;Law: Constitutional Law</option>
                                                        <option value="27123">&nbsp;&nbsp;&nbsp;Law: Corrections</option>
                                                        <option value="27122">&nbsp;&nbsp;&nbsp;Law: Courts</option>
                                                        <option value="27121">&nbsp;&nbsp;&nbsp;Law: Enforcement</option>
                                                        <option value="27120">&nbsp;&nbsp;&nbsp;Law: Historic Trials</option>
                                                        <option value="27119">&nbsp;&nbsp;&nbsp;Law: International</option>
                                                        <option value="27118">&nbsp;&nbsp;&nbsp;Law: Legal Briefs</option>
                                                        <option value="27116">&nbsp;&nbsp;&nbsp;Law: Legal Issues</option>
                                                        <option value="27117">&nbsp;&nbsp;&nbsp;Law: Litigation</option>
                                                        <option value="27115">&nbsp;&nbsp;&nbsp;Law: Supreme Court</option>
                                                        <option value="27114">&nbsp;&nbsp;&nbsp;Law: Theory</option>
                                                        <option value="27112">&nbsp;&nbsp;&nbsp;Law: Trial System</option>
                                                        <option value="27113">Leadership</option>
                                                        <option value="27111">Learning</option>
                                                        <option value="27110">Linguistics</option>
                                                        <option value="27109">Literature (general)</option>
                                                        <option value="27108">&nbsp;&nbsp;&nbsp;Literature: African</option>
                                                        <option value="27107">&nbsp;&nbsp;&nbsp;Literature: African-American</option>
                                                        <option value="27106">&nbsp;&nbsp;&nbsp;Literature: American</option>
                                                        <option value="27104">&nbsp;&nbsp;&nbsp;Literature: Ancient</option>
                                                        <option value="27105">&nbsp;&nbsp;&nbsp;Literature: Asian</option>
                                                        <option value="27103">&nbsp;&nbsp;&nbsp;Literature: Authors</option>
                                                        <option value="27102">&nbsp;&nbsp;&nbsp;Literature: British</option>
                                                        <option value="27101">&nbsp;&nbsp;&nbsp;Literature: Canadian</option>
                                                        <option value="27100">&nbsp;&nbsp;&nbsp;Literature: Caribbean</option>
                                                        <option value="27099">&nbsp;&nbsp;&nbsp;Literature: Children's</option>
                                                        <option value="27097">&nbsp;&nbsp;&nbsp;Literature: Classic (Greek/Roman)</option>
                                                        <option value="27098">&nbsp;&nbsp;&nbsp;Literature: English</option>
                                                        <option value="27096">&nbsp;&nbsp;&nbsp;Literature: French</option>
                                                        <option value="27095">&nbsp;&nbsp;&nbsp;Literature: German</option>
                                                        <option value="27093">&nbsp;&nbsp;&nbsp;Literature: Greek / Roman</option>
                                                        <option value="27094">&nbsp;&nbsp;&nbsp;Literature: Irish / Scottish</option>
                                                        <option value="27092">&nbsp;&nbsp;&nbsp;Literature: Italian</option>
                                                        <option value="27091">&nbsp;&nbsp;&nbsp;Literature: Latin-American</option>
                                                        <option value="27090">&nbsp;&nbsp;&nbsp;Literature: Medieval</option>
                                                        <option value="27089">&nbsp;&nbsp;&nbsp;Literature: Portuguese</option>
                                                        <option value="27088">&nbsp;&nbsp;&nbsp;Literature: Russian</option>
                                                        <option value="27086">&nbsp;&nbsp;&nbsp;Literature: Shakespeare</option>
                                                        <option value="27087">&nbsp;&nbsp;&nbsp;Literature: Spanish</option>
                                                        <option value="27085">&nbsp;&nbsp;&nbsp;Literature: World</option>
                                                        <option value="27083">Mainstreaming</option>
                                                        <option value="27084">Management (general)</option>
                                                        <option value="27082">&nbsp;&nbsp;&nbsp;Management: Motivation</option>
                                                        <option value="27080">&nbsp;&nbsp;&nbsp;Management: Theory</option>
                                                        <option value="27081">Marketing</option>
                                                        <option value="27079">Mass Communications</option>
                                                        <option value="27078">Mathematics</option>
                                                        <option value="27077">Media</option>
                                                        <option value="27076">Medical / Medicine (general)</option>
                                                        <option value="27075">&nbsp;&nbsp;&nbsp;Medical: AIDS</option>
                                                        <option value="27074">&nbsp;&nbsp;&nbsp;Medical: Alternative Medicine</option>
                                                        <option value="27072">&nbsp;&nbsp;&nbsp;Medical: Cancer</option>
                                                        <option value="27073">&nbsp;&nbsp;&nbsp;Medical: Dentistry</option>
                                                        <option value="27071">&nbsp;&nbsp;&nbsp;Medical: Diseases</option>
                                                        <option value="27070">&nbsp;&nbsp;&nbsp;Medical: Disorders</option>
                                                        <option value="27069">&nbsp;&nbsp;&nbsp;Medical: Doctoring</option>
                                                        <option value="27068">&nbsp;&nbsp;&nbsp;Medical: Epidemiology</option>
                                                        <option value="27067">&nbsp;&nbsp;&nbsp;Medical: Ethics</option>
                                                        <option value="27066">&nbsp;&nbsp;&nbsp;Medical: Health Care</option>
                                                        <option value="27065">&nbsp;&nbsp;&nbsp;Medical: Holistic Medicine</option>
                                                        <option value="27423">&nbsp;&nbsp;&nbsp;Medical: Issues</option>
                                                        <option value="27424">&nbsp;&nbsp;&nbsp;Medical: Nursing</option>
                                                        <option value="27425">&nbsp;&nbsp;&nbsp;Medical: Pharmacy</option>
                                                        <option value="27426">&nbsp;&nbsp;&nbsp;Medical: Treatment</option>
                                                        <option value="27427">Meteorology</option>
                                                        <option value="27428">Mexico / Mexican-American</option>
                                                        <option value="27429">Middle East</option>
                                                        <option value="27430">Military</option>
                                                        <option value="27431">Morality</option>
                                                        <option value="27432">Motivation</option>
                                                        <option value="27433">Multiculturalism</option>
                                                        <option value="27434">Music</option>
                                                        <option value="27435">Mythology (general)</option>
                                                        <option value="27436">&nbsp;&nbsp;&nbsp;Mythology: Ancient Beliefs</option>
                                                        <option value="27437">&nbsp;&nbsp;&nbsp;Mythology: Bible</option>
                                                        <option value="27438">&nbsp;&nbsp;&nbsp;Mythology: Christianity</option>
                                                        <option value="27439">&nbsp;&nbsp;&nbsp;Mythology: Church</option>
                                                        <option value="27440">&nbsp;&nbsp;&nbsp;Mythology: Cults</option>
                                                        <option value="27441">&nbsp;&nbsp;&nbsp;Mythology: Eastern</option>
                                                        <option value="27442">&nbsp;&nbsp;&nbsp;Mythology: Greek / Roman</option>
                                                        <option value="27443">&nbsp;&nbsp;&nbsp;Mythology: Islam</option>
                                                        <option value="27444">&nbsp;&nbsp;&nbsp;Mythology: Judaism</option>
                                                        <option value="27445">&nbsp;&nbsp;&nbsp;Mythology: Medieval</option>
                                                        <option value="27446">&nbsp;&nbsp;&nbsp;Mythology: Native Indian</option>
                                                        <option value="27447">&nbsp;&nbsp;&nbsp;Mythology: People</option>
                                                        <option value="27448">&nbsp;&nbsp;&nbsp;Mythology: Political Issues</option>
                                                        <option value="27449">&nbsp;&nbsp;&nbsp;Mythology: Religion</option>
                                                        <option value="27450">&nbsp;&nbsp;&nbsp;Mythology: Superstition</option>
                                                        <option value="27451">&nbsp;&nbsp;&nbsp;Mythology: Theology</option>
                                                        <option value="27452">&nbsp;&nbsp;&nbsp;Mythology: World</option>
                                                        <option value="27453">Native Americans</option>
                                                        <option value="27454">Nature</option>
                                                        <option value="27455">News</option>
                                                        <option value="27456">Novels</option>
                                                        <option value="27457">Nuclear Energy</option>
                                                        <option value="27458">Nursing</option>
                                                        <option value="27459">Nutrition</option>
                                                        <option value="27460">Occult</option>
                                                        <option value="27461">Oceanography</option>
                                                        <option value="27462">Organized Crime</option>
                                                        <option value="27463">Pakistan / Pakistani</option>
                                                        <option value="27464">Paleontology</option>
                                                        <option value="27465">Parapsychology</option>
                                                        <option value="27466">Parenting</option>
                                                        <option value="27467">Pharmacy</option>
                                                        <option value="27468">Philosophy (general)</option>
                                                        <option value="27469">&nbsp;&nbsp;&nbsp;Philosophy: Existence of God</option>
                                                        <option value="27470">&nbsp;&nbsp;&nbsp;Philosophy: Famous Figures</option>
                                                        <option value="27471">&nbsp;&nbsp;&nbsp;Philosophy: Free Will</option>
                                                        <option value="27472">&nbsp;&nbsp;&nbsp;Philosophy: Greek</option>
                                                        <option value="27473">&nbsp;&nbsp;&nbsp;Philosophy: Philosophers</option>
                                                        <option value="27474">&nbsp;&nbsp;&nbsp;Philosophy: Religious</option>
                                                        <option value="27475">&nbsp;&nbsp;&nbsp;Philosophy: Utopia</option>
                                                        <option value="27476">Photography</option>
                                                        <option value="27477">Physical Education (PE)</option>
                                                        <option value="27478">Physics</option>
                                                        <option value="27479">Physiology</option>
                                                        <option value="27480">Planets</option>
                                                        <option value="27481">Plays</option>
                                                        <option value="27482">Poetry / Poets (general)</option>
                                                        <option value="27483">&nbsp;&nbsp;&nbsp;Poetry / Poets: American</option>
                                                        <option value="27484">&nbsp;&nbsp;&nbsp;Poetry / Poets: English</option>
                                                        <option value="27485">Police</option>
                                                        <option value="27486">Political Science / Politics (general)</option>
                                                        <option value="27487">&nbsp;&nbsp;&nbsp;Politics: Campaigns</option>
                                                        <option value="27488">&nbsp;&nbsp;&nbsp;Politics: Elections</option>
                                                        <option value="27489">&nbsp;&nbsp;&nbsp;Politics: Federal</option>
                                                        <option value="27490">&nbsp;&nbsp;&nbsp;Politics: Fiscal Policy</option>
                                                        <option value="27491">&nbsp;&nbsp;&nbsp;Politics: Foreign Policy</option>
                                                        <option value="27492">&nbsp;&nbsp;&nbsp;Politics: Government Agencies</option>
                                                        <option value="27493">&nbsp;&nbsp;&nbsp;Politics: International Relations</option>
                                                        <option value="27494">&nbsp;&nbsp;&nbsp;Politics: Local</option>
                                                        <option value="27495">&nbsp;&nbsp;&nbsp;Politics: Military Agencies</option>
                                                        <option value="27496">&nbsp;&nbsp;&nbsp;Politics: Politicians</option>
                                                        <option value="27497">&nbsp;&nbsp;&nbsp;Politics: Presidential Studies</option>
                                                        <option value="27498">&nbsp;&nbsp;&nbsp;Politics: Social Security</option>
                                                        <option value="27499">&nbsp;&nbsp;&nbsp;Politics: State</option>
                                                        <option value="27500">&nbsp;&nbsp;&nbsp;Politics: Theory</option>
                                                        <option value="27501">&nbsp;&nbsp;&nbsp;Politics: Voting</option>
                                                        <option value="27502">&nbsp;&nbsp;&nbsp;Politics: Welfare</option>
                                                        <option value="27503">Pollution</option>
                                                        <option value="27504">Population</option>
                                                        <option value="27505">Pornography</option>
                                                        <option value="27506">Privacy</option>
                                                        <option value="27507">Pros and Cons</option>
                                                        <option value="27508">Programming</option>
                                                        <option value="27509">Psychiatry</option>
                                                        <option value="27510">Psychology (general)</option>
                                                        <option value="27511">&nbsp;&nbsp;&nbsp;Psychology: Abnormal</option>
                                                        <option value="27512">&nbsp;&nbsp;&nbsp;Psychology: Adolescent</option>
                                                        <option value="27513">&nbsp;&nbsp;&nbsp;Psychology: Behaviorism</option>
                                                        <option value="27514">&nbsp;&nbsp;&nbsp;Psychology: Child</option>
                                                        <option value="27515">&nbsp;&nbsp;&nbsp;Psychology: Cognitive</option>
                                                        <option value="27516">&nbsp;&nbsp;&nbsp;Psychology: Counseling</option>
                                                        <option value="27517">&nbsp;&nbsp;&nbsp;Psychology: Developmental</option>
                                                        <option value="27518">&nbsp;&nbsp;&nbsp;Psychology: Disorders</option>
                                                        <option value="27519">&nbsp;&nbsp;&nbsp;Psychology: Dreams</option>
                                                        <option value="27520">&nbsp;&nbsp;&nbsp;Psychology: Experimental</option>
                                                        <option value="27521">&nbsp;&nbsp;&nbsp;Psychology: Freud</option>
                                                        <option value="27522">&nbsp;&nbsp;&nbsp;Psychology: History</option>
                                                        <option value="27523">&nbsp;&nbsp;&nbsp;Psychology: Jung</option>
                                                        <option value="27524">&nbsp;&nbsp;&nbsp;Psychology: Parapsychology</option>
                                                        <option value="27525">&nbsp;&nbsp;&nbsp;Psychology: Personality</option>
                                                        <option value="27526">&nbsp;&nbsp;&nbsp;Psychology: Physiology</option>
                                                        <option value="27527">&nbsp;&nbsp;&nbsp;Psychology: Piaget</option>
                                                        <option value="27528">&nbsp;&nbsp;&nbsp;Psychology: Psychotherapy</option>
                                                        <option value="27529">&nbsp;&nbsp;&nbsp;Psychology: Rogers</option>
                                                        <option value="27530">&nbsp;&nbsp;&nbsp;Psychology: Social</option>
                                                        <option value="27531">&nbsp;&nbsp;&nbsp;Psychology: Testing</option>
                                                        <option value="27532">&nbsp;&nbsp;&nbsp;Psychology: Theories</option>
                                                        <option value="27533">&nbsp;&nbsp;&nbsp;Psychology: Therapy</option>
                                                        <option value="27534">Public Administration</option>
                                                        <option value="27535">Public Relations</option>
                                                        <option value="27536">Race / Racism</option>
                                                        <option value="27537">Reading</option>
                                                        <option value="27538">Real Estate</option>
                                                        <option value="27539">Recreation / Leisure</option>
                                                        <option value="27540">Religion (general)</option>
                                                        <option value="27541">&nbsp;&nbsp;&nbsp;Religion: Bible</option>
                                                        <option value="27542">&nbsp;&nbsp;&nbsp;Religion: Buddhism</option>
                                                        <option value="27543">&nbsp;&nbsp;&nbsp;Religion: Christianity</option>
                                                        <option value="27544">&nbsp;&nbsp;&nbsp;Religion: Church vs. State</option>
                                                        <option value="27545">&nbsp;&nbsp;&nbsp;Religion: Cults</option>
                                                        <option value="27546">&nbsp;&nbsp;&nbsp;Religion: Eastern</option>
                                                        <option value="27547">&nbsp;&nbsp;&nbsp;Religion: Famous People</option>
                                                        <option value="27548">&nbsp;&nbsp;&nbsp;Religion: Hinduism</option>
                                                        <option value="27549">&nbsp;&nbsp;&nbsp;Religion: Islam</option>
                                                        <option value="27550">&nbsp;&nbsp;&nbsp;Religion: Janism</option>
                                                        <option value="27551">&nbsp;&nbsp;&nbsp;Religion: Judaism</option>
                                                        <option value="27552">&nbsp;&nbsp;&nbsp;Religion: Koran</option>
                                                        <option value="27553">&nbsp;&nbsp;&nbsp;Religion: Political Issues</option>
                                                        <option value="27554">&nbsp;&nbsp;&nbsp;Religion: Shinto</option>
                                                        <option value="27555">&nbsp;&nbsp;&nbsp;Religion: Superstition</option>
                                                        <option value="27556">&nbsp;&nbsp;&nbsp;Religion: Taoism</option>
                                                        <option value="27557">&nbsp;&nbsp;&nbsp;Religion: Theology</option>
                                                        <option value="27558">&nbsp;&nbsp;&nbsp;Religion: Tora</option>
                                                        <option value="27559">&nbsp;&nbsp;&nbsp;Religion: World</option>
                                                        <option value="27560">Roman Studies</option>
                                                        <option value="27561">Russia / Russian</option>
                                                        <option value="27562">Safety</option>
                                                        <option value="27563">School Issues</option>
                                                        <option value="27564">Science</option>
                                                        <option value="27565">Security</option>
                                                        <option value="27566">Shakespeare</option>
                                                        <option value="27567">Slavery</option>
                                                        <option value="27568">Social Media</option>
                                                        <option value="27569">Sociology (general)</option>
                                                        <option value="27570">&nbsp;&nbsp;&nbsp;Sociology: Counseling</option>
                                                        <option value="27571">&nbsp;&nbsp;&nbsp;Sociology: Family Issues</option>
                                                        <option value="27572">&nbsp;&nbsp;&nbsp;Sociology: Human Services</option>
                                                        <option value="27573">&nbsp;&nbsp;&nbsp;Sociology: Politics</option>
                                                        <option value="27574">&nbsp;&nbsp;&nbsp;Sociology: Problems</option>
                                                        <option value="27575">&nbsp;&nbsp;&nbsp;Sociology: Race</option>
                                                        <option value="27576">&nbsp;&nbsp;&nbsp;Sociology: Research</option>
                                                        <option value="27577">&nbsp;&nbsp;&nbsp;Sociology: Services</option>
                                                        <option value="27578">&nbsp;&nbsp;&nbsp;Sociology: Sex / Aids</option>
                                                        <option value="27579">&nbsp;&nbsp;&nbsp;Sociology: Social Work</option>
                                                        <option value="27580">&nbsp;&nbsp;&nbsp;Sociology: Theories</option>
                                                        <option value="27581">&nbsp;&nbsp;&nbsp;Sociology: Theorists</option>
                                                        <option value="27582">&nbsp;&nbsp;&nbsp;Sociology: Therapy</option>
                                                        <option value="27583">&nbsp;&nbsp;&nbsp;Sociology: Utopian Societies</option>
                                                        <option value="27584">&nbsp;&nbsp;&nbsp;Sociology: Welfare</option>
                                                        <option value="27585">Software</option>
                                                        <option value="27586">Soviet Union / USSR</option>
                                                        <option value="27587">Speech</option>
                                                        <option value="27588">Sports (general)</option>
                                                        <option value="27589">&nbsp;&nbsp;&nbsp;Sports: Advertising</option>
                                                        <option value="27590">&nbsp;&nbsp;&nbsp;Sports: Athletic Fitness</option>
                                                        <option value="27591">&nbsp;&nbsp;&nbsp;Sports: Business</option>
                                                        <option value="27592">&nbsp;&nbsp;&nbsp;Sports: Coaching</option>
                                                        <option value="27593">&nbsp;&nbsp;&nbsp;Sports: College</option>
                                                        <option value="27594">&nbsp;&nbsp;&nbsp;Sports: Culture</option>
                                                        <option value="27595">&nbsp;&nbsp;&nbsp;Sports: Drugs</option>
                                                        <option value="27596">&nbsp;&nbsp;&nbsp;Sports: Economics</option>
                                                        <option value="27597">&nbsp;&nbsp;&nbsp;Sports: Gambling</option>
                                                        <option value="27598">&nbsp;&nbsp;&nbsp;Sports: High School</option>
                                                        <option value="27599">&nbsp;&nbsp;&nbsp;Sports: Law</option>
                                                        <option value="27600">&nbsp;&nbsp;&nbsp;Sports: Management</option>
                                                        <option value="27601">&nbsp;&nbsp;&nbsp;Sports: Medicine</option>
                                                        <option value="27602">&nbsp;&nbsp;&nbsp;Sports: Olympics</option>
                                                        <option value="27603">&nbsp;&nbsp;&nbsp;Sports: Political Issues</option>
                                                        <option value="27604">&nbsp;&nbsp;&nbsp;Sports: Professional Athletes</option>
                                                        <option value="27605">&nbsp;&nbsp;&nbsp;Sports: Recreational</option>
                                                        <option value="27606">&nbsp;&nbsp;&nbsp;Sports: Social Issues</option>
                                                        <option value="27607">&nbsp;&nbsp;&nbsp;Sports: Steroids</option>
                                                        <option value="27608">&nbsp;&nbsp;&nbsp;Sports: Teams</option>
                                                        <option value="27609">&nbsp;&nbsp;&nbsp;Sports: Violence</option>
                                                        <option value="27610">&nbsp;&nbsp;&nbsp;Sports: Women</option>
                                                        <option value="27611">&nbsp;&nbsp;&nbsp;Sports: Youth</option>
                                                        <option value="27612">Teaching (general)</option>
                                                        <option value="27613">&nbsp;&nbsp;&nbsp;Teaching: Administration</option>
                                                        <option value="27614">&nbsp;&nbsp;&nbsp;Teaching: Classroom Mgmt.</option>
                                                        <option value="27615">&nbsp;&nbsp;&nbsp;Teaching: Coaching</option>
                                                        <option value="27616">&nbsp;&nbsp;&nbsp;Teaching: Computers</option>
                                                        <option value="27617">&nbsp;&nbsp;&nbsp;Teaching: Counseling</option>
                                                        <option value="27618">&nbsp;&nbsp;&nbsp;Teaching: Countries</option>
                                                        <option value="27619">&nbsp;&nbsp;&nbsp;Teaching: Curriculum</option>
                                                        <option value="27620">&nbsp;&nbsp;&nbsp;Teaching: ESL</option>
                                                        <option value="27621">&nbsp;&nbsp;&nbsp;Teaching: Foreign Countries</option>
                                                        <option value="27622">&nbsp;&nbsp;&nbsp;Teaching: Higher Education</option>
                                                        <option value="27623">&nbsp;&nbsp;&nbsp;Teaching: Homeschooling</option>
                                                        <option value="27624">&nbsp;&nbsp;&nbsp;Teaching: Inclusion</option>
                                                        <option value="27625">&nbsp;&nbsp;&nbsp;Teaching: Mathematics</option>
                                                        <option value="27626">&nbsp;&nbsp;&nbsp;Teaching: Politics</option>
                                                        <option value="27627">&nbsp;&nbsp;&nbsp;Teaching: Physical Education</option>
                                                        <option value="27628">&nbsp;&nbsp;&nbsp;Teaching: Public vs. Private</option>
                                                        <option value="27629">&nbsp;&nbsp;&nbsp;Teaching: Reading</option>
                                                        <option value="27630">&nbsp;&nbsp;&nbsp;Teaching: Social Issues</option>
                                                        <option value="27631">&nbsp;&nbsp;&nbsp;Teaching: Special Education</option>
                                                        <option value="27632">&nbsp;&nbsp;&nbsp;Teaching: Teaching Methods</option>
                                                        <option value="27633">&nbsp;&nbsp;&nbsp;Teaching: Technology</option>
                                                        <option value="27634">&nbsp;&nbsp;&nbsp;Teaching: Theory</option>
                                                        <option value="27635">Technical Writing</option>
                                                        <option value="27636">Technology</option>
                                                        <option value="27637">Television</option>
                                                        <option value="27638">Terrorism</option>
                                                        <option value="27639">Theology</option>
                                                        <option value="27640">Theory</option>
                                                        <option value="27641">Therapy</option>
                                                        <option value="27642">Topography</option>
                                                        <option value="27643">Tourism</option>
                                                        <option value="27644">Transportation (general)</option>
                                                        <option value="27645">&nbsp;&nbsp;&nbsp;Transportation: Aviation</option>
                                                        <option value="27646">&nbsp;&nbsp;&nbsp;Transportation: Boat</option>
                                                        <option value="27647">&nbsp;&nbsp;&nbsp;Transportation: Bus</option>
                                                        <option value="27648">&nbsp;&nbsp;&nbsp;Transportation: Car</option>
                                                        <option value="27649">&nbsp;&nbsp;&nbsp;Transportation: Environment</option>
                                                        <option value="27650">&nbsp;&nbsp;&nbsp;Transportation: Freight</option>
                                                        <option value="27651">&nbsp;&nbsp;&nbsp;Transportation: Public</option>
                                                        <option value="27652">&nbsp;&nbsp;&nbsp;Transportation: Railroads</option>
                                                        <option value="27653">&nbsp;&nbsp;&nbsp;Transportation: SUV</option>
                                                        <option value="27654">Urban Studies</option>
                                                        <option value="27655">Vietnam</option>
                                                        <option value="27656">Violence</option>
                                                        <option value="27657">War</option>
                                                        <option value="27658">Weather</option>
                                                        <option value="27659">Western Civilization (general)</option>
                                                        <option value="27660">&nbsp;&nbsp;&nbsp;Western Civ: Ancient Civilizations</option>
                                                        <option value="27661">&nbsp;&nbsp;&nbsp;Western Civ: England (pre-1800)</option>
                                                        <option value="27662">&nbsp;&nbsp;&nbsp;Western Civ: Europe's Culture</option>
                                                        <option value="27663">&nbsp;&nbsp;&nbsp;Western Civ: Europe's History</option>
                                                        <option value="27664">&nbsp;&nbsp;&nbsp;Western Civ: France (pre-1800)</option>
                                                        <option value="27665">&nbsp;&nbsp;&nbsp;Western Civ: Greeks / Greece</option>
                                                        <option value="27666">&nbsp;&nbsp;&nbsp;Western Civ: Romans / Italy</option>
                                                        <option value="27667">Witchcraft / Magic / Voodoo</option>
                                                        <option value="27668">Women (general)</option>
                                                        <option value="27669">&nbsp;&nbsp;&nbsp;Women: Abortion</option>
                                                        <option value="27670">&nbsp;&nbsp;&nbsp;Women: Achievements</option>
                                                        <option value="27671">&nbsp;&nbsp;&nbsp;Women: Activists</option>
                                                        <option value="27672">&nbsp;&nbsp;&nbsp;Women: Birth Control</option>
                                                        <option value="27673">&nbsp;&nbsp;&nbsp;Women: Civil Rights</option>
                                                        <option value="27674">&nbsp;&nbsp;&nbsp;Women: Cultures</option>
                                                        <option value="27675">&nbsp;&nbsp;&nbsp;Women: Employment</option>
                                                        <option value="27676">&nbsp;&nbsp;&nbsp;Women: Feminism / Feminists</option>
                                                        <option value="27677">&nbsp;&nbsp;&nbsp;Women: Foreign Countries</option>
                                                        <option value="27678">&nbsp;&nbsp;&nbsp;Women: Gender / Society</option>
                                                        <option value="27679">&nbsp;&nbsp;&nbsp;Women: Health Issues</option>
                                                        <option value="27680">&nbsp;&nbsp;&nbsp;Women: Sexuality</option>
                                                        <option value="27681">&nbsp;&nbsp;&nbsp;Women: Social Issues</option>
                                                        <option value="27682">&nbsp;&nbsp;&nbsp;Women: Workforce</option>
                                                        <option value="27683">World Literature</option>
                                                        <option value="27684">Writing</option>
                                                        <option value="27685">Zoology</option>
                                                        <option value="27686">Other (not listed above) </option>
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
                                                        <textarea-ordering-page></textarea-ordering-page>
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::col-->

                                                </div>
                                                <!--end::Input group-->
                                            </form>
                                        </div>
                                    </div>
                                    <!--end::Step 1-->

                                </div>

                                <div data-kt-stepper-content="true" data-kt-stepper-content-for="stepper-id" data-kt-stepper-type="step" class='step'>
                                    <!--begin::Step 2-->
                                    <div data-kt-stepper-element="content">
                                        <div class="w-100">
                                            <form action="">
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
                                                            <select name="card_expiry_month" class="form-select form-select-solid " data-control="select2" data-hide-search="true" data-placeholder="Choose">
                                                                <option></option>
                                                                <option value="1">High School</option>
                                                                <option value="2">Collage Freshman </option>
                                                                <option value="1">Collage Sophomore</option>
                                                                <option value="2">Collage Junior</option>
                                                                <option value="1">Collage Senior</option>
                                                                <option value="2">Master</option>
                                                                <option value="1">Doctoral</option>
                                                                <option value="2">Corporate/Professional</option>
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
                                                            <select name="card_expiry_month" class="form-select form-select-solid " data-control="select2" data-hide-search="true" data-placeholder="Choose">
                                                                <option value="17000">Term Paper</option>
                                                                <option value="17019">Marketing Plan</option>
                                                                <option value="17020">Annotated Bibliography</option>
                                                                <option value="17021">Article Review</option>
                                                                <option value="17022">Creative Writing</option>
                                                                <option value="17023">Peer Reviewed Journal</option>
                                                                <option value="17024">Poem</option>
                                                                <option value="17025">White Paper</option>
                                                                <option value="17026">Admission Essay</option>
                                                                <option value="17027">Application Essay</option>
                                                                <option value="17028">Journal Professional</option>
                                                                <option value="17029">Corporate</option>
                                                                <option value="17030">Power Point Presentation</option>
                                                                <option value="17031">Resume</option>
                                                                <option value="17032">Website Content</option>
                                                                <option value="17018">Capstone Project</option>
                                                                <option value="17017">Case Study</option>
                                                                <option value="17016">Business Plan</option>
                                                                <option value="17001">Essay</option>
                                                                <option value="17002">Book Report</option>
                                                                <option value="17003">Research Paper</option>
                                                                <option value="17004">Dissertation or Thesis complete</option>
                                                                <option value="17005">Only the Introduction chapter</option>
                                                                <option value="17006">Only the Hypothesis chapter</option>
                                                                <option value="17007">Only the Literature Review chapter</option>
                                                                <option value="17008">Only the Methodology chapter</option>
                                                                <option value="17009">Only the Conclusion chapter</option>
                                                                <option value="17010">Multiple Chapters</option>
                                                                <option value="17011">Research Proposal</option>
                                                                <option value="17013">Book Review</option>
                                                                <option value="17014">Business Proposal</option>
                                                                <option value="17015">SWOT</option>
                                                                <option value="17033">Other (explain in description)</option>
                                                                <option value="12999">Other (not listed above)</option>
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
                                                            <select name="card_expiry_month" class="form-select form-select-solid " data-control="select2" data-hide-search="true" data-placeholder="Choose">
                                                                <option></option>
                                                                <option value="1">None</option>
                                                                <option value="2">Let the writer choose</option>
                                                                <option value="1">MLA</option>
                                                                <option value="2">APA</option>
                                                                <option value="1">Turabian</option>
                                                                <option value="2">Huavard</option>
                                                                <option value="1">AMA</option>
                                                                <option value="2">Chicago</option>
                                                                <option value="2">BCE</option>
                                                                <option value="1">IEEE</option>
                                                                <option value="2">AIP</option>
                                                                <option value="2">ACS</option>
                                                                <option value="2">Bluebook</option>
                                                                <option value="1">Does Not Matter</option>
                                                                <option value="2">Other (Not Listed Above)</option>
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
                                                            <select class="form-select form-select-solid fw-bold" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-kt-user-table-filter="role" data-hide-search="true">
                                                                <option>British English</option>
                                                                <option value="Administrator">American English</option>
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
                                                            <input type="number" class="form-control form-control-lg form-control-solid" name="number" placeholder="10" value="10" />
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
                                                            <select class="form-select form-select-solid fw-bold" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-kt-user-table-filter="role" data-hide-search="true">
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
                                                            <input type="number" class="form-control form-control-lg form-control-solid" name="number" placeholder="10" value="10" />
                                                            <!--end::Input-->
                                                        </div>
                                                        <!--end::col-->

                                                    </div>
                                                    <!--end::Input group-->
                                                </div>
                                                <!--end::Input group-->
                                            </form>
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
                                            <form action="">
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
                                                    <input type="number" class="form-control form-control-lg form-control-solid" name="number" placeholder="10" value="10" />
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
                                                    <select class="form-select form-select-solid fw-bold" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-kt-user-table-filter="role" data-hide-search="true">
                                                        <option>8 Hours</option>
                                                        <option value="Administrator">24 Hours</option>
                                                        <option value="Administrator">48 Hours</option>
                                                        <option value="Administrator">3 Days</option>
                                                        <option value="Administrator">5 Days</option>
                                                        <option value="Administrator">7 Days</option>
                                                        <option value="Administrator">14 Days</option>
                                                        <option value="Administrator">14+</option>
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
                                                    <select class="form-select form-select-solid fw-bold" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-kt-user-table-filter="role" data-hide-search="true">
                                                        <option></option>
                                                        <option value="Administrator">Yes</option>
                                                        <option value="Administrator">No</option>
                                                    </select>
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->
                                            </form>
                                        </div>
                                    </div>
                                    <!--end::Step 3-->
                                </div>

                                <div data-kt-stepper-content="true" data-kt-stepper-content-for="stepper-id" data-kt-stepper-type="step" class='step'>
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
                                </div>

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
                                        <button type="button" class="btn btn-lg btn-primary" id='submit' style='display:none;'>
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
<!--begin::Global Javascript Bundle(mandatory for all pages)-->
<!--end::Custom Javascript-->
<!--end::Javascript-->