@extends('custom_layout.customer')
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

.ql-editor{
    color: white;
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
                <h1 class="page-heading d-flex text-white fw-bold fs-3 flex-column justify-content-center my-0 ">Message Management</h1>
                <!--end::Title-->
                <!--begin::Breadcrumb-->
                <!-- <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">

                    <li class="breadcrumb-item text-muted">
                        <a href="message-management.php" class="text-muted text-hover-primary">Message Management</a>
                    </li>

                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-500 w-5px h-2px"></span>
                    </li>

                    <li class="breadcrumb-item text-muted">Conversation</li>

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
                    <div class="card card-flush mb-0 btn-dark-primary">

                        <!--begin::Aside content-->
                        <div class="card-body">
                            <!--begin::Button-->
                            <a href="{{route('customer.new-message')}}" class="btn btn-primary fw-bold w-100 mb-8 badge-custom-bg">New Message</a>
                            <!--end::Button-->
                            <!--begin::Menu-->
                            <div class="menu menu-column menu-rounded menu-state-bg menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary mb-10">
                                <!--begin::Menu item-->
                                <div class="menu-item mb-3">
                                    <!--begin::Inbox-->
                                    <span class="menu-link active btn-dark-primary">
                                        <span class="menu-icon">
                                            <i class="ki-duotone ki-sms fs-2 me-3 text-white">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </span>
                                        <span class="menu-title fw-bold"><a href="{{route('customer.message-managememnt')}}" style="color: white">Inbox</a></span>
                                        <span class="badge text-white">{{count($data)}}</span>
                                    </span>

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
                    <div class="card btn-dark-primary">

                        <div class="card-header align-items-center py-5 gap-5 btn-dark-primary">
                            <!--begin::Actions-->
                            <div class="d-flex">
                                <!--begin::Back-->
                                <a href="{{ url()->previous() }}" class="btn btn-sm btn-icon btn-clear btn-active-light-primary me-3" data-bs-toggle="tooltip" data-bs-placement="top" title="Back">
                                    <i class="ki-duotone ki-arrow-left fs-1 m-0 text-white">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </a>

                            </div>

                            <div class="d-flex align-items-center d-none">

                                <span class="fw-semibold text-muted me-2">1 - 50 of 235</span>

                                <a href="#" class="btn btn-sm btn-icon btn-light btn-active-light-primary me-3" data-bs-toggle="tooltip" data-bs-placement="top" title="Previous message">
                                    <i class="ki-duotone ki-left fs-2 m-0"></i>
                                </a>

                                <a href="#" class="btn btn-sm btn-icon btn-light btn-active-light-primary me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Next message">
                                    <i class="ki-duotone ki-right fs-2 m-0"></i>
                                </a>
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
                                </a> </div>
                        </div>
                        <div class="card-body">
                            <form id="kt_inbox_reply_form" class="rounded border mb-10 btn-dark-primary">
                                <div class="d-block">
                                    <div class="d-flex align-items-center border-bottom px-6 min-h-50px justify-content-between py-5 btn-dark-primary">
                                        <div class="border d-flex p-3 align-items-center rounded me-3 btn-dark-primary">
                                            <div class="btn-group me-4">
                                                <button class="btn badge-custom-bg fs-bold px-6" type="submit">Send</button>

                                            </div>

                                            <div class="btn btn-icon btn-sm btn-clean btn-active-light-primary me-2" id="media_button" data-kt-inbox-form="dropzone_upload">

                                                <label><span class="ki-duotone ki-paper-clip fs-2 m-0 text-white"></span><input hidden type="file" accept=".docx,.pdf,.txt,.rtf,.xlsx,.csv,.pptx,.jpeg,.jpg,.png,.gif" class="upload-attachment" name="media[]" id="media" multiple /></label>
                                            </div>
                                            <p id="attach_file_1" class="text-white  w-200px"></p>
                                        </div>




                                        <div>
                                            <input type="radio" id="AdminRadio" class="radioAdminWriter" name="statusRadio" value="Admin"  >
                                            <label for="AdminRadio">Admin</label>
                                        </div>
                                        <div>
                                            <input type="radio" id="WriterRadio" class="radioAdminWriter" name="statusRadio" value="Writer" >
                                            <label for="WriterRadio">Writer</label>
                                        </div>

                                        <div class="text-center me-3">
                                            <input class="form-select form-select-solid form-select-sm" value="{{$order_id}}" name='order_id' hidden>
                                                order id: <span class="badge badge-custom-bg text-dark ms-3">{{$order_id}}</span>
                                        </div>




                                        <div class="d-flex align-items-center">
                                            <!--begin::Dismiss reply-->
                                            <span class="btn btn-icon btn-sm btn-clean btn-active-light-primary clear_message_box" id="delete_btn" data-inbox="dismiss" data-toggle="tooltip" title="Discard reply">
                                                <i class="ki-duotone ki-trash fs-2 text-white">
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

                                    <div id="replyMessageEditor" class="border-0 bg-transparent h-250px px-3"></div>
                                    <textarea class="form-control form-control-transparent border-0 h-100 text-white d-none" id="message_box" name="message" id="message_box" placeholder="Message Here" value=""></textarea>

                                    <div class="dropzone dropzone-queue px-8 py-4" id="kt_inbox_reply_attachments" data-kt-inbox-form="dropzone">
                                        <div class="dropzone-items">
                                            <div class="dropzone-item" style="display:none">
                                                <div class="dropzone-file">
                                                    <div class="dropzone-filename" title="some_image_file_name.jpg">
                                                        <span data-dz-name="">some_image_file_name.jpg</span>
                                                        <strong>(
                                                            <span data-dz-size="">340kb</span>)</strong>
                                                    </div>
                                                    <div class="dropzone-error" data-dz-errormessage=""></div>
                                                </div>

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

                            <!--<div class="d-flex flex-wrap gap-2 justify-content-end mb-8">-->

                            <!--    <div class="d-flex">-->
                                    <!--begin::Sort-->
                            <!--        {{-- <a href="#" class="btn btn-sm btn-icon btn-light btn-active-light-primary me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Sort">-->
                            <!--            <i class="ki-duotone ki-arrow-up-down fs-2 m-0 text-white">-->
                            <!--                <span class="path1"></span>-->
                            <!--                <span class="path2"></span>-->
                            <!--            </i>-->
                            <!--        </a> --}}-->
                                    <!--end::Sort-->
                                    <!--begin::Print-->
                            <!--        {{-- <a href="#" class="btn btn-sm btn-icon btn-light btn-active-light-primary me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Print">-->
                            <!--            <i class="ki-duotone ki-printer fs-2 text-white">-->
                            <!--                <span class="path1"></span>-->
                            <!--                <span class="path2"></span>-->
                            <!--                <span class="path3"></span>-->
                            <!--                <span class="path4"></span>-->
                            <!--                <span class="path5"></span>-->
                            <!--            </i>-->
                            <!--        </a> --}}-->
                                    <!--end::Print-->
                            <!--    </div>-->
                            <!--</div>-->


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

<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
    <i class="ki-duotone ki-arrow-up">
        <span class="path1"></span>
        <span class="path2"></span>
    </i>
</div>

<script>
    var hostUrl = "assets/";

</script>
<script src="{{ asset('backend/assets/js/custom/apps/chat/chat.js') }}" defer></script>

<script>
    // Global variable to store order_id
    window.order_id = "{{ $order_id }}";

</script>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/quill@2/dist/quill.js"></script>

<script>
    $(document).ready(function() {
        $('#delete_btn').on('click', function(e) {
            replyMessageEditor.setText('');
            $('#message_box').val('');
            $('#message_box').text('');
            $('#attach_file_1').text('');
        });
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

            // Now you can use the formData object to send the data to the server using AJAX or perform other actions
            var url = '{{ route("customer.send-message")}}'
            // Example of sending formData using AJAX:
            $.ajax({

                type: 'POST'
                , url: url
                , data: formData
                , processData: false, // Don't process the data
                contentType: false, // Don't set contentType
                success: function(response) {
                    console.log('Server response:', response);
                    Swal.fire('Success!', 'Your Message Sent Successfully.', 'success');
                    Pusher.logToConsole = true;

                        $('#message_box').val('');
                        replyMessageEditor.setText('');

                        $('#attach_file_1').text('');
                    var pusher = new Pusher('28e13a39c3918e12f8a9', {
                        cluster: 'ap2'
                    });

                    var channel = pusher.subscribe('pusher');
                    channel.bind('SendMessage', function(data) {
                        alert(JSON.stringify(data));
                        console.log(JSON.stringify(data))
                    });
                }
                , error: function(error) {
                    console.error('Error:', error);
                }
            });

            return false; // Prevent the form from submitting in the traditional way
        });

    });

