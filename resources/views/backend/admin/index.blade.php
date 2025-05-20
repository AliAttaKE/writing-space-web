<!--begin::Content wrapper-->
@extends('custom_layout.master_dashboard_index')
@section('main_content_2')

<style>
    #chart-container .chartjs-chart x-axis .tick {
    color: white !important;
}

/* Target y-axis ticks */
#chart-container .chartjs-chart y-axis .tick {
    color: white !important;
}
</style>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <div class="d-flex flex-column flex-column-fluid">
        <!--begin::Toolbar-->
        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <!--begin::Toolbar container-->
            <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                <!--begin::Page title-->
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                    <!--begin::Title-->
                    <h1 class="page-heading d-flex fw-bold fs-3 flex-column justify-content-center my-0">
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
                                                            class="fs-color-yellow custom-fs-17 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">{{ $countOthers }}</span>
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
                                        <div class="text-white fw-bold fs-color-white custom-fs-13">Loading date range...</div>
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
                                {{-- <ul
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
                                </ul> --}}


                                <ul class="nav nav-stretch nav-pills nav-pills-custom nav-pills-active-custom d-flex justify-content-start mb-8 px-5">
                                    @php
                                        $currentMonth = date('n'); // Get the current month (1-12)
                                        $daysInMonth = cal_days_in_month(CAL_GREGORIAN, $currentMonth, date('Y')); // Get the number of days in the current month
                                    @endphp

                                    @for ($i = 1; $i <= $daysInMonth; $i++)
                                        @php
                                            $date = mktime(0, 0, 0, $currentMonth, $i, date('Y'));
                                            $dayOfWeek = date('D', $date); // Get the day of the week (e.g., "Mon", "Tue")
                                            $dayOfMonth = date('j', $date); // Get the day of the month (e.g., 1, 2, 3)
                                        @endphp



                                        <li class="nav-item p-0 ms-0 ordersummary">
                                            <!--begin::Date-->
                                            <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger"
                                                data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_2">
                                                <span class="fs-7 fw-semibold fs-color-white custom-fs-13">{{ $dayOfWeek }}</span>
                                                <span class="fs-6 fw-bold ordersummarydate fs-color-white custom-fs-13">{{ $dayOfMonth }}</span>
                                            </a>
                                            <!--end::Date-->
                                        </li>
                                    @endfor
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
                                        <div class="text-white fw-bold">Loading date range...</div>
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
                    <div class="card">
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
                                                            <!--begin::Label-->
                                                            <label class="d-block fw-semibold fs-6 mb-5">Avatar</label>
                                                            <!--end::Label-->
                                                            <!--begin::Image placeholder-->
                                                            <style>
                                                                .image-input-placeholder {
                                                                    background-image: url('assets/media/svg/files/blank-image.svg');
                                                                }

                                                                [data-bs-theme="dark"] .image-input-placeholder {
                                                                    background-image: url('assets/media/svg/files/blank-image-dark.svg');
                                                                }
                                                            </style>
                                                            <!--end::Image placeholder-->
                                                            <!--begin::Image input-->
                                                            <div class="image-input image-input-outline image-input-placeholder"
                                                                data-kt-image-input="true">
                                                                <!--begin::Preview existing avatar-->
                                                                <div class="image-input-wrapper w-125px h-125px"
                                                                    style="background-image: url(assets/media/avatars/300-6.jpg);">
                                                                </div>
                                                                <!--end::Preview existing avatar-->
                                                                <!--begin::Label-->
                                                                <label
                                                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                                    data-kt-image-input-action="change"
                                                                    data-bs-toggle="tooltip" title="Change avatar">
                                                                    <i class="ki-duotone ki-pencil fs-7">
                                                                        <span class="path1"></span>
                                                                        <span class="path2"></span>
                                                                    </i>
                                                                    <!--begin::Inputs-->
                                                                    <input type="file" name="avatar"
                                                                        accept=".png, .jpg, .jpeg" />
                                                                    <input type="hidden" name="avatar_remove" />
                                                                    <!--end::Inputs-->
                                                                </label>
                                                                <!--end::Label-->
                                                                <!--begin::Cancel-->
                                                                <span
                                                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                                    data-kt-image-input-action="cancel"
                                                                    data-bs-toggle="tooltip" title="Cancel avatar">
                                                                    <i class="ki-duotone ki-cross fs-2">
                                                                        <span class="path1"></span>
                                                                        <span class="path2"></span>
                                                                    </i>
                                                                </span>
                                                                <!--end::Cancel-->
                                                                <!--begin::Remove-->
                                                                <span
                                                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                                    data-kt-image-input-action="remove"
                                                                    data-bs-toggle="tooltip" title="Remove avatar">
                                                                    <i class="ki-duotone ki-cross fs-2">
                                                                        <span class="path1"></span>
                                                                        <span class="path2"></span>
                                                                    </i>
                                                                </span>
                                                                <!--end::Remove-->
                                                            </div>
                                                            <!--end::Image input-->
                                                            <!--begin::Hint-->
                                                            <div class="form-text">Allowed file
                                                                types: png, jpg, jpeg.</div>
                                                            <!--end::Hint-->
                                                        </div>
                                                        <!--end::Input group-->
                                                        <!--begin::Input group-->
                                                        <div class="fv-row mb-7">
                                                            <!--begin::Label-->
                                                            <label class="required fw-semibold fs-6 mb-2">Full
                                                                Name</label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <input type="text" name="user_name"
                                                                class="form-control form-control-solid mb-3 mb-lg-0"
                                                                placeholder="Full name" value="Emma Smith" />
                                                            <!--end::Input-->
                                                        </div>
                                                        <!--end::Input group-->
                                                        <!--begin::Input group-->
                                                        <div class="fv-row mb-7">
                                                            <!--begin::Label-->
                                                            <label class="required fw-semibold fs-6 mb-2">Email</label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <input type="email" name="user_email"
                                                                class="form-control form-control-solid mb-3 mb-lg-0"
                                                                placeholder="example@domain.com" value="smith@kpmg.com" />
                                                            <!--end::Input-->
                                                        </div>
                                                        <!--end::Input group-->
                                                        <!--begin::Input group-->
                                                        <div class="mb-5">
                                                            <!--begin::Label-->
                                                            <label class="required fw-semibold fs-6 mb-5">Role</label>
                                                            <!--end::Label-->
                                                            <!--begin::Roles-->
                                                            <!--begin::Input row-->
                                                            <div class="d-flex fv-row">
                                                                <!--begin::Radio-->
                                                                <div class="form-check form-check-custom form-check-solid">
                                                                    <!--begin::Input-->
                                                                    <input class="form-check-input me-3" name="user_role"
                                                                        type="radio" value="0"
                                                                        id="kt_modal_update_role_option_0"
                                                                        checked='checked' />
                                                                    <!--end::Input-->
                                                                    <!--begin::Label-->
                                                                    <label class="form-check-label"
                                                                        for="kt_modal_update_role_option_0">
                                                                        <div class="fw-bold text-gray-800">
                                                                            Administrator</div>
                                                                        <div class="text-gray-600">
                                                                            Best for business owners
                                                                            and company
                                                                            administrators</div>
                                                                    </label>
                                                                    <!--end::Label-->
                                                                </div>
                                                                <!--end::Radio-->
                                                            </div>
                                                            <!--end::Input row-->
                                                            <div class='separator separator-dashed my-5'>
                                                            </div>
                                                            <!--begin::Input row-->
                                                            <div class="d-flex fv-row">
                                                                <!--begin::Radio-->
                                                                <div class="form-check form-check-custom form-check-solid">
                                                                    <!--begin::Input-->
                                                                    <input class="form-check-input me-3" name="user_role"
                                                                        type="radio" value="1"
                                                                        id="kt_modal_update_role_option_1" />
                                                                    <!--end::Input-->
                                                                    <!--begin::Label-->
                                                                    <label class="form-check-label"
                                                                        for="kt_modal_update_role_option_1">
                                                                        <div class="fw-bold text-gray-800">
                                                                            Developer</div>
                                                                        <div class="text-gray-600">
                                                                            Best for developers or
                                                                            people primarily using
                                                                            the API</div>
                                                                    </label>
                                                                    <!--end::Label-->
                                                                </div>
                                                                <!--end::Radio-->
                                                            </div>
                                                            <!--end::Input row-->
                                                            <div class='separator separator-dashed my-5'>
                                                            </div>
                                                            <!--begin::Input row-->
                                                            <div class="d-flex fv-row">
                                                                <!--begin::Radio-->
                                                                <div class="form-check form-check-custom form-check-solid">
                                                                    <!--begin::Input-->
                                                                    <input class="form-check-input me-3" name="user_role"
                                                                        type="radio" value="2"
                                                                        id="kt_modal_update_role_option_2" />
                                                                    <!--end::Input-->
                                                                    <!--begin::Label-->
                                                                    <label class="form-check-label"
                                                                        for="kt_modal_update_role_option_2">
                                                                        <div class="fw-bold text-gray-800">
                                                                            Analyst</div>
                                                                        <div class="text-gray-600">
                                                                            Best for people who need
                                                                            full access to analytics
                                                                            data, but don't need to
                                                                            update business settings
                                                                        </div>
                                                                    </label>
                                                                    <!--end::Label-->
                                                                </div>
                                                                <!--end::Radio-->
                                                            </div>
                                                            <!--end::Input row-->
                                                            <div class='separator separator-dashed my-5'>
                                                            </div>
                                                            <!--begin::Input row-->
                                                            <div class="d-flex fv-row">
                                                                <!--begin::Radio-->
                                                                <div class="form-check form-check-custom form-check-solid">
                                                                    <!--begin::Input-->
                                                                    <input class="form-check-input me-3" name="user_role"
                                                                        type="radio" value="3"
                                                                        id="kt_modal_update_role_option_3" />
                                                                    <!--end::Input-->
                                                                    <!--begin::Label-->
                                                                    <label class="form-check-label"
                                                                        for="kt_modal_update_role_option_3">
                                                                        <div class="fw-bold text-gray-800">
                                                                            Support</div>
                                                                        <div class="text-gray-600">
                                                                            Best for employees who
                                                                            regularly refund
                                                                            payments and respond to
                                                                            disputes</div>
                                                                    </label>
                                                                    <!--end::Label-->
                                                                </div>
                                                                <!--end::Radio-->
                                                            </div>
                                                            <!--end::Input row-->
                                                            <div class='separator separator-dashed my-5'>
                                                            </div>
                                                            <!--begin::Input row-->
                                                            <div class="d-flex fv-row">
                                                                <!--begin::Radio-->
                                                                <div class="form-check form-check-custom form-check-solid">
                                                                    <!--begin::Input-->
                                                                    <input class="form-check-input me-3" name="user_role"
                                                                        type="radio" value="4"
                                                                        id="kt_modal_update_role_option_4" />
                                                                    <!--end::Input-->
                                                                    <!--begin::Label-->
                                                                    <label class="form-check-label"
                                                                        for="kt_modal_update_role_option_4">
                                                                        <div class="fw-bold text-gray-800">
                                                                            Trial</div>
                                                                        <div class="text-gray-600">
                                                                            Best for people who need
                                                                            to preview content data,
                                                                            but don't need to make
                                                                            any updates</div>
                                                                    </label>
                                                                    <!--end::Label-->
                                                                </div>
                                                                <!--end::Radio-->
                                                            </div>
                                                            <!--end::Input row-->
                                                            <!--end::Roles-->
                                                        </div>
                                                        <!--end::Input group-->
                                                    </div>
                                                    <!--end::Scroll-->
                                                    <!--begin::Actions-->
                                                    <div class="text-center pt-10">
                                                        <button type="reset" class="btn btn-light me-3"
                                                            data-kt-users-modal-action="cancel">Discard</button>
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
                                <!--end::Modal - Add task-->
                            </div>
                            <!--end::Card toolbar-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body py-4 ">
                            <!--begin::Table-->
                            <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_new_orders_2">
                                <thead>
                                    <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">

                                        <th class="min-w-70px fw_800 pb-8">order No</th>
                                        <th class="min-w-50px fw_800 pb-8">Topic</th>
                                        <th class="min-w-70px fw_800 pb-8">Pages</th>
                                        <th class="min-w-70px fw_800 pb-8">Order Date</th>
                                        <th class="min-w-80px fw_800 pb-8">Due Date</th>
                                        <th class="min-w-80px fw_800 pb-8">Status</th>
                                        <!--<th class="min-w-50px fw_800 pb-8">Action</th>-->

                                    </tr>

                                </thead>
                                <tbody class="text-gray-600 fw-semibold">

                                    @if ($orders->isNotEmpty())
                                        @foreach ($orders as $order)
                                            <tr>

                                               <td><a href="{{route('admin.admin-order-detail',[$order->order_id])}}" class="fs-color-yellow custom-fs-13">{{$order->order_id}}</a></td>
                                                @if ($order->topic)
                                                    <td class="limit-text fs-color-white custom-fs-13">{{ $order->topic }}</td>
                                                @else
                                                    <td class="limit-text fs-color-white custom-fs-13">The Brave Kings Man Story 1994</td>
                                                @endif

                                                <td class="fs-color-white custom-fs-13">{{ $order->number_of_pages ? $order->number_of_pages : '100' }}</td>
                                                <td class="fs-color-white custom-fs-13">{{ $order->created_at }}</td>
                                                <td class="fs-color-white custom-fs-13">{{ $order->deadline }}</td>
                                                <td>
                                                    @if ($order->order_status === 'Pending')
                                                        <span
                                                            class="badge badge-custom-bg fw-bold me-auto px-4 py-3">New
                                                        </span>
                                                    @else
                                                        <span
                                                            class="badge badge-light-success fw-bold me-auto px-4 py-3">Success
                                                        </span>
                                                    @endif

                                                </td>
                                                <!--<td>-->
                                                <!--    <a href="#"-->
                                                <!--        class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm"-->
                                                <!--        data-kt-menu-trigger="click"-->
                                                <!--        data-kt-menu-placement="bottom-end">Actions-->
                                                <!--        <i class="ki-duotone ki-down fs-5 ms-1"></i></a>-->
                                                <!--    begin::Menu-->
                                                <!--    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"-->
                                                <!--        data-kt-menu="true">-->
                                                <!--        begin::Menu item-->
                                                <!--        <div class="menu-item px-3">-->
                                                <!--            <a href="#" onclick="alert('show-order-details')"-->
                                                <!--                class="menu-link d-flex justify-content-center px-3">View</a>-->
                                                <!--        </div>-->
                                                <!--        end::Menu item-->
                                                <!--        begin::Menu item-->
                                                <!--        <div class="menu-item px-3">-->
                                                <!--            <a href="#"-->
                                                <!--                class="menu-link d-flex justify-content-center px-3"-->
                                                <!--                onclick="confirmDelete()">Delete</a>-->
                                                <!--        </div>-->
                                                <!--        end::Menu item-->
                                                <!--        begin::Menu item-->
                                                <!--        <div class="menu-item px-3">-->
                                                <!--            <a href="/images/myw3schoolsimage.jpg"-->
                                                <!--                class="menu-link d-flex justify-content-center px-3"-->
                                                <!--                download>Download</a>-->
                                                <!--        </div>-->
                                                <!--        end::Menu item-->
                                                <!--    </div>-->
                                                <!--</td>-->
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                            <!--end::Table-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->
                    <!--end::Card-->
                </div>
                <!--end::Row-->
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
    <!--end::Modals-->

