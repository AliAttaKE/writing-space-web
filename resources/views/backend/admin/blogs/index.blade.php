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
            <div class="d-flex align-items-center gap-2 gap-lg-3">


                <!--begin::Primary button-->
                <a href="#" class="btn btn-sm fw-bold badge-custom-bg" data-bs-toggle="modal" data-bs-target="#kt_modal_academic_order">Add Blog</a>
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
                                    <th class="w-30px pe-2 pb-8">
                                        <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                            <input class="form-check-input custom-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_table_users .form-check-input" value="1" />
                                        </div>
                                    </th>
                                    <th class="min-w-80px fw_800 pb-8">Image</th>
                                    <th class="min-w-50px fw_800 pb-8">Title</th>
                                    <th class="min-w-80px fw_800 pb-8">Status</th>
                                    <th class="min-w-50px fw_800 pb-8">Action</th>

                                </tr>

                            </thead>
                            <tbody class="text-gray-600 fw-semibold">

                            @if($blogs)
                                @foreach ($blogs as $blog)

                                <tr>
                                    <td class="text-white">
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input custom-input" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <td class="text-white">  
                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                            <a href="#">
                                            <div class="symbol-label">
                                                <img src="{{asset('images/blogs/'.$blog->featured_image)}}" alt="Emma Smith" class="w-100">
                                            </div>
                                            </a>
                                        </div>
                                    </td>
                                    <td class="text-white">
                                      {{ $blog->title }}
                                    </td>
                                    <td class="text-white">
                                    {{ $blog->status}}                                     
                                    </td>
                                    <td><a href="#" class="btn badge-custom-bg btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                       
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4 badge-custom-bg" data-kt-menu="true">
                                          
                                            <div class="menu-item px-3">
                                                
                                                <a href="#" class="menu-link d-flex justify-content-center px-3 edit1 text-white" data-bs-toggle="modal" data-bs-target="#kt_modal_academic_order_edit{{$blog->id}}">Edit</a>
                                            
                                            </div>
                                          
                                          
                                            
                                            <div class="menu-item px-3">
                                           
                                                <a href="#" class="menu-link d-flex justify-content-center px-3 text-white" onclick="confirmDelete({{$blog->id}})">Delete</a>
                                            </div>
                                          
                                        </div>
                                    </td>
                                </tr>
                                <div class="modal fade" id="kt_modal_academic_order_edit{{$blog->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="{{route('admin.updateBlog', $blog->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-content badge-custom-bg">
                <div class="modal-header">
                    <h5 class="modal-title fs-color-white custom-fs-23" id="exampleModalLabel">Update blog</h5>
                    <button type="button" class="btn-close " data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                        <span class="required fs-color-white custom-fs-13">Title</span>
                        <span class="ms-1" data-bs-toggle="tooltip" title="Specify your unique app name">
                            <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>
                    </label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <input type="text" class="form-control form-control-lg form-control-solid titlename btn-dark-primary" 
                            id="title"  
                            name="title" 
                            placeholder="Blog Title" value="{{$blog->title}}" 
                             />
                    <!--end::Input-->
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                        <span class="required fs-color-white custom-fs-13">Short Description</span>
                        <span class="ms-1" data-bs-toggle="tooltip" title="Specify your unique app name">
                            <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>
                    </label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <div class="form-group">
                        <!-- <div class="editor" style="height: 300px;"></div> -->
                        <textarea class="form-control btn-dark-primary" name='short_description' id="short_description" >{{$blog->short_description}}</textarea>
                    </div>
                    <!--end::Input-->
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                        <span class="required fs-color-white custom-fs-13">Description</span>
                        <span class="ms-1" data-bs-toggle="tooltip" title="Specify your unique app name">
                            <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>
                    </label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <div class="form-group btn-dark-primary">
                        <!-- <div class="editor-2" style="height: 300px;"></div> -->
                        <textarea class="form-control" name='description' id="description" >{{$blog->description}}</textarea>
                    </div>
                    <!--end::Input-->
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                        <span class="required fs-color-white custom-fs-13">Meta Title</span>
                        <span class="ms-1" data-bs-toggle="tooltip" title="Specify your unique app name">
                            <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>
                    </label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <input type="text" class="form-control form-control-lg form-control-solid titlename btn-dark-primary" 
                            id="meta_title"  
                            name="meta_title" 
                            placeholder="Meta Title" 
                            value="{{$blog->meta_title}}"
                            />
                    <!--end::Input-->
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                        <span class="required fs-color-white custom-fs-13">Meta Description</span>
                        <span class="ms-1" data-bs-toggle="tooltip" title="Specify your unique app name">
                            <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>
                    </label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <div class="form-group">
                        <!-- <div class="editor-3" style="height: 300px;"></div> -->
                        <textarea class="form-control btn-dark-primary" name='meta_description' class="meta_description">{{$blog->meta_description}}</textarea>
                    </div>
                    <!--end::Input-->
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                        <span class="required fs-color-white custom-fs-13">Meta Keywords</span>
                        <span class="ms-1" data-bs-toggle="tooltip" title="Specify your unique app name">
                            <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>
                    </label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <input type="text" class="form-control form-control-lg form-control-solid titlename btn-dark-primary" 
                            id="meta_keyword"  
                            name="meta_keyword" 
                            placeholder="Meta Words" 
                            value="{{$blog->meta_keyword}}"
                             />
                    <!--end::Input-->
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                        <span class="required fs-color-white custom-fs-13">Status</span>
                        <span class="ms-1" data-bs-toggle="tooltip" title="Specify your unique app name">
                            <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>
                    </label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <select name="status" class="form-select form-select-solid btn-dark-primary"
                        data-control="select2" data-hide-search="true"
                        data-placeholder="Choose">
                        <option value="public" {{$blog->status == 'public' ? 'selected' : ''}}>Publish</option>
                        <option value="draft" {{$blog->status == 'draft' ? 'selected' : ''}}>Draft</option>


                    </select>
                    <!--end::Input-->
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                        <span class="required fs-color-white custom-fs-13">Category</span>
                        <span class="ms-1" data-bs-toggle="tooltip" title="Specify your unique app name">
                            <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>
                    </label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <select name="category_id" class="form-select form-select-solid btn-dark-primary"
                        data-control="select2" data-hide-search="true"
                        data-placeholder="Choose">
                        

                        @forelse($categories as $cate)
                        <option value="{{$cate->id}}" {{$blog->category_id == $cate->id ? 'selected' : ''}}>{{$cate->name}}</option>
                        @empty
                            <option value="1">Baby Products</option>
                            <option value="1">Toys & Games</option>
                        @endforelse
                        
                    </select>
                    <!--end::Input-->
                    
                    <div class="mt-3 mb-3">
                        <!--begin::Input-->
                   
                    
                    <input type="file" name="featured_image" />
                                 
                    <!--end::Input-->
                    </div>
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
<!--end::Scrolltop-->
<div class="modal fade" id="kt_modal_academic_order" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form id="create_blog" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-content badge-custom-bg">
                <div class="modal-header">
                    <h5 class="modal-title fs-color-white custom-fs-23" id="exampleModalLabel">Add blog</h5>
                    <button type="button" class="btn-close " data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                        <span class="required fs-color-white custom-fs-13">Title</span>
                        <span class="ms-1" data-bs-toggle="tooltip" title="Specify your unique app name">
                            <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>
                    </label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <input type="text" class="form-control form-control-lg form-control-solid titlename btn-dark-primary" 
                            id="title"  
                            name="title" 
                            placeholder="Blog Title" 
                             />
                    <!--end::Input-->
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                        <span class="required fs-color-white custom-fs-13">Short Description</span>
                        <span class="ms-1" data-bs-toggle="tooltip" title="Specify your unique app name">
                            <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>
                    </label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <div class="form-group">
                        <!-- <div class="editor" style="height: 300px;"></div> -->
                        <textarea class="form-control btn-dark-primary" name='short_description' id="short_description" ></textarea>
                    </div>
                    <!--end::Input-->
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                        <span class="required fs-color-white custom-fs-13">Long Description</span>
                        <span class="ms-1" data-bs-toggle="tooltip" title="Specify your unique app name">
                            <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>
                    </label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <div class="form-group">
                        <!-- <div class="editor-2" style="height: 300px;"></div> -->
                        <textarea class="form-control btn-dark-primary" name='description' id="description" ></textarea>
                    </div>
                    <!--end::Input-->
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                        <span class="required fs-color-white custom-fs-13">Meta Title</span>
                        <span class="ms-1" data-bs-toggle="tooltip" title="Specify your unique app name">
                            <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>
                    </label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <input type="text" class="form-control form-control-lg form-control-solid titlename btn-dark-primary" 
                            id="meta_title"  
                            name="meta_title" 
                            placeholder="Meta Title" 
                            />
                    <!--end::Input-->
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                        <span class="required fs-color-white custom-fs-13">Meta Description</span>
                        <span class="ms-1" data-bs-toggle="tooltip" title="Specify your unique app name">
                            <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>
                    </label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <div class="form-group">
                        <!-- <div class="editor-3" style="height: 300px;"></div> -->
                        <textarea class="form-control btn-dark-primary" name='meta_description' class="meta_description"></textarea>
                    </div>
                    <!--end::Input-->
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                        <span class="required fs-color-white custom-fs-13">Meta Keywords</span>
                        <span class="ms-1" data-bs-toggle="tooltip" title="Specify your unique app name">
                            <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>
                    </label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <input type="text" class="form-control form-control-lg form-control-solid titlename btn-dark-primary" 
                            id="meta_keyword"  
                            name="meta_keyword" 
                            placeholder="Meta Words" 
                             />
                    <!--end::Input-->
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                        <span class="required fs-color-white custom-fs-13">Status</span>
                        <span class="ms-1" data-bs-toggle="tooltip" title="Specify your unique app name">
                            <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>
                    </label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <select name="status" class="form-select form-select-solid btn-dark-primary"
                        data-control="select2" data-hide-search="true"
                        data-placeholder="Choose">
                        <option value="public">Publish</option>
                        <option value="draft">Draft</option>

                    </select>
                    <!--end::Input-->
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                        <span class="required fs-color-white custom-fs-13">Category</span>
                        <span class="ms-1" data-bs-toggle="tooltip" title="Specify your unique app name">
                            <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>
                    </label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <select name="category_id" class="form-select form-select-solid btn-dark-primary"
                        data-control="select2" data-hide-search="true"
                        data-placeholder="Choose">
                        

                        @forelse($categories as $cate)
                            <option value="{{$cate->id}}">{{$cate->name}}</option>
                        @empty
                            <option value="1">Baby Products</option>
                            <option value="1">Toys & Games</option>
                            <option value="1">Baby Products</option>
                            <option value="1">Toys & Games</option>
                            <option value="1">Baby Products</option>
                            <option value="1">Toys & Games</option>
                        @endforelse
                        
                    </select>
                    <!--end::Input-->
                    
                    <div class="mt-3 mb-3">
                        <!--begin::Input-->
                    <label class="btn btn-sm fw-bold btn-dark-primary" for="choose-file">upload image</label>
                                    <input type="file" name="featured_image" id="choose-file" class="d-none file_1">
                                    <label for="" class="file-name_1"></label>
                    <!--end::Input-->
                    </div>
                </div>
                <div class="modal-footer">
                    
                    <button type="submit" class="btn badge-custom-bg-2 formatclick">Save</button>
                </div>
            </div>
        </form>
        
    </div>
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





<!-- <script>
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
                    // url: '/admin/paper_format/delete/' + id,
                   
                    url: "{{ route('admin.paper_format.destroy', ['id' => ':id']) }}".replace(':id', id),
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
</script> -->





<!-- Add jQuery library -->





<script>


    //Reuest Post Data store 

$(document).ready(function (){
$('#create_blog').on('submit', function (e){
    // alert('done');
    e.preventDefault();

    var formData = new FormData($(this)[0]);
    
    $.ajax({
        url: '{{ route('admin.createBlog') }}',
        type: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function(response) {
            console.log(response);
            Swal.fire('Success!', response.message, 'success');
            $('#create_blog')[0].reset();
            $('#kt_modal_academic_order').modal('hide');
            // location.reload();
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
                url: '{{ url("admin/paper_format/update") }}',
                type: 'POST',
                data: {
                        'title_id': title_id,
                        'title': title_name
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
                    // var contentUrl = '/admin/paper_formats'; // Replace with the actual URL

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
                    url: '/admin/deleteBlog/' + id,
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
        
        
        
        


      
//   }  //delete post 
//     function confirmDelete(id)
//  {
//   console.log(id)
//       Swal.fire({
//           title: 'Are you sure?',
//           text: 'You will not be able to recover this data!',
//           icon: 'warning',
//           showCancelButton: true,
//           confirmButtonColor: '#d33',
//           cancelButtonColor: '#3085d6',
//             confirmButtonText: 'Yes, delete it!'
//       }).then((result) => {
//             if (result.isConfirmed) {


//               $.ajax({
//                   type: 'get',
//                   url: '/admin/deleteBlog/' + id,
//                     data: id, // Assuming id is a parameter you want to send
//                   dataType: 'json',
//                   success: function (response) {
//                         // Handle the success response here
//                       console.log(response);
//                       location.reload(true);
//                   },
//                   error: function (error) {
//                       // Handle any errors here
//                      console.error(error);
//                   }
//               });
     

//               Swal.fire('Deleted!', 'Your data has been deleted.', 'success');
//          }
//       });

</script>





 <!--function confirmDelete(id)-->
 <!--{-->
 <!--  console.log(id)-->
 <!--       Swal.fire({-->
 <!--           title: 'Are you sure?',-->
 <!--           text: 'You will not be able to recover this data!',-->
 <!--           icon: 'warning',-->
 <!--           showCancelButton: true,-->
 <!--           confirmButtonColor: '#d33',-->
 <!--           cancelButtonColor: '#3085d6',-->
 <!--           confirmButtonText: 'Yes, delete it!'-->
 <!--       }).then((result) => {-->
 <!--           if (result.isConfirmed) {-->


 <!--               $.ajax({-->
 <!--                   type: 'get',-->
 <!--                   url: '/admin/deleteBlog/' + id,-->
 <!--                   data: id, // Assuming id is a parameter you want to send-->
 <!--                   dataType: 'json',-->
 <!--                   success: function (response) {-->
 <!--                       // Handle the success response here-->
 <!--                       console.log(response);-->
 <!--                       location.reload(true);-->
 <!--                   },-->
 <!--                   error: function (error) {-->
 <!--                       // Handle any errors here-->
 <!--                       console.error(error);-->
 <!--                   }-->
 <!--               });-->
     

 <!--               Swal.fire('Deleted!', 'Your data has been deleted.', 'success');-->
 <!--           }-->
 <!--       });-->
 <!--   }-->






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