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
                <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0 text-color">Customer Details</h1>
                <!--end::Title-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">
                        <a href="{{ route('admin.customer.management') }}" class="text-muted text-hover-primary">Go Back, Customer Management</a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    {{-- <li class="breadcrumb-item">
                        <span class="bullet bg-gray-500 w-5px h-2px"></span>
                    </li> --}}
                    <!--end::Item-->
                    <!--begin::Item-->
                    {{-- <li class="breadcrumb-item text-muted">Short Details</li> --}}
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
    <div  iv id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-xxl">
            <!--begin::Contacts App- Getting Started-->
            <div class="row g-7">
                <!--begin::Content-->
                <div class="col-xl-12">
                    <div class="card card-flush h-lg-100" id="kt_contacts_main">
                        <!--begin::Card header-->
                        <div class="card-header pt-7" id="kt_chat_contacts_header">
                            <!--begin::Card title-->
                            <div class="card-title">
                                <i class="ki-duotone ki-badge fs-1 me-2 text-color"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>
                                <h2 class="text-color">Contact Details</h2>
                            </div>
                            <!--end::Card title-->

                            <!--begin::Card toolbar-->
                            <div class="card-toolbar gap-3">
                                <!--begin::Chat-->
                                {{-- <button class="btn btn-sm btn-light btn-active-light-primary" data-kt-drawer-show="true" data-kt-drawer-target="#kt_drawer_chat">
                                    <i class="ki-duotone ki-message-text-2 fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> Chat
                                </button> --}}
                                <!--end::Chat-->

                                <!--begin::Chat-->
                                {{-- <a href="#" class="btn btn-sm btn-light btn-active-light-primary">
                                    <i class="ki-duotone ki-messages fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i> Message
                                </a> --}}
                                <!--end::Chat-->

                                <!--begin::Action menu-->
                                {{-- <a href="#" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <i class="ki-duotone ki-dots-square fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i> </a> --}}
                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">
                                            Edit
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">
                                            Delete
                                        </a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu--> <!--end::Action menu-->
                            </div>
                            <!--end::Card toolbar-->
                        </div>
                        <!--end::Card header-->

                        <!--begin::Card body-->
                        <div class="card-body pt-5">
                            <!--begin::Profile-->
                            <div class="d-flex gap-7 align-items-center">
                                @if($customer->avatar)
                                    <!--begin::Avatar-->
                                <div class="symbol symbol-circle symbol-100px">
                                    <img src="{{ asset('images/users/customers/'.$customer->avatar) }}" alt="image">
                                </div>
                                <!--end::Avatar-->
                                @else
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-circle symbol-100px">
                                        <img src="{{ asset('backend/assets/media/avatars/300-1.jpg') }}" alt="image">
                                    </div>
                                    <!--end::Avatar-->
                                @endif

                                <!--begin::Contact details-->
                                <div class="d-flex flex-column gap-2">
                                    <!--begin::Name-->
                                    <h3 class="mb-0 fs-color-yellow">{{ $customer->name ? $customer->name : 'Emma Smith'}}</h3>
                                    <!--end::Name-->

                                    <!--begin::Email-->
                                    <div class="d-flex align-items-center gap-2">
                                        
                                        <a href="#" class="text-muted text-hover-primary">
                                            {{ $customer->email ? $customer->email : 'smith@kpmg.com'}} 
                                        </a>
                                    </div>
                                    <!--end::Email-->

                                    <!--begin::Phone-->
                                    <div class="d-flex align-items-center gap-2">
                                        
                                        <a href="#" class="text-muted text-hover-primary">
                                            {{ $customer->phone ? $customer->phone : '+6141 234 567'}}  
                                        </a>
                                    </div>
                                    <!--end::Phone-->
                                    <!--begin::Phone-->
                                    <div class="d-flex align-items-center gap-2">
                                        
                                        <a href="#" class="text-muted text-hover-primary">
                                            {{ $customer->description ? $customer->description : 'Bio data here...'}}  
                                        </a>
                                    </div>
                                    <!--end::Phone-->

                                    <!--begin::Phone-->
                                    <div class="d-flex align-items-center gap-2">
                                        @if($customer->is_block == 1)
                                            <a href="{{route('admin.customer.block',$customer->id)}}" class="btn btn-success btn-sm px-5 mt-5">
                                                Unblock
                                            </a>
                                        @else
                                            <a href="{{route('admin.customer.block',$customer->id)}}" class="btn btn-danger btn-sm px-5 mt-5 btn-dark-primary">
                                                Block
                                            </a>
                                        @endif
                                    
                                        @if($customer->deleted_record == 1)
                                            <a href="javascript:void(0)"
                                                class="btn btn-danger btn-sm px-5 mt-5">
                                                Deleted 
                                            </a>
                                        @else
                                            <a href="javascript:void(0)" 
                                                data-id="{{$customer->id}}"
                                                class="btn btn-danger btn-sm px-5 mt-5 deleteBtn">
                                                Delete User Record
                                            </a>
                                        @endif
                                        
                                       
                                        
                                    </div>
                                    <!--end::Phone-->
                                </div>
                                <!--end::Contact details-->
                            </div>
                            <!--end::Profile-->

                           <div class="row">
                            <div class="col-lg-6">
                                 <!--begin::Additional details-->
                                <div class="d-flex flex-column gap-5 mt-7">
                                    <!--begin::Table-->
                                    <table class="table align-middle table-row-dashed fs-6 gy-5 border-0" id="kt_table_new_orders">
                                        <thead>
                                            
                                            <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                                <th class="min-w-100px  pb-8">
                                                    <div class="fw-bold text-muted">Account ID</div>
                                                </th>
                                                <th class="min-w-100px  pb-8">
                                                    <div class="fw-bold text-muted"> {{ $customer->account_id ? $customer->account_id : 'N/a'}} </div>
                                                </th>
                                            </tr>
                                            <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                                <th class="min-w-100px  pb-8">
                                                    <div class="fw-bold text-muted">Role</div>
                                                </th>
                                                <th class="min-w-100px  pb-8">
                                                    <div class="fw-bold text-muted"> {{ $customer->role ? $customer->role : 'N/a'}} </div>
                                                </th>
                                            </tr>
                                            <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                                <th class="min-w-100px  pb-8">
                                                    <div class="fw-bold text-muted">Current Tier</div>
                                                </th>
                                                <th class="min-w-100px  pb-8">
                                                    <div class="fw-bold text-muted"> {{ $customer->tier ? $customer->tier : 'N/a'}} </div>
                                                </th>
                                            </tr>

                                            <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                                <th class="min-w-100px  pb-8">
                                                    <div class="fw-bold text-muted">Status</div>
                                                </th>
                                                <th class="min-w-100px  pb-8">
                                                    @if($customer->status == '1')
                                                        <div class="fw-bold text-success"> 
                                                            Enabled
                                                        </div>
                                                    @else
                                                        <div class="fw-bold text-danger"> 
                                                            Disabled
                                                        </div>
                                                    @endif
                                                </th>
                                            </tr>

                                            <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                                <th class="min-w-100px  pb-8">
                                                    <div class="fw-bold text-muted">JOINING DATE</div>
                                                </th>
                                                <th class="min-w-100px  pb-8">
                                                    <div class="fw-bold text-success"> 
                                                        {{ $customer->created_at->format('Y-m-d') }}

                                                    </div>
                                                </th>
                                            </tr>

                                            <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                                <th class="min-w-100px  pb-8">
                                                    <div class="fw-bold text-muted">Address</div>
                                                </th>
                                                <th class="min-w-100px  pb-8">
                                                    <div class="fw-bold text-muted"> {{ $customer->address_1 ? $customer->address_1 : 'N/a'}} </div>
                                                </th>
                                            </tr>
                                            <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                                <th class="min-w-100px  pb-8">
                                                    <div class="fw-bold text-muted">City</div>
                                                </th>
                                                <th class="min-w-100px  pb-8">
                                                    <div class="fw-bold text-muted"> {{ $customer->city ? $customer->city : 'N/a'}} </div>
                                                </th>
                                            </tr>
                                            <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                                <th class="min-w-100px  pb-8">
                                                    <div class="fw-bold text-muted">State</div>
                                                </th>
                                                <th class="min-w-100px  pb-8">
                                                    <div class="fw-bold text-muted"> {{ $customer->state ? $customer->state : 'N/a'}} </div>
                                                </th>
                                            </tr>
                                            <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                                <th class="min-w-100px  pb-8">
                                                    <div class="fw-bold text-muted">Country</div>
                                                </th>
                                                <th class="min-w-100px  pb-8">
                                                    <div class="fw-bold text-muted"> {{ $customer->country ? $customer->country : 'N/a'}} </div>
                                                </th>
                                            </tr>
                                            
                                            <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                                <th class="min-w-100px  pb-8">
                                                    <div class="fw-bold text-muted">Subscription</div>
                                                </th>
                                                <th class="min-w-100px  pb-8">
                                                    <div class="fw-bold text-success"> 
                                                        @if(!is_null($customer->subscription_id))
                                                            Yes, Subscriber 
                                                            @else
                                                            N/a
                                                        @endif
                                                    </div>
                                                </th>
                                            </tr>

                                            <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                                <th class="min-w-100px  pb-8">
                                                    <div class="fw-bold text-muted">Brand Ambassador</div>
                                                </th>
                                                <th class="min-w-100px  pb-8">
                                                    @if($customer->is_brand_amb == 1)
                                                        <div class="fw-bold text-success"> 
                                                            Yes, Brand Ambassador
                                                        </div>
                                                    @else
                                                        <div class="fw-bold text-danger"> 
                                                            No
                                                        </div>
                                                    @endif
                                                </th>
                                                
                                                
                                            </tr>
                                            
                                        </thead>

                                    </table>
                                    <!--end::Table-->  
                                </div>
                                <!--end::Additional details-->
                            </div>
                           </div>
                           

                        </div>
                        <!--end::Card body-->
                    </div>
                </div>
                <!--end::Content-->
            </div>
            <!--end::Contacts App- Getting Started-->
        </div>
        <!--end::Content container-->
    </div>
    <!--end::Content-->
</div>
@endsection
@section('customJs')
<script>

    $('.deleteBtn').on('click', function () {
        var user_id = $(this).attr('data-id');
           console.log("Delete IDs: ", user_id);
           if(confirm('Are you sure you want to delete ? ')){
               $.ajax({
                   type: "GET",
                   url: "{{ route('admin.customer.delete.records', ['user_id' => $customer->id ]) }}",
                   data: {user_id:user_id},
                   success: function (response) {
                       console.log(response);
                       toastr.success(response.message);
                   }
               });
           }
       });

</script>
@endsection