@endsection

@section('customJs')
    <!--begin::Javascript-->

    <script>
        $(document).ready(function() {
            $('#kt_table_new_orders_2').DataTable();
        })
    </script>

    <script>
        var hostUrl = "assets/";
    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>

        function handleTableSearch() {

            var searchText = $('[data-kt-user-table-filter="search"]').val().toLowerCase();
            console.log(searchText)

            $('#kt_table_new_orders_2 tbody tr').each(function() {

                console.log(this)
                var rowText = $(this).text().toLowerCase();
                if (rowText.indexOf(searchText) === -1) {

                    $(this).hide();
                } else {

                    $(this).show();
                }
            });
        }


        $('[data-kt-user-table-filter="search"]').on('input', function() {
            handleTableSearch();
        });
    </script>
    <script>
        // $(document).ready(function() {
            // Initialize DataTables
            var table = $('#kt_table_new_orders_2').DataTable();

            // Filter form submission
            $('[data-kt-user-table-filter="filter"]').on('click', function(e) {
                e.preventDefault();

                // Get filter values
                var orderId = $('input[name="order-id"]').val();
                var topic = $('input[name="topic"]').val();
                var status = $('input[name="status"]').val();

                // Apply filters
                table.columns(1).search(orderId).draw();
                table.columns(2).search(topic).draw();
                table.columns(6).search(status).draw();
            });

            // Reset filter form
            $('[data-kt-user-table-filter="reset"]').on('click', function(e) {
                e.preventDefault();

                // Reset input fields
                $('input[name="order-id"]').val('');
                $('input[name="topic"]').val('');
                $('input[name="status"]').val('');

                // Clear filters
                table.columns().search('').draw();
            });
        });
    </script>
    <script>
        document.getElementById('deleteLink').addEventListener('click', function(event) {
            event.preventDefault();

            Swal.fire({
                title: 'First You Have To Disable Row!',
                icon: 'warning',
                customClass: {
                    confirmButton: 'btn btn-danger', // Example: Change confirm button color
                    title: 'text-danger' // Custom class for the title text color
                }
            });
        // });
    </script>
    <script>
        function confirmDelete() {
            Swal.fire({
                title: 'Are you sure?',
                text: 'You will not be able to recover this data!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    // TODO: Add your deletion logic here
                    // For now, let's show an alert
                    Swal.fire('Deleted!', 'Your data has been deleted.', 'success');
                }
            });
        }
    </script>


    <script>
        $(document).ready(function() {
            createDateRangePickers1();
            // Make AJAX request to get data
            $.ajax({
                url: '{{ route('admin.getChartData') }}',
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    // Use the returned data
                    console.log(data);
                    var countsByDate = data.countsByDate;
                    var datacustomer = data.datacustomer;

                    const ctx = document.getElementById('myChart');

                    // new Chart(ctx, {
                    //     type: 'bar',
                    //     data: {
                    //         labels: ['Prospects', 'Tier 1', 'Tier 2', 'Tier 3', 'Tier 4'],
                    //         datasets: [{
                    //             label: 'Customer Journey',
                    //             data: datacustomer,
                    //             borderWidth: 1,
                    //             backgroundColor: [
                    //                 'rgba(255, 99, 132, 0.8)', // Prospects - Red
                    //                 'rgba(0, 0, 139, 0.8)', // Tier 1 - Dark Blue
                    //                 'rgba(0, 128, 0, 0.8)', // Tier 2 - Green
                    //                 'rgba(184, 134, 11, 0.8)', // Tier 3 - Dark Yellow
                    //                 'rgba(128, 0, 128, 0.8)' // Tier 4 - Purple
                    //             ]
                    //         }]
                    //     },
                    //     options: {
                    //         scales: {
                    //             x: {
                    //                 ticks: {
                    //                     color: 'white' // Set x-axis ticks color to white
                    //                 }
                    //             },
                    //             y: {
                    //                 ticks: {
                    //                     color: 'white' // Set y-axis ticks color to white
                    //                 },
                    //                 beginAtZero: true
                    //             }
                    //         },
                    //         plugins: {
                    //             legend: {
                    //                 display: true,
                    //                 position: 'top'
                    //             }
                    //         },
                    //         responsive: true,
                    //         maintainAspectRatio: false,
                    //         barPercentage: 0.1, // Adjust the bar width (0.5 means 50% of the available space)
                    //         categoryPercentage: 0.1 // Adjust the space between bars (0.5 means 50% of the available space)
                    //     }

                    //     // options: {
                    //     //     scales: {
                    //     //         y: {
                    //     //             beginAtZero: true
                    //     //         }
                    //     //     },
                    //     //     plugins: {
                    //     //         legend: {
                    //     //             display: true,
                    //     //             position: 'top'
                    //     //         }
                    //     //     },
                    //     //     responsive: true,
                    //     //     maintainAspectRatio: false,
                    //     //     barPercentage: 0.1, // Adjust the bar width (0.5 means 50% of the available space)
                    //     //     categoryPercentage: 0.1 // Adjust the space between bars (0.5 means 50% of the available space)
                    //     // }
                    // });



                    new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Prospects', 'Tier 1', 'Tier 2', 'Tier 3', 'Tier 4'],
        datasets: [{
            label: 'Customer Journey',
            data: datacustomer,
            borderWidth: 1,
            backgroundColor: [
                'rgba(255, 99, 132, 0.8)', // Prospects - Red
                'rgba(0, 0, 139, 0.8)', // Tier 1 - Dark Blue
                'rgba(0, 128, 0, 0.8)', // Tier 2 - Green
                'rgba(184, 134, 11, 0.8)', // Tier 3 - Dark Yellow
                'rgba(128, 0, 128, 0.8)' // Tier 4 - Purple
            ]
        }]
    },
    options: {
        scales: {
            x: {
                ticks: {
                    color: 'white' // Set x-axis ticks color to white
                }
            },
            y: {
                ticks: {
                    font: {
                        color: 'white' // Set y-axis ticks color to white
                    }
                },
                beginAtZero: true
            }
        },
        plugins: {
            legend: {
                display: true,
                position: 'top'
            }
        },
        responsive: true,
        maintainAspectRatio: false,
        barPercentage: 0.1, // Adjust the bar width (0.5 means 50% of the available space)
        categoryPercentage: 0.1 // Adjust the space between bars (0.5 means 50% of the available space)
    }
});



                },
                error: function(error) {
                    console.error('Error fetching data:', error);
                }
            });




            $.ajax({
                url: '{{ route('admin.getChartData') }}',
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    // Use the returned data
                    console.log(data);
                    var countsByDate = data.countsByDate;
                    var datacustomer = data.datacustomer;


                    const xValues = data.labels;

                    new Chart("myChart1", {
                        type: "line",
                        data: {
                            labels: xValues,
                            datasets: [{
                                data: data.pending,
                                borderColor: "red",
                                fill: false
                            }, {
                                data: data.inprogress,
                                borderColor: "green",
                                fill: false
                            }, {
                                data: data.revision,
                                borderColor: "blue",
                                fill: false
                            }, {
                                data: data.delivered,
                                borderColor: "blue",
                                fill: false
                            }]
                        },
                        options: {
                            legend: {
                                display: false
                            }
                        }
                    });


                },
                error: function(error) {
                    console.error('Error fetching data:', error);
                }
            });



        });
    </script>

    <script src="{{ asset('backend/assets/plugins/global/plugins.bundle.js') }}"></script>
    <script>
        let existingChart;
        var createDateRangePickers1 = function() {
            // Check if jQuery included
            if (typeof jQuery == 'undefined') {
                return;
            }

            // Check if daterangepicker included
            if (typeof $.fn.daterangepicker === 'undefined') {
                return;
            }

            var elements = [].slice.call(document.querySelectorAll('[data-kt-daterangepicker1="true"]'));
            var start = moment().subtract(29, 'days');
            var end = moment();

            elements.map(function(element) {
                if (element.getAttribute("data-kt-initialized") === "1") {
                    return;
                }

                var display = element.querySelector('div');
                var attrOpens = element.hasAttribute('data-kt-daterangepicker1-opens') ? element.getAttribute(
                    'data-kt-daterangepicker1-opens') : 'left';
                var range = element.getAttribute('data-kt-daterangepicker1-range');

                var cb = function(start, end) {
                    var current = moment();

                    if (display) {
                        if (current.isSame(start, "day") && current.isSame(end, "day")) {
                            display.innerHTML = start.format('D MMM YYYY');
                        } else {
                            display.innerHTML = start.format('D MMM YYYY') + ' - ' + end.format(
                                'D MMM YYYY');
                        }
                    }
                }

                if (range === "today") {
                    start = moment();
                    end = moment();
                }

                $(element).daterangepicker({
                    startDate: start,
                    endDate: end,
                    opens: attrOpens,
                    ranges: {
                        'Today': [moment(), moment()],
                        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                        'This Month': [moment().startOf('month'), moment().endOf('month')],
                        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment()
                            .subtract(1, 'month').endOf('month')
                        ],
                        // 'Custom Range': [moment(), moment()] // Assuming default is today to today
                    }
                }, cb);

                cb(start, end);

                $(element).on('apply.daterangepicker', function(ev, picker) {
                    var startDate = picker.startDate.format('YYYY-MM-DD');
                    var endDate = picker.endDate.format('YYYY-MM-DD');
                    var selectedRangeKey = startDate + ' to ' + endDate;
                    var startDate = startDate;
                    var endDate = endDate;
                    $(this).find('.selected-range-key').val(selectedRangeKey);

                    // alert('Selected Range: ' + selectedRangeKey);
                    console.log('Selected Range Customer Journey: ' + selectedRangeKey);





                    $.ajax({
                        url: '{{ route('admin.indexajaxpost') }}',
                        type: 'POST',
                        dataType: 'json',
                        data: {
                            selectedRangeKey: selectedRangeKey,
                            startDate: startDate,
                            endDate: endDate,
                            _token: '{{ csrf_token() }}'
                        },
                        success: function(data) {
                            console.log(data.datacustomer);
                            // alert(data.datacustomer);
                            var datacustomer = data.datacustomer;
                            const ctx = document.getElementById('myChart');

                            if (existingChart) {
                                existingChart.destroy();
                            }


                            new Chart(ctx, {
                                type: 'bar',
                                data: {
                                    labels: ['Prospects', 'Tier 1',
                                        'Tier 2', 'Tier 3', 'Tier 4'
                                    ],
                                    datasets: [{
                                        label: 'Customer Journey',
                                        data: datacustomer,
                                        borderWidth: 1,
                                        backgroundColor: [
                                            'rgba(255, 99, 132, 0.8)', // Prospects - Red
                                            'rgba(0, 0, 139, 0.8)', // Tier 1 - Dark Blue
                                            'rgba(0, 128, 0, 0.8)', // Tier 2 - Green
                                            'rgba(184, 134, 11, 0.8)', // Tier 3 - Dark Yellow
                                            'rgba(128, 0, 128, 0.8)' // Tier 4 - Purple
                                        ]
                                    }]
                                },
                                options: {
                                    scales: {
                                        y: {
                                            beginAtZero: true
                                        }
                                    },
                                    plugins: {
                                        legend: {
                                            display: true,
                                            position: 'top'
                                        }
                                    },
                                    responsive: true,
                                    maintainAspectRatio: false,
                                    barPercentage: 0.1, // Adjust the bar width (0.5 means 50% of the available space)
                                    categoryPercentage: 0.1 // Adjust the space between bars (0.5 means 50% of the available space)
                                }
                            });
                        },
                        error: function(error) {
                            console.error('Error fetching data:', error);
                        }
                    });

                });






                element.setAttribute("data-kt-initialized", "1");
            });
        }

        // Call the function to initialize date range pickers
        createDateRangePickers1();
    </script>
    <script>

        var createDateRangePickers2 = function() {

            let existingChart2;
            // Check if jQuery included
            if (typeof jQuery == 'undefined') {
                return;
            }

            // Check if daterangepicker included
            if (typeof $.fn.daterangepicker === 'undefined') {
                return;
            }

            var elements = [].slice.call(document.querySelectorAll('[data-kt-daterangepicker2="true"]'));
            var start = moment().subtract(29, 'days');
            var end = moment();

            elements.map(function(element) {
                if (element.getAttribute("data-kt-initialized") === "1") {
                    return;
                }

                var display = element.querySelector('div');
                var attrOpens = element.hasAttribute('data-kt-daterangepicker2-opens') ? element.getAttribute(
                    'data-kt-daterangepicker2-opens') : 'left';
                var range = element.getAttribute('data-kt-daterangepicker2-range');

                var cb = function(start, end) {
                    var current = moment();

                    if (display) {
                        if (current.isSame(start, "day") && current.isSame(end, "day")) {
                            display.innerHTML = start.format('D MMM YYYY');
                        } else {
                            display.innerHTML = start.format('D MMM YYYY') + ' - ' + end.format(
                                'D MMM YYYY');
                        }
                    }
                }

                if (range === "today") {
                    start = moment();
                    end = moment();
                }

                $(element).daterangepicker({
                    startDate: start,
                    endDate: end,
                    opens: attrOpens,
                    ranges: {
                        'Today': [moment(), moment()],
                        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                        'This Month': [moment().startOf('month'), moment().endOf('month')],
                        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment()
                            .subtract(1, 'month').endOf('month')
                        ],
                        // 'Custom Range': [moment(), moment()] // Assuming default is today to today
                    }
                }, cb);

                cb(start, end);

                $(element).on('apply.daterangepicker', function(ev, picker) {
                    var startDate = picker.startDate.format('YYYY-MM-DD');
                    var endDate = picker.endDate.format('YYYY-MM-DD');
                    var selectedRangeKey = startDate + ' to ' + endDate;

                    var startDate = startDate;
                    var endDate = endDate;
                    $(this).find('.selected-range-key2').val(selectedRangeKey);

                    // alert('Selected Range: ' + selectedRangeKey);
                    console.log('Selected Range: ' + selectedRangeKey);
                    $.ajax({
                        url: '{{ route('admin.indexajaxpostchat2') }}',
                        type: 'POST',
                        dataType: 'json',
                        data: {
                            selectedRangeKey: selectedRangeKey,
                            startDate: startDate,
                            endDate: endDate,
                            selectedRangeKey: selectedRangeKey,
                            _token: '{{ csrf_token() }}'
                        },
                        success: function(data) {
                            console.log(data);
                            var datacustomer = data.datacustomer;
                            const ctx = document.getElementById('myChart1');

                            if (existingChart2) {
                                existingChart2.destroy();
                            }



                                const xValues = data.labels;

                                    new Chart("myChart1", {
                                        type: "line",
                                        data: {
                                            labels: xValues,
                                            datasets: [{
                                                data: data.pending,
                                                borderColor: "red",
                                                fill: false
                                            }, {
                                                data: data.inprogress,
                                                borderColor: "green",
                                                fill: false
                                            }, {
                                                data: data.revision,
                                                borderColor: "blue",
                                                fill: false
                                            }, {
                                                data: data.delivered,
                                                borderColor: "blue",
                                                fill: false
                                            }]
                                        },
                                        options: {
                                            legend: {
                                                display: false
                                            }
                                        }
                                    });


                        },
                        error: function(error) {
                            console.error('Error fetching data:', error);
                        }
                    });

                });






                element.setAttribute("data-kt-initialized", "1");
            });
        }

        // Call the function to initialize date range pickers
        createDateRangePickers2();
    </script>

