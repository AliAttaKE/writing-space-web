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
                <h1 class="page-heading d-flex text-gray-900 fw-bold fs-1 flex-column justify-content-center my-0 fs-color-white custom-fs-23">Blog</h1>
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

    <div id="kt_app_content" class="app-content flex-column-fluid ">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-xxl">
            <div class="d-flex justify-content-center">
                <!--begin::Card-->
                <div class="card col-12 cardbody card-custom-bg" >
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
                                <!--<input type="text" data-kt-user-table-filter="search Blog" class="form-control form-control-solid w-250px ps-13 btn-dark-primary" placeholder="Search" />-->
                                <input type="text" data-kt-user-table-filter="search" class="form-control form-control-solid w-250px ps-13 btn-dark-primary" placeholder="Search " />
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
                                   
                                    <th class="min-w-80px fw_800 pb-8">Total Package pages</th>
                                    <th class="min-w-50px fw_800 pb-8">Total Used pages</th>
                                    <th class="min-w-80px fw_800 pb-8">Total Remaining pages</th>
                                    <th class="min-w-50px fw_800 pb-8">Additional Pages Available for Purchase</th>
                                    <th class="min-w-50px fw_800 pb-8">Expire Date</th>
                                    <th class="min-w-50px fw_800 pb-8">Status</th>
                                    <th class="min-w-50px fw_800 pb-8">Action</th>

                                </tr>

                            </thead>
                            <tbody class="text-gray-600 fw-semibold">

                                @if(!empty($User_Subscription))
                                @foreach ($User_Subscription as $us)

                                <tr>
                                
                                   
                                    <td class="text-white">
                                      {{ $us->total_pages }}
                                    </td>
                                    <td class="text-white">
                                        {{(float)$us->total_pages - (float)$us->remaining_pages}}                                   
                                    </td>
                                    <td class="text-white">
                                        {{(float)$us->remaining_pages}}                                  
                                    </td>
                                    <td class="text-white">
                                        {{(float)$us->rollover_pages}}                                  
                                    </td>
                                    <td class="text-white">
                                        {{ substr($us->due_date,0,11) }}                                 
                                    </td>
                                    <td class="text-white">
                                        @if($us->status == 'Active')
                                        <span  style="color:#17C653">{{$us->status}}</span>
                                    @else
                                        <span  style="color:#F8285A">{{$us->status}}</span>
                                    @endif                              
                                    </td>
                                    <td><a href="#" class="btn badge-custom-bg btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                       
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4 badge-custom-bg" data-kt-menu="true">
                                          
                                            <div class="menu-item px-3">
                                                
                                                <a href="#" class="menu-link d-flex justify-content-center px-3 edit1 text-white" data-bs-toggle="modal" data-bs-target="#kt_modal_academic_order_edit{{$us->id}}">Edit</a>
                                            
                                            </div>
                                          
                                          
                                            
                                            {{-- <div class="menu-item px-3">
                                           
                                                <a href="#" class="menu-link d-flex justify-content-center px-3 text-white" onclick="confirmDelete({{$us->id}})">Delete</a>
                                            </div> --}}
                                          
                                        </div>
                                    </td>
                                </tr>
                                <div class="modal fade" id="kt_modal_academic_order_edit{{$us->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <form action="{{route('admin.updatepkg', $us->id)}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="modal-content badge-custom-bg">
                                                <div class="modal-header">
                                                    <h5 class="modal-title fs-color-white custom-fs-23" id="exampleModalLabel">Update Package</h5>
                                                    <button type="button" class="btn-close " data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <!--begin::Label-->
                                                    <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                        <span class="required fs-color-white custom-fs-13">Total Package pages</span>
                                                        <span class="ms-1" data-bs-toggle="tooltip" title="Specify your unique app name">
                                                            <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>
                                                    </label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="text" class="form-control form-control-lg form-control-solid total_pages btn-dark-primary" 
                                                            id="total_pages"  
                                                            name="total_pages" 
                                                            placeholder=" total_pages" value="{{$us->total_pages}}" 
                                                             />
                                                
                                                  
                                                    <!--end::Input-->
                                                    <!--begin::Label-->
                                                    <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                        <span class="required fs-color-white custom-fs-13">Total Remaining pages</span>
                                                        <span class="ms-1" data-bs-toggle="tooltip" title="Specify your unique app name">
                                                            <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>
                                                    </label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="text" class="form-control form-control-lg form-control-solid remaining_pages btn-dark-primary" 
                                                            id="remaining_pages"  
                                                            name="remaining_pages" 
                                                            placeholder="Meta Title" 
                                                            value="{{$us->remaining_pages}}"
                                                            />
                                                
                                                    <!--end::Input-->
                                                    <!--begin::Label-->
                                                    <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                        <span class="required fs-color-white custom-fs-13">Additional Pages Available for Purchase</span>
                                                        <span class="ms-1" data-bs-toggle="tooltip" title="Specify your unique app name">
                                                            <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>
                                                    </label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="text" class="form-control form-control-lg form-control-solid rollover_pages btn-dark-primary" 
                                                            id="rollover_pages"  
                                                            name="rollover_pages" 
                                                            placeholder="Meta Words" 
                                                            value="{{$us->rollover_pages}}"
                                                             />
                                                    <!--begin::Label-->
                                                    {{-- <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                        <span class="required fs-color-white custom-fs-13">Expire Date</span>
                                                        <span class="ms-1" data-bs-toggle="tooltip" title="Specify your unique app name">
                                                            <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>
                                                    </label> --}}
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    {{-- <input 
                                                    type="date" 
                                                    class="form-control form-control-lg form-control-solid due_date btn-dark-primary" 
                                                    id="due_date"  
                                                    name="due_date" 
                                                    value="{{ $us->due_date ?? date('Y-m-d') }}" 
                                                    required
                                                /> --}}
                                                
                                                
                                                
                                                
                                                   
                                               
                                                </div>
                                                <div class="modal-footer">
                                                    
                                                    <button type="submit" class="btn badge-custom-bg-2 formatclick">Update</button>
                                                </div>
                                            </div>
                                        </form>
                                        
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


    //Reuest Post Data store 

$(document).ready(function (){

      
        
        
               //delete post 
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
                    url: '/admin/deletepkg/' + id,
                    data: id, // Assuming id is a parameter you want to send
                    dataType: 'json',
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






@endsection
<!--begin::Global Javascript Bundle(mandatory for all pages)-->
<!--end::Custom Javascript-->
<!--end::Javascript-->