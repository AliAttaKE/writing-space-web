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
            </div>
        </div>
    </div>

    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-xxl">
            <div class="card cardbody card-custom-bg">
                <div class="card-header border-0 pt-6">
                   <div class="card-title">
                        <div class="d-flex align-items-center position-relative my-1 gap-2">
                          <form method="GET" action="{{ route('admin.customer_orders.index') }}" class="mb-4 d-flex gap-2 align-items-end">
    <div>
        <label class="form-label text-white">Start Date</label>
        <input type="date" name="start_date" class="form-control btn-dark-primary" 
               value="{{ request('start_date') }}">
    </div>

    <div>
        <label class="form-label text-white">End Date</label>
        <input type="date" name="end_date" class="form-control btn-dark-primary" 
               value="{{ request('end_date') }}">
    </div>

    <div>
        <label class="form-label text-white">Search</label>
        <input type="text" name="search" class="form-control btn-dark-primary" 
               placeholder="Search by name/email" value="{{ request('search') }}">
    </div>

    <button type="submit" class="btn btn-dark-primary">Filter</button>
    <a href="{{ route('admin.customer_orders.index') }}" class="btn btn-secondary">Reset</a>
</form>

                        </div>
                    </div>

                </div>
                <div class="card-body py-4">
                    <!-- <table class="table align-middle table-row-dashed fs-6 gy-5" id="customerOrdersTable">
                        <thead>
                            <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                <th class="min-w-100px fw_800 pb-8">Customer Name</th>
                                <th class="min-w-150px fw_800 pb-8">Email</th>
                                {{-- <th class="min-w-100px fw_800 pb-8">User ID</th> --}}
                                <th class="min-w-100px fw_800 pb-8">No. of Orders</th>
                                <th class="min-w-100px fw_800 pb-8">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 fw-semibold">
                            @foreach($orders as $order)
                            <tr>
                                <td class="text-white">{{ $order->customer_name }}</td>
                                <td class="text-white">{{ $order->customer_email }}</td>
                                {{-- <td class="text-white">{{ $order->user_id ?? 'N/A' }}</td> --}}
                                <td class="text-white">{{ $order->no_of_orders }}</td>
                                <td>
                                    <a href="#" class="btn badge-custom-bg btn-flex btn-center btn-sm edit-order" 
                                       data-order-id="{{ $order->id }}"
                                       data-customer-name="{{ $order->customer_name }}"
                                       data-customer-email="{{ $order->customer_email }}"
                                       {{-- data-user-id="{{ $order->user_id }}" --}}
                                       data-no-of-orders="{{ $order->no_of_orders }}">
                                        Edit
                                    </a>
                                    <a href="#" class="btn btn-danger btn-sm ms-1" onclick="confirmDelete({{ $order->id }})">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table> -->

                    <table class="table align-middle table-row-dashed fs-6 gy-5" id="customerOrdersTable">
                        <thead>
                            <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                <th class="min-w-100px fw_800 pb-8 sortable" data-column="0">Customer Name <span class="sort-icon">⇅</span></th>
                                <th class="min-w-150px fw_800 pb-8 sortable" data-column="1">Email <span class="sort-icon">⇅</span></th>
                                <th class="min-w-100px fw_800 pb-8 sortable" data-column="2">No. of Orders <span class="sort-icon">⇅</span></th>
                                <th class="min-w-100px fw_800 pb-8">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 fw-semibold">
                            @foreach($orders as $order)
                            <tr>
                                <td class="text-white">{{ $order->customer_name }}</td>
                                <td class="text-white">{{ $order->customer_email }}</td>
                                <td class="text-white">{{ $order->no_of_orders }}</td>
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
                    <div class="d-flex justify-content-center">
                        {{ $orders->links() }}
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
                        <input type="text" class="form-control btn-dark-primary" name="customer_name" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-white">Customer Email</label>
                        <input type="email" class="form-control btn-dark-primary" name="customer_email" required>
                    </div>
                    {{-- <div class="mb-3">
                        <label class="form-label text-white">User ID (Optional)</label>
                        <input type="text" class="form-control btn-dark-primary" name="user_id" id="userSearch" placeholder="Search user...">
                        <div id="userSuggestions" class="dropdown-menu w-100"></div>
                    </div> --}}
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
                        <label class="form-label text-white">Customer Name</label>
                        <input type="text" class="form-control btn-dark-primary" name="customer_name" id="editCustomerName" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-white">Customer Email</label>
                        <input type="email" class="form-control btn-dark-primary" name="customer_email" id="editCustomerEmail" required>
                    </div>
                    {{-- <div class="mb-3">
                        <label class="form-label text-white">User ID (Optional)</label>
                        <input type="text" class="form-control btn-dark-primary" name="user_id" id="editUserId">
                    </div> --}}
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
    // Search functionality
    $('#searchInput').on('input', function() {
        var searchText = $(this).val().toLowerCase();
        $('#customerOrdersTable tbody tr').each(function() {
            var rowText = $(this).text().toLowerCase();
            $(this).toggle(rowText.indexOf(searchText) > -1);
        });
    });

