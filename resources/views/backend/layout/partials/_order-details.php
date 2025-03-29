<!--begin::App-->
<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
	<!--begin::Page-->
	<div class="app-page flex-column flex-column-fluid" id="kt_app_page">
		<!--begin::Header-->
		<!--end::Header-->
		<!--begin::Wrapper-->
		<div class="flex-column flex-row-fluid" id="kt_app_wrapper">
			<!--begin::Sidebar-->
			<!--end::Sidebar-->
			<!--begin::Main-->
			<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
				<!--begin::Content wrapper-->
				<div class="d-flex flex-column flex-column-fluid">
					<!--begin::Toolbar-->
					<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
						<!--begin::Toolbar container-->
						<div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
							<!--begin::Page title-->
							<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
								<!--begin::Title-->
								<h1 class="page-heading d-flex text-gray-900 fw-bold fs-1 flex-column justify-content-center my-0">Order Details</h1>
								<!--end::Title-->
								<!--begin::Breadcrumb-->
								<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
									<!--begin::Item-->
									<li class="breadcrumb-item text-muted">
										<a href="index.html" class="text-muted text-hover-primary">Place Order</a>
									</li>
									<!--end::Item-->
									<!--begin::Item-->
									<li class="breadcrumb-item">
										<span class="bullet bg-gray-500 w-5px h-2px"></span>
									</li>
									<!--end::Item-->
									<!--begin::Item-->
									<li class="breadcrumb-item text-muted">0319312</li>
									<!--end::Item-->
									<!--begin::Item-->
								</ul>
								<!--end::Breadcrumb-->
							</div>
							<!--end::Page title-->
							<!--begin::Actions-->
							<div class="d-flex align-items-center gap-2 gap-lg-3">

								<!--begin::Secondary button-->
								<!--end::Secondary button-->
								<!--begin::Primary button-->
								<a href="create-order.php" class="btn btn-sm fw-bold btn-primary">Back</a>
								<!--end::Primary button-->
							</div>
							<!--end::Actions-->
						</div>
						<!--end::Toolbar container-->
					</div>
					<!--end::Toolbar-->
					<!--begin::Content-->
					<div id="kt_app_content" class="app-content flex-column-fluid">
						<!--begin::Content container-->
						<div id="kt_app_content_container" class="app-container container-xxl">
							<!--begin::Layout-->
							<div class="d-flex flex-column flex-xl-row mb-5">

								<!--begin::Content-->
								<div class="flex-lg-row-fluid">
									<!--begin:::Tabs-->
									<ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-8">
										<!--begin:::Tab item-->
										<li class="nav-item">
											<a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_ecommerce_customer_details">Order Details</a>
										</li>
										<!--end:::Tab item-->
										<!--begin:::Tab item-->
										<li class="nav-item">
											<a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_ecommerce_customer_messages">Messages</a>
										</li>
										<!--end:::Tab item-->
										<!--begin:::Tab item-->
										<li class="nav-item">
											<a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_ecommerce_customer_orderFiles">Order Files</a>
										</li>
										<!--end:::Tab item-->
									</ul>
									<!--end:::Tabs-->
									<!--begin:::Tab content-->
									<div class="tab-content" id="myTabContent">
										<!--begin:::Tab pane-->
										<div class="tab-pane fade show active" id="kt_ecommerce_customer_details" role="tabpanel">
											<div id="kt_app_content" class="app-content  flex-column-fluid ">

												<div class="d-flex flex-column flex-root app-root mb-5" id="kt_app_root">
													<!--begin::Page-->
													<div class="app-page flex-column flex-column-fluid" id="kt_app_page">
														<!--begin::Wrapper-->
														<div class="flex-column flex-row-fluid" id="kt_app_wrapper">
															<!--begin::Main-->
															<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
																<!--begin::Content wrapper-->
																<div class="d-flex flex-column flex-column-fluid">
																	<!--begin::Content-->
																	<div id="kt_app_content" class="app-content flex-column-fluid">
																		<!--begin::Content container-->
																		<div id="kt_app_content_container" class="">
																			<!--begin::Card-->
																			<div class="card">
																				<!--begin::Card header-->
																				<div class="card-header border-0 pt-6">
																					<!--begin::Card title-->
																					<div class="card-title">
																						<!--begin::Search-->
																						<div class="d-flex align-items-center position-relative my-1">
																							<i class="ki-duotone ki-magnifier fs-3 position-absolute ms-5">
																								<span class="path1"></span>
																								<span class="path2"></span>
																							</i>
																							<input type="text" data-kt-user-table-filter="search" class="form-control form-control-solid w-250px ps-13" placeholder="Search Order" />
																						</div>
																						<!--end::Search-->
																					</div>
																					<!--begin::Card title-->
																					<!--begin::Card toolbar-->
																					<div class="card-toolbar">
																						<!--begin::Toolbar-->
																						<div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
																							<!--begin::Filter-->
																							<!--begin::Export-->
																							<button type="button" class="btn btn-light-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_export_users">
																								<i class="ki-duotone ki-exit-up fs-2">
																									<span class="path1"></span>
																									<span class="path2"></span>
																								</i>Export</button>
																							<!--end::Export-->
																						</div>
																						<!--end::Toolbar-->
																						<!--begin::Group actions-->
																						<div class="d-flex justify-content-end align-items-center d-none" data-kt-user-table-toolbar="selected">
																							<div class="fw-bold me-5">
																								<span class="me-2" data-kt-user-table-select="selected_count"></span>Selected
																							</div>
																							<button type="button" class="btn btn-danger" data-kt-user-table-select="delete_selected">Delete Selected</button>
																						</div>
																						<!--end::Group actions-->
																						<!--begin::Modal - Adjust Balance-->
																						<div class="modal fade" id="kt_modal_export_users" tabindex="-1" aria-hidden="true">
																							<!--begin::Modal dialog-->
																							<div class="modal-dialog modal-dialog-centered mw-650px">
																								<!--begin::Modal content-->
																								<div class="modal-content">
																									<!--begin::Modal header-->
																									<div class="modal-header">
																										<!--begin::Modal title-->
																										<h2 class="fw-bold">Export Users</h2>
																										<!--end::Modal title-->
																										<!--begin::Close-->
																										<div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal" aria-label="Close">
																											<i class="ki-duotone ki-cross fs-1">
																												<span class="path1"></span>
																												<span class="path2"></span>
																											</i>
																										</div>
																										<!--end::Close-->
																									</div>
																									<!--end::Modal header-->
																									<!--begin::Modal body-->
																									<div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
																										<!--begin::Form-->
																										<form id="kt_modal_export_users_form" class="form" action="#">
																											<!--begin::Input group-->
																											<div class="fv-row mb-10">
																												<!--begin::Label-->
																												<label class="fs-6 fw-semibold form-label mb-2">Select Status:</label>
																												<!--end::Label-->
																												<!--begin::Input-->
																												<select name="role" data-control="select2" data-placeholder="Select Status" data-hide-search="true" class="form-select form-select-solid fw-bold">
																													<option></option>
																													<option value="Administrator">Enable</option>
																													<option value="Analyst">Disable</option>
																												</select>
																												<!--end::Input-->
																											</div>
																											<!--end::Input group-->
																											<!--begin::Input group-->
																											<div class="fv-row mb-10">
																												<!--begin::Label-->
																												<label class="required fs-6 fw-semibold form-label mb-2">Select Export Format:</label>
																												<!--end::Label-->
																												<!--begin::Input-->
																												<select name="format" data-control="select2" data-placeholder="Select a format" data-hide-search="true" class="form-select form-select-solid fw-bold">
																													<option></option>
																													<option value="excel">Excel</option>
																													<option value="pdf">PDF</option>
																													<option value="cvs">CVS</option>
																													<option value="zip">ZIP</option>
																												</select>
																												<!--end::Input-->
																											</div>
																											<!--end::Input group-->
																											<!--begin::Actions-->
																											<div class="text-center">
																												<button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">Discard</button>
																												<button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
																													<span class="indicator-label">Submit</span>
																													<span class="indicator-progress">Please wait...
																														<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
																												</button>
																											</div>
																											<!--end::Actions-->
																										</form>
																										<!--end::Form-->
																									</div>
																									<!--end::Modal body-->
																								</div>
																								<!--end::Modal content-->
																							</div>
																							<!--end::Modal dialog-->
																						</div>
																						<!--end::Modal - New Card-->
																					</div>
																					<!--end::Card toolbar-->
																				</div>
																				<!--end::Card header-->
																				<!--begin::Card body-->
																				<!--begin::Card body-->
																				<div class="card-body overflow-auto py-4">
																					<!--begin::Table-->
																					<table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_new_orders">
																						<thead>
																							<tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">

																								<th class="min-w-70px fw_800 pb-8">order No</th>
																								<th class="min-w-70px fw_800 pb-8">Pages</th>
																								<th class="min-w-70px fw_800 pb-8">Arrival Date</th>
																								<th class="min-w-80px fw_800 pb-8">Due Date</th>
																								<th class="min-w-80px fw_800 pb-8">Citation</th>
																								<th class="min-w-50px fw_800 pb-8">Subject</th>
																								<th class="min-w-80px fw_800 pb-8">Spacing</th>
																								<th class="min-w-50px fw_800 pb-8">Doc Type</th>
																								<th class="min-w-80px fw_800 pb-8">Sources</th>

																							</tr>

																						</thead>
																						<tbody class="text-gray-600 fw-semibold">

																							<tr>
																								<td>0319842</td>
																								<td>23</td>
																								<td>12/24/2023 12:45Pm</td>
																								<td>12/31/2023 12:45Pm</td>
																								<td>xyz</td>
																								<td>xyz</td>
																								<td>xyz</td>
																								<td>xyz</td>
																								<td>xyz</td>
																						</tbody>
																					</table>
																					<!--end::Table-->
																				</div>
																				<!--end::Card body-->
																				<!--end::Card body-->
																			</div>
																			<!--end::Card-->
																		</div>
																		<!--end::Content container-->
																	</div>
																	<!--end::Content-->
																</div>
																<!--end::Content wrapper-->
															</div>
															<!--end:::Main-->
														</div>
														<!--end::Wrapper-->
													</div>
													<!--end::Page-->
												</div>
												<div class="">
													<div class="col-sm-6 mb-10">
														<div class="d-flex">
															<div class="col-6">
																<h3 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">Academic Level</h3>
															</div>
															<div class="col-6">
																<p class="fw-bold text-dark">xyz</p>
															</div>
														</div>
														<div class="d-flex">
															<div class="col-6">
																<h3 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">No of Sources</h3>
															</div>
															<div class="col-6">
																<p class="fw-bold text-dark">xyz</p>
															</div>
														</div>
														<div class="d-flex">
															<div class="col-6">
																<h3 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">Stastical Analysis</h3>
															</div>
															<div class="col-6">
																<p class="fw-bold text-dark">xyz</p>
															</div>
														</div>
														<div class="d-flex">
															<div class="col-6">
																<h3 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">Language Style</h3>
															</div>
															<div class="col-6">
																<p class="fw-bold text-dark">xyz</p>
															</div>
														</div>
														<div class="d-flex">
															<div class="col-6">
																<h3 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">Topic</h3>
															</div>
															<div class="col-6">
																<p class="fw-bold text-dark">The Brave Kings Man Story 1994</p>
															</div>
														</div>
													</div>
													<h2 class="page-heading bg-light mb-5 d-flex text-gray-900 fw-bold fs-2 flex-column justify-content-center my-0">Instructions</h2>
													<p class="mb-3 text-dark">There are various methods and tools that can be used to improve the accessibility of curriculum tor students with disabilities. Augmentative and alternative. communication devices as well as other assistive technologies are often used for this purpose. It is important for teachers to understand the options that are available. and that they advocate for students to be provided with the best possible tools to assist them.</p>
													<h3 class="page-heading mb-5 d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">Part 1: Measurement Data Lesson Plan</h3>
													<p class="text-dark">Select a 1-5 grade level, a corresponding Arizona or other state standard based on the Measurement and Data domain, and a group of 3-4 students from the "Class Profile who would benefit from the use of augmentative and/or alternative communication devices or other forms of assistive technology.With your identified learning target and small group in mind, complete a lesson plan, using the "COE Lesson Plan Template," that specifies applicable assistive. technology and includes differentiated activities to facilitate students making measurement comparisons, andUsing models of measuring units, or Using measuring instruments, or Representing and interpreting the data.</p>
													<h3 class="page-heading mb-5 d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">Part 2: Communication Device Rationale</h3>
													<p class="text-dark">In addition to your completed lesson plan, justify your augmentative and/or alternative communication devices or other forms of assistive technology choices in a 250- 500 word rationale.Support your choices with 2-3 scholarly resources.</p>
												</div>
											</div>

										</div>

										<!--end:::Tab pane-->
										<!--begin:::Tab pane-->
										<div class="tab-pane fade" id="kt_ecommerce_customer_messages" role="tabpanel">
											<div class="d-flex justify-content-center">
												<div class=" col-8">

													<!--begin::Card-->
													<div class="card">

														<div class="card-header align-items-center justify-content-end py-5 gap-5">
															<!--begin::Actions-->
															<!--end::Actions-->
															<!--begin::Pagination-->
															<div class="d-flex align-items-center">
																<!--begin::Pages info-->
																<span class="fw-semibold text-muted me-2">1 - 50 of 235</span>
																<!--end::Pages info-->
																<!--begin::Prev page-->
																<a href="#" class="btn btn-sm btn-icon btn-light btn-active-light-primary me-3" data-bs-toggle="tooltip" data-bs-placement="top" title="Previous message">
																	<i class="ki-duotone ki-left fs-2 m-0"></i>
																</a>
																<!--end::Prev page-->
																<!--begin::Next page-->
																<a href="#" class="btn btn-sm btn-icon btn-light btn-active-light-primary me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Next message">
																	<i class="ki-duotone ki-right fs-2 m-0"></i>
																</a>
																<!--end::Next page-->
																<!--begin::Settings menu-->
																<div>
																	<a href="#" class="btn btn-sm btn-icon btn-light btn-active-light-primary me-2" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-bs-toggle="tooltip" data-bs-placement="top" title="Settings">
																		<i class="ki-duotone ki-dots-square fs-2 m-0">
																			<span class="path1"></span>
																			<span class="path2"></span>
																			<span class="path3"></span>
																			<span class="path4"></span>
																		</i>
																	</a>
																	<!--begin::Menu-->
																	<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-250px py-4" data-kt-menu="true">
																		<!--begin::Menu item-->
																		<div class="menu-item px-3">
																			<a href="#" class="menu-link px-3">
																				<i class="ki-duotone ki-element-11 fs-3 me-3">
																					<span class="path1"></span>
																					<span class="path2"></span>
																					<span class="path3"></span>
																					<span class="path4"></span>
																				</i>New Group</a>
																		</div>
																		<!--end::Menu item-->
																		<!--begin::Menu item-->
																		<div class="menu-item px-3">
																			<a href="#" class="menu-link px-3">
																				<i class="ki-duotone ki-badge fs-3 me-3">
																					<span class="path1"></span>
																					<span class="path2"></span>
																					<span class="path3"></span>
																					<span class="path4"></span>
																					<span class="path5"></span>
																				</i>Contacts</a>
																		</div>
																		<!--end::Menu item-->
																		<!--begin::Menu item-->
																		<div class="menu-item px-3">
																			<a href="#" class="menu-link px-3">
																				<i class="ki-duotone ki-people fs-3 me-3">
																					<span class="path1"></span>
																					<span class="path2"></span>
																					<span class="path3"></span>
																					<span class="path4"></span>
																					<span class="path5"></span>
																				</i>Groups
																				<span class="badge badge-light-primary ms-auto">new</span></a>
																		</div>
																		<!--end::Menu item-->
																		<!--begin::Menu item-->
																		<div class="menu-item px-3">
																			<a href="#" class="menu-link px-3">
																				<i class="ki-duotone ki-element-2 fs-3 me-3">
																					<span class="path1"></span>
																					<span class="path2"></span>
																				</i>Calls</a>
																		</div>
																		<!--end::Menu item-->
																		<!--begin::Menu item-->
																		<div class="menu-item px-3">
																			<a href="#" class="menu-link px-3">
																				<i class="ki-duotone ki-setting-2 fs-3 me-3">
																					<span class="path1"></span>
																					<span class="path2"></span>
																				</i>Settings</a>
																		</div>
																		<!--end::Menu item-->
																		<div class="separator my-5"></div>
																		<!--begin::Menu item-->
																		<div class="menu-item px-3">
																			<a href="#" class="menu-link px-3">
																				<i class="ki-duotone ki-magnifier fs-3 me-3">
																					<span class="path1"></span>
																					<span class="path2"></span>
																				</i>Help</a>
																		</div>
																		<!--end::Menu item-->
																		<!--begin::Menu item-->
																		<div class="menu-item px-3">
																			<a href="#" class="menu-link px-3">
																				<i class="ki-duotone ki-shield-tick fs-3 me-3">
																					<span class="path1"></span>
																					<span class="path2"></span>
																				</i>Privacy
																				<span class="badge badge-light-danger ms-auto">5</span></a>
																		</div>
																		<!--end::Menu item-->
																	</div>
																	<!--end::Menu-->
																</div>
																<!--begin::Settings menu-->
																<!--begin::Toggle-->
																<a href="#" class="btn btn-sm btn-icon btn-color-primary btn-light btn-active-light-primary d-lg-none" data-bs-toggle="tooltip" data-bs-dismiss="click" data-bs-placement="top" title="Toggle inbox menu" id="kt_inbox_aside_toggle">
																	<i class="ki-duotone ki-burger-menu-2 fs-3 m-0">
																		<span class="path1"></span>
																		<span class="path2"></span>
																		<span class="path3"></span>
																		<span class="path4"></span>
																		<span class="path5"></span>
																		<span class="path6"></span>
																		<span class="path7"></span>
																		<span class="path8"></span>
																		<span class="path9"></span>
																		<span class="path10"></span>
																	</i>
																</a>
																<!--end::Toggle-->
															</div>
															<!--end::Pagination-->
														</div>
														<div class="card-body">
															<!--begin::Form-->
															<form id="kt_inbox_reply_form" class="rounded border mb-10">
																<!--begin::Body-->
																<div class="d-block">
																	<!--begin::To-->
																	<div class="d-flex align-items-center border-bottom px-8 min-h-50px py-5 justify-content-between">
																		<!--begin::Actions-->
																		<div class="border d-flex p-3 align-items-center rounded me-3">
																			<!--begin::Send-->
																			<div class="btn-group me-4">
																				<!--begin::Submit-->
																				<span class="btn btn-primary fs-bold px-6" data-kt-inbox-form="send">
																					<span class="indicator-label">Send</span>
																					<span class="indicator-progress">Please wait...
																						<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
																				</span>
																				<!--end::Submit-->
																				<!--begin::Send options-->
																				<span class="btn btn-primary btn-icon fs-bold" role="button">
																					<span class="btn btn-icon" data-kt-menu-trigger="click" data-kt-menu-placement="top-start">
																						<i class="ki-duotone ki-down fs-2 m-0"></i>
																					</span>
																					<!--begin::Menu-->
																					<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true">
																						<!--begin::Menu item-->
																						<div class="menu-item px-3">
																							<a href="#" class="menu-link px-3">Schedule send</a>
																						</div>
																						<!--end::Menu item-->
																						<!--begin::Menu item-->
																						<div class="menu-item px-3">
																							<a href="#" class="menu-link px-3">Save & archive</a>
																						</div>
																						<!--end::Menu item-->
																						<!--begin::Menu item-->
																						<div class="menu-item px-3">
																							<a href="#" class="menu-link px-3">Cancel</a>
																						</div>
																						<!--end::Menu item-->
																					</div>
																					<!--end::Menu-->
																				</span>
																				<!--end::Send options-->
																			</div>
																			<!--end::Send-->
																			<!--begin::Upload attachement-->
																			<span class="btn btn-icon btn-sm btn-clean btn-active-light-primary me-2" id="kt_inbox_reply_attachments_select" data-kt-inbox-form="dropzone_upload">
																				<i class="ki-duotone ki-paper-clip fs-2 m-0"></i>
																			</span>
																			<!--end::Upload attachement-->
																		</div>
																		<div class="me-3 text-center">
																			order id<span class="badge badge-primary text-dark ms-3">0489273</span>
																		</div>
																		<!--end::Actions-->
																		<div class="border d-flex p-3 align-items-center rounded me-3">
																			<!--begin::Label-->
																			<div class="text-gray-900 fw-bold w-75px">To:</div>
																			<!--end::Label-->
																			<!--begin::Input-->
																			<input type="text" class="form-control form-control-transparent border-0" name="compose_to" value="" data-kt-inbox-form="tagify" />
																			<!--begin::CC & BCC buttons-->
																			<div class="ms-auto w-75px text-end">
																				<span class="text-muted fs-bold cursor-pointer text-hover-primary me-2" data-kt-inbox-form="cc_button"></span>
																				<span class="text-muted fs-bold cursor-pointer text-hover-primary" data-kt-inbox-form="bcc_button"></span>
																			</div>
																			<!--end::CC & BCC buttons-->
																		</div>
																		<!--begin::Toolbar-->
																		<div class="d-flex align-items-center">
																			<!--begin::Dismiss reply-->
																			<span class="btn btn-icon btn-sm btn-clean btn-active-light-primary" data-inbox="dismiss" data-toggle="tooltip" title="Discard reply">
																				<i class="ki-duotone ki-trash fs-2">
																					<span class="path1"></span>
																					<span class="path2"></span>
																					<span class="path3"></span>
																					<span class="path4"></span>
																					<span class="path5"></span>
																				</i>
																			</span>
																			<!--end::Dismiss reply-->
																		</div>
																		<!--end::Toolbar-->
																	</div>
																	<!--end::To-->
																	<!--begin::CC-->
																	<div class="d-none align-items-center border-bottom ps-8 pe-5 min-h-50px" data-kt-inbox-form="cc">
																		<!--begin::Label-->
																		<div class="text-gray-900 fw-bold w-75px">Cc:</div>
																		<!--end::Label-->
																		<!--begin::Input-->
																		<input type="text" class="form-control border-0" name="compose_cc" value="" data-kt-inbox-form="tagify" />
																		<!--end::Input-->
																		<!--begin::Close-->
																		<span class="btn btn-clean btn-xs btn-icon" data-kt-inbox-form="cc_close">
																			<i class="ki-duotone ki-cross fs-5">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>
																		</span>
																		<!--end::Close-->
																	</div>
																	<!--end::CC-->
																	<!--begin::BCC-->
																	<div class="d-none align-items-center border-bottom inbox-to-bcc ps-8 pe-5 min-h-50px" data-kt-inbox-form="bcc">
																		<!--begin::Label-->
																		<div class="text-gray-900 fw-bold w-75px">Bcc:</div>
																		<!--end::Label-->
																		<!--begin::Input-->
																		<input type="text" class="form-control border-0" name="compose_bcc" value="" data-kt-inbox-form="tagify" />
																		<!--end::Input-->
																		<!--begin::Close-->
																		<span class="btn btn-clean btn-xs btn-icon" data-kt-inbox-form="bcc_close">
																			<i class="ki-duotone ki-cross fs-5">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>
																		</span>
																		<!--end::Close-->
																	</div>
																	<!--end::BCC-->
																	<!--begin::Message-->
																	<div id="kt_inbox_form_editor" class="border-0 h-250px px-3"></div>
																	<!--end::Message-->
																	<!--begin::Attachments-->
																	<div class="dropzone dropzone-queue px-8 py-4" id="kt_inbox_reply_attachments" data-kt-inbox-form="dropzone">
																		<div class="dropzone-items">
																			<div class="dropzone-item" style="display:none">
																				<!--begin::Dropzone filename-->
																				<div class="dropzone-file">
																					<div class="dropzone-filename" title="some_image_file_name.jpg">
																						<span data-dz-name="">some_image_file_name.jpg</span>
																						<strong>(
																							<span data-dz-size="">340kb</span>)</strong>
																					</div>
																					<div class="dropzone-error" data-dz-errormessage=""></div>
																				</div>
																				<!--end::Dropzone filename-->
																				<!--begin::Dropzone progress-->
																				<div class="dropzone-progress">
																					<div class="progress">
																						<div class="progress-bar bg-primary" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" data-dz-uploadprogress=""></div>
																					</div>
																				</div>
																				<!--end::Dropzone progress-->
																				<!--begin::Dropzone toolbar-->
																				<div class="dropzone-toolbar">
																					<span class="dropzone-delete" data-dz-remove="">
																						<i class="ki-duotone ki-cross fs-6">
																							<span class="path1"></span>
																							<span class="path2"></span>
																						</i>
																					</span>
																				</div>
																				<!--end::Dropzone toolbar-->
																			</div>
																		</div>
																	</div>
																	<!--end::Attachments-->
																</div>
																<!--end::Body-->

															</form>
															<!--end::Form-->
															<!--begin::Title-->
															<div class="d-flex flex-wrap gap-2 justify-content-end mb-8">

																<div class="d-flex">
																	<!--begin::Sort-->
																	<a href="#" class="btn btn-sm btn-icon btn-light btn-active-light-primary me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Sort">
																		<i class="ki-duotone ki-arrow-up-down fs-2 m-0">
																			<span class="path1"></span>
																			<span class="path2"></span>
																		</i>
																	</a>
																	<!--end::Sort-->
																	<!--begin::Print-->
																	<a href="#" class="btn btn-sm btn-icon btn-light btn-active-light-primary me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Print">
																		<i class="ki-duotone ki-printer fs-2">
																			<span class="path1"></span>
																			<span class="path2"></span>
																			<span class="path3"></span>
																			<span class="path4"></span>
																			<span class="path5"></span>
																		</i>
																	</a>
																	<!--end::Print-->
																</div>
															</div>
															<!--end::Title-->
															<!--begin::Message accordion-->
															<div data-kt-inbox-message="message_wrapper">
																<!--begin::Message header-->
																<div class="d-flex flex-wrap gap-2 flex-stack cursor-pointer" data-kt-inbox-message="header">
																	<!--begin::Author-->
																	<div class="d-flex align-items-center">
																		<!--begin::Avatar-->
																		<div class="symbol symbol-50 me-4">
																			<span class="symbol-label" style="background-image:url(assets/media/avatars/300-6.jpg);"></span>
																		</div>
																		<!--end::Avatar-->
																		<div class="pe-5">
																			<!--begin::Author details-->
																			<div class="d-flex align-items-center flex-wrap gap-1">
																				<a href="#" class="fw-bold text-gray-900 text-hover-primary">Emma Smith</a>
																				<i class="ki-duotone ki-abstract-8 fs-7 text-success mx-3">
																					<span class="path1"></span>
																					<span class="path2"></span>
																				</i>
																				<span class="text-muted fw-bold">1 day ago</span>
																			</div>
																			<!--end::Author details-->
																			<!--begin::Message details-->
																			<div data-kt-inbox-message="details">
																				<span class="text-muted fw-semibold">to me</span>
																				<!--begin::Menu toggle-->
																				<a href="#" class="me-1" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start">
																					<i class="ki-duotone ki-down fs-5 m-0"></i>
																				</a>
																				<!--end::Menu toggle-->
																				<!--begin::Menu-->
																				<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px p-4" data-kt-menu="true">
																					<!--begin::Table-->
																					<table class="table mb-0">
																						<tbody>
																							<tr>
																								<td class="w-75px text-muted">From</td>
																								<td>Emma Bold</td>
																							</tr>
																							<tr>
																								<td class="text-muted">Date</td>
																								<td>20 Dec 2023, 2:40 pm</td>
																							</tr>
																							<tr>
																								<td class="text-muted">Reply-to</td>
																								<td>Writer, Admin</td>
																							</tr>
																						</tbody>
																					</table>
																				</div>
																				<!--end::Menu-->
																			</div>
																			<!--end::Message details-->
																			<!--begin::Preview message-->
																			<div class="text-muted fw-semibold mw-450px d-none" data-kt-inbox-message="preview">With resrpect, i must disagree with Mr.Zinsser. We all know the most part of important part....</div>
																			<!--end::Preview message-->
																		</div>
																	</div>
																	<!--end::Author-->
																	<!--begin::Actions-->
																	<div class="d-flex align-items-center flex-wrap gap-2">
																		<!--begin::Date-->
																		<span class="fw-semibold text-muted text-end me-3">25 Oct 2023, 11:05 am</span>
																		<!--end::Date-->
																		<div class="d-flex">
																			<!--begin::Reply-->
																			<a href="#" class="btn btn-sm btn-icon btn-clear btn-active-light-primary me-3" data-bs-toggle="tooltip" data-bs-placement="top" title="Reply">
																				<i class="ki-duotone ki-message-edit fs-2 m-0">
																					<span class="path1"></span>
																					<span class="path2"></span>
																				</i>
																			</a>
																			<!--end::Reply-->
																			<!--begin::Settings-->
																			<a href="#" class="btn btn-sm btn-icon btn-clear btn-active-light-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Settings">
																				<i class="ki-duotone ki-dots-square-vertical fs-2 m-0">
																					<span class="path1"></span>
																					<span class="path2"></span>
																					<span class="path3"></span>
																					<span class="path4"></span>
																				</i>
																			</a>
																			<!--end::Settings-->
																		</div>
																	</div>
																	<!--end::Actions-->
																</div>
																<!--end::Message header-->
																<!--begin::Message content-->
																<div class="collapse fade show" data-kt-inbox-message="message">
																	<div class="py-5">
																		<p>Hi Bob,</p>
																		<p>With resrpect, i must disagree with Mr.Zinsser. We all know the most part of important part of any article is the title.Without a compelleing title, your reader won't even get to the first sentence.After the title, however, the first few sentences of your article are certainly the most important part.</p>
																		<p>Jornalists call this critical, introductory section the "Lede," and when bridge properly executed, it's the that carries your reader from an headine try at attention-grabbing to the body of your blog post, if you want to get it right on of these 10 clever ways to omen your next blog posr with a bang</p>
																		<p>Best regards,</p>
																		<p class="mb-0">Jason Muller</p>
																	</div>
																</div>
																<!--end::Message content-->
															</div>
															<!--end::Message accordion-->
															<div class="separator my-6"></div>
															<!--begin::Message accordion-->
															<div data-kt-inbox-message="message_wrapper">
																<!--begin::Message header-->
																<div class="d-flex flex-wrap gap-2 flex-stack cursor-pointer" data-kt-inbox-message="header">
																	<!--begin::Author-->
																	<div class="d-flex align-items-center">
																		<!--begin::Avatar-->
																		<div class="symbol symbol-50 me-4">
																			<span class="symbol-label" style="background-image:url(assets/media/avatars/300-1.jpg);"></span>
																		</div>
																		<!--end::Avatar-->
																		<div class="pe-5">
																			<!--begin::Author details-->
																			<div class="d-flex align-items-center flex-wrap gap-1">
																				<a href="#" class="fw-bold text-gray-900 text-hover-primary">Max Smith</a>
																				<i class="ki-duotone ki-abstract-8 fs-7 text-success mx-3">
																					<span class="path1"></span>
																					<span class="path2"></span>
																				</i>
																				<span class="text-muted fw-bold">2 days ago</span>
																			</div>
																			<!--end::Author details-->
																			<!--begin::Message details-->
																			<div class="d-none" data-kt-inbox-message="details">
																				<span class="text-muted fw-semibold">to me</span>
																				<!--begin::Menu toggle-->
																				<a href="#" class="me-1" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start">
																					<i class="ki-duotone ki-down fs-5 m-0"></i>
																				</a>
																				<!--end::Menu toggle-->
																				<!--begin::Menu-->
																				<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px p-4" data-kt-menu="true">
																					<!--begin::Table-->
																					<table class="table mb-0">
																						<tbody>
																							<tr>
																								<td class="w-75px text-muted">From</td>
																								<td>Emma Bold</td>
																							</tr>
																							<tr>
																								<td class="text-muted">Date</td>
																								<td>24 Jun 2023, 10:30 am</td>
																							</tr>
																							<tr>
																								<td class="text-muted">Reply-to</td>
																								<td>Writer, Admin</td>
																							</tr>
																						</tbody>
																					</table>
																				</div>
																				<!--end::Menu-->
																			</div>
																			<!--end::Message details-->
																			<!--begin::Preview message-->
																			<div class="text-muted fw-semibold mw-450px" data-kt-inbox-message="preview">Jornalists call this critical, introductory section the "Lede," and when bridge properly executed....</div>
																			<!--end::Preview message-->
																		</div>
																	</div>
																	<!--end::Author-->
																	<!--begin::Actions-->
																	<div class="d-flex align-items-center flex-wrap gap-2">
																		<!--begin::Date-->
																		<span class="fw-semibold text-muted text-end me-3">24 Jun 2023, 10:30 am</span>
																		<!--end::Date-->
																		<div class="d-flex">
																			<!--begin::Reply-->
																			<a href="#" class="btn btn-sm btn-icon btn-clear btn-active-light-primary me-3" data-bs-toggle="tooltip" data-bs-placement="top" title="Reply">
																				<i class="ki-duotone ki-message-edit fs-2 m-0">
																					<span class="path1"></span>
																					<span class="path2"></span>
																				</i>
																			</a>
																			<!--end::Reply-->
																			<!--begin::Settings-->
																			<a href="#" class="btn btn-sm btn-icon btn-clear btn-active-light-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Settings">
																				<i class="ki-duotone ki-dots-square-vertical fs-2 m-0">
																					<span class="path1"></span>
																					<span class="path2"></span>
																					<span class="path3"></span>
																					<span class="path4"></span>
																				</i>
																			</a>
																			<!--end::Settings-->
																		</div>
																	</div>
																	<!--end::Actions-->
																</div>
																<!--end::Message header-->
																<!--begin::Message content-->
																<div class="collapse fade" data-kt-inbox-message="message">
																	<div class="py-5">
																		<p>Hi Bob,</p>
																		<p>With resrpect, i must disagree with Mr.Zinsser. We all know the most part of important part of any article is the title.Without a compelleing title, your reader won't even get to the first sentence.After the title, however, the first few sentences of your article are certainly the most important part.</p>
																		<p>Jornalists call this critical, introductory section the "Lede," and when bridge properly executed, it's the that carries your reader from an headine try at attention-grabbing to the body of your blog post, if you want to get it right on of these 10 clever ways to omen your next blog posr with a bang</p>
																		<p>Best regards,</p>
																		<p class="mb-0">Jason Muller</p>
																	</div>
																</div>
																<!--end::Message content-->
															</div>
															<!--end::Message accordion-->
															<div class="separator my-6"></div>
															<!--begin::Message accordion-->
															<div data-kt-inbox-message="message_wrapper">
																<!--begin::Message header-->
																<div class="d-flex flex-wrap gap-2 flex-stack cursor-pointer" data-kt-inbox-message="header">
																	<!--begin::Author-->
																	<div class="d-flex align-items-center">
																		<!--begin::Avatar-->
																		<div class="symbol symbol-50 me-4">
																			<span class="symbol-label" style="background-image:url(assets/media/avatars/300-5.jpg);"></span>
																		</div>
																		<!--end::Avatar-->
																		<div class="pe-5">
																			<!--begin::Author details-->
																			<div class="d-flex align-items-center flex-wrap gap-1">
																				<a href="#" class="fw-bold text-gray-900 text-hover-primary">Sean Bean</a>
																				<i class="ki-duotone ki-abstract-8 fs-7 text-success mx-3">
																					<span class="path1"></span>
																					<span class="path2"></span>
																				</i>
																				<span class="text-muted fw-bold">3 days ago</span>
																			</div>
																			<!--end::Author details-->
																			<!--begin::Message details-->
																			<div class="d-none" data-kt-inbox-message="details">
																				<span class="text-muted fw-semibold">to me</span>
																				<!--begin::Menu toggle-->
																				<a href="#" class="me-1" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start">
																					<i class="ki-duotone ki-down fs-5 m-0"></i>
																				</a>
																				<!--end::Menu toggle-->
																				<!--begin::Menu-->
																				<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px p-4" data-kt-menu="true">
																					<!--begin::Table-->
																					<table class="table mb-0">
																						<tbody>
																							<tr>
																								<td class="w-75px text-muted">From</td>
																								<td>Emma Bold</td>
																							</tr>
																							<tr>
																								<td class="text-muted">Date</td>
																								<td>19 Aug 2023, 11:30 am</td>
																							</tr>
																							<tr>
																								<td class="text-muted">Reply-to</td>
																								<td>Writer, Admin</td>
																							</tr>
																						</tbody>
																					</table>
																				</div>
																				<!--end::Menu-->
																			</div>
																			<!--end::Message details-->
																			<!--begin::Preview message-->
																			<div class="text-muted fw-semibold mw-450px" data-kt-inbox-message="preview">Jornalists call this critical, introductory section the "Lede," and when bridge properly executed....</div>
																			<!--end::Preview message-->
																		</div>
																	</div>
																	<!--end::Author-->
																	<!--begin::Actions-->
																	<div class="d-flex align-items-center flex-wrap gap-2">
																		<!--begin::Date-->
																		<span class="fw-semibold text-muted text-end me-3">21 Feb 2023, 11:05 am</span>
																		<!--end::Date-->
																		<div class="d-flex">
																			<!--begin::Reply-->
																			<a href="#" class="btn btn-sm btn-icon btn-clear btn-active-light-primary me-3" data-bs-toggle="tooltip" data-bs-placement="top" title="Reply">
																				<i class="ki-duotone ki-message-edit fs-2 m-0">
																					<span class="path1"></span>
																					<span class="path2"></span>
																				</i>
																			</a>
																			<!--end::Reply-->
																			<!--begin::Settings-->
																			<a href="#" class="btn btn-sm btn-icon btn-clear btn-active-light-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Settings">
																				<i class="ki-duotone ki-dots-square-vertical fs-2 m-0">
																					<span class="path1"></span>
																					<span class="path2"></span>
																					<span class="path3"></span>
																					<span class="path4"></span>
																				</i>
																			</a>
																			<!--end::Settings-->
																		</div>
																	</div>
																	<!--end::Actions-->
																</div>
																<!--end::Message header-->
																<!--begin::Message content-->
																<div class="collapse fade" data-kt-inbox-message="message">
																	<div class="py-5">
																		<p>Hi Bob,</p>
																		<p>With resrpect, i must disagree with Mr.Zinsser. We all know the most part of important part of any article is the title.Without a compelleing title, your reader won't even get to the first sentence.After the title, however, the first few sentences of your article are certainly the most important part.</p>
																		<p>Jornalists call this critical, introductory section the "Lede," and when bridge properly executed, it's the that carries your reader from an headine try at attention-grabbing to the body of your blog post, if you want to get it right on of these 10 clever ways to omen your next blog posr with a bang</p>
																		<p>Best regards,</p>
																		<p class="mb-0">Jason Muller</p>
																	</div>
																</div>
																<!--end::Message content-->
															</div>
															<!--end::Message accordion-->

														</div>
													</div>
													<!--end::Card-->
												</div>
											</div>
										</div>
										<!--end:::Tab pane-->
										<!--begin:::Tab pane-->
										<div class="tab-pane fade" id="kt_ecommerce_customer_orderFiles" role="tabpanel">
											<div class="card card-flush">
												<!--begin::Card header-->
												<div class="card-title pt-8 ps-8">
													<!--begin::Search-->
													<div class="d-flex align-items-center position-relative my-1">
														<i class="ki-duotone ki-magnifier fs-1 position-absolute ms-6">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
														<input type="text" data-kt-filemanager-table-filter="search" class="form-control form-control-solid w-250px ps-15" placeholder="Search Files &amp; Folders">
													</div>
													<!--end::Search-->
												</div>
												<!--begin::Card toolbar-->
												<div class="card-header pt-8 justify-content-end">

													<div class="card-toolbar">
														<!--begin::Toolbar-->
														<div class="d-flex justify-content-end" data-kt-filemanager-table-toolbar="base">
															<!--begin::Back to folders-->
															<a href="apps/file-manager/folders.html" class="btn btn-icon btn-light-primary me-3">
																<i class="ki-duotone ki-exit-up fs-2">
																	<span class="path1"></span>
																	<span class="path2"></span>
																</i>
															</a>
															<!--end::Back to folders-->
															<!--begin::Add customer-->
															<button type="button" class="btn btn-flex btn-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_upload">
																<i class="ki-duotone ki-folder-up fs-2">
																	<span class="path1"></span>
																	<span class="path2"></span>
																</i>Upload Main Files for Customer</button>
															<!--end::Add customer-->
															<!--begin::Add customer-->
															<button type="button" class="btn btn-flex btn-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_upload">
																<i class="ki-duotone ki-folder-up fs-2">
																	<span class="path1"></span>
																	<span class="path2"></span>
																</i>Upload Files for Writer</button>
															<!--end::Add customer-->
															<!--begin::Add customer-->
															<button type="button" class="btn btn-flex btn-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_upload">
																<i class="ki-duotone ki-folder-up fs-2">
																	<span class="path1"></span>
																	<span class="path2"></span>
																</i>Upload Files for Customer</button>
															<!--end::Add customer-->
														</div>
														<!--end::Toolbar-->
														<!--begin::Group actions-->
														<div class="d-flex justify-content-end align-items-center d-none" data-kt-filemanager-table-toolbar="selected">
															<div class="fw-bold me-5">
																<span class="me-2" data-kt-filemanager-table-select="selected_count"></span>Selected
															</div>
															<button type="button" class="btn btn-danger" data-kt-filemanager-table-select="delete_selected">Delete Selected</button>
														</div>
														<!--end::Group actions-->
													</div>
													<!--end::Card toolbar-->
												</div>
												<!--end::Card header-->
												<!--begin::Card body-->
												<div class="card-body">
													<!--begin::Table header-->
													<div class="d-flex flex-stack">
														<!--begin::Folder path-->
														<div class="badge badge-lg badge-light-primary">
															<div class="d-flex align-items-center flex-wrap">
																<i class="ki-duotone ki-abstract-32 fs-2x text-primary me-3">
																	<span class="path1"></span>
																	<span class="path2"></span>
																</i>
																<a href="apps/file-manager/folders.html">Writing Space</a>
																<i class="ki-duotone ki-right fs-2x text-primary mx-1"></i>
																<a href="apps/file-manager/folders.html">Admin</a>
																<i class="ki-duotone ki-right fs-2x text-primary mx-1"></i>
																<a href="apps/file-manager/folders.html">Layout</a>
																<i class="ki-duotone ki-right fs-2x text-primary mx-1"></i>
																<a href="order-id.php">Order Id's</a>
																<i class="ki-duotone ki-right fs-2x text-primary mx-1"></i>
																2190302
															</div>
														</div>
														<!--end::Folder path-->
														<!--begin::Folder Stats-->
														<div class="badge badge-lg badge-primary">
															<span id="kt_file_manager_items_counter">5 items</span>
														</div>
														<!--end::Folder Stats-->
													</div>
													<!--end::Table header-->
													<!--begin::Table-->
													<div id="kt_file_manager_list_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
														<div class="table-responsive">
															<table id="kt_file_manager_list" data-kt-filemanager-table="files" class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer">
																<thead>
																	<tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
																		<th class="w-10px pe-2 sorting_disabled" rowspan="1" colspan="1" style="width: 29.8906px;">
																			<div class="form-check form-check-sm form-check-custom form-check-solid me-3">
																				<input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_file_manager_list .form-check-input" value="1">
																			</div>
																		</th>
																		<th class="min-w-250px sorting_disabled" rowspan="1" colspan="1" style="width: 416.797px;">File Title</th>
																		<th class="min-w-150px">
																			Uploaded For
																		</th>
																		<th class="min-w-150px">
																			File Type
																		</th>
																		<th class="min-w-10px sorting_disabled" rowspan="1" colspan="1" style="width: 66.4062px;">Size</th>
																		<th class="min-w-125px sorting_disabled" rowspan="1" colspan="1" style="width: 250.656px;">Last Modified</th>
																		<th class="w-125px sorting_disabled" rowspan="1" colspan="1" style="width: 125px;"></th>
																	</tr>
																</thead>
																<tbody class="fw-semibold text-gray-600">





																	<tr class="odd">
																		<td>
																			<div class="form-check form-check-sm form-check-custom form-check-solid">
																				<input class="form-check-input" type="checkbox" value="1">
																			</div>
																		</td>
																		<td>
																			<div class="d-flex align-items-center">
																				<span class="icon-wrapper"><i class="ki-duotone ki-file fs-2x text-primary me-4"><span class="path1"></span><span class="path2"></span></i></span>
																				<a href="/metronic8/demo1/../demo1/apps/file-manager/files/.html" class="text-gray-800 text-hover-primary">billing.txt</a>
																			</div>
																		</td>
																		<td>Writer</td>
																		<td>Pdf</td>
																		<td>2 Mb</td>
																		<td data-order="2023-08-19T14:40:00+05:00">19 Aug 2023, 2:40 pm</td>
																		<td class="text-end" data-kt-filemanager-table="action_dropdown">
																			<div class="d-flex justify-content-end">
																				<!--begin::Share link-->
																				<div class="ms-2" data-kt-filemanger-table="copy_link">
																					<button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
																						<i class="ki-duotone ki-fasten fs-5 m-0">
																							<span class="path1"></span>
																							<span class="path2"></span>
																						</i>
																					</button>
																					<!--begin::Menu-->
																					<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px" data-kt-menu="true">
																						<!--begin::Card-->
																						<div class="card card-flush">
																							<div class="card-body p-5">
																								<!--begin::Loader-->
																								<div class="d-flex" data-kt-filemanger-table="copy_link_generator">
																									<!--begin::Spinner-->
																									<div class="me-5" data-kt-indicator="on">
																										<span class="indicator-progress">
																											<span class="spinner-border spinner-border-sm align-middle ms-2"></span>
																										</span>
																									</div>
																									<!--end::Spinner-->
																									<!--begin::Label-->
																									<div class="fs-6 text-gray-900">Generating Share Link...</div>
																									<!--end::Label-->
																								</div>
																								<!--end::Loader-->
																								<!--begin::Link-->
																								<div class="d-flex flex-column text-start d-none" data-kt-filemanger-table="copy_link_result">
																									<div class="d-flex mb-3">
																										<i class="ki-duotone ki-check fs-2 text-success me-3"></i>
																										<div class="fs-6 text-gray-900">Share Link Generated</div>
																									</div>
																									<input type="text" class="form-control form-control-sm" value="https://path/to/file/or/folder/">
																									<div class="text-muted fw-normal mt-2 fs-8 px-3">Read only.
																										<a href="apps/file-manager/settings/.html" class="ms-2">Change permissions</a>
																									</div>
																								</div>
																								<!--end::Link-->
																							</div>
																						</div>
																						<!--end::Card-->
																					</div>
																					<!--end::Menu-->
																				</div>
																				<!--end::Share link-->
																				<!--begin::More-->
																				<div class="ms-2">
																					<button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
																						<i class="ki-duotone ki-dots-square fs-5 m-0">
																							<span class="path1"></span>
																							<span class="path2"></span>
																							<span class="path3"></span>
																							<span class="path4"></span>
																						</i>
																					</button>
																					<!--begin::Menu-->
																					<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true">
																						<!--begin::Menu item-->
																						<div class="menu-item px-3">
																							<a href="#" class="menu-link px-3">Download File</a>
																						</div>
																						<!--end::Menu item-->
																						<!--begin::Menu item-->
																						<div class="menu-item px-3">
																							<a href="#" class="menu-link px-3" data-kt-filemanager-table="rename">Rename</a>
																						</div>
																						<!--end::Menu item-->
																						<!--begin::Menu item-->
																						<div class="menu-item px-3">
																							<a href="#" class="menu-link px-3" data-kt-filemanager-table-filter="move_row" data-bs-toggle="modal" data-bs-target="#kt_modal_move_to_folder">Move to folder</a>
																						</div>
																						<!--end::Menu item-->
																						<!--begin::Menu item-->
																						<div class="menu-item px-3">
																							<a href="#" class="menu-link text-danger px-3" data-kt-filemanager-table-filter="delete_row">Delete</a>
																						</div>
																						<!--end::Menu item-->
																					</div>
																					<!--end::Menu-->
																				</div>
																				<!--end::More-->
																			</div>
																		</td>
																	</tr>
																	<tr class="even">
																		<td>
																			<div class="form-check form-check-sm form-check-custom form-check-solid">
																				<input class="form-check-input" type="checkbox" value="1">
																			</div>
																		</td>
																		<td>
																			<div class="d-flex align-items-center">
																				<span class="icon-wrapper"><i class="ki-duotone ki-file fs-2x text-primary me-4"><span class="path1"></span><span class="path2"></span></i></span>
																				<a href="/metronic8/demo1/../demo1/apps/file-manager/files/.html" class="text-gray-800 text-hover-primary">account.docs</a>
																			</div>
																		</td>
																		<td>Writer</td>
																		<td>Pdf</td>
																		<td>2 Mb</td>
																		<td data-order="2023-08-19T14:40:00+05:00">19 Aug 2023, 2:40 pm</td>
																		<td class="text-end" data-kt-filemanager-table="action_dropdown">
																			<div class="d-flex justify-content-end">
																				<!--begin::Share link-->
																				<div class="ms-2" data-kt-filemanger-table="copy_link">
																					<button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
																						<i class="ki-duotone ki-fasten fs-5 m-0">
																							<span class="path1"></span>
																							<span class="path2"></span>
																						</i>
																					</button>
																					<!--begin::Menu-->
																					<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px" data-kt-menu="true">
																						<!--begin::Card-->
																						<div class="card card-flush">
																							<div class="card-body p-5">
																								<!--begin::Loader-->
																								<div class="d-flex" data-kt-filemanger-table="copy_link_generator">
																									<!--begin::Spinner-->
																									<div class="me-5" data-kt-indicator="on">
																										<span class="indicator-progress">
																											<span class="spinner-border spinner-border-sm align-middle ms-2"></span>
																										</span>
																									</div>
																									<!--end::Spinner-->
																									<!--begin::Label-->
																									<div class="fs-6 text-gray-900">Generating Share Link...</div>
																									<!--end::Label-->
																								</div>
																								<!--end::Loader-->
																								<!--begin::Link-->
																								<div class="d-flex flex-column text-start d-none" data-kt-filemanger-table="copy_link_result">
																									<div class="d-flex mb-3">
																										<i class="ki-duotone ki-check fs-2 text-success me-3"></i>
																										<div class="fs-6 text-gray-900">Share Link Generated</div>
																									</div>
																									<input type="text" class="form-control form-control-sm" value="https://path/to/file/or/folder/">
																									<div class="text-muted fw-normal mt-2 fs-8 px-3">Read only.
																										<a href="apps/file-manager/settings/.html" class="ms-2">Change permissions</a>
																									</div>
																								</div>
																								<!--end::Link-->
																							</div>
																						</div>
																						<!--end::Card-->
																					</div>
																					<!--end::Menu-->
																				</div>
																				<!--end::Share link-->
																				<!--begin::More-->
																				<div class="ms-2">
																					<button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
																						<i class="ki-duotone ki-dots-square fs-5 m-0">
																							<span class="path1"></span>
																							<span class="path2"></span>
																							<span class="path3"></span>
																							<span class="path4"></span>
																						</i>
																					</button>
																					<!--begin::Menu-->
																					<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true">
																						<!--begin::Menu item-->
																						<div class="menu-item px-3">
																							<a href="#" class="menu-link px-3">Download File</a>
																						</div>
																						<!--end::Menu item-->
																						<!--begin::Menu item-->
																						<div class="menu-item px-3">
																							<a href="#" class="menu-link px-3" data-kt-filemanager-table="rename">Rename</a>
																						</div>
																						<!--end::Menu item-->
																						<!--begin::Menu item-->
																						<div class="menu-item px-3">
																							<a href="#" class="menu-link px-3" data-kt-filemanager-table-filter="move_row" data-bs-toggle="modal" data-bs-target="#kt_modal_move_to_folder">Move to folder</a>
																						</div>
																						<!--end::Menu item-->
																						<!--begin::Menu item-->
																						<div class="menu-item px-3">
																							<a href="#" class="menu-link text-danger px-3" data-kt-filemanager-table-filter="delete_row">Delete</a>
																						</div>
																						<!--end::Menu item-->
																					</div>
																					<!--end::Menu-->
																				</div>
																				<!--end::More-->
																			</div>
																		</td>
																	</tr>
																	<tr class="odd">
																		<td>
																			<div class="form-check form-check-sm form-check-custom form-check-solid">
																				<input class="form-check-input" type="checkbox" value="1">
																			</div>
																		</td>
																		<td>
																			<div class="d-flex align-items-center">
																				<span class="icon-wrapper"><i class="ki-duotone ki-file fs-2x text-primary me-4"><span class="path1"></span><span class="path2"></span></i></span>
																				<a href="/metronic8/demo1/../demo1/apps/file-manager/files/.html" class="text-gray-800 text-hover-primary">profile.pdf</a>
																			</div>
																		</td>
																		<td>Writer</td>
																		<td>Pdf</td>
																		<td>2 Mb</td>
																		<td data-order="2023-08-19T14:40:00+05:00">19 Aug 2023, 2:40 pm</td>
																		<td class="text-end" data-kt-filemanager-table="action_dropdown">
																			<div class="d-flex justify-content-end">
																				<!--begin::Share link-->
																				<div class="ms-2" data-kt-filemanger-table="copy_link">
																					<button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
																						<i class="ki-duotone ki-fasten fs-5 m-0">
																							<span class="path1"></span>
																							<span class="path2"></span>
																						</i>
																					</button>
																					<!--begin::Menu-->
																					<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px" data-kt-menu="true">
																						<!--begin::Card-->
																						<div class="card card-flush">
																							<div class="card-body p-5">
																								<!--begin::Loader-->
																								<div class="d-flex" data-kt-filemanger-table="copy_link_generator">
																									<!--begin::Spinner-->
																									<div class="me-5" data-kt-indicator="on">
																										<span class="indicator-progress">
																											<span class="spinner-border spinner-border-sm align-middle ms-2"></span>
																										</span>
																									</div>
																									<!--end::Spinner-->
																									<!--begin::Label-->
																									<div class="fs-6 text-gray-900">Generating Share Link...</div>
																									<!--end::Label-->
																								</div>
																								<!--end::Loader-->
																								<!--begin::Link-->
																								<div class="d-flex flex-column text-start d-none" data-kt-filemanger-table="copy_link_result">
																									<div class="d-flex mb-3">
																										<i class="ki-duotone ki-check fs-2 text-success me-3"></i>
																										<div class="fs-6 text-gray-900">Share Link Generated</div>
																									</div>
																									<input type="text" class="form-control form-control-sm" value="https://path/to/file/or/folder/">
																									<div class="text-muted fw-normal mt-2 fs-8 px-3">Read only.
																										<a href="apps/file-manager/settings/.html" class="ms-2">Change permissions</a>
																									</div>
																								</div>
																								<!--end::Link-->
																							</div>
																						</div>
																						<!--end::Card-->
																					</div>
																					<!--end::Menu-->
																				</div>
																				<!--end::Share link-->
																				<!--begin::More-->
																				<div class="ms-2">
																					<button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
																						<i class="ki-duotone ki-dots-square fs-5 m-0">
																							<span class="path1"></span>
																							<span class="path2"></span>
																							<span class="path3"></span>
																							<span class="path4"></span>
																						</i>
																					</button>
																					<!--begin::Menu-->
																					<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true">
																						<!--begin::Menu item-->
																						<div class="menu-item px-3">
																							<a href="#" class="menu-link px-3">Download File</a>
																						</div>
																						<!--end::Menu item-->
																						<!--begin::Menu item-->
																						<div class="menu-item px-3">
																							<a href="#" class="menu-link px-3" data-kt-filemanager-table="rename">Rename</a>
																						</div>
																						<!--end::Menu item-->
																						<!--begin::Menu item-->
																						<div class="menu-item px-3">
																							<a href="#" class="menu-link px-3" data-kt-filemanager-table-filter="move_row" data-bs-toggle="modal" data-bs-target="#kt_modal_move_to_folder">Move to folder</a>
																						</div>
																						<!--end::Menu item-->
																						<!--begin::Menu item-->
																						<div class="menu-item px-3">
																							<a href="#" class="menu-link text-danger px-3" data-kt-filemanager-table-filter="delete_row">Delete</a>
																						</div>
																						<!--end::Menu item-->
																					</div>
																					<!--end::Menu-->
																				</div>
																				<!--end::More-->
																			</div>
																		</td>
																	</tr>
																	<tr class="even">
																		<td>
																			<div class="form-check form-check-sm form-check-custom form-check-solid">
																				<input class="form-check-input" type="checkbox" value="1">
																			</div>
																		</td>
																		<td>
																			<div class="d-flex align-items-center">
																				<span class="icon-wrapper"><i class="ki-duotone ki-file fs-2x text-primary me-4"><span class="path1"></span><span class="path2"></span></i></span>
																				<a href="/metronic8/demo1/../demo1/apps/file-manager/files/.html" class="text-gray-800 text-hover-primary">finance.docs</a>
																			</div>
																		</td>
																		<td>Writer</td>
																		<td>Pdf</td>
																		<td>2 Mb</td>
																		<td data-order="2023-08-19T14:40:00+05:00">19 Aug 2023, 2:40 pm</td>
																		<td class="text-end" data-kt-filemanager-table="action_dropdown">
																			<div class="d-flex justify-content-end">
																				<!--begin::Share link-->
																				<div class="ms-2" data-kt-filemanger-table="copy_link">
																					<button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
																						<i class="ki-duotone ki-fasten fs-5 m-0">
																							<span class="path1"></span>
																							<span class="path2"></span>
																						</i>
																					</button>
																					<!--begin::Menu-->
																					<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px" data-kt-menu="true">
																						<!--begin::Card-->
																						<div class="card card-flush">
																							<div class="card-body p-5">
																								<!--begin::Loader-->
																								<div class="d-flex" data-kt-filemanger-table="copy_link_generator">
																									<!--begin::Spinner-->
																									<div class="me-5" data-kt-indicator="on">
																										<span class="indicator-progress">
																											<span class="spinner-border spinner-border-sm align-middle ms-2"></span>
																										</span>
																									</div>
																									<!--end::Spinner-->
																									<!--begin::Label-->
																									<div class="fs-6 text-gray-900">Generating Share Link...</div>
																									<!--end::Label-->
																								</div>
																								<!--end::Loader-->
																								<!--begin::Link-->
																								<div class="d-flex flex-column text-start d-none" data-kt-filemanger-table="copy_link_result">
																									<div class="d-flex mb-3">
																										<i class="ki-duotone ki-check fs-2 text-success me-3"></i>
																										<div class="fs-6 text-gray-900">Share Link Generated</div>
																									</div>
																									<input type="text" class="form-control form-control-sm" value="https://path/to/file/or/folder/">
																									<div class="text-muted fw-normal mt-2 fs-8 px-3">Read only.
																										<a href="apps/file-manager/settings/.html" class="ms-2">Change permissions</a>
																									</div>
																								</div>
																								<!--end::Link-->
																							</div>
																						</div>
																						<!--end::Card-->
																					</div>
																					<!--end::Menu-->
																				</div>
																				<!--end::Share link-->
																				<!--begin::More-->
																				<div class="ms-2">
																					<button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
																						<i class="ki-duotone ki-dots-square fs-5 m-0">
																							<span class="path1"></span>
																							<span class="path2"></span>
																							<span class="path3"></span>
																							<span class="path4"></span>
																						</i>
																					</button>
																					<!--begin::Menu-->
																					<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true">
																						<!--begin::Menu item-->
																						<div class="menu-item px-3">
																							<a href="#" class="menu-link px-3">Download File</a>
																						</div>
																						<!--end::Menu item-->
																						<!--begin::Menu item-->
																						<div class="menu-item px-3">
																							<a href="#" class="menu-link px-3" data-kt-filemanager-table="rename">Rename</a>
																						</div>
																						<!--end::Menu item-->
																						<!--begin::Menu item-->
																						<div class="menu-item px-3">
																							<a href="#" class="menu-link px-3" data-kt-filemanager-table-filter="move_row" data-bs-toggle="modal" data-bs-target="#kt_modal_move_to_folder">Move to folder</a>
																						</div>
																						<!--end::Menu item-->
																						<!--begin::Menu item-->
																						<div class="menu-item px-3">
																							<a href="#" class="menu-link text-danger px-3" data-kt-filemanager-table-filter="delete_row">Delete</a>
																						</div>
																						<!--end::Menu item-->
																					</div>
																					<!--end::Menu-->
																				</div>
																				<!--end::More-->
																			</div>
																		</td>
																	</tr>
																	<tr class="odd">
																		<td>
																			<div class="form-check form-check-sm form-check-custom form-check-solid">
																				<input class="form-check-input" type="checkbox" value="1">
																			</div>
																		</td>
																		<td>
																			<div class="d-flex align-items-center">
																				<span class="icon-wrapper"><i class="ki-duotone ki-file fs-2x text-primary me-4"><span class="path1"></span><span class="path2"></span></i></span>
																				<a href="/metronic8/demo1/../demo1/apps/file-manager/files/.html" class="text-gray-800 text-hover-primary">report.docs</a>
																			</div>
																		</td>
																		<td>Writer</td>
																		<td>Pdf</td>
																		<td>2 Mb</td>
																		<td data-order="2023-08-19T14:40:00+05:00">19 Aug 2023, 2:40 pm</td>
																		<td class="text-end" data-kt-filemanager-table="action_dropdown">
																			<div class="d-flex justify-content-end">
																				<!--begin::Share link-->
																				<div class="ms-2" data-kt-filemanger-table="copy_link">
																					<button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
																						<i class="ki-duotone ki-fasten fs-5 m-0">
																							<span class="path1"></span>
																							<span class="path2"></span>
																						</i>
																					</button>
																					<!--begin::Menu-->
																					<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px" data-kt-menu="true">
																						<!--begin::Card-->
																						<div class="card card-flush">
																							<div class="card-body p-5">
																								<!--begin::Loader-->
																								<div class="d-flex" data-kt-filemanger-table="copy_link_generator">
																									<!--begin::Spinner-->
																									<div class="me-5" data-kt-indicator="on">
																										<span class="indicator-progress">
																											<span class="spinner-border spinner-border-sm align-middle ms-2"></span>
																										</span>
																									</div>
																									<!--end::Spinner-->
																									<!--begin::Label-->
																									<div class="fs-6 text-gray-900">Generating Share Link...</div>
																									<!--end::Label-->
																								</div>
																								<!--end::Loader-->
																								<!--begin::Link-->
																								<div class="d-flex flex-column text-start d-none" data-kt-filemanger-table="copy_link_result">
																									<div class="d-flex mb-3">
																										<i class="ki-duotone ki-check fs-2 text-success me-3"></i>
																										<div class="fs-6 text-gray-900">Share Link Generated</div>
																									</div>
																									<input type="text" class="form-control form-control-sm" value="https://path/to/file/or/folder/">
																									<div class="text-muted fw-normal mt-2 fs-8 px-3">Read only.
																										<a href="apps/file-manager/settings/.html" class="ms-2">Change permissions</a>
																									</div>
																								</div>
																								<!--end::Link-->
																							</div>
																						</div>
																						<!--end::Card-->
																					</div>
																					<!--end::Menu-->
																				</div>
																				<!--end::Share link-->
																				<!--begin::More-->
																				<div class="ms-2">
																					<button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
																						<i class="ki-duotone ki-dots-square fs-5 m-0">
																							<span class="path1"></span>
																							<span class="path2"></span>
																							<span class="path3"></span>
																							<span class="path4"></span>
																						</i>
																					</button>
																					<!--begin::Menu-->
																					<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true">
																						<!--begin::Menu item-->
																						<div class="menu-item px-3">
																							<a href="#" class="menu-link px-3">Download File</a>
																						</div>
																						<!--end::Menu item-->
																						<!--begin::Menu item-->
																						<div class="menu-item px-3">
																							<a href="#" class="menu-link px-3" data-kt-filemanager-table="rename">Rename</a>
																						</div>
																						<!--end::Menu item-->
																						<!--begin::Menu item-->
																						<div class="menu-item px-3">
																							<a href="#" class="menu-link px-3" data-kt-filemanager-table-filter="move_row" data-bs-toggle="modal" data-bs-target="#kt_modal_move_to_folder">Move to folder</a>
																						</div>
																						<!--end::Menu item-->
																						<!--begin::Menu item-->
																						<div class="menu-item px-3">
																							<a href="#" class="menu-link text-danger px-3" data-kt-filemanager-table-filter="delete_row">Delete</a>
																						</div>
																						<!--end::Menu item-->
																					</div>
																					<!--end::Menu-->
																				</div>
																				<!--end::More-->
																			</div>
																		</td>
																	</tr>
																</tbody>
															</table>
														</div>
														<div class="row">
															<div class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start"></div>
															<div class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end">
																<div class="dataTables_paginate paging_simple_numbers" id="kt_file_manager_list_paginate" style="visibility: hidden;">
																	<ul class="pagination">
																		<li class="paginate_button page-item previous disabled" id="kt_file_manager_list_previous"><a href="#" aria-controls="kt_file_manager_list" data-dt-idx="0" tabindex="0" class="page-link"><i class="previous"></i></a></li>
																		<li class="paginate_button page-item active"><a href="#" aria-controls="kt_file_manager_list" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
																		<li class="paginate_button page-item next disabled" id="kt_file_manager_list_next"><a href="#" aria-controls="kt_file_manager_list" data-dt-idx="2" tabindex="0" class="page-link"><i class="next"></i></a></li>
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
										<!--end:::Tab pane-->
									</div>
									<!--end:::Tab content-->
								</div>
								<!--end::Content-->
							</div>
							<!--end::Layout-->

							<!--begin::Modals-->
							<!--begin::Modal - New Address-->
							<div class="modal fade" id="kt_modal_update_address" tabindex="-1" aria-hidden="true">
								<!--begin::Modal dialog-->
								<div class="modal-dialog modal-dialog-centered mw-650px">
									<!--begin::Modal content-->
									<div class="modal-content">
										<!--begin::Form-->
										<form class="form" action="#" id="kt_modal_update_address_form">
											<!--begin::Modal header-->
											<div class="modal-header" id="kt_modal_update_address_header">
												<!--begin::Modal title-->
												<h2 class="fw-bold">Update Address</h2>
												<!--end::Modal title-->
												<!--begin::Close-->
												<div id="kt_modal_update_address_close" class="btn btn-icon btn-sm btn-active-icon-primary">
													<i class="ki-duotone ki-cross fs-1">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</div>
												<!--end::Close-->
											</div>
											<!--end::Modal header-->
											<!--begin::Modal body-->
											<div class="modal-body py-10 px-lg-17">
												<!--begin::Scroll-->
												<div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_update_address_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_update_address_header" data-kt-scroll-wrappers="#kt_modal_update_address_scroll" data-kt-scroll-offset="300px">
													<!--begin::Billing toggle-->
													<div class="fw-bold fs-3 rotate collapsible collapsed mb-7" data-bs-toggle="collapse" href="#kt_modal_update_address_billing_info" role="button" aria-expanded="false" aria-controls="kt_modal_update_address_billing_info">Shipping Information
														<span class="ms-2 rotate-180">
															<i class="ki-duotone ki-down fs-3"></i>
														</span>
													</div>
													<!--end::Billing toggle-->
													<!--begin::Billing form-->
													<div id="kt_modal_update_address_billing_info" class="collapse show">
														<!--begin::Input group-->
														<div class="d-flex flex-column mb-7 fv-row">
															<!--begin::Label-->
															<label class="fs-6 fw-semibold mb-2 required">Address Line 1</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input class="form-control form-control-solid" placeholder="" name="address1" value="101, Collins Street" />
															<!--end::Input-->
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="d-flex flex-column mb-7 fv-row">
															<!--begin::Label-->
															<label class="fs-6 fw-semibold mb-2">Address Line 2</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input class="form-control form-control-solid" placeholder="" name="address2" />
															<!--end::Input-->
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="d-flex flex-column mb-7 fv-row">
															<!--begin::Label-->
															<label class="fs-6 fw-semibold mb-2 required">City / Town</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input class="form-control form-control-solid" placeholder="" name="city" value="Melbourne" />
															<!--end::Input-->
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="row g-9 mb-7">
															<!--begin::Col-->
															<div class="col-md-6 fv-row">
																<!--begin::Label-->
																<label class="fs-6 fw-semibold mb-2 required">State / Province</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input class="form-control form-control-solid" placeholder="" name="state" value="Victoria" />
																<!--end::Input-->
															</div>
															<!--end::Col-->
															<!--begin::Col-->
															<div class="col-md-6 fv-row">
																<!--begin::Label-->
																<label class="fs-6 fw-semibold mb-2 required">Post Code</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input class="form-control form-control-solid" placeholder="" name="postcode" value="3000" />
																<!--end::Input-->
															</div>
															<!--end::Col-->
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="d-flex flex-column mb-7 fv-row">
															<!--begin::Label-->
															<label class="fs-6 fw-semibold mb-2">
																<span class="required">Country</span>
																<span class="ms-1" data-bs-toggle="tooltip" title="Country of origination">
																	<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
																		<span class="path1"></span>
																		<span class="path2"></span>
																		<span class="path3"></span>
																	</i>
																</span>
															</label>
															<!--end::Label-->
															<!--begin::Input-->
															<select name="country" aria-label="Select a Country" data-control="select2" data-placeholder="Select a Country..." data-dropdown-parent="#kt_modal_update_address" class="form-select form-select-solid fw-bold">
																<option value="">Select a Country...</option>
																<option value="AF">Afghanistan</option>
																<option value="AX">Aland Islands</option>
																<option value="AL">Albania</option>
																<option value="DZ">Algeria</option>
																<option value="AS">American Samoa</option>
																<option value="AD">Andorra</option>
																<option value="AO">Angola</option>
																<option value="AI">Anguilla</option>
																<option value="AG">Antigua and Barbuda</option>
																<option value="AR">Argentina</option>
																<option value="AM">Armenia</option>
																<option value="AW">Aruba</option>
																<option value="AU" selected="selected">Australia</option>
																<option value="AT">Austria</option>
																<option value="AZ">Azerbaijan</option>
																<option value="BS">Bahamas</option>
																<option value="BH">Bahrain</option>
																<option value="BD">Bangladesh</option>
																<option value="BB">Barbados</option>
																<option value="BY">Belarus</option>
																<option value="BE">Belgium</option>
																<option value="BZ">Belize</option>
																<option value="BJ">Benin</option>
																<option value="BM">Bermuda</option>
																<option value="BT">Bhutan</option>
																<option value="BO">Bolivia, Plurinational State of</option>
																<option value="BQ">Bonaire, Sint Eustatius and Saba</option>
																<option value="BA">Bosnia and Herzegovina</option>
																<option value="BW">Botswana</option>
																<option value="BR">Brazil</option>
																<option value="IO">British Indian Ocean Territory</option>
																<option value="BN">Brunei Darussalam</option>
																<option value="BG">Bulgaria</option>
																<option value="BF">Burkina Faso</option>
																<option value="BI">Burundi</option>
																<option value="KH">Cambodia</option>
																<option value="CM">Cameroon</option>
																<option value="CA">Canada</option>
																<option value="CV">Cape Verde</option>
																<option value="KY">Cayman Islands</option>
																<option value="CF">Central African Republic</option>
																<option value="TD">Chad</option>
																<option value="CL">Chile</option>
																<option value="CN">China</option>
																<option value="CX">Christmas Island</option>
																<option value="CC">Cocos (Keeling) Islands</option>
																<option value="CO">Colombia</option>
																<option value="KM">Comoros</option>
																<option value="CK">Cook Islands</option>
																<option value="CR">Costa Rica</option>
																<option value="CI">Côte d'Ivoire</option>
																<option value="HR">Croatia</option>
																<option value="CU">Cuba</option>
																<option value="CW">Curaçao</option>
																<option value="CZ">Czech Republic</option>
																<option value="DK">Denmark</option>
																<option value="DJ">Djibouti</option>
																<option value="DM">Dominica</option>
																<option value="DO">Dominican Republic</option>
																<option value="EC">Ecuador</option>
																<option value="EG">Egypt</option>
																<option value="SV">El Salvador</option>
																<option value="GQ">Equatorial Guinea</option>
																<option value="ER">Eritrea</option>
																<option value="EE">Estonia</option>
																<option value="ET">Ethiopia</option>
																<option value="FK">Falkland Islands (Malvinas)</option>
																<option value="FJ">Fiji</option>
																<option value="FI">Finland</option>
																<option value="FR">France</option>
																<option value="PF">French Polynesia</option>
																<option value="GA">Gabon</option>
																<option value="GM">Gambia</option>
																<option value="GE">Georgia</option>
																<option value="DE">Germany</option>
																<option value="GH">Ghana</option>
																<option value="GI">Gibraltar</option>
																<option value="GR">Greece</option>
																<option value="GL">Greenland</option>
																<option value="GD">Grenada</option>
																<option value="GU">Guam</option>
																<option value="GT">Guatemala</option>
																<option value="GG">Guernsey</option>
																<option value="GN">Guinea</option>
																<option value="GW">Guinea-Bissau</option>
																<option value="HT">Haiti</option>
																<option value="VA">Holy See (Vatican City State)</option>
																<option value="HN">Honduras</option>
																<option value="HK">Hong Kong</option>
																<option value="HU">Hungary</option>
																<option value="IS">Iceland</option>
																<option value="IN">India</option>
																<option value="ID">Indonesia</option>
																<option value="IR">Iran, Islamic Republic of</option>
																<option value="IQ">Iraq</option>
																<option value="IE">Ireland</option>
																<option value="IM">Isle of Man</option>
																<option value="IL">Israel</option>
																<option value="IT">Italy</option>
																<option value="JM">Jamaica</option>
																<option value="JP">Japan</option>
																<option value="JE">Jersey</option>
																<option value="JO">Jordan</option>
																<option value="KZ">Kazakhstan</option>
																<option value="KE">Kenya</option>
																<option value="KI">Kiribati</option>
																<option value="KP">Korea, Democratic People's Republic of</option>
																<option value="KW">Kuwait</option>
																<option value="KG">Kyrgyzstan</option>
																<option value="LA">Lao People's Democratic Republic</option>
																<option value="LV">Latvia</option>
																<option value="LB">Lebanon</option>
																<option value="LS">Lesotho</option>
																<option value="LR">Liberia</option>
																<option value="LY">Libya</option>
																<option value="LI">Liechtenstein</option>
																<option value="LT">Lithuania</option>
																<option value="LU">Luxembourg</option>
																<option value="MO">Macao</option>
																<option value="MG">Madagascar</option>
																<option value="MW">Malawi</option>
																<option value="MY">Malaysia</option>
																<option value="MV">Maldives</option>
																<option value="ML">Mali</option>
																<option value="MT">Malta</option>
																<option value="MH">Marshall Islands</option>
																<option value="MQ">Martinique</option>
																<option value="MR">Mauritania</option>
																<option value="MU">Mauritius</option>
																<option value="MX">Mexico</option>
																<option value="FM">Micronesia, Federated States of</option>
																<option value="MD">Moldova, Republic of</option>
																<option value="MC">Monaco</option>
																<option value="MN">Mongolia</option>
																<option value="ME">Montenegro</option>
																<option value="MS">Montserrat</option>
																<option value="MA">Morocco</option>
																<option value="MZ">Mozambique</option>
																<option value="MM">Myanmar</option>
																<option value="NA">Namibia</option>
																<option value="NR">Nauru</option>
																<option value="NP">Nepal</option>
																<option value="NL">Netherlands</option>
																<option value="NZ">New Zealand</option>
																<option value="NI">Nicaragua</option>
																<option value="NE">Niger</option>
																<option value="NG">Nigeria</option>
																<option value="NU">Niue</option>
																<option value="NF">Norfolk Island</option>
																<option value="MP">Northern Mariana Islands</option>
																<option value="NO">Norway</option>
																<option value="OM">Oman</option>
																<option value="PK">Pakistan</option>
																<option value="PW">Palau</option>
																<option value="PS">Palestinian Territory, Occupied</option>
																<option value="PA">Panama</option>
																<option value="PG">Papua New Guinea</option>
																<option value="PY">Paraguay</option>
																<option value="PE">Peru</option>
																<option value="PH">Philippines</option>
																<option value="PL">Poland</option>
																<option value="PT">Portugal</option>
																<option value="PR">Puerto Rico</option>
																<option value="QA">Qatar</option>
																<option value="RO">Romania</option>
																<option value="RU">Russian Federation</option>
																<option value="RW">Rwanda</option>
																<option value="BL">Saint Barthélemy</option>
																<option value="KN">Saint Kitts and Nevis</option>
																<option value="LC">Saint Lucia</option>
																<option value="MF">Saint Martin (French part)</option>
																<option value="VC">Saint Vincent and the Grenadines</option>
																<option value="WS">Samoa</option>
																<option value="SM">San Marino</option>
																<option value="ST">Sao Tome and Principe</option>
																<option value="SA">Saudi Arabia</option>
																<option value="SN">Senegal</option>
																<option value="RS">Serbia</option>
																<option value="SC">Seychelles</option>
																<option value="SL">Sierra Leone</option>
																<option value="SG">Singapore</option>
																<option value="SX">Sint Maarten (Dutch part)</option>
																<option value="SK">Slovakia</option>
																<option value="SI">Slovenia</option>
																<option value="SB">Solomon Islands</option>
																<option value="SO">Somalia</option>
																<option value="ZA">South Africa</option>
																<option value="KR">South Korea</option>
																<option value="SS">South Sudan</option>
																<option value="ES">Spain</option>
																<option value="LK">Sri Lanka</option>
																<option value="SD">Sudan</option>
																<option value="SR">Suriname</option>
																<option value="SZ">Swaziland</option>
																<option value="SE">Sweden</option>
																<option value="CH">Switzerland</option>
																<option value="SY">Syrian Arab Republic</option>
																<option value="TW">Taiwan, Province of China</option>
																<option value="TJ">Tajikistan</option>
																<option value="TZ">Tanzania, United Republic of</option>
																<option value="TH">Thailand</option>
																<option value="TG">Togo</option>
																<option value="TK">Tokelau</option>
																<option value="TO">Tonga</option>
																<option value="TT">Trinidad and Tobago</option>
																<option value="TN">Tunisia</option>
																<option value="TR">Turkey</option>
																<option value="TM">Turkmenistan</option>
																<option value="TC">Turks and Caicos Islands</option>
																<option value="TV">Tuvalu</option>
																<option value="UG">Uganda</option>
																<option value="UA">Ukraine</option>
																<option value="AE">United Arab Emirates</option>
																<option value="GB">United Kingdom</option>
																<option value="US">United States</option>
																<option value="UY">Uruguay</option>
																<option value="UZ">Uzbekistan</option>
																<option value="VU">Vanuatu</option>
																<option value="VE">Venezuela, Bolivarian Republic of</option>
																<option value="VN">Vietnam</option>
																<option value="VI">Virgin Islands</option>
																<option value="YE">Yemen</option>
																<option value="ZM">Zambia</option>
																<option value="ZW">Zimbabwe</option>
															</select>
															<!--end::Input-->
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="fv-row mb-7">
															<!--begin::Wrapper-->
															<div class="d-flex flex-stack">
																<!--begin::Label-->
																<div class="me-5">
																	<!--begin::Label-->
																	<label class="fs-6 fw-semibold">Use as a billing address?</label>
																	<!--end::Label-->
																	<!--begin::Input-->
																	<div class="fs-7 fw-semibold text-muted">If you need more info, please check budget planning</div>
																	<!--end::Input-->
																</div>
																<!--end::Label-->
																<!--begin::Switch-->
																<label class="form-check form-switch form-check-custom form-check-solid">
																	<!--begin::Input-->
																	<input class="form-check-input" name="billing" type="checkbox" value="1" id="kt_modal_update_address_billing" checked="checked" />
																	<!--end::Input-->
																	<!--begin::Label-->
																	<span class="form-check-label fw-semibold text-muted" for="kt_modal_update_address_billing">Yes</span>
																	<!--end::Label-->
																</label>
																<!--end::Switch-->
															</div>
															<!--begin::Wrapper-->
														</div>
														<!--end::Input group-->
													</div>
													<!--end::Billing form-->
												</div>
												<!--end::Scroll-->
											</div>
											<!--end::Modal body-->
											<!--begin::Modal footer-->
											<div class="modal-footer flex-center">
												<!--begin::Button-->
												<button type="reset" id="kt_modal_update_address_cancel" class="btn btn-light me-3">Discard</button>
												<!--end::Button-->
												<!--begin::Button-->
												<button type="submit" id="kt_modal_update_address_submit" class="btn btn-primary">
													<span class="indicator-label">Submit</span>
													<span class="indicator-progress">Please wait...
														<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
												</button>
												<!--end::Button-->
											</div>
											<!--end::Modal footer-->
										</form>
										<!--end::Form-->
									</div>
								</div>
							</div>
							<!--end::Modal - New Address-->
							<!--begin::Modal - Update password-->
							<div class="modal fade" id="kt_modal_update_password" tabindex="-1" aria-hidden="true">
								<!--begin::Modal dialog-->
								<div class="modal-dialog modal-dialog-centered mw-650px">
									<!--begin::Modal content-->
									<div class="modal-content">
										<!--begin::Modal header-->
										<div class="modal-header">
											<!--begin::Modal title-->
											<h2 class="fw-bold">Update Password</h2>
											<!--end::Modal title-->
											<!--begin::Close-->
											<div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
												<i class="ki-duotone ki-cross fs-1">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>
											</div>
											<!--end::Close-->
										</div>
										<!--end::Modal header-->
										<!--begin::Modal body-->
										<div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
											<!--begin::Form-->
											<form id="kt_modal_update_password_form" class="form" action="#">
												<!--begin::Input group=-->
												<div class="fv-row mb-10">
													<label class="required form-label fs-6 mb-2">Current Password</label>
													<input class="form-control form-control-lg form-control-solid" type="password" placeholder="" name="current_password" autocomplete="off" />
												</div>
												<!--end::Input group=-->
												<!--begin::Input group-->
												<div class="mb-10 fv-row" data-kt-password-meter="true">
													<!--begin::Wrapper-->
													<div class="mb-1">
														<!--begin::Label-->
														<label class="form-label fw-semibold fs-6 mb-2">New Password</label>
														<!--end::Label-->
														<!--begin::Input wrapper-->
														<div class="position-relative mb-3">
															<input class="form-control form-control-lg form-control-solid" type="password" placeholder="" name="new_password" autocomplete="off" />
															<span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
																<i class="ki-duotone ki-eye-slash fs-1">
																	<span class="path1"></span>
																	<span class="path2"></span>
																	<span class="path3"></span>
																	<span class="path4"></span>
																</i>
																<i class="ki-duotone ki-eye d-none fs-1">
																	<span class="path1"></span>
																	<span class="path2"></span>
																	<span class="path3"></span>
																</i>
															</span>
														</div>
														<!--end::Input wrapper-->
														<!--begin::Meter-->
														<div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
															<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
															<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
															<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
															<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
														</div>
														<!--end::Meter-->
													</div>
													<!--end::Wrapper-->
													<!--begin::Hint-->
													<div class="text-muted">Use 8 or more characters with a mix of letters, numbers & symbols.</div>
													<!--end::Hint-->
												</div>
												<!--end::Input group=-->
												<!--begin::Input group=-->
												<div class="fv-row mb-10">
													<label class="form-label fw-semibold fs-6 mb-2">Confirm New Password</label>
													<input class="form-control form-control-lg form-control-solid" type="password" placeholder="" name="confirm_password" autocomplete="off" />
												</div>
												<!--end::Input group=-->
												<!--begin::Actions-->
												<div class="text-center pt-15">
													<button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">Discard</button>
													<button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
														<span class="indicator-label">Submit</span>
														<span class="indicator-progress">Please wait...
															<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
													</button>
												</div>
												<!--end::Actions-->
											</form>
											<!--end::Form-->
										</div>
										<!--end::Modal body-->
									</div>
									<!--end::Modal content-->
								</div>
								<!--end::Modal dialog-->
							</div>
							<!--end::Modal - Update password-->
							<!--begin::Modal - Update email-->
							<div class="modal fade" id="kt_modal_update_phone" tabindex="-1" aria-hidden="true">
								<!--begin::Modal dialog-->
								<div class="modal-dialog modal-dialog-centered mw-650px">
									<!--begin::Modal content-->
									<div class="modal-content">
										<!--begin::Modal header-->
										<div class="modal-header">
											<!--begin::Modal title-->
											<h2 class="fw-bold">Update Phone Number</h2>
											<!--end::Modal title-->
											<!--begin::Close-->
											<div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
												<i class="ki-duotone ki-cross fs-1">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>
											</div>
											<!--end::Close-->
										</div>
										<!--end::Modal header-->
										<!--begin::Modal body-->
										<div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
											<!--begin::Form-->
											<form id="kt_modal_update_phone_form" class="form" action="#">
												<!--begin::Notice-->
												<!--begin::Notice-->
												<div class="notice d-flex bg-light-primary rounded border-primary border border-dashed mb-9 p-6">
													<!--begin::Icon-->
													<i class="ki-duotone ki-information fs-2tx text-primary me-4">
														<span class="path1"></span>
														<span class="path2"></span>
														<span class="path3"></span>
													</i>
													<!--end::Icon-->
													<!--begin::Wrapper-->
													<div class="d-flex flex-stack flex-grow-1">
														<!--begin::Content-->
														<div class="fw-semibold">
															<div class="fs-6 text-gray-700">Please note that a valid phone number may be required for order or shipping rescheduling.</div>
														</div>
														<!--end::Content-->
													</div>
													<!--end::Wrapper-->
												</div>
												<!--end::Notice-->
												<!--end::Notice-->
												<!--begin::Input group-->
												<div class="fv-row mb-7">
													<!--begin::Label-->
													<label class="fs-6 fw-semibold form-label mb-2">
														<span class="required">Phone</span>
													</label>
													<!--end::Label-->
													<!--begin::Input-->
													<input class="form-control form-control-solid" placeholder="" name="profile_phone" value="+6141 234 567" />
													<!--end::Input-->
												</div>
												<!--end::Input group-->
												<!--begin::Actions-->
												<div class="text-center pt-15">
													<button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">Discard</button>
													<button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
														<span class="indicator-label">Submit</span>
														<span class="indicator-progress">Please wait...
															<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
													</button>
												</div>
												<!--end::Actions-->
											</form>
											<!--end::Form-->
										</div>
										<!--end::Modal body-->
									</div>
									<!--end::Modal content-->
								</div>
								<!--end::Modal dialog-->
							</div>
							<!--end::Modal - Update email-->
							<!--begin::Modal - New Address-->
							<div class="modal fade" id="kt_modal_add_address" tabindex="-1" aria-hidden="true">
								<!--begin::Modal dialog-->
								<div class="modal-dialog modal-dialog-centered mw-650px">
									<!--begin::Modal content-->
									<div class="modal-content">
										<!--begin::Form-->
										<form class="form" action="#" id="kt_modal_add_address_form">
											<!--begin::Modal header-->
											<div class="modal-header" id="kt_modal_add_address_header">
												<!--begin::Modal title-->
												<h2 class="fw-bold">Add New Address</h2>
												<!--end::Modal title-->
												<!--begin::Close-->
												<div id="kt_modal_add_address_close" class="btn btn-icon btn-sm btn-active-icon-primary">
													<i class="ki-duotone ki-cross fs-1">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</div>
												<!--end::Close-->
											</div>
											<!--end::Modal header-->
											<!--begin::Modal body-->
											<div class="modal-body py-10 px-lg-17">
												<!--begin::Scroll-->
												<div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_address_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_address_header" data-kt-scroll-wrappers="#kt_modal_add_address_scroll" data-kt-scroll-offset="300px">
													<!--begin::Billing toggle-->
													<div class="fw-bold fs-3 rotate collapsible collapsed mb-7" data-bs-toggle="collapse" href="#kt_modal_add_address_billing_info" role="button" aria-expanded="false" aria-controls="kt_modal_add_address_billing_info">Shipping Information
														<span class="ms-2 rotate-180">
															<i class="ki-duotone ki-down fs-3"></i>
														</span>
													</div>
													<!--end::Billing toggle-->
													<!--begin::Billing form-->
													<div id="kt_modal_add_address_billing_info" class="collapse show">
														<!--begin::Input group-->
														<div class="d-flex flex-column mb-7 fv-row">
															<!--begin::Label-->
															<label class="fs-6 fw-semibold mb-2 required">Address Name</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input class="form-control form-control-solid" placeholder="" name="name" value="" />
															<!--end::Input-->
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="d-flex flex-column mb-7 fv-row">
															<!--begin::Label-->
															<label class="fs-6 fw-semibold mb-2 required">Address Line 1</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input class="form-control form-control-solid" placeholder="" name="address1" value="" />
															<!--end::Input-->
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="d-flex flex-column mb-7 fv-row">
															<!--begin::Label-->
															<label class="fs-6 fw-semibold mb-2">Address Line 2</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input class="form-control form-control-solid" placeholder="" name="address2" />
															<!--end::Input-->
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="d-flex flex-column mb-7 fv-row">
															<!--begin::Label-->
															<label class="fs-6 fw-semibold mb-2 required">City / Town</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input class="form-control form-control-solid" placeholder="" name="city" value="" />
															<!--end::Input-->
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="row g-9 mb-7">
															<!--begin::Col-->
															<div class="col-md-6 fv-row">
																<!--begin::Label-->
																<label class="fs-6 fw-semibold mb-2 required">State / Province</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input class="form-control form-control-solid" placeholder="" name="state" value="" />
																<!--end::Input-->
															</div>
															<!--end::Col-->
															<!--begin::Col-->
															<div class="col-md-6 fv-row">
																<!--begin::Label-->
																<label class="fs-6 fw-semibold mb-2 required">Post Code</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input class="form-control form-control-solid" placeholder="" name="postcode" value="" />
																<!--end::Input-->
															</div>
															<!--end::Col-->
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="d-flex flex-column mb-7 fv-row">
															<!--begin::Label-->
															<label class="fs-6 fw-semibold mb-2">
																<span class="required">Country</span>
																<span class="ms-1" data-bs-toggle="tooltip" title="Country of origination">
																	<i class="ki-duotone ki-information fs-7">
																		<span class="path1"></span>
																		<span class="path2"></span>
																		<span class="path3"></span>
																	</i>
																</span>
															</label>
															<!--end::Label-->
															<!--begin::Input-->
															<select name="country" aria-label="Select a Country" data-control="select2" data-placeholder="Select a Country..." data-dropdown-parent="#kt_modal_add_address" class="form-select form-select-solid fw-bold">
																<option value="">Select a Country...</option>
																<option value="AF">Afghanistan</option>
																<option value="AX">Aland Islands</option>
																<option value="AL">Albania</option>
																<option value="DZ">Algeria</option>
																<option value="AS">American Samoa</option>
																<option value="AD">Andorra</option>
																<option value="AO">Angola</option>
																<option value="AI">Anguilla</option>
																<option value="AG">Antigua and Barbuda</option>
																<option value="AR">Argentina</option>
																<option value="AM">Armenia</option>
																<option value="AW">Aruba</option>
																<option value="AU">Australia</option>
																<option value="AT">Austria</option>
																<option value="AZ">Azerbaijan</option>
																<option value="BS">Bahamas</option>
																<option value="BH">Bahrain</option>
																<option value="BD">Bangladesh</option>
																<option value="BB">Barbados</option>
																<option value="BY">Belarus</option>
																<option value="BE">Belgium</option>
																<option value="BZ">Belize</option>
																<option value="BJ">Benin</option>
																<option value="BM">Bermuda</option>
																<option value="BT">Bhutan</option>
																<option value="BO">Bolivia, Plurinational State of</option>
																<option value="BQ">Bonaire, Sint Eustatius and Saba</option>
																<option value="BA">Bosnia and Herzegovina</option>
																<option value="BW">Botswana</option>
																<option value="BR">Brazil</option>
																<option value="IO">British Indian Ocean Territory</option>
																<option value="BN">Brunei Darussalam</option>
																<option value="BG">Bulgaria</option>
																<option value="BF">Burkina Faso</option>
																<option value="BI">Burundi</option>
																<option value="KH">Cambodia</option>
																<option value="CM">Cameroon</option>
																<option value="CA">Canada</option>
																<option value="CV">Cape Verde</option>
																<option value="KY">Cayman Islands</option>
																<option value="CF">Central African Republic</option>
																<option value="TD">Chad</option>
																<option value="CL">Chile</option>
																<option value="CN">China</option>
																<option value="CX">Christmas Island</option>
																<option value="CC">Cocos (Keeling) Islands</option>
																<option value="CO">Colombia</option>
																<option value="KM">Comoros</option>
																<option value="CK">Cook Islands</option>
																<option value="CR">Costa Rica</option>
																<option value="CI">Côte d'Ivoire</option>
																<option value="HR">Croatia</option>
																<option value="CU">Cuba</option>
																<option value="CW">Curaçao</option>
																<option value="CZ">Czech Republic</option>
																<option value="DK">Denmark</option>
																<option value="DJ">Djibouti</option>
																<option value="DM">Dominica</option>
																<option value="DO">Dominican Republic</option>
																<option value="EC">Ecuador</option>
																<option value="EG">Egypt</option>
																<option value="SV">El Salvador</option>
																<option value="GQ">Equatorial Guinea</option>
																<option value="ER">Eritrea</option>
																<option value="EE">Estonia</option>
																<option value="ET">Ethiopia</option>
																<option value="FK">Falkland Islands (Malvinas)</option>
																<option value="FJ">Fiji</option>
																<option value="FI">Finland</option>
																<option value="FR">France</option>
																<option value="PF">French Polynesia</option>
																<option value="GA">Gabon</option>
																<option value="GM">Gambia</option>
																<option value="GE">Georgia</option>
																<option value="DE">Germany</option>
																<option value="GH">Ghana</option>
																<option value="GI">Gibraltar</option>
																<option value="GR">Greece</option>
																<option value="GL">Greenland</option>
																<option value="GD">Grenada</option>
																<option value="GU">Guam</option>
																<option value="GT">Guatemala</option>
																<option value="GG">Guernsey</option>
																<option value="GN">Guinea</option>
																<option value="GW">Guinea-Bissau</option>
																<option value="HT">Haiti</option>
																<option value="VA">Holy See (Vatican City State)</option>
																<option value="HN">Honduras</option>
																<option value="HK">Hong Kong</option>
																<option value="HU">Hungary</option>
																<option value="IS">Iceland</option>
																<option value="IN">India</option>
																<option value="ID">Indonesia</option>
																<option value="IR">Iran, Islamic Republic of</option>
																<option value="IQ">Iraq</option>
																<option value="IE">Ireland</option>
																<option value="IM">Isle of Man</option>
																<option value="IL">Israel</option>
																<option value="IT">Italy</option>
																<option value="JM">Jamaica</option>
																<option value="JP">Japan</option>
																<option value="JE">Jersey</option>
																<option value="JO">Jordan</option>
																<option value="KZ">Kazakhstan</option>
																<option value="KE">Kenya</option>
																<option value="KI">Kiribati</option>
																<option value="KP">Korea, Democratic People's Republic of</option>
																<option value="KW">Kuwait</option>
																<option value="KG">Kyrgyzstan</option>
																<option value="LA">Lao People's Democratic Republic</option>
																<option value="LV">Latvia</option>
																<option value="LB">Lebanon</option>
																<option value="LS">Lesotho</option>
																<option value="LR">Liberia</option>
																<option value="LY">Libya</option>
																<option value="LI">Liechtenstein</option>
																<option value="LT">Lithuania</option>
																<option value="LU">Luxembourg</option>
																<option value="MO">Macao</option>
																<option value="MG">Madagascar</option>
																<option value="MW">Malawi</option>
																<option value="MY">Malaysia</option>
																<option value="MV">Maldives</option>
																<option value="ML">Mali</option>
																<option value="MT">Malta</option>
																<option value="MH">Marshall Islands</option>
																<option value="MQ">Martinique</option>
																<option value="MR">Mauritania</option>
																<option value="MU">Mauritius</option>
																<option value="MX">Mexico</option>
																<option value="FM">Micronesia, Federated States of</option>
																<option value="MD">Moldova, Republic of</option>
																<option value="MC">Monaco</option>
																<option value="MN">Mongolia</option>
																<option value="ME">Montenegro</option>
																<option value="MS">Montserrat</option>
																<option value="MA">Morocco</option>
																<option value="MZ">Mozambique</option>
																<option value="MM">Myanmar</option>
																<option value="NA">Namibia</option>
																<option value="NR">Nauru</option>
																<option value="NP">Nepal</option>
																<option value="NL">Netherlands</option>
																<option value="NZ">New Zealand</option>
																<option value="NI">Nicaragua</option>
																<option value="NE">Niger</option>
																<option value="NG">Nigeria</option>
																<option value="NU">Niue</option>
																<option value="NF">Norfolk Island</option>
																<option value="MP">Northern Mariana Islands</option>
																<option value="NO">Norway</option>
																<option value="OM">Oman</option>
																<option value="PK">Pakistan</option>
																<option value="PW">Palau</option>
																<option value="PS">Palestinian Territory, Occupied</option>
																<option value="PA">Panama</option>
																<option value="PG">Papua New Guinea</option>
																<option value="PY">Paraguay</option>
																<option value="PE">Peru</option>
																<option value="PH">Philippines</option>
																<option value="PL">Poland</option>
																<option value="PT">Portugal</option>
																<option value="PR">Puerto Rico</option>
																<option value="QA">Qatar</option>
																<option value="RO">Romania</option>
																<option value="RU">Russian Federation</option>
																<option value="RW">Rwanda</option>
																<option value="BL">Saint Barthélemy</option>
																<option value="KN">Saint Kitts and Nevis</option>
																<option value="LC">Saint Lucia</option>
																<option value="MF">Saint Martin (French part)</option>
																<option value="VC">Saint Vincent and the Grenadines</option>
																<option value="WS">Samoa</option>
																<option value="SM">San Marino</option>
																<option value="ST">Sao Tome and Principe</option>
																<option value="SA">Saudi Arabia</option>
																<option value="SN">Senegal</option>
																<option value="RS">Serbia</option>
																<option value="SC">Seychelles</option>
																<option value="SL">Sierra Leone</option>
																<option value="SG">Singapore</option>
																<option value="SX">Sint Maarten (Dutch part)</option>
																<option value="SK">Slovakia</option>
																<option value="SI">Slovenia</option>
																<option value="SB">Solomon Islands</option>
																<option value="SO">Somalia</option>
																<option value="ZA">South Africa</option>
																<option value="KR">South Korea</option>
																<option value="SS">South Sudan</option>
																<option value="ES">Spain</option>
																<option value="LK">Sri Lanka</option>
																<option value="SD">Sudan</option>
																<option value="SR">Suriname</option>
																<option value="SZ">Swaziland</option>
																<option value="SE">Sweden</option>
																<option value="CH">Switzerland</option>
																<option value="SY">Syrian Arab Republic</option>
																<option value="TW">Taiwan, Province of China</option>
																<option value="TJ">Tajikistan</option>
																<option value="TZ">Tanzania, United Republic of</option>
																<option value="TH">Thailand</option>
																<option value="TG">Togo</option>
																<option value="TK">Tokelau</option>
																<option value="TO">Tonga</option>
																<option value="TT">Trinidad and Tobago</option>
																<option value="TN">Tunisia</option>
																<option value="TR">Turkey</option>
																<option value="TM">Turkmenistan</option>
																<option value="TC">Turks and Caicos Islands</option>
																<option value="TV">Tuvalu</option>
																<option value="UG">Uganda</option>
																<option value="UA">Ukraine</option>
																<option value="AE">United Arab Emirates</option>
																<option value="GB">United Kingdom</option>
																<option value="US">United States</option>
																<option value="UY">Uruguay</option>
																<option value="UZ">Uzbekistan</option>
																<option value="VU">Vanuatu</option>
																<option value="VE">Venezuela, Bolivarian Republic of</option>
																<option value="VN">Vietnam</option>
																<option value="VI">Virgin Islands</option>
																<option value="YE">Yemen</option>
																<option value="ZM">Zambia</option>
																<option value="ZW">Zimbabwe</option>
															</select>
															<!--end::Input-->
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="fv-row mb-7">
															<!--begin::Wrapper-->
															<div class="d-flex flex-stack">
																<!--begin::Label-->
																<div class="me-5">
																	<!--begin::Label-->
																	<label class="fs-6 fw-semibold">Use as a billing address?</label>
																	<!--end::Label-->
																	<!--begin::Input-->
																	<div class="fs-7 fw-semibold text-muted">If you need more info, please check budget planning</div>
																	<!--end::Input-->
																</div>
																<!--end::Label-->
																<!--begin::Switch-->
																<label class="form-check form-switch form-check-custom form-check-solid">
																	<!--begin::Input-->
																	<input class="form-check-input" name="billing" type="checkbox" value="1" id="kt_modal_add_address_billing" checked="checked" />
																	<!--end::Input-->
																	<!--begin::Label-->
																	<span class="form-check-label fw-semibold text-muted" for="kt_modal_add_address_billing">Yes</span>
																	<!--end::Label-->
																</label>
																<!--end::Switch-->
															</div>
															<!--begin::Wrapper-->
														</div>
														<!--end::Input group-->
													</div>
													<!--end::Billing form-->
												</div>
												<!--end::Scroll-->
											</div>
											<!--end::Modal body-->
											<!--begin::Modal footer-->
											<div class="modal-footer flex-center">
												<!--begin::Button-->
												<button type="reset" id="kt_modal_add_address_cancel" class="btn btn-light me-3">Discard</button>
												<!--end::Button-->
												<!--begin::Button-->
												<button type="submit" id="kt_modal_add_address_submit" class="btn btn-primary">
													<span class="indicator-label">Submit</span>
													<span class="indicator-progress">Please wait...
														<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
												</button>
												<!--end::Button-->
											</div>
											<!--end::Modal footer-->
										</form>
										<!--end::Form-->
									</div>
								</div>
							</div>
							<!--end::Modal - New Address-->
							<!--begin::Modal - Add task-->
							<div class="modal fade" id="kt_modal_add_auth_app" tabindex="-1" aria-hidden="true">
								<!--begin::Modal dialog-->
								<div class="modal-dialog modal-dialog-centered mw-650px">
									<!--begin::Modal content-->
									<div class="modal-content">
										<!--begin::Modal header-->
										<div class="modal-header">
											<!--begin::Modal title-->
											<h2 class="fw-bold">Add Authenticator App</h2>
											<!--end::Modal title-->
											<!--begin::Close-->
											<div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
												<i class="ki-duotone ki-cross fs-1">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>
											</div>
											<!--end::Close-->
										</div>
										<!--end::Modal header-->
										<!--begin::Modal body-->
										<div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
											<!--begin::Content-->
											<div class="fw-bold d-flex flex-column justify-content-center mb-5">
												<!--begin::Label-->
												<div class="text-center mb-5" data-kt-add-auth-action="qr-code-label">Download the
													<a href="#">Authenticator app</a>, add a new account, then scan this barcode to set up your account.
												</div>
												<div class="text-center mb-5 d-none" data-kt-add-auth-action="text-code-label">Download the
													<a href="#">Authenticator app</a>, add a new account, then enter this code to set up your account.
												</div>
												<!--end::Label-->
												<!--begin::QR code-->
												<div class="d-flex flex-center" data-kt-add-auth-action="qr-code">
													<img src="assets/media/misc/qr.png" alt="Scan this QR code" />
												</div>
												<!--end::QR code-->
												<!--begin::Text code-->
												<div class="border rounded p-5 d-flex flex-center d-none" data-kt-add-auth-action="text-code">
													<div class="fs-1">gi2kdnb54is709j</div>
												</div>
												<!--end::Text code-->
											</div>
											<!--end::Content-->
											<!--begin::Action-->
											<div class="d-flex flex-center">
												<div class="btn btn-light-primary" data-kt-add-auth-action="text-code-button">Enter code manually</div>
												<div class="btn btn-light-primary d-none" data-kt-add-auth-action="qr-code-button">Scan barcode instead</div>
											</div>
											<!--end::Action-->
										</div>
										<!--end::Modal body-->
									</div>
									<!--end::Modal content-->
								</div>
								<!--end::Modal dialog-->
							</div>
							<!--end::Modal - Add task-->
							<!--begin::Modal - Add task-->
							<div class="modal fade" id="kt_modal_add_one_time_password" tabindex="-1" aria-hidden="true">
								<!--begin::Modal dialog-->
								<div class="modal-dialog modal-dialog-centered mw-650px">
									<!--begin::Modal content-->
									<div class="modal-content">
										<!--begin::Modal header-->
										<div class="modal-header">
											<!--begin::Modal title-->
											<h2 class="fw-bold">Enable One Time Password</h2>
											<!--end::Modal title-->
											<!--begin::Close-->
											<div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
												<i class="ki-duotone ki-cross fs-1">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>
											</div>
											<!--end::Close-->
										</div>
										<!--end::Modal header-->
										<!--begin::Modal body-->
										<div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
											<!--begin::Form-->
											<form class="form" id="kt_modal_add_one_time_password_form">
												<!--begin::Label-->
												<div class="fw-bold mb-9">Enter the new phone number to receive an SMS to when you log in.</div>
												<!--end::Label-->
												<!--begin::Input group-->
												<div class="fv-row mb-7">
													<!--begin::Label-->
													<label class="fs-6 fw-semibold form-label mb-2">
														<span class="required">Mobile number</span>
														<span class="ms-1" data-bs-toggle="tooltip" title="A valid mobile number is required to receive the one-time password to validate your account login.">
															<i class="ki-duotone ki-information fs-7">
																<span class="path1"></span>
																<span class="path2"></span>
																<span class="path3"></span>
															</i>
														</span>
													</label>
													<!--end::Label-->
													<!--begin::Input-->
													<input type="text" class="form-control form-control-solid" name="otp_mobile_number" placeholder="+6123 456 789" value="" />
													<!--end::Input-->
												</div>
												<!--end::Input group-->
												<!--begin::Separator-->
												<div class="separator saperator-dashed my-5"></div>
												<!--end::Separator-->
												<!--begin::Input group-->
												<div class="fv-row mb-7">
													<!--begin::Label-->
													<label class="fs-6 fw-semibold form-label mb-2">
														<span class="required">Email</span>
													</label>
													<!--end::Label-->
													<!--begin::Input-->
													<input type="email" class="form-control form-control-solid" name="otp_email" value="smith@kpmg.com" readonly="readonly" />
													<!--end::Input-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="fv-row mb-7">
													<!--begin::Label-->
													<label class="fs-6 fw-semibold form-label mb-2">
														<span class="required">Confirm password</span>
													</label>
													<!--end::Label-->
													<!--begin::Input-->
													<input type="password" class="form-control form-control-solid" name="otp_confirm_password" value="" />
													<!--end::Input-->
												</div>
												<!--end::Input group-->
												<!--begin::Actions-->
												<div class="text-center pt-15">
													<button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">Cancel</button>
													<button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
														<span class="indicator-label">Submit</span>
														<span class="indicator-progress">Please wait...
															<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
													</button>
												</div>
												<!--end::Actions-->
											</form>
											<!--end::Form-->
										</div>
										<!--end::Modal body-->
									</div>
									<!--end::Modal content-->
								</div>
								<!--end::Modal dialog-->
							</div>
							<!--end::Modal - Add task-->
							<!--end::Modals-->
						</div>
						<!--end::Content container-->
					</div>
					<!--end::Content-->
				</div>
				<!--end::Content wrapper-->
			</div>
			<!--end:::Main-->
		</div>
		<!--end::Wrapper-->
	</div>
	<!--end::Page-->
