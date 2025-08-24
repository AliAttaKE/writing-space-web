<div class="card mb-6 mb-xl-9 card-custom-bg message-summ">
    <!--begin::Header-->
    <div class="card-header">
        <!--begin::Title-->
        <div class="card-title">
            <h2 class="fs-color-white custom-fs-23">Payment Records</h2>
        </div>
        <!--end::Title-->
        <!--begin::Toolbar-->
        <div class="card-toolbar">
            <div class="d-flex">
                <input type="month" name="packages_filter_date" class="form-control btn-dark-primary" id="packages_filter_date" min="2018-01">
                <button type="button" class="btn badge-custom-bg btn-sm reset_package_filter ms-4">Reset</button>
            </div>
        </div>
        <!--end::Toolbar-->
    </div>
    <!--end::Header-->

    <div class="card-body pb-5">
        <!--begin::Tab Content-->
        <div class="py-0">
            <!--begin::Table-->
            <table class="table align-middle table-row-dashed gy-5" id="kt_table_packages_payment">
                <thead class="border-bottom border-gray-200 fs-7 fw-bold">
                    <tr class="text-start text-muted text-uppercase gs-0">
                        <th class="min-w-150px">Payment Type</th>
                        <th class="min-w-100px">Invoice No.</th>
                        <th class="min-w-100px">Receipt No.</th>
                        <th>Status</th>
                        <th>Amount</th>
                        <th class="min-w-100px">Date</th>
                    </tr>
                </thead>
                <tbody class="fs-6 fw-semibold text-gray-600">
                    @foreach ($data as $order)
                        <tr>
                            <td>
                                @if($order->invoice_type == 'package_inc')
                                    Package
                                @elseif ($order->invoice_type == null)
                                    Package - Addon
                                @elseif ($order->invoice_type == 'custom_inc' && $order->item_name == 'Custom Order - Pages Addon')
                                    Custom Order - Pages Addon
                                @elseif ($order->invoice_type == 'custom_inc')
                                    Custom Order
                                @endif
                            </td>
                            <td>
                                <a href="{{ url('invoices/invoice_' . $order->invoice_id .'.pdf') }}"
                                   class="text-gray-600 text-hover-primary mb-1"
                                   target="_blank">
                                    {{ $order->invoice_id }}
                                </a>
                            </td>
                            <td>
                                <a href="{{ url('storage/receipts/receipt_' . $order->invoice_id .'.pdf') }}"
                                   class="text-gray-600 text-hover-primary mb-1"
                                   target="_blank">
                                    {{ $order->receipt_number }}
                                </a>
                            </td>
                            <td>
                                @if ($order->total != null)
                                    <span class="badge badge-light-success badge-custom-bg">Successful</span>
                                @else
                                    <span class="badge badge-light-danger">No paid</span>
                                @endif
                            </td>
                            <td>
                                $ {{ number_format($order->total, 2) }}
                            </td>
                            <td data-order="{{ $order->created_at }}">
                                {{ \Carbon\Carbon::parse($order->created_at)->format('j M Y, g:i a') }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <!--end::Table-->
        </div>
        <!--end::Tab panel-->
    </div>
</div>
