@extends('frontend_final.Layout.masters')
@section('content')

<style>
    body {
        font-family: Arial, sans-serif;
        line-height: 1.6;
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
    .new_padding{
        padding-inline:50px;
        padding-bottom: 50px;
    }
</style>
<body>
    

<section class="bg-dark section-card-phases faqs-accpomt-setup-sec-1">
   <div class="new_padding">
    <h1 class="text-center">Privacy Policy</h1>

    <h2>Introduction</h2>
    <p>At Writing Space, we prioritize the protection of your personal information and are committed to maintaining transparency about how we collect, use, and safeguard your data. This Privacy Policy outlines our practices in detail, ensuring you understand your rights and our responsibilities when you engage with our academic services. By accessing or using our platform, you acknowledge and consent to the terms described herein.</p>

    <h3>Information We Collect</h3>
   <p>We collect personal information necessary to deliver our services effectively. When you create an account, we require your full name and a valid email address, which serves as your username. In your profile page, we encourage you to provide additional details, including your contact phone number and country among other details.
</p>
<p>To ensure the quality and accuracy of the work delivered, we retain all assignment details and files you upload. While we recommend removing personal data from uploaded materials, we anonymize content before sharing it with our writers. For large files, we utilize WeTransfer, a third-party service that automatically deletes files after 28 days.</p>
    <h3>How We Use Your Information</h3>
  <p>Your personal data enables us to process orders efficiently, facilitate communication between you and assigned writers, and provide continuous customer support. We use your contact details to send order updates, service notifications, and responses to inquiries.</p>
    <p>For users who opt into marketing communications, we utilize your email address and phone number to share promotional offers and service updates via Google Workspace (emails) and Twilio/Esendex (SMS).  </p>


    <h3>Data Security Measures</h3>
   <p>We implement rigorous security protocols to safeguard your information. All payment transactions are processed through Mastercard’s secure gateway, requiring a one-time passcode (OTP) sent to your registered mobile number for validation. This two-factor authentication ensures robust protection without storing complete payment card details.</p>
   <p>Our technical safeguards include end-to-end encryption for data transmissions, regular security audits, and strict access controls limiting sensitive information to authorized personnel. Financial records and transactional data are encrypted at rest, and we employ secure deletion methods to permanently erase data after retention periods expire.</p>

    <h2>Data Retention and Deletion</h2>
    <p>We retain personal information only as long as necessary to fulfill legal, operational, or contractual obligations. Active accounts are maintained indefinitely unless a deletion request is submitted. Accounts inactive for four years are archived, with all associated data permanently deleted after six years of inactivity.</p>
    <p>Financial records, including transaction histories and invoices, are retained for six years to comply with tax regulations. Cookie data retention periods align with these standards, with persistent cookies expiring after 6 years or upon account deletion. Legal disputes or investigations may require preserving relevant data—such as order details and communications—for six years post-resolution. These retention periods apply uniformly across all data categories, including copyrighted materials submitted through our platform.</p>

    <h2>Your Rights and Choices</h2>
    <p>You retain full control over your personal data. You may request access to the information we hold, including details about its processing and storage. Inaccuracies in your data can be corrected upon request, and you may demand deletion of unnecessary information, subject to legal exceptions.</p>
    <p>You may object to specific data processing activities, particularly direct marketing, and request temporary restrictions during disputes. Users in certain jurisdictions can obtain their data in a portable format for transfer to other services. To exercise these rights, contact our Data Protection Officer at <a href="mailto:support@writing-space.com">support@writing-space.com</a>. We commit to responding within 30 days, with complex cases requiring extended timelines communicated promptly.</p>

    <h2>Third-Party Data Sharing</h2>
    <p>We collaborate with trusted third-party providers to deliver our services effectively. Academic writers receive anonymized order details to protect your identity, while payment processors like Mastercard handle transactional data securely. Anonymization involves the permanent removal of all personally identifiable information (PII), including names, email addresses, and phone numbers, ensuring data cannot be traced back to individual users. Cloud storage providers, including Hostinger, safeguard your information with encryption and access controls.</p>
    
    <p>International data transfers involve jurisdictions with varying privacy laws. We ensure compliance through standardized contractual clauses and rigorous vendor assessments, guaranteeing equivalent protection levels regardless of location.</p>

    <h2>Cookies and Tracking Technologies</h2>
    
    <p>Our website uses essential cookies for core functionalities like session management and authentication, with login cookies persisting for 48 hours. Functional cookies remember language preferences and regional settings, while analytics tools like Google Analytics provide insights into user behavior and platform performance. You may manage cookie preferences through browser settings or our account dashboard tools.</p>
        <h2>Age Restrictions</h2>

    <p>Our services are exclusively available to users aged 13 and older. For users under 16 residing in the European Economic Area (EEA) or other jurisdictions requiring parental consent, we will request verifiable parental approval before processing personal data. Accounts found to violate this requirement will be suspended pending authorization. We do not knowingly collect data from individuals under 13 and will promptly terminate accounts found to violate this policy.</p>

    <h3>Policy Updates</h3>
    <p>We periodically revise this Privacy Policy to reflect evolving practices, technological advancements, or legal requirements. Material changes affecting your rights will be announced through website notices, with the updated policy effective immediately upon posting. Continued use of our services constitutes acceptance of revised terms.</p>
    <h2>Contact Information</h2>
    <p>For questions, concerns, or requests regarding this policy or your data, contact our Data Protection Officer at <a href="mailto:support@writing-space.com">support@writing-space.com</a>. We prioritize prompt and thorough resolution of all privacy-related inquiries.</p>

    <h2>Transfers to Countries Outside the US</h2>
    <p>Some of the third parties we use to process your data are based in countries that do not have the same standard of data protection laws that US citizens enjoy. In these cases, we have made sure there are safeguards in place to protect your rights and interests.</p>

   <p>This Privacy Policy underscores our unwavering commitment to protecting your personal information while delivering exceptional academic support services.</p>
</div>
</section>
</body>


    

    @endsection