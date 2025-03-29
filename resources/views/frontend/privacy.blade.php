@extends('frontend_final.Layout.masters')
@section('content')

<style>
    body {
        font-family: Arial, sans-serif;
        line-height: 1.6;
        margin: 20px;
        color: white; /* Text color set to white */
        background-color: black; /* Optional: Add a dark background for better visibility */
    }
    h1, h2 {
        color: white; /* Ensure headings are also white */
    }
    a {
        color: #007BFF;
        text-decoration: none;
    }
    a:hover {
        text-decoration: underline;
    }
</style>
<body>
    

<section class="bg-dark section-card-phases faqs-accpomt-setup-sec-1">
   
    <h1>Privacy Policy</h1>

    <h2>What We Do With Your Data</h2>
    <p>We will never sell your personal data for any reason, though sometimes it will be necessary to transfer your data to a third party to be processed. Your data is processed for certain specific reasons:</p>

    <h3>Essential Data</h3>
    <ul>
        <li>To create an online account so you can manage and download your orders, we generate a unique identifier and use your email address as a username.</li>
        <li>So that we can get in touch with you about your order, we need to know your name, email address, phone number, and any messages you have sent through your online account.</li>
        <li>On the order form, we ask for your country of study. This is because we are required to know the country in which you are downloading your order for VAT purposes.</li>
        <li>To process your order properly, we also need to keep details about the assignment you are asking us to complete as well as any files you have uploaded to your order. You should try to remove all personal data from anything you upload, but we will do our best to anonymize it before passing it on to our writers.</li>
        <li>Sometimes, when a file is too large to upload to our database, we will ask you to use a service called WeTransfer to send it to us. These files remain on WeTransfer's servers for 28 days, after which they are automatically deleted. You can read WeTransfer's privacy policy </li>
    </ul>

    <h3>Marketing</h3>
    <ul>
        <li>If you have explicitly consented to receive direct marketing from us, or if you have ordered from us in the past, we will sometimes use your name and email address to send you offers and promotions about the services we provide. We do this using a service called Google Workspace. You can read their privacy policy </li>
        <li>Similarly, we might also use your name and phone number to text you about offers and promotions that we are currently running. We do this using a service called Esendex or Twilio. You can read Esendex's privacy policy and Twilio's privacy policy</li>
        <li>We will only ever call you about an existing service you have asked us to provide or to talk about something important related to your account.</li>
    </ul>

    <h3>Other Purposes</h3>
    <ul>
        <li>Sometimes, we offer coupons to individual customers for use with future orders. To ensure only the intended recipient of the coupon can use it, we store their email address alongside the coupon details. These addresses are not used for anything other than the administration of coupons.</li>
        <li>When you place an order, our system stores your IP address. This address is used to work out your time zone so that we can call you during hours that are convenient for you. It is also used to identify when a customer is using multiple accounts to place their orders.</li>
        <li>For payments over a certain amount, we ask for documents to prove you are the registered account holder. This is so that we can prevent fraudulent transactions, such as people paying with stolen card details.</li>
        <li>In order to establish the facts in case of a legal dispute, we archive anything that might be relevant to the negotiation or performance of a contract (for example, messages or order instructions). Access to this archived data is strictly controlled so that only a few privileged employees can see it, and it is only ever used for the specific purpose of supporting a legal case. Some of this data may be shared with our legal counsel in the unlikely event of a dispute.</li>
    </ul>

    <h2>Cookies</h2>
    <p>Our websites set cookies in your browser to improve your experience and to make everything run smoothly. For more information, please read our <a href="#">cookie policy</a>.</p>

    <h2>We Do Not Sell Your Data</h2>
    <p>We will never sell your personal data to any other company for any reason. Your data is only ever given to third parties to be processed for the specific purposes given above.</p>

    <h2>Your Rights</h2>
    <p>By law, you have a number of rights available to you when you give us your personal data:</p>
    <ul>
        <li>You can ask for access to any of your personal data that we hold.</li>
        <li>You can ask us to correct any inaccuracies in your personal data.</li>
        <li>You can ask us to delete your personal data where there is no longer any good reason for us to have it.</li>
        <li>You can object to the processing of your data in some cases.</li>
        <li>Where you have given consent, you are able to withdraw that consent at any time.</li>
        <li>Under certain circumstances, such as if the data is material to legal proceedings, you can also ask us to temporarily stop processing your personal data.</li>
        <li>Where your data is automatically processed, you can also ask for a copy of your data in a machine-readable format.</li>
    </ul>
    <p>If you are not happy with how we have handled your personal data, you have the right to lodge a complaint. To exercise your rights, please send your request to our data protection officer at <a href="mailto:support@writing-space.com">support@writing-space.com</a>. After we have received proof of your identity, we will respond to your request within one calendar month.</p>

    <h2>How We Keep Your Data Safe</h2>
    <h3>Security Measures</h3>
    <p>We use a variety of technical and organizational measures to make sure your personal data is stored and transmitted securely. For example, we make diligent use of encryption whenever personal data is being transmitted to a third party, and we make regular backups in case the original copy of your data is lost. All of our core database functionality, including most of your personal data, is processed using Hostinger, a cloud computing provider.</p>
    <p>If you communicate with us by email over the Internet, you should be aware that the nature of the Internet is such that unencrypted communication may not be secure and may pass through several different countries en route to us. Please do not email us with confidential or sensitive information such as your credit card details. We cannot accept responsibility for unauthorized access to your information that is outside our control.</p>

    <h3>Data Retention Policy</h3>
    <p>We only hold on to your data for as long as we need it to fulfill one of the purposes it was originally collected for, such as to provide a service, to gather feedback, or to comply with a legal obligation. This means that retention policies for your data can differ considerably depending on the context and the way it is used. When deciding on a retention policy for any type of data, we use the following criteria:</p>
    <ul>
        <li>How long is the data needed for? - For example, if you have not logged in to your account for several years, we will remove you from our mailing lists.</li>
        <li>What did we say we would do with the data when we collected it? - If the purposes for which we originally collected the data are no longer relevant, there is no need to keep it.</li>
        <li>Do we have a legal obligation to keep the data? - For example, financial information needs to be kept for a minimum amount of time for tax reasons.</li>
        <li>Does holding the data carry an inherent risk? - In the unlikely event of a data breach, we want to ensure that nothing sensitive is stolen. We will therefore have reduced retention periods for data we consider to be sensitive.</li>
    </ul>
    <p>However, in general, we securely archive most of your account data after four years of inactivity (see 'Other purposes' above) and then permanently delete all of your personal data after six years of inactivity.</p>

    <h2>Transfers to Countries Outside the US</h2>
    <p>Some of the third parties we use to process your data are based in countries that do not have the same standard of data protection laws that US citizens enjoy. In these cases, we have made sure there are safeguards in place to protect your rights and interests.</p>

    <h2>Children</h2>
    <p>If you are 13 or under, you must have permission from a parent or guardian before you give us your personal information. If we find that we have received information from you without the appropriate consent, we reserve the right to cancel all transactions and services and remove all personal data that you have supplied. You will be able to re-submit the information when you have the required permission.</p>
    <p>Customers using the website who are minors/under the age of 18 shall not register as a User of the website and shall not transact on or use the website.</p>

    <h2>Links to Other Websites</h2>
    <p>Our websites may contain links to external third-party websites. We are not responsible for the privacy and security of these websites unless they belong to Writing Space. This privacy policy applies only to Writing Space.</p>

    <h2>Payment Data</h2>
    <p>All credit/debit card details and personally identifiable information will NOT be stored, sold, shared, rented, or leased to any third parties. Writing Space will not pass any debit/credit card details to third parties.</p>

    <h2>Changes to This Policy</h2>
    <p>The Website Policies and Terms & Conditions may be changed or updated occasionally to meet the requirements and standards. Therefore, Customers are encouraged to frequently visit these sections to be updated about the changes on the website. Modifications will be effective on the day they are posted.</p>

</section>
</body>


    

    @endsection