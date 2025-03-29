@extends('custom_layout.master')
@section('main_content')

<style>
    select#tier option {
    color: #ffffff !important;
    background-color: #783afb !important;
}

.customActive
{
    color: #783AFB !important;
}
</style>
<div class="d-flex flex-column flex-column-fluid">
    <!--begin::Content wrapper-->
    <div class="d-flex flex-column flex-column-fluid">
        <!--begin::Toolbar-->
        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <!--begin::Toolbar container-->
            <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                <!--begin::Page title-->
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                    <!--begin::Title-->
                    <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0 text-color">Contact Customer</h1>
                    <!--end::Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">Customer Management
                        </li>
                        <!--end::Item-->
                    </ul>
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
                <!--begin::Contacts App- Getting Started-->
                <div class="row g-7">


                    <!--begin::Contact groups-->
                    <div class="col-lg-6 col-xl-3">
                        <!--begin::Contact group wrapper-->
                        <div class="card card-flush">
                            <!--begin::Card header-->
                            <div class="card-header pt-7" id="kt_chat_contacts_header">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <h2 class="text-color">Customers</h2>
                                </div>
                                <!--end::Card title-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-5">
                                <!--begin::Contact groups-->
                               <div class="d-flex flex-column gap-5">
                                    
                                    <div class="d-flex flex-stack">
                                        <a href="#all_contact" id="count_all_contact" class="fs-6 fw-bold text-gray-800 text-hover-primary text-active-primary  tabBTN filterBtn fs-color-yellow" data-id="all_customers" >All Contacts</a>
                                        <div class="badge badge-light-primary badge-custom-bg">{{countAllUsers()?? '0'}}</div>
                                    </div>
                                    
                                    
                                    <div class="d-flex flex-stack">
                                        <a href="#prospects" id="count_prospects" class="fs-6 fw-bold text-gray-800 text-hover-primary tabBTN filterBtn fs-color-yellow" data-id="prospects">(Prospects)</a>
                                        <div class="badge badge-light-primary badge-custom-bg">{{countUsersByTier('prospects') ?? '0'}}</div>
                                    </div>
                                    
                                    
                                    <div class="d-flex flex-stack">
                                        <a href="#tier_one" id="count_tier_one" class="fs-6 fw-bold text-primary text-hover-primary tabBTN filterBtn fs-color-yellow" data-id="tier_1">(Tier-1) Posted Custom Order(s)</a>
                                        <div class="badge badge-light-primary badge-custom-bg">{{countUsersByTier('tier_1') ?? '0'}}</div>
                                    </div>
                                    
                                    
                                    <div class="d-flex flex-stack">
                                        <a href="#tier_two" id="count_tier_two" class="fs-6 fw-bold text-success text-hover-primary tabBTN filterBtn fs-color-yellow" data-id="tier_2">(Tier-2) Purchased Package </a>
                                        <div class="badge badge-light-primary badge-custom-bg">{{countUsersByTier('tier_2') ?? '0'}}</div>
                                    </div>
                                    
                                    
                                    <div class="d-flex flex-stack">
                                        <a href="#tier_three" id="count_tier_three" class="fs-6 fw-bold text-warning text-hover-primary tabBTN filterBtn fs-color-yellow" data-id="tier_3">(Tier-3) Re-Purchased Package</a>
                                        <div class="badge badge-light-primary badge-custom-bg">{{countUsersByTier('tier_3') ?? '0'}}</div>
                                    </div>
                                    
                                    
                                    <div class="d-flex flex-stack">
                                        <a href="#tier_four" id="count_tier_four" class="fs-6 fw-bold text-info text-hover-primary tabBTN filterBtn fs-color-yellow" data-id="tier_4">(Tier-4) Brand Ambassadors</a>
                                        <div class="badge badge-light-primary badge-custom-bg">{{countUsersByTier('tier_4',true) ?? '0'}}</div>
                                    </div>
                                    
                                    
                                    <div class="d-flex flex-stack">
                                        <a href="#block" id="count_block" class="fs-6 fw-bold text-danger text-hover-primary tabBTN filterBtn fs-color-yellow" data-id="blocked">Blocked</a>
                                        <div class="badge badge-light-danger badge-custom-bg">{{countUsersByBlocked() ?? '0'}}</div>
                                    </div>
                                    
                                </div>
                                <div class="separator my-7"></div>
                               
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Contact group wrapper-->
                    </div>
                    <!--end::Contact groups-->

     
                    <div class="col-lg-6 col-xl-4">

                        <div class="card card-flush" id="kt_contacts_list">
                            <div class="card-header px-2 pt-7" id="kt_contacts_list_header">
                                <div class="d-flex justify-content-end mb-5 w-100 align-items-center">

                                    <button type="button" class="btn btn-light-primary me-3 showExcelModalBtn badge-custom-bg">
                                        <i class="ki-duotone ki-exit-up fs-2 text-color">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>Export</button>
                                </div>
                                <form class="d-flex align-items-center position-relative w-100 m-0" autocomplete="off">
                                    <i class="ki-duotone ki-magnifier fs-3 text-gray-500 position-absolute top-50 ms-5 translate-middle-y text-color">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                    <input type="text" class="form-control form-control-solid w-250px ps-13 btn-dark-primary" id="search" placeholder="Search" />
                                </form>

                            </div>
                           
                            <div class="card-body px-2 pt-5" id="kt_contacts_list_body">
                                <!--begin::List-->
                               
                                <div 
                                    class="scroll-y me-n5 pe-5 h-300px h-xl-auto" 
                                    data-kt-scroll="true" 
                                    data-kt-scroll-activate="{default: false, lg: true}" 
                                    data-kt-scroll-max-height="auto" 
                                    data-kt-scroll-dependencies="#kt_header, #kt_toolbar, #kt_footer, #kt_contacts_list_header" 
                                    data-kt-scroll-wrappers="#kt_content, #kt_contacts_list_body" 
                                    data-kt-scroll-stretch="#kt_contacts_list, #kt_contacts_main" 
                                    data-kt-scroll-offset="5px" style="max-height: 729px;" id="tierDataRow">
                                    
                                    <!--end::Separator-->
                                </div>

                                <div 
                                    class="scroll-y me-n5 pe-5 h-300px h-xl-auto" 
                                    data-kt-scroll="true" 
                                    data-kt-scroll-activate="{default: false, lg: true}" 
                                    data-kt-scroll-max-height="auto" 
                                    data-kt-scroll-dependencies="#kt_header, #kt_toolbar, #kt_footer, #kt_contacts_list_header" 
                                    data-kt-scroll-wrappers="#kt_content, #kt_contacts_list_body" 
                                    data-kt-scroll-stretch="#kt_contacts_list, #kt_contacts_main" 
                                    data-kt-scroll-offset="5px" style="max-height: 729px;" id="newTierDataRow">

                                    <!--end::Separator-->
                                </div>
                                <!--end::List-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Contacts-->
                    </div>
                    <!--end::Search-->

                    <!--begin::Content-->
                    <div class="col-xl-4">
                        <!--begin::Card-->
                        <div class="card card-flush h-lg-100" id="kt_contacts_main">
                            <!--begin::Card body-->
                            <div class="card-body p-0">
                                <!--begin::Wrapper-->
                                <div class="card-px text-center py-20 my-10">
                                    <!--begin::Title-->
                                    <!-- <h2 class="fs-2x fw-bold mb-10">Welcome to the Contacts App</h2> -->
                                    <!--end::Title-->
                                    <!--begin::Description-->
                                    <p class="text-gray-500 fs-4 fw-semibold mb-10">
                                        <!-- It's time to expand our contacts.
                                        <br>Kickstart your contacts growth by adding a your next contact. -->
                                    </p>
                                    <!--end::Description-->
                                    <!--begin::Action-->
                                    <a href="{{ route('admin.add.new.customer') }}" class="btn badge-custom-bg">Add New Contact</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Illustration-->
                                <div class="text-center px-4">
                                    <img class="mw-100 mh-300px" alt="" src="{{asset('backend/assets/media/illustrations/sketchy-1/5.png')}}">
                                </div>
                                <!--end::Illustration-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card-->
                    </div>
                    <!--end::Content-->

                </div>
                <!--end::Contacts App- Getting Started-->
            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->

    </div>
    <!--end::Content wrapper-->


        <div class="modal fade show" id="showExcelModal" tabindex="-1" aria-modal="true" role="dialog">

            <div class="modal-dialog modal-dialog-centered mw-650px" data-select2-id="select2-data-9-b3ox">
        
                <div class="modal-content badge-custom-bg" data-select2-id="select2-data-8-w611">
        
                    <div class="modal-header">
        
                        <h2 class="fw-bold fs-color-white custom-fs-23">Export Users</h2>
        
                        <div class="btn btn-icon btn-sm btn-dark-primary" data-bs-dismiss="modal" aria-label="Close">
                            <i class="ki-duotone ki-cross fs-1 text-white">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </div>
        
                    </div>
        
                    <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
        
                        <form action="{{route('admin.customer.export.tier')}}"
                            id="exportForm"
                            method="GET" enctype="multipart/form-data"
                            class="form"
                            data-select2-id="select2-data-kt_modal_export_users_form">
                            @csrf
                            <div class="fv-row mb-10">
        
                                <label class="fs-6 fw-semibold form-label mb-2 fs-color-white custom-fs-13">Select Tier:</label>
        
                                <select class="form-select form-select-solid fw-bold btn-dark-primary" name="tier" id="tier">
                                    <option data-select2-id="select2-data-3-mw77"></option>
                                    <option value="all_customers" data-select2-id="select2-data-14-eiyz">All Customers</option>
                                    <option value="prospects" data-select2-id="select2-data-14-eiyz">Prospects</option>
                                    <option value="tier_1" data-select2-id="select2-data-13-pnao">Tier 1</option>
                                    <option value="tier_2" data-select2-id="select2-data-14-eiyz">Tier 2</option>
                                    <option value="tier_3" data-select2-id="select2-data-14-eiyz">Tier 3</option>
                                    <option value="tier_4" data-select2-id="select2-data-14-eiyz">Tier 4</option>
                                    <option value="blocked" data-select2-id="select2-data-14-eiyz">Blocked</option>
                                </select>
        
                            </div>

                            <div class="text-center">
                                <button type="reset" class="btn btn-dark-primary me-3" data-bs-dismiss="modal">Discard</button>
                                <button type="submit" class="btn btn-dark-primary" data-kt-users-modal-action="submit">
                                    <span class="indicator-label">Export</span>
                                    <span class="indicator-progress">Please wait...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                            </div>
        
                        </form>
        
                    </div>
                </div>
            </div>
        </div>

    
    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <i class="ki-duotone ki-arrow-up">
            <span class="path1"></span>
            <span class="path2"></span>
        </i>
    </div>
    <!--end::Scrolltop-->
