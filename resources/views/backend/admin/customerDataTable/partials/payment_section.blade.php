<style>
    .form-select-solid{
        width: 50px !important;
    }
/* Keep ONLY theme (orange) arrow — hide native browser arrow */
#admin_kt_table_payments_wrapper .dataTables_length .form-select,
#admin_kt_table_custom_orders_wrapper .dataTables_length .form-select {
  -webkit-appearance: none !important;
  -moz-appearance: none !important;
  appearance: none !important;        /* native arrow off */
  background-repeat: no-repeat !important;
  background-position: right .75rem center !important;
  background-size: 16px 12px !important;
  padding-right: 2.25rem !important;  /* arrow ke liye space */
}
/* Old Edge/IE fallback */
#admin_kt_table_payments_wrapper .dataTables_length .form-select::-ms-expand,
#admin_kt_table_custom_orders_wrapper .dataTables_length .form-select::-ms-expand {
  display: none;
}
label::after{
    display: none !important;
}
</style>

<div id="admin-payment-section-wrapper">
    <div class="card mb-6 mb-xl-9 card-custom-bg message-summ">
        <div class="card-header">
            <div class="card-title">
                <h2 class="fs-color-white custom-fs-23">Payment Records</h2>
            </div>
          <div class="card-toolbar">
  <div class="d-flex">
      <input type="text" id="admin_payments_search" class="form-control btn-dark-primary ms-3" placeholder="Search payments…" style="min-width:220px;">
    <input type="month" name="admin_packages_filter_date" class="form-control btn-dark-primary ms-3" id="admin_packages_filter_date" min="2018-01">
    <button type="button" class="btn badge-custom-bg btn-sm admin-reset-package-filter ms-4">Reset</button>
  </div>
</div>

        </div>

        <div class="card-body pb-5">
            <div class="py-0">
               
            </div>
        </div>
    </div>
</div>
