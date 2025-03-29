<!--begin::Content wrapper-->
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
                <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0 text-color">Messages</h1>
                <!--end::Title-->
                <!--begin::Breadcrumb-->
                <!-- <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                    
                    <li class="breadcrumb-item text-muted">Message Management
                    </li>
                    
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
            <!--begin::Inbox App - Messages -->
            <div class="d-flex flex-column flex-lg-row">
                <!--begin::Sidebar-->
                <div class="d-none d-lg-flex flex-column flex-lg-row-auto w-100 w-lg-200px" data-kt-drawer="true" data-kt-drawer-name="inbox-aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="225px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_inbox_aside_toggle">
                    <!--begin::Sticky aside-->
                    <div class="card card-flush mb-0">
                        <!--begin::Aside content-->
                        <div class="card-body">
                            <!--begin::Button-->
                            <a href="{{route('admin.new-message')}}" class="btn btn-primary fw-bold w-100 mb-8 badge-custom-bg">New Message</a>
                            <!--end::Button-->
                            <!--begin::Menu-->
                            <div class="menu menu-column menu-rounded menu-state-bg menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary mb-10">
                                <!--begin::Menu item-->
                                <div class="menu-item mb-3">
                                    <!--begin::Inbox-->
                                    <span class="menu-link active btn-dark-primary">
                                        <span class="menu-icon">
                                            <i class="ki-duotone ki-sms fs-2 me-3 text-color">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </span>
                                        <span class="menu-title fw-bold"><a href="{{route('admin.message-management')}}" style="color: white">Inbox</a></span>
                                        <span class="badge badge-light-success badge-custom-bg">{{count($data)}}</span>
                                    </span>
                                    <!--end::Inbox-->
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <!--<div class="menu-item mb-3">-->
                                    <!--begin::Marked-->
                                <!--    <span class="menu-link">-->
                                <!--        <span class="menu-icon">-->
                                <!--            <i class="ki-duotone ki-abstract-23 fs-2 me-3">-->
                                <!--                <span class="path1"></span>-->
                                <!--                <span class="path2"></span>-->
                                <!--            </i>-->
                                <!--        </span>-->
                                <!--        <span class="menu-title fw-bold">Marked</span>-->
                                <!--    </span>-->
                                    <!--end::Marked-->
                                <!--</div>-->
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <!--<div class="menu-item mb-3">-->
                                    <!--begin::Draft-->
                                <!--    <span class="menu-link">-->
                                <!--        <span class="menu-icon">-->
                                <!--            <i class="ki-duotone ki-file fs-2 me-3">-->
                                <!--                <span class="path1"></span>-->
                                <!--                <span class="path2"></span>-->
                                <!--            </i>-->
                                <!--        </span>-->
                                <!--        <span class="menu-title fw-bold">Draft</span>-->
                                <!--        <span class="badge badge-light-warning">5</span>-->
                                <!--    </span>-->
                                    <!--end::Draft-->
                                <!--</div>-->
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <!--<div class="menu-item mb-3">-->
                                    <!--begin::Sent-->
                                <!--    <span class="menu-link">-->
                                <!--        <span class="menu-icon">-->
                                <!--            <i class="ki-duotone ki-send fs-2 me-3">-->
                                <!--                <span class="path1"></span>-->
                                <!--                <span class="path2"></span>-->
                                <!--            </i>-->
                                <!--        </span>-->
                                <!--        <span class="menu-title fw-bold">Sent</span>-->
                                <!--    </span>-->
                                    <!--end::Sent-->
                                <!--</div>-->
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <!--<div class="menu-item">-->
                                    <!--begin::Trash-->
                                <!--    <span class="menu-link">-->
                                <!--        <span class="menu-icon">-->
                                <!--            <i class="ki-duotone ki-trash fs-2 me-3">-->
                                <!--                <span class="path1"></span>-->
                                <!--                <span class="path2"></span>-->
                                <!--                <span class="path3"></span>-->
                                <!--                <span class="path4"></span>-->
                                <!--                <span class="path5"></span>-->
                                <!--            </i>-->
                                <!--        </span>-->
                                <!--        <span class="menu-title fw-bold">Trash</span>-->
                                <!--    </span>-->
                                    <!--end::Trash-->
                                <!--</div>-->
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </div>
                        <!--end::Aside content-->
                    </div>
                    <!--end::Sticky aside-->
                </div>
                <!--end::Sidebar-->
                <!--begin::Content-->
                <div class="flex-lg-row-fluid ms-lg-7 ms-xl-10 mb-10">
                    <!--begin::Card-->
                    <div class="card">
                        <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                            <!--begin::Actions-->
                            <div class="d-flex flex-wrap gap-2">
                                <!--begin::Checkbox-->
                                <!--end::Checkbox-->
                                <!--begin::Reload-->
                                <a href="#" class="btn btn-sm btn-icon btn-light btn-active-light-primary badge-custom-bg" data-bs-toggle="tooltip" data-bs-dismiss="click" data-bs-placement="top" title="Reload"
                                onclick="location.reload()"
                                >
                                    <i class="ki-duotone ki-arrows-circle fs-2 text-color">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </a>
                                <!--end::Reload-->
                                <!--begin::Delete-->
                                <!--<a href="#" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-bs-toggle="tooltip" data-bs-dismiss="click" data-bs-placement="top" aria-label="Archive" data-bs-original-title="Archive" data-kt-initialized="1" title="Archive">-->
                                <!--    <i class="ki-duotone ki-sms fs-2"><span class="path1"></span><span class="path2"></span></i> </a>-->
                                <!--end::Delete-->
                                <!--begin::Filter-->
                                <div>
                                    <!--<a href="#" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start">-->
                                    <!--    <i class="ki-duotone ki-down fs-2"></i>-->
                                    <!--</a>-->
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-inbox-listing-filter="show_all">All</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-inbox-listing-filter="show_read">Read</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-inbox-listing-filter="show_unread">Unread</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-inbox-listing-filter="show_starred">Starred</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-inbox-listing-filter="show_unstarred">Unstarred</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </div>
                                <!--end::Filter-->
                            </div>
                            <!--end::Actions-->
                            <!--begin::Actions-->
                            <div class="d-flex align-items-center flex-wrap gap-2">
                                <!--begin::Search-->
                                <div class="d-flex align-items-center position-relative">
                                    <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-4 text-color">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                    <input type="text" data-kt-inbox-listing-filter="search" class="form-control form-control-sm form-control-solid mw-100 min-w-125px min-w-lg-150px min-w-xxl-200px ps-11 btn-dark-primary" placeholder="Search" />
                                </div>
                                <!--end::Search-->
                                <!--begin::Toggle-->
                                <a href="#" class="btn btn-sm btn-icon btn-color-primary btn-light btn-active-light-primary d-lg-none" data-bs-toggle="tooltip" data-bs-dismiss="click" data-bs-placement="top" title="Toggle inbox menu" id="kt_inbox_aside_toggle">
                                    <i class="ki-duotone ki-burger-menu-2 fs-3 m-0 text-color">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                        <span class="path5"></span>
                                        <span class="path6"></span>
                                        <span class="path7"></span>
                                        <span class="path8"></span>
                                        <span class="path9"></span>
                                        <span class="path10"></span>
                                    </i>
                                </a>
                                <!--end::Toggle-->
                            </div>
                            <!--end::Actions-->
                        </div>
                        <div class="card-body p-0 table-custom-layout text-color">
                            <!--begin::Table-->
                        
                                    <livewire:message-list-admin/>
                              
                            <!--end::Table-->
                        </div>
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Inbox App - Messages -->
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
<!--begin::Modals-->
<!--end::Modals-->
<!--begin::Javascript-->
<script>
    var hostUrl = "assets/";
