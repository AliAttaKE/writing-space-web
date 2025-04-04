@extends('custom_layout.master')
@section('main_content')
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root" id="kt_app_root">
        <!--begin::Wrapper-->
        <div class="d-flex flex-column flex-column-fluid">
            <!--begin::Body-->
            <div class="scroll-y flex-column-fluid px-10 py-10" data-kt-scroll="true" data-kt-scroll-activate="true"
                data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_header_nav" data-kt-scroll-offset="5px"
                data-kt-scroll-save-state="true" style=" --kt-scrollbar-color: #d9d0cc; --kt-scrollbar-hover-color: #d9d0cc">
                <!--begin::Email template-->
                <style>
                    html,
                    body {
                        padding: 0;
                        margin: 0;
                        font-family: Inter, Helvetica, "sans-serif";
                    }

                    a:hover {
                        color: #009ef7;
                    }
                </style>
                <div id="#kt_app_body_content"
                    style=" font-family:Arial,Helvetica,sans-serif; line-height: 1.5; min-height: 100%; font-weight: normal; font-size: 15px; color: #2F3044; margin:0; padding:0; width:100%;">
                    <div class="d-flex justify-content-between">
                        <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0 text-color custom-fs-23">
                            Email Events</h1>
                        <button class="btn badge-custom-bg" data-bs-toggle="modal" data-bs-target="#kt_modal_email_temp">Add
                            Email Event</button>

                    </div>
                    <div>
                        <div class="row">
                            <div class="col-lg-12 p-5">
                                <div class="card card-flush p-3 table-summ">
                                    <!--begin::Card header-->
                                    <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                                        <!--begin::Card title-->
                                        <div class="card-title">
                                            <!--begin::Search-->
                                            <div class="d-flex align-items-center position-relative my-1">
                                                <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-4 text-color"><span
                                                        class="path1"></span><span class="path2"></span></i> <input
                                                    type="text" data-kt-ecommerce-product-filter="search"
                                                    class="form-control form-control-solid w-250px ps-12 btn-dark-primary"
                                                    placeholder="Search">
                                            </div>
                                            <!--end::Search-->
                                        </div>
                                        <!--end::Card title-->

                                    </div>
                                    <!--end::Card header-->

                                    <!--begin::Card body-->
                                    <div class="card-body pt-0">

                                        <!--begin::Table-->
                                        <div id="kt_ecommerce_products_table_wrapper"
                                            class="dataTables_wrapper dt-bootstrap4 no-footer">
                                            <div class="table-responsive">
                                                <table
                                                    class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer"
                                                    id="kt_ecommerce_products_table">
                                                    <thead>
                                                        <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0 text-color">
                                                            <!--<th class="w-10px pe-2 sorting_disabled" rowspan="1"-->
                                                            <!--    colspan="1" aria-label="">-->
                                                            <!--    <div-->
                                                            <!--        class="form-check form-check-sm form-check-custom form-check-solid me-3">-->
                                                            <!--        <input class="form-check-input" type="checkbox"-->
                                                            <!--            data-kt-check="true"-->
                                                            <!--            data-kt-check-target="#kt_ecommerce_products_table .form-check-input"-->
                                                            <!--            value="1">-->
                                                            <!--    </div>-->
                                                            <!--</th>-->
                                                            <th class="min-w-125px sorting fw_800" tabindex="0"
                                                                aria-controls="kt_ecommerce_products_table" rowspan="1"
                                                                colspan="1"
                                                                aria-label="Product: activate to sort column ascending">
                                                                Subject</th>
                                                            <th class=" min-w-125px sorting fw_800" tabindex="0"
                                                                aria-controls="kt_ecommerce_products_table" rowspan="1"
                                                                colspan="1"
                                                                aria-label="SKU: activate to sort column ascending">
                                                                Body</th>
                                                            <th class="min-w-70px sorting_disabled fw_800" rowspan="1"
                                                                colspan="1" aria-label="Actions">Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="fw-semibold text-gray-600 text-color">
                                                        @empty($emails)
                                                            <tr> <td colspan="3">No data available</td> </tr>
                                                        @else
                                                            @foreach($emails as $email)
                                                                <tr class="odd">
                                                                    <!--<td>-->
                                                                    <!--    <div-->
                                                                    <!--        class="form-check form-check-sm form-check-custom form-check-solid">-->
                                                                    <!--        <input class="form-check-input" type="checkbox" value="1">-->
                                                                    <!--    </div>-->
                                                                    <!--</td>-->
                                                                    <td>{{ $email->title }}</td>
                                                                    <td>{{ $email->description }}</td>

                                                                    <td class="text-start">
                                                                        <a href="#"
                                                                            class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary badge-custom-bg"
                                                                            data-kt-menu-trigger="click"
                                                                            data-kt-menu-placement="bottom-end">
                                                                            Actions
                                                                            <i class="ki-duotone ki-down fs-5 ms-1"></i>
                                                                        </a>
                                                                        <!--begin::Menu-->
                                                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4 badge-custom-bg"
                                                                            data-kt-menu="true">
                                                                            <!--begin::Menu item-->
                                                                            <div class="menu-item px-3 ">
                                                                                <a href="#"
                                                                                    data-id={{ $email->id }}
                                                                                    class="menu-link px-3 editEmailBtn text-white">
                                                                                    Edit
                                                                                </a>
                                                                            </div>
                                                                            <!--end::Menu item-->

                                                                            <!--begin::Menu item-->
                                                                            <div class="menu-item px-3">
                                                                                <a onclick="confirmDeleteEmail({{ $email->id }})" class="menu-link px-3 text-white"
                                                                                    data-kt-ecommerce-product-filter="delete_row">
                                                                                    Delete
                                                                                </a>
                                                                            </div>
                                                                            <!--end::Menu item-->
                                                                        </div>
                                                                        <!--end::Menu-->
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        @endempty


                                                    </tbody>
                                                </table>
                                            </div>

                                        </div>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Card body-->
                                </div>
                            </div>
                        </div>


                    </div>


                    <!--begin::Modal - create Data-->
                    <div class="modal fade" id="kt_modal_email_temp" data-bs-backdrop="static" data-bs-keyboard="false"
                        tabindex="-1" aria-labelledby="update_email_temp_modelLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content badge-custom-bg">
                                <form action="" id="kt_modal_email_temp_form">
                                    <div class="modal-header">
                                        <h5 class="modal-title fs-color-white custom-fs-23" id="update_email_temp_modelLabel">Add Email Event</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">

                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label fs-color-white custom-fs-13">Subject</label>
                                            <input type="text" class="form-control btn-dark-primary" id="exampleFormControlInput1"
                                                placeholder="Subject" name="title" value="{{ old('title') }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlTextarea1" class="form-label fs-color-white custom-fs-13">Body</label>
                                            <!-- <textarea class="form-control btn-dark-primary" placeholder="Body here.." name="description" rows="3" style="resize: none !important;">{{ old('description') }}</textarea> -->


                                            <div class="bg-transparent border-0 h-250px px-3 text-white" id="editor"></div>
