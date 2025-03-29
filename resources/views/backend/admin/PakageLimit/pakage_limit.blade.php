@extends('custom_layout.master')
@section('main_content')


<!--begin::App-->
<meta name="csrf-token" content="{{ csrf_token() }}">

<!--begin::Content wrapper-->
<div class="d-flex flex-column flex-column-fluid">
    <!--begin::Toolbar-->
    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
        <!--begin::Toolbar container-->
        <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                <!--begin::Title-->
                <h1 class="page-heading d-flex text-gray-900 fw-bold fs-1 flex-column justify-content-center my-0 fs-color-white custom-fs-23">Pakage Limit</h1>
                <!--end::Title-->

            </div>
            <!--end::Page title-->
            <!--begin::Actions-->
            <div class="d-flex align-items-center gap-2 gap-lg-3">


                <!--begin::Primary button-->
                {{-- <a href="#" class="btn btn-sm fw-bold badge-custom-bg" data-bs-toggle="modal" data-bs-target="#kt_modal_academic_order">Pakage Limit Order</a> --}}
                <!--end::Primary button-->
            </div>
            <!--end::Actions-->
        </div>
        <!--end::Toolbar container-->
    </div>
    <!--end::Toolbar-->
    <!--begin::Content-->

    <div id="kt_app_content" class="app-content flex-column-fluid ">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-xxl">
            <div class="d-flex justify-content-center">
                <!--begin::Card-->
                <div class="card col-md-7 cardbody card-custom-bg" >
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
                                <input type="text" data-kt-user-table-filter="search" class="form-control form-control-solid w-250px ps-13 btn-dark-primary" placeholder="Search" />
                            </div>
                            <!--end::Search-->
                        </div>
                        <!--begin::Card title-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body py-4">
                        <!--begin::Table-->
                        <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_new_orders">
                            <thead>
                                <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                    <!--<th class="w-30px pe-2 pb-8">-->
                                    <!--    <div class="form-check form-check-sm form-check-custom form-check-solid me-3">-->
                                    <!--        <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_table_users .form-check-input" value="1" />-->
                                    <!--    </div>-->
                                    <!--</th>-->
                                    <th class="min-w-80px fw_800 pb-8">Pakage Limit</th>
                                    <th class="min-w-80px fw_800 pb-8">consum Limit</th>
                                    <th class="min-w-80px fw_800 pb-8">Renaming Limit</th>
                                    <th class="min-w-50px fw_800 pb-8">Action</th>

                                </tr>

                            </thead>
                            <tbody class="text-gray-600 fw-semibold">

                                @if($papers)
                                @foreach ($papers as $paper )
                                    

                                <tr>
                                    <!--<td>-->
                                    <!--    <div class="form-check form-check-sm form-check-custom form-check-solid">-->
                                    <!--        <input class="form-check-input" type="checkbox" value="1" />-->
                                    <!--    </div>-->
                                    <!--</td>-->
                                    <td class="text-white">  {{ $paper->total_page}}</td>
                                    <td class="text-white">  {{ $paper->consum}}</td>
                                    <td class="text-white">  {{ $paper->renaming}}</td>
                                    <td><a href="#" class="btn badge-custom-bg btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4 badge-custom-bg" data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                
                                                <a href="#" class="menu-link d-flex justify-content-center px-3 edit1 text-white" data-bs-toggle="modal" data-bs-target="#kt_modal_academic_order_edit">Edit</a>
                                            
                                                <input type="hidden" value="{{ $paper->total_page}}" id="title_name">
                                                <input type="hidden" value="{{ $paper->id}}" id="title_id">
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                          
                                            
                                            {{-- <div class="menu-item px-3">
                                           
                                                <a href="#" class="menu-link d-flex justify-content-center px-3 text-white" onclick="confirmDelete({{ $paper->id }})">Delete</a>
                                            </div> --}}
                                            <!--end::Menu item-->
                                        </div>
                                    </td>
                                </tr>
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
<div class="modal fade" id="kt_modal_academic_order" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        {{-- <form action="{{ url('admin/pakage_limit/store') }}" method="POST" enctype="multipart/form-data">
            @csrf --}}
        <form >
           
            
        <div class="modal-content badge-custom-bg">
            <div class="modal-header">
                <h5 class="modal-title text-white" id="exampleModalLabel">Pakage Limit Pages</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!--begin::Label-->
                <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                    <span class="required text-white">Pakage Limit Pages</span>
                    <span class="ms-1" data-bs-toggle="tooltip" title="Specify your unique app name">
                        <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>
                </label>
                <!--end::Label-->
                <!--begin::Input-->
                <input type="text" class="form-control form-control-lg form-control-solid titlename btn-dark-primary" 
                        id="title"  
                        name="title" 
                        placeholder="Pakage Limit Pages..." 
                        value="" />
                <!--end::Input-->
            </div>
            <div class="modal-footer">
                
                <button type="button" class="btn btn-dark-primary formatclick">Save</button>
            </div>
        </div>
        </form>
    </div>
