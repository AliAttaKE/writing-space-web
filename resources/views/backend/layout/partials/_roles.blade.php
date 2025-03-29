
<!--begin::App-->
<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
    <!--begin::Page-->
    <div class="app-page flex-column flex-column-fluid" id="kt_app_page">                   
        <!--begin::Wrapper-->
        <div class="flex-column flex-row-fluid" id="kt_app_wrapper">
            <!--begin::Main-->
            <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                <!--begin::Content wrapper-->
                <div class="d-flex flex-column flex-column-fluid">
                    <!--begin::Toolbar-->
                    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
                        <!--begin::Toolbar container-->
                        <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                            <!--begin::Page title-->
                            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                                <!--begin::Title-->
                                <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0 fs-color-white custom-fs-23">Roles List</h1>
                                <!--end::Title-->
                                <!--begin::Breadcrumb-->
                                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                                    <!--begin::Item-->
                                    <li class="breadcrumb-item text-muted fs-custom-13 fs-color-white">User Management</li>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <li class="breadcrumb-item">
                                        <span class="bullet bg-gray-500 w-5px h-2px"></span>
                                    </li>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <li class="breadcrumb-item fs-custom-13 fs-color-white">Roles</li>
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
                            <div class="card card-flush mt-3 mb-3">
                                <!--begin::Card header-->
                                <div class="card-header mt-6">
                                    <!--begin::Card title-->
                                    <div class="card-title">
                                        <!--begin::Search-->
                                        <!--<div class="d-flex align-items-center position-relative my-1 me-5">-->
                                        <!--    <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-5">-->
                                        <!--        <span class="path1"></span>-->
                                        <!--        <span class="path2"></span>-->
                                        <!--    </i>-->
                                        <!--    <input type="text" data-kt-permissions-table-filter="search" class="form-control form-control-solid w-250px ps-13" placeholder="Search Roles" />-->
                                        <!--</div>-->
                                        <!--end::Search-->
                                    </div>
                                    <!--end::Card title-->
                                    <!--begin::Card toolbar-->
                                    <div class="card-toolbar">
                                        <!--begin::Button-->
                                        <button type="button" class="btn badge-custom-bg" data-bs-toggle="modal" data-bs-target="#kt_modal_add_role">
                                            <i class="ki-duotone ki-plus-square fs-3">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>Add Role</button>
                                        <!--end::Button-->
                                    </div>
                                    <!--end::Card toolbar-->
                                </div>
                                <!--end::Card header-->
                              
                            </div>
                            <!--end::Card-->

                            <!--begin::Row-->
                            <div class="row row-cols-1 row-cols-md-2 row-cols-xl-2 g-5 g-xl-9">
                                
                                @if($roles->isNotEmpty())
                                   @foreach ($roles as $key => $role )
                                        <!--begin::Col-->
                                        <div class="col-md-4">
                                            <!--begin::Card-->
                                            <div class="card card-flush h-md-100">
                                                <!--begin::Card header-->
                                                <div class="card-header">
                                                    <!--begin::Card title-->
                                                    <div class="card-title">
                                                        <h2 clss='fs-color-white custom-fs-13'>
                                                            {{ $role->name }}
                                                        </h2>
                                                        
                                                    </div>
                                                    <!--end::Card title-->
                                                </div>
                                                <!--end::Card header-->
                                                <!--begin::Card body-->
                                                <div class="card-body pt-1">
                                                    <!--begin::Users-->
                                                    <div class="fw-bold text-gray-600 mb-5">Total users with this role: {{ getTotalUsersWithRole($role->name) }}</div>
                                                    <!--end::Users-->
                                                    <!--begin::Permissions-->
                                                    <div class="d-flex flex-column text-gray-600">
                                                        @php 
                                                            $rolePermissions = getRolePermissions($role->name) ;
                                                           
                                                            $count = 10;
                                                        @endphp

                                                        @foreach ($rolePermissions as $perm )
                                                           
                                                            @if($loop->iteration <= $count)
                                                                <div class="d-flex align-items-center py-2">
                                                                    <span class="bullet bg-primary me-3"></span>{{ $perm->name }}
                                                                </div>
                                                            @endif
                                                        @endforeach
                                                        
                                                        <div class='d-flex align-items-center py-2'>
                                                            <span class='bullet bg-primary me-3'></span>
                                                            <em>and 7 more...</em>
                                                        </div>
                                                    </div>
                                                    <!--end::Permissions-->
                                                </div>
                                                <!--end::Card body-->
                                                <!--begin::Card footer-->
                                                <div class="card-footer flex-wrap pt-0">
                                                    <a href="{{ route('admin.view.role', ['role_id' => $role->id]) }}" class="btn btn-light btn-active-primary my-1 me-2">View Role</a>
                                                    <button type="button" class="btn btn-light btn-active-light-primary my-1 deleteRoleBtn" data-id="{{ $role->id }}">Delete Role</button>
                                                </div>
                                                <!--end::Card footer-->
                                            </div>
                                            <!--end::Card-->
                                        </div>
                                        <!--end::Col-->

                                         <!--begin::Modal - Update role-->
                                            <div class="modal fade" id="kt_modal_update_role" tabindex="-1" aria-hidden="true">
                                                <!--begin::Modal dialog-->
                                                <div class="modal-dialog modal-dialog-centered mw-750px">
                                                    <!--begin::Modal content-->
                                                    <div class="modal-content">
                                                        <!--begin::Modal header-->
                                                        <div class="modal-header">
                                                            <!--begin::Modal title-->
                                                            <h2 class="fw-bold">Update Role</h2>
                                                            <!--end::Modal title-->
                                                            <!--begin::Close-->
                                                            <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-roles-modal-action="close">
                                                                <i class="ki-duotone ki-cross fs-1">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                </i>
                                                            </div>
                                                            <!--end::Close-->
                                                        </div>
                                                        <!--end::Modal header-->
                                                        <!--begin::Modal body-->
                                                        <div class="modal-body scroll-y mx-5 my-7">
                                                            <!--begin::Form-->
                                                            <form id="kt_modal_update_role_form" class="form" action="#">
                                                                <!--begin::Scroll-->
                                                                <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_update_role_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_update_role_header" data-kt-scroll-wrappers="#kt_modal_update_role_scroll" data-kt-scroll-offset="300px">
                                                                    <!--begin::Input group-->
                                                                    <div class="fv-row mb-10">
                                                                        <!--begin::Label-->
                                                                        <label class="fs-5 fw-bold form-label mb-2">
                                                                            <span class="required">Role name</span>
                                                                        </label>
                                                                        <!--end::Label-->
                                                                        <!--begin::Input-->
                                                                        <input class="form-control form-control-solid" placeholder="Enter a role name" name="role_name" value="Developer" />
                                                                        <!--end::Input-->
                                                                    </div>
                                                                    <!--end::Input group-->
                                                                    <!--begin::Permissions-->
                                                                    <div class="fv-row">
                                                                        <!--begin::Label-->
                                                                        <label class="fs-5 fw-bold form-label mb-2">Role Permissions</label>
                                                                        <!--end::Label-->
                                                                        <!--begin::Table wrapper-->
                                                                        <div class="table-responsive">
                                                                            <!--begin::Table-->
                                                                            <table class="table align-middle table-row-dashed fs-6 gy-5">
                                                                                <!--begin::Table body-->
                                                                                <tbody class="text-gray-600 fw-semibold">
                                                                                    <!--begin::Table row-->
                                                                                    <tr>
                                                                                        <td class="text-gray-800">Administrator Access
                                                                                            <span class="ms-1" data-bs-toggle="tooltip" title="Allows a full access to the system">
                                                                                                <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                                                                                    <span class="path1"></span>
                                                                                                    <span class="path2"></span>
                                                                                                    <span class="path3"></span>
                                                                                                </i>
                                                                                            </span>
                                                                                        </td>
                                                                                        <td>
                                                                                            <!--begin::Checkbox-->
                                                                                            <label class="form-check form-check-sm form-check-custom form-check-solid me-9">
                                                                                                <input class="form-check-input" type="checkbox" value="" id="kt_roles_select_all" />
                                                                                                <span class="form-check-label" for="kt_roles_select_all">Select all</span>
                                                                                            </label>
                                                                                            <!--end::Checkbox-->
                                                                                        </td>
                                                                                    </tr>
                                                                                    <!--end::Table row-->
                                                                                    <!--begin::Table row-->
                                                                                    <tr>
                                                                                        <!--begin::Label-->
                                                                                        <td class="text-gray-800">User Management</td>
                                                                                        <!--end::Label-->
                                                                                        <!--begin::Input group-->
                                                                                        <td>
                                                                                            <!--begin::Wrapper-->
                                                                                            <div class="d-flex">
                                                                                                <!--begin::Checkbox-->
                                                                                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                                                    <input class="form-check-input" type="checkbox" value="" name="user_management_read" />
                                                                                                    <span class="form-check-label">Read</span>
                                                                                                </label>
                                                                                                <!--end::Checkbox-->
                                                                                                <!--begin::Checkbox-->
                                                                                                <label class="form-check form-check-custom form-check-solid me-5 me-lg-20">
                                                                                                    <input class="form-check-input" type="checkbox" value="" name="user_management_write" />
                                                                                                    <span class="form-check-label">Write</span>
                                                                                                </label>
                                                                                                <!--end::Checkbox-->
                                                                                                <!--begin::Checkbox-->
                                                                                                <label class="form-check form-check-custom form-check-solid">
                                                                                                    <input class="form-check-input" type="checkbox" value="" name="user_management_create" />
                                                                                                    <span class="form-check-label">Create</span>
                                                                                                </label>
                                                                                                <!--end::Checkbox-->
                                                                                            </div>
                                                                                            <!--end::Wrapper-->
                                                                                        </td>
                                                                                        <!--end::Input group-->
                                                                                    </tr>
                                                                                    <!--end::Table row-->
                                                                                    <!--begin::Table row-->
                                                                                    <tr>
                                                                                        <!--begin::Label-->
                                                                                        <td class="text-gray-800">Content Management</td>
                                                                                        <!--end::Label-->
                                                                                        <!--begin::Input group-->
                                                                                        <td>
                                                                                            <!--begin::Wrapper-->
                                                                                            <div class="d-flex">
                                                                                                <!--begin::Checkbox-->
                                                                                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                                                    <input class="form-check-input" type="checkbox" value="" name="content_management_read" />
                                                                                                    <span class="form-check-label">Read</span>
                                                                                                </label>
                                                                                                <!--end::Checkbox-->
                                                                                                <!--begin::Checkbox-->
                                                                                                <label class="form-check form-check-custom form-check-solid me-5 me-lg-20">
                                                                                                    <input class="form-check-input" type="checkbox" value="" name="content_management_write" />
                                                                                                    <span class="form-check-label">Write</span>
                                                                                                </label>
                                                                                                <!--end::Checkbox-->
                                                                                                <!--begin::Checkbox-->
                                                                                                <label class="form-check form-check-custom form-check-solid">
                                                                                                    <input class="form-check-input" type="checkbox" value="" name="content_management_create" />
                                                                                                    <span class="form-check-label">Create</span>
                                                                                                </label>
                                                                                                <!--end::Checkbox-->
                                                                                            </div>
                                                                                            <!--end::Wrapper-->
                                                                                        </td>
                                                                                        <!--end::Input group-->
                                                                                    </tr>
                                                                                    <!--end::Table row-->
                                                                                    <!--begin::Table row-->
                                                                                    <tr>
                                                                                        <!--begin::Label-->
                                                                                        <td class="text-gray-800">Financial Management</td>
                                                                                        <!--end::Label-->
                                                                                        <!--begin::Input group-->
                                                                                        <td>
                                                                                            <!--begin::Wrapper-->
                                                                                            <div class="d-flex">
                                                                                                <!--begin::Checkbox-->
                                                                                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                                                    <input class="form-check-input" type="checkbox" value="" name="financial_management_read" />
                                                                                                    <span class="form-check-label">Read</span>
                                                                                                </label>
                                                                                                <!--end::Checkbox-->
                                                                                                <!--begin::Checkbox-->
                                                                                                <label class="form-check form-check-custom form-check-solid me-5 me-lg-20">
                                                                                                    <input class="form-check-input" type="checkbox" value="" name="financial_management_write" />
                                                                                                    <span class="form-check-label">Write</span>
                                                                                                </label>
                                                                                                <!--end::Checkbox-->
                                                                                                <!--begin::Checkbox-->
                                                                                                <label class="form-check form-check-custom form-check-solid">
                                                                                                    <input class="form-check-input" type="checkbox" value="" name="financial_management_create" />
                                                                                                    <span class="form-check-label">Create</span>
                                                                                                </label>
                                                                                                <!--end::Checkbox-->
                                                                                            </div>
                                                                                            <!--end::Wrapper-->
                                                                                        </td>
                                                                                        <!--end::Input group-->
                                                                                    </tr>
                                                                                    <!--end::Table row-->
                                                                                    <!--begin::Table row-->
                                                                                    <tr>
                                                                                        <!--begin::Label-->
                                                                                        <td class="text-gray-800">Reporting</td>
                                                                                        <!--end::Label-->
                                                                                        <!--begin::Input group-->
                                                                                        <td>
                                                                                            <!--begin::Wrapper-->
                                                                                            <div class="d-flex">
                                                                                                <!--begin::Checkbox-->
                                                                                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                                                    <input class="form-check-input" type="checkbox" value="" name="reporting_read" />
                                                                                                    <span class="form-check-label">Read</span>
                                                                                                </label>
                                                                                                <!--end::Checkbox-->
                                                                                                <!--begin::Checkbox-->
                                                                                                <label class="form-check form-check-custom form-check-solid me-5 me-lg-20">
                                                                                                    <input class="form-check-input" type="checkbox" value="" name="reporting_write" />
                                                                                                    <span class="form-check-label">Write</span>
                                                                                                </label>
                                                                                                <!--end::Checkbox-->
                                                                                                <!--begin::Checkbox-->
                                                                                                <label class="form-check form-check-custom form-check-solid">
                                                                                                    <input class="form-check-input" type="checkbox" value="" name="reporting_create" />
                                                                                                    <span class="form-check-label">Create</span>
                                                                                                </label>
                                                                                                <!--end::Checkbox-->
                                                                                            </div>
                                                                                            <!--end::Wrapper-->
                                                                                        </td>
                                                                                        <!--end::Input group-->
                                                                                    </tr>
                                                                                    <!--end::Table row-->
                                                                                    <!--begin::Table row-->
                                                                                    <tr>
                                                                                        <!--begin::Label-->
                                                                                        <td class="text-gray-800">Payroll</td>
                                                                                        <!--end::Label-->
                                                                                        <!--begin::Input group-->
                                                                                        <td>
                                                                                            <!--begin::Wrapper-->
                                                                                            <div class="d-flex">
                                                                                                <!--begin::Checkbox-->
                                                                                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                                                    <input class="form-check-input" type="checkbox" value="" name="payroll_read" />
                                                                                                    <span class="form-check-label">Read</span>
                                                                                                </label>
                                                                                                <!--end::Checkbox-->
                                                                                                <!--begin::Checkbox-->
                                                                                                <label class="form-check form-check-custom form-check-solid me-5 me-lg-20">
                                                                                                    <input class="form-check-input" type="checkbox" value="" name="payroll_write" />
                                                                                                    <span class="form-check-label">Write</span>
                                                                                                </label>
                                                                                                <!--end::Checkbox-->
                                                                                                <!--begin::Checkbox-->
                                                                                                <label class="form-check form-check-custom form-check-solid">
                                                                                                    <input class="form-check-input" type="checkbox" value="" name="payroll_create" />
                                                                                                    <span class="form-check-label">Create</span>
                                                                                                </label>
                                                                                                <!--end::Checkbox-->
                                                                                            </div>
                                                                                            <!--end::Wrapper-->
                                                                                        </td>
                                                                                        <!--end::Input group-->
                                                                                    </tr>
                                                                                    <!--end::Table row-->
                                                                                    <!--begin::Table row-->
                                                                                    <tr>
                                                                                        <!--begin::Label-->
                                                                                        <td class="text-gray-800">Disputes Management</td>
                                                                                        <!--end::Label-->
                                                                                        <!--begin::Input group-->
                                                                                        <td>
                                                                                            <!--begin::Wrapper-->
                                                                                            <div class="d-flex">
                                                                                                <!--begin::Checkbox-->
                                                                                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                                                    <input class="form-check-input" type="checkbox" value="" name="disputes_management_read" />
                                                                                                    <span class="form-check-label">Read</span>
                                                                                                </label>
                                                                                                <!--end::Checkbox-->
                                                                                                <!--begin::Checkbox-->
                                                                                                <label class="form-check form-check-custom form-check-solid me-5 me-lg-20">
                                                                                                    <input class="form-check-input" type="checkbox" value="" name="disputes_management_write" />
                                                                                                    <span class="form-check-label">Write</span>
                                                                                                </label>
                                                                                                <!--end::Checkbox-->
                                                                                                <!--begin::Checkbox-->
                                                                                                <label class="form-check form-check-custom form-check-solid">
                                                                                                    <input class="form-check-input" type="checkbox" value="" name="disputes_management_create" />
                                                                                                    <span class="form-check-label">Create</span>
                                                                                                </label>
                                                                                                <!--end::Checkbox-->
                                                                                            </div>
                                                                                            <!--end::Wrapper-->
                                                                                        </td>
                                                                                        <!--end::Input group-->
                                                                                    </tr>
                                                                                    <!--end::Table row-->
                                                                                    <!--begin::Table row-->
                                                                                    <tr>
                                                                                        <!--begin::Label-->
                                                                                        <td class="text-gray-800">API Controls</td>
                                                                                        <!--end::Label-->
                                                                                        <!--begin::Input group-->
                                                                                        <td>
                                                                                            <!--begin::Wrapper-->
                                                                                            <div class="d-flex">
                                                                                                <!--begin::Checkbox-->
                                                                                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                                                    <input class="form-check-input" type="checkbox" value="" name="api_controls_read" />
                                                                                                    <span class="form-check-label">Read</span>
                                                                                                </label>
                                                                                                <!--end::Checkbox-->
                                                                                                <!--begin::Checkbox-->
                                                                                                <label class="form-check form-check-custom form-check-solid me-5 me-lg-20">
                                                                                                    <input class="form-check-input" type="checkbox" value="" name="api_controls_write" />
                                                                                                    <span class="form-check-label">Write</span>
                                                                                                </label>
                                                                                                <!--end::Checkbox-->
                                                                                                <!--begin::Checkbox-->
                                                                                                <label class="form-check form-check-custom form-check-solid">
                                                                                                    <input class="form-check-input" type="checkbox" value="" name="api_controls_create" />
                                                                                                    <span class="form-check-label">Create</span>
                                                                                                </label>
                                                                                                <!--end::Checkbox-->
                                                                                            </div>
                                                                                            <!--end::Wrapper-->
                                                                                        </td>
                                                                                        <!--end::Input group-->
                                                                                    </tr>
                                                                                    <!--end::Table row-->
                                                                                    <!--begin::Table row-->
                                                                                    <tr>
                                                                                        <!--begin::Label-->
                                                                                        <td class="text-gray-800">Database Management</td>
                                                                                        <!--end::Label-->
                                                                                        <!--begin::Input group-->
                                                                                        <td>
                                                                                            <!--begin::Wrapper-->
                                                                                            <div class="d-flex">
                                                                                                <!--begin::Checkbox-->
                                                                                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                                                    <input class="form-check-input" type="checkbox" value="" name="database_management_read" />
                                                                                                    <span class="form-check-label">Read</span>
                                                                                                </label>
                                                                                                <!--end::Checkbox-->
                                                                                                <!--begin::Checkbox-->
                                                                                                <label class="form-check form-check-custom form-check-solid me-5 me-lg-20">
                                                                                                    <input class="form-check-input" type="checkbox" value="" name="database_management_write" />
                                                                                                    <span class="form-check-label">Write</span>
                                                                                                </label>
                                                                                                <!--end::Checkbox-->
                                                                                                <!--begin::Checkbox-->
                                                                                                <label class="form-check form-check-custom form-check-solid">
                                                                                                    <input class="form-check-input" type="checkbox" value="" name="database_management_create" />
                                                                                                    <span class="form-check-label">Create</span>
                                                                                                </label>
                                                                                                <!--end::Checkbox-->
                                                                                            </div>
                                                                                            <!--end::Wrapper-->
                                                                                        </td>
                                                                                        <!--end::Input group-->
                                                                                    </tr>
                                                                                    <!--end::Table row-->
                                                                                    <!--begin::Table row-->
                                                                                    <tr>
                                                                                        <!--begin::Label-->
                                                                                        <td class="text-gray-800">Repository Management</td>
                                                                                        <!--end::Label-->
                                                                                        <!--begin::Input group-->
                                                                                        <td>
                                                                                            <!--begin::Wrapper-->
                                                                                            <div class="d-flex">
                                                                                                <!--begin::Checkbox-->
                                                                                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                                                    <input class="form-check-input" type="checkbox" value="" name="repository_management_read" />
                                                                                                    <span class="form-check-label">Read</span>
                                                                                                </label>
                                                                                                <!--end::Checkbox-->
                                                                                                <!--begin::Checkbox-->
                                                                                                <label class="form-check form-check-custom form-check-solid me-5 me-lg-20">
                                                                                                    <input class="form-check-input" type="checkbox" value="" name="repository_management_write" />
                                                                                                    <span class="form-check-label">Write</span>
                                                                                                </label>
                                                                                                <!--end::Checkbox-->
                                                                                                <!--begin::Checkbox-->
                                                                                                <label class="form-check form-check-custom form-check-solid">
                                                                                                    <input class="form-check-input" type="checkbox" value="" name="repository_management_create" />
                                                                                                    <span class="form-check-label">Create</span>
                                                                                                </label>
                                                                                                <!--end::Checkbox-->
                                                                                            </div>
                                                                                            <!--end::Wrapper-->
                                                                                        </td>
                                                                                        <!--end::Input group-->
                                                                                    </tr>
                                                                                    <!--end::Table row-->
                                                                                </tbody>
                                                                                <!--end::Table body-->
                                                                            </table>
                                                                            <!--end::Table-->
                                                                        </div>
                                                                        <!--end::Table wrapper-->
                                                                    </div>
                                                                    <!--end::Permissions-->
                                                                </div>
                                                                <!--end::Scroll-->
                                                                <!--begin::Actions-->
                                                                <div class="text-center pt-15">
                                                                    <button type="reset" class="btn btn-light me-3" data-kt-roles-modal-action="cancel">Discard</button>
                                                                    <button type="submit" class="btn btn-primary" data-kt-roles-modal-action="submit">
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
                                        <!--end::Modal - Update role-->
                                   @endforeach
                                @endif
                               

                            </div>
                            <!--end::Row-->
                            <!--begin::Modals-->

                            <!--begin::Modal - Add role-->
                            <div class="modal fade" id="kt_modal_add_role" tabindex="-1" aria-hidden="true">
                                <!--begin::Modal dialog-->
                                <div class="modal-dialog modal-dialog-centered mw-750px">
                                    <!--begin::Modal content-->
                                    <div class="modal-content badge-custom-bg">
                                        <!--begin::Modal header-->
                                        <div class="modal-header">
                                            <!--begin::Modal title-->
                                            <h2 class="fw-bold fs-color-white custom-fs-23">Add a Role </h2>
                                            <!--end::Modal title-->
                                            <!--begin::Close-->
                                            <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-roles-modal-action="close">
                                                <i class="ki-duotone ki-cross fs-1">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </div>
                                            <!--end::Close-->
                                        </div>
                                        <!--end::Modal header-->
                                        <!--begin::Modal body-->
                                        <div class="modal-body scroll-y mx-lg-5 my-7">
                                             <!--begin::Form-->
                                             <form id="kt_modal_add_role_form" class="form" >
                                                <!--begin::Scroll-->
                                                @csrf
                                                <input type="hidden" name="id">
                                                <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_update_role_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_update_role_header" data-kt-scroll-wrappers="#kt_modal_update_role_scroll" data-kt-scroll-offset="300px">
                                                    <!--begin::Input group-->
                                                    <div class="fv-row mb-10">
                                                        <!--begin::Label-->
                                                        <label class="fs-5 fw-bold form-label mb-2">
                                                            <span class="required">Role name</span>
                                                        </label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <input class="form-control form-control-solid" placeholder="Enter a role name" name="name" value="{{ old('name') }}" />
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Permissions-->
                                                    <div class="fv-row">
                                                        <!--begin::Label-->
                                                        <label class="fs-5 fw-bold form-label mb-2">Role Permissions</label>
                                                        <!--end::Label-->
                                                        <!--begin::Table wrapper-->
                                                        <div class="table-responsive">
                                                            <!--begin::Table-->
                                                            <table class="table align-middle table-row-dashed fs-6 gy-5">
                                                                <!--begin::Table body-->
                                                                <tbody class="text-gray-600 fw-semibold">
                                                                    <!--begin::Table row-->
                                                                    <tr>
                                                                        <td class="text-gray-800">All Permissions
                                                                            <span class="ms-1" data-bs-toggle="tooltip" title="Allows a full access to the system">
                                                                                <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                                                                    <span class="path1"></span>
                                                                                    <span class="path2"></span>
                                                                                    <span class="path3"></span>
                                                                                </i>
                                                                            </span>
                                                                        </td>
                                                                        <td>
                                                                            <!--begin::Checkbox-->
                                                                            <label class="form-check form-check-sm form-check-custom form-check-solid me-9">
                                                                                <input class="form-check-input" type="checkbox" value="" id="kt_roles_select_all_2" />
                                                                                <span class="form-check-label" for="kt_roles_select_all_2">Select all</span>
                                                                            </label>
                                                                            <!--end::Checkbox-->
                                                                        </td>
                                                                    </tr>
                                                                

                                                                    @foreach ($permission_groups as $gr )
                                                                       
                                                                    <tr>
                                                                        <!--begin::Label-->
                                                                        <td class="text-gray-800">{{ $gr->group_name }}</td>
                                                                        <!--end::Label-->
                                                                        <!--begin::Input group-->
                                                                        <td>
                                                                            <!--begin::Wrapper-->
                                                                            <div class="d-flex">
                                                                                @php
                                                                                    $permissions= App\Models\User::getpermissionByGroup($gr->group_name);
                                                                                @endphp
                                                                                {{-- @dd($permissions); --}}
                                                                                @foreach ($permissions as $permission )   
                                                                                        <!--begin::Checkbox-->
                                                                                        <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                                            <input class="form-check-input" type="checkbox"
                                                                                                name="permission[]" 
                                                                                                value="{{$permission->id}}" 
                                                                                                id="checkDefault{{$permission->id}}"
                                                                                              />
                                                                                            <span class="form-check-label">{{ $permission->name }}</span>
                                                                                        </label>
                                                                                        <!--end::Checkbox-->
                                                                                @endforeach
                                                                            
                                                                            </div>
                                                                            <!--end::Wrapper-->
                                                                        </td>
                                                                        <!--end::Input group-->
                                                                    </tr>   
                                                                    @endforeach
                                                                    
                                                                    
                                                                    <!--end::Table row-->
                                                                </tbody>
                                                                <!--end::Table body-->
                                                            </table>
                                                            <!--end::Table-->
                                                        </div>
                                                        <!--end::Table wrapper-->
                                                    </div>
                                                    <!--end::Permissions-->
                                                </div>
                                                <!--end::Scroll-->
                                                <!--begin::Actions-->
                                                <div class="text-center pt-15">
                                                    <button type="reset" class="btn btn-light me-3" data-kt-roles-modal-action="cancel">Discard</button>
                                                    <button type="button" class="btn btn-primary submitAddRole" >
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
                            <!--end::Modal - Add role-->

                           
                            <!--end::Modals-->
                        </div>
                        <!--end::Content container-->
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Content wrapper-->
                <!--begin::Footer-->
                <div id="kt_app_footer" class="app-footer">
                    <!--begin::Footer container-->
                    <div class="app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
                        <!--begin::Copyright-->
                        <div class="text-gray-900 order-2 order-md-1">
                            <span class="text-muted fw-semibold me-1">2023&copy;</span>
                            <a href="https://keenthemes.com" target="_blank" class="text-gray-800 text-hover-primary">Keenthemes</a>
                        </div>
                        <!--end::Copyright-->
                        <!--begin::Menu-->
                        <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
                            <li class="menu-item">
                                <a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a>
                            </li>
                            <li class="menu-item">
                                <a href="https://devs.keenthemes.com" target="_blank" class="menu-link px-2">Support</a>
                            </li>
                            <li class="menu-item">
                                <a href="https://1.envato.market/EA4JP" target="_blank" class="menu-link px-2">Purchase</a>
                            </li>
                        </ul>
                        <!--end::Menu-->
                    </div>
                    <!--end::Footer container-->
                </div>
                <!--end::Footer-->
            </div>
            <!--end:::Main-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
