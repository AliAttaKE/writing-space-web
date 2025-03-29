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
                    <h1 class="page-heading d-flex fs-color-white custom-fs-23 fw-bold flex-column justify-content-center my-0">
                        Invoice Management</h1>
                    <!--end::Title-->
                    <!--begin::Breadcrumb-->
                    <!-- <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        
                        <li class="breadcrumb-item fs-color-white custom-fs-13">Invoice Management</li>
                        
                    </ul> -->
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->

                <!--begin::Actions-->
                <div class="d-flex align-items-center gap-2 gap-lg-3">
                    <!--begin::Primary button-->
                    <a href="{{ route('admin.create.custom.invoice') }}" class="btn btn-sm fw-bold badge-custom-bg">Back</a>
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
                        @if($invoice)
                            <!--begin::Card-->
                        <div class="card mb-10">
                            <!--begin::Card body-->
                            <div class="card-body p-12">
                                <!--begin::Form-->
                                <form action="{{route('admin.store.custom.invoice')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" id="id" name="id" value="{{$invoice->id}}"
                                                    class="form-control ms-3">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-column align-items-start flex-xxl-row">
                                        <!--begin::Input group-->
                                        <div class="d-flex align-items-center flex-equal fw-row me-4 order-2"
                                            data-bs-toggle="tooltip" data-bs-trigger="hover"
                                            data-bs-original-title="Specify invoice date" data-kt-initialized="1">
                                            <!--begin::Date-->
                                            <div class="fw-bold fs-color-white custom-fs-13 text-nowrap">Date:</div>
                                            <!--end::Date-->
                                            <!--begin::Input-->
                                            <div class="position-relative d-flex align-items-center w-150px">
                                                <!--begin::Datepicker-->
                                                <input type="date" id="date" name="date" value="{{$invoice->date}}"
                                                    class="form-control ms-3 btn-dark-primary">
                                                <!--end::Datepicker-->
                                                <!--begin::Icon-->
                                                <i class="ki-duotone ki-down fs-4 position-absolute ms-4 end-0"></i>
                                                <!--end::Icon-->
                                            </div>
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="d-flex flex-center flex-equal fw-row text-nowrap order-1 order-xxl-2 me-4"
                                            data-bs-toggle="tooltip" data-bs-trigger="hover"
                                            data-bs-original-title="Enter invoice number" data-kt-initialized="1">
                                            <span class="fs-2x fw-bold fs-color-white custom-fs-13">Invoice #</span>
                                            <input type="text" name="invoice_id"
                                                class="form-control form-control-flush fs-color-white custom-fs-13 fs-3"
                                                 value="{{$invoice->invoice_id}}">
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
                                                <label class="form-label fw-bold fs-color-white custom-fs-13 mb-3">Bill From</label>
                                                <!--begin::Input group-->
                                                <div class="mb-5">
                                                    <input type="text" class="form-control btn-dark-primary form-control-solid"
                                                        name="from_name" value="{{$invoice->from_name}}" placeholder="Name">
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="mb-5">
                                                    <input type="text" class="form-control btn-dark-primary form-control-solid"
                                                        name="from_email" value="{{$invoice->from_email}}" placeholder="Email">
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="mb-5">
                                                    <textarea class="form-control form-control-solid btn-dark-primary" name="from_note" rows="3"
                                                        placeholder="Who is this invoice from?">{{$invoice->from_note}}</textarea>
                                                </div>
                                                <!--end::Input group-->
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-lg-6">
                                                <label class="form-label fw-bold fs-color-white custom-fs-13 mb-3">Bill To</label>
                                                <!--begin::Input group-->
                                                <div class="mb-5">
                                                    <input type="text" class="form-control btn-dark-primary form-control-solid"
                                                        name="to_name" value="{{$invoice->to_name}}" placeholder="Name">
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="mb-5">
                                                    <input type="text" class="form-control btn-dark-primary form-control-solid"
                                                        name="to_email" value="{{$invoice->to_email}}" placeholder="Email">
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="mb-5">
                                                    <textarea name="to_note" class="form-control btn-dark-primary form-control-solid" rows="3" 
                                                    placeholder="What is this invoice for?">{{$invoice->to_note}}</textarea>
                                                </div>
                                                <!--end::Input group-->
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Row-->
                                        <!--begin::Table wrapper-->
                                        <div class="table-responsive mb-10">
                                            <!--begin::Table-->
                                            <table class="table g-5 gs-0 mb-0 fw-bold fs-color-white custom-fs-13"
                                                data-kt-element="items">
                                                <!--begin::Table head-->
                                                <thead>
                                                    <tr class="border-bottom fs-7 fw-bold text-gray-700 text-uppercase">
                                                        <th class="min-w-300px fs-color-white custom-fs-13 w-475px">Item</th>
                                                        <th class="min-w-100px w-100px fs-color-white custom-fs-13">Page</th>
                                                        <th class="min-w-150px w-150px fs-color-white custom-fs-13">Price Per Page</th>
                                                        <th class="min-w-100px w-150px text-end fs-color-white custom-fs-13">Total</th>
                                                        <th class="min-w-75px w-75px text-end fs-color-white custom-fs-13">Action</th>
                                                    </tr>
                                                </thead>
                                                <!--end::Table head-->
                                                
                                                
                                                
                                                <tbody>
                                                    @php
                                                        $item_names = json_decode($invoice->item_name);
                                                        $descriptions = json_decode($invoice->description);
                                                        $pagess = json_decode($invoice->pages);
                                                        $price_per_pages = json_decode($invoice->price_per_page);
                                                    @endphp
                                                
                                                    @for ($i = 0; $i < count($item_names); $i++)
                                                    <tr class="border-bottom border-bottom-dashed" data-kt-element="item">
                                                        <td class="pe-7">
                                                            <input type="text"
                                                                class="form-control form-control-solid btn-dark-primary mb-2"
                                                                name="item_name[]" value="{{ $item_names[$i] }}" placeholder="Item name">
                                                            <input type="text" class="form-control btn-dark-primary form-control-solid"
                                                                name="description[]" value="{{ $descriptions[$i] }}" placeholder="Description">
                                                        </td>
                                                        <td class="ps-0">
                                                            <input class="form-control form-control-solid btn-dark-primary" type="number"
                                                                min="1" name="pages[]" value="{{ $pagess[$i] }}" placeholder="1"
                                                                data-kt-element="pages[]">
                                                        </td>
                                                        <td>
                                                            <input type="text"
                                                                class="form-control form-control-solid text-end btn-dark-primary"
                                                                name="price_per_page[]" value="{{ $price_per_pages[$i] }}" placeholder="0.00"
                                                                data-kt-element="price_per_page[]">
                                                        </td>
                                                        @php
                                                            $rowTotal = 0;
                                                            $rowTotal = $price_per_pages[$i] * $pagess[$i];
                                                            $subTotal = 0;
                                                            $subTotal += $price_per_pages[$i] * $pagess[$i];
                                                            $grandTotal = 0;
                                                            $grandTotal =  $subTotal;
                                                        @endphp
                                                        <td class="pt-8 text-end text-nowrap">$
                                                            <span data-kt-element="total" class="fs-color-white custom-fs-13">{{$rowTotal}}.00</span>
                                                        </td>
                                                        <td class="pt-5 text-end">
                                                            <button type="button"
                                                                class="btn btn-sm btn-icon btn-active-color-primary"
                                                                data-kt-element="remove-item">
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
                                                    @endfor
                                                </tbody>

                                                
                                                
                                                <!--end::Table body-->

                                                <!--begin::Table foot-->
                                                <tfoot>
                                                    <tr
                                                        class="border-top border-top-dashed align-top fs-6 fw-bold text-gray-700">
                                                        <th class="text-primary">
                                                            {{-- <button class="btn btn-link py-1 addItemButton"
                                                                >Add item</button> --}}
                                                        </th>
                                                        
                                                        <th colspan="2"
                                                            class="border-bottom border-bottom-dashed ps-0">
                                                            <div class="d-flex flex-column align-items-start">
                                                                <div class="fs-5 fs-color-white custom-fs-13">Subtotal</div>
                                                                <button class="btn btn-link py-1 fs-color-white custom-fs-13" data-bs-toggle="tooltip"
                                                                    data-bs-trigger="hover"
                                                                    data-bs-original-title="Coming soon"
                                                                    data-kt-initialized="1">Add tax</button>
                                                                <button class="btn btn-link py-1 fs-color-white custom-fs-13" data-bs-toggle="tooltip"
                                                                    data-bs-trigger="hover"
                                                                    data-bs-original-title="Coming soon"
                                                                    data-kt-initialized="1">Add discount</button>
                                                            </div>
                                                        </th>
                                                        <th colspan="2"
                                                            class="border-bottom border-bottom-dashed text-end">$
                                                            <span id="_sub_total" class="fs-color-white custom-fs-13">{{$subTotal}}.00</span>
                                                        </th>
                                                    </tr>
                                                    <tr class="align-top fw-bold text-gray-700">
                                                        <th></th>
                                                        <th colspan="2" class="fs-4 ps-0 fs-color-white custom-fs-13">Total</th>
                                                        <th colspan="2" class="text-end fs-4 fs-color-white custom-fs-13 text-nowrap">$
                                                            <span id="_grand_total" class="fs-color-white custom-fs-13">{{$grandTotal}}.00</span>
                                                        </th>
                                                    </tr>
                                                    

                                                </tfoot>
                                                <!--end::Table foot-->
                                            </table>
                                        </div>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Wrapper-->


                                    <div class="mb-0 mt-10 row justify-content-between">
                                        
                                        <div class="col-3">
                                            <!--end::Row-->
                                            <button type="button" class="btn btn-dark-primary w-100">
                                                <i class="ki-duotone ki-triangle fs-3">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                </i>
                                                Send Invoice
                                            </button>
                                        </div>

                                        <div class="col-3">
                                            <!--end::Row-->
                                            <button type="button" class="btn btn-dark-primary w-100"
                                            onclick="window.location.href='{{ route('admin.generate.custom.invoice', ['id' => $invoice->id]) }}'">
                                            
                                                <i class="ki-duotone ki-triangle fs-3">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                </i>
                                                Download Invoice
                                            </button>
                                        </div>

                                        <div class="col-3">
                                            <!--end::Row-->
                                            <button type="submit" class="btn btn-dark-primary w-100">
                                            
                                                <i class="ki-duotone ki-triangle fs-3">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                </i>
                                                Update Invoice
                                            </button>
                                        </div>


                                    </div>


                                </form>
                                <!--end::Form-->

                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card-->
                        @endif
                        

                    <!--end::Content-->
                </div>
                <!--end::Layout-->


            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->
    </div>

    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <i class="ki-duotone ki-arrow-up">
            <span class="path1"></span>
            <span class="path2"></span>
        </i>
    </div>
    <!--end::Scrolltop-->
