<style>
    .form-select-solid{
        width: 50px !important;
    }
/* Keep ONLY theme (orange) arrow — hide native browser arrow */
#admin_kt_table_payments_wrapper .dataTables_length .form-select,
#admin_kt_table_custom_orders_wrapper .dataTables_length .form-select {
  -webkit-appearance: none !important;
  -moz-appearance: none !important;
  appearance: none !important;        /* native arrow off */
  background-repeat: no-repeat !important;
  background-position: right .75rem center !important;
  background-size: 16px 12px !important;
  padding-right: 2.25rem !important;  /* arrow ke liye space */
}
/* Old Edge/IE fallback */
#admin_kt_table_payments_wrapper .dataTables_length .form-select::-ms-expand,
#admin_kt_table_custom_orders_wrapper .dataTables_length .form-select::-ms-expand {
  display: none;
}
label::after{
    display: none !important;
}
</style>

<div id="admin-payment-section-wrapper">
    <div class="card mb-6 mb-xl-9 card-custom-bg message-summ">
        <div class="card-header">
            <div class="card-title">
                <h2 class="fs-color-white custom-fs-23">Payment Records</h2>
            </div>
          <div class="card-toolbar">
  <div class="d-flex">
      <input type="text" id="admin_payments_search" class="form-control btn-dark-primary ms-3" placeholder="Search payments…" style="min-width:220px;">
    <input type="month" name="admin_packages_filter_date" class="form-control btn-dark-primary ms-3" id="admin_packages_filter_date" min="2018-01">
    <button type="button" class="btn badge-custom-bg btn-sm admin-reset-package-filter ms-4">Reset</button>
  </div>
</div>

        </div>

        <div class="card-body pb-5">
            <div class="py-0">
                <table class="table align-middle table-row-dashed gy-5" id="admin_kt_table_payments">
                    <thead class="border-bottom border-gray-200 fs-7 fw-bold">
                        <tr class="text-start text-muted text-uppercase gs-0">
                            <th class="min-w-150px">Payment Type</th>
                            <th class="min-w-150px">Order ID</th>
                            <th class="min-w-100px">Invoice No.</th>
                            <th class="min-w-100px">Receipt No.</th>
                            <th>Status</th>
                            <th>Amount</th>
                            <th class="min-w-100px">Date</th>
                        </tr>
                    </thead>
                    <tbody class="fs-6 fw-semibold text-gray-600" id="admin_package_payment_tbody">
    @foreach ($data as $row)
        <tr>
            {{-- 1: Payment Type --}}
                                                                <td>
                                                                    @if($row->invoice_type == 'package_inc')
                                                                       Package Purchase
                                                                    @elseif ($row->invoice_type == Null && $row->item_name == 'Pages')
                                                                       Package - Pages Addon
                                                                    @elseif ($row->invoice_type == Null && $row->item_name == 'row add Pages')
                                                                       Order - Pages Addon
                                                                    @elseif ($row->invoice_type == 'custom_inc' && $row->item_name == 'Custom Order - Pages Addon')
                                                                        Custom Order - Pages Addon
                                                                    @elseif ($row->invoice_type == 'custom_inc')
                                                                        Custom Order
                                                                    @endif
                                                                </td>
             
                                                                   @php
                                                                        // Get subscription directly from order_id
                                                                        $subscription = \App\Models\Subscription::where('id', $row->order_id)->first();

                                                                        // Get user subscription record
                                                                        $User_Subscription = \App\Models\User_Subscription::where('id', $row->order_id)->first();

                                                                        // Get subscription id from user subscription
                                                                        $Subscription_id = $User_Subscription->subscription_id ?? null;

                                                                        // Get subscription details based on subscription_id
                                                                        $subscription_get = null;
                                                                        if ($Subscription_id) {
                                                                            $subscription_get = \App\Models\Subscription::where('id', $Subscription_id)->first();
                                                                        }
                                                                    @endphp


                                                                    @if($row->invoice_type == 'package_inc')
                                                                        <td>
                                                                            {{ $subscription->subscription_name ?? 'None' }}
                                                                        </td>
                                                                    @elseif (is_null($row->invoice_type))
                                                                        <td>
                                                                            {{ $row->order_id ?? 'None' }}
                                                                        </td>
                                                                    @elseif ($row->invoice_type == Null && $row->item_name == 'order add Pages')
                                                                        <td>
                                                                            {{ $row->subscription_name ?? 'None' }}
                                                                        </td>
                                                                    @else
                                                                        <td>
                                                                            {{ $row->order_id ?? 'None' }}
                                                                        </td>
                                                                    @endif
                                                            

            {{-- 2: Invoice No. --}}
            <td>
                <a href="{{ url('invoices/invoice_' . $row->invoice_id . '.pdf') }}"
                   class="text-gray-600 text-hover-primary mb-1"
                   target="_blank">
                    {{ $row->invoice_id }}
                </a>
            </td>

            {{-- 3: Receipt No. --}}
            <td>
                <a href="{{ url('storage/receipts/receipt_' . $row->invoice_id . '.pdf') }}"
                   class="text-gray-600 text-hover-primary mb-1"
                   target="_blank">
                    {{ $row->receipt_number }}
                </a>
            </td>

            {{-- 4: Status --}}
            <td>
                @if (!is_null($row->total))
                    <span class="badge badge-light-success badge-custom-bg">Successful</span>
                @else
                    <span class="badge badge-light-danger">No paid</span>
                @endif
            </td>

            {{-- 5: Amount --}}
            <td>$ {{ number_format($row->total ?? 0, 2) }}</td>

            {{-- 6: Date --}}
            <td data-order="{{ \Carbon\Carbon::parse($row->created_at)->toIso8601String() }}">
                {{ \Carbon\Carbon::parse($row->created_at)->format('j M Y, g:i a') }}
            </td>
        </tr>
    @endforeach
</tbody>

                </table>
            </div>
        </div>
    </div>
</div>
