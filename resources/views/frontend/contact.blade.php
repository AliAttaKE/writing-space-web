@extends('frontend.master_layout.master')
@section('main-theme')
			<section class="page_banner">
				<div class="container px-5 mt-5 pt-5">
					<!-- <div class="content_wrapper" style="background-image:url(assets/images/banner/page_banner_image_.png)"> -->
						<div class="row align-items-center px-lg-5 px-0 pt-lg-0 pt-5">
							<div class="col col-lg-6">
								<ul class="breadcrumb_nav unordered_list">
									<li><a href="index.php">Home</a></li>
									<li>Contact Us</li>
								</ul>
								<h1 class="page_title">Get in Touch for Unparalleled Writing Assistance!</h1>
								<p class="page_description">Explore professional academic writing services designed to ease your journey to success. Let’s connect!</p>
								<form action="#">
									<div class="form_item mb-0" onclick="alertfunction()" >
										<input type="search" name="search" placeholder="What do you want to learn ?">
										<button type="submit" class="btn btn_dark"><span><small>Search</small> <small>Search</small></span></button>
									</div>
								</form>
							</div>
							<div class="col col-lg-6 mt-lg-5 pt-lg-5">
							<img src="assets/images/banner/page_banner_image_.png" alt="">
						</div>	
						</div>
					</div>
				</div>
			</section>
			<section class="contact_section section_space_lg">
				<div class="container">
					<div class="row">
						<div class="col col-lg-5">
							<div class="pe-lg-5">
								<div class="section_heading">
									<h2 class="heading_text">Quick Contact</h2>
									<p class="heading_description mb-0">For immediate support and inquiries, reach out through our various channels. We're here to assist with all your academic writing needs!</p>
								</div>
								<div class="iconbox_item contact_info_iconbox">
									<div class="item_icon"><i class="fas fa-phone"></i></div>
									<div class="item_content">
										<h3 class="item_title">Call Us</h3>
										<p class="mb-0">92-3101144037</p>
									</div>
								</div>
								<div class="iconbox_item contact_info_iconbox">
									<div class="item_icon"><i class="fas fa-envelope"></i></div>
									<div class="item_content">
										<h3 class="item_title">Email Address</h3>
										<p class="mb-0">support@writing-space.com</p>
									</div>
								</div>
								<div class="iconbox_item contact_info_iconbox">
									<div class="item_icon"><i class="fas fa-location-dot"></i></div>
									<div class="item_content">
										<h3 class="item_title">Reach Us</h3>
										<p class="mb-0">71A Street 3, Sindhi Muslim Cooperative Housing Society Block A Sindhi Muslim CHS (SMCHS), Karachi, Karachi City, Sindh</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col col-lg-7">
							<div class="gmap_canvas">
								<!-- <iframe id="gmap_canvas_iframe" src="https://maps.google.com/maps?q=2880%20Broadway,%20New%20York&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"></iframe> -->
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7240.231574645456!2d67.05034793934092!3d24.85989469644091!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33e831e509dc3%3A0xf11bd7426d366a61!2sSindhi%20Muslim%20Cooperative%20Housing%20Society%20Sindhi%20Muslim%20CHS%20(SMCHS)%2C%20Karachi%2C%20Karachi%20City%2C%20Sindh%2C%20Pakistan!5e0!3m2!1sen!2s!4v1698325292805!5m2!1sen!2s" id="gmap_canvas_iframe" referrerpolicy="no-referrer-when-downgrade"></iframe>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="contact_form_section section_space_lg bg_light decoration_wrap overflow-hidden">
				<div class="container decoration_wrap">
					<div class="row justify-content-center">
						<div class="col col-lg-7">
							<div class="section_heading text-center">
								<h2 class="heading_text mb-0">Need Immediate Assistance? Reach Out Now!</h2></div>
								<p>Fill out the form below with your contact details and inquiry. Our dedicated support team will get back to you at the earliest convenience to provide the information and support you need.</p>
						</div>
					</div>
					<form action="#">
						<div class="row justify-content-center">
							<div class="col col-lg-8">
								<div class="row">
									<div class="col col-md-6">
										<div class="form_item m-0">
											<label for="input_name" class="input_title">Name</label>
											<input id="input_name" type="text" name="name" placeholder="Your Name">
										</div>
									</div>
									<div class="col col-md-6">
										<div class="form_item m-0">
											<label for="input_email" class="input_title">Email</label>
											<input id="input_email" type="email" name="email" placeholder="Your Email">
										</div>
									</div>
									<div class="col col-md-12">
										<div class="form_item m-0">
											<label for="input_phone" class="input_title">Subject</label>
											<input id="input_subject" type="sub" name="subject" placeholder="Your Subject">
										</div>
									</div>
									<div class="col">
										<div class="form_item">
											<label for="input_message" class="input_title">Message</label>
											<textarea id="input_message" name="message" placeholder="Type Your Message"></textarea>
										</div>
										<button type="submit" class="btn btn_dark w-100 b-block"><span><small>Send Your Message</small> <small>Send Your Message</small></span></button>
									</div>
								</div>
							</div>
						</div>
					</form>
					<div class="deco_item shape_img_1 wow fadeInUp" data-wow-delay=".2s"><img src="assets/images/shape/shape_img_7.png" alt="Collab – Online Learning Platform"></div>
					<div class="deco_item shape_img_2 wow fadeInUp" data-wow-delay=".4s"><img src="assets/images/shape/shape_img_7.png" alt="Collab – Online Learning Platform"></div>
				</div>
				<div class="deco_item shape_img_3 wow fadeInLeft" data-wow-delay=".2s"><img src="assets/images/shape/shape_img_7.png" alt="Collab – Online Learning Platform"></div>
				<div class="deco_item shape_img_4 wow fadeInRight" data-wow-delay=".4s"><img src="assets/images/shape/shape_img_7.png" alt="Collab – Online Learning Platform"></div>
			</section>
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