@extends('custom_layout.master')
@section('main_content')

<meta name="csrf-token" content="{{ csrf_token() }}">

<div class="d-flex flex-column flex-column-fluid">
    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
        <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                <h1 class="page-heading text-gray-900 fw-bold fs-1 my-0 fs-color-white custom-fs-23">Assign Pay-Later Order Limit</h1>
            </div>
            <div class="d-flex align-items-center gap-2 gap-lg-3">
                <a href="#" class="btn btn-sm fw-bold badge-custom-bg" data-bs-toggle="modal" data-bs-target="#addCustomerOrderModal">New Order</a>
                <a href="#" class="btn btn-sm fw-bold btn-warning" data-bs-toggle="modal" data-bs-target="#addAllFreeOrdersModal">Edit Pay-Later Order Limit</a>
                <button id="exportBtn" class="btn btn-success btn-sm">Export to Excel</button>
            </div>
        </div>
    </div>

    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-xxl">
            <div class="card cardbody card-custom-bg">
                <div class="card-header border-0 pt-6">
                    <div class="card-title">
                        <div class="d-flex align-items-center gap-2">
                            <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-5"></i>
                            <input type="text" id="searchInput" class="form-control form-control-solid w-250px ps-13 btn-dark-primary" placeholder="Search orders..." value="{{ request('search') }}" />
                            <input type="date" id="startDate" class="form-control form-control-solid btn-dark-primary" style="width: 160px;" value="{{ request('start_date') }}">
                            <input type="date" id="endDate" class="form-control form-control-solid btn-dark-primary" style="width: 160px;" value="{{ request('end_date') }}">
                            <button id="filterBtn" class="btn btn-dark-primary">Filter</button>
                            <button id="resetBtn" class="btn btn-secondary">Reset</button>
                        </div>
                    </div>
                </div>

                <div class="card-body py-4">
                    <table class="table align-middle table-row-dashed fs-6 gy-5" id="customerOrdersTable">
                        <thead>
                            <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                <th class="min-w-150px sortable" data-column="customer_name">
                                    Customer Name 
                                    <span class="sort-icon">
                                        @if(request('sort') == 'customer_name')
                                            {{ request('direction') == 'asc' ? '▲' : '▼' }}
                                        @else ⇅ @endif
                                    </span>
                                </th>
                                <th class="min-w-150px sortable" data-column="customer_email">
                                    Email 
                                    <span class="sort-icon">
                                        @if(request('sort') == 'customer_email')
                                            {{ request('direction') == 'asc' ? '▲' : '▼' }}
                                        @else ⇅ @endif
                                    </span>
                                </th>
                                <th class="min-w-100px sortable" data-column="orders_used">
                                    Orders Used 
                                    <span class="sort-icon">
                                        @if(request('sort') == 'orders_used')
                                            {{ request('direction') == 'asc' ? '▲' : '▼' }}
                                        @else ⇅ @endif
                                    </span>
                                </th>
                                <th class="min-w-100px sortable" data-column="orders_left">
                                    Orders Left 
                                    <span class="sort-icon">
                                        @if(request('sort') == 'orders_left')
                                            {{ request('direction') == 'asc' ? '▲' : '▼' }}
                                        @else ⇅ @endif
                                    </span>
                                </th>
                                <th class="min-w-100px">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 fw-semibold">
                            @foreach($orders as $order)
                                <tr>
                                    <td class="text-white">{{ $order->customer_name }}</td>
                                    <td class="text-white">{{ $order->customer_email }}</td>
                                    <td class="text-white">{{ $order->orders_used }}</td>
                                    <td class="text-white">{{ $order->orders_left }}</td>
                                    <td>
                                        <a href="#" class="btn badge-custom-bg btn-sm edit-order"
                                            data-order-id="{{ $order->id }}"
                                            data-customer-name="{{ $order->customer_name }}"
                                            data-customer-email="{{ $order->customer_email }}"
                                            data-orders-used="{{ $order->orders_used }}"
                                            data-orders-left="{{ $order->orders_left }}">
                                            Edit
                                        </a>
                                        <a href="#" class="btn btn-danger btn-sm ms-1" onclick="confirmDelete({{ $order->id }})">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-center mt-4">
                        {{ $orders->appends(request()->query())->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ✅ Edit Modal (Fixed Field Labels) -->
<div class="modal fade" id="editCustomerOrderModal" tabindex="-1" aria-labelledby="editCustomerOrderModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content badge-custom-bg">
            <div class="modal-header">
                <h5 class="modal-title text-white" id="editCustomerOrderModalLabel">Edit Customer Order</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="editOrderForm">
                <input type="hidden" name="order_id" id="editOrderId">
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label text-white">Customer Name</label>
                        <input type="text" class="form-control btn-dark-primary" id="editCustomerName" name="customer_name" readonly>
                    </div>

                    <div class="mb-3">
                        <label class="form-label text-white">Customer Email</label>
                        <input type="email" class="form-control btn-dark-primary" id="editCustomerEmail" name="customer_email" readonly>
                    </div>

                    <div class="mb-3">
                        <label class="form-label text-white">Orders Used</label>
                        <input type="number" class="form-control btn-dark-primary" id="editOrdersUsed" name="orders_used" readonly>
                    </div>

                    <div class="mb-3">
                        <label class="form-label text-white">Orders Left</label>
                        <input type="number" class="form-control btn-dark-primary" id="editOrdersLeft" name="orders_left" min="0" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-dark-primary">Update Order</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
$(document).ready(function() {
    // ✳️ Sorting
    $('.sortable').click(function() {
        const column = $(this).data('column');
        const currentSort = '{{ request('sort') }}';
        const currentDirection = '{{ request('direction') }}';
        const newDirection = currentSort === column && currentDirection === 'asc' ? 'desc' : 'asc';
        applyFilters(column, newDirection);
    });

    // ✳️ Filter & Reset
    $('#filterBtn').click(() => applyFilters());
    $('#resetBtn').click(() => window.location.href = '{{ route("admin.customer_orders.index") }}');

    function applyFilters(sort = null, direction = null) {
        const search = $('#searchInput').val();
        const start = $('#startDate').val();
        const end = $('#endDate').val();
        let url = '{{ route("admin.customer_orders.index") }}?';
        if (search) url += `search=${search}&`;
        if (start) url += `start_date=${start}&`;
        if (end) url += `end_date=${end}&`;
        if (sort) url += `sort=${sort}&direction=${direction}`;
        window.location.href = url;
    }

    // ✳️ Edit Modal Fill
    $(document).on('click', '.edit-order', function() {
        $('#editOrderId').val($(this).data('order-id'));
        $('#editCustomerName').val($(this).data('customer-name'));
        $('#editCustomerEmail').val($(this).data('customer-email'));
        $('#editOrdersUsed').val($(this).data('orders-used'));
        $('#editOrdersLeft').val($(this).data('orders-left'));
        $('#editCustomerOrderModal').modal('show');
    });

    // ✳️ Edit Form Submit
    $('#editOrderForm').submit(function(e) {
        e.preventDefault();
        $.ajax({
            url: '{{ route("admin.customer_orders.update") }}',
            type: 'POST',
            data: $(this).serialize(),
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            success: res => { Swal.fire('Updated!', res.success, 'success'); $('#editCustomerOrderModal').modal('hide'); location.reload(); },
            error: err => Swal.fire('Error!', err.responseJSON.error || 'Something went wrong', 'error')
        });
    });
});
</script>

<style>
.sortable { cursor: pointer; }
.sortable .sort-icon { font-size: 12px; margin-left: 5px; color: #ccc; }
</style>

@endsection
