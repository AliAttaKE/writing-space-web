@extends('custom_layout.master')
@section('main_content')

<meta name="csrf-token" content="{{ csrf_token() }}">

<div class="d-flex flex-column flex-column-fluid">
    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
        <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                <h1 class="page-heading d-flex text-gray-900 fw-bold fs-1 flex-column justify-content-center my-0 fs-color-white custom-fs-23">Assign Pay-Later Order Limit</h1>
            </div>
            <div class="d-flex align-items-center gap-2 gap-lg-3">
                <a href="#" class="btn btn-sm fw-bold badge-custom-bg" data-bs-toggle="modal" data-bs-target="#addCustomerOrderModal">New Order</a>
                <a href="#" class="btn btn-sm fw-bold btn-warning" data-bs-toggle="modal" data-bs-target="#addAllFreeOrdersModal">Free Orders to All</a>
                <button id="exportBtn" class="btn btn-success btn-sm">Export to Excel</button>
            </div>
        </div>
    </div>

    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-xxl">
            <div class="card cardbody card-custom-bg">
                <div class="card-header border-0 pt-6">
                   <div class="card-title">
                    <div class="d-flex align-items-center position-relative my-1 gap-2">
                        <!-- 🔍 Search -->
                        <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-5">
                            <span class="path1"></span><span class="path2"></span>
                        </i>
                        <input type="text" id="searchInput" class="form-control form-control-solid w-250px ps-13 btn-dark-primary" placeholder="Search orders..." value="{{ request('search') }}" />

                        <!-- 📅 Start Date -->
                        <input type="date" id="startDate" class="form-control form-control-solid btn-dark-primary" style="width: 160px;" value="{{ request('start_date') }}">

                        <!-- 📅 End Date -->
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
                                <th class="min-w-100px fw_800 pb-8 sortable" data-column="customer_name">
                                    Customer Name 
                                    <span class="sort-icon">
                                        @if(request('sort') == 'customer_name')
                                            {{ request('direction') == 'asc' ? '▲' : '▼' }}
                                        @else
                                            ⇅
                                        @endif
                                    </span>
                                </th>
                                <th class="min-w-150px fw_800 pb-8 sortable" data-column="customer_email">
                                    Email 
                                    <span class="sort-icon">
                                        @if(request('sort') == 'customer_email')
                                            {{ request('direction') == 'asc' ? '▲' : '▼' }}
                                        @else
                                            ⇅
                                        @endif
                                    </span>
                                </th>
                                <th class="min-w-100px fw_800 pb-8 sortable" data-column="no_of_orders">
                                    Orders Used 
                                    <span class="sort-icon">
                                        @if(request('sort') == 'no_of_orders')
                                            {{ request('direction') == 'asc' ? '▲' : '▼' }}
                                        @else
                                            ⇅
                                        @endif
                                    </span>
                                </th>
                                <th class="min-w-100px fw_800 pb-8 sortable" data-column="orders_left">
                                    Orders Left 
                                    <span class="sort-icon">
                                        @if(request('sort') == 'orders_left')
                                            {{ request('direction') == 'asc' ? '▲' : '▼' }}
                                        @else
                                            ⇅
                                        @endif
                                    </span>
                                </th>
                                <th class="min-w-100px fw_800 pb-8">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 fw-semibold">
                            @foreach($orders as $order)
                            <tr>
                                <td class="text-white">{{ $order->customer_name }}</td>
                                <td class="text-white">{{ $order->customer_email }}</td>
                                <td class="text-white">{{ $order->no_of_orders }}</td>
                                <td class="text-white">{{ $order->orders_left }}</td>
                                <td>
                                    <a href="#" class="btn badge-custom-bg btn-flex btn-center btn-sm edit-order"
                                        data-order-id="{{ $order->id }}"
                                        data-customer-name="{{ $order->customer_name }}"
                                        data-customer-email="{{ $order->customer_email }}"
                                        data-no-of-orders="{{ $order->no_of_orders }}">
                                        Edit
                                    </a>
                                    <a href="#" class="btn btn-danger btn-sm ms-1" onclick="confirmDelete({{ $order->id }})">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    
                    <!-- Pagination Links -->
                    <div class="d-flex justify-content-center mt-4">
                        {{ $orders->appends(request()->query())->links() }}
                    </div>
                </div>

              

            </div>
        </div>
    </div>
</div>

