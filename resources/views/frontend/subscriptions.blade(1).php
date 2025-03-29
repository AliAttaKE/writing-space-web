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
		<form action="{{route('customer.select-plan',[$s->id])}}" method="post">
			@csrf
		<div class="btn_wrap pb-0"><button type="submit"><a class="btn border_dark"><span><small>Select Plan </small> <small>Select Plan </small></span></a></button></div>
		</form>
	</div>
</div>
@endforeach

						@endif
						
						
					</div>
					<div class="deco_item shape_img_1" data-parallax='{"y" : 130, "smoothness": 6}'><img src="assets/images/shape/shape_img_4.png" alt="Collab – Online Learning Platform"></div>
					<div class="deco_item shape_img_2" data-parallax='{"y" : -130, "smoothness": 6}'><img src="assets/images/shape/shape_img_5.png" alt="Collab – Online Learning Platform"></div>
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
@endsection