</div>
<!--end::App-->
<!--begin::Drawers-->
<!--begin::Activities drawer-->
<div id="kt_activities" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="activities" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'300px', 'lg': '900px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_activities_toggle" data-kt-drawer-close="#kt_activities_close">
	<div class="card shadow-none border-0 rounded-0">
		<!--begin::Header-->
		<div class="card-header" id="kt_activities_header">
			<h3 class="card-title fw-bold text-gray-900">Activity Logs</h3>
			<div class="card-toolbar">
				<button type="button" class="btn btn-sm btn-icon btn-active-light-primary me-n5" id="kt_activities_close">
					<i class="ki-duotone ki-cross fs-1">
						<span class="path1"></span>
						<span class="path2"></span>
					</i>
				</button>
			</div>
		</div>
		<!--end::Header-->
		<!--begin::Body-->
		<div class="card-body position-relative" id="kt_activities_body">
			<!--begin::Content-->
			<div id="kt_activities_scroll" class="position-relative scroll-y me-n5 pe-5" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_activities_body" data-kt-scroll-dependencies="#kt_activities_header, #kt_activities_footer" data-kt-scroll-offset="5px">
				<!--begin::Timeline items-->
				<div class="timeline timeline-border-dashed">
					<!--begin::Timeline item-->
					<div class="timeline-item">
						<!--begin::Timeline line-->
						<div class="timeline-line"></div>
						<!--end::Timeline line-->
						<!--begin::Timeline icon-->
						<div class="timeline-icon">
							<i class="ki-duotone ki-message-text-2 fs-2 text-gray-500">
								<span class="path1"></span>
								<span class="path2"></span>
								<span class="path3"></span>
							</i>
						</div>
						<!--end::Timeline icon-->
						<!--begin::Timeline content-->
						<div class="timeline-content mb-10 mt-n1">
							<!--begin::Timeline heading-->
							<div class="pe-3 mb-5">
								<!--begin::Title-->
								<div class="fs-5 fw-semibold mb-2">There are 2 new tasks for you in “AirPlus Mobile App” project:</div>
								<!--end::Title-->
								<!--begin::Description-->
								<div class="d-flex align-items-center mt-1 fs-6">
									<!--begin::Info-->
									<div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
									<!--end::Info-->
									<!--begin::User-->
									<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
										<img src="assets/media/avatars/300-14.jpg" alt="img" />
									</div>
									<!--end::User-->
								</div>
								<!--end::Description-->
							</div>
							<!--end::Timeline heading-->
							<!--begin::Timeline details-->
							<div class="overflow-auto pb-5">
								<!--begin::Record-->
								<div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-5">
									<!--begin::Title-->
									<a href="apps/projects/project.html" class="fs-5 text-gray-900 text-hover-primary fw-semibold w-375px min-w-200px">Meeting with customer</a>
									<!--end::Title-->
									<!--begin::Label-->
									<div class="min-w-175px pe-2">
										<span class="badge badge-light text-muted">Application Design</span>
									</div>
									<!--end::Label-->
									<!--begin::Users-->
									<div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px pe-2">
										<!--begin::User-->
										<div class="symbol symbol-circle symbol-25px">
											<img src="assets/media/avatars/300-2.jpg" alt="img" />
										</div>
										<!--end::User-->
										<!--begin::User-->
										<div class="symbol symbol-circle symbol-25px">
											<img src="assets/media/avatars/300-14.jpg" alt="img" />
										</div>
										<!--end::User-->
										<!--begin::User-->
										<div class="symbol symbol-circle symbol-25px">
											<div class="symbol-label fs-8 fw-semibold bg-primary text-inverse-primary">A</div>
										</div>
										<!--end::User-->
									</div>
									<!--end::Users-->
									<!--begin::Progress-->
									<div class="min-w-125px pe-2">
										<span class="badge badge-light-primary">In Progress</span>
									</div>
									<!--end::Progress-->
									<!--begin::Action-->
									<a href="apps/projects/project.html" class="btn btn-sm btn-light btn-active-light-primary">View</a>
									<!--end::Action-->
								</div>
								<!--end::Record-->
								<!--begin::Record-->
								<div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-0">
									<!--begin::Title-->
									<a href="apps/projects/project.html" class="fs-5 text-gray-900 text-hover-primary fw-semibold w-375px min-w-200px">Project Delivery Preparation</a>
									<!--end::Title-->
									<!--begin::Label-->
									<div class="min-w-175px">
										<span class="badge badge-light text-muted">CRM System Development</span>
									</div>
									<!--end::Label-->
									<!--begin::Users-->
									<div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px">
										<!--begin::User-->
										<div class="symbol symbol-circle symbol-25px">
											<img src="assets/media/avatars/300-20.jpg" alt="img" />
										</div>
										<!--end::User-->
										<!--begin::User-->
										<div class="symbol symbol-circle symbol-25px">
											<div class="symbol-label fs-8 fw-semibold bg-success text-inverse-primary">B</div>
										</div>
										<!--end::User-->
									</div>
									<!--end::Users-->
									<!--begin::Progress-->
									<div class="min-w-125px">
										<span class="badge badge-light-success">Completed</span>
									</div>
									<!--end::Progress-->
									<!--begin::Action-->
									<a href="apps/projects/project.html" class="btn btn-sm btn-light btn-active-light-primary">View</a>
									<!--end::Action-->
								</div>
								<!--end::Record-->
							</div>
							<!--end::Timeline details-->
						</div>
						<!--end::Timeline content-->
					</div>
					<!--end::Timeline item-->
					<!--begin::Timeline item-->
					<div class="timeline-item">
						<!--begin::Timeline line-->
						<div class="timeline-line"></div>
						<!--end::Timeline line-->
						<!--begin::Timeline icon-->
						<div class="timeline-icon me-4">
							<i class="ki-duotone ki-flag fs-2 text-gray-500">
								<span class="path1"></span>
								<span class="path2"></span>
							</i>
						</div>
						<!--end::Timeline icon-->
						<!--begin::Timeline content-->
						<div class="timeline-content mb-10 mt-n2">
							<!--begin::Timeline heading-->
							<div class="overflow-auto pe-3">
								<!--begin::Title-->
								<div class="fs-5 fw-semibold mb-2">Invitation for crafting engaging designs that speak human workshop</div>
								<!--end::Title-->
								<!--begin::Description-->
								<div class="d-flex align-items-center mt-1 fs-6">
									<!--begin::Info-->
									<div class="text-muted me-2 fs-7">Sent at 4:23 PM by</div>
									<!--end::Info-->
									<!--begin::User-->
									<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Alan Nilson">
										<img src="assets/media/avatars/300-1.jpg" alt="img" />
									</div>
									<!--end::User-->
								</div>
								<!--end::Description-->
							</div>
							<!--end::Timeline heading-->
						</div>
						<!--end::Timeline content-->
					</div>
					<!--end::Timeline item-->
					<!--begin::Timeline item-->
					<div class="timeline-item">
						<!--begin::Timeline line-->
						<div class="timeline-line"></div>
						<!--end::Timeline line-->
						<!--begin::Timeline icon-->
						<div class="timeline-icon">
							<i class="ki-duotone ki-disconnect fs-2 text-gray-500">
								<span class="path1"></span>
								<span class="path2"></span>
								<span class="path3"></span>
								<span class="path4"></span>
								<span class="path5"></span>
							</i>
						</div>
						<!--end::Timeline icon-->
						<!--begin::Timeline content-->
						<div class="timeline-content mb-10 mt-n1">
							<!--begin::Timeline heading-->
							<div class="mb-5 pe-3">
								<!--begin::Title-->
								<a href="#" class="fs-5 fw-semibold text-gray-800 text-hover-primary mb-2">3 New Incoming Project Files:</a>
								<!--end::Title-->
								<!--begin::Description-->
								<div class="d-flex align-items-center mt-1 fs-6">
									<!--begin::Info-->
									<div class="text-muted me-2 fs-7">Sent at 10:30 PM by</div>
									<!--end::Info-->
									<!--begin::User-->
									<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Jan Hummer">
										<img src="assets/media/avatars/300-23.jpg" alt="img" />
									</div>
									<!--end::User-->
								</div>
								<!--end::Description-->
							</div>
							<!--end::Timeline heading-->
							<!--begin::Timeline details-->
							<div class="overflow-auto pb-5">
								<div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-5">
									<!--begin::Item-->
									<div class="d-flex flex-aligns-center pe-10 pe-lg-20">
										<!--begin::Icon-->
										<img alt="" class="w-30px me-3" src="assets/media/svg/files/pdf.svg" />
										<!--end::Icon-->
										<!--begin::Info-->
										<div class="ms-1 fw-semibold">
											<!--begin::Desc-->
											<a href="apps/projects/project.html" class="fs-6 text-hover-primary fw-bold">Finance KPI App Guidelines</a>
											<!--end::Desc-->
											<!--begin::Number-->
											<div class="text-gray-500">1.9mb</div>
											<!--end::Number-->
										</div>
										<!--begin::Info-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="d-flex flex-aligns-center pe-10 pe-lg-20">
										<!--begin::Icon-->
										<img alt="apps/projects/project.html" class="w-30px me-3" src="assets/media/svg/files/doc.svg" />
										<!--end::Icon-->
										<!--begin::Info-->
										<div class="ms-1 fw-semibold">
											<!--begin::Desc-->
											<a href="#" class="fs-6 text-hover-primary fw-bold">Client UAT Testing Results</a>
											<!--end::Desc-->
											<!--begin::Number-->
											<div class="text-gray-500">18kb</div>
											<!--end::Number-->
										</div>
										<!--end::Info-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="d-flex flex-aligns-center">
										<!--begin::Icon-->
										<img alt="apps/projects/project.html" class="w-30px me-3" src="assets/media/svg/files/css.svg" />
										<!--end::Icon-->
										<!--begin::Info-->
										<div class="ms-1 fw-semibold">
											<!--begin::Desc-->
											<a href="#" class="fs-6 text-hover-primary fw-bold">Finance Reports</a>
											<!--end::Desc-->
											<!--begin::Number-->
											<div class="text-gray-500">20mb</div>
											<!--end::Number-->
										</div>
										<!--end::Icon-->
									</div>
									<!--end::Item-->
								</div>
							</div>
							<!--end::Timeline details-->
						</div>
						<!--end::Timeline content-->
					</div>
					<!--end::Timeline item-->
					<!--begin::Timeline item-->
					<div class="timeline-item">
						<!--begin::Timeline line-->
						<div class="timeline-line"></div>
						<!--end::Timeline line-->
						<!--begin::Timeline icon-->
						<div class="timeline-icon">
							<i class="ki-duotone ki-abstract-26 fs-2 text-gray-500">
								<span class="path1"></span>
								<span class="path2"></span>
							</i>
						</div>
						<!--end::Timeline icon-->
						<!--begin::Timeline content-->
						<div class="timeline-content mb-10 mt-n1">
							<!--begin::Timeline heading-->
							<div class="pe-3 mb-5">
								<!--begin::Title-->
								<div class="fs-5 fw-semibold mb-2">Task
									<a href="#" class="text-primary fw-bold me-1">#45890</a>merged with
									<a href="#" class="text-primary fw-bold me-1">#45890</a>in “Ads Pro Admin Dashboard project:
								</div>
								<!--end::Title-->
								<!--begin::Description-->
								<div class="d-flex align-items-center mt-1 fs-6">
									<!--begin::Info-->
									<div class="text-muted me-2 fs-7">Initiated at 4:23 PM by</div>
									<!--end::Info-->
									<!--begin::User-->
									<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
										<img src="assets/media/avatars/300-14.jpg" alt="img" />
									</div>
									<!--end::User-->
								</div>
								<!--end::Description-->
							</div>
							<!--end::Timeline heading-->
						</div>
						<!--end::Timeline content-->
					</div>
					<!--end::Timeline item-->
					<!--begin::Timeline item-->
					<div class="timeline-item">
						<!--begin::Timeline line-->
						<div class="timeline-line"></div>
						<!--end::Timeline line-->
						<!--begin::Timeline icon-->
						<div class="timeline-icon">
							<i class="ki-duotone ki-pencil fs-2 text-gray-500">
								<span class="path1"></span>
								<span class="path2"></span>
							</i>
						</div>
						<!--end::Timeline icon-->
						<!--begin::Timeline content-->
						<div class="timeline-content mb-10 mt-n1">
							<!--begin::Timeline heading-->
							<div class="pe-3 mb-5">
								<!--begin::Title-->
								<div class="fs-5 fw-semibold mb-2">3 new application design concepts added:</div>
								<!--end::Title-->
								<!--begin::Description-->
								<div class="d-flex align-items-center mt-1 fs-6">
									<!--begin::Info-->
									<div class="text-muted me-2 fs-7">Created at 4:23 PM by</div>
									<!--end::Info-->
									<!--begin::User-->
									<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Marcus Dotson">
										<img src="assets/media/avatars/300-2.jpg" alt="img" />
									</div>
									<!--end::User-->
								</div>
								<!--end::Description-->
							</div>
							<!--end::Timeline heading-->
							<!--begin::Timeline details-->
							<div class="overflow-auto pb-5">
								<div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-7">
									<!--begin::Item-->
									<div class="overlay me-10">
										<!--begin::Image-->
										<div class="overlay-wrapper">
											<img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-29.jpg" />
										</div>
										<!--end::Image-->
										<!--begin::Link-->
										<div class="overlay-layer bg-dark bg-opacity-10 rounded">
											<a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
										</div>
										<!--end::Link-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="overlay me-10">
										<!--begin::Image-->
										<div class="overlay-wrapper">
											<img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-31.jpg" />
										</div>
										<!--end::Image-->
										<!--begin::Link-->
										<div class="overlay-layer bg-dark bg-opacity-10 rounded">
											<a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
										</div>
										<!--end::Link-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="overlay">
										<!--begin::Image-->
										<div class="overlay-wrapper">
											<img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-40.jpg" />
										</div>
										<!--end::Image-->
										<!--begin::Link-->
										<div class="overlay-layer bg-dark bg-opacity-10 rounded">
											<a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
										</div>
										<!--end::Link-->
									</div>
									<!--end::Item-->
								</div>
							</div>
							<!--end::Timeline details-->
						</div>
						<!--end::Timeline content-->
					</div>
					<!--end::Timeline item-->
					<!--begin::Timeline item-->
					<div class="timeline-item">
						<!--begin::Timeline line-->
						<div class="timeline-line"></div>
						<!--end::Timeline line-->
						<!--begin::Timeline icon-->
						<div class="timeline-icon">
							<i class="ki-duotone ki-sms fs-2 text-gray-500">
								<span class="path1"></span>
								<span class="path2"></span>
							</i>
						</div>
						<!--end::Timeline icon-->
						<!--begin::Timeline content-->
						<div class="timeline-content mb-10 mt-n1">
							<!--begin::Timeline heading-->
							<div class="pe-3 mb-5">
								<!--begin::Title-->
								<div class="fs-5 fw-semibold mb-2">New case
									<a href="#" class="text-primary fw-bold me-1">#67890</a>is assigned to you in Multi-platform Database Design project
								</div>
								<!--end::Title-->
								<!--begin::Description-->
								<div class="overflow-auto pb-5">
									<!--begin::Wrapper-->
									<div class="d-flex align-items-center mt-1 fs-6">
										<!--begin::Info-->
										<div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
										<!--end::Info-->
										<!--begin::User-->
										<a href="#" class="text-primary fw-bold me-1">Alice Tan</a>
										<!--end::User-->
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Description-->
							</div>
							<!--end::Timeline heading-->
						</div>
						<!--end::Timeline content-->
					</div>
					<!--end::Timeline item-->
					<!--begin::Timeline item-->
					<div class="timeline-item">
						<!--begin::Timeline line-->
						<div class="timeline-line"></div>
						<!--end::Timeline line-->
						<!--begin::Timeline icon-->
						<div class="timeline-icon">
							<i class="ki-duotone ki-pencil fs-2 text-gray-500">
								<span class="path1"></span>
								<span class="path2"></span>
							</i>
						</div>
						<!--end::Timeline icon-->
						<!--begin::Timeline content-->
						<div class="timeline-content mb-10 mt-n1">
							<!--begin::Timeline heading-->
							<div class="pe-3 mb-5">
								<!--begin::Title-->
								<div class="fs-5 fw-semibold mb-2">You have received a new order:</div>
								<!--end::Title-->
								<!--begin::Description-->
								<div class="d-flex align-items-center mt-1 fs-6">
									<!--begin::Info-->
									<div class="text-muted me-2 fs-7">Placed at 5:05 AM by</div>
									<!--end::Info-->
									<!--begin::User-->
									<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Robert Rich">
										<img src="assets/media/avatars/300-4.jpg" alt="img" />
									</div>
									<!--end::User-->
								</div>
								<!--end::Description-->
							</div>
							<!--end::Timeline heading-->
							<!--begin::Timeline details-->
							<div class="overflow-auto pb-5">
								<!--begin::Notice-->
								<div class="notice d-flex bg-light-primary rounded border-primary border border-dashed min-w-lg-600px flex-shrink-0 p-6">
									<!--begin::Icon-->
									<i class="ki-duotone ki-devices-2 fs-2tx text-primary me-4">
										<span class="path1"></span>
										<span class="path2"></span>
										<span class="path3"></span>
									</i>
									<!--end::Icon-->
									<!--begin::Wrapper-->
									<div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
										<!--begin::Content-->
										<div class="mb-3 mb-md-0 fw-semibold">
											<h4 class="text-gray-900 fw-bold">Database Backup Process Completed!</h4>
											<div class="fs-6 text-gray-700 pe-7">Login into Admin Dashboard to make sure the data integrity is OK</div>
										</div>
										<!--end::Content-->
										<!--begin::Action-->
										<a href="#" class="btn btn-primary px-6 align-self-center text-nowrap">Proceed</a>
										<!--end::Action-->
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Notice-->
							</div>
							<!--end::Timeline details-->
						</div>
						<!--end::Timeline content-->
					</div>
					<!--end::Timeline item-->
					<!--begin::Timeline item-->
					<div class="timeline-item">
						<!--begin::Timeline line-->
						<div class="timeline-line"></div>
						<!--end::Timeline line-->
						<!--begin::Timeline icon-->
						<div class="timeline-icon">
							<i class="ki-duotone ki-basket fs-2 text-gray-500">
								<span class="path1"></span>
								<span class="path2"></span>
								<span class="path3"></span>
								<span class="path4"></span>
							</i>
						</div>
						<!--end::Timeline icon-->
						<!--begin::Timeline content-->
						<div class="timeline-content mt-n1">
							<!--begin::Timeline heading-->
							<div class="pe-3 mb-5">
								<!--begin::Title-->
								<div class="fs-5 fw-semibold mb-2">New order
									<a href="#" class="text-primary fw-bold me-1">#67890</a>is placed for Workshow Planning & Budget Estimation
								</div>
								<!--end::Title-->
								<!--begin::Description-->
								<div class="d-flex align-items-center mt-1 fs-6">
									<!--begin::Info-->
									<div class="text-muted me-2 fs-7">Placed at 4:23 PM by</div>
									<!--end::Info-->
									<!--begin::User-->
									<a href="#" class="text-primary fw-bold me-1">Jimmy Bold</a>
									<!--end::User-->
								</div>
								<!--end::Description-->
							</div>
							<!--end::Timeline heading-->
						</div>
						<!--end::Timeline content-->
					</div>
					<!--end::Timeline item-->
				</div>
				<!--end::Timeline items-->
			</div>
			<!--end::Content-->
		</div>
		<!--end::Body-->
		<!--begin::Footer-->
		<div class="card-footer py-5 text-center" id="kt_activities_footer">
			<a href="pages/user-profile/activity.html" class="btn btn-bg-body text-primary">View All Activities
				<i class="ki-duotone ki-arrow-right fs-3 text-primary">
					<span class="path1"></span>
					<span class="path2"></span>
				</i></a>
		</div>
		<!--end::Footer-->
	</div>
