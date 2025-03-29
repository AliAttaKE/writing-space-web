@extends('frontend.master_layout.master')
@section('main-theme')
			<section class="page_banner">
				<div class="container mt-5 pt-5">
					<div class="content_wrapper" style="background-image:url(assets/images/banner/hero_banner_img_1.png)">
						<div class="row align-items-center">
							<div class="col col-lg-6">
								<ul class="breadcrumb_nav unordered_list">
									<li><a href="index-2.html">Home</a></li>
									<li><a href="#!">Pages</a></li>
									<li>Pricing</li>
								</ul>
								<h1 class="page_title" style="font-size: 60px;">Unlock Savings with Writing-Space Subscription!</h1>
								<p class="page_description">Invest in your academic success with our budget-friendly, flexible subscription plans designed for every student’s need.</p>
								<form action="#">
									<div class="form_item mb-0" onclick="alertfunction()">
										<input type="search" name="search" placeholder="What do you want to learn ?">
										<button type="submit" class="btn btn_dark"><span><small>Search</small> <small>Search</small></span></button>
									</div>
								</form>
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
						<div class="col col-lg-4">
							<div class="pricing_card text-center tilt">
								<h3 class="card_heading">Starter</h3>
								<div class="pricing_wrap"><span class="price_value"><sup>$</sup>15.49</span> <small class="d-block">per Per Page</small></div>
								<hr>
								<ul class="info_list unordered_list_block text-start">
									<li><i class="fas fa-caret-right"></i> <span>Cost: $15.49 Per Page</span></li>
									<li><i class="fas fa-caret-right"></i> <span>Time: 30 Days (Flexible)</span></li>
									<li><i class="fas fa-caret-right"></i> <span>Purchase between 30 to 50 pages</span></li>
									<li><i class="fas fa-caret-right"></i> <span>Transparency in Pricing</span></li>
                                    <li><i class="fas fa-caret-right"></i> <span>Assured Quality and Originality</span></li>
                                    <li><i class="fas fa-caret-right"></i> <span>Clear Revision Policies</span></li>
                                    <li><i class="fas fa-caret-right"></i> <span>Direct Communication Channels</span></li>
                                    <li><i class="fas fa-caret-right"></i> <span>Consistent Quality Work</span></li>
                                    <li><i class="fas fa-caret-right"></i> <span>Confidentiality Ensured</span></li>
                                    <li><i class="fas fa-caret-right"></i> <span>Engage with Your Writer Directly</span></li>
                                    <li><i class="fas fa-caret-right"></i> <span>Free Revisions and Feedback</span></li>
								</ul>
								<div class="btn_wrap pb-0"><a class="btn border_dark" href="#!"><span><small>Select Plan </small> <small>Select Plan </small></span></a></div>
							</div>
						</div>
						<div class="col col-lg-4">
							<div class="pricing_card text-center bg_dark tilt">
								<div class="card_badge">recommended</div>
								<h3 class="card_heading">Intermediate</h3>
								<div class="pricing_wrap"><span class="price_value"><sup>$</sup>14.99</span> <small class="d-block">Per Page</small></div>
								<hr>
								<ul class="info_list unordered_list_block text-start">
									<li><i class="fas fa-caret-right"></i> <span>Cost: $14.99 Per Page</span></li>
									<li><i class="fas fa-caret-right"></i> <span>Time: 45 Days (Flexible)</span></li>
									<li><i class="fas fa-caret-right"></i> <span>Purchase between 51 to 100 pages</span></li>
									<li><i class="fas fa-caret-right"></i> <span>Transparent, Flat Rates</span></li>
                                    <li><i class="fas fa-caret-right"></i> <span>Quality and Originality Guaranteed</span></li>
									<li><i class="fas fa-caret-right"></i> <span>Hassle-free Revision Process</span></li>
									<li><i class="fas fa-caret-right"></i> <span>Open Communication</span></li>
                                    <li><i class="fas fa-caret-right"></i> <span>Academic Standard Compliant Work</span></li>
									<li><i class="fas fa-caret-right"></i> <span>Your Information is Safe with Us</span></li>
									<li><i class="fas fa-caret-right"></i> <span>Direct Dialogue with Authors</span></li>
                                    <li><i class="fas fa-caret-right"></i> <span>⦁	Complimentary Revisions and Feedback Mechanism</span></li>
								</ul>
								<div class="btn_wrap pb-0"><a class="btn btn_primary" href="#!"><span><small>Select Plan</small> <small>Select Plan</small></span></a></div>
							</div>
						</div>
						<div class="col col-lg-4">
							<div class="pricing_card text-center tilt">
								<h3 class="card_heading">Advanced</h3>
								<div class="pricing_wrap"><span class="price_value"><sup>$</sup>13.99</span> <small class="d-block">Per Page</small></div>
								<hr>
								<ul class="info_list unordered_list_block text-start">
									<li><i class="fas fa-caret-right"></i> <span>Cost: $13.99 Per Page</span></li>
									<li><i class="fas fa-caret-right"></i> <span>Time: 4 Months (Flexible)</span></li>
									<li><i class="fas fa-caret-right"></i> <span>Purchase between 150 to 300 pages</span></li>
									<li><i class="fas fa-caret-right"></i> <span>Unparalleled Price Transparency</span></li>
                                    <li><i class="fas fa-caret-right"></i> <span>Top-notch Quality and Uniqueness</span></li>
									<li><i class="fas fa-caret-right"></i> <span>Straightforward Revision Protocols</span></li>
									<li><i class="fas fa-caret-right"></i> <span>Immediate Communication Routes</span></li>
									<li><i class="fas fa-caret-right"></i> <span>Adherence to Academic Standards</span></li>
                                    <li><i class="fas fa-caret-right"></i> <span>Strict Confidentiality Protocols</span></li>
									<li><i class="fas fa-caret-right"></i> <span>Engage with Your Writer</span></li>
									<li><i class="fas fa-caret-right"></i> <span>No-cost Revisions and Constructive Feedback</span></li>
								</ul>
								<div class="btn_wrap pb-0"><a class="btn border_dark" href="#!"><span><small>Select Plan </small> <small>Select Plan </small></span></a></div>
							</div>
						</div>
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
					<div class="newslatter_box " style=" height:1171px; width:100%;background-image:url(assets/images/banner/hero_banner_img_3.webp)">
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
@endsection