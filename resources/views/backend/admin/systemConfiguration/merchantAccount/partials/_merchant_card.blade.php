<div class="col-lg-6">
    <!--begin::Card-->
    <div class="card card-flush h-lg-100">
        <!--begin::Card header-->
        <div class="card-header pt-7">
            <!--begin::Card title-->
            <div class="card-title">
                <h2 class="text-white">Merchant Account Configuration</h2>
            </div>
            <!--end::Card title-->
        </div>
        <!--end::Card header-->

        <!--begin::Card body-->
        <div class="card-body pt-5">
            <!--begin::Form-->
            <form 
                action="{{route('admin.store.merchant.details')}}" method="POST" enctype="multipart/form-data"
                class="form fv-plugins-bootstrap5 fv-plugins-framework"
            >
            @csrf
                <!--begin::Input group-->
                <div class="fv-row mb-7 fv-plugins-icon-container">
                    <!--begin::Label-->
                    <label class="fs-6 fw-semibold form-label mt-3">
                        <span class="required text-white">Merchant ID</span>
                    </label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <input type="text" class="form-control form-control-solid btn-dark-primary" placeholder="Merchant ID" name="merchant_id" value="{{old('merchant_id', env('MERCHANT_ID'))}}">
                    <input type="hidden" class="form-control form-control-solid btn-dark-primary" name="name" value="merchant_account_details">
                    <!--end::Input-->
                    @error('merchant_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!--end::Input group-->

                <!--begin::Input group-->
                <div class="fv-row mb-7 fv-plugins-icon-container">
                    <!--begin::Label-->
                    <label class="fs-6 fw-semibold form-label mt-3">
                        <span class="required text-white">Merchant Password</span>
                    </label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <input type="text" class="form-control form-control-solid btn-dark-primary" placeholder="Merchant Password" name="merchant_password" value="{{old('merchant_password', env('MERCHANT_PASSWORD'))}}">
                    <!--end::Input-->
                    @error('merchant_password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!--end::Input group-->

                <!--begin::Input group-->
                <div class="fv-row mb-7 fv-plugins-icon-container">
                    <!--begin::Label-->
                    <label class="fs-6 fw-semibold form-label mt-3">
                        <span class="required text-white">Merchant URL</span>
                    </label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <input type="text" class="form-control form-control-solid btn-dark-primary" placeholder="Merchant URL" name="merchant_url" value="{{old('merchant_url', env('MERCHANT_URL'))}}">
                    <!--end::Input-->
                    @error('merchant_url')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!--end::Input group-->

                <!--begin::Input group-->
                <div class="fv-row mb-7 fv-plugins-icon-container">
                    <!--begin::Label-->
                    <label class="fs-6 fw-semibold form-label mt-3">
                        <span class="required text-white">Merchant Version</span>
                    </label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <input type="text" class="form-control form-control-solid btn-dark-primary" placeholder="Merchant Version" name="merchant_version" value="{{old('merchant_version', env('MERCHANT_VERSION'))}}">
                    <!--end::Input-->
                    @error('merchant_version')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!--end::Input group-->

                <div class="col">
                    <!--begin::Input group-->
                    <div class="fv-row mb-7 fv-plugins-icon-container">
                        <!--begin::Label-->
                        <label class="fs-6 fw-semibold form-label mt-3">
                            <span class="required text-white">Currency Type</span>
                        </label>
                        <!--end::Label-->
                        <div class="w-100">
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <select name="currency_type" class="form-select form-select-solid btn-dark-primary" >
                                    <option class="badge-custom-bg" disabled selected>Select currency</option>
                                    <option class="badge-custom-bg" value="PKR" {{env('CURRENCY_TYPE') === 'PKR' ? 'selected' : ''}}>Rupee </option>
                                    <option class="badge-custom-bg" value="USD" {{env('CURRENCY_TYPE') === 'USD' ? 'selected' : ''}}>Dollar</option>
                                    <option class="badge-custom-bg" value="POUND" {{env('CURRENCY_TYPE') === 'POUND' ? 'selected' : ''}}>Pound</option>    
                                </select>
                            </div>
                            <!--end::Input group-->
                        </div>
                    </div>
                    <!--end::Input group-->
                </div>
               








                <!--begin::Action buttons-->
                <div class="d-flex justify-content-end">
                    <!--begin::Button-->
                    <button type="reset" data-kt-contacts-type="cancel" class="btn badge-custom-bg me-3">
                        Cancel
                    </button>
                    <!--end::Button-->
                    @if (!env('MERCHANT_ID'))
                        <!--begin::Button-->
                        <button type="submit" class="btn badge-custom-bg">
                            <span class="indicator-label">
                                Activate
                            </span>
                            <span class="indicator-progress">
                                Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                            </span>
                        </button>
                        <!--end::Button-->
                    @else
                         <!--begin::Button-->
                        <button type="submit" class="btn btn-success">
                            <span class="indicator-label">
                                Activated
                            </span>
                        </button>
                        <!--end::Button-->
                    @endif
                </div>
                <!--end::Action buttons-->
            </form>
            <!--end::Form-->
        </div>
        <!--end::Card body-->

    </div>
    <!--end::Card-->
</div>