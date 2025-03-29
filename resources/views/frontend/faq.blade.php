@extends('frontend.master_layout.master')
@section('main-theme')
			<section class="page_banner">
				<div class="container">
					<div class="content_wrapper" style="background-image:url(assets/images/banner/page_banner_image.png)">
						<div class="row align-items-center">
							<div class="col col-lg-6">
								<ul class="breadcrumb_nav unordered_list">
									<li><a href="index-2.html">Home</a></li>
									<li><a href="#!">Pages</a></li>
									<li>FAQ</li>
								</ul>
								<h1 class="page_title">Unlock Academic Excellence with Writing-Space! </h1>
								<p class="page_description">Struggling with academic papers? Easily find solutions in our FAQ or search for specific concerns. Ready for stress-free studies?</p>
								<form action="#">
									<div class="form_item mb-0">
										<input type="search" name="search" placeholder="What do you want to learn ?">
										<button type="submit" class="btn btn_dark"><span><small>Search</small> <small>Search</small></span></button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="faq_section section_space_lg">
				<div class="container">
					<div class="section_heading text-center mb-3">
						<div class="row justify-content-center">
							<div class="col col-lg-7">
								<h2 class="heading_text">Subscription Plans</h2>
							</div>
						</div>
					</div>
					<div class="row justify-content-center">
						<div class="col col-lg-6">
							<div class="accordion" id="faq_accordion_1">
								<div class="accordion-item">
									<div class="accordion-button" role="button" data-bs-toggle="collapse" data-bs-target="#collapse_one" aria-expanded="true">How can I adjust my subscription plan?</div>
									<div id="collapse_one" class="accordion-collapse collapse show" data-bs-parent="#faq_accordion_1">
										<div class="accordion-body">
											<p class="mb-0">Adjusting your subscription plan is hassle-free. Simply log into your account and select the desired plan adjustment.</p>
										</div>
									</div>
								</div>
								<div class="accordion-item">
									<div class="accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#collapse_two" aria-expanded="false">What happens to my unused pages?</div>
									<div id="collapse_two" class="accordion-collapse collapse" data-bs-parent="#faq_accordion_1">
										<div class="accordion-body">
											<p class="mb-0">Unused pages will rollover to the next cycle, conditional on subscription renewal. They won’t expire if you stay subscribed!</p>
										</div>
									</div>
								</div>
								<div class="accordion-item">
									<div class="accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#collapse_three" aria-expanded="false">How do I cancel my subscription? </div>
									<div id="collapse_three" class="accordion-collapse collapse" data-bs-parent="#faq_accordion_1">
										<div class="accordion-body">
											<p class="mb-0">Cancellation is easy with our one-click cancellation feature available for all renewals.</p>
										</div>
									</div>
								</div>
								<div class="accordion-item">
									<div class="accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#collapse_four" aria-expanded="false">Is there automatic renewal? </div>
									<div id="collapse_four" class="accordion-collapse collapse" data-bs-parent="#faq_accordion_1">
										<div class="accordion-body">
											<p class="mb-0">You have the flexibility to choose between automatic or manual renewal options for your convenience.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col col-lg-6">
							<div class="accordion" id="faq_accordion_2">
								<div class="accordion-item">
									<div class="accordion-button" role="button" data-bs-toggle="collapse" data-bs-target="#a2_collapse_one" aria-expanded="true">How much can I save with subscriptions? </div>
									<div id="a2_collapse_one" class="accordion-collapse collapse show" data-bs-parent="#faq_accordion_2">
										<div class="accordion-body">
											<p class="mb-0">Subscriptions offer significant savings compared to one-time orders. The bulkier the subscription, the bigger the savings!</p>
										</div>
									</div>
								</div>
								<div class="accordion-item">
									<div class="accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#a2_collapse_two" aria-expanded="false">What is your refund policy for subscriptions? </div>
									<div id="a2_collapse_two" class="accordion-collapse collapse" data-bs-parent="#faq_accordion_2">
										<div class="accordion-body">
											<p class="mb-0">Refunds are rare and typically for exceptional cases. Bulk subscribers are expected to understand our firm culture before subscribing.</p>
										</div>
									</div>
								</div>
								<div class="accordion-item">
									<div class="accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#a2_collapse_three" aria-expanded="false">Will my subscription price fluctuate? </div>
									<div id="a2_collapse_three" class="accordion-collapse collapse" data-bs-parent="#faq_accordion_2">
										<div class="accordion-body">
											<p class="mb-0">Subscription plans offer fixed pricing, safeguarding you from any price fluctuations.</p>
										</div>
									</div>
								</div>
								<div class="accordion-item">
									<div class="accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#a2_collapse_four" aria-expanded="false">How does the pricing mechanism work for subscriptions? </div>
									<div id="a2_collapse_four" class="accordion-collapse collapse" data-bs-parent="#faq_accordion_2">
										<div class="accordion-body">
											<p class="mb-0">Subscription plans simplify pricing, eliminating confusion arising from deadline-based rates.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="faq_section section_space_lg">
				<div class="container">
					<div class="section_heading text-center mb-3">
						<div class="row justify-content-center">
							<div class="col col-lg-7">
								<h2 class="heading_text">Pricing Policy</h2>
							</div>
						</div>
					</div>
					<div class="row justify-content-center">
						<div class="col col-lg-6">
							<div class="accordion" id="faq_accordion_1">
								<div class="accordion-item">
									<div class="accordion-button" role="button" data-bs-toggle="collapse" data-bs-target="#collapse_one" aria-expanded="true">How does deadline affect pricing? </div>
									<div id="collapse_one" class="accordion-collapse collapse show" data-bs-parent="#faq_accordion_1">
										<div class="accordion-body">
											<p class="mb-0">The cost per page increases as the deadline shortens due to the expedited service required.</p>
										</div>
									</div>
								</div>
								<div class="accordion-item">
									<div class="accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#collapse_two" aria-expanded="false">Is there a limit to the number of pages per deadline?</div>
									<div id="collapse_two" class="accordion-collapse collapse" data-bs-parent="#faq_accordion_1">
										<div class="accordion-body">
											<p class="mb-0">Yes, shorter deadlines have page limits to ensure quality and timeliness of delivery.</p>
										</div>
									</div>
								</div>
								<div class="accordion-item">
									<div class="accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#collapse_three" aria-expanded="false">What payment methods do you accept? </div>
									<div id="collapse_three" class="accordion-collapse collapse" data-bs-parent="#faq_accordion_1">
										<div class="accordion-body">
											<p class="mb-0">We accept various payment methods, including credit cards, debit cards, and secure online payment gateways.</p>
										</div>
									</div>
								</div>
								<div class="accordion-item">
									<div class="accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#collapse_four" aria-expanded="false">Are there any hidden charges?</div>
									<div id="collapse_four" class="accordion-collapse collapse" data-bs-parent="#faq_accordion_1">
										<div class="accordion-body">
											<p class="mb-0">Absolutely not! Our pricing is transparent with no hidden charges.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col col-lg-6">
							<div class="accordion" id="faq_accordion_2">
								<div class="accordion-item">
									<div class="accordion-button" role="button" data-bs-toggle="collapse" data-bs-target="#a2_collapse_one" aria-expanded="true">Can I get a discount for bulk orders? </div>
									<div id="a2_collapse_one" class="accordion-collapse collapse show" data-bs-parent="#faq_accordion_2">
										<div class="accordion-body">
											<p class="mb-0">Our subscription plans offer valuable savings for bulk orders. The more pages you need, the more you save!</p>
										</div>
									</div>
								</div>
								<div class="accordion-item">
									<div class="accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#a2_collapse_two" aria-expanded="false">Do you offer refunds? </div>
									<div id="a2_collapse_two" class="accordion-collapse collapse" data-bs-parent="#faq_accordion_2">
										<div class="accordion-body">
											<p class="mb-0">Refunds are considered on a case-by-case basis. Please refer to our refund policy for detailed information.</p>
										</div>
									</div>
								</div>
								<div class="accordion-item">
									<div class="accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#a2_collapse_three" aria-expanded="false">What is the pricing for urgent orders? </div>
									<div id="a2_collapse_three" class="accordion-collapse collapse" data-bs-parent="#faq_accordion_2">
										<div class="accordion-body">
											<p class="mb-0">Urgent orders with shorter deadlines are priced higher. For detailed rates, refer to our pricing policy.</p>
										</div>
									</div>
								</div>
								<div class="accordion-item">
									<div class="accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#a2_collapse_four" aria-expanded="false">How is the pricing determined for each paper? </div>
									<div id="a2_collapse_four" class="accordion-collapse collapse" data-bs-parent="#faq_accordion_2">
										<div class="accordion-body">
											<p class="mb-0">Pricing is primarily based on the deadline, with a fixed rate per page. Subscription plans offer additional savings.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="faq_section section_space_lg">
				<div class="container">
					<div class="section_heading text-center mb-3">
						<div class="row justify-content-center">
							<div class="col col-lg-7">
								<h2 class="heading_text">Quality Assurance</h2>
							</div>
						</div>
					</div>
					<div class="row justify-content-center">
						<div class="col col-lg-6">
							<div class="accordion" id="faq_accordion_1">
								<div class="accordion-item">
									<div class="accordion-button" role="button" data-bs-toggle="collapse" data-bs-target="#collapse_one" aria-expanded="true">How do you ensure the quality of papers? </div>
									<div id="collapse_one" class="accordion-collapse collapse show" data-bs-parent="#faq_accordion_1">
										<div class="accordion-body">
											<p class="mb-0">Each paper undergoes a rigorous review process, crafted by skilled writers, and checked for plagiarism and quality compliance.</p>
										</div>
									</div>
								</div>
								<div class="accordion-item">
									<div class="accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#collapse_two" aria-expanded="false">What qualifications do your writers possess? </div>
									<div id="collapse_two" class="accordion-collapse collapse" data-bs-parent="#faq_accordion_1">
										<div class="accordion-body">
											<p class="mb-0">Our writers are highly qualified professionals, with degrees in various academic fields and extensive experience in academic writing.</p>
										</div>
									</div>
								</div>
								<div class="accordion-item">
									<div class="accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#collapse_three" aria-expanded="false">Can I request revisions? </div>
									<div id="collapse_three" class="accordion-collapse collapse" data-bs-parent="#faq_accordion_1">
										<div class="accordion-body">
											<p class="mb-0">Yes! If the initial paper doesn't meet expectations, revisions can be requested as per our Revision Policies.</p>
										</div>
									</div>
								</div>
								<div class="accordion-item">
									<div class="accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#collapse_four" aria-expanded="false">How many revisions can I request? </div>
									<div id="collapse_four" class="accordion-collapse collapse" data-bs-parent="#faq_accordion_1">
										<div class="accordion-body">
											<p class="mb-0">You can request multiple revisions until you're satisfied, adhering to our Revision Policies.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col col-lg-6">
							<div class="accordion" id="faq_accordion_2">
								<div class="accordion-item">
									<div class="accordion-button" role="button" data-bs-toggle="collapse" data-bs-target="#a2_collapse_one" aria-expanded="true">Is the content original? </div>
									<div id="a2_collapse_one" class="accordion-collapse collapse show" data-bs-parent="#faq_accordion_2">
										<div class="accordion-body">
											<p class="mb-0">Absolutely! Every paper is 100% custom-written from scratch, ensuring originality and uniqueness.</p>
										</div>
									</div>
								</div>
								<div class="accordion-item">
									<div class="accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#a2_collapse_two" aria-expanded="false">How is the quality of work maintained? </div>
									<div id="a2_collapse_two" class="accordion-collapse collapse" data-bs-parent="#faq_accordion_2">
										<div class="accordion-body">
											<p class="mb-0">We adhere to academic standards, conducting thorough research and ensuring relevance and accuracy in every paper.</p>
										</div>
									</div>
								</div>
								<div class="accordion-item">
									<div class="accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#a2_collapse_three" aria-expanded="false">What measures are taken against plagiarism? </div>
									<div id="a2_collapse_three" class="accordion-collapse collapse" data-bs-parent="#faq_accordion_2">
										<div class="accordion-body">
											<p class="mb-0">All papers are checked using reliable plagiarism detection tools to ensure they are completely original.</p>
										</div>
									</div>
								</div>
								<div class="accordion-item">
									<div class="accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#a2_collapse_four" aria-expanded="false">How do you handle complex subjects or topics?</div>
									<div id="a2_collapse_four" class="accordion-collapse collapse" data-bs-parent="#faq_accordion_2">
										<div class="accordion-body">
											<p class="mb-0">Our team of expert writers has diverse knowledge and expertise to handle a wide range of complex subjects proficiently.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="faq_section section_space_lg">
				<div class="container">
					<div class="section_heading text-center mb-3">
						<div class="row justify-content-center">
							<div class="col col-lg-7">
								<h2 class="heading_text">Confidentiality</h2>
							</div>
						</div>
					</div>
					<div class="row justify-content-center">
						<div class="col col-lg-6">
							<div class="accordion" id="faq_accordion_1">
								<div class="accordion-item">
									<div class="accordion-button" role="button" data-bs-toggle="collapse" data-bs-target="#collapse_one" aria-expanded="true">Is my personal information safe?</div>
									<div id="collapse_one" class="accordion-collapse collapse show" data-bs-parent="#faq_accordion_1">
										<div class="accordion-body">
											<p class="mb-0">We implement stringent privacy policies and use advanced security measures to protect your personal information.</p>
										</div>
									</div>
								</div>
								<div class="accordion-item">
									<div class="accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#collapse_two" aria-expanded="false">How is my data used? </div>
									<div id="collapse_two" class="accordion-collapse collapse" data-bs-parent="#faq_accordion_1">
										<div class="accordion-body">
											<p class="mb-0">Your data is used exclusively for order processing and communication purposes and is never shared with third parties.</p>
										</div>
									</div>
								</div>
								<div class="accordion-item">
									<div class="accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#collapse_three" aria-expanded="false">Do you resell papers? </div>
									<div id="collapse_three" class="accordion-collapse collapse" data-bs-parent="#faq_accordion_1">
										<div class="accordion-body">
											<p class="mb-0">No. Each paper is uniquely crafted for individual clients and is never resold or reused.</p>
										</div>
									</div>
								</div>
								<div class="accordion-item">
									<div class="accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#collapse_four" aria-expanded="false">How can I delete my account and data? </div>
									<div id="collapse_four" class="accordion-collapse collapse" data-bs-parent="#faq_accordion_1">
										<div class="accordion-body">
											<p class="mb-0">You can submit a request for account deletion, and all your data will be removed as per our data retention policy.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col col-lg-6">
							<div class="accordion" id="faq_accordion_2">
								<div class="accordion-item">
									<div class="accordion-button" role="button" data-bs-toggle="collapse" data-bs-target="#a2_collapse_one" aria-expanded="true">How do you protect my payment information? </div>
									<div id="a2_collapse_one" class="accordion-collapse collapse show" data-bs-parent="#faq_accordion_2">
										<div class="accordion-body">
											<p class="mb-0">We use secure payment gateways with advanced encryption to protect your payment information.</p>
										</div>
									</div>
								</div>
								<div class="accordion-item">
									<div class="accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#a2_collapse_two" aria-expanded="false">Can others know I used your services? </div>
									<div id="a2_collapse_two" class="accordion-collapse collapse" data-bs-parent="#faq_accordion_2">
										<div class="accordion-body">
											<p class="mb-0">Your use of our services is confidential. We never disclose client information without explicit consent.</p>
										</div>
									</div>
								</div>
								<div class="accordion-item">
									<div class="accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#a2_collapse_three" aria-expanded="false">What are the confidentiality policies for writers? </div>
									<div id="a2_collapse_three" class="accordion-collapse collapse" data-bs-parent="#faq_accordion_2">
										<div class="accordion-body">
											<p class="mb-0">Our writers adhere to strict confidentiality agreements to protect client information and order details.</p>
										</div>
									</div>
								</div>
								<div class="accordion-item">
									<div class="accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#a2_collapse_four" aria-expanded="false">Is my communication with the writer confidential? </div>
									<div id="a2_collapse_four" class="accordion-collapse collapse" data-bs-parent="#faq_accordion_2">
										<div class="accordion-body">
											<p class="mb-0">Yes. All communications between clients and writers are confidential and conducted through secure channels.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="newslatter_section">
				<div class="container">
					<!-- <div class="newslatter_box " style=" height:1171px; width:100%;background-image:url(assets/images/banner/hero_banner_img_3.webp)"> -->
					<div class="img-sub mx-4 mx-lg-5 " style="box-shadow: 20px 20px 0 0 yellow;border-radius: 8px;width: 87%;">
							<img class="img-sub" src="assets/images/banner/hero_banner_img_3.webp" alt="">
						</div>
						<!-- <div class="row justify-content-center ">
							<div class="cul cul-lg-6">
								<div class="section_heading text-center ">
									<h2 class="heading_text">Unlock Seamless Academic Support</h2>
									<p class="heading_description mb-0">Delve into a world where premium writing services meet affordability. With our subscription plans, enjoy consistent, quality assistance without the stress of fluctuating prices. Subscribe now to start your journey of uncompromised quality and undeniable value.</p>
								</div>
								<form action="#">
									<div class="form_item m-0" onclick=" alertfunction()">
										<input type="email" name="email" placehulder="Your Email">
										<button type="submit" class="btn btn_dark"><span><small>Subsctibe</small> <small>Subsctibe</small></span></button>
									</div>
								</form>
							</div>
						</div> -->
					</div>
				</div>
			</section>
@endsection