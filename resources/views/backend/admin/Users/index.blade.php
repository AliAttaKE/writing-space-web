@extends('custom_layout.master')
@section('main_content')
    <div class="d-flex flex-column flex-column-fluid">
        <!--begin::Page-->
        <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
            <!--begin::Header-->

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
                                <h1
                                    class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0 fs-color-white custom-fs-23">
                                    Users</h1>
                                <!--end::Title-->
                                <!--begin::Breadcrumb-->
                                <!-- <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">

                                    
                                    <li class="breadcrumb-item fs-color-white custom-fs-13">User Management</li>
                                    
                                    <li class="breadcrumb-item">
                                        <span class="bullet bg-gray-500 w-5px h-2px"></span>
                                    </li>
                                    
                                    <li class="breadcrumb-item fs-color-white custom-fs-13">Users</li>
                                    
                                </ul> -->
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
                            <div class="card card-custom-bg">
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
                                                class="form-control form-control-solid w-250px ps-13 btn-dark-primary"
                                                placeholder="Search" />
                                        </div>
                                        <!--end::Search-->
                                    </div>
                                    <!--begin::Card title-->
                                    <!--begin::Card toolbar-->
                                    <div class="card-toolbar">
                                       
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

                                    </div>
                                    <!--end::Card toolbar-->
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body py-4">
                                    <!--begin::Table-->
                                    <div id="kt_table_new_orders_wrapper"
                                        class="dataTables_wrapper dt-bootstrap4 no-footer">
                                        <div class="table-responsive">
                                            <table class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer"
                                                id="kt_table_new_users" aria-describedby="kt_table_new_orders_info">
                                                <thead>
                                                    <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                                       
                                                        <th class="min-w-90px fw_800 pb-8 sorting" tabindex="0"
                                                            aria-controls="kt_table_new_orders" rowspan="1"
                                                            colspan="1" style="width: 131.383px;"
                                                            aria-label="order No: activate to sort column ascending">Profile
                                                        </th>
                                                        <th class="min-w-50px fw_800 pb-8 sorting" tabindex="0"
                                                            aria-controls="kt_table_new_orders" rowspan="1"
                                                            colspan="1" style="width: 171.217px;"
                                                            aria-label="Topic: activate to sort column ascending">Name</th>
                                                        <th class="min-w-70px fw_800 pb-8 sorting" tabindex="0"
                                                            aria-controls="kt_table_new_orders" rowspan="1"
                                                            colspan="1" style="width: 103.083px;"
                                                            aria-label="Pages: activate to sort column ascending">Email
                                                        </th>
                                                        <th class="min-w-50px fw_800 pb-8 sorting" tabindex="0"
                                                            aria-controls="kt_table_new_orders" rowspan="1"
                                                            colspan="1" style="width: 139.017px;"
                                                            aria-label="Action: activate to sort column ascending">Action
                                                        </th>
                                                    </tr>

                                                </thead>
                                                <tbody class=" fw-semibold">
                                                @if ($users->isNotEmpty())
                                                    @foreach ($users as $user )
                                                    <tr class="odd">
                                                     
                                                        <td class="text-white">
                                                            <!--begin:: Avatar -->
                                                            <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                                <a >
                                                                    <div class="symbol-label">
                                                                        @if($user->avatar)
                                                                            <img src="{{ asset('images/users/admins/'. $user->avatar) }}" alt="Emma Smith" class="w-100" />
                                                                        @else
                                                                            <img src="{{ asset('backend/assets/media/ws/profile.png') }}" alt="Emma Smith" class="w-100" />
                                                                        @endif
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <!--end::Avatar-->
                                                        </td>
                                                        <td class="text-white">
                                                            <a class="text-white" href="{{route('admin.show.customer.details', $user->id)}}">{{ $user->name }}</a>
                                                        </td>
                                                        <td class="text-white">
                                                            {{ $user->email }}
                                                        </td>

                                                        <td class="text-white"><a href="#"
                                                                class="btn badge-custom-bg btn-flex btn-center btn-sm text-white"
                                                                data-kt-menu-trigger="click"
                                                                data-kt-menu-placement="bottom-end">Actions
                                                                <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                                            <!--begin::Menu-->
                                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4 badge-custom-bg"
                                                                data-kt-menu="true" style="">
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="{{ route('admin.users.show', ['id' => $user->id]) }}"
                                                                        class="menu-link d-flex justify-content-center px-3 text-white">Roles</a>
                                                                </div>
                                                                <!--end::Menu item-->

                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="{{ route('admin.users.destroy', ['id' => $user->id]) }}"
                                                                        class="menu-link d-flex justify-content-center px-3 text-white"
                                                                        onclick="return confirm('Are you sure?');">Delete</a>
                                                                </div>
                                                                <!--end::Menu item-->

                                                            </div>
                                                        </td>
                                                    </tr>
                                                        
                                                    @endforeach
                                                @endif




                                                  

                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="row">
                                            <div
                                                class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start">
                                                <div class="dataTables_length" id="kt_table_new_orders_length">
                                                    <label><select name="kt_table_new_orders_length"
                                                            aria-controls="kt_table_new_orders"
                                                            class="form-select form-select-sm form-select-solid">
                                                            <option value="10">10</option>
                                                            <option value="25">25</option>
                                                            <option value="50">50</option>
                                                            <option value="100">100</option>
                                                        </select></label>
                                                </div>
                                                <div class="dataTables_info" id="kt_table_new_orders_info" role="status"
                                                    aria-live="polite">Showing 1 to 2 of 2 records</div>
                                            </div>
                                            <div
                                                class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end">
                                                <div class="dataTables_paginate paging_simple_numbers"
                                                    id="kt_table_new_orders_paginate">
                                                    <ul class="pagination">
                                                        <li class="paginate_button page-item previous disabled"
                                                            id="kt_table_new_orders_previous"><a href="#"
                                                                aria-controls="kt_table_new_orders" data-dt-idx="0"
                                                                tabindex="0" class="page-link"><i
                                                                    class="previous"></i></a></li>
                                                        <li class="paginate_button page-item active"><a href="#"
                                                                aria-controls="kt_table_new_orders" data-dt-idx="1"
                                                                tabindex="0" class="page-link">1</a></li>
                                                        <li class="paginate_button page-item next disabled"
                                                            id="kt_table_new_orders_next"><a href="#"
                                                                aria-controls="kt_table_new_orders" data-dt-idx="2"
                                                                tabindex="0" class="page-link"><i
                                                                    class="next"></i></a></li>
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
                        </div>
                        <!--end::Content container-->
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Content wrapper-->
            </div>
            <!--end:::Main-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
    <!--begin::Javascript-->
    <script>
        var hostUrl = "assets/";
    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
        // Function to handle table search
        function handleTableSearch() {
            // Get the search input value
            var searchText = $('[data-kt-user-table-filter="search"]').val().toLowerCase();
            console.log(searchText)
            // Loop through each table row
            $('#kt_table_new_users tbody tr').each(function() {
                // Check if any cell contains the search text
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
    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Vendors Javascript(used for this page only)-->
    <script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
    <!--end::Vendors Javascript-->
    <!--begin::Custom Javascript(used for this page only)-->
    <script src="assets/js/custom/apps/user-management/users/list/table.js"></script>
    <script src="assets/js/custom/apps/user-management/users/list/export-users.js"></script>
    <script src="assets/js/custom/apps/user-management/users/list/add.js"></script>
    <script src="assets/js/widgets.bundle.js"></script>
    <script src="assets/js/custom/widgets.js"></script>
    <script src="assets/js/custom/apps/chat/chat.js"></script>
    <script src="assets/js/custom/utilities/modals/upgrade-plan.js"></script>
    <script src="assets/js/custom/utilities/modals/create-app.js"></script>
    <script src="assets/js/custom/utilities/modals/users-search.js"></script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->
    </div>
@endsection
