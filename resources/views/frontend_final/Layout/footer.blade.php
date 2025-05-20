<style>
    .footer {
    background-color: #0c0a10;
    padding-top: 40px;
    padding-bottom: 40px;
}

   .sitemap-dropdown {
    position: relative;
    display: inline-block;
}

.sitemap-content {
    display: none;
    position: absolute;
    background-color: #333;
    min-width: 600px; /* Increase width */
    padding: 15px;
    border-radius: 5px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    z-index: 1000;
    column-count: 3; /* Now split into 3 columns */
    column-gap: 30px;
    white-space: nowrap; /* Prevent text wrapping */

    /* Upar open hone ke liye */
    bottom: 100%;
    left: 0;
    transform: translateY(-10px);
    opacity: 0;
    transition: opacity 0.3s ease, transform 0.3s ease;
}

.sitemap-dropdown:hover .sitemap-content {
    display: block;
    opacity: 1;
    transform: translateY(0);
}

.sitemap-content a {
    color: white;
    text-decoration: none;
    display: block;
    padding: 5px 0;
    font-size: 14px;
}

.sitemap-content a:hover {
    text-decoration: underline;
}
</style>

<div class=" footer">
<div class="container">
        <div class="row justify-content-center">
                <div class="col-md-2">
                        <img src="{{ asset('fronted_final/assets/images/logo.png')}}" alt="logo" class="w-100" />


                </div>
                <div class="col-md-10 footer-anch footer-font">
                        <div class="row">
                                <div class="col-md-3">
                                        <ul class="list-unstyled">
                                                <li class="text-white text-white h2 fw-bold">Quick <span class="text-purple">Links</span></li>
                                                <li><a href="./" class="text-white fw-light text-decoration-none">Home</a>
                                                </li>
                                                <li><a href="./sample-paper" class="text-white fw-light text-decoration-none">Sample
                                                                Papers</a></li>
                                                <li><a href="./customer-journey" class="text-white fw-light text-decoration-none">Customer
                                                                Journey</a></li>
                                                <li><a href="./custom-order" class="text-white fw-light text-decoration-none">Custom
                                                                Order</a></li>
                                                <li><a href="./packages" class="text-white fw-light text-decoration-none">Packages</a>
                                                </li>
                                                <li><a href="./services-us" class="text-white fw-light text-decoration-none">Services</a>
                                                </li>
                                                <li><a href="./about-us" class="text-white fw-light text-decoration-none">About Us</a>
                                                </li>
                                                <li><a href="./contact-us" class="text-white fw-light text-decoration-none">Contact
                                                                Us</a>
                                                </li>
                                                <li><a href="./faq-us" class="text-white fw-light text-decoration-none">FAQs</a>
                                                </li>
                                                <!--<li><a href="./blog" class="text-white fw-light text-decoration-none">Blog</a>-->
                                                <!--</li>-->
                                        </ul>
                                </div>
                                <div class="col-md-9">
                                        <div class="row">
                                                <div class="col-md-4">
                                                        <ul class="list-unstyled">
                                                                <li class="text-white h2 fw-bold">Services</li>
                                                                <li><a href="./admission-essay" class="text-white fw-light text-decoration-none">Admission Essay</a>
                                                                </li>
                                                                <li><a href="./annotated-bibliography" class="text-white fw-light text-decoration-none">Annotated
                                                                                Bibliography</a>
                                                                </li>
                                                                <li><a href="./application-essay" class="text-white fw-light text-decoration-none">Application Essay</a></li>
                                                                <li><a href="./article-review" class="text-white fw-light text-decoration-none">Article
                                                                                Review</a></li>
                                                                <li><a href="./book-report" class="text-white fw-light text-decoration-none">Book Report</a>
                                                                </li>
                                                                <li><a href="./business-plan" class="text-white fw-light text-decoration-none">Business Plan</a>
                                                                </li>
                                                                <li><a href="./business-proposal" class="text-white fw-light text-decoration-none">Business Proposal</a>
                                                                </li>
                                                                <li><a href="./capstone-project" class="text-white fw-light text-decoration-none">Capstone Project</a>
                                                                </li>
                                                                <li><a href="./case-study" class="text-white fw-light text-decoration-none">Case Study</a>
                                                                </li>
                                                                <li><a href="./corporate" class="text-white fw-light text-decoration-none">Corporate</a>
                                                                </li>
                                                        </ul>
                                                </div>
                                                <div class="col-md-3">
                                                        <ul class="list-unstyled">
                                                                <li class="text-white h2 fw-bold invisible">Services</li>
                                                                <li><a href="./creative-writing" class="text-white fw-light text-decoration-none">Creative Writing</a>
                                                                </li>
                                                                <li><a href="./dissertation-or-thesis-complete" class="text-white fw-light text-decoration-none">Dissertation or Thesis Complete</a>
                                                                </li>
                                                                <li><a href="./journal-professional" class="text-white fw-light text-decoration-none">Journal Professional</a></li>
                                                                <li><a href="./marketing-plan" class="text-white fw-light text-decoration-none">Marketing Plan</a></li>
                                                                <li><a href="./multiple-chapters" class="text-white fw-light text-decoration-none">Multiple Chapters</a>
                                                                </li>
                                                                <li><a href="./only-the-conclusion-chapter" class="text-white fw-light text-decoration-none">Only the Conclusion Chapter</a>
                                                                </li>
                                                                <li><a href="./only-the-hypothesis-chapter" class="text-white fw-light text-decoration-none">Only the Hypothesis Chapter</a>
                                                                </li>
                                                                <li><a href="{{ route('front.introductionchapter') }}" class="text-white fw-light text-decoration-none">Only the Introduction Chapter</a>
                                                                </li>
                                                                <li><a href="./only-the-literature-review-chapter" class="text-white fw-light text-decoration-none">Only the Literature Review Chapter</a>
                                                                </li>
                                                                <li><a href="./only-the-methodology-chapter" class="text-white fw-light text-decoration-none">Only the Methodology Chapter</a>
                                                                </li>
                                                        </ul>
                                                </div>
                                                <div class="col-md-5">
                                                        <ul class="list-unstyled">
                                                                <li class="text-white h2 fw-bold  invisible">Services</li>
                                                                <li><a href="./peer-reviewed-journal" class="text-white fw-light text-decoration-none">Peer Reviewed Journal</a>
                                                                </li>
                                                                <li><a href="./poetry-art-analysis" class="text-white fw-light text-decoration-none">Poetry/Art Analysis</a>
                                                                </li>
                                                                <li><a href="./powerpoint-presentation" class="text-white fw-light text-decoration-none">PowerPoint Presentation</a></li>
                                                                <li><a href="./research-paper" class="text-white fw-light text-decoration-none">Research Paper</a></li>
                                                                <li><a href="./research-proposal" class="text-white fw-light text-decoration-none">Research Proposal</a>
                                                                </li>
                                                                <li><a href="./resume-crafting" class="text-white fw-light text-decoration-none">Resume Crafting</a>
                                                                </li>
                                                                <li><a href="./swot-analysis" class="text-white fw-light text-decoration-none">SWOT Analysis</a>
                                                                </li>
                                                                <li><a href="./tailor-made-essays" class="text-white fw-light text-decoration-none">Tailor-Made Essays</a>
                                                                </li>
                                                                <li><a href="./term-paper" class="text-white fw-light text-decoration-none">Term Paper</a>
                                                                </li>
                                                                <li><a href="./website-content" class="text-white fw-light text-decoration-none">Website Content</a>
                                                                </li>
                                                                <li><a href="./white-paper" class="text-white fw-light text-decoration-none">White Paper</a>
                                                                </li>
                                                        </ul>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </div>

                <div class="gradient-mask"></div>
        </div>
