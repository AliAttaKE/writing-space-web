<div class="d-flex flex-column flex-column-fluid">
    <!--begin::Toolbar-->
    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
        <!--begin::Toolbar container-->
        <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                <!--begin::Title-->
                <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">Getting Started</h1>
                <!--end::Title-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">
                        <a href="customer-management.php" class="text-muted text-hover-primary">Customer Management</a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-500 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">Short Details</li>
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
                                <h2>Customer Groups</h2>
                            </div>
                            <!--end::Card title-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-5">
                            <!--begin::Contact groups-->
                            <div class="d-flex flex-column gap-5">
                                <!--begin::Contact group-->
                                <div class="d-flex flex-stack">
                                    <a href="customer-management.php" class="fs-6 fw-bold text-gray-800 text-hover-primary text-active-primary active">All Contacts</a>
                                    <div class="badge badge-light-primary">9</div>
                                </div>
                                <!--begin::Contact group-->
                                <!--begin::Contact group-->
                                <div class="d-flex flex-stack">
                                    <a href="customer-prospects.php" class="fs-6 fw-bold text-gray-800 text-hover-primary">Prospects</a>
                                    <div class="badge badge-light-primary">3</div>
                                </div>
                                <!--begin::Contact group-->
                                <!--begin::Contact group-->
                                <div class="d-flex flex-stack">
                                    <a href="customer-posted-order.php" class="fs-6 fw-bold text-primary text-hover-primary">(Tier-1) Posted Custom Orders</a>
                                    <div class="badge badge-light-primary">1</div>
                                </div>
                                <!--begin::Contact group-->
                                <!--begin::Contact group-->
                                <div class="d-flex flex-stack">
                                    <a href="customer-first-subscriber.php" class="fs-6 fw-bold text-success text-hover-primary">(Tier-2) First Time Subscribers</a>
                                    <div class="badge badge-light-primary">1</div>
                                </div>
                                <!--begin::Contact group-->
                                <!--begin::Contact group-->
                                <div class="d-flex flex-stack">
                                    <a href="customer-multiple-subscriber.php" class="fs-6 fw-bold text-warning text-hover-primary">(Tier-3) Multiple Subscribers</a>
                                    <div class="badge badge-light-primary">1</div>
                                </div>
                                <!--begin::Contact group-->
                                <!--begin::Contact group-->
                                <div class="d-flex flex-stack">
                                    <a href="customer-brand-ambassador.php" class="fs-6 fw-bold text-info text-hover-primary">(Tier-4) Brand Ambassadors</a>
                                    <div class="badge badge-light-primary">1</div>
                                </div>
                                <!--begin::Contact group-->
                                <!--begin::Contact group-->
                                <div class="d-flex flex-stack">
                                    <a href="apps/contacts/getting-started.html" class="fs-6 fw-bold text-danger text-hover-primary">Blocked</a>
                                    <div class="badge badge-light-danger">2</div>
                                </div>
                                <!--begin::Contact group-->
                            </div>
                            <!--end::Contact groups-->
                            <!--begin::Separator-->
                            <div class="separator my-7"></div>
                            <!--begin::Separator-->
                            <!--begin::Add contact group-->
                            <label class="fs-6 fw-semibold form-label">Add new group</label>
                            <div class="input-group">
                                <input type="text" class="form-control form-control-solid" placeholder="Group name" />
                                <button type="button" class="btn btn-icon btn-light">
                                    <i class="ki-duotone ki-plus-square fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                </button>
                            </div>
                            <!--end::Add contact group-->
                            <!--begin::Separator-->
                            <div class="separator my-7"></div>
                            <!--begin::Separator-->
                            <!--begin::Add new contact-->
                            <a href="customer-add-new-contact.php" class="btn btn-primary w-100">
                                <i class="ki-duotone ki-badge fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                    <span class="path5"></span>
                                </i>Add new contact</a>
                            <!--end::Add new contact-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Contact group wrapper-->
                </div>
                <!--end::Contact groups-->
                <!--begin::Search-->
                <div class="col-lg-6 col-xl-3">
                    <!--begin::Contacts-->
                    <div class="card card-flush" id="kt_contacts_list">
                        <!--begin::Card header-->
                        <div class="card-header px-2 pt-7" id="kt_contacts_list_header">
                            <div class="d-flex justify-content-between mb-5 w-100 align-items-center">
                                <input class="form-check-input" type="checkbox" name="toc" value="1">
                                <!--begin::Form-->
                                <button type="button" class="btn btn-light-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_export_users">
                                    <i class="ki-duotone ki-exit-up fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>Export</button>
                            </div>
                            <form class="d-flex align-items-center position-relative w-100 m-0" autocomplete="off">
                                <!--begin::Icon-->
                                <i class="ki-duotone ki-magnifier fs-3 text-gray-500 position-absolute top-50 ms-5 translate-middle-y">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                                <!--end::Icon-->

                                <!--begin::Input-->
                                <input type="text" class="form-control form-control-solid ps-13" name="search" id='search' value="" placeholder="Search contacts" />
                                <!--end::Input-->
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Card header-->
                        <!--end::Card header-->
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
                                        <form id="kt_modal_export_users_form" class="form" action="#">
                                            <!--begin::Input group-->
                                            <div class="fv-row mb-10">
                                                <!--begin::Label-->
                                                <label class="fs-6 fw-semibold form-label mb-2">Select Status:</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <select name="role" data-control="select2" data-placeholder="Select Status" data-hide-search="true" class="form-select form-select-solid fw-bold">
                                                    <option></option>
                                                    <option value="Administrator">Enable</option>
                                                    <option value="Analyst">Disable</option>
                                                </select>
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="fv-row mb-10">
                                                <!--begin::Label-->
                                                <label class="required fs-6 fw-semibold form-label mb-2">Select Export Format:</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <select name="format" data-control="select2" data-placeholder="Select a format" data-hide-search="true" class="form-select form-select-solid fw-bold">
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
                        <!--begin::Card body-->
                        <!--begin::Card body-->
                        <div class="card-body px-2 pt-5" id="kt_contacts_list_body">
                            <!--begin::List-->
                            <div class="scroll-y me-n5 pe-5 h-300px h-xl-auto" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_header, #kt_toolbar, #kt_footer, #kt_contacts_list_header" data-kt-scroll-wrappers="#kt_content, #kt_contacts_list_body" data-kt-scroll-stretch="#kt_contacts_list, #kt_contacts_main" data-kt-scroll-offset="5px">
                                <!--begin::User-->
                                <div class="d-flex py-4 members justify-content-between">
                                    <input class="form-check-input" type="checkbox" name="toc" value="1">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center comp">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-40px symbol-circle contact_image">
                                            <img alt="Pic" src="assets/media/avatars/300-6.jpg" />
                                            <div class="symbol-badge bg-success start-100 top-100 border-4 h-15px w-15px ms-n2 mt-n2"></div>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-4">
                                            <a href="customer-ambassador-detail.php" class="fs-6 fw-bold text-gray-900 text-hover-primary mb-2 search_name">Emma Smith</a>
                                            <div class="fw-semibold fs-7 text-muted">smith@kpmg.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed d-none"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="d-flex py-4 members justify-content-between">
                                    <input class="form-check-input" type="checkbox" name="toc" value="1">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center comp">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-40px symbol-circle contact_image">
                                            <img alt="Pic" src="assets/media/avatars/300-6.jpg" />
                                            <div class="symbol-badge bg-success start-100 top-100 border-4 h-15px w-15px ms-n2 mt-n2"></div>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-4">
                                            <a href="customer-ambassador-detail.php" class="fs-6 fw-bold text-gray-900 text-hover-primary mb-2 search_name">Emma Smith</a>
                                            <div class="fw-semibold fs-7 text-muted">smith@kpmg.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::User-->

                            </div>
                            <!--end::List-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Contacts-->
                </div>
                <!--end::Search-->
                <!--begin::Content-->
                <div class="col-xl-6">
                    <div class="card card-flush h-lg-100" id="kt_contacts_main">
                        <!--begin::Card header-->
                        <div class="card-header pt-7" id="kt_chat_contacts_header">
                            <!--begin::Card title-->
                            <div class="card-title">
                                <i class="ki-duotone ki-badge fs-1 me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>
                                <h2>Contact Details</h2>
                            </div>
                            <!--end::Card title-->

                            <!--begin::Card toolbar-->
                            <div class="card-toolbar gap-3">
                                <!--begin::Chat-->
                                <button class="btn btn-sm btn-light btn-active-light-primary" data-kt-drawer-show="true" data-kt-drawer-target="#kt_drawer_chat">
                                    <i class="ki-duotone ki-message-text-2 fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> Chat
                                </button>
                                <!--end::Chat-->

                                <!--begin::Chat-->
                                <a href="message-management-reply.php" class="btn btn-sm btn-light btn-active-light-primary">
                                    <i class="ki-duotone ki-messages fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i> Message
                                </a>
                                <!--end::Chat-->

                                <!--begin::Action menu-->
                                <a href="#" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <i class="ki-duotone ki-dots-square fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i> </a>
                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="/metronic8/demo1/../demo1/apps/contacts/edit-contact.html" class="menu-link px-3">
                                            Edit
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" id="kt_contact_delete" data-kt-redirect="/metronic8/demo1/../demo1/apps/contacts/getting-started.html">
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
                                <!--begin::Avatar-->
                                <div class="symbol symbol-circle symbol-100px">
                                    <img src="assets/media/avatars/300-6.jpg" alt="image">
                                </div>
                                <!--end::Avatar-->

                                <!--begin::Contact details-->
                                <div class="d-flex flex-column gap-2">
                                    <!--begin::Name-->
                                    <h3 class="mb-0">Emma Smith</h3>
                                    <!--end::Name-->

                                    <!--begin::Email-->
                                    <div class="d-flex align-items-center gap-2">
                                        <i class="ki-duotone ki-sms fs-2"><span class="path1"></span><span class="path2"></span></i> <a href="#" class="text-muted text-hover-primary">smith@kpmg.com</a>
                                    </div>
                                    <!--end::Email-->

                                    <!--begin::Phone-->
                                    <div class="d-flex align-items-center gap-2">
                                        <i class="ki-duotone ki-phone fs-2"><span class="path1"></span><span class="path2"></span></i> <a href="#" class="text-muted text-hover-primary">+6141 234 567</a>
                                    </div>
                                    <!--end::Phone-->
                                </div>
                                <!--end::Contact details-->
                            </div>
                            <!--end::Profile-->

                            <!--begin:::Tabs-->
                            <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x fs-6 fw-semibold mt-6 mb-8 gap-2" role="tablist">
                                <!--begin:::Tab item-->
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link text-active-primary d-flex align-items-center pb-4 active" data-bs-toggle="tab" href="#kt_contact_view_general" aria-selected="true" role="tab">
                                        <i class="ki-duotone ki-home fs-4 me-1"></i> General
                                    </a>
                                </li>
                                <!--end:::Tab item-->

                                <!--begin:::Tab item-->
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link text-active-primary d-flex align-items-center pb-4" data-bs-toggle="tab" href="#kt_contact_view_meetings" aria-selected="false" tabindex="-1" role="tab">
                                        <i class="ki-duotone ki-calendar-8 fs-4 me-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span></i> Logs
                                    </a>
                                </li>
                                <!--end:::Tab item-->

                                <!--begin:::Tab item-->
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link text-active-primary d-flex align-items-center pb-4" data-bs-toggle="tab" href="#kt_contact_view_activity" aria-selected="false" tabindex="-1" role="tab">
                                        <i class="ki-duotone ki-save-2 fs-4 me-1"><span class="path1"></span><span class="path2"></span></i> Activity
                                    </a>
                                </li>
                                <!--end:::Tab item-->
                            </ul>
                            <!--end:::Tabs-->
                            <!--begin::Tab content-->
                            <div class="tab-content" id="">
                                <!--begin:::Tab pane-->
                                <div class="tab-pane fade show active" id="kt_contact_view_general" role="tabpanel">

                                    <!--begin::Additional details-->
                                    <div class="d-flex flex-column gap-5 mt-7">
                                        <!--begin::Company name-->
                                        <div class="d-flex flex-column gap-1">
                                            <div class="fw-bold text-muted">Group Name</div>
                                            <div class="fw-bold fs-5">Brand Ambassador</div>
                                        </div>
                                        <!--end::Company name-->

                                        <!--begin::City-->
                                        <div class="d-flex flex-column gap-1">
                                            <div class="fw-bold text-muted">City</div>
                                            <div class="fw-bold fs-5">Melbourne</div>
                                        </div>
                                        <!--end::City-->

                                        <!--begin::Country-->
                                        <div class="d-flex flex-column gap-1">
                                            <div class="fw-bold text-muted">Country</div>
                                            <div class="fw-bold fs-5">Australia</div>
                                        </div>
                                        <!--end::Country-->

                                        <!--begin::Notes-->
                                        <div class="d-flex flex-column gap-1">
                                            <div class="fw-bold text-muted">Notes</div>
                                            <p>
                                                Emma Smith joined the team on September 2019 as a junior associate. She soon showcased her expertise and experience in knowledge and skill in the field, which was very valuable to the company. She was promptly promoted to senior associate on July 2020. <br>
                                                <br>
                                                Emma Smith now heads a team of 5 associates and leads the company's sales growth by 7%.
                                            </p>
                                        </div>
                                        <!--end::Notes-->
                                    </div>
                                    <!--end::Additional details-->
                                </div>
                                <!--end:::Tab pane-->

                                <!--begin:::Tab pane-->
                                <div class="tab-pane fade" id="kt_contact_view_meetings" role="tabpanel">

                                    <!--begin::Card-->
                                    <div class="pt-4 mb-6 mb-xl-9">
                                        <!--begin::Card header-->
                                        <div class="card-header px-0 border-0">
                                            <!--begin::Card title-->
                                            <div class="card-title">
                                                <h2>Logs</h2>
                                            </div>
                                            <!--end::Card title-->
                                            <!--begin::Card toolbar-->
                                            <div class="card-toolbar">
                                                <!--begin::Button-->
                                                <button type="button" class="btn btn-sm btn-light-primary">
                                                    <i class="ki-duotone ki-cloud-download fs-3">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>Download Report</button>
                                                <!--end::Button-->
                                            </div>
                                            <!--end::Card toolbar-->
                                        </div>
                                        <!--end::Card header-->
                                        <!--begin::Card body-->
                                        <div class="card-body px-0 py-0">
                                            <!--begin::Table wrapper-->
                                            <div class="table-responsive">
                                                <!--begin::Table-->
                                                <table class="table align-middle table-row-dashed fw-semibold text-gray-600 fs-6 gy-5" id="kt_table_customers_logs">
                                                    <tbody>
                                                        <tr>
                                                            <td class="min-w-70px">
                                                                <div class="badge badge-light-success">200 OK</div>
                                                            </td>
                                                            <td>POST /v1/invoices/in_3552_3726/payment</td>
                                                            <td class="pe-0 text-end min-w-200px">05 May 2023, 2:40 pm</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="min-w-70px">
                                                                <div class="badge badge-light-warning">404 WRN</div>
                                                            </td>
                                                            <td>POST /v1/customer/c_654c700d620f0/not_found</td>
                                                            <td class="pe-0 text-end min-w-200px">22 Sep 2023, 9:23 pm</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="min-w-70px">
                                                                <div class="badge badge-light-success">200 OK</div>
                                                            </td>
                                                            <td>POST /v1/invoices/in_8737_4012/payment</td>
                                                            <td class="pe-0 text-end min-w-200px">10 Mar 2023, 5:30 pm</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="min-w-70px">
                                                                <div class="badge badge-light-success">200 OK</div>
                                                            </td>
                                                            <td>POST /v1/invoices/in_3552_3726/payment</td>
                                                            <td class="pe-0 text-end min-w-200px">21 Feb 2023, 10:30 am</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="min-w-70px">
                                                                <div class="badge badge-light-warning">404 WRN</div>
                                                            </td>
                                                            <td>POST /v1/customer/c_654c700d620f0/not_found</td>
                                                            <td class="pe-0 text-end min-w-200px">10 Mar 2023, 6:43 am</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="min-w-70px">
                                                                <div class="badge badge-light-warning">404 WRN</div>
                                                            </td>
                                                            <td>POST /v1/customer/c_654c700d620f1/not_found</td>
                                                            <td class="pe-0 text-end min-w-200px">20 Dec 2023, 11:05 am</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="min-w-70px">
                                                                <div class="badge badge-light-success">200 OK</div>
                                                            </td>
                                                            <td>POST /v1/invoices/in_5282_4430/payment</td>
                                                            <td class="pe-0 text-end min-w-200px">10 Mar 2023, 11:05 am</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="min-w-70px">
                                                                <div class="badge badge-light-warning">404 WRN</div>
                                                            </td>
                                                            <td>POST /v1/customer/c_654c700d620ef/not_found</td>
                                                            <td class="pe-0 text-end min-w-200px">20 Dec 2023, 6:43 am</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="min-w-70px">
                                                                <div class="badge badge-light-success">200 OK</div>
                                                            </td>
                                                            <td>POST /v1/invoices/in_8737_4012/payment</td>
                                                            <td class="pe-0 text-end min-w-200px">05 May 2023, 5:20 pm</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="min-w-70px">
                                                                <div class="badge badge-light-warning">404 WRN</div>
                                                            </td>
                                                            <td>POST /v1/customer/c_654c700d620f0/not_found</td>
                                                            <td class="pe-0 text-end min-w-200px">19 Aug 2023, 11:30 am</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!--end::Table wrapper-->
                                        </div>
                                        <!--end::Card body-->
                                    </div>
                                    <!--end::Card-->
                                </div>
                                <!--end:::Tab pane-->

                                <!--begin:::Tab pane-->
                                <div class="tab-pane fade" id="kt_contact_view_activity" role="tabpanel">
                                    <!--begin::Timeline-->
                                    <div class="timeline-label">
                                        <!--begin::Item-->
                                        <div class="timeline-item">
                                            <!--begin::Label-->
                                            <div class="timeline-label fw-bold text-gray-800 fs-6">08:42</div>
                                            <!--end::Label-->

                                            <!--begin::Badge-->
                                            <div class="timeline-badge">
                                                <i class="ki-duotone ki-abstract-8 text-warning fs-1"><span class="path1"></span><span class="path2"></span></i>
                                            </div>
                                            <!--end::Badge-->

                                            <!--begin::Content-->
                                            <div class="timeline-content d-flex">
                                                <span class="fw-bold text-gray-800 ps-3">Order History</span>
                                            </div>
                                            <!--end::Content-->
                                        </div>
                                        <!--end::Item-->

                                        <!--begin::Item-->
                                        <div class="timeline-item">
                                            <!--begin::Label-->
                                            <div class="timeline-label fw-bold text-gray-800 fs-6">10:00</div>
                                            <!--end::Label-->

                                            <!--begin::Badge-->
                                            <div class="timeline-badge">
                                                <i class="ki-duotone ki-abstract-8 text-success fs-1"><span class="path1"></span><span class="path2"></span></i>
                                            </div>
                                            <!--end::Badge-->

                                            <!--begin::Content-->
                                            <div class="timeline-content d-flex">
                                                <span class="fw-bold text-gray-800 ps-3">Subscription History</span>
                                            </div>
                                            <!--end::Content-->
                                        </div>
                                        <!--end::Item-->

                                        <!--begin::Item-->
                                        <div class="timeline-item">
                                            <!--begin::Label-->
                                            <div class="timeline-label fw-bold text-gray-800 fs-6">14:37</div>
                                            <!--end::Label-->

                                            <!--begin::Badge-->
                                            <div class="timeline-badge">
                                                <i class="ki-duotone ki-abstract-8 text-danger fs-1"><span class="path1"></span><span class="path2"></span></i>
                                            </div>
                                            <!--end::Badge-->

                                            <!--begin::Content-->
                                            <div class="timeline-content d-flex">
                                                <span class="fw-bold text-gray-800 ps-3">Messages History</span>
                                            </div>
                                            <!--end::Content-->
                                        </div>
                                        <!--end::Item-->

                                        <!--begin::Item-->
                                        <div class="timeline-item">
                                            <!--begin::Label-->
                                            <div class="timeline-label fw-bold text-gray-800 fs-6">16:50</div>
                                            <!--end::Label-->

                                            <!--begin::Badge-->
                                            <div class="timeline-badge">
                                                <i class="ki-duotone ki-abstract-8 text-primary fs-1"><span class="path1"></span><span class="path2"></span></i>
                                            </div>
                                            <!--end::Badge-->

                                            <!--begin::Content-->
                                            <div class="timeline-content d-flex">
                                                <span class="fw-bold text-gray-800 ps-3">Files History</span>
                                            </div>
                                            <!--end::Content-->
                                        </div>
                                        <!--end::Item-->

                                        <!--begin::Item-->
                                        <div class="timeline-item">
                                            <!--begin::Label-->
                                            <div class="timeline-label fw-bold text-gray-800 fs-6">08:42</div>
                                            <!--end::Label-->

                                            <!--begin::Badge-->
                                            <div class="timeline-badge">
                                                <i class="ki-duotone ki-abstract-8 text-warning fs-1"><span class="path1"></span><span class="path2"></span></i>
                                            </div>
                                            <!--end::Badge-->

                                            <!--begin::Content-->
                                            <div class="timeline-content d-flex">
                                                <span class="fw-bold text-gray-800 ps-3">Order History</span>
                                            </div>
                                            <!--end::Content-->
                                        </div>
                                        <!--end::Item-->

                                        <!--begin::Item-->
                                        <div class="timeline-item">
                                            <!--begin::Label-->
                                            <div class="timeline-label fw-bold text-gray-800 fs-6">10:00</div>
                                            <!--end::Label-->

                                            <!--begin::Badge-->
                                            <div class="timeline-badge">
                                                <i class="ki-duotone ki-abstract-8 text-success fs-1"><span class="path1"></span><span class="path2"></span></i>
                                            </div>
                                            <!--end::Badge-->

                                            <!--begin::Content-->
                                            <div class="timeline-content d-flex">
                                                <span class="fw-bold text-gray-800 ps-3">Subscription History</span>
                                            </div>
                                            <!--end::Content-->
                                        </div>
                                        <!--end::Item-->

                                        <!--begin::Item-->
                                        <div class="timeline-item">
                                            <!--begin::Label-->
                                            <div class="timeline-label fw-bold text-gray-800 fs-6">14:37</div>
                                            <!--end::Label-->

                                            <!--begin::Badge-->
                                            <div class="timeline-badge">
                                                <i class="ki-duotone ki-abstract-8 text-danger fs-1"><span class="path1"></span><span class="path2"></span></i>
                                            </div>
                                            <!--end::Badge-->

                                            <!--begin::Content-->
                                            <div class="timeline-content d-flex">
                                                <span class="fw-bold text-gray-800 ps-3">Messages History</span>
                                            </div>
                                            <!--end::Content-->
                                        </div>
                                        <!--end::Item-->

                                        <!--begin::Item-->
                                        <div class="timeline-item">
                                            <!--begin::Label-->
                                            <div class="timeline-label fw-bold text-gray-800 fs-6">16:50</div>
                                            <!--end::Label-->

                                            <!--begin::Badge-->
                                            <div class="timeline-badge">
                                                <i class="ki-duotone ki-abstract-8 text-primary fs-1"><span class="path1"></span><span class="path2"></span></i>
                                            </div>
                                            <!--end::Badge-->

                                            <!--begin::Content-->
                                            <div class="timeline-content d-flex">
                                                <span class="fw-bold text-gray-800 ps-3">Files History</span>
                                            </div>
                                            <!--end::Content-->
                                        </div>
                                        <!--end::Item-->
                                    </div>
                                    <!--end::Timeline-->
                                </div>
                                <!--end:::Tab pane-->
                            </div>
                            <!--end::Tab content-->


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
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script>
    // Function to handle name and email search
    function handleNameAndEmailSearch() {
        // Get the search input value
        var searchText = $('#search').val().toLowerCase();
        console.log(searchText)
        // Loop through each user element
        $('.members').each(function() {
            // Find the name and email elements
            var nameElement = $(this).find('.search_name');
            var emailElement = $(this).find('.fw-semibold.fs-7');
            var memberElement = $(this).find('.contact_image');
            var name = $(this).text();
            console.log(memberElement)
            // Get the text content of the name and email elements
            var nameText = nameElement.text().toLowerCase();
            var emailText = emailElement.text().toLowerCase();

            // Check if either the name or email contains the search text
            console.log(nameText.indexOf(searchText))
            if (nameText.indexOf(searchText) === -1) {
                // Hide the user element if neither matches the search text
                console.log(this)
                $(nameElement).hide();
                $(emailElement).hide();
                $(memberElement).hide();
            } else {
                // Show the user element if either matches the search text
                $(nameElement).show();
                $(emailElement).show();
                $(memberElement).show();
            }
        });
    }

    // Attach the search handler to the input change event
    $('#search').on('input', function() {
        handleNameAndEmailSearch();
    });
</script>