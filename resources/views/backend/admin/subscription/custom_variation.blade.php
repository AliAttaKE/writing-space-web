@extends('custom_layout.master')
@section('main_content')
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
                                <h1 class="page-heading d-flex text-gray-900 fw-bold fs-1 flex-column justify-content-center my-0 text-color">Variation</h1>
                                <!--end::Title-->

                            </div>
                            <!--end::Page title-->
                            <!--begin::Actions-->
                         
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
                                <div class="page-title d-flex flex-column justify-content-center pt-6 px-6 flex-wrap me-3">
                                    <!--begin::Title-->
                                    <h3 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0 text-color d-none">Variation</h3>
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
                                            <input type="text" data-kt-user-table-filter="search" class="form-control form-control-solid w-250px ps-13 btn-dark-primary" placeholder="Search" />
                                        </div>
                                        <!--end::Search-->
                                    </div>
                                    <!--begin::Card title-->
                                    <!--begin::Card toolbar-->
                                    <div class="card-toolbar">
                                        <!--begin::Toolbar-->
                                        <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                                            <!--begin::Filter-->
                                            <button type="button" class="btn btn-light-primary me-3 badge-custom-bg d-none" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                <i class="ki-duotone ki-filter fs-2">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>Filter</button>
                                            <!--begin::Menu 1-->
                                            <div class="menu menu-sub menu-sub-dropdown w-300px w-md-325px badge-custom-bg" data-kt-menu="true">
                                                <!--begin::Header-->
                                                <div class="px-7 py-5">
                                                    <div class="fs-5 fw-bold text-white">Filter Options</div>
                                                </div>
                                                <!--end::Header-->
                                                <!--begin::Separator-->
                                                <div class="separator border-gray-200"></div>
                                                <!--end::Separator-->
                                                <!--begin::Content-->
                                                <form
                                                        id="filterForm" 
                                                        action="{{ route('admin.custom-setting') }}" 
                                                        method="GET"
                                                        enctype="multipart/form-data">
                                                     <div class="px-7 py-5" data-kt-user-table-filter="form">
                                                    <!--begin::Input group-->
                                                    <div class="mb-3">
                                                        <label class="form-label fs-6 fw-semibold text-white">Text:</label>
                                                        <input type="text" placeholder="Text" name="text" value="{{Request::get('text')}}" autocomplete="off" class="form-control bg-transparent btn-dark-primary" />
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="mb-3">
                                                        <label class="form-label fs-6 fw-semibold text-white">Page Limit:</label>
                                                        <input type="text" placeholder="Page Limit" name="page_limit" value="{{Request::get('page_limit')}}" autocomplete="off" class="form-control bg-transparent btn-dark-primary" />
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="mb-3">
                                                        <label class="form-label fs-6 fw-semibold text-white">Duration Type:</label>
                                                        <input type="text" placeholder="Duration Type (Days, Hours)" name="duration_type" value="{{Request::get('duration_type')}}" autocomplete="off" class="form-control bg-transparent btn-dark-primary" />
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Actions-->
                                                    <div class="d-flex justify-content-end">
                                                        <button type="reset" class="btn btn-dark-primary fw-semibold me-2 px-6" onclick="window.location.href = '{{route('admin.custom-setting')}}' ">Reset</button>
                                                        <button type="submit" class="btn btn-dark-primary fw-semibold px-6">Apply</button>
                                                    </div>
                                                    <!--end::Actions-->
                                                </div>
                                            </form>
                                                <!--end::Content-->
                                            </div>
                                            <!--end::Menu 1-->
                                            <!--end::Filter-->
                                            <!--begin::Export-->
                                            <button type="button" class="btn btn-light-primary me-3 btn-dark-primary badge-custom-bg" 
                                            {{-- data-bs-toggle="modal" data-bs-target="#kt_modal_export_users" --}}
                                            onclick="window.location.href='{{ route('admin.export.pricing') }}'"
                                            >
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
                                                        <h2 class="fw-bold">Export Subscription</h2>
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
                                @if ($errors->any())
                                <div class="alert alert-success">
                                    <ul class="list-unstyled">
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                                <div class="card-body py-4">
                                    <!--begin::Table-->
                                    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_users">
                                        <thead>
                                            <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                                {{-- <th class="w-10px pe-2">
                                                    <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                                        <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_table_users .form-check-input" value="1" />
                                                    </div>
                                                </th> --}}
                                                <th class="min-w-100px">Custom</th>
                                                <th class="min-w-100px">Cost</th>
                                                <th class="min-w-100px">Duration</th>
                                                <th class="min-w-100px">Cost per page</th>
                                                <th class="min-w-80px">Page Limit</th>
                                                <th class="min-w-70px">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-gray-600 fw-semibold text-color">
                                            @if($pricing)
                                            @foreach($pricing as $subs)
                                            <tr>
                                                {{-- <td>
                                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="checkbox" value="{{$subs->id}}" />
                                                    </div>
                                                </td> --}}
                                                <td>{{$subs->text}}</td>
                                                <td>{{$subs->cost}}</td>
                                                <td>{{$subs->min}} - {{$subs->max}} {{$subs->duration_type}}</td>
                                                <td>${{$subs->cost_per_page}}</td>
                                                <td>{{$subs->page_limit}}</td>
                                               
                                                <td>
                                                    <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm badge-custom-bg" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                                        <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                                    <!--begin::Menu-->
                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4 badge-custom-bg" data-kt-menu="true">
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <button type="button" class="btn menu-link d-flex justify-content-center fs-7 w-100 text-white" data-bs-toggle="modal" data-bs-target="#view-invoice_{{$subs->id}}">View</button>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <button type="button" class="btn menu-link d-flex justify-content-center fs-7 w-100 text-white" data-bs-toggle="modal" data-bs-target="#kt_modal_edit_{{$subs->id}}">Edit</button>
                                                        </div>
                                                        <!--end::Menu item-->

                                                        <!--begin::Menu item-->
                                                       
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                     
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu-->
                                                </td>
                                            </tr>
                                            <div class="modal fade" id="view-invoice_{{$subs->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                                    <div class="modal-content badge-custom-bg">
                                                        <div class="modal-header border-0">
                                                            {{-- <h5 class="modal-title" id="exampleModalLabel">Invoice</h5> --}}
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
                                                                                    <div class="fw-bold fs-color-white custom-fs-13 mb-8">Custom variation #{{$subs->id}}</div>
                                                                                    <!--end::Label-->
                                                                                    <!--begin::Row-->
                                                                                    <div class="row g-5 mb-12">
                                                                                        <!--end::Col-->
                                                                                        <div class="col-md-3">
                                                                                            <!--end::Label-->
                                                                                            <div class="fw-semibold fs-color-white custom-fs-13 mb-1">Title:</div>
                                                                                            <!--end::Label-->
                                                                                            <!--end::Text-->
                                                                                            <div class="fw-bold fs-color-white custom-fs-13">{{$subs->text}}</div>
                                                                                            <!--end::Text-->
                                                                                        </div>
                                                                                        <!--end::Col-->
                                                                                        <!--end::Col-->
                                                                                       
                                                                                        <!--end::Col-->
                                                                                        <div class="col-md-3">
                                                                                            <!--end::Label-->
                                                                                            <div class="fw-semibold fs-color-white custom-fs-13 mb-1">Cost Per Page:</div>
                                                                                            <!--end::Label-->
                                                                                            <!--end::Text-->
                                                                                            <div class="fw-bold fs-color-white custom-fs-13">{{$subs->cost_per_page}}</div>
                                                                                            <!--end::Text-->
                                                                                        </div>
                                                                                        <!--end::Col-->
                                                                                        <!--end::Col-->
                                                                                        <div class="col-md-3">
                                                                                            <!--end::Label-->
                                                                                            <div class="fw-semibold fs-color-white custom-fs-13 mb-1">Duration:</div>
                                                                                            <!--end::Label-->
                                                                                            <!--end::Text-->
                                                                                            <div class="fw-bold fs-color-white custom-fs-13">{{$subs->min}} - {{$subs->max}} {{$subs->duration_type}} </div>
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
                                                                                            <div class="fw-semibold fs-color-white custom-fs-13 mb-1">Pages Limit:</div>
                                                                                            <!--end::Label-->
                                                                                            <!--end::Text-->
                                                                                            <div class="fw-bold fs-color-white custom-fs-13">{{$subs->page_limit}}</div>
                                                                                            <!--end::Text-->
                                                                                        </div>
                                                                                        <!--end::Col-->
                                                                                        <!--end::Col-->
                                                                                    
                                                                                        <!--end::Col-->
                                                                                       
                                                                                        <!--end::Col-->
                                                                                    
                                                                                    </div>
                                                                                    <!--end::Content-->
                                                                                 
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
                                                                <button type="button" class="btn btn-dark-primary" data-bs-dismiss="modal">Close</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal fade" id="kt_modal_edit_{{$subs->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                                    <div class="modal-content badge-custom-bg">
                                                        <div class="modal-header border-0">
                                                            <h5 class="modal-title fs-color-white custom-fs-23" id="exampleModalLabel">Variations</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <form method="post" action="{{route('admin.custom_edit',[$subs->id])}}">
                                                            @csrf
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
                                                                                    <div class="mb-3">
                                                                                        <label class="form-label fs-color-white custom-fs-13 fw-semibold">Cost Per Page:</label>
                                                                                        <input type="text" value="{{$subs->cost_per_page}}" name="cost_per_page" autocomplete="off" class="form-control btn-dark-primary" />
                                                                                    </div>
                                                                                    <!--end::Input group-->
                                                                                    <!--begin::Input group-->
                                                                                    <div class="mb-3">
                                                                                        <label class="form-label fs-color-white custom-fs-13 fw-semibold">Page Limit:</label>
                                                                                        <input type="text" value="{{$subs->page_limit}}" name="page_limit" autocomplete="off" class="form-control btn-dark-primary" />
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
                                                                <button type="button" class="btn btn-dark-primary" data-bs-dismiss="modal">Close</button>
                                                            </div>
                                                            <div class="">
                                                                <button type="submit" class="btn badge-custom-bg-2" >Save</button>
                                                            </div>
                                                        </div>
                                                    </form>
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
            </div>
            <!--end:::Main-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
</div>

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

@endsection

@section('customJs')
<script src="{{ asset('backend/assets/plugins/global/plugins.bundle.js') }}"></script>
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
        $('#kt_table_users tbody tr').each(function() {
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
        var table = $('#kt_table_users').DataTable();

        // Filter form submission
        $('[data-kt-user-table-filter="filter"]').on('click', function(e) {
            e.preventDefault();

            // Get filter values
            var subscriptionPlan = $('input[name="subscription-plan"]').val();
            var service = $('input[name="service"]').val();
            var totalPages = $('input[name="total-pages"]').val();

            // Apply filters
            table.columns(1).search(subscriptionPlan).draw();
            table.columns(2).search(service).draw();
            table.columns(7).search(totalPages).draw();
        });

        // Reset filter form
        $('[data-kt-user-table-filter="reset"]').on('click', function(e) {
            e.preventDefault();

            // Reset input fields
            $('input[name="subscription-plan"]').val('');
            $('input[name="service"]').val();
            $('input[name="total-pages"]').val();

            // Clear filters
            table.columns().search('').draw();
        });
    });
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
<script>
    // Automatically generate the JSON structure on page load
    $(document).ready(function () {
        generateJSON();

        // Add event listener for change on select elements
        $("select[name='more[]']").on('change', function () {
            generateJSON();
        });
    });

    // Function to generate the JSON structure
    function generateJSON() {
        var moreRestrictions = [];

        // Loop through select elements and create JSON structure
        $("select[name='more[]']").each(function () {
            var title = $(this).closest(".mb-10").find(".fs-6").text().trim();
            var status = $(this).val() === "1";
            moreRestrictions.push({ "title": title, "status": status });
        });
console.log(moreRestrictions)
        // Display the result in the console (you can send it to the server as needed)
       document.getElementById('more').value=JSON.stringify(moreRestrictions);
       console.log(document.getElementById('more').value)

    }

    function confirmDelete(id)
 {
   console.log(id)
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
                    url: '/admin/deleteSubscription/' + id,
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

@endsection