<!--begin::Content wrapper-->
@extends('custom_layout.master_dashboard_index')
@section('main_content_2')

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <div class="d-flex flex-column flex-column-fluid">
        <!--begin::Toolbar-->
        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <!--begin::Toolbar container-->
            <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                <!--begin::Page title-->
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                    <!--begin::Title-->
                    <h1 class="page-heading fs-color-white custom-fs-23 fw-bold fs-3 flex-column justify-content-center my-0">
                        Dashboard</h1>
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
                <!--begin::Row-->
                <div class="row g-5 g-xl-10 mb-5">
                    <!--begin::Col-->
                    <div class="col-xl-4 mb-xl-10">
                        <!--begin::Lists Widget 19-->
                        <div class="card card-flush h-xl-100 card-custom-bg">
                            <!--begin::Heading-->
                            <div class="card-header rounded bgi-no-repeat bgi-size-cover bgi-position-y-top badge-custom-bg bgi-position-x-center align-items-start h-250px"
                                data-bs-theme="light">
                                <!--begin::Title-->
                                <h3 class="card-title align-items-start flex-column text-white pt-15">
                                    <span class="fw-bold fs-2x mb-3">Order Overview</span>
                                </h3>
                                <!--end::Title-->
                            </div>
                            <!--end::Heading-->
                            <!--begin::Body-->
                            <div class="card-body mt-n20">
                                <!--begin::Stats-->
                                <div class="mt-n20 position-relative">
                                    <!--begin::Row-->
                                    <div class="row g-3 g-lg-6">
                                        <!--begin::Col-->
                                        <div class="col-6">
                                            <!--begin::Items-->
                                            <div class="card-custom-bg bg-opacity-70 rounded-2 px-6 py-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-30px me-5 mb-8">
                                                    <span class="symbol-label">
                                                        <i class="ki-duotone ki-parcel fs-1 text-primary"><span
                                                                class="path1"></span><span class="path2"></span><span
                                                                class="path3"></span><span class="path4"></span><span
                                                                class="path5"></span></i>
                                                    </span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Stats-->
                                                <div class="m-0">
                                                    <!--begin::Number-->
                                                    @php
                                                        $countNewOrders = \App\Models\Orders::where('order_status', 'Pending')->count();
                                                    @endphp

                                                    @if ($countNewOrders)
                                                        <!--begin::Number-->
                                                        <span
                                                            class="fs-color-yellow custom-fs-17 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">{{ $countNewOrders }}</span>
                                                        <!--end::Number-->
                                                    @else
                                                        <!--begin::Number-->
                                                        <span
                                                            class="fs-color-yellow custom-fs-17 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">0</span>
                                                        <!--end::Number-->
                                                    @endif

                                                    <!--end::Number-->
                                                    <!--begin::Desc-->
                                                    <span class=" fw-semibold fs-6 fs-color-white"><a
                                                            href="{{route('admin.new-order')}}" class="fs-color-white custom-fs-13">New</a></span>
                                                    <!--end::Desc-->
                                                </div>
                                                <!--end::Stats-->
                                            </div>
                                            <!--end::Items-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-6">
                                            <!--begin::Items-->
                                            <div class="card-custom-bg bg-opacity-70 rounded-2 px-6 py-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-30px me-5 mb-8">
                                                    <span class="symbol-label">
                                                        <i class="ki-duotone ki-abstract-8 fs-1 text-primary">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Stats-->
                                                <div class="m-0">
                                                    <!--begin::Number-->
                                                    @php
                                                        $countPending = \App\Models\Orders::where('order_status', 'In-Progress')->count();
                                                    @endphp

                                                    @if ($countPending)
                                                        <!--begin::Number-->
                                                        <span
                                                            class="fs-color-yellow custom-fs-17 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">{{ $countPending }}</span>
                                                        <!--end::Number-->
                                                    @else
                                                        <!--begin::Number-->
                                                        <span
                                                            class="fs-color-yellow custom-fs-17 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">0</span>
                                                        <!--end::Number-->
                                                    @endif
                                                    <!--end::Number-->
                                                    <!--begin::Desc-->
                                                    <span class="text-gray-500 fw-semibold fs-6"><a
                                                            href="{{route('admin.inprogress-order')}}" class="fs-color-white custom-fs-13">In-Progress</a></span>
                                                    <!--end::Desc-->
                                                </div>
                                                <!--end::Stats-->
                                            </div>
                                            <!--end::Items-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-6">
                                            <!--begin::Items-->
                                            <div class="card-custom-bg bg-opacity-70 rounded-2 px-6 py-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-30px me-5 mb-8">
                                                    <span class="symbol-label">
                                                        <i class="ki-duotone ki-timer fs-1 text-primary">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            <span class="path3"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Stats-->
                                                <div class="m-0">
                                                    <!--begin::Number-->
                                                    @php
                                                        $countRevisions = \App\Models\Orders::where('order_status', 'Revision')->count();
                                                    @endphp

                                                    @if ($countRevisions)
                                                        <!--begin::Number-->
                                                        <span
                                                            class="fs-color-yellow custom-fs-17 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">{{ $countRevisions }}</span>
                                                        {{-- comma seprated --}}
                                                        <!--end::Number-->
                                                    @else
                                                        <!--begin::Number-->
                                                        <span
                                                            class="fs-color-yellow custom-fs-17 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">0</span>
                                                        <!--end::Number-->
                                                    @endif
                                                    <!--end::Number-->
                                                    <!--begin::Desc-->
                                                    <span class="text-gray-500 fw-semibold fs-6"><a
                                                            href="{{route('admin.revision-order')}}" class="fs-color-white custom-fs-13">Revisions</a></span>
                                                    <!--end::Desc-->
                                                </div>
                                                <!--end::Stats-->
                                            </div>
                                            <!--end::Items-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-6">
                                            <!--begin::Items-->
                                            <div class="card-custom-bg bg-opacity-70 rounded-2 px-6 py-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-30px me-5 mb-8">
                                                    <span class="symbol-label">
                                                        <i class="ki-duotone ki-parcel fs-1 text-primary"><span
                                                                class="path1"></span><span class="path2"></span><span
                                                                class="path3"></span><span class="path4"></span><span
                                                                class="path5"></span></i>
                                                    </span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Stats-->
                                                <div class="m-0">
                                                    <!--begin::Number-->
                                                    @php
                                                        $countCompleted = \App\Models\Orders::where('order_status', 'Completed')->count();
                                                    @endphp

                                                    @if ($countCompleted)
                                                        <!--begin::Number-->
                                                        <span
                                                            class="fs-color-yellow custom-fs-17 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">{{ $countCompleted }}</span>
                                                        {{-- comma seprated --}}
                                                        <!--end::Number-->
                                                    @else
                                                        <!--begin::Number-->
                                                        <span
                                                            class="fs-color-yellow custom-fs-17 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">0</span>
                                                        <!--end::Number-->
                                                    @endif
                                                    <!--end::Number-->
                                                    <!--begin::Desc-->
                                                    <span class="text-gray-500 fw-semibold fs-6"><a
                                                            href="{{route('admin.completed-order')}}" class="fs-color-white custom-fs-13">Completed</a></span>
                                                    <!--end::Desc-->
                                                </div>
                                                <!--end::Stats-->
                                            </div>
                                            <!--end::Items-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-6">
                                            <!--begin::Items-->
                                            <div class="card-custom-bg rounded-2 px-6 py-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-30px me-5 mb-8">
                                                    <span class="symbol-label">
                                                        <i class="ki-duotone ki-delivery fs-1 text-primary"><span
                                                                class="path1"></span><span class="path2"></span><span
                                                                class="path3"></span><span class="path4"></span><span
                                                                class="path5"></span></i>
                                                    </span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Stats-->
                                                <div class="m-0">
                                                    <!--begin::Number-->
                                                    @php
                                                        $countDelevired = \App\Models\Orders::where('order_status', 'Delivered')->count();
                                                    @endphp

                                                    @if ($countDelevired)
                                                        <!--begin::Number-->
                                                        <span
                                                            class="fs-color-yellow custom-fs-17 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">{{ $countDelevired }}</span>
                                                        {{-- comma seprated --}}
                                                        <!--end::Number-->
                                                    @else
                                                        <!--begin::Number-->
                                                        <span
                                                            class="fs-color-yellow custom-fs-17 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">0</span>
                                                        <!--end::Number-->
                                                    @endif
                                                    <!--end::Number-->
                                                    <!--begin::Desc-->
                                                    <span class="text-gray-500 fw-semibold fs-6"><a
                                                            href="{{route('admin.delivered-order')}}" class="fs-color-white custom-fs-13">Delevired</a></span>
                                                    <!--end::Desc-->
                                                </div>
                                                <!--end::Stats-->
                                            </div>
                                            <!--end::Items-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-6">
                                            <!--begin::Items-->
                                            <div class="card-custom-bg rounded-2 px-6 py-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-30px me-5 mb-8">
                                                    <span class="symbol-label">
                                                        <i class="ki-duotone ki-parcel fs-1 text-primary"><span
                                                                class="path1"></span><span class="path2"></span><span
                                                                class="path3"></span><span class="path4"></span><span
                                                                class="path5"></span></i>
                                                    </span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Stats-->
                                                <div class="m-0">
                                                    <!--begin::Number-->
                                                    @php
                                                        $totalOthers = \App\Models\Orders::where('user_id', Auth::id())
                                                        ->whereIn('order_status', ['Canceled','Refund'])
                                                        ->count();
                                                    @endphp

                                                    @if ($countOthers)
                                                        <!--begin::Number-->
                                                        <span
                                                            class="fs-color-yellow custom-fs-17 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">{{ $countDelevired }}</span>
                                                        {{-- comma seprated --}}
                                                        <!--end::Number-->
                                                    @else
                                                        <!--begin::Number-->
                                                        <span
                                                            class="fs-color-yellow custom-fs-17 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">0</span>
                                                        <!--end::Number-->
                                                    @endif
                                                    <!--end::Number-->
                                                    <!--begin::Desc-->
                                                    <span class="text-gray-500 fw-semibold fs-6"><a
                                                            href="{{route('admin.other-order')}}" class="fs-color-white custom-fs-13">Others</a></span>
                                                    <!--end::Desc-->
                                                </div>
                                                <!--end::Stats-->
                                            </div>
                                            <!--end::Items-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Lists Widget 19-->
                    </div>
                    <!--end::Col-->

                    <!--begin::Col-->
                    <div class="col-xl-8">
                        <!--begin::Chart widget 18-->
                        <!--begin::List widget 25-->
                        <div class="card card-flush mb-5">
                            <!--begin::Header-->
                            <div class="card-header pt-5">
                                <!--begin::Title-->
                                <h3 class="card-title text-gray-800 fs-color-white custom-fs-23">Highlights</h3>
                                <!--end::Title-->
                                <!--begin::Toolbar-->

                                <!--end::Toolbar-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body pt-5">
                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Section-->
                                    <div class="text-gray-700 fw-semibold fs-6 me-2 fs-color-white custom-fs-13">Total Package Pages</div>
                                    <!--end::Section-->
                                    <!--begin::Statistics-->
                                    <div class="d-flex align-items-senter">
                                        <i class="ki-duotone ki-arrow-up-right fs-2 text-success me-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                        <!--begin::Number-->
                                        <span class="text-gray-900 fw-bolder fs-6 fs-color-white custom-fs-13">{{$total_pages}}</span>
                                    </div>
                                    <!--end::Statistics-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed my-3"></div>
                                <!--end::Separator-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Section-->
                                    <div class="text-gray-700 fw-semibold fs-6 me-2 fs-color-white custom-fs-13">Used Pages</div>
                                    <!--end::Section-->
                                    <!--begin::Statistics-->
                                    <div class="d-flex align-items-senter">
                                        <i class="ki-duotone ki-arrow-down-right fs-2 text-danger me-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                        <!--begin::Number-->
                                        <span class="text-gray-900 fw-bolder fs-6 fs-color-white custom-fs-13">{{$remaining_pages}}</span>
                                        <!--end::Number-->
                                    </div>
                                    <!--end::Statistics-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed my-3"></div>
                                <!--end::Separator-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Section-->
                                    <div class="text-gray-700 fw-semibold fs-6 me-2 fs-color-white custom-fs-13">Unused Pages</div>
                                    <!--end::Section-->
                                    <!--begin::Statistics-->
                                    <div class="d-flex align-items-senter">
                                        <i class="ki-duotone ki-arrow-up-right fs-2 text-success me-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                        <!--begin::Number-->
                                        <span class="text-gray-900 fw-bolder fs-6 fs-color-white custom-fs-13">{{$unused}}</span>
                                        <!--end::Number-->
                                    </div>
                                    <!--end::Statistics-->
                                </div>
                                <!--end::Item-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::LIst widget 25-->
                        <div class="card card-flush">
                            <!--begin::Header-->
                            <div class="card-header pt-7">
                                <!--begin::Title-->
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bold fs-color-white custom-fs-23">Customer Journey</span>
                                </h3>
                                <!--end::Title-->

                                <!--begin::Toolbar-->
                                <div class="card-toolbar">

                                    <div data-kt-daterangepicker1="true" data-kt-daterangepicker1-opens="left"
                                        data-kt-daterangepicker1-range="today"
                                        class="btn btn-sm btn-dark-primary d-flex align-items-center px-4">
                                        <!--begin::Display range-->
                                        <div class="fs-color-white custom-fs-13 fw-bold">Loading date range...</div>
                                        <!--end::Display range-->
                                        <i class="ki-duotone ki-calendar-8 fs-1 ms-2 me-0">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                            <span class="path4"></span>
                                            <span class="path5"></span>
                                            <span class="path6"></span>
                                        </i>

                                        <!-- Adding hidden input for storing range key -->
                                        <input type="hidden" class="selected-range-key">

                                    </div>

                                </div>

                                <!--end::Toolbar-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body px-0 pt-3 pb-5 overflow-hidden">
                                <!--begin::Chart-->
                                {{-- <div id="kt_charts_widget_18_chart" class="h-325px w-100 min-h-auto ps-4 pe-6"></div> --}}


                                <div>
                                    <canvas id="myChart" class="h-325px w-100 min-h-auto ps-4 pe-6"></canvas>
                                </div>
                                <!--end::Chart-->
                            </div>
                            <!--end: Card Body-->
                        </div>
                        <!--end::Chart widget 18-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-12 mb-5 mb-xl-0">
                        <!--begin::Timeline widget 3-->
                        <div class="card h-md-100 card-custom-bg">
                            <!--begin::Header-->
                            <div class="card-header border-0 pt-5">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bold fs-color-white custom-fs-23">Orders Summary</span>
                                </h3>
                                <!--begin::Toolbar-->
                                <div class="card-toolbar">

                                    <div data-kt-daterangepicker3="true" data-kt-daterangepicker3-opens="left"
                                        data-kt-daterangepicker3-range="today"
                                        class="btn btn-sm btn-dark-primary d-flex align-items-center px-4">
                                        <!--begin::Display range-->
                                        <div class="text-gray-600 fw-bold fs-color-white custom-fs-13">Loading date range...</div>
                                        <!--end::Display range-->
                                        <i class="ki-duotone ki-calendar-8 fs-1 ms-2 me-0">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                            <span class="path4"></span>
                                            <span class="path5"></span>
                                            <span class="path6"></span>
                                        </i>

                                        <!-- Adding hidden input for storing range key -->
                                        <input type="hidden" class="selected-range-key">

                                    </div>

                                </div>
                                <!--end::Toolbar-->
                            </div>

                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body pt-7 px-0">
                                <!--begin::Nav-->
                                <ul
                                    class="nav nav-stretch nav-pills nav-pills-custom nav-pills-active-custom d-flex justify-content-start mb-8 px-5">
                                    <!--begin::Nav item-->
                                    <li class="nav-item p-0 ms-0 ordersummary">
                                        <!--begin::Date-->
                                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger"
                                            data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_1">
                                            <span class="fs-7 fw-semibold fs-color-white custom-fs-13">Fri</span>
                                            <span class="fs-6 fw-bold ordersummarydate fs-color-white custom-fs-13">1</span>
                                        </a>
                                        <!--end::Date-->
                                    </li>
                                    <!--end::Nav item-->
                                    <!--begin::Nav item-->
                                    <li class="nav-item p-0 ms-0 ordersummary">
                                        <!--begin::Date-->
                                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger"
                                            data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_2">
                                            <span class="fs-7 fw-semibold fs-color-white custom-fs-13">Sat</span>
                                            <span class="fs-6 fw-bold ordersummarydate fs-color-white custom-fs-13">2</span>
                                        </a>
                                        <!--end::Date-->
                                    </li>
                                    <!--end::Nav item-->
                                    <!--begin::Nav item-->
                                    <li class="nav-item p-0 ms-0 ordersummary">
                                        <!--begin::Date-->
                                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger"
                                            data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_3">
                                            <span class="fs-7 fw-semibold fs-color-white custom-fs-13">Sun</span>
                                            <span class="fs-6 fw-bold ordersummarydate fs-color-white custom-fs-13">3</span>
                                        </a>
                                        <!--end::Date-->
                                    </li>
                                    <!--end::Nav item-->
                                    <!--begin::Nav item-->
                                    <li class="nav-item p-0 ms-0 ordersummary">
                                        <!--begin::Date-->
                                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger"
                                            data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_4">
                                            <span class="fs-7 fw-semibold fs-color-white custom-fs-13">Mon</span>
                                            <span class="fs-6 fw-bold ordersummarydate fs-color-white custom-fs-13">4</span>
                                        </a>
                                        <!--end::Date-->
                                    </li>
                                    <!--end::Nav item-->
                                    <!--begin::Nav item-->
                                    <li class="nav-item p-0 ms-0 ordersummary">
                                        <!--begin::Date-->
                                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger"
                                            data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_5">
                                            <span class="fs-7 fw-semibold fs-color-white custom-fs-13">Tue</span>
                                            <span class="fs-6 fw-bold ordersummarydate fs-color-white custom-fs-13">5</span>
                                        </a>
                                        <!--end::Date-->
                                    </li>
                                    <!--end::Nav item-->
                                    <!--begin::Nav item-->
                                    <li class="nav-item p-0 ms-0 ordersummary">
                                        <!--begin::Date-->
                                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger"
                                            data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_6">
                                            <span class="fs-7 fw-semibold fs-color-white custom-fs-13">Wed</span>
                                            <span class="fs-6 fw-bold ordersummarydate fs-color-white custom-fs-13">6</span>
                                        </a>
                                        <!--end::Date-->
                                    </li>
                                    <!--end::Nav item-->
                                    <!--begin::Nav item-->
                                    <li class="nav-item p-0 ms-0 ordersummary">
                                        <!--begin::Date-->
                                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger"
                                            data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_7">
                                            <span class="fs-7 fw-semibold fs-color-white custom-fs-13">Thu</span>
                                            <span class="fs-6 fw-bold ordersummarydate fs-color-white custom-fs-13">7</span>
                                        </a>
                                        <!--end::Date-->
                                    </li>
                                    <!--end::Nav item-->
                                    <!--begin::Nav item-->
                                    <li class="nav-item p-0 ms-0 ordersummary">
                                        <!--begin::Date-->
                                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger"
                                            data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_8">
                                            <span class="fs-7 fw-semibold fs-color-white custom-fs-13">Fri</span>
                                            <span class="fs-6 fw-bold ordersummarydate fs-color-white custom-fs-13">8</span>
                                        </a>
                                        <!--end::Date-->
                                    </li>
                                    <!--end::Nav item-->
                                    <!--begin::Nav item-->
                                    <li class="nav-item p-0 ms-0 ordersummary">
                                        <!--begin::Date-->
                                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger"
                                            data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_9">
                                            <span class="fs-7 fw-semibold fs-color-white custom-fs-13">Sat</span>
                                            <span class="fs-6 fw-bold ordersummarydate fs-color-white custom-fs-13">9</span>
                                        </a>
                                        <!--end::Date-->
                                    </li>
                                    <!--end::Nav item-->
                                    <!--begin::Nav item-->
                                    <li class="nav-item p-0 ms-0 ordersummary">
                                        <!--begin::Date-->
                                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger"
                                            data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_10">
                                            <span class="fs-7 fw-semibold fs-color-white custom-fs-13">Sun</span>
                                            <span class="fs-6 fw-bold ordersummarydate fs-color-white custom-fs-13">10</span>
                                        </a>
                                        <!--end::Date-->
                                    </li>
                                    <!--end::Nav item-->
                                    <!--begin::Nav item-->
                                    <li class="nav-item p-0 ms-0 ordersummary">
                                        <!--begin::Date-->
                                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger"
                                            data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_11">
                                            <span class="fs-7 fw-semibold fs-color-white custom-fs-13">Mon</span>
                                            <span class="fs-6 fw-bold ordersummarydate fs-color-white custom-fs-13">11</span>
                                        </a>
                                        <!--end::Date-->
                                    </li>
                                    <!--end::Nav item-->
                                    <!--begin::Nav item-->
                                    <li class="nav-item p-0 ms-0 ordersummary">
                                        <!--begin::Date-->
                                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger"
                                            data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_12">
                                            <span class="fs-7 fw-semibold fs-color-white custom-fs-13">Tue</span>
                                            <span class="fs-6 fw-bold ordersummarydate fs-color-white custom-fs-13">12</span>
                                        </a>
                                        <!--end::Date-->
                                    </li>
                                    <!--end::Nav item-->
                                    <!--begin::Nav item-->
                                    <li class="nav-item p-0 ms-0 ordersummary">
                                        <!--begin::Date-->
                                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger"
                                            data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_13">
                                            <span class="fs-7 fw-semibold fs-color-white custom-fs-13">Wed</span>
                                            <span class="fs-6 fw-bold ordersummarydate fs-color-white custom-fs-13">13</span>
                                        </a>
                                        <!--end::Date-->
                                    </li>
                                    <!--end::Nav item-->
                                    <!--begin::Nav item-->
                                    <li class="nav-item p-0 ms-0 ordersummary">
                                        <!--begin::Date-->
                                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger"
                                            data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_14">
                                            <span class="fs-7 fw-semibold fs-color-white custom-fs-13">Thu</span>
                                            <span class="fs-6 fw-bold ordersummarydate fs-color-white custom-fs-13">14</span>
                                        </a>
                                        <!--end::Date-->
                                    </li>
                                    <!--end::Nav item-->
                                    <!--begin::Nav item-->
                                    <li class="nav-item p-0 ms-0 ordersummary">
                                        <!--begin::Date-->
                                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger"
                                            data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_15">
                                            <span class="fs-7 fw-semibold fs-color-white custom-fs-13">Fri</span>
                                            <span class="fs-6 fw-bold ordersummarydate fs-color-white custom-fs-13">15</span>
                                        </a>
                                        <!--end::Date-->
                                    </li>
                                    <!--end::Nav item-->
                                    <!--begin::Nav item-->
                                    <li class="nav-item p-0 ms-0 ordersummary">
                                        <!--begin::Date-->
                                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger"
                                            data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_16">
                                            <span class="fs-7 fw-semibold fs-color-white custom-fs-13">Sat</span>
                                            <span class="fs-6 fw-bold ordersummarydate fs-color-white custom-fs-13">16</span>
                                        </a>
                                        <!--end::Date-->
                                    </li>
                                    <!--end::Nav item-->
                                    <!--begin::Nav item-->
                                    <li class="nav-item p-0 ms-0 ordersummary">
                                        <!--begin::Date-->
                                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger"
                                            data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_17">
                                            <span class="fs-7 fw-semibold fs-color-white custom-fs-13">Sun</span>
                                            <span class="fs-6 fw-bold ordersummarydate fs-color-white custom-fs-13">17</span>
                                        </a>
                                        <!--end::Date-->
                                    </li>
                                    <!--end::Nav item-->
                                    <!--begin::Nav item-->
                                    <li class="nav-item p-0 ms-0 ordersummary">
                                        <!--begin::Date-->
                                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger"
                                            data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_18">
                                            <span class="fs-7 fw-semibold fs-color-white custom-fs-13">Mon</span>
                                            <span class="fs-6 fw-bold ordersummarydate fs-color-white custom-fs-13">18</span>
                                        </a>
                                        <!--end::Date-->
                                    </li>
                                    <!--end::Nav item-->
                                    <!--begin::Nav item-->
                                    <li class="nav-item p-0 ms-0 ordersummary">
                                        <!--begin::Date-->
                                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger"
                                            data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_19">
                                            <span class="fs-7 fw-semibold fs-color-white custom-fs-13">Tue</span>
                                            <span class="fs-6 fw-bold ordersummarydate fs-color-white custom-fs-13">19</span>
                                        </a>
                                        <!--end::Date-->
                                    </li>
                                    <!--end::Nav item-->
                                    <!--begin::Nav item-->
                                    <li class="nav-item p-0 ms-0 ordersummary">
                                        <!--begin::Date-->
                                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger"
                                            data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_20">
                                            <span class="fs-7 fw-semibold fs-color-white custom-fs-13">Wed</span>
                                            <span class="fs-6 fw-bold ordersummarydate fs-color-white custom-fs-13">20</span>
                                        </a>
                                        <!--end::Date-->
                                    </li>
                                    <!--end::Nav item-->
                                    <!--begin::Nav item-->
                                    <li class="nav-item p-0 ms-0 ordersummary">
                                        <!--begin::Date-->
                                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger"
                                            data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_21">
                                            <span class="fs-7 fw-semibold fs-color-white custom-fs-13">Thu</span>
                                            <span class="fs-6 fw-bold ordersummarydate fs-color-white custom-fs-13">21</span>
                                        </a>
                                        <!--end::Date-->
                                    </li>
                                    <!--end::Nav item-->
                                    <!--begin::Nav item-->
                                    <li class="nav-item p-0 ms-0 ordersummary">
                                        <!--begin::Date-->
                                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger"
                                            data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_22">
                                            <span class="fs-7 fw-semibold fs-color-white custom-fs-13">Fri</span>
                                            <span class="fs-6 fw-bold ordersummarydate fs-color-white custom-fs-13">22</span>
                                        </a>
                                        <!--end::Date-->
                                    </li>
                                    <!--end::Nav item-->
                                    <!--begin::Nav item-->
                                    <li class="nav-item p-0 ms-0 ordersummary">
                                        <!--begin::Date-->
                                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger"
                                            data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_23">
                                            <span class="fs-7 fw-semibold fs-color-white custom-fs-13">Sat</span>
                                            <span class="fs-6 fw-bold ordersummarydate fs-color-white custom-fs-13">23</span>
                                        </a>
                                        <!--end::Date-->
                                    </li>
                                    <!--end::Nav item-->
                                    <!--begin::Nav item-->
                                    <li class="nav-item p-0 ms-0 ordersummary">
                                        <!--begin::Date-->
                                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger"
                                            data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_24">
                                            <span class="fs-7 fw-semibold fs-color-white custom-fs-13">Sun</span>
                                            <span class="fs-6 fw-bold ordersummarydate fs-color-white custom-fs-13">24</span>
                                        </a>
                                        <!--end::Date-->
                                    </li>
                                    <!--end::Nav item-->
                                    <!--begin::Nav item-->
                                    <li class="nav-item p-0 ms-0 ordersummary">
                                        <!--begin::Date-->
                                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger"
                                            data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_25">
                                            <span class="fs-7 fw-semibold fs-color-white custom-fs-13">Mon</span>
                                            <span class="fs-6 fw-bold ordersummarydate fs-color-white custom-fs-13">25</span>
                                        </a>
                                        <!--end::Date-->
                                    </li>
                                    <!--end::Nav item-->
                                    <!--begin::Nav item-->
                                    <li class="nav-item p-0 ms-0 ordersummary">
                                        <!--begin::Date-->
                                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger"
                                            data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_26">
                                            <span class="fs-7 fw-semibold fs-color-white custom-fs-13">Tue</span>
                                            <span class="fs-6 fw-bold ordersummarydate fs-color-white custom-fs-13">26</span>
                                        </a>
                                        <!--end::Date-->
                                    </li>
                                    <!--end::Nav item-->
                                    <!--begin::Nav item-->
                                    <li class="nav-item p-0 ms-0 ordersummary">
                                        <!--begin::Date-->
                                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger"
                                            data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_27">
                                            <span class="fs-7 fw-semibold fs-color-white custom-fs-13">Wed</span>
                                            <span class="fs-6 fw-bold ordersummarydate fs-color-white custom-fs-13">27</span>
                                        </a>
                                        <!--end::Date-->
                                    </li>
                                    <!--end::Nav item-->
                                    <!--begin::Nav item-->
                                    <li class="nav-item p-0 ms-0 ordersummary">
                                        <!--begin::Date-->
                                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger"
                                            data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_28">
                                            <span class="fs-7 fw-semibold fs-color-white custom-fs-13">Thu</span>
                                            <span class="fs-6 fw-bold ordersummarydate fs-color-white custom-fs-13">28</span>
                                        </a>
                                        <!--end::Date-->
                                    </li>
                                    <!--end::Nav item-->
                                    <!--begin::Nav item-->
                                    <li class="nav-item p-0 ms-0 ordersummary">
                                        <!--begin::Date-->
                                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger"
                                            data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_29">
                                            <span class="fs-7 fw-semibold fs-color-white custom-fs-13">Fri</span>
                                            <span class="fs-6 fw-bold ordersummarydate fs-color-white custom-fs-13">29</span>
                                        </a>
                                        <!--end::Date-->
                                    </li>
                                    <!--end::Nav item-->
                                    <!--begin::Nav item-->
                                    <li class="nav-item p-0 ms-0 ordersummary">
                                        <!--begin::Date-->
                                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger"
                                            data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_30">
                                            <span class="fs-7 fw-semibold fs-color-white custom-fs-13">Sat</span>
                                            <span class="fs-6 fw-bold ordersummarydate fs-color-white custom-fs-13">30</span>
                                        </a>
                                        <!--end::Date-->
                                    </li>
                                    <!--end::Nav item-->
                                </ul>
                                <!--end::Nav-->
                                <!--begin::Tab Content (ishlamayabdi)-->
                                <div class="tab-content mb-2 px-9">
                                    <!--begin::Tap pane-->




                                    <div class="">
                                        <!--begin::Wrapper-->

                                        <!--end::Wrapper-->
                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center mb-6">
                                            <!--begin::Bullet-->
                                            <span data-kt-element="bullet"
                                                class="bullet bullet-vertical d-flex align-items-center min-h-50px mh-100 me-4 bg-warning"></span>
                                            <!--end::Bullet-->
                                            <!--begin::Info-->
                                            <div class="flex-grow-1 me-5">
                                                <!--begin::Time-->
                                                <div class="fs-color-white custom-fs-17 fw-semibold fs-2">Delivered
                                                    <span class="fs-color-white custom-fs-17 fw-semibold fs-7 OrderDelivered">(0)</span>
                                                </div>
                                                <!--end::Time-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Action-->

                                            <!--end::Action-->
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center mb-6">
                                            <!--begin::Bullet-->
                                            <span data-kt-element="bullet"
                                                class="bullet bullet-vertical d-flex align-items-center min-h-50px mh-100 me-4 bg-success"></span>
                                            <!--end::Bullet-->
                                            <!--begin::Info-->
                                            <div class="flex-grow-1 me-5">
                                                <!--begin::Time-->
                                                <div class="fs-color-white custom-fs-17 fw-semibold fs-2">Revisions
                                                    <span class="fs-color-white custom-fs-17 fw-semibold fs-7 OrderRevisions">(0)</span>
                                                </div>
                                                <!--end::Time-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Action-->

                                            <!--end::Action-->
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center mb-6">
                                            <!--begin::Bullet-->
                                            <span data-kt-element="bullet"
                                                class="bullet bullet-vertical d-flex align-items-center min-h-50px mh-100 me-4 text-bg-info"></span>
                                            <!--end::Bullet-->
                                            <!--begin::Info-->
                                            <div class="flex-grow-1 me-5">
                                                <!--begin::Time-->
                                                <div class="fs-color-white custom-fs-17 fw-semibold fs-2">In-Progress
                                                    <span class="fs-color-white custom-fs-17 fw-semibold fs-7 OrderInProgress">(0)</span>
                                                </div>
                                                <!--end::Time-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Action-->

                                            <!--end::Action-->
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center mb-6">
                                            <!--begin::Bullet-->
                                            <span data-kt-element="bullet"
                                                class="bullet bullet-vertical d-flex align-items-center min-h-50px mh-100 me-4 text-bg-danger"></span>
                                            <!--end::Bullet-->
                                            <!--begin::Info-->
                                            <div class="flex-grow-1 me-5">
                                                <!--begin::Time-->
                                                <div class="fs-color-white custom-fs-17 fw-semibold fs-2">New
                                                    <span class="fs-color-white custom-fs-17 fw-semibold fs-7 OrderNew">(0)</span>
                                                </div>
                                                <!--end::Time-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Action-->

                                            <!--end::Action-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Tap pane-->
                                </div>
                                <!--end::Tab Content-->
                            </div>
                            <!--end: Card Body-->
                        </div>
                        <!--end::Timeline widget 3-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-12 mb-5 mb-xl-0">
                        <!--begin::Chart widget 3-->
                        <div class="card card-flush overflow-hidden h-md-100">
                            <!--begin::Header-->
                            <div class="card-header py-5">
                                <!--begin::Title-->
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bold fs-color-white custom-fs-23">Orders Summary</span>
                                </h3>
                                <!--end::Title-->
                                <!--begin::Toolbar-->
                                <div class="card-toolbar">
                                    <!--begin::Daterangepicker(defined in src/js/layout/app.js)-->
                                    <div data-kt-daterangepicker2="true" data-kt-daterangepicker2-opens="left"
                                        data-kt-daterangepicker2-range="today"
                                        class="btn btn-sm btn-dark-primary d-flex align-items-center px-4">
                                        <!--begin::Display range-->
                                        <div class="text-gray-600 fs-color-white fw-bold">Loading date range...</div>
                                        <!--end::Display range-->
                                        <i class="ki-duotone ki-calendar-8 fs-1 ms-2 me-0">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                            <span class="path4"></span>
                                            <span class="path5"></span>
                                            <span class="path6"></span>
                                        </i>

                                        <!-- Adding hidden input for storing range key -->
                                        <input type="hidden" class="selected-range-key2">

                                    </div>
                                    <!--end::Daterangepicker-->
                                </div>

                                <!--end::Toolbar-->
                            </div>
                            <div class="px-9 d-flex">
                                <h3 class="card-title align-items-start flex-column me-3">
                                    <span class="card-label fw-bold text-danger">New</span>
                                </h3>
                                <h3 class="card-title align-items-start flex-column me-3">
                                    <span class="card-label fw-bold text-info">In-Progress</span>
                                </h3>
                                <h3 class="card-title align-items-start flex-column me-3">
                                    <span class="card-label fw-bold text-success">Revision</span>
                                </h3>
                                <h3 class="card-title align-items-start flex-column me-3">
                                    <span class="card-label fw-bold text-warning">Delivered</span>
                                </h3>
                            </div>
                            <!--end::Header-->
                            <!--begin::Card body-->
                            <div class="card-body d-flex justify-content-between flex-column pb-1 px-0">

                                <!--begin::Chart-->
                                {{-- <div id="kt_charts_widget_3" class="min-h-auto ps-4 pe-6" style="height: 300px"></div> --}}
                                <div>
                                    <canvas id="myChart1" class="h-325px w-100 min-h-auto ps-4 pe-6"></canvas>
                                </div>
                                <!--end::Chart-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Chart widget 3-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Card-->
                    <!--@php-->
                    <!--    $orders = \App\Models\Orders::where('order_status', 'Pending')->orderBy("created_at")->get();-->
                    <!--@endphp-->

                        @php
                            $orders = \App\Models\Orders::where('order_status', 'Pending')->orderByDesc("created_at")->get();
                        @endphp



                    <!--begin::Card-->
                    <div class="card card-custom-bg message-summ">
                        <!--begin::Page title-->
                        <div class="page-title d-flex flex-column justify-content-center pt-6 px-6 flex-wrap me-3">
                            <!--begin::Title-->
                            <!--end::Title-->

                        </div>
                        <!--end::Page title-->
                        <div class="mb-3 d-flex justify-content-center">
                            <h1
                                class="page-heading fs-color-white custom-fs-23 d-flex text-gray-900 fw-bold fs-1 flex-column justify-content-center my-0">
                                New Orders</h1>
                        </div>
                        <!--begin::Card header-->
                        <div class="card-header border-0 pt-6">

                            <!--begin::Card title-->
                            <div class="card-title">
                                <!--begin::Search-->
                                <div class="d-flex align-items-center position-relative my-1">
                                    <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-5">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                    <input type="text" data-kt-user-table-filter="search"
                                        class="form-control form-control-solid w-250px btn-dark-primary ps-13"
                                        placeholder="Search Order" />
                                </div>
                                <!--end::Search-->
                            </div>
                            <!--begin::Card title-->
                            <!--begin::Card toolbar-->
                            <div class="card-toolbar">
                                <!--begin::Toolbar-->
                                <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                                    <!--begin::Filter-->
                                    <!--<button type="button" class="btn btn-light-primary me-3"-->
                                    <!--    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">-->
                                    <!--    <i class="ki-duotone ki-filter fs-2">-->
                                    <!--        <span class="path1"></span>-->
                                    <!--        <span class="path2"></span>-->
                                    <!--    </i>Filter</button>-->
                                    <!--begin::Menu 1-->
                                    <div class="menu menu-sub menu-sub-dropdown w-300px w-md-325px" data-kt-menu="true">
                                        <!--begin::Header-->
                                        <div class="px-7 py-5">
                                            <div class="fs-5 text-gray-900 fw-bold">Filter Options
                                            </div>
                                        </div>
                                        <!--end::Header-->
                                        <!--begin::Separator-->
                                        <div class="separator border-gray-200"></div>
                                        <!--end::Separator-->
                                        <!--begin::Content-->
                                        <div class="px-7 py-5" data-kt-user-table-filter="form">
                                            <!--begin::Input group-->
                                            <div class="mb-3">
                                                <label class="form-label fs-6 fw-semibold">Order
                                                    Id:</label>
                                                <input type="text" placeholder="Order Id" name="order-id"
                                                    autocomplete="off" class="form-control bg-transparent" />
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="mb-3">
                                                <label class="form-label fs-6 fw-semibold">Topic:</label>
                                                <input type="text" placeholder="Topic" name="topic"
                                                    autocomplete="off" class="form-control bg-transparent" />
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="mb-3">
                                                <label class="form-label fs-6 fw-semibold">Status:</label>
                                                <input type="text" placeholder="Status" name="status"
                                                    autocomplete="off" class="form-control bg-transparent" />
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Actions-->
                                            <div class="d-flex justify-content-end">
                                                <button type="reset"
                                                    class="btn btn-light btn-active-light-primary fw-semibold me-2 px-6"
                                                    data-kt-menu-dismiss="true"
                                                    data-kt-user-table-filter="reset">Reset</button>
                                                <button type="submit" class="btn btn-primary fw-semibold px-6"
                                                    data-kt-menu-dismiss="true"
                                                    data-kt-user-table-filter="filter">Apply</button>
                                            </div>
                                            <!--end::Actions-->
                                        </div>
                                        <!--end::Content-->
                                    </div>
                                    <!--end::Menu 1-->
                                    <!--end::Filter-->
                                    <!--begin::Export-->
                                    <!--<button type="button" class="btn btn-light-primary me-3" data-bs-toggle="modal"-->
                                    <!--    data-bs-target="#kt_modal_export_users">-->
                                    <!--    <i class="ki-duotone ki-exit-up fs-2">-->
                                    <!--        <span class="path1"></span>-->
                                    <!--        <span class="path2"></span>-->
                                    <!--    </i>Export</button>-->
                                    <!--end::Export-->
                                </div>
                                <!--end::Toolbar-->
                                <!--begin::Group actions-->
                                <div class="d-flex justify-content-end align-items-center d-none"
                                    data-kt-user-table-toolbar="selected">
                                    <div class="fw-bold me-5">
                                        <span class="me-2" data-kt-user-table-select="selected_count"></span>Selected
                                    </div>
                                    <button type="button" class="btn btn-danger"
                                        data-kt-user-table-select="delete_selected">Delete
                                        Selected</button>
                                </div>
                                <!--end::Group actions-->
                                <!--begin::Modal - Adjust Balance-->
                                <div class="modal fade" id="kt_modal_export_users" tabindex="-1" aria-hidden="true">
                                    <!--begin::Modal dialog-->
                                    <div class="modal-dialog modal-dialog-centered mw-650px">
                                        <!--begin::Modal content-->
                                        <div class="modal-content">
                                            <!--begin::Modal header-->
                                            <div class="modal-header">
                                                <!--begin::Modal title-->
                                                <h2 class="fw-bold">Export Users</h2>
                                                <!--end::Modal title-->
                                                <!--begin::Close-->
                                                <div class="btn btn-icon btn-sm btn-active-icon-primary"
                                                    data-bs-dismiss="modal" aria-label="Close">
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
                                                <form id="kt_modal_export_users_form" class="form" action="#">
                                                    <!--begin::Input group-->
                                                    <div class="fv-row mb-10">
                                                        <!--begin::Label-->
                                                        <label class="fs-6 fw-semibold form-label mb-2">Select
                                                            Status:</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <select name="role" data-control="select2"
                                                            data-placeholder="Select Status" data-hide-search="true"
                                                            class="form-select form-select-solid fw-bold">
                                                            <option></option>
                                                            <option value="Administrator">Enable
                                                            </option>
                                                            <option value="Analyst">Disable</option>
                                                        </select>
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="fv-row mb-10">
                                                        <!--begin::Label-->
                                                        <label class="required fs-6 fw-semibold form-label mb-2">Select
                                                            Export Format:</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <select name="format" data-control="select2"
                                                            data-placeholder="Select a format" data-hide-search="true"
                                                            class="form-select form-select-solid fw-bold">
                                                            <option></option>
                                                            <option value="excel">Excel</option>
                                                            <option value="pdf">PDF</option>
                                                            <option value="cvs">CVS</option>
                                                            <option value="zip">ZIP</option>
                                                        </select>
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Actions-->
                                                    <div class="text-center">
                                                        <button type="reset" class="btn btn-light me-3"
                                                            data-bs-dismiss="modal">Discard</button>
                                                        <button type="submit" class="btn btn-primary"
                                                            data-kt-users-modal-action="submit">
                                                            <span class="indicator-label">Submit</span>
                                                            <span class="indicator-progress">Please
                                                                wait...
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
                                <!--begin::Modal - Add task-->
                                <div class="modal" id="kt_modal_add_user" tabindex="-1" aria-hidden="true">
                                    <!--begin::Modal dialog-->
                                    <div class="modal-dialog modal-dialog-centered mw-650px">
                                        <!--begin::Modal content-->
                                        <div class="modal-content">
                                            <!--begin::Modal header-->
                                            <div class="modal-header" id="kt_modal_add_user_header">
                                                <!--begin::Modal title-->
                                                <h2 class="fw-bold">Add User</h2>
                                                <!--end::Modal title-->
                                                <!--begin::Close-->
                                                <div class="btn btn-icon btn-sm btn-active-icon-primary"
                                                    data-kt-users-modal-action="close">
                                                    <i class="ki-duotone ki-cross fs-1">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </div>
                                                <!--end::Close-->
                                            </div>
                                            <!--end::Modal header-->
                                            <!--begin::Modal body-->
                                            <div class="modal-body px-5 my-7">
                                                <!--begin::Form-->
                                                <form id="kt_modal_add_user_form" class="form" action="#">
                                                    <!--begin::Scroll-->
                                                    <div class="d-flex flex-column scroll-y px-5 px-lg-10"
                                                        id="kt_modal_add_user_scroll" data-kt-scroll="true"
                                                        data-kt-scroll-activate="true" data-kt-scroll-max-height="auto"
                                                        data-kt-scroll-dependencies="#kt_modal_add_user_header"
                                                        data-kt-scroll-wrappers="#kt_modal_add_user_scroll"
                                                        data-kt-scroll-offset="300px">
                                                        <!--begin::Input group-->
                                                        <div class="fv-row mb-7">
