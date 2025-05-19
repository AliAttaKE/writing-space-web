@extends('custom_layout.customer')
@section('main_content')
<div class="d-flex flex-column flex-column-fluid">
	<!--begin::Toolbar-->
	<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
		<!--begin::Toolbar container-->
		<div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
			<!--begin::Page title-->
			<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
				<!--begin::Title-->
				<h1 class="page-heading d-flex text-gray-900 fw-bold flex-column justify-content-center my-0 custom-fs-23 fs-color-white">Dashboard</h1>
				<!--end::Title-->
			</div>
			<!--end::Page title-->
		</div>
		<!--end::Toolbar container-->
	</div>
	<!--end::Toolbar-->
	<!--begin::Content-->
	<div id="kt_app_content" class="app-content flex-column-fluid">
		<!--begin::Content container-->
		<div id="kt_app_content_container" class="app-container container-xxl">
			<!--begin::Row-->
			<div class="row g-5 g-xl-10 mb-5">
				<!--begin::Col-->
				@auth
				<div class="col-xl-4 mb-5">
					<!--begin::Lists Widget 19-->
					<div class="card mb-5 card-custom-bg">
						<!--begin::Card body-->
						<div class="card-body pt-15">
							<!--begin::Summary-->
							<div class="d-flex flex-center flex-column mb-5">

								<!--begin::Avatar-->
								<div class="symbol symbol-100px symbol-circle mb-7">
									@if (Auth::user()->avatar)
									<img src="{{asset('images/users/customers/'. Auth::user()->avatar)}}" alt="image" />
									@else
									<img src="{{ asset('backend/assets/media/ws/profile.png') }}" alt="image" />
									@endif
								</div>
								<!--end::Avatar-->


								<!--begin::Name-->
								<a href="#" class="fs-3 text-gray-800 text-hover-primary fw-bold mb-1 custom-fs-23 fs-color-white">
									{{ Auth::user()->name }} </a>
								<!--end::Name-->

								<!--begin::Position-->
								<div class="fs-5 fw-semibold text-muted mb-6 custom-fs-17 fs-color-white">
									{{ Auth::user()->email }}
								</div>


								<!--end::Position-->
								<div class="d-flex flex-wrap flex-center">
                                    <!--begin::Stats-->
                                    <div class="border border-gray-300 border-dashed rounded py-3 px-3 mb-3 card-custom-bg">
                                        <div class="fs-4 fw-bold text-gray-700">
                                            <span class="w-75px fs-color-yellow">{{$countCurrentOrders ?? '0'}}</span>
                                            <i class="ki-duotone ki-arrow-up fs-3 text-success">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>

                                        <div class="fw-semibold fs-color-white">Current Orders</div>
                                    </div>
                                    <!--end::Stats-->
                                    <!--begin::Stats-->
                                    <div class="border border-gray-300 border-dashed rounded py-3 px-3 mx-4 mb-3 card-custom-bg">
                                        <div class="fs-4 fw-bold text-gray-700">
                                            <span class="w-50px fs-color-yellow">{{$countPastOrders??'0'}}</span>
                                            <i class="ki-duotone ki-arrow-down fs-3 text-danger">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <div class="fw-semibold fs-color-white">Past Orders</div>
                                    </div>
                                    <!--end::Stats-->
                                    <!--begin::Stats-->
                                    <div class="border border-gray-300 border-dashed rounded py-3 px-3 mb-3 card-custom-bg">
                                        <div class="fs-4 fw-bold text-gray-700">
                                            <span class="w-50px fs-color-yellow">{{$countPackages}}</span>
                                            <i class="ki-duotone ki-arrow-up fs-3 text-success">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <div class="fw-semibold fs-color-white">Packages</div>
                                    </div>
                                    <!--end::Stats-->
                                </div>
								<!--end::Info-->
							</div>
							<!--end::Summary-->

						</div>
						<!--end::Card body-->
					</div>
					<div class="card card-flush card-custom-bg mb-5">
						<!--begin::Heading-->
						<div class="card-header rounded bgi-no-repeat bgi-size-cover bgi-position-y-top bgi-position-x-center align-items-start h-250px" style="background-image:url('assets/media/svg/shapes/top-green.png" data-bs-theme="light">
							<!--begin::Title-->
							<h3 class="card-title align-items-start flex-column pt-15">
								<span class="fw-bold fs-2x mb-3 custom-fs-23 fs-color-white">My Orders</span>
							</h3>
							<!--end::Title-->
							<!--begin::Toolbar-->
							<div class="card-toolbar pt-5">
								<!--begin::Menu-->
								<button class="btn btn-sm btn-icon btn-active-color-primary btn-color-white bg-white bg-opacity-25 bg-hover-opacity-100 bg-hover-white bg-active-opacity-25 w-20px h-20px d-none" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
									<i class="ki-duotone ki-dots-square fs-4">
										<span class="path1"></span>
										<span class="path2"></span>
										<span class="path3"></span>
										<span class="path4"></span>
									</i>
								</button>
								<!--begin::Menu 2-->
								<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">Quick Actions</div>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu separator-->
									<div class="separator mb-3 opacity-75"></div>
									<!--end::Menu separator-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link px-3">New Ticket</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link px-3">New Customer</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
										<!--begin::Menu item-->
										<a href="#" class="menu-link px-3">
											<span class="menu-title">New Group</span>
											<span class="menu-arrow"></span>
										</a>
										<!--end::Menu item-->
										<!--begin::Menu sub-->
										<div class="menu-sub menu-sub-dropdown w-175px py-4">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3">Admin Group</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3">Staff Group</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3">Member Group</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu sub-->
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link px-3">New Contact</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu separator-->
									<div class="separator mt-3 opacity-75"></div>
									<!--end::Menu separator-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<div class="menu-content px-3 py-3">
											<a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
										</div>
									</div>
									<!--end::Menu item-->
								</div>
								<!--end::Menu 2-->
								<!--end::Menu-->
							</div>
							<!--end::Toolbar-->
						</div>
						<!--end::Heading-->
						<!--begin::Body-->
						<div class="card-body mt-n20">
							<!--begin::Stats-->
							<div class="mt-n20 position-relative">
								<!--begin::Row-->
								<div class="row g-3 g-lg-6">
									<!--begin::Col-->
									<div class="col-6">
										<!--begin::Items-->
										<div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5 card-custom-bg">
											<!--begin::Symbol-->
											<div class="symbol symbol-30px me-5 mb-8">
												<span class="symbol-label">
													<i class="ki-duotone ki-parcel fs-1 text-primary"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>
												</span>
											</div>
											<!--end::Symbol-->
											<!--begin::Stats-->
											<div class="m-0">
												@php
												$countPending = \App\Models\Orders::where('order_status', 'Pending')
												->where('user_id', Auth::user()->id)->count();
												@endphp
												<!--begin::Number-->
												<span class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1 custom-fs-22 fs-color-yellow">{{$countPending ?? '0'}}</span>
												<!--end::Number-->
												<!--begin::Desc-->
												<span class="text-gray-500 fw-semibold fs-6"><a href="{{route('customer.new-order')}}" class="fs-color-white custom-fs-13">New</a></span>
												<!--end::Desc-->
											</div>
											<!--end::Stats-->
										</div>
										<!--end::Items-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-6">
										<!--begin::Items-->
										<div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5 card-custom-bg">
											<!--begin::Symbol-->
											<div class="symbol symbol-30px me-5 mb-8">
												<span class="symbol-label">
													<i class="ki-duotone ki-abstract-8 fs-1 text-primary">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</span>
											</div>
											<!--end::Symbol-->
											<!--begin::Stats-->
											<div class="m-0">
												@php
												$countProgress = \App\Models\Orders::where('order_status', 'In-Progress')
												->where('user_id', Auth::user()->id)->count();
												@endphp
												<!--begin::Number-->
												<span class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1 custom-fs-22 fs-color-yellow">{{$countProgress ?? '0'}}</span>
												<!--end::Number-->
												<!--begin::Desc-->
												<span class="text-gray-500 fw-semibold fs-6"><a href="{{route('customer.inprogress-order')}}" class="fs-color-white custom-fs-13">In Progress</a></span>
												<!--end::Desc-->
											</div>
											<!--end::Stats-->
										</div>
										<!--end::Items-->
									</div>
									<!--end::Col-->

									<!--begin::Col-->
									<div class="col-6">
										<!--begin::Items-->
										<div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5 card-custom-bg">
											<!--begin::Symbol-->
											<div class="symbol symbol-30px me-5 mb-8">
												<span class="symbol-label">
													<i class="ki-duotone ki-timer fs-1 text-primary">
														<span class="path1"></span>
														<span class="path2"></span>
														<span class="path3"></span>
													</i>
												</span>
											</div>
											<!--end::Symbol-->
											<!--begin::Stats-->
											<div class="m-0">
												@php
												$countRevision = \App\Models\Orders::where('order_status', 'Revision')
												->where('user_id', Auth::user()->id)->count();
												@endphp
												<!--begin::Number-->
												<span class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1 custom-fs-22 fs-color-yellow">{{$countRevision ?? '0'}}</span>
												<!--end::Number-->
												<!--begin::Desc-->
												<span class="text-gray-500 fw-semibold fs-6"><a href="{{route('customer.revision-order')}}" class="fs-color-white custom-fs-13">Revisions</a></span>
												<!--end::Desc-->
											</div>
											<!--end::Stats-->
										</div>
										<!--end::Items-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-6">
										<!--begin::Items-->
										<div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5 card-custom-bg">
											<!--begin::Symbol-->
											<div class="symbol symbol-30px me-5 mb-8">
												<span class="symbol-label">
													<i class="ki-duotone ki-delivery fs-1 text-primary"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>
												</span>
											</div>
											<!--end::Symbol-->
											<!--begin::Stats-->
											<div class="m-0">
												@php
												$countDelivered = \App\Models\Orders::where('order_status', 'Delivered')
												->where('user_id', Auth::user()->id)->count();
												@endphp
												<!--begin::Number-->
												<span class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1 custom-fs-22 fs-color-yellow">{{$countDelivered ?? '0'}}</span>
												<!--end::Number-->
												<!--begin::Desc-->
												<span class="text-gray-500 fw-semibold fs-6"><a href="{{route('customer.delivered-order')}}" class="fs-color-white custom-fs-13">Delivered</a></span>
												<!--end::Desc-->
											</div>
											<!--end::Stats-->
										</div>
										<!--end::Items-->
									</div>
									<div class="col-6">
										<!--begin::Items-->
										<div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5 card-custom-bg">
											<!--begin::Symbol-->
											<div class="symbol symbol-30px me-5 mb-8">
												<span class="symbol-label">
													<i class="ki-duotone ki-delivery fs-1 text-primary"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>
												</span>
											</div>
											<!--end::Symbol-->
											<!--begin::Stats-->
											<div class="m-0">



												@php
                                                     $countOthers = \App\Models\Orders::where('user_id', Auth::user()->id)
														->where(function ($query) {
															$query->where('order_status', 'Canceled')
																->orWhere('order_status', 'Refund');
														})
														->count();

												@endphp
												<!--begin::Number-->
												<span class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1 custom-fs-22 fs-color-yellow">{{$countOthers ?? '0'}}</span>
												<!--end::Number-->
												<!--begin::Desc-->
												<span class="text-gray-500 fw-semibold fs-6"><a href="{{route('customer.other-order')}}" class="fs-color-white custom-fs-13">Others</a></span>
												<!--end::Desc-->
											</div>
											<!--end::Stats-->
										</div>
										<!--end::Items-->
									</div>
									<!--end::Col-->
								</div>
								<!--end::Row-->
							</div>
							<!--end::Stats-->
						</div>
						<!--end::Body-->
					</div>
					<div class="card btn-dark-primary">
					<div class="card h-md-100 card-custom-bg" dir="ltr">
						<!--begin::Body-->
						<div class="card-body d-flex flex-column flex-center">
							<!--begin::Heading-->
							<div class="mb-2">
								<!--begin::Title-->
								<h1 class="fw-semibold text-gray-800 text-center lh-lg fs-color-white">
								Discover Our Amazing
									<span class="fw-bolder fs-color-yellow"> Offers!</span>
								</h1>

								  <p class="text-center text-gray-700 fs-color-white custom-fs-13">
                Take advantage of incredible discounts tailored just for you. From special percentages off to deals based on your needs, we've got something for everyone.
            </p>
							</div>

							@if(!empty($coupons))
							@foreach($coupons as $coupon)
							<!--<div class="separator separator-dashed my-3">----------------------------------</div>-->
                                <!--end::Separator-->
                                <!--begin::Item-->
       <!--                         <div class="d-flex flex-stack">-->
                                    <!--begin::Section-->
       <!--                             <div class="text-gray-700 fw-semibold fs-6 me-2 fs-color-white custom-fs-13">Percentage</div>-->
                                    <!--end::Section-->
                                    <!--begin::Statistics-->
       <!--                             <div class="d-flex align-items-center text-white">-->
							<!--				{{ $coupon->discount }}-->
       <!--                             </div>-->
							<!--		&nbsp;-->
							<!--		<div class="text-gray-700 fw-semibold fs-6 me-2 fs-color-white custom-fs-13"> Minimum Pages</div>-->
									 <!--end::Section-->
                                    <!--begin::Statistics-->
       <!--                             <div class="d-flex align-items-center text-white">-->
							<!--			{{ $coupon->min_pages }}-->
       <!--                             </div>-->
                                    <!--end::Statistics-->
       <!--                         </div>-->
                            @endforeach
							@endif


								<div class="text-center mb-1">
							<!--begin::Link-->
							<br>
							<a class="btn btn-sm btn-light badge-custom-bg" id="btn-dark-primary" href="{{ route('customer.brand.ambassadors') }}">
							Start Saving Today
							 </a>

						</div>
						<!--end::Links-->
					</div>



					<!--end::Body-->
				</div>
			</div>
					<!--end::Lists Widget 19-->
				</div>
				<!--end::Col-->
				@endauth
				<!--begin::Col-->
				<div class="col-xl-8">
                        <!--begin::Chart widget 18-->
                        <!--begin::List widget 25-->
                        <div class="card card-flush mb-5 btn-dark-primary">
                            <!--begin::Header-->
                            <div class="card-header pt-5">
                                <!--begin::Title-->
                                <h3 class="card-title text-gray-800 fs-color-white custom-fs-23">Package Details</h3>
                                <!--end::Title-->
                                <!--begin::Toolbar-->

                                <!--end::Toolbar-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body pt-5">

								@if(!empty($used_subscription))
                                <!--begin::Separator-->
                                <div class="separator separator-dashed my-3"></div>
                                <!--end::Separator-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Section-->
                                    <div class="text-gray-700 fw-semibold fs-6 me-2 fs-color-white custom-fs-13">Total Package pages</div>
                                    <!--end::Section-->
                                    <!--begin::Statistics-->
                                    <div class="d-flex align-items-senter">
										{{ $used_subscription->total_pages}}
                                    </div>
                                    <!--end::Statistics-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed my-3"></div>
                                <!--end::Separator-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Section-->
                                    <div class="text-gray-700 fw-semibold fs-6 me-2 fs-color-white custom-fs-13">Total Used pages</div>
                                    <!--end::Section-->
                                    <!--begin::Statistics-->
                                    <div class="d-flex align-items-senter" style="color:#F8285A">
										{{(float)$used_subscription->total_pages - (float)$used_subscription->remaining_pages}}
                                    </div>
                                    <!--end::Statistics-->
                                </div>
                                <!--end::Item-->

                                <!--begin::Separator-->
                                <div class="separator separator-dashed my-3"></div>
                                <!--end::Separator-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Section-->
                                    <div class="text-gray-700 fw-semibold fs-6 me-2 fs-color-white custom-fs-13">Total Remaining pages</div>
                                    <!--end::Section-->
                                    <!--begin::Statistics-->
                                    <div class="d-flex align-items-senter" style="color:#17C653">
										{{(float)$used_subscription->remaining_pages}}
                                    </div>
                                    <!--end::Statistics-->
                                </div>
                                <!--end::Item-->

                                <!--begin::Separator-->
                                <div class="separator separator-dashed my-3"></div>
                                <!--end::Separator-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Section-->
                                    <div class="text-gray-700 fw-semibold fs-6 me-2 fs-color-white custom-fs-13">Additional Pages Available for Purchase</div>
                                    <!--end::Section-->
                                    <!--begin::Statistics-->
                                    <div class="d-flex align-items-senter" style="color:#17C653">
										{{(float)$used_subscription->rollover_pages}}
                                    </div>
                                    <!--end::Statistics-->
                                </div>
                                <!--end::Item-->

                                <!--begin::Separator-->
                                <div class="separator separator-dashed my-3"></div>
                                <!--end::Separator-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Section-->
                                    <div class="text-gray-700 fw-semibold fs-6 me-2 fs-color-white custom-fs-13">Expire Date</div>
                                    <!--end::Section-->
                                    <!--begin::Statistics-->
                                    <div class="d-flex align-items-senter">
                                        {{ \Carbon\Carbon::parse($used_subscription->due_date)->format('F j, Y') }}


                                    </div>
                                    <!--end::Statistics-->
                                </div>
                                <!--end::Item-->

                                <!--begin::Separator-->
                                <div class="separator separator-dashed my-3"></div>
                                <!--end::Separator-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Section-->
                                    <div class="text-gray-700 fw-semibold fs-6 me-2 fs-color-white custom-fs-13">Status</div>
                                    <!--end::Section-->
                                    <!--begin::Statistics-->
                                    <div class="d-flex align-items-senter">
										@if($used_subscription->status == 'Active')
											<span  style="color:#17C653">{{$used_subscription->status}}</span>
										@else
											<span  style="color:#F8285A">{{$used_subscription->status}}</span>
										@endif
                                    </div>
                                    <!--end::Statistics-->
                                </div>
                                <!--end::Item-->
								@else
									<!--begin::Separator-->
									<div class="separator separator-dashed my-3"></div>
                                <!--end::Separator-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Section-->
                                    <div class="text-gray-700 fw-semibold fs-6 me-2 fs-color-white custom-fs-13">Total Package pages</div>
                                    <!--end::Section-->
                                    <!--begin::Statistics-->
                                    <div class="d-flex align-items-senter">
									N/A
                                    </div>
                                    <!--end::Statistics-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed my-3"></div>
                                <!--end::Separator-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Section-->
                                    <div class="text-gray-700 fw-semibold fs-6 me-2 fs-color-white custom-fs-13">Total Used pages</div>
                                    <!--end::Section-->
                                    <!--begin::Statistics-->
                                    <div class="d-flex align-items-senter">
									N/A
                                    </div>
                                    <!--end::Statistics-->
                                </div>
                                <!--end::Item-->

                                <!--begin::Separator-->
                                <div class="separator separator-dashed my-3"></div>
                                <!--end::Separator-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Section-->
                                    <div class="text-gray-700 fw-semibold fs-6 me-2 fs-color-white custom-fs-13">Total Remaining pages</div>
                                    <!--end::Section-->
                                    <!--begin::Statistics-->
                                    <div class="d-flex align-items-senter">
									N/A
                                    </div>
                                    <!--end::Statistics-->
                                </div>
                                <!--end::Item-->

                                <!--begin::Separator-->
                                <div class="separator separator-dashed my-3"></div>
                                <!--end::Separator-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Section-->
                                    <div class="text-gray-700 fw-semibold fs-6 me-2 fs-color-white custom-fs-13">Expire Date</div>
                                    <!--end::Section-->
                                    <!--begin::Statistics-->
                                    <div class="d-flex align-items-senter">
										N/A
                                    </div>
                                    <!--end::Statistics-->
                                </div>
                                <!--end::Item-->

                                <!--begin::Separator-->
                                <div class="separator separator-dashed my-3"></div>
                                <!--end::Separator-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Section-->
                                    <div class="text-gray-700 fw-semibold fs-6 me-2 fs-color-white custom-fs-13">Status</div>
                                    <!--end::Section-->
                                    <!--begin::Statistics-->
                                    <div class="d-flex align-items-senter">
											N/A
                                    </div>
                                    <!--end::Statistics-->
                                </div>
                                <!--end::Item-->

								@endif
                            </div>
                            <!--end::Body-->
                        </div>


							<!--begin::List widget 25-->
							<div class="card card-flush mb-5 ">
								<!--begin::Header-->
								<div class="card border-0 h-md-100 card-lenier upgrade-plan-custom" data-bs-theme="light" style="background: linear-gradient(112.14deg, #00D2FF 0%, #3A7BD5 100%)">
									<!--begin::Body-->
									<div class="card-body">
										<!--begin::Row-->
										<div class="row align-items-center h-100">
											<!--begin::Col-->

													<div class="ps-xl-2">
															<div class="text-white mb-6 pt-6">
																<span class="fs-4 fw-semibold me-2 d-block lh-1 pb-2 fs-color-yellow custom-fs-22">Get best offer</span>

																<span class="fs-2qx fw-bold custom-fs-36">Package Plan</span>
															</div>

														<span class="fw-semibold text-white fs-6 mb-8 d-block opacity-75">

														</span>

														<!--begin::Items-->
														<div class="d-flex align-items-center d-grid gap-2 mb-10 mb-xl-20">
    @if(!empty($best_offers))
        @foreach($best_offers as $best)
        <!--begin::Item-->
        <div class="d-flex">
            <div class="symbol symbol-30px symbol-circle me-3">
                <span class="symbol-label" style="background: #35C7FF">
                    <i class="ki-duotone ki-abstract-41 fs-5 text-white"><span class="path1"></span><span class="path2"></span></i>
                </span>
            </div>
            <div class="text-white">
                <span class="fw-semibold d-block fs-8 custom-fs-13"><spnan class="fs-color-yellow">Package Name:</spnan> <spnan class="fw-bold">{{ $best->subscription_name }}</spnan></span>
                <span class="fw-semibold d-block fs-8 custom-fs-13"><spnan class="fs-color-yellow">Cost Per Page:</spnan> <spnan class="fw-bold">{{ $best->cost_per_page }}</spnan> </span>
                <span class="fw-semibold d-block fs-8 custom-fs-13"><spnan class="fs-color-yellow">Minimum Pages:</spnan><spnan class="fw-bold">{{ $best->min_page }}</spnan> </span>
                <span class="fw-semibold d-block fs-8 custom-fs-13"><spnan class="fs-color-yellow">Maximum Pages:</spnan><spnan class="fw-bold">{{ $best->max_page }}</spnan>  </span>
                <span class="fw-semibold d-block fs-8 custom-fs-13"><spnan class="fs-color-yellow">Duration:</spnan><spnan class="fw-bold">{{ $best->set_time }} days</spnan> </span>
            </div>
        </div>
        <!--end::Item-->
        @endforeach
    @endif