</div>

<div class="modal fade editmodel" id="kt_modal_academic_order_edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form  class="form-horizontal"> 
       
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Pakage Limit</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!--begin::Label-->
                <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                    <span class="required">Pakage Limit</span>
                    <span class="ms-1" data-bs-toggle="tooltip" title="Specify your unique app name">
                        <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>
                </label>
                <!--end::Label-->
                <!--begin::Input-->
                <input type="text" class="form-control form-control-lg form-control-solid titleset" name="title" placeholder="Pakage Limit" value="" />
                <input type="hidden" class="form-control form-control-lg form-control-solid titlesetid" name="titleid" placeholder="Pakage Limit" value="" />
                <!--end::Input-->

            </div>
            <div class="modal-footer">
                
                <button type="button" class="btn btn-primary format_changes">Save changes</button>
            </div>
        </div>
    </div>
    </form>
</div>
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
                    type: 'get',
                    // url: '/admin/pakage_limit/delete/' + id,
                   
                    url: "{{ route('admin.pakage_limit.destroy', ['id' => ':id']) }}".replace(':id', id),
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



<script>
    $(document).ready(function() {



        $(".edit1").click(function () {
        // Find the common ancestor div for the clicked element
        var container = $(this).closest('.menu-item');

        // Find the value of the hidden input with the class "title" inside the container
        var title = container.find('#title_name').val();

        // Find the value of the hidden input with the class "title_id" inside the container
        var titleId = container.find('#title_id').val();
        // console.log(titleId);
        $('.titleset').val('');
        $('.titlesetid').val('');
        $('.titleset').val(title);
        $('.titlesetid').val(titleId);

    // Display an alert with the values

});


        


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
<script>


    //Reuest Post Data store 

$(document).ready(function (){
        $('.formatclick').on('click', function (){
            var titlename = $('.titlename').val();
            // alert(titlename);
           
          
            $.ajax({
                url: '{{ url("admin/pakage_limit/store") }}',
                type: 'POST',
                data: {'total_page' : titlename},
                dataType: 'json',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    console.log(response);
                    Swal.fire('Success!', response.success, 'success');
                    $('#title').val('');
                    location.reload();
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
            });


            
        });


//Request Post Edit
        $('.format_changes').on('click', function (){
            var title_id = $('.titlesetid').val();
            var title_name = $('.titleset').val();
            // alert(titlename);
           
          
            $.ajax({
                url: '{{ url("admin/pakage_limit/update") }}',
                type: 'POST',
                data: {
                        'title_id': title_id,
                        'total_page': title_name
                    },
                dataType: 'json',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    console.log(response);
                    Swal.fire('Success!', response.success, 'success');
                location.reload();
                    // $('.editmodel').modal('hide');

                    // var targetDiv = $('.cardbody');
                    // var contentUrl = '/admin/pakage_limits'; // Replace with the actual URL

                    // // Use jQuery load to fetch and update the content
                    // targetDiv.load(contentUrl)
                   
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
            });


            
        });




        });
</script>








@endsection
<!--begin::Global Javascript Bundle(mandatory for all pages)-->
<!--end::Custom Javascript-->
<!--end::Javascript-->