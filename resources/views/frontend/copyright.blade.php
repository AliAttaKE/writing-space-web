@extends('frontend_final.Layout.masters')
@section('content')

<style>
	body {
		font-family: Arial, sans-serif;
		line-height: 1.6;
		margin: 20px;
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
</style>
<body>
    

<section class="bg-dark section-card-phases faqs-accpomt-setup-sec-1">
	<h1>Copyright Policy</h1>

    <h2>Writing Space Copyright Principles</h2>
    <p>Writing Space publishes a substantial proportion of user-uploaded and user-generated written content with the aim of helping students to complete their coursework through example.</p>
    <p>These principles are designed to promote an online environment that upholds the promises and benefits of Writing Space's services and protects the rights of copyright owners.</p>
    <p>The following represent the goals of these principles:</p>
    <ul>
        <li>The elimination of infringing content on Writing Space and any related service.</li>
        <li>The encouragement of uploads of wholly original and authorized user-generated written content.</li>
        <li>The accommodation of fair use of copyrighted content on Writing Space.</li>
        <li>The protection of legitimate interests of user privacy.</li>
    </ul>

    <h2>Copyright Principles</h2>
    <ul>
        <li>Writing Space will include in relevant and conspicuous places information that promotes respect for intellectual property rights and discourages users from uploading infringing content.</li>
        <li>During the upload process, Writing Space will prominently inform users that they may not upload infringing content and that, by uploading content, they affirm that such uploading complies with Writing Space's terms of use.</li>
        <li>The terms of use for Writing Space will prohibit infringing uploads.</li>
        <li>Writing Space shall, from time to time, use content identification technology with the aim of identifying and eliminating from their services infringing user-uploaded written content.</li>
        <li>Writing Space will monitor a contact email address for copyright owners claiming infringement to make a complaint. This email address is <a href="mailto:copyright-infringement@writing-space.com">copyright-infringement@writing-space.com</a>. When sending a notice of infringement, copyright owners are requested to provide the URL identifying online locations where content that is the subject of notices of infringement is found.</li>
        <li>Upon receipt of a notice of infringement that contains sufficient detail for Writing Space to confirm that infringement has indeed taken place, Writing Space will:
            <ul>
                <li>Respond to the notice within 10 days of receipt of the notice.</li>
                <li>Remove the infringing content within 20 days of receipt of the notice.</li>
                <li>Take reasonable steps to notify the person who uploaded the content.</li>
                <li>Inform the person making the notice of infringement when the content has been removed.</li>
            </ul>
        </li>
        <li>Writing Space will use reasonable efforts to track infringing uploads of copyrighted content by the same user and when we become aware of a user who is repeatedly infringing the copyright of others, we will promptly terminate their account.</li>
        <li>Writing Space will provide information to help copyright owners take appropriate action against copyright infringers, so far as we are permitted to do so under the Data Protection Act.</li>
    </ul>

    <h2>Cooperation with Copyright Owners</h2>
    <p>Writing Space requests that if it can be shown that these principles have been adhered to in good faith, the copyright owner will not assert a claim of copyright infringement against Writing Space with respect to infringing user-uploaded content that might remain on the Writing Space website despite such adherence to these principles. A cooperative attitude will help us to create content-rich, valuable, and infringement-free service.</p>

</section>
</body>


    

    @endsection