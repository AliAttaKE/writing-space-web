@extends('custom_layout.customer')
@section('main_content')

<style>
    .ql-editor.ql-blank {
    color: white !important;
}
h1{
    color:white !important;
}
h2{
    color:white !important;
}
h3{
    color:white !important;
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
                <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0 fs-color-white custom-fs-23">Compose</h1>
                <!--end::Title-->
                <!--begin::Breadcrumb-->
                <!-- <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">

                    <li class="breadcrumb-item text-muted">
                        <a href="message-management.php" class="fs-color-white custom-fs-13">Messagae Management</a>
                    </li>

                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-500 w-5px h-2px"></span>
                    </li>

                    <li class="breadcrumb-item fs-color-white custom-fs-13">Compose</li>

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
            <!--begin::Inbox App - Compose -->
            <div class="d-flex flex-column flex-lg-row">
                <!--begin::Sidebar-->
                <div class="d-none d-lg-flex flex-column flex-lg-row-auto w-100 w-lg-200px" data-kt-drawer="true" data-kt-drawer-name="inbox-aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="225px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_inbox_aside_toggle">
                    <!--begin::Sticky aside-->
                    <div class="card card-flush mb-0 btn-dark-primary">
                        <!--begin::Aside content-->
                        <div class="card-body">
                            <!--begin::Button-->
                            <a href="{{route('customer.new-message')}}" class="btn badge-custom-bg fw-bold w-100 mb-8">New Message</a>
                            <!--end::Button-->
                            <!--begin::Menu-->
                            <div class="menu menu-column menu-rounded menu-state-bg menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary mb-10">
                                <!--begin::Menu item-->
                                <div class="menu-item mb-3">
                                    <!--begin::Inbox-->
                                    <span class="menu-link btn-dark-primary active">
                                        <span class="menu-icon">
                                            <i class="ki-duotone ki-sms fs-2 me-3 text-white">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </span>
                                        <span class="menu-title fw-bold"><a href="{{route('customer.message-managememnt')}}" style="color: #fff">Inbox</a></span>
                                        <span class="badge badge-light-success">{{$totalUnread}}</span>
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
                <div class="flex-lg-row-fluid ms-lg-7 ms-xl-10 mb-10">
                    <!--begin::Card-->
                    <div class="card btn-dark-primary">
                        <div class="card-header align-items-center py-5 gap-5 btn-dark-primary">
                            <h2 class="card-title m-0 fs-color-white">Compose Message</h2>
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
                        <div class="card-body">

                            <!--begin::Form-->
                            <form id="kt_inbox_compose_form" class="rounded border btn-dark-primary"  enctype="multipart/form-data"
>


                                <!--begin::Body-->
                                <div class="d-block">

                                    <!--begin::To-->
                                    <div class="d-flex align-items-center border-bottom px-6 min-h-50px justify-content-between py-5 btn-dark-primary">
                                        <!--begin::Actions-->
                                        <div class="border d-flex p-3 align-items-center rounded me-3 btn-dark-primary">
                                            <!--begin::Send-->
                                            <div class="btn-group me-4">
                                                <!--begin::Submit-->
                                               <button class="btn badge-custom-bg fs-bold px-6 clear_message_box" type="submit" >Send</button>

                                                <!--end::Send options-->
                                            </div>
                                            <!--end::Send-->
                                            <!--begin::Upload attachement-->
                                            <div class="btn btn-icon btn-sm btn-clean btn-active-light-primary me-2" id="media_button" data-kt-inbox-form="dropzone_upload">

                                                <label><span class="ki-duotone ki-paper-clip fs-2 m-0 text-white"></span><input hidden type="file" accept=".docx,.pdf,.txt,.rtf,.xlsx,.csv,.pptx,.jpeg,.jpg,.png,.gif" class="upload-attachment" name="media[]" id="media" multiple/></label>
                                            </div>
                                            <!--end::Upload attachement-->
                                            <p id="attach_file_1" class="text-white w-200px"></p>
                                        </div>



                                        <div>
                                            <input type="radio" id="AdminRadio" class="radioAdminWriter" name="statusRadio" value="Admin"  >
                                            <label for="AdminRadio">Admin</label>
                                        </div>
                                        <div>
                                            <input type="radio" id="WriterRadio" class="radioAdminWriter" name="statusRadio" value="Writer" >
                                            <label for="WriterRadio">Writer</label>
                                        </div>



                                        <!--end::Actions-->
                                        <div class="text-center me-3">
                                            <label for="">Order Id:</label>
                                            <select class="form-select form-select-solid form-select-sm btn-dark-primary" name='order_id' data-control="select2" data-hide-search="true">
                                                @if ($order)
                                                   @foreach ($order as $o)
                                                   <option value="{{$o->order_id}}">{{$o->order_id}}</option>
                                                   @endforeach
                                               @endif
                                            </select>

                                        </div>

                                        <!--<div class="border d-flex p-3 align-items-center rounded me-3">-->

                                        <!--    <div class="text-gray-900 fw-bold w-75px">To:</div>-->

                                        <!--</div>-->
                                        <!--begin::Toolbar-->
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
                                    <!--end::To-->
                                    <!--begin::CC-->

                                    <!--end::CC-->
                                    <!--begin::BCC-->

                                    <!--end::BCC-->
                                    <!--begin::Message-->
                                    <div class="bg-transparent border-0 h-250px px-3 text-white" id="editorss"></div>
                                    <textarea class="form-control form-control-transparent border-0 h-100 text-white d-none" id="message_box" name="message"></textarea>

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
                                                    <div class="progress bg-gray-300">
                                                        <div class="progress-bar bg-primary" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" data-dz-uploadprogress=""></div>
                                                    </div>
                                                </div>
                                                <!--end::Dropzone progress-->
                                                <!--begin::Dropzone toolbar-->
                                                <div class="dropzone-toolbar">
                                                    <span class="dropzone-delete" data-dz-remove="">
                                                        <i class="ki-duotone ki-cross fs-2">
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
                        </div>
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Inbox App - Compose -->
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


@endsection

@push('scripts')
<script>

$(document).ready(function (){
     // clear message box





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
});

    $(document).ready(function() {
          $( '#delete_btn').on('click', function (e){
            newMessageEditor.setText('');
            $('#message_box').val('');
            $('#attach_file_1').text('');
            $('#message_box').text('');
        });




    });


    $(document).ready(function () {
    $('#kt_inbox_compose_form').submit(function (e) {
        e.preventDefault(); // Prevent the form from submitting normally

        var formData = new FormData(this);
        formData.append('_token', '{{ csrf_token() }}');

        var sendby = $('.radioAdminWriter:checked').val(); // selected radio
        var orderId = $('select[name="order_id"]').val();

        // ✅ Get message from Quill editor (NOT the hidden textarea)
        var message = newMessageEditor.getText().trim(); // Plain text
        var messageHTML = newMessageEditor.root.innerHTML; // Rich text if needed

        if (!orderId) {
            Swal.fire('Error!', 'To start chatting with us, please place an order first!', 'error');
            return;
        }

        if (!sendby) {
            Swal.fire('Error!', 'Please select a message receiver (Admin or Writer) before proceeding.', 'error');
            return;
        }

        if (!message) {
            Swal.fire('Error!', 'Message cannot be empty. Please type a message before sending.', 'error');
            return;
        }

        formData.append('send_by', sendby);
        formData.append('message', messageHTML); // Use HTML content from Quill

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

                // ✅ Clear fields
                newMessageEditor.setText('');
                $('#attach_file_1').text('');
                $('#media').val('');

                // Optional: clear fallback textarea if you're using it
                $('#message_box').val('');

                // Optional Pusher logic
                Pusher.logToConsole = true;
                var pusher = new Pusher('28e13a39c3918e12f8a9', {
                    cluster: 'ap2'
                });

                var channel = pusher.subscribe('pusher');
                channel.bind('SendMessage', function (data) {
                    alert(JSON.stringify(data));
                    console.log(JSON.stringify(data));
                });
            },
            error: function (error) {
                console.error('Error:', error);
            }
        });

        return false;
    });
});


});
</script>

@endpush
