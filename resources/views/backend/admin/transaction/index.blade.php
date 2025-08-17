@extends('custom_layout.master')
@section('main_content')

<div class="container">
    <h2 class="mb-4">Transactions</h2>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Reference</th>
                <th>Amount</th>
                <th>Currency</th>
                <th>Status</th>
                <th>Creation Time</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($transactions as $key => $transaction)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $transaction->reference }}</td>
                    <td>{{ $transaction->amount }}</td>
                    <td>{{ $transaction->currency }}</td>
                    <td>{{ $transaction->status }}</td>
                    <td>{{ $transaction->creationTime }}</td>
                    <td>
                        <a href="{{ route('admin.transactions.show', $transaction->id) }}" 
                           class="btn btn-sm btn-primary">View</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7" class="text-center">No Transactions Found</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <div>
        {{ $transactions->links() }}
    </div>
</div>
@endsection