<!-- Add Order Modal -->
<div class="modal fade" id="addCustomerOrderModal" tabindex="-1" aria-labelledby="addCustomerOrderModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content badge-custom-bg">
            <div class="modal-header">
                <h5 class="modal-title text-white" id="addCustomerOrderModalLabel">Customer Order</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="addOrderForm">
                <div class="modal-body">
                <div class="mb-3">
                    <label class="form-label text-white">Customer Name</label>
                    <select class="form-control btn-dark-primary" name="customer_name" id="addCustomerName" required>
                        <option value="">Select Customer</option>
                        @foreach($customers as $c)
                            <option value="{{ $c->name }}" data-email="{{ $c->email }}">{{ $c->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label text-white">Customer Email</label>
                    <input type="email" class="form-control btn-dark-primary" name="customer_email" id="addCustomerEmail" readonly required>
                </div>

                    <div class="mb-3">
                        <label class="form-label text-white">Number of Orders</label>
                        <input type="number" class="form-control btn-dark-primary" name="no_of_orders" min="1" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-dark-primary">Save Order</button>
                </div>
            </form>
        </div>
    </div>
</div>


  <div class="modal fade" id="addAllFreeOrdersModal" tabindex="-1" aria-labelledby="addAllFreeOrdersModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content badge-custom-bg">
                            <div class="modal-header">
                                <h5 class="modal-title text-white" id="addAllFreeOrdersModalLabel">Assign Free Orders to All Customers</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form id="addAllFreeOrdersForm">
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label text-white">Number of Orders</label>
                                        <input type="number" class="form-control btn-dark-primary" name="no_of_orders" min="1" required>
                                    </div>
                                    <div class="text-white small">
                                        <em>This will assign the entered number of orders to <strong>every customer</strong>.</em>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-dark-primary">Assign Orders</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
<!-- Edit Order Modal -->
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
                        <select class="form-control btn-dark-primary" name="customer_name" id="editCustomerNameSelect" required>
                            <option value="">Select Customer</option>
                            @foreach($customers as $c)
                                <option value="{{ $c->name }}" data-email="{{ $c->email }}">{{ $c->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label text-white">Customer Email</label>
                        <input type="email" class="form-control btn-dark-primary" name="customer_email" id="editCustomerEmail" readonly required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label text-white">Number of Orders</label>
                        <input type="number" class="form-control btn-dark-primary" name="no_of_orders" id="editNoOfOrders" min="1" required>
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


// Auto-fill email when customer selected in Add modal
$('#addCustomerName').on('change', function() {
    var email = $(this).find(':selected').data('email');
    $('#addCustomerEmail').val(email || '');
});

// Auto-fill email when customer selected in Edit modal
$('#editCustomerNameSelect').on('change', function() {
    var email = $(this).find(':selected').data('email');
    $('#editCustomerEmail').val(email || '');
});

// When opening edit modal, pre-select name and email
$('.edit-order').on('click', function() {
    var orderId = $(this).data('order-id');
    var customerName = $(this).data('customer-name');
    var customerEmail = $(this).data('customer-email');
    var noOfOrders = $(this).data('no-of-orders');

    $('#editOrderId').val(orderId);
    $('#editCustomerEmail').val(customerEmail);
    $('#editNoOfOrders').val(noOfOrders);

    $('#editCustomerNameSelect').val(customerName).change();
    $('#editCustomerOrderModal').modal('show');
});


    // Initialize form values from URL parameters
    function initializeFormValues() {
        const urlParams = new URLSearchParams(window.location.search);
        $('#searchInput').val(urlParams.get('search') || '');
        $('#startDate').val(urlParams.get('start_date') || '');
        $('#endDate').val(urlParams.get('end_date') || '');
    }

    initializeFormValues();

    // Export functionality
    $('#exportBtn').on('click', function() {
        const search = $('#searchInput').val();
        const startDate = $('#startDate').val();
        const endDate = $('#endDate').val();
        const sort = '{{ request('sort') }}';
        const direction = '{{ request('direction') }}';
        
        let exportUrl = '{{ route("admin.customer_orders.index") }}?export=excel';
        
        if (search) exportUrl += `&search=${search}`;
        if (startDate) exportUrl += `&start_date=${startDate}`;
        if (endDate) exportUrl += `&end_date=${endDate}`;
        if (sort) exportUrl += `&sort=${sort}&direction=${direction}`;
        
        window.location.href = exportUrl;
    });

    // Column Sorting with server-side
    $('.sortable').on('click', function() {
        const column = $(this).data('column');
        const currentSort = '{{ request('sort') }}';
        const currentDirection = '{{ request('direction') }}';
        
        let newDirection = 'asc';
        if (currentSort === column) {
            newDirection = currentDirection === 'asc' ? 'desc' : 'asc';
        }
        
        applyFilters(column, newDirection);
    });

    // Filter functionality
    $('#filterBtn').on('click', function() {
        applyFilters();
    });

    // Reset filters
    $('#resetBtn').on('click', function() {
        window.location.href = '{{ route("admin.customer_orders.index") }}';
    });

    // Apply all filters
    function applyFilters(sort = null, direction = null) {
        const search = $('#searchInput').val();
        const startDate = $('#startDate').val();
        const endDate = $('#endDate').val();
        
        let url = '{{ route("admin.customer_orders.index") }}?';
        
        if (search) url += `search=${search}&`;
        if (startDate) url += `start_date=${startDate}&`;
        if (endDate) url += `end_date=${endDate}&`;
        if (sort) url += `sort=${sort}&direction=${direction}&`;
        
        window.location.href = url.slice(0, -1); // Remove trailing & or ?
    }

    // Add order form submission
    $('#addOrderForm').on('submit', function(e) {
        e.preventDefault();
        var formData = $(this).serialize();

        $.ajax({
            url: '{{ route("admin.customer_orders.store") }}',
            type: 'POST',
            data: formData,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                Swal.fire('Success!', response.success, 'success');
                $('#addCustomerOrderModal').modal('hide');
                location.reload();
            },
            error: function(xhr) {
                var error = xhr.responseJSON.error;
                Swal.fire('Error!', error, 'error');
            }
        });
    });

    // Edit order modal
    $('.edit-order').on('click', function() {
        var orderId = $(this).data('order-id');
        var customerName = $(this).data('customer-name');
        var customerEmail = $(this).data('customer-email');
        var noOfOrders = $(this).data('no-of-orders');

        $('#editOrderId').val(orderId);
        $('#editCustomerName').val(customerName);
        $('#editCustomerEmail').val(customerEmail);
        $('#editNoOfOrders').val(noOfOrders);

        $('#editCustomerOrderModal').modal('show');
    });

    // Edit order form submission
    $('#editOrderForm').on('submit', function(e) {
        e.preventDefault();
        var formData = $(this).serialize();

        $.ajax({
            url: '{{ route("admin.customer_orders.update") }}',
            type: 'POST',
            data: formData,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                Swal.fire('Success!', response.success, 'success');
                $('#editCustomerOrderModal').modal('hide');
                location.reload();
            },
            error: function(xhr) {
                var error = xhr.responseJSON.error;
                Swal.fire('Error!', error, 'error');
            }
        });
    });
});