@endsection
@section('customJs')
<script>
    $(document).ready( function (){

        function updateRowTotal(row) {
            var pages = parseFloat(row.find('input[name="pages[]"]').val());
            var pricePerPage = parseFloat(row.find('input[name="price_per_page[]"]').val());
            var itemTotal = pages * pricePerPage;
            row.find('span[data-kt-element="total"]').text(itemTotal.toFixed(2)); 
            return itemTotal;
        }


        function updateTotal() {
            var total = 0;
            $('#newItem tr[data-kt-element="item"]').each(function() {
                total += updateRowTotal($(this)); 
            });
            $('#_sub_total').text(total.toFixed(2));
            updateGrandTotal(); 
        }


        function updateGrandTotal() {
            var subTotal = parseFloat($('#_sub_total').text());
            
            var grandTotal = subTotal; 
            $('#_grand_total').text(grandTotal.toFixed(2));
        }


        $(document).on('click', '.addItemButton', function(e) {
            e.preventDefault();
            var newRow = $('#newItem tr:last').clone();
            newRow.find('input[type="text"]').val('');
            newRow.find('input[type="number"]').val('1');
            newRow.find('span[data-kt-element="total"]').text('0.00');
            $('#newItem').append(newRow);
            updateTotal(); 
        });


        $(document).on('click', '[data-kt-element="remove-item"]', function() {
            if ($('#newItem tr').length > 1) {
                $(this).closest('tr').remove();
            } else {
                $(this).closest('tr').find('input[type="text"]').val('');
                $(this).closest('tr').find('input[type="number"]').val('1');
                $(this).closest('tr').find('span[data-kt-element="total"]').text('0.00');
            }
            updateTotal();
        });


        $(document).on('input', 'input[name="pages[]"], input[name="price_per_page[]"]', function() {
            var row = $(this).closest('tr');
            updateRowTotal(row);
            updateTotal();
        });


    });
</script>
@endsection
