@extends('frontend_final.Layout.masters')
@section('content')
<!-- Section Package Features -->
<section class="bg-dark section-card-phases our-vision-about ">
    <div class="heartbeat-heading d-flex justify-content-between align-items-center key-journey">
        <img src="{{ asset('fronted_final/assets/images/heart-line 1.png')}}" alt="heart-line 1" class="heartbeat-line start" />
        <div class="text-container flex-grow-1 text-center position-relative">
            <h1 class="heading">Our Vision</h1>
        </div>
        <img src="{{ asset('fronted_final/assets/images/heart-line 2.png')}}" alt="heart-line 2" class="heartbeat-line end" />
    </div>

    <div class="container-lg my-2 about-us-custom">
        <section class="section-skepticism mb-4 p-5 about-sec-1 pb-4 custom-padding about-res-sec-1">
            <div class="content">
                <div class="heading-container">
                    <h1 class="text-container-custom text-white mb-3">Envisioning a World of Empowered Learners -
                    </h1>
                    <h1 class="text-container-custom fs-clr-yellow mb-3">Transforming Education, Transforming Lives!
                    </h1>
                </div>
                <p>We welcome you to the future of education! At our core, we are pioneering a transformative approach that ignites potential in every student. Imagine a world where your academic and professional dreams are not just possibilities, but certainties. With our innovative tools and unwavering ethical commitment, we're not just supporting learners; we're empowering success. Step into a realm where barriers are broken, and every learner is empowered to reach their fullest potential. Don't just dream about success. Make it your reality with us.</p>
            </div>
            <div class="image-container d-flex justify-content-center">
                <img src="{{ asset('fronted_final/assets/images/why-choose-us-img-1.png')}}" alt="Description">
            </div>
        </section>
    </div>

</section>

<!-- Section mission about -->
<section class="bg-dark section-card-phases our-mission-about ">
    <div class="heartbeat-heading d-flex justify-content-between align-items-center key-journey">
        <img src="{{ asset('fronted_final/assets/images/heart-line 1.png')}}" alt="heart-line 1" class="heartbeat-line start" />
        <div class="text-container flex-grow-1 text-center position-relative">
            <h1 class="heading">Our Mission</h1>
        </div>
        <img src="{{ asset('fronted_final/assets/images/heart-line 2.png')}}" alt="heart-line 2" class="heartbeat-line end" />
    </div>

    <div class="container-lg my-2 about-us-custom">
        <section class="section-skepticism mb-4 p-5 about-sec-2 pb-4 about-res-sec-1 custom-padding">
            <div class="content">
                <div class="heading-container">
                    <h1 class="text-container-custom text-white mb-3">Empowering Success Through Ethical Innovation -
                    </h1>
                    <h1 class="text-container-custom fs-clr-yellow mb-3">Your Academic Ally in the Journey to Excellence!
                    </h1>
                </div>
                <p>Our mission is to unlock the door to academic excellence with our unparalleled guidance, designed
                    precisely for ambitious learners seeking a triumphant educational journey! At the heart of our
                    mission lies a commitment to 'Empowering Success Through Ethical Innovation'. We're more than
                    just a service; we're your Academic Ally, sculpting personalized paths to shine in your studies
                    and beyond. Dive into a world where your potential is limitless, fueled by our unwavering
                    support. Let's embark on this journey together, transforming dreams into tangible achievements.
                    Your success story starts here!</p>
            </div>
            <div class="image-container d-flex justify-content-center">
                <img src="{{ asset('fronted_final/assets/images/rocket.png')}}" alt="Description">
            </div>
        </section>
    </div>

</section>

