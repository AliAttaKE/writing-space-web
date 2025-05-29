@extends('frontend_final.Layout.masters')
@section('content')

<style>
	body {
		font-family: Arial, sans-serif;
		line-height: 1.6;
		
		color: white; /* Text color set to white */
		background-color: black; /* Background color set to black */
	}
	h1, h2, h3 {
		color: white; /* Ensure headings are also white */
	}
	a {
		color: #007BFF;
		text-decoration: none;
	}
	a:hover {
		text-decoration: underline;
	}
	ul {
		list-style-type: disc;
		margin-left: 20px;
	}
    .new_padding{
        padding-inline:50px;
        padding-bottom: 50px;
    }
</style>
<body>
    

<section class="bg-dark section-card-phases faqs-accpomt-setup-sec-1">
    <div class="new_padding">
	<h1 class="text-center my-4">Copyright Policy</h1>

    <h2>Writing Space Copyright Principles</h2>
   <p>Writing Space publishes a substantial proportion of user-uploaded and user-generated written content with the aim of helping students complete their coursework through example. These principles are designed to promote an online environment that upholds the promises and benefits of Writing Space's services while protecting the rights of copyright owners.</p>
   <h2>Our Copyright Goals</h2>
    <ul>
        <li>The complete elimination of infringing content on Writing Space and all related services.</li>
        <li>The active encouragement of wholly original and authorized user-generated written content.</li>
        <li>The accommodation of fair use of copyrighted content on Writing Space.</li>
        <li>The protection of legitimate interests of user privacy.</li>
    </ul>

    <h2>Copyright Protection Measures</h2>
    <p>Writing Space implements multiple safeguards to protect intellectual property:</p>
    <h2>1. Educational Notices</h2>
    <p>We prominently display information about intellectual property rights throughout our platform, particularly in areas where users upload content. This includes clear warnings against copyright infringement.</p>
    <h2>2. Upload Process Safeguards</h2>
    <p>During the upload process, we require users to affirm that:</p>
        <ul>
            <li>Their content does not infringe any copyrights</li>
            <li>They have all necessary rights to share the material</li>
            <li>The upload complies with our Terms of Service</li>
        </ul>
        <h2>3. Prohibited Content</h2>
        <p>Our Terms of Service explicitly prohibit the upload of infringing materials. Violations may result in immediate content removal and account suspension.</p>
        <h2>4. Content Identification Technology</h2>
        <p>We conduct automated monthly scans using advanced content recognition systems to identify potential copyright violations. This supplements our manual review processes.</p>
        <h2>5. User-Facing Verification</h2>
        <p>All user-generated content undergoes plagiarism screening using Turnitin and AI-enhanced detection systems. Customers receive a plagiarism verification report with every delivered paper, confirming compliance with academic integrity standards. If Turnitin is unavailable, equivalent reports from certified alternatives (e.g., Grammarly Plagiarism Checker) are provided.</p>
        <h2>Copyright Claim Process</h2>
        Copyright owners may submit notices of infringement to  <a href="mailto:copyright-infringement@writing-space.com">copyright-infringement@writing-space.com</a>. Effective notices must include:
        <ul>
            <li>The specific URL(s) where infringing content appears</li>
            <li>Proof of copyright ownership</li>
            <li>Sufficient detail to verify the claim</li>          
        </ul>
        <h2>Our Response Protocol</h2>
        <p>Upon receiving a valid notice, Writing Space will:</p>
        <ol>
            <li>Acknowledge receipt within 10 business days</li>
            <li>Remove confirmed infringing content within 20 business days</li>
            <li>Notify the content uploader about the removal</li>
            <li>Confirm removal completion with the claimant (Removed content is retained in encrypted archives for 6 years post-removal to comply with legal dispute resolution requirements, as detailed in our Privacy Policy.)</li>
        </ol>
        <h2>Repeat Infringer Policy</h2>
        <p>We track copyright violations by user accounts. Any account with:</p>
        <ul>
            <li>2 or more confirmed violations within a 12-month period will be permanently terminated</li>
            <li>We maintain records of violations for 6 years to support this policy</li>
        </ul>
        <h2>Data Sharing Limitations</h2>
        <p>While cooperating with copyright owners, we:</p>
        <ul>
            <li>Only share anonymized or aggregated data unless legally required. Anonymization is performed as defined in our Privacy Policy</li>
            <li>Comply fully with all Data Protection Act requirements</li>
            <li>Never sell or commercially exploit copyright claim information</li>
        </ul>
        <h2>Fair Use Protection</h2>
        <p>We respect legitimate fair use of copyrighted materials. Users may submit counter-notices with:</p>
        <ul>
            <li>Identification of the removed content</li>
            <li>A statement of good faith belief in lawful use</li>
            <li>Contact information for further discussion</li>
        </ul>
        <p>We utilize multiple plagiarism detection technologies, including Turnitin and AI-powered systems, to proactively identify and address potential infringements while respecting legitimate fair use.</p>
        <h2>Good Faith Cooperation</h2>
        <p>Writing Space requests that copyright owners recognize our good faith efforts to maintain a lawful platform. When we demonstrate compliance with these principles, we ask that copyright owners not assert claims against Writing Space for any remaining infringing content that evades detection despite our reasonable safeguards.</p>
        <h2>Policy Maintenance</h2>
        <p>We regularly review and update these principles to ensure they remain effective while balancing:</p>
        <ul>
            <li>Copyright protection obligations</li>
            <li>User privacy rights</li>
            <li>Educational access needs</li>
        </ul>
        <p>This policy works in conjunction with our Terms of Service and Privacy Policy to create a comprehensive framework for intellectual property protection on our platform.</p>
</div>
</section>
</body>


    @endsection