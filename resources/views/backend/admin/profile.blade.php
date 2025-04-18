@extends('custom_layout.master')
@section('main_content')
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
                <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0 fs-color-white custom-fs-23">Admin Profile</h1>
                <!--end::Title-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                    <!--begin::Item-->
                    <li class="breadcrumb-item fs-color-white custom-fs-13">Profile
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
            <!--begin::Layout-->
            <div class="d-flex flex-column flex-lg-row">
                <!--begin::Sidebar-->
                <div class="flex-column flex-lg-row-auto w-lg-250px w-xl-350px mb-10">
                    <!--begin::Card-->
                    <div class="card mb-5 mb-xl-8 card-custom-bg message-summ">
                        <!--begin::Card body-->
                        <div class="card-body">
                            <!--begin::Summary-->
                            <!--begin::User Info-->
                            <div class="d-flex flex-center flex-column py-5">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-100px symbol-circle mb-7">
                                   
                                @if ($user->avatar)
                                    <img src="{{asset('images/users/admins/'. $user->avatar)}}"  />
                                @else
                                    <img src="{{ asset('backend/assets/media/ws/profile.png') }}" alt="image" />
                                @endif

                                  
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Name-->
                                <a href="#" class="fs-3 fs-color-white custom-fs-13 fw-bold mb-3">{{ $user->name }}</a>
                                <!--end::Name-->
                                <!--begin::Position-->
                                <div class="mb-9">
                                    <!--begin::Badge-->
                                    <div class="badge badge-lg badge-custom-bg d-inline">Administrator</div>
                                    <!--begin::Badge-->
                                </div>
                                <!--end::Position-->
                            </div>
                            <!--end::User Info-->
                            <!--end::Summary-->
                            <!--begin::Details toggle-->
                            <div class="d-flex flex-stack fs-4 py-3">
                                <div class="fw-bold rotate collapsible fs-color-white custom-fs-17" data-bs-toggle="collapse" href="#kt_user_view_details" role="button" aria-expanded="false" aria-controls="kt_user_view_details">Details
                                    <span class="ms-2 rotate-180">
                                        <i class="ki-duotone ki-down fs-3"></i>
                                    </span>
                                </div>
                                <span data-bs-toggle="tooltip" data-bs-trigger="hover" title="Edit customer details">
                                    <a href="#" class="btn btn-sm badge-custom-bg" data-bs-toggle="modal" data-bs-target="#kt_modal_update_details">Edit</a>
                                </span>
                            </div>
                            <!--end::Details toggle-->
                            <div class="separator"></div>
                            <!--begin::Details content-->
                            <div id="kt_user_view_details" class="collapse show">
                                <div class="pb-5 fs-6">
                                    <!--begin::Details item-->
                                    <div class="fw-bold mt-5 fs-color-white custom-fs-13">Account ID</div>
                                    <div class="fs-color-white custom-fs-13">{{ Auth::user()->account_id }}</div>
                                    <!--begin::Details item-->
                                    <!--begin::Details item-->
                                    <div class="fw-bold mt-5 fs-color-white custom-fs-13">Email</div>
                                    <div class="text-gray-600">
                                        <a href="#" class="fs-color-white custom-fs-13">{{ Auth::user()->email }}</a>
                                    </div>
                                    <!--begin::Details item-->
                                    <!--begin::Details item-->
                                    <div class="fw-bold mt-5 fs-color-white custom-fs-13">Address</div>
                                    <div class="fs-color-white custom-fs-13">{{ Auth::user()->address_1 }}
                                        {{-- <br />Melbourne 3000 VIC
                                        <br />Australia --}}
                                    </div>
                                    <!--begin::Details item-->
                                    <!--begin::Details item-->
                                    <div class="fw-bold mt-5 fs-color-white custom-fs-13">Language</div>
                                    <div class="fs-color-white custom-fs-13">{{ Auth::user()->language }}</div>
                                    <!--begin::Details item-->
                                    <!--begin::Details item-->
                                    <div class="fw-bold mt-5 fs-color-white custom-fs-13">Last Login</div>
                                    <div class="fs-color-white custom-fs-13">
                                       {{ Auth::user()->authenticated_at ? Auth::user()->authenticated_at->diffForHumans() : 'Never authenticated' }}
                                    </div>
                                    <div class="fs-color-white custom-fs-13">{{ Auth::user()->authenticated_at }}</div>
                                    <!--begin::Details item-->
                                    <!--begin::Details item-->
                                    <div class="fw-bold mt-5 fs-color-white custom-fs-13">State/Province</div>
                                    <div class="fs-color-white custom-fs-13">{{ Auth::user()->state }}</div>
                                    <!--begin::Details item-->
                                    <!--begin::Details item-->
                                    <div class="fw-bold mt-5 fs-color-white custom-fs-13">Postal Code</div>
                                    <div class="fs-color-white custom-fs-13">{{ Auth::user()->postcode }}</div>
                                    <!--begin::Details item-->
                                </div>
                            </div>
                            <!--end::Details content-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Sidebar-->
                <!--begin::Content-->
                <div class="flex-lg-row-fluid ms-lg-15">
                    <!--begin:::Tabs-->
                    <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-8">
                        <!--begin:::Tab item-->
                        <!--<li class="nav-item">-->
                        <!--    <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_user_view_overview_tab">Overview</a>-->
                        <!--</li>-->
                        <!--end:::Tab item-->
                        <!--begin:::Tab item-->
                        <li class="nav-item">
                            <a class="nav-link text-white pb-4 active" data-bs-toggle="tab" href="#kt_user_view_overview_security">Security</a>
                        </li>
                        <!--end:::Tab item-->
                        <!--begin:::Tab item-->
                        <li class="nav-item">
                            <a class="nav-link text-white pb-4" data-bs-toggle="tab" href="#kt_user_view_overview_events_and_logs_tab">Sessions</a>
                        </li>
                        <!--end:::Tab item-->
                        <!--begin:::Tab item-->
                        <li class="nav-item ms-auto">
                            <!--begin::Action menu-->
                            <!--<a href="#" class="btn btn-primary ps-7" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">Actions-->
                            <!--    <i class="ki-duotone ki-down fs-2 me-0"></i></a>-->
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold py-4 w-250px fs-6" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-5">
                                    <div class="menu-content text-muted pb-2 px-5 fs-7 text-uppercase">Payments</div>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-5">
                                    <a href="#" class="menu-link px-5">Create invoice</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-5">
                                    <a href="#" class="menu-link flex-stack px-5">Create payments
                                        <span class="ms-2" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference">
                                            <i class="ki-duotone ki-information fs-7">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </span></a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-5" data-kt-menu-trigger="hover" data-kt-menu-placement="left-start">
                                    <a href="#" class="menu-link px-5">
                                        <span class="menu-title">Subscription</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <!--begin::Menu sub-->
                                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-5">Apps</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-5">Billing</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-5">Statements</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu separator-->
                                        <div class="separator my-2"></div>
                                        <!--end::Menu separator-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content px-3">
                                                <label class="form-check form-switch form-check-custom form-check-solid">
                                                    <input class="form-check-input w-30px h-20px" type="checkbox" value="" name="notifications" checked="checked" id="kt_user_menu_notifications" />
                                                    <span class="form-check-label text-muted fs-6" for="kt_user_menu_notifications">Notifications</span>
                                                </label>
                                            </div>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu sub-->
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu separator-->
                                <div class="separator my-3"></div>
                                <!--end::Menu separator-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-5">
                                    <div class="menu-content text-muted pb-2 px-5 fs-7 text-uppercase">Account</div>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-5">
                                    <a href="#" class="menu-link px-5">Reports</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-5 my-1">
                                    <a href="#" class="menu-link px-5">Account Settings</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-5">
                                    <a href="#" class="menu-link text-danger px-5">Delete customer</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                            <!--end::Menu-->
                        </li>
                        <!--end:::Tab item-->
                    </ul>
                    <!--end:::Tabs-->
                    <!--begin:::Tab content-->
                    <div class="tab-content" id="myTabContent">
                        <!--begin:::Tab pane-->
                        <!--<div class="tab-pane fade show active" id="kt_user_view_overview_tab" role="tabpanel">-->
                            <!--begin::Card-->
                        <!--    <div class="card card-flush mb-6 mb-xl-9">-->
                                <!--begin::Card header-->
                        <!--        <div class="card-header mt-6">-->
                                    <!--begin::Card title-->
                        <!--            <div class="card-title flex-column">-->
                        <!--                <h2 class="mb-1">User's Schedule</h2>-->
                        <!--                <div class="fs-6 fw-semibold text-muted">2 upcoming meetings</div>-->
                        <!--            </div>-->
                                    <!--end::Card title-->
                                    <!--begin::Card toolbar-->
                        <!--            <div class="card-toolbar">-->
                        <!--                <button type="button" class="btn btn-light-primary btn-sm" data-bs-toggle="modal" data-bs-target="#kt_modal_add_schedule">-->
                        <!--                    <i class="ki-duotone ki-brush fs-3">-->
                        <!--                        <span class="path1"></span>-->
                        <!--                        <span class="path2"></span>-->
                        <!--                    </i>Add Schedule</button>-->
                        <!--            </div>-->
                                    <!--end::Card toolbar-->
                        <!--        </div>-->
                                <!--end::Card header-->
                                <!--begin::Card body-->
                        <!--        <div class="card-body p-9 pt-4">-->
                                    <!--begin::Dates-->
                        <!--            <ul class="nav nav-pills d-flex flex-nowrap hover-scroll-x py-2">-->
                                        <!--begin::Date-->
                        <!--                <li class="nav-item me-1">-->
                        <!--                    <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-40px me-2 py-4 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_0">-->
                        <!--                        <span class="opacity-50 fs-7 fw-semibold">Su</span>-->
                        <!--                        <span class="fs-6 fw-bolder">21</span>-->
                        <!--                    </a>-->
                        <!--                </li>-->
                                        <!--end::Date-->
                                        <!--begin::Date-->
                        <!--                <li class="nav-item me-1">-->
                        <!--                    <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-40px me-2 py-4 btn-active-primary active" data-bs-toggle="tab" href="#kt_schedule_day_1">-->
                        <!--                        <span class="opacity-50 fs-7 fw-semibold">Mo</span>-->
                        <!--                        <span class="fs-6 fw-bolder">22</span>-->
                        <!--                    </a>-->
                        <!--                </li>-->
                                        <!--end::Date-->
                                        <!--begin::Date-->
                        <!--                <li class="nav-item me-1">-->
                        <!--                    <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-40px me-2 py-4 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_2">-->
                        <!--                        <span class="opacity-50 fs-7 fw-semibold">Tu</span>-->
                        <!--                        <span class="fs-6 fw-bolder">23</span>-->
                        <!--                    </a>-->
                        <!--                </li>-->
                                        <!--end::Date-->
                                        <!--begin::Date-->
                        <!--                <li class="nav-item me-1">-->
                        <!--                    <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-40px me-2 py-4 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_3">-->
                        <!--                        <span class="opacity-50 fs-7 fw-semibold">We</span>-->
                        <!--                        <span class="fs-6 fw-bolder">24</span>-->
                        <!--                    </a>-->
                        <!--                </li>-->
                                        <!--end::Date-->
                                        <!--begin::Date-->
                        <!--                <li class="nav-item me-1">-->
                        <!--                    <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-40px me-2 py-4 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_4">-->
                        <!--                        <span class="opacity-50 fs-7 fw-semibold">Th</span>-->
                        <!--                        <span class="fs-6 fw-bolder">25</span>-->
                        <!--                    </a>-->
                        <!--                </li>-->
                                        <!--end::Date-->
                                        <!--begin::Date-->
                        <!--                <li class="nav-item me-1">-->
                        <!--                    <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-40px me-2 py-4 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_5">-->
                        <!--                        <span class="opacity-50 fs-7 fw-semibold">Fr</span>-->
                        <!--                        <span class="fs-6 fw-bolder">26</span>-->
                        <!--                    </a>-->
                        <!--                </li>-->
                                        <!--end::Date-->
                                        <!--begin::Date-->
                        <!--                <li class="nav-item me-1">-->
                        <!--                    <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-40px me-2 py-4 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_6">-->
                        <!--                        <span class="opacity-50 fs-7 fw-semibold">Sa</span>-->
                        <!--                        <span class="fs-6 fw-bolder">27</span>-->
                        <!--                    </a>-->
                        <!--                </li>-->
                                        <!--end::Date-->
                                        <!--begin::Date-->
                        <!--                <li class="nav-item me-1">-->
                        <!--                    <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-40px me-2 py-4 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_7">-->
                        <!--                        <span class="opacity-50 fs-7 fw-semibold">Su</span>-->
                        <!--                        <span class="fs-6 fw-bolder">28</span>-->
                        <!--                    </a>-->
                        <!--                </li>-->
                                        <!--end::Date-->
                                        <!--begin::Date-->
                        <!--                <li class="nav-item me-1">-->
                        <!--                    <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-40px me-2 py-4 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_8">-->
                        <!--                        <span class="opacity-50 fs-7 fw-semibold">Mo</span>-->
                        <!--                        <span class="fs-6 fw-bolder">29</span>-->
                        <!--                    </a>-->
                        <!--                </li>-->
                                        <!--end::Date-->
                                        <!--begin::Date-->
                        <!--                <li class="nav-item me-1">-->
                        <!--                    <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-40px me-2 py-4 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_9">-->
                        <!--                        <span class="opacity-50 fs-7 fw-semibold">Tu</span>-->
                        <!--                        <span class="fs-6 fw-bolder">30</span>-->
                        <!--                    </a>-->
                        <!--                </li>-->
                                        <!--end::Date-->
                                        <!--begin::Date-->
                        <!--                <li class="nav-item me-1">-->
                        <!--                    <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-40px me-2 py-4 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_10">-->
                        <!--                        <span class="opacity-50 fs-7 fw-semibold">We</span>-->
                        <!--                        <span class="fs-6 fw-bolder">31</span>-->
                        <!--                    </a>-->
                        <!--                </li>-->
                                        <!--end::Date-->
                        <!--            </ul>-->
                                    <!--end::Dates-->
                                    <!--begin::Tab Content-->
                        <!--            <div class="tab-content">-->
                                        <!--begin::Day-->
                        <!--                <div id="kt_schedule_day_0" class="tab-pane fade show">-->
                                            <!--begin::Time-->
                        <!--                    <div class="d-flex flex-stack position-relative mt-6">-->
                                                <!--begin::Bar-->
                        <!--                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>-->
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                        <!--                        <div class="fw-semibold ms-5">-->
                                                    <!--begin::Time-->
                        <!--                            <div class="fs-7 mb-1">9:00 - 10:00-->
                        <!--                                <span class="fs-7 text-muted text-uppercase">am</span>-->
                        <!--                            </div>-->
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                        <!--                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Team Backlog Grooming Session</a>-->
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                        <!--                            <div class="fs-7 text-muted">Lead by-->
                        <!--                                <a href="#">Bob Harris</a>-->
                        <!--                            </div>-->
                                                    <!--end::User-->
                        <!--                        </div>-->
                                                <!--end::Info-->
                                                <!--begin::Action-->
                        <!--                        <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>-->
                                                <!--end::Action-->
                        <!--                    </div>-->
                                            <!--end::Time-->
                                            <!--begin::Time-->
                        <!--                    <div class="d-flex flex-stack position-relative mt-6">-->
                                                <!--begin::Bar-->
                        <!--                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>-->
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                        <!--                        <div class="fw-semibold ms-5">-->
                                                    <!--begin::Time-->
                        <!--                            <div class="fs-7 mb-1">9:00 - 10:00-->
                        <!--                                <span class="fs-7 text-muted text-uppercase">am</span>-->
                        <!--                            </div>-->
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                        <!--                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Marketing Campaign Discussion</a>-->
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                        <!--                            <div class="fs-7 text-muted">Lead by-->
                        <!--                                <a href="#">Karina Clarke</a>-->
                        <!--                            </div>-->
                                                    <!--end::User-->
                        <!--                        </div>-->
                                                <!--end::Info-->
                                                <!--begin::Action-->
                        <!--                        <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>-->
                                                <!--end::Action-->
                        <!--                    </div>-->
                                            <!--end::Time-->
                                            <!--begin::Time-->
                        <!--                    <div class="d-flex flex-stack position-relative mt-6">-->
                                                <!--begin::Bar-->
                        <!--                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>-->
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                        <!--                        <div class="fw-semibold ms-5">-->
                                                    <!--begin::Time-->
                        <!--                            <div class="fs-7 mb-1">13:00 - 14:00-->
                        <!--                                <span class="fs-7 text-muted text-uppercase">pm</span>-->
                        <!--                            </div>-->
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                        <!--                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sales Pitch Proposal</a>-->
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                        <!--                            <div class="fs-7 text-muted">Lead by-->
                        <!--                                <a href="#">Mark Randall</a>-->
                        <!--                            </div>-->
                                                    <!--end::User-->
                        <!--                        </div>-->
                                                <!--end::Info-->
                                                <!--begin::Action-->
                        <!--                        <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>-->
                                                <!--end::Action-->
                        <!--                    </div>-->
                                            <!--end::Time-->
                                            <!--begin::Time-->
                        <!--                    <div class="d-flex flex-stack position-relative mt-6">-->
                                                <!--begin::Bar-->
                        <!--                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>-->
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                        <!--                        <div class="fw-semibold ms-5">-->
                                                    <!--begin::Time-->
                        <!--                            <div class="fs-7 mb-1">16:30 - 17:30-->
                        <!--                                <span class="fs-7 text-muted text-uppercase">pm</span>-->
                        <!--                            </div>-->
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                        <!--                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Team Backlog Grooming Session</a>-->
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                        <!--                            <div class="fs-7 text-muted">Lead by-->
                        <!--                                <a href="#">David Stevenson</a>-->
                        <!--                            </div>-->
                                                    <!--end::User-->
                        <!--                        </div>-->
                                                <!--end::Info-->
                                                <!--begin::Action-->
                        <!--                        <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>-->
                                                <!--end::Action-->
                        <!--                    </div>-->
                                            <!--end::Time-->
                        <!--                </div>-->
                                        <!--end::Day-->
                                        <!--begin::Day-->
                        <!--                <div id="kt_schedule_day_1" class="tab-pane fade show active">-->
                                            <!--begin::Time-->
                        <!--                    <div class="d-flex flex-stack position-relative mt-6">-->
                                                <!--begin::Bar-->
                        <!--                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>-->
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                        <!--                        <div class="fw-semibold ms-5">-->
                                                    <!--begin::Time-->
                        <!--                            <div class="fs-7 mb-1">13:00 - 14:00-->
                        <!--                                <span class="fs-7 text-muted text-uppercase">pm</span>-->
                        <!--                            </div>-->
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                        <!--                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Development Team Capacity Review</a>-->
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                        <!--                            <div class="fs-7 text-muted">Lead by-->
                        <!--                                <a href="#">Terry Robins</a>-->
                        <!--                            </div>-->
                                                    <!--end::User-->
                        <!--                        </div>-->
                                                <!--end::Info-->
                                                <!--begin::Action-->
                        <!--                        <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>-->
                                                <!--end::Action-->
                        <!--                    </div>-->
                                            <!--end::Time-->
                                            <!--begin::Time-->
                        <!--                    <div class="d-flex flex-stack position-relative mt-6">-->
                                                <!--begin::Bar-->
                        <!--                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>-->
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                        <!--                        <div class="fw-semibold ms-5">-->
                                                    <!--begin::Time-->
                        <!--                            <div class="fs-7 mb-1">9:00 - 10:00-->
                        <!--                                <span class="fs-7 text-muted text-uppercase">am</span>-->
                        <!--                            </div>-->
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                        <!--                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Lunch & Learn Catch Up</a>-->
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                        <!--                            <div class="fs-7 text-muted">Lead by-->
                        <!--                                <a href="#">Walter White</a>-->
                        <!--                            </div>-->
                                                    <!--end::User-->
                        <!--                        </div>-->
                                                <!--end::Info-->
                                                <!--begin::Action-->
                        <!--                        <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>-->
                                                <!--end::Action-->
                        <!--                    </div>-->
                                            <!--end::Time-->
                                            <!--begin::Time-->
                        <!--                    <div class="d-flex flex-stack position-relative mt-6">-->
                                                <!--begin::Bar-->
                        <!--                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>-->
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                        <!--                        <div class="fw-semibold ms-5">-->
                                                    <!--begin::Time-->
                        <!--                            <div class="fs-7 mb-1">14:30 - 15:30-->
                        <!--                                <span class="fs-7 text-muted text-uppercase">pm</span>-->
                        <!--                            </div>-->
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                        <!--                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Project Review & Testing</a>-->
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                        <!--                            <div class="fs-7 text-muted">Lead by-->
                        <!--                                <a href="#">Karina Clarke</a>-->
                        <!--                            </div>-->
                                                    <!--end::User-->
                        <!--                        </div>-->
                                                <!--end::Info-->
                                                <!--begin::Action-->
                        <!--                        <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>-->
                                                <!--end::Action-->
                        <!--                    </div>-->
                                            <!--end::Time-->
                                            <!--begin::Time-->
                        <!--                    <div class="d-flex flex-stack position-relative mt-6">-->
                                                <!--begin::Bar-->
                        <!--                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>-->
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                        <!--                        <div class="fw-semibold ms-5">-->
                                                    <!--begin::Time-->
                        <!--                            <div class="fs-7 mb-1">14:30 - 15:30-->
                        <!--                                <span class="fs-7 text-muted text-uppercase">pm</span>-->
                        <!--                            </div>-->
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                        <!--                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Project Review & Testing</a>-->
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                        <!--                            <div class="fs-7 text-muted">Lead by-->
                        <!--                                <a href="#">Naomi Hayabusa</a>-->
                        <!--                            </div>-->
                                                    <!--end::User-->
                        <!--                        </div>-->
                                                <!--end::Info-->
                                                <!--begin::Action-->
                        <!--                        <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>-->
                                                <!--end::Action-->
                        <!--                    </div>-->
                                            <!--end::Time-->
                        <!--                </div>-->
                                        <!--end::Day-->
                                        <!--begin::Day-->
                        <!--                <div id="kt_schedule_day_2" class="tab-pane fade show">-->
                                            <!--begin::Time-->
                        <!--                    <div class="d-flex flex-stack position-relative mt-6">-->
                                                <!--begin::Bar-->
                        <!--                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>-->
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                        <!--                        <div class="fw-semibold ms-5">-->
                                                    <!--begin::Time-->
                        <!--                            <div class="fs-7 mb-1">13:00 - 14:00-->
                        <!--                                <span class="fs-7 text-muted text-uppercase">pm</span>-->
                        <!--                            </div>-->
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                        <!--                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Project Review & Testing</a>-->
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                        <!--                            <div class="fs-7 text-muted">Lead by-->
                        <!--                                <a href="#">Naomi Hayabusa</a>-->
                        <!--                            </div>-->
                                                    <!--end::User-->
                        <!--                        </div>-->
                                                <!--end::Info-->
                                                <!--begin::Action-->
                        <!--                        <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>-->
                                                <!--end::Action-->
                        <!--                    </div>-->
                                            <!--end::Time-->
                                            <!--begin::Time-->
                        <!--                    <div class="d-flex flex-stack position-relative mt-6">-->
                                                <!--begin::Bar-->
                        <!--                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>-->
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                        <!--                        <div class="fw-semibold ms-5">-->
                                                    <!--begin::Time-->
                        <!--                            <div class="fs-7 mb-1">10:00 - 11:00-->
                        <!--                                <span class="fs-7 text-muted text-uppercase">am</span>-->
                        <!--                            </div>-->
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                        <!--                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Creative Content Initiative</a>-->
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                        <!--                            <div class="fs-7 text-muted">Lead by-->
                        <!--                                <a href="#">Terry Robins</a>-->
                        <!--                            </div>-->
                                                    <!--end::User-->
                        <!--                        </div>-->
                                                <!--end::Info-->
                                                <!--begin::Action-->
                        <!--                        <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>-->
                                                <!--end::Action-->
                        <!--                    </div>-->
                                            <!--end::Time-->
                                            <!--begin::Time-->
                        <!--                    <div class="d-flex flex-stack position-relative mt-6">-->
                                                <!--begin::Bar-->
                        <!--                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>-->
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                        <!--                        <div class="fw-semibold ms-5">-->
                                                    <!--begin::Time-->
                        <!--                            <div class="fs-7 mb-1">11:00 - 11:45-->
                        <!--                                <span class="fs-7 text-muted text-uppercase">am</span>-->
                        <!--                            </div>-->
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                        <!--                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sales Pitch Proposal</a>-->
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                        <!--                            <div class="fs-7 text-muted">Lead by-->
                        <!--                                <a href="#">Peter Marcus</a>-->
                        <!--                            </div>-->
                                                    <!--end::User-->
                        <!--                        </div>-->
                                                <!--end::Info-->
                                                <!--begin::Action-->
                        <!--                        <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>-->
                                                <!--end::Action-->
                        <!--                    </div>-->
                                            <!--end::Time-->
                                            <!--begin::Time-->
                        <!--                    <div class="d-flex flex-stack position-relative mt-6">-->
                                                <!--begin::Bar-->
                        <!--                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>-->
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                        <!--                        <div class="fw-semibold ms-5">-->
                                                    <!--begin::Time-->
                        <!--                            <div class="fs-7 mb-1">13:00 - 14:00-->
                        <!--                                <span class="fs-7 text-muted text-uppercase">pm</span>-->
                        <!--                            </div>-->
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                        <!--                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">9 Degree Project Estimation Meeting</a>-->
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                        <!--                            <div class="fs-7 text-muted">Lead by-->
                        <!--                                <a href="#">Caleb Donaldson</a>-->
                        <!--                            </div>-->
                                                    <!--end::User-->
                        <!--                        </div>-->
                                                <!--end::Info-->
                                                <!--begin::Action-->
                        <!--                        <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>-->
                                                <!--end::Action-->
                        <!--                    </div>-->
                                            <!--end::Time-->
                        <!--                </div>-->
                                        <!--end::Day-->
                                        <!--begin::Day-->
                        <!--                <div id="kt_schedule_day_3" class="tab-pane fade show">-->
                                            <!--begin::Time-->
                        <!--                    <div class="d-flex flex-stack position-relative mt-6">-->
                                                <!--begin::Bar-->
                        <!--                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>-->
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                        <!--                        <div class="fw-semibold ms-5">-->
                                                    <!--begin::Time-->
                        <!--                            <div class="fs-7 mb-1">9:00 - 10:00-->
                        <!--                                <span class="fs-7 text-muted text-uppercase">am</span>-->
                        <!--                            </div>-->
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                        <!--                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Project Review & Testing</a>-->
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                        <!--                            <div class="fs-7 text-muted">Lead by-->
                        <!--                                <a href="#">Yannis Gloverson</a>-->
                        <!--                            </div>-->
                                                    <!--end::User-->
                        <!--                        </div>-->
                                                <!--end::Info-->
                                                <!--begin::Action-->
                        <!--                        <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>-->
                                                <!--end::Action-->
                        <!--                    </div>-->
                                            <!--end::Time-->
                                            <!--begin::Time-->
                        <!--                    <div class="d-flex flex-stack position-relative mt-6">-->
                                                <!--begin::Bar-->
                        <!--                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>-->
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                        <!--                        <div class="fw-semibold ms-5">-->
                                                    <!--begin::Time-->
                        <!--                            <div class="fs-7 mb-1">13:00 - 14:00-->
                        <!--                                <span class="fs-7 text-muted text-uppercase">pm</span>-->
                        <!--                            </div>-->
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                        <!--                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Weekly Team Stand-Up</a>-->
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                        <!--                            <div class="fs-7 text-muted">Lead by-->
                        <!--                                <a href="#">Naomi Hayabusa</a>-->
                        <!--                            </div>-->
                                                    <!--end::User-->
                        <!--                        </div>-->
                                                <!--end::Info-->
                                                <!--begin::Action-->
                        <!--                        <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>-->
                                                <!--end::Action-->
                        <!--                    </div>-->
                                            <!--end::Time-->
                                            <!--begin::Time-->
                        <!--                    <div class="d-flex flex-stack position-relative mt-6">-->
                                                <!--begin::Bar-->
                        <!--                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>-->
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                        <!--                        <div class="fw-semibold ms-5">-->
                                                    <!--begin::Time-->
                        <!--                            <div class="fs-7 mb-1">10:00 - 11:00-->
                        <!--                                <span class="fs-7 text-muted text-uppercase">am</span>-->
                        <!--                            </div>-->
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                        <!--                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Committee Review Approvals</a>-->
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                        <!--                            <div class="fs-7 text-muted">Lead by-->
                        <!--                                <a href="#">Yannis Gloverson</a>-->
                        <!--                            </div>-->
                                                    <!--end::User-->
                        <!--                        </div>-->
                                                <!--end::Info-->
                                                <!--begin::Action-->
                        <!--                        <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>-->
                                                <!--end::Action-->
                        <!--                    </div>-->
                                            <!--end::Time-->
                                            <!--begin::Time-->
                        <!--                    <div class="d-flex flex-stack position-relative mt-6">-->
                                                <!--begin::Bar-->
                        <!--                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>-->
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                        <!--                        <div class="fw-semibold ms-5">-->
                                                    <!--begin::Time-->
                        <!--                            <div class="fs-7 mb-1">10:00 - 11:00-->
                        <!--                                <span class="fs-7 text-muted text-uppercase">am</span>-->
                        <!--                            </div>-->
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                        <!--                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">9 Degree Project Estimation Meeting</a>-->
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                        <!--                            <div class="fs-7 text-muted">Lead by-->
                        <!--                                <a href="#">Walter White</a>-->
                        <!--                            </div>-->
                                                    <!--end::User-->
                        <!--                        </div>-->
                                                <!--end::Info-->
                                                <!--begin::Action-->
                        <!--                        <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>-->
                                                <!--end::Action-->
                        <!--                    </div>-->
                                            <!--end::Time-->
                                            <!--begin::Time-->
                        <!--                    <div class="d-flex flex-stack position-relative mt-6">-->
                                                <!--begin::Bar-->
                        <!--                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>-->
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                        <!--                        <div class="fw-semibold ms-5">-->
                                                    <!--begin::Time-->
                        <!--                            <div class="fs-7 mb-1">13:00 - 14:00-->
                        <!--                                <span class="fs-7 text-muted text-uppercase">pm</span>-->
                        <!--                            </div>-->
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                        <!--                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sales Pitch Proposal</a>-->
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                        <!--                            <div class="fs-7 text-muted">Lead by-->
                        <!--                                <a href="#">Michael Walters</a>-->
                        <!--                            </div>-->
                                                    <!--end::User-->
                        <!--                        </div>-->
                                                <!--end::Info-->
                                                <!--begin::Action-->
                        <!--                        <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>-->
                                                <!--end::Action-->
                        <!--                    </div>-->
                                            <!--end::Time-->
                        <!--                </div>-->
                                        <!--end::Day-->
                                        <!--begin::Day-->
                        <!--                <div id="kt_schedule_day_4" class="tab-pane fade show">-->
                                            <!--begin::Time-->
                        <!--                    <div class="d-flex flex-stack position-relative mt-6">-->
                                                <!--begin::Bar-->
                        <!--                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>-->
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                        <!--                        <div class="fw-semibold ms-5">-->
                                                    <!--begin::Time-->
                        <!--                            <div class="fs-7 mb-1">12:00 - 13:00-->
                        <!--                                <span class="fs-7 text-muted text-uppercase">pm</span>-->
                        <!--                            </div>-->
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                        <!--                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dashboard UI/UX Design Review</a>-->
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                        <!--                            <div class="fs-7 text-muted">Lead by-->
                        <!--                                <a href="#">David Stevenson</a>-->
                        <!--                            </div>-->
                                                    <!--end::User-->
                        <!--                        </div>-->
                                                <!--end::Info-->
                                                <!--begin::Action-->
                        <!--                        <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>-->
                                                <!--end::Action-->
                        <!--                    </div>-->
                                            <!--end::Time-->
                                            <!--begin::Time-->
                        <!--                    <div class="d-flex flex-stack position-relative mt-6">-->
                                                <!--begin::Bar-->
                        <!--                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>-->
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                        <!--                        <div class="fw-semibold ms-5">-->
                                                    <!--begin::Time-->
                        <!--                            <div class="fs-7 mb-1">13:00 - 14:00-->
                        <!--                                <span class="fs-7 text-muted text-uppercase">pm</span>-->
                        <!--                            </div>-->
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                        <!--                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dashboard UI/UX Design Review</a>-->
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                        <!--                            <div class="fs-7 text-muted">Lead by-->
                        <!--                                <a href="#">Caleb Donaldson</a>-->
                        <!--                            </div>-->
                                                    <!--end::User-->
                        <!--                        </div>-->
                                                <!--end::Info-->
                                                <!--begin::Action-->
                        <!--                        <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>-->
                                                <!--end::Action-->
                        <!--                    </div>-->
                                            <!--end::Time-->
                                            <!--begin::Time-->
                        <!--                    <div class="d-flex flex-stack position-relative mt-6">-->
                                                <!--begin::Bar-->
                        <!--                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>-->
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                        <!--                        <div class="fw-semibold ms-5">-->
                                                    <!--begin::Time-->
                        <!--                            <div class="fs-7 mb-1">16:30 - 17:30-->
                        <!--                                <span class="fs-7 text-muted text-uppercase">pm</span>-->
                        <!--                            </div>-->
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                        <!--                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Lunch & Learn Catch Up</a>-->
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                        <!--                            <div class="fs-7 text-muted">Lead by-->
                        <!--                                <a href="#">Kendell Trevor</a>-->
                        <!--                            </div>-->
                                                    <!--end::User-->
                        <!--                        </div>-->
                                                <!--end::Info-->
                                                <!--begin::Action-->
                        <!--                        <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>-->
                                                <!--end::Action-->
                        <!--                    </div>-->
                                            <!--end::Time-->
                        <!--                </div>-->
                                        <!--end::Day-->
                                        <!--begin::Day-->
                        <!--                <div id="kt_schedule_day_5" class="tab-pane fade show">-->
                                            <!--begin::Time-->
                        <!--                    <div class="d-flex flex-stack position-relative mt-6">-->
                                                <!--begin::Bar-->
                        <!--                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>-->
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                        <!--                        <div class="fw-semibold ms-5">-->
                                                    <!--begin::Time-->
                        <!--                            <div class="fs-7 mb-1">11:00 - 11:45-->
                        <!--                                <span class="fs-7 text-muted text-uppercase">am</span>-->
                        <!--                            </div>-->
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                        <!--                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Project Review & Testing</a>-->
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                        <!--                            <div class="fs-7 text-muted">Lead by-->
                        <!--                                <a href="#">Walter White</a>-->
                        <!--                            </div>-->
                                                    <!--end::User-->
                        <!--                        </div>-->
                                                <!--end::Info-->
                                                <!--begin::Action-->
                        <!--                        <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>-->
                                                <!--end::Action-->
                        <!--                    </div>-->
                                            <!--end::Time-->
                                            <!--begin::Time-->
                        <!--                    <div class="d-flex flex-stack position-relative mt-6">-->
                                                <!--begin::Bar-->
                        <!--                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>-->
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                        <!--                        <div class="fw-semibold ms-5">-->
                                                    <!--begin::Time-->
                        <!--                            <div class="fs-7 mb-1">16:30 - 17:30-->
                        <!--                                <span class="fs-7 text-muted text-uppercase">pm</span>-->
                        <!--                            </div>-->
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                        <!--                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Project Review & Testing</a>-->
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                        <!--                            <div class="fs-7 text-muted">Lead by-->
                        <!--                                <a href="#">David Stevenson</a>-->
                        <!--                            </div>-->
                                                    <!--end::User-->
                        <!--                        </div>-->
                                                <!--end::Info-->
                                                <!--begin::Action-->
                        <!--                        <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>-->
                                                <!--end::Action-->
                        <!--                    </div>-->
                                            <!--end::Time-->
                                            <!--begin::Time-->
                        <!--                    <div class="d-flex flex-stack position-relative mt-6">-->
                                                <!--begin::Bar-->
                        <!--                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>-->
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                        <!--                        <div class="fw-semibold ms-5">-->
                                                    <!--begin::Time-->
                        <!--                            <div class="fs-7 mb-1">12:00 - 13:00-->
                        <!--                                <span class="fs-7 text-muted text-uppercase">pm</span>-->
                        <!--                            </div>-->
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                        <!--                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">9 Degree Project Estimation Meeting</a>-->
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                        <!--                            <div class="fs-7 text-muted">Lead by-->
                        <!--                                <a href="#">Walter White</a>-->
                        <!--                            </div>-->
                                                    <!--end::User-->
                        <!--                        </div>-->
                                                <!--end::Info-->
                                                <!--begin::Action-->
                        <!--                        <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>-->
                                                <!--end::Action-->
                        <!--                    </div>-->
                                            <!--end::Time-->
                                            <!--begin::Time-->
                        <!--                    <div class="d-flex flex-stack position-relative mt-6">-->
                                                <!--begin::Bar-->
                        <!--                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>-->
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                        <!--                        <div class="fw-semibold ms-5">-->
                                                    <!--begin::Time-->
                        <!--                            <div class="fs-7 mb-1">11:00 - 11:45-->
                        <!--                                <span class="fs-7 text-muted text-uppercase">am</span>-->
                        <!--                            </div>-->
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                        <!--                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Creative Content Initiative</a>-->
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                        <!--                            <div class="fs-7 text-muted">Lead by-->
                        <!--                                <a href="#">Peter Marcus</a>-->
                        <!--                            </div>-->
                                                    <!--end::User-->
                        <!--                        </div>-->
                                                <!--end::Info-->
                                                <!--begin::Action-->
                        <!--                        <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>-->
                                                <!--end::Action-->
                        <!--                    </div>-->
                                            <!--end::Time-->
                        <!--                </div>-->
                                        <!--end::Day-->
                                        <!--begin::Day-->
                        <!--                <div id="kt_schedule_day_6" class="tab-pane fade show">-->
                                            <!--begin::Time-->
                        <!--                    <div class="d-flex flex-stack position-relative mt-6">-->
                                                <!--begin::Bar-->
                        <!--                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>-->
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                        <!--                        <div class="fw-semibold ms-5">-->
                                                    <!--begin::Time-->
                        <!--                            <div class="fs-7 mb-1">12:00 - 13:00-->
                        <!--                                <span class="fs-7 text-muted text-uppercase">pm</span>-->
                        <!--                            </div>-->
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                        <!--                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dashboard UI/UX Design Review</a>-->
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                        <!--                            <div class="fs-7 text-muted">Lead by-->
                        <!--                                <a href="#">Naomi Hayabusa</a>-->
                        <!--                            </div>-->
                                                    <!--end::User-->
                        <!--                        </div>-->
                                                <!--end::Info-->
                                                <!--begin::Action-->
                        <!--                        <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>-->
                                                <!--end::Action-->
                        <!--                    </div>-->
                                            <!--end::Time-->
                                            <!--begin::Time-->
                        <!--                    <div class="d-flex flex-stack position-relative mt-6">-->
                                                <!--begin::Bar-->
                        <!--                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>-->
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                        <!--                        <div class="fw-semibold ms-5">-->
                                                    <!--begin::Time-->
                        <!--                            <div class="fs-7 mb-1">11:00 - 11:45-->
                        <!--                                <span class="fs-7 text-muted text-uppercase">am</span>-->
                        <!--                            </div>-->
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                        <!--                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Weekly Team Stand-Up</a>-->
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                        <!--                            <div class="fs-7 text-muted">Lead by-->
                        <!--                                <a href="#">Terry Robins</a>-->
                        <!--                            </div>-->
                                                    <!--end::User-->
                        <!--                        </div>-->
                                                <!--end::Info-->
                                                <!--begin::Action-->
                        <!--                        <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>-->
                                                <!--end::Action-->
                        <!--                    </div>-->
                                            <!--end::Time-->
                                            <!--begin::Time-->
                        <!--                    <div class="d-flex flex-stack position-relative mt-6">-->
                                                <!--begin::Bar-->
                        <!--                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>-->
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                        <!--                        <div class="fw-semibold ms-5">-->
                                                    <!--begin::Time-->
                        <!--                            <div class="fs-7 mb-1">13:00 - 14:00-->
                        <!--                                <span class="fs-7 text-muted text-uppercase">pm</span>-->
                        <!--                            </div>-->
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                        <!--                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dashboard UI/UX Design Review</a>-->
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                        <!--                            <div class="fs-7 text-muted">Lead by-->
                        <!--                                <a href="#">Naomi Hayabusa</a>-->
                        <!--                            </div>-->
                                                    <!--end::User-->
                        <!--                        </div>-->
                                                <!--end::Info-->
                                                <!--begin::Action-->
                        <!--                        <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>-->
                                                <!--end::Action-->
                        <!--                    </div>-->
                                            <!--end::Time-->
                        <!--                </div>-->
                                        <!--end::Day-->
                                        <!--begin::Day-->
                        <!--                <div id="kt_schedule_day_7" class="tab-pane fade show">-->
                                            <!--begin::Time-->
                        <!--                    <div class="d-flex flex-stack position-relative mt-6">-->
                                                <!--begin::Bar-->
                        <!--                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>-->
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                        <!--                        <div class="fw-semibold ms-5">-->
                                                    <!--begin::Time-->
                        <!--                            <div class="fs-7 mb-1">16:30 - 17:30-->
                        <!--                                <span class="fs-7 text-muted text-uppercase">pm</span>-->
                        <!--                            </div>-->
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                        <!--                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Project Review & Testing</a>-->
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                        <!--                            <div class="fs-7 text-muted">Lead by-->
                        <!--                                <a href="#">Michael Walters</a>-->
                        <!--                            </div>-->
                                                    <!--end::User-->
                        <!--                        </div>-->
                                                <!--end::Info-->
                                                <!--begin::Action-->
                        <!--                        <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>-->
                                                <!--end::Action-->
                        <!--                    </div>-->
                                            <!--end::Time-->
                                            <!--begin::Time-->
                        <!--                    <div class="d-flex flex-stack position-relative mt-6">-->
                                                <!--begin::Bar-->
                        <!--                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>-->
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                        <!--                        <div class="fw-semibold ms-5">-->
                                                    <!--begin::Time-->
                        <!--                            <div class="fs-7 mb-1">14:30 - 15:30-->
                        <!--                                <span class="fs-7 text-muted text-uppercase">pm</span>-->
                        <!--                            </div>-->
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                        <!--                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Marketing Campaign Discussion</a>-->
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                        <!--                            <div class="fs-7 text-muted">Lead by-->
                        <!--                                <a href="#">Karina Clarke</a>-->
                        <!--                            </div>-->
                                                    <!--end::User-->
                        <!--                        </div>-->
                                                <!--end::Info-->
                                                <!--begin::Action-->
                        <!--                        <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>-->
                                                <!--end::Action-->
                        <!--                    </div>-->
                                            <!--end::Time-->
                                            <!--begin::Time-->
                        <!--                    <div class="d-flex flex-stack position-relative mt-6">-->
                                                <!--begin::Bar-->
                        <!--                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>-->
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                        <!--                        <div class="fw-semibold ms-5">-->
                                                    <!--begin::Time-->
                        <!--                            <div class="fs-7 mb-1">10:00 - 11:00-->
                        <!--                                <span class="fs-7 text-muted text-uppercase">am</span>-->
                        <!--                            </div>-->
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                        <!--                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Team Backlog Grooming Session</a>-->
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                        <!--                            <div class="fs-7 text-muted">Lead by-->
                        <!--                                <a href="#">David Stevenson</a>-->
                        <!--                            </div>-->
                                                    <!--end::User-->
                        <!--                        </div>-->
                                                <!--end::Info-->
                                                <!--begin::Action-->
                        <!--                        <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>-->
                                                <!--end::Action-->
                        <!--                    </div>-->
                                            <!--end::Time-->
                                            <!--begin::Time-->
                        <!--                    <div class="d-flex flex-stack position-relative mt-6">-->
                                                <!--begin::Bar-->
                        <!--                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>-->
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                        <!--                        <div class="fw-semibold ms-5">-->
                                                    <!--begin::Time-->
                        <!--                            <div class="fs-7 mb-1">13:00 - 14:00-->
                        <!--                                <span class="fs-7 text-muted text-uppercase">pm</span>-->
                        <!--                            </div>-->
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                        <!--                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Weekly Team Stand-Up</a>-->
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                        <!--                            <div class="fs-7 text-muted">Lead by-->
                        <!--                                <a href="#">Kendell Trevor</a>-->
                        <!--                            </div>-->
                                                    <!--end::User-->
                        <!--                        </div>-->
                                                <!--end::Info-->
                                                <!--begin::Action-->
                        <!--                        <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>-->
                                                <!--end::Action-->
                        <!--                    </div>-->
                                            <!--end::Time-->
                        <!--                </div>-->
                                        <!--end::Day-->
                                        <!--begin::Day-->
                        <!--                <div id="kt_schedule_day_8" class="tab-pane fade show">-->
                                            <!--begin::Time-->
                        <!--                    <div class="d-flex flex-stack position-relative mt-6">-->
                                                <!--begin::Bar-->
                        <!--                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>-->
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                        <!--                        <div class="fw-semibold ms-5">-->
                                                    <!--begin::Time-->
                        <!--                            <div class="fs-7 mb-1">9:00 - 10:00-->
                        <!--                                <span class="fs-7 text-muted text-uppercase">am</span>-->
                        <!--                            </div>-->
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                        <!--                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sales Pitch Proposal</a>-->
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                        <!--                            <div class="fs-7 text-muted">Lead by-->
                        <!--                                <a href="#">Yannis Gloverson</a>-->
                        <!--                            </div>-->
                                                    <!--end::User-->
                        <!--                        </div>-->
                                                <!--end::Info-->
                                                <!--begin::Action-->
                        <!--                        <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>-->
                                                <!--end::Action-->
                        <!--                    </div>-->
                                            <!--end::Time-->
                                            <!--begin::Time-->
                        <!--                    <div class="d-flex flex-stack position-relative mt-6">-->
                                                <!--begin::Bar-->
                        <!--                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>-->
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                        <!--                        <div class="fw-semibold ms-5">-->
                                                    <!--begin::Time-->
                        <!--                            <div class="fs-7 mb-1">9:00 - 10:00-->
                        <!--                                <span class="fs-7 text-muted text-uppercase">am</span>-->
                        <!--                            </div>-->
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                        <!--                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Lunch & Learn Catch Up</a>-->
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                        <!--                            <div class="fs-7 text-muted">Lead by-->
                        <!--                                <a href="#">Sean Bean</a>-->
                        <!--                            </div>-->
                                                    <!--end::User-->
                        <!--                        </div>-->
                                                <!--end::Info-->
                                                <!--begin::Action-->
                        <!--                        <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>-->
                                                <!--end::Action-->
                        <!--                    </div>-->
                                            <!--end::Time-->
                                            <!--begin::Time-->
                        <!--                    <div class="d-flex flex-stack position-relative mt-6">-->
                                                <!--begin::Bar-->
                        <!--                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>-->
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                        <!--                        <div class="fw-semibold ms-5">-->
                                                    <!--begin::Time-->
                        <!--                            <div class="fs-7 mb-1">16:30 - 17:30-->
                        <!--                                <span class="fs-7 text-muted text-uppercase">pm</span>-->
                        <!--                            </div>-->
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                        <!--                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Project Review & Testing</a>-->
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                        <!--                            <div class="fs-7 text-muted">Lead by-->
                        <!--                                <a href="#">Bob Harris</a>-->
                        <!--                            </div>-->
                                                    <!--end::User-->
                        <!--                        </div>-->
                                                <!--end::Info-->
                                                <!--begin::Action-->
                        <!--                        <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>-->
                                                <!--end::Action-->
                        <!--                    </div>-->
                                            <!--end::Time-->
                                            <!--begin::Time-->
                        <!--                    <div class="d-flex flex-stack position-relative mt-6">-->
                                                <!--begin::Bar-->
                        <!--                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>-->
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                        <!--                        <div class="fw-semibold ms-5">-->
                                                    <!--begin::Time-->
                        <!--                            <div class="fs-7 mb-1">13:00 - 14:00-->
                        <!--                                <span class="fs-7 text-muted text-uppercase">pm</span>-->
                        <!--                            </div>-->
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                        <!--                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sales Pitch Proposal</a>-->
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                        <!--                            <div class="fs-7 text-muted">Lead by-->
                        <!--                                <a href="#">Michael Walters</a>-->
                        <!--                            </div>-->
                                                    <!--end::User-->
                        <!--                        </div>-->
                                                <!--end::Info-->
                                                <!--begin::Action-->
                        <!--                        <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>-->
                                                <!--end::Action-->
                        <!--                    </div>-->
                                            <!--end::Time-->
                        <!--                </div>-->
                                        <!--end::Day-->
                                        <!--begin::Day-->
                        <!--                <div id="kt_schedule_day_9" class="tab-pane fade show">-->
                                            <!--begin::Time-->
                        <!--                    <div class="d-flex flex-stack position-relative mt-6">-->
                                                <!--begin::Bar-->
                        <!--                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>-->
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                        <!--                        <div class="fw-semibold ms-5">-->
                                                    <!--begin::Time-->
                        <!--                            <div class="fs-7 mb-1">11:00 - 11:45-->
                        <!--                                <span class="fs-7 text-muted text-uppercase">am</span>-->
                        <!--                            </div>-->
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                        <!--                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sales Pitch Proposal</a>-->
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                        <!--                            <div class="fs-7 text-muted">Lead by-->
                        <!--                                <a href="#">Mark Randall</a>-->
                        <!--                            </div>-->
                                                    <!--end::User-->
                        <!--                        </div>-->
                                                <!--end::Info-->
                                                <!--begin::Action-->
                        <!--                        <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>-->
                                                <!--end::Action-->
                        <!--                    </div>-->
                                            <!--end::Time-->
                                            <!--begin::Time-->
                        <!--                    <div class="d-flex flex-stack position-relative mt-6">-->
                                                <!--begin::Bar-->
                        <!--                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>-->
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                        <!--                        <div class="fw-semibold ms-5">-->
                                                    <!--begin::Time-->
                        <!--                            <div class="fs-7 mb-1">12:00 - 13:00-->
                        <!--                                <span class="fs-7 text-muted text-uppercase">pm</span>-->
                        <!--                            </div>-->
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                        <!--                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dashboard UI/UX Design Review</a>-->
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                        <!--                            <div class="fs-7 text-muted">Lead by-->
                        <!--                                <a href="#">Naomi Hayabusa</a>-->
                        <!--                            </div>-->
                                                    <!--end::User-->
                        <!--                        </div>-->
                                                <!--end::Info-->
                                                <!--begin::Action-->
                        <!--                        <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>-->
                                                <!--end::Action-->
                        <!--                    </div>-->
                                            <!--end::Time-->
                                            <!--begin::Time-->
                        <!--                    <div class="d-flex flex-stack position-relative mt-6">-->
                                                <!--begin::Bar-->
                        <!--                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>-->
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                        <!--                        <div class="fw-semibold ms-5">-->
                                                    <!--begin::Time-->
                        <!--                            <div class="fs-7 mb-1">10:00 - 11:00-->
                        <!--                                <span class="fs-7 text-muted text-uppercase">am</span>-->
                        <!--                            </div>-->
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                        <!--                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sales Pitch Proposal</a>-->
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                        <!--                            <div class="fs-7 text-muted">Lead by-->
                        <!--                                <a href="#">Yannis Gloverson</a>-->
                        <!--                            </div>-->
                                                    <!--end::User-->
                        <!--                        </div>-->
                                                <!--end::Info-->
                                                <!--begin::Action-->
                        <!--                        <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>-->
                                                <!--end::Action-->
                        <!--                    </div>-->
                                            <!--end::Time-->
                        <!--                </div>-->
                                        <!--end::Day-->
                                        <!--begin::Day-->
                        <!--                <div id="kt_schedule_day_10" class="tab-pane fade show">-->
                                            <!--begin::Time-->
                        <!--                    <div class="d-flex flex-stack position-relative mt-6">-->
                                                <!--begin::Bar-->
                        <!--                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>-->
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                        <!--                        <div class="fw-semibold ms-5">-->
                                                    <!--begin::Time-->
                        <!--                            <div class="fs-7 mb-1">9:00 - 10:00-->
                        <!--                                <span class="fs-7 text-muted text-uppercase">am</span>-->
                        <!--                            </div>-->
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                        <!--                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Creative Content Initiative</a>-->
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                        <!--                            <div class="fs-7 text-muted">Lead by-->
                        <!--                                <a href="#">Karina Clarke</a>-->
                        <!--                            </div>-->
                                                    <!--end::User-->
                        <!--                        </div>-->
                                                <!--end::Info-->
                                                <!--begin::Action-->
                        <!--                        <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>-->
                                                <!--end::Action-->
                        <!--                    </div>-->
                                            <!--end::Time-->
                                            <!--begin::Time-->
                        <!--                    <div class="d-flex flex-stack position-relative mt-6">-->
                                                <!--begin::Bar-->
                        <!--                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>-->
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                        <!--                        <div class="fw-semibold ms-5">-->
                                                    <!--begin::Time-->
                        <!--                            <div class="fs-7 mb-1">9:00 - 10:00-->
                        <!--                                <span class="fs-7 text-muted text-uppercase">am</span>-->
                        <!--                            </div>-->
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                        <!--                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Committee Review Approvals</a>-->
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                        <!--                            <div class="fs-7 text-muted">Lead by-->
                        <!--                                <a href="#">Sean Bean</a>-->
                        <!--                            </div>-->
                                                    <!--end::User-->
                        <!--                        </div>-->
                                                <!--end::Info-->
                                                <!--begin::Action-->
                        <!--                        <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>-->
                                                <!--end::Action-->
                        <!--                    </div>-->
                                            <!--end::Time-->
                                            <!--begin::Time-->
                        <!--                    <div class="d-flex flex-stack position-relative mt-6">-->
                                                <!--begin::Bar-->
                        <!--                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>-->
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                        <!--                        <div class="fw-semibold ms-5">-->
                                                    <!--begin::Time-->
                        <!--                            <div class="fs-7 mb-1">10:00 - 11:00-->
                        <!--                                <span class="fs-7 text-muted text-uppercase">am</span>-->
                        <!--                            </div>-->
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                        <!--                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Weekly Team Stand-Up</a>-->
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                        <!--                            <div class="fs-7 text-muted">Lead by-->
                        <!--                                <a href="#">Peter Marcus</a>-->
                        <!--                            </div>-->
                                                    <!--end::User-->
                        <!--                        </div>-->
                                                <!--end::Info-->
                                                <!--begin::Action-->
                        <!--                        <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>-->
                                                <!--end::Action-->
                        <!--                    </div>-->
                                            <!--end::Time-->
                                            <!--begin::Time-->
                        <!--                    <div class="d-flex flex-stack position-relative mt-6">-->
                                                <!--begin::Bar-->
                        <!--                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>-->
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                        <!--                        <div class="fw-semibold ms-5">-->
                                                    <!--begin::Time-->
                        <!--                            <div class="fs-7 mb-1">14:30 - 15:30-->
                        <!--                                <span class="fs-7 text-muted text-uppercase">pm</span>-->
                        <!--                            </div>-->
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                        <!--                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">9 Degree Project Estimation Meeting</a>-->
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                        <!--                            <div class="fs-7 text-muted">Lead by-->
                        <!--                                <a href="#">Bob Harris</a>-->
                        <!--                            </div>-->
                                                    <!--end::User-->
                        <!--                        </div>-->
                                                <!--end::Info-->
                                                <!--begin::Action-->
                        <!--                        <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>-->
                                                <!--end::Action-->
                        <!--                    </div>-->
                                            <!--end::Time-->
                        <!--                </div>-->
                                        <!--end::Day-->
                        <!--            </div>-->
                                    <!--end::Tab Content-->
                        <!--        </div>-->
                                <!--end::Card body-->
                        <!--    </div>-->
                            <!--end::Card-->
                            <!--begin::Tasks-->
                        <!--    <div class="card card-flush mb-6 mb-xl-9">-->
                                <!--begin::Card header-->
                        <!--        <div class="card-header mt-6">-->
                                    <!--begin::Card title-->
                        <!--            <div class="card-title flex-column">-->
                        <!--                <h2 class="mb-1">User's Tasks</h2>-->
                        <!--                <div class="fs-6 fw-semibold text-muted">Total 25 tasks in backlog</div>-->
                        <!--            </div>-->
                                    <!--end::Card title-->
                                    <!--begin::Card toolbar-->
                        <!--            <div class="card-toolbar">-->
                        <!--                <button type="button" class="btn btn-light-primary btn-sm" data-bs-toggle="modal" data-bs-target="#kt_modal_add_task">-->
                        <!--                    <i class="ki-duotone ki-add-files fs-3">-->
                        <!--                        <span class="path1"></span>-->
                        <!--                        <span class="path2"></span>-->
                        <!--                        <span class="path3"></span>-->
                        <!--                    </i>Add Task</button>-->
                        <!--            </div>-->
                                    <!--end::Card toolbar-->
                        <!--        </div>-->
                                <!--end::Card header-->
                                <!--begin::Card body-->
                        <!--        <div class="card-body d-flex flex-column">-->
                                    <!--begin::Item-->
                        <!--            <div class="d-flex align-items-center position-relative mb-7">-->
                                        <!--begin::Label-->
                        <!--                <div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>-->
                                        <!--end::Label-->
                                        <!--begin::Details-->
                        <!--                <div class="fw-semibold ms-5">-->
                        <!--                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary">Create FureStibe branding logo</a>-->
                                            <!--begin::Info-->
                        <!--                    <div class="fs-7 text-muted">Due in 1 day-->
                        <!--                        <a href="#">Karina Clark</a>-->
                        <!--                    </div>-->
                                            <!--end::Info-->
                        <!--                </div>-->
                                        <!--end::Details-->
                                        <!--begin::Menu-->
                        <!--                <button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">-->
                        <!--                    <i class="ki-duotone ki-setting-3 fs-3">-->
                        <!--                        <span class="path1"></span>-->
                        <!--                        <span class="path2"></span>-->
                        <!--                        <span class="path3"></span>-->
                        <!--                        <span class="path4"></span>-->
                        <!--                        <span class="path5"></span>-->
                        <!--                    </i>-->
                        <!--                </button>-->
                                        <!--begin::Task menu-->
                        <!--                <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" data-kt-menu-id="kt-users-tasks">-->
                                            <!--begin::Header-->
                        <!--                    <div class="px-7 py-5">-->
                        <!--                        <div class="fs-5 text-gray-900 fw-bold">Update Status</div>-->
                        <!--                    </div>-->
                                            <!--end::Header-->
                                            <!--begin::Menu separator-->
                        <!--                    <div class="separator border-gray-200"></div>-->
                                            <!--end::Menu separator-->
                                            <!--begin::Form-->
                        <!--                    <form class="form px-7 py-5" data-kt-menu-id="kt-users-tasks-form">-->
                                                <!--begin::Input group-->
                        <!--                        <div class="fv-row mb-10">-->
                                                    <!--begin::Label-->
                        <!--                            <label class="form-label fs-6 fw-semibold">Status:</label>-->
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                        <!--                            <select class="form-select form-select-solid" name="task_status" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-hide-search="true">-->
                        <!--                                <option></option>-->
                        <!--                                <option value="1">Approved</option>-->
                        <!--                                <option value="2">Pending</option>-->
                        <!--                                <option value="3">In Process</option>-->
                        <!--                                <option value="4">Rejected</option>-->
                        <!--                            </select>-->
                                                    <!--end::Input-->
                        <!--                        </div>-->
                                                <!--end::Input group-->
                                                <!--begin::Actions-->
                        <!--                        <div class="d-flex justify-content-end">-->
                        <!--                            <button type="button" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-users-update-task-status="reset">Reset</button>-->
                        <!--                            <button type="submit" class="btn btn-sm btn-primary" data-kt-users-update-task-status="submit">-->
                        <!--                                <span class="indicator-label">Apply</span>-->
                        <!--                                <span class="indicator-progress">Please wait...-->
                        <!--                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>-->
                        <!--                            </button>-->
                        <!--                        </div>-->
                                                <!--end::Actions-->
                        <!--                    </form>-->
                                            <!--end::Form-->
                        <!--                </div>-->
                                        <!--end::Task menu-->
                                        <!--end::Menu-->
                        <!--            </div>-->
                                    <!--end::Item-->
                                    <!--begin::Item-->
                        <!--            <div class="d-flex align-items-center position-relative mb-7">-->
                                        <!--begin::Label-->
                        <!--                <div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>-->
                                        <!--end::Label-->
                                        <!--begin::Details-->
                        <!--                <div class="fw-semibold ms-5">-->
                        <!--                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary">Schedule a meeting with FireBear CTO John</a>-->
                                            <!--begin::Info-->
                        <!--                    <div class="fs-7 text-muted">Due in 3 days-->
                        <!--                        <a href="#">Rober Doe</a>-->
                        <!--                    </div>-->
                                            <!--end::Info-->
                        <!--                </div>-->
                                        <!--end::Details-->
                                        <!--begin::Menu-->
                        <!--                <button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">-->
                        <!--                    <i class="ki-duotone ki-setting-3 fs-3">-->
                        <!--                        <span class="path1"></span>-->
                        <!--                        <span class="path2"></span>-->
                        <!--                        <span class="path3"></span>-->
                        <!--                        <span class="path4"></span>-->
                        <!--                        <span class="path5"></span>-->
                        <!--                    </i>-->
                        <!--                </button>-->
                                        <!--begin::Task menu-->
                        <!--                <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" data-kt-menu-id="kt-users-tasks">-->
                                            <!--begin::Header-->
                        <!--                    <div class="px-7 py-5">-->
                        <!--                        <div class="fs-5 text-gray-900 fw-bold">Update Status</div>-->
                        <!--                    </div>-->
                                            <!--end::Header-->
                                            <!--begin::Menu separator-->
                        <!--                    <div class="separator border-gray-200"></div>-->
                                            <!--end::Menu separator-->
                                            <!--begin::Form-->
                        <!--                    <form class="form px-7 py-5" data-kt-menu-id="kt-users-tasks-form">-->
                                                <!--begin::Input group-->
                        <!--                        <div class="fv-row mb-10">-->
                                                    <!--begin::Label-->
                        <!--                            <label class="form-label fs-6 fw-semibold">Status:</label>-->
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                        <!--                            <select class="form-select form-select-solid" name="task_status" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-hide-search="true">-->
                        <!--                                <option></option>-->
                        <!--                                <option value="1">Approved</option>-->
                        <!--                                <option value="2">Pending</option>-->
                        <!--                                <option value="3">In Process</option>-->
                        <!--                                <option value="4">Rejected</option>-->
                        <!--                            </select>-->
                                                    <!--end::Input-->
                        <!--                        </div>-->
                                                <!--end::Input group-->
                                                <!--begin::Actions-->
                        <!--                        <div class="d-flex justify-content-end">-->
                        <!--                            <button type="button" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-users-update-task-status="reset">Reset</button>-->
                        <!--                            <button type="submit" class="btn btn-sm btn-primary" data-kt-users-update-task-status="submit">-->
                        <!--                                <span class="indicator-label">Apply</span>-->
                        <!--                                <span class="indicator-progress">Please wait...-->
                        <!--                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>-->
                        <!--                            </button>-->
                        <!--                        </div>-->
                                                <!--end::Actions-->
                        <!--                    </form>-->
                                            <!--end::Form-->
                        <!--                </div>-->
                                        <!--end::Task menu-->
                                        <!--end::Menu-->
                        <!--            </div>-->
                                    <!--end::Item-->
                                    <!--begin::Item-->
                        <!--            <div class="d-flex align-items-center position-relative mb-7">-->
                                        <!--begin::Label-->
                        <!--                <div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>-->
                                        <!--end::Label-->
                                        <!--begin::Details-->
                        <!--                <div class="fw-semibold ms-5">-->
                        <!--                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary">9 Degree Project Estimation</a>-->
                                            <!--begin::Info-->
                        <!--                    <div class="fs-7 text-muted">Due in 1 week-->
                        <!--                        <a href="#">Neil Owen</a>-->
                        <!--                    </div>-->
                                            <!--end::Info-->
                        <!--                </div>-->
                                        <!--end::Details-->
                                        <!--begin::Menu-->
                        <!--                <button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">-->
                        <!--                    <i class="ki-duotone ki-setting-3 fs-3">-->
                        <!--                        <span class="path1"></span>-->
                        <!--                        <span class="path2"></span>-->
                        <!--                        <span class="path3"></span>-->
                        <!--                        <span class="path4"></span>-->
                        <!--                        <span class="path5"></span>-->
                        <!--                    </i>-->
                        <!--                </button>-->
                                        <!--begin::Task menu-->
                        <!--                <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" data-kt-menu-id="kt-users-tasks">-->
                                            <!--begin::Header-->
                        <!--                    <div class="px-7 py-5">-->
                        <!--                        <div class="fs-5 text-gray-900 fw-bold">Update Status</div>-->
                        <!--                    </div>-->
                                            <!--end::Header-->
                                            <!--begin::Menu separator-->
                        <!--                    <div class="separator border-gray-200"></div>-->
                                            <!--end::Menu separator-->
                                            <!--begin::Form-->
                        <!--                    <form class="form px-7 py-5" data-kt-menu-id="kt-users-tasks-form">-->
                                                <!--begin::Input group-->
                        <!--                        <div class="fv-row mb-10">-->
                                                    <!--begin::Label-->
                        <!--                            <label class="form-label fs-6 fw-semibold">Status:</label>-->
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                        <!--                            <select class="form-select form-select-solid" name="task_status" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-hide-search="true">-->
                        <!--                                <option></option>-->
                        <!--                                <option value="1">Approved</option>-->
                        <!--                                <option value="2">Pending</option>-->
                        <!--                                <option value="3">In Process</option>-->
                        <!--                                <option value="4">Rejected</option>-->
                        <!--                            </select>-->
                                                    <!--end::Input-->
                        <!--                        </div>-->
                                                <!--end::Input group-->
                                                <!--begin::Actions-->
                        <!--                        <div class="d-flex justify-content-end">-->
                        <!--                            <button type="button" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-users-update-task-status="reset">Reset</button>-->
                        <!--                            <button type="submit" class="btn btn-sm btn-primary" data-kt-users-update-task-status="submit">-->
                        <!--                                <span class="indicator-label">Apply</span>-->
                        <!--                                <span class="indicator-progress">Please wait...-->
                        <!--                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>-->
                        <!--                            </button>-->
                        <!--                        </div>-->
                                                <!--end::Actions-->
                        <!--                    </form>-->
                                            <!--end::Form-->
                        <!--                </div>-->
                                        <!--end::Task menu-->
                                        <!--end::Menu-->
                        <!--            </div>-->
                                    <!--end::Item-->
                                    <!--begin::Item-->
                        <!--            <div class="d-flex align-items-center position-relative mb-7">-->
                                        <!--begin::Label-->
                        <!--                <div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>-->
                                        <!--end::Label-->
                                        <!--begin::Details-->
                        <!--                <div class="fw-semibold ms-5">-->
                        <!--                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary">Dashboard UI & UX for Leafr CRM</a>-->
                                            <!--begin::Info-->
                        <!--                    <div class="fs-7 text-muted">Due in 1 week-->
                        <!--                        <a href="#">Olivia Wild</a>-->
                        <!--                    </div>-->
                                            <!--end::Info-->
                        <!--                </div>-->
                                        <!--end::Details-->
                                        <!--begin::Menu-->
                        <!--                <button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">-->
                        <!--                    <i class="ki-duotone ki-setting-3 fs-3">-->
                        <!--                        <span class="path1"></span>-->
                        <!--                        <span class="path2"></span>-->
                        <!--                        <span class="path3"></span>-->
                        <!--                        <span class="path4"></span>-->
                        <!--                        <span class="path5"></span>-->
                        <!--                    </i>-->
                        <!--                </button>-->
                                        <!--begin::Task menu-->
                        <!--                <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" data-kt-menu-id="kt-users-tasks">-->
                                            <!--begin::Header-->
                        <!--                    <div class="px-7 py-5">-->
                        <!--                        <div class="fs-5 text-gray-900 fw-bold">Update Status</div>-->
                        <!--                    </div>-->
                                            <!--end::Header-->
                                            <!--begin::Menu separator-->
                        <!--                    <div class="separator border-gray-200"></div>-->
                                            <!--end::Menu separator-->
                                            <!--begin::Form-->
                        <!--                    <form class="form px-7 py-5" data-kt-menu-id="kt-users-tasks-form">-->
                                                <!--begin::Input group-->
                        <!--                        <div class="fv-row mb-10">-->
                                                    <!--begin::Label-->
                        <!--                            <label class="form-label fs-6 fw-semibold">Status:</label>-->
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                        <!--                            <select class="form-select form-select-solid" name="task_status" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-hide-search="true">-->
                        <!--                                <option></option>-->
                        <!--                                <option value="1">Approved</option>-->
                        <!--                                <option value="2">Pending</option>-->
                        <!--                                <option value="3">In Process</option>-->
                        <!--                                <option value="4">Rejected</option>-->
                        <!--                            </select>-->
                                                    <!--end::Input-->
                        <!--                        </div>-->
                                                <!--end::Input group-->
                                                <!--begin::Actions-->
                        <!--                        <div class="d-flex justify-content-end">-->
                        <!--                            <button type="button" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-users-update-task-status="reset">Reset</button>-->
                        <!--                            <button type="submit" class="btn btn-sm btn-primary" data-kt-users-update-task-status="submit">-->
                        <!--                                <span class="indicator-label">Apply</span>-->
                        <!--                                <span class="indicator-progress">Please wait...-->
                        <!--                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>-->
                        <!--                            </button>-->
                        <!--                        </div>-->
                                                <!--end::Actions-->
                        <!--                    </form>-->
                                            <!--end::Form-->
                        <!--                </div>-->
                                        <!--end::Task menu-->
                                        <!--end::Menu-->
                        <!--            </div>-->
                                    <!--end::Item-->
                                    <!--begin::Item-->
                        <!--            <div class="d-flex align-items-center position-relative">-->
                                        <!--begin::Label-->
                        <!--                <div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>-->
                                        <!--end::Label-->
                                        <!--begin::Details-->
                        <!--                <div class="fw-semibold ms-5">-->
                        <!--                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary">Mivy App R&D, Meeting with clients</a>-->
                                            <!--begin::Info-->
                        <!--                    <div class="fs-7 text-muted">Due in 2 weeks-->
                        <!--                        <a href="#">Sean Bean</a>-->
                        <!--                    </div>-->
                                            <!--end::Info-->
                        <!--                </div>-->
                                        <!--end::Details-->
                                        <!--begin::Menu-->
                        <!--                <button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">-->
                        <!--                    <i class="ki-duotone ki-setting-3 fs-3">-->
                        <!--                        <span class="path1"></span>-->
                        <!--                        <span class="path2"></span>-->
                        <!--                        <span class="path3"></span>-->
                        <!--                        <span class="path4"></span>-->
                        <!--                        <span class="path5"></span>-->
                        <!--                    </i>-->
                        <!--                </button>-->
                                        <!--begin::Task menu-->
                        <!--                <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" data-kt-menu-id="kt-users-tasks">-->
                                            <!--begin::Header-->
                        <!--                    <div class="px-7 py-5">-->
                        <!--                        <div class="fs-5 text-gray-900 fw-bold">Update Status</div>-->
                        <!--                    </div>-->
                                            <!--end::Header-->
                                            <!--begin::Menu separator-->
                        <!--                    <div class="separator border-gray-200"></div>-->
                                            <!--end::Menu separator-->
                                            <!--begin::Form-->
                        <!--                    <form class="form px-7 py-5" data-kt-menu-id="kt-users-tasks-form">-->
                                                <!--begin::Input group-->
                        <!--                        <div class="fv-row mb-10">-->
                                                    <!--begin::Label-->
                        <!--                            <label class="form-label fs-6 fw-semibold">Status:</label>-->
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                        <!--                            <select class="form-select form-select-solid" name="task_status" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-hide-search="true">-->
                        <!--                                <option></option>-->
                        <!--                                <option value="1">Approved</option>-->
                        <!--                                <option value="2">Pending</option>-->
                        <!--                                <option value="3">In Process</option>-->
                        <!--                                <option value="4">Rejected</option>-->
                        <!--                            </select>-->
                                                    <!--end::Input-->
                        <!--                        </div>-->
                                                <!--end::Input group-->
                                                <!--begin::Actions-->
                        <!--                        <div class="d-flex justify-content-end">-->
                        <!--                            <button type="button" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-users-update-task-status="reset">Reset</button>-->
                        <!--                            <button type="submit" class="btn btn-sm btn-primary" data-kt-users-update-task-status="submit">-->
                        <!--                                <span class="indicator-label">Apply</span>-->
                        <!--                                <span class="indicator-progress">Please wait...-->
                        <!--                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>-->
                        <!--                            </button>-->
                        <!--                        </div>-->
                                                <!--end::Actions-->
                        <!--                    </form>-->
                                            <!--end::Form-->
                        <!--                </div>-->
                                        <!--end::Task menu-->
                                        <!--end::Menu-->
                        <!--            </div>-->
                                    <!--end::Item-->
                        <!--        </div>-->
                                <!--end::Card body-->
                        <!--    </div>-->
                            <!--end::Tasks-->
                        <!--</div>-->
                        <!--end:::Tab pane-->
                        <!--begin:::Tab pane-->
                        <div class="tab-pane fade show active" id="kt_user_view_overview_security" role="tabpanel">
                            <!--begin::Card-->
                            <div class="card pt-4 mb-6 mb-xl-9 card-custom-bg message-summ">
                                <!--begin::Card header-->
                                <div class="card-header border-0">
                                    <!--begin::Card title-->
                                    <div class="card-title">
                                        <h2 class="fs-color-white custom-fs-23">Profile</h2>
                                    </div>
                                    <!--end::Card title-->
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-0 pb-5">
                                    <!--begin::Table wrapper-->
                                    <div class="table-responsive">
                                        <!--begin::Table-->
                                        <table class="table align-middle table-row-dashed gy-5" id="kt_table_users_login_session">
                                            <tbody class="fs-6 fw-semibold text-gray-600">
                                                <tr>
                                                    <td>Email</td>
                                                    <td>{{ $user->email }}</td>
                                                    <td class="text-end">
                                                        <button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto" data-bs-toggle="modal" data-bs-target="#kt_modal_update_email">
                                                            <i class="ki-duotone ki-pencil fs-3">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Password</td>
                                                    <td>******</td>
                                                    <td class="text-end">
                                                        <button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto" data-bs-toggle="modal" data-bs-target="#kt_modal_update_password">
                                                            <i class="ki-duotone ki-pencil fs-3">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <!--<tr>-->
                                                <!--    <td>Role</td>-->
                                                <!--    <td>Administrator</td>-->
                                                <!--    <td class="text-end">-->
                                                <!--        <button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto" data-bs-toggle="modal" data-bs-target="#kt_modal_update_role">-->
                                                <!--            <i class="ki-duotone ki-pencil fs-3">-->
                                                <!--                <span class="path1"></span>-->
                                                <!--                <span class="path2"></span>-->
                                                <!--            </i>-->
                                                <!--        </button>-->
                                                <!--    </td>-->
                                                <!--</tr>-->
                                            </tbody>
                                        </table>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Table wrapper-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Card-->
                            <!--begin::Card-->
                            <!--<div class="card pt-4 mb-6 mb-xl-9">-->
                                <!--begin::Card header-->
                            <!--    <div class="card-header border-0">-->
                                    <!--begin::Card title-->
                            <!--        <div class="card-title flex-column">-->
                            <!--            <h2 class="mb-1">Two Step Authentication</h2>-->
                            <!--            <div class="fs-6 fw-semibold text-muted">Keep your account extra secure with a second authentication step.</div>-->
                            <!--        </div>-->
                                    <!--end::Card title-->
                                    <!--begin::Card toolbar-->
                            <!--        <div class="card-toolbar">-->
                                        <!--begin::Add-->
                            <!--            <button type="button" class="btn btn-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">-->
                            <!--                <i class="ki-duotone ki-fingerprint-scanning fs-3">-->
                            <!--                    <span class="path1"></span>-->
                            <!--                    <span class="path2"></span>-->
                            <!--                    <span class="path3"></span>-->
                            <!--                    <span class="path4"></span>-->
                            <!--                    <span class="path5"></span>-->
                            <!--                </i>Add Authentication Step</button>-->
                                        <!--begin::Menu-->
                            <!--            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-6 w-200px py-4" data-kt-menu="true">-->
                                            <!--begin::Menu item-->
                            <!--                <div class="menu-item px-3">-->
                            <!--                    <a href="#" class="menu-link px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_add_auth_app">Use authenticator app</a>-->
                            <!--                </div>-->
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                            <!--                <div class="menu-item px-3">-->
                            <!--                    <a href="#" class="menu-link px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_add_one_time_password">Enable one-time password</a>-->
                            <!--                </div>-->
                                            <!--end::Menu item-->
                            <!--            </div>-->
                                        <!--end::Menu-->
                                        <!--end::Add-->
                            <!--        </div>-->
                                    <!--end::Card toolbar-->
                            <!--    </div>-->
                                <!--end::Card header-->
                                <!--begin::Card body-->
                            <!--    <div class="card-body pb-5">-->
                                    <!--begin::Item-->
                            <!--        <div class="d-flex flex-stack">-->
                                        <!--begin::Content-->
                            <!--            <div class="d-flex flex-column">-->
                            <!--                <span>SMS</span>-->
                            <!--                <span class="text-muted fs-6">+61 412 345 678</span>-->
                            <!--            </div>-->
                                        <!--end::Content-->
                                        <!--begin::Action-->
                            <!--            <div class="d-flex justify-content-end align-items-center">-->
                                            <!--begin::Button-->
                            <!--                <button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto me-5" data-bs-toggle="modal" data-bs-target="#kt_modal_add_one_time_password">-->
                            <!--                    <i class="ki-duotone ki-pencil fs-3">-->
                            <!--                        <span class="path1"></span>-->
                            <!--                        <span class="path2"></span>-->
                            <!--                    </i>-->
                            <!--                </button>-->
                                            <!--end::Button-->
                                            <!--begin::Button-->
                            <!--                <button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto" id="kt_users_delete_two_step">-->
                            <!--                    <i class="ki-duotone ki-trash fs-3">-->
                            <!--                        <span class="path1"></span>-->
                            <!--                        <span class="path2"></span>-->
                            <!--                        <span class="path3"></span>-->
                            <!--                        <span class="path4"></span>-->
                            <!--                        <span class="path5"></span>-->
                            <!--                    </i>-->
                            <!--                </button>-->
                                            <!--end::Button-->
                            <!--            </div>-->
                                        <!--end::Action-->
                            <!--        </div>-->
                                    <!--end::Item-->
                                    <!--begin:Separator-->
                            <!--        <div class="separator separator-dashed my-5"></div>-->
                                    <!--end:Separator-->
                                    <!--begin::Disclaimer-->
                            <!--        <div class="text-gray-600">If you lose your mobile device or security key, you can-->
                            <!--            <a href='#' class="me-1">generate a backup code</a>to sign in to your account.-->
                            <!--        </div>-->
                                    <!--end::Disclaimer-->
                            <!--    </div>-->
                                <!--end::Card body-->
                            <!--</div>-->
                            <!--end::Card-->
                            <!--begin::Card-->
                            <!--<div class="card pt-4 mb-6 mb-xl-9">-->
                                <!--begin::Card header-->
                            <!--    <div class="card-header border-0">-->
                                    <!--begin::Card title-->
                            <!--        <div class="card-title flex-column">-->
                            <!--            <h2>Email Notifications</h2>-->
                            <!--            <div class="fs-6 fw-semibold text-muted">Choose what messages you’d like to receive for each of your accounts.</div>-->
                            <!--        </div>-->
                                    <!--end::Card title-->
                            <!--    </div>-->
                                <!--end::Card header-->
                                <!--begin::Card body-->
                            <!--    <div class="card-body">-->
                                    <!--begin::Form-->
                            <!--        <form class="form" id="kt_users_email_notification_form">-->
                                        <!--begin::Item-->
                            <!--            <div class="d-flex">-->
                                            <!--begin::Checkbox-->
                            <!--                <div class="form-check form-check-custom form-check-solid">-->
                                                <!--begin::Input-->
                            <!--                    <input class="form-check-input me-3" name="email_notification_0" type="checkbox" value="0" id="kt_modal_update_email_notification_0" checked='checked' />-->
                                                <!--end::Input-->
                                                <!--begin::Label-->
                            <!--                    <label class="form-check-label" for="kt_modal_update_email_notification_0">-->
                            <!--                        <div class="fw-bold">New Order</div>-->
                            <!--                        <div class="text-gray-600">Receive a notification for every New Order.</div>-->
                            <!--                    </label>-->
                                                <!--end::Label-->
                            <!--                </div>-->
                                            <!--end::Checkbox-->
                            <!--            </div>-->
                                        <!--end::Item-->
                            <!--            <div class='separator separator-dashed my-5'></div>-->
                                        <!--begin::Item-->
                            <!--            <div class="d-flex">-->
                                            <!--begin::Checkbox-->
                            <!--                <div class="form-check form-check-custom form-check-solid">-->
                                                <!--begin::Input-->
                            <!--                    <input class="form-check-input me-3" name="email_notification_1" type="checkbox" value="1" id="kt_modal_update_email_notification_1" />-->
                                                <!--end::Input-->
                                                <!--begin::Label-->
                            <!--                    <label class="form-check-label" for="kt_modal_update_email_notification_1">-->
                            <!--                        <div class="fw-bold">New Subscription</div>-->
                            <!--                        <div class="text-gray-600">Receive a notification for every New Subscription.</div>-->
                            <!--                    </label>-->
                                                <!--end::Label-->
                            <!--                </div>-->
                                            <!--end::Checkbox-->
                            <!--            </div>-->
                                        <!--end::Item-->
                            <!--            <div class='separator separator-dashed my-5'></div>-->
                                        <!--begin::Item-->
                            <!--            <div class="d-flex">-->
                                            <!--begin::Checkbox-->
                            <!--                <div class="form-check form-check-custom form-check-solid">-->
                                                <!--begin::Input-->
                            <!--                    <input class="form-check-input me-3" name="email_notification_2" type="checkbox" value="2" id="kt_modal_update_email_notification_2" />-->
                                                <!--end::Input-->
                                                <!--begin::Label-->
                            <!--                    <label class="form-check-label" for="kt_modal_update_email_notification_2">-->
                            <!--                        <div class="fw-bold">New Message From Customer</div>-->
                            <!--                        <div class="text-gray-600">Receive a notification each message.</div>-->
                            <!--                    </label>-->
                                                <!--end::Label-->
                            <!--                </div>-->
                                            <!--end::Checkbox-->
                            <!--            </div>-->
                                        <!--end::Item-->
                            <!--            <div class='separator separator-dashed my-5'></div>-->
                                        <!--begin::Item-->
                            <!--            <div class="d-flex">-->
                                            <!--begin::Checkbox-->
                            <!--                <div class="form-check form-check-custom form-check-solid">-->
                                                <!--begin::Input-->
                            <!--                    <input class="form-check-input me-3" name="email_notification_3" type="checkbox" value="3" id="kt_modal_update_email_notification_3" checked='checked' />-->
                                                <!--end::Input-->
                                                <!--begin::Label-->
                            <!--                    <label class="form-check-label" for="kt_modal_update_email_notification_3">-->
                            <!--                        <div class="fw-bold">New Files From Customer</div>-->
                            <!--                        <div class="text-gray-600">Receive a notification New Files.</div>-->
                            <!--                    </label>-->
                                                <!--end::Label-->
                            <!--                </div>-->
                                            <!--end::Checkbox-->
                            <!--            </div>-->

                                        <!--begin::Action buttons-->
                            <!--            <div class="d-flex justify-content-end align-items-center mt-12">-->
                                            <!--begin::Button-->
                            <!--                <button type="button" class="btn btn-light me-5" id="kt_users_email_notification_cancel">Cancel</button>-->
                                            <!--end::Button-->
                                            <!--begin::Button-->
                            <!--                <button type="button" class="btn btn-primary" id="kt_users_email_notification_submit">-->
                            <!--                    <span class="indicator-label">Save</span>-->
                            <!--                    <span class="indicator-progress">Please wait...-->
                            <!--                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>-->
                            <!--                </button>-->
                                            <!--end::Button-->
                            <!--            </div>-->
                                        <!--begin::Action buttons-->
                            <!--        </form>-->
                                    <!--end::Form-->
                            <!--    </div>-->
                                <!--end::Card body-->
                                <!--begin::Card footer-->
                                <!--end::Card footer-->
                            <!--</div>-->
                            <!--end::Card-->
                        </div>
                        <!--end:::Tab pane-->
                        <!--begin:::Tab pane-->
                        <div class="tab-pane fade" id="kt_user_view_overview_events_and_logs_tab" role="tabpanel">
                            <!--begin::Card-->
                            <div class="card pt-4 mb-6 mb-xl-9 card-custom-bg">
                                <!--begin::Card header-->
                                <div class="card-header border-0">
                                    <!--begin::Card title-->
                                    <div class="card-title">
                                        <h2 class="fs-color-white custom-fs-23">Login Sessions</h2>
                                    </div>
                                    <!--end::Card title-->
                                    <!--begin::Card toolbar-->
                                    <div class="card-toolbar">
                                        <!--begin::Filter-->
                                        <!--<button type="button" class="btn btn-sm btn-flex btn-light-primary" id="kt_modal_sign_out_sesions">-->
                                        <!--    <i class="ki-duotone ki-entrance-right fs-3">-->
                                        <!--        <span class="path1"></span>-->
                                        <!--        <span class="path2"></span>-->
                                        <!--    </i>Sign out all sessions</button>-->
                                        <!--end::Filter-->
                                    </div>
                                    <!--end::Card toolbar-->
                                </div>
                                <!--end::Card header-->
                           
                                <!--begin::Card body-->
                                <div class="card-body pt-0 pb-5">
                                    <!--begin::Table wrapper-->
                                    @php $sessions = sessionsDetails() @endphp
                                    @if ($sessions->isNotEmpty())
                                    <div class="table-responsive">
                                        <!--begin::Table-->
                                        <table class="table align-middle table-row-dashed gy-5" id="kt_table_users_login_session">
                                            <thead class="border-bottom border-gray-200 fs-7 fw-bold">
                                                <tr class="text-start text-muted text-uppercase gs-0">
                                                    <th class="min-w-100px">Location</th>
                                                    <th>Device</th>
                                                    <th>IP Address</th>
                                                    <th class="min-w-125px">Time</th>
                                                    <th class="min-w-70px">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody class="fs-6 fw-semibold text-gray-600">
                                                @foreach ($sessions as $se )
                                                    <tr>
                                                        <td class="text-white">
                                                            {{ $se->location == null ? 'Australia' : $se->location }}
                                                        </td>
                                                        <td class="text-white">
                                                            {{ $se->device == null ? 'Chome - Windows' : $se->device }}
                                                        </td>
                                                        <td class="text-white">
                                                            {{ $se->ip_address == null ? '207.36.41.285' : $se->ip_address }}
                                                             {{ $se->ip_address }} 
                                                        </td>
                                                        <td class="text-white">
                                                            {{ $se->time ? $se->time->diffForHumans() : 'N/a' }} 
                                                        </td>
                                                       
                                                        <td class="text-white">
                                                        @if ($se->is_logout == 1)
                                                            <a class="text-white" href="{{ route('admin.destroy.single.session', ['user_id' => $se->user_id]) }}" 
                                                            data-kt-users-sign-out="single_user"
                                                            >Sign out (Current session logged in)</a>
                                                        @else 
                                                            <span>Expired</span>
                                                        @endif
                                                        
                                                        
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                {{-- <tr>
                                                    <td>Australia</td>
                                                    <td>Chome - Windows</td>
                                                    <td>207.36.41.285</td>
                                                    <td>23 seconds ago</td>
                                                    <td>Current session</td>
                                                </tr>
                                                <tr>
                                                    <td>Australia</td>
                                                    <td>Safari - iOS</td>
                                                    <td>207.35.28.179</td>
                                                    <td>3 days ago</td>
                                                    <td>
                                                        <a href="#" data-kt-users-sign-out="single_user">Sign out</a>
                                                    </td>
                                                </tr> --}}
                                               
                                            </tbody>
                                        </table>
                                        <!--end::Table-->
                                    </div>
                                        
                                    @endif
                                    <!--end::Table wrapper-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end:::Tab pane-->
                    </div>
                    <!--end:::Tab content-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Layout-->
            <!--begin::Modals-->
             <!--begin::Modal - Update user details-->
                <div class="modal" id="kt_modal_update_details" tabindex="-1" aria-hidden="true">
                    <!--begin::Modal dialog-->
                    <div class="modal-dialog modal-dialog-centered mw-650px">
                        <!--begin::Modal content-->
                        <div class="modal-content badge-custom-bg">
                            <!--begin::Form-->
                            <form class="form" id="kt_modal_update_user_form" enctype="multipart/form-data">
                                @csrf
                                <!--begin::Modal header-->
                                <div class="modal-header" id="kt_modal_update_user_header">
                                    <!--begin::Modal title-->
                                    <h2 class="fw-bold fs-color-white custom-fs-23">Update User Details</h2>
                                    <!--end::Modal title-->
                                    <!--begin::Close-->
                                    <div class="btn btn-icon btn-sm btn-dark-primary" data-bs-dismiss="modal" aria-label="Close">
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
                                    <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_update_user_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_update_user_header" data-kt-scroll-wrappers="#kt_modal_update_user_scroll" data-kt-scroll-offset="300px">
                                        <!--begin::User toggle-->
                                        <div class="fw-bolder fs-3 rotate collapsible mb-7" data-bs-toggle="collapse" href="#kt_modal_update_user_user_info" role="button" aria-expanded="false" aria-controls="kt_modal_update_user_user_info">User Information
                                            <span class="ms-2 rotate-180">
                                                <i class="ki-duotone ki-down fs-3"></i>
                                            </span>
                                        </div>
                                        <!--end::User toggle-->
                                        <!--begin::User form-->
                                        <div id="kt_modal_update_user_user_info" class="collapse show">
                                            <!--begin::Input group-->
                                            <div class="mb-7">
                                                <!--begin::Label-->
                                                <label class="fs-6 fw-semibold mb-2">
                                                    <span>Update Avatar</span>
                                                    <span class="ms-1" data-bs-toggle="tooltip" title="Allowed file types: png, jpg, jpeg.">
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
                                                    <!--begin::Image placeholder-->
                                                    <style>
                                                        .image-input-placeholder {
                                                            background-image: url("{{ asset('backend/assets/media/svg/avatars/blank.svg') }}");
                                                        }
                                                    
                                                        [data-bs-theme="dark"] .image-input-placeholder {
                                                            background-image: url("{{ asset('backend/assets/media/svg/avatars/blank-dark.svg') }}");
                                                        }
                                                    </style>
                                                    
                                                    <!--end::Image placeholder-->
                                                    <!--begin::Image input-->
                                                    <div class="image-input image-input-outline image-input-placeholder" data-kt-image-input="true">
                                                        
                                                        <!--begin::Preview existing avatar-->
                                                    
                                                        @if ($user->avatar)
                                                            <div class="image-input-wrapper w-125px h-125px" style="background-image: url('{{asset('images/users/admins/'. $user->avatar)}}')"></div>
                                                        
                                                        @else
                                                        <div class="image-input-wrapper w-125px h-125px" style="background-image: url('{{ asset('backend/assets/media/ws/profile.png') }}')"></div>
                                                        @endif


                                                        
                                                        <!--end::Preview existing avatar-->

                                                        <!--begin::Edit-->
                                                        <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                                            <i class="ki-duotone ki-pencil fs-7">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        
                                                            <!--begin::Inputs-->
                                                            <input type="file" name="avatar" value="{{ $user->avatar }}" accept=".png, .jpg, .jpeg" />
                                                            <input type="hidden" name="avatar_remove" />
                                                            <!--end::Inputs-->
                                                        </label>
                                                        <!--end::Edit-->
                                                        <!--begin::Cancel-->
                                                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                                            <i class="ki-duotone ki-cross fs-2">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </span>
                                                        <!--end::Cancel-->
                                                        <!--begin::Remove-->
                                                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
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
                                                <label class="fs-6 fw-semibold mb-2">Name</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input type="text" class="form-control form-control-solid btn-dark-primary" placeholder="" name="name" value="{{ old('name', $user->name) }}" />
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="fv-row mb-7">
                                                <!--begin::Label-->
                                                <label class="fs-6 fw-semibold mb-2">
                                                    <span>Email</span>
                                                    <span class="ms-1" data-bs-toggle="tooltip" title="Email address must be active">
                                                        <i class="ki-duotone ki-information fs-7">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            <span class="path3"></span>
                                                        </i>
                                                    </span>
                                                </label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input type="email" class="form-control form-control-solid btn-dark-primary" placeholder="" name="email" value="{{ old('email', $user->email) }}"/>
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="fv-row mb-7">
                                                <!--begin::Label-->
                                                <label class="fs-6 fw-semibold mb-2">Description</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input type="text" class="form-control form-control-solid btn-dark-primary" placeholder="" name="description" value="{{ old('description', $user->description) }}"/>
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="fv-row mb-15">
                                                <!--begin::Label-->
                                                <label class="fs-6 fw-semibold mb-2">Language</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <select name="language" aria-label="Select a Language" data-control="select2" data-placeholder="Select a Language..." class="form-select form-select-solid btn-dark-primary" data-dropdown-parent="#kt_modal_update_details">
                                                    <option></option>
                                                    <option value="id">Bahasa Indonesia - Indonesian</option>
                                                    <option value="msa">Bahasa Melayu - Malay</option>
                                                    <option value="ca">Català - Catalan</option>
                                                    <option value="cs">Čeština - Czech</option>
                                                    <option value="da">Dansk - Danish</option>
                                                    <option value="de">Deutsch - German</option>
                                                    <option value="en">English</option>
                                                    <option value="en-gb">English UK - British English</option>
                                                    <option value="es">Español - Spanish</option>
                                                    <option value="fil">Filipino</option>
                                                    <option value="fr">Français - French</option>
                                                    <option value="ga">Gaeilge - Irish (beta)</option>
                                                    <option value="gl">Galego - Galician (beta)</option>
                                                    <option value="hr">Hrvatski - Croatian</option>
                                                    <option value="it">Italiano - Italian</option>
                                                    <option value="hu">Magyar - Hungarian</option>
                                                    <option value="nl">Nederlands - Dutch</option>
                                                    <option value="no">Norsk - Norwegian</option>
                                                    <option value="pl">Polski - Polish</option>
                                                    <option value="pt">Português - Portuguese</option>
                                                    <option value="ro">Română - Romanian</option>
                                                    <option value="sk">Slovenčina - Slovak</option>
                                                    <option value="fi">Suomi - Finnish</option>
                                                    <option value="sv">Svenska - Swedish</option>
                                                    <option value="vi">Tiếng Việt - Vietnamese</option>
                                                    <option value="tr">Türkçe - Turkish</option>
                                                    <option value="el">Ελληνικά - Greek</option>
                                                    <option value="bg">Български език - Bulgarian</option>
                                                    <option value="ru">Русский - Russian</option>
                                                    <option value="sr">Српски - Serbian</option>
                                                    <option value="uk">Українська мова - Ukrainian</option>
                                                    <option value="he">עִבְרִית - Hebrew</option>
                                                    <option value="ur">اردو - Urdu (beta)</option>
                                                    <option value="ar">العربية - Arabic</option>
                                                    <option value="fa">فارسی - Persian</option>
                                                    <option value="mr">मराठी - Marathi</option>
                                                    <option value="hi">हिन्दी - Hindi</option>
                                                    <option value="bn">বাংলা - Bangla</option>
                                                    <option value="gu">ગુજરાતી - Gujarati</option>
                                                    <option value="ta">தமிழ் - Tamil</option>
                                                    <option value="kn">ಕನ್ನಡ - Kannada</option>
                                                    <option value="th">ภาษาไทย - Thai</option>
                                                    <option value="ko">한국어 - Korean</option>
                                                    <option value="ja">日本語 - Japanese</option>
                                                    <option value="zh-cn">简体中文 - Simplified Chinese</option>
                                                    <option value="zh-tw">繁體中文 - Traditional Chinese</option>
                                                </select>
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->
                                        </div>
                                        <!--end::User form-->
                                        <!--begin::Address toggle-->
                                        <div class="fw-bolder fs-3 rotate collapsible mb-7 fs-color-white custom-fs-17" data-bs-toggle="collapse" href="#kt_modal_update_user_address" role="button" aria-expanded="false" aria-controls="kt_modal_update_user_address">Address Details
                                            <span class="ms-2 rotate-180">
                                                <i class="ki-duotone ki-down fs-3"></i>
                                            </span>
                                        </div>
                                        <!--end::Address toggle-->
                                        <!--begin::Address form-->
                                        <div id="kt_modal_update_user_address" class="collapse show">
                                            <!--begin::Input group-->
                                            <div class="d-flex flex-column mb-7 fv-row">
                                                <!--begin::Label-->
                                                <label class="fs-6 fw-semibold mb-2 ">Address Line 1</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input class="form-control form-control-solid btn-dark-primary" placeholder="" name="address_1" value="{{ old('address_1', $user->address_1) }}" />
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="d-flex flex-column mb-7 fv-row">
                                                <!--begin::Label-->
                                                <label class="fs-6 fw-semibold mb-2">Address Line 2</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input class="form-control form-control-solid btn-dark-primary" placeholder="" name="address_2" value="{{ old('address_2', $user->address_2) }}"/>
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="d-flex flex-column mb-7 fv-row">
                                                <!--begin::Label-->
                                                <label class="fs-6 fw-semibold mb-2">Town</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input class="form-control form-control-solid btn-dark-primary" placeholder="" name="city" value="{{ old('city', $user->city) }}"/>
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="row g-9 mb-7">
                                                <!--begin::Col-->
                                                <div class="col-md-6 fv-row">
                                                    <!--begin::Label-->
                                                    <label class="fs-6 fw-semibold mb-2">State / Province</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input class="form-control form-control-solid btn-dark-primary" placeholder="" name="state" value="{{ old('state', $user->state) }}" />
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-md-6 fv-row">
                                                    <!--begin::Label-->
                                                    <label class="fs-6 fw-semibold mb-2">Post Code</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input class="form-control form-control-solid btn-dark-primary" placeholder="" name="postcode" value="{{ old('postcode', $user->postcode) }}" />
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="d-flex flex-column mb-7 fv-row">
                                                <!--begin::Label-->
                                                <label class="fs-6 fw-semibold mb-2">
                                                    <span>Country</span>
                                                    <span class="ms-1" data-bs-toggle="tooltip" title="Country of origination">
                                                        <i class="ki-duotone ki-information fs-7">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            <span class="path3"></span>
                                                        </i>
                                                    </span>
                                                </label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <select name="country" aria-label="Select a Country" data-control="select2" data-placeholder="Select a Country..." class="form-select form-select-solid btn-dark-primary" data-dropdown-parent="#kt_modal_update_details">
                                                    <option value="">Select a Country...</option>
                                                    <option value="AF">Afghanistan</option>
                                                    <option value="AX">Aland Islands</option>
                                                    <option value="AL">Albania</option>
                                                    <option value="DZ">Algeria</option>
                                                    <option value="AS">American Samoa</option>
                                                    <option value="AD">Andorra</option>
                                                    <option value="AO">Angola</option>
                                                    <option value="AI">Anguilla</option>
                                                    <option value="AG">Antigua and Barbuda</option>
                                                    <option value="AR">Argentina</option>
                                                    <option value="AM">Armenia</option>
                                                    <option value="AW">Aruba</option>
                                                    <option value="AU">Australia</option>
                                                    <option value="AT">Austria</option>
                                                    <option value="AZ">Azerbaijan</option>
                                                    <option value="BS">Bahamas</option>
                                                    <option value="BH">Bahrain</option>
                                                    <option value="BD">Bangladesh</option>
                                                    <option value="BB">Barbados</option>
                                                    <option value="BY">Belarus</option>
                                                    <option value="BE">Belgium</option>
                                                    <option value="BZ">Belize</option>
                                                    <option value="BJ">Benin</option>
                                                    <option value="BM">Bermuda</option>
                                                    <option value="BT">Bhutan</option>
                                                    <option value="BO">Bolivia, Plurinational State of</option>
                                                    <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                                    <option value="BA">Bosnia and Herzegovina</option>
                                                    <option value="BW">Botswana</option>
                                                    <option value="BR">Brazil</option>
                                                    <option value="IO">British Indian Ocean Territory</option>
                                                    <option value="BN">Brunei Darussalam</option>
                                                    <option value="BG">Bulgaria</option>
                                                    <option value="BF">Burkina Faso</option>
                                                    <option value="BI">Burundi</option>
                                                    <option value="KH">Cambodia</option>
                                                    <option value="CM">Cameroon</option>
                                                    <option value="CA">Canada</option>
                                                    <option value="CV">Cape Verde</option>
                                                    <option value="KY">Cayman Islands</option>
                                                    <option value="CF">Central African Republic</option>
                                                    <option value="TD">Chad</option>
                                                    <option value="CL">Chile</option>
                                                    <option value="CN">China</option>
                                                    <option value="CX">Christmas Island</option>
                                                    <option value="CC">Cocos (Keeling) Islands</option>
                                                    <option value="CO">Colombia</option>
                                                    <option value="KM">Comoros</option>
                                                    <option value="CK">Cook Islands</option>
                                                    <option value="CR">Costa Rica</option>
                                                    <option value="CI">Côte d'Ivoire</option>
                                                    <option value="HR">Croatia</option>
                                                    <option value="CU">Cuba</option>
                                                    <option value="CW">Curaçao</option>
                                                    <option value="CZ">Czech Republic</option>
                                                    <option value="DK">Denmark</option>
                                                    <option value="DJ">Djibouti</option>
                                                    <option value="DM">Dominica</option>
                                                    <option value="DO">Dominican Republic</option>
                                                    <option value="EC">Ecuador</option>
                                                    <option value="EG">Egypt</option>
                                                    <option value="SV">El Salvador</option>
                                                    <option value="GQ">Equatorial Guinea</option>
                                                    <option value="ER">Eritrea</option>
                                                    <option value="EE">Estonia</option>
                                                    <option value="ET">Ethiopia</option>
                                                    <option value="FK">Falkland Islands (Malvinas)</option>
                                                    <option value="FJ">Fiji</option>
                                                    <option value="FI">Finland</option>
                                                    <option value="FR">France</option>
                                                    <option value="PF">French Polynesia</option>
                                                    <option value="GA">Gabon</option>
                                                    <option value="GM">Gambia</option>
                                                    <option value="GE">Georgia</option>
                                                    <option value="DE">Germany</option>
                                                    <option value="GH">Ghana</option>
                                                    <option value="GI">Gibraltar</option>
                                                    <option value="GR">Greece</option>
                                                    <option value="GL">Greenland</option>
                                                    <option value="GD">Grenada</option>
                                                    <option value="GU">Guam</option>
                                                    <option value="GT">Guatemala</option>
                                                    <option value="GG">Guernsey</option>
                                                    <option value="GN">Guinea</option>
                                                    <option value="GW">Guinea-Bissau</option>
                                                    <option value="HT">Haiti</option>
                                                    <option value="VA">Holy See (Vatican City State)</option>
                                                    <option value="HN">Honduras</option>
                                                    <option value="HK">Hong Kong</option>
                                                    <option value="HU">Hungary</option>
                                                    <option value="IS">Iceland</option>
                                                    <option value="IN">India</option>
                                                    <option value="ID">Indonesia</option>
                                                    <option value="IR">Iran, Islamic Republic of</option>
                                                    <option value="IQ">Iraq</option>
                                                    <option value="IE">Ireland</option>
                                                    <option value="IM">Isle of Man</option>
                                                    <option value="IL">Israel</option>
                                                    <option value="IT">Italy</option>
                                                    <option value="JM">Jamaica</option>
                                                    <option value="JP">Japan</option>
                                                    <option value="JE">Jersey</option>
                                                    <option value="JO">Jordan</option>
                                                    <option value="KZ">Kazakhstan</option>
                                                    <option value="KE">Kenya</option>
                                                    <option value="KI">Kiribati</option>
                                                    <option value="KP">Korea, Democratic People's Republic of</option>
                                                    <option value="KW">Kuwait</option>
                                                    <option value="KG">Kyrgyzstan</option>
                                                    <option value="LA">Lao People's Democratic Republic</option>
                                                    <option value="LV">Latvia</option>
                                                    <option value="LB">Lebanon</option>
                                                    <option value="LS">Lesotho</option>
                                                    <option value="LR">Liberia</option>
                                                    <option value="LY">Libya</option>
                                                    <option value="LI">Liechtenstein</option>
                                                    <option value="LT">Lithuania</option>
                                                    <option value="LU">Luxembourg</option>
                                                    <option value="MO">Macao</option>
                                                    <option value="MG">Madagascar</option>
                                                    <option value="MW">Malawi</option>
                                                    <option value="MY">Malaysia</option>
                                                    <option value="MV">Maldives</option>
                                                    <option value="ML">Mali</option>
                                                    <option value="MT">Malta</option>
                                                    <option value="MH">Marshall Islands</option>
                                                    <option value="MQ">Martinique</option>
                                                    <option value="MR">Mauritania</option>
                                                    <option value="MU">Mauritius</option>
                                                    <option value="MX">Mexico</option>
                                                    <option value="FM">Micronesia, Federated States of</option>
                                                    <option value="MD">Moldova, Republic of</option>
                                                    <option value="MC">Monaco</option>
                                                    <option value="MN">Mongolia</option>
                                                    <option value="ME">Montenegro</option>
                                                    <option value="MS">Montserrat</option>
                                                    <option value="MA">Morocco</option>
                                                    <option value="MZ">Mozambique</option>
                                                    <option value="MM">Myanmar</option>
                                                    <option value="NA">Namibia</option>
                                                    <option value="NR">Nauru</option>
                                                    <option value="NP">Nepal</option>
                                                    <option value="NL">Netherlands</option>
                                                    <option value="NZ">New Zealand</option>
                                                    <option value="NI">Nicaragua</option>
                                                    <option value="NE">Niger</option>
                                                    <option value="NG">Nigeria</option>
                                                    <option value="NU">Niue</option>
                                                    <option value="NF">Norfolk Island</option>
                                                    <option value="MP">Northern Mariana Islands</option>
                                                    <option value="NO">Norway</option>
                                                    <option value="OM">Oman</option>
                                                    <option value="PK">Pakistan</option>
                                                    <option value="PW">Palau</option>
                                                    <option value="PS">Palestinian Territory, Occupied</option>
                                                    <option value="PA">Panama</option>
                                                    <option value="PG">Papua New Guinea</option>
                                                    <option value="PY">Paraguay</option>
                                                    <option value="PE">Peru</option>
                                                    <option value="PH">Philippines</option>
                                                    <option value="PL">Poland</option>
                                                    <option value="PT">Portugal</option>
                                                    <option value="PR">Puerto Rico</option>
                                                    <option value="QA">Qatar</option>
                                                    <option value="RO">Romania</option>
                                                    <option value="RU">Russian Federation</option>
                                                    <option value="RW">Rwanda</option>
                                                    <option value="BL">Saint Barthélemy</option>
                                                    <option value="KN">Saint Kitts and Nevis</option>
                                                    <option value="LC">Saint Lucia</option>
                                                    <option value="MF">Saint Martin (French part)</option>
                                                    <option value="VC">Saint Vincent and the Grenadines</option>
                                                    <option value="WS">Samoa</option>
                                                    <option value="SM">San Marino</option>
                                                    <option value="ST">Sao Tome and Principe</option>
                                                    <option value="SA">Saudi Arabia</option>
                                                    <option value="SN">Senegal</option>
                                                    <option value="RS">Serbia</option>
                                                    <option value="SC">Seychelles</option>
                                                    <option value="SL">Sierra Leone</option>
                                                    <option value="SG">Singapore</option>
                                                    <option value="SX">Sint Maarten (Dutch part)</option>
                                                    <option value="SK">Slovakia</option>
                                                    <option value="SI">Slovenia</option>
                                                    <option value="SB">Solomon Islands</option>
                                                    <option value="SO">Somalia</option>
                                                    <option value="ZA">South Africa</option>
                                                    <option value="KR">South Korea</option>
                                                    <option value="SS">South Sudan</option>
                                                    <option value="ES">Spain</option>
                                                    <option value="LK">Sri Lanka</option>
                                                    <option value="SD">Sudan</option>
                                                    <option value="SR">Suriname</option>
                                                    <option value="SZ">Swaziland</option>
                                                    <option value="SE">Sweden</option>
                                                    <option value="CH">Switzerland</option>
                                                    <option value="SY">Syrian Arab Republic</option>
                                                    <option value="TW">Taiwan, Province of China</option>
                                                    <option value="TJ">Tajikistan</option>
                                                    <option value="TZ">Tanzania, United Republic of</option>
                                                    <option value="TH">Thailand</option>
                                                    <option value="TG">Togo</option>
                                                    <option value="TK">Tokelau</option>
                                                    <option value="TO">Tonga</option>
                                                    <option value="TT">Trinidad and Tobago</option>
                                                    <option value="TN">Tunisia</option>
                                                    <option value="TR">Turkey</option>
                                                    <option value="TM">Turkmenistan</option>
                                                    <option value="TC">Turks and Caicos Islands</option>
                                                    <option value="TV">Tuvalu</option>
                                                    <option value="UG">Uganda</option>
                                                    <option value="UA">Ukraine</option>
                                                    <option value="AE">United Arab Emirates</option>
                                                    <option value="GB">United Kingdom</option>
                                                    <option value="US">United States</option>
                                                    <option value="UY">Uruguay</option>
                                                    <option value="UZ">Uzbekistan</option>
                                                    <option value="VU">Vanuatu</option>
                                                    <option value="VE">Venezuela, Bolivarian Republic of</option>
                                                    <option value="VN">Vietnam</option>
                                                    <option value="VI">Virgin Islands</option>
                                                    <option value="YE">Yemen</option>
                                                    <option value="ZM">Zambia</option>
                                                    <option value="ZW">Zimbabwe</option>
                                                </select>
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->
                                        </div>
                                        <!--end::Address form-->
                                    </div>
                                    <!--end::Scroll-->
                                </div>
                                <!--end::Modal body-->
                                <!--begin::Modal footer-->
                                <div class="modal-footer flex-center">
                                    <!--begin::Button-->
                                    <button type="reset" class="btn btn-light me-3 btn-dark-primary" data-bs-dismiss="modal">Discard</button>
                                    <!--end::Button-->
                                    <!--begin::Button-->
                                    <button type="button" class="btn btn-primary updateUserDetails btn-dark-primary" data-kt-users-modal-action="submit">
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
                <!--end::Modal - Update user details-->

            
           
            {{-- <!--begin::Modal - Add schedule-->
            <div class="modal fade" id="kt_modal_add_schedule" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-650px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Modal header-->
                        <div class="modal-header">
                            <!--begin::Modal title-->
                            <h2 class="fw-bold">Add an Event</h2>
                            <!--end::Modal title-->
                            <!--begin::Close-->
                            <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal" aria-label="Close">
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
                            <form id="kt_modal_add_schedule_form" class="form" action="#">
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="required fs-6 fw-semibold form-label mb-2">Event Name</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="event_name" value="" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold form-label mb-2">
                                        <span class="required">Date & Time</span>
                                        <span class="ms-2" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-content="Select a date & time.">
                                            <i class="ki-duotone ki-information fs-7">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input class="form-control form-control-solid" placeholder="Pick date & time" name="event_datetime" id="kt_modal_add_schedule_datepicker" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="required fs-6 fw-semibold form-label mb-2">Event Organiser</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="event_org" value="" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="required fs-6 fw-semibold form-label mb-2">Send Event Details To</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input id="kt_modal_add_schedule_tagify" type="text" class="form-control form-control-solid" name="event_invitees" value="smith@kpmg.com, melody@altbox.com" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Actions-->
                                <div class="text-center pt-15">
                                    <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">Discard</button>
                                    <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
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
            <!--end::Modal - Add schedule--> --}}
            {{-- <!--begin::Modal - Add task-->
            <div class="modal fade" id="kt_modal_add_task" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-650px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Modal header-->
                        <div class="modal-header">
                            <!--begin::Modal title-->
                            <h2 class="fw-bold">Add a Task</h2>
                            <!--end::Modal title-->
                            <!--begin::Close-->
                            <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal" aria-label="Close">
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
                            <form id="kt_modal_add_task_form" class="form" action="#">
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="required fs-6 fw-semibold form-label mb-2">Task Name</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="task_name" value="" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold form-label mb-2">
                                        <span class="required">Task Due Date</span>
                                        <span class="ms-2" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-content="Select a due date.">
                                            <i class="ki-duotone ki-information fs-7">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input class="form-control form-control-solid" placeholder="Pick date" name="task_duedate" id="kt_modal_add_task_datepicker" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold form-label mb-2">Task Description</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <textarea class="form-control form-control-solid rounded-3"></textarea>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Actions-->
                                <div class="text-center pt-15">
                                    <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">Discard</button>
                                    <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
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
            <!--end::Modal - Add task--> --}}
            <!--begin::Modal - Update email-->
            <div class="modal fade" id="kt_modal_update_email" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-650px">
                    <!--begin::Modal content-->
                    <div class="modal-content badge-custom-bg">
                        <!--begin::Modal header-->
                        <div class="modal-header">
                            <!--begin::Modal title-->
                            <h2 class="fw-bold fs-color-white custom-fs-23">Update Email Address</h2>
                            <!--end::Modal title-->
                            <!--begin::Close-->
                            <div class="btn btn-icon btn-sm btn-dark-primary" data-bs-dismiss="modal" aria-label="Close">
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
                            <form id="kt_modal_update_email_form"  class="form">
                                @csrf
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
                                            <div class="fs-6 fs-color-white custom-fs-13">Please note that a valid email address is required to complete the email verification.</div>
                                        </div>
                                        <!--end::Content-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Notice-->
                                <!--end::Notice-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold form-label mb-2">
                                        <span class="required fs-color-white custom-fs-13">Email Address</span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="email" class="form-control form-control-solid btn-dark-primary" placeholder="" id="email_update"  name="email" value="{{ old('email', $user->email) }}" />
                                    <p></p>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Actions-->
                                <div class="text-center pt-15">
                                    <button type="reset" class="btn btn-dark-primary me-3" data-bs-dismiss="modal">Discard</button>
                                    <button type="button" class="btn btn-dark-primary updateEmail" data-kt-users-modal-action="submit">
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
            <!--end::Modal - Update email-->
            <!--begin::Modal - Update password-->
            <div class="modal fade" id="kt_modal_update_password" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-650px">
                    <!--begin::Modal content-->
                    <div class="modal-content badge-custom-bg">
                        <!--begin::Modal header-->
                        <div class="modal-header">
                            <!--begin::Modal title-->
                            <h2 class="fw-bold fs-color-white custom-fs-13">Update Password</h2>
                            <!--end::Modal title-->
                            <!--begin::Close-->
                            <div class="btn btn-icon btn-sm btn-dark-primary" data-bs-dismiss="modal" aria-label="Close">
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
                            <form id="kt_modal_update_password_form">
                                @csrf
                                <!--begin::Input group=-->
                                <div class="fv-row mb-10">
                                    <label class="required form-label fs-6 mb-2 fs-color-white custom-fs-13">Current Password</label>
                                    <input class="form-control form-control-lg form-control-solid btn-dark-primary" type="password" placeholder="" id="current_password" name="current_password" autocomplete="off" />
                                </div>
                                <!--end::Input group=-->
                                <!--begin::Input group-->
                                <div class="mb-10 fv-row" data-kt-password-meter="true">
                                    <!--begin::Wrapper-->
                                    <div class="mb-1">
                                        <!--begin::Label-->
                                        <label class="form-label fw-semibold fs-6 mb-2 fs-color-white custom-fs-13">New Password</label>
                                        <!--end::Label-->
                                        <!--begin::Input wrapper-->
                                        <div class="position-relative mb-3">
                                            <input class="form-control form-control-lg form-control-solid btn-dark-primary" type="password" placeholder="" id="password" name="password" autocomplete="off" />
                                            <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
                                                <i class="ki-duotone ki-eye-slash fs-1">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                    <span class="path4"></span>
                                                </i>
                                                <i class="ki-duotone ki-eye d-none fs-1">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                </i>
                                            </span>
                                        </div>
                                        <!--end::Input wrapper-->
                                        <!--begin::Meter-->
                                        <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                                        </div>
                                        <!--end::Meter-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Hint-->
                                    <div class="fs-color-white custom-fs-13">Use 8 or more characters with a mix of letters, numbers & symbols.</div>
                                    <!--end::Hint-->
                                </div>
                                <!--end::Input group=-->
                                <!--begin::Input group=-->
                                <div class="fv-row mb-10">
                                    <label class="form-label fw-semibold fs-6 mb-2 fs-color-white custom-fs-13">Confirm New Password</label>
                                    <input class="form-control form-control-lg form-control-solid btn-dark-primary" type="password" placeholder="" id="password_confirmation" name="password_confirmation" autocomplete="off" />
                                </div>
                                <!--end::Input group=-->
                                <!--begin::Actions-->
                                <div class="text-center pt-15">
                                    <button type="reset" class="btn btn-dark-primary me-3" data-bs-dismiss="modal">Discard</button>
                                    <button type="button" class="btn btn-dark-primary updatePassword" >
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
            <!--end::Modal - Update password-->
            <!--begin::Modal - Update role-->
            <div class="modal fade" id="kt_modal_update_role" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-650px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Modal header-->
                        <div class="modal-header">
                            <!--begin::Modal title-->
                            <h2 class="fw-bold">Update User Role</h2>
                            <!--end::Modal title-->
                            <!--begin::Close-->
                            <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal" aria-label="Close">
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
                            <form id="kt_modal_update_role_form" class="form" action="#">
                                <!--begin::Notice-->
                                <!--begin::Notice-->
                                <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed mb-9 p-6">
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
                                            <div class="fs-6 text-gray-700">Please note that reducing a user role rank, that user will lose all priviledges that was assigned to the previous role.</div>
                                        </div>
                                        <!--end::Content-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Notice-->
                                <!--end::Notice-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold form-label mb-5">
                                        <span class="required">Select a user role</span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input row-->
                                    <div class="d-flex">
                                        <!--begin::Radio-->
                                        <div class="form-check form-check-custom form-check-solid">
                                            <!--begin::Input-->
                                            <input class="form-check-input me-3" name="user_role" type="radio" value="0" id="kt_modal_update_role_option_0" checked='checked' />
                                            <!--end::Input-->
                                            <!--begin::Label-->
                                            <label class="form-check-label" for="kt_modal_update_role_option_0">
                                                <div class="fw-bold text-gray-800">Administrator</div>
                                                <div class="text-gray-600">Best for business owners and company administrators</div>
                                            </label>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Radio-->
                                    </div>
                                    <!--end::Input row-->
                                    <div class='separator separator-dashed my-5'></div>
                                    <!--begin::Input row-->
                                    <div class="d-flex">
                                        <!--begin::Radio-->
                                        <div class="form-check form-check-custom form-check-solid">
                                            <!--begin::Input-->
                                            <input class="form-check-input me-3" name="user_role" type="radio" value="1" id="kt_modal_update_role_option_1" />
                                            <!--end::Input-->
                                            <!--begin::Label-->
                                            <label class="form-check-label" for="kt_modal_update_role_option_1">
                                                <div class="fw-bold text-gray-800">Developer</div>
                                                <div class="text-gray-600">Best for developers or people primarily using the API</div>
                                            </label>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Radio-->
                                    </div>
                                    <!--end::Input row-->
                                    <div class='separator separator-dashed my-5'></div>
                                    <!--begin::Input row-->
                                    <div class="d-flex">
                                        <!--begin::Radio-->
                                        <div class="form-check form-check-custom form-check-solid">
                                            <!--begin::Input-->
                                            <input class="form-check-input me-3" name="user_role" type="radio" value="2" id="kt_modal_update_role_option_2" />
                                            <!--end::Input-->
                                            <!--begin::Label-->
                                            <label class="form-check-label" for="kt_modal_update_role_option_2">
                                                <div class="fw-bold text-gray-800">Analyst</div>
                                                <div class="text-gray-600">Best for people who need full access to analytics data, but don't need to update business settings</div>
                                            </label>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Radio-->
                                    </div>
                                    <!--end::Input row-->
                                    <div class='separator separator-dashed my-5'></div>
                                    <!--begin::Input row-->
                                    <div class="d-flex">
                                        <!--begin::Radio-->
                                        <div class="form-check form-check-custom form-check-solid">
                                            <!--begin::Input-->
                                            <input class="form-check-input me-3" name="user_role" type="radio" value="3" id="kt_modal_update_role_option_3" />
                                            <!--end::Input-->
                                            <!--begin::Label-->
                                            <label class="form-check-label" for="kt_modal_update_role_option_3">
                                                <div class="fw-bold text-gray-800">Support</div>
                                                <div class="text-gray-600">Best for employees who regularly refund payments and respond to disputes</div>
                                            </label>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Radio-->
                                    </div>
                                    <!--end::Input row-->
                                    <div class='separator separator-dashed my-5'></div>
                                    <!--begin::Input row-->
                                    <div class="d-flex">
                                        <!--begin::Radio-->
                                        <div class="form-check form-check-custom form-check-solid">
                                            <!--begin::Input-->
                                            <input class="form-check-input me-3" name="user_role" type="radio" value="4" id="kt_modal_update_role_option_4" />
                                            <!--end::Input-->
                                            <!--begin::Label-->
                                            <label class="form-check-label" for="kt_modal_update_role_option_4">
                                                <div class="fw-bold text-gray-800">Trial</div>
                                                <div class="text-gray-600">Best for people who need to preview content data, but don't need to make any updates</div>
                                            </label>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Radio-->
                                    </div>
                                    <!--end::Input row-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Actions-->
                                <div class="text-center pt-15">
                                    <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">Discard</button>
                                    <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
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
            <!--end::Modal - Update role-->
            <!--begin::Modal - Add task-->
            <div class="modal fade" id="kt_modal_add_auth_app" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-650px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Modal header-->
                        <div class="modal-header">
                            <!--begin::Modal title-->
                            <h2 class="fw-bold">Add Authenticator App</h2>
                            <!--end::Modal title-->
                            <!--begin::Close-->
                            <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal" aria-label="Close">
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
                            <!--begin::Content-->
                            <div class="fw-bold d-flex flex-column justify-content-center mb-5">
                                <!--begin::Label-->
                                <div class="text-center mb-5" data-kt-add-auth-action="qr-code-label">Download the
                                    <a href="#">Authenticator app</a>, add a new account, then scan this barcode to set up your account.
                                </div>
                                <div class="text-center mb-5 d-none" data-kt-add-auth-action="text-code-label">Download the
                                    <a href="#">Authenticator app</a>, add a new account, then enter this code to set up your account.
                                </div>
                                <!--end::Label-->
                                <!--begin::QR code-->
                                <div class="d-flex flex-center" data-kt-add-auth-action="qr-code">
                                    <img src="{{ asset('backend/assets/media/misc/qr.png') }}" alt="Scan this QR code" />
                                </div>
                                <!--end::QR code-->
                                <!--begin::Text code-->
                                <div class="border rounded p-5 d-flex flex-center d-none" data-kt-add-auth-action="text-code">
                                    <div class="fs-1">gi2kdnb54is709j</div>
                                </div>
                                <!--end::Text code-->
                            </div>
                            <!--end::Content-->
                            <!--begin::Action-->
                            <div class="d-flex flex-center">
                                <div class="btn btn-light-primary" data-kt-add-auth-action="text-code-button">Enter code manually</div>
                                <div class="btn btn-light-primary d-none" data-kt-add-auth-action="qr-code-button">Scan barcode instead</div>
                            </div>
                            <!--end::Action-->
                        </div>
                        <!--end::Modal body-->
                    </div>
                    <!--end::Modal content-->
                </div>
                <!--end::Modal dialog-->
            </div>
            <!--end::Modal - Add task-->
            <!--begin::Modal - Add task-->
            <div class="modal fade" id="kt_modal_add_one_time_password" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-650px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Modal header-->
                        <div class="modal-header">
                            <!--begin::Modal title-->
                            <h2 class="fw-bold">Enable One Time Password</h2>
                            <!--end::Modal title-->
                            <!--begin::Close-->
                            <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal" aria-label="Close">
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
                            <form class="form" id="kt_modal_add_one_time_password_form">
                                <!--begin::Label-->
                                <div class="fw-bold mb-9">Enter the new phone number to receive an SMS to when you log in.</div>
                                <!--end::Label-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold form-label mb-2">
                                        <span class="required">Mobile number</span>
                                        <span class="ms-2" data-bs-toggle="tooltip" title="A valid mobile number is required to receive the one-time password to validate your account login.">
                                            <i class="ki-duotone ki-information fs-7">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="otp_mobile_number" placeholder="+6123 456 789" value="" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Separator-->
                                <div class="separator saperator-dashed my-5"></div>
                                <!--end::Separator-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold form-label mb-2">
                                        <span class="required">Email</span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="email" class="form-control form-control-solid" name="otp_email" value="smith@kpmg.com" readonly="readonly" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold form-label mb-2">
                                        <span class="required">Confirm password</span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="password" class="form-control form-control-solid" name="otp_confirm_password" value="" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Actions-->
                                <div class="text-center pt-15">
                                    <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
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
            <!--end::Modal - Add task-->
            <!--end::Modals-->
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
<!--begin::Javascript-->
<script>
    var hostUrl = "assets/";
