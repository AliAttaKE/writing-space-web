<div class="card mb-6 mb-xl-9 card-custom-bg message-summ">
    <!--begin::Header-->
    <div class="card-header">
        <!--begin::Title-->
        <div class="card-title">
            <h2 class="fs-color-white custom-fs-23">Order Records</h2>
        </div>
        <!--end::Title-->
        <!--begin::Toolbar-->
        <div class="card-toolbar">
            <div class="d-flex">
                <input type="month" name="custom_filter_date" class="form-control btn-dark-primary" id="custom_filter_date" min="2018-01">
                <button type="button" class="btn badge-custom-bg btn-sm reset_custom_filter ms-4">Reset</button>
            </div>
        </div>
        <!--end::Toolbar-->
    </div>
    <!--end::Header-->

    <div class="card-body pb-5">
        <!--begin::Tab Content-->
        <div class="py-0">
            <!--begin::Table-->
            <table class="table align-middle table-row-dashed gy-5" id="kt_table_custom_payment">
                <thead class="border-bottom border-gray-200 fs-7 fw-bold">
                    <tr class="text-start text-muted text-uppercase gs-0">
                        <th class="min-w-150px">Created At</th>
                        <th class="min-w-150px">Deadline</th>
                        <th class="min-w-100px">Order Type</th>
                        <th class="min-w-100px">Order ID</th>
                        <th class="min-w-100px">No. of Pages</th>
                        <th class="min-w-150px">Topic</th>
                        <th class="min-w-100px">Status</th>
                    </tr>
                </thead>
                <tbody class="fs-6 fw-semibold text-gray-600">
                    @forelse ($data as $order)
                        <tr>
                            <td data-order="{{ $order->created_at }}">{{ \Carbon\Carbon::parse($order->created_at)->format('j M Y, g:i a') }}</td>
                            <td data-order="{{ $order->deadline }}">{{ $order->deadline ? \Carbon\Carbon::parse($order->deadline)->format('j M Y, g:i a') : '-' }}</td>
                            <td>{{ $order->order_type === 'Subscription' ? 'Package' : 'Custom Order' }}</td>
                            <td>{{ $order->order_id }}</td>
                            <td>{{ $order->number_of_pages }}</td>
                            <td>{{ $order->topic }}</td>
                            <td>{{ $order->order_status }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center">Data not found</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            <!--end::Table-->
        </div>
        <!--end::Tab panel-->
    </div>
</div>