</div>
<!--end::Activities drawer-->
<!--begin::Chat drawer-->
<div id="kt_drawer_chat" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="chat" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'300px', 'md': '500px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_drawer_chat_toggle" data-kt-drawer-close="#kt_drawer_chat_close">
	<!--begin::Messenger-->
	<div class="card w-100 border-0 rounded-0" id="kt_drawer_chat_messenger">
		<!--begin::Card header-->
		<div class="card-header pe-5" id="kt_drawer_chat_messenger_header">
			<!--begin::Title-->
			<div class="card-title">
				<!--begin::User-->
				<div class="d-flex justify-content-center flex-column me-3">
					<a href="#" class="fs-4 fw-bold text-gray-900 text-hover-primary me-1 mb-2 lh-1">Brian Cox</a>
					<!--begin::Info-->
					<div class="mb-0 lh-1">
						<span class="badge badge-success badge-circle w-10px h-10px me-1"></span>
						<span class="fs-7 fw-semibold text-muted">Active</span>
					</div>
					<!--end::Info-->
				</div>
				<!--end::User-->
			</div>
			<!--end::Title-->
			<!--begin::Card toolbar-->
			<div class="card-toolbar">
				<!--begin::Menu-->
				<div class="me-0">
					<button class="btn btn-sm btn-icon btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
						<i class="ki-duotone ki-dots-square fs-2">
							<span class="path1"></span>
							<span class="path2"></span>
							<span class="path3"></span>
							<span class="path4"></span>
						</i>
					</button>
					<!--begin::Menu 3-->
					<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
						<!--begin::Heading-->
						<div class="menu-item px-3">
							<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Contacts</div>
						</div>
						<!--end::Heading-->
						<!--begin::Menu item-->
						<div class="menu-item px-3">
							<a href="#" class="menu-link px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_users_search">Add Contact</a>
						</div>
						<!--end::Menu item-->
						<!--begin::Menu item-->
						<div class="menu-item px-3">
							<a href="#" class="menu-link flex-stack px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">Invite Contacts
								<span class="ms-2" data-bs-toggle="tooltip" title="Specify a contact email to send an invitation">
									<i class="ki-duotone ki-information fs-7">
										<span class="path1"></span>
										<span class="path2"></span>
										<span class="path3"></span>
									</i>
								</span></a>
						</div>
						<!--end::Menu item-->
						<!--begin::Menu item-->
						<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
							<a href="#" class="menu-link px-3">
								<span class="menu-title">Groups</span>
								<span class="menu-arrow"></span>
							</a>
							<!--begin::Menu sub-->
							<div class="menu-sub menu-sub-dropdown w-175px py-4">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">Create Group</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">Invite Members</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">Settings</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu sub-->
						</div>
						<!--end::Menu item-->
						<!--begin::Menu item-->
						<div class="menu-item px-3 my-1">
							<a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">Settings</a>
						</div>
						<!--end::Menu item-->
					</div>
					<!--end::Menu 3-->
				</div>
				<!--end::Menu-->
				<!--begin::Close-->
				<div class="btn btn-sm btn-icon btn-active-color-primary" id="kt_drawer_chat_close">
					<i class="ki-duotone ki-cross-square fs-2">
						<span class="path1"></span>
						<span class="path2"></span>
					</i>
				</div>
				<!--end::Close-->
			</div>
			<!--end::Card toolbar-->
		</div>
		<!--end::Card header-->
		<!--begin::Card body-->
		<div class="card-body" id="kt_drawer_chat_messenger_body">
			<!--begin::Messages-->
			<div class="scroll-y me-n5 pe-5" data-kt-element="messages" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_drawer_chat_messenger_header, #kt_drawer_chat_messenger_footer" data-kt-scroll-wrappers="#kt_drawer_chat_messenger_body" data-kt-scroll-offset="0px">
				<!--begin::Message(in)-->
				<div class="d-flex justify-content-start mb-10">
					<!--begin::Wrapper-->
					<div class="d-flex flex-column align-items-start">
						<!--begin::User-->
						<div class="d-flex align-items-center mb-2">
							<!--begin::Avatar-->
							<div class="symbol symbol-35px symbol-circle">
								<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
							</div>
							<!--end::Avatar-->
							<!--begin::Details-->
							<div class="ms-3">
								<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
								<span class="text-muted fs-7 mb-1">2 mins</span>
							</div>
							<!--end::Details-->
						</div>
						<!--end::User-->
						<!--begin::Text-->
						<div class="p-5 rounded bg-light-info text-gray-900 fw-semibold mw-lg-400px text-start" data-kt-element="message-text">How likely are you to recommend our company to your friends and family ?</div>
						<!--end::Text-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Message(in)-->
				<!--begin::Message(out)-->
				<div class="d-flex justify-content-end mb-10">
					<!--begin::Wrapper-->
					<div class="d-flex flex-column align-items-end">
						<!--begin::User-->
						<div class="d-flex align-items-center mb-2">
							<!--begin::Details-->
							<div class="me-3">
								<span class="text-muted fs-7 mb-1">5 mins</span>
								<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
							</div>
							<!--end::Details-->
							<!--begin::Avatar-->
							<div class="symbol symbol-35px symbol-circle">
								<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
							</div>
							<!--end::Avatar-->
						</div>
						<!--end::User-->
						<!--begin::Text-->
						<div class="p-5 rounded bg-light-primary text-gray-900 fw-semibold mw-lg-400px text-end" data-kt-element="message-text">Hey there, we’re just writing to let you know that you’ve been subscribed to a repository on GitHub.</div>
						<!--end::Text-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Message(out)-->
				<!--begin::Message(in)-->
				<div class="d-flex justify-content-start mb-10">
					<!--begin::Wrapper-->
					<div class="d-flex flex-column align-items-start">
						<!--begin::User-->
						<div class="d-flex align-items-center mb-2">
							<!--begin::Avatar-->
							<div class="symbol symbol-35px symbol-circle">
								<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
							</div>
							<!--end::Avatar-->
							<!--begin::Details-->
							<div class="ms-3">
								<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
								<span class="text-muted fs-7 mb-1">1 Hour</span>
							</div>
							<!--end::Details-->
						</div>
						<!--end::User-->
						<!--begin::Text-->
						<div class="p-5 rounded bg-light-info text-gray-900 fw-semibold mw-lg-400px text-start" data-kt-element="message-text">Ok, Understood!</div>
						<!--end::Text-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Message(in)-->
				<!--begin::Message(out)-->
				<div class="d-flex justify-content-end mb-10">
					<!--begin::Wrapper-->
					<div class="d-flex flex-column align-items-end">
						<!--begin::User-->
						<div class="d-flex align-items-center mb-2">
							<!--begin::Details-->
							<div class="me-3">
								<span class="text-muted fs-7 mb-1">2 Hours</span>
								<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
							</div>
							<!--end::Details-->
							<!--begin::Avatar-->
							<div class="symbol symbol-35px symbol-circle">
								<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
							</div>
							<!--end::Avatar-->
						</div>
						<!--end::User-->
						<!--begin::Text-->
						<div class="p-5 rounded bg-light-primary text-gray-900 fw-semibold mw-lg-400px text-end" data-kt-element="message-text">You’ll receive notifications for all issues, pull requests!</div>
						<!--end::Text-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Message(out)-->
				<!--begin::Message(in)-->
				<div class="d-flex justify-content-start mb-10">
					<!--begin::Wrapper-->
					<div class="d-flex flex-column align-items-start">
						<!--begin::User-->
						<div class="d-flex align-items-center mb-2">
							<!--begin::Avatar-->
							<div class="symbol symbol-35px symbol-circle">
								<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
							</div>
							<!--end::Avatar-->
							<!--begin::Details-->
							<div class="ms-3">
								<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
								<span class="text-muted fs-7 mb-1">3 Hours</span>
							</div>
							<!--end::Details-->
						</div>
						<!--end::User-->
						<!--begin::Text-->
						<div class="p-5 rounded bg-light-info text-gray-900 fw-semibold mw-lg-400px text-start" data-kt-element="message-text">You can unwatch this repository immediately by clicking here:
							<a href="https://keenthemes.com">Keenthemes.com</a>
						</div>
						<!--end::Text-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Message(in)-->
				<!--begin::Message(out)-->
				<div class="d-flex justify-content-end mb-10">
					<!--begin::Wrapper-->
					<div class="d-flex flex-column align-items-end">
						<!--begin::User-->
						<div class="d-flex align-items-center mb-2">
							<!--begin::Details-->
							<div class="me-3">
								<span class="text-muted fs-7 mb-1">4 Hours</span>
								<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
							</div>
							<!--end::Details-->
							<!--begin::Avatar-->
							<div class="symbol symbol-35px symbol-circle">
								<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
							</div>
							<!--end::Avatar-->
						</div>
						<!--end::User-->
						<!--begin::Text-->
						<div class="p-5 rounded bg-light-primary text-gray-900 fw-semibold mw-lg-400px text-end" data-kt-element="message-text">Most purchased Business courses during this sale!</div>
						<!--end::Text-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Message(out)-->
				<!--begin::Message(in)-->
				<div class="d-flex justify-content-start mb-10">
					<!--begin::Wrapper-->
					<div class="d-flex flex-column align-items-start">
						<!--begin::User-->
						<div class="d-flex align-items-center mb-2">
							<!--begin::Avatar-->
							<div class="symbol symbol-35px symbol-circle">
								<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
							</div>
							<!--end::Avatar-->
							<!--begin::Details-->
							<div class="ms-3">
								<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
								<span class="text-muted fs-7 mb-1">5 Hours</span>
							</div>
							<!--end::Details-->
						</div>
						<!--end::User-->
						<!--begin::Text-->
						<div class="p-5 rounded bg-light-info text-gray-900 fw-semibold mw-lg-400px text-start" data-kt-element="message-text">Company BBQ to celebrate the last quater achievements and goals. Food and drinks provided</div>
						<!--end::Text-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Message(in)-->
				<!--begin::Message(template for out)-->
				<div class="d-flex justify-content-end mb-10 d-none" data-kt-element="template-out">
					<!--begin::Wrapper-->
					<div class="d-flex flex-column align-items-end">
						<!--begin::User-->
						<div class="d-flex align-items-center mb-2">
							<!--begin::Details-->
							<div class="me-3">
								<span class="text-muted fs-7 mb-1">Just now</span>
								<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
							</div>
							<!--end::Details-->
							<!--begin::Avatar-->
							<div class="symbol symbol-35px symbol-circle">
								<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
							</div>
							<!--end::Avatar-->
						</div>
						<!--end::User-->
						<!--begin::Text-->
						<div class="p-5 rounded bg-light-primary text-gray-900 fw-semibold mw-lg-400px text-end" data-kt-element="message-text"></div>
						<!--end::Text-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Message(template for out)-->
				<!--begin::Message(template for in)-->
				<div class="d-flex justify-content-start mb-10 d-none" data-kt-element="template-in">
					<!--begin::Wrapper-->
					<div class="d-flex flex-column align-items-start">
						<!--begin::User-->
						<div class="d-flex align-items-center mb-2">
							<!--begin::Avatar-->
							<div class="symbol symbol-35px symbol-circle">
								<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
							</div>
							<!--end::Avatar-->
							<!--begin::Details-->
							<div class="ms-3">
								<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
								<span class="text-muted fs-7 mb-1">Just now</span>
							</div>
							<!--end::Details-->
						</div>
						<!--end::User-->
						<!--begin::Text-->
						<div class="p-5 rounded bg-light-info text-gray-900 fw-semibold mw-lg-400px text-start" data-kt-element="message-text">Right before vacation season we have the next Big Deal for you.</div>
						<!--end::Text-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Message(template for in)-->
			</div>
			<!--end::Messages-->
		</div>
		<!--end::Card body-->
		<!--begin::Card footer-->
		<div class="card-footer pt-4" id="kt_drawer_chat_messenger_footer">
			<!--begin::Input-->
			<textarea class="form-control form-control-flush mb-3" rows="1" data-kt-element="input" placeholder="Type a message"></textarea>
			<!--end::Input-->
			<!--begin:Toolbar-->
			<div class="d-flex flex-stack">
				<!--begin::Actions-->
				<div class="d-flex align-items-center me-2">
					<button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button" data-bs-toggle="tooltip" title="Coming soon">
						<i class="ki-duotone ki-paper-clip fs-3"></i>
					</button>
					<button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button" data-bs-toggle="tooltip" title="Coming soon">
						<i class="ki-duotone ki-cloud-add fs-3">
							<span class="path1"></span>
							<span class="path2"></span>
						</i>
					</button>
				</div>
				<!--end::Actions-->
				<!--begin::Send-->
				<button class="btn btn-primary" type="button" data-kt-element="send">Send</button>
				<!--end::Send-->
			</div>
			<!--end::Toolbar-->
		</div>
		<!--end::Card footer-->
	</div>
	<!--end::Messenger-->
