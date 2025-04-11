@extends('custom_layout.customer')
@section('main_content')

<style>
	.custom-height {
        height: 100px !important;
    }

    .ql-toolbar.ql-snow {
        border: 1px solid #783AFB !important;
        background: #1515158a !important;
        color: #fff !important;
    }

    .ql-editor {
        color: white;
    }
	div#editor {
    background: transparent;
    height: 250px;
    border: none;
}
div#requestRevisionEditor {
    height: 250px !important;
}
div#feedbackEditor {
    height: 250px !important;
}
h1 {
    color: white !important;
}
h2 {
    color: white !important;
}
h3 {
    color: white !important;
}
button.btn.btn-flex.badge-custom-bg.w-100.justify-content-center.px-2.ms-3.deleteBtnForm {
    padding-right: 35px !important;
    padding-left: 35px !important;
}
button.btn.btn-flex.badge-custom-bg.w-100.justify-content-center.px-2.ms-3.downloadBtnForm {
    padding-right: 30px !important;
    padding-left: 30px !important;
}
</style>



<link
  href="https://cdn.jsdelivr.net/npm/quill@2/dist/quill.snow.css"
  rel="stylesheet"
/>
<meta name="csrf-token" content="{{ csrf_token() }}">
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
								<h1 class="page-heading d-flex text-gray-900 fw-bold fs-1 flex-column justify-content-center my-0 fs-color-white custom-fs-23">Order Details</h1>
								<!--end::Title-->
								<!--begin::Breadcrumb-->
								<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
									<!--begin::Item-->
									<li class="breadcrumb-item text-muted">
										<a href="index.html" class="text-muted text-hover-primary fs-color-white custom-fs-13">Place Order</a>
									</li>
									<!--end::Item-->
									<!--begin::Item-->
									<li class="breadcrumb-item">
										<span class="bullet bg-gray-500 w-5px h-2px"></span>
									</li>
									<!--end::Item-->
									<!--begin::Item-->
									<li class="breadcrumb-item text-muted fs-color-white custom-fs-13">{{$order->order_id}}</li>
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
								<a href="{{ route('customer.new-order') }}" class="btn btn-sm fw-bold btn-primary badge-custom-bg">Back</a>
								<!--end::Primary button-->
							</div>
							<!--end::Actions-->
						</div>
						<!--end::Toolbar container-->
					</div>
					<div class="app-container">
						<div class="fs-3 mb-5 text-center">
							@if(isset($order->order_status) && $order->order_status == 'Pending')
									<h3 class="fs-color-white custom-fs-23">Your Order is Under Review</h3>
								@elseif(isset($order->order_status) && $order->order_status == 'In-Progress')
									<h3 class="fs-color-white custom-fs-23">Your Order is Being Handled</h3>
								@elseif(isset($order->order_status) && $order->order_status == 'Revision')
									<h3 class="fs-color-white custom-fs-23">Your Order is Being Reviewed/Revised</h3>
								@elseif(isset($order->order_status) && $order->order_status == 'Delivered')
									<h3 class="fs-color-white custom-fs-23">Your Order Has Been Delivered</h3>
								@elseif(isset($order->order_status) && $order->order_status == 'Canceled')
									<h3 class="fs-color-white custom-fs-23">Your Order Has Been Cancelled</h3>
							@endif
						</div>

						<div class="stepper-wrapper" id="stepper_wrapper">
							@if(isset($order->order_status) && $order->order_status == 'Pending')
								<div class="stepper-item pending_item">
									<div class="step-counter badge-custom-bg">1</div>
									<div class="step-name fs-color-white custom-fs-13">Order Pending Approval</div>
								</div>
								<div class="stepper-item">
									<div class="step-counter">2</div>
									<div class="step-name fs-color-white custom-fs-13">Order In-Progress</div>
								</div>

								<div class="stepper-item">
									<div class="step-counter">3</div>
									<div class="step-name fs-color-white custom-fs-13">Order In-Revision</div>
								</div>

								<div class="stepper-item">
									<div class="step-counter">4</div>
									<div class="step-name fs-color-white custom-fs-13">Order Delivered</div>
								</div>

								<div class="stepper-item">
									<div class="step-counter">5</div>
									<div class="step-name fs-color-white custom-fs-13">Order Cancelled</div>
								</div>
							@elseif(isset($order->order_status) && $order->order_status == 'In-Progress')
								<div class="stepper-item pending_item">
									<div class="step-counter">1</div>
									<div class="step-name fs-color-white custom-fs-13">Order Pending Approval</div>
								</div>
								<div class="stepper-item">
									<div class="step-counter badge-custom-bg">2</div>
									<div class="step-name fs-color-white custom-fs-13">Order In-Progress</div>
								</div>

								<div class="stepper-item">
									<div class="step-counter">3</div>
									<div class="step-name fs-color-white custom-fs-13">Order In-Revision</div>
								</div>

								<div class="stepper-item">
									<div class="step-counter">4</div>
									<div class="step-name fs-color-white custom-fs-13">Order Delivered</div>
								</div>

								<div class="stepper-item">
									<div class="step-counter">5</div>
									<div class="step-name fs-color-white custom-fs-13">Order Cancelled</div>
								</div>
							@elseif(isset($order->order_status) && $order->order_status == 'Revision')
								<div class="stepper-item pending_item">
									<div class="step-counter ">1</div>
									<div class="step-name fs-color-white custom-fs-13">Order Pending Approval</div>
								</div>
								<div class="stepper-item">
									<div class="step-counter  ">2</div>
									<div class="step-name fs-color-white custom-fs-13">Order In-Progress</div>
								</div>

								<div class="stepper-item">
									<div class="step-counter  badge-custom-bg">3</div>
									<div class="step-name fs-color-white custom-fs-13">Order In-Revision</div>
								</div>

								<div class="stepper-item">
									<div class="step-counter">4</div>
									<div class="step-name fs-color-white custom-fs-13">Order Delivered</div>
								</div>

								<div class="stepper-item">
									<div class="step-counter">5</div>
									<div class="step-name fs-color-white custom-fs-13">Order Cancelled</div>
								</div>
							@elseif(isset($order->order_status) && $order->order_status == 'Delivered')
								<div class="stepper-item pending_item">
									<div class="step-counter ">1</div>
									<div class="step-name fs-color-white custom-fs-13">Order Pending Approval</div>
								</div>
								<div class="stepper-item">
									<div class="step-counter ">2</div>
									<div class="step-name fs-color-white custom-fs-13">Order In-Progress</div>
								</div>

								<div class="stepper-item">
									<div class="step-counter ">3</div>
									<div class="step-name fs-color-white custom-fs-13">Order In-Revision</div>
								</div>

								<div class="stepper-item">
									<div class="step-counter badge-custom-bg">4</div>
									<div class="step-name fs-color-white custom-fs-13">Order Delivered</div>
								</div>

								<div class="stepper-item">
									<div class="step-counter">5</div>
									<div class="step-name fs-color-white custom-fs-13">Order Cancelled</div>
								</div>
							@elseif(isset($order->order_status) && $order->order_status == 'Canceled')
								<div class="stepper-item pending_item">
									<div class="step-counter ">1</div>
									<div class="step-name fs-color-white custom-fs-13">Order Pending Approval</div>
								</div>
								<div class="stepper-item">
									<div class="step-counter ">2</div>
									<div class="step-name fs-color-white custom-fs-13">Order In-Progress</div>
								</div>

								<div class="stepper-item">
									<div class="step-counter ">3</div>
									<div class="step-name fs-color-white custom-fs-13">Order In-Revision</div>
								</div>

								<div class="stepper-item">
									<div class="step-counter ">4</div>
									<div class="step-name fs-color-white custom-fs-13">Order Delivered</div>
								</div>

								<div class="stepper-item">
									<div class="step-counter badge-custom-bg">5</div>
									<div class="step-name fs-color-white custom-fs-13">Order Cancelled</div>
								</div>
							@endif

						</div>

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
											<a class="nav-link text-white pb-4 defBtn tabBtn" data-bs-toggle="tab" href="#kt_ecommerce_customer_details">Order Details</a>
										</li>
										<!--end:::Tab item-->
										<!--begin:::Tab item-->
										<li class="nav-item">
											<a class="nav-link text-white pb-4 tabBtn" data-bs-toggle="tab" href="#kt_ecommerce_customer_messages">Messages</a>
										</li>
										<!--end:::Tab item-->
										<!--begin:::Tab item-->
										<li class="nav-item">
											<a class="nav-link text-white pb-4 tabBtn" data-bs-toggle="tab" href="#kt_ecommerce_customer_orderFiles">Order Files</a>
										</li>
										<!--end:::Tab item-->
										<li class="nav-item">
											<a class="nav-link text-white pb-4 tabBtn" data-bs-toggle="tab"
												href="#kt_ecommerce_customer_managePages">Manage Pages</a>
										</li>
										<!--end:::Tab item-->

										<!--begin:::Tab item-->
										<li class="nav-item">
										   <a class="nav-link text-white pb-4 tabBtn" data-bs-toggle="tab"
											   href="#kt_ecommerce_customer_rewriteRequest">Revision</a>
									   </li>
									   <!--end:::Tab item-->

										<!--begin:::Tab item-->
										<li class="nav-item">
										   <a class="nav-link text-white pb-4 tabBtn" data-bs-toggle="tab"
											   href="#kt_ecommerce_customer_leaveReview">Leave Review</a>
									   </li>
									   <!--end:::Tab item-->
										<!--begin:::Tab item-->
										<li class="nav-item">
											<a class="nav-link text-white pb-4 tabBtn" data-bs-toggle="tab" href="#kt_ecommerce_customer_support">Support</a>
										</li>

										<!--begin:::Tab item-->
										<li class="nav-item">
											<a class="nav-link text-white pb-4 tabBtn" data-bs-toggle="tab"
												href="#kt_ecommerce_customer_completed_order">Completed Order</a>
										</li>
										<!--end:::Tab item-->

									</ul>
									<!--end:::Tabs-->
									<!--begin:::Tab content-->
									<div class="tab-content" id="myTabContent">
										<!--begin:::Tab pane-->
										<div class="tab-pane fade" id="kt_ecommerce_customer_details" role="tabpanel">
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
																			<div class="card card-custom-bg message-summ">

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
																								<th class="min-w-50px fw_800 pb-8">Doc Type</th>
																								{{-- <th class="min-w-80px fw_800 pb-8">Sources</th> --}}

																							</tr>

																						</thead>
																						<tbody class="text-gray-600 fw-semibold">

																							<tr>
																								<td>{{$order->order_id}}</td>
																								<td>{{$order->number_of_pages}}</td>
																								<td>{{ \Carbon\Carbon::parse($order->created_at)->format('Y/m/d h:iA') }}</td>
																								<td>{{ \Carbon\Carbon::parse($order->deadline)->format('Y/m/d h:iA') }}</td>
																								<td>{{$order->paper_format}}</td>
																								<td>{{$order->subject}}</td>
																								<td>{{$order->type_of_paper}}</td>
																								{{-- <td>{{$order->no_of_extra_sources}}</td> --}}
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
												<div class="row">
													<div class="col-sm-6 mb-10">
														<div class="d-flex">
															<div class="col-6">
																<h3 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0 fs-color-white custom-fs-13">Academic Level</h3>
															</div>
															<div class="col-6">
																<p class="fw-bold text-dark fs-color-white custom-fs-13">{{$order->academic_level}}</p>
															</div>
														</div>
														<div class="d-flex">
															<div class="col-6">
																<h3 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0 fs-color-white custom-fs-13">No of Sources</h3>
															</div>
															<div class="col-6">
																<p class="fw-bold text-dark fs-color-white custom-fs-13">{{$order->no_of_extra_sources}}</p>
															</div>
														</div>
														<div class="d-flex">
															<div class="col-6">
																<h3 class="page-heading d-flex text-gray-900 fw-bold fs-3 fs-color-white custom-fs-13 flex-column justify-content-center my-0">Statistical Analysis</h3>
															</div>
															<div class="col-6">
																<p class="fw-bold fs-color-white custom-fs-13 ">@if($order->statistical_analysis == 0) No @else Yes @endif</p>
															</div>
														</div>
														<div class="d-flex">
															<div class="col-6">
																<h3 class="page-heading d-flex fs-color-white custom-fs-13 fw-bold fs-3 flex-column justify-content-center my-0">Language Style</h3>
															</div>
															<div class="col-6">
																@if($language)
																	<p class="fw-bold fs-color-white custom-fs-13">{{$language->title}}</p>
																@else
																	<p class="fw-bold fs-color-white custom-fs-13">American</p>
																@endif
															</div>
														</div>
														<div class="d-flex">
															<div class="col-6">
																<h3 class="page-heading d-flex fw-bold fs-3 flex-column justify-content-center my-0 fs-color-white custom-fs-13">Topic</h3>
															</div>
															<div class="col-6">
																<p class="fw-bold fs-color-white custom-fs-13">{{$order->topic}}</p>
															</div>
														</div>
														<div class="d-flex">
															<div class="col-6">
																<h3 class="page-heading d-flex fw-bold fs-3 flex-column justify-content-center my-0 fs-color-white custom-fs-13">PowerPoint Slides</h3>
															</div>
															<div class="col-6">
																<p class="fw-bold fs-color-white custom-fs-13">{{$order->powerpoint_slide}}</p>
															</div>
														</div>

														<div class="d-flex">
															<div class="col-6">
																<h3 class="page-heading d-flex fw-bold fs-3 flex-column justify-content-center my-0 fs-color-white custom-fs-13">Files from Customer</h3>
															</div>
															<div class="col-6">
																<p class="fw-bold fs-color-white custom-fs-13">{{$order->submitting}}</p>
															</div>
														</div>
													</div>
													<div class="col-12 fs-color-white">
														<h2 class="page-heading px-3 mb-5 d-flex fw-bold fs-2 flex-column justify-content-center my-0">Instructions</h2>
														{!! $order->description !!}
													</div>

												</div>
											</div>

										</div>

										<!--end:::Tab pane-->
										<!--begin:::Tab pane-->
										<div class="tab-pane fade" id="kt_ecommerce_customer_messages" role="tabpanel">
											<div class="d-flex justify-content-center">
												<div class="col-11">

													<!--begin::Card-->
													<div class="card btn-dark-primary">

														<div class="card-header align-items-center justify-content-end py-5 gap-5">
															<!--begin::Actions-->
															<!--end::Actions-->
															<!--begin::Pagination-->
															<div class="d-flex align-items-center">
																<!--begin::Pages info-->
																<span class="fw-semibold text-muted me-2"></span>
																<!--end::Pages info-->
																<!--begin::Prev page-->
																<!--<a href="#" class="btn btn-sm btn-icon btn-light btn-active-light-primary me-3" data-bs-toggle="tooltip" data-bs-placement="top" title="Previous message">-->
																	<!--<i class="ki-duotone ki-left fs-2 m-0"></i>-->
																<!--</a>-->
																<!--end::Prev page-->
																<!--begin::Next page-->
																<!--<a href="#" class="btn btn-sm btn-icon btn-light btn-active-light-primary me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Next message">-->
																	<!--<i class="ki-duotone ki-right fs-2 m-0"></i>-->
																<!--</a>-->
																<!--end::Next page-->
																<!--begin::Settings menu-->
																<div>
																	<!--<a href="#" class="btn btn-sm btn-icon btn-light btn-active-light-primary me-2" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-bs-toggle="tooltip" data-bs-placement="top" title="Settings">-->
																	<!--	<i class="ki-duotone ki-dots-square fs-2 m-0">-->
																	<!--		<span class="path1"></span>-->
																	<!--		<span class="path2"></span>-->
																	<!--		<span class="path3"></span>-->
																	<!--		<span class="path4"></span>-->
																	<!--	</i>-->
																	<!--</a>-->
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
															<div class="d-flex align-items-center">
														<!--begin::Dismiss reply-->
														<span class="btn btn-icon btn-sm btn-clean btn-active-light-primary clear_message_box" id="delete_btn" data-inbox="dismiss" data-toggle="tooltip" title="Discard reply">
															<i class="ki-duotone ki-trash fs-2">
																<span class="path1"></span>
																<span class="path2"></span>
																<span class="path3"></span>
																<span class="path4"></span>
																<span class="path5 clear_message_box"></span>
															</i>
														</span>
														<!--end::Dismiss reply-->
													</div>
														</div>
														<div class="card-body">
															<!--begin::Form-->
															<form id="kt_inbox_reply_form" class="rounded border mb-10">
																<div class="d-block">
																  <div class="d-flex align-items-center border-bottom min-h-50px justify-content-between py-5">
																	   <div class="border d-flex p-3 align-items-center rounded me-3 ">
																		   <div class="btn-group me-4">
																			  <button class="btn badge-custom-bg fs-bold px-6" type="submit" >Send</button>

																		   </div>

																		   <div class="btn btn-icon btn-sm btn-clean btn-active-light-primary me-2 w-250px justify-content-between" id="media_button" data-kt-inbox-form="dropzone_upload">

																			   <label><span class="ki-duotone ki-paper-clip fs-2 m-0"></span><input hidden type="file" accept=".pdf, .docx, .doc, .txt, .xls, .xlsx , .rtf, .xlsx, .csv, .pptx, .jpeg, .png, .gif" class="upload-attachment" name="media[]" id="media" multiple/></label>
																			   <p id="file_name" class="text-white"></p>
																		   </div>

																	   </div>


																	   <div>
																		<input type="radio" id="AdminRadio" class="radioAdminWriter" name="statusRadio" value="Admin"  >
																		<label for="AdminRadio">Admin</label>
																	</div>
																	<div>
																		<input type="radio" id="WriterRadio" class="radioAdminWriter" name="statusRadio" value="Writer" >
																		<label for="WriterRadio">Writer</label>
																	</div>


																	   <div class="text-center me-3">
																		   <input class="form-select form-select-solid form-select-sm" value="{{$order->order_id}}" name='order_id' hidden>
																		   order id: <span class="badge badge-custom-bg ms-3">{{$order->order_id}}</span>
																	   </div>

																	   <!--<div class="border d-flex p-3 align-items-center rounded me-3">-->

																	   <!--    <div class="text-gray-900 fw-bold w-75px">To:</div>-->



																	   <!--</div>-->

													<!--                                   <div class="d-flex align-items-center">-->

													<!--                                       <span class="btn btn-icon btn-sm btn-clean btn-active-light-primary clear_message_box" data-inbox="dismiss" data-toggle="tooltip" title="Discard reply">-->
													<!--                                           <i class="ki-duotone ki-trash fs-2">-->
													<!--                                               <span class="path1"></span>-->
													<!--                                               <span class="path2"></span>-->
													<!--                                               <span class="path3"></span>-->
													<!--                                               <span class="path4"></span>-->
													<!--                                               <span class="path5"></span>-->
													<!--                                           </i>-->
													<!--                                       </span>-->

													<!--                                   </div>-->
													<!--                                </div>-->
													<!--                               <div id="kt_inbox_form_editor" class="border-0 h-250px px-3">-->
													<!--    <textarea class="form-control form-control-transparent border-0 h-100" id="message_box" name="message" placeholder="Message Here" value="" ></textarea>-->
													<!--</div>-->


														<!--end::Toolbar-->
													</div>
													<!--end::To-->
													<!--begin::CC-->

													<!--end::CC-->
													<!--begin::BCC-->

													<!--end::BCC-->
													<!--begin::Message-->
													<!--<div id="kt_inbox_form_editor" class="border-0 h-250px px-3">-->
													<!--    <textarea class="form-control form-control-transparent border-0 h-100" id="message_box" name="message" id="message_box" placeholder="Message Here" value="" ></textarea>-->
													<!--</div>-->

													<!--<div class="d-flex align-items-center">-->
															<!--begin::Dismiss reply-->
													<!--        <span class="btn btn-icon btn-sm btn-clean btn-active-light-primary clear_message_box" id="delete_btn" data-inbox="dismiss" data-toggle="tooltip" title="Discard reply">-->
													<!--            <i class="ki-duotone ki-trash fs-2">-->
													<!--                <span class="path1"></span>-->
													<!--                <span class="path2"></span>-->
													<!--                <span class="path3"></span>-->
													<!--                <span class="path4"></span>-->
													<!--                <span class="path5 clear_message_box"></span>-->
													<!--            </i>-->
													<!--        </span>-->
															<!--end::Dismiss reply-->
													<!--    </div>-->
														<!--end::Toolbar-->
													<!--</div>-->
													<!--end::To-->
													<!--begin::CC-->

													<!--end::CC-->
													<!--begin::BCC-->

													<!--end::BCC-->
													<!--begin::Message-->
													<!--<div id="kt_inbox_form_editor" class="border-0 h-250px px-3">-->
													<!--    <textarea class="form-control form-control-transparent border-0 h-100" id="message_box" name="message" id="message_box" placeholder="Message Here" value="" ></textarea>-->
													<!--</div>-->



														<!--end::Toolbar-->
																</div>
																<!--end::To-->
																<!--begin::CC-->

																<!--end::CC-->
																<!--begin::BCC-->

																<!--end::BCC-->
																<!--begin::Message-->
																<!-- <div id="kt_inbox_form_editor" class="border-0 h-250px px-3">
																	<textarea class="form-control form-control-transparent border-0 text-white h-100" id="message_box" name="message" id="message_box" placeholder="Message Here" value="" ></textarea>
																</div> -->
																<!-- <div id="toolbar">
										<button class="ql-bold">Bold</button>
										<button class="ql-italic">Italic</button>
										</div> -->

																		<!-- Create the editor container -->

																		<div id="editor"></div>
																		<textarea name="message" id="message" cols="30" rows="10" class="d-none"></textarea>



																   <div class="dropzone dropzone-queue px-8 py-4" id="kt_inbox_reply_attachments" data-kt-inbox-form="dropzone">
																	   <div class="dropzone-items">
																		   <div class="dropzone-item" style="display:none">
																				<div class="dropzone-file">
																				   <div class="dropzone-filename" title="some_image_file_name.jpg">
																					   <span data-dz-name="">some_image_file_name.jpg</span>
																					   <strong>(
																						   <span data-dz-size="">340kb</span>)</strong>
																				   </div>
																				   <div class="dropzone-error" data-dz-errormessage=""></div>
																			   </div>

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
															<!--<div class="d-flex flex-wrap gap-2 justify-content-end mb-8">-->

															<!--	<div class="d-flex">-->
																	<!--begin::Sort-->
															<!--		<a href="#" class="btn btn-sm btn-icon btn-light btn-active-light-primary me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Sort">-->
															<!--			<i class="ki-duotone ki-arrow-up-down fs-2 m-0">-->
															<!--				<span class="path1"></span>-->
															<!--				<span class="path2"></span>-->
															<!--			</i>-->
															<!--		</a>-->
																	<!--end::Sort-->
																	<!--begin::Print-->
															<!--		<a href="#" class="btn btn-sm btn-icon btn-light btn-active-light-primary me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Print">-->
															<!--			<i class="ki-duotone ki-printer fs-2">-->
															<!--				<span class="path1"></span>-->
															<!--				<span class="path2"></span>-->
															<!--				<span class="path3"></span>-->
															<!--				<span class="path4"></span>-->
															<!--				<span class="path5"></span>-->
															<!--			</i>-->
															<!--		</a>-->
																	<!--end::Print-->
															<!--	</div>-->
															<!--</div>-->
															<!--end::Title-->
															<!--begin::Message accordion-->
															<livewire:message-box :order_id="$order->order_id" />

															<!--end::Message accordion-->

														</div>
													</div>
													<!--end::Card-->
												</div>
											</div>

										<!--end:::Tab pane-->

										<!--begin:::Tab pane-->
										<div class="tab-pane fade " id="kt_ecommerce_customer_orderFiles" role="tabpanel">
											<div class="card card-flush card-custom-bg message-summ">
												<!--begin::Card header-->
												<div class="card-title pt-8 ps-8">
													<!--begin::Search-->
													<div class="d-flex align-items-center position-relative my-1">
														<i class="ki-duotone ki-magnifier fs-1 position-absolute ms-6">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
														<!--<input type="text" data-kt-filemanager-table-filter="search" class="form-control form-control-solid w-250px ps-15 searchInput" placeholder="Search">-->
														<input type="text" id="searchInput" data-kt-filemanager-table-filter="search"
															class="form-control form-control-solid w-250px ps-15 btn-dark-primary" placeholder="Search " />
													</div>
													<!--end::Search-->
												</div>

												<div class="card-header pt-8 justify-content-end">

													<div class="card-toolbar">
														<div class="d-flex justify-content-end" data-kt-filemanager-table-toolbar="base">
															<button type="button" class="btn btn-flex badge-custom-bg w-100 justify-content-center px-2 ms-3  deleteBtnForm" style="display: none;" >
																Delete</button>
														</div>
														<div class="d-flex justify-content-end" data-kt-filemanager-table-toolbar="base">
															<button type="button" class="btn btn-flex badge-custom-bg w-100 justify-content-center px-2 ms-3  downloadBtnForm" style="display: none;" >
																Download</button>
														</div>
														<div class="d-flex justify-content-end" data-kt-filemanager-table-toolbar="base">
																<button type="button" class="btn btn-flex badge-custom-bg w-100 justify-content-center px-2 ms-3" data-bs-toggle="modal" data-bs-target="#kt_modal_uploadCustomer_2">
																	<i class="ki-duotone ki-folder-up fs-2">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>Upload Files</button>
														</div>
													</div>
												</div>


												<!--begin::Modal - Upload File-->
												<div class="modal fade" id="kt_modal_uploadCustomer_2" tabindex="-1" aria-hidden="true">
												<!--begin::Modal dialog-->
												<div class="modal-dialog modal-dialog-centered mw-650px">
													<!--begin::Modal content-->
													<div class="modal-content badge-custom-bg">
														<!--begin::Form-->
														<form method="post" action="{{ route('customer.file.upload') }}" enctype="multipart/form-data" class="form"  id="kt_modal_upload_form">
															<!--begin::Modal header-->
															@csrf

															<!--begin::Modal header-->
															<div class="modal-header">
																<!--begin::Modal title-->
																<h2 class="fw-bold fs-color-white custom-fs-23">Upload files for customer</h2>
																<!--end::Modal title-->
																<!--begin::Close-->
																<div class="btn btn-icon btn-sm btn-active-icon-primary text-white" data-bs-dismiss="modal">
																	<i class="ki-duotone ki-cross fs-1">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>
																</div>
																<!--end::Close-->
															</div>
															<!--end::Modal header-->
															<!--begin::Modal body-->
															<div class="modal-body pt-10 pb-15 px-lg-17">
																<!--begin::Input group-->
																<div class="form-group">
																	<!--begin::Dropzone-->
																	<div class="dropzone dropzone-queue mb-2" id="kt_modal_upload_dropzone">
																		<!--begin::Controls-->
																		<div class="dropzone-panel mb-4 w-100">
																			<label for="file-3" class="dropzone-select btn btn-sm btn-dark-primary me-2">Attach Files</label>
																			<input type="file" id="file-3" name="file" class="d-none" accept=".pdf, .docx, .doc, .txt, .xls, .xlsx"></input>
																			<p id="attach_file" class="attach_file"></p>
																			<input type="hidden" value="Customer" name="Writer">
																			<input type="hidden" value="{{ $folder->name??'' }}" name="folder_name">
																			<input type="hidden" value="{{ $folder->id??'' }}" name="folder_id">

																		</div>
																		<!--end::Controls-->
																	</div>
																	<!--end::Dropzone-->
																	<span class="form-text fs-6 text-muted mb-2">DOCX, PDF, TXT, RTF,XLSX, CSV,PPTX,JPEG, PNG, GIF</span>
																	<br>
																	<!--begin::Hint-->
																	<span class="form-text fs-6 text-muted mb-2 fs-color-white custom-fs-13">Max file size is 500-MB per file.</span>
																	<!--end::Hint-->
																	<div class="d-flex justify-content-end">

																		<input type="submit" class="btn btn-sm btn-dark-primary" Value="Upload Files">
																	</div>
																</div>
																<!--end::Input group-->
															</div>
															<!--end::Modal body-->
														</form>
														<!--end::Form-->
													</div>
												</div>
												</div>
												<!--end::Modal - Upload File-->

												<!--end::Card header-->
												<!--begin::Card body-->
												<div class="card-body">
													<!--begin::Table header-->
													<div class="d-flex flex-stack">
														<!--begin::Folder path-->
														<?php
														$files = DB::table('folders')
															->join('files', 'folders.id', '=', 'files.folder_id')
															->select('files.*')
															->latest('files.created_at')
															->where('folders.id', $folder->id)
															->paginate(10);

														$filesCount = $files->total();
														$totalSize = 0;
														foreach ($files as $file) {
															$totalSize += $file->total_size;
														}
														$units = ['B', 'KB', 'MB', 'GB', 'TB'];
														for ($i = 0; $totalSize >= 1024 && $i < count($units) - 1; $i++) {
															$totalSize /= 1024;
														}

														$formattedSize = round($totalSize, 0) . ' ' . $units[$i];
														if (!$folder) {
															return abort(404);
														}
														?>
														<!--end::Folder path-->
														<!--begin::Folder Stats-->
														<div class="badge badge-lg badge-custom-bg">
															<span id="kt_file_manager_items_counter">{{ $filesCount }} items</span>
														</div>
														<!--end::Folder Stats-->
													</div>
													<!--end::Table header-->

													<!--begin::Table-->
													<div id="kt_order_file_table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
														<div class="table-responsive">
															{{-- customer-files-upload --}}
															<form id="delete_or_download_form" action="{{ route('customer.all.files.download', ['folder_name'=>$folder->name]) }}" method="GET" enctype="multipart/form-data">
																<input type="hidden" name="delete" id="delete_input_field">
																<input type="hidden" name="download" id="download_input_field">
																<input type="hidden" name="folder_name" value="{{$folder->name??''}}">

																<table id="kt_order_file_table" data-kt-filemanager-table="files" class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer">
																	<thead>
																		<tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
																			<th class="w-30px pe-2" style="width: 29.8906px;">
																				<div class="form-check form-check-sm form-check-custom form-check-solid me-3">
																					<input class="form-check-input" type="checkbox" id="selectAll">
																				</div>
																			</th>
																			<th class="w-25" style="width: 177px;">File Title</th>
																			<th class="w-25" style="width: 177px;">File Type</th>
																			<th class="w-25" style="width: 177px;" >Size</th>
																			<th class="w-25" style="width: 177px;" >Uploaded By</th>
																			<th class="w-25" style="width: 177px;" >Uploaded For</th>
																			<th class="w-25" style="width: 177px;">Last Modified</th>
																			<th class="w-25" style="width: 177px;">Download time</th>
																			<th class="w-25" style="width: 177px;">Action</th>
																		</tr>
																	</thead>
																	<tbody class="fw-semibold text-gray-600">
																		@if($files)
																			@foreach ($files as $file)
																			<tr class="odd">
																				<td>
																					<div class="form-check form-check-sm form-check-custom form-check-solid ">
																						<input type="checkbox" name="selectedIds[]" value="{{ $file->id }}" class="form-check-input row_checkbox">
																					</div>
																				</td>

																				<td class="w-25">
																					<div class="d-flex align-items-center">
																						<span class="icon-wrapper"><i class="ki-duotone ki-file fs-2x text-primary me-4"><span class="path1"></span><span class="path2"></span></i></span>
																						<a href="#" class="text-gray-800 text-hover-primary">{{ $file->title }}</a>
																					</div>
																				</td>

																				<td class="w-25">{{ $file->file_type }}</td>
																				<td class="w-25">{{$file->Size }}</td>
																				@auth
																					<td class="w-25">{{ Auth::user()->role }}</td>
																				@endauth
																				<td class="w-25">Writer</td>
																				<td class="w-25">{{ $file->created_at }}</td>
																				<td class="w-25">{{ $file->download_time }}</td>
																				<td class="text-end text-white" data-kt-filemanager-table="action_dropdown">
																					<div class="d-flex justify-content-end w-25">
																						<div class="ms-2">
																							<button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
																								<i class="ki-duotone ki-dots-square fs-5 m-0">
																									<span class="path1"></span>
																									<span class="path2"></span>
																									<span class="path3"></span>
																									<span class="path4"></span>
																								</i>
																							</button>
																							<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4 badge-custom-bg" data-kt-menu="true">
																								<div class="menu-item px-3">
																									<a class="menu-link text-danger px-3" href="{{ route('customer.files.download', ['id' => $file->id,'folder_name'=>$folder->name]) }}">Download File</a>
																								</div>

																								<div class="menu-item px-3">
																									<a class="menu-link text-danger px-3" onclick="confirmDelete({{ $file->id }}, '{{ $folder->name }}')">Delete</a>
																								</div>
																								<!--end::Menu-->
																							</div>
																						<!--end::More-->
																						</div>
																					</div>
																				</td>
																			</tr>
																			@endforeach
																		@endif
																	</tbody>
																</table>
															</form>
														</div>
													</div>
													<!--end::Table-->
												</div>
												<!--end::Card body-->
											</div>
										</div>

										@php
                                                $hasSubscription = DB::table('user_subscription')->where('user_id', Auth::id())->exists();
                                            @endphp





										<!--end:::Tab pane-->
										<div class="tab-pane fade" id="kt_ecommerce_customer_managePages" role="tabpanel">
										     @if($hasSubscription)
											<div class="card my-10 card-custom-bg">
												<div class="row p-5 mb-5">
													<div class="col-md-12">
														<div class="row">
															<div class="col-lg-8 col-md-8">
																<section class="mb-10">
																	<div class="row justify-content-between px-3">
																		<div class="col-md-5 card-custom-bg mb-5 rounded">

																			<div class=" p-3">
																				<h2
																					class="text-gray-900 fw-bold fs-color-white custom-fs-13 fs-2 mb-5">
																					Page Adjustment Section</h2>
																				<h5 class=" mb-2 fs-color-white custom-fs-13">Add More Pages</h5>
																				<input type="number"
																					class="form-control mb-5 btn-dark-primary"
																					id="pageCount"
																					placeholder="Enter page count" min="0">
																					 <p class="fs-3 fs-color-white custom-fs-13">Total Cost: $<span
																						id="totalCost" class="fs-color-yellow">0.00</span></p>


																			</div>
																		</div>
																		<div class="col-md-5 card-custom-bg mb-5 rounded current-order-summary">

																			<div class=" p-3">
																				<h2
																					class="text-gray-900 fw-bold fs-2 mb-xl-10 fs-color-white custom-fs-13">
																					Current Order Summary:</h2>
																				<h5 class=" mb-2 fs-color-white custom-fs-13">Your Current Page
																					Count:</h5>
																				<p class="fs-3 fs-color-white custom-fs-13 fs-color-yellow"><span
																						id="totalCost" class="fs-color-yellow numpage">{{$order->number_of_pages??''}}</span></p>
																			</div>
																			<div class=" p-3">
																				<h5 class=" mb-2 fs-color-white custom-fs-13">Projected Page Count:
																				</h5>
																				<p class="fs-3 fs-color-white custom-fs-13"><span
																						class="fs-color-yellow totalpageg">0</span></p>
																						<input type="hidden" value="{{$used_subscription->remaining_pages??''}}" id="totalCost1"/>
																			</div>
																		</div>
																		<div class="col-md-5 card-custom-bg mb-5 rounded">

																			<div class="p-3">
																				<h2
																					class="text-gray-900 fw-bold fs-2 mb-5 fs-color-white custom-fs-13">
																					Deadline Adjustment</h2>
																				<h5 class="mb-2 fs-color-white custom-fs-13">Change Deadline</h5>
																				<input class="form-control btn-dark-primary"
																					type="datetime-local"
																					id="meeting-time_custom"
																					name="meeting-time"
																					value="{{$order->deadline}}"
																					min="{{$order->deadline}}"
																					/>

																			</div>
																		</div>
																		<div class="col-md-5 rounded">
																			<!--<button -->
																			<!--    class="px-2 btn badge-custom-bg"-->
																			<!--    id="proceedButton" data-toggle="modal" data-target="#modal-15" onclick="modal_open12()">Proceed to-->
																			<!--    Checkout</button>-->


																				 <button type="button" class="px-2 btn badge-custom-bg mt-4"  data-bs-toggle="modal" data-bs-target="#custom-modal">
																				Proceed to Checkout
																			</button>

																		</div>
																	</div>


																</section>

																 <div class="modal fade" id="custom-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
																	<div class="modal-dialog">
																		<div class="modal-content badge-custom-bg">

																			<form   enctype="multipart/form-data" class="form" id="kt_modal_upload_form">
																				<!--begin::Modal header-->
																				<input type="hidden" name="_token" value="jgx5GfFAnNH462cMW6Yt1oQX3DqCkbqgmk8HcDJ0" autocomplete="off">
																				<!--begin::Modal header-->
																				<div class="modal-header">
																					<!--begin::Modal title-->
																					<h2 class="fw-bold fs-color-white custom-fs-23">Manage Your Pages</h2>
																					<!--end::Modal title-->
																					<!--begin::Close-->
																					<div class="btn btn-icon btn-sm btn-active-icon-primary text-white" data-bs-dismiss="modal">
																						<i class="ki-duotone ki-cross fs-1">
																							<span class="path1"></span>
																							<span class="path2"></span>
																						</i>
																					</div>
																					<!--end::Close-->
																				</div>
																				<!--end::Modal header-->
																				<!--begin::Modal body-->
																				<div class="modal-body pt-10 pb-15 ">
																					<!--begin::Input group-->
																					<div class="form-group">
																						<!--begin::Dropzone-->
																						<div class=" p-2">
																							<h5 class="fs-6 text-muted mb-2 fs-color-white custom-fs-13">Required Pages:
																							</h5>
																						<p class="fs-6 text-muted mb-2 fs-color-white custom-fs-13"><span class="RequiredPages" class="fs-color-yellow totalpageg">2</span></p>
																						</div>
																						<!--end::Dropzone-->
																						<div class=" p-2">
																							<h5 class="fs-6 text-muted mb-2 fs-color-white custom-fs-13">Remaining Pages
																							</h5>
																					<p class="fs-6 text-muted mb-2 fs-color-white custom-fs-13"><span class="RemainingPages" class="fs-color-yellow totalpageg">5</span></p>
																						</div>
																						<!--end::Hint-->

																						<div class="form-check mb-4">
																							<input class="form-check-input radiobuttonpayment" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="currentpakage">
																							<label class="form-check-label text-white" for="flexRadioDefault1">
																								Use <span class="RequiredPages">0</span>  Pages from Current Package (Pages Remaining in Your Package: <span class="RemainingPages">0</span>)
																							</label>
																						</div>
																						<div class="form-check mt-4">
																							<input class="form-check-input radiobuttonpayment" value="cardpakage" type="radio" name="flexRadioDefault" id="flexRadioDefault2"  checked>
																							<label class="form-check-label text-white" for="flexRadioDefault2">
																								Purchase <span class="RequiredPages">0</span> Additional Pages (Pages Remaining in Your Package: <span class="RemainingPages">0</span>)Total $<span id="totalcostreq">0</span> (Per Page $<span id="pakg_cost_per_page">{{$order->cost_per_page}}</span>)
																							</label>


																							<input type="hidden" value="{{$used_subscription->id??''}}" id="used_package_id">
																							<input type="hidden" value="{{$used_subscription->subscription_id??''}}" id="package_id">
																							<input type="hidden" value="{{$used_subscription->subscription['cost_per_page']??''}}" id="cost_per_page">

																						</div>

																						<div class="d-flex justify-content-end">
																							<!--begin::Button-->
																							<button type="reset" data-kt-contacts-type="cancel" class="btn btn-dark-primary me-3" data-bs-dismiss="modal">
																								Cancel
																							</button>
																							<!--end::Button-->

																							<!--begin::Button-->
																							<button type="button" class="btn btn-dark-primary" onclick="modal_open122()" data-bs-confirm="modal">
																								<span class="indicator-label">
																									Confirm
																								</span>
																								<span class="indicator-progress">
																									Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
																								</span>
																							</button>
																							<!--end::Button-->
																						</div>
																					</div>

																				</div>
																				<!--end::Modal body-->
																			</form>
																			<!--end::Form-->
																		</div>
																	</div>
																</div>
															</div>
															<div class="col-lg-4 col-md-4">
																<section class="mb-10">
																	<h3 class="text-gray-900 fw-bold fs-1 mb-5 fs-color-white custom-fs-23">
																		Information Section</h3>
																	<div>
																		<ul>
																			<li class="fs-color-white custom-fs-13">
																				Contact our customer support for assistance. Thank you for choosing our service!
																			</li>


																		</ul>
																	</div>
																</section>
															</div>
														</div>
													</div>

												</div>
											</div>
											 @else
                                              <div class="card my-10 card-custom-bg">
												<div class="row p-5 mb-5">
													<div class="col-md-12">
														<div class="row">
															<div class="col-lg-8 col-md-8">
																<section class="mb-10">
																	<div class="row justify-content-between px-3">
																		<div class="col-md-5 card-custom-bg mb-5 rounded">

																			<div class=" p-3">
																				<h2
																					class="text-gray-900 fw-bold fs-color-white custom-fs-13 fs-2 mb-5">
																					Page Adjustment Section</h2>
																				<h5 class=" mb-2 fs-color-white custom-fs-13">Add More Pages</h5>
																				<input type="number"
																					class="form-control mb-5 btn-dark-primary"
																					id="pageCount"
																					placeholder="Enter page count">
																				<h5 class="mb-2 fs-color-white custom-fs-13">Cost Calculator</h5>
																				<p class="fs-3 fs-color-white custom-fs-13">Total Cost: $<span
																						id="totalCost" class="fs-color-yellow">0.00</span></p>
																			</div>
																		</div>
																		<div class="col-md-5 card-custom-bg mb-5 rounded current-order-summary">

																			<div class=" p-3">
																				<h2
																					class="text-gray-900 fw-bold fs-2 mb-xl-10 fs-color-white custom-fs-13">
																					Current Order Summary</h2>
																				<h5 class=" mb-2 fs-color-white custom-fs-13">Your Current Page
																					Count</h5>
																				<p class="fs-3 fs-color-white custom-fs-13 fs-color-yellow"><span
																						id="totalCost" class="fs-color-yellow numpage" >{{$order->number_of_pages}}</span></p>
																			</div>
																			<div class=" p-3">
																				<h5 class=" mb-2 fs-color-white custom-fs-13">Projected Page Count:
																				</h5>
																				<p class="fs-3 fs-color-white custom-fs-13"><span
																						id="totalCost" class="fs-color-yellow totalpageg">0</span></p>
																			</div>
																		</div>
																		<div class="col-md-5 card-custom-bg mb-5 rounded">

																			<div class="p-3">
																				<h2
																					class="text-gray-900 fw-bold fs-2 mb-5 fs-color-white custom-fs-13">
																					Deadline Adjustment</h2>
																				<h5 class="mb-2 fs-color-white custom-fs-13">Change Deadline</h5>
																				<input class="form-control btn-dark-primary"
																					type="datetime-local"
																					id="meeting-time_custom"
																					name="meeting-time"
																					value="{{$order->deadline}}"
																					min="{{$order->deadline}}"
																					/>

																			</div>
																		</div>
																		<div class="col-md-5 rounded">
																			<button
																				class="px-2 btn badge-custom-bg"
																				id="proceedButton" data-toggle="modal" data-target="#modal-15" onclick="modal_open1()">Proceed to
																				Checkout</button>
																				<!--<button type="button" class="px-2 btn badge-custom-bg mt-4" data-bs-toggle="modal" data-bs-target="#custom-modal">-->
																				<!--     Proceed to Checkout 2-->
																				<!-- </button>-->
																		</div>

																	</div>


																</section>

															</div>
															<div class="col-lg-4 col-md-4">
																<section class="mb-10">
																	<h3 class="text-gray-900 fw-bold fs-1 mb-5 fs-color-white custom-fs-23">
																		Information Section
																	</h3>
																	<div>
																		<ul>
																			<li class="fs-color-white custom-fs-13">
																				Upgrade to a Package for More Savings!
																			</li>
																			<li class="fs-color-white custom-fs-13">
																				Discounted rates on extra pages
																			</li>
																			<li class="fs-color-white custom-fs-13">
																				Exclusive perks
																			</li>
																			<li class="fs-color-white custom-fs-13">Simplified ordering for future projects</li>

																		</ul>
																	</div>
																	<h4 class="text-gray-900  mb-5 fs-color-white custom-fs-23">
																		Upgrade now to maximize savings!
																	</h4>
																</section>
															</div>
														</div>
													</div>

												</div>
											</div>
                                            @endif

										</div>

										<!--end:::Tab pane-->

										<!--begin:::Tab pane-->
										<div class="tab-pane fade" id="kt_ecommerce_customer_rewriteRequest" role="tabpanel">
											<div class="d-flex mb-5">
												<h3
													class="page-heading d-flex text-gray-900 fs-color-white custom-fs-23 fw-bold fs-3 flex-column justify-content-center ">
													Request a Rewrite of Order</h3><span
													class="badge badge-custom-bg my-1 ms-2 ">#{{$order->order_id}}</span>
											</div>
											<div class="d-flex flex-column flex-lg-row">

												<div class="px-3 col-md-9">
													<div class="col-md-10 mb-5 re-req">

															<input type="hidden" id="order_id_revision" name="order_id" value="{{$order->order_id}}">
															<input type="hidden" name="_token" id="csrf-token" value="{{ csrf_token() }}">

															<!-- Create the editor container -->
															<div id="requestRevisionEditor" class="bg-transparent h-100 btn-dark-primary mb-4"></div>
															<textarea name="request_revision" id="request_revision" style="display: none" cols="30" rows="10"></textarea>
															@if($order->order_status != 'Delivered')
																<button type="button" disabled class="btn badge-custom-bg send_rewrite" id="send_rewrite">Send</button>
															@else
																<button type="button" class="btn badge-custom-bg send_rewrite" id="send_rewrite">Send</button>
															@endif




													</div>

														@if(isset($order->request))
														@foreach ($order->request as $r)
														<div class="card p-10 ">
														<p class="mb-5">{{$r->request}}</p>
														<p style="margin-left: auto">{{$r->created_at}}</p>
														</div>
														@endforeach
														@endif



												</div>

											</div>
										</div>
										<!--end:::Tab pane-->
										<!--begin:::Tab pane-->
										<div class="tab-pane fade" id="kt_ecommerce_customer_leaveReview" role="tabpanel">
											<div class="d-flex mb-5">
												<h3
													class="page-heading fs-color-white custom-fs-23 d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center mb-0">
													Order Status: </h3><span
													class="badge badge-custom-bg my-1 ms-2 ">{{$order->order_status}}</span>
											</div>

											<div class="row mb-5">

												<div class="col-md-7">
													<p class="mb-5 fs-color-white custom-fs-13">
														Please take a moment to provide us with feedback about the
														writer. By leaving a review, you help us to maintain strict
														quality controls over our individual writers. That-in turn-helps
														our company to provide you and others with consistently
														excellent service, both now and in the future.
													</p>

													<div class="card card-custom-bg p-5 mb-3">
														<h3
															class="page-headingc fs-color-white custom-fs-17 d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center mb-5">
															General Setting</h3>

															<div class="row">
																<div class="col-sm-4">
																	<button  class="bg-transparent border-0" onclick="click_feedback('General Setting','Happy')"><img
																			src="{{asset('backend/assets/media/ws/happy.png')}}"
																			alt=""></button>
																</div>
																<div class="col-sm-4" onclick="click_feedback('General Setting','Sad')">
																	<button  class="bg-transparent border-0"><img
																			src="{{asset('backend/assets/media/ws/sad.png')}}"
																			alt=""></button>
																</div>
																<div class="col-sm-4" onclick="click_feedback('General Setting','Angry')">
																	<button class="bg-transparent border-0"><img
																			src="{{asset('backend/assets/media/ws/angry.png')}}"
																			alt=""></button>
																</div>
															</div>

													</div>
													<div class="card p-5 mb-3 card-custom-bg">
														<h3
															class="page-heading d-flex text-gray-900 fs-color-white custom-fs-17 fw-bold fs-3 flex-column justify-content-center mb-5">
															Quality of Writing</h3>

															<div class="row">
																<div class="col-sm-4">
																	<button  class="bg-transparent border-0" onclick="click_feedback('Quality of Writing','Happy')"><img
																			src="{{asset('backend/assets/media/ws/happy.png')}}"
																			alt=""></button>
																</div>
																<div class="col-sm-4" onclick="click_feedback('Quality of Writing','Sad')">
																	<button  class="bg-transparent border-0"><img
																			src="{{asset('backend/assets/media/ws/sad.png')}}"
																			alt=""></button>
																</div>
																<div class="col-sm-4" onclick="click_feedback('Quality of Writing','Angry')">
																	<button class="bg-transparent border-0"><img
																			src="{{asset('backend/assets/media/ws/angry.png')}}"
																			alt=""></button>
																</div>
															</div>

													</div>
													<div class="card p-5 mb-3 card-custom-bg">
														<h3
															class="page-heading d-flex text-gray-900 fs-color-white custom-fs-17 fw-bold fs-3 flex-column justify-content-center mb-5">
															Time Lines</h3>

															<div class="row">
																<div class="col-sm-4">
																	<button  class="bg-transparent border-0" onclick="click_feedback('Time Lines','Happy')"><img
																			src="{{asset('backend/assets/media/ws/happy.png')}}"
																			alt=""></button>
																</div>
																<div class="col-sm-4" onclick="click_feedback('Time Lines','Sad')">
																	<button  class="bg-transparent border-0"><img
																			src="{{asset('backend/assets/media/ws/sad.png')}}"
																			alt=""></button>
																</div>
																<div class="col-sm-4" onclick="click_feedback('Time Lines','Angry')">
																	<button class="bg-transparent border-0"><img
																			src="{{asset('backend/assets/media/ws/angry.png')}}"
																			alt=""></button>
																</div>
															</div>
													</div>

												</div>
												<div class="col-md-5">
													<div class="card p-5 card-custom-bg">

														<form action="{{route('customer.order-detail-feedback')}}" method="POST" id="feedback_form">
															@csrf
															<label for="feedback" class="mb-3 fs-color-white custom-fs-13">Feedback Comments (100 characters remaining)</label>
															<div id="feedbackEditor" class="bg-transparent btn-dark-primary h-100 mb-4"></div>
															<textarea name="feedback" id="feedback" cols="30" rows="10" class="d-none"></textarea>
															<input type="hidden" id="order_id_get" name="order_id" value="{{$order->order_id}}">
															@error('feedback')
																<span class="text-danger">{{$message}}</span>
															@enderror
															<div class="d-flex justify-content-center">
														@if($order->order_status != 'Delivered')

																<button type="button" disabled class="btn btn-sm fw-bold badge-custom-bg me-3">Submit</button>
														@else
															<button type="button" class="btn btn-sm fw-bold badge-custom-bg me-3 feedSubmit">Submit</button>

														@endif
															</div>
														</form>

														{{-- @if ($order->order_status == 'Delivered')
															<form action="{{route('customer.order-detail-feedback')}}" method="POST" id="feedback_form">
																@csrf
																<label for="feedback" class="mb-3 fs-color-white custom-fs-13">Feedback Comments (100 characters remaining)</label>
																<textarea name="feedback" id="feedback" cols="30" rows="10" class="w-100 form-control mb-3 btn-dark-primary fs-color-white custom-fs-13"></textarea>
																@error('feedback')
																	<span class="text-danger">{{$message}}</span>
																@enderror
																<input type="hidden" id="order_id_get" name="order_id" value="{{$order->order_id}}">
																<div class="d-flex justify-content-center">
																	<button type="button" class="btn btn-sm fw-bold badge-custom-bg me-3 feedSubmit">Submit</button>

																</div>
															</form>

															<div class="mb-3 text-center mt-3">
																@if(count($order['feedback']) > 0 )
																	<span class="text-success">Feedback already given</span>
																@endif
															</div>
														@else
															<form action="{{route('customer.order-detail-feedback')}}" method="POST" id="feedback_form">
																@csrf
																<label for="feedback" class="mb-3 fs-color-white custom-fs-13">Feedback Comments (100 characters remaining)</label>
																<textarea name="feedback" disabled id="feedback" cols="30" rows="10" class="w-100 form-control mb-3 btn-dark-primary fs-color-white custom-fs-13"></textarea>
																@error('feedback')
																	<span class="text-danger">{{$message}}</span>
																@enderror
																<input type="hidden" id="order_id_get" name="order_id" value="{{$order->order_id}}">
																<div class="d-flex justify-content-center">
																	<button type="button" disabled class="btn btn-sm fw-bold badge-custom-bg me-3 feedSubmit">Submit</button>
																</div>
															</form>
														@endif --}}

													</div>



												</div>
											</div>
										</div>
										<!--end:::Tab content-->
										<!--begin:::Tab pane-->
										<div class="tab-pane fade" id="kt_ecommerce_customer_support" role="tabpanel" aria-labelledby="customerSupport">
											<div class="d-flex mb-5">
												<h3
													class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center fs-color-white custom-fs-23">
													Send Message to Support Staff </h3><span
													class="badge badge-custom-bg my-1 ms-2 custom-fs-13">Order
													(#{{$order->order_id}})</span>
											</div>
											<!--begin::Card-->
											<div class="card btn-dark-primary">

												<div
													class="card-header align-items-center justify-content-end py-5 gap-5">

													<!--begin::Pagination-->
													<div class="d-flex align-items-center d-none">
														<!--begin::Pages info-->
														<span class="fw-semibold text-white custom-fs-10 me-2">1 - 50 of 235</span>
														<!--end::Pages info-->
														<!--begin::Prev page-->
														<a href="#"
															class="btn btn-sm btn-icon btn-light btn-active-light-primary me-3"
															data-bs-toggle="tooltip" data-bs-placement="top"
															title="Previous message">
															<i class="ki-duotone ki-left fs-2 m-0"></i>
														</a>
														<!--end::Prev page-->
														<!--begin::Next page-->
														<a href="#"
															class="btn btn-sm btn-icon btn-light btn-active-light-primary me-2"
															data-bs-toggle="tooltip" data-bs-placement="top"
															title="Next message">
															<i class="ki-duotone ki-right fs-2 m-0"></i>
														</a>
														<!--end::Next page-->
														<!--begin::Toggle-->
														<a href="#"
															class="btn btn-sm btn-icon btn-color-primary btn-light btn-active-light-primary d-lg-none"
															data-bs-toggle="tooltip" data-bs-dismiss="click"
															data-bs-placement="top" title="Toggle inbox menu"
															id="kt_inbox_aside_toggle">
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
												<div class="card-body pt-0">
													<div class="row">
														<div class="col-lg-12">


														</div>
													</div>
													<!--begin::Form-->
													{{-- <form id="kt_inbox_reply_form" class="rounded border mb-10"> --}}
														<!--begin::Body-->
														<div class="d-block">
															<!--begin::To-->
															<div class="d-flex align-items-center min-h-50px py-5 justify-content-between">
																<div class=" d-flex p-3 align-items-center rounded me-3">

																	<!--begin::Send-->
																	<div class="btn-group  me-4">
																		<!--begin::Submit-->
																		<span class="btn btn-primary badge-custom-bg fs-bold px-6"
																			data-kt-inbox-form="send">
																			<span class="indicator-label sendSupportMessage" >Send</span>
																			<span class="indicator-progress">Please
																				wait...
																				<span
																					class="spinner-border spinner-border-sm align-middle ms-2"></span>
																				</span>
																		</span>
																				</div>



																</div>
																<div class="d-flex align-items-center">
																<!--begin::Dismiss reply-->
																<span class="btn btn-icon btn-sm btn-clean btn-active-light-primary clear_message_box" id="delete_btn_suppot" data-inbox="dismiss" data-toggle="tooltip" title="Discard reply">
																	<i class="ki-duotone ki-trash fs-2 text-white">
																		<span class="path1"></span>
																		<span class="path2"></span>
																		<span class="path3"></span>
																		<span class="path4"></span>
																		<span class="path5 clear_message_box"></span>
																	</i>
																</span>
																<!--end::Dismiss reply-->
															</div>


															</div>


															<div id="kt_inbox_form_editor" class="border-0 h-250px px-3">
																<form id="support_message_form" class="h-100">
																	@csrf
																	<input type="hidden" class="form-control me-3" id="" name="order_id" value="{{$order->order_id}}" />
																	<div id="editor_3" class="bg-transparent btn-dark-primary mb-4 "></div>
																	<textarea class="d-none" placeholder="Send your support message" id="message_support" name="message_support" value="{{old('message_support')}}"></textarea>
																</form>
															</div>
															<!--end::Message-->
															<!--begin::Attachments-->
															<div class="dropzone dropzone-queue px-8 py-4"
																id="kt_inbox_reply_attachments"
																data-kt-inbox-form="dropzone">
																<div class="dropzone-items">
																	<div class="dropzone-item" style="display:none">
																		<!--begin::Dropzone filename-->
																		<div class="dropzone-file">
																			<div class="dropzone-filename"
																				title="some_image_file_name.jpg">
																				<span
																					data-dz-name="">some_image_file_name.jpg</span>
																				<strong>(
																					<span
																						data-dz-size="">340kb</span>)</strong>
																			</div>
																			<div class="dropzone-error"
																				data-dz-errormessage=""></div>
																		</div>
																		<!--end::Dropzone filename-->
																		<!--begin::Dropzone progress-->
																		<div class="dropzone-progress">
																			<div class="progress bg-gray-300">
																				<div class="progress-bar bg-primary"
																					role="progressbar" aria-valuemin="0"
																					aria-valuemax="100"
																					aria-valuenow="0"
																					data-dz-uploadprogress=""></div>
																			</div>
																		</div>
																		<!--end::Dropzone progress-->
																		<!--begin::Dropzone toolbar-->
																		<div class="dropzone-toolbar">
																			<span class="dropzone-delete"
																				data-dz-remove="">
																				<i class="ki-duotone ki-cross fs-2">
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
													<!--<div class="d-flex flex-wrap gap-2 justify-content-end mb-8">-->

													<!--    <div class="d-flex">-->
															<!--begin::Sort-->
													<!--        <a href="#"-->
													<!--            class="btn btn-sm btn-icon btn-light btn-active-light-primary me-2"-->
													<!--            data-bs-toggle="tooltip" data-bs-placement="top"-->
													<!--            title="Sort">-->
													<!--            <i class="ki-duotone ki-arrow-up-down fs-2 m-0">-->
													<!--                <span class="path1"></span>-->
													<!--                <span class="path2"></span>-->
													<!--            </i>-->
													<!--        </a>-->
															<!--end::Sort-->
															<!--begin::Print-->
													<!--        <a href="#"-->
													<!--            class="btn btn-sm btn-icon btn-light btn-active-light-primary me-2"-->
													<!--            data-bs-toggle="tooltip" data-bs-placement="top"-->
													<!--            title="Print">-->
													<!--            <i class="ki-duotone ki-printer fs-2">-->
													<!--                <span class="path1"></span>-->
													<!--                <span class="path2"></span>-->
													<!--                <span class="path3"></span>-->
													<!--                <span class="path4"></span>-->
													<!--                <span class="path5"></span>-->
													<!--            </i>-->
													<!--        </a>-->
															<!--end::Print-->
													<!--    </div>-->
													<!--</div>-->
													<!--end::Title-->
													<!--begin::Message accordion-->
													<div data-kt-inbox-message="message_wrapper">
														<!--begin::Message header-->
														<!--<div class="d-flex flex-wrap gap-2 flex-stack cursor-pointer"-->
														<!--    data-kt-inbox-message="header">-->
															<!--begin::Author-->
														<!--    <div class="d-flex align-items-center">-->
																<!--begin::Avatar-->
														<!--        <div class="symbol symbol-50 me-4">-->
														<!--            <span class="symbol-label"-->
														<!--                style="background-image:url(assets/media/avatars/300-6.jpg);"></span>-->
														<!--        </div>-->
																<!--end::Avatar-->
																<!--<div class="pe-5">-->
																	<!--begin::Author details-->
																<!--    <div-->
																<!--        class="d-flex align-items-center flex-wrap gap-1">-->
																<!--        <a href="#"-->
																<!--            class="fw-bold text-gray-900 text-hover-primary">Emma-->
																<!--            Smith</a>-->
																<!--        <i-->
																<!--            class="ki-duotone ki-abstract-8 fs-7 text-success mx-3">-->
																<!--            <span class="path1"></span>-->
																<!--            <span class="path2"></span>-->
																<!--        </i>-->
																<!--        <span class="text-muted fw-bold">1 day-->
																<!--            ago</span>-->
																<!--    </div>-->
																	<!--end::Author details-->
																	<!--begin::Message details-->
																<!--    <div data-kt-inbox-message="details">-->
																<!--        <span class="text-muted fw-semibold">to-->
																<!--            me</span>-->
																		<!--begin::Menu toggle-->
																<!--        <a href="#" class="me-1"-->
																<!--            data-kt-menu-trigger="click"-->
																<!--            data-kt-menu-placement="bottom-start">-->
																<!--            <i class="ki-duotone ki-down fs-5 m-0"></i>-->
																<!--        </a>-->
																		<!--end::Menu toggle-->
																		<!--begin::Menu-->
																<!--        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px p-4"-->
																<!--            data-kt-menu="true">-->
																			<!--begin::Table-->
																<!--            <table class="table mb-0">-->
																<!--                <tbody>-->
																<!--                    <tr>-->
																<!--                        <td class="w-75px text-muted">-->
																<!--                            From</td>-->
																<!--                        <td>Emma Bold</td>-->
																<!--                    </tr>-->
																<!--                    <tr>-->
																<!--                        <td class="text-muted">Date</td>-->
																<!--                        <td>20 Dec 2023, 2:40 pm</td>-->
																<!--                    </tr>-->
																<!--                    <tr>-->
																<!--                        <td class="text-muted">Reply-to-->
																<!--                        </td>-->
																<!--                        <td>Writer, Admin</td>-->
																<!--                    </tr>-->
																<!--                </tbody>-->
																<!--            </table>-->
																<!--        </div>-->
																		<!--end::Menu-->
																<!--    </div>-->
																	<!--end::Message details-->
																	<!--begin::Preview message-->
																<!--    <div class="text-muted fw-semibold mw-450px d-none"-->
																<!--        data-kt-inbox-message="preview">With resrpect, i-->
																<!--        must disagree with Mr.Zinsser. We all know the-->
																<!--        most part of important part....</div>-->
																	<!--end::Preview message-->
																<!--</div>-->
														<!--    </div>-->
															<!--end::Author-->
															<!--begin::Actions-->
														<!--    <div class="d-flex align-items-center flex-wrap gap-2">-->
																<!--begin::Date-->
														<!--        <span class="fw-semibold text-muted text-end me-3">25-->
														<!--            Oct 2023, 11:05 am</span>-->
																<!--end::Date-->
														<!--        <div class="d-flex">-->
																	<!--begin::Reply-->
														<!--            <a href="#"-->
														<!--                class="btn btn-sm btn-icon btn-clear btn-active-light-primary me-3"-->
														<!--                data-bs-toggle="tooltip" data-bs-placement="top"-->
														<!--                title="Reply">-->
														<!--                <i class="ki-duotone ki-message-edit fs-2 m-0">-->
														<!--                    <span class="path1"></span>-->
														<!--                    <span class="path2"></span>-->
														<!--                </i>-->
														<!--            </a>-->
																	<!--end::Reply-->
																	<!--begin::Settings-->
														<!--            <a href="#"-->
														<!--                class="btn btn-sm btn-icon btn-clear btn-active-light-primary"-->
														<!--                data-bs-toggle="tooltip" data-bs-placement="top"-->
														<!--                title="Settings">-->
														<!--                <i-->
														<!--                    class="ki-duotone ki-dots-square-vertical fs-2 m-0">-->
														<!--                    <span class="path1"></span>-->
														<!--                    <span class="path2"></span>-->
														<!--                    <span class="path3"></span>-->
														<!--                    <span class="path4"></span>-->
														<!--                </i>-->
														<!--            </a>-->
																	<!--end::Settings-->
														<!--        </div>-->
														<!--    </div>-->
															<!--end::Actions-->
														<!--</div>-->
														<!--end::Message header-->
														<!--begin::Message content-->
														<!--<div class="collapse fade show" data-kt-inbox-message="message">-->
														<!--    <div class="py-5">-->
														<!--        <p>Hi Bob,</p>-->
														<!--        <p>With resrpect, i must disagree with Mr.Zinsser. We-->
														<!--            all know the most part of important part of any-->
														<!--            article is the title.Without a compelleing title,-->
														<!--            your reader won't even get to the first-->
														<!--            sentence.After the title, however, the first few-->
														<!--            sentences of your article are certainly the most-->
														<!--            important part.</p>-->
														<!--        <p>Jornalists call this critical, introductory section-->
														<!--            the "Lede," and when bridge properly executed, it's-->
														<!--            the that carries your reader from an headine try at-->
														<!--            attention-grabbing to the body of your blog post, if-->
														<!--            you want to get it right on of these 10 clever ways-->
														<!--            to omen your next blog posr with a bang</p>-->
														<!--        <p>Best regards,</p>-->
														<!--        <p class="mb-0">Jason Muller</p>-->
														<!--    </div>-->
														<!--</div>-->
														<!--end::Message content-->
													</div>

												</div>
											</div>
											<!--end::Card-->
										</div>


										<!--begin:::Tab pane-->
										<div class="tab-pane fade " id="kt_ecommerce_customer_completed_order" role="tabpanel">
											<div class="card card-flush card-custom-bg message-summ">
												<!--begin::Card header-->
												<div class="card-title pt-8 ps-8">
													<!--begin::Search-->
													{{-- <div class="d-flex align-items-center position-relative my-1">
														<i class="ki-duotone ki-magnifier fs-1 position-absolute ms-6">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>

														<input type="text" id="searchInput" data-kt-filemanager-table-filter="search"
															class="form-control form-control-solid w-250px ps-15 btn-dark-primary" placeholder="Search " />
													</div> --}}
													<!--end::Search-->
												</div>

												{{-- <div class="card-header pt-8 justify-content-end">

													<div class="card-toolbar">
														<div class="d-flex justify-content-end" data-kt-filemanager-table-toolbar="base">
															<button type="button" class="btn btn-flex badge-custom-bg w-100 justify-content-center px-2 ms-3  deleteBtnForm" style="display: none;" >
																Delete</button>
														</div>
														<div class="d-flex justify-content-end" data-kt-filemanager-table-toolbar="base">
															<button type="button" class="btn btn-flex badge-custom-bg w-100 justify-content-center px-2 ms-3  downloadBtnForm" style="display: none;" >
																Download</button>
														</div>

													</div>
												</div> --}}



												<div class="card-body">
													<div class="d-flex flex-stack">
														<?php
														$files = DB::table('folders')
															->join('files', 'folders.id', '=', 'files.folder_id')
															->select('files.*')
															->latest('files.created_at')
															->where('folders.id', $folder->id)
															->paginate(10);

														$filesCount = $files->total();
														$totalSize = 0;
														foreach ($files as $file) {
															$totalSize += $file->total_size;
														}
														$units = ['B', 'KB', 'MB', 'GB', 'TB'];
														for ($i = 0; $totalSize >= 1024 && $i < count($units) - 1; $i++) {
															$totalSize /= 1024;
														}

														$formattedSize = round($totalSize, 0) . ' ' . $units[$i];
														if (!$folder) {
															return abort(404);
														}
														?>

														<div class="badge badge-lg badge-custom-bg">
															<span id="kt_file_manager_items_counter">{{ $filesCount }} items</span>
														</div>

													</div>
													<!--end::Table header-->

													<!--begin::Table-->
													<div id="completed_order_file_table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
														<div class="table-responsive">
															{{-- customer-files-upload --}}
															{{-- <form id="delete_or_download_form" action="{{ route('customer.all.files.download', ['folder_name'=>$folder->name]) }}" method="GET" enctype="multipart/form-data">
																<input type="hidden" name="delete" id="delete_input_field">
																<input type="hidden" name="download" id="download_input_field">
																<input type="hidden" name="folder_name" value="{{$folder->name??''}}">													 --}}

																<table id="completed_order_file_table" data-kt-filemanager-table="files" class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer">
																	<thead>
																		<tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
																			{{-- <th class="w-30px pe-2" rowspan="1" colspan="1" style="width: 29.8906px;">
																				<div class="form-check form-check-sm form-check-custom form-check-solid me-3">
																					<input class="form-check-input" type="checkbox" id="selectAll">
																				</div>
																			</th> --}}
																			<th rowspan="1" colspan="1" >File Title</th>
																			<th>File Type</th>
																			<th rowspan="1" colspan="1" >Size</th>
																			<th rowspan="1" colspan="1" >Last Modified</th>
																			<th rowspan="1" colspan="1" >Download time</th>
																			<th rowspan="1" colspan="1" ></th>
																		</tr>
																	</thead>
																	<tbody class="fw-semibold text-gray-600">
																		@if($completedOrders)
																			@foreach ($completedOrders as $file)
																			<tr class="odd">
																				{{-- <td>
																					<div class="form-check form-check-sm form-check-custom form-check-solid ">
																						<input type="checkbox" name="selectedIds[]" value="{{ $file->id }}" class="form-check-input row_checkbox">
																					</div>
																				</td> --}}

																				<td>
																					<div class="d-flex align-items-center">
																						<span class="icon-wrapper"><i class="ki-duotone ki-file fs-2x text-primary me-4"><span class="path1"></span><span class="path2"></span></i></span>
																						<a href="#" class="text-gray-800 text-hover-primary">{{ $file->title }}</a>
																					</div>
																				</td>

																				<td>{{ $file->file_type }}</td>
																				<td>{{$file->Size }}</td>

																				<td>{{ $file->created_at }}</td>
																				<td>{{ $file->download_time }}</td>
																				<td class="text-end text-white" data-kt-filemanager-table="action_dropdown">
																					<div class="d-flex justify-content-end">
																						<div class="ms-2">
																							<button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
																								<i class="ki-duotone ki-dots-square fs-5 m-0">
																									<span class="path1"></span>
																									<span class="path2"></span>
																									<span class="path3"></span>
																									<span class="path4"></span>
																								</i>
																							</button>
																							<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4 badge-custom-bg" data-kt-menu="true">
																								<div class="menu-item px-3">
																									<a class="menu-link text-danger px-3" href="{{ route('customer.completed.order.file.download', ['order_id' => $file->order_id, 'file_id' => $file->id]) }}">Download File</a>
																								</div>

																								<div class="menu-item px-3">
																									<a class="menu-link text-danger px-3" onclick="confirmDelete({{ $file->id }}, '{{ $folder->name }}')">Delete</a>
																								</div>
																								<!--end::Menu-->
																							</div>
																						<!--end::More-->
																						</div>
																					</div>
																				</td>
																			</tr>
																			@endforeach
																		@endif
																	</tbody>
																</table>
															{{-- </form> --}}
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
													<img src="{{asset('backend/assets/media/misc/qr.png')}}" alt="Scan this QR code" />
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
										<img src="{{asset('backend/assets/media/avatars/300-14.jpg')}}" alt="img" />
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
									<a href="#" class="fs-5 text-gray-900 text-hover-primary fw-semibold w-375px min-w-200px">Meeting with customer</a>
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
											<img src="{{asset('backend/assets/media/avatars/300-2.jpg')}}" alt="img" />
										</div>
										<!--end::User-->
										<!--begin::User-->
										<div class="symbol symbol-circle symbol-25px">
											<img src="{{asset('backend/assets/media/avatars/300-14.jpg')}}" alt="img" />
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
									<a href="#" class="btn btn-sm btn-light btn-active-light-primary">View</a>
									<!--end::Action-->
								</div>
								<!--end::Record-->
								<!--begin::Record-->
								<div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-0">
									<!--begin::Title-->
									<a href="#" class="fs-5 text-gray-900 text-hover-primary fw-semibold w-375px min-w-200px">Project Delivery Preparation</a>
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
											<img src="{{asset('backend/assets/media/avatars/300-20.jpg')}}" alt="img" />
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
									<a href="#" class="btn btn-sm btn-light btn-active-light-primary">View</a>
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
										<img src="{{asset('backend/assets/media/avatars/300-1.jpg')}}" alt="img" />
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
										<img src="{{asset('backend/assets/media/avatars/300-23.jpg')}}" alt="img" />
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
										<img alt="" class="w-30px me-3" src="{{asset('bakcend/assets/media/svg/files/pdf.svg')}}" />
										<!--end::Icon-->
										<!--begin::Info-->
										<div class="ms-1 fw-semibold">
											<!--begin::Desc-->
											<a href="#" class="fs-6 text-hover-primary fw-bold">Finance KPI App Guidelines</a>
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
										<img alt="#" class="w-30px me-3" src="{{asset('backend/assets/media/svg/files/doc.svg')}}" />
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
										<img alt="#" class="w-30px me-3" src="{{asset('backend/assets/media/svg/files/css.svg')}}" />
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
										<img src="{{asset('backend/assets/media/avatars/300-14.jpg')}}" alt="img" />
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
										<img src="{{asset('backend/assets/media/avatars/300-2.jpg')}}" alt="img" />
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
											<img alt="img" class="rounded w-150px" src="{{asset('backend/assets/media/stock/600x400/img-29.jpg')}}" />
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
											<img alt="img" class="rounded w-150px" src="{{asset('backend/assets/media/stock/600x400/img-31.jpg')}}" />
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
											<img alt="img" class="rounded w-150px" src="{{asset('backend/assets/media/stock/600x400/img-40.jpg')}}" />
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
										<img src="{{asset('backend/assets/media/avatars/300-4.jpg')}}" alt="img" />
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
			<a href="#" class="btn btn-bg-body text-primary">View All Activities
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
								<img alt="Pic" src="{{asset('backend/assets/media/avatars/300-25.jpg')}}" />
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
								<img alt="Pic" src="{{asset('backend/assets/media/avatars/300-1.jpg')}}" />
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
								<img alt="Pic" src="{{asset('backend/assets/media/avatars/300-25.jpg')}}" />
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
								<img alt="Pic" src="{{asset('backend/assets/media/avatars/300-1.jpg')}}" />
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
										<a href="#" class="btn btn-sm badge-custom-bg">Contact Us</a>
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
						<input type="text" class="form-control form-control-lg form-control-solid px-15" name="search" value="" placeholder="Search" data-kt-search-element="input" />
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
									<!--<div class="fw-semibold">-->
									<!--	<span class="fs-6 text-gray-800 me-2">Emma Smith</span>-->
									<!--	<span class="badge badge-light">Art Director</span>-->
									<!--</div>-->
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
										<!--<div class="ms-5">-->
										<!--	<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Smith</a>-->
										<!--	<div class="fw-semibold text-muted">smith@kpmg.com</div>-->
										<!--</div>-->
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
								<!--<div class="ms-5">-->
								<!--	<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Smith</a>-->
								<!--	<div class="fw-semibold text-muted">smith@kpmg.com</div>-->
								<!--</div>-->
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
<div class="modal fade" id="modal-15" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header border-0">
				<h5 class="modal-title " id="exampleModalLabel">Add Payment Details!</h5>
				<button type="button" class="ms-0 btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div data-kt-stepper-content="true" data-kt-stepper-content-for="stepper-id"
					data-kt-stepper-type="step" class='step'>
					<!--begin::Step 4-->
					<div data-kt-stepper-element="content">
						<div class="w-100">
							<!--begin::Input group-->
							<div class="d-flex flex-column mb-7 fv-row">
								<!--begin::Label-->
								<label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
									<span class="required">Name On Card</span>
									<span class="ms-1" data-bs-toggle="tooltip"
										title="Specify a card holder's name">
										<i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
												class="path1"></span><span class="path2"></span><span
												class="path3"></span></i></span>
								</label>
								<!--end::Label-->
								<input type="text" class="form-control form-control-solid" placeholder="Card Name"
									id="card_name" name="card_name" />
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
									<input type="text" class="form-control form-control-solid"
										placeholder="Enter card number" id='card_number' name="card_number"
										value="4111 1111 1111 1111" />
									<!--end::Input-->
									<!--begin::Card logos-->
									<div class="position-absolute translate-middle-y top-50 end-0 me-5">
										<img src="assets/media/svg/card-logos/visa.svg" alt=""
											class="h-25px" />
										<img src="assets/media/svg/card-logos/mastercard.svg" alt=""
											class="h-25px" />
										<img src="assets/media/svg/card-logos/american-express.svg" alt=""
											class="h-25px" />
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
											<select name="card_expiry_month" id="card_expiry_month"
												class="form-select form-select-solid" data-control="select2"
												data-hide-search="true" data-placeholder="Month">
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
											<input name="card_expiry_year" id="card_expiry_year"
												placeholder="Year" />

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
											<i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
													class="path1"></span><span class="path2"></span><span
													class="path3"></span></i></span>
									</label>
									<!--end::Label-->
									<!--begin::Input wrapper-->
									<div class="position-relative">
										<!--begin::Input-->
										<input type="text" class="form-control form-control-solid" id="card_cvv"
											minlength="3" maxlength="4" placeholder="CVV" name="card_cvv" />
										<!--end::Input-->
										<!--begin::CVV icon-->
										<div class="position-absolute translate-middle-y top-50 end-0 me-3">
											<i class="ki-duotone ki-credit-cart fs-2hx"><span
													class="path1"></span><span class="path2"></span></i>
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
									<div class="fs-7 fw-semibold text-muted">If you need more info, please check budget
										planning</div>
								</div>
								<!--end::Label-->
								<!--begin::Switch-->
								<label class="form-check form-switch form-check-custom form-check-solid">
									<input class="form-check-input" type="checkbox" value="1"
										checked="checked" />
									<span class="form-check-label fw-semibold text-muted">
										Save Card
									</span>
								</label>
								<!--end::Switch-->
							</div>
							<!--end::Input group-->
						</div>
					</div>
					<!--end::Step 4-->
				</div>
			</div>
			<div class="modal-footer border-0">
				<button type="submit" class="btn btn-secondary" onclick="submit_payment()">Submit</button>
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>


<style>

  .custom-swal-popup {
    background-color: #783AFB !important; /* Custom purple background */
    color: white !important; /* White text color for better visibility */
    border-radius: 10px !important;
    padding: 20px !important;
}

.custom-swal-title {
    font-size: 1.5rem !important;
    font-weight: bold !important;
    color: #ffffff !important; /* White color for the title */
}

.custom-swal-text {
    font-size: 1rem !important;
    color: #ffffff !important; /* White color for the text */
}

.custom-swal-confirm-button {
    background-color: #28a745 !important; /* Green confirm button */
    color: white !important;
    border: none !important;
    padding: 10px 20px !important;
    border-radius: 5px !important;
}

.custom-swal-cancel-button {
    background-color: #dc3545 !important; /* Red cancel button */
    color: white !important;
    border: none !important;
    padding: 10px 20px !important;
    border-radius: 5px !important;
}

</style>
<script>
	var hostUrl = "assets/";
</script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script>

		$(document).ready(function (){
			$('.clear_message_box').on('click', function(){
				$('#attach_file').text('');
			})
		})

	   document.getElementById("file-3").addEventListener("change", function() {
			var fileName = this.files[0].name;
			document.getElementById("attach_file").innerText = "Selected file: " + fileName;
		});


		$(document).ready(function () {
			$('.supportBtn').click(function (e) {
				e.preventDefault();
				$('#customerSupport').tab('show');
			});
		});
	</script>
<script>

function modal_open122() {
    let pageValidation = document.getElementById("pageCount").value;

    var pages = $('#pageCount').val();
    if (!pageValidation) {
        alert("Please fill the Add More Pages field");
        return; // Prevent further execution if validation fails
    }
    // AJAX call to check package limit
    $.ajax({
        type: 'GET', // Use uppercase for clarity
        url: "{{ route('pakage_limit.get') }}", // Ensure this route is correctly defined
        data: { totalSubscription: pages },
        success: function (response) {
            if (response.success === 'Package pages limit not exceeded') {
               // alert("The package's page limit has not been exceeded. You can continue using the service.");
              //  location.reload(); // Reload the page after the user dismisses the alert
                // Stop further execution of the whole function
                let pageValidationtotalCost = $('#totalCost1').val();
                var selectedValue = getSelectedRadioButtonValue();
                console.log("Selected value:", pageValidationtotalCost +' > '+ pageValidation);

                if (selectedValue === 'currentpakage') {
                    if (pageValidationtotalCost >= pageValidation) {
                        // Open modal if the condition is met
                        alert('am going ');
                        modal_open112();
                    } else {
                        Swal.fire({
                            title: 'Thank You for Choosing Us!',
                            text: 'Thank you for choosing our services! We noticed that your required pages exceed the remaining pages in your current package. To continue enjoying uninterrupted access, we invite you to consider purchasing additional pages. These will be available at the same rate as your original package purchase. We appreciate your support and look forward to continuing to serve you.',
                            icon: 'info',
                            confirmButtonText: 'Purchase More Pages',
                            cancelButtonText: 'Cancel',
                            showCancelButton: true,
                            allowOutsideClick: false,
                            allowEscapeKey: false,
                            customClass: {
                                popup: 'custom-swal-popup',
                                title: 'custom-swal-title',
                                htmlContainer: 'custom-swal-text',
                                confirmButton: 'custom-swal-confirm-button',
                                cancelButton: 'custom-swal-cancel-button'
                            }
                        });
                    }
                } else {
                    // Handle case for other selected value
                    localStorage.setItem('no_of_page', pageValidation);

                    var used_package = $('#used_package_id').val();
                    localStorage.setItem('used_package_id', used_package);

                    var packageid = $('#package_id').val();
                    localStorage.setItem('package_id', packageid);

                    var cost_perpage = $('#cost_per_page').val();
                    localStorage.setItem('cost_per_page', cost_perpage);

                    var order_id = {{$order->order_id}};
                    localStorage.setItem('order_id', order_id);




                    if (pageValidation && pageValidation != null) {


                        var url2 = '{{ route('customer.checkout') }}';
                        $.ajax({
                            type: 'GET',
                            url: url2,
                            success: function (response) {
                                console.log(response.sessionId);


                                if (response && response.sessionId) {
                                    // Redirect to the specified route with the sessionId
                                    window.location.href = '{{ route("customer.card.show.addpage", ["sessionid" => ":sessionId"]) }}'.replace(':sessionId', response.sessionId);
                                } else {
                                    console.error('Invalid response format or missing sessionId.');
                                }
                            },
                            error: function (error) {
                                // Handle any errors here
                                window.location.href = '{{ route("login") }}';
                                console.error(error);
                            }
                        });
                    } else {
                        toastr.error('Pages number not given!');
                    }
                }
            }
        },
        error: function (xhr, status, error) {
            console.error("AJAX Error:", error); // Logs the error for debugging
            Swal.fire({
                title: 'Error',
                text: "There was an issue processing your request. Please try again later.",
                icon: 'error',
                confirmButtonText: 'OK',
            });
        }
    });

    // Ensure this part of the code does not execute if the above condition is met
    

    
}


// function modal_open122() {
// 	let pageValidation = document.getElementById("pageCount").value;






//                 var pages = $('#pageCount').val();







// 	// let pageValidationtotalCost = document.getElementById("totalCost1").textContent;

// 	 let pageValidationtotalCost =  $('#totalCost1').val();





// 	if (!pageValidation) {
// 		alert("Please fill the Add More Pages field");
// 	} else {

// 		var selectedValue = getSelectedRadioButtonValue();
// console.log("Selected value:", selectedValue);



//  if (selectedValue === 'currentpakage') {


// 					if (pageValidationtotalCost >= pageValidation) {
//                             // Open modal if the condition is met
//                             modal_open112();
//                         } else {
//                             Swal.fire({
//                                 title: 'Thank You for Choosing Us!',
//                                 text: 'Thank you for choosing our services! We noticed that your required pages exceed the remaining pages in your current package. To continue enjoying uninterrupted access, we invite you to consider purchasing additional pages. These will be available at the same rate as your original package purchase. We appreciate your support and look forward to continuing to serve you.',
//                                 icon: 'info',
//                                 confirmButtonText: 'Purchase More Pages',
//                                 cancelButtonText: 'Cancel',
//                                 showCancelButton: true,
//                                 allowOutsideClick: false,
//                                 allowEscapeKey: false,
//                                 customClass: {
//                                     popup: 'custom-swal-popup',
//                                     title: 'custom-swal-title',
//                                     htmlContainer: 'custom-swal-text',
//                                     confirmButton: 'custom-swal-confirm-button',
//                                     cancelButton: 'custom-swal-cancel-button'
//                                 }
//                             });



//                         }



// 		}
// 				else{





// 					  localStorage.setItem('no_of_page', pageValidation);

// 					  var used_package = $('#used_package_id').val();
// 					  localStorage.setItem('used_package_id', used_package);

// 					  var packageid = $('#package_id').val();
// 					  localStorage.setItem('package_id', packageid);

// 					  var cost_perpage = $('#cost_per_page').val();
// 					  localStorage.setItem('cost_per_page', cost_perpage);


// 					   var order_id = {{$order->order_id}};
// 						localStorage.setItem('order_id', order_id);


// 					//   var pkgorderaddpages = "pkgorderaddpages";
// 					//   localStorage.setItem('pkgorderaddpages', pkgorderaddpages);

// 			   if (pageValidation && pageValidation != null) {


// 				var url2 = '{{ route('customer.checkout') }}';
// 				$.ajax({
// 					type: 'GET',
// 					url: url2,
// 					success: function(response) {
// 						// Wait for 500 milliseconds before processing the response

//                         console.log(response.sessionId);
//                         let idgetsession = response.sessionId;


//                                 if (response && response.sessionId) {
//                                     // Redirect to the specified route with the sessionId
//                                     window.location.href = '{{ route("customer.card.show.addpage", ["sessionid" => ":sessionId"]) }}'.replace(':sessionId', response.sessionId);
//                                 } else {
//                                     console.error('Invalid response format or missing sessionId.');
//                                 }


//  // Adjust the timeout value as needed
// 					},
// 					error: function(error) {
// 						// Handle any errors here
// 						window.location.href = '{{ route("login") }}';
// 						console.error(error);
// 					}
// 				});
// 			} else {
// 				toastr.error('pages number not given!');
// 			}






// 				}






// 		// alert(pageValidation);


// 	 //  modal_open112();


// 	}
// }




function getSelectedRadioButtonValue() {
	// Get all radio buttons with the name "flexRadioDefault"
	var radioButtons = document.getElementsByName("flexRadioDefault");

	// Loop through each radio button to find the selected one
	for (var i = 0; i < radioButtons.length; i++) {
		if (radioButtons[i].checked) {
			// Return the value of the selected radio button
			return radioButtons[i].value;
		}
	}

	// If no radio button is selected, return null or handle the case accordingly
	return null;
}





function modal_open12() {
	let pageValidation = document.getElementById("pageCount").value;

	// let pageValidationtotalCost = document.getElementById("totalCost1").textContent;

	 let pageValidationtotalCost =  $('#totalCost1').val();





	if (!pageValidation) {
		alert("Please fill the Add More Pages field");
	} else {

				if (pageValidationtotalCost >= pageValidation) {
					modal_open112();
				}
				else{
					alert("Thank you for using our services!It looks like youve used all 2000 pages included in your current package To continue enjoying our services, please consider purchasing another package")
				}

		// alert(pageValidation);


	 //  modal_open112();


	}
}



function modal_open112() {
	let pageValidation = document.getElementById("pageCount").value;

	if (!pageValidation) {
		alert("Please fill the Add More Pages field");
	} else {
		var deadline = $("#meeting-time_custom").val();
		var page = $("#pageCount").val();
		var total = $("#totalCost").text();
		var order_id = {{$order->order_id}};

		var url = "{{ route('customer.pakage.add.order.pages') }}"; // Note the quotes around the route function

		// Get the CSRF token from the page
		var csrfToken = "{{ csrf_token() }}";

		$.ajax({
			type: "POST",
			url: url,
			headers: {
				'X-CSRF-TOKEN': csrfToken // Include the CSRF token in the request headers
			},
			data: {
				deadline: deadline,
				page: page,
				total: total,
				order_id: order_id
			},
			success: function (response) {
				// Request was successful, handle response if needed
				console.log(response);
				  Swal.fire('Success', 'Pages added successfully!', 'success');

					 setTimeout(function() {
							location.reload();
						}, 3000);



			},
			error: function (xhr, status, error) {
				// Handle errors here
				console.error(xhr.responseText);
			}
		});
	}
}



function modal_open1() {
	let pageValidation = document.getElementById("pageCount").value;

	if (!pageValidation) {
		alert("Please fill the Add More Pages field");
	} else {


	   modal_open();


	}
}


function modal_open(){



	var deadline=document.getElementById('meeting-time_custom').value;
	var page = document.getElementById('pageCount').value;
	var total=document.getElementById('totalCost').innerHTML;
	var order_id = {{$order->order_id}};



	localStorage.setItem('deadline', JSON.stringify(deadline))
	localStorage.setItem('page', JSON.stringify(page))
	localStorage.setItem('total', JSON.stringify(total))
	localStorage.setItem('order_id', JSON.stringify(order_id))

	var url2 = '{{ route('customer.checkout') }}';
				$.ajax({
					type: 'GET',
					url: url2,

					// Assuming id is a parameter you want to send
					success: function(response) {
					   console.log(response.sessionId);


						let idgetsession = response.sessionId;


						Swal.fire('Success', 'Add Payment Details!', 'success');

								if (response && response.sessionId) {


						window.location.href = '{{ route("customer.card.show.mangepages", ["sessionid" => ":sessionId"]) }}'.replace(':sessionId', response.sessionId);


						} else {
						console.error('Invalid response format or missing sessionId.');
						}


					},

					error: function(error) {
					  window.location.href = '{{ route("login") }}';
						console.error(error);
					}
				});
// 	var modal = new bootstrap.Modal(document.getElementById("modal-15"));
//                 modal.show();
}


function submit_payment() {
			var card_name = document.getElementById('card_name').value;
			var card_number = document.getElementById('card_number').value;
			var card_expiry_month = document.getElementById('card_expiry_month').value;
			var card_expiry_year = document.getElementById('card_expiry_year').value;
			var card_cvv = document.getElementById('card_cvv').value;

			var card_detail = {
				card_name: card_name,
				card_number: card_number,
				card_expiry_month: card_expiry_month,
				card_expiry_year: card_expiry_year,
				card_cvv: card_cvv
			}
			localStorage.setItem('card_detail', JSON.stringify(card_detail))
			console.log(card_detail);
			user_id = {{$order->user_id}};

			var url = '{{ route('customer.customer_payment', ['id' => ':id']) }}';
			url = url.replace(':id', user_id);

			$.ajax({
				type: 'post',
				url: url,
				data: {
					card: card_detail,
					_token: '{{ csrf_token() }}',
				},
				// Assuming id is a parameter you want to send
				success: function(response) {
					console.log(response);
					message = response.message;
					card = message.card;
					$order_id={{$order->order_id}};
					var deadline=document.getElementById('meeting-time_custom').value;
					var page = document.getElementById('pageCount').value;
					if(page == '' || page == null){
						page=0;
					}
					var total=document.getElementById('totalCost').innerHTML;

					var url2 = '{{ route('customer.update_detail_order', ['id' => ':id']) }}';
					url2 = url2.replace(':id', $order_id);
					$.ajax({
						type: 'post',
						url: url2,
						data: {
							card: card_detail,
							deadline: deadline,
							page:page,
							total:total,
							_token: '{{ csrf_token() }}',
						},
						// Assuming id is a parameter you want to send
						success: function(response) {
							console.log(response);

							Swal.fire('Success', "Order edit Successfully", 'success');


						},

						error: function(error) {
							// Handle any errors here
							console.error(error);
						}
					});

				},

				error: function(error) {
					// Handle any errors here
					console.error(error);
				}
			});
		}

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
// 	var sendButton = document.getElementById('send_rewrite');

// 	// Add click event listener to the button
// 	sendButton.addEventListener('click', function () {

// 		var orderId = document.getElementById('order_id').value;
// 		var notes = document.getElementById('request').value;

// 		var formData = {
// 				order_id:  document.getElementById('order_id').value,
// 				text: document.getElementById('request').value,

// 			};
// 		var csrfToken = document.getElementById('csrf-token').value;
// 		console.log(orderId + notes + formData, csrfToken);



// 		$.ajax({
// 			type: 'post',
// 			url: "{{route('customer.order-detail-request')}}",
// 			data: formData,
// 			processData: false,
// 			contentType: false,
// 			headers: {
// 				'X-CSRF-TOKEN': csrfToken
// 			},
// 			success: function(response) {
// 				console.log(response);
// 				toastr.success('Rewrite Request Sent Successfully');
// 				document.getElementById('request').value='';
// 			},

// 			error: function(error) {
// 				// Handle any errors here
// 				console.log(error)
// 				toastr.error(error.message);
// 			}
// 		});

// 	});

</script>


<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
	$(document).ready(function() {
		$( '#delete_btn').on('click', function (e){
			$('#message_box').val('');
			$('#message_box').text('');
			quill.setText('');
			supportMessageQuill.setText('');
			quill_3.setText('');
			document.getElementById('file_name').innerHTML = '';


		});

		$( '#delete_btn_suppot').on('click', function (e){
		$('#message_support').val('');
		$('#message_support').text('');
		document.getElementById('file_name').innerHTML = '';
		quill.setText('');
		supportMessageQuill.setText('');
		quill_3.setText('');
	});



		$('#kt_inbox_compose_form').submit(function(e) {
			e.preventDefault(); // Prevent the form from submitting in the traditional way

			// Create a FormData object to gather form data
			var formData = new FormData(this);
			formData.append('_token', '{{ csrf_token() }}');
			// You can append additional data if needed
			// formData.append('key', 'value');
			var send_by = $('.radioAdminWriter:checked').val();
            console.log("Selected value:", send_by);
            // Append the selected value to the FormData object if needed
            formData.append('send_by', send_by);


				console.log(formData)
				var element = document.getElementById('media');
				console.log(element.value)
			// Display the form data in the console (for testing purposes)
			for (var pair of formData.entries()) {
				console.log(pair[0] + ', ' + pair[1]);
			}

			// Now you can use the formData object to send the data to the server using AJAX or perform other actions
			var url = '{{ route("customer.send-message")}}'
			// Example of sending formData using AJAX:
			$.ajax({

				type: 'POST',
				url: url,
					data: formData,
					processData: false,  // Don't process the data
					contentType: false,  // Don't set contentType
				success: function(response) {
					console.log('Server response:', response);
					Swal.fire('Success!', 'Your Message Sent Successfully.', 'success');
					//	Swal.fire('Success!', 'Your Message Sent Successfully.', 'success');
					Pusher.logToConsole = true;
					$('#message_box').val('');
					document.getElementById('file_name').innerHTML = '';

					var pusher = new Pusher('28e13a39c3918e12f8a9', {
					  cluster: 'ap2'
					});

					var channel = pusher.subscribe('pusher');
					channel.bind('SendMessage', function(data) {
					  alert(JSON.stringify(data));
					  console.log(JSON.stringify(data))
					});
				},
				error: function(error) {
					console.error('Error:', error);
				}
			});

			return false; // Prevent the form from submitting in the traditional way
		});

	});

</script>
<script>
	$(document).ready(function() {
		$('#kt_inbox_reply_form').submit(function(e) {
			e.preventDefault(); // Prevent the form from submitting in the traditional way
			console.log('hello')
						// Create a FormData object to gather form data
						var formData = new FormData(this);
						formData.append('_token', '{{ csrf_token() }}');
						// You can append additional data if needed
						// formData.append('key', 'value');

						var send_by = $('.radioAdminWriter:checked').val();
						console.log("Selected value:", send_by);

						formData.append('send_by', send_by);


						 var sendby = $('.radioAdminWriter:checked').val();

						 var message = $('.ql-editor').text();

    // Check if sendby is empty or null
    if (sendby == '' || sendby == null) {
       Swal.fire('Error!', 'Please select a message receiver (Admin or Writer) before proceeding.', 'error');
        return; // Stop execution if the condition is met
    }


   if (!message) {
    Swal.fire('Error!', 'Message cannot be empty. Please type a message before sending.', 'error');
    return;
}

						console.log(formData)
						var element = document.getElementById('media');
						console.log(element.value)
						// Display the form data in the console (for testing purposes)
						for (var pair of formData.entries()) {
							console.log(pair[0] + ', ' + pair[1]);
						}

						// Now you can use the formData object to send the data to the server using AJAX or perform other actions
						var url = '{{ route("customer.send-message")}}'
						// Example of sending formData using AJAX:
						$.ajax({

							type: 'POST',
							url: url,
								data: formData,
								processData: false,  // Don't process the data
								contentType: false,  // Don't set contentType
								success: function(response) {
								console.log('Server response:', response);
								Swal.fire('Success!', 'Your Message Sent Successfully.', 'success');
								quill.setText('');
								document.getElementById('file_name').innerHTML = '';

							},
							error: function(error) {
								console.error('Error:', error);
							}
						});

						return false; // Prevent the form from submitting in the traditional way
					});


					// clear message box



	});
</script>


<script>


@if (isset($order->order_status) && $order->order_status == 'Delivered')
		function click_feedback(text, feedback) {
			var formData = {
				feedback: feedback,
				type: text,
				order_id: {{$order->order_id}}
			};

			var csrfToken = $('meta[name="csrf-token"]').attr('content');
			$.ajax({
				type: 'post',
				url: "{{route('customer.order-detail-review')}}",
				data: formData,
				dataType: "json",
				encode: true,
				headers: {
					'X-CSRF-TOKEN': csrfToken
				},
				success: function(response) {
					console.log(response);
					Swal.fire('Success', "Feedback Sent Successfully", 'success');
					feedbackEditor.setText('');
				},
				error: function(error) {
					// Handle any errors here
					console.log(error)
					Swal.fire('error', error, 'error');
				}
			});
		}
	@endif

// function click_feedback($text , $feedback)
// {
// 	var formData = {
// 			feedback:   $feedback,
// 			type: $text,
// 			order_id: {{$order->order_id}}
// 			};


// 		var csrfToken = $('meta[name="csrf-token"]').attr('content');
// 		$.ajax({
// 			type: 'post',
// 			url: "{{route('customer.order-detail-review')}}",
// 			data: formData,
// 			dataType: "json",
// 			encode: true,
// 			headers: {
// 					'X-CSRF-TOKEN': csrfToken
// 				},
// 				success: function(response) {
// 					console.log(response);
// 					Swal.fire('Success', "Feedback Sent Successfully", 'success');
// 				},
// 				error: function(error) {
// 					// Handle any errors here
// 					console.log(error)
// 					Swal.fire('error', error, 'error');
// 				}
// 			});
// }


	function confirmDelete(id, name) {
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
			 $.ajax({
				 type: 'get', // Change to DELETE method
				//  url: '/customer/files/' + id + '/' + name + '/delete',

				 url: "{{ route('customer.files.delete', ['id' => ':id', 'folder_name' => ':name']) }}".replace(':id', id).replace(':name', name),
					data: { id: id ,name:name},
				 success: function (response) {
					 console.log(response);
					 location.reload(true);
				 },
				 error: function (error) {
					 console.error(error);
				 }
			 });

			 Swal.fire('Deleted!', 'Your data has been deleted.', 'success');
		 }
	 });
 }
 </script>


