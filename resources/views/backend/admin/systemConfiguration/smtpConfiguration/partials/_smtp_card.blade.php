<div class="col-lg-6">
    <div class="card card-flush h-lg-100">
        <!--begin::Card header-->
        <div class="card-header pt-7">
            <!--begin::Card title-->
            <div class="card-title">
                <h2 class="text-white">SMTP Configuration</h2>
            </div>
            <!--end::Card title-->
        </div>
        <!--end::Card header-->
        <div class="card-body  pt-5">
            <form class="form fv-plugins-bootstrap5 fv-plugins-framework"
                    action="{{route('admin.smtp_configuration.update')}}" method="POST">
                @csrf
                <div class="form-group row mb-3">
                    <input type="hidden" name="types[]" value="MAIL_DRIVER">
                    <label class="form-label label-text fs-color-white custom-fs-13">Type</label>
                    <div class="">
                        <select class="form-control aiz-selectpicker mb-2 mb-md-0 btn-dark-primary" name="MAIL_DRIVER"
                            onchange="checkMailDriver()">
                            <option value="sendmail" @if (env('MAIL_DRIVER')=="sendmail" ) selected @endif>Sendmail
                            </option>
                            <option value="smtp" @if (env('MAIL_DRIVER')=="smtp" ) selected @endif>SMTP</option>
                            <option value="mailgun" @if (env('MAIL_DRIVER')=="mailgun" ) selected @endif>Mailgun
                            </option>
                        </select>
                    </div>
                </div>
                <div id="smtp" class="mb-3">
                    <div class="form-group row mb-3">
                        <input type="hidden" name="types[]" value="MAIL_HOST">
                        <label class="form-label label-text fs-color-white custom-fs-13">MAIL HOST</label>
                        <div class="">
                            <input type="text" class="form-control btn-dark-primary" name="MAIL_HOST" value="{{  env('MAIL_HOST') }}"
                                placeholder="MAIL HOST">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <input type="hidden" name="types[]" value="MAIL_PORT">
                        <label class="form-label label-text fs-color-white custom-fs-13">MAIL PORT</label>
                        <div class="">
                            <input type="text" class="form-control btn-dark-primary" name="MAIL_PORT" value="{{  env('MAIL_PORT') }}"
                                placeholder="MAIL PORT">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <input type="hidden" name="types[]" value="MAIL_USERNAME">
                        <label class="form-label label-text fs-color-white custom-fs-13">MAIL USERNAME</label>
                        <div class="">
                            <input type="text" class="form-control btn-dark-primary" name="MAIL_USERNAME"
                                value="{{  env('MAIL_USERNAME') }}" placeholder="MAIL USERNAME">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <input type="hidden" name="types[]" value="MAIL_PASSWORD">
                        <label class="form-label label-text fs-color-white custom-fs-13">MAIL PASSWORD</label>
                        <div class="">
                            <input type="text" class="form-control btn-dark-primary" name="MAIL_PASSWORD"
                                value="{{  env('MAIL_PASSWORD') }}" placeholder="MAIL PASSWORD">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <input type="hidden" name="types[]" value="MAIL_ENCRYPTION">
                        <label class="form-label label-text fs-color-white custom-fs-13">MAIL ENCRYPTION</label>
                        <div class="">
                            <input type="text" class="form-control btn-dark-primary" name="MAIL_ENCRYPTION"
                                value="{{  env('MAIL_ENCRYPTION') }}" placeholder="MAIL ENCRYPTION">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <input type="hidden" name="types[]" value="MAIL_FROM_ADDRESS">
                        <label class="form-label label-text fs-color-white custom-fs-13">MAIL FROM ADDRESS</label>
                        <div class="">
                            <input type="email" class="form-control btn-dark-primary" name="MAIL_FROM_ADDRESS"
                                value="{{  env('MAIL_FROM_ADDRESS') }}" placeholder="MAIL FROM ADDRESS">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <input type="hidden" name="types[]" value="MAIL_FROM_NAME">
                        <label class="form-label label-text fs-color-white custom-fs-13">MAIL FROM NAME</label>
                        <div class="">
                            <input type="text" class="form-control btn-dark-primary" name="MAIL_FROM_NAME"
                                value="{{  env('MAIL_FROM_NAME') }}" placeholder="MAIL FROM NAME">
                        </div>
                    </div>
                </div>
                <div id="mailgun">
                    <div class="form-group row mb-3">
                        <input type="hidden" name="types[]" value="MAILGUN_DOMAIN">
                        <label class="form-label label-text fs-color-white custom-fs-13">MAILGUN DOMAIN</label>
                        <div class="">
                            <input type="text" class="form-control btn-dark-primary" name="MAILGUN_DOMAIN"
                                value="{{  env('MAILGUN_DOMAIN') }}" placeholder="MAILGUN DOMAIN">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <input type="hidden" name="types[]" value="MAILGUN_SECRET">
                        <label class="form-label label-text fs-color-white custom-fs-13">MAILGUN SECRET</label>
                        <div class="">
                            <input type="text" class="form-control btn-dark-primary" name="MAILGUN_SECRET"
                                value="{{  env('MAILGUN_SECRET') }}" placeholder="MAILGUN SECRET">
                        </div>
                    </div>
                </div>

                <!--begin::Action buttons-->
                <div class="d-flex justify-content-end mt-3">
                    <!--begin::Button-->
                    <button type="reset" data-kt-contacts-type="cancel" class="btn badge-custom-bg me-3">
                        Cancel
                    </button>
                    <!--end::Button-->
                    @if (!env('MAIL_MAILER'))
                        <!--begin::Button-->
                        <button type="submit" class="btn badge-custom-bg-2">
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
                        <button type="submit" class="btn badge-custom-bg">
                            <span class="indicator-label">
                                Activated
                            </span>
                        </button>
                        <!--end::Button-->
                    @endif
                </div>
                <!--end::Action buttons-->
            </form>
        </div>
    </div>
</div>