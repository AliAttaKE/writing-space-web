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
                <h1
                    class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0 fs-color-white custom-fs-23">
                    Compose</h1>
                <!--end::Title-->
                <!--begin::Breadcrumb-->
                <!-- <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">

                    <li class="breadcrumb-item text-muted">
                        <a href="message-management.php" class="text-muted text-hover-primary">Messagae Management</a>
                    </li>

                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-500 w-5px h-2px"></span>
                    </li>


                    <li class="breadcrumb-item text-muted">Compose</li>

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
                <div class="d-none d-lg-flex flex-column flex-lg-row-auto w-100 w-lg-200px" data-kt-drawer="true"
                    data-kt-drawer-name="inbox-aside" data-kt-drawer-activate="{default: true, lg: false}"
                    data-kt-drawer-overlay="true" data-kt-drawer-width="225px" data-kt-drawer-direction="start"
                    data-kt-drawer-toggle="#kt_inbox_aside_toggle">
                    <!--begin::Sticky aside-->
                    <div class="card card-flush mb-0">
                        <!--begin::Aside content-->
                        <div class="card-body">
                            <!--begin::Button-->
                            <a href="{{route('admin.new-message')}}"
                                class="btn btn-primary fw-bold w-100 mb-8 badge-custom-bg">New Message</a>
                            <!--end::Button-->
                            <!--begin::Menu-->
                            <div
                                class="menu menu-column menu-rounded menu-state-bg menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary mb-10">
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
                                        <span class="menu-title fw-bold"><a href="{{route('admin.message-management')}}"
                                                style="color: #fff">Inbox</a></span>
                                        <span class="badge badge-custom-bg">{{count($data)}}</span>
                                    </span>
                                    <!--end::Inbox-->
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                {{-- <div class="menu-item mb-3">
                                    <!--begin::Marked-->
                                    <span class="menu-link">
                                        <span class="menu-icon">
                                            <i class="ki-duotone ki-abstract-23 fs-2 me-3">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </span>
                                        <span class="menu-title fw-bold">Marked</span>
                                    </span>
                                    <!--end::Marked-->
                                </div> --}}
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                {{-- <div class="menu-item mb-3">
                                    <!--begin::Draft-->
                                    <span class="menu-link">
                                        <span class="menu-icon">
                                            <i class="ki-duotone ki-file fs-2 me-3">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </span>
                                        <span class="menu-title fw-bold">Draft</span>
                                        <span class="badge badge-light-warning">5</span>
                                    </span>
                                    <!--end::Draft-->
                                </div> --}}
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                {{-- <div class="menu-item mb-3">
                                    <!--begin::Sent-->
                                    <span class="menu-link">
                                        <span class="menu-icon">
                                            <i class="ki-duotone ki-send fs-2 me-3">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </span>
                                        <span class="menu-title fw-bold">Sent</span>
                                    </span>
                                    <!--end::Sent-->
                                </div> --}}
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                {{-- <div class="menu-item">
                                    <!--begin::Trash-->
                                    <span class="menu-link">
                                        <span class="menu-icon">
                                            <i class="ki-duotone ki-trash fs-2 me-3">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                                <span class="path5"></span>
                                            </i>
                                        </span>
                                        <span class="menu-title fw-bold">Trash</span>
                                    </span>
                                    <!--end::Trash-->
                                </div> --}}
                                <!--end::Menu item-->
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
                    <div class="card">
                        <div class="card-header align-items-center py-5 gap-5">
                            <h2 class="card-title m-0 fs-color-white custom-fs-17">Compose Message</h2>
                            <!--begin::Toggle-->
                            <a href="#"
                                class="btn btn-sm btn-icon btn-color-primary btn-light btn-active-light-primary d-lg-none"
                                data-bs-toggle="tooltip" data-bs-dismiss="click" data-bs-placement="top"
                                title="Toggle inbox menu" id="kt_inbox_aside_toggle">
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
                            <form id="kt_inbox_compose_form" class="rounded border">


                                <!--begin::Body-->
                                <div class="d-block">

                                    <!--begin::To-->
                                    <div
                                        class="d-flex align-items-center border-bottom px-6 min-h-50px justify-content-between py-5">
                                        <!--begin::Actions-->
                                        <div class="border d-flex p-3 align-items-center rounded me-3">
                                            <!--begin::Send-->
                                            <div class="btn-group me-4">
                                                <!--begin::Submit-->
                                                <button class="btn badge-custom-bg fs-bold px-6 clear_message_box"
                                                    type="submit">Send</button>
                                                <!--end::Submit-->

                                            </div>
                                            <!--end::Send-->
                                            <!--begin::Upload attachement-->
                                            <div class="btn btn-icon btn-sm btn-clean me-2 badge-custom-bg"
                                                id="media_button" data-kt-inbox-form="dropzone_upload">
                                                <label><span
                                                        class="ki-duotone ki-paper-clip fs-2 m-0 text-white"></span>
                                                        <input
                                                        hidden type="file" class="upload-attachment" name="media[]"
                                                        id="media" multiple accept="image/*"/></label>
                                            </div>
                                            <p id="attach_file_1" class="text-white  w-200px"></p>
                                            <!--end::Upload attachement-->
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
                                        <div class="text-center me-3">
                                            <label for="" class="fs-color-white custom-fs-13">Order Id:</label>
                                            <select
                                                class="form-select form-select-solid form-select-sm btn-dark-primary position-relative msg-id"
                                                name='order_id' data-control="select2" data-hide-search="true">
                                                @if ($order)
                                                @foreach ($order as $o)
                                                <option class="badge-custom-bg" value="{{$o->order_id}}">
                                                    {{$o->order_id}}</option>
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
                                            <span class="btn btn-icon btn-sm btn-clean  clear_message_box message"
                                                data-inbox="dismiss" data-toggle="tooltip" title="Discard reply">
                                                <i class="ki-duotone ki-trash fs-2">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                    <span class="path4"></span>
                                                    <span class="path5"></span>
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
                                    <textarea
                                        class="form-control form-control-transparent border-0 h-100 text-white d-none messagesend"
                                        id="message_box" name="message" placeholder="Message Here" value=""></textarea>
                                    <div id="newMessageEditor" class="border-0 bg-transparent h-250px px-3"></div>
                                    <!--end::Message-->
                                    <!--begin::Attachments-->
                                    <div class="dropzone dropzone-queue px-8 py-4" id="kt_inbox_reply_attachments"
                                        data-kt-inbox-form="dropzone">
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
                                                        <div class="progress-bar bg-primary" role="progressbar"
                                                            aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"
                                                            data-dz-uploadprogress=""></div>
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
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/quill@2/dist/quill.js"></script>
<script>

    const newMessageEditor = new Quill("#newMessageEditor", {
        theme: "snow",
    });

    addEventListener('keyup', () => {
        var editorContent = newMessageEditor.root.innerHTML;
        var message = document.getElementById('message');
        message.innerHTML = editorContent;
    });





    document.getElementById("media").addEventListener("change", function () {
        var files = this.files;
        var fileNames = "";
        for (var i = 0; i < files.length; i++) {
            fileNames += files[i].name + ", ";
        }
        // Remove the last comma and space
        fileNames = fileNames.slice(0, -2);
        document.getElementById("attach_file_1").innerText = "Selected files: " + fileNames;
    });


    // Update the hidden textarea with Quill content
    var form = document.querySelector('form');
    form.onsubmit = function () {
        // Get Quill content as HTML
        var quillContent = quill.root.innerHTML;
        // Update the hidden textarea with HTML content
        form.querySelector('textarea[name=message]').value = quillContent;
    };