// Add free orders to all customers
$('#addAllFreeOrdersForm').on('submit', function(e) {
    e.preventDefault();
    var formData = $(this).serialize();

    Swal.fire({
        title: 'Are you sure?',
        text: "This will assign orders to ALL customers!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, assign it!',
        cancelButtonText: 'Cancel'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: '{{ route("admin.customer_orders.assignAll") }}',
                type: 'POST',
                data: formData,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    Swal.fire('Success!', response.success, 'success');
                    $('#addAllFreeOrdersModal').modal('hide');
                    location.reload();
                },
                error: function(xhr) {
                    var error = xhr.responseJSON?.error || 'Something went wrong!';
                    Swal.fire('Error!', error, 'error');
                }
            });
        }
    });
});

function confirmDelete(id) {
    Swal.fire({
        title: 'Are you sure?',
        text: 'You will not be able to recover this order!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                type: 'GET',
                url: '{{ route("admin.customer_orders.destroy", ["id" => ":id"]) }}'.replace(':id', id),
                success: function(response) {
                    Swal.fire('Deleted!', response.success, 'success');
                    location.reload();
                },
                error: function(xhr) {
                    Swal.fire('Error!', 'Something went wrong!', 'error');
                }
            });
        }
    });
}
</script>

<style>
.sortable {
    cursor: pointer;
    position: relative;
}
.sortable .sort-icon {
    font-size: 12px;
    margin-left: 5px;
    color: #ccc;
}
</style>

@endsection