</div>
<!--end::Chat drawer-->
<!--begin::Chat drawer-->
<div id="kt_shopping_cart" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="cart" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'300px', 'md': '500px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_drawer_shopping_cart_toggle" data-kt-drawer-close="#kt_drawer_shopping_cart_close">
	<!--begin::Messenger-->
	<div class="card card-flush w-100 rounded-0">
		<!--begin::Card header-->
		<div class="card-header">
			<!--begin::Title-->
			<h3 class="card-title text-gray-900 fw-bold">Shopping Cart</h3>
			<!--end::Title-->
			<!--begin::Card toolbar-->
			<div class="card-toolbar">
				<!--begin::Close-->
				<div class="btn btn-sm btn-icon btn-active-light-primary" id="kt_drawer_shopping_cart_close">
					<i class="ki-duotone ki-cross fs-2">
						<span class="path1"></span>
						<span class="path2"></span>
					</i>
				</div>
				<!--end::Close-->
			</div>
			<!--end::Card toolbar-->
		</div>
		<!--end::Card header-->
		<!--begin::Card body-->
		<div class="card-body hover-scroll-overlay-y h-400px pt-5">
			<!--begin::Item-->
			<div class="d-flex flex-stack">
				<!--begin::Wrapper-->
				<div class="d-flex flex-column me-3">
					<!--begin::Section-->
					<div class="mb-3">
						<a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">Iblender</a>
						<span class="text-gray-500 fw-semibold d-block">The best kitchen gadget in 2022</span>
					</div>
					<!--end::Section-->
					<!--begin::Section-->
					<div class="d-flex align-items-center">
						<span class="fw-bold text-gray-800 fs-5">$ 350</span>
						<span class="text-muted mx-2">for</span>
						<span class="fw-bold text-gray-800 fs-5 me-3">5</span>
						<a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
							<i class="ki-duotone ki-minus fs-4"></i>
						</a>
						<a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
							<i class="ki-duotone ki-plus fs-4"></i>
						</a>
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Wrapper-->
				<!--begin::Pic-->
				<div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
					<img src="assets/media/stock/600x400/img-1.jpg" alt="" />
				</div>
				<!--end::Pic-->
			</div>
			<!--end::Item-->
			<!--begin::Separator-->
			<div class="separator separator-dashed my-6"></div>
			<!--end::Separator-->
			<!--begin::Item-->
			<div class="d-flex flex-stack">
				<!--begin::Wrapper-->
				<div class="d-flex flex-column me-3">
					<!--begin::Section-->
					<div class="mb-3">
						<a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">SmartCleaner</a>
						<span class="text-gray-500 fw-semibold d-block">Smart tool for cooking</span>
					</div>
					<!--end::Section-->
					<!--begin::Section-->
					<div class="d-flex align-items-center">
						<span class="fw-bold text-gray-800 fs-5">$ 650</span>
						<span class="text-muted mx-2">for</span>
						<span class="fw-bold text-gray-800 fs-5 me-3">4</span>
						<a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
							<i class="ki-duotone ki-minus fs-4"></i>
						</a>
						<a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
							<i class="ki-duotone ki-plus fs-4"></i>
						</a>
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Wrapper-->
				<!--begin::Pic-->
				<div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
					<img src="assets/media/stock/600x400/img-3.jpg" alt="" />
				</div>
				<!--end::Pic-->
			</div>
			<!--end::Item-->
			<!--begin::Separator-->
			<div class="separator separator-dashed my-6"></div>
			<!--end::Separator-->
			<!--begin::Item-->
			<div class="d-flex flex-stack">
				<!--begin::Wrapper-->
				<div class="d-flex flex-column me-3">
					<!--begin::Section-->
					<div class="mb-3">
						<a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">CameraMaxr</a>
						<span class="text-gray-500 fw-semibold d-block">Professional camera for edge</span>
					</div>
					<!--end::Section-->
					<!--begin::Section-->
					<div class="d-flex align-items-center">
						<span class="fw-bold text-gray-800 fs-5">$ 150</span>
						<span class="text-muted mx-2">for</span>
						<span class="fw-bold text-gray-800 fs-5 me-3">3</span>
						<a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
							<i class="ki-duotone ki-minus fs-4"></i>
						</a>
						<a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
							<i class="ki-duotone ki-plus fs-4"></i>
						</a>
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Wrapper-->
				<!--begin::Pic-->
				<div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
					<img src="assets/media/stock/600x400/img-8.jpg" alt="" />
				</div>
				<!--end::Pic-->
			</div>
			<!--end::Item-->
			<!--begin::Separator-->
			<div class="separator separator-dashed my-6"></div>
			<!--end::Separator-->
			<!--begin::Item-->
			<div class="d-flex flex-stack">
				<!--begin::Wrapper-->
				<div class="d-flex flex-column me-3">
					<!--begin::Section-->
					<div class="mb-3">
						<a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">$D Printer</a>
						<span class="text-gray-500 fw-semibold d-block">Manfactoring unique objekts</span>
					</div>
					<!--end::Section-->
					<!--begin::Section-->
					<div class="d-flex align-items-center">
						<span class="fw-bold text-gray-800 fs-5">$ 1450</span>
						<span class="text-muted mx-2">for</span>
						<span class="fw-bold text-gray-800 fs-5 me-3">7</span>
						<a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
							<i class="ki-duotone ki-minus fs-4"></i>
						</a>
						<a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
							<i class="ki-duotone ki-plus fs-4"></i>
						</a>
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Wrapper-->
				<!--begin::Pic-->
				<div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
					<img src="assets/media/stock/600x400/img-26.jpg" alt="" />
				</div>
				<!--end::Pic-->
			</div>
			<!--end::Item-->
			<!--begin::Separator-->
			<div class="separator separator-dashed my-6"></div>
			<!--end::Separator-->
			<!--begin::Item-->
			<div class="d-flex flex-stack">
				<!--begin::Wrapper-->
				<div class="d-flex flex-column me-3">
					<!--begin::Section-->
					<div class="mb-3">
						<a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">MotionWire</a>
						<span class="text-gray-500 fw-semibold d-block">Perfect animation tool</span>
					</div>
					<!--end::Section-->
					<!--begin::Section-->
					<div class="d-flex align-items-center">
						<span class="fw-bold text-gray-800 fs-5">$ 650</span>
						<span class="text-muted mx-2">for</span>
						<span class="fw-bold text-gray-800 fs-5 me-3">7</span>
						<a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
							<i class="ki-duotone ki-minus fs-4"></i>
						</a>
						<a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
							<i class="ki-duotone ki-plus fs-4"></i>
						</a>
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Wrapper-->
				<!--begin::Pic-->
				<div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
					<img src="assets/media/stock/600x400/img-21.jpg" alt="" />
				</div>
				<!--end::Pic-->
			</div>
			<!--end::Item-->
			<!--begin::Separator-->
			<div class="separator separator-dashed my-6"></div>
			<!--end::Separator-->
			<!--begin::Item-->
			<div class="d-flex flex-stack">
				<!--begin::Wrapper-->
				<div class="d-flex flex-column me-3">
					<!--begin::Section-->
					<div class="mb-3">
						<a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">Samsung</a>
						<span class="text-gray-500 fw-semibold d-block">Profile info,Timeline etc</span>
					</div>
					<!--end::Section-->
					<!--begin::Section-->
					<div class="d-flex align-items-center">
						<span class="fw-bold text-gray-800 fs-5">$ 720</span>
						<span class="text-muted mx-2">for</span>
						<span class="fw-bold text-gray-800 fs-5 me-3">6</span>
						<a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
							<i class="ki-duotone ki-minus fs-4"></i>
						</a>
						<a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
							<i class="ki-duotone ki-plus fs-4"></i>
						</a>
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Wrapper-->
				<!--begin::Pic-->
				<div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
					<img src="assets/media/stock/600x400/img-34.jpg" alt="" />
				</div>
				<!--end::Pic-->
			</div>
			<!--end::Item-->
			<!--begin::Separator-->
			<div class="separator separator-dashed my-6"></div>
			<!--end::Separator-->
			<!--begin::Item-->
			<div class="d-flex flex-stack">
				<!--begin::Wrapper-->
				<div class="d-flex flex-column me-3">
					<!--begin::Section-->
					<div class="mb-3">
						<a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">$D Printer</a>
						<span class="text-gray-500 fw-semibold d-block">Manfactoring unique objekts</span>
					</div>
					<!--end::Section-->
					<!--begin::Section-->
					<div class="d-flex align-items-center">
						<span class="fw-bold text-gray-800 fs-5">$ 430</span>
						<span class="text-muted mx-2">for</span>
						<span class="fw-bold text-gray-800 fs-5 me-3">8</span>
						<a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
							<i class="ki-duotone ki-minus fs-4"></i>
						</a>
						<a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
							<i class="ki-duotone ki-plus fs-4"></i>
						</a>
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Wrapper-->
				<!--begin::Pic-->
				<div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
					<img src="assets/media/stock/600x400/img-27.jpg" alt="" />
				</div>
				<!--end::Pic-->
			</div>
			<!--end::Item-->
		</div>
		<!--end::Card body-->
		<!--begin::Card footer-->
		<div class="card-footer">
			<!--begin::Item-->
			<div class="d-flex flex-stack">
				<span class="fw-bold text-gray-600">Total</span>
				<span class="text-gray-800 fw-bolder fs-5">$ 1840.00</span>
			</div>
			<!--end::Item-->
			<!--begin::Item-->
			<div class="d-flex flex-stack">
				<span class="fw-bold text-gray-600">Sub total</span>
				<span class="text-primary fw-bolder fs-5">$ 246.35</span>
			</div>
			<!--end::Item-->
			<!--end::Action-->
			<div class="d-flex justify-content-end mt-9">
				<a href="#" class="btn btn-primary d-flex justify-content-end">Pleace Order</a>
			</div>
			<!--end::Action-->
		</div>
		<!--end::Card footer-->
	</div>
	<!--end::Messenger-->
