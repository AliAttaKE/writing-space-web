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
                                        <span class="badge text-white">{{$totalUnread}}</span>
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

                                                <label><span class="ki-duotone ki-paper-clip fs-2 m-0 text-white"></span><input hidden type="file" accept=".docx,.pdf,.txt,.rtf,.xlsx,.csv,.pptx,.jpeg,.jpg" class="upload-attachment" name="media[]" id="media" multiple /></label>
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

<!-- jQuery aur Quill CDN (ek dafa hi include karein) -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/quill@2/dist/quill.js"></script>

<script>
  $(function() {
    // 1) Quill editor initialize karo
    var replyMessageEditor = new Quill('#replyMessageEditor', {
      theme: 'snow',
      placeholder: 'Compose your message here…'
    });

    // 2) Trash icon pe click → editor aur textarea dono clear karo
    $('#delete_btn').on('click', function() {
      replyMessageEditor.setText('');           // Quill ke andar ka text
      $('#message_box').val('');                // Hidden textarea
      $('#attach_file_1').text('');             // Attached file names display
    });

    // 3) Form submit pe Quill content textarea mein daal kar AJAX bhejo
    $('#kt_inbox_reply_form').on('submit', function(e) {
      e.preventDefault();

      // Quill ka HTML content lo (plain text ke liye getText())
      var htmlContent = replyMessageEditor.root.innerHTML;
      $('#message_box').val(htmlContent);

      var formData = new FormData(this);
      formData.append('_token', '{{ csrf_token() }}');
      formData.append('send_by', $('.radioAdminWriter:checked').val());

      // AJAX request
      $.ajax({
        url: '{{ route("customer.send-message") }}',
        method: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        success: function(response) {
          Swal.fire('Success!', 'Your Message Sent Successfully.', 'success');
          // Clear editor after send
          replyMessageEditor.setText('');
          $('#message_box').val('');
          $('#attach_file_1').text('');
          $('#media').val('');
        },
        error: function(err) {
          console.error(err);
        }
      });
    });
  });
</script>
<script>
    document.getElementById('media').addEventListener('change', function () {
        const fileList = this.files;
        let fileNames = [];

        for (let i = 0; i < fileList.length; i++) {
            fileNames.push(fileList[i].name);
        }

        // Show names in the paragraph
        document.getElementById('attach_file_1').textContent = fileNames.join(', ');
    });
</script>



@endsection