</script>
<script>

$(document).ready(function () {
    $('#kt_inbox_compose_form').submit(function (e) {
        e.preventDefault();

        var formData = new FormData(this);
        formData.append('_token', '{{ csrf_token() }}');

        // Get selected radio value
        var send_by = $('.radioAdminWriter:checked').val();
        if (!send_by) {
            Swal.fire('Error!', 'Please select a message receiver (Admin or Writer) before proceeding.', 'error');
            return;
        }
        formData.append('send_by', send_by);

        // Get text and HTML content from the Quill editor
        var messageText = newMessageEditor.getText().replace(/\s+/g, '').trim();
        var messageHTML = newMessageEditor.root.innerHTML.trim();

        if (!messageText) {
            Swal.fire('Error!', 'Message cannot be empty. Please type a message before sending.', 'error');
            return;
        }

        formData.append('message', messageHTML);

        // Log for debugging
        console.log('Sending formData...');
        for (var pair of formData.entries()) {
            console.log(pair[0] + ': ' + pair[1]);
        }

        var url = '{{ route("admin.send-message") }}';
        $.ajax({
            type: 'POST',
            url: url,
            data: formData,
            processData: false,
            contentType: false,
            success: function (response) {
                console.log('Server response:', response);
                Swal.fire('Success', 'Your Message Sent Successfully.', 'success');

                // Clear editor and attachment
                newMessageEditor.setText('');
                $('#attach_file_1').text('');

                // Setup Pusher
                Pusher.logToConsole = true;
                var pusher = new Pusher('28e13a39c3918e12f8a9', {
                    cluster: 'ap2'
                });

                var channel = pusher.subscribe('pusher');
                channel.bind('SendMessage', function (data) {
                    console.log('Pusher message:', data);
                    alert(JSON.stringify(data));
                });
            },
            error: function (error) {
                console.error('Error:', error);
            }
        });
    });

    // Clear message box manually
    $(document).on('click', '.clear_message_box', function () {
        $('#message_box').val('');
        newMessageEditor.setText('');
        $('#attach_file_1').text('');
    });
});

</script>
@endsection
