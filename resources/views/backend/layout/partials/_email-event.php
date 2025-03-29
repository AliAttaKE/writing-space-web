<!--begin::Root-->
<div class="d-flex flex-column flex-root" id="kt_app_root">
	<!--begin::Wrapper-->
	<div class="d-flex flex-column flex-column-fluid">
		<!--begin::Body-->
		<div class="scroll-y flex-column-fluid px-10 py-10" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_header_nav" data-kt-scroll-offset="5px" data-kt-scroll-save-state="true" style=" --kt-scrollbar-color: #d9d0cc; --kt-scrollbar-hover-color: #d9d0cc">
			<!--begin::Email template-->
			<style>
				html,
				body {
					padding: 0;
					margin: 0;
					font-family: Inter, Helvetica, "sans-serif";
				}

				a:hover {
					color: #009ef7;
				}
			</style>
			<div id="#kt_app_body_content" style=" font-family:Arial,Helvetica,sans-serif; line-height: 1.5; min-height: 100%; font-weight: normal; font-size: 15px; color: #2F3044; margin:0; padding:0; width:100%;">
				<div class="d-flex justify-content-between">
				    <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">Email Events</h1>
					<button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_email_temp">Add Email Event</button>

				</div>
				<div style="background-color:#ffffff; padding: 45px 0 34px 0; border-radius: 24px; margin:40px auto; max-width: 90%;">
				    <div class="row">
				        <!--<div class="col-lg-4">-->
				        <!--    <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" height="auto" style="border-collapse:collapse">-->
        				<!--		<tbody>-->
        				<!--			<tr>-->
        				<!--				<td align="center" valign="center" style="text-align:center; padding-bottom: 10px">-->
        									<!--begin:Email content-->
        				<!--					<div style="text-align:center; margin:0 15px 34px 15px">-->
        										<!--begin:Logo-->
        				<!--						<div style="margin-bottom: 10px">-->
        				<!--							<a href="https://keenthemes.com" rel="noopener" target="_blank">-->
        				<!--								<img alt="Logo" src="assets/media/ws/ws-dark-name-logo.png" class="img-fluid" />-->
        				<!--							</a>-->
        				<!--						</div>-->
        										<!--end:Logo-->
        										<!--begin:Media-->
        				<!--						<div style="margin-bottom: 15px">-->
        				<!--							<img alt="Logo" src="assets/media/email/icon-positive-vote-1.svg" />-->
        				<!--						</div>-->
        										<!--end:Media-->
        										<!--begin:Text-->
        				<!--						<div style="font-size: 14px; font-weight: 500; margin-bottom: 27px; font-family:Arial,Helvetica,sans-serif;">-->
        				<!--							<p style="margin-bottom:9px; color:#181C32; font-size: 22px; font-weight:700">Hey Marcus, thanks for signing up!</p>-->
        				<!--							<p style="margin-bottom:2px; color:#7E8299">Lots of people make mistakes while creating</p>-->
        				<!--							<p style="margin-bottom:2px; color:#7E8299">paragraphs. Some writers just put whitespace in</p>-->
        				<!--							<p style="margin-bottom:2px; color:#7E8299">their text in random places</p>-->
        				<!--						</div>-->
        										<!--end:Text-->
        										
        				<!--					</div>-->
        									<!--end:Email content-->
        				<!--				</td>-->
        				<!--			</tr>-->
        				<!--		</tbody>-->
        				<!--	</table>-->
				        <!--</div>-->
				        <div class="col-lg-12 p-5">
				            <div class="card card-flush p-3">
						<!--begin::Card header-->
        						<div class="card-header align-items-center py-5 gap-2 gap-md-5">
        							<!--begin::Card title-->
        							<div class="card-title">
        								<!--begin::Search-->
        								<div class="d-flex align-items-center position-relative my-1">
        									<i class="ki-duotone ki-magnifier fs-3 position-absolute ms-4"><span class="path1"></span><span class="path2"></span></i> <input type="text" data-kt-ecommerce-product-filter="search" class="form-control form-control-solid w-250px ps-12" placeholder="Search Product">
        								</div>
        								<!--end::Search-->
        							</div>
        							<!--end::Card title-->
        
        						</div>
        						<!--end::Card header-->
        
        						<!--begin::Card body-->
        						<div class="card-body pt-0">
        
        							<!--begin::Table-->
        							<div id="kt_ecommerce_products_table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
        								<div class="table-responsive">
        									<table class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer" id="kt_ecommerce_products_table">
        										<thead>
        											<tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
        												<th class="w-10px pe-2 sorting_disabled" rowspan="1" colspan="1" aria-label="">
        													<div class="form-check form-check-sm form-check-custom form-check-solid me-3">
        														<input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_ecommerce_products_table .form-check-input" value="1">
        													</div>
        												</th>
        												<th class="min-w-125px sorting" tabindex="0" aria-controls="kt_ecommerce_products_table" rowspan="1" colspan="1" aria-label="Product: activate to sort column ascending">Title</th>
        												<th class=" min-w-125px sorting" tabindex="0" aria-controls="kt_ecommerce_products_table" rowspan="1" colspan="1" aria-label="SKU: activate to sort column ascending">Description</th>
        												<th class="min-w-70px sorting_disabled" rowspan="1" colspan="1" aria-label="Actions">Actions</th>
        											</tr>
        										</thead>
        										<tbody class="fw-semibold text-gray-600">
        											<tr class="odd">
        												<td>
        													<div class="form-check form-check-sm form-check-custom form-check-solid">
        														<input class="form-check-input" type="checkbox" value="1">
        													</div>
        												</td>
        												<td>xyz</td>
        												<td>xyz</td>
        
        												<td class="text-start">
        													<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
        														Actions
        														<i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
        													<!--begin::Menu-->
        													<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
        														<!--begin::Menu item-->
        														<div class="menu-item px-3">
        															<a href="/metronic8/demo1/../demo1/apps/ecommerce/catalog/edit-product.html" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="menu-link px-3">
        																Edit
        															</a>
        														</div>
        														<!--end::Menu item-->
        
        														<!--begin::Menu item-->
        														<div class="menu-item px-3">
        															<a onclick="confirmDelete()" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
        																Delete
        															</a>
        														</div>
        														<!--end::Menu item-->
        													</div>
        													<!--end::Menu-->
        												</td>
        											</tr>
        											<tr class="odd">
        												<td>
        													<div class="form-check form-check-sm form-check-custom form-check-solid">
        														<input class="form-check-input" type="checkbox" value="1">
        													</div>
        												</td>
        												<td>xyz</td>
        												<td>xyz</td>
        
        												<td class="text-start">
        													<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
        														Actions
        														<i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
        													<!--begin::Menu-->
        													<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
        														<!--begin::Menu item-->
        														<div class="menu-item px-3">
        															<a href="/metronic8/demo1/../demo1/apps/ecommerce/catalog/edit-product.html" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="menu-link px-3">
        																Edit
        															</a>
        														</div>
        														<!--end::Menu item-->
        
        														<!--begin::Menu item-->
        														<div class="menu-item px-3">
        															<a href="#" onclick="confirmDelete()" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
        																Delete
        															</a>
        														</div>
        														<!--end::Menu item-->
        													</div>
        													<!--end::Menu-->
        												</td>
        											</tr>
        										</tbody>
        									</table>
        								</div>
        								<div class="row">
        									<div class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start">
        										<div class="dataTables_length" id="kt_ecommerce_products_table_length"><label><select name="kt_ecommerce_products_table_length" aria-controls="kt_ecommerce_products_table" class="form-select form-select-sm form-select-solid">
        													<option value="10">10</option>
        													<option value="25">25</option>
        													<option value="50">50</option>
        													<option value="100">100</option>
        												</select></label></div>
        									</div>
        									<div class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end">
        										<div class="dataTables_paginate paging_simple_numbers" id="kt_ecommerce_products_table_paginate">
        											<ul class="pagination">
        												<li class="paginate_button page-item previous disabled" id="kt_ecommerce_products_table_previous"><a href="#" aria-controls="kt_ecommerce_products_table" data-dt-idx="0" tabindex="0" class="page-link"><i class="previous"></i></a></li>
        												<li class="paginate_button page-item active"><a href="#" aria-controls="kt_ecommerce_products_table" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
        												<li class="paginate_button page-item "><a href="#" aria-controls="kt_ecommerce_products_table" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
        												<li class="paginate_button page-item "><a href="#" aria-controls="kt_ecommerce_products_table" data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
        												<li class="paginate_button page-item "><a href="#" aria-controls="kt_ecommerce_products_table" data-dt-idx="4" tabindex="0" class="page-link">4</a></li>
        												<li class="paginate_button page-item "><a href="#" aria-controls="kt_ecommerce_products_table" data-dt-idx="5" tabindex="0" class="page-link">5</a></li>
        												<li class="paginate_button page-item next" id="kt_ecommerce_products_table_next"><a href="#" aria-controls="kt_ecommerce_products_table" data-dt-idx="6" tabindex="0" class="page-link"><i class="next"></i></a></li>
        											</ul>
        										</div>
        									</div>
        								</div>
        							</div>
        							<!--end::Table-->
        						</div>
        						<!--end::Card body-->
        					</div>
				        </div>
				    </div>
					
					
				</div>

			
				<!--begin::Modal - create Data-->
				<div class="modal fade" id="kt_modal_email_temp" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Add Email Event</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <div class="mb-3">
                          <label for="exampleFormControlInput1" class="form-label">Title</label>
                          <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Title" value="Jhon Deo">
                        </div>
                        <div class="mb-3">
                          <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" style="resize: none !important;"></textarea>
                        </div>
                        <div class="mb-7">
                            <!--begin::Label-->
                            <label class="fs-6 fw-semibold mb-2">
                                <span>Add Image</span>
                                <span class="ms-1" data-bs-toggle="tooltip" aria-label="Allowed file types: png, jpg, jpeg." data-bs-original-title="Allowed file types: png, jpg, jpeg." data-kt-initialized="1">
                                    <i class="ki-duotone ki-information fs-7">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                </span>
                            </label>
                            <!--end::Label-->
                            <!--begin::Image input wrapper-->
                            <div class="mt-1">
                                <!--begin::Image placeholder-->
                                <style>
                                    .image-input-placeholder {
                                        background-image: url('assets/media/svg/avatars/blank.svg');
                                    }

                                    [data-bs-theme="dark"] .image-input-placeholder {
                                        background-image: url('assets/media/svg/avatars/blank-dark.svg');
                                    }
                                </style>
                                <!--end::Image placeholder-->
                                <!--begin::Image input-->
                                <div class="image-input image-input-outline image-input-placeholder" data-kt-image-input="true">
                                    <!--begin::Preview existing avatar-->
                                    <div class="image-input-wrapper w-125px h-125px" style="background-image: url(assets/media/avatars/300-6.jpg"></div>
                                    <!--end::Preview existing avatar-->
                                    <!--begin::Edit-->
                                    <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" aria-label="Change avatar" data-bs-original-title="Change avatar" data-kt-initialized="1">
                                        <i class="ki-duotone ki-pencil fs-7">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                        <!--begin::Inputs-->
                                        <input type="file" name="avatar" accept=".png, .jpg, .jpeg">
                                        <input type="hidden" name="avatar_remove">
                                        <!--end::Inputs-->
                                    </label>
                                    <!--end::Edit-->
                                    <!--begin::Cancel-->
                                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" aria-label="Cancel avatar" data-bs-original-title="Cancel avatar" data-kt-initialized="1">
                                        <i class="ki-duotone ki-cross fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </span>
                                    <!--end::Cancel-->
                                    <!--begin::Remove-->
                                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" aria-label="Remove avatar" data-bs-original-title="Remove avatar" data-kt-initialized="1">
                                        <i class="ki-duotone ki-cross fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </span>
                                    <!--end::Remove-->
                                </div>
                                <!--end::Image input-->
                            </div>
                            <!--end::Image input wrapper-->
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Submit</button>
                      </div>
                    </div>
                  </div>
                </div>
			    <!--end::Modal - Create App-->
				<!--begin::Modal - Edit Data-->
				<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Edit Email Event</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <div class="mb-3">
                          <label for="exampleFormControlInput1" class="form-label">Title</label>
                          <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Title" value="Jhon Deo">
                        </div>
                        <div class="mb-3">
                          <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" style="resize: none !important;"></textarea>
                        </div>
                        <div class="mb-7">
                            <!--begin::Label-->
                            <label class="fs-6 fw-semibold mb-2">
                                <span>Update Image</span>
                                <span class="ms-1" data-bs-toggle="tooltip" aria-label="Allowed file types: png, jpg, jpeg." data-bs-original-title="Allowed file types: png, jpg, jpeg." data-kt-initialized="1">
                                    <i class="ki-duotone ki-information fs-7">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                </span>
                            </label>
                            <!--end::Label-->
                            <!--begin::Image input wrapper-->
                            <div class="mt-1">
                                <!--begin::Image placeholder-->
                                <style>
                                    .image-input-placeholder {
                                        background-image: url('assets/media/svg/avatars/blank.svg');
                                    }

                                    [data-bs-theme="dark"] .image-input-placeholder {
                                        background-image: url('assets/media/svg/avatars/blank-dark.svg');
                                    }
                                </style>
                                <!--end::Image placeholder-->
                                <!--begin::Image input-->
                                <div class="image-input image-input-outline image-input-placeholder" data-kt-image-input="true">
                                    <!--begin::Preview existing avatar-->
                                    <div class="image-input-wrapper w-125px h-125px" style="background-image: url(assets/media/avatars/300-6.jpg"></div>
                                    <!--end::Preview existing avatar-->
                                    <!--begin::Edit-->
                                    <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" aria-label="Change avatar" data-bs-original-title="Change avatar" data-kt-initialized="1">
                                        <i class="ki-duotone ki-pencil fs-7">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                        <!--begin::Inputs-->
                                        <input type="file" name="avatar" accept=".png, .jpg, .jpeg">
                                        <input type="hidden" name="avatar_remove">
                                        <!--end::Inputs-->
                                    </label>
                                    <!--end::Edit-->
                                    <!--begin::Cancel-->
                                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" aria-label="Cancel avatar" data-bs-original-title="Cancel avatar" data-kt-initialized="1">
                                        <i class="ki-duotone ki-cross fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </span>
                                    <!--end::Cancel-->
                                    <!--begin::Remove-->
                                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" aria-label="Remove avatar" data-bs-original-title="Remove avatar" data-kt-initialized="1">
                                        <i class="ki-duotone ki-cross fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </span>
                                    <!--end::Remove-->
                                </div>
                                <!--end::Image input-->
                            </div>
                            <!--end::Image input wrapper-->
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Update</button>
                      </div>
                    </div>
                  </div>
                </div>
			    <!--end::Modal - edit App-->
			</div>
			<!--end::Email template-->
		</div>
		<!--end::Body-->
	</div>
	<!--end::Wrapper-->
