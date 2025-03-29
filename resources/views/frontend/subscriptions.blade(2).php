@extends('frontend.master_layout.master')
@section('main-theme')
			<section class="page_banner mt-5 pt-5">
				<div class="container px-5 mt-5 pt-5">
					<!-- <div class="content_wrapper" style="background-image:url(assets/images/banner/hero_banner_img_1.png)"> -->		
						<div class="row align-items-center px-lg-5 px-0">
							<div class="col col-lg-6">
								<ul class="breadcrumb_nav unordered_list">
									<li><a href="index.php">Home</a></li>
									<li><a href="products.php">Products</a></li>
									<li>Subscriptions</li>
								</ul>
								<h1 class="page_title" style="font-size: 60px; line-height-0">Unlock Savings with Writing-Space Subscription!</h1>
								<p class="page_description">Invest in your academic success with our budget-friendly, flexible subscription plans designed for every student’s need.</p>
								<form action="#">
									<div class="form_item mb-0" onclick="alertfunction()">
										<input type="search" name="search" placeholder="What do you want to learn ?">
										<button type="submit" class="btn btn_dark"><span><small>Search</small> <small>Search</small></span></button>
									</div>
								</form>
							</div>
							<div class="col col-lg-6 mt-lg-5 pt-lg-5">
							<img src="assets/images/banner/hero_banner_img_1.png" alt="">
						</div>
						</div>
						
					</div>
				</div>
			</section>
			<section class="pricing_section section_space_lg pb-0">
				<div class="container decoration_wrap">
					<div class="section_heading text-center">
						<h2 class="heading_text mb-0">Subscription Plans</h2></div>
					<div class="pricing_cards_wrapper row align-items-center">
						@if($subscription)
@foreach ($subscription as $s)
<div class="col col-lg-4">
	<div class="pricing_card text-center tilt">
		<h3 class="card_heading">{{$s->subscription_name}}</h3>
		<div class="pricing_wrap"><span class="price_value"><sup>$</sup>{{$s->cost_per_page}}</span> <small class="d-block">per Per Page</small></div>
		<hr>
		<ul class="info_list unordered_list_block text-start">
			<li><i class="fas fa-caret-right"></i> <span>Cost: ${{$s->cost_per_page}} Per Page</span></li>
			<li><i class="fas fa-caret-right"></i> <span>Time: {{$s->set_time}}</span></li>
			<li><i class="fas fa-caret-right"></i> <span>Purchase between {{$s->min_page}} to {{$s->max_page}} pages</span></li>
			<li><i class="fas fa-caret-right"></i> <span>Total Pages in Subscription {{$s->total_subscription}}</span></li>
			<li><i class="fas fa-caret-right"></i> <span>Inform Before Expire {{$s->inform_customer_expiry_date}}</span></li>
			<li><i class="fas fa-caret-right"></i> <span>Inform Customer Everyday {{$s->inform_customer_email}}</span></li>
			@if($s->restrictions != null)
			
			@foreach (json_decode($s->restrictions) as $r)
			<li><i class="fas fa-caret-right"></i> <span>{{$r}}</span></li>
			@endforeach
			@endif

			@if($s->more_restrictions != null)
			@foreach (json_decode($s->more_restrictions) as $mr)
			@if ($mr->status = true)
			<li><i class="fas fa-caret-right"></i> <span>{{$mr->title}}</span></li>
			@endif
			
			@endforeach
			@endif
			
		</ul>
		@if(Auth()->user())
		<div class="btn_wrap pb-0"><button type="button" onclick="open_modal({{$s->id}},{{$s->cost_per_page}},{{$s->total_subscription}})" ><a class="btn border_dark"  ><span><small>Select Plan </small> <small>Select Plan </small></span></a></button></div>
		@else
		<div class="btn_wrap pb-0"><button type="button" onclick="open_modal_login()" ><a class="btn border_dark"><span><small>Select Plan </small> <small>Select Plan </small></span></a></button></div>
      

        @endif
	</div>
</div>





    <!--end::App-->