<script>
	// Function to handle table search
	$(document).ready(function () {





		// Add an input event listener to the search input
		$("#searchInput").on("input", function () {
			// Get the value of the search input
			var searchValue = $(this).val().toLowerCase();

			// Filter the rows of the table based on the search input
			$("#kt_file_manager_list tbody tr").filter(function () {
				$(this).toggle($(this).text().toLowerCase().indexOf(searchValue) > -1);
			});
		});

		$("#pageCount").on("input", function () {
			var pageCount = $(this).val();



@if ($used_subscription)
	var total_pages = {{ $used_subscription->total_pages ?? 0 }};
	var remaining_pages = {{ $used_subscription->remaining_pages ?? 0 }};

	var RequiredPagesRemainingPages =  remaining_pages;
	$('.RemainingPages').text(RequiredPagesRemainingPages);
@else
	$('.RemainingPages').text('N/A');
@endif


$('.RequiredPages').text(pageCount);







	var numpage = $('.numpage').text();


	var numpageParsed = Number(numpage);
var pageCountParsed = Number(pageCount);

// Calculate the total page count
var totalpageCount = numpageParsed + pageCountParsed;

// Check if the result is NaN
if (isNaN(totalpageCount)) {
    $('.totalpageg').text(0);
} else {
    $('.totalpageg').text(totalpageCount);
}

console.log("numpageParsed:", numpageParsed, "pageCountParsed:", pageCountParsed);
console.log("sahriq totalpageCount:", totalpageCount);


		var cost = pageCount * parseInt({{$order->cost_per_page}});

			 var cost_perpage_get = $('#cost_per_page').val();

		//	 var cost = pageCount * parseInt(cost_perpage_get);
			$("#totalCost").text(cost.toFixed(2));


			  @if ($used_subscription)
//	var cost = pageCount * parseInt({{$order->cost_per_page}});

			 var cost_perpage_get = $('#cost_per_page').val();

		 var cost = pageCount * parseInt(cost_perpage_get);
			$("#totalCost").text(cost.toFixed(2));
@else
	var cost = pageCount * parseInt({{$order->cost_per_page}});

			 var cost_perpage_get = $('#cost_per_page').val();

		//	 var cost = pageCount * parseInt(cost_perpage_get);
			$("#totalCost").text(cost.toFixed(2));
@endif




				$('#totalcostreq').text(cost);
				$('#pakg_cost_per_page').text(cost_perpage_get);

			var remainingPages = $("#remainingPages").text();



			if (remainingPages > 0) {
				$("#remainingPages").text(remainingPages - pageCount);
			}



			// Show/hide Subscriber Options based on user type
			var userType = "subscriber"; // Replace with your logic to determine user type
			if (userType === "subscriber") {
				$("#subscriberOptions").show();
				$("#savingsRefundSection").show();
			} else {
				$("#subscriberOptions").hide();
				$("#savingsRefundSection").hide();
			}
		});

		// //send support message
		$(document).on('click', '.sendSupportMessage', function (e){
			e.preventDefault();
			var formData = new FormData($('#support_message_form')[0]);
			var csrfToken = $('meta[name="csrf-token"]').attr('content');



			$.ajax({
				type: "POST",
				url: "{{ route('customer.support.message') }}",
				data: formData,
				contentType: false,
				processData: false,
				headers: {
					'X-CSRF-TOKEN': csrfToken
				},
				success: function(response){
					console.log(response);
					toastr.success(response.message);
					$('#support_message_form')[0].reset();
					supportMessageQuill.setText('');
				},
				error: function(response) {
					console.log(response);
					if (response && response.message) {
						toastr.error(response.message);
					} else {
						toastr.error("An error occurred.");
					}
				}
			});
		});




	});//main-doc;
