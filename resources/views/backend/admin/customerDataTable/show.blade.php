@extends('custom_layout.master')
@section('main_content')<!--begin::Content wrapper-->

    <!--begin::Content wrapper-->
    <div class="d-flex flex-column flex-column-fluid">
        <!--begin::Toolbar-->
        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <!--begin::Toolbar container-->
            <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                <!--begin::Page title-->
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                    <!--begin::Title-->
                    <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0 text-color">
                        Customer Management Details</h1>
                    <!--end::Title-->
                    <!--begin::Breadcrumb-->
                    <!-- <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">

                        <li class="breadcrumb-item text-muted">Customer Management Table</li>

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
                <!--begin::Card-->
                <div class="card">
                    <!--begin::Card header-->
                    <div class="card-header border-0 pt-6">
                        <!--begin::Card title-->

                        <!--begin::Card title-->
                        <!--begin::Card toolbar-->
                        <div class="card-toolbar">
                            <!--begin::Toolbar-->
                            <div class="d-flex justify-content-end" data-kt-customer-table-toolbar="base">
                                <!--begin::Filter-->
                                <!--<button type="button" class="btn btn-light-primary me-3" data-kt-menu-trigger="click"-->
                                <!--    data-kt-menu-placement="bottom-end">-->
                                <!--    <i class="ki-duotone ki-filter fs-2">-->
                                <!--        <span class="path1"></span>-->
                                <!--        <span class="path2"></span>-->
                                <!--    </i>Filter</button>-->
                                <!--begin::Menu 1-->
                                <div class="menu menu-sub menu-sub-dropdown w-300px w-md-325px" data-kt-menu="true"
                                    id="kt-toolbar-filter">
                                    <!--begin::Header-->
                                    <div class="px-7 py-5">
                                        <div class="fs-4 text-gray-900 fw-bold">Filter Options</div>
                                    </div>
                                    <!--end::Header-->
                                    <!--begin::Separator-->
                                    <div class="separator border-gray-200"></div>
                                    <!--end::Separator-->
                                    <!--begin::Content-->

                                </div>
                                <!--end::Menu 1-->
                                <!--end::Filter-->
                                <!--begin::Export-->
                                <!--<button type="button" class="btn btn-light-primary me-3" {{-- data-bs-toggle="modal" data-bs-target="#kt_customers_export_modal" --}}-->
                                <!--    onclick="window.location.href='{{ route('admin.export.customers') }}'">-->
                                <!--    <i class="ki-duotone ki-exit-up fs-2">-->
                                <!--        <span class="path1"></span>-->
                                <!--        <span class="path2"></span>-->
                                <!--    </i>Export</button>-->
                                <!--end::Export-->
                                <!--begin::Add customer-->
                                {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_customer">Add Customer</button> --}}
                                <!--end::Add customer-->
                            </div>
                            <!--end::Toolbar-->
                            <!--begin::Group actions-->

                        </div>
                        <!--end::Card toolbar-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-0">
                        <!--begin::Table-->
                        <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_customers_table">
                            <thead>
                                <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0 text-color">

                                    <th class="min-w-125px">Customer Name</th>
                                    <th class="min-w-125px">Account Id</th>
                                    <th class="min-w-125px">Email</th>
                                    <th class="min-w-125px">Language</th>
                                    <th class="min-w-125px">Customer Group</th>

                                    <th class="min-w-125px">Created Date</th>

                                </tr>
                            </thead>
                            <tbody class="fw-semibold text-gray-600 text-color">
                                @if ($customers->isNotEmpty())
                                    @foreach ($customers as $customer)
                                        <tr>
                                            {{-- <td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td> --}}


                                            <td>
                                                {{ $customer->name }}
                                            </td>
                                              <td>
                                                {{ $customer->account_id  }}
                                            </td>
                                            {{-- <td> {{ $customer->reference }}</td> --}}
                                            <td>
                                                {{ $customer->email }}
                                            </td>
                                            <td>
                                            {{ $customer->language ?? 'English' }}
                                        </td>

                                            <td><a href="#" class="text-warning">{{ $customer->tier }}</a>
                                            </td>

                                            <td>{{ $customer->created_at }}</td>

                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="7" class="text-center">
                                            No data available
                                        </td>

                                    </tr>
                                @endif
                            </tbody>
                        </table>
                        <!--end::Table-->
                    </div>
                    <!--end::Card body-->


                   <div class="flex-lg-row-fluid ms-lg-15">
                    <!--begin:::Tabs-->
                    <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-8" role="tablist">
                        <!--begin:::Tab item-->
                        <li class="nav-item" role="presentation">
                            <a class="nav-link text-white pb-4 active" data-bs-toggle="tab" href="#kt_customer_view_overview_tab" aria-selected="true" role="tab">Overview</a>
                        </li>
                        <!--end:::Tab item-->


                    </ul>
                    <!--end:::Tabs-->
                    <!--begin:::Tab content-->
                    <div class="tab-content" id="myTabContent">
                        <!--begin:::Tab pane-->
                        <div class="tab-pane fade show active" id="kt_customer_view_overview_tab" role="tabpanel">
                            <div class="row justify-content-between px-3">
                                <!--begin::Card-->
                                <div class="card pt-4 mb-6 col-md-5 mb-xl-9 card-custom-bg">
                                    <!--begin::Card header-->
                                    <div class="card-header border-0">
                                        <!--<div class="d-flex justify-content-end nav-item">-->
                                        <!--    <a class="learn-more d-flex justify-content-end fs-color-yellow custom-fs-13" href="#">Learn More</a>-->
                                        <!--</div>-->
                                        <!--begin::Card title-->
                                          @if($used_subscription!= null)


                                        <!--begin::Card title-->
                                        <div class="card-title">
                                            <h2 class="fw-bold fs-color-white custom-fs-13">Package </h2><span class="badge badge-warning ms-3">

                                            {{$used_subscription->subscription['subscription_name']}}

                                            </span>
                                        </div>
                                        <!--end::Card title-->
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div class="card-body pt-0">
                                        <div class="fs-7 fw-normal text-muted">Total Package pages: {{ $used_subscription->total_pages}}</div>
                                        <div class="fs-7 fw-normal text-muted">Total Used pages: {{(float)$used_subscription->total_pages - (float)$used_subscription->remaining_pages}}</div>
                                        <div class="fs-7 fw-normal text-muted">Expire Date: {{$used_subscription->due_date}}</div>
                                        <div class="fs-7 fw-normal text-muted">Status: @if($used_subscription->status == 'Active')<span style="color: green">{{$used_subscription->status}}</span>@else <span style="color: red">{{$used_subscription->status}}</span>@endif</div>
                                        <input type="hidden" value="{{$used_subscription->id}}" id="used_package_id">
                                        <input type="hidden" value="{{$used_subscription->subscription_id}}" id="package_id">
                                         <input type="hidden" value="{{$used_subscription->subscription['cost_per_page']}}" id="cost_per_page">
                                    </div>




                                    <!--@if($used_subscription->status == 'Active' && $used_subscription->due_date >= now())-->
                                    <!--<form action="{{route('customer.cancel-subscription',[$used_subscription->id])}}" method="post" class="w-100">-->
                                    <!--    @csrf-->
                                    <!--    <button type="submit" class="btn btn-danger">Cancel Package</button>-->
                                    <!--</form>-->

                                    <!--@else -->
                                    <!--<form action="{{route('customer.cancel-subscription',[$used_subscription->id])}}" method="post" class="w-100">-->
                                    <!--      @csrf-->
                                    <!--    <button type="submit" class="btn btn-success">Renew Package</button>-->
                                    <!--</form>-->
                                    <!--@endif-->

                                @else
                                <div class="card-title">
                                            <h2 class="fw-bold fs-color-white custom-fs-13">Package </h2><span class="badge badge-warning ms-3">

                                            BestPakage

                                            </span>
                                        </div>
                                        <!--end::Card title-->
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div class="card-body pt-0">
                                        <div class="fs-7 fw-normal text-muted">Total Package pages: 0</div>
                                        <div class="fs-7 fw-normal text-muted">Total Used pages: 0</div>
                                        <div class="fs-7 fw-normal text-muted">Expire Date: 0</div>
                                        <div class="fs-7 fw-normal text-muted">Status:</span>UnActive</div>

                                    </div>




                                @endif
                                </div>
                                <!--end::Card-->
                            </div>


                            <!--begin::Statements-->
                            <div class="card mb-6 mb-xl-9 card-custom-bg message-summ">
                               <!--begin::Header-->
                                <div class="card-header">
                                    <!--begin::Title-->
                                    <div class="card-title">
                                        <h2 class="fs-color-white custom-fs-23">Packages Payment Records</h2>
                                    </div>
                                    <!--end::Title-->
                                    <!--begin::Toolbar-->

                                    <!--end::Toolbar-->
                                </div>
                                <!--end::Header-->
                                <div class="card-body pb-5">
                                    <!--begin::Tab Content-->
                                        <!--begin::Tab panel-->
                                        <div class="py-0">
                                            <!--begin::Table-->
                                            <table class="table align-middle table-row-dashed gy-5" id="kt_table_packages_payment">
                                                <thead class="border-bottom border-gray-200 fs-7 fw-bold">
                                                    <tr class="text-start text-muted text-uppercase gs-0">
                                                        <th class="min-w-150px">Package</th>
                                                        <th class="min-w-100px">Invoice No.</th>
                                                        <th>Status</th>
                                                        <th>Amount</th>
                                                        <th class="min-w-100px">Date</th>
                                                        <th class="text-end min-w-100px pe-4">Actions</th>
                                                    </tr>
                                                </thead>

                                                <tbody class="fs-6 fw-semibold text-gray-600" id="old_package_payment_tbody">
                                                    @foreach ($PackageInvoices as $invoice)

                                                        @if($invoice->invoice_type == 'package_inc')
                                                            <tr>
                                                                <td>{{ $invoice->subscription_name }}</td>
                                                                <td>
                                                                    <a href="{{ route('admin.generate.invoice.by.id', ['id' => $invoice->invoice_id]) }}" class="text-gray-600 text-hover-primary mb-1">{{ $invoice->invoice_id}}</a>
                                                                </td>
                                                                <td>
                                                                    @if ($invoice->total != null)
                                                                        <span class="badge badge-light-success badge-custom-bg">Successful</span>
                                                                    @else
                                                                        <span class="badge badge-light-danger">No paid</span>
                                                                    @endif
                                                                </td>
                                                                <td>
                                                                    @php
                                                                        $formattedAmount = number_format($invoice->total, 2);
                                                                    @endphp
                                                                    $ {{ $formattedAmount }}
                                                                </td>
                                                                <td>
                                                                    @php
                                                                        $date = \Carbon\Carbon::parse($invoice->created_at)->format('j M Y, g:i a');
                                                                    @endphp
                                                                    {{ $date }}
                                                                </td>
                                                                <td class="pe-0">
                                                                    <a href="#" class="btn btn-sm btn-light image.png btn-active-light-primary badge-custom-bg" id="badge-custom-bg" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                                                        <i class="ki-duotone ki-down fs-5 ms-1"></i>
                                                                    </a>
                                                                    <!--begin::Menu-->
                                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded fs-color-white menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4 badge-custom-bg" data-kt-menu="true">
                                                                        <!--begin::Menu item-->
                                                                            <div class="menu-item px-3">
                                                                                <a href="javascript:void(0)" class="menu-link d-flex justify-content-center px-3 badge-custom-bg fs-color-white" data-bs-toggle="modal" data-bs-target="#view-invoice_{{$invoice->order_id}}">View</a>
                                                                            </div>
                                                                        <!--end::Menu item-->
                                                                        <!--begin::Menu item-->
                                                                        <div class="menu-item px-3">
                                                                        <a  class="menu-link d-flex justify-content-center px-3 badge-custom-bg fs-color-white"
                                                                                    onclick="window.location.href='{{ route('customer.export.invoice',['value' => $invoice->order_id]) }}'">
                                                                                Export
                                                                            </a>
                                                                        </div>
                                                                        <!--end::Menu item-->
                                                                    </div>
                                                                    <!--end::Menu-->
                                                                </td>
                                                            </tr>
                                                            <div class="modal view-invoice" id="view-invoice_{{$invoice->order_id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header border-0 badge-custom-bg">
                                                                            <!-- <h5 class="modal-title" id="exampleModalLabel">Invoice</h5> -->
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body badge-custom-bg">
                                                                            <div class="">
                                                                                <!--begin::Body-->
                                                                                <div class="card-body">
                                                                                    <!--begin::Layout-->
                                                                                    <div class="d-flex flex-column flex-xl-row">
                                                                                        <!--begin::Content-->
                                                                                        <div class="flex-lg-row-fluid me-xl-18 mb-10 mb-xl-0">
                                                                                            <!--begin::Invoice 2 content-->
                                                                                            <div class="mt-n1">
                                                                                                <!--begin::Top-->
                                                                                                <div class="d-flex flex-stack pb-10">
                                                                                                    <!--begin::Logo-->
                                                                                                    <a href="#">
                                                                                                        <img alt="Logo" src="{{asset('backend/assets/media/ws/ws-light-logo.png')}}" />
                                                                                                    </a>
                                                                                                    <!--end::Logo-->
                                                                                                </div>
                                                                                                <!--end::Top-->
                                                                                                <!--begin::Wrapper-->
                                                                                                <div class="m-0">
                                                                                                    <!--begin::Label-->
                                                                                                    <div class="fw-bold fs-3 text-gray-800 mb-8 fs-color-white">Order #{{$invoice->order_id}}</div>

                                                                                                    <div class="row g-5 mb-12">
                                                                                                        <!--end::Col-->
                                                                                                        <div class="col-sm-9">
                                                                                                            <div class="fw-bold fs-3 text-gray-800 mb-8 fs-color-white">Invoice Id #{{$invoice->invoice_id ?? ''}}</div>

                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="row g-5 mb-12">
                                                                                                        <!--end::Col-->
                                                                                                        <div class="col-sm-9">
                                                                                                            <div class="fw-bold fs-3 text-gray-800 mb-8 fs-color-white">Name #</div>
                                                                                                            {{$invoice->item_name ?? ''}}
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="row g-5 mb-12">
                                                                                                    <!--end::Col-->
                                                                                                    <div class="col-sm-9">
                                                                                                        <div class="fw-bold fs-3 text-gray-800 mb-8 fs-color-white">Total Amount #</div>
                                                                                                        {{$invoice->total ?? ''}}
                                                                                                    </div>
                                                                                                </div>
                                                                                                <!--end::Wrapper-->
                                                                                            </div>
                                                                                            <!--end::Invoice 2 content-->
                                                                                        </div>
                                                                                        <!--end::Content-->

                                                                                    </div>
                                                                                    <!--end::Layout-->
                                                                                </div>
                                                                                <!--end::Body-->
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer border-0 justify-content-between badge-custom-bg">
                                                                            <div class="">
                                                                                <button type="button" class="btn btn-dark-primary" data-bs-dismiss="modal">Close</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endif
                                                    @endforeach
                                                </tbody>
                                                <tbody class="fs-6 fw-semibold text-gray-600" id="new_package_payment_tbody"></tbody>
                                                    <!--end::Table body-->
                                            </table>
                                        <!--end::Table-->
                                        </div>
                                    <!--end::Tab panel-->
                                </div>
                            </div>
                            <!--end::Statements main card-->

                            <!--begin::Statements-->
                            <div class="card mb-6 mb-xl-9 card-custom-bg message-summ">
                               <!--begin::Header-->
                                <div class="card-header">
                                    <!--begin::Title-->
                                    <div class="card-title">
                                        <h2 class="fs-color-white custom-fs-23">Custom Payment Records</h2>
                                    </div>
                                    <!--end::Title-->
                                    <!--begin::Toolbar-->

                                    <!--end::Toolbar-->
                                </div>
                                <!--end::Header-->
                                <div class="card-body pb-5">
                                    <!--begin::Tab Content-->
                                        <!--begin::Tab panel-->
                                        <div class="py-0">
                                            <!--begin::Table-->
                                            <table class="table align-middle table-row-dashed gy-5" id="kt_table_custom_payment">
                                                <thead class="border-bottom border-gray-200 fs-7 fw-bold">
                                                    <tr class="text-start text-muted text-uppercase gs-0">
                                                        <th class="min-w-150px">Order Id</th>
                                                        <th class="min-w-100px">Invoice No.</th>
                                                        <th>Status</th>
                                                        <th>Amount</th>
                                                        <th class="min-w-100px">Date</th>
                                                        <th class="text-end min-w-100px pe-4">Actions</th>
                                                    </tr>
                                                </thead>

                                                <tbody class="fs-6 fw-semibold text-gray-600" id="old_custom_payment_tbody">
                                                    @foreach ($CustomInvoices as $invoice)
                                                        @if($invoice->invoice_type == 'custom_inc')
                                                            <tr>
                                                                <td>{{ $invoice->order_id }}</td>
                                                                <td>
                                                                    <a href="#" class="text-gray-600 text-hover-primary mb-1">{{ $invoice->invoice_id}}</a>
                                                                </td>
                                                                <td>
                                                                    @if ($invoice->total != null)
                                                                        <span class="badge badge-light-success badge-custom-bg">Successful</span>
                                                                    @else
                                                                        <span class="badge badge-light-danger">No paid</span>
                                                                    @endif
                                                                </td>
                                                                <td>
                                                                    @php
                                                                        $formattedAmount = number_format($invoice->total, 2);
                                                                    @endphp
                                                                    $ {{ $formattedAmount }}
                                                                </td>
                                                                <td>
                                                                    @php
                                                                        $date = \Carbon\Carbon::parse($invoice->created_at)->format('j M Y, g:i a');
                                                                    @endphp
                                                                    {{ $date }}
                                                                </td>
                                                                <td class="pe-0">
                                                                    <a href="#" class="btn btn-sm btn-light image.png btn-active-light-primary badge-custom-bg" id="badge-custom-bg" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                                                        <i class="ki-duotone ki-down fs-5 ms-1"></i>
                                                                    </a>
                                                                    <!--begin::Menu-->
                                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded fs-color-white menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4 badge-custom-bg" data-kt-menu="true">
                                                                        <!--begin::Menu item-->
                                                                            <div class="menu-item px-3">
                                                                                <a href="javascript:void(0)" class="menu-link d-flex justify-content-center px-3 badge-custom-bg fs-color-white" data-bs-toggle="modal" data-bs-target="#view-invoice_2{{$invoice->order_id}}">View</a>
                                                                            </div>
                                                                        <!--end::Menu item-->
                                                                        <!--begin::Menu item-->
                                                                        <div class="menu-item px-3">
                                                                            <!-- <a href="#" class="menu-link d-flex justify-content-center px-3 badge-custom-bg fs-color-white" id="badge-custom-bg" download="">Download</a> -->

                                                                            <a class="menu-link d-flex justify-content-center px-3 badge-custom-bg fs-color-white"
                                                                                    onclick="window.location.href='{{ route('customer.export.invoice',['value' => $invoice->order_id]) }}'">
                                                                                Export
                                                                            </a>

                                                                        </div>
                                                                        <!--end::Menu item-->
                                                                    </div>
                                                                    <!--end::Menu-->
                                                                </td>
                                                            </tr>
                                                            <div class="modal view-invoice" id="view-invoice_2{{$invoice->order_id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header border-0 badge-custom-bg">
                                                                            <!-- <h5 class="modal-title" id="exampleModalLabel">Invoice</h5> -->
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body badge-custom-bg">
                                                                            <div class="">
                                                                                <!--begin::Body-->
                                                                                <div class="card-body">
                                                                                    <!--begin::Layout-->
                                                                                    <div class="d-flex flex-column flex-xl-row">
                                                                                        <!--begin::Content-->
                                                                                        <div class="flex-lg-row-fluid me-xl-18 mb-10 mb-xl-0">
                                                                                            <!--begin::Invoice 2 content-->
                                                                                            <div class="mt-n1">
                                                                                                <!--begin::Top-->
                                                                                                <div class="d-flex flex-stack pb-10">
                                                                                                    <!--begin::Logo-->
                                                                                                    <a href="#">
                                                                                                        <img alt="Logo" src="{{asset('backend/assets/media/ws/ws-light-logo.png')}}" />
                                                                                                    </a>
                                                                                                    <!--end::Logo-->
                                                                                                </div>
                                                                                                <!--end::Top-->
                                                                                                <!--begin::Wrapper-->
                                                                                                <div class="m-0">
                                                                                                    <!--begin::Label-->
                                                                                                    <div class="fw-bold fs-3 text-gray-800 mb-8 fs-color-white">Order #{{$invoice->order_id}}</div>

                                                                                                    <div class="row g-5 mb-12">
                                                                                                        <!--end::Col-->
                                                                                                        <div class="col-sm-9">
                                                                                                            <div class="fw-bold fs-3 text-gray-800 mb-8 fs-color-white">Invoice Id #{{$invoice->invoice_id ?? ''}}</div>

                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="row g-5 mb-12">
                                                                                                        <!--end::Col-->
                                                                                                        <div class="col-sm-9">
                                                                                                            <div class="fw-bold fs-3 text-gray-800 mb-8 fs-color-white">Name #</div>
                                                                                                            {{$invoice->item_name ?? ''}}
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="row g-5 mb-12">
                                                                                                    <!--end::Col-->
                                                                                                    <div class="col-sm-9">
                                                                                                        <div class="fw-bold fs-3 text-gray-800 mb-8 fs-color-white">Total Amount #</div>
                                                                                                        {{$invoice->total ?? ''}}
                                                                                                    </div>
                                                                                                </div>
                                                                                                <!--end::Wrapper-->
                                                                                            </div>
                                                                                            <!--end::Invoice 2 content-->
                                                                                        </div>
                                                                                        <!--end::Content-->

                                                                                    </div>
                                                                                    <!--end::Layout-->
                                                                                </div>
                                                                                <!--end::Body-->
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer border-0 justify-content-between badge-custom-bg">
                                                                            <div class="">
                                                                                <button type="button" class="btn btn-dark-primary" data-bs-dismiss="modal">Close</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endif
                                                    @endforeach
                                                </tbody>
                                                    <!--end::Table body-->
                                                <tbody class="fs-6 fw-semibold text-gray-600" id="new_custom_payment_tbody"></tbody>
                                            </table>
                                        <!--end::Table-->
                                        </div>
                                    <!--end::Tab panel-->
                                </div>
                            </div>
                            <!--end::Statements main card-->

                        </div>


                        </div>

                    </div>
                    <!--end:::Tab content-->
                </div>

                   <div class="modal fade" id="kt_modal_add_payment" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog mw-650px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Modal header-->
                        <div class="modal-header">
                            <!--begin::Modal title-->
                            <h2 class="fw-bold">Add a Payment Record</h2>
                            <!--end::Modal title-->
                            <!--begin::Close-->
                            <div id="kt_modal_add_payment_close" class="btn btn-icon btn-sm btn-active-icon-primary">
                                <i class="ki-duotone ki-cross fs-1">
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
                            <form id="kt_modal_add_payment_form" class="form" action="#">
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold form-label mb-2">
                                        <span class="required">Invoice Number</span>
                                        <span class="ms-2" data-bs-toggle="tooltip" aria-label="The invoice number must be unique." data-bs-original-title="The invoice number must be unique." data-kt-initialized="1">
                                            <i class="ki-duotone ki-information fs-7">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="invoice" value="">
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="required fs-6 fw-semibold form-label mb-2">Status</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <select class="form-select form-select-solid fw-bold select2-hidden-accessible" name="status" data-control="select2" data-placeholder="Select an option" data-hide-search="true" data-select2-id="select2-data-19-ccr7" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                                        <option data-select2-id="select2-data-21-88p4"></option>
                                        <option value="0">Approved</option>
                                        <option value="1">Pending</option>
                                        <option value="2">Rejected</option>
                                        <option value="3">In progress</option>
                                        <option value="4">Completed</option>
                                    </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-20-obiw" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid fw-bold" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-status-4w-container" aria-controls="select2-status-4w-container"><span class="select2-selection__rendered" id="select2-status-4w-container" role="textbox" aria-readonly="true" title="Select an option"><span class="select2-selection__placeholder">Select an option</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="required fs-6 fw-semibold form-label mb-2">Invoice Amount</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="amount" value="">
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-15">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold form-label mb-2">
                                        <span class="required">Additional Information</span>
                                        <span class="ms-2" data-bs-toggle="tooltip" aria-label="Information such as description of invoice or product purchased." data-bs-original-title="Information such as description of invoice or product purchased." data-kt-initialized="1">
                                            <i class="ki-duotone ki-information fs-7">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <textarea class="form-control form-control-solid rounded-3" name="additional_info"></textarea>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Actions-->
                                <div class="text-center">
                                    <button type="reset" id="kt_modal_add_payment_cancel" class="btn btn-light me-3">Discard</button>
                                    <button type="submit" id="kt_modal_add_payment_submit" class="btn btn-primary">
                                        <span class="indicator-label">Submit</span>
                                        <span class="indicator-progress">Please wait...
                                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
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

             <div class="modal fade" id="kt_modal_adjust_balance" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-650px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Modal header-->
                        <div class="modal-header">
                            <!--begin::Modal title-->
                            <h2 class="fw-bold">Adjust Balance</h2>
                            <!--end::Modal title-->
                            <!--begin::Close-->
                            <div id="kt_modal_adjust_balance_close" class="btn btn-icon btn-sm btn-active-icon-primary">
                                <i class="ki-duotone ki-cross fs-1">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </div>
                            <!--end::Close-->
                        </div>
                        <!--end::Modal header-->
                        <!--begin::Modal body-->
                        <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                            <!--begin::Balance preview-->
                            <div class="d-flex text-center mb-9">
                                <div class="w-50 border border-dashed border-gray-300 rounded mx-2 p-4">
                                    <div class="fs-6 fw-semibold mb-2 text-muted">Current Balance</div>
                                    <div class="fs-2 fw-bold" kt-modal-adjust-balance="current_balance">US$ 32,487.57</div>
                                </div>
                                <div class="w-50 border border-dashed border-gray-300 rounded mx-2 p-4">
                                    <div class="fs-6 fw-semibold mb-2 text-muted">New Balance
                                        <span class="ms-2" data-bs-toggle="tooltip" aria-label="Enter an amount to preview the new balance." data-bs-original-title="Enter an amount to preview the new balance." data-kt-initialized="1">
                                            <i class="ki-duotone ki-information fs-7">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </span>
                                    </div>
                                    <div class="fs-2 fw-bold" kt-modal-adjust-balance="new_balance">--</div>
                                </div>
                            </div>
                            <!--end::Balance preview-->
                            <!--begin::Form-->
                            <form id="kt_modal_adjust_balance_form" class="form" action="#">
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="required fs-6 fw-semibold form-label mb-2">Adjustment type</label>
                                    <!--end::Label-->
                                    <!--begin::Dropdown-->
                                    <select class="form-select form-select-solid fw-bold select2-hidden-accessible" name="adjustment" aria-label="Select an option" data-control="select2" data-dropdown-parent="#kt_modal_adjust_balance" data-placeholder="Select an option" data-hide-search="true" data-select2-id="select2-data-22-u5cm" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                                        <option data-select2-id="select2-data-24-8hel"></option>
                                        <option value="1">Credit</option>
                                        <option value="2">Debit</option>
                                    </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-23-rqev" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid fw-bold" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-adjustment-ow-container" aria-controls="select2-adjustment-ow-container"><span class="select2-selection__rendered" id="select2-adjustment-ow-container" role="textbox" aria-readonly="true" title="Select an option"><span class="select2-selection__placeholder">Select an option</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    <!--end::Dropdown-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="required fs-6 fw-semibold form-label mb-2">Amount</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input id="kt_modal_inputmask" type="text" class="form-control form-control-solid" name="amount" value="">
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold form-label mb-2">Add adjustment note</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <textarea class="form-control form-control-solid rounded-3 mb-5"></textarea>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Disclaimer-->
                                <div class="fs-7 text-muted mb-15">Please be aware that all manual balance changes will be audited by the financial team every fortnight. Please maintain your invoices and receipts until then. Thank you.</div>
                                <!--end::Disclaimer-->
                                <!--begin::Actions-->
                                <div class="text-center">
                                    <button type="reset" id="kt_modal_adjust_balance_cancel" class="btn btn-light me-3">Discard</button>
                                    <button type="submit" id="kt_modal_adjust_balance_submit" class="btn btn-primary">
                                        <span class="indicator-label">Submit</span>
                                        <span class="indicator-progress">Please wait...
                                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
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
            <!--end::Modal - New Card-->


            <!--begin::Modal - New Address-->
            <div class="modal fade" id="kt_modal_update_customer" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-650px">
                    <!--begin::Modal content-->
                    <div class="modal-content badge-custom-bg">
                        <!--begin::Form-->
                        <form class="form" action="#" id="kt_modal_update_customer_form" enctype="multipart/form-data">
                            @csrf
                            <!--begin::Modal header-->
                            <div class="modal-header" id="kt_modal_update_customer_header">
                                <!--begin::Modal title-->
                                <h2 class="fw-bold fs-color-white custom-fs-23">Update Customer</h2>
                                <!--end::Modal title-->
                                <!--begin::Close-->
                                <div data-bs-dismiss="modal" aria-label="Close" class="btn btn-icon btn-sm btn-dark-primary">
                                    <i class="ki-duotone ki-cross fs-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </div>
                                <!--end::Close-->
                            </div>
                            <!--end::Modal header-->
                            <!--begin::Modal body-->
                            <div class="modal-body py-10 px-lg-17">
                                <!--begin::Scroll-->
                                <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_update_customer_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_update_customer_header" data-kt-scroll-wrappers="#kt_modal_update_customer_scroll" data-kt-scroll-offset="300px" style="max-height: 135px;">
                                    <!--begin::Notice-->
                                    <!--begin::Notice-->
                                    <div class="notice d-flex btn-dark-primary rounded border-primary border border-dashed mb-9 p-6">
                                        <!--begin::Icon-->
                                        <i class="ki-duotone ki-information fs-2tx text-primary me-4">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i>
                                        <!--end::Icon-->
                                        <!--begin::Wrapper-->
                                        <div class="d-flex flex-stack flex-grow-1">
                                            <!--begin::Content-->
                                            <div class="fw-semibold">
                                                <div class="fs-color-white custom-fs-13">Updating customer details will receive a privacy audit. For more info, please read our
                                                    <a href="#" class="fs-color-theme custom-fs-13">Privacy Policy</a>
                                                </div>
                                            </div>
                                            <!--end::Content-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Notice-->
                                    <!--end::Notice-->
                                    <!--begin::User toggle-->
                                    <div class="fw-bold fs-3 rotate collapsible mb-7 fs-color-white custom-fs-18" data-bs-toggle="collapse" href="#kt_modal_update_customer_user_info" role="button" aria-expanded="false" aria-controls="kt_modal_update_customer_user_info">User Information
                                        <span class="ms-2 rotate-180">
                                            <i class="ki-duotone ki-down fs-3"></i>
                                        </span>
                                    </div>
                                    <!--end::User toggle-->
                                    <!--begin::User form-->
                                    <div id="kt_modal_update_customer_user_info" class="collapse show">
                                        <!--begin::Input group-->
                                        <div class="mb-7">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-semibold mb-2">
                                                <span class="fs-color-white custom-fs-13">Update Avatar</span>
                                                <span class="ms-1" data-bs-toggle="tooltip" aria-label="Allowed file types: png, jpg, jpeg." data-bs-original-title="Allowed file types: png, jpg, jpeg." data-kt-initialized="1">
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
                                                <!--begin::Image input-->
                                                <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('{{ asset('backend/assets/media/svg/avatars/blank.svg') }}')">
                                                    @if (Auth::user()->avatar)
                                                        <!--begin::Preview existing avatar-->
                                                        <div class="image-input-wrapper w-125px h-125px" style="background-image: url({{asset('images/users/customers/'. Auth::user()->avatar)}})"></div>
                                                        <!--end::Preview existing avatar-->
                                                    @else

                                                    <!--begin::Preview existing avatar-->
                                                    <div class="image-input-wrapper w-125px h-125px" style="background-image: url({{ asset('backend/assets/media/ws/profile.png') }})"></div>
                                                    <!--end::Preview existing avatar-->
                                                    @endif

                                                    <!--begin::Edit-->
                                                    <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" aria-label="Change avatar" data-bs-original-title="Change avatar" data-kt-initialized="1">
                                                        <i class="ki-duotone ki-pencil fs-7">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                        <!--begin::Inputs-->
                                                        <input type="file" name="avatar" accept=".png, .jpg, .jpeg">
                                                        <input type="hidden" name="avatar_remove">
                                                        <!--end::Inputs-->
                                                    </label>
                                                    <!--end::Edit-->
                                                    <!--begin::Cancel-->
                                                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" aria-label="Cancel avatar" data-bs-original-title="Cancel avatar" data-kt-initialized="1">
                                                        <i class="ki-duotone ki-cross fs-2">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                    <!--end::Cancel-->
                                                    <!--begin::Remove-->
                                                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" aria-label="Remove avatar" data-bs-original-title="Remove avatar" data-kt-initialized="1">
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
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-7">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-semibold mb-2 fs-color-white custom-fs-13">Name</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="hidden" class="form-control form-control-solid btn-dark-primary" placeholder="" id="id" name="id" value="{{ old('id', Auth::user()->id) }}">
                                            <input type="text" class="form-control form-control-solid btn-dark-primary" placeholder="" id="name" name="name" value="{{ old('name', Auth::user()->name) }}">
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-7">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-semibold mb-2">
                                                <span class="fs-color-white custom-fs-13">Email</span>
                                                <span class="ms-1" data-bs-toggle="tooltip" aria-label="Email address must be active" data-bs-original-title="Email address must be active" data-kt-initialized="1">
                                                    <i class="ki-duotone ki-information fs-7">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                    </i>
                                                </span>
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="email" class="form-control form-control-solid btn-dark-primary" placeholder="" id="validemail" name="email" value="{{ old('name', Auth::user()->email) }}">
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->

                                        <!--begin::Input group-->
                                        <div class="fv-row mb-15">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-semibold mb-2 fs-color-white custom-fs-13">Description</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-solid btn-dark-primary" placeholder="" id="description" name="description" value="{{ old('description', Auth::user()->description ) }}">
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::User form-->

                                    <!--begin::Billing toggle-->
                                    <div class="fw-bold fs-3 rotate collapsible collapsed mb-7 fs-color-white custom-fs-18" data-bs-toggle="collapse" href="#kt_modal_update_customer_billing_info" role="button" aria-expanded="false" aria-controls="kt_modal_update_customer_billing_info">Additional Information
                                        <span class="ms-2 rotate-180">
                                            <i class="ki-duotone ki-down fs-3"></i>
                                        </span>
                                    </div>
                                    <!--end::Billing toggle-->


                                    <!--begin::Billing form-->
                                    <div id="kt_modal_update_customer_billing_info" class="collapse">
                                        <!--begin::Input group-->
                                        <div class="d-flex flex-column mb-7 fv-row">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-semibold mb-2 fs-color-white custom-fs-13">Address Line 1</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input class="form-control form-control-solid btn-dark-primary" placeholder="" id="address_1" name="address_1" value="{{ old('name', Auth::user()->address_1) }}">
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="d-flex flex-column mb-7 fv-row">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-semibold mb-2 fs-color-white custom-fs-13">Address Line 2</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input class="form-control form-control-solid btn-dark-primary" placeholder="" id="address_2" name="address_2" value="{{ old('address_2', Auth::user()->address_2) }}">
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="d-flex flex-column mb-7 fv-row">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-semibold mb-2 fs-color-white custom-fs-13">Town</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input class="form-control form-control-solid btn-dark-primary" placeholder="" name="city" id="city" value="{{ old('city', Auth::user()->city) }}">
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="row g-9 mb-7">
                                            <!--begin::Col-->
                                            <div class="col-md-6 fv-row">
                                                <!--begin::Label-->
                                                <label class="fs-6 fw-semibold mb-2 fs-color-white custom-fs-13">State / Province</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input class="form-control form-control-solid btn-dark-primary" placeholder="" name="state" value="{{ old('state', Auth::user()->state) }}">
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-md-6 fv-row">
                                                <!--begin::Label-->
                                                <label class="fs-6 fw-semibold mb-2 fs-color-white custom-fs-13">Post Code</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input class="form-control form-control-solid btn-dark-primary" placeholder="" name="postcode" id="postcode" value="{{ old('postcode', Auth::user()->address_1) }}">
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Input group-->
                                        @if($countries->isNotEmpty())
                                        <!--begin::Input group-->
                                        <div class="d-flex flex-column mb-7 fv-row">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-semibold mb-2">
                                                <span>Country</span>
                                                <span class="ms-1" data-bs-toggle="tooltip" aria-label="Country of origination" data-bs-original-title="Country of origination" data-kt-initialized="1">
                                                    <i class="ki-duotone ki-information fs-7">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                    </i>
                                                </span>
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <select name="country" id="country" aria-label="Select a Country" data-control="select2" data-placeholder="Select a Country..." data-dropdown-parent="#kt_modal_update_customer" class="form-select form-select-solid fw-bold select2-hidden-accessible btn-dark-primary">
                                                <option value="" data-select2-id="select2-data-27-w5ad">Select a Country...</option>
                                                @foreach ($countries as $country)
                                                    <option value="{{ $country->nicename }}" {{ Auth::user()->country === $country->nicename ? 'selected' : '' }}>
                                                        {{ $country->nicename }}
                                                    </option>
                                                @endforeach

                                            </select>
                                                <!--end::Input-->

                                        </div>
                                        <!--end::Input group-->
                                        @endif
                                        {{-- <!--begin::Input group-->
                                        <div class="fv-row mb-7">
                                            <!--begin::Wrapper-->
                                            <div class="d-flex flex-stack">
                                                <!--begin::Label-->
                                                <div class="me-5">
                                                    <!--begin::Label-->
                                                    <label class="fs-6 fw-semibold fs-color-white custom-fs-13">Use as a billing adderess?</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <div class="fs-7 fw-semibold fs-color-white custom-fs-13 ">If you need more info, please check budget planning</div>
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Label-->
                                                <!--begin::Switch-->
                                                <label class="form-check form-switch form-check-custom form-check-solid">
                                                    <!--begin::Input-->
                                                    <input class="form-check-input btn-dark-primary" name="billing" id="billing" type="checkbox" value="1" id="kt_modal_update_customer_billing" checked="checked">
                                                    <!--end::Input-->
                                                    <!--begin::Label-->
                                                    <span class="form-check-label fw-semibold fs-color-white custom-fs-13" for="kt_modal_update_customer_billing">Yes</span>
                                                    <!--end::Label-->
                                                </label>
                                                <!--end::Switch-->
                                            </div>
                                            <!--begin::Wrapper-->
                                        </div>
                                        <!--end::Input group--> --}}
                                    </div>
                                    <!--end::Billing form-->
                                </div>
                                <!--end::Scroll-->
                            </div>
                            <!--end::Modal body-->
                            <!--begin::Modal footer-->
                            <div class="modal-footer flex-center">
                                <!--begin::Button-->
                              <!--<button type="reset" id="kt_modal_update_customer_cancel" class="btn btn-dark-primary me-3">Discard</button>-->
                               <button type="reset" class="btn me-3 btn-dark-primary" data-bs-dismiss="modal">Discard</button>
                                <!--end::Button-->
                                <!--begin::Button-->
                                <button type="submit" id="kt_modal_update_customer_submit" class="btn btn-dark-primary saveBtn">
                                    <span class="indicator-label">Update</span>
                                    <span class="indicator-progress">Please wait...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                                <!--end::Button-->
                            </div>
                            <!--end::Modal footer-->
                        </form>
                        <!--end::Form-->
                    </div>
                </div>
            </div>
            <!--end::Modal - New Address-->

            <div class="modal fade" id="payment_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header border-0">
                            <h5 class="modal-title " id="exampleModalLabel">Add Payment Details!</h5>
                            <button type="button" class="ms-0 btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div data-kt-stepper-content="true" data-kt-stepper-content-for="stepper-id" data-kt-stepper-type="step"
                                class='step'>
                                <!--begin::Step 4-->
                                <div data-kt-stepper-element="content">
                                    <div class="w-100">
                                        <!--begin::Input group-->
                                        <div class="d-flex flex-column mb-7 fv-row">
                                            <!--begin::Label-->
                                            <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                                <span class="required">Name On Card</span>
                                                <span class="ms-1" data-bs-toggle="tooltip" title="Specify a card holder's name">
                                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span></i></span>
                                            </label>
                                            <!--end::Label-->
                                            <input type="text" class="form-control form-control-solid" placeholder="Card Name"
                                                id="card_name" name="card_name" />
                                            <input type="hidden" class="form-control form-control-solid" value="{{Auth::user()->id}}" id="user_id" name="user_id" />
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="d-flex flex-column mb-7 fv-row">
                                            <!--begin::Label-->
                                            <label class="required fs-6 fw-semibold form-label mb-2">Card Number</label>
                                            <!--end::Label-->
                                            <!--begin::Input wrapper-->
                                            <div class="position-relative">
                                                <!--begin::Input-->
                                                <input type="text" class="form-control form-control-solid"
                                                    placeholder="Enter card number" id='card_number' name="card_number"
                                                    value="4111 1111 1111 1111" />
                                                <!--end::Input-->
                                                <!--begin::Card logos-->
                                                <div class="position-absolute translate-middle-y top-50 end-0 me-5">
                                                    <img src="assets/media/svg/card-logos/visa.svg" alt="" class="h-25px" />
                                                    <img src="assets/media/svg/card-logos/mastercard.svg" alt="" class="h-25px" />
                                                    <img src="assets/media/svg/card-logos/american-express.svg" alt=""
                                                        class="h-25px" />
                                                </div>
                                                <!--end::Card logos-->
                                            </div>
                                            <!--end::Input wrapper-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="row mb-10">
                                            <!--begin::Col-->
                                            <div class="col-md-8 fv-row">
                                                <!--begin::Label-->
                                                <label class="required fs-6 fw-semibold form-label mb-2">Expiration Date</label>
                                                <!--end::Label-->
                                                <!--begin::Row-->
                                                <div class="row fv-row">
                                                    <!--begin::Col-->
                                                    <div class="col-6">
                                                        <select name="card_expiry_month" id="card_expiry_month"
                                                            class="form-select form-select-solid" data-control="select2"
                                                            data-hide-search="true" data-placeholder="Month">
                                                            <option></option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                            <option value="7">7</option>
                                                            <option value="8">8</option>
                                                            <option value="9">9</option>
                                                            <option value="10">10</option>
                                                            <option value="11">11</option>
                                                            <option value="12">12</option>
                                                        </select>
                                                    </div>
                                                    <!--end::Col-->
                                                    <!--begin::Col-->
                                                    <div class="col-6">
                                                        <input name="card_expiry_year" id="card_expiry_year" placeholder="Year" />

                                                    </div>
                                                    <!--end::Col-->
                                                </div>
                                                <!--end::Row-->
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-md-4 fv-row">
                                                <!--begin::Label-->
                                                <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                                    <span class="required">CVV</span>
                                                    <span class="ms-1" data-bs-toggle="tooltip" title="Enter a card CVV code">
                                                        <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                                                class="path1"></span><span class="path2"></span><span
                                                                class="path3"></span></i></span>
                                                </label>
                                                <!--end::Label-->
                                                <!--begin::Input wrapper-->
                                                <div class="position-relative">
                                                    <!--begin::Input-->
                                                    <input type="text" class="form-control form-control-solid" id="card_cvv"
                                                        minlength="3" maxlength="4" placeholder="CVV" name="card_cvv" />
                                                    <!--end::Input-->
                                                    <!--begin::CVV icon-->
                                                    <div class="position-absolute translate-middle-y top-50 end-0 me-3">
                                                        <i class="ki-duotone ki-credit-cart fs-2hx"><span class="path1"></span><span
                                                                class="path2"></span></i>
                                                    </div>
                                                    <!--end::CVV icon-->
                                                </div>
                                                <!--end::Input wrapper-->
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="d-flex flex-stack">
                                            <!--begin::Label-->
                                            <div class="me-5">
                                                <label class="fs-6 fw-semibold form-label">Save Card for further billing?</label>
                                                <div class="fs-7 fw-semibold text-muted">If you need more info, please check budget
                                                    planning</div>
                                            </div>
                                            <!--end::Label-->
                                            <!--begin::Switch-->
                                            <label class="form-check form-switch form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="1" checked="checked" />
                                                <span class="form-check-label fw-semibold text-muted">
                                                    Save Card
                                                </span>
                                            </label>
                                            <!--end::Switch-->
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                </div>
                                <!--end::Step 4-->
                            </div>
                        </div>
                        <div class="modal-footer border-0">
                            <button type="button" class="btn btn-secondary" onclick="submit_payment()">Submit</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>

                    </div>
                </div>
            </div>

            <div class="modal fade" id="add_pages_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content badge-custom-bg">
                        <div class="modal-header border-0">
                            <h5 class="modal-title text-white" id="exampleModalLabel">Add Pages</h5>
                            <button type="button" class="ms-0 btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div data-kt-stepper-content="true" data-kt-stepper-content-for="stepper-id" data-kt-stepper-type="step"
                                class='step'>
                                <!--begin::Step 4-->
                                <div data-kt-stepper-element="content">
                                    <div class="w-100">
                                        <!--begin::Input group-->
                                        <div class="d-flex flex-column mb-7 fv-row">
                                            <!--begin::Label-->
                                            <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2 text-white">
                                                <span class="required">Pages</span>
                                                <span class="ms-1" data-bs-toggle="tooltip" title="add pages">
                                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span></i></span>
                                            </label>
                                            <!--end::Label-->
                                            <input type="text" class="form-control form-control-solid btn-dark-primary" placeholder="Enter page like 10, 20, 50..."
                                                id="no_of_page" name="no_of_page" />
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                </div>
                                <!--end::Step 4-->
                            </div>
                        </div>
                        <div class="modal-footer border-0">
                            <button type="button" class="btn btn-dark-primary addPages" >Add</button>
                            <button type="button" class="btn btn-dark-primary" data-bs-dismiss="modal">Close</button>
                        </div>

                    </div>
                </div>
            </div>

                <!--end::Card-->
                <!--begin::Modals-->
                <!--begin::Modal - Customers - Add-->
                <div class="modal fade" id="kt_modal_add_customer" tabindex="-1" aria-hidden="true">
                    <!--begin::Modal dialog-->
                    <div class="modal-dialog modal-dialog-centered mw-650px">
                        <!--begin::Modal content-->
                        <div class="modal-content">
                            <!--begin::Form-->
                            <form class="form" action="#" id="kt_modal_add_customer_form"
                                data-kt-redirect="apps/customers/list.html">
                                <!--begin::Modal header-->
                                <div class="modal-header" id="kt_modal_add_customer_header">
                                    <!--begin::Modal title-->
                                    <h2 class="fw-bold">Add a Customer</h2>
                                    <!--end::Modal title-->
                                    <!--begin::Close-->
                                    <div data-bs-dismiss="modal" aria-label="Close"
                                        class="btn btn-icon btn-sm btn-active-icon-primary">
                                        <i class="ki-duotone ki-cross fs-1">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </div>
                                    <!--end::Close-->
                                </div>
                                <!--end::Modal header-->
                                <!--begin::Modal body-->
                                <div class="modal-body py-10 px-lg-17">
                                    <!--begin::Scroll-->
                                    <div class="scroll-y me-n7 pe-7" id="kt_modal_add_customer_scroll"
                                        data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}"
                                        data-kt-scroll-max-height="auto"
                                        data-kt-scroll-dependencies="#kt_modal_add_customer_header"
                                        data-kt-scroll-wrappers="#kt_modal_add_customer_scroll"
                                        data-kt-scroll-offset="300px">
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-7">
                                            <!--begin::Label-->
                                            <label class="required fs-6 fw-semibold mb-2">Name</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-solid" placeholder=""
                                                name="name" value="Sean Bean" />
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-7">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-semibold mb-2">
                                                <span class="required">Email</span>
                                                <span class="ms-1" data-bs-toggle="tooltip"
                                                    title="Email address must be active">
                                                    <i class="ki-duotone ki-information fs-7">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                    </i>
                                                </span>
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="email" class="form-control form-control-solid" placeholder=""
                                                name="email" value="sean@dellito.com" />
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-15">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-semibold mb-2">Description</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-solid" placeholder=""
                                                name="description" />
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Billing toggle-->
                                        <div class="fw-bold fs-3 rotate collapsible mb-7" data-bs-toggle="collapse"
                                            href="#kt_modal_add_customer_billing_info" role="button"
                                            aria-expanded="false" aria-controls="kt_customer_view_details">Shipping
                                            Information
                                            <span class="ms-2 rotate-180">
                                                <i class="ki-duotone ki-down fs-3"></i>
                                            </span>
                                        </div>
                                        <!--end::Billing toggle-->
                                        <!--begin::Billing form-->
                                        <div id="kt_modal_add_customer_billing_info" class="collapse show">
                                            <!--begin::Input group-->
                                            <div class="d-flex flex-column mb-7 fv-row">
                                                <!--begin::Label-->
                                                <label class="required fs-6 fw-semibold mb-2">Address Line 1</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input class="form-control form-control-solid" placeholder=""
                                                    name="address1" value="101, Collins Street" />
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="d-flex flex-column mb-7 fv-row">
                                                <!--begin::Label-->
                                                <label class="fs-6 fw-semibold mb-2">Address Line 2</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input class="form-control form-control-solid" placeholder=""
                                                    name="address2" value="" />
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="d-flex flex-column mb-7 fv-row">
                                                <!--begin::Label-->
                                                <label class="required fs-6 fw-semibold mb-2">Town</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input class="form-control form-control-solid" placeholder=""
                                                    name="city" value="Melbourne" />
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="row g-9 mb-7">
                                                <!--begin::Col-->
                                                <div class="col-md-6 fv-row">
                                                    <!--begin::Label-->
                                                    <label class="required fs-6 fw-semibold mb-2">State / Province</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input class="form-control form-control-solid" placeholder=""
                                                        name="state" value="Victoria" />
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-md-6 fv-row">
                                                    <!--begin::Label-->
                                                    <label class="required fs-6 fw-semibold mb-2">Post Code</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input class="form-control form-control-solid" placeholder=""
                                                        name="postcode" value="3000" />
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="d-flex flex-column mb-7 fv-row">
                                                <!--begin::Label-->
                                                <label class="fs-6 fw-semibold mb-2">
                                                    <span class="required">Country</span>
                                                    <span class="ms-1" data-bs-toggle="tooltip"
                                                        title="Country of origination">
                                                        <i class="ki-duotone ki-information fs-7">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            <span class="path3"></span>
                                                        </i>
                                                    </span>
                                                </label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <se
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="fv-row mb-7">
                                                <!--begin::Wrapper-->
                                                <div class="d-flex flex-stack">
                                                    <!--begin::Label-->
                                                    <div class="me-5">
                                                        <!--begin::Label-->
                                                        <label class="fs-6 fw-semibold">Use as a billing adderess?</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <div class="fs-7 fw-semibold text-muted">If you need more info,
                                                            please check budget planning</div>
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Label-->
                                                    <!--begin::Switch-->
                                                    <label
                                                        class="form-check form-switch form-check-custom form-check-solid">
                                                        <!--begin::Input-->
                                                        <input class="form-check-input" name="billing" type="checkbox"
                                                            value="1" id="kt_modal_add_customer_billing"
                                                            checked="checked" />
                                                        <!--end::Input-->
                                                        <!--begin::Label-->
                                                        <span class="form-check-label fw-semibold text-muted"
                                                            for="kt_modal_add_customer_billing">Yes</span>
                                                        <!--end::Label-->
                                                    </label>
                                                    <!--end::Switch-->
                                                </div>
                                                <!--begin::Wrapper-->
                                            </div>
                                            <!--end::Input group-->
                                        </div>
                                        <!--end::Billing form-->
                                    </div>
                                    <!--end::Scroll-->
                                </div>
                                <!--end::Modal body-->
                                <!--begin::Modal footer-->
                                <div class="modal-footer flex-center">
                                    <!--begin::Button-->
                                    <button type="reset" data-bs-dismiss="modal"
                                        class="btn btn-light me-3">Discard</button>
                                    <!--end::Button-->
                                    <!--begin::Button-->
                                    <button type="submit" id="kt_modal_add_customer_submit" class="btn btn-primary">
                                        <span class="indicator-label">Submit</span>
                                        <span class="indicator-progress">Please wait...
                                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    </button>
                                    <!--end::Button-->
                                </div>
                                <!--end::Modal footer-->
                            </form>
                            <!--end::Form-->
                        </div>
                    </div>
                </div>
                <!--end::Modal - Customers - Add-->
                <!--begin::Modal - Adjust Balance-->
                <div class="modal fade" id="kt_customers_export_modal" tabindex="-1" aria-hidden="true">
                    <!--begin::Modal dialog-->
                    <div class="modal-dialog modal-dialog-centered mw-650px">
                        <!--begin::Modal content-->
                        <div class="modal-content">
                            <!--begin::Modal header-->
                            <div class="modal-header">
                                <!--begin::Modal title-->
                                <h2 class="fw-bold">Export Customers</h2>
                                <!--end::Modal title-->
                                <!--begin::Close-->
                                <div data-bs-dismiss="modal" aria-label="Close"
                                    class="btn btn-icon btn-sm btn-active-icon-primary">
                                    <i class="ki-duotone ki-cross fs-1">
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
                                <form id="kt_customers_export_form" class="form" action="#">
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="fs-5 fw-semibold form-label mb-5">Select Export Format:</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <select data-control="select2" data-placeholder="Select a format"
                                            data-hide-search="true" name="format" class="form-select form-select-solid">
                                            <option value="excell">Excel</option>
                                            <option value="pdf">PDF</option>
                                            <option value="cvs">CVS</option>
                                            <option value="zip">ZIP</option>
                                        </select>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="fs-5 fw-semibold form-label mb-5">Select Date Range:</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input class="form-control form-control-solid" placeholder="Pick a date"
                                            name="date" />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Row-->
                                    <div class="row fv-row mb-15">
                                        <!--begin::Label-->
                                        <label class="fs-5 fw-semibold form-label mb-5">Payment Type:</label>
                                        <!--end::Label-->
                                        <!--begin::Radio group-->
                                        <div class="d-flex flex-column">
                                            <!--begin::Radio button-->
                                            <label
                                                class="form-check form-check-custom form-check-sm form-check-solid mb-3">
                                                <input class="form-check-input" type="checkbox" value="1"
                                                    checked="checked" name="payment_type" />
                                                <span class="form-check-label text-gray-600 fw-semibold">All</span>
                                            </label>
                                            <!--end::Radio button-->
                                            <!--begin::Radio button-->
                                            <label
                                                class="form-check form-check-custom form-check-sm form-check-solid mb-3">
                                                <input class="form-check-input" type="checkbox" value="2"
                                                    checked="checked" name="payment_type" />
                                                <span class="form-check-label text-gray-600 fw-semibold">Visa</span>
                                            </label>
                                            <!--end::Radio button-->
                                            <!--begin::Radio button-->
                                            <label
                                                class="form-check form-check-custom form-check-sm form-check-solid mb-3">
                                                <input class="form-check-input" type="checkbox" value="3"
                                                    name="payment_type" />
                                                <span class="form-check-label text-gray-600 fw-semibold">Mastercard</span>
                                            </label>
                                            <!--end::Radio button-->
                                            <!--begin::Radio button-->
                                            <label class="form-check form-check-custom form-check-sm form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="4"
                                                    name="payment_type" />
                                                <span class="form-check-label text-gray-600 fw-semibold">American
                                                    Express</span>
                                            </label>
                                            <!--end::Radio button-->
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Row-->
                                    <!--begin::Actions-->
                                    <div class="text-center">
                                        <button type="reset" data-bs-dismiss="modal"
                                            class="btn btn-light me-3">Discard</button>
                                        <button type="submit" id="kt_customers_export_submit" class="btn btn-primary">
                                            <span class="indicator-label">Submit</span>
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
                <!--end::Modal - New Card-->
                <!--end::Modals-->
            </div>
            <!--end::Content container-->
        </div>

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
    <!--end::Modals-->
    <!--begin::Javascript-->


    <form id="filter-form" action="" method="GET">
        <input type="hidden" name="month" id="filter-month" value="">
    </form>