</div>
<!--end::App-->

<!--end::Drawers-->
<!--begin::Scrolltop-->
<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
    <i class="ki-duotone ki-arrow-up">
        <span class="path1"></span>
        <span class="path2"></span>
    </i>
</div>
<!--end::Scrolltop-->
<!--begin::Modals-->

<!--end::Modals-->
<!--begin::Javascript-->
<script>
    var hostUrl = "assets/";
</script>
<script>
    $(document).ready( function () {
        //delete role
        $('.deleteRoleBtn').on('click', function (e) {
            e.preventDefault();
            var role_id = $(this).attr('data-id');
            // alert(role_id);

            var csrfToken = $('meta[name="csrf-token"]').attr('content');

            const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: "btn btn-success",
                cancelButton: "btn btn-danger"
            },
            buttonsStyling: false
            });
            swalWithBootstrapButtons.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "No, cancel!",
            reverseButtons: true
            }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                url: '{{ route("admin.role.destroy", ["role_id" => "__role_id"]) }}'.replace('__role_id', role_id),
                type: 'DELETE',
                data: {
                    '_token': csrfToken
                },
            });
                swalWithBootstrapButtons.fire({
                title: "Deleted!",
                text: "Your file has been deleted.",
                icon: "success"
                });
                location.reload();
            } else if (
                /* Read more about handling dismissals below */
                result.dismiss === Swal.DismissReason.cancel
            ) {
                swalWithBootstrapButtons.fire({
                title: "Cancelled",
                text: "Your imaginary file is safe :)",
                icon: "error"
                });
            }
            });

        });

        //add role
        $('.submitAddRole').on('click', function (e){

            e.preventDefault();
            var formData = new FormData($('#kt_modal_add_role_form')[0]);
            console.log(formData);

            var csrfToken = $('meta[name="csrf-token"]').attr('content');

            $.ajax({
                url: '{{ route("admin.role.store") }}',
                type: 'POST',
                data: formData,
                processData: false,  // Important: Don't process the data
                contentType: false,  // Important: Don't set contentType
                headers: {
                    'X-CSRF-TOKEN': csrfToken
                },

                success: function(response) {
                    // Handle success response
                    console.log(response.success);
                    if(response.success){
                        $('#kt_modal_add_role').modal('hide');
                        location.reload();
                        // $('.modal-backdrop').hide();

                    }

                    // Display success message to the user
                    Swal.fire('Success!', response.success, 'success');

                    // Optionally, you can access the updated user data if needed
                    console.log(response.user);
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
            })//ajax end;
        });

        let selectedCheckboxes = [];
        $('#kt_roles_select_all_2').click(function () {
            if ($(this).is(':checked')) {
                // Select all checkboxes and add their values to the selectedCheckboxes array
                $('input[type="checkbox"]').prop('checked', true).each(function () {
                    selectedCheckboxes.push($(this).val());
                });
            } else {
                // Deselect all checkboxes and clear the selectedCheckboxes array
                $('input[type="checkbox"]').prop('checked', false);
                selectedCheckboxes = [];
            }
        });


        // Add a listener to the form submission
        $('kt_modal_update_role_form').submit(function () {
            // Add the selected checkboxes array as a hidden input in the form
            $('<input>').attr({
                type: 'hidden',
                name: 'selectedCheckboxes',
                value: selectedCheckboxes.join(',')
            }).appendTo($(this));

        });





});//end here
</script>
<!--begin::Global Javascript Bundle(mandatory for all pages)-->
<script src="assets/plugins/global/plugins.bundle.js"></script>
<script src="assets/js/scripts.bundle.js"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Vendors Javascript(used for this page only)-->
<script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
<!--end::Vendors Javascript-->
<!--begin::Custom Javascript(used for this page only)-->
<script src="assets/js/custom/apps/user-management/roles/list/add.js"></script>
<script src="assets/js/custom/apps/user-management/roles/list/update-role.js"></script>
<script src="assets/js/widgets.bundle.js"></script>
<script src="assets/js/custom/widgets.js"></script>
<script src="assets/js/custom/apps/chat/chat.js"></script>
<script src="assets/js/custom/utilities/modals/upgrade-plan.js"></script>
<script src="assets/js/custom/utilities/modals/create-app.js"></script>
<script src="assets/js/custom/utilities/modals/users-search.js"></script>
<!--end::Custom Javascript-->
<!--end::Javascript-->