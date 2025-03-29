@extends('custom_layout.master')
@section('main_content')

<!--begin::App-->
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
                    class="page-heading d-flex text-gray-900 fw-bold fs-1 flex-column justify-content-center text-color my-0">
                    System Configurations
                </h1>
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
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div id="kt_app_content_container" class="app-container container-xxl">
           <div class="row">
                @include('backend.admin.systemConfiguration.smtpConfiguration.partials._smtp_card')
           </div>
        </div>
        <!--end::Content container-->
    </div>
    <!--end::Content-->
</div>
<!--end::Content wrapper-->


<!--begin::Scrolltop-->
<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
    <i class="ki-duotone ki-arrow-up">
        <span class="path1"></span>
        <span class="path2"></span>
    </i>
</div>
<!--end::Scrolltop-->


@endsection
@section('customJs')
<script type="text/javascript">
    $(document).ready(function(){
        checkMailDriver();
        // alert('opkay');
    });
    function checkMailDriver(){
        if($('select[name=MAIL_DRIVER]').val() == 'mailgun'){
            $('#mailgun').show();
            $('#smtp').hide();
        }
        else{
            $('#mailgun').hide();
            $('#smtp').show();
        }
    }
</script>
@endsection