</div>

@endsection
@section('customJs')


    <!--begin::Javascript-->
    <script>
        $(document).ready(function (){

            $(document).on('click', '.filterBtn', function (e){
                e.preventDefault();
                var value = $(this).data('id');
                localStorage.setItem('filterBtn', value);
                $.ajax({
                    type: "GET",
                    url: "{{ route('admin.customer.tier', ['value' => ':value']) }}".replace(':value', value),
                    dataType: "json",
                    success: function (response) {
                            $('#tierDataRow').empty();
                            $.each(response, function(index, item) {
                                var avatarSrc = item.avatar
                                ? '{{ asset("images/users/customers/") }}/' + item.avatar
                                : '{{ asset("backend/assets/media/avatars/300-1.jpg") }}';

                                var userHtml = `
                                    <div class="d-flex py-4 members justify-content-start">
                                       
                                        <div class="d-flex align-items-center comp">
                                            <div class="symbol symbol-40px symbol-circle contact_image">
                                                <img alt="Pic" src="${avatarSrc}">
                                                
                                            </div>
                                            <div class="ms-4">
                                                <a class="fs-color-yellow" href="{{url('admin/show/customer/details/${item.id}')}}" 
                                                class="fs-6 fw-bold text-gray-900 text-hover-primary mb-2 search_name">${item.name}</a>
                                                <div class="fw-semibold fs-7 text-muted">${item.email}</div>
                                            </div>
                                        </div>

                                    </div>  <div class="separator separator-dashed"></div>`;

                                // Append the HTML structure to the 'tierDataRow' div
                                $('#tierDataRow').append(userHtml);
                            });
                        }
                });
            });

            //search filter;
            $('#search').on('keyup', function(){
                var value = $(this).val().toLowerCase();
                var filterBtn = localStorage.getItem('filterBtn');

                console.log(filterBtn);
                console.log(value);
                if(value)
                {

                    $('#tierDataRow').empty();
                    $('#tierDataRow').hide();
                    $('#newTierDataRow').show();
                }
                else{
                    $('#tierDataRow').show();
                    $('#newTierDataRow').empty();
                    $('#newTierDataRow').hide();
                }

                $.ajax({
                    type: 'GET',
                    url : '{{route('admin.search.customer')}}',
                    data: {'search':value, 'filter':filterBtn},
                    success: function(data) {
                        console.log(data);
                        $('#newTierDataRow').empty();

                        if (data.length > 0) {
                            $.each(data, function(index, item) {
                                var avatarSrc = item.avatar ? '{{ asset("images/users/customers/") }}/' + item.avatar
                                                            : '{{ asset("backend/assets/media/avatars/300-1.jpg") }}';

                                var userHtml = `
                                    <div class="d-flex py-4 members justify-content-start">
                                        <div class="d-flex align-items-center comp">
                                            <div class="symbol symbol-40px symbol-circle contact_image">
                                                <img alt="Pic" src="${avatarSrc}">
                                            </div>
                                            <div class="ms-4">
                                                <a class="fs-color-yellow" href="{{url('admin/show/customer/details/${item.id}')}}" 
                                                class="fs-6 fw-bold text-gray-900 text-hover-primary mb-2 search_name">${item.name}</a>
                                                <div class="fw-semibold fs-7 text-muted">${item.email}</div>
                                            </div>
                                        </div>
                                    </div>  
                                    <div class="separator separator-dashed"></div>`;

                                $('#newTierDataRow').append(userHtml);
                            });
                        } else {
                            $('#newTierDataRow').html('<p class="text-white">No records found.</p>');
                        }
                    }

                });
            });

            //export excel sheet;
            $(document).on('click', '.showExcelModalBtn', function (e){
                $('#showExcelModal').modal('show');
                $('#exportForm').on('submit', function (e) {
                    $('#showExcelModal').modal('hide');
                });
            });

            //active tabs;
            var old_tab_value = localStorage.getItem('tab_value');
            $('.tabBTN').on('click', function() {
                // Remove customActive class from all tab buttons
                $('.tabBTN').removeClass('customActive');

                var hrefValue = $(this).attr('href');
                localStorage.setItem('tab_value', hrefValue);
                var tab_value = localStorage.getItem('tab_value');
                if (tab_value === hrefValue) {
                    $(hrefValue).addClass('customActive');
                    $(this).addClass('customActive');
                }
                console.log(tab_value);
            });





        });//main document dot ready function end here;

    </script>
    <script>

    $(document).ready(function() {

       

        //  if (old_tab_value) {
        //      $(old_tab_value).addClass('customActive');
        //      $('.tabBTN[href="' + old_tab_value + '"]').addClass('customActive');
        //  }
    });

 //    // Function to handle name and email search
    // function handleNameAndEmailSearch() {
    //     // Get the search input value
    //     var searchText = $('#search').val().toLowerCase();
    //     console.log(searchText)
    
    //     $('.members .comp').each(function() {
    //         // Find the name and email elements
    //         var nameElement = $(this).find('.search_name');
    //         var emailElement = $(this).find('.fw-semibold.fs-7');
    //         var memberElement = $(this).find('.contact_image');
    //         var name = $(this).text();
    //         console.log(memberElement)
    //         // Get the text content of the name and email elements
    //         var nameText = nameElement.text().toLowerCase();
    //         var emailText = emailElement.text().toLowerCase();

    //         // Check if either the name or email contains the search text
    //         console.log(nameText.indexOf(searchText))
    //         if (nameText.indexOf(searchText) === -1) {
    //             // Hide the user element if neither matches the search text
    //             console.log(this)
    //             $(nameElement).hide();
    //             $(emailElement).hide();
    //             $(memberElement).hide();
    //         } else {
    //             // Show the user element if either matches the search text
    //             $(nameElement).show();
    //             $(emailElement).show();
    //             $(memberElement).show();
    //         }
    //     });
    // }

    // // Attach the search handler to the input change event
    // $('#search').on('input', function() {
    //     handleNameAndEmailSearch();
    // });


    </script>
                                       



@endsection