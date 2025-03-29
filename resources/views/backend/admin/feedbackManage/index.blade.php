@extends('custom_layout.master')
@section('main_content')

    <!--begin::Content wrapper-->
    <div class="d-flex flex-column flex-column-fluid">
        <!--begin::Toolbar-->
        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <!--begin::Toolbar container-->
            <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                <!--begin::Page title-->
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                    <!--begin::Title-->
                    <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0 fs-color-white custom-fs-23">
                        Feedback Messages</h1>
                    <!--end::Title-->
                    <!--begin::Breadcrumb-->
                    <!-- <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <li class="breadcrumb-item text-muted">
                            <a href="" class="text-muted text-hover-primary fs-color-white custom-fs-13">Feedback Messages</a>
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
        <div id="kt_app_content" class="app-content flex-column-fluid manage-custom">
            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container container-xxl">
                <!--begin::Card-->



                <div class="card card-flush mb-10 card-custom-bg">
                    <!--begin::Card header-->
                    <div class="card-header pt-8">
                        <div class="card-title">
                            <!--begin::Search-->
                            <div class="d-flex align-items-center position-relative my-1">
                                <i class="ki-duotone ki-magnifier fs-1 position-absolute ms-6">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                                <input type="text" id="searchInput" data-kt-filemanager-table-filter="search"
                                    class="form-control form-control-solid w-250px ps-15 btn-dark-primary" placeholder="Search" />
                            </div>
                            <!--end::Search-->
                        </div>

                    </div>


                    <!--begin::Table-->
                    <table id="kt_file_manager_list" data-kt-filemanager-table="files"
                        class="table align-middle table-row-dashed fs-6 gy-5 px-10 ">
                        <thead>
                            <tr class="text-start text-white fw-bold fs-7 text-uppercase gs-0">

                                <th class="min-w-50px sorting_disabled" rowspan="1" colspan="1"
                                    style="width: 50px;">#</th>
                                <th class="min-w-150px">
                                    Order ID
                                </th>
                                <th class="min-w-150px">
                                    Feedback
                                </th>

                                <th class="w-125px sorting_disabled" rowspan="1" colspan="1" style="width: 125px;">
                                    Action</th>
                            </tr>
                        </thead>
                        <tbody class="fw-semibold text-gray-600">

                            @if ($feedbacks->isNotEmpty())
                                @foreach ($feedbacks as $key => $feed)
                                    <tr class="odd">

                                        <td class="text-white">{{ $key + 1 }}</td>
                                        <td class="text-white">{{ $feed->order_id}}</td>
                                        <td class="text-white">{!! $feed->feedback !!}</td>


                                        <td class="" data-kt-filemanager-table="action_dropdown">
                                            <div class="d-flex">
                                                <!--begin::More-->
                                                <div class="ms-2">
                                                    <button type="button"
                                                        class="btn btn-sm btn-icon badge-custom-bg"
                                                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                        <i class="ki-duotone ki-dots-square fs-5 m-0 text-white">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            <span class="path3"></span>
                                                            <span class="path4"></span>
                                                        </i>
                                                    </button>
                                                    <!--begin::Menu-->
                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4 badge-custom-bg"
                                                        data-kt-menu="true">
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3 text-white"
                                                            data-bs-toggle="modal" data-bs-target="#view_feedback{{$feed->id}}"
                                                            >View</a>
                                                        </div>
                                                        <!--end::Menu item-->


                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <form id="delete_feedback" action="{{route('admin.destroy.feedback', $feed->id)}}" method="POST" style="display: none;">
                                                            @csrf
                                                            @method('delete')
                                                        </form>
                                                        <a href="#" class="menu-link px-3 text-white"  onclick="event.preventDefault(); document.getElementById('delete_feedback').submit();">Delete</a>

                        
                                    
                                                            
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu-->
                                                </div>
                                                <!--end::More-->
                                            </div>
                                        </td>
                                    </tr>

                                    <div class="modal fade" id="view_feedback{{$feed->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content badge-custom-bg ">
                                                <div class="modal-header">
                                                    <h5 class="modal-title fs-color-white custom-fs-23" id="exampleModalLabel">Feedback</h5>
                                                    <button type="button" class="btn-close fs-color-theme" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    
                                                    <p class="text-muted fs-color-white custom-fs-13">Order#ID: {{$feed->order_id}}</p>
                                                    <p class="fs-color-white custom-fs-13">{{$feed->feedback}}</p>
                                                    
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="reset" class="btn btn-dark-primary me-3" data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                @endforeach
                            @else
                                <tr>
                                    <td colspan="4">No feedbacks found!</td>
                                </tr>
                            @endif

                        </tbody>
                    </table>
                    <!--end::Table-->
                </div>
                <!--end::Card body-->
            </div>

            <!--end::Card-->
            <!--begin::Card-->

            <!--end::Card-->
            <!--begin::Modals-->


            

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

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">

    <script>
    $(document).ready(function () {
        // Initialize DataTables
        var table = $('#kt_file_manager_list').DataTable();

        // Attach the search handler to the input change event
        $('#searchInput').on('input', function () {
            handleTableSearch();
        });

        function handleTableSearch() {
            // Get the search input value
            var searchText = $('#searchInput').val().toLowerCase();

            // Loop through each table row
            $('#kt_file_manager_list tbody tr').each(function () {
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