<script>
    let existingChart3;
    var createDateRangePickers3 = function() {
        // Check if jQuery included
        if (typeof jQuery == 'undefined') {
            return;
        }

        // Check if daterangepicker included
        if (typeof $.fn.daterangepicker === 'undefined') {
            return;
        }

        var elements = [].slice.call(document.querySelectorAll('[data-kt-daterangepicker3="true"]'));
        var start = moment().subtract(29, 'days');
        var end = moment();

        elements.map(function(element) {
            if (element.getAttribute("data-kt-initialized") === "1") {
                return;
            }

            var display = element.querySelector('div');
            var attrOpens = element.hasAttribute('data-kt-daterangepicker3-opens') ? element.getAttribute(
                'data-kt-daterangepicker3-opens') : 'left';
            var range = element.getAttribute('data-kt-daterangepicker3-range');

            var cb = function(start, end) {
                var current = moment();

                if (display) {
                    if (current.isSame(start, "day") && current.isSame(end, "day")) {
                        display.innerHTML = start.format('D MMM YYYY');
                    } else {
                        display.innerHTML = start.format('D MMM YYYY') + ' - ' + end.format(
                            'D MMM YYYY');
                    }
                }
            }

            if (range === "today") {
                start = moment();
                end = moment();
            }

            $(element).daterangepicker({
                startDate: start,
                endDate: end,
                opens: attrOpens,
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    // 'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment()
                        .subtract(1, 'month').endOf('month')
                    ],
                    // 'Custom Range': [moment(), moment()] // Assuming default is today to today
                }
            }, cb);

            cb(start, end);

            $(element).on('apply.daterangepicker', function(ev, picker) {
                var startDate = picker.startDate.format('YYYY-MM-DD');
                var endDate = picker.endDate.format('YYYY-MM-DD');
                var selectedRangeKey = startDate + ' to ' + endDate;
                var startDate = startDate;
                var endDate = endDate;
                $(this).find('.selected-range-key').val(selectedRangeKey);

                // alert('Selected Range: ' + selectedRangeKey);
                console.log('Selected Range1: ' + selectedRangeKey);


                var dateRangeParts = selectedRangeKey.split(" to ");
                var startDateString = dateRangeParts[0];
                var endDateString = dateRangeParts[1];


                var startDate2 = new Date(startDateString);
                var endDate2 = new Date(endDateString);

                var startDate1 = startDate2.getDate();
                var endDate2 = endDate2.getDate();


                console.log("Start Date: ", startDate1);
                console.log("End Date: ", endDate2);

                $('.ordersummarydate').each(function() {
                var dateText = $(this).text();
                console.log("dateText: ", dateText);



                console.log("startDate1: ", startDate1);
                console.log("endDate2: ", endDate2);

                $(this).closest('.nav-link').removeClass('active');
                if (dateText >= startDate1 && dateText <= endDate2) {

                    $(this).closest('.nav-link').addClass('active');
                }
            });





                $.ajax({
                    url: '{{ route('admin.ajaxSummary') }}',
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        selectedRangeKey: selectedRangeKey,
                        startDate: startDate,
                        endDate: endDate,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(data) {
                        console.log(data.datacustomer);
                        //  alert(data.datacustomer);
                        var datacustomer = data.datacustomer;
                        $('.OrderDelivered').text(data.statusCounts.Delivered);
                    $('.OrderRevisions').text(data.statusCounts.Revisions);
                    $('.OrderInProgress').text(data.statusCounts.InProgress);
                    $('.OrderNew').text(data.statusCounts.Pending);

                    },
                    error: function(error) {
                        console.error('Error fetching data:', error);
                    }
                });

            });






            element.setAttribute("data-kt-initialized", "1");
        });
    }

    // Call the function to initialize date range pickers
    createDateRangePickers3();
