@extends('custom_layout.customer')
@section('main_content')


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
                    Messages</h1>
                <!--end::Title-->
                <!--begin::Breadcrumb-->
                <!-- <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">

                    <li class="breadcrumb-item text-muted fs-color-white custom-fs-10">Message Management
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
                <div class="d-none d-lg-flex flex-column flex-lg-row-auto w-100 w-lg-200px" data-kt-drawer="true"
                    data-kt-drawer-name="inbox-aside" data-kt-drawer-activate="{default: true, lg: false}"
                    data-kt-drawer-overlay="true" data-kt-drawer-width="225px" data-kt-drawer-direction="start"
                    data-kt-drawer-toggle="#kt_inbox_aside_toggle">
                    <!--begin::Sticky aside-->
                    <div class="card card-flush mb-0 card-custom-bg message-summ">
                        <!--begin::Aside content-->
                        <div class="card-body px-10">
                            <!--begin::Button-->
                            <a href="{{route('customer.new-message')}}"
                                class="btn btn-primary fw-bold w-100 mb-8 badge-custom-bg">New Message</a>
                            <!--end::Button-->
                            <!--begin::Menu-->
                            <div
                                class="menu menu-column menu-rounded menu-state-bg menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary mb-10 ">
                                <!--begin::Menu item-->
                                <div class="menu-item mb-3">
                                    <!--begin::Inbox-->
                                    <span class="menu-link active card-custom-bg">
                                        <span class="menu-icon">
                                            <i class="ki-duotone ki-sms fs-2 me-3">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </span>
                                        <span class="menu-title fw-bold"><a
                                                href="{{route('customer.message-managememnt')}}"
                                                style="color: #fff">Inbox</a></span>
                                            <span class="badge badge-custom-bg">{{ $totalNew }}</span>
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
                    <div class="card card-custom-bg message-summ">

                        <livewire:message-list />
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



<script>
    //   alert('ok');
    function handleTableSearch() {
        var searchText = $('[data-kt-inbox-listing-filter="search"]').val().toLowerCase();
        console.log(searchText)
        $('#kt_inbox_listing tbody tr').each(function () {
            console.log(this)
            var rowText = $(this).text().toLowerCase();
            if (rowText.indexOf(searchText) === -1) {
                $(this).hide();
            } else {
                $(this).show();
            }
        });
    }


    $(document).ready(function () {
        // Initialize DataTables
        // var table = $('#kt_inbox_listing').DataTable();

        // // Attach the search handler to the input change event

        // // Filter form submission
        // $('[data-kt-user-table-filter="filter"]').on('click', function (e) {
        //     e.preventDefault();

        //     // Get filter values
        //     var orderId = $('input[name="order-id"]').val();
        //     var message = $('input[name="message"]').val();
        //     var lastModified = $('input[name="last-modified"]').val();
        //     var status = $('input[name="status"]').val();

        //     // Apply filters
        //     table.columns(1).search(orderId).draw();
        //     table.columns(2).search(message).draw();
        //     table.columns(3).search(lastModified).draw();
        //     table.columns(4).search(status).draw();
        // });

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

        // Initialize DataTables
        //var table = $('#kt_inbox_listing').DataTable();

        // Attach the search handler to the input change event
        $('#searchInput').on('input', function () {
            handleTableSearch();
        });

        function handleTableSearch() {
            // Get the search input value
            var searchText = $('#searchInput').val().toLowerCase();

            // Loop through each table row
            $('#kt_inbox_listing tbody tr').each(function () {
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
