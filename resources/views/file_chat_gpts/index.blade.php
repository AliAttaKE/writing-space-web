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
                <h1
                    class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0 text-color text-white">
                    File order Management</h1>
            
            </div>
<style>
    .butt-bg {
        background-color: #783afb !important;
        color: #fff !important;
    }
</style>
            <div class="mb-3">
                <a href="{{ route('file_chat_gpts.create') }}" class="btn btn-sm btn-primary butt-bg">Add New order File</a>
            </div>
            <!--end::Page title-->
        </div>
        <!--end::Toolbar container-->
    </div>

    @if(!empty(session('success')))
        <div>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{session('success')}}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    @endif

    @if ($errors->has('file'))
    <div class="alert alert-danger" role="alert">
        {{ $errors->first('file') }}
    </div>
@endif

    <!--end::Toolbar-->
    <!--begin::Content-->
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-xxl">
            <!--begin::Card-->
            <div class="card card-flush pb-0 bgi-position-y-center bgi-no-repeat mb-10">
                <!--begin::Card header-->
                <div class="card-header pt-10">
                    <div class="d-flex align-items-center">
                        <!--begin::Icon-->
                        <div class="symbol symbol-circle me-5">
                            <div
                                class="symbol-label bg-transparent text-primary border border-secondary border-dashed back-color">
                                <i class="ki-duotone ki-abstract-47 fs-2x text-primary text-color">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </div>
                        </div>
                        <!--end::Icon-->
                        <!--begin::Title-->
                        <div class="d-flex flex-column">
                            <h2 class="mb-1 text-color">Order File Management</h2>
                            <div class="text-muted fw-bold">
                                <a class="fs-color-yellow" href="#">Writing Space</a>
                                <span class="mx-3">|</span>
                              
                            </div>
                        </div>
                        <!--end::Title-->
                    </div>
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pb-0">
                    <!--begin::Navs-->
                    <div class="d-flex overflow-auto h-55px">
                        <ul
                            class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-semibold flex-nowrap">
                            <!--begin::Nav item-->
                            {{-- <li class="nav-item">
                                <a class="nav-link text-active-primary me-6 active">Files</a>
                            </li>
                            <!--end::Nav item-->
                            <!--begin::Nav item-->
                            <li class="nav-item">
                                <a class="nav-link text-active-primary me-6">Settings</a>
                            </li> --}}
                            <!--end::Nav item-->
                        </ul>
                    </div>
                    <!--begin::Navs-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
            <!--begin::Card-->
            @if ($files->isNotEmpty())


                <div class="card card-flush mb-10">
                    <!--begin::Card header-->
                    <div class="card-header pt-8">
                        <div class="card-title">
                            <!--begin::Search-->
                            <div class="d-flex align-items-center position-relative my-1">
                                <i class="ki-duotone ki-magnifier fs-1 position-absolute ms-6 text-color">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                                <input type="text" id="searchInput" data-kt-filemanager-table-filter="search"
                                    class="form-control form-control-solid w-250px ps-15 btn-dark-primary"
                                    placeholder="Search" />
                            </div>
                            <!--end::Search-->
                        </div>

                    </div>
                  
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body overflow-auto">
                        <!--begin::Table header-->
                        <div class="row flex-stack">
                            <div class="col-sm-10">
                                <!--begin::Folder path-->
                                <div class="badge badge-lg badge-light-primary mb-2 badge-custom-bg">
                                    <div class="d-flex align-items-center flex-wrap">
                                        <i class="ki-duotone ki-abstract-32 fs-2x me-3 text-white">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                        <a class="text-color" href=""> Writing Space</a>
                                        <i class="ki-duotone ki-right fs-2x mx-1 text-white"></i>

                                      
                                        <a class="text-color" href="#">Files</a>
                                        <i class="ki-duotone ki-right fs-2x mx-1 text-white"></i>

                                    </div>
                                </div>
                            </div>
                          
                        </div>
                        <!--end::Table header-->
                        <!--begin::Table-->
                        <form method="POST" action="{{ route('admin.complete.updateStatus') }}">
                @csrf
                @method('PUT')

              <button type="submit" class="btn badge-custom-bg me-5">Update Status</button>
    
                        <table id="kt_file_manager_list" data-kt-filemanager-table="files"
                            class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer">
                           <thead style="color: white;">
                               <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                <th class="min-w-70px fw_800 pb-8 sorting"><input class="form-check-input" type="checkbox" id="selectAll" style="background-size: unset !important;width: 20px; height: 20px;"></th>
                                    <th class="min-w-70px fw_800 pb-8 sorting" rowspan="1" colspan="1"
                                        style="width: 416.797px;">File Title</th>
                                        <th class="min-w-70px fw_800 pb-8 sorting" rowspan="1" colspan="1"
                                        style="width: 66.4062px;">Order no</th>
                                    <th class="min-w-70px fw_800 pb-8 sorting">
                                        File Type
                                    </th>
                                    <!--<th class="min-w-10px sorting_disabled" rowspan="1" colspan="1"-->
                                    <!--    style="width: 66.4062px;">Size</th>-->
                                    {{-- <th class="min-w-70px fw_800 pb-8 sorting" rowspan="1" colspan="1"
                                        style="width: 66.4062px;">Download Time</th>
                                    <th class="min-w-70px fw_800 pb-8 sorting" rowspan="1" colspan="1"
                                        style="width: 250.656px;">Last Modified</th> --}}
                                    <th class="min-w-70px fw_800 pb-8 sorting" rowspan="1" colspan="1" style="width: 125px;">
                                        Action</th>
                                    <th class="min-w-70px fw_800 pb-8 sorting" rowspan="1" colspan="1" style="width: 125px;">
                                        Edit</th>
                                </tr>
                            </thead>
                            <tbody class="fw-semibold text-gray-600">




                                @foreach ($files as $file)

                                    <tr class="odd">
                                          <td> <input class="form-check-input" type="checkbox" name="selectedProducts[]" value="{{ $file->id }}" style="background-size: unset !important;width: 20px; height: 20px;"></td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <span class="icon-wrapper"><i
                                                        class="ki-duotone ki-file fs-2x text-primary me-4"><span
                                                            class="path1"></span><span class="path2"></span></i></span>
                                                <a href="#" class="text-white text-hover-primary">{{ $file->title }}</a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                              
                                                <a href="#" class="text-white text-hover-primary">
                                                    @if($file->order_id)
                                                    
                                                    {{ $file->order_id }}
                                                    
                                                    @else
                                                    
                                                    N/A
                                                    @endif
                                                </a>
                                            </div>
                                        </td>
                                        {{-- <td class="text-white">{{ $file->Writer }}</td> --}}
                                        <td class="text-white">{{ $file->file_type }}</td>
                                        <!--<td class="text-white">{{$file->Size }}</td>-->
                                        {{-- <td class="text-white" data-order="2023-08-19T14:40:00+05:00">{{$file->download_time}}
                                        </td>
                                        <td class="text-white" data-order="2023-08-19T14:40:00+05:00">{{ $file->created_at }}
                                        </td> --}}
                                        <td class="text-end text-white" data-kt-filemanager-table="action_dropdown">
                                            <div class="d-flex justify-content-end">
                                            
                                             
                                                
                                                @if($file->status == 0)
                                                  <a href="#" class="btn btn-warning" onclick="changeStatus({{ $file->id }}, {{ $file->status }})">Approve</a>
                                                @else
                                                 @if($file->status == 1)
                                                    <a  class="btn badge-custom-bg" >Approved</a>
                                                    @else
                                                     <a href="#" class="btn badge-custom-bg" onclick="changeStatus({{ $file->id }}, {{ $file->status }})">Approved</a>
                                                     @endif
                                                @endif
                                                                                            
                                                <!--end::More-->
                                            </div>
                                        </td>

                                        <td>
                                              <a href="{{ asset('storage/'.$file->file_path)}}"
                                                 class="btn btn-sm btn-info" target="_blank">View</a>

                                            {{-- <a href="{{ route('file_chat_gpts.edit', $file->id) }}" class="btn btn-sm btn-warning">Edit</a> --}}
                                            {{-- <form action="{{ route('file_chat_gpts.destroy', $file->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                            </form> --}}
                                        </td>
                                    </tr>
                                @endforeach
                <select class="btn badge-custom-bg ms-5" name="status" id="status">
                
                    <option value="1">Approved</option>
                </select>
                    </form>
                                        </tbody>
                        </table>
                        <!--end::Table-->
                    </div>
                    <!--end::Card body-->
                </div>
           
            @endif              <!--end::Card-->
            <!--begin::Modals-->
            <!--begin::Modal - Upload File-->
      
        
        
         
            
        </div>
        <!--end::Content container-->
    </div>
    <!--end::Content-->
</div>

<script>
    var hostUrl = "assets/";
</script>


<script>
    function changeStatus(fileId, currentStatus) {
      
      var csrfToken = $('meta[name="csrf-token"]').attr('content');
      
        $.ajax({
            url: "{{ route('admin.order.file.change.status') }}",
            method: 'POST',
            data: {
                fileId: fileId,
                currentStatus: currentStatus
            },
             headers: {
                'X-CSRF-TOKEN': csrfToken // Include the CSRF token in the request headers
            },
            success: function(response) {
                // Handle success response (if needed)
                console.log('Status changed successfully');
                // Reload the page or update the UI as needed
               location.reload(); // Reload the page after status change
            },
            error: function(xhr, status, error) {
                // Handle error response (if needed)
                console.error('Error changing status:', error);
            }
        });
    }
</script>


<script>

    $(document).on('click', '.downloadPdf', function () {
        setTimeout(function () {
            location.reload();
        }, 2000);
    });



    function confirmDelete(id, name) {

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

                    type: 'get', // Change to DELETE method
                    // url: '/admin/files/' + id + '/' + name + '/delete',
                    url: "{{ route('admin.files.delete', ['id' => ':id', 'folder_name' => ':name']) }}".replace(':id', id).replace(':name', name),
                    data: { id: id, name: name }, // Assuming id is a parameter you want to send
                    success: function (response) {
                        console.log(response);
                        Swal.fire('Deleted!', 'Your data has been deleted.', 'success');
                        location.reload(true);
                    },
                    error: function (error) {
                        console.error(error);
                    }
                });


            }
        });
    }
