<div id="admin-order-section-wrapper">
    <div class="card mb-6 mb-xl-9 card-custom-bg message-summ">
        <div class="card-header">
            <div class="card-title">
                <h2 class="fs-color-white custom-fs-23">Order Records</h2>
            </div>
            <div class="card-toolbar">
                <div class="d-flex">
                    <input type="month"
                           name="admin_custom_filter_date"
                           class="form-control btn-dark-primary"
                           id="admin_custom_filter_date"
                           min="2018-01">
                    <button type="button"
                            class="btn badge-custom-bg btn-sm admin-reset-custom-filter ms-4">
                        Reset
                    </button>
                </div>
            </div>
        </div>

        <div class="card-body pb-5">
            <div class="py-0">
                <table class="table align-middle table-row-dashed gy-5" id="admin_kt_table_custom_orders">
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
                        @foreach ($data as $order)
                            <tr>
                                <td data-order="{{ $order->created_at }}">
                                    {{ \Carbon\Carbon::parse($order->created_at)->format('j M Y, g:i a') }}
                                </td>
                                <td data-order="{{ $order->deadline }}">
                                    {{ $order->deadline ? \Carbon\Carbon::parse($order->deadline)->format('j M Y, g:i a') : '-' }}
                                </td>
                                <td>{{ $order->order_type === 'Subscription' ? 'Package' : 'Custom Order' }}</td>
                                <td>{{ $order->order_id }}</td>
                                <td>{{ $order->number_of_pages }}</td>
                                <td>{{ $order->topic }}</td>
                                <td>{{ $order->order_status }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                @if($data->isEmpty())
                    <div class="text-center text-muted py-3">Data not found</div>
                @endif
            </div>
        </div>
    </div>
</div>