<!-- Section mission about -->
<section class="bg-dark section-card-phases our-mission-about values">
    <div class="heartbeat-heading d-flex justify-content-between align-items-center key-journey">
        <img src="{{ asset('fronted_final/assets/images/heart-line 1.png')}}" alt="heart-line 1" class="heartbeat-line start" />
        <div class="text-container flex-grow-1 text-center position-relative">
            <h1 class="heading">Values</h1>
            <div class="position-absolute sub-text1  w-100 d-flex justify-content-center">
                <span class="main-text "><a class="red-text text-decoration-none" href="#integrity">Integrity,</a>
                </span>
                <span class="main-text "><a class="yellow-text text-decoration-none" href="#innovation">Innovation,</a>
                </span>
                <span class="main-text "><a class="text-purple text-decoration-none" href="#impact">and Impact</a>
                </span>
            </div>
        </div>
        <img src="{{ asset('fronted_final/assets/images/heart-line 2.png')}}" alt="heart-line 2" class="heartbeat-line end" />
    </div>

    <div class="container-lg my-2 mt-5-custom">
        <section class="section-skepticism mb-4 p-5 bordered-card pb-4 about-res-sec-1 custom-padding" id="integrity">
            <div class="image-container d-flex justify-content-center">
                <img src="{{ asset('fronted_final/assets/images/about-values-1.png')}}" alt="Description">
            </div>
            <div class="content">
                <div class="heading-container">
                    <h1 class="text-container-custom text-white align-items-start mb-3">Unwavering Integrity -
                    </h1>
                    <h1 class="text-container-custom text-white mb-3 align-items-start d-content">
                        Your Trust, Our <span class="yellow-text">Foundation!</span>
                    </h1>
                </div>
                <p>Imagine a place where trust isn't just a word, but the foundation of everything we do. Welcome to
                    a realm where unwavering integrity meets unparalleled service. We don't just promise excellence;
                    we transcend it, ensuring every interaction with us not only meets but exceeds the highest
                    academic standards. Your trust, the sacred cornerstone of our relationship, is passionately
                    guarded with honesty and transparency. Choose us, and step into a world where your achievements
                    are not just recognized but celebrated, every step of the way.</p>
            </div>
        </section>

        <section class="section-skepticism mb-4 p-5 bordered-card pb-4 about-res-sec-1 custom-padding" id="innovation">
            <div class="image-container d-flex justify-content-center">
                <img src="{{ asset('fronted_final/assets/images/about-values-2.png')}}" alt="Description">
            </div>
            <div class="content">
                <div class="heading-container">
                    <h1 class="text-container-custom text-white align-items-start mb-3">Relentless Innovation -
                    </h1>
                    <h1 class="text-container-custom text-white mb-3 align-items-start d-content">
                        Pioneering for <span class="yellow-text">Your Potential!</span>
                    </h1>
                </div>
                <p>Unleash Your True Potential with Our Groundbreaking Educational Services! At the heart of our
                    mission lies Relentless Innovation—our unwavering commitment to transforming education through
                    the power of technology. We're not just a service; we're your partner in pioneering a future
                    brimming with possibilities. With every update and every breakthrough, we're here to ensure that
                    you're always ahead, equipped with the most effective, cutting-edge academic support. Don't
                    settle for anything less than extraordinary. Join us, and let's unlock your potential together.
                </p>
            </div>
        </section>

        <section class="section-skepticism mb-4 p-5 bordered-card pb-4 about-res-sec-1 custom-padding" id="impact">
            <div class="image-container d-flex justify-content-center">
                <img src="{{ asset('fronted_final/assets/images/about-values-3.png')}}" alt="Description">
            </div>
            <div class="content">
                <div class="heading-container">
                    <h1 class="text-container-custom text-white align-items-start mb-3">Tangible Impact -
                    </h1>
                    <h1 class="text-container-custom text-white mb-3 align-items-start d-content">
                        Measuring Success by <span class="yellow-text">Your Success!</span>
                    </h1>
                </div>
                <p>Imagine a future where your academic performance soars, unlocking doors to endless possibilities.
                    That future is now, with our premier service dedicated to transforming your educational journey.
                    Our secret sauce? A relentless focus on Tangible Impact. We don't just aim to elevate your
                    grades; we're here to revolutionize the way you think, comprehend, and excel. With us, it's not
                    just about the immediate wins; it's about sculpting a brighter, smarter you. Dive in and let us
                    be the architects of your academic triumph—because your success is the true measure of ours.
                    Let's make greatness together.</p>
            </div>
        </section>
    </div>

</section>

