@extends('custom_layout.customer')
@section('main_content')
<!--begin::App-->
<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
    <!--begin::Page-->
    <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
        <!--begin::Header-->
        <!--end::Header-->
        <!--begin::Wrapper-->
        <div class="flex-column flex-row-fluid" id="kt_app_wrapper">
            <!--begin::Sidebar-->
            <!--end::Sidebar-->
            <!--begin::Main-->
            <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
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
                                    Our Current Offers</h1>
                                <!--end::Title-->
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
                            <div class="card card-flush mb-5 card-custom-bg">
                                <div class="card-header text-center d-flex justify-content-center pt-8">
                                    <h1 class="custom-fs-23 fs-color-white ">Apply a Discount Code</h1>
                                </div>


                                <div class="card-body">
                                    <p class="custom-fs-17 fs-color-white text-center mb-5">
                                        Need a discount code? Great! Just copy and paste it into the order form to receive your special savings—no need to contact support. Check our latest available codes below. Enjoy one-time deals and limited-time offers to save on your order!
                                    </p>

                                    <div class="row mb-5">
                                        @if(!empty($discounts))
                                        @foreach($discounts as $discount)
                                        <div class="col-md-6 p-2">
                                            <div class="badge-custom-bg p-5 rounded">
                                                <div class="col-3 fs-color-white custom-fs-23">
                                                    {{$discount->discount}}%
                                                </div>
                                                <div class="col-9 fs-color-white custom-fs-13">
                                                Enjoy an {{$discount->discount}}% discount on your order when you purchase {{$discount->min_pages}}
                                                pages or more! Use code: <span class="fs-color-yellow">{{$discount->code}}</span>
                                                </div>
                                            </div>
                                        </div>


                                        @endforeach
                                        @endif
                                    </div>

                                </div>
                            </div>

                            <div class="card card-flush mb-5 card-custom-bg message-summ">
                                <div class="btn-dark-primary p-5 rounded">
                                    <div class="text-center fs-color-white custom-fs-23" style="font-size: 16px !important;">
                                        <p>Invite Friends & Save on Page Packages</p>
                                        Refer friends and earn discounts! When they place an order, you’ll get a discount on our packages. Buy in bulk at a flat rate and use them anytime. Thanks for spreading the word!
                                    </div>
                                    <!--begin::Card header-->
                                    <div class="card-header pt-8">

                                        <div class="card-title">
                                            <!--begin::Search-->
                                            <div class="d-flex align-items-center position-relative my-1">
                                                <i class="ki-duotone ki-magnifier fs-1 position-absolute ms-6">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                                <input type="text" id="searchInput"
                                                    data-kt-filemanager-table-filter="search"
                                                    class="form-control form-control-solid w-250px ps-15 btn-dark-primary"
                                                    placeholder="Search " />
                                            </div>
                                            <!--end::Search-->
                                        </div>
                                        <div class="card-toolbar">
                                            <!--begin::Toolbar-->
                                            <div class="d-flex justify-content-end"
                                                data-kt-filemanager-table-toolbar="base">

                                                <!--begin::Export-->
                                                <button type="button" class="btn btn-flex  me-3 badge-custom-bg"
                                                    id="kt_modal_create_brand_ambassador">
                                                    Invite by email
                                                </button>
                                                <!--end::Export-->
                                            </div>
                                            <!--end::Toolbar-->

                                            <!--begin::Group actions-->
                                            <div class="d-flex justify-content-end align-items-center d-none"
                                                data-kt-filemanager-table-toolbar="selected">
                                                <div class="fw-bold me-5">
                                                    <span class="me-2"
                                                        data-kt-filemanager-table-select="selected_count"></span>
                                                    Selected
                                                </div>

                                                <button type="button" class="btn btn-danger"
                                                    data-kt-filemanager-table-select="delete_selected">
                                                    Delete Selected
                                                </button>
                                            </div>
                                            <!--end::Group actions-->
                                        </div>
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div class="card-body">
                                        <!--begin::Table-->
                                        <table id="kt_brand_amb_table" data-kt-filemanager-table="files"
                                            class="table align-middle table-row-dashed fs-6 gy-5">
                                            <thead>
                                                <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                                                    <th>#</th>
                                                    <th>Sender ID</th>
                                                    <th>sender Name</th>
                                                    <th>Receiver Name</th>
                                                    <th>Email</th>
                                                    <th>Subject</th>
                                                    <th>Message</th>
                                                </tr>
                                            </thead>
                                            <tbody class="fw-semibold text-gray-600">
                                                @foreach ($brnadambassador as $key => $b )
                                                <tr>
                                                    <td>{{$key+1}}</td>
                                                    <td>{{$b->sender_id}}</td>
                                                    <td>{{$b->sender_name}}</td>
                                                    <td>{{$b->receiver_name}}</td>
                                                    <td>{{$b->email}}</td>
                                                    <td>{{$b->subject}}</td>
                                                    <td>{{$b->message}}</td>


                                                </tr>

                                                @endforeach



                                            </tbody>
                                        </table>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Card body-->
                                </div>
                            </div>
                            <!--end::Content container-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Content wrapper-->


                    <!--begin::Modal-->
                    <div class="modal fade" id="kt_modal_create_brand_ambassador_modal" tabindex="-1"
                        aria-hidden="true">
                        <!--begin::Modal dialog-->
                        <div class="modal-dialog modal-dialog-centered mw-650px">
                            <!--begin::Modal content-->
                            <div class="modal-content badge-custom-bg">
                                <!--begin::Modal header-->
                                <div class="modal-header">
                                    <!--begin::Modal title-->
                                    <h2 class="fw-bold fs-color-white custom-fs-23">Share Your Experience with Your Peers.</h2>
                                    <!--end::Modal title-->
                                    <!--begin::Close-->
                                    <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal"
                                        aria-label="Close">
                                        <i class="ki-duotone ki-cross fs-1 text-white">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </div>
                                    <!--end::Close-->
                                </div>
                                <!--end::Modal header-->

                                <!--begin::Modal body-->
                                <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                                    <!--begin::Form-->
                                    <form id="kt_modal_update_email_form" class="form">
                                        @csrf
                                        <!--begin::Notice-->
                                        <!--begin::Notice-->
                                        {{-- <div
                                            class="notice d-flex bg-light-success rounded border-success border border-dashed mb-9 p-6">

                                            <div class="d-flex flex-stack flex-grow-1">

                                                <div class="fw-semibold">
                                                    <div class="fs-6 text-gray-700">Share Your Experience with Your Peers.
                                                    </div>
                                                </div>

                                            </div>

                                        </div> --}}
                                        <!--end::Notice-->
                                        <!--end::Notice-->

                                        <!--begin::Input group-->
                                        <div class="fv-row mb-7">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-semibold form-label mb-2">
                                                <span class="required fs-color-white custom-fs-13">Name</span>
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-solid btn-dark-primary"
                                                placeholder="Enter name.." id="brand_abm_name" name="name"
                                                value="{{ old('name') }}" />
                                            <span id="name_error" class="text-danger"></span>
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->

                                        <!--begin::Input group-->
                                        <div class="fv-row mb-7">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-semibold form-label mb-2">
                                                <span class="required fs-color-white custom-fs-13">Email</span>
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="email" class="form-control form-control-solid btn-dark-primary"
                                                placeholder="Enter email address.." id="brand_abm_email" name="email"
                                                value="{{ old('email') }}" />
                                            <span id="email_error" class="text-danger"></span>
                                            <!--end::Input-->
                                        </div>
                                        <div class="fv-row mb-7">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-semibold form-label mb-2">
                                                <span class="required fs-color-white custom-fs-13">Subject</span>
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="subject" class="form-control form-control-solid btn-dark-primary"
                                                placeholder="Enter email Subject.." id="brand_abm_subject" name="subject"
                                                value="{{ old('subject') }}" />
                                            <span id="subject_error" class="text-danger"></span>
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->

                                        <!--begin::Input group-->
                                        <div class="fv-row mb-7">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-semibold form-label mb-2">
                                                <span class="required fs-color-white custom-fs-13">Message</span>
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <textarea name="message"
                                                class="form-control form-control-solid btn-dark-primary"
                                                placeholder="Message.." id="brand_abm_message" cols="30"
                                                rows="10">{{ old('message') }}</textarea>
                                            <span id="message_error" class="text-danger"></span>
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->

                                        <!--begin::Actions-->
                                        <div class="text-center pt-15">
                                            <button onclick="discard()" type="reset" class="btn me-3 btn-dark-primary"
                                                data-bs-dismiss="modal">Discard</button>
                                            <button type="submit" class="btn  sendEmail badge-custom-bg-2"
                                                data-kt-users-modal-action="submit">
                                                <span class="indicator-label">Send Email</span>
                                                <span class="indicator-progress">Please wait...
                                                    <span
                                                        class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                            </button>
                                        </div>
                                        <!--end::Actions-->
                                    </form>
                                    <!--end::Form-->
                                </div>
                                <!--end::Modal body-->

                            </div>
                            <!--end::Modal content-->
                        </div>
                        <!--end::Modal dialog-->
                    </div>
                    <!--end::Modal - Update email-->


                </div>
                <!--end:::Main-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::App-->
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


    <script>
        // Function to handle table search
        $(document).ready(function () {
            $('#kt_brand_amb_table').dataTable();

            $("#searchInput").on("input", function () {
                var searchValue = $(this).val().toLowerCase();
                $("#kt_brand_amb_table tbody tr").filter(function () {
                    $(this).toggle($(this).text().toLowerCase().indexOf(searchValue) > -1);
                });
            });

            $('#kt_modal_create_brand_ambassador').on('click', function () {
                $('#kt_modal_create_brand_ambassador_modal').modal('show');

                $('#kt_modal_update_email_form').on('submit', function (e) {
                    e.preventDefault();
                                        $('.sendEmail').prop('disabled', true);

                    var name = $('#brand_abm_name').val();
                    var email = $('#brand_abm_email').val();
                    var subject = $('#brand_abm_subject').val();
                    var message = $('#brand_abm_message').val();

                    // if (!isValidEmailAddress(email)) {
                    //     Swal.fire('Error!', 'Oops! Please enter a valid email address', 'error');
                    //     return;
                    // }



                    $.ajax({
                        type: "POST",
                        url: "{{ route('customer.brand.ambassadors') }}",
                        data: {
                            name: name,
                            email: email,
                            subject: subject,
                            message: message,
                            _token: "{{ csrf_token() }}"
                        },
                        dataType: "json",
                        beforeSend: function () {

                        },
                        success: function (response) {
                            if (response.status) {

                                //alert(response.message);

                                Swal.fire('success!', response.message, 'success');

                                clearFormErrors();
                                clearFormFields();
                                hideModal();
                            }
                        },
                        error: function (xhr) {
                            handleAjaxError(xhr.responseJSON.errors);
                        },
                        complete: function () {
                            enableSendEmailButton();
                        }
                    });

                });
            });

        });

        function isValidEmailAddress(emailAddress) {
            var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
            return pattern.test(emailAddress);
        }


        function clearFormErrors() {
            $('#email_error, #name_error, #message_error').text('');
        }

        function clearFormFields() {
            $('#brand_abm_email, #brand_abm_name, #brand_abm_message').val('');
        }

        function hideModal() {
            $('#kt_modal_create_brand_ambassador_modal').modal('hide');
        }

        function handleAjaxError(errors) {
            $('.sendEmail').prop('disabled', false);
            $('#email_error').text(errors.email ? errors.email[0] : '');
            $('#name_error').text(errors.name ? errors.name[0] : '');
            $('#message_error').text(errors.message ? errors.message[0] : '');
        }

        function enableSendEmailButton() {
            $('.sendEmail').prop('disabled', false);
        }
        function discard(){
            $('#email_error').text('');
            $('#name_error').text('');
            $('#message_error').text('');
                        $('.sendEmail').prop('disabled', false);

            hideModal();
        }
    </script>
    <!--end::Javascript-->
    <style>
        #kt_modal_update_email_form .text-danger {
            color: #fff !important;
        }
    </style>

    @endsection