<textarea class="form-control form-control-transparent border-0 h-100 text-white d-none" id="message_box" name="description"></textarea>


                                        </div>
                                        <div class="mb-7">
                                            <!--begin::Label-->
                                            <label bel class="fs-6 fw-semibold mb-2">
                                                <span class="fs-color-white custom-fs-13">Add Image</span>
                                                <span class="ms-1" data-bs-toggle="tooltip"
                                                    aria-label="Allowed file types: png, jpg, jpeg."
                                                    data-bs-original-title="Allowed file types: png, jpg, jpeg."
                                                    data-kt-initialized="1">
                                                    <i class="ki-duotone ki-information fs-7">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                    </i>
                                                </span>
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Image input wrapper-->
                                            <div class="mt-1">
                                                <!--begin::Image placeholder-->
                                                <style>
                                                    .image-input-placeholder {
                                                        background-image: url('{{ asset('backend/assets/media/svg/avatars/blank.svg') }}');
                                                    }

                                                    [data-bs-theme="dark"] .image-input-placeholder {
                                                        background-image: url('{{ asset('backend/assets/media/svg/avatars/blank-dark.svg') }}');
                                                    }
                                                </style>
                                                <!--end::Image placeholder-->
                                                <!--begin::Image input-->
                                                <div class="image-input image-input-outline image-input-placeholder"
                                                    data-kt-image-input="true">
                                                    <!--begin::Preview existing avatar-->
                                                    <div class="image-input-wrapper w-125px h-125px"
                                                        style="background-image: url('{{ asset('backend/assets/media/avatars/300-6.jpg') }}')"></div>
                                                    <!--end::Preview existing avatar-->
                                                    <!--begin::Edit-->
                                                    <label
                                                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                        data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                                        aria-label="Change avatar" data-bs-original-title="Change avatar"
                                                        data-kt-initialized="1">
                                                        <i class="ki-duotone ki-pencil fs-7">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                        <!--begin::Inputs-->
                                                        <input type="file" name="image" accept=".png, .jpg, .jpeg">
                                                        <input type="hidden" name="avatar_remove">
                                                        <!--end::Inputs-->
                                                    </label>
                                                    <!--end::Edit-->
                                                    <!--begin::Cancel-->
                                                    <span
                                                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                        data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                                        aria-label="Cancel avatar" data-bs-original-title="Cancel avatar"
                                                        data-kt-initialized="1">
                                                        <i class="ki-duotone ki-cross fs-2">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                    <!--end::Cancel-->
                                                    <!--begin::Remove-->
                                                    <span
                                                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                        data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                                        aria-label="Remove avatar" data-bs-original-title="Remove avatar"
                                                        data-kt-initialized="1">
                                                        <i class="ki-duotone ki-cross fs-2">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                    <!--end::Remove-->
                                                </div>
                                                <!--end::Image input-->
                                            </div>
                                            <!--end::Image input wrapper-->
                                        </div>


                                        <div class="mb-3">
                                            <label for="exampleFormControlTextarea1" class="form-label fs-color-white custom-fs-13">Type</label>
                                              <select class="form-control btn-dark-primary" name='type'>
                                                <option>Select Type</option>

                                                 @forelse ($emailTypes as $emailType)
                                                    <option value="{{$emailType->title}}">{{$emailType->title}}</option>
                                                 @empty
                                                    <option value="Welcome">Welcome</option>
                                                    <option value="Forgot Password">Forgot Password</option>

                                                 @endforelse
                                            </select>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-dark-primary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-dark-primary addEmailTempBtn">Submit</button>
                                    </div>
                            </form>
                            </div>
                        </div>
                    </div>
                    <!--end::Modal - Create App-->


                    <!--begin::Modal - Edit Data-->
                    <div class="modal fade" id="update_email_temp_model" data-bs-backdrop="static" data-bs-keyboard="false"
                        tabindex="-1" aria-labelledby="update_email_temp_modelLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content badge-custom-bg">
                                <form action="" id="update_email_temp_model_form">
                                    <div class="modal-header">
                                        <h5 class="modal-title custom-fs-23 fs-color-white" id="update_email_temp_modelLabel">Update Email Event</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">

                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label fs-color-white custom-fs-13">Subject</label>
                                            <input type="text" class="form-control btn-dark-primary"
                                                placeholder="Subject" id="title" name="title" value="{{ old('title') }}">

                                            <input type="hidden" class="form-control btn-dark-primary"
                                                placeholder="Id" id="id" name="id" value="{{ old('id') }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlTextarea1" class="form-label fs-color-white custom-fs-13">Body</label>
                                            <textarea class="form-control btn-dark-primary" placeholder="Body here.." id="description" name="description" rows="3" style="resize: none !important;">{{ old('description') }}</textarea>
                                        </div>
                                        <div class="mb-7">
                                            <!--begin::Label-->
                                            <label bel class="fs-6 fw-semibold mb-2">
                                                <span class="fs-color-white custom-fs-13">Add Image</span>
                                                <span class="ms-1" data-bs-toggle="tooltip"
                                                    aria-label="Allowed file types: png, jpg, jpeg."
                                                    data-bs-original-title="Allowed file types: png, jpg, jpeg."
                                                    data-kt-initialized="1">
                                                    <i class="ki-duotone ki-information fs-7">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                    </i>
                                                </span>
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Image input wrapper-->
                                            <div class="mt-1">
                                                <!--begin::Image placeholder-->
                                                <style>
                                                    .image-input-placeholder {
                                                        background-image: url('{{ asset('backend/assets/media/svg/avatars/blank.svg') }}');
                                                    }

                                                    [data-bs-theme="dark"] .image-input-placeholder {
                                                        background-image: url('{{ asset('backend/assets/media/svg/avatars/blank-dark.svg') }}');
                                                    }
                                                </style>
                                                <!--end::Image placeholder-->
                                                <!--begin::Image input-->
                                                <div class="image-input image-input-outline image-input-placeholder"
                                                    data-kt-image-input="true">
                                                    <!--begin::Preview existing avatar-->
                                                    <div class="image-input-wrapper w-125px h-125px"
                                                        style="background-image: url('{{ asset('backend/assets/media/avatars/300-6.jpg') }}')"></div>
                                                    <!--end::Preview existing avatar-->
                                                    <!--begin::Edit-->
                                                    <label
                                                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                        data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                                        aria-label="Change avatar" data-bs-original-title="Change avatar"
                                                        data-kt-initialized="1">
                                                        <i class="ki-duotone ki-pencil fs-7">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                        <!--begin::Inputs-->
                                                        <input type="file" name="image" accept=".png, .jpg, .jpeg">
                                                        <input type="hidden" name="avatar_remove">
                                                        <!--end::Inputs-->
                                                    </label>
                                                    <!--end::Edit-->

                                                    <!--begin::Cancel-->
                                                    <span
                                                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                        data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                                        aria-label="Cancel avatar" data-bs-original-title="Cancel avatar"
                                                        data-kt-initialized="1">
                                                        <i class="ki-duotone ki-cross fs-2">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                    <!--end::Cancel-->
                                                    <!--begin::Remove-->
                                                    <span
                                                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                        data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                                        aria-label="Remove avatar" data-bs-original-title="Remove avatar"
                                                        data-kt-initialized="1">
                                                        <i class="ki-duotone ki-cross fs-2">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                    <!--end::Remove-->


                                                </div>
                                                <!--end::Image input-->

                                            </div>
                                            <!--end::Image input wrapper-->

                                            <div class="image-input-wrapper w-125px h-125px">
                                                <img id="old_image" src="" alt="image" width="50" height="50">

                                           </div>

                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlTextarea1" class="form-label fs-color-white custom-fs-13">Type</label>
                                            <select class="form-control btn-dark-primary" name='type' id="type">

                                            </select>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-dark-primary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-dark-primary updateEmailTempBtn">Update</button>
                                    </div>
                            </form>
                            </div>
                        </div>
                    </div>
                    <!--end::Modal - edit App-->
                </div>
                <!--end::Email template-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Root-->


    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/quill@2/dist/quill.js"></script>