</div>

													<!--end::Items-->

													<!--begin::Action-->
													<div class="d-flex flex-column flex-sm-row d-grid gap-2">
														<a href="{{route('front.subscriptions')}}" class="btn btn-success btn-rainbow flex-shrink-0 me-lg-2" {{-- data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan" --}}>Upgrade Plan</a>
													</div>
													<!--end::Action-->
												</div>






											<!--end::Col-->

											<!--begin::Col-->
											<!--<div class="col-5 pt-10">-->
												<!--begin::Illustration-->
											<!--	<div class="bgi-no-repeat bgi-size-contain bgi-position-x-end h-225px" style="background-image:url('/metronic8/demo1/assets/media/svg/illustrations/easy/5.svg">-->
											<!--	</div>-->
												<!--end::Illustration-->
											<!--</div>-->
											<!--end::Col-->
										</div>
										<!--end::Row-->
									</div>
									<!--end::Body-->
								</div>
								<!--end::Header-->
							</div>
							<!--end::LIst widget 25-->

					<div class="row g-5 g-xl-10">
						<!--begin::Col-->
						<div class="col-12">


							<!--begin::Slider Widget 1-->
							<div  class="card card-flush carousel carousel-custom carousel-stretch slide h-xl-100 card-custom-bg message-summ" data-bs-ride="carousel" data-bs-interval="5000">
								<!--begin::Header-->
								<div class="card-header pt-5">
									<!--begin::Title-->
									<h4 class="card-title d-flex align-items-start flex-column">
										<span class="card-label fw-bold text-gray-800 custom-fs-22">Messages Summary</span>
										{{-- <span class="text-gray-500 mt-1 fw-bold fs-7">Total messages</span> --}}
									</h4>
									<!--end::Title-->

									<!--begin::Toolbar-->
									<div class="card-toolbar">
										<!--begin::Carousel Indicators-->

										<!--end::Carousel Indicators-->
									</div>
									<!--end::Toolbar-->
								</div>
								<!--end::Header-->

								<!--begin::Body-->
								<div class="card-body py-6">
									<span class="text-gray-500 mt-1 fw-bold custom-fs-13">Total messages: {{$countMessages??'0'}}</span>

									<div class="card-body table-custom-layout py-4">
										<!--begin::Table-->
										<table class="table align-middle table-row-dashed fs-6 gy-5 border-0" id="message_summary_table">
											<thead>
												<tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
													<th class="min-w-100px fw_800 pb-8">#</th>
													<th class="min-w-50px fw_800 pb-8">Order ID</th>
													<th class="min-w-70px fw_800 pb-8">Message</th>
													<th class="min-w-70px fw_800 pb-8">Date</th>
												</tr>
											</thead>
											<tbody class="text-gray-600 fw-semibold">
												@if(!empty($showLatestMsgs))
													@foreach($showLatestMsgs as $key => $msg)
														<tr>
															<td>{{$key+1}}</td>
															<td>
																<a href="{{route('customer.reply-message',$msg->order_id )}}">
																	{{ $msg->order_id }}
																</a>
															</td>
															<!-- <td>{!! $msg->message !!}</td> -->
															<td>{!! substr($msg->message, 0, 12) !!}</td>


															<td>{{ $msg->created_at->format('F j, Y g:i A') }}</td>
														</tr>
													@endforeach
												@endif

											</tbody>

										</table>
										<br>
										<a class="btn btn-sm btn-light badge-custom-bg" id="btn-dark-primary" href="{{route('customer.message-managememnt')}}">
										Click here for Details
							 </a>
										<!--end::Table-->
									</div>

								</div>
								<!--end::Body-->
							</div>
							<!--end::Slider Widget 1-->


						</div>
						<!--end::Col-->

						<!--begin::Col-->
						<div class="col-12 mt-5">


							<!--begin::Slider Widget 2-->
							<div id="kt_sliders_widget_2_slider" class="card card-flush carousel carousel-custom carousel-stretch slide h-xl-100 card-custom-bg message-summ" data-bs-ride="carousel" data-bs-interval="5500">
								<!--begin::Header-->
								<div class="card-header pt-5">
									<!--begin::Title-->
									<h4 class="card-title d-flex align-items-start flex-column">
										<span class="card-label fw-bold text-gray-800 custom-fs-22">Folder Summary</span>
										{{-- <span class="text-gray-500 mt-1 fw-bold fs-7">Total files</span> --}}
									</h4>
									<!--end::Title-->

									<!--begin::Toolbar-->
									<div class="card-toolbar">
										<!--begin::Carousel Indicators-->

										<!--end::Carousel Indicators-->
									</div>
									<!--end::Toolbar-->
								</div>
								<!--end::Header-->

								<!--begin::Body-->
								<div class="card-body py-6 folder-summary-dashboard">
									<span class="text-gray-500 mt-1 fw-bold ">Folders: {{$countFolders??'0'}}</span>
									<br>
									{{-- <span class="text-gray-500 mt-1 fw-bold custom-fs-13">Files: {{$countFolders??'0'}}</span> --}}

									<div class="card-body table-custom-layout py-4">
										<!--begin::Table-->
										<table class="table align-middle table-row-dashed fs-6 gy-5" id="folder_table">
											<thead>
												<tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
													<th class="min-w-100px fw_800 pb-8">#</th>
													<th class="min-w-50px fw_800 pb-8">Folder Name / ID</th>
													<th class="min-w-70px fw_800 pb-8">Date</th>
												</tr>
											</thead>
											<tbody class="text-gray-600 fw-semibold">
												@if(!empty($showLatestFolders))
													@foreach($showLatestFolders as $key => $folder)
														<tr>
															<td>{{$key+1}}</td>
															<td>
																<a href="{{route('customer.folders.view',$folder->id )}}">
																{{ $folder->name }}
																</a>
															</td>
															<td>{{ \Carbon\Carbon::parse($folder->created_at)->format('F j, Y g:i A') }}
</td>
														</tr>
													@endforeach
												@endif
											</tbody>
										</table>
										<br>
										<a class="btn btn-sm btn-light badge-custom-bg" id="btn-dark-primary" href="{{route('customer.folder.show')}}">
										Click here for Details
							 </a>
										<!--end::Table-->
									</div>
								</div>
								<!--end::Body-->
							</div>
							<!--end::Slider Widget 2-->
						</div>
						<!--end::Col-->
					</div>
					<!--end::Chart widget 18-->
				</div>
				<!--end::Col-->
			</div>
			<!--end::Row-->
			<!--begin::Row-->
			<div class="row g-5 mb-10 g-xl-10">

			<div class="col-xl-12">
				<!--begin::Card-->
				<div class="card card-custom-bg message-summ new-order-dashboard">
					<!--begin::Page title-->
					<div class="page-title d-flex flex-column justify-content-center pt-6 px-6 flex-wrap me-3">
						<!--begin::Title-->
						<!--end::Title-->

					</div>

					<!--begin::Card header-->
					<div class="card-header border-0 pt-6">

					<h4 class="card-title d-flex align-items-start flex-column">
						<span class="card-label fw-bold text-gray-800 custom-fs-22">New Orders</span>
					</h4>
						<!--begin::Card toolbar-->
						<div class="card-toolbar">
							<!--begin::Toolbar-->
							<div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
								<!--begin::Filter-->
								<!--<button type="button" class="btn btn-light-primary me-3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">-->
								<!--	<i class="ki-duotone ki-filter fs-2">-->
								<!--		<span class="path1"></span>-->
								<!--		<span class="path2"></span>-->
								<!--	</i>Filter</button>-->
								<div class="menu menu-sub menu-sub-dropdown w-300px w-md-325px" data-kt-menu="true">
									<!--begin::Header-->
									<div class="px-7 py-5">
										<div class="fs-5 text-gray-900 fw-bold">Filter Options</div>
									</div>
									<!--end::Header-->
									<!--begin::Separator-->
									<div class="separator border-gray-200"></div>
									<!--end::Separator-->
									<!--begin::Content-->
									<div class="px-7 py-5" data-kt-user-table-filter="form">
										<!--begin::Input group-->
										<div class="mb-3">
											<label class="form-label fs-6 fw-semibold">Order Id:</label>
											<input type="text" placeholder="Order Id" name="order-id" autocomplete="off" class="form-control bg-transparent">
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="mb-3">
											<label class="form-label fs-6 fw-semibold">Topic:</label>
											<input type="text" placeholder="Topic" name="topic" autocomplete="off" class="form-control bg-transparent">
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="mb-3">
											<label class="form-label fs-6 fw-semibold">Status:</label>
											<input type="text" placeholder="Status" name="status" autocomplete="off" class="form-control bg-transparent">
										</div>
										<!--end::Input group-->
										<!--begin::Actions-->
										<div class="d-flex justify-content-end">
											<button type="reset" class="btn btn-light btn-active-light-primary fw-semibold me-2 px-6" data-kt-menu-dismiss="true" data-kt-user-table-filter="reset">Reset</button>
											<button type="submit" class="btn btn-primary fw-semibold px-6" data-kt-menu-dismiss="true" data-kt-user-table-filter="filter">Apply</button>
										</div>
										<!--end::Actions-->
									</div>
									<!--end::Content-->
								</div>
								<!--end::Filter-->
								<!--begin::Export-->
								<!--<button type="button" class="btn btn-light-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_export_users">-->
								<!--	<i class="ki-duotone ki-exit-up fs-2">-->
								<!--		<span class="path1"></span>-->
								<!--		<span class="path2"></span>-->
								<!--	</i>Export</button>-->
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

						</div>
						<!--end::Card toolbar-->
					</div>
					<!--end::Card header-->
					<!--begin::Card body-->
					<div class="card-body table-custom-layout py-4">
						<!--begin::Table-->
						<table class="table align-middle table-row-dashed fs-6 gy-5" id="customer_profile_new_order_table"

						 >
							<thead>
								<tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">

									<th class="min-w-100px fw_800 pb-8">order No</th>
									<th class="min-w-60px fw_800 pb-8">Topic</th>
									<th class="min-w-70px fw_800 pb-8">Pages</th>
									<th class="min-w-90px fw_800 pb-8">Order Date</th>
									<th class="min-w-80px fw_800 pb-8">Due Date</th>
									<th class="min-w-80px fw_800 pb-8">Status</th>
									<th class="min-w-70px fw_800 pb-8">Action</th>

								</tr>

							</thead>
							<tbody class="text-gray-600 fw-semibold">

								@if(isset($orders))
									@foreach ($orders as $o)
									<tr>

										<td><a href="{{route('customer.order-detail',[$o->order_id])}}">{{$o->order_id}}</a></td>
										<td class="limit-text">{{$o->topic}}</td>
										<td>{{$o->number_of_pages}}</td>
										<td>{{ \Carbon\Carbon::parse($o->created_at)->format('d F Y h:iA')  }}</td>
										<td>{{ \Carbon\Carbon::parse($o->deadline)->format('d F Y h:iA') }}</td>
										<td>
											@if($o->order_status == 'Pending')
											<span class="badge badge-light-success fw-bold me-auto px-4 py-3 badge-custom-bg">{{$o->order_status}}</span>
											@else
											<span class="badge badge-light-danger fw-bold me-auto px-4 py-3 badge-custom-bg">{{$o->order_status}}</span>
											@endif
										</td>
										<td>
											<a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm badge-custom-bg" id="badge-custom-bg" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
												<i class="ki-duotone ki-down fs-5 ms-1"></i>
											</a>
											<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4 badge-custom-bg" id="badge-custom-bg" data-kt-menu="true">
												<div class="menu-item px-3">
													<a href="#" class="menu-link d-flex justify-content-center px-3" id="badge-custom-bg" data-bs-toggle="modal" data-bs-target="#view-invoice_{{$o->id}}">View</a>
												</div>
											</div>
										</td>
									</tr>
									<div class="modal fade view-invoice" id="view-invoice_{{$o->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
										<div class="modal-dialog modal-dialog-centered modal-lg">
											<div class="modal-content badge-custom-bg">
												<div class="modal-header border-0">
													<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
												</div>
												<div class="modal-body">
													<div class="">
														<!--begin::Body-->
														<div class="card-body">
															<!--begin::Layout-->
															<div class="d-flex flex-column flex-xl-row">
																<!--begin::Content-->
																<div class="flex-lg-row-fluid me-xl-18 mb-10 mb-xl-0">
																	<!--begin::Invoice 2 content-->
																	<div class="mt-n1">
																		<!--begin::Top-->
																		<div class="d-flex flex-stack pb-10">
																			<!--begin::Logo-->
																			<a href="#">
																				<img alt="Logo" src="{{asset('backend/assets/media/ws/ws-light-logo.png')}}" />
																			</a>
																			<!--end::Logo-->
																		</div>
																		<!--end::Top-->
																		<!--begin::Wrapper-->
																		<div class="m-0">
																			<!--begin::Label-->
																			<div class="fw-bold fs-3 text-gray-800 mb-8 fs-color-white custom-fs-13">Order #{{$o->order_id}}</div>
																			<!--end::Label-->
																			<!--begin::Row-->
																			<div class="row g-5 mb-12">
																				<!--end::Col-->
																				<div class="col-md-3">
																					<!--end::Label-->
																					<div class="fw-semibold fs-7 mb-1 fs-color-white custom-fs-13">Subject:</div>
																					<!--end::Label-->
																					<!--end::Text-->
																					<div class="fw-bold fs-6 fs-color-white custom-fs-13">{{$o->subject}}</div>
																					<!--end::Text-->
																				</div>
																				<!--end::Col-->
																				<!--end::Col-->
																				<div class="col-md-3">
																					<!--end::Label-->
																					<div class="fw-semibold fs-7 mb-1 fs-color-white custom-fs-13">Academic level:</div>
																					<!--end::Label-->
																					<!--end::Text-->
																					<div class="fw-bold fs-6 fs-color-white custom-fs-13">{{$o->academic_level}}</div>
																					<!--end::Text-->
																				</div>
																				<!--end::Col-->
																				<div class="col-md-3">
																					<!--end::Label-->
																					<div class="fw-semibold fs-7 mb-1 fs-color-white custom-fs-13">Type of Paper:</div>
																					<!--end::Label-->
																					<!--end::Text-->
																					<div class="fw-bold fs-6 fs-color-white custom-fs-13">{{$o->type_of_paper}}</div>
																					<!--end::Text-->
																				</div>
																				<!--end::Col-->
																				<!--end::Col-->
																				<div class="col-md-3">
																					<!--end::Label-->
																					<div class="fw-semibold fs-7 mb-1 fs-color-white custom-fs-13">Paper Format:</div>
																					<!--end::Label-->
																					<!--end::Text-->
																					<div class="fw-bold fs-6 fs-color-white custom-fs-13">{{$o->paper_format}}</div>
																					<!--end::Text-->
																				</div>
																				<!--end::Col-->
																			</div>
																			<!--end::Row-->
																			<!--begin::Content-->
																			<div class="row g-5 mb-12">
																				<!--end::Col-->
																				<div class="col-md-3">
																					<!--end::Label-->
																					<div class="fw-semibold fs-7 mb-1 fs-color-white custom-fs-13">Language and Spelling:</div>
																					<!--end::Label-->
																					<!--end::Text-->
																					<div class="fw-bold fs-6 fs-color-white custom-fs-13">{{$o->language_spelling}}</div>
																					<!--end::Text-->
																				</div>
																				<!--end::Col-->
																				<!--end::Col-->
																				<div class="col-md-3">
																					<!--end::Label-->
																					<div class="fw-semibold fs-7 mb-1 fs-color-white custom-fs-13">Number of pages:</div>
																					<!--end::Label-->
																					<!--end::Text-->
																					<div class="fw-bold fs-6 fs-color-white custom-fs-13">{{$o->number_of_pages}}</div>
																					<!--end::Text-->
																				</div>
																				<!--end::Col-->
																				{{-- <div class="col-md-3"> --}}
																					<!--end::Label-->
																					{{-- <div class="fw-semibold fs-7 mb-1 fs-color-white custom-fs-13">Spacing:</div> --}}
																					<!--end::Label-->
																					<!--end::Text-->
																					{{-- <div class="fw-bold fs-6 fs-color-white custom-fs-13">{{$o->spacing}}</div> --}}
																					<!--end::Text-->
																				{{-- </div> --}}
																				<!--end::Col-->
																				<div class="col-md-3">
																					<!--end::Label-->
																					<div class="fw-semibold fs-7 mb-1 fs-color-white custom-fs-13">Power Point Slides:</div>
																					<!--end::Label-->
																					<!--end::Text-->
																					<div class="fw-bold fs-6 fs-color-white custom-fs-13">{{$o->powerpoint_slide}}</div>
																					<!--end::Text-->

																				</div>
																				<div class="col-md-3">
																					<!--end::Label-->
																					<div class="fw-semibold fs-7 mb-1 fs-color-white custom-fs-13">No# Extra Sources:</div>
																					<!--end::Label-->
																					<!--end::Text-->
																					<div class="fw-bold fs-6 fs-color-white custom-fs-13">{{$o->no_of_extra_sources}}</div>
																					<!--end::Text-->

																				</div>
																				<div class="col-md-3">
																					<!--end::Label-->
																					<div class="fw-semibold fs-7 mb-1 fs-color-white custom-fs-13">Order Date:</div>
																					<!--end::Label-->
																					<!--end::Text-->
																					<div class="fw-bold fs-6 fs-color-white custom-fs-13"> {{ \Carbon\Carbon::parse($o->created_at)->format('d F Y h:i A')  }}</div>
																					<!--end::Text-->

																				</div>
																				<div class="col-md-3">
																					<!--end::Label-->
																					<div class="fw-semibold fs-7 mb-1 fs-color-white custom-fs-13">DeadLine:</div>
																					<!--end::Label-->
																					<!--end::Text-->
																					<div class="fw-bold fs-6 fs-color-white custom-fs-13">{{ \Carbon\Carbon::parse($o->deadline)->format('d F Y h:i A') }}</div>
																					<!--end::Text-->

																				</div>
																				<div class="col-md-3">
																					<!--end::Label-->
																					<div class="fw-semibold fs-7 mb-1 fs-color-white custom-fs-13">Statistical Analysis:</div>
																					<!--end::Label-->
																					<!--end::Text-->
																					<div class="fw-bold fs-6 fs-color-white custom-fs-13">{{($o->statistical_analysis == 1) ? 'Yes' : 'No' }}</div>
																					<!--end::Text-->

																				</div>
																				<div class="col-md-3">
																					<!--end::Label-->
																					<div class="fw-semibold fs-7 mb-1">Order Type:</div>
																					<!--end::Label-->
																					<!--end::Text-->
																					<div class="fw-bold fs-6 fs-color-white custom-fs-13">{{$o->order_type}}</div>
																					<!--end::Text-->

																				</div>
																				<div class="col-md-3">
																					<!--end::Label-->
																					<div class="fw-semibold fs-7 mb-1 fs-color-white custom-fs-13">Order Status:</div>
																					<!--end::Label-->
																					<!--end::Text-->
																					<div class="fw-bold fs-6 fs-color-white custom-fs-13">{{$o->order_status}}</div>
																					<!--end::Text-->

																				</div>
																			</div>
																			<!--end::Content-->
																			<!--begin::Row-->
																			<div class="row g-5 mb-12">
																				<!--end::Col-->
																				<div class="col-sm-9">

																					<br>
																					<div class="col-md-12">
																						<!--end::Label-->
																						<div class="fw-semibold fs-7 mb-1 fs-color-white custom-fs-13">Description:</div>
																						<!--end::Label-->
																						<!--end::Text-->


																						<div class="fw-bold fs-6 fs-color-white custom-fs-13">{!! $o->description !!}</div>

																						<!--end::Text-->
																					</div>
																					<br>


																				</div>
																			</div>
																			<!--end::Row-->
																		</div>
																		<!--end::Wrapper-->
																	</div>
																	<!--end::Invoice 2 content-->
																</div>
																<!--end::Content-->

															</div>
															<!--end::Layout-->
														</div>
														<!--end::Body-->
													</div>
												</div>
												<div class="modal-footer border-0 justify-content-between">
													<div class="">
														<!--<button type="button" class="btn btn-secondary" id="badge-custom-bg" data-bs-dismiss="modal">Close</button>-->
														<button type="button" class="btn btn-dark-primary" id=" " data-bs-dismiss="modal">Close</button>
													</div>
												</div>
											</div>
										</div>
									</div>
								@endforeach
							@endif
						</tbody>
					</table>
					<!--end::Table-->
				</div>
			</div>
			<!--end::Card-->
		</div>
	</div>
	<!--end::Row-->
</div>
<!--end::Content container-->
</div>
<!--end::Content-->
</div>

@endsection
@push('customerJs')



@endpush

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">

<script>
	 $(document).ready(function () {

		$('#message_summary_table').DataTable({
    paging: false,
	info: false
});


$('#folder_table').DataTable({
    paging: false,
	info: false
});



		$('#customer_profile_new_order_table').DataTable();
    });

	$(document).ready(function() {
		// Initialize DataTables
		var table = $('#message_summary_table').DataTable();


		// Attach the search handler to the input change event
		$('[data-kt-user-table-filter="search"]').on('input', function() {
			handleTableSearch();
		});

		// Filter form submission
		$('[data-kt-user-table-filter="filter"]').on('click', function(e) {
			e.preventDefault();

			// Get filter values
			var orderId = $('input[name="order-id"]').val();
			var message = $('input[name="message"]').val();
			var lastModified = $('input[name="last-modified"]').val();
			var status = $('input[name="status"]').val();

			// Apply filters
			table.columns(1).search(orderId).draw();
			table.columns(2).search(message).draw();
			table.columns(3).search(lastModified).draw();
			table.columns(4).search(status).draw();
		});

		// Reset filter form
		$('[data-kt-user-table-filter="reset"]').on('click', function(e) {
			e.preventDefault();

			// Reset input fields
			$('input[name="order-id"]').val('');
			$('input[name="message"]').val('');
			$('input[name="last-modified"]').val('');
			$('input[name="status"]').val('');

			// Clear filters
			table.columns().search('').draw();
		});

		function handleTableSearch() {
			// Get the search input value
			var searchText = $('[data-kt-user-table-filter="search"]').val().toLowerCase();

			// Loop through each table row
			$('#message_summary_table tbody tr').each(function() {
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



	//   $(document).ready(function(){
	//     var dataObject = localStorage.getItem('dataObject');
	//     if (dataObject) {
	//         window.location.href = "{{ route('customer.customerPlaceOrder') }}";
	//     }
	// });
</script>