</div>
<!--end::Chat drawer-->
<!--end::Drawers-->
<!--begin::Scrolltop-->
<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
	<i class="ki-duotone ki-arrow-up">
		<span class="path1"></span>
		<span class="path2"></span>
	</i>
</div>
<!--end::Scrolltop-->
<!--begin::Modals-->
<!--begin::Modal - Upgrade plan-->
<div class="modal fade" id="kt_modal_upgrade_plan" tabindex="-1" aria-hidden="true">
	<!--begin::Modal dialog-->
	<div class="modal-dialog modal-xl">
		<!--begin::Modal content-->
		<div class="modal-content rounded">
			<!--begin::Modal header-->
			<div class="modal-header justify-content-end border-0 pb-0">
				<!--begin::Close-->
				<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
					<i class="ki-duotone ki-cross fs-1">
						<span class="path1"></span>
						<span class="path2"></span>
					</i>
				</div>
				<!--end::Close-->
			</div>
			<!--end::Modal header-->
			<!--begin::Modal body-->
			<div class="modal-body pt-0 pb-15 px-5 px-xl-20">
				<!--begin::Heading-->
				<div class="mb-13 text-center">
					<h1 class="mb-3">Upgrade a Plan</h1>
					<div class="text-muted fw-semibold fs-5">If you need more info, please check
						<a href="#" class="link-primary fw-bold">Pricing Guidelines</a>.
					</div>
				</div>
				<!--end::Heading-->
				<!--begin::Plans-->
				<div class="d-flex flex-column">
					<!--begin::Nav group-->
					<div class="nav-group nav-group-outline mx-auto" data-kt-buttons="true">
						<button class="btn btn-color-gray-500 btn-active btn-active-secondary px-6 py-3 me-2 active" data-kt-plan="month">Monthly</button>
						<button class="btn btn-color-gray-500 btn-active btn-active-secondary px-6 py-3" data-kt-plan="annual">Annual</button>
					</div>
					<!--end::Nav group-->
					<!--begin::Row-->
					<div class="row mt-10">
						<!--begin::Col-->
						<div class="col-lg-6 mb-10 mb-lg-0">
							<!--begin::Tabs-->
							<div class="nav flex-column">
								<!--begin::Tab link-->
								<label class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 active mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_startup">
									<!--end::Description-->
									<div class="d-flex align-items-center me-2">
										<!--begin::Radio-->
										<div class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
											<input class="form-check-input" type="radio" name="plan" checked="checked" value="startup" />
										</div>
										<!--end::Radio-->
										<!--begin::Info-->
										<div class="flex-grow-1">
											<div class="d-flex align-items-center fs-2 fw-bold flex-wrap">Startup</div>
											<div class="fw-semibold opacity-75">Best for startups</div>
										</div>
										<!--end::Info-->
									</div>
									<!--end::Description-->
									<!--begin::Price-->
									<div class="ms-5">
										<span class="mb-2">$</span>
										<span class="fs-3x fw-bold" data-kt-plan-price-month="39" data-kt-plan-price-annual="399">39</span>
										<span class="fs-7 opacity-50">/
											<span data-kt-element="period">Mon</span></span>
									</div>
									<!--end::Price-->
								</label>
								<!--end::Tab link-->
								<!--begin::Tab link-->
								<label class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_advanced">
									<!--end::Description-->
									<div class="d-flex align-items-center me-2">
										<!--begin::Radio-->
										<div class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
											<input class="form-check-input" type="radio" name="plan" value="advanced" />
										</div>
										<!--end::Radio-->
										<!--begin::Info-->
										<div class="flex-grow-1">
											<div class="d-flex align-items-center fs-2 fw-bold flex-wrap">Advanced</div>
											<div class="fw-semibold opacity-75">Best for 100+ team size</div>
										</div>
										<!--end::Info-->
									</div>
									<!--end::Description-->
									<!--begin::Price-->
									<div class="ms-5">
										<span class="mb-2">$</span>
										<span class="fs-3x fw-bold" data-kt-plan-price-month="339" data-kt-plan-price-annual="3399">339</span>
										<span class="fs-7 opacity-50">/
											<span data-kt-element="period">Mon</span></span>
									</div>
									<!--end::Price-->
								</label>
								<!--end::Tab link-->
								<!--begin::Tab link-->
								<label class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_enterprise">
									<!--end::Description-->
									<div class="d-flex align-items-center me-2">
										<!--begin::Radio-->
										<div class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
											<input class="form-check-input" type="radio" name="plan" value="enterprise" />
										</div>
										<!--end::Radio-->
										<!--begin::Info-->
										<div class="flex-grow-1">
											<div class="d-flex align-items-center fs-2 fw-bold flex-wrap">Enterprise
												<span class="badge badge-light-success ms-2 py-2 px-3 fs-7">Popular</span>
											</div>
											<div class="fw-semibold opacity-75">Best value for 1000+ team</div>
										</div>
										<!--end::Info-->
									</div>
									<!--end::Description-->
									<!--begin::Price-->
									<div class="ms-5">
										<span class="mb-2">$</span>
										<span class="fs-3x fw-bold" data-kt-plan-price-month="999" data-kt-plan-price-annual="9999">999</span>
										<span class="fs-7 opacity-50">/
											<span data-kt-element="period">Mon</span></span>
									</div>
									<!--end::Price-->
								</label>
								<!--end::Tab link-->
								<!--begin::Tab link-->
								<label class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_custom">
									<!--end::Description-->
									<div class="d-flex align-items-center me-2">
										<!--begin::Radio-->
										<div class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
											<input class="form-check-input" type="radio" name="plan" value="custom" />
										</div>
										<!--end::Radio-->
										<!--begin::Info-->
										<div class="flex-grow-1">
											<div class="d-flex align-items-center fs-2 fw-bold flex-wrap">Custom</div>
											<div class="fw-semibold opacity-75">Requet a custom license</div>
										</div>
										<!--end::Info-->
									</div>
									<!--end::Description-->
									<!--begin::Price-->
									<div class="ms-5">
										<a href="#" class="btn btn-sm btn-success">Contact Us</a>
									</div>
									<!--end::Price-->
								</label>
								<!--end::Tab link-->
							</div>
							<!--end::Tabs-->
						</div>
						<!--end::Col-->
						<!--begin::Col-->
						<div class="col-lg-6">
							<!--begin::Tab content-->
							<div class="tab-content rounded h-100 bg-light p-10">
								<!--begin::Tab Pane-->
								<div class="tab-pane fade show active" id="kt_upgrade_plan_startup">
									<!--begin::Heading-->
									<div class="pb-5">
										<h2 class="fw-bold text-gray-900">What’s in Startup Plan?</h2>
										<div class="text-muted fw-semibold">Optimal for 10+ team size and new startup</div>
									</div>
									<!--end::Heading-->
									<!--begin::Body-->
									<div class="pt-1">
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
											<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 10 Active Users</span>
											<i class="ki-duotone ki-check-circle fs-1 text-success">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
											<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 30 Project Integrations</span>
											<i class="ki-duotone ki-check-circle fs-1 text-success">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
											<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Analytics Module</span>
											<i class="ki-duotone ki-check-circle fs-1 text-success">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
											<span class="fw-semibold fs-5 text-muted flex-grow-1">Finance Module</span>
											<i class="ki-duotone ki-cross-circle fs-1">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
											<span class="fw-semibold fs-5 text-muted flex-grow-1">Accounting Module</span>
											<i class="ki-duotone ki-cross-circle fs-1">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
											<span class="fw-semibold fs-5 text-muted flex-grow-1">Network Platform</span>
											<i class="ki-duotone ki-cross-circle fs-1">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center">
											<span class="fw-semibold fs-5 text-muted flex-grow-1">Unlimited Cloud Space</span>
											<i class="ki-duotone ki-cross-circle fs-1">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</div>
										<!--end::Item-->
									</div>
									<!--end::Body-->
								</div>
								<!--end::Tab Pane-->
								<!--begin::Tab Pane-->
								<div class="tab-pane fade" id="kt_upgrade_plan_advanced">
									<!--begin::Heading-->
									<div class="pb-5">
										<h2 class="fw-bold text-gray-900">What’s in Startup Plan?</h2>
										<div class="text-muted fw-semibold">Optimal for 100+ team size and grown company</div>
									</div>
									<!--end::Heading-->
									<!--begin::Body-->
									<div class="pt-1">
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
											<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 10 Active Users</span>
											<i class="ki-duotone ki-check-circle fs-1 text-success">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
											<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 30 Project Integrations</span>
											<i class="ki-duotone ki-check-circle fs-1 text-success">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
											<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Analytics Module</span>
											<i class="ki-duotone ki-check-circle fs-1 text-success">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
											<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Finance Module</span>
											<i class="ki-duotone ki-check-circle fs-1 text-success">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
											<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Accounting Module</span>
											<i class="ki-duotone ki-check-circle fs-1 text-success">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
											<span class="fw-semibold fs-5 text-muted flex-grow-1">Network Platform</span>
											<i class="ki-duotone ki-cross-circle fs-1">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center">
											<span class="fw-semibold fs-5 text-muted flex-grow-1">Unlimited Cloud Space</span>
											<i class="ki-duotone ki-cross-circle fs-1">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</div>
										<!--end::Item-->
									</div>
									<!--end::Body-->
								</div>
								<!--end::Tab Pane-->
								<!--begin::Tab Pane-->
								<div class="tab-pane fade" id="kt_upgrade_plan_enterprise">
									<!--begin::Heading-->
									<div class="pb-5">
										<h2 class="fw-bold text-gray-900">What’s in Startup Plan?</h2>
										<div class="text-muted fw-semibold">Optimal for 1000+ team and enterpise</div>
									</div>
									<!--end::Heading-->
									<!--begin::Body-->
									<div class="pt-1">
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
											<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 10 Active Users</span>
											<i class="ki-duotone ki-check-circle fs-1 text-success">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
											<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 30 Project Integrations</span>
											<i class="ki-duotone ki-check-circle fs-1 text-success">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
											<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Analytics Module</span>
											<i class="ki-duotone ki-check-circle fs-1 text-success">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
											<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Finance Module</span>
											<i class="ki-duotone ki-check-circle fs-1 text-success">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
											<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Accounting Module</span>
											<i class="ki-duotone ki-check-circle fs-1 text-success">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
											<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Network Platform</span>
											<i class="ki-duotone ki-check-circle fs-1 text-success">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center">
											<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Unlimited Cloud Space</span>
											<i class="ki-duotone ki-check-circle fs-1 text-success">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</div>
										<!--end::Item-->
									</div>
									<!--end::Body-->
								</div>
								<!--end::Tab Pane-->
								<!--begin::Tab Pane-->
								<div class="tab-pane fade" id="kt_upgrade_plan_custom">
									<!--begin::Heading-->
									<div class="pb-5">
										<h2 class="fw-bold text-gray-900">What’s in Startup Plan?</h2>
										<div class="text-muted fw-semibold">Optimal for corporations</div>
									</div>
									<!--end::Heading-->
									<!--begin::Body-->
									<div class="pt-1">
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
											<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Unlimited Users</span>
											<i class="ki-duotone ki-check-circle fs-1 text-success">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
											<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Unlimited Project Integrations</span>
											<i class="ki-duotone ki-check-circle fs-1 text-success">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
											<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Analytics Module</span>
											<i class="ki-duotone ki-check-circle fs-1 text-success">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
											<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Finance Module</span>
											<i class="ki-duotone ki-check-circle fs-1 text-success">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
											<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Accounting Module</span>
											<i class="ki-duotone ki-check-circle fs-1 text-success">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
											<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Network Platform</span>
											<i class="ki-duotone ki-check-circle fs-1 text-success">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center">
											<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Unlimited Cloud Space</span>
											<i class="ki-duotone ki-check-circle fs-1 text-success">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</div>
										<!--end::Item-->
									</div>
									<!--end::Body-->
								</div>
								<!--end::Tab Pane-->
							</div>
							<!--end::Tab content-->
						</div>
						<!--end::Col-->
					</div>
					<!--end::Row-->
				</div>
				<!--end::Plans-->
				<!--begin::Actions-->
				<div class="d-flex flex-center flex-row-fluid pt-12">
					<button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</button>
					<button type="submit" class="btn btn-primary" id="kt_modal_upgrade_plan_btn">
						<!--begin::Indicator label-->
						<span class="indicator-label">Upgrade Plan</span>
						<!--end::Indicator label-->
						<!--begin::Indicator progress-->
						<span class="indicator-progress">Please wait...
							<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
						<!--end::Indicator progress-->
					</button>
				</div>
				<!--end::Actions-->
			</div>
			<!--end::Modal body-->
		</div>
		<!--end::Modal content-->
	</div>
	<!--end::Modal dialog-->
