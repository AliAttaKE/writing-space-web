@extends('custom_layout.master')
@section('main_content')

<meta name="csrf-token" content="{{ csrf_token() }}">
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

<div class="d-flex flex-column flex-column-fluid">
    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
        <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                <h1 class="page-heading d-flex text-gray-900 fw-bold fs-1 flex-column justify-content-center my-0 fs-color-white custom-fs-23">Assign Pay-Later Order Limit</h1>
            </div>
            <div class="d-flex align-items-center gap-2 gap-lg-3">
                <a href="#" class="btn btn-sm fw-bold badge-custom-bg" data-bs-toggle="modal" data-bs-target="#addCustomerOrderModal">New Order</a>
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
                            @php
                                // Get user data from users table
                                $user = \App\Models\User::find($order->user_id);
                            @endphp
                            <tr>
                                <td class="text-white">
                                    @if($user)
                                        {{ $user->name }}
                                    @else
                                        {{ $order->customer_name }}
                                    @endif
                                </td>
                                <td class="text-white">
                                    @if($user)
                                        {{ $user->email }}
                                    @else
                                        {{ $order->customer_email }}
                                    @endif
                                </td>
                                <td class="text-white">{{ $order->no_of_orders }}</td>
                                <td class="text-white">{{ $order->orders_left }}</td>
                                <td>
                                    <a href="#" class="btn badge-custom-bg btn-flex btn-center btn-sm edit-order"
                                        data-order-id="{{ $order->id }}"
                                        data-customer-name="{{ $user ? $user->name : $order->customer_name }}"
                                        data-customer-email="{{ $user ? $user->email : $order->customer_email }}"
                                        data-user-id="{{ $order->user_id }}"
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
                        <label class="form-label text-white">Select Customer</label>
                        <select class="form-control btn-dark-primary select2-user" name="user_id" id="addUserSelect" required>
                            <option value="">Search and select customer...</option>
                        </select>
                        <input type="hidden" name="customer_name" id="addCustomerName">
                        <input type="hidden" name="customer_email" id="addCustomerEmail">
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
                        <label class="form-label text-white">Select Customer</label>
                        <select class="form-control btn-dark-primary select2-user" name="user_id" id="editUserSelect" required>
                            <option value="">Search and select customer...</option>
                        </select>
                        <input type="hidden" name="customer_name" id="editCustomerName">
                        <input type="hidden" name="customer_email" id="editCustomerEmail">
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

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
$(document).ready(function() {
    // Initialize Select2 for user search
    function initializeSelect2(selector) {
        return $(selector).select2({
            placeholder: "Search and select customer...",
            allowClear: true,
            ajax: {
                url: '{{ route("admin.customer_orders.search_users") }}',
                type: 'GET',
                dataType: 'json',
                delay: 250,
                data: function (params) {
                    return {
                        search: params.term,
                        page: params.page || 1
                    };
                },
                processResults: function (data, params) {
                    params.page = params.page || 1;
                    return {
                        results: $.map(data, function (user) {
                            return {
                                id: user.id,
                                text: user.name + ' (' + user.email + ')',
                                name: user.name,
                                email: user.email
                            };
                        }),
                        pagination: {
                            more: (params.page * 10) < data.total_count
                        }
                    };
                },
                cache: true
            },
            minimumInputLength: 2,
            templateResult: formatUser,
            templateSelection: formatUserSelection
        });
    }

    function formatUser(user) {
        if (user.loading) {
            return user.text;
        }
        var $container = $(
            "<div class='select2-user-result'>" +
                "<div class='user-name'><strong>" + user.name + "</strong></div>" +
                "<div class='user-email'>" + user.email + "</div>" +
            "</div>"
        );
        return $container;
    }

    function formatUserSelection(user) {
        if (user.id) {
            // Set the hidden input values when user is selected
            $('#addCustomerName').val(user.name);
            $('#addCustomerEmail').val(user.email);
            $('#editCustomerName').val(user.name);
            $('#editCustomerEmail').val(user.email);
            return user.name + ' (' + user.email + ')';
        }
        return user.text;
    }

    // Initialize Select2 for both modals
    var addUserSelect = initializeSelect2('#addUserSelect');
    var editUserSelect = initializeSelect2('#editUserSelect');

    // Initialize form values from URL parameters
    function initializeFormValues() {
        const urlParams = new URLSearchParams(window.location.search);
        $('#searchInput').val(urlParams.get('search') || '');
        $('#startDate').val(urlParams.get('start_date') || '');
        $('#endDate').val(urlParams.get('end_date') || '');
    }

    initializeFormValues();

    // Reset form when modal is closed
    $('#addCustomerOrderModal').on('hidden.bs.modal', function () {
        $('#addOrderForm')[0].reset();
        addUserSelect.val(null).trigger('change');
        $('#addCustomerName').val('');
        $('#addCustomerEmail').val('');
    });

    $('#editCustomerOrderModal').on('hidden.bs.modal', function () {
        editUserSelect.val(null).trigger('change');
        $('#editCustomerName').val('');
        $('#editCustomerEmail').val('');
    });

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
        
        window.location.href = url.slice(0, -1);
    }

    // Add order form submission
    $('#addOrderForm').on('submit', function(e) {
        e.preventDefault();
        
        // Validate that a user is selected
        if (!$('#addUserSelect').val()) {
            Swal.fire('Error!', 'Please select a customer', 'error');
            return;
        }

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
        var userId = $(this).data('user-id');
        var noOfOrders = $(this).data('no-of-orders');

        $('#editOrderId').val(orderId);
        $('#editNoOfOrders').val(noOfOrders);
        $('#editCustomerName').val(customerName);
        $('#editCustomerEmail').val(customerEmail);

        // If user_id exists, pre-select the user in dropdown
        if (userId) {
            var option = new Option(customerName + ' (' + customerEmail + ')', userId, true, true);
            editUserSelect.append(option).trigger('change');
        } else {
            editUserSelect.val(null).trigger('change');
        }

        $('#editCustomerOrderModal').modal('show');
    });

    // Edit order form submission
    $('#editOrderForm').on('submit', function(e) {
        e.preventDefault();
        
        // Validate that a user is selected
        if (!$('#editUserSelect').val()) {
            Swal.fire('Error!', 'Please select a customer', 'error');
            return;
        }

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
.select2-container .select2-selection--single {
    height: 38px !important;
}
.select2-container--default .select2-selection--single .select2-selection__rendered {
    line-height: 38px !important;
}
.select2-container--default .select2-selection--single .select2-selection__arrow {
    height: 36px !important;
}
.select2-user-result .user-name {
    font-weight: bold;
}
.select2-user-result .user-email {
    font-size: 12px;
    color: #666;
}
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