</div>
</div>
<div class="rectangle footer-anch">
        <div class="container">
                <div class="row">
                        <div class="col-md-6 d-flex justify-content-start">
                                <span class="copyright">©2024 Copyright. All Right Reserved</span>
                        </div>
                        <div class="col-md-6 d-flex justify-content-end footer-font">
                                <!--<div class="sitemap-dropdown">-->
                                <!--        <span class="copyright">-->
                                <!--            <a href="#" class="text-white fw-light text-decoration-none">Site Map</a>-->
                                <!--        </span>-->
                                <!--        <div class="sitemap-content">-->
                                <!--            <a href="./index.php">Home</a>-->
                                <!--            <a href="./samplepaper.php">Sample Papers</a>-->
                                <!--            <a href="./customer-journey.php">Customer Journey</a>-->
                                <!--            <a href="./custom-order.php">Custom Order</a>-->
                                <!--            <a href="./packages.php">Packages</a>-->
                                <!--            <a href="./services.php">Services</a>-->
                                <!--            <a href="./about-us.php">About Us</a>-->
                                <!--            <a href="./contactus.php">Contact Us</a>-->
                                <!--            <a href="./faqs-accpomt-setup.php">FAQs</a>-->
                                <!--            <a href="./admission-essay.php">Admission Essay</a>-->
                                <!--            <a href="./annotated-bibliography.php">Annotated Bibliography</a>-->
                                <!--            <a href="./application-essay.php">Application Essay</a>-->
                                <!--            <a href="./article-review.php">Article Review</a>-->
                                <!--            <a href="./book-report.php">Book Report</a>-->
                                <!--            <a href="./business-plan.php">Business Plan</a>-->
                                <!--            <a href="./business-proposal.php">Business Proposal</a>-->
                                <!--            <a href="./capstone-project.php">Capstone Project</a>-->
                                <!--            <a href="./case-study.php">Case Study</a>-->
                                <!--            <a href="./corporate.php">Corporate</a>-->
                                <!--            <a href="./creative-writing.php">Creative Writing</a>-->
                                <!--            <a href="./dissertation-or-thesis-complete.php">Dissertation or Thesis Complete</a>-->
                                <!--            <a href="./journal-professional.php">Journal Professional</a>-->
                                <!--            <a href="./marketing-plan.php">Marketing Plan</a>-->
                                <!--            <a href="./multiple-chapters.php">Multiple Chapters</a>-->
                                <!--            <a href="./only-the-conclusion-chapter.php">Only the Conclusion Chapter</a>-->
                                <!--            <a href="./only-the-hypothesis-chapter.php">Only the Hypothesis Chapter</a>-->
                                <!--            <a href="./only-the-introduction-chapter.php">Only the Introduction Chapter</a>-->
                                <!--            <a href="./only-the-literature-review-chapter.php">Only the Literature Review Chapter</a>-->
                                <!--            <a href="./only-the-methodology-chapter.php">Only the Methodology Chapter</a>-->
                                <!--            <a href="./peer-reviewed-journal.php">Peer Reviewed Journal</a>-->
                                <!--            <a href="./poetry-art-analysis.php">Poetry/Art Analysis</a>-->
                                <!--            <a href="./powerpoint-presentation.php">PowerPoint Presentation</a>-->
                                <!--            <a href="./research-paper.php">Research Paper</a>-->
                                <!--            <a href="./research-proposal.php">Research Proposal</a>-->
                                <!--            <a href="./resume-crafting.php">Resume Crafting</a>-->
                                <!--            <a href="./swot-analysis.php">SWOT Analysis</a>-->
                                <!--            <a href="./tailor-made-essays.php">Tailor-Made Essays</a>-->
                                <!--            <a href="./term-paper.php">Term Paper</a>-->
                                <!--            <a href="./website-content.php">Website Content</a>-->
                                <!--            <a href="./white-paper.php">White Paper</a>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                                                    <!-- <span class="copyright"><a href="{{ route('front.site.map') }}" class="text-white fw-light text-decoration-none">Site Map</a></span> -->

                                <!-- <span class="copyright px-2">|</span> -->
                                <span class="copyright"><a href="{{ route('front.terms.conditions') }}" class="text-white fw-light text-decoration-none">Terms & Conditions</a></span>
                                <span class="copyright px-2">|</span>
                                <span class="copyright"><a href="{{ route('front.cookie.policy') }}" class="text-white fw-light text-decoration-none">Cookie Policy</a></span>
                                <span class="copyright px-2">|</span>
                                <span class="copyright"><a href="{{ route('front.copyright') }}" class="text-white fw-light text-decoration-none">Copyright</a></span>
                                <span class="copyright px-2">|</span>
                                <span class="copyright"><a href="{{ route('front.privacy.policy') }}" class="text-white fw-light text-decoration-none">Privacy Policy</a></span>
                        </div>
                </div>
        </div>
</div>

</section>

<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
    async defer>
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="{{ asset('fronted_final/assets/js/custom.js')}}"></script>
</body>

</html>