</div>
<!--end::Modal - Upgrade plan-->
<!--begin::Modal - Create App-->
<div class="modal fade" id="kt_modal_create_app" tabindex="-1" aria-hidden="true">
	<!--begin::Modal dialog-->
	<div class="modal-dialog modal-dialog-centered mw-900px">
		<!--begin::Modal content-->
		<div class="modal-content">
			<!--begin::Modal header-->
			<div class="modal-header">
				<!--begin::Modal title-->
				<h2>Create App</h2>
				<!--end::Modal title-->
				<!--begin::Close-->
				<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
					<i class="ki-duotone ki-cross fs-1">
						<span class="path1"></span>
						<span class="path2"></span>
					</i>
				</div>
				<!--end::Close-->
			</div>
			<!--end::Modal header-->
			<!--begin::Modal body-->
			<div class="modal-body py-lg-10 px-lg-10">
				<!--begin::Stepper-->
				<div class="stepper stepper-pills stepper-column d-flex flex-column flex-xl-row flex-row-fluid" id="kt_modal_create_app_stepper">
					<!--begin::Aside-->
					<div class="d-flex justify-content-center justify-content-xl-start flex-row-auto w-100 w-xl-300px">
						<!--begin::Nav-->
						<div class="stepper-nav ps-lg-10">
							<!--begin::Step 1-->
							<div class="stepper-item current" data-kt-stepper-element="nav">
								<!--begin::Wrapper-->
								<div class="stepper-wrapper">
									<!--begin::Icon-->
									<div class="stepper-icon w-40px h-40px">
										<i class="ki-duotone ki-check stepper-check fs-2"></i>
										<span class="stepper-number">1</span>
									</div>
									<!--end::Icon-->
									<!--begin::Label-->
									<div class="stepper-label">
										<h3 class="stepper-title">Details</h3>
										<div class="stepper-desc">Name your App</div>
									</div>
									<!--end::Label-->
								</div>
								<!--end::Wrapper-->
								<!--begin::Line-->
								<div class="stepper-line h-40px"></div>
								<!--end::Line-->
							</div>
							<!--end::Step 1-->
							<!--begin::Step 2-->
							<div class="stepper-item" data-kt-stepper-element="nav">
								<!--begin::Wrapper-->
								<div class="stepper-wrapper">
									<!--begin::Icon-->
									<div class="stepper-icon w-40px h-40px">
										<i class="ki-duotone ki-check stepper-check fs-2"></i>
										<span class="stepper-number">2</span>
									</div>
									<!--begin::Icon-->
									<!--begin::Label-->
									<div class="stepper-label">
										<h3 class="stepper-title">Frameworks</h3>
										<div class="stepper-desc">Define your app framework</div>
									</div>
									<!--begin::Label-->
								</div>
								<!--end::Wrapper-->
								<!--begin::Line-->
								<div class="stepper-line h-40px"></div>
								<!--end::Line-->
							</div>
							<!--end::Step 2-->
							<!--begin::Step 3-->
							<div class="stepper-item" data-kt-stepper-element="nav">
								<!--begin::Wrapper-->
								<div class="stepper-wrapper">
									<!--begin::Icon-->
									<div class="stepper-icon w-40px h-40px">
										<i class="ki-duotone ki-check stepper-check fs-2"></i>
										<span class="stepper-number">3</span>
									</div>
									<!--end::Icon-->
									<!--begin::Label-->
									<div class="stepper-label">
										<h3 class="stepper-title">Database</h3>
										<div class="stepper-desc">Select the app database type</div>
									</div>
									<!--end::Label-->
								</div>
								<!--end::Wrapper-->
								<!--begin::Line-->
								<div class="stepper-line h-40px"></div>
								<!--end::Line-->
							</div>
							<!--end::Step 3-->
							<!--begin::Step 4-->
							<div class="stepper-item" data-kt-stepper-element="nav">
								<!--begin::Wrapper-->
								<div class="stepper-wrapper">
									<!--begin::Icon-->
									<div class="stepper-icon w-40px h-40px">
										<i class="ki-duotone ki-check stepper-check fs-2"></i>
										<span class="stepper-number">4</span>
									</div>
									<!--end::Icon-->
									<!--begin::Label-->
									<div class="stepper-label">
										<h3 class="stepper-title">Billing</h3>
										<div class="stepper-desc">Provide payment details</div>
									</div>
									<!--end::Label-->
								</div>
								<!--end::Wrapper-->
								<!--begin::Line-->
								<div class="stepper-line h-40px"></div>
								<!--end::Line-->
							</div>
							<!--end::Step 4-->
							<!--begin::Step 5-->
							<div class="stepper-item mark-completed" data-kt-stepper-element="nav">
								<!--begin::Wrapper-->
								<div class="stepper-wrapper">
									<!--begin::Icon-->
									<div class="stepper-icon w-40px h-40px">
										<i class="ki-duotone ki-check stepper-check fs-2"></i>
										<span class="stepper-number">5</span>
									</div>
									<!--end::Icon-->
									<!--begin::Label-->
									<div class="stepper-label">
										<h3 class="stepper-title">Completed</h3>
										<div class="stepper-desc">Review and Submit</div>
									</div>
									<!--end::Label-->
								</div>
								<!--end::Wrapper-->
							</div>
							<!--end::Step 5-->
						</div>
						<!--end::Nav-->
					</div>
					<!--begin::Aside-->
					<!--begin::Content-->
					<div class="flex-row-fluid py-lg-5 px-lg-15">
						<!--begin::Form-->
						<form class="form" novalidate="novalidate" id="kt_modal_create_app_form">
							<!--begin::Step 1-->
							<div class="current" data-kt-stepper-element="content">
								<div class="w-100">
									<!--begin::Input group-->
									<div class="fv-row mb-10">
										<!--begin::Label-->
										<label class="d-flex align-items-center fs-5 fw-semibold mb-2">
											<span class="required">App Name</span>
											<span class="ms-1" data-bs-toggle="tooltip" title="Specify your unique app name">
												<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
												</i>
											</span>
										</label>
										<!--end::Label-->
										<!--begin::Input-->
										<input type="text" class="form-control form-control-lg form-control-solid" name="name" placeholder="" value="" />
										<!--end::Input-->
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="fv-row">
										<!--begin::Label-->
										<label class="d-flex align-items-center fs-5 fw-semibold mb-4">
											<span class="required">Category</span>
											<span class="ms-1" data-bs-toggle="tooltip" title="Select your app category">
												<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
												</i>
											</span>
										</label>
										<!--end::Label-->
										<!--begin:Options-->
										<div class="fv-row">
											<!--begin:Option-->
											<label class="d-flex flex-stack mb-5 cursor-pointer">
												<!--begin:Label-->
												<span class="d-flex align-items-center me-2">
													<!--begin:Icon-->
													<span class="symbol symbol-50px me-6">
														<span class="symbol-label bg-light-primary">
															<i class="ki-duotone ki-compass fs-1 text-primary">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>
														</span>
													</span>
													<!--end:Icon-->
													<!--begin:Info-->
													<span class="d-flex flex-column">
														<span class="fw-bold fs-6">Quick Online Courses</span>
														<span class="fs-7 text-muted">Creating a clear text structure is just one SEO</span>
													</span>
													<!--end:Info-->
												</span>
												<!--end:Label-->
												<!--begin:Input-->
												<span class="form-check form-check-custom form-check-solid">
													<input class="form-check-input" type="radio" name="category" value="1" />
												</span>
												<!--end:Input-->
											</label>
											<!--end::Option-->
											<!--begin:Option-->
											<label class="d-flex flex-stack mb-5 cursor-pointer">
												<!--begin:Label-->
												<span class="d-flex align-items-center me-2">
													<!--begin:Icon-->
													<span class="symbol symbol-50px me-6">
														<span class="symbol-label bg-light-danger">
															<i class="ki-duotone ki-element-11 fs-1 text-danger">
																<span class="path1"></span>
																<span class="path2"></span>
																<span class="path3"></span>
																<span class="path4"></span>
															</i>
														</span>
													</span>
													<!--end:Icon-->
													<!--begin:Info-->
													<span class="d-flex flex-column">
														<span class="fw-bold fs-6">Face to Face Discussions</span>
														<span class="fs-7 text-muted">Creating a clear text structure is just one aspect</span>
													</span>
													<!--end:Info-->
												</span>
												<!--end:Label-->
												<!--begin:Input-->
												<span class="form-check form-check-custom form-check-solid">
													<input class="form-check-input" type="radio" name="category" value="2" />
												</span>
												<!--end:Input-->
											</label>
											<!--end::Option-->
											<!--begin:Option-->
											<label class="d-flex flex-stack cursor-pointer">
												<!--begin:Label-->
												<span class="d-flex align-items-center me-2">
													<!--begin:Icon-->
													<span class="symbol symbol-50px me-6">
														<span class="symbol-label bg-light-success">
															<i class="ki-duotone ki-timer fs-1 text-success">
																<span class="path1"></span>
																<span class="path2"></span>
																<span class="path3"></span>
															</i>
														</span>
													</span>
													<!--end:Icon-->
													<!--begin:Info-->
													<span class="d-flex flex-column">
														<span class="fw-bold fs-6">Full Intro Training</span>
														<span class="fs-7 text-muted">Creating a clear text structure copywriting</span>
													</span>
													<!--end:Info-->
												</span>
												<!--end:Label-->
												<!--begin:Input-->
												<span class="form-check form-check-custom form-check-solid">
													<input class="form-check-input" type="radio" name="category" value="3" />
												</span>
												<!--end:Input-->
											</label>
											<!--end::Option-->
										</div>
										<!--end:Options-->
									</div>
									<!--end::Input group-->
								</div>
							</div>
							<!--end::Step 1-->
							<!--begin::Step 2-->
							<div data-kt-stepper-element="content">
								<div class="w-100">
									<!--begin::Input group-->
									<div class="fv-row">
										<!--begin::Label-->
										<label class="d-flex align-items-center fs-5 fw-semibold mb-4">
											<span class="required">Select Framework</span>
											<span class="ms-1" data-bs-toggle="tooltip" title="Specify your apps framework">
												<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
												</i>
											</span>
										</label>
										<!--end::Label-->
										<!--begin:Option-->
										<label class="d-flex flex-stack cursor-pointer mb-5">
											<!--begin:Label-->
											<span class="d-flex align-items-center me-2">
												<!--begin:Icon-->
												<span class="symbol symbol-50px me-6">
													<span class="symbol-label bg-light-warning">
														<i class="ki-duotone ki-html fs-2x text-warning">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</span>
												</span>
												<!--end:Icon-->
												<!--begin:Info-->
												<span class="d-flex flex-column">
													<span class="fw-bold fs-6">HTML5</span>
													<span class="fs-7 text-muted">Base Web Projec</span>
												</span>
												<!--end:Info-->
											</span>
											<!--end:Label-->
											<!--begin:Input-->
											<span class="form-check form-check-custom form-check-solid">
												<input class="form-check-input" type="radio" checked="checked" name="framework" value="1" />
											</span>
											<!--end:Input-->
										</label>
										<!--end::Option-->
										<!--begin:Option-->
										<label class="d-flex flex-stack cursor-pointer mb-5">
											<!--begin:Label-->
											<span class="d-flex align-items-center me-2">
												<!--begin:Icon-->
												<span class="symbol symbol-50px me-6">
													<span class="symbol-label bg-light-success">
														<i class="ki-duotone ki-react fs-2x text-success">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</span>
												</span>
												<!--end:Icon-->
												<!--begin:Info-->
												<span class="d-flex flex-column">
													<span class="fw-bold fs-6">ReactJS</span>
													<span class="fs-7 text-muted">Robust and flexible app framework</span>
												</span>
												<!--end:Info-->
											</span>
											<!--end:Label-->
											<!--begin:Input-->
											<span class="form-check form-check-custom form-check-solid">
												<input class="form-check-input" type="radio" name="framework" value="2" />
											</span>
											<!--end:Input-->
										</label>
										<!--end::Option-->
										<!--begin:Option-->
										<label class="d-flex flex-stack cursor-pointer mb-5">
											<!--begin:Label-->
											<span class="d-flex align-items-center me-2">
												<!--begin:Icon-->
												<span class="symbol symbol-50px me-6">
													<span class="symbol-label bg-light-danger">
														<i class="ki-duotone ki-angular fs-2x text-danger">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
														</i>
													</span>
												</span>
												<!--end:Icon-->
												<!--begin:Info-->
												<span class="d-flex flex-column">
													<span class="fw-bold fs-6">Angular</span>
													<span class="fs-7 text-muted">Powerful data mangement</span>
												</span>
												<!--end:Info-->
											</span>
											<!--end:Label-->
											<!--begin:Input-->
											<span class="form-check form-check-custom form-check-solid">
												<input class="form-check-input" type="radio" name="framework" value="3" />
											</span>
											<!--end:Input-->
										</label>
										<!--end::Option-->
										<!--begin:Option-->
										<label class="d-flex flex-stack cursor-pointer">
											<!--begin:Label-->
											<span class="d-flex align-items-center me-2">
												<!--begin:Icon-->
												<span class="symbol symbol-50px me-6">
													<span class="symbol-label bg-light-primary">
														<i class="ki-duotone ki-vue fs-2x text-primary">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</span>
												</span>
												<!--end:Icon-->
												<!--begin:Info-->
												<span class="d-flex flex-column">
													<span class="fw-bold fs-6">Vue</span>
													<span class="fs-7 text-muted">Lightweight and responsive framework</span>
												</span>
												<!--end:Info-->
											</span>
											<!--end:Label-->
											<!--begin:Input-->
											<span class="form-check form-check-custom form-check-solid">
												<input class="form-check-input" type="radio" name="framework" value="4" />
											</span>
											<!--end:Input-->
										</label>
										<!--end::Option-->
									</div>
									<!--end::Input group-->
								</div>
							</div>
							<!--end::Step 2-->
							<!--begin::Step 3-->
							<div data-kt-stepper-element="content">
								<div class="w-100">
									<!--begin::Input group-->
									<div class="fv-row mb-10">
										<!--begin::Label-->
										<label class="required fs-5 fw-semibold mb-2">Database Name</label>
										<!--end::Label-->
										<!--begin::Input-->
										<input type="text" class="form-control form-control-lg form-control-solid" name="dbname" placeholder="" value="master_db" />
										<!--end::Input-->
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="fv-row">
										<!--begin::Label-->
										<label class="d-flex align-items-center fs-5 fw-semibold mb-4">
											<span class="required">Select Database Engine</span>
											<span class="ms-1" data-bs-toggle="tooltip" title="Select your app database engine">
												<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
												</i>
											</span>
										</label>
										<!--end::Label-->
										<!--begin:Option-->
										<label class="d-flex flex-stack cursor-pointer mb-5">
											<!--begin::Label-->
											<span class="d-flex align-items-center me-2">
												<!--begin::Icon-->
												<span class="symbol symbol-50px me-6">
													<span class="symbol-label bg-light-success">
														<i class="ki-duotone ki-note text-success fs-2x">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</span>
												</span>
												<!--end::Icon-->
												<!--begin::Info-->
												<span class="d-flex flex-column">
													<span class="fw-bold fs-6">MySQL</span>
													<span class="fs-7 text-muted">Basic MySQL database</span>
												</span>
												<!--end::Info-->
											</span>
											<!--end::Label-->
											<!--begin::Input-->
											<span class="form-check form-check-custom form-check-solid">
												<input class="form-check-input" type="radio" name="dbengine" checked="checked" value="1" />
											</span>
											<!--end::Input-->
										</label>
										<!--end::Option-->
										<!--begin:Option-->
										<label class="d-flex flex-stack cursor-pointer mb-5">
											<!--begin::Label-->
											<span class="d-flex align-items-center me-2">
												<!--begin::Icon-->
												<span class="symbol symbol-50px me-6">
													<span class="symbol-label bg-light-danger">
														<i class="ki-duotone ki-google text-danger fs-2x">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</span>
												</span>
												<!--end::Icon-->
												<!--begin::Info-->
												<span class="d-flex flex-column">
													<span class="fw-bold fs-6">Firebase</span>
													<span class="fs-7 text-muted">Google based app data management</span>
												</span>
												<!--end::Info-->
											</span>
											<!--end::Label-->
											<!--begin::Input-->
											<span class="form-check form-check-custom form-check-solid">
												<input class="form-check-input" type="radio" name="dbengine" value="2" />
											</span>
											<!--end::Input-->
										</label>
										<!--end::Option-->
										<!--begin:Option-->
										<label class="d-flex flex-stack cursor-pointer">
											<!--begin::Label-->
											<span class="d-flex align-items-center me-2">
												<!--begin::Icon-->
												<span class="symbol symbol-50px me-6">
													<span class="symbol-label bg-light-warning">
														<i class="ki-duotone ki-microsoft text-warning fs-2x">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
															<span class="path4"></span>
														</i>
													</span>
												</span>
												<!--end::Icon-->
												<!--begin::Info-->
												<span class="d-flex flex-column">
													<span class="fw-bold fs-6">DynamoDB</span>
													<span class="fs-7 text-muted">Microsoft Fast NoSQL Database</span>
												</span>
												<!--end::Info-->
											</span>
											<!--end::Label-->
											<!--begin::Input-->
											<span class="form-check form-check-custom form-check-solid">
												<input class="form-check-input" type="radio" name="dbengine" value="3" />
											</span>
											<!--end::Input-->
										</label>
										<!--end::Option-->
									</div>
									<!--end::Input group-->
								</div>
							</div>
							<!--end::Step 3-->
							<!--begin::Step 4-->
							<div data-kt-stepper-element="content">
								<div class="w-100">
									<!--begin::Input group-->
									<div class="d-flex flex-column mb-7 fv-row">
										<!--begin::Label-->
										<label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
											<span class="required">Name On Card</span>
											<span class="ms-1" data-bs-toggle="tooltip" title="Specify a card holder's name">
												<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
												</i>
											</span>
										</label>
										<!--end::Label-->
										<input type="text" class="form-control form-control-solid" placeholder="" name="card_name" value="Max Doe" />
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="d-flex flex-column mb-7 fv-row">
										<!--begin::Label-->
										<label class="required fs-6 fw-semibold form-label mb-2">Card Number</label>
										<!--end::Label-->
										<!--begin::Input wrapper-->
										<div class="position-relative">
											<!--begin::Input-->
											<input type="text" class="form-control form-control-solid" placeholder="Enter card number" name="card_number" value="4111 1111 1111 1111" />
											<!--end::Input-->
											<!--begin::Card logos-->
											<div class="position-absolute translate-middle-y top-50 end-0 me-5">
												<img src="assets/media/svg/card-logos/visa.svg" alt="" class="h-25px" />
												<img src="assets/media/svg/card-logos/mastercard.svg" alt="" class="h-25px" />
												<img src="assets/media/svg/card-logos/american-express.svg" alt="" class="h-25px" />
											</div>
											<!--end::Card logos-->
										</div>
										<!--end::Input wrapper-->
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="row mb-10">
										<!--begin::Col-->
										<div class="col-md-8 fv-row">
											<!--begin::Label-->
											<label class="required fs-6 fw-semibold form-label mb-2">Expiration Date</label>
											<!--end::Label-->
											<!--begin::Row-->
											<div class="row fv-row">
												<!--begin::Col-->
												<div class="col-6">
													<select name="card_expiry_month" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Month">
														<option></option>
														<option value="1">1</option>
														<option value="2">2</option>
														<option value="3">3</option>
														<option value="4">4</option>
														<option value="5">5</option>
														<option value="6">6</option>
														<option value="7">7</option>
														<option value="8">8</option>
														<option value="9">9</option>
														<option value="10">10</option>
														<option value="11">11</option>
														<option value="12">12</option>
													</select>
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-6">
													<select name="card_expiry_year" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Year">
														<option></option>
														<option value="2023">2023</option>
														<option value="2024">2024</option>
														<option value="2025">2025</option>
														<option value="2026">2026</option>
														<option value="2027">2027</option>
														<option value="2028">2028</option>
														<option value="2029">2029</option>
														<option value="2030">2030</option>
														<option value="2031">2031</option>
														<option value="2032">2032</option>
														<option value="2033">2033</option>
													</select>
												</div>
												<!--end::Col-->
											</div>
											<!--end::Row-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-md-4 fv-row">
											<!--begin::Label-->
											<label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
												<span class="required">CVV</span>
												<span class="ms-1" data-bs-toggle="tooltip" title="Enter a card CVV code">
													<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
														<span class="path1"></span>
														<span class="path2"></span>
														<span class="path3"></span>
													</i>
												</span>
											</label>
											<!--end::Label-->
											<!--begin::Input wrapper-->
											<div class="position-relative">
												<!--begin::Input-->
												<input type="text" class="form-control form-control-solid" minlength="3" maxlength="4" placeholder="CVV" name="card_cvv" />
												<!--end::Input-->
												<!--begin::CVV icon-->
												<div class="position-absolute translate-middle-y top-50 end-0 me-3">
													<i class="ki-duotone ki-credit-cart fs-2hx">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</div>
												<!--end::CVV icon-->
											</div>
											<!--end::Input wrapper-->
										</div>
										<!--end::Col-->
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="d-flex flex-stack">
										<!--begin::Label-->
										<div class="me-5">
											<label class="fs-6 fw-semibold form-label">Save Card for further billing?</label>
											<div class="fs-7 fw-semibold text-muted">If you need more info, please check budget planning</div>
										</div>
										<!--end::Label-->
										<!--begin::Switch-->
										<label class="form-check form-switch form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" checked="checked" />
											<span class="form-check-label fw-semibold text-muted">Save Card</span>
										</label>
										<!--end::Switch-->
									</div>
									<!--end::Input group-->
								</div>
							</div>
							<!--end::Step 4-->
							<!--begin::Step 5-->
							<div data-kt-stepper-element="content">
								<div class="w-100 text-center">
									<!--begin::Heading-->
									<h1 class="fw-bold text-gray-900 mb-3">Release!</h1>
									<!--end::Heading-->
									<!--begin::Description-->
									<div class="text-muted fw-semibold fs-3">Submit your app to kickstart your project.</div>
									<!--end::Description-->
									<!--begin::Illustration-->
									<div class="text-center px-4 py-15">
										<img src="assets/media/illustrations/sketchy-1/9.png" alt="" class="mw-100 mh-300px" />
									</div>
									<!--end::Illustration-->
								</div>
							</div>
							<!--end::Step 5-->
							<!--begin::Actions-->
							<div class="d-flex flex-stack pt-10">
								<!--begin::Wrapper-->
								<div class="me-2">
									<button type="button" class="btn btn-lg btn-light-primary me-3" data-kt-stepper-action="previous">
										<i class="ki-duotone ki-arrow-left fs-3 me-1">
											<span class="path1"></span>
											<span class="path2"></span>
										</i>Back</button>
								</div>
								<!--end::Wrapper-->
								<!--begin::Wrapper-->
								<div>
									<button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="submit">
										<span class="indicator-label">Submit
											<i class="ki-duotone ki-arrow-right fs-3 ms-2 me-0">
												<span class="path1"></span>
												<span class="path2"></span>
											</i></span>
										<span class="indicator-progress">Please wait...
											<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
									</button>
									<button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="next">Continue
										<i class="ki-duotone ki-arrow-right fs-3 ms-1 me-0">
											<span class="path1"></span>
											<span class="path2"></span>
										</i></button>
								</div>
								<!--end::Wrapper-->
							</div>
							<!--end::Actions-->
						</form>
						<!--end::Form-->
					</div>
					<!--end::Content-->
				</div>
				<!--end::Stepper-->
			</div>
			<!--end::Modal body-->
		</div>
		<!--end::Modal content-->
	</div>
	<!--end::Modal dialog-->
