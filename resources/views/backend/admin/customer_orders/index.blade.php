@extends('layouts.admin')

@section('content')
<div class="container-fluid py-4">
    <div class="card shadow-sm border-0">
        <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Customer Orders</h5>
            <div>
                <a href="{{ route('admin.customer_orders.create') }}" class="btn btn-success btn-sm">Add New Order</a>
            </div>
        </div>

        <div class="card-body bg-light">
            {{-- Filter Form --}}
            <form method="GET" action="{{ route('admin.customer_orders.index') }}" class="row g-3 align-items-end mb-4">
                <div class="col-md-3">
                    <label class="form-label">Search</label>
                    <input type="text" name="search" value="{{ request('search') }}" class="form-control" placeholder="Search by name or email">
                </div>

                <div class="col-md-3">
                    <label class="form-label">Start Date</label>
                    <input type="date" name="start_date" value="{{ request('start_date') }}" class="form-control">
                </div>

                <div class="col-md-3">
                    <label class="form-label">End Date</label>
                    <input type="date" name="end_date" value="{{ request('end_date') }}" class="form-control">
                </div>

                <div class="col-md-3 d-flex gap-2">
                    <button type="submit" class="btn btn-dark-primary w-100">Filter</button>
                    <a href="{{ route('admin.customer_orders.index') }}" class="btn btn-secondary w-100">Reset</a>
                    <a href="{{ route('admin.customer_orders.index', array_merge(request()->all(), ['export' => 'excel'])) }}" class="btn btn-success w-100">Export Excel</a>
                </div>
            </form>

            {{-- Orders Table --}}
            <div class="table-responsive">
                <table class="table table-hover table-striped table-bordered align-middle">
                    <thead class="bg-dark text-white text-center">
                        <tr>
                            <th>ID</th>
                            <th>Customer Name</th>
                            <th>Email</th>
                            <th>Orders Left</th>
                            <th>Orders Used</th>
                            <th>Amount</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse($orders as $order)
                            <tr data-date="{{ $order->created_at }}">
                                <td>{{ $order->id }}</td>
                                <td>{{ $order->customer_name }}</td>
                                <td>{{ $order->email }}</td>
                                <td class="text-white">{{ $order->orders_left }}</td>
                                <td class="text-white">{{ $order->no_of_orders }}</td>
                                <td>{{ number_format($order->amount, 2) }}</td>
                                <td>{{ $order->created_at->format('Y-m-d') }}</td>
                                <td>
                                    <a href="{{ route('admin.customer_orders.show', $order->id) }}" class="btn btn-info btn-sm">View</a>
                                    <a href="{{ route('admin.customer_orders.edit', $order->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <button class="btn btn-danger btn-sm deleteOrder" data-id="{{ $order->id }}">Delete</button>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="text-center text-muted">No orders found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            {{-- Pagination --}}
            <div class="d-flex justify-content-center mt-3">
                {{ $orders->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    // Delete Order
    $(document).on('click', '.deleteOrder', function() {
        let id = $(this).data('id');
        Swal.fire({
            title: "Are you sure?",
            text: "You want to delete this order?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#d33",
            cancelButtonColor: "#3085d6",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "/admin/customer_orders/" + id,
                    type: "DELETE",
                    data: { _token: "{{ csrf_token() }}" },
                    success: function(response) {
                        if (response.status) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Success',
                                text: response.msg ?? 'Order deleted successfully!'
                            });
                            setTimeout(() => location.reload(), 1200);
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: response.msg ?? 'Something went wrong.'
                            });
                        }
                    },
                    error: function() {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: 'Server error occurred.'
                        });
                    }
                });
            }
        });
    });
</script>
@endpush
