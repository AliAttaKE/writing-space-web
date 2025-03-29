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
                    <h1 class="page-heading d-flex text-gray-900 fw-bold fs-1 flex-column justify-content-center my-0 fs-color-white custom-fs-23">
                        Library Access</h1>
                    <!--end::Title-->

                </div>
                <!--end::Page title-->
                <!--begin::Actions-->
                <div class="d-flex align-items-center gap-2 gap-lg-3">
                    <!--begin::Secondary button-->
                    <!--end::Secondary button-->
                    <!--begin::Primary button-->
                    <a href="{{ route('admin.library.create') }}" class="btn btn-sm fw-bold badge-custom-bg ">Add Library</a>
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
            @if(!empty(session('success')))
                <div>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{session('success')}}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    </div>
                @endif
                
                <!--begin::Card-->
                <div class="card mb-10 card-custom-bg">
                    <!--begin::Page title-->
                    <div class="page-title d-flex flex-column justify-content-center pt-6 px-8 flex-wrap me-3">
                        <!--begin::Title-->
                        <h3 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0 fs-color-white custom-fs-23">
                            Manage Papers</h3>
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
                                <input type="text" data-kt-user-table-filter="search"
                                    class="form-control form-control-solid w-250px ps-13 btn-dark-primary" placeholder="Search" />
                            </div>
                            <!--end::Search-->
                        </div>
                        <!--begin::Card title-->
                        <!--begin::Card toolbar-->
                        <div class="card-toolbar">
                            <!--begin::Toolbar-->
                            <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                                <!--begin::Filter-->
                                {{-- <button type="button" class="btn badge-custom-bg me-3" data-kt-menu-trigger="click"
                                    data-kt-menu-placement="bottom-end">
                                    <i class="ki-duotone ki-filter fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>Filter</button> --}}
                                <!--begin::Menu 1-->
                                {{-- <div class="menu menu-sub menu-sub-dropdown w-300px w-md-325px badge-custom-bg" data-kt-menu="true">
                                    <!--begin::Header-->
                                    <div class="px-7 py-5">
                                        <div class="fs-5 text-white fw-bold">Filter Options</div>
                                    </div>
                                    <!--end::Header-->
                                    <!--begin::Separator-->
                                    <div class="separator border-gray-200"></div>
                                    <!--end::Separator-->
                                    <!--begin::Content-->
                                    <form
                                            id="filterForm" 
                                            action="{{ route('admin.library.index') }}" 
                                            method="GET"
                                            enctype="multipart/form-data">

                                        <div class="px-7 py-5" data-kt-user-table-filter="form">
                                            <!--begin::Input group-->
                                            <div class="mb-3">
                                                <label class="form-label fs-6 fw-semibold text-white">Paper/Title:</label>
                                                <input type="text" placeholder="Paper Title" name="paper_title"
                                                value="{{Request::get('paper_title')}}"
                                                    autocomplete="off" class="form-control bg-transparent btn-dark-primary" />
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="mb-3">
                                                <label class="form-label fs-6 fw-semibold text-white">Subject/Topic:</label>
                                                <input type="text" placeholder="Subject Topic" name="subject_topic"
                                                value="{{Request::get('subject_topic')}}"
                                                    autocomplete="off" class="form-control bg-transparent btn-dark-primary" />
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="mb-3">
                                                <label class="form-label fs-6 fw-semibold text-white">Paper Type:</label>
                                                <input type="text" placeholder="Paper Type" name="paper_type"
                                                value="{{Request::get('paper_type')}}"
                                                    autocomplete="off" class="form-control bg-transparent btn-dark-primary" />
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="mb-3">
                                                <label class="form-label fs-6 fw-semibold text-white">Word Count:</label>
                                                <input type="text" placeholder="Word Count" name="word_count"
                                                value="{{Request::get('word_count')}}"
                                                    autocomplete="off" class="form-control bg-transparent btn-dark-primary" />
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="mb-3">
                                                <label class="form-label fs-6 fw-semibold text-white">Citation Style:</label>
                                                <input type="text" placeholder="Citation Style" name="citation_style"
                                                value="{{Request::get('citation_style')}}"
                                                    autocomplete="off" class="form-control bg-transparent btn-dark-primary" />
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Actions-->
                                            <div class="d-flex justify-content-end">
                                                <button type="reset"
                                                    class="btn btn-dark-primary fw-semibold me-2 px-6"
                                                    onclick="window.location.href = '{{route('admin.library.index')}}' "
                                                    >Reset</button>
                                                <button type="submit" class="btn btn-dark-primary fw-semibold px-6"
                                                    >Apply</button>
                                            </div>
                                            <!--end::Actions-->
                                        </div>
                                    </form>
                                    <!--end::Content-->
                                </div> --}}
                                <!--end::Menu 1-->
                                <!--end::Filter-->
                                <!--begin::Export-->
                                <button type="button" class="btn badge-custom-bg me-3" 
                                    {{-- data-bs-toggle="modal" data-bs-target="#kt_modal_export_users" --}}
                                    onclick="window.location.href='{{ route('admin.export.libraries') }}'"
                                    
                                    >
                                    <i class="ki-duotone ki-exit-up fs-2 text-white">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>Export</button>
                                <!--end::Export-->
                            </div>
                            <!--end::Toolbar-->
                            <!--begin::Group actions-->
                            <div class="d-flex justify-content-end align-items-center d-none"
                                data-kt-user-table-toolbar="selected">
                                <div class="fw-bold me-5">
                                    <span class="me-2" data-kt-user-table-select="selected_count"></span>Selected
                                </div>
                                <button type="button" class="btn btn-danger"
                                    data-kt-user-table-select="delete_selected">Delete Selected</button>
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
                                            <div class="btn btn-icon btn-sm btn-active-icon-primary"
                                                data-bs-dismiss="modal" aria-label="Close">
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
                                                <select name="role" data-control="select2"
                                                    data-placeholder="Select Status" data-hide-search="true"
                                                    class="form-select form-select-solid fw-bold">
                                                    <option></option>
                                                    <option value="admin">Admin</option>
                                                    <option value="customer">Customer</option>
                                                </select>
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="fv-row mb-10">
                                                <!--begin::Label-->
                                                <label class="required fs-6 fw-semibold form-label mb-2">Select Export
                                                    Format:</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <select name="format" data-control="select2"
                                                    data-placeholder="Select a format" data-hide-search="true"
                                                    class="form-select form-select-solid fw-bold">
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
                                                <button type="reset" class="btn btn-light me-3"
                                                    data-bs-dismiss="modal">Discard</button>
                                                <button type="submit" class="btn btn-primary"
                                                    data-kt-users-modal-action="submit">
                                                    <span class="indicator-label">Submit</span>
                                                    <span class="indicator-progress">Please wait...
                                                        <span
                                                            class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
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
                        <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_manage_paper">
                            <thead>
                                <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                    {{-- <th class="w-10px pe-2">
                                        <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                            <input class="form-check-input" type="checkbox" data-kt-check="true"
                                                data-kt-check-target="#kt_table_users .form-check-input" value="1" />
                                        </div>
                                    </th> --}}
                                    <th class="min-w-125px">Paper/Title</th>
                                    <th class="min-w-125px">Subject/Topic</th>
                                    <th class="min-w-125px">Paper Type</th>
                                    {{-- <th class="min-w-125px">Word Count</th> --}}
                                    {{-- <th class="min-w-125px">Citation Style</th> --}}
                                    <th class="min-w-125px">Ai Report</th>
                                    <th class="min-w-125px">Plagiarism</th>
                                    <th class="min-w-100px">Status</th>
                                    <th class="min-w-100px">Actions</th>
                                </tr>
                                @foreach ($papers as $paper)
                            </thead>
                            <tbody class="text-white fw-semibold">
                                <tr>
                                    {{-- <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </div>
                                    </td> --}}


                                    <td>{{ $paper->paper_title }}</td>
                                    <td>{{ $paper->subject_topic }}</td>
                                    <td>{{ $paper->paper_type }}</td>
                                    {{-- <td>{{ $paper->word_count }}</td> --}}
                                    {{-- <td>
                                        {{ $paper->citation }}
                                    </td> --}}
                                    <td>
                                        {{ $paper->ai_report }}%
                                    </td>
                                    <td>
                                        {{ $paper->plagiarism }}%
                                    </td>
                                 
                                    <td>
                                        @if ($paper->status === 'Enable')
                                            <div class="badge badge-custom-bg fw-bold" id="enable">Enabled</div>
                                        @else
                                            <div class="badge badge-custom-bg fw-bold" id="enable">Disabled</div>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="#"
                                            class="btn badge-custom-bg btn-flex btn-center btn-sm"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded text-white badge-custom-bg fw-semibold fs-7 w-125px py-4"
                                            data-kt-menu="true">
                                            
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <!-- <button type="button" class="btn menu-link d-flex justify-content-center fs-7 w-100" data-bs-toggle="modal" data-bs-target="#kt_modal_add_user">Edit</button> -->
                                                <a href="{{ route('admin.library.edit', ['id' => $paper->id]) }}"
                                                    class="btn menu-link d-flex justify-content-center fs-7 w-100 text-white">Edit</a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link d-flex justify-content-center px-3 text-white"
                                                    onclick="confirmDelete({{ $paper->id }})">Delete</a>
                                            </div>
                                            <!--end::Menu item-->
                                            
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                </tr>
                                @endforeach
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

    <!--end::Modal -->
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
    <!--begin::Javascript-->
<script>
    @if (session()->has('success'))
        Swal.fire({
            icon: 'success',
            title: '{{ session()->get('success') }}'
        });
    @endif
</script>
<script>
    @if (session()->has('success'))
        toastr.success('{{ session()->get('success') }}');
    @endif
</script>

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
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
        // Function to handle table search
        function handleTableSearch() {
            // Get the search input value
            var searchText = $('[data-kt-user-table-filter="search"]').val().toLowerCase();
            console.log(searchText)
            // Loop through each table row
            $('#kt_table_manage_paper tbody tr').each(function() {
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
            $('#kt_table_manage_paper').dataTable();
            
        });
    </script>

    <script>
        function confirmDelete(id) {

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
                        type: "GET", // Change to DELETE
                        url: "{{ url('admin/library/delete/') }}/" + id, // Corrected URL
                        data: {
                            _token: "{{ csrf_token() }}",
                        },
                        success: function(response) {
                            console.log(response);
                            console.log('File deleted!');
                            Swal.fire('Deleted!', 'Your data has been deleted.', 'success');
                            window.location.reload();
                        },
                        error: function(xhr, status, error) {
                            console.error(xhr.responseText);
                            Swal.fire('Error!', 'An error occurred while deleting the data.', 'error');
                        }
                    });
                }
            });
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
    
@endsection
