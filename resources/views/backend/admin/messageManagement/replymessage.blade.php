@extends('custom_layout.master')
@section('main_content')

<style>
    .ql-editor.ql-blank {
    color: white !important;
}
h1 {
    color: white !important;
}
h2 {
    color: white !important;
}
h3 {
    color: white !important;
}
</style>
<!--begin::Content wrapper-->
<div class="d-flex flex-column flex-column-fluid">
    <!--begin::Toolbar-->
    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
        <!--begin::Toolbar container-->
        <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                <!--begin::Title-->
                <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0 fs-color-white custom-fs-23">Message Management</h1>
                <!--end::Title-->
                <!--begin::Breadcrumb-->
                <!-- <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">

                    <li class="breadcrumb-item text-muted">
                        <a href="message-management.php" class="fs-color-white custom-fs-13">Message Management</a>
                    </li>

                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-500 w-5px h-2px"></span>
                    </li>


                    <li class="breadcrumb-item fs-color-white custom-fs-13">Conversation</li>

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
            <!--begin::Inbox App - View & Reply -->
            <div class="d-flex flex-column flex-lg-row">
                <!--begin::Sidebar-->
                <div class="d-none d-lg-flex flex-column flex-lg-row-auto w-100 w-lg-200px" data-kt-drawer="true" data-kt-drawer-name="inbox-aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="225px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_inbox_aside_toggle">
                    <!--begin::Sticky aside-->
                    <div class="card card-flush mb-0">

                        <!--begin::Aside content-->
                        <div class="card-body">
                            <!--begin::Button-->
                            <a href="{{route('admin.new-message')}}" class="btn badge-custom-bg fw-bold w-100 mb-8">New Message</a>
                            <!--end::Button-->
                            <!--begin::Menu-->
                            <div class="menu menu-column menu-rounded menu-state-bg menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary mb-10">
                                <!--begin::Menu item-->
                                <div class="menu-item mb-3">
                                    <!--begin::Inbox-->
                                    <span class="menu-link active btn-dark-primary">
                                        <span class="menu-icon">
                                            <i class="ki-duotone ki-sms fs-2 me-3">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </span>
                                        <span class="menu-title fw-bold"><a href="{{route('admin.message-management')}}" style="color: #fff">Inbox</a></span>
                                        <span class="badge badge-custom-bg">{{count($data)}}</span>
                                    </span>
                                    <!--end::Inbox-->
                                </div>

                            </div>
                            <!--end::Menu-->
                        </div>
                        <!--end::Aside content-->
                    </div>
                    <!--end::Sticky aside-->
                </div>
                <!--end::Sidebar-->
                <!--begin::Content-->
                <div class="flex-lg-row-fluid ms-lg-7 ms-xl-10">

                    <!--begin::Card-->
                    <div class="card">

                        <div class="card-header align-items-center py-5 gap-5">
                            <!--begin::Actions-->
                            <div class="d-flex">
                                <!--begin::Back-->
                                <a href="message-management.php" class="btn btn-sm btn-icon btn-clear badge-custom-bg me-3 d-none" data-bs-toggle="tooltip" data-bs-placement="top" title="Back">
                                    <i class="ki-duotone ki-arrow-left fs-1 m-0 fs-color-white">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </a>
                                <!--end::Back-->

                            </div>
                            <!--end::Actions-->
                            <!--begin::Pagination-->
                            <div class="d-flex align-items-center">
                                <!--begin::Pages info-->
                                <span class="fw-semibold text-muted me-2 d-none">1 - 50 of 235</span>
                                <!--end::Pages info-->
                                <!--begin::Prev page-->
                                <a href="#" class="btn btn-sm btn-icon badge-custom-bg me-3 d-none" data-bs-toggle="tooltip" data-bs-placement="top" title="Previous message">
                                    <i class="ki-duotone ki-left fs-2 m-0 fs-color-white"></i>
                                </a>
                                <!--end::Prev page-->
                                <!--begin::Next page-->
                                <a href="#" class="btn btn-sm btn-icon badge-custom-bg me-2 d-none" data-bs-toggle="tooltip" data-bs-placement="top" title="Next message">
                                    <i class="ki-duotone ki-right fs-2 m-0 fs-color-white"></i>
                                </a>
                                <!--end::Next page-->
                                <!--begin::Toggle-->
                                <a href="#" class="btn btn-sm btn-icon btn-color-primary btn-light btn-active-light-primary d-lg-none" data-bs-toggle="tooltip" data-bs-dismiss="click" data-bs-placement="top" title="Toggle inbox menu" id="kt_inbox_aside_toggle">
                                    <i class="ki-duotone ki-burger-menu-2 fs-3 m-0">
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
                            <!--end::Pagination-->
                        </div>
                        <div class="card-body">
                            <!--begin::Form-->
                            <form id="kt_inbox_reply_form" class="rounded border mb-10">
                                <!--begin::Body-->
                                <div class="d-block">
                                    <!--begin::To-->
                                    <div class="d-flex align-items-center border-bottom px-6 min-h-50px justify-content-between py-5">
                                        <!--begin::Actions-->
                                        <div class="border d-flex p-3 align-items-center rounded me-3">
                                            <!--begin::Send-->
                                            <div class="btn-group me-4">
                                                <!--begin::Submit-->
                                               <button class="btn badge-custom-bg fs-bold px-6" type="submit" >Send</button>

                                                <!--end::Submit-->

                                            </div>
                                            <!--end::Send-->
                                            <!--begin::Upload attachement-->
                                            <div class="btn btn-icon btn-sm btn-clean  me-2 badge-custom-bg" id="media_button" data-kt-inbox-form="dropzone_upload">
                                                <label><span class="ki-duotone ki-paper-clip fs-2 m-0 fs-color-white"></span><input hidden type="file" class="upload-attachment" name="media[]" id="media" multiple accept="image/*"/></label>
                                            </div>
                                            <!--end::Upload attachement-->
                                            <p id="attach_file_1" class="text-white  w-200px"></p>
                                        </div>

                                        <div>
                                            <input type="radio" id="AdminRadio" class="radioAdminWriter" name="statusRadio" value="Admin"  >
                                            <label for="AdminRadio" class="text-white">Admin</label>
                                        </div>
                                        <div>
                                            <input type="radio" id="WriterRadio" class="radioAdminWriter" name="statusRadio" value="Writer" >
                                            <label for="WriterRadio" class="text-white">Writer</label>
                                        </div>


                                        <!--end::Actions-->
                                        <div class="text-center me-3 fs-color-white custom-fs-13">
                                            <input class="form-select form-select-solid form-select-sm " value="{{$order_id}}" name='order_id' hidden>
                                            order id: <span class="badge badge-custom-bg text-dark ms-3">{{$order_id}}</span>
                                        </div>



                                    <div class="d-flex align-items-center">
                                            <!--begin::Dismiss reply-->
                                            <span class="btn btn-icon btn-sm btn-clean clear_message_box message" id="delete_btn" data-inbox="dismiss" data-toggle="tooltip" title="Discard reply">
                                                <i class="ki-duotone ki-trash fs-2">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                    <span class="path4"></span>
                                                    <span class="path5 clear_message_box"></span>
                                                </i>
                                            </span>
                                            <!--end::Dismiss reply-->
                                        </div>
                                        <!--end::Toolbar-->
                                    </div>

                                    <textarea class="form-control form-control-transparent border-0 h-100 text-white d-none" id="message_box" name="message" id="message_box" placeholder="Message Here" value="" ></textarea>
                                    <div id="replayMessageEditor" class="border-0 bg-transparent h-250px px-3"></div>



                                    <!--end::Message-->
                                    <!--begin::Attachments-->
                                    <div class="dropzone dropzone-queue px-8 py-4" id="kt_inbox_reply_attachments" data-kt-inbox-form="dropzone">
                                        <div class="dropzone-items">
                                            <div class="dropzone-item" style="display:none">
                                                <!--begin::Dropzone filename-->
                                                <div class="dropzone-file">
                                                    <div class="dropzone-filename" title="some_image_file_name.jpg">
                                                        <span data-dz-name="">some_image_file_name.jpg</span>
                                                        <strong>(
                                                            <span data-dz-size="">340kb</span>)</strong>
                                                    </div>
                                                    <div class="dropzone-error" data-dz-errormessage=""></div>
                                                </div>
                                                <!--end::Dropzone filename-->
                                                <!--begin::Dropzone progress-->
                                                <div class="dropzone-progress">
                                                    <div class="progress">
                                                        <div class="progress-bar bg-primary" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" data-dz-uploadprogress=""></div>
                                                    </div>
                                                </div>
                                                <!--end::Dropzone progress-->
                                                <!--begin::Dropzone toolbar-->
                                                <div class="dropzone-toolbar">
                                                    <span class="dropzone-delete" data-dz-remove="">
                                                        <i class="ki-duotone ki-cross fs-6">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                                <!--end::Dropzone toolbar-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Attachments-->
                                </div>
                                <!--end::Body-->

                            </form>
                            <!--end::Form-->
                            <!--begin::Title-->
                            <div class="d-flex flex-wrap gap-2 justify-content-end mb-8">

                                <div class="d-flex">
                                    <!--begin::Sort-->
                                    <!-- <a href="#" class="btn btn-sm btn-icon btn-light custom-icon me-2 message" data-bs-toggle="tooltip" data-bs-placement="top" title="Sort">
                                        <i class="ki-duotone ki-arrow-up-down fs-2 m-0 text-white">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </a> -->
                                    <!--end::Sort-->
                                    <!--begin::Print-->
                                    <a href="#" class="btn btn-sm btn-icon btn-light btn-active-light-primary me-2 d-none" data-bs-toggle="tooltip" data-bs-placement="top" title="Print">
                                        <i class="ki-duotone ki-printer fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                            <span class="path4"></span>
                                            <span class="path5"></span>
                                        </i>
                                    </a>
                                    <!--end::Print-->
                                </div>
                            </div>
                            <!--end::Title-->
                            <!--begin::Message accordion-->
                            <livewire:message-box :order_id="$order_id" />

                            <!--end::Message accordion-->
                            <div class="separator my-6"></div>
                            <!--begin::Message accordion-->


                        </div>
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Inbox App - View & Reply -->
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
<script src="https://cdn.jsdelivr.net/npm/quill@2/dist/quill.js"></script>

