@extends('frontend_final.Layout.masters')
@section('content')
<!-- Hero Section -->
<div class="contactus-hero-section d-flex justify-content-center align-items-center pt-custom-2">
    <div class="hero-text text-center">
        <h2 class="header-text">
            Unlock Instant Academic Success - <br>
            <span class="text-purple">Contact Us Now!</span> <br>
        </h2>
        <div class="container">
            <div class="d-flex align-items-center justify-content-center">
                <p class="sample-hero-text">Unlock the doorway to unparalleled academic success with a single click!
                    Our platform provides instant access to a realm of academic excellence, where 24/7 expert
                    guidance
                    is at your fingertips. Whether you're striving to boost your <span class="gradient-text underline fw-bold">Grades</span> or seeking tailored solutions for
                    your unique academic challenges, we are your unwavering ally. Experience personalized support,
                    real-time updates, and a community that champions your growth. Dive into an effortless journey
                    of
                    academic transformation where your satisfaction is not just promised—it's guaranteed.</p>
            </div>
        </div>
    </div>
</div>


<section class="bg-dark section-card-phases bg-height-0 contact-us-sec-2">
    <img src="{{ asset('fronted_final/assets/images/FullHeartLine.png')}}" alt="heart-line 1" class="heartbeat-line start" />
    <div class="text-center text-white">
        <h2 class="header-text"> Your Academic Ally, Anytime, <br>
            <span class="">Anywhere!"</span> <br>
        </h2>
        <div class="container">
            <div class="align-items-center justify-content-center">
                <h5 class="gradient-text fs-3 fw-bold">Multiple channels to connect with us, making communication seamless!</h5>
                <p class="fs-4">Reach us anytime, ensuring you're never alone in your academic journey!</p>
                <div class="yellow-text fw-bolder fs-5">Email: xxxx@xxxx.com</div>
                <p class="fs-4">Get immediate answers to your queries, keeping your studies on track!</p>
                <div class="yellow-text fw-bolder fs-5">Call Us: 133444556666</div>
            </div>
        </div>
    </div>
</section>


<section class="bg-dark section-card-phases">
    <img src="{{ asset('fronted_final/assets/images/FullHeartLine.png')}}" alt="heart-line 1" class="heartbeat-line start" />
    <div class="container-lg card-style cardStyles d-flex justify-content-center">
        <div class="col-md-10">
            <form>
                <div class="row sample-text-field text-white text-center">
                    <p class="fs-5">Depend on our consistent support to help you through academic challenges -
                    <br>
                    Fill out the form below. Help is just one click away!</p>
                    <div class="col-lg-6 col-md-6">
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" aria-label="Choose" placeholder="First Name">
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Last Name">
                    </div>
                </div>

                <div class="row sample-text-field justify-content-center align-items-center">
                    <div class="col-lg-12 col-md-12 mt-4">
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                    </div>
                    <div class="col-lg-12 col-md-12 mt-4">
                        <textarea class="form-control" name="" id="" cols="30" rows="10" placeholder="Message"></textarea>
                    </div>
                    <div class="col-md-2 col-sm-3 mt-4">
                        <button type="submit" class="btn gradient-button w-100">Submit</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</section>


<section class="bg-dark section-card-phases bg-height-0">
    <img src="{{ asset('fronted_final/assets/images/FullHeartLine.png')}}" alt="heart-line 1" class="heartbeat-line start" />

    <div class="text-center text-white">
        <h4 class="header-text"> Find Your Way to Us with Ease - <br>
            <span class="text-purple">Explore Our Location on Google Maps!</span> <br>
        </h4>
        <div class="row">
            <div class="col-12 d-flex justify-content-center m-2 mt-4 mb-4 Location-icon align-item-flex-start">
                <img src="{{ asset('fronted_final/assets/images/Vector.png')}}" style="margin-right: 10px; height: 25px;">
                <h5 class="pink-text fs-4">301 N Lake Ave., Suite 600, Pasadena, CA 91101</h5>
            </div>
        </div>
    </div>
    <!-- Map -->
    <div class="">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3222.023346890844!2d-115.19224687508118!3d36.14164480454668!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1714515192435!5m2!1sen!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>


<!-- Section FAQs -->
<section class="bg-dark section-card-phases pt-0">
    <div class="heartbeat-heading d-flex justify-content-between align-items-center key-journey">
        <img src="{{ asset('fronted_final/assets/images/heart-line 1.png')}}" alt="heart-line 1" class="heartbeat-line start" />
        <div class="text-container flex-grow-1 text-center position-relative">
            <h1 class="heading text-white">Frequently Asked Questions</h1>
            <div class="position-absolute sub-text1 w-100">
                <span class="main-text text-purple">(FAQs)</span>
            </div>
        </div>
        <img src="{{ asset('fronted_final/assets/images/heart-line 2.png')}}" alt="heart-line 2" class="heartbeat-line end" />
    </div>


    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10">
                <div class="accordion accordion-flush" id="accordionExample">

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                1. How can I contact you for general inquiries?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse " data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                You can reach us via email at <a href="mail">support@writing-space.com</a>, or for immediate assistance.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                2. What are your customer service hours? 
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Our customer service team is available by phone from 9 AM to 5 PM EST, Monday through Friday. Outside these hours, we provide 24/7 email support, ensuring help is always at your fingertips. Additionally, our writers work around the clock to handle your requests, so you’ll receive service whenever you need it.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                3. How long does it typically take to receive a response?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                We strive to respond to all inquiries within 24 hours on weekdays. Additionally, with our writers available 24/7, you can expect timely support and service at any time.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                4. Is there a phone number I can call for urgent matters?
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Yes, for urgent matters, you can call us at <a href="tel" class="text-decoration-none">1-800-123-4567</a>. Our team is ready to assist you with any urgent concerns.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                5. How can I provide feedback about your services?
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Feedback can be submitted via our email address, through our website’s feedback form. We value your input and use it to improve our services.

                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                6. What should I do if I encounter technical issues on your website?
                            </button>
                        </h2>
                        <div id="collapseSeven" class="accordion-collapse collapse " data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                               Please contact our technical support team by email at support@writing-space.com. We do not currently offer live chat, but we will respond to your emailed inquiries promptly.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                7. How do I update my contact information with you?
                            </button>
                        </h2>
                        <div id="collapseTen" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                You can update your contact information through your account on our website or by contacting customer support via email or phone.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                                8. What is the best way to contact you for service modifications?
                            </button>
                        </h2>
                        <div id="collapseEleven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                For changes to your services, please contact us via email or phone. This ensures that we handle your request accurately and promptly.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                                9. How secure is my personal information when I contact you?
                            </button>
                        </h2>
                        <div id="collapseTwelve" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Your privacy is our priority. We use secure systems to protect your personal information and ensure confidentiality in all communications.
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-center align-items-center mt-4">
     

       
                               
        <a href="{{ route('front.faq') }}" class="gradient-btn border-0 text-decoration-none">Learn more</a>
                       
       
    </div>
    @endsection