</script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>

const replyMessageEditor = new Quill("#replyMessageEditor", {
    theme: "snow",
});

addEventListener('keyup', () => {
    var editorContent = replyMessageEditor.root.innerHTML;
    var message = document.getElementById('message_box');
    message.innerHTML = editorContent;
});


document
  .getElementById("media")
  .addEventListener("change", function() {
    const files = this.files;
    const allowed = [
      "docx","pdf","txt","rtf",
      "xlsx","csv","pptx",
      "jpeg","jpg","png","gif"
    ];
    let fileNames = [];

    for (let i = 0; i < files.length; i++) {
      const file = files[i];
      const ext = file.name.split(".").pop().toLowerCase();

      if (!allowed.includes(ext)) {
        // show error and clear the input
        Swal.fire({
          icon: "error",
          title: "Invalid file type",
          text: `"${file.name}" is not allowed.`
        });
        this.value = "";             // reset the input
        document.getElementById("attach_file_1").innerText = "";
        return;                      // stop further processing
      }

      // optional: size check (e.g. max 5MB)
      const maxSize = 5 * 1024 * 1024;
      if (file.size > maxSize) {
        Swal.fire({
          icon: "error",
          title: "File too large",
          text: `"${file.name}" exceeds 5 MB.`
        });
        this.value = "";
        document.getElementById("attach_file_1").innerText = "";
        return;
      }

      fileNames.push(file.name);
    }



    $(document).ready(function () {
    $('#kt_inbox_reply_form').submit(function (e) {
        e.preventDefault(); // Prevent traditional submit
        console.log('hello');

        var formData = new FormData(this);
        formData.append('_token', '{{ csrf_token() }}');

        var send_by = $('.radioAdminWriter:checked').val();
        formData.append('send_by', send_by);

        // Get Quill editor content instead of relying on #message_box
        var message = replyMessageEditor.getText().trim(); // This gets plain text

        if (!send_by) {
            Swal.fire('Error!', 'Please select a message receiver (Admin or Writer) before proceeding.', 'error');
            return;
        }

        if (!message) {
            Swal.fire('Error!', 'Message cannot be empty. Please type a message before sending.', 'error');
            return;
        }

        // Add Quill's content to the form data
        formData.append('message', replyMessageEditor.root.innerHTML); // Or use getText() for plain text

        var url = '{{ route("customer.send-message") }}';

        $.ajax({
            type: 'POST',
            url: url,
            data: formData,
            processData: false,
            contentType: false,
            success: function (response) {
                console.log('Server response:', response);
                Swal.fire('Success!', 'Your Message Sent Successfully.', 'success');

                // Clear editors and file area
                replyMessageEditor.setText('');
                $('#message_box').val(''); // Optional since you're now using Quill
                $('#attach_file_1').text('');
                $('#media').val('');
            },
            error: function (error) {
                console.error('Error:', error);
            }
        });

        return false;
    });
});


</script>




@endsection