</script>
<script>


	   $(document).on('click', '.send_rewrite', function() {
	var order_id = document.getElementById('order_id_revision').value;
	var revision_request = document.getElementById('request_revision').value;

if (order_id && revision_request) {
	 var url2 = '{{ route('customer.revision.submit.ajax') }}';

			$.ajax({
				type: 'post',
				url: url2,
				data: {
					order_id: order_id,
					revision_request: revision_request,
					_token: '{{ csrf_token() }}',
				},
				success: function(response) {
					console.log(response);
					Swal.fire('Success', response.message, 'success');
					$('#request').val('');
					requestRevisionEditor.setText('');

				},
				error: function(error) {
					console.error(error);
				}
			});
	}else {

			console.error('Order ID or revision request is missing.');
			Swal.fire('Error', 'Please provide valid inputs.', 'error');
		}


});



	</script>


	<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">

	<script>
		 // Function to handle table search
		 $(document).ready(function () {
        // Add an input event listener to the search input
        $("#searchInput").on("input", function () {
            // Get the value of the search input
            var searchValue = $(this).val().toLowerCase();

            // Filter the rows of the table based on the search input
            $("#kt_order_file_table tbody tr").filter(function () {
                $(this).toggle($(this).text().toLowerCase().indexOf(searchValue) > -1);
            });
        });
    });

    $(document).ready(function () {
        // Initialize DataTables
        var table = $('#kt_order_file_table').DataTable();

        // Attach the search handler to the input change event
        $('#searchInput').on('input', function () {
            handleTableSearch();
        });

        function handleTableSearch() {
            // Get the search input value
            var searchText = $('#searchInput').val().toLowerCase();

            // Loop through each table row
            $('#kt_order_file_table tbody tr').each(function () {
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
    });


		$(document).ready(function() {

			var old_tab_id = localStorage.getItem('tab_id');

			$('.tabBtn').on('click', function() {
				var hrefValue = $(this).attr('href');
				localStorage.setItem('tab_id', hrefValue);
				var tab_id = localStorage.getItem('tab_id');
				if (tab_id === hrefValue) {
					$(hrefValue).addClass('active show');
					$(this).addClass('active');
				}
				console.log(tab_id);
			});

			if (old_tab_id) {
				$(old_tab_id).addClass('active show');
				$('.tabBtn[href="' + old_tab_id + '"]').addClass('active');
			}else{
				$('.defBtn').addClass('active');
				$('#kt_ecommerce_customer_details').addClass('active show');
			}

		});

	$(document).on('click', '#downloadPdf', function () {

		setTimeout(function() {
			location.reload();
		}, 2000);
	});



	$(document).ready(function () {

		var table = $('#kt_file_manager_list').DataTable();
		$('#searchInput').on('input', function () {
			handleTableSearch();
		});

		function handleTableSearch() {
			var searchText = $('#searchInput').val().toLowerCase();
			$('#kt_file_manager_list tbody tr').each(function () {
				var rowText = $(this).text().toLowerCase();
				if (rowText.indexOf(searchText) === -1) {
					$(this).hide();
				} else {
					$(this).show();
				}
			});
		}


		$('#completed_order_file_table').DataTable();





	});


	$(document).on('click', '.feedSubmit', function() {

		 var order_id_get = $('#order_id_get').val();
			var feedback = $('#feedback').val();
			var url2 = '{{ route('customer.order-detail-feedback') }}';

		 $.ajax({
		type: 'post',
		url: url2,
		data: {
			order_id: order_id_get,
			feedback: feedback,
			_token: '{{ csrf_token() }}',
		},
		success: function(response) {
			console.log(response);
			Swal.fire('Success!', 'Order feedback Sent Successfully.', 'success');
			$('#feedback').val('');
			feedbackEditor.setText('');
		},
		error: function(error) {
			console.error(error);
		}
	});
	});


	</script>
	<script>
	document.getElementById('media').addEventListener('change', function() {
		var fileInput = document.getElementById('media');
		var fileNames = '';
		for (var i = 0; i < fileInput.files.length; i++) {
			fileNames += fileInput.files[i].name + '<br>';
		}
		document.getElementById('file_name').innerHTML = fileNames;
	});




</script>



<script src="https://cdn.jsdelivr.net/npm/quill@2/dist/quill.js"></script>

<!-- Initialize Quill editor -->
<script>
//message;
const quill = new Quill("#editor", {
    theme: "snow",
});
addEventListener('keyup', () => {
	var editorContent = quill.root.innerHTML;
	var message = document.getElementById('message');
	message.innerHTML = editorContent;

});
//message end here;

const requestRevisionEditor = new Quill("#requestRevisionEditor", {
    theme: "snow",
});

@if ($order->order_status != 'Delivered')

$('#requestRevisionEditor').on('click', function(){
	Swal.fire({
                title: "Error",
                text: "Oops! You can only post a revision after your order has been delivered. Once your order is delivered, you'll be able to request revisions to ensure it meets your deliverables. Thank you for your patience!",
                icon: "error"
            });
})
$('#feedbackEditor').on('click', function(){
	Swal.fire({
                title: "Error",
                text: "Sorry! You can only leave a review after your order has been successfully delivered. Once your order is delivered, you'll have the opportunity to share your feedback and experience with us. We appreciate your understanding!",
                icon: "error"
            });
})


@endif

@if ($order->order_status != 'Delivered')
	requestRevisionEditor.disable();


@else

addEventListener('keyup', () => {
		var editorContent = requestRevisionEditor.root.innerHTML;
		var request_revision = document.getElementById('request_revision');
		request_revision.innerHTML = editorContent;

	});
@endif
//requestRevisionEditor end;


const supportMessageQuill = new Quill("#editor_3", {
    theme: "snow",
});

const feedbackEditor = new Quill("#feedbackEditor", {
		theme: "snow",
	});

@if ($order->order_status != 'Delivered')
	feedbackEditor.disable();
@else
addEventListener('keyup', () => {
    var editorContent_4 = feedbackEditor.root.innerHTML;
    var message_support = document.getElementById('feedback');
    message_support.innerHTML = editorContent_4;

});
@endif


addEventListener('keyup', () => {
	var editorContent = quill.root.innerHTML;
	var message = document.getElementById('message');
	message.innerHTML = editorContent;

});


addEventListener('keyup', () => {
    var editorContent_3 = supportMessageQuill.root.innerHTML;
    var message_support = document.getElementById('message_support');
    message_support.innerHTML = editorContent_3;

});

</script>

<script>



const selectAllCheckbox = document.getElementById('selectAll');
const checkboxes = document.querySelectorAll('input[name="selectedIds[]"]');
const deleteBtnForm = document.querySelector('.deleteBtnForm');
const downloadBtnForm = document.querySelector('.downloadBtnForm');

selectAllCheckbox.addEventListener('change', function() {
    checkboxes.forEach((checkbox)=> {
        checkbox.checked = selectAllCheckbox.checked;
    });

    if (document.querySelectorAll('input[name="selectedIds[]"]:checked').length > 0) {
        deleteBtnForm.style.display = 'block';
        downloadBtnForm.style.display = 'block';
    } else {
        deleteBtnForm.style.display = 'none';
        downloadBtnForm.style.display = 'none';
    }
});


$(document).on('click', '.deleteBtnForm', function(e){
		var deleteInput = $('#delete_input_field');
		var downloadInput = $('#download_input_field');

		if (deleteInput.val() === 'type_delete') {
			deleteInput.val('');
		} else {
			deleteInput.val('yes');
			downloadInput.val('');
		}

		$('#delete_or_download_form').submit();
		console.log('delete btn');
	});

$(document).on('click', '.downloadBtnForm', function(e){

		var deleteInput = $('#delete_input_field');
		var downloadInput = $('#download_input_field');

		if (downloadInput.val() === 'type_download') {
			downloadInput.val('');
		} else {
			downloadInput.val('yes');
			deleteInput.val('');
		}
		$('#delete_or_download_form').submit();
		console.log('download btn');
	});





	</script>

@endsection