</div>
<!--end::Modal - Create App-->
<!--begin::Modal - New Card-->
<div class="modal fade" id="kt_modal_new_card" tabindex="-1" aria-hidden="true">
	<!--begin::Modal dialog-->
	<div class="modal-dialog modal-dialog-centered mw-650px">
		<!--begin::Modal content-->
		<div class="modal-content">
			<!--begin::Modal header-->
			<div class="modal-header">
				<!--begin::Modal title-->
				<h2>Add New Card</h2>
				<!--end::Modal title-->
				<!--begin::Close-->
				<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
					<i class="ki-duotone ki-cross fs-1">
						<span class="path1"></span>
						<span class="path2"></span>
					</i>
				</div>
				<!--end::Close-->
			</div>
			<!--end::Modal header-->
			<!--begin::Modal body-->
			<div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
				<!--begin::Form-->
				<form id="kt_modal_new_card_form" class="form" action="#">
					<!--begin::Input group-->
					<div class="d-flex flex-column mb-7 fv-row">
						<!--begin::Label-->
						<label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
							<span class="required">Name On Card</span>
							<span class="ms-1" data-bs-toggle="tooltip" title="Specify a card holder's name">
								<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
									<span class="path1"></span>
									<span class="path2"></span>
									<span class="path3"></span>
								</i>
							</span>
						</label>
						<!--end::Label-->
						<input type="text" class="form-control form-control-solid" placeholder="" name="card_name" value="Max Doe" />
					</div>
					<!--end::Input group-->
					<!--begin::Input group-->
					<div class="d-flex flex-column mb-7 fv-row">
						<!--begin::Label-->
						<label class="required fs-6 fw-semibold form-label mb-2">Card Number</label>
						<!--end::Label-->
						<!--begin::Input wrapper-->
						<div class="position-relative">
							<!--begin::Input-->
							<input type="text" class="form-control form-control-solid" placeholder="Enter card number" name="card_number" value="4111 1111 1111 1111" />
							<!--end::Input-->
							<!--begin::Card logos-->
							<div class="position-absolute translate-middle-y top-50 end-0 me-5">
								<img src="assets/media/svg/card-logos/visa.svg" alt="" class="h-25px" />
								<img src="assets/media/svg/card-logos/mastercard.svg" alt="" class="h-25px" />
								<img src="assets/media/svg/card-logos/american-express.svg" alt="" class="h-25px" />
							</div>
							<!--end::Card logos-->
						</div>
						<!--end::Input wrapper-->
					</div>
					<!--end::Input group-->
					<!--begin::Input group-->
					<div class="row mb-10">
						<!--begin::Col-->
						<div class="col-md-8 fv-row">
							<!--begin::Label-->
							<label class="required fs-6 fw-semibold form-label mb-2">Expiration Date</label>
							<!--end::Label-->
							<!--begin::Row-->
							<div class="row fv-row">
								<!--begin::Col-->
								<div class="col-6">
									<select name="card_expiry_month" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Month">
										<option></option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
										<option value="10">10</option>
										<option value="11">11</option>
										<option value="12">12</option>
									</select>
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-6">
									<select name="card_expiry_year" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Year">
										<option></option>
										<option value="2023">2023</option>
										<option value="2024">2024</option>
										<option value="2025">2025</option>
										<option value="2026">2026</option>
										<option value="2027">2027</option>
										<option value="2028">2028</option>
										<option value="2029">2029</option>
										<option value="2030">2030</option>
										<option value="2031">2031</option>
										<option value="2032">2032</option>
										<option value="2033">2033</option>
									</select>
								</div>
								<!--end::Col-->
							</div>
							<!--end::Row-->
						</div>
						<!--end::Col-->
						<!--begin::Col-->
						<div class="col-md-4 fv-row">
							<!--begin::Label-->
							<label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
								<span class="required">CVV</span>
								<span class="ms-1" data-bs-toggle="tooltip" title="Enter a card CVV code">
									<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
										<span class="path1"></span>
										<span class="path2"></span>
										<span class="path3"></span>
									</i>
								</span>
							</label>
							<!--end::Label-->
							<!--begin::Input wrapper-->
							<div class="position-relative">
								<!--begin::Input-->
								<input type="text" class="form-control form-control-solid" minlength="3" maxlength="4" placeholder="CVV" name="card_cvv" />
								<!--end::Input-->
								<!--begin::CVV icon-->
								<div class="position-absolute translate-middle-y top-50 end-0 me-3">
									<i class="ki-duotone ki-credit-cart fs-2hx">
										<span class="path1"></span>
										<span class="path2"></span>
									</i>
								</div>
								<!--end::CVV icon-->
							</div>
							<!--end::Input wrapper-->
						</div>
						<!--end::Col-->
					</div>
					<!--end::Input group-->
					<!--begin::Input group-->
					<div class="d-flex flex-stack">
						<!--begin::Label-->
						<div class="me-5">
							<label class="fs-6 fw-semibold form-label">Save Card for further billing?</label>
							<div class="fs-7 fw-semibold text-muted">If you need more info, please check budget planning</div>
						</div>
						<!--end::Label-->
						<!--begin::Switch-->
						<label class="form-check form-switch form-check-custom form-check-solid">
							<input class="form-check-input" type="checkbox" value="1" checked="checked" />
							<span class="form-check-label fw-semibold text-muted">Save Card</span>
						</label>
						<!--end::Switch-->
					</div>
					<!--end::Input group-->
					<!--begin::Actions-->
					<div class="text-center pt-15">
						<button type="reset" id="kt_modal_new_card_cancel" class="btn btn-light me-3">Discard</button>
						<button type="submit" id="kt_modal_new_card_submit" class="btn btn-primary">
							<span class="indicator-label">Submit</span>
							<span class="indicator-progress">Please wait...
								<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
						</button>
					</div>
					<!--end::Actions-->
				</form>
				<!--end::Form-->
			</div>
			<!--end::Modal body-->
		</div>
		<!--end::Modal content-->
	</div>
	<!--end::Modal dialog-->