<script>
   const replayMessageEditor = new Quill("#replayMessageEditor", {
    theme: "snow",
  });

  addEventListener('keyup', () => {
    var editorContent = replayMessageEditor.root.innerHTML;
    var message = document.getElementById('message_box');
    message.innerHTML = editorContent;
});


    // Update the hidden textarea with Quill content
    var form = document.querySelector('form');
    form.onsubmit = function() {
        // Get Quill content as HTML
        var quillContent = quill.root.innerHTML;
        // Update the hidden textarea with HTML content
        form.querySelector('textarea[name=reply]').value = quillContent;
    };
</script>
<script>
    // Global variable to store order_id
    window.order_id = "{{ $order_id }}";
</script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>





    $(document).ready(function() {
        $('#kt_inbox_reply_form').submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            formData.append('_token', '{{ csrf_token() }}');
            console.log(formData)


   var send_by = $('.radioAdminWriter:checked').val();
            console.log("Selected value:", send_by);

            // Append the selected value to the FormData object if needed
            formData.append('send_by', send_by);

             var sendby = $('.radioAdminWriter:checked').val();

             var message = $('#message_box').val();

                if (!message) {
    Swal.fire('Error!', 'Message cannot be empty. Please type a message before sending.', 'error');
    return;
}

             if (sendby == '' || sendby == null) {
       Swal.fire('Error!', 'Please select a message receiver (Admin or Writer) before proceeding.', 'error');
        return; // Stop execution if the condition is met
    }

            var element = document.getElementById('media');
            console.log(element.value)
            for (var pair of formData.entries()) {
                console.log(pair[0] + ', ' + pair[1]);
            }

            var url = '{{ route("admin.send-message")}}'
            $.ajax({

                type: 'POST',
                url: url,
                    data: formData,
                    processData: false,
                    contentType: false,
                success: function(response) {
                    console.log('Server response:', response);
                    Swal.fire('Success!', 'Your Message Sent Successfully.', 'success');
                    replayMessageEditor.setText('');
                    var element = document.getElementById('attach_file_1');
                    element.innerText = '';

                },
                error: function(error) {
                    console.error('Error:', error);
                }
            });

            return false;
        });
    });
