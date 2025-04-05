<!--begin::Content wrapper-->
<div class="d-flex flex-column flex-column-fluid">
    <!--begin::Toolbar-->
    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
        <!--begin::Toolbar container-->
        <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                <!--begin::Title-->
                <h1 class="page-heading d-flex text-gray-900 fw-bold fs-1 flex-column justify-content-center my-0">Library Access</h1>
                <!--end::Title-->

            </div>
            <!--end::Page title-->
            <!--begin::Actions-->
            <div class="d-flex align-items-center gap-2 gap-lg-3">

                <!--begin::Secondary button-->
                <!--end::Secondary button-->
                <!--begin::Primary button-->
                <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_user">Add Paper</a>
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
            <div class="card mb-10">
                <!--begin::Page title-->
                <div class="page-title d-flex flex-column justify-content-center pt-6 px-8 flex-wrap me-3">
                    <!--begin::Title-->
                    <h3 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">Manage Papers</h3>
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
                            <input type="text" data-kt-user-table-filter="search" class="form-control form-control-solid w-250px ps-13" placeholder="Search Paper" />
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
                                        <label class="form-label fs-6 fw-semibold">Paper/Title:</label>
                                        <input type="text" placeholder="Paper Title" name="paper-title" autocomplete="off" class="form-control bg-transparent" />
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-3">
                                        <label class="form-label fs-6 fw-semibold">Subject/Topic:</label>
                                        <input type="text" placeholder="Subject Topic" name="subject-topic" autocomplete="off" class="form-control bg-transparent" />
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-3">
                                        <label class="form-label fs-6 fw-semibold">Paper Type:</label>
                                        <input type="text" placeholder="Paper Type" name="paper-type" autocomplete="off" class="form-control bg-transparent" />
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-3">
                                        <label class="form-label fs-6 fw-semibold">Word Count:</label>
                                        <input type="text" placeholder="Word Count" name="word-count" autocomplete="off" class="form-control bg-transparent" />
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-3">
                                        <label class="form-label fs-6 fw-semibold">Citation Style:</label>
                                        <input type="text" placeholder="Citation Style" name="citation-style" autocomplete="off" class="form-control bg-transparent" />
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
                            <div class="modal-dialog modal-dialog-centered mw-750px">
                                <!--begin::Modal content-->
                                <div class="modal-content">
                                    <!--begin::Modal header-->
                                    <div class="modal-header">
                                        <!--begin::Modal title-->
                                        <h2 class="fw-bold">Export Paper</h2>
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
                    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_managePaper">
                        <thead>
                            <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                <th class="w-10px pe-2">
                                    <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                        <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_table_users .form-check-input" value="1" />
                                    </div>
                                </th>
                                <th class="min-w-125px">Paper/Title</th>
                                <th class="min-w-125px">Subject/Topic</th>
                                <th class="min-w-125px">Paper Type</th>
                                <th class="min-w-125px">Word Count</th>
                                <th class="min-w-125px">Citation Style</th>
                                <th class="min-w-100px">Status</th>
                                <th class="min-w-100px">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 fw-semibold">
                            <tr>
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1" />
                                    </div>
                                </td>

                                <td>Assignment</td>
                                <td>xyz</td>
                                <td>xyz</td>
                                <td>xyz</td>
                                <td>xyz</td>
                                <td>
                                    <div class="badge badge-light-success fw-bold" id="enable">Enabled</div>
                                </td>
                                <td>
                                    <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                        <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <button type="button" class="btn menu-link d-flex justify-content-center fs-7 w-100" data-bs-toggle="modal" data-bs-target="#view-invoice">view</button>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <button type="button" class="btn menu-link d-flex justify-content-center fs-7 w-100" data-bs-toggle="modal" data-bs-target="#kt_modal_add_user">Edit</button>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link d-flex justify-content-center px-3" onclick="confirmEnableDelete()">Delete</a>
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
                            <tr>
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1" />
                                    </div>
                                </td>

                                <td>Assignment</td>
                                <td>xyz</td>
                                <td>xyz</td>
                                <td>xyz</td>
                                <td>xyz</td>
                                <td>
                                    <div class="badge badge-light-danger fw-bold" id="disable">Disabled</div>
                                </td>
                                <td>
                                    <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                        <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <button type="button" class="btn menu-link d-flex justify-content-center fs-7 w-100" data-bs-toggle="modal" data-bs-target="#view-invoice">view</button>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <button type="button" class="btn menu-link d-flex justify-content-center fs-7 w-100" data-bs-toggle="modal" data-bs-target="#kt_modal_add_user">Edit</button>
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
<!--begin::Modal-->
<!--begin::Modal-->
<div class="modal fade" id="kt_modal_add_user" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-850px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header" id="kt_modal_add_user_header">
                <!--begin::Modal title-->
                <h2 class="fw-bold">Library Access</h2>
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
            <div class="modal-body px-5 my-7">
                <!--begin::Form-->
                <form id="kt_modal_add_user_form" class="form" action="#">
                    <!--begin::Scroll-->
                    <div class="d-flex flex-column scroll-y px-5 px-lg-10" id="kt_modal_add_user_scroll" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_user_header" data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px">

                        <div class="fv-row mb-7 row">
                            <!--begin::col-->
                            <div class="col-12">
                                <!--begin::Label-->
                                <label class="required fw-semibold fs-6 mb-2">Subject/Topic</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" name="Subject/Topic" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Subject/Topic" value="Subject/Topic" />
                                <!--end::Input-->
                            </div>
                            <!--end::col-->
                        </div>
                        <!--begin::Input group-->
                        <div class="fv-row mb-7 row">

                            <!--begin::col-->
                            <div class="col-md-6">
                                <!--begin::Label-->
                                <label class="required fw-semibold fs-6 mb-2">Paper Type</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <!--begin::Input-->
                                <select class="form-select form-select-solid fw-bold" data-kt-select2="true" data-placeholder="Essay" data-allow-clear="true" data-kt-user-table-filter="role" data-hide-search="true">
                                    <option></option>
                                    <option value="Administrator">Essay</option>
                                    <option value="Analyst">Application</option>
                                </select>
                                <!--end::Input-->
                                <!--end::Input-->
                            </div>
                            <!--end::col-->
                            <!--begin::col-->
                            <div class="col-md-6">
                                <!--begin::Label-->
                                <label class="required fw-semibold fs-6 mb-2">Word Count</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <!--begin::Input-->
                                <select class="form-select form-select-solid fw-bold" data-kt-select2="true" data-placeholder="Select Word Count" data-allow-clear="true" data-kt-user-table-filter="role" data-hide-search="true">
                                    <option></option>
                                    <option value="Administrator">200</option>
                                    <option value="Analyst">300</option>
                                </select>
                                <!--end::Input-->
                                <!--end::Input-->
                            </div>
                            <!--end::col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-7 row">
                            <!--begin::col-->
                            <div class="col-md-6">
                                <!--begin::Label-->
                                <label class="required fw-semibold fs-6 mb-2">Paper/Title</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" name="paper/title" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Paper/Title" value="Paper/Title" />
                                <!--end::Input-->
                            </div>
                            <!--end::col-->
                            <!--begin::col-->
                            <div class="col-md-6">
                                <!--begin::Label-->
                                <label class="required fw-semibold fs-6 mb-2">Citation Style</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <select class="form-select form-select-solid fw-bold" data-kt-select2="true" data-placeholder="Select Citation Style" data-allow-clear="true" data-kt-user-table-filter="role" data-hide-search="true">
                                    <option></option>
                                    <option value="Administrator">APA</option>
                                </select>
                                <!--end::Input-->
                            </div>
                            <!--end::col-->

                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-7 row">
                            <!--begin::col-->
                            <div class="col-md-3 col-sm-6">
                                <!--begin::Label-->
                                <label class="required fw-semibold fs-6 mb-2">Paper Summary</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <div>
                                    <!--begin::Label-->

                                    <label class="btn btn-sm fw-bold btn-primary" for="choose-file">Choose File</label>
                                    <input type="file" name="" id="choose-file" class="d-none" accept=".html">
                                    <!--end::Input-->
                                </div>
                                <!--end::col-->
                                <!--end::Input-->
                            </div>
                            <!--end::col-->
                            <!--begin::col-->
                            <div class="col-md-3 col-sm-6">
                                <!--begin::Label-->
                                <label class="required fw-semibold fs-6 mb-2">Paper Outline In Bullets</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <div>
                                    <!--begin::Label-->

                                    <label class="btn btn-sm fw-bold btn-primary" for="choose-file">Choose File</label>
                                    <input type="file" name="" id="choose-file" class="d-none" accept=".html">
                                    <!--end::Input-->
                                </div>
                                <!--end::col-->
                            </div>
                            <!--end::col-->
                            <!--begin::col-->
                            <div class="col-md-3 col-sm-6">
                                <!--begin::Label-->
                                <label class="required fw-semibold fs-6 mb-2">Paper Abstract</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <div>
                                    <!--begin::Label-->

                                    <label class="btn btn-sm fw-bold btn-primary" for="choose-file">Choose File</label>
                                    <input type="file" name="" id="choose-file" class="d-none" accept=".html">
                                    <!--end::Input-->
                                </div>
                                <!--end::col-->
                            </div>
                            <!--end::col-->
                            <!--begin::col-->
                            <div class="col-md-3 col-sm-6">
                                <!--begin::Label-->
                                <label class="required fw-semibold fs-6 mb-2">Turnitin Report</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <div>
                                    <!--begin::Label-->

                                    <label class="btn btn-sm fw-bold btn-primary" for="choose-file">Choose File</label>
                                    <input type="file" name="" id="choose-file" class="d-none" accept=".html">
                                    <!--end::Input-->
                                </div>
                                <!--end::col-->
                            </div>
                            <!--end::col-->

                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-7 row">
                            <!--begin::col-->
                            <div class="col-md-6">
                                <!--begin::Label-->
                                <label class="required fw-semibold fs-6 mb-2">File upload</label>
                                <!--end::Label-->
                            </div>
                            <!--end::col-->
                            <!--begin::col-->
                            <div class="col-md-6 justify-content-end d-flex">
                                <!--begin::Label-->
                                <button class="btn btn-sm fw-bold btn-primary">Upload File</button>
                            </div>
                            <!--end::col-->

                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::col-->
                            <div class="col-12">
                                <!--begin::Label-->
                                <label class="required fw-semibold fs-6 mb-2">status</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <!--begin::Input-->
                                <select class="form-select form-select-solid fw-bold" data-kt-select2="true" data-placeholder="Select Status" data-allow-clear="true" data-kt-user-table-filter="role" data-hide-search="true">
                                    <option>Enable</option>
                                    <option value="Administrator">Disable</option>
                                </select>
                                <!--end::Input-->
                                <!--end::Input-->
                            </div>
                            <!--end::col-->

                        </div>
                        <!--end::Input group-->
                        <!--begin::Actions-->
                        <div class="text-center pt-10">

                            <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
                                <span class="indicator-label">Submit</span>
                                <span class="indicator-progress">Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                            <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">Discard</button>
                        </div>
                        <!--end::Actions-->
                    </div>
                    <!--end::Scroll-->

                </form>
                <!--end::Form-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal -->