</div>
<!--end::Root-->
<!--begin::Javascript-->
<script>
	var hostUrl = "assets/";
</script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script>
    function confirmDelete() {
        Swal.fire({
            title: 'Are you sure?',
            text: 'You will not be able to recover this data!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                // TODO: Add your deletion logic here
                // For now, let's show an alert
                Swal.fire('Deleted!', 'Your data has been deleted.', 'success');
            }
        });
    }
</script>
<script>
    // Function to handle table search
    function handleTableSearch() {
        // Get the search input value
        var searchText = $('[data-kt-ecommerce-product-filter="search"]').val().toLowerCase();
console.log(searchText)
        // Loop through each table row
        $('#kt_ecommerce_products_table tbody tr').each(function () {
            // Check if any cell contains the search text
            var rowText = $(this).text().toLowerCase();
            if (rowText.indexOf(searchText) === -1) {
                // Hide the row if it doesn't match the search text
                $(this).hide();
            } else {
                // Show the row if it matches the search text
                $(this).show();
            }
        });
    }

    // Attach the search handler to the input change event
    $('[data-kt-ecommerce-product-filter="search"]').on('input', function () {
        handleTableSearch();
    });

	var currentStep = 1;

function updateStepper() {
    // Get all steps
    var steps = document.querySelectorAll('.step');

    // Remove 'current' class from all steps
    steps.forEach(function(step) {
        $(step).find('[data-kt-stepper-element="content"]').removeClass('current');
        $(step).hide();
    });

    // Add 'current' class to the current step
    $(steps[currentStep - 1]).find('[data-kt-stepper-element="content"]').addClass('current');
    $(steps[currentStep - 1]).show();



    const backButton = document.querySelector('#previous');
    const continueButton = document.querySelector('#next');
    const submitButton = document.querySelector('#submit');

    if (currentStep === 1) {
        backButton.style.display = 'none';
        continueButton.style.display = 'block';
        submitButton.style.display = 'none';
    } else if (currentStep < 5) {
        backButton.style.display = 'block';
        continueButton.style.display = 'block';
        submitButton.style.display = 'none';
    } else {
        backButton.style.display = 'block';
        continueButton.style.display = 'none';
        submitButton.style.display = 'block';
    }

}

function active_button() {
    var steps = document.querySelectorAll('.step_name');

    // Remove 'current' class from all steps
    steps.forEach(function(step) {
        $(step).find('[data-kt-stepper-element="nav"]').removeClass('current');
       
    });

    // Add 'current' class to the current step
    $(steps[currentStep - 1]).find('[data-kt-stepper-element="nav"]').addClass('current');
   
}

const continueButton = document.querySelector('#next');
continueButton.addEventListener("click", function () {
    // Go to the next step (if not already at the last step)
    if (currentStep < 5) {
        currentStep++;
        updateStepper();
		active_button()
    }
});
const backButton = document.querySelector('#previous');
backButton.addEventListener("click", function () {
    if (currentStep > 1) {
        currentStep--;
        updateStepper();
		active_button()
    }
});
	</script>
<script src="assets/plugins/global/plugins.bundle.js"></script>
<script src="assets/js/scripts.bundle.js"></script>
<!--end::Global Javascript Bundle-->
<!--end::Javascript-->
</body>
<!--end::Body-->

</html>