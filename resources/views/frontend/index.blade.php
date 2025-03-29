@extends('frontend.master_layout.master')
@section('main-theme')
    <section class="hero_banner style_1">
        <div class="container mt-5 pt-5">
            <div class="content_wrap">
                <div class="row">
                    <div class="col col-lg-7">

                        <h1 class="banner_big_title">Unlock Academic Excellence!</h1>
                        <p class="banner_description">Embark on a seamless journey with Writing-Space for crafted academic
                            support, designed for success!</p>
                        <ul class="banner_btns_group unordered_list">
                            <li><a class="btn btn_primary" href="{{ route('front.custom.ordering') }}"><span><small>Explore Custom Orders</small>
                                        <small>Explore Custom Orders</small></span></a></li>

                        </ul>
                    </div>
                    <div class="col col-lg-5">
                        <div class="banner_image_1 decoration_wrap">
                            <div class="image_wrap"><img src="{{ asset('frontend/assets/images/banner/hero_banner_img_1.png') }}"
                                    alt="Collab – Online Learning Platform"></div>
                            <div class="satisfied_student">
                                <h3 class="wrap_title">2000+ Satisfied Student</h3>
                                <ul class="students_thumbnail unordered_list_center">
                                    <li><span><img src="{{ asset('frontend/assets/images/meta/student_thumbnail_1.png') }}"
                                                alt="Collab – Online Learning Platform"></span></li>
                                    <li><span><img src="{{ asset('frontend/assets/images/meta/student_thumbnail_2.png') }}"
                                                alt="Collab – Online Learning Platform"></span></li>
                                    <li><span><img src="{{ asset('frontend/assets/images/meta/student_thumbnail_3.png') }}"
                                                alt="Collab – Online Learning Platform"></span></li>
                                    <li><span><img src="{{ asset('frontend/assets/images/meta/student_thumbnail_4.png') }}"
                                                alt="Collab – Online Learning Platform"></span></li>
                                    <li><span><img src="{{ asset('frontend/assets/images/meta/student_thumbnail_5.png') }}"
                                                alt="Collab – Online Learning Platform"></span></li>
                                </ul>
                            </div>
                            <div class="deco_item shape_img_1" data-parallax='{"y" : -130, "smoothness": 6}'><img
                                    src="{{ asset('frontend/assets/images/shape/shape_img_1.png') }}"
                                    alt="Collab – Online Learning Platform"></div>
                            <div class="deco_item shape_img_2" data-parallax='{"y" : 160, "smoothness": 6}'><img
                                    src="{{ asset('frontend/assets/images/shape/shape_img_2.png') }}"
                                    alt="Collab – Online Learning Platform"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="expect_from_products.php section_space_lg">
        <div class="container">
            <div class="row">
                <div class="col col-lg-6">
                    <div class="section_heading">
                        <h2 class="heading_text">Tailored Academic Support</h2>
                        <p class="heading_description mb-0">Evolve, Optimize, Control, with Writing-Space</p>
                    </div>
                    <div class="image_widget"><img
                            src="{{ asset('frontend/assets/images/banner/hero_banner_img_2 (2).png') }}"
                            alt="Collab – Online Learning Platform"></div>
                </div>
                <div class="col col-lg-6">
                    <div class="btn_wrap pt-0 d-none d-lg-flex justify-content-end"><a class="btn border_dark"
                            href="pricing.php"><span><small>Explore Packages</small> <small>Explore
                                    Packages</small></span></a></div>
                    <div class="row">
                        <div class="col col-md-6">
                            <div class="service_item" data-magnetic>
                                <div class="item_icon"><img
                                        src="{{ asset('frontend/assets/images/banner/hero_banner_img_icon-2.webp') }}"
                                        alt="Collab – Online Learning Platform"></div>
                                <div class="item_content">
                                    <h3 class="item_title">Flexibility Advantage</h3>
                                    <p class="mb-0">Adapt your subscription easily to evolving academic needs, ensuring
                                        support is as dynamic as your schedule.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col col-md-6">
                            <div class="service_item" data-magnetic>
                                <div class="item_icon"><img
                                        src="{{ asset('frontend/assets/images/banner/hero_banner_img_icon-4.webp') }}"
                                        alt="Collab – Online Learning Platform"></div>
                                <div class="item_content">
                                    <h3 class="item_title">Rollover Ease</h3>
                                    <p class="mb-0">Unused pages? Worry not! They'll simply roll over upon subscription
                                        renewal, optimizing your investment in knowledge.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col col-md-6">
                            <div class="service_item" data-magnetic>
                                <div class="item_icon"><img
                                        src="{{ asset('frontend/assets/images/banner/hero_banner_img_icon-1.webp') }}"
                                        alt="Collab – Online Learning Platform"></div>
                                <div class="item_content">
                                    <h3 class="item_title">Hassle-Free Cancellation</h3>
                                    <p class="mb-0">With a single click, cancel any renewal, embodying a stress-free,
                                        commitment-light engagement with our services.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col col-md-6">
                            <div class="service_item" data-magnetic>
                                <div class="item_icon"><img
                                        src="{{ asset('frontend/assets/images/banner/hero_banner_img_icon-3.webp') }}"
                                        alt="Collab – Online Learning Platform"></div>
                                <div class="item_content">
                                    <h3 class="item_title">Renewal Choice</h3>
                                    <p class="mb-0">Select between automatic or manual renewal, providing you complete
                                        control over your subscription's lifecycle and expenses.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btn_wrap pb-0 d-block d-lg-none text-center"><a class="btn border_dark"
                            href="products.php.html"><span><small>Explore Packages</small> <small>Explore
                                    Packages</small></span></a></div>
                </div>
            </div>
        </div>
    </section>
    <section class="expect_from_products.php section_space_lg">
        <div class="container text-center">

        </div>
        <div class="container">
            <div class="row">
                <div class="col col-lg-6"></div>
                <div class="col col-lg-6">
                    <div class="section_heading text-right">
                        <h2 class="heading_text">Unique Subscription Benefits</h2>
                        <p class="heading_description mb-0">Tailored Academic Support: Evolve, Optimize, Control, with
                            Writing-Space</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col col-lg-6">

                    <div class="row">
                        <div class="col col-md-6">
                            <div class="service_item" data-magnetic>
                                <div class="item_icon"><img
                                        src="{{ asset('frontend/assets/images/banner/hero_banner_img_icon-Cost.webp') }}"
                                        alt="Collab – Online Learning Platform"></div>
                                <div class="item_content">
                                    <h3 class="item_title">Cost Efficiency</h3>
                                    <p class="mb-0">Relish significant savings with our bulk subscription plans, making
                                        quality support affordable and accessible.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col col-md-6">
                            <div class="service_item" data-magnetic>
                                <div class="item_icon"><img
                                        src="{{ asset('frontend/assets/images/banner/hero_banner_img_icon-Straightforward.webp') }}"
                                        alt="Collab – Online Learning Platform"></div>
                                <div class="item_content">
                                    <h3 class="item_title">Straightforward Refunds</h3>
                                    <p class="mb-0">Though rare, refunds are simple and straightforward for bulk
                                        subscribers acquainted with our work ethos.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col col-md-6">
                            <div class="service_item" data-magnetic>
                                <div class="item_icon"><img
                                        src="{{ asset('frontend/assets/images/banner/hero_banner_img_icon-Price.webp') }}"
                                        alt="Collab – Online Learning Platform"></div>
                                <div class="item_content">
                                    <h3 class="item_title">Price Stability</h3>
                                    <p class="mb-0">Enjoy unwavering prices with subscription plans, shielding you from
                                        rate fluctuations and surprises.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col col-md-6">
                            <div class="service_item" data-magnetic>
                                <div class="item_icon"><img
                                        src="{{ asset('frontend/assets\images\banner\hero_banner_img-icon-Transparent.webp') }}"
                                        alt="Collab – Online Learning Platform"></div>
                                <div class="item_content">
                                    <h3 class="item_title">Transparent Pricing</h3>
                                    <p class="mb-0">The subscription model simplifies pricing, demystifying the cost
                                        associated with urgent deadlines.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col col-lg-6">

                    <div class="image_widget"><img
                            src="{{ asset('frontend/assets/images/banner/hero_banner_img_3.webp') }}"
                            alt="Collab – Online Learning Platform"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="counter_section bg_light section_space_md">
        <div class="container">
            <div class="row">
                <div class="col col-lg-3 col-md-6">
                    <div class="counter_item">
                        <h3 class="counter_value"><span class="counter_value_text">10,000</span> <span>+</span></h3>
                        <p class="mb-0">Orders Completed</p>
                    </div>
                </div>
                <div class="col col-lg-3 col-md-6">
                    <div class="counter_item">
                        <h3 class="counter_value"><span class="counter_value_text">200</span> <span>+</span></h3>
                        <p class="mb-0">Expert Writers Available</p>
                    </div>
                </div>
                <div class="col col-lg-3 col-md-6">
                    <div class="counter_item">
                        <h3 class="counter_value"><span class="counter_value_text">8,500</span></h3>
                        <p class="mb-0">Students Succeeded</p>
                    </div>
                </div>
                <div class="col col-lg-3 col-md-6">
                    <div class="counter_item">
                        <h3 class="counter_value"><span class="counter_value_text">300</span> <span>+</span></h3>
                        <p class="mb-0">Active Orders Ongoing</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="products.phps_section section_space_lg">
        <div class="container">
            <div class="section_heading">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col col-lg-6">
                        <h2 class="heading_text mb-0">Custom Order Options</h2>
                    </div>
                    <div class="col col-lg-5">
                        <p class="heading_description mb-0 text-lg-end">Explore our robust suite of services, each tailored
                            for distinct academic requirements: Essay Writing, Thesis Crafting, Analytical Writing, Case
                            Study Development, Review Writing, and Research Writing.</p>
                    </div>
                </div>
            </div>
            <div class="tabs_wrapper">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="teb_hr" role="tabpanel">
                        <div class="row">
                            <div class="col col-lg-4">
                                <div class="products.php_card">
                                    <div class="item_image">
                                        <a href="products.php" data-cursor-text="View"><img
                                                src="{{ asset('frontend/assets/images/banner/hero_banner_img_p-1.webp') }}"
                                                alt="Collab – Online Learning Platform"></a>
                                    </div>
                                    <div class="item_content">
                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                            <ul class="item_category_list unordered_list">
                                                <li><a href="#!">Writing</a></li>
                                            </ul>
                                            <div class="item_price"><span class="sale_price">$18 to $45</span> <del
                                                    class="remove_price"></del></div>
                                        </div>
                                        <ul class="meta_info_list unordered_list">
                                            <li><i class="fas fa-chart-bar"></i> <span>Excelling in All Disciplines</span>
                                            </li>

                                            <li><i class="fas fa-star"></i> <span>All Academic Levels</span></li>
                                            <li><i class="fas fa-star"></i> <span>Prompt Delivery</span></li>
                                            <li><i class="fas fa-star"></i> <span>Privacy Guaranteed</span></li>
                                            <li><i class="fas fa-star"></i> <span>Zero Plagiarism</span></li>
                                        </ul>
                                        <h3 class="item_title"><a href="products.php">Essay Writing</a></h3><a
                                            class="btn_unfill" href="products.php"><span class="btn_text"><a
                                                    href="essay.php" class="btn_unfill">View products.Essay
                                                    Writing</a></span> <span class="btn_icon"><i
                                                    class="fas fa-long-arrow-right"></i> <i
                                                    class="fas fa-long-arrow-right"></i></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-lg-4">
                                <div class="products.php_card">
                                    <div class="item_image">
                                        <a href="products.php" data-cursor-text="View"><img
                                                src="{{ asset('frontend/assets/images/banner/hero_banner_img_p-2.webp') }}"
                                                alt="Collab – Online Learning Platform"></a>
                                    </div>
                                    <div class="item_content">
                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                            <ul class="item_category_list unordered_list">
                                                <li><a href="#!">Writing</a></li>
                                            </ul>
                                            <div class="item_price"><span class="sale_price">$18 to $45</span></div>
                                        </div>
                                        <ul class="meta_info_list unordered_list">
                                            <li><i class="fas fa-chart-bar"></i> <span>Excelling in All Disciplines</span>
                                            </li>

                                            <li><i class="fas fa-star"></i> <span>All Academic Levels</span></li>
                                            <li><i class="fas fa-star"></i> <span>Prompt Delivery</span></li>
                                            <li><i class="fas fa-star"></i> <span>Privacy Guaranteed</span></li>
                                            <li><i class="fas fa-star"></i> <span>Zero Plagiarism</span></li>
                                        </ul>
                                        <h3 class="item_title"><a href="products.php">Case Study Writing</a></h3><a
                                            class="btn_unfill" href="products.php"><span class="btn_text"><a
                                                    href="case_study.php" class="btn_unfill">View products.Case Study
                                                    Writing</a></span> <span class="btn_icon"><i
                                                    class="fas fa-long-arrow-right"></i> <i
                                                    class="fas fa-long-arrow-right"></i></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-lg-4">
                                <div class="products.php_card">
                                    <div class="item_image">
                                        <a href="products.php" data-cursor-text="View"><img
                                                src="{{ asset('frontend/assets/images/banner/hero_banner_img_p-3.webp') }}"
                                                alt="Collab – Online Learning Platform"></a>
                                    </div>
                                    <div class="item_content">
                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                            <ul class="item_category_list unordered_list">
                                                <li><a href="#!">Writing</a></li>
                                            </ul>
                                            <div class="item_price"><span class="sale_price">$18 to $45</span></div>
                                        </div>
                                        <ul class="meta_info_list unordered_list">
                                            <li><i class="fas fa-chart-bar"></i> <span>Excelling in All Disciplines</span>
                                            </li>

                                            <li><i class="fas fa-star"></i> <span>All Academic Levels</span></li>
                                            <li><i class="fas fa-star"></i> <span>Prompt Delivery</span></li>
                                            <li><i class="fas fa-star"></i> <span>Privacy Guaranteed</span></li>
                                            <li><i class="fas fa-star"></i> <span>Zero Plagiarism</span></li>
                                        </ul>
                                        <h3 class="item_title"><a href="products.php">Analytical Writing</a></h3><a
                                            class="btn_unfill" href="products.php"><span class="btn_text"><a
                                                    href="analytics.php" class="btn_unfill">View products.Analytical
                                                    Writing</a></span> <span class="btn_icon"><i
                                                    class="fas fa-long-arrow-right"></i> <i
                                                    class="fas fa-long-arrow-right"></i></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="teb_photography" role="tabpanel">
                        <div class="row">
                            <div class="col col-lg-4">
                                <div class="products.php_card">
                                    <div class="item_image">
                                        <a href="products.php" data-cursor-text="View"><img
                                                src="{{ asset('frontend/assets/images/products.php/products.php_image_1.jpg') }}"
                                                alt="Collab – Online Learning Platform"></a>
                                    </div>
                                    <div class="item_content">
                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                            <ul class="item_category_list unordered_list">
                                                <li><a href="#!">Computer Science</a></li>
                                            </ul>
                                            <div class="item_price"><span class="sale_price">$29.99</span> <del
                                                    class="remove_price">$39.99</del></div>
                                        </div>
                                        <ul class="meta_info_list unordered_list">
                                            <li><i class="fas fa-chart-bar"></i> <span>Beginner</span></li>
                                            <li><i class="fas fa-clock"></i> <span>120 Hours</span></li>
                                            <li><i class="fas fa-star"></i> <span>3.5 (3k reviews)</span></li>
                                        </ul>
                                        <h3 class="item_title"><a href="products.php">Programming for Everybody (Getting
                                                Started with Python)</a></h3><a class="btn_unfill"
                                            href="products.php"><span class="btn_text">View products.php</span> <span
                                                class="btn_icon"><i class="fas fa-long-arrow-right"></i> <i
                                                    class="fas fa-long-arrow-right"></i></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-lg-4">
                                <div class="products.php_card">
                                    <div class="item_image">
                                        <a href="products.php" data-cursor-text="View"><img
                                                src="{{ asset('frontend/assets/images/products.php/products.php_image_2.jpg') }}"
                                                alt="Collab – Online Learning Platform"></a>
                                    </div>
                                    <div class="item_content">
                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                            <ul class="item_category_list unordered_list">
                                                <li><a href="#!">Photography</a></li>
                                            </ul>
                                            <div class="item_price"><span class="sale_price">$9.99</span></div>
                                        </div>
                                        <ul class="meta_info_list unordered_list">
                                            <li><i class="fas fa-chart-bar"></i> <span>Beginner</span></li>
                                            <li><i class="fas fa-clock"></i> <span>120 Hours</span></li>
                                            <li><i class="fas fa-star"></i> <span>3.5 (3k reviews)</span></li>
                                        </ul>
                                        <h3 class="item_title"><a href="products.php">Photography Masterclass: A Complete
                                                Guide to Photography</a></h3><a class="btn_unfill"
                                            href="products.php"><span class="btn_text">View products.php</span> <span
                                                class="btn_icon"><i class="fas fa-long-arrow-right"></i> <i
                                                    class="fas fa-long-arrow-right"></i></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-lg-4">
                                <div class="products.php_card">
                                    <div class="item_image">
                                        <a href="products.php" data-cursor-text="View"><img
                                                src="{{ asset('frontend/assets/images/products.php/products.php_image_3.jpg') }}"
                                                alt="Collab – Online Learning Platform"></a>
                                    </div>
                                    <div class="item_content">
                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                            <ul class="item_category_list unordered_list">
                                                <li><a href="#!">Business</a></li>
                                            </ul>
                                            <div class="item_price"><span class="sale_price">FREE</span></div>
                                        </div>
                                        <ul class="meta_info_list unordered_list">
                                            <li><i class="fas fa-chart-bar"></i> <span>Beginner</span></li>
                                            <li><i class="fas fa-clock"></i> <span>120 Hours</span></li>
                                            <li><i class="fas fa-star"></i> <span>3.5 (3k reviews)</span></li>
                                        </ul>
                                        <h3 class="item_title"><a href="products.php">Project Management Principles and
                                                Practices</a></h3><a class="btn_unfill" href="products.php"><span
                                                class="btn_text">View products.php</span> <span class="btn_icon"><i
                                                    class="fas fa-long-arrow-right"></i> <i
                                                    class="fas fa-long-arrow-right"></i></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="teb_programming" role="tabpanel">
                        <div class="row">
                            <div class="col col-lg-4">
                                <div class="products.php_card">
                                    <div class="item_image">
                                        <a href="products.php" data-cursor-text="View"><img
                                                src="{{ asset('frontend/assets/images/products.php/products.php_image_1.jpg') }}"
                                                alt="Collab – Online Learning Platform"></a>
                                    </div>
                                    <div class="item_content">
                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                            <ul class="item_category_list unordered_list">
                                                <li><a href="#!">Computer Science</a></li>
                                            </ul>
                                            <div class="item_price"><span class="sale_price">$29.99</span> <del
                                                    class="remove_price">$39.99</del></div>
                                        </div>
                                        <ul class="meta_info_list unordered_list">
                                            <li><i class="fas fa-chart-bar"></i> <span>Beginner</span></li>
                                            <li><i class="fas fa-clock"></i> <span>120 Hours</span></li>
                                            <li><i class="fas fa-star"></i> <span>3.5 (3k reviews)</span></li>
                                        </ul>
                                        <h3 class="item_title"><a href="products.php">Programming for Everybody (Getting
                                                Started with Python)</a></h3><a class="btn_unfill"
                                            href="products.php"><span class="btn_text">View products.php</span> <span
                                                class="btn_icon"><i class="fas fa-long-arrow-right"></i> <i
                                                    class="fas fa-long-arrow-right"></i></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-lg-4">
                                <div class="products.php_card">
                                    <div class="item_image">
                                        <a href="products.php" data-cursor-text="View"><img
                                                src="{{ asset('frontend/assets/images/products.php/products.php_image_2.jpg') }}"
                                                alt="Collab – Online Learning Platform"></a>
                                    </div>
                                    <div class="item_content">
                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                            <ul class="item_category_list unordered_list">
                                                <li><a href="#!">Photography</a></li>
                                            </ul>
                                            <div class="item_price"><span class="sale_price">$9.99</span></div>
                                        </div>
                                        <ul class="meta_info_list unordered_list">
                                            <li><i class="fas fa-chart-bar"></i> <span>Beginner</span></li>
                                            <li><i class="fas fa-clock"></i> <span>120 Hours</span></li>
                                            <li><i class="fas fa-star"></i> <span>3.5 (3k reviews)</span></li>
                                        </ul>
                                        <h3 class="item_title"><a href="products.php">Photography Masterclass: A Complete
                                                Guide to Photography</a></h3><a class="btn_unfill"
                                            href="products.php"><span class="btn_text">View products.php</span> <span
                                                class="btn_icon"><i class="fas fa-long-arrow-right"></i> <i
                                                    class="fas fa-long-arrow-right"></i></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-lg-4">
                                <div class="products.php_card">
                                    <div class="item_image">
                                        <a href="products.php" data-cursor-text="View"><img
                                                src="{{ asset('frontend/assets/images/products.php/products.php_image_3.jpg') }}"
                                                alt="Collab – Online Learning Platform"></a>
                                    </div>
                                    <div class="item_content">
                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                            <ul class="item_category_list unordered_list">
                                                <li><a href="#!">Business</a></li>
                                            </ul>
                                            <div class="item_price"><span class="sale_price">FREE</span></div>
                                        </div>
                                        <ul class="meta_info_list unordered_list">
                                            <li><i class="fas fa-chart-bar"></i> <span>Beginner</span></li>
                                            <li><i class="fas fa-clock"></i> <span>120 Hours</span></li>
                                            <li><i class="fas fa-star"></i> <span>3.5 (3k reviews)</span></li>
                                        </ul>
                                        <h3 class="item_title"><a href="products.php">Project Management Principles and
                                                Practices</a></h3><a class="btn_unfill" href="products.php"><span
                                                class="btn_text">View products.php</span> <span class="btn_icon"><i
                                                    class="fas fa-long-arrow-right"></i> <i
                                                    class="fas fa-long-arrow-right"></i></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="teb_marketing" role="tabpanel">
                        <div class="row">
                            <div class="col col-lg-4">
                                <div class="products.php_card">
                                    <div class="item_image">
                                        <a href="products.php" data-cursor-text="View"><img
                                                src="{{ asset('frontend/assets/images/products.php/products.php_image_1.jpg') }}"
                                                alt="Collab – Online Learning Platform"></a>
                                    </div>
                                    <div class="item_content">
                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                            <ul class="item_category_list unordered_list">
                                                <li><a href="#!">Computer Science</a></li>
                                            </ul>
                                            <div class="item_price"><span class="sale_price">$29.99</span> <del
                                                    class="remove_price">$39.99</del></div>
                                        </div>
                                        <ul class="meta_info_list unordered_list">
                                            <li><i class="fas fa-chart-bar"></i> <span>Beginner</span></li>
                                            <li><i class="fas fa-clock"></i> <span>120 Hours</span></li>
                                            <li><i class="fas fa-star"></i> <span>3.5 (3k reviews)</span></li>
                                        </ul>
                                        <h3 class="item_title"><a href="products.php">Programming for Everybody (Getting
                                                Started with Python)</a></h3><a class="btn_unfill"
                                            href="products.php"><span class="btn_text">View products.php</span> <span
                                                class="btn_icon"><i class="fas fa-long-arrow-right"></i> <i
                                                    class="fas fa-long-arrow-right"></i></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-lg-4">
                                <div class="products.php_card">
                                    <div class="item_image">
                                        <a href="products.php" data-cursor-text="View"><img
                                                src="{{ asset('frontend/assets/images/products.php/products.php_image_2.jpg') }}"
                                                alt="Collab – Online Learning Platform"></a>
                                    </div>
                                    <div class="item_content">
                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                            <ul class="item_category_list unordered_list">
                                                <li><a href="#!">Photography</a></li>
                                            </ul>
                                            <div class="item_price"><span class="sale_price">$9.99</span></div>
                                        </div>
                                        <ul class="meta_info_list unordered_list">
                                            <li><i class="fas fa-chart-bar"></i> <span>Beginner</span></li>
                                            <li><i class="fas fa-clock"></i> <span>120 Hours</span></li>
                                            <li><i class="fas fa-star"></i> <span>3.5 (3k reviews)</span></li>
                                        </ul>
                                        <h3 class="item_title"><a href="products.php">Photography Masterclass: A Complete
                                                Guide to Photography</a></h3><a class="btn_unfill"
                                            href="products.php"><span class="btn_text">View products.php</span> <span
                                                class="btn_icon"><i class="fas fa-long-arrow-right"></i> <i
                                                    class="fas fa-long-arrow-right"></i></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-lg-4">
                                <div class="products.php_card">
                                    <div class="item_image">
                                        <a href="products.php" data-cursor-text="View"><img
                                                src="{{ asset('frontend/assets/images/products.php/products.php_image_3.jpg') }}"
                                                alt="Collab – Online Learning Platform"></a>
                                    </div>
                                    <div class="item_content">
                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                            <ul class="item_category_list unordered_list">
                                                <li><a href="#!">Business</a></li>
                                            </ul>
                                            <div class="item_price"><span class="sale_price">FREE</span></div>
                                        </div>
                                        <ul class="meta_info_list unordered_list">
                                            <li><i class="fas fa-chart-bar"></i> <span>Beginner</span></li>
                                            <li><i class="fas fa-clock"></i> <span>120 Hours</span></li>
                                            <li><i class="fas fa-star"></i> <span>3.5 (3k reviews)</span></li>
                                        </ul>
                                        <h3 class="item_title"><a href="products.php">Project Management Principles and
                                                Practices</a></h3><a class="btn_unfill" href="products.php"><span
                                                class="btn_text">View products.php</span> <span class="btn_icon"><i
                                                    class="fas fa-long-arrow-right"></i> <i
                                                    class="fas fa-long-arrow-right"></i></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="teb_design" role="tabpanel">
                        <div class="row">
                            <div class="col col-lg-4">
                                <div class="products.php_card">
                                    <div class="item_image">
                                        <a href="products.php" data-cursor-text="View"><img
                                                src="{{ asset('frontend/assets/images/products.php/products.php_image_1.jpg') }}"
                                                alt="Collab – Online Learning Platform"></a>
                                    </div>
                                    <div class="item_content">
                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                            <ul class="item_category_list unordered_list">
                                                <li><a href="#!">Computer Science</a></li>
                                            </ul>
                                            <div class="item_price"><span class="sale_price">$29.99</span> <del
                                                    class="remove_price">$39.99</del></div>
                                        </div>
                                        <ul class="meta_info_list unordered_list">
                                            <li><i class="fas fa-chart-bar"></i> <span>Beginner</span></li>
                                            <li><i class="fas fa-clock"></i> <span>120 Hours</span></li>
                                            <li><i class="fas fa-star"></i> <span>3.5 (3k reviews)</span></li>
                                        </ul>
                                        <h3 class="item_title"><a href="products.php">Programming for Everybody (Getting
                                                Started with Python)</a></h3><a class="btn_unfill"
                                            href="products.php"><span class="btn_text">View products.php</span> <span
                                                class="btn_icon"><i class="fas fa-long-arrow-right"></i> <i
                                                    class="fas fa-long-arrow-right"></i></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-lg-4">
                                <div class="products.php_card">
                                    <div class="item_image">
                                        <a href="products.php" data-cursor-text="View"><img
                                                src="{{ asset('frontend/assets/images/products.php/products.php_image_2.jpg') }}"
                                                alt="Collab – Online Learning Platform"></a>
                                    </div>
                                    <div class="item_content">
                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                            <ul class="item_category_list unordered_list">
                                                <li><a href="#!">Photography</a></li>
                                            </ul>
                                            <div class="item_price"><span class="sale_price">$9.99</span></div>
                                        </div>
                                        <ul class="meta_info_list unordered_list">
                                            <li><i class="fas fa-chart-bar"></i> <span>Beginner</span></li>
                                            <li><i class="fas fa-clock"></i> <span>120 Hours</span></li>
                                            <li><i class="fas fa-star"></i> <span>3.5 (3k reviews)</span></li>
                                        </ul>
                                        <h3 class="item_title"><a href="products.php">Photography Masterclass: A Complete
                                                Guide to Photography</a></h3><a class="btn_unfill"
                                            href="products.php"><span class="btn_text">View products.php</span> <span
                                                class="btn_icon"><i class="fas fa-long-arrow-right"></i> <i
                                                    class="fas fa-long-arrow-right"></i></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-lg-4">
                                <div class="products.php_card">
                                    <div class="item_image">
                                        <a href="products.php" data-cursor-text="View"><img
                                                src="{{ asset('frontend/assets/images/products.php/products.php_image_3.jpg') }}"
                                                alt="Collab – Online Learning Platform"></a>
                                    </div>
                                    <div class="item_content">
                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                            <ul class="item_category_list unordered_list">
                                                <li><a href="#!">Business</a></li>
                                            </ul>
                                            <div class="item_price"><span class="sale_price">FREE</span></div>
                                        </div>
                                        <ul class="meta_info_list unordered_list">
                                            <li><i class="fas fa-chart-bar"></i> <span>Beginner</span></li>
                                            <li><i class="fas fa-clock"></i> <span>120 Hours</span></li>
                                            <li><i class="fas fa-star"></i> <span>3.5 (3k reviews)</span></li>
                                        </ul>
                                        <h3 class="item_title"><a href="products.php">Project Management Principles and
                                                Practices</a></h3><a class="btn_unfill" href="products.php"><span
                                                class="btn_text">View products.php</span> <span class="btn_icon"><i
                                                    class="fas fa-long-arrow-right"></i> <i
                                                    class="fas fa-long-arrow-right"></i></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="advertisement_section bg_dark">
        <div class="container">
            <div class="row align-items-center">
                <div class="col col-lg-6">
                    <div class="section_heading mb-lg-0">
                        <h2 class="heading_text text-white">Dive into Success!</h2>
                        <p class="heading_description mb-0 text-white">Unlock your potential with our premium academic
                            support services designed for ultimate success. Dive in now for a stress-free academic journey!
                        </p>
                        <div class="btn_wrap pb-0"><a class="btn btn_primary" href="products.php"><span><small>Explore
                                        More</small> <small>Explore More</small></span></a></div>
                    </div>
                </div>
                <div class="col col-lg-6">
                    <div class="row images_group decoration_wrap">
                        <div class="image_wrap"><img
                                src="{{ asset('frontend/assets/images/banner/hero_banner_img_5.webp') }}"
                                alt="Collab – Online Learning Platform"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="products.phps_info_section section_space_lg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col col-lg-6">
                    <div class="image_widget"><img
                            src="{{ asset('frontend/assets/images/banner/hero_banner_img_6.webp') }}"
                            alt="Collab – Online Learning Platform"></div>
                </div>
                <div class="col col-lg-6">
                    <div class="content_wrap ps-lg-3">
                        <div class="section_heading">
                            <h2 class="heading_text">Academic Mastery Awaits!</h2>
                            <p class="heading_description mb-0">Step into a world where academic excellence and
                                affordability merge. Discover a suite of services crafted for your success! </p>
                        </div>

                        <div class="btn_wrap pb-0"><a class="btn btn_dark" href=" 	products.php"><span><small>Discover
                                        Now</small> <small>Discover Now</small></span></a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pricing_section section_space_lg bg_light">
        <div class="container decoration_wrap">
            <div class="section_heading text-center">
                <h2 class="heading_text mb-0">Pricing & Subscription Packages</h2>
            </div>
            <div class="pricing_cards_wrapper row align-items-center">
                <div class="col col-lg-4">
                    <div class="pricing_card text-center tilt">
                        <h3 class="card_heading">Starter</h3>
                        <div class="pricing_wrap"><span class="price_value"><sup>$</sup>15.49</span> <small
                                class="d-block">Per Page</small></div>
                        <hr>
                        <ul class="info_list unordered_list_block text-start">
                            <li><i class="fas fa-caret-right"></i> <span>30-50 Pages</span></li>
                            <li><i class="fas fa-caret-right"></i> <span>30 Days</span></li>

                        </ul>
                        <div class="btn_wrap pb-0" onclick="alertfunction()"><a class="btn border_dark"
                                href="#!"><span><small>Order Now</small> <small>Grav Now</small></span></a>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-4">
                    <div class="pricing_card text-center bg_dark tilt">
                        <div class="card_badge">recommended</div>
                        <h3 class="card_heading">Intermediate</h3>
                        <div class="pricing_wrap"><span class="price_value"><sup>$</sup>14.99</span> <small
                                class="d-block">Per Page</small></div>
                        <hr>
                        <ul class="info_list unordered_list_block text-start">
                            <li><i class="fas fa-caret-right"></i> <span>51-100 Pages</span></li>
                            <li><i class="fas fa-caret-right"></i> <span>45 Days</span></li>

                        </ul>
                        <div class="btn_wrap pb-0" onclick="alertfunction()"><a class="btn btn_primary"
                                href="#!"><span><small>Order Now</small> <small>Grav Now</small></span></a></div>
                    </div>
                </div>
                <div class="col col-lg-4">
                    <div class="pricing_card text-center tilt">
                        <h3 class="card_heading">Advanced</h3>
                        <div class="pricing_wrap"><span class="price_value"><sup>$</sup>13.99</span> <small
                                class="d-block">Per Page</small></div>
                        <hr>
                        <ul class="info_list unordered_list_block text-start">
                            <li><i class="fas fa-caret-right"></i> <span>150-300 Pages</span></li>
                            <li><i class="fas fa-caret-right"></i> <span>4 Months</span></li>

                        </ul>
                        <div class="btn_wrap pb-0" onclick="alertfunction()"><a class="btn border_dark"
                                href="#!"><span><small>Order Now</small> <small>Grav Now</small></span></a></div>
                    </div>
                </div>
            </div>
            <div class="deco_item shape_img_1" data-parallax='{"y" : 130, "smoothness": 6}'><img
                    src="{{ asset('frontend/assets/images/shape/shape_img_4.png') }}"
                    alt="Collab – Online Learning Platform"></div>
            <div class="deco_item shape_img_2" data-parallax='{"y" : -130, "smoothness": 6}'><img
                    src="{{ asset('frontend/assets/images/shape/shape_img_5.png') }}"
                    alt="Collab – Online Learning Platform"></div>
        </div>
    </section>
    <section class="testimonial_section section_space_lg">
        <div class="container">
            <div class="section_heading">
                <div class="row align-items-center">
                    <div class="col col-lg-7">
                        <h2 class="heading_text mb-0">Don’t just take our word for it</h2>
                    </div>
                    <div class="col col-lg-5 d-lg-flex d-none justify-content-end">
                        <div class="carousel_arrow">
                            <button type="button" class="cc2c_left_arrow"><i class="far fa-arrow-left"></i> <i
                                    class="far fa-arrow-left"></i></button>
                            <button type="button" class="cc2c_right_arrow"><i class="far fa-arrow-right"></i> <i
                                    class="far fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="testimonial_carousel">
            <div class="common_carousel_2col" data-cursor-text="Drag" data-slick='{"dots":false}'>
                <div class="carousel_item">
                    <div class="testimonial_item">

                        <div class="testimonial_content">
                            <ul class="rating_star unordered_list">
                                <li class="active"><i class="fas fa-star"></i></li>
                                <li class="active"><i class="fas fa-star"></i></li>
                                <li class="active"><i class="fas fa-star"></i></li>
                                <li class="active"><i class="fas fa-star"></i></li>
                                <li class="active"><i class="fas fa-star"></i></li>
                            </ul>

                            <p>“Thank you so much for taking care of my paper”</p>
                            <h5 class="testimonial_name">Order ID-2197723</h5><span class="quote_icon"><i
                                    class="fas fa-quote-right"></i></span>
                        </div>
                    </div>
                </div>
                <div class="carousel_item">
                    <div class="testimonial_item">

                        <div class="testimonial_content">
                            <ul class="rating_star unordered_list">
                                <li class="active"><i class="fas fa-star"></i></li>
                                <li class="active"><i class="fas fa-star"></i></li>
                                <li class="active"><i class="fas fa-star"></i></li>
                                <li class="active"><i class="fas fa-star"></i></li>
                                <li class="active"><i class="fas fa-star"></i></li>
                            </ul>

                            <p>“Perfect. Thank you !!”</p>
                            <h5 class="testimonial_name">Order ID-2197608</h5><span class="quote_icon"><i
                                    class="fas fa-quote-right"></i></span>
                        </div>
                    </div>
                </div>
                <div class="carousel_item">
                    <div class="testimonial_item">

                        <div class="testimonial_content">
                            <ul class="rating_star unordered_list">
                                <li class="active"><i class="fas fa-star"></i></li>
                                <li class="active"><i class="fas fa-star"></i></li>
                                <li class="active"><i class="fas fa-star"></i></li>
                                <li class="active"><i class="fas fa-star"></i></li>
                                <li class="active"><i class="fas fa-star"></i></li>
                            </ul>

                            <p>“Thank you for completing this task. We are very happy with the results.”</p>
                            <h5 class="testimonial_name">Order ID-2197290</h5><span class="quote_icon"><i
                                    class="fas fa-quote-right"></i></span>
                        </div>
                    </div>
                </div>
                <div class="carousel_item">
                    <div class="testimonial_item">

                        <div class="testimonial_content">
                            <ul class="rating_star unordered_list">
                                <li class="active"><i class="fas fa-star"></i></li>
                                <li class="active"><i class="fas fa-star"></i></li>
                                <li class="active"><i class="fas fa-star"></i></li>
                                <li class="active"><i class="fas fa-star"></i></li>
                                <li class="active"><i class="fas fa-star"></i></li>
                            </ul>

                            <p>“Perfect, I so appreciate the service you brilliant people provide.”</p>

                            <h5 class="testimonial_name">Order ID-2196286</h5><span class="quote_icon"><i
                                    class="fas fa-quote-right"></i></span>
                        </div>
                    </div>
                </div>
                <div class="carousel_item">
                    <div class="testimonial_item">

                        <div class="testimonial_content">
                            <ul class="rating_star unordered_list">
                                <li class="active"><i class="fas fa-star"></i></li>
                                <li class="active"><i class="fas fa-star"></i></li>
                                <li class="active"><i class="fas fa-star"></i></li>
                                <li class="active"><i class="fas fa-star"></i></li>
                                <li class="active"><i class="fas fa-star"></i></li>
                            </ul>

                            <p>“Perfect! Thank you so much”</p>
                            <h5 class="testimonial_name">Order ID-2193388</h5><span class="quote_icon"><i
                                    class="fas fa-quote-right"></i></span>
                        </div>
                    </div>
                </div>
                <div class="carousel_item">
                    <div class="testimonial_item">

                        <div class="testimonial_content">
                            <ul class="rating_star unordered_list">
                                <li class="active"><i class="fas fa-star"></i></li>
                                <li class="active"><i class="fas fa-star"></i></li>
                                <li class="active"><i class="fas fa-star"></i></li>
                                <li class="active"><i class="fas fa-star"></i></li>
                                <li class="active"><i class="fas fa-star"></i></li>
                            </ul>

                            <p>“Perfect 😊 Greatly appreciate your work”</p>

                            <h5 class="testimonial_name">Order ID-2189497</h5><span class="quote_icon"><i
                                    class="fas fa-quote-right"></i></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel_arrow d-lg-none d-flex justify-content-center">
                <button type="button" class="cc2c_left_arrow"><i class="far fa-arrow-left"></i> <i
                        class="far fa-arrow-left"></i></button>
                <button type="button" class="cc2c_right_arrow"><i class="far fa-arrow-right"></i> <i
                        class="far fa-arrow-right"></i></button>
            </div>
        </div>
        </div>
    </section>
    <section class="newslatter_section">
        <div class="container">
            <!-- <div class="newslatter_box " style=" height:1171px; width:100%;background-image:url(assets/images/banner/hero_banner_img_3.webp)"> -->
            <div class="img-sub mx-4 mx-lg-5 " style="box-shadow: 20px 20px 0 0 yellow;border-radius: 8px;width: 87%;">
                <img class="img-sub" src="{{ asset('frontend/assets/images/banner/hero_banner_img_3.webp') }}"
                    alt="">
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