</script>
@endsection
@section('customJs')

<script>
//   alert('ok');
function handleTableSearch() {
    var searchText = $('[data-kt-inbox-listing-filter="search"]').val().toLowerCase();
    console.log(searchText)
    $('#kt_table_inbox_message tbody tr').each(function() {
        console.log(this)
        var rowText = $(this).text().toLowerCase();
        if (rowText.indexOf(searchText) === -1) {
            $(this).hide();
        } else {
            $(this).show();
        }
    });
}

$('[data-kt-inbox-listing-filter="search"]').on('input', function() {
    handleTableSearch();
});
</script>

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">

<script>
    $(document).ready(function () {
        // Initialize DataTables
        var table = $('#kt_table_inbox_message').DataTable();

        // Attach the search handler to the input change event
        $('[data-kt-user-table-filter="search"]').on('input', function () {
            handleTableSearch();
        });

        // Filter form submission
        $('[data-kt-user-table-filter="filter"]').on('click', function (e) {
            e.preventDefault();

            // Get filter values
            var orderId = $('input[name="order-id"]').val();
            var message = $('input[name="message"]').val();
            var lastModified = $('input[name="last-modified"]').val();
            var status = $('input[name="status"]').val();

            // Apply filters
            table.columns(1).search(orderId).draw();
            table.columns(2).search(message).draw();
            table.columns(3).search(lastModified).draw();
            table.columns(4).search(status).draw();
        });

        // Reset filter form
        $('[data-kt-user-table-filter="reset"]').on('click', function (e) {
            e.preventDefault();

            // Reset input fields
            $('input[name="order-id"]').val('');
            $('input[name="message"]').val('');
            $('input[name="last-modified"]').val('');
            $('input[name="status"]').val('');

            // Clear filters
            table.columns().search('').draw();
        });

        function handleTableSearch() {
            // Get the search input value
            var searchText = $('[data-kt-user-table-filter="search"]').val().toLowerCase();

            // Loop through each table row
            $('#kt_table_inbox_message tbody tr').each(function () {
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
    });
</script>



@endsection

