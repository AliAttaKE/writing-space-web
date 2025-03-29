@extends('custom_layout.master')
@section('main_content')


    <!--begin::Content wrapper-->
    <div class="d-flex flex-column flex-column-fluid">

                <!--begin::Toolbar-->
                <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
                    <!--begin::Toolbar container-->
                    <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                        <!--begin::Page title-->
                        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                            <!--begin::Title-->
                            <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0 fs-color-white custom-fs-23">Invoice Management</h1>
                            <!--end::Title-->
                            <!--begin::Breadcrumb-->
                            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                                <!--begin::Item-->
                                <li class="breadcrumb-item text-muted fs-color-white custom-fs-13">Invoice Management</li>
                                <!--end::Item-->
                            </ul>
                            <!--end::Breadcrumb-->
                        </div>
                        <!--end::Page title-->
        
                        <!--begin::Actions-->
                        <div class="d-flex align-items-center gap-2 gap-lg-3">
                            <!--begin::Primary button-->
                            <a href="{{route('admin.invoices.index')}}" class="btn btn-sm fw-bold badge-custom-bg">Back</a>
                            <!--end::Primary button-->
                        </div>
                        <!--end::Actions-->
        
        
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
                    <!--begin::Content-->
                    <div class="flex-lg-row-fluid mb-10 mb-lg-0 me-lg-7 me-xl-10">
                        <!--begin::Card-->
                        <div class="card mb-10">
                            <!--begin::Card body-->
                            <div class="card-body p-12">
                                <!--begin::Form-->
                                <form action="" id="kt_invoice_form">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-column align-items-start flex-xxl-row">
                                        <!--begin::Input group-->
                                        <div class="d-flex align-items-center flex-equal fw-row me-4 order-2" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-original-title="Specify invoice date" data-kt-initialized="1">
                                            <!--begin::Date-->
                                            <div class="fs-6 fw-bold text-gray-700 text-nowrap">Date:</div>
                                            <!--end::Date-->
                                            <!--begin::Input-->
                                            <div class="position-relative d-flex align-items-center w-150px">
                                                <!--begin::Datepicker-->
                                                <input type="datetime-local" id="meeting-time" name="meeting-time" value="2018-06-12T19:30" min="2018-06-07T00:00" max="2018-06-14T00:00" class="form-control ms-3">
                                                <!--end::Datepicker-->
                                                <!--begin::Icon-->
                                                <i class="ki-duotone ki-down fs-4 position-absolute ms-4 end-0"></i>
                                                <!--end::Icon-->
                                            </div>
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="d-flex flex-center flex-equal fw-row text-nowrap order-1 order-xxl-2 me-4" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-original-title="Enter invoice number" data-kt-initialized="1">
                                            <span class="fs-2x fw-bold text-gray-800">Invoice #</span>
                                            <input type="text" class="form-control form-control-flush fw-bold text-muted fs-3 w-300px" value="2021001" placehoder="...">
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Top-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed my-10"></div>
                                    <!--end::Separator-->
                                    <!--begin::Wrapper-->
                                    <div class="mb-0">
                                        <!--begin::Row-->
                                        <div class="row gx-10 mb-5 invoice-form">
                                            <!--begin::Col-->
                                            <div class="col-lg-6">
                                                <label class="form-label fs-6 fw-bold text-gray-700 mb-3">Bill From</label>
                                                <!--begin::Input group-->
                                                <div class="mb-5">
                                                    <input type="text" class="form-control form-control-solid" placeholder="Name">
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="mb-5">
                                                    <input type="text" class="form-control form-control-solid" placeholder="Email">
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="mb-5">
                                                    <textarea name="notes" class="form-control form-control-solid" rows="3" placeholder="Who is this invoice from?"></textarea>
                                                </div>
                                                <!--end::Input group-->
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-lg-6">
                                                <label class="form-label fs-6 fw-bold text-gray-700 mb-3">Bill To</label>
                                                <!--begin::Input group-->
                                                <div class="mb-5">
                                                    <input type="text" class="form-control form-control-solid" placeholder="Name">
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="mb-5">
                                                    <input type="text" class="form-control form-control-solid" placeholder="Email">
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="mb-5">
                                                    <textarea name="notes" class="form-control form-control-solid" rows="3" placeholder="What is this invoice for?"></textarea>
                                                </div>
                                                <!--end::Input group-->
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Row-->
                                        <!--begin::Table wrapper-->
                                        <div class="table-responsive mb-10">
                                            <!--begin::Table-->
                                            <table class="table g-5 gs-0 mb-0 fw-bold text-gray-700" data-kt-element="items">
                                                <!--begin::Table head-->
                                                <thead>
                                                    <tr class="border-bottom fs-7 fw-bold text-gray-700 text-uppercase">
                                                        <th class="min-w-300px w-475px">Item</th>
                                                        <th class="min-w-100px w-100px">Page</th>
                                                        <th class="min-w-150px w-150px">Price Per Page</th>
                                                        <th class="min-w-100px w-150px text-end">Total</th>
                                                        <th class="min-w-75px w-75px text-end">Action</th>
                                                    </tr>
                                                </thead>
                                                <!--end::Table head-->
                                                <!--begin::Table body-->
                                                <tbody>
                                                    <tr class="border-bottom border-bottom-dashed" data-kt-element="item">
                                                        <td class="pe-7">
                                                            <input type="text" class="form-control form-control-solid mb-2" name="name[]" placeholder="Item name">
                                                            <input type="text" class="form-control form-control-solid" name="description[]" placeholder="Description">
                                                        </td>
                                                        <td class="ps-0">
                                                            <input class="form-control form-control-solid" type="number" min="1" name="quantity[]" placeholder="1" value="1" data-kt-element="quantity">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control form-control-solid text-end" name="price[]" placeholder="0.00" value="0.00" data-kt-element="price">
                                                        </td>
                                                        <td class="pt-8 text-end text-nowrap">$
                                                            <span data-kt-element="total">0.00</span>
                                                        </td>
                                                        <td class="pt-5 text-end">
                                                            <button type="button" class="btn btn-sm btn-icon btn-active-color-primary" data-kt-element="remove-item">
                                                                <i class="ki-duotone ki-trash fs-3">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                    <span class="path3"></span>
                                                                    <span class="path4"></span>
                                                                    <span class="path5"></span>
                                                                </i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <!--end::Table body-->
                                                <!--begin::Table foot-->
                                                <tfoot>
                                                    <tr class="border-top border-top-dashed align-top fs-6 fw-bold text-gray-700">
                                                        <th class="text-primary">
                                                            <button class="btn btn-link py-1" data-kt-element="add-item">Add item</button>
                                                        </th>
                                                        <th colspan="2" class="border-bottom border-bottom-dashed ps-0">
                                                            <div class="d-flex flex-column align-items-start">
                                                                <div class="fs-5">Subtotal</div>
                                                                <button class="btn btn-link py-1" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-original-title="Coming soon" data-kt-initialized="1">Add tax</button>
                                                                <button class="btn btn-link py-1" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-original-title="Coming soon" data-kt-initialized="1">Add discount</button>
                                                            </div>
                                                        </th>
                                                        <th colspan="2" class="border-bottom border-bottom-dashed text-end">$
                                                            <span data-kt-element="sub-total">0.00</span>
                                                        </th>
                                                    </tr>
                                                    <tr class="align-top fw-bold text-gray-700">
                                                        <th></th>
                                                        <th colspan="2" class="fs-4 ps-0">Total</th>
                                                        <th colspan="2" class="text-end fs-4 text-nowrap">$
                                                            <span data-kt-element="grand-total">0.00</span>
                                                        </th>
                                                    </tr>
                                                </tfoot>
                                                <!--end::Table foot-->
                                            </table>
                                        </div>
                                        <!--end::Table-->
                                        <!--begin::Item template-->
                                        <table class="table d-none" data-kt-element="item-template">
                                            <tbody><tr class="border-bottom border-bottom-dashed" data-kt-element="item">
                                                <td class="pe-7">
                                                    <input type="text" class="form-control form-control-solid mb-2" name="name[]" placeholder="Item name">
                                                    <input type="text" class="form-control form-control-solid" name="description[]" placeholder="Description">
                                                </td>
                                                <td class="ps-0">
                                                    <input class="form-control form-control-solid" type="number" min="1" name="quantity[]" placeholder="1" data-kt-element="quantity">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control form-control-solid text-end" name="price[]" placeholder="0.00" data-kt-element="price">
                                                </td>
                                                <td class="pt-8 text-end">$
                                                    <span data-kt-element="total">0.00</span>
                                                </td>
                                                <td class="pt-5 text-end">
                                                    <button type="button" class="btn btn-sm btn-icon btn-active-color-primary" data-kt-element="remove-item">
                                                        <i class="ki-duotone ki-trash fs-3">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            <span class="path3"></span>
                                                            <span class="path4"></span>
                                                            <span class="path5"></span>
                                                        </i>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody></table>
                                        <table class="table d-none" data-kt-element="empty-template">
                                            <tbody><tr data-kt-element="empty">
                                                <th colspan="5" class="text-muted text-center py-10">No items</th>
                                            </tr>
                                        </tbody></table>
                                        <!--end::Item template-->
    
                                    </div>
                                    <!--end::Wrapper-->


                                    <div class="mb-0 mt-10 row justify-content-between">
                                        <!--begin::Row-->
                                        <div class="row mb-5 col-5">
                                            <!--begin::Col-->
                                            {{-- <div class="col-6">
                                                <a href="#" class="btn btn-light btn-active-light-primary w-100">Download</a>
                                            </div> --}}
                                            <!--end::Col-->
                                        </div>
                                        <div class="col-3">
                                            <!--end::Row-->
                                            <button type="button" onclick="alert('sorry, we are working on it! ')" class="btn btn-primary w-100" id="kt_invoice_submit_button">
                                                <i class="ki-duotone ki-triangle fs-3">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                </i>Send Invoice</button>
                                        </div>
                                    </div>


                                </form>
                                <!--end::Form-->
    
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card-->
                        
    
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Layout-->
            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Content wrapper-->
    <div class="modal fade" id="view-invoice" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h5 class="modal-title" id="exampleModalLabel">Invoice</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
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
                                                <img alt="Logo" src="assets/media/ws/ws-dark-name-logo.png">
                                            </a>
                                            <!--end::Logo-->
                                        </div>
                                        <!--end::Top-->
                                        <!--begin::Wrapper-->
                                        <div class="m-0">
                                            <!--begin::Label-->
                                            <div class="fw-bold fs-3 text-gray-800 mb-8">Invoice #34782</div>
                                            <!--end::Label-->
                                            <!--begin::Row-->
                                            <div class="row g-5 mb-11">
                                                <!--end::Col-->
                                                <div class="col-sm-6">
                                                    <!--end::Label-->
                                                    <div class="fw-semibold fs-7 text-gray-600 mb-1">Issue Date:</div>
                                                    <!--end::Label-->
                                                    <!--end::Col-->
                                                    <div class="fw-bold fs-6 text-gray-800">12 Apr 2021</div>
                                                    <!--end::Col-->
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Row-->
                                            <!--begin::Row-->
                                            <div class="row g-5 mb-12">
                                                <!--end::Col-->
                                                <div class="col-sm-6">
                                                    <!--end::Label-->
                                                    <div class="fw-semibold fs-7 text-gray-600 mb-1">Issue For:</div>
                                                    <!--end::Label-->
                                                    <!--end::Text-->
                                                    <div class="fw-bold fs-6 text-gray-800">Abeer</div>
                                                    <!--end::Text-->
                                                    <!--end::Description-->
                                                    <div class="fw-semibold fs-7 text-gray-600">abeer@elementary-solutions.com
                                                        <br>xyz
                                                    </div>
                                                    <!--end::Description-->
                                                </div>
                                                <!--end::Col-->
                                                <!--end::Col-->
                                                <div class="col-sm-6">
                                                    <!--end::Label-->
                                                    <div class="fw-semibold fs-7 text-gray-600 mb-1">Issued By:</div>
                                                    <!--end::Label-->
                                                    <!--end::Text-->
                                                    <div class="fw-bold fs-6 text-gray-800">Abeer</div>
                                                    <!--end::Text-->
                                                    <!--end::Description-->
                                                    <div class="fw-semibold fs-7 text-gray-600">abeer@elementary-solutions.com
                                                        <br>xyz
                                                    </div>
                                                    <!--end::Description-->
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Row-->
                                            <!--begin::Content-->
                                            <div class="flex-grow-1 mb-12">
                                                <!--end::Label-->
                                                <div class="fw-semibold fs-7 text-gray-600 mb-1">Item Name:</div>
                                                <!--end::Label-->
                                                <!--end::Text-->
                                                <div class="fw-bold fs-6 text-gray-800">xyz</div>
                                                <!--end::Text-->
                                                <!--end::Description-->
                                                <div class="fw-semibold fs-7 text-gray-600">I have visited this website and i got inspired by it's designing etc.
                                                </div>
                                                <!--end::Description-->
                                            </div>
                                            <!--end::Content-->
                                            <!--begin::Row-->
                                            <div class="row g-5 mb-12">
                                                <!--end::Col-->
                                                <div class="col-sm-4">
                                                    <!--end::Label-->
                                                    <div class="fw-semibold fs-7 text-gray-600 mb-1">Page:</div>
                                                    <!--end::Label-->
                                                    <!--end::Text-->
                                                    <div class="fw-bold fs-6 text-gray-800">2</div>
                                                    <!--end::Text-->
                                                </div>
                                                <!--end::Col-->
                                                <!--end::Col-->
                                                <div class="col-sm-4">
                                                    <!--end::Label-->
                                                    <div class="fw-semibold fs-7 text-gray-600 mb-1">Price Per Page:</div>
                                                    <!--end::Label-->
                                                    <!--end::Text-->
                                                    <div class="fw-bold fs-6 text-gray-800"><i class="bi bi-currency-dollar me-3"></i> 10</div>
                                                    <!--end::Text-->
                                                </div>
                                                <!--end::Col-->
                                                <!--end::Col-->
                                                <div class="col-sm-4">
                                                    <!--end::Label-->
                                                    <div class="fw-semibold fs-7 text-gray-600 mb-1">Total:</div>
                                                    <!--end::Label-->
                                                    <!--end::Text-->
                                                    <div class="fw-bold fs-6 text-gray-800"><i class="bi bi-currency-dollar me-3"></i> 25</div>
                                                    <!--end::Text-->
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Row-->
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
                <div class="modal-footer border-0 justify-content-between">
                    <div class="">
                        <button type="button" class="btn btn-success my-1 me-12" onclick="window.print();">Print Invoice</button>
                    </div>
                    <div class="">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
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
    <!--begin::Javascript-->
    <script>
        var hostUrl = "assets/";
    </script>
    <script>
        // Function to handle table search
        function handleTableSearch() {
            // Get the search input value
            var searchText = $('[data-kt-user-table-filter="search"]').val().toLowerCase();
            console.log(searchText)
            // Loop through each table row
            $('#kt_table_invoice tbody tr').each(function() {
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
        $('[data-kt-user-table-filter="search"]').on('input', function() {
            handleTableSearch();
        });
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
            // Initialize DataTables
            var table = $('#kt_table_invoice').DataTable();
    
            // Filter form submission
            $('[data-kt-user-table-filter="filter"]').on('click', function(e) {
                e.preventDefault();
    
                // Get filter values
                var invoiceId = $('input[name="invoice-id"]').val();
                var item = $('input[name="item"]').val();
    
                // Apply filters
                table.columns(1).search(invoiceId).draw();
                table.columns(2).search(item).draw();
            });
    
            // Reset filter form
            $('[data-kt-user-table-filter="reset"]').on('click', function(e) {
                e.preventDefault();
    
                // Reset input fields
                $('input[name="invoice-id"]').val('');
                $('input[name="item"]').val('');
    
                // Clear filters
                table.columns().search('').draw();
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#kt_table_invoice').DataTable();
        });
    </script>
    




@endsection