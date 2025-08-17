@extends('custom_layout.master')
@section('main_content')

<!--begin::Content wrapper-->
<div class="d-flex flex-column flex-column-fluid">

    <!--begin::Toolbar-->
    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
        <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                <h1 class="page-heading d-flex text-gray-900 fw-bold fs-1 flex-column justify-content-center my-0 fs-color-white custom-fs-23">
                    Payment Management
                </h1>
            </div>
            <!--end::Page title-->
        </div>
    </div>
    <!--end::Toolbar-->

    <!--begin::Content-->
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-xxl">
            
            @if(!empty(session('success')))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ session('success') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <!--begin::Card-->
            <div class="card mb-10 card-custom-bg">
                <!--begin::Page title-->
                <div class="page-title d-flex flex-column justify-content-center pt-6 px-8 flex-wrap me-3">
                    <h3 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0 fs-color-white custom-fs-23">
                        Manage Transactions
                    </h3>
                </div>
                <!--end::Page title-->

                <!--begin::Card header-->
                <div class="card-header border-0 pt-6">
                    <div class="card-title">
                        <!--begin::Search-->
                        <div class="d-flex align-items-center position-relative my-1">
                            <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-5">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                            <input type="text" id="transaction_search" 
                                class="form-control form-control-solid w-250px ps-13 btn-dark-primary" 
                                placeholder="Search Transaction" />
                        </div>
                        <!--end::Search-->
                    </div>
                </div>
                <!--end::Card header-->

                <!--begin::Card body-->
                <div class="card-body py-4">
                    <table class="table align-middle table-row-dashed fs-6 gy-5" id="transaction_table">
                        <thead>
                            <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                <th>#</th>
                                <th>User ID</th>
                                <th>Reference</th>
                                <th>Amount</th>
                                <th>Currency</th>
                                <th>Status</th>
                                <th>Created At</th>
                                <th class="text-end">Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-white fw-semibold">
                            @forelse ($transactions as $key => $transaction)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $transaction->userid }}</td>
                                    <td>{{ $transaction->reference }}</td>
                                    <td>{{ $transaction->amount }}</td>
                                    <td>{{ $transaction->currency }}</td>
                                    <td>
                                        <span class="badge badge-custom-bg fw-bold">
                                            {{ $transaction->status ?? 'N/A' }}
                                        </span>
                                    </td>
                                    <td>{{ $transaction->created_at }}</td>
                                    <td class="text-end">
                                        <a href="{{ route('admin.transactions.show', $transaction->id) }}" 
                                           class="btn badge-custom-bg btn-sm">View</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center">No Transactions Found</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>

                    <div class="mt-4">
                        {{ $transactions->links() }}
                    </div>
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
        </div>
    </div>
    <!--end::Content-->
</div>
@endsection

@section('customJs')
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
    // 🔍 Search filter
    $('#transaction_search').on('input', function() {
        let searchText = $(this).val().toLowerCase();
        $('#transaction_table tbody tr').each(function() {
            let rowText = $(this).text().toLowerCase();
            $(this).toggle(rowText.indexOf(searchText) !== -1);
        });
    });
</script>
@endsection