</script>
<script>
    // Select All checkbox functionality
    const selectAllCheckbox = document.getElementById('selectAll');
    const checkboxes = document.querySelectorAll('input[name="selectedProducts[]"]');

    selectAllCheckbox.addEventListener('change', function() {
        checkboxes.forEach((checkbox) => {
            checkbox.checked = selectAllCheckbox.checked;
        });
    });
</script>
<script>



    // Function to handle table search
    $(document).ready(function () {
        // Add an input event listener to the search input
        $("#searchInput").on("input", function () {
            // Get the value of the search input
            var searchValue = $(this).val().toLowerCase();

            // Filter the rows of the table based on the search input
            $("#kt_file_manager_list tbody tr").filter(function () {
                $(this).toggle($(this).text().toLowerCase().indexOf(searchValue) > -1);
            });
        });
    });

    document.getElementById("file-1").addEventListener("change", function () {
        var fileName = this.files[0].name;
        document.getElementById("attach_file_1").innerText = "Selected file: " + fileName;
    });
    document.getElementById("file-2").addEventListener("change", function () {
        var fileName = this.files[0].name;
        document.getElementById("attach_file_2").innerText = "Selected file: " + fileName;
    });
    document.getElementById("file-3").addEventListener("change", function () {
        var fileName = this.files[0].name;
        document.getElementById("attach_file_3").innerText = "Selected file: " + fileName;
    });

</script>
 
@endsection