</script>
<script>
    $(document).ready(function() {
        $('#kt_table_new_orders').DataTable();

        var currentDate = new Date();
    var dayOfMonth = currentDate.getDate();



    $('.ordersummarydate').each(function() {

        var dateText = $(this).text();


        if (parseInt(dateText) === dayOfMonth) {

            $(this).closest('.nav-link').addClass('active');
        }
    });


    });
</script>
    <script>
        $(".ordersummary").click(function() {


                $('.nav-link').removeClass('active');





            var data = $(this).find('.ordersummarydate').text();
            var dateText = $(this).find('.ordersummarydate').text();

// Get the current month's name
var monthNames = ["January", "February", "March", "April", "May", "June",
    "July", "August", "September", "October", "November", "December"
];

// Get the current year
var currentYear = new Date().getFullYear();

// Format the date
var formattedDate = dateText + ' ' + monthNames[new Date().getMonth()] + ' ' + currentYear;

// Set the formatted date to the target element
$('.btn-dark-primary .text-white').text(formattedDate);


            $.ajax({
                url: '{{ route('admin.order.summary') }}',
                type: 'GET',
                data: {
                    date: data, // Replace this with the selected date
                },
                dataType: 'json',
                success: function(data) {
                    console.log(data);

                    $('.OrderDelivered').text(data.statusCounts.Delivered);
                    $('.OrderRevisions').text(data.statusCounts.Revisions);
                    $('.OrderInProgress').text(data.statusCounts.InProgress);
                    $('.OrderNew').text(data.statusCounts.Pending);

                    // Handle the data returned from the server
                },
                error: function(error) {
                    console.error('Error fetching data:', error);
                }
            });



        });
    </script>
@endsection