</div>
<!--end::Modal - New Card-->
<!--begin::Modal - Users Search-->
<div class="modal fade" id="kt_modal_users_search" tabindex="-1" aria-hidden="true">
	<!--begin::Modal dialog-->
	<div class="modal-dialog modal-dialog-centered mw-650px">
		<!--begin::Modal content-->
		<div class="modal-content">
			<!--begin::Modal header-->
			<div class="modal-header pb-0 border-0 justify-content-end">
				<!--begin::Close-->
				<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
					<i class="ki-duotone ki-cross fs-1">
						<span class="path1"></span>
						<span class="path2"></span>
					</i>
				</div>
				<!--end::Close-->
			</div>
			<!--begin::Modal header-->
			<!--begin::Modal body-->
			<div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
				<!--begin::Content-->
				<div class="text-center mb-13">
					<h1 class="mb-3">Search Users</h1>
					<div class="text-muted fw-semibold fs-5">Invite Collaborators To Your Project</div>
				</div>
				<!--end::Content-->
				<!--begin::Search-->
				<div id="kt_modal_users_search_handler" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="inline">
					<!--begin::Form-->
					<form data-kt-search-element="form" class="w-100 position-relative mb-5" autocomplete="off">
						<!--begin::Hidden input(Added to disable form autocomplete)-->
						<input type="hidden" />
						<!--end::Hidden input-->
						<!--begin::Icon-->
						<i class="ki-duotone ki-magnifier fs-2 fs-lg-1 text-gray-500 position-absolute top-50 ms-5 translate-middle-y">
							<span class="path1"></span>
							<span class="path2"></span>
						</i>
						<!--end::Icon-->
						<!--begin::Input-->
						<input type="text" class="form-control form-control-lg form-control-solid px-15" name="search" value="" placeholder="Search by username, full name or email..." data-kt-search-element="input" />
						<!--end::Input-->
						<!--begin::Spinner-->
						<span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5" data-kt-search-element="spinner">
							<span class="spinner-border h-15px w-15px align-middle text-muted"></span>
						</span>
						<!--end::Spinner-->
						<!--begin::Reset-->
						<span class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 me-5 d-none" data-kt-search-element="clear">
							<i class="ki-duotone ki-cross fs-2 fs-lg-1 me-0">
								<span class="path1"></span>
								<span class="path2"></span>
							</i>
						</span>
						<!--end::Reset-->
					</form>
					<!--end::Form-->
					<!--begin::Wrapper-->
					<div class="py-5">
						<!--begin::Suggestions-->
						<div data-kt-search-element="suggestions">
							<!--begin::Heading-->
							<h3 class="fw-semibold mb-5">Recently searched:</h3>
							<!--end::Heading-->
							<!--begin::Users-->
							<div class="mh-375px scroll-y me-n7 pe-7">
								<!--begin::User-->
								<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle me-5">
										<img alt="Pic" src="assets/media/avatars/300-6.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Info-->
									<div class="fw-semibold">
										<span class="fs-6 text-gray-800 me-2">Emma Smith</span>
										<span class="badge badge-light">Art Director</span>
									</div>
									<!--end::Info-->
								</a>
								<!--end::User-->
								<!--begin::User-->
								<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle me-5">
										<span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
									</div>
									<!--end::Avatar-->
									<!--begin::Info-->
									<div class="fw-semibold">
										<span class="fs-6 text-gray-800 me-2">Melody Macy</span>
										<span class="badge badge-light">Marketing Analytic</span>
									</div>
									<!--end::Info-->
								</a>
								<!--end::User-->
								<!--begin::User-->
								<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle me-5">
										<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Info-->
									<div class="fw-semibold">
										<span class="fs-6 text-gray-800 me-2">Max Smith</span>
										<span class="badge badge-light">Software Enginer</span>
									</div>
									<!--end::Info-->
								</a>
								<!--end::User-->
								<!--begin::User-->
								<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle me-5">
										<img alt="Pic" src="assets/media/avatars/300-5.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Info-->
									<div class="fw-semibold">
										<span class="fs-6 text-gray-800 me-2">Sean Bean</span>
										<span class="badge badge-light">Web Developer</span>
									</div>
									<!--end::Info-->
								</a>
								<!--end::User-->
								<!--begin::User-->
								<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle me-5">
										<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Info-->
									<div class="fw-semibold">
										<span class="fs-6 text-gray-800 me-2">Brian Cox</span>
										<span class="badge badge-light">UI/UX Designer</span>
									</div>
									<!--end::Info-->
								</a>
								<!--end::User-->
							</div>
							<!--end::Users-->
						</div>
						<!--end::Suggestions-->
						<!--begin::Results(add d-none to below element to hide the users list by default)-->
						<div data-kt-search-element="results" class="d-none">
							<!--begin::Users-->
							<div class="mh-375px scroll-y me-n7 pe-7">
								<!--begin::User-->
								<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="0">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Checkbox-->
										<label class="form-check form-check-custom form-check-solid me-5">
											<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='0']" value="0" />
										</label>
										<!--end::Checkbox-->
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="assets/media/avatars/300-6.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Smith</a>
											<div class="fw-semibold text-muted">smith@kpmg.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2" selected="selected">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::Separator-->
								<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
								<!--end::Separator-->
								<!--begin::User-->
								<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="1">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Checkbox-->
										<label class="form-check form-check-custom form-check-solid me-5">
											<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='1']" value="1" />
										</label>
										<!--end::Checkbox-->
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Melody Macy</a>
											<div class="fw-semibold text-muted">melody@altbox.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
											<option value="1" selected="selected">Guest</option>
											<option value="2">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::Separator-->
								<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
								<!--end::Separator-->
								<!--begin::User-->
								<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="2">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Checkbox-->
										<label class="form-check form-check-custom form-check-solid me-5">
											<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='2']" value="2" />
										</label>
										<!--end::Checkbox-->
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Max Smith</a>
											<div class="fw-semibold text-muted">max@kt.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2">Owner</option>
											<option value="3" selected="selected">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::Separator-->
								<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
								<!--end::Separator-->
								<!--begin::User-->
								<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="3">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Checkbox-->
										<label class="form-check form-check-custom form-check-solid me-5">
											<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='3']" value="3" />
										</label>
										<!--end::Checkbox-->
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="assets/media/avatars/300-5.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean Bean</a>
											<div class="fw-semibold text-muted">sean@dellito.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2" selected="selected">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::Separator-->
								<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
								<!--end::Separator-->
								<!--begin::User-->
								<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="4">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Checkbox-->
										<label class="form-check form-check-custom form-check-solid me-5">
											<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='4']" value="4" />
										</label>
										<!--end::Checkbox-->
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Brian Cox</a>
											<div class="fw-semibold text-muted">brian@exchange.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2">Owner</option>
											<option value="3" selected="selected">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::Separator-->
								<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
								<!--end::Separator-->
								<!--begin::User-->
								<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="5">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Checkbox-->
										<label class="form-check form-check-custom form-check-solid me-5">
											<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='5']" value="5" />
										</label>
										<!--end::Checkbox-->
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Mikaela Collins</a>
											<div class="fw-semibold text-muted">mik@pex.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2" selected="selected">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::Separator-->
								<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
								<!--end::Separator-->
								<!--begin::User-->
								<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="6">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Checkbox-->
										<label class="form-check form-check-custom form-check-solid me-5">
											<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='6']" value="6" />
										</label>
										<!--end::Checkbox-->
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="assets/media/avatars/300-9.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Francis Mitcham</a>
											<div class="fw-semibold text-muted">f.mit@kpmg.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2">Owner</option>
											<option value="3" selected="selected">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::Separator-->
								<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
								<!--end::Separator-->
								<!--begin::User-->
								<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="7">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Checkbox-->
										<label class="form-check form-check-custom form-check-solid me-5">
											<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='7']" value="7" />
										</label>
										<!--end::Checkbox-->
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Olivia Wild</a>
											<div class="fw-semibold text-muted">olivia@corpmail.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2" selected="selected">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::Separator-->
								<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
								<!--end::Separator-->
								<!--begin::User-->
								<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="8">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Checkbox-->
										<label class="form-check form-check-custom form-check-solid me-5">
											<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='8']" value="8" />
										</label>
										<!--end::Checkbox-->
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Neil Owen</a>
											<div class="fw-semibold text-muted">owen.neil@gmail.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
											<option value="1" selected="selected">Guest</option>
											<option value="2">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::Separator-->
								<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
								<!--end::Separator-->
								<!--begin::User-->
								<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="9">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Checkbox-->
										<label class="form-check form-check-custom form-check-solid me-5">
											<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='9']" value="9" />
										</label>
										<!--end::Checkbox-->
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="assets/media/avatars/300-23.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dan Wilson</a>
											<div class="fw-semibold text-muted">dam@consilting.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2">Owner</option>
											<option value="3" selected="selected">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::Separator-->
								<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
								<!--end::Separator-->
								<!--begin::User-->
								<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="10">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Checkbox-->
										<label class="form-check form-check-custom form-check-solid me-5">
											<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='10']" value="10" />
										</label>
										<!--end::Checkbox-->
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Bold</a>
											<div class="fw-semibold text-muted">emma@intenso.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2" selected="selected">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::Separator-->
								<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
								<!--end::Separator-->
								<!--begin::User-->
								<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="11">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Checkbox-->
										<label class="form-check form-check-custom form-check-solid me-5">
											<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='11']" value="11" />
										</label>
										<!--end::Checkbox-->
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="assets/media/avatars/300-12.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ana Crown</a>
											<div class="fw-semibold text-muted">ana.cf@limtel.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
											<option value="1" selected="selected">Guest</option>
											<option value="2">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::Separator-->
								<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
								<!--end::Separator-->
								<!--begin::User-->
								<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="12">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Checkbox-->
										<label class="form-check form-check-custom form-check-solid me-5">
											<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='12']" value="12" />
										</label>
										<!--end::Checkbox-->
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-info text-info fw-semibold">A</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Robert Doe</a>
											<div class="fw-semibold text-muted">robert@benko.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2">Owner</option>
											<option value="3" selected="selected">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::Separator-->
								<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
								<!--end::Separator-->
								<!--begin::User-->
								<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="13">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Checkbox-->
										<label class="form-check form-check-custom form-check-solid me-5">
											<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='13']" value="13" />
										</label>
										<!--end::Checkbox-->
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="assets/media/avatars/300-13.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">John Miller</a>
											<div class="fw-semibold text-muted">miller@mapple.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2">Owner</option>
											<option value="3" selected="selected">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::Separator-->
								<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
								<!--end::Separator-->
								<!--begin::User-->
								<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="14">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Checkbox-->
										<label class="form-check form-check-custom form-check-solid me-5">
											<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='14']" value="14" />
										</label>
										<!--end::Checkbox-->
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-success text-success fw-semibold">L</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Lucy Kunic</a>
											<div class="fw-semibold text-muted">lucy.m@fentech.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2" selected="selected">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::Separator-->
								<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
								<!--end::Separator-->
								<!--begin::User-->
								<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="15">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Checkbox-->
										<label class="form-check form-check-custom form-check-solid me-5">
											<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='15']" value="15" />
										</label>
										<!--end::Checkbox-->
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="assets/media/avatars/300-21.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ethan Wilder</a>
											<div class="fw-semibold text-muted">ethan@loop.com.au</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
											<option value="1" selected="selected">Guest</option>
											<option value="2">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::Separator-->
								<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
								<!--end::Separator-->
								<!--begin::User-->
								<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="16">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Checkbox-->
										<label class="form-check form-check-custom form-check-solid me-5">
											<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='16']" value="16" />
										</label>
										<!--end::Checkbox-->
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Max Smith</a>
											<div class="fw-semibold text-muted">max@kt.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2">Owner</option>
											<option value="3" selected="selected">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
							</div>
							<!--end::Users-->
							<!--begin::Actions-->
							<div class="d-flex flex-center mt-15">
								<button type="reset" id="kt_modal_users_search_reset" data-bs-dismiss="modal" class="btn btn-active-light me-3">Cancel</button>
								<button type="submit" id="kt_modal_users_search_submit" class="btn btn-primary">Add Selected Users</button>
							</div>
							<!--end::Actions-->
						</div>
						<!--end::Results-->
						<!--begin::Empty-->
						<div data-kt-search-element="empty" class="text-center d-none">
							<!--begin::Message-->
							<div class="fw-semibold py-10">
								<div class="text-gray-600 fs-3 mb-2">No users found</div>
								<div class="text-muted fs-6">Try to search by username, full name or email...</div>
							</div>
							<!--end::Message-->
							<!--begin::Illustration-->
							<div class="text-center px-5">
								<img src="assets/media/illustrations/sketchy-1/1.png" alt="" class="w-100 h-200px h-sm-325px" />
							</div>
							<!--end::Illustration-->
						</div>
						<!--end::Empty-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Search-->
			</div>
			<!--end::Modal body-->
		</div>
		<!--end::Modal content-->
	</div>
	<!--end::Modal dialog-->
</div>
<!--end::Modal - Users Search-->
<!--begin::Modal - Invite Friends-->
<div class="modal fade" id="kt_modal_invite_friends" tabindex="-1" aria-hidden="true">
	<!--begin::Modal dialog-->
	<div class="modal-dialog mw-650px">
		<!--begin::Modal content-->
		<div class="modal-content">
			<!--begin::Modal header-->
			<div class="modal-header pb-0 border-0 justify-content-end">
				<!--begin::Close-->
				<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
					<i class="ki-duotone ki-cross fs-1">
						<span class="path1"></span>
						<span class="path2"></span>
					</i>
				</div>
				<!--end::Close-->
			</div>
			<!--begin::Modal header-->
			<!--begin::Modal body-->
			<div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
				<!--begin::Heading-->
				<div class="text-center mb-13">
					<!--begin::Title-->
					<h1 class="mb-3">Invite a Friend</h1>
					<!--end::Title-->
					<!--begin::Description-->
					<div class="text-muted fw-semibold fs-5">If you need more info, please check out
						<a href="#" class="link-primary fw-bold">FAQ Page</a>.
					</div>
					<!--end::Description-->
				</div>
				<!--end::Heading-->
				<!--begin::Google Contacts Invite-->
				<div class="btn btn-light-primary fw-bold w-100 mb-8">
					<img alt="Logo" src="assets/media/svg/brand-logos/google-icon.svg" class="h-20px me-3" />Invite Gmail Contacts
				</div>
				<!--end::Google Contacts Invite-->
				<!--begin::Separator-->
				<div class="separator d-flex flex-center mb-8">
					<span class="text-uppercase bg-body fs-7 fw-semibold text-muted px-3">or</span>
				</div>
				<!--end::Separator-->
				<!--begin::Textarea-->
				<textarea class="form-control form-control-solid mb-8" rows="3" placeholder="Type or paste emails here"></textarea>
				<!--end::Textarea-->
				<!--begin::Users-->
				<div class="mb-10">
					<!--begin::Heading-->
					<div class="fs-6 fw-semibold mb-2">Your Invitations</div>
					<!--end::Heading-->
					<!--begin::List-->
					<div class="mh-300px scroll-y me-n7 pe-7">
						<!--begin::User-->
						<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/300-6.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-5">
									<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Smith</a>
									<div class="fw-semibold text-muted">smith@kpmg.com</div>
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Access menu-->
							<div class="ms-2 w-100px">
								<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
									<option value="1">Guest</option>
									<option value="2" selected="selected">Owner</option>
									<option value="3">Can Edit</option>
								</select>
							</div>
							<!--end::Access menu-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-5">
									<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Melody Macy</a>
									<div class="fw-semibold text-muted">melody@altbox.com</div>
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Access menu-->
							<div class="ms-2 w-100px">
								<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
									<option value="1" selected="selected">Guest</option>
									<option value="2">Owner</option>
									<option value="3">Can Edit</option>
								</select>
							</div>
							<!--end::Access menu-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-5">
									<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Max Smith</a>
									<div class="fw-semibold text-muted">max@kt.com</div>
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Access menu-->
							<div class="ms-2 w-100px">
								<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
									<option value="1">Guest</option>
									<option value="2">Owner</option>
									<option value="3" selected="selected">Can Edit</option>
								</select>
							</div>
							<!--end::Access menu-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/300-5.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-5">
									<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean Bean</a>
									<div class="fw-semibold text-muted">sean@dellito.com</div>
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Access menu-->
							<div class="ms-2 w-100px">
								<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
									<option value="1">Guest</option>
									<option value="2" selected="selected">Owner</option>
									<option value="3">Can Edit</option>
								</select>
							</div>
							<!--end::Access menu-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-5">
									<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Brian Cox</a>
									<div class="fw-semibold text-muted">brian@exchange.com</div>
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Access menu-->
							<div class="ms-2 w-100px">
								<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
									<option value="1">Guest</option>
									<option value="2">Owner</option>
									<option value="3" selected="selected">Can Edit</option>
								</select>
							</div>
							<!--end::Access menu-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<span class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-5">
									<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Mikaela Collins</a>
									<div class="fw-semibold text-muted">mik@pex.com</div>
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Access menu-->
							<div class="ms-2 w-100px">
								<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
									<option value="1">Guest</option>
									<option value="2" selected="selected">Owner</option>
									<option value="3">Can Edit</option>
								</select>
							</div>
							<!--end::Access menu-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/300-9.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-5">
									<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Francis Mitcham</a>
									<div class="fw-semibold text-muted">f.mit@kpmg.com</div>
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Access menu-->
							<div class="ms-2 w-100px">
								<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
									<option value="1">Guest</option>
									<option value="2">Owner</option>
									<option value="3" selected="selected">Can Edit</option>
								</select>
							</div>
							<!--end::Access menu-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-5">
									<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Olivia Wild</a>
									<div class="fw-semibold text-muted">olivia@corpmail.com</div>
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Access menu-->
							<div class="ms-2 w-100px">
								<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
									<option value="1">Guest</option>
									<option value="2" selected="selected">Owner</option>
									<option value="3">Can Edit</option>
								</select>
							</div>
							<!--end::Access menu-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<span class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-5">
									<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Neil Owen</a>
									<div class="fw-semibold text-muted">owen.neil@gmail.com</div>
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Access menu-->
							<div class="ms-2 w-100px">
								<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
									<option value="1" selected="selected">Guest</option>
									<option value="2">Owner</option>
									<option value="3">Can Edit</option>
								</select>
							</div>
							<!--end::Access menu-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/300-23.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-5">
									<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dan Wilson</a>
									<div class="fw-semibold text-muted">dam@consilting.com</div>
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Access menu-->
							<div class="ms-2 w-100px">
								<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
									<option value="1">Guest</option>
									<option value="2">Owner</option>
									<option value="3" selected="selected">Can Edit</option>
								</select>
							</div>
							<!--end::Access menu-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<span class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-5">
									<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Bold</a>
									<div class="fw-semibold text-muted">emma@intenso.com</div>
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Access menu-->
							<div class="ms-2 w-100px">
								<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
									<option value="1">Guest</option>
									<option value="2" selected="selected">Owner</option>
									<option value="3">Can Edit</option>
								</select>
							</div>
							<!--end::Access menu-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/300-12.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-5">
									<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ana Crown</a>
									<div class="fw-semibold text-muted">ana.cf@limtel.com</div>
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Access menu-->
							<div class="ms-2 w-100px">
								<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
									<option value="1" selected="selected">Guest</option>
									<option value="2">Owner</option>
									<option value="3">Can Edit</option>
								</select>
							</div>
							<!--end::Access menu-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<span class="symbol-label bg-light-info text-info fw-semibold">A</span>
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-5">
									<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Robert Doe</a>
									<div class="fw-semibold text-muted">robert@benko.com</div>
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Access menu-->
							<div class="ms-2 w-100px">
								<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
									<option value="1">Guest</option>
									<option value="2">Owner</option>
									<option value="3" selected="selected">Can Edit</option>
								</select>
							</div>
							<!--end::Access menu-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/300-13.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-5">
									<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">John Miller</a>
									<div class="fw-semibold text-muted">miller@mapple.com</div>
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Access menu-->
							<div class="ms-2 w-100px">
								<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
									<option value="1">Guest</option>
									<option value="2">Owner</option>
									<option value="3" selected="selected">Can Edit</option>
								</select>
							</div>
							<!--end::Access menu-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<span class="symbol-label bg-light-success text-success fw-semibold">L</span>
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-5">
									<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Lucy Kunic</a>
									<div class="fw-semibold text-muted">lucy.m@fentech.com</div>
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Access menu-->
							<div class="ms-2 w-100px">
								<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
									<option value="1">Guest</option>
									<option value="2" selected="selected">Owner</option>
									<option value="3">Can Edit</option>
								</select>
							</div>
							<!--end::Access menu-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/300-21.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-5">
									<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ethan Wilder</a>
									<div class="fw-semibold text-muted">ethan@loop.com.au</div>
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Access menu-->
							<div class="ms-2 w-100px">
								<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
									<option value="1" selected="selected">Guest</option>
									<option value="2">Owner</option>
									<option value="3">Can Edit</option>
								</select>
							</div>
							<!--end::Access menu-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-4">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-5">
									<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Max Smith</a>
									<div class="fw-semibold text-muted">max@kt.com</div>
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Access menu-->
							<div class="ms-2 w-100px">
								<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
									<option value="1">Guest</option>
									<option value="2">Owner</option>
									<option value="3" selected="selected">Can Edit</option>
								</select>
							</div>
							<!--end::Access menu-->
						</div>
						<!--end::User-->
					</div>
					<!--end::List-->
				</div>
				<!--end::Users-->
				<!--begin::Notice-->
				<div class="d-flex flex-stack">
					<!--begin::Label-->
					<div class="me-5 fw-semibold">
						<label class="fs-6">Adding Users by Team Members</label>
						<div class="fs-7 text-muted">If you need more info, please check budget planning</div>
					</div>
					<!--end::Label-->
					<!--begin::Switch-->
					<label class="form-check form-switch form-check-custom form-check-solid">
						<input class="form-check-input" type="checkbox" value="1" checked="checked" />
						<span class="form-check-label fw-semibold text-muted">Allowed</span>
					</label>
					<!--end::Switch-->
				</div>
				<!--end::Notice-->
			</div>
			<!--end::Modal body-->
		</div>
		<!--end::Modal content-->
	</div>
	<!--end::Modal dialog-->
</div>
<!--end::Modal - Invite Friend-->
<!--end::Modals-->
<!--begin::Javascript-->
<script>
	var hostUrl = "assets/";
</script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script>
	// Function to handle table search
	function handleTableSearch() {
		// Get the search input value
		var searchText = $('[data-kt-user-table-filter="search"]').val().toLowerCase();
		console.log(searchText)
		// Loop through each table row
		$('#kt_table_new_orders tbody tr').each(function() {
			// Check if any cell contains the search text
			console.log(this)
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
	$('[data-kt-user-table-filter="search"]').on('input', function() {
		handleTableSearch();
	});
</script>
<!--begin::Global Javascript Bundle(mandatory for all pages)-->
<script src="assets/plugins/global/plugins.bundle.js"></script>
<script src="assets/js/scripts.bundle.js"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Vendors Javascript(used for this page only)-->
<script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
<!--end::Vendors Javascript-->
<!--begin::Custom Javascript(used for this page only)-->
<script src="assets/js/custom/apps/ecommerce/customers/details/transaction-history.js"></script>
<script src="assets/js/custom/apps/ecommerce/customers/details/add-auth-app.js"></script>
<script src="assets/js/custom/apps/ecommerce/customers/details/add-address.js"></script>
<script src="assets/js/custom/apps/ecommerce/customers/details/add-one-time-password.js"></script>
<script src="assets/js/custom/apps/ecommerce/customers/details/update-password.js"></script>
<script src="assets/js/custom/apps/ecommerce/customers/details/update-phone.js"></script>
<script src="assets/js/custom/apps/ecommerce/customers/details/update-address.js"></script>
<script src="assets/js/custom/apps/ecommerce/customers/details/update-profile.js"></script>
<script src="assets/js/widgets.bundle.js"></script>
<script src="assets/js/custom/widgets.js"></script>
<script src="assets/js/custom/apps/chat/chat.js"></script>
<script src="assets/js/custom/utilities/modals/upgrade-plan.js"></script>
<script src="assets/js/custom/utilities/modals/create-app.js"></script>
<script src="assets/js/custom/utilities/modals/new-card.js"></script>
<script src="assets/js/custom/utilities/modals/users-search.js"></script>
<!--end::Custom Javascript-->
<!--end::Javascript-->
</body>
<!--end::Body-->

</html>