@endsection

@section('customJs')

    <script>
        $(document).ready(function() {
            // Add this code to handle the filter button click
            $('#apply-filter-btn').on('click', function() {
                var selectedMonth = $('[data-kt-customer-table-filter="month"]').val();
                $('#filter-month').val(selectedMonth);
                $('#filter-form').submit();
            });
        });




        $(document).ready(function() {
            // Apply the Select2 plugin to the month dropdown
            $('[data-kt-select2="true"]').select2({
                width: '100%',
            });

            // Handle filter change event
            $('[data-kt-customer-table-filter="month"]').on('change', function() {
                // Trigger form submission on filter change
                $('#filter-form').submit();
            });
        });


        var isStatusEnabled = false;





        function toggleStatus() {
            isStatusEnabled = !isStatusEnabled;
            updateButtonAppearance();
            // You can also perform other actions based on the status change here
        }

        function updateButtonAppearance() {
            var button = document.getElementById("toggleButton");
            if (isStatusEnabled) {
                button.textContent = "Enabled";
                button.classList.remove("disabledd");
                button.classList.add("enabledd");
            } else {
                button.textContent = "Disabled";
                button.classList.remove("enabledd");
                button.classList.add("disabledd");
            }
        }
    </script>
<script>
    function handleTableSearch() {
        // Get the search input value
        var searchText = $('[data-kt-customer-table-filter="search"]').val().toLowerCase();
        console.log(searchText)
        // Loop through each table row
        $('#kt_customers_table tbody tr').each(function() {
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
    $('[data-kt-customer-table-filter="search"]').on('input', function() {
        handleTableSearch();
    });

    </script>

    <script>
        var hostUrl = "assets/";
    </script>



@endsection
