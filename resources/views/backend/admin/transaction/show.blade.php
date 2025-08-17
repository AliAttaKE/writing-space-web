@extends('custom_layout.master')
@section('main_content')

<div class="container">
    <h2 class="mb-4">Transaction Details</h2>

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <td>{{ $transaction->id }}</td>
        </tr>
        <tr>
            <th>Reference</th>
            <td>{{ $transaction->reference }}</td>
        </tr>
        <tr>
            <th>Amount</th>
            <td>{{ $transaction->amount }}</td>
        </tr>
        <tr>
            <th>Currency</th>
            <td>{{ $transaction->currency }}</td>
        </tr>
        <tr>
            <th>Status</th>
            <td>{{ $transaction->status }}</td>
        </tr>
        <tr>
            <th>User ID</th>
            <td>{{ $transaction->user_id }}</td>
        </tr>
        <tr>
            <th>Authentication Status</th>
            <td>{{ $transaction->authenticationStatus }}</td>
        </tr>
        <tr>
            <th>Chargeback Amount</th>
            <td>{{ $transaction->chargeback_amount }}</td>
        </tr>
        <tr>
            <th>Merchant Amount</th>
            <td>{{ $transaction->merchantAmount }}</td>
        </tr>
        <tr>
            <th>Total Captured</th>
            <td>{{ $transaction->totalCapturedAmount }}</td>
        </tr>
        <tr>
            <th>Funding Method</th>
            <td>{{ $transaction->fundingMethod }}</td>
        </tr>
        <tr>
            <th>Created At</th>
            <td>{{ $transaction->creationTime }}</td>
        </tr>
        <tr>
            <th>Last Updated</th>
            <td>{{ $transaction->lastUpdatedTime }}</td>
        </tr>
    </table>

    <a href="{{ route('admin.transactions.index') }}" class="btn btn-secondary mt-3">Back</a>
</div>
@endsection