// 🔎 Search + Date Filter Combined
$('#filterBtn').on('click', function() {
    const searchText = $('#searchInput').val().toLowerCase();
    const startDate = $('#startDate').val();
    const endDate = $('#endDate').val();

    $('#customerOrdersTable tbody tr').each(function() {
        const rowText = $(this).text().toLowerCase();
        const orderDate = $(this).data('date'); // we’ll add this data attribute below

        let showRow = true;

        // Filter by search
        if (searchText && !rowText.includes(searchText)) {
            showRow = false;
        }

        // Filter by date range
        if (startDate || endDate) {
            const date = new Date(orderDate);
            const from = startDate ? new Date(startDate) : null;
            const to = endDate ? new Date(endDate) : null;

            if ((from && date < from) || (to && date > to)) {
                showRow = false;
            }
        }

        $(this).toggle(showRow);
    });
});

// 🔄 Reset Filters
$('#resetBtn').on('click', function() {
    $('#searchInput, #startDate, #endDate').val('');
    $('#customerOrdersTable tbody tr').show();
});


// 📊 Column Sorting
    $('.sortable').on('click', function() {
        const table = $('#customerOrdersTable');
        const tbody = table.find('tbody');
        const rows = tbody.find('tr').toArray();
        const column = $(this).data('column');
        const asc = !$(this).hasClass('asc');

        $('.sortable').removeClass('asc desc');
        $(this).addClass(asc ? 'asc' : 'desc');

        rows.sort(function(a, b) {
            let A = $(a).find('td').eq(column).text().trim().toLowerCase();
            let B = $(b).find('td').eq(column).text().trim().toLowerCase();
            if ($.isNumeric(A) && $.isNumeric(B)) {
                A = parseFloat(A);
                B = parseFloat(B);
            }
            return asc ? (A > B ? 1 : -1) : (A < B ? 1 : -1);
        });

        tbody.empty().append(rows);
    });

    // User search autocomplete
    $('#userSearch').on('input', function() {
        var searchTerm = $(this).val();
        if (searchTerm.length > 2) {
            $.get('{{ route("admin.customer_orders.search_users") }}', { search: searchTerm }, function(users) {
                var suggestions = $('#userSuggestions');
                suggestions.empty();
                if (users.length > 0) {
                    users.forEach(function(user) {
                        suggestions.append(`<a class="dropdown-item" href="#" data-user-id="${user.id}">${user.name} (${user.email})</a>`);
                    });
                    suggestions.show();
                } else {
                    suggestions.hide();
                }
            });
        } else {
            $('#userSuggestions').hide();
        }
    });

    // User selection
    $(document).on('click', '#userSuggestions .dropdown-item', function(e) {
        e.preventDefault();
        var userId = $(this).data('user-id');
        var userText = $(this).text();
        $('#userSearch').val(userId);
        $('#userSuggestions').hide();
    });

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
        var userId = $(this).data('user-id');
        var noOfOrders = $(this).data('no-of-orders');

        $('#editOrderId').val(orderId);
        $('#editCustomerName').val(customerName);
        $('#editCustomerEmail').val(customerEmail);
        $('#editUserId').val(userId);
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
}
.sortable.asc .sort-icon::after {
    content: "▲";
}
.sortable.desc .sort-icon::after {
    content: "▼";
}
.sort-icon {
    font-size: 12px;
    margin-left: 5px;
    color: #ccc;
}
</style>

@endsection