<!-- Section mission about -->
<section class="bg-dark section-card-phases our-mission-about our-team ">
    <div class="heartbeat-heading d-flex justify-content-between align-items-center key-journey">
        <img src="{{ asset('fronted_final/assets/images/heart-line 1.png')}}" alt="heart-line 1" class="heartbeat-line start" />
        <div class="text-container flex-grow-1 text-center position-relative">
            <h1 class="heading">Our Team</h1>
        </div>
        <img src="{{ asset('fronted_final/assets/images/heart-line 2.png')}}" alt="heart-line 2" class="heartbeat-line end" />
    </div>

    <div class="container-lg my-2">
        <section class="section-skepticism mb-4 p-5 about-sec-team1 about-sec-3 pb-4 custom-padding">
            <div class="">
                <div class="heading-container text-center   ">
                    <h1 class="text-container text-white mb-3 d-content">The Team that Makes your <span class="yellow-text">Dream a Reality!</span>
                    </h1>
                </div>
                <p class="text-center">Welcome to a world where excellence is not just a goal, but our daily mantra.
                    At the heart of our operations lies a team of passionate professionals, each contributing their
                    unique skills to create an unmatched service experience. Imagine a place where every interaction
                    is met with a smile, every issue finds a resolution, and every piece of work surpasses the
                    highest standards of quality. That's the promise we deliver on, every day. Join us, and be part
                    of a journey where success is a collective achievement, and customer satisfaction is our most
                    precious reward.</p>
            </div>
        </section>
    </div>

</section>