</script>

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<script>
document.getElementById("media").addEventListener("change", function() {
    var files = this.files;
    var fileNames = "";
    for (var i = 0; i < files.length; i++) {
        fileNames += files[i].name + ", ";
    }
    // Remove the last comma and space
    fileNames = fileNames.slice(0, -2);
    document.getElementById("attach_file_1").innerText = "Selected files: " + fileNames;
});


    $(document).on('click', '.clear_message_box', function (e) {
        $('#message_box').val('');
        replayMessageEditor.setText('');
        var element = document.getElementById('attach_file_1');
        element.innerText = '';
    });
</script>


<script>
    $(document).ready(function() {
        $('#kt_inbox_compose_form').submit(function(e) {
            e.preventDefault(); // Prevent the form from submitting in the traditional way

            // Create a FormData object to gather form data
            var formData = new FormData(this);
            formData.append('_token', '{{ csrf_token() }}');
            // You can append additional data if needed
            // formData.append('key', 'value');
            console.log(formData)
            var element = document.getElementById('media');
            console.log(element.value)
            // Display the form data in the console (for testing purposes)
            for (var pair of formData.entries()) {
                console.log(pair[0] + ', ' + pair[1]);
            }
            var url = '{{ route("admin.send-message")}}'

            $.ajax({
                type: 'POST',
                url: url,
                    data: formData,
                    processData: false,
                    contentType: false,
                success: function(response) {
                    console.log('Server response:', response);
                    var element = document.getElementById('media');
                    element.value = '';

                    Swal.fire('Success', "Message Send successfully", 'success');
                    Pusher.logToConsole = true;
                    var pusher = new Pusher('28e13a39c3918e12f8a9', {
                    cluster: 'ap2'
                    });

                    var channel = pusher.subscribe('pusher');
                    channel.bind('SendMessage', function(data) {
                    alert(JSON.stringify(data));
                    console.log(JSON.stringify(data))
                    });
                },
                error: function(error) {
                    console.error('Error:', error);
                }
            });

            return false; // Prevent the form from submitting in the traditional way
        });

    // clear message box






    });//main-document
</script>

@endsection
