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
    

<section class="bg-dark section-card-phases faqs-accpomt-setup-sec-1 new_padding" >
    <div class="new_padding">
       
	<h1>Cookie Policy</h1>

    <h2>About This Cookie Policy</h2>
    <p>This Cookie Policy applies to Writing Space ("the Website"). This Cookie Policy forms part of and is incorporated into our Website Terms and Conditions and Privacy Policy. By accessing the Website and/or the web app, you agree that this Cookie Policy will apply whenever you access the Website on any device.</p>

    <h2>What Is a Cookie?</h2>
    <p>Cookies are text files that identify your computer (through what is known as an IP address) to our server.</p>
    <p>We use cookies to help identify your computer so we can tailor your user experience, and to remember that you are logged in and that your session is secure. You can disable any cookies already stored on your computer, but these may stop our website from functioning properly.</p>
    <p>Most internet browsers will accept cookies automatically, but you can change the settings of your browser to control what cookies (if any) are stored. The following links explain how to change cookie settings in your browser:</p>
    <ul>
        <li><a href="#" >Firefox</a></li>
        <li><a href="#" >Internet Explorer</a></li>
        <li><a href="#" >Chrome</a></li>
        <li><a href="#" >Safari OS X</a></li>
        <li><a href="#" >Opera</a></li>
        <li><a href="#">Safari iOS</a></li>
        <li><a href="#" >Android</a></li>
    </ul>

    <h2>What Cookies We Use</h2>
    <p>We use different types of cookies on the website to perform various functions to enhance and improve your experience with us. We use four types of cookies: strictly necessary cookies, performance cookies, functionality cookies, and targeting/advertising cookies.</p>
    <p>A cookie may also be first party or third party. A first party cookie is one that our website will set on your computer. Third party cookies are those that have been set by another provider on another website but continue to function and track information within our website.</p>

    <h3>Strictly Necessary Cookies</h3>
    <p>Strictly necessary cookies are those that are required for the website or web app to function. Without these, the website could not perform essential functions.</p>

    <h3>Performance Cookies</h3>
    <p>These cookies collect information about how you use our website. For example, they track which pages users visit, how long they spend on page, and more.</p>
    <p>We use Google Analytics to track visitors to the website and collect general (total) numbers about visits and page usage. You can opt out of Google Analytics anytime you like via Google</p>

    <h3>Functionality Cookies</h3>
    <p>These cookies allow the website to remember certain choices you have made, or are used to provide additional services such as live chat.</p>
    <p>We use Google Analytics to identify repeat visitors to the website, along with your location, to serve you content depending on these factors. For example, if you are accessing the web app for the first time, we will show you introductory messages to help you get familiar with how to use the app. We may also show different content (or offer alternative languages) on the website depending on your location.</p>

    <h3>Targeting/Advertising Cookies</h3>
    <p>These cookies are used to deliver advertisements that are more relevant to you and your interests. They are also used to limit the number of times you see an advertisement and help measure the effectiveness of advertising campaigns.</p>
</div>
</section>
</body>


    

    @endsection