<!-- Section mission about -->
<section class="bg-dark section-card-phases our-mission-about ">
    <div class="heartbeat-heading d-flex justify-content-between align-items-center key-journey">
        <img src="{{ asset('fronted_final/assets/images/heart-line 1.png')}}" alt="heart-line 1" class="heartbeat-line start" />
        <div class="text-container flex-grow-1 text-center position-relative">
            <h1 class="heading">Team Details</h1>
        </div>
        <img src="{{ asset('fronted_final/assets/images/heart-line 2.png')}}" alt="heart-line 2" class="heartbeat-line end" />
    </div>

    <div class="container-lg my-2">
        <section class="section-skepticism mb-4 p-5 about-sec-team1 pb-4 about-res-sec-1 custom-padding flex-row-rev">
            <div class="content-2">
                <div class="heading-container">
                    <h1 class="text-container-custom text-white mb-3 align-items-start">Forging Our Future -

                    </h1>
                    <h1 class="text-container-custom text-white d-content mb-3 align-items-start">Noah Eden's Strategic
                        <span class="yellow-text">Vision at Work!</span>
                    </h1>
                </div>
                <p>Under Noah Eden's strategic vision, our company is forging ahead, crafting a future where
                    innovation meets excellence. With over 7 years of groundbreaking success, our company has become
                    the gateway to innovative solutions that promise not only to meet but exceed your expectations.
                    Noah's strategic leadership and unwavering commitment to ethics and customer satisfaction have
                    established us as the go-to entity in the digital domain. Dive into a world where cutting-edge
                    innovation and ethical practices merge, creating unparalleled value for our clients. Let us lead
                    you into a new era of online service excellence, where your success is our passion.</p>
            </div>
            <div class="image-container-2 d-flex justify-content-center">
                <div class="">
                    <div class="team-img">
                        <img src="{{ asset('fronted_final/assets/images/team-member-1.jpg')}}" alt="">

                    </div>
                </div>
            </div>
        </section>

        <section class="section-skepticism mb-4 p-5 about-sec-team2 pb-4 about-res-sec-1 custom-padding flex-row-rev">
            <div class="content-2">
                <div class="heading-container">
                    <h1 class="text-container-custom text-white mb-3 align-items-start">Driving Operational Excellence -
                    </h1>
                    <h1 class="text-container-custom text-white d-content mb-3 align-items-start">Sophia Martin
                        <span class="yellow-text">at the Helm!</span>
                    </h1>
                </div>
                <p>In Sophia Martin, our esteemed Operations Director, the company has discovered the backbone of its operational success. With her extensive engineering and operations management background, Sophia has been pivotal in enhancing our company's efficiency. Her expertise has refined our processes, optimizing performance and elevating productivity. Our journey under her leadership is marked by a relentless pursuit of excellence, ensuring that every aspect of our service delivery is seamless and surpasses industry standards. Experience our transformation, where operational challenges are met with innovative solutions, propelling us toward unmatched success. Join us in our continuous quest for operational perfection.</p>
            </div>
            <div class="image-container-2 d-flex justify-content-center">
                <div class="">
                    <div class="team-img">
                        <img src="{{ asset('fronted_final/assets/images/team-member-2.jpg')}}" alt="">

                    </div>
                </div>
            </div>
        </section>

        <section class="section-skepticism mb-4 p-5 about-sec-team3 pb-4 about-res-sec-1 custom-padding flex-row-rev">
            <div class="content-2">
                <div class="heading-container">
                    <h1 class="text-container-custom text-white mb-3 align-items-start">Revolutionizing Digital Branding -
                    </h1>
                    <h1 class="text-container-custom text-white d-content mb-3 align-items-start">Liam Robertson's
                        <span class="yellow-text">Strategic Mastery!</span>
                    </h1>
                </div>
                <p>We’ve elevated our brand narrative with the strategic genius of Liam Robertson, our distinguished Marketing Director. With his wealth of experience in digital marketing and brand strategy, Liam has been instrumental in turning our company's marketing initiatives into compelling stories of engagement and sustained customer loyalty. Under his guidance, we blend creativity with strategy, setting new benchmarks in the online services market. Join us on this transformative journey, where innovation is our standard, and the future of our brand shines with endless possibilities.</p>
            </div>
            <div class="image-container-2 d-flex justify-content-center">
                <div class="">
                    <div class="team-img">
                        <img src="{{ asset('fronted_final/assets/images/team-member-3.jpg')}}" alt="">

                    </div>
                </div>
            </div>
        </section>

        <section class="section-skepticism mb-4 p-5 about-sec-team4 pb-4 about-res-sec-1 custom-padding flex-row-rev">
            <div class="content-2">
                <div class="heading-container">
                    <h1 class="text-container-custom text-white mb-3 align-items-start">Crafting the Future -
                    </h1>
                    <h1 class="text-container-custom text-white d-content mb-3 align-items-start">Elena Vásquez's Design
                        <span class="yellow-text">Ingenuity!</span>
                    </h1>
                </div>
                <p>Our business has experienced the pinnacle of innovation under the guidance of Elena Vásquez, our Product Development Manager. Elena's expertise in transforming visionary ideas into essential online services has set our company apart. Her approach to product development—merging superior user experience with practical design—ensures our offerings lead the market and redefine industry standards. Bilingual in English and Spanish, Elena adeptly caters to our diverse clientele, surpassing expectations with each project. Join us in embracing the exceptional, where quality and innovation converge to create unparalleled success. Your path to excellence begins with our transformative solutions.</p>
            </div>
            <div class="image-container-2 d-flex justify-content-center">
                <div class="">
                    <div class="team-img">
                        <img src="{{ asset('fronted_final/assets/images/team-member-4.jpg')}}" alt="">

                    </div>
                </div>
            </div>
        </section>

        <section class="section-skepticism mb-4 p-5 about-sec-team5 pb-4 about-res-sec-1 custom-padding flex-row-rev">
            <div class="content-2">
                <div class="heading-container">
                    <h1 class="text-container-custom text-white mb-3 align-items-start">Elevating Service Excellence -
                    </h1>
                    <h1 class="text-container-custom text-white d-content mb-3 align-items-start">Jessica Nguyen's <span class="yellow-text">Visionary Leadership!</span>
                    </h1>
                </div>
                <p>We have successfully stepped into the realm of unmatched customer service excellence under the stewardship of Jessica Nguyen, our esteemed Customer Support Manager. With more than eight years of dedicated experience, Jessica has redefined customer support, blending empathy, exceptional problem-solving skills, and a relentless pursuit of service perfection. Her leadership has established our team as a benchmark for customer relations excellence. Proficient in English and Vietnamese, Jessica brings linguistic versatility and cultural sensitivity to our global client interactions. With us, every customer experience is transformed into an odyssey of satisfaction and unwavering loyalty.</p>
            </div>
            <div class="image-container-2 d-flex justify-content-center">
                <div class="">
                    <div class="team-img">
                        <img src="{{ asset('fronted_final/assets/images/team-member-5.jpg')}}" alt="">

                    </div>
                </div>
            </div>
        </section>

        <section class="section-skepticism mb-4 p-5 about-sec-team6 pb-4 about-res-sec-1 custom-padding flex-row-rev">
            <div class="content-2">
                <div class="heading-container">
                    <h1 class="text-container-custom text-white mb-3 align-items-start">Redefining Excellence -
                    </h1>
                    <h1 class="text-container-custom text-white d-content mb-3 align-items-start">Michael Clark's Quality <span class="yellow-text">Assurance Mastery!</span>
                    </h1>
                </div>
                <p>The company has embraced a new standard of excellence and service quality with the expert oversight of Michael Clark, our dedicated Quality Assurance Coordinator. Michael's leadership transcends traditional quality assurance, turning superior quality into a consistent reality for our company. Grounded in stringent testing and a steadfast dedication to surpassing industry standards, our services are not just satisfactory—they set new benchmarks for excellence. Experience a synergy of innovation and perfection, where Michael's project management acumen ensures flawless execution in every aspect. With us, quality is not just an objective; it is a steadfast promise.</p>
            </div>
            <div class="image-container-2 d-flex justify-content-center">
                <div class="">
                    <div class="team-img">
                        <img src="{{ asset('fronted_final/assets/images/team-member-6.jpg')}}" alt="">

                    </div>
                </div>
            </div>
        </section>

        <section class="section-skepticism mb-4 p-5 about-sec-team7 pb-4 about-res-sec-1 custom-padding flex-row-rev">
            <div class="content-2">
                <div class="heading-container">
                    <h1 class="text-container-custom text-white mb-3 align-items-start">Securing Tomorrow -
                    </h1>
                    <h1 class="text-container-custom text-white d-content mb-3 align-items-start">Ayesha Khan Visionary <span class="yellow-text">IT Leadership!</span>
                    </h1>
                </div>
                <p>We have embarked on a journey to the forefront of IT innovation and cybersecurity with Ayesha Khan, our esteemed Head of IT and Security. With a rich background spanning over a decade, Ayesha's strategic foresight ensures our systems are not merely up-to-date but also future-proof, offering unparalleled protection against emerging cyber threats. Our proactive approach to technology places us at the vanguard, offering dependable and advanced solutions that endure over time and challenge. With Ayesha at the helm, we merge cutting-edge innovation with robust security, providing a foundation of technological excellence and peace of mind.</p>
            </div>
            <div class="image-container-2 d-flex justify-content-center">
                <div class="">
                    <div class="team-img">
                        <img src="{{ asset('fronted_final/assets/images/team-member-7.jpg')}}" alt="">

                    </div>
                </div>
            </div>
        </section>

        <section class="section-skepticism mb-4 p-5 about-sec-team8 pb-4 about-res-sec-1 custom-padding flex-row-rev">
            <div class="content-2">
                <div class="heading-container">
                    <h1 class="text-container-custom text-white mb-3 align-items-start">Crafting Careers, Cultivating Culture -
                    </h1>
                    <h1 class="text-container-custom text-white d-content mb-3 align-items-start">Carlos Gomez's <span class="yellow-text">HR Excellence!</span>
                    </h1>
                </div>
                <p>Writing Space has ventured into an environment where professional aspirations align with organizational success, orchestrated by Carlos Gomez, our innovative Human Resources Director. Carlos's expertise in talent management, coupled with a profound dedication to nurturing company culture, propels our business to unprecedented levels of achievement and workplace satisfaction. Envision a dynamic and supportive workplace, shaped by the latest in psychological and HR methodologies, all masterminded by Carlos. Here, the focus extends beyond mere employment to fostering thriving careers and a vibrant company ethos. Step into a future where each day contributes to realizing your professional dreams and shaping a thriving workplace culture.</p>
            </div>
            <div class="image-container-2 d-flex justify-content-center">
                <div class="">
                    <div class="team-img">
                        <img src="{{ asset('fronted_final/assets/images/team-member-8.jpg')}}" alt="">

                    </div>
                </div>
            </div>
        </section>

     
        <div class="text-center p-4">
 
                               
            <a href="{{ route('customer.customerPlaceOrder') }}" class="gradient-btn border-0 text-decoration-none btn-custom-width">Order Now</a>
                           
          



        </div>
    </div>