<script>
 const newMessageEditor = new Quill("#editor", {
    theme: "snow",
  });

  addEventListener('keyup', () => {
    var editorContent = newMessageEditor.root.innerHTML;
    var message = document.getElementById('message_box');
    message.innerHTML = editorContent;
});
</script>
@endsection

@section('customJs')




    <script>


        $(document).ready( function () {

            //update email temp
            $('.updateEmailTempBtn').on('click', function (e) {
                e.preventDefault();

            var formData = new FormData($('#update_email_temp_model_form')[0]);
            console.log(formData);
            var csrfToken = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                url: '{{ route("admin.email.update") }}',
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                headers: {
                    'X-CSRF-TOKEN': csrfToken
                },

                success: function(response) {

                    console.log(response.success);
                    if(response.success){
                        $('#update_email_temp_model').modal('hide');
                        location.reload();
                        $('.modal-backdrop').hide();

                    }
                    Swal.fire('Success!', response.success, 'success');

                    console.log(response.user);
                },
                error: function(xhr) {

                    var errors = xhr.responseJSON.errors;

                    if (errors && errors.email) {
                        Swal.fire('Error!', errors.email[0], 'error');
                    } else {
                        console.error('Oops! Something went wrong');
                        Swal.fire('Error!', 'Oops! Something went wrong', 'error');
                    }
                }
            })//ajax end;

            });


            //edit/update email temp
            $('.editEmailBtn').on('click', function (e) {
                e.preventDefault();

                $('#update_email_temp_model').modal('show');
                // alert('ok');
                // Get the data-id attribute value
                var id = $(this).attr('data-id');
                // alert(id);
                $.ajax({
                url: "{{ url('admin/email/edit/') }}/" + id, // Corrected URL
                type: 'GET',
                data: { id: id },
                success: function(response) {
                    console.log(response);
                    console.log(response.email.title);
                    $('#title').val(response.email.title);
                    $('#description').val(response.email.description);
                    $('#old_image').attr('src', 'https://elementary-solutions.com/writing-space-web/public//images/emails/' + response.email.image);
                    $('#id').val(response.email.id);

                    $('#type').empty();

                    $.each(response.emailTypes, function(index, emailType) {
                        var option = $('<option>', {
                            value: emailType.title,
                            text: emailType.title
                        });

                        if (emailType.title === response.email.type) {
                            option.prop('selected', true);
                        }
                        $('#type').append(option);
                    });

                },
                error: function(xhr) {
                    var errors = xhr.responseJSON.errors;
                    if (errors && errors.email) {
                        Swal.fire('Error!', errors.email[0], 'error');
                    } else {
                        console.error('Oops! Something went wrong');
                        Swal.fire('Error!', 'Oops! Something went wrong', 'error');
                    }
                }
            })//ajax end;

            });

            //add email temp
            $('.addEmailTempBtn').on('click', function (e) {
                e.preventDefault();

            var formData = new FormData($('#kt_modal_email_temp_form')[0]);
            console.log(formData);
            var csrfToken = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                url: '{{ route("admin.email.store") }}',
                type: 'POST',
                data: formData,
                processData: false,  // Important: Don't process the data
                contentType: false,  // Important: Don't set contentType
                headers: {
                    'X-CSRF-TOKEN': csrfToken
                },

                success: function(response) {
                    // Handle success response
                    console.log(response.success);
                    if(response.success){
                        $('#kt_modal_email_temp').modal('hide');
                        $('#kt_modal_email_temp_form')[0].reset();
                        location.reload();
                        $('.modal-backdrop').hide();
                        toastr.success(response.success);
                    }else{
                        toastr.error(response.error);
                    }
                    console.log(response)
                    console.log(response.user);
                },
                error: function(xhr) {
                    var errors = xhr.responseJSON.errors;
                    if (errors && errors.email) {
                        Swal.fire('Error!', errors.email[0], 'error');
                    } else {
                        console.error('Oops! Something went wrong');
                        Swal.fire('Error!', 'Oops! Something went wrong', 'error');
                    }
                }
            })//ajax end;

            });
        });

        function confirmDeleteEmail(id) {
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
                    type: "GET",
                    url: "{{ url('admin/email/delete/') }}/" + id, // Corrected URL
                    data: {
                        _token: "{{ csrf_token() }}",
                    },
                    success: function (response) {
                        console.log(response);
                        console.log('File deleted!');
                        Swal.fire('Deleted!', 'Your data has been deleted.', 'success');
                        window.location.reload();
                    },
                    error: function (xhr, status, error) {
                        console.error(xhr.responseText);
                        Swal.fire('Error!', 'An error occurred while deleting the data.', 'error');
                    }
                });
            }
        });
    }
// Function to handle table search
    function handleTableSearch() {
        // Get the search input value
        var searchText = $('[data-kt-ecommerce-product-filter="search"]').val().toLowerCase();
        console.log(searchText)
        // Loop through each table row
        $('#kt_ecommerce_products_table_wrapper tbody tr').each(function() {
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
    $('[data-kt-ecommerce-product-filter="search"]').on('input', function() {
        handleTableSearch();
    });

    </script>

    <script>
        $(document).ready(function() {
            $('#kt_ecommerce_products_table').DataTable();
        })
    </script>

    <script src="{{ asset('backend/assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('backend/assets/js/scripts.bundle.js') }}"></script>
    <!--end::Global Javascript Bundle-->
    <!--end::Javascript-->
    </body>
    <!--end::Body-->

    </html>
@endsection
