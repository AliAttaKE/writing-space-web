<div class="d-flex flex-column flex-column-fluid">
    <!--begin::Toolbar-->
    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
        <!--begin::Toolbar container-->
        <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                <!--begin::Title-->
                <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">Contact Details</h1>
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
                    <li class="breadcrumb-item text-muted">(Teir-1) Posted Custom Order</li>
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
                    <!--begin::Card-->
                    <div class="card card-flush h-lg-100" id="kt_contacts_main">
                        <!--begin::Card body-->
                        <div class="card-body p-0">
                            <!--begin::Wrapper-->
                            <div class="card-px text-center py-20 my-10">
                                <!--begin::Title-->
                                <h2 class="fs-2x fw-bold mb-10">Welcome to the Contacts App</h2>
                                <!--end::Title-->
                                <!--begin::Description-->
                                <p class="text-gray-500 fs-4 fw-semibold mb-10">It's time to expand our contacts.
                                    <br />Kickstart your contacts growth by adding a your next contact.
                                </p>
                                <!--end::Description-->
                                <!--begin::Action-->
                                <a href="customer-add-new-contact.php" class="btn btn-primary">Add New Contact</a>
                                <!--end::Action-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Illustration-->
                            <div class="text-center px-4">
                                <img class="mw-100 mh-300px" alt="" src="assets/media/illustrations/sketchy-1/5.png" />
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