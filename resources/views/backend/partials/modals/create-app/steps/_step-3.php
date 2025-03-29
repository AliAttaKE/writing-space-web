<!--begin::Step 3-->
<div data-kt-stepper-element="content">
    <div class="w-100">
        <!--begin::heading-->
        <div class="d-flex align-items-center fs-3 fw-semibold mb-4">
            <h3>Subscription Renewal Policy</h3><span class="ms-1" data-bs-toggle="tooltip" title="Specify your apps framework">
                <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>
        </div>
        <!--end::heading-->
        <form action="">
            <div class="fv-row mb-10 row">
                <div class="col-md-6">
                    <!--begin::Input group-->
                    <div class="fv-row mb-10">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                            <span class="required">Minimum Pages</span>
                            <span class="ms-1" data-bs-toggle="tooltip" title="Specify your unique app name">
                                <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>
                        </label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input type="number" class="form-control form-control-lg form-control-solid" name="min-page" placeholder="50" value="50" />
                        <!--end::Input-->
                    </div>
                </div>
                <div class="col-md-6">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                        <span class="required">Maximum Pages</span>
                        <span class="ms-1" data-bs-toggle="tooltip" title="Specify your unique app name">
                            <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>
                    </label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <input type="number" class="form-control form-control-lg form-control-solid" name="min-page" placeholder="750" value="750" />
                    <!--end::Input-->
                </div>
                <!--end::Input group-->
            </div>
            <!--begin::Input group-->
            <div class="fv-row mb-10 row">
                <div class="col-md-6">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                        <span class="required">Total Pages in Subscription:</span>
                        <span class="ms-1" data-bs-toggle="tooltip" title="Specify your unique app name">
                            <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>
                    </label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <input type="number" class="form-control form-control-lg form-control-solid" name="totalPages" placeholder="Total Pages" value="abeer@elementary-solutions.com" min="1" required />
                    <!--end::Input-->
                </div>
                <div class="col-md-6">
                    <div class="fv-row mb-10">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                            <span class="required">Rollover Limit (Max Pages):</span>
                            <span class="ms-1" data-bs-toggle="tooltip" title="Specify your unique app name">
                                <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>
                        </label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input type="number" class="form-control form-control-lg form-control-solid" name="rollover-limit" placeholder="Rollover Limit" value="" min="0" required />
                        <!--end::Input-->
                    </div>
                </div>
            </div>
            <!--end::Input group-->
            <!--begin::Input row-->
            <div class="d-flex fv-row mb-5">
                <!--begin::Radio-->
                <div class="form-check form-check-custom form-check-solid">
                    <!--begin::Input-->
                    <input type="checkbox" id="allowAllPages" name="allowAllPages" class="form-check-input me-3">
                    <!--end::Input-->
                    <!--begin::Label-->
                    <label class="form-check-label" for="kt_modal_update_role_option_0">
                        <div class="text-gray-600">Allow All Pages to Rollover:</div>
                    </label>
                    <!--end::Label-->
                </div>
                <!--end::Radio-->
            </div>
            <!--end::Input row-->
            <!--begin::Input row-->
            <div class="d-flex fv-row mb-5">
                <!--begin::Radio-->
                <div class="form-check form-check-custom form-check-solid">
                    <!--begin::Input-->
                    <input type="checkbox" id="membership-complete" name="membership-complete" class="form-check-input me-3">
                    <!--end::Input-->
                    <!--begin::Label-->
                    <label class="form-check-label" for="kt_modal_update_role_option_0">
                        <div class="text-gray-600">If Customer Manually cancels the Renewal, the membership will Complete its full allotted time.</div>
                    </label>
                    <!--end::Label-->
                </div>
                <!--end::Radio-->
            </div>
            <!--end::Input row-->
            <!--begin::Input row-->
            <div class="d-flex fv-row">
                <!--begin::Radio-->
                <div class="form-check form-check-custom form-check-solid">
                    <!--begin::Input-->
                    <input type="checkbox" id="used-up" name="used-up" class="form-check-input me-3">
                    <!--end::Input-->
                    <!--begin::Label-->
                    <label class="form-check-label" for="kt_modal_update_role_option_0">
                        <div class="text-gray-600">Cancel when all Pages are Used Up.</div>
                    </label>
                    <!--end::Label-->
                </div>
                <!--end::Radio-->
            </div>
            <!--end::Input row-->
        </form>
    </div>
</div>
<!--end::Step 3-->