@endforeach

						@endif
						
						<div class="modal fade" id="modal-15" tabindex="-1" aria-labelledby="exampleModalLabel">
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
                                    <input type="hidden" class="selectplanid" value="">
                                    <input type="hidden" class="totalamount" value="">
                                    @if(Auth()->user())
                                    <input type="hidden" class="authuser" value="{{Auth()->user()->id}}">
                                    @endif
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


                    <button type="button" class="btn btn-secondary" onclick="submit_payment()">Submit</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>
						
						
    <div class="modal fade" id="modal-156" tabindex="-1" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h5 class="modal-title " id="exampleModalLabel">please Login First!</h5>
                    <button type="button" class="ms-0 btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                
                <div class="modal-body">
                  
		

                <div class="modal-footer border-0">


                   
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>
						
						
					</div>
					<div class="deco_item shape_img_1" data-parallax='{"y" : 130, "smoothness": 6}'><img src="{{asset('frontend/assets/images/shape/shape_img_4.png')}}" alt="Collab – Online Learning Platform"></div>
					<div class="deco_item shape_img_2" data-parallax='{"y" : -130, "smoothness": 6}'><img src="{{asset('frontend/assets/images/shape/shape_img_5.png')}}" alt="Collab – Online Learning Platform"></div>
				</div>
			</section>
            <br><br><br>
        <section>
            <div class="container">
					<div class="section_heading text-center mb-3">
						<div class="row justify-content-center">
							<div class="col col-lg-12">
							    <h3>Purchase Custom Orders written Exclusively for You</h3><br>
                            <table style="text-align: center;" class="table table-striped table-bordered">
			<thead>
				<th>Deadline</th>
				<th>Cost Per Page</th>
				<th>Page Limit</th>
			</thead>
			<tbody>
				<tr>
					<td>Over 15 Days</td>
					<td>$18</td>
					<td>Unlimited</td>
					
				</tr>
				<tr>
					<td>168 to 336 Hours</td>
					<td>$20</td>
					<td>150 Pages</td>
					
				</tr>
				<tr>
					<td>120 to 167 Hours</td>
					<td>$24</td>
					<td>50 Pages</td>
					
				</tr>
				<tr>
					<td>71 to 119 Hours</td>
					<td>$28</td>
					<td>40 Pages</td>
					
				</tr>
				<tr>
					<td>48 to 71 Hours</td>
					<td>$32</td>
					<td>30 Pages</td>
					
				</tr>
				<tr>
					<td>24 to 47 Hours</td>
					<td>$36</td>
					<td>20 Pages</td>
					
				</tr>
				<tr>
					<td>8 to 23 Hours</td>
					<td>$45</td>
					<td>10 Pages</td>
					
				</tr>
			</tbody>
		    </table>
                        </div>    
                    </div>  
                </div>   
            </div>              
        </section>
			<br><br>
			<section class="newslatter_section">
				<div class="container">
					<!-- <div class="newslatter_box " style=" height:1171px; width:100%;background-image:url(assets/images/banner/hero_banner_img_3.webp)"> -->
						<div class="img-sub mx-4 mx-lg-5 " style="box-shadow: 20px 20px 0 0 yellow;border-radius: 8px;width: 87%;">
							<img class="img-sub" src="assets/images/banner/hero_banner_img_3.webp" alt="">
						</div>
						<!-- <div class="row justify-content-center ">
							<div class="col col-lg-6">
								<div class="section_heading text-center ">
									<h2 class="heading_text">Unlock Seamless Academic Support</h2>
									<p class="heading_description mb-0">Delve into a world where premium writing services meet affordability. With our subscription plans, enjoy consistent, quality assistance without the stress of fluctuating prices. Subscribe now to start your journey of uncompromised quality and undeniable value.</p>
								</div>
								<form action="#">
									<div class="form_item m-0" onclick=" alertfunction()">
										<input type="email" name="email" placeholder="Your Email">
										<button type="submit" class="btn btn_dark"><span><small>Subsctibe</small> <small>Subsctibe</small></span></button>
									</div>
								</form>
							</div>
						</div> -->
					</div>
				</div>
			</section>
		</main>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script>


function submit_payment() {
    // alert('ok');
            var card_name = document.getElementById('card_name').value;
            var card_number = document.getElementById('card_number').value;
            var card_expiry_month = document.getElementById('card_expiry_month').value;
            var card_expiry_year = document.getElementById('card_expiry_year').value;
            var card_cvv = document.getElementById('card_cvv').value;
            var selectplanid = $('.selectplanid').val();
            var totalamount = $('.totalamount').val();
            var authuser = $('.authuser').val();

          

            var card_detail = {
                card_name: card_name,
                card_number: card_number,
                card_expiry_month: card_expiry_month,
                card_expiry_year: card_expiry_year,
                card_cvv: card_cvv,
                totalamount: totalamount,
                authuser: authuser
            }
            localStorage.setItem('card_detail', JSON.stringify(card_detail))
            console.log(card_detail);
            user_id = authuser;
           
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
                    var url2 = '{{ route('customer.select-plan', ['sub_id' => ':sub_id']) }}';
                    url2 = url2.replace(':sub_id', selectplanid);
                    $.ajax({
                        type: 'post',
                        url: url2,
                        data: {
                            card: card_detail,
                            user_id: user_id,
                            totalamount: totalamount,
                        
                            _token: '{{ csrf_token() }}',
                        },
                        // Assuming id is a parameter you want to send
                        success: function(response) {
                            console.log(response);
                            location.reload();



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
	 
        function open_modal(id, costPerPage, totalSubscription) {
         

            var totalamount = costPerPage * totalSubscription;

            $('.selectplanid').val('');
            $('.totalamount').val('');
            $('.selectplanid').val(id);
            $('.totalamount').val(totalamount);




          

            
			var modal=new bootstrap.Modal(document.getElementById("modal-15"));
			modal.show();
			document.getElementsByClasName("modal-backdrop").style.position="static";
		}
        function open_modal_login() {
    var modal = new bootstrap.Modal(document.getElementById("modal-156"));
    modal.show();
    document.getElementsByClassName("modal-backdrop6")[0].style.position = "static";
}
	</script>
@endsection
