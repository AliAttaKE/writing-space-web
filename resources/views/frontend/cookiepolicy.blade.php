@extends('frontend_final.Layout.masters')
@section('content')

<style>
	body {
		font-family: Arial, sans-serif;
		line-height: 1.6;

		color: white; /* Text color set to white */
		background-color: black; /* Background color set to black */
	}
	h1, h2, h4 {
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
    

<section class="bg-dark section-card-phases faqs-accpomt-setup-sec-1 new_padding" >
    <div class="new_padding">

	<h1 class="text-center my-4">Cookie Policy</h1>

    <h2>1. Introduction</h2>
    <p>This Cookie Policy explains how Writing Space ("we," "our," or "us") uses cookies and similar technologies on our website and web app. By continuing to use our services, you consent to our use of cookies as described below.</p>

    <h2>2. What Are Cookies?</h2>
    <p>Cookies are small text files that:</p>
 <ul>
    <li>Identify your device (using anonymized identifiers)</li>
    <li>Maintain secure and continuous user sessions</li>
    <li>Remember your preferences and settings</li>
 </ul>
    <p>Disabling cookies may impair core website functions.</p>
    <h2>3. Managing Cookies</h2>
    <p>Control cookies via these browser guides:</p>
    <ul>
        <li><a href="https://www.mozilla.org/en-US/privacy/websites/#user-choices" >Firefox</a></li>
        <li><a href="https://learn.microsoft.com/en-us/deployedge/microsoft-edge-policies" >Internet Explorer</a></li>
        <li><a href="https://privacysandbox.google.com/cookies/temporary-exceptions/chrome-enterprise" >Chrome</a></li>
        <li><a href="https://www.apple.com/legal/privacy/en-ww/cookies/" >Safari OS X</a></li>
        <li><a href="https://jobs.opera.com/cookie-policy" >Opera</a></li>
        <li><a href="https://www.apple.com/legal/privacy/en-ww/cookies/">Safari iOS</a></li>
    </ul>

    <h2>4. Cookie Types We Use</h2>
    <h4>A. Strictly Necessary Cookies</h4>
    <p>Essential for basic functionality:</p>
   <ul>
    <li>User authentication</li>
    <li>Shopping cart operations</li>
    <li>Fraud prevention</li>
   </ul>
    <h4>B. Performance Cookies</h4>
    <p>Collect anonymous usage data:</p>
   <ul>
    <li>Page visit statistics</li>
    <li>Feature engagement metrics</li>
    <li>Error monitoring</li>
   </ul>
    <h4>C. Functionality Cookies</h4>
    <p>Personalize your experience:</p>
   <ul>
    <li>Language/region preferences</li>
    <li>UI customization choices</li>
    <li>First-time user guidance</li>
   </ul>
    <h4>D. Marketing Cookies</h4>
    <p>Used for:</p>
   <ul>
    <li>Relevant promotional offers</li>
    <li>Personalized content recommendations</li>
   </ul>
   <style>
    td,th{
            padding-block: 20px;
    }
   </style>
<h2>5. Cookie Origins</h2>
<table class="w-100">
    <tbody class="">
        <tr class="border-bottom">
            <th>Type</th>
            <th>Description</th>
            <th>Examples</th>
        </tr>
        <tr class="border-bottom">
            <td>First-party</td>
            <td>Set by Writing Space</td>
            <td>Session management</td>
        </tr>
        <tr class="border-bottom py-3">
            <td>Third-Party</td>
            <td>Placed by trusted partners</td>
            <td>Google Analytics</td>
        </tr>
    </tbody>
</table>
    <h2 class="mt-5">6. Key Third-Party Services</h2>
    <p>Google Analytics:</p>
    <ul>
        <li>Anonymized visitor tracking</li>
    </ul>

   <h2>7. Data Retention</h2>
   <p>We align with privacy best practices:</p>
   <ul>
    <li>Session cookies: Expire when browser closes (non-login features)</li>
    <li>Authentication cookies: Persist for 48 hours after last activity</li>
    <li>Persistent cookies: Automatically delete after 6 years maximum or upon account deletion (whichever occurs first), aligning with our Privacy Policy’s inactivity-based retention rules.</li>
   </ul>
   <h2>8. Automatic Login Feature</h2>
   <p>For user convenience:</p>
   <ul>
    <li>Returning users remain logged in for 48 hours</li>
    <li>Expired sessions require re-authentication</li>
    <li>Clear cookies anytime via browser settings</li>
   </ul>
   <h2>9. Your Choices</h2>
   <p>You may:</p>
   <ul>
    <li>Use private browsing modes</li>
    <li>Manually delete cookies through browser settings</li>
   </ul>
    <h2>10. Policy Updates</h2>
    <p>We may update this Cookie Policy periodically to reflect changes in our practices or legal requirements. It is your responsibility to review this page regularly for updates. Continued use of our Service constitutes acceptance of any revisions.</p>
</div>
</section>
</body>
    @endsection