@extends('custom_layout.master')
@section('main_content')

<!--begin::Content wrapper-->
<div class="d-flex flex-column flex-column-fluid">

    <!--begin::Toolbar-->
    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
        <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                <h1 class="page-heading d-flex text-gray-900 fw-bold fs-1 flex-column justify-content-center my-0 fs-color-white custom-fs-23">
                    Transaction Details
                </h1>
            </div>
            <div class="d-flex align-items-center gap-2 gap-lg-3">
                <a href="{{ route('admin.transactions.index') }}" class="btn btn-sm fw-bold badge-custom-bg">
                    Back to Transactions
                </a>
            </div>
        </div>
    </div>
    <!--end::Toolbar-->

    <!--begin::Content-->
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-xxl">

            <!--begin::Card-->
            <div class="card mb-10 card-custom-bg">
                <div class="page-title d-flex flex-column justify-content-center pt-6 px-8 flex-wrap me-3">
                    <h3 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0 fs-color-white custom-fs-23">
                        Transaction #{{ $transaction->id }}
                    </h3>
                </div>

                <!--begin::Card body-->
                <div class="card-body py-4">
                    <table class="table align-middle table-row-dashed fs-6 gy-5">
                        <tbody class="text-white fw-semibold">
                            <tr>
                                <th>ID</th>
                                <td>{{ $transaction->id }}</td>
                            </tr>
                            <tr>
                                <th>Reference</th>
                                <td>{{ $transaction->reference ?? 'N/A' }}</td>
                            </tr>
                            <tr>
                                <th>Amount</th>
                                <td>{{ $transaction->amount }} {{ $transaction->currency }}</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>
                                    <span class="badge badge-custom-bg fw-bold">
                                        {{ $transaction->status ?? 'N/A' }}
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <th>User ID</th>
                                <td>{{ $transaction->userid ?? '-' }}</td>
                            </tr>
                            <tr>
                                <th>Authentication Status</th>
                                <td>{{ $transaction->authenticationStatus ?? 'N/A' }}</td>
                            </tr>
                            <tr>
                                <th>Chargeback Amount</th>
                                <td>{{ $transaction->chargeback_amount ?? '-' }} {{ $transaction->chargeback_currency ?? '' }}</td>
                            </tr>
                            <tr>
                                <th>Chargeback Amount</th>
                                <td>{{ $transaction->chargeback_amount ?? '-' }} {{ $transaction->chargeback_currency ?? '' }}</td>
                            </tr>
                            <tr>
                                <th>Merchant Amount</th>
                                <td>{{ $transaction->merchantAmount ?? '-' }} {{ $transaction->merchantCurrency ?? '' }}</td>
                            </tr>
                            <tr>
                                <th>Total Captured</th>
                                <td>{{ $transaction->totalCapturedAmount ?? '-' }}</td>
                            </tr>
                            <tr>
                                <th>Funding Method</th>
                                <td>{{ $transaction->fundingMethod ?? 'N/A' }}</td>
                            </tr>
                            <tr>
                                <th>Created At</th>
                                <td>{{ $transaction->created_at }}</td>
                            </tr>
                            <tr>
                                <th>Last Updated</th>
                                <td>{{ $transaction->updated_at }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->

        </div>
    </div>
    <!--end::Content-->
</div>
@endsection