<!--end::Modal -->
<!--begin::Scrolltop-->
<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
    <i class="ki-duotone ki-arrow-up">
        <span class="path1"></span>
        <span class="path2"></span>
    </i>
</div>
<!--end::Scrolltop-->
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
                                        <div class="fw-bold fs-3 text-gray-800 mb-8">Library Paper #34782</div>
                                        <!--end::Label-->
                                        <!--begin::Row-->
                                        <div class="row g-5 mb-12">
                                            <!--end::Col-->
                                            <div class="col-sm-4">
                                                <!--end::Label-->
                                                <div class="fw-semibold fs-7 text-gray-600 mb-1">Subject/Topic:</div>
                                                <!--end::Label-->
                                                <!--end::Text-->
                                                <div class="fw-bold fs-6 text-gray-800">xyz</div>
                                                <!--end::Text-->
                                            </div>
                                            <!--end::Col-->
                                            <!--end::Col-->
                                            <div class="col-sm-4">
                                                <!--end::Label-->
                                                <div class="fw-semibold fs-7 text-gray-600 mb-1">Paper Type:</div>
                                                <!--end::Label-->
                                                <!--end::Text-->
                                                <div class="fw-bold fs-6 text-gray-800">xyz</div>
                                                <!--end::Text-->
                                            </div>
                                            <!--end::Col-->
                                            <div class="col-sm-4">
                                                <!--end::Label-->
                                                <div class="fw-semibold fs-7 text-gray-600 mb-1">Word Count:</div>
                                                <!--end::Label-->
                                                <!--end::Text-->
                                                <div class="fw-bold fs-6 text-gray-800">xyz</div>
                                                <!--end::Text-->
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Row-->
                                        <!--begin::Content-->
                                        <div class="row g-5 mb-12">
                                            <!--end::Col-->
                                            <div class="col-sm-4">
                                                <!--end::Label-->
                                                <div class="fw-semibold fs-7 text-gray-600 mb-1">Paper/Title:</div>
                                                <!--end::Label-->
                                                <!--end::Text-->
                                                <div class="fw-bold fs-6 text-gray-800">xyz</div>
                                                <!--end::Text-->
                                            </div>
                                            <!--end::Col-->
                                            <!--end::Col-->
                                            <div class="col-sm-4">
                                                <!--end::Label-->
                                                <div class="fw-semibold fs-7 text-gray-600 mb-1">Citation Style:</div>
                                                <!--end::Label-->
                                                <!--end::Text-->
                                                <div class="fw-bold fs-6 text-gray-800">xyz</div>
                                                <!--end::Text-->
                                            </div>
                                            <!--end::Col-->
                                            <div class="col-sm-4">
                                                <!--end::Label-->
                                                <div class="fw-semibold fs-7 text-gray-600 mb-1">Status:</div>
                                                <!--end::Label-->
                                                <!--end::Text-->
                                                <div class="fw-bold fs-6 text-gray-800">
                                                    <div class="badge badge-light-success fw-bold" id="enable">Enabled</div>
                                                </div>
                                                <!--end::Text-->
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Content-->
                                        <!--begin::Row-->
                                        <div class="row g-5 mb-12">
                                            <!--end::Col-->
                                            <div class="col-md-3">
                                                <!--end::Label-->
                                                <div class="fw-semibold fs-7 text-gray-600 mb-1 text-center">Paper Summary:</div>
                                                <!--end::Label-->
                                                <!--end::Text-->
                                                <div class="d-flex justify-content-center"><img src="assets/media/ws/html.png" alt="" class="w-50"></div>
                                                <!--end::Text-->
                                            </div>
                                            <!--end::Col-->
                                            <!--end::Col-->
                                            <div class="col-md-3">
                                                <!--end::Label-->
                                                <div class="fw-semibold fs-7 text-gray-600 mb-1 text-center">Paper Outline In Bullets:</div>
                                                <!--end::Label-->
                                                <!--end::Text-->
                                                <div class="fw-bold fs-6 text-gray-800">
                                                    <div class="d-flex justify-content-center"><img src="assets/media/ws/html.png" alt="" class="w-50"></div>
                                                </div>
                                                <!--end::Text-->
                                            </div>
                                            <!--end::Col-->
                                            <div class="col-md-3">
                                                <!--end::Label-->
                                                <div class="fw-semibold fs-7 text-gray-600 mb-1 text-center">Paper Abstract:</div>
                                                <!--end::Label-->
                                                <!--end::Text-->
                                                <div class="d-flex justify-content-center"><img src="assets/media/ws/html.png" alt="" class="w-50"></div>
                                                <!--end::Text-->
                                            </div>
                                            <!--end::Col-->
                                            <!--end::Col-->
                                            <div class="col-md-3">
                                                <!--end::Label-->
                                                <div class="fw-semibold fs-7 text-gray-600 mb-1 text-center">Turnitin Report:</div>
                                                <!--end::Label-->
                                                <!--end::Text-->
                                                <div class="d-flex justify-content-center"><img src="assets/media/ws/html.png" alt="" class="w-50"></div>
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
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!--begin::Javascript-->
<script>
    function confirmDelete() {
        // Display SweetAlert confirmation dialog
        Swal.fire({
            title: 'Are you sure?',
            text: 'You won\'t be able to revert this!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                // If the user clicks "Yes, delete it!", you can perform the delete action here
                // For now, let's just show a success message
                Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                );
            }
        });
    }
</script>
<script>
    var isStatusEnabled = false;

    function toggleStatus() {
        isStatusEnabled = !isStatusEnabled;
        updateButtonAppearance();
        // You can also perform other actions based on the status change here
    }

    function updateButtonAppearance() {
        var button = document.getElementById("toggleButton");
        if (isStatusEnabled) {
            button.textContent = "Enabled";
            button.classList.remove("disabledd");
            button.classList.add("enabledd");
        } else {
            button.textContent = "Disabled";
            button.classList.remove("enabledd");
            button.classList.add("disabledd");
        }
    }
</script>
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
        $('#kt_table_managePaper tbody tr').each(function() {
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
        var table = $('#kt_table_managePaper').DataTable();

        // Filter form submission
        $('[data-kt-user-table-filter="filter"]').on('click', function(e) {
            e.preventDefault();

            // Get filter values
            var paperTitle = $('input[name="paper-title"]').val();
            var subjectTopic = $('input[name="subject-topic"]').val();
            var paperType = $('input[name="paper-type"]').val();
            var wordCount = $('input[name="word-count"]').val();
            var citaitonStyle = $('input[name="citation-style"]').val();

            // Apply filters
            table.columns(1).search(paperTitle).draw();
            table.columns(2).search(subjectTopic).draw();
            table.columns(3).search(paperType).draw();
            table.columns(4).search(wordCount).draw();
            table.columns(5).search(citaitonStyle).draw();
        });

        // Reset filter form
        $('[data-kt-user-table-filter="reset"]').on('click', function(e) {
            e.preventDefault();

            // Reset input fields
            $('input[name="paper-title"]').val('');
            $('input[name="subject-topic"]').val();
            $('input[name="paper-type"]').val();
            $('input[name="word-count"]').val();
            $('input[name="citation-style"]').val();

            // Clear filters
            table.columns().search('').draw();
        });
    });
</script>
<script>
    function confirmEnableDelete() {
        Swal.fire({
            title: 'First You Have To Disable Row!',
            icon: 'warning',
            customClass: {
                confirmButton: 'btn btn-danger', // Example: Change confirm button color
                title: 'text-danger' // Custom class for the title text color
            }
        });
    }
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
