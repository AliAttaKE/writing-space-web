<!--begin::Content wrapper-->
<div class="d-flex flex-column flex-column-fluid">
    <!--begin::Toolbar-->
    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
        <!--begin::Toolbar container-->
        <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                <!--begin::Title-->
                <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">File Management</h1>
                <!--end::Title-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">
                        <a href="file-management.php" class="text-muted text-hover-primary">File Management</a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-500 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">Files</li>
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
            <!--begin::Card-->
            <div class="card card-flush pb-0 bgi-position-y-center bgi-no-repeat mb-10">
                <!--begin::Card header-->
                <div class="card-header pt-10">
                    <div class="d-flex align-items-center">
                        <!--begin::Icon-->
                        <div class="symbol symbol-circle me-5">
                            <div class="symbol-label bg-transparent text-primary border border-secondary border-dashed">
                                <i class="ki-duotone ki-abstract-47 fs-2x text-primary">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </div>
                        </div>
                        <!--end::Icon-->
                        <!--begin::Title-->
                        <div class="d-flex flex-column">
                            <h2 class="mb-1">File Management</h2>
                            <div class="text-muted fw-bold">
                                <a href=".dashboard.php">Writing Space</a>
                                <span class="mx-3">|</span>
                                <a href="file-management">File Management</a>
                                <span class="mx-3">|</span>2.6 GB
                                <span class="mx-3">|</span>758 items
                            </div>
                        </div>
                        <!--end::Title-->
                    </div>
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pb-0">
                    <!--begin::Navs-->
                    <div class="d-flex overflow-auto h-55px">
                        <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-semibold flex-nowrap">
                            <!--begin::Nav item-->
                            <li class="nav-item">
                                <a class="nav-link text-active-primary me-6 active" href="file-management.php">Files</a>
                            </li>
                            <!--end::Nav item-->
                            <!--begin::Nav item-->
                            <li class="nav-item">
                                <a class="nav-link text-active-primary me-6" href="files-setting.php">Settings</a>
                            </li>
                            <!--end::Nav item-->
                        </ul>
                    </div>
                    <!--begin::Navs-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
            <!--begin::Card-->
            <div class="card card-flush mb-10">
                <!--begin::Card header-->
                <div class="card-header pt-8">
                    <div class="card-title">
                        <!--begin::Search-->
                        <div class="d-flex align-items-center position-relative my-1">
                            <i class="ki-duotone ki-magnifier fs-1 position-absolute ms-6">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                            <input type="text" data-kt-filemanager-table-filter="search" class="form-control form-control-solid w-250px ps-15" placeholder="Search Files & Folders" />
                        </div>
                        <!--end::Search-->
                    </div>
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar d-flex justify-content-end">
                        <!--begin::Toolbar-->
                        <div class="d-flex justify-content-end" data-kt-filemanager-table-toolbar="base">

                            <!--begin::Export-->

                            <!--end::Export-->
                            <!--begin::Add customer-->
                            <button type="button" class="btn btn-flex btn-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_upload">
                                <i class="ki-duotone ki-folder-up fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>Upload Main Files for Customer</button>
                            <!--end::Add customer-->
                            <!--begin::Add customer-->
                            <button type="button" class="btn btn-flex btn-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_upload">
                                <i class="ki-duotone ki-folder-up fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>Upload Files for Writer</button>
                            <!--end::Add customer-->
                            <!--begin::Add customer-->
                            <button type="button" class="btn btn-flex btn-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_upload">
                                <i class="ki-duotone ki-folder-up fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>Upload Files for Customer</button>
                            <!--end::Add customer-->
                        </div>
                        <!--end::Toolbar-->
                        <!--begin::Group actions-->
                        <div class="d-flex justify-content-end align-items-center d-none" data-kt-filemanager-table-toolbar="selected">
                            <div class="fw-bold me-5">
                                <span class="me-2" data-kt-filemanager-table-select="selected_count"></span>Selected
                            </div>
                            <button type="button" class="btn btn-danger" data-kt-filemanager-table-select="delete_selected">Delete Selected</button>
                        </div>
                        <!--end::Group actions-->
                    </div>
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body">
                    <!--begin::Table header-->
                    <div class="d-flex flex-stack">
                        <!--begin::Folder path-->
                        <div class="badge badge-lg badge-light-primary">
                            <div class="d-flex align-items-center flex-wrap">
                                <i class="ki-duotone ki-abstract-32 fs-2x text-primary me-3">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                                <a href="admin-dashboard.php">Writing Space</a>
                                <i class="ki-duotone ki-right fs-2x text-primary mx-1"></i>
                                <a href="file-management.php">Admin</a>
                                <i class="ki-duotone ki-right fs-2x text-primary mx-1"></i>
                                <a href="file-management.php">Layout</a>
                                <i class="ki-duotone ki-right fs-2x text-primary mx-1"></i>
                                <a href="file-management.php">Order Id's</a>
                                <i class="ki-duotone ki-right fs-2x text-primary mx-1"></i>
                                2048211
                            </div>
                        </div>
                        <!--end::Folder path-->
                        <!--begin::Folder Stats-->
                        <div class="badge badge-lg badge-primary">
                            <span id="kt_file_manager_items_counter">4 items</span>
                        </div>
                        <!--end::Folder Stats-->
                    </div>
                    <!--end::Table header-->
                    <!--begin::Table-->
                    <table id="kt_file_manager_list" data-kt-filemanager-table="files" class="table align-middle table-row-dashed fs-6 gy-5">
                        <thead>
                            <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                                <th class="w-10px pe-2 sorting_disabled" rowspan="1" colspan="1" style="width: 29.8906px;">
                                    <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                        <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_file_manager_list .form-check-input" value="1">
                                    </div>
                                </th>
                                <th class="min-w-250px sorting_disabled" rowspan="1" colspan="1" style="width: 416.797px;">File Title</th>
                                <th class="min-w-150px">
                                    Uploaded For
                                </th>
                                <th class="min-w-150px">
                                    File Type
                                </th>
                                <th class="min-w-10px sorting_disabled" rowspan="1" colspan="1" style="width: 66.4062px;">Size</th>
                                <th class="min-w-125px sorting_disabled" rowspan="1" colspan="1" style="width: 250.656px;">Last Modified</th>
                                <th class="w-125px sorting_disabled" rowspan="1" colspan="1" style="width: 125px;">Action</th>
                            </tr>
                        </thead>
                        <tbody class="fw-semibold text-gray-600">





                            <tr class="odd">
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1">
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span class="icon-wrapper"><i class="ki-duotone ki-file fs-2x text-primary me-4"><span class="path1"></span><span class="path2"></span></i></span>
                                        <a href="/metronic8/demo1/../demo1/apps/file-manager/files/.html" class="text-gray-800 text-hover-primary">billing.txt</a>
                                    </div>
                                </td>
                                <td>Writer</td>
                                <td>Pdf</td>
                                <td>2 Mb</td>
                                <td data-order="2023-08-19T14:40:00+05:00">19 Aug 2023, 2:40 pm</td>
                                <td class="text-end" data-kt-filemanager-table="action_dropdown">
                                    <div class="d-flex justify-content-end">
                                        <!--begin::Share link-->
                                        <div class="ms-2" data-kt-filemanger-table="copy_link">
                                            <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                <i class="ki-duotone ki-fasten fs-5 m-0">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </button>
                                            <!--begin::Menu-->
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px" data-kt-menu="true">
                                                <!--begin::Card-->
                                                <div class="card card-flush">
                                                    <div class="card-body p-5">
                                                        <!--begin::Loader-->
                                                        <div class="d-flex" data-kt-filemanger-table="copy_link_generator">
                                                            <!--begin::Spinner-->
                                                            <div class="me-5" data-kt-indicator="on">
                                                                <span class="indicator-progress">
                                                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                                                </span>
                                                            </div>
                                                            <!--end::Spinner-->
                                                            <!--begin::Label-->
                                                            <div class="fs-6 text-gray-900">Generating Share Link...</div>
                                                            <!--end::Label-->
                                                        </div>
                                                        <!--end::Loader-->
                                                        <!--begin::Link-->
                                                        <div class="d-flex flex-column text-start d-none" data-kt-filemanger-table="copy_link_result">
                                                            <div class="d-flex mb-3">
                                                                <i class="ki-duotone ki-check fs-2 text-success me-3"></i>
                                                                <div class="fs-6 text-gray-900">Share Link Generated</div>
                                                            </div>
                                                            <input type="text" class="form-control form-control-sm" value="https://path/to/file/or/folder/">
                                                            <div class="text-muted fw-normal mt-2 fs-8 px-3">Read only.
                                                                <a href="apps/file-manager/settings/.html" class="ms-2">Change permissions</a>
                                                            </div>
                                                        </div>
                                                        <!--end::Link-->
                                                    </div>
                                                </div>
                                                <!--end::Card-->
                                            </div>
                                            <!--end::Menu-->
                                        </div>
                                        <!--end::Share link-->
                                        <!--begin::More-->
                                        <div class="ms-2">
                                            <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                <i class="ki-duotone ki-dots-square fs-5 m-0">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                    <span class="path4"></span>
                                                </i>
                                            </button>
                                            <!--begin::Menu-->
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Download File</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3" data-kt-filemanager-table="rename">Rename</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3" data-kt-filemanager-table-filter="move_row" data-bs-toggle="modal" data-bs-target="#kt_modal_move_to_folder">Move to folder</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link text-danger px-3" data-kt-filemanager-table-filter="delete_row">Delete</a>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu-->
                                        </div>
                                        <!--end::More-->
                                    </div>
                                </td>
                            </tr>
                            <tr class="even">
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1">
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span class="icon-wrapper"><i class="ki-duotone ki-file fs-2x text-primary me-4"><span class="path1"></span><span class="path2"></span></i></span>
                                        <a href="/metronic8/demo1/../demo1/apps/file-manager/files/.html" class="text-gray-800 text-hover-primary">account.docs</a>
                                    </div>
                                </td>
                                <td>Writer</td>
                                <td>Pdf</td>
                                <td>2 Mb</td>
                                <td data-order="2023-08-19T14:40:00+05:00">19 Aug 2023, 2:40 pm</td>
                                <td class="text-end" data-kt-filemanager-table="action_dropdown">
                                    <div class="d-flex justify-content-end">
                                        <!--begin::Share link-->
                                        <div class="ms-2" data-kt-filemanger-table="copy_link">
                                            <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                <i class="ki-duotone ki-fasten fs-5 m-0">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </button>
                                            <!--begin::Menu-->
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px" data-kt-menu="true">
                                                <!--begin::Card-->
                                                <div class="card card-flush">
                                                    <div class="card-body p-5">
                                                        <!--begin::Loader-->
                                                        <div class="d-flex" data-kt-filemanger-table="copy_link_generator">
                                                            <!--begin::Spinner-->
                                                            <div class="me-5" data-kt-indicator="on">
                                                                <span class="indicator-progress">
                                                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                                                </span>
                                                            </div>
                                                            <!--end::Spinner-->
                                                            <!--begin::Label-->
                                                            <div class="fs-6 text-gray-900">Generating Share Link...</div>
                                                            <!--end::Label-->
                                                        </div>
                                                        <!--end::Loader-->
                                                        <!--begin::Link-->
                                                        <div class="d-flex flex-column text-start d-none" data-kt-filemanger-table="copy_link_result">
                                                            <div class="d-flex mb-3">
                                                                <i class="ki-duotone ki-check fs-2 text-success me-3"></i>
                                                                <div class="fs-6 text-gray-900">Share Link Generated</div>
                                                            </div>
                                                            <input type="text" class="form-control form-control-sm" value="https://path/to/file/or/folder/">
                                                            <div class="text-muted fw-normal mt-2 fs-8 px-3">Read only.
                                                                <a href="apps/file-manager/settings/.html" class="ms-2">Change permissions</a>
                                                            </div>
                                                        </div>
                                                        <!--end::Link-->
                                                    </div>
                                                </div>
                                                <!--end::Card-->
                                            </div>
                                            <!--end::Menu-->
                                        </div>
                                        <!--end::Share link-->
                                        <!--begin::More-->
                                        <div class="ms-2">
                                            <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                <i class="ki-duotone ki-dots-square fs-5 m-0">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                    <span class="path4"></span>
                                                </i>
                                            </button>
                                            <!--begin::Menu-->
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Download File</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3" data-kt-filemanager-table="rename">Rename</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3" data-kt-filemanager-table-filter="move_row" data-bs-toggle="modal" data-bs-target="#kt_modal_move_to_folder">Move to folder</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link text-danger px-3" data-kt-filemanager-table-filter="delete_row">Delete</a>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu-->
                                        </div>
                                        <!--end::More-->
                                    </div>
                                </td>
                            </tr>
                            <tr class="odd">
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1">
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span class="icon-wrapper"><i class="ki-duotone ki-file fs-2x text-primary me-4"><span class="path1"></span><span class="path2"></span></i></span>
                                        <a href="/metronic8/demo1/../demo1/apps/file-manager/files/.html" class="text-gray-800 text-hover-primary">profile.pdf</a>
                                    </div>
                                </td>
                                <td>Writer</td>
                                <td>Pdf</td>
                                <td>2 Mb</td>
                                <td data-order="2023-08-19T14:40:00+05:00">19 Aug 2023, 2:40 pm</td>
                                <td class="text-end" data-kt-filemanager-table="action_dropdown">
                                    <div class="d-flex justify-content-end">
                                        <!--begin::Share link-->
                                        <div class="ms-2" data-kt-filemanger-table="copy_link">
                                            <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                <i class="ki-duotone ki-fasten fs-5 m-0">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </button>
                                            <!--begin::Menu-->
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px" data-kt-menu="true">
                                                <!--begin::Card-->
                                                <div class="card card-flush">
                                                    <div class="card-body p-5">
                                                        <!--begin::Loader-->
                                                        <div class="d-flex" data-kt-filemanger-table="copy_link_generator">
                                                            <!--begin::Spinner-->
                                                            <div class="me-5" data-kt-indicator="on">
                                                                <span class="indicator-progress">
                                                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                                                </span>
                                                            </div>
                                                            <!--end::Spinner-->
                                                            <!--begin::Label-->
                                                            <div class="fs-6 text-gray-900">Generating Share Link...</div>
                                                            <!--end::Label-->
                                                        </div>
                                                        <!--end::Loader-->
                                                        <!--begin::Link-->
                                                        <div class="d-flex flex-column text-start d-none" data-kt-filemanger-table="copy_link_result">
                                                            <div class="d-flex mb-3">
                                                                <i class="ki-duotone ki-check fs-2 text-success me-3"></i>
                                                                <div class="fs-6 text-gray-900">Share Link Generated</div>
                                                            </div>
                                                            <input type="text" class="form-control form-control-sm" value="https://path/to/file/or/folder/">
                                                            <div class="text-muted fw-normal mt-2 fs-8 px-3">Read only.
                                                                <a href="apps/file-manager/settings/.html" class="ms-2">Change permissions</a>
                                                            </div>
                                                        </div>
                                                        <!--end::Link-->
                                                    </div>
                                                </div>
                                                <!--end::Card-->
                                            </div>
                                            <!--end::Menu-->
                                        </div>
                                        <!--end::Share link-->
                                        <!--begin::More-->
                                        <div class="ms-2">
                                            <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                <i class="ki-duotone ki-dots-square fs-5 m-0">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                    <span class="path4"></span>
                                                </i>
                                            </button>
                                            <!--begin::Menu-->
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Download File</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3" data-kt-filemanager-table="rename">Rename</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3" data-kt-filemanager-table-filter="move_row" data-bs-toggle="modal" data-bs-target="#kt_modal_move_to_folder">Move to folder</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link text-danger px-3" data-kt-filemanager-table-filter="delete_row">Delete</a>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu-->
                                        </div>
                                        <!--end::More-->
                                    </div>
                                </td>
                            </tr>
                            <tr class="even">
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1">
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span class="icon-wrapper"><i class="ki-duotone ki-file fs-2x text-primary me-4"><span class="path1"></span><span class="path2"></span></i></span>
                                        <a href="/metronic8/demo1/../demo1/apps/file-manager/files/.html" class="text-gray-800 text-hover-primary">finance.docs</a>
                                    </div>
                                </td>
                                <td>Writer</td>
                                <td>Pdf</td>
                                <td>2 Mb</td>
                                <td data-order="2023-08-19T14:40:00+05:00">19 Aug 2023, 2:40 pm</td>
                                <td class="text-end" data-kt-filemanager-table="action_dropdown">
                                    <div class="d-flex justify-content-end">
                                        <!--begin::Share link-->
                                        <div class="ms-2" data-kt-filemanger-table="copy_link">
                                            <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                <i class="ki-duotone ki-fasten fs-5 m-0">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </button>
                                            <!--begin::Menu-->
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px" data-kt-menu="true">
                                                <!--begin::Card-->
                                                <div class="card card-flush">
                                                    <div class="card-body p-5">
                                                        <!--begin::Loader-->
                                                        <div class="d-flex" data-kt-filemanger-table="copy_link_generator">
                                                            <!--begin::Spinner-->
                                                            <div class="me-5" data-kt-indicator="on">
                                                                <span class="indicator-progress">
                                                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                                                </span>
                                                            </div>
                                                            <!--end::Spinner-->
                                                            <!--begin::Label-->
                                                            <div class="fs-6 text-gray-900">Generating Share Link...</div>
                                                            <!--end::Label-->
                                                        </div>
                                                        <!--end::Loader-->
                                                        <!--begin::Link-->
                                                        <div class="d-flex flex-column text-start d-none" data-kt-filemanger-table="copy_link_result">
                                                            <div class="d-flex mb-3">
                                                                <i class="ki-duotone ki-check fs-2 text-success me-3"></i>
                                                                <div class="fs-6 text-gray-900">Share Link Generated</div>
                                                            </div>
                                                            <input type="text" class="form-control form-control-sm" value="https://path/to/file/or/folder/">
                                                            <div class="text-muted fw-normal mt-2 fs-8 px-3">Read only.
                                                                <a href="apps/file-manager/settings/.html" class="ms-2">Change permissions</a>
                                                            </div>
                                                        </div>
                                                        <!--end::Link-->
                                                    </div>
                                                </div>
                                                <!--end::Card-->
                                            </div>
                                            <!--end::Menu-->
                                        </div>
                                        <!--end::Share link-->
                                        <!--begin::More-->
                                        <div class="ms-2">
                                            <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                <i class="ki-duotone ki-dots-square fs-5 m-0">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                    <span class="path4"></span>
                                                </i>
                                            </button>
                                            <!--begin::Menu-->
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Download File</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3" data-kt-filemanager-table="rename">Rename</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3" data-kt-filemanager-table-filter="move_row" data-bs-toggle="modal" data-bs-target="#kt_modal_move_to_folder">Move to folder</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link text-danger px-3" data-kt-filemanager-table-filter="delete_row">Delete</a>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu-->
                                        </div>
                                        <!--end::More-->
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
            <!--begin::Card-->
            <div class="card card-flush mb-10">
                <!--begin::Card header-->
                <div class="card-header pt-8">
                    <div class="card-title">
                        <!--begin::Search-->
                        <div class="d-flex align-items-center position-relative my-1">
                            <i class="ki-duotone ki-magnifier fs-1 position-absolute ms-6"><span class="path1"></span><span class="path2"></span></i> <input type="text" data-kt-filemanager-table-filter="search" class="form-control form-control-solid w-250px ps-15" placeholder="Search Files &amp; Folders">
                        </div>
                        <!--end::Search-->
                    </div>

                    <!--begin::Card toolbar-->
                    <div class="card-toolbar">
                        <div class="d-flex justify-content-end" data-kt-filemanager-table-toolbar="base">

                            <!--begin::Export-->

                            <!--end::Export-->
                            <!--begin::Add customer-->
                            <button type="button" class="btn btn-flex btn-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_upload">
                                <i class="ki-duotone ki-folder-up fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>Upload Main Files for Customer</button>
                            <!--end::Add customer-->
                            <!--begin::Add customer-->
                            <button type="button" class="btn btn-flex btn-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_upload">
                                <i class="ki-duotone ki-folder-up fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>Upload Files for Writer</button>
                            <!--end::Add customer-->
                            <!--begin::Add customer-->
                            <button type="button" class="btn btn-flex btn-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_upload">
                                <i class="ki-duotone ki-folder-up fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>Upload Files for Customer</button>
                            <!--end::Add customer-->
                        </div>

                        <!--begin::Group actions-->
                        <div class="d-flex justify-content-end align-items-center d-none" data-kt-filemanager-table-toolbar="selected">
                            <div class="fw-bold me-5">
                                <span class="me-2" data-kt-filemanager-table-select="selected_count"></span> Selected
                            </div>

                            <button type="button" class="btn btn-danger" data-kt-filemanager-table-select="delete_selected">
                                Delete Selected
                            </button>
                        </div>
                        <!--end::Group actions-->
                    </div>
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->

                <!--begin::Card body-->
                <div class="card-body">
                    <!--begin::Table header-->
                    <div class="d-flex flex-stack">
                        <!--begin::Folder path-->
                        <div class="badge badge-lg badge-light-primary">
                            <div class="d-flex align-items-center flex-wrap">
                                <i class="ki-duotone ki-abstract-32 fs-2x text-primary me-3">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                                <a href="admin-dashboard.php">Writing Space</a>
                                <i class="ki-duotone ki-right fs-2x text-primary mx-1"></i>
                                <a href="file-management.php">Admin</a>
                                <i class="ki-duotone ki-right fs-2x text-primary mx-1"></i>
                                <a href="file-management.php">Layout</a>
                                <i class="ki-duotone ki-right fs-2x text-primary mx-1"></i>
                                <a href="file-management.php">Order Id's</a>
                                <i class="ki-duotone ki-right fs-2x text-primary mx-1"></i>
                                2048211
                            </div>
                        </div>
                        <!--end::Folder path-->

                        <!--begin::Folder Stats-->
                        <div class="badge badge-lg badge-primary">
                            <span id="kt_file_manager_items_counter">0 items</span>
                        </div>
                        <!--end::Folder Stats-->
                    </div>
                    <!--end::Table header-->

                    <!--begin::Table-->
                    <div id="kt_file_manager_list_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                        <div class="table-responsive">
                            <table id="kt_file_manager_list" data-kt-filemanager-table="blank" class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer">
                                <thead>
                                    <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                                        <th class="w-10px pe-2 sorting_disabled" rowspan="1" colspan="1" style="width: 29.8906px;">
                                            <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                                <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_file_manager_list .form-check-input" value="1">
                                            </div>
                                        </th>
                                        <th class="min-w-250px sorting_disabled" rowspan="1" colspan="1" style="width: 444.219px;">Name</th>
                                        <th class="min-w-10px sorting_disabled" rowspan="1" colspan="1" style="width: 60.4844px;">Size</th>
                                        <th class="min-w-125px sorting_disabled" rowspan="1" colspan="1" style="width: 229.156px;">Last Modified</th>
                                        <th class="w-125px sorting_disabled" rowspan="1" colspan="1" style="width: 125px;"></th>
                                    </tr>
                                </thead>
                                <tbody class="fw-semibold text-gray-600">
                                    <tr class="odd">
                                        <td valign="top" colspan="5" class="dataTables_empty">
                                            <div class="d-flex flex-column flex-center">
                                                <img src="assets/media/illustrations/sketchy-1/5.png" class="mw-400px">
                                                <div class="fs-1 fw-bolder text-dark mb-4">No items found.</div>
                                                <div class="fs-6">Start creating new folders or uploading a new file!</div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start"></div>
                            <div class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end">
                                <div class="dataTables_paginate paging_simple_numbers" id="kt_file_manager_list_paginate" style="visibility: hidden;">
                                    <ul class="pagination">
                                        <li class="paginate_button page-item previous disabled" id="kt_file_manager_list_previous"><a href="#" aria-controls="kt_file_manager_list" data-dt-idx="0" tabindex="0" class="page-link"><i class="previous"></i></a></li>
                                        <li class="paginate_button page-item next disabled" id="kt_file_manager_list_next"><a href="#" aria-controls="kt_file_manager_list" data-dt-idx="1" tabindex="0" class="page-link"><i class="next"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Table-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
            <!--begin::Modals-->
            <!--begin::Modal - Upload File-->
            <div class="modal fade" id="kt_modal_upload" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-650px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Form-->
                        <form class="form" action="none" id="kt_modal_upload_form">
                            <!--begin::Modal header-->
                            <div class="modal-header">
                                <!--begin::Modal title-->
                                <h2 class="fw-bold">Upload files</h2>
                                <!--end::Modal title-->
                                <!--begin::Close-->
                                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                                    <i class="ki-duotone ki-cross fs-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </div>
                                <!--end::Close-->
                            </div>
                            <!--end::Modal header-->
                            <!--begin::Modal body-->
                            <div class="modal-body pt-10 pb-15 px-lg-17">
                                <!--begin::Input group-->
                                <div class="form-group">
                                    <!--begin::Dropzone-->
                                    <div class="dropzone dropzone-queue mb-2" id="kt_modal_upload_dropzone">
                                        <!--begin::Controls-->
                                        <div class="dropzone-panel mb-4">
                                            <a class="dropzone-select btn btn-sm btn-primary me-2">Attach files</a>
                                            <a class="dropzone-upload btn btn-sm btn-light-primary me-2">Upload All</a>
                                            <a class="dropzone-remove-all btn btn-sm btn-light-primary">Remove All</a>
                                        </div>
                                        <!--end::Controls-->
                                        <!--begin::Items-->
                                        <div class="dropzone-items wm-200px">
                                            <div class="dropzone-item p-5" style="display:none">
                                                <!--begin::File-->
                                                <div class="dropzone-file">
                                                    <div class="dropzone-filename text-gray-900" title="some_image_file_name.jpg">
                                                        <span data-dz-name="">some_image_file_name.jpg</span>
                                                        <strong>(
                                                            <span data-dz-size="">340kb</span>)</strong>
                                                    </div>
                                                    <div class="dropzone-error mt-0" data-dz-errormessage=""></div>
                                                </div>
                                                <!--end::File-->
                                                <!--begin::Progress-->
                                                <div class="dropzone-progress">
                                                    <div class="progress bg-gray-300">
                                                        <div class="progress-bar bg-primary" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" data-dz-uploadprogress=""></div>
                                                    </div>
                                                </div>
                                                <!--end::Progress-->
                                                <!--begin::Toolbar-->
                                                <div class="dropzone-toolbar">
                                                    <span class="dropzone-start">
                                                        <i class="ki-duotone ki-to-right fs-1"></i>
                                                    </span>
                                                    <span class="dropzone-cancel" data-dz-remove="" style="display: none;">
                                                        <i class="ki-duotone ki-cross fs-2">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                    <span class="dropzone-delete" data-dz-remove="">
                                                        <i class="ki-duotone ki-cross fs-2">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                                <!--end::Toolbar-->
                                            </div>
                                        </div>
                                        <!--end::Items-->
                                    </div>
                                    <!--end::Dropzone-->
                                    <!--begin::Hint-->
                                    <span class="form-text fs-6 text-muted">Max file size is 1MB per file.</span>
                                    <!--end::Hint-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Modal body-->
                        </form>
                        <!--end::Form-->
                    </div>
                </div>
            </div>
            <!--end::Modal - Upload File-->
            <!--begin::Modal - New Product-->
            <div class="modal fade" id="kt_modal_move_to_folder" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-650px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Form-->
                        <form class="form" action="#" id="kt_modal_move_to_folder_form">
                            <!--begin::Modal header-->
                            <div class="modal-header">
                                <!--begin::Modal title-->
                                <h2 class="fw-bold">Move to folder</h2>
                                <!--end::Modal title-->
                                <!--begin::Close-->
                                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                                    <i class="ki-duotone ki-cross fs-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </div>
                                <!--end::Close-->
                            </div>
                            <!--end::Modal header-->
                            <!--begin::Modal body-->
                            <div class="modal-body pt-10 pb-15 px-lg-17">
                                <!--begin::Input group-->
                                <div class="form-group fv-row">
                                    <!--begin::Item-->
                                    <div class="d-flex">
                                        <!--begin::Checkbox-->
                                        <div class="form-check form-check-custom form-check-solid">
                                            <!--begin::Input-->
                                            <input class="form-check-input me-3" name="move_to_folder" type="radio" value="0" id="kt_modal_move_to_folder_0" />
                                            <!--end::Input-->
                                            <!--begin::Label-->
                                            <label class="form-check-label" for="kt_modal_move_to_folder_0">
                                                <div class="fw-bold">
                                                    <i class="ki-duotone ki-folder fs-2 text-primary me-2">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>account
                                                </div>
                                            </label>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Checkbox-->
                                    </div>
                                    <!--end::Item-->
                                    <div class='separator separator-dashed my-5'></div>
                                    <!--begin::Item-->
                                    <div class="d-flex">
                                        <!--begin::Checkbox-->
                                        <div class="form-check form-check-custom form-check-solid">
                                            <!--begin::Input-->
                                            <input class="form-check-input me-3" name="move_to_folder" type="radio" value="1" id="kt_modal_move_to_folder_1" />
                                            <!--end::Input-->
                                            <!--begin::Label-->
                                            <label class="form-check-label" for="kt_modal_move_to_folder_1">
                                                <div class="fw-bold">
                                                    <i class="ki-duotone ki-folder fs-2 text-primary me-2">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>apps
                                                </div>
                                            </label>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Checkbox-->
                                    </div>
                                    <!--end::Item-->
                                    <div class='separator separator-dashed my-5'></div>
                                    <!--begin::Item-->
                                    <div class="d-flex">
                                        <!--begin::Checkbox-->
                                        <div class="form-check form-check-custom form-check-solid">
                                            <!--begin::Input-->
                                            <input class="form-check-input me-3" name="move_to_folder" type="radio" value="2" id="kt_modal_move_to_folder_2" />
                                            <!--end::Input-->
                                            <!--begin::Label-->
                                            <label class="form-check-label" for="kt_modal_move_to_folder_2">
                                                <div class="fw-bold">
                                                    <i class="ki-duotone ki-folder fs-2 text-primary me-2">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>widgets
                                                </div>
                                            </label>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Checkbox-->
                                    </div>
                                    <!--end::Item-->
                                    <div class='separator separator-dashed my-5'></div>
                                    <!--begin::Item-->
                                    <div class="d-flex">
                                        <!--begin::Checkbox-->
                                        <div class="form-check form-check-custom form-check-solid">
                                            <!--begin::Input-->
                                            <input class="form-check-input me-3" name="move_to_folder" type="radio" value="3" id="kt_modal_move_to_folder_3" />
                                            <!--end::Input-->
                                            <!--begin::Label-->
                                            <label class="form-check-label" for="kt_modal_move_to_folder_3">
                                                <div class="fw-bold">
                                                    <i class="ki-duotone ki-folder fs-2 text-primary me-2">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>assets
                                                </div>
                                            </label>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Checkbox-->
                                    </div>
                                    <!--end::Item-->
                                    <div class='separator separator-dashed my-5'></div>
                                    <!--begin::Item-->
                                    <div class="d-flex">
                                        <!--begin::Checkbox-->
                                        <div class="form-check form-check-custom form-check-solid">
                                            <!--begin::Input-->
                                            <input class="form-check-input me-3" name="move_to_folder" type="radio" value="4" id="kt_modal_move_to_folder_4" />
                                            <!--end::Input-->
                                            <!--begin::Label-->
                                            <label class="form-check-label" for="kt_modal_move_to_folder_4">
                                                <div class="fw-bold">
                                                    <i class="ki-duotone ki-folder fs-2 text-primary me-2">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>documentation
                                                </div>
                                            </label>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Checkbox-->
                                    </div>
                                    <!--end::Item-->
                                    <div class='separator separator-dashed my-5'></div>
                                    <!--begin::Item-->
                                    <div class="d-flex">
                                        <!--begin::Checkbox-->
                                        <div class="form-check form-check-custom form-check-solid">
                                            <!--begin::Input-->
                                            <input class="form-check-input me-3" name="move_to_folder" type="radio" value="5" id="kt_modal_move_to_folder_5" />
                                            <!--end::Input-->
                                            <!--begin::Label-->
                                            <label class="form-check-label" for="kt_modal_move_to_folder_5">
                                                <div class="fw-bold">
                                                    <i class="ki-duotone ki-folder fs-2 text-primary me-2">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>layouts
                                                </div>
                                            </label>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Checkbox-->
                                    </div>
                                    <!--end::Item-->
                                    <div class='separator separator-dashed my-5'></div>
                                    <!--begin::Item-->
                                    <div class="d-flex">
                                        <!--begin::Checkbox-->
                                        <div class="form-check form-check-custom form-check-solid">
                                            <!--begin::Input-->
                                            <input class="form-check-input me-3" name="move_to_folder" type="radio" value="6" id="kt_modal_move_to_folder_6" />
                                            <!--end::Input-->
                                            <!--begin::Label-->
                                            <label class="form-check-label" for="kt_modal_move_to_folder_6">
                                                <div class="fw-bold">
                                                    <i class="ki-duotone ki-folder fs-2 text-primary me-2">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>modals
                                                </div>
                                            </label>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Checkbox-->
                                    </div>
                                    <!--end::Item-->
                                    <div class='separator separator-dashed my-5'></div>
                                    <!--begin::Item-->
                                    <div class="d-flex">
                                        <!--begin::Checkbox-->
                                        <div class="form-check form-check-custom form-check-solid">
                                            <!--begin::Input-->
                                            <input class="form-check-input me-3" name="move_to_folder" type="radio" value="7" id="kt_modal_move_to_folder_7" />
                                            <!--end::Input-->
                                            <!--begin::Label-->
                                            <label class="form-check-label" for="kt_modal_move_to_folder_7">
                                                <div class="fw-bold">
                                                    <i class="ki-duotone ki-folder fs-2 text-primary me-2">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>authentication
                                                </div>
                                            </label>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Checkbox-->
                                    </div>
                                    <!--end::Item-->
                                    <div class='separator separator-dashed my-5'></div>
                                    <!--begin::Item-->
                                    <div class="d-flex">
                                        <!--begin::Checkbox-->
                                        <div class="form-check form-check-custom form-check-solid">
                                            <!--begin::Input-->
                                            <input class="form-check-input me-3" name="move_to_folder" type="radio" value="8" id="kt_modal_move_to_folder_8" />
                                            <!--end::Input-->
                                            <!--begin::Label-->
                                            <label class="form-check-label" for="kt_modal_move_to_folder_8">
                                                <div class="fw-bold">
                                                    <i class="ki-duotone ki-folder fs-2 text-primary me-2">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>dashboards
                                                </div>
                                            </label>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Checkbox-->
                                    </div>
                                    <!--end::Item-->
                                    <div class='separator separator-dashed my-5'></div>
                                    <!--begin::Item-->
                                    <div class="d-flex">
                                        <!--begin::Checkbox-->
                                        <div class="form-check form-check-custom form-check-solid">
                                            <!--begin::Input-->
                                            <input class="form-check-input me-3" name="move_to_folder" type="radio" value="9" id="kt_modal_move_to_folder_9" />
                                            <!--end::Input-->
                                            <!--begin::Label-->
                                            <label class="form-check-label" for="kt_modal_move_to_folder_9">
                                                <div class="fw-bold">
                                                    <i class="ki-duotone ki-folder fs-2 text-primary me-2">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>pages
                                                </div>
                                            </label>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Checkbox-->
                                    </div>
                                    <!--end::Item-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Action buttons-->
                                <div class="d-flex flex-center mt-12">
                                    <!--begin::Button-->
                                    <button type="button" class="btn btn-primary" id="kt_modal_move_to_folder_submit">
                                        <span class="indicator-label">Save</span>
                                        <span class="indicator-progress">Please wait...
                                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    </button>
                                    <!--end::Button-->
                                </div>
                                <!--begin::Action buttons-->
                            </div>
                            <!--end::Modal body-->
                        </form>
                        <!--end::Form-->
                    </div>
                </div>
            </div>
            <!--end::Modal - Move file-->
            <!--end::Modals-->
        </div>
        <!--end::Content container-->
    </div>
    <!--end::Content-->
</div>
<!--end::Content wrapper-->
<!--begin::Scrolltop-->
<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
    <i class="ki-duotone ki-arrow-up">
        <span class="path1"></span>
        <span class="path2"></span>
    </i>
</div>
<!--end::Scrolltop-->
<!--end::Modals-->
<!--begin::Javascript-->
<script>
    var hostUrl = "assets/";
</script>