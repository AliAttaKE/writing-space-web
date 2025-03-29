<!--begin::Step 2-->
<div data-kt-stepper-element="content">
    <div class="w-100">
        <form action="">
            <!--begin::Input group-->
            <div class="fv-row">
                <!--begin::heading-->
                <div class="d-flex align-items-center fs-3 fw-semibold mb-4">
                    <h3>Set Cost and Time Parameters</h3><span class="ms-1" data-bs-toggle="tooltip" title="Specify your apps framework">
                        <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>
                </div>
                <!--end::heading-->
                <!--begin::Input group-->
                <div class="fv-row row">
                    <!--begin::col-->
                    <div class="col-md-6 mb-10">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                            <span class="required">Cost Per Page</span>
                            <span class="ms-1" data-bs-toggle="tooltip" title="Specify your unique app name">
                                <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>
                        </label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <div class="position-relative">
                        <input type="number" class="form-control form-control-lg form-control-solid" name="cost-page" placeholder="5" value="" />
                        <i class="bi bi-currency-dollar position-absolute cost-sign"></i>
                        </div>
                        <!--end::Input-->
                    </div>
                    <!--end::col-->
                    <!--begin::col-->
                    <div class="col-md-6 mb-10">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                            <span class="required">Set Time Limit</span>
                            <span class="ms-1" data-bs-toggle="tooltip" title="Specify your unique app name">
                                <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>
                        </label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <select class="form-select form-select-solid fw-bold" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-kt-user-table-filter="role" data-hide-search="true">
                            <option></option>
                            <option value="Monthly">Monthly</option>
                            <option value="Quaterly">Quaterly</option>
                            <option value="Annually">Annually</option>
                        </select>
                        <!--end::Input-->
                    </div>
                    <!--end::col-->

                </div>
                <!--end::Input group-->
            </div>
            <!--end::Input group-->
        </form>
    </div>
</div>
<!--end::Step 2-->