</script>
<script>
    $(document).ready(function (){
        //Update user details
        $('.updateUserDetails').on('click', function (e) {
            e.preventDefault(); // Prevent the default form submission
            var formData = new FormData($('#kt_modal_update_user_form')[0]);
            console.log(formData);
            var csrfToken = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                url: '{{ route("admin.update.user.information") }}',
                type: 'POST',
                data: formData,
                processData: false,  // Important: Don't process the data
                contentType: false,  // Important: Don't set contentType
                headers: {
                    'X-CSRF-TOKEN': csrfToken
                },

                success: function(response) {
                    // Handle success response
                    console.log(response.success);
                    if(response.success){
                        $('#kt_modal_update_details').modal('hide');
                        location.reload();
                        // $('.modal-backdrop').hide();

                    }

                    // Display success message to the user
                    Swal.fire('Success!', response.success, 'success');

                    // Optionally, you can access the updated user data if needed
                    console.log(response.user);
                },
                error: function(xhr) {
                    // Handle error response
                    var errors = xhr.responseJSON.errors;

                    if (errors && errors.email) {
                        // Display the validation error message with SweetAlert
                        Swal.fire('Error!', errors.email[0], 'error');
                    } else {
                        // Display a generic error message
                        console.error('Oops! Something went wrong');
                        // Display a generic error message with SweetAlert
                        Swal.fire('Error!', 'Oops! Something went wrong', 'error');
                    }
                }
            })//ajax end;


        });

        // update password
        $('.updatePassword').on('click', function (e){
            e.preventDefault();
            // alert('working');
            var currentPassword = $('#current_password').val();
            var password = $('#password').val();
            var password_confirmation = $('#password_confirmation').val();
            // Get the CSRF token from the meta tag
            var csrfToken = $('meta[name="csrf-token"]').attr('content');
            // alert(UpdateEmail);
            $.ajax({
                url: '{{route("admin.update.password")}}',
                type: 'POST',
                data: {
                    'current_password' : currentPassword,
                    'password' : password,
                    'password_confirmation' : password_confirmation,
                    '_token': csrfToken
                    },
                dataType: 'json',
                success: function(response) {
                    // Handle success response
                    console.log(response.success);
                    if(response.success){
                        $('#kt_modal_update_password').modal('hide');
                        $('.modal-backdrop').hide();
                        // $('#current_password').val('');
                        $('#password').val('');
                        $('#password_confirmation').val('');

                    }

                    // Display success message to the user
                    Swal.fire('Success!', response.success, 'success');

                    // Optionally, you can access the updated user data if needed
                    console.log(response.user);
                },
                error: function(xhr) {
                    // Handle error response
                    var errors = xhr.responseJSON.errors;

                    if (errors && errors.email) {
                        // Display the validation error message with SweetAlert
                        Swal.fire('Error!', errors.email[0], 'error');
                    } else {
                        // Display a generic error message
                        console.error('Oops! Something went wrong');
                        // Display a generic error message with SweetAlert
                        Swal.fire('Error!', 'Oops! Something went wrong', 'error');
                    }
                }
            })//ajax end;
            

        });
         // update email
        $('.updateEmail').on('click', function (e){
            e.preventDefault();
            var UpdateEmail = $('#email_update').val();
                     if (!isValidEmailAddress(UpdateEmail)) {
                Swal.fire('Error!', 'Oops! Please enter a valid email address', 'error');
                return; 
            }
                    
            
                
                 // Get the CSRF token from the meta tag
            var csrfToken = $('meta[name="csrf-token"]').attr('content');
            // alert(UpdateEmail);
            $.ajax({
                url: '{{route("admin.update.email")}}',
                type: 'post',
                data: {
                    'email' : UpdateEmail,
                    '_token': csrfToken
                    },
                dataType: 'json',
                success: function(response) {
                    // Handle success response
                    console.log(response.success);
                    if(response.success){
                        $('#kt_modal_update_email').modal('hide');
                        $('.modal-backdrop').hide();
                       

                    }

                    // Display success message to the user
                    Swal.fire('Success!', response.success, 'success');

                    // Optionally, you can access the updated user data if needed
                    console.log(response.user);
                },
                error: function(xhr) {
                    // Handle error response
                    var errors = xhr.responseJSON.errors;

                    if (errors && errors.email) {
                        // Display the validation error message with SweetAlert
                        Swal.fire('Error!', errors.email[0], 'error');
                    } else {
                        // Display a generic error message
                        console.error('Oops! Something went wrong');
                        // Display a generic error message with SweetAlert
                        Swal.fire('Error!', 'Oops! Something went wrong', 'error');
                    }
                }
            })
            });
                
           

           

    


       
    });
    
    var inputField = document.querySelector('#email_update');

inputField.onkeydown = function(event) {
  // Allow if the key pressed is a number, letter, or one of the following characters: @ . _ -
  if (!/[\d\w@._-]/.test(event.key) && event.key !== 'Backspace') {
    event.preventDefault();
  }
};



    function isValidEmailAddress(emailAddress) {
    var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
    return pattern.test(emailAddress);
}
    
    
</script>

</div>
@endsection