</section>


<!-- Section FAQs -->
<section class="bg-dark section-card-phases pt-0">
    <div class="heartbeat-heading d-flex justify-content-between align-items-center key-journey">
        <img src="{{ asset('fronted_final/assets/images/heart-line 1.png')}}" alt="heart-line 1" class="heartbeat-line start" />
        <div class="text-container flex-grow-1 text-center position-relative">
            <h1 class="heading text-white">Frequently Asked Questions</h1>
            <div class="position-absolute sub-text1 w-100 d-flex justify-content-center">
                <span class="main-text text-purple ">(FAQs)</span>
            </div>
        </div>
        <img src="{{ asset('fronted_final/assets/images/heart-line 2.png')}}" alt="heart-line 2" class="heartbeat-line end" />
    </div>


    <div class="container-lg my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10">
                <div class="accordion accordion-flush" id="accordionExample">

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            1.	What is the mission of your company?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse " data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            Our mission is to empower academic excellence through innovative, ethical support services. We provide students with tools and resources that promote their academic and professional growth.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            2.	What values guide your company's operations?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            Integrity, innovation, and impact guide our operations. We commit to ethical practices, continuously push for innovative solutions, and aim to make a positive impact on our users' academic lives.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            3.	Can you tell me more about the founders of your company?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            Our founders are educators and technologists who saw a need for ethical, quality academic support services. They brought together their expertise to create a platform that upholds academic integrity while enhancing learning.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            4.	What makes your team qualified to provide academic services?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse " data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            Our team comprises experienced professionals from various academic fields, all holding advanced degrees and having a deep understanding of the educational needs and challenges students face today.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            5.	How do you ensure your team remains at the forefront of educational innovation?
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            We invest in continuous training and development, staying abreast of the latest educational technologies and methodologies to ensure our services remain cutting-edge and effective.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            6.	What impact has your service had on the educational community?
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            We've helped thousands of students achieve their academic goals, improve their writing skills, and gain a deeper understanding of their subjects, as evidenced by user feedback and improved academic outcomes.

                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                            7.	How does your company contribute to ethical academic practices? 
                            </button>
                        </h2>
                        <div id="collapseSeven" class="accordion-collapse collapse " data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            We advocate for and practice strict adherence to academic integrity, provide educational resources on proper citation and research techniques, and ensure all our services support students' educational development without compromising ethical standards.    
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                            8.	How can I trust the quality of your services based on your company information?
                            </button>
                        </h2>
                        <div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            Our commitment to quality is reflected in our transparent processes, customer feedback, and continuous improvement based on rigorous standards and user insights.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                            9.	What are the future goals for your company?
                            </button>
                        </h2>
                        <div id="collapseNine" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            We aim to expand our reach to assist more students globally, develop new tools that integrate AI and learning analytics, and continue to champion ethical academic support.

                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                            10.	How does your company handle customer feedback?
                            </button>
                        </h2>
                        <div id="collapseTen" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            We actively encourage and value customer feedback, using it to refine our services and customer experience. Regular reviews and adjustments are made in response to the insights we gather.
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="d-flex justify-content-center align-items-center mt-5">


               
                               
                <a href="{{ route('customer.customerPlaceOrder') }}" class="gradient-btn border-0 text-decoration-none btn-custom-width">Order Now</a>
                               
         

                
                <a href="{{ route('front.faq') }}" class="gradient-btn border-0 text-decoration-none btn-custom-width ms-2">Learn more</a>
            </div>
        </div>
    </div>

    @endsection