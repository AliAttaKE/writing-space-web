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
        <h1>Terms & Conditions</h1>

        <h2>Our Agreement to Act as Agency</h2>
        <p>Writing Space acts as an agent for qualified experts to sell original work to their customers. The Customer engages Writing Space (the "Agency") to locate an expert (the "Principal") in order to carry out research and/or assessment services (the "Work") for the Customer during the term of the agreement in accordance with these provisions.</p>
    
        <h3>Key Points:</h3>
        <ul>
            <li>The Principal authorizes the Agency to process various actions under this agreement on their behalf.</li>
            <li>The Agency is entitled to refuse any order at their discretion and in such cases will refund any payment made by the Customer in respect of that order.</li>
            <li>The prices and delivery times quoted on the Agency's website are illustrative. If an alternative price and/or delivery time offered to the Customer is unacceptable, the Agency will refund any payment made by the Customer in respect of that order.</li>
            <li>In the event that the Customer is not satisfied that the Work meets the quality standard they have ordered, the Customer will have the remedies available to them as set out in this agreement.</li>
            <li>The Customer is not permitted to make direct contact with the Principal outside of the portal given access to the customer and writer, as the Agency must remain an intermediary between both parties.</li>
        </ul>
    
        <h2>Term of Appointment</h2>
        <ul>
            <li>The appointment agreement between the Customer and the Agency (collectively the "Parties") shall commence once the Agency has received payment for the order and allocated the order to the Principal ("the Commencement Date").</li>
            <li>The Agreement will continue between the Parties until the time period allowed for amendments has expired, notwithstanding the subsisting clauses stated below, unless terminated sooner by either party in accordance with these provisions.</li>
            <li>The following clauses will succeed following termination of the agreement between the Parties: 6. (Personal Information and Data Protection), 8. (Amendments to Completed Orders), 13 (Copyright), 15-18 (Refunds and Promises), and 19.</li>
        </ul>
    
        <h2>Agency Services</h2>
        <ul>
            <li>In order to provide research and/or assessment services to fulfil the Customer's Order, the Agency will allocate a suitably qualified expert which it deems to hold appropriate levels of qualification and experience to undertake the Customer's Order.</li>
            <li>The Agency undertakes to exercise all reasonable skill and judgement in allocating a suitable expert, having regard to the available experts' qualifications, experience, and quality record with us, and to any available information the Agency has about the Customer's degree or course.</li>
            <li>Once the Agency has allocated an order to the Expert/Principal, the Customer acknowledges that the Order is binding and cannot be cancelled.</li>
            <li>If the Agency has accepted a deposit from the Customer, the Customer agrees that the balance outstanding will be paid to the Agency at least 24 hours prior to the date on which their Order is due. If the full balance outstanding is not paid to the Agency in accordance with this term, a delay in the delivery of the Customer's Work may result.</li>
        </ul>
    
        <h2>Co-operation</h2>
        <ul>
            <li>The Customer will give the Agency clear briefings and ensure that all the facts given about the Order are accurate.</li>
            <li>The Agency will co-operate fully with the Customer and use reasonable care and skill to make the Order provided as successful as is to be expected from a competent research agency. The Customer will help the Agency do this by making available to the Agency all relevant information at the beginning of the transaction and co-operating with the Agency throughout the transaction should the Principal require any further information or guidance.</li>
            <li>The Customer acknowledges that failure to provide such information or guidance during the course of the transaction may delay the delivery of their Work, and that the Agency will not be held responsible for any loss or damage caused as a result of such delay. In such cases, the 'Completion on Time Promise' will not apply.</li>
        </ul>
    
        <h2>Approvals and Authority</h2>
        <ul>
            <li>Where the Principal or the Agency requires confirmation of any particular detail, they will contact the Customer using the email address or telephone number provided by the Customer.</li>
            <li>The Customer acknowledges that the Agency may accept instructions received using these modes of contact and may reasonably assume that those instructions are generated from the Customer.</li>
        </ul>
    
        <h2>Personal Information and Data Protection</h2>
        <ul>
            <li>The Agency undertakes to collect, hold, and use all data provided by the Customer and the Principal in accordance with obligations under the General Data Protection Regulation (Reg EU 2016/679) ("GDPR") in the EU and Consumer Privacy Act (CPA) in the US.</li>
            <li>The Agency is the data controller for the purposes of GDPR and CPA in relation to any data shared between the Customer and Principal and the Agency assumes all responsibilities and obligations related to the role of data controller.</li>
            <li>The Principal is a data processor for the purposes of GDPR and CPA in relation to any Customer data shared with them and assumes all responsibilities and obligations related to the role of a data processor.</li>
            <li>Personal data is obtained, held, and processed for the purposes of processing payments, processing Orders at all stages, and communications that are opted into.</li>
            <li>The Agency operates a privacy policy which is available on the Agency's websites and a copy can be provided on request.</li>
        </ul>
    
        <h2>Changes to Work in Progress</h2>
        <ul>
            <li>The Customer may request changes to their Order specification after the Order has been assigned to an expert, but these changes are subject to agreement with the Principal. Requests for changes to the Order specification are not confirmed unless, and until, they have been agreed to by the Principal.</li>
            <li>The Customer may provide the Principal with additional supporting information shortly after the Commencement Date, provided that this does not add to or conflict with the details contained in their original Order specification.</li>
            <li>If the Customer provides additional information or instruction after an order has been allocated to the Principal, and this does conflict with the details contained in the original Order specification, the Principal may request an additional cost to cover any extra time needed to adapt to the new Order specifications. Any additional costs will be negotiated on behalf of the Principal by the Agency and the Customer can choose whether to proceed with the change to the Order specification for the final quoted cost. The Customer understands that this may result in a delay in the delivery of their Work for which the Principal/Agency will not be held responsible.</li>
            <li>In instances where a change in Order specification takes place during the progress of an Order, the delivery date may be changed at the discretion of the Agency on behalf of the Principal. Any change in the delivery date will be reasonable and based on all the circumstances. Under these circumstances, the 'Completion on Time' Promise will not be applicable.</li>
        </ul>
    
        <h2>Amendments to Completed Orders</h2>
        <ul>
            <li>The Agency agrees that if the Customer believes that their completed Work does not meet the Order specification and/or the promises of the Principal as set out on the Agency website, the Customer may request amendments to the Work within 7 days of the delivery date, or longer if they have specifically paid to extend the amendments period. Such amendments will be made free of charge to the Customer.</li>
            <li>The Customer is permitted to make one request, via the Customer Control Panel, containing all details of the required amendments. This will be sent to the Principal for comment.</li>
            <li>If the Principal does not agree with the Customer's request, they will be given the opportunity to comment on it. In the event that agreement cannot be reached between Principal and Customer regarding the amendments, the Agency will assess the dispute and their decision will be final. They may, at their discretion, refer the matter to a different expert for assessment, in which case the decision of that expert will be binding on both parties.</li>
            <li>If the Principal fails to comply fully with the Customer's reasonable request for amendments, the Customer is permitted to request again that the Work is amended until the request has been fully dealt with.</li>
            <li>If the request to amend the Work falls outside of the time allowed for amendments, or if the Customer asks for amendments that do not relate to their original Order specification, the Principal at their discretion may offer a quote for the completion of the changes or additional work, and the Customer may choose whether or not to accept this. The Customer acknowledges that they may be required to make payment for such changes prior to the additional work being commenced.</li>
        </ul>
    
        <h2>Fees</h2>
        <ul>
            <li>The Agency's commission charges for their services, the Principal's charges for their services are shown as an aggregate amount on the Agency's website.</li>
            <li>If the Customer should require their Work to be amended in such a way that is inconsistent with their original Order specification, such amendments will be put to the Principal, who may set their own rate for completing them and the Agency's fee will then be calculated proportionate to that fee.</li>
        </ul>
    
        <h2>Terms of Payment</h2>
        <ul>
            <li>Unless payment is taken at the time of placing an order, once the Agency has found a suitably qualified and experienced expert to undertake the Customer's order, they will contact the Customer by email to take payment.</li>
            <li>If, at their discretion, the Agency accepts a deposit rather than the full value of the Order, the Customer acknowledges that the full balance will remain outstanding at all times and will be paid to the Agency before the delivery date for the Work.</li>
            <li>The Customer agrees that once an Order is paid for then the expert allocated by the Agency begins work on that Order, and that the Order may not be cancelled or refunded. Until payment or a deposit has been made and the Order has been allocated to an expert, the Customer may choose to continue with the Order or to cancel the Order at any time.</li>
            <li>The Customer agrees to be bound by the Agency's refund policies and acknowledges that due to the highly specialized and individual nature of the services that full refunds will only be given in the circumstances outlined in these terms, or other circumstances that occur, in which event any refund or discount is given at the sole discretion of the Agency.</li>
            <li>Visa, American or MasterCard debit and credit cards in USD will be accepted for payment.</li>
            <li>Cardholder must retain a copy of transaction records and Merchant policies and rules.</li>
            <li>User is responsible for maintaining the confidentiality of his account.</li>
            <li>Once the payment is made, the confirmation notice will be sent to the Customer via email within 24 hours of receipt of payment.</li>
            <li>These terms must be read subject to the 'Payment Up Front' terms (Section 12 of this Agreement).</li>
        </ul>
    
        <h2>Payment Up Front</h2>
        <ul>
            <li>The Customer will be invited to pay for their order in advance of the Agency formally securing an expert to complete the Work.</li>
            <li>The Customer acknowledges that where payment has been made in advance of securing an expert, the Agency cannot guarantee that they will secure a suitable available expert to complete the Work.</li>
            <li>In the event that the Customer makes a payment in advance and the Agency cannot secure an expert to complete the Work, the Agency will offer the Customer a full refund of the payment made in advance.</li>
        </ul>
    
        <h2>Copyright and Fair Usage</h2>
        <ul>
            <li>The Customer acknowledges that they do not obtain the copyright to the Work supplied through the Agency's services and at all times, copyright remains with the Principal.</li>
            <li>The Customer acquires an exclusive license, by assignment by the Principal, to own a copy of the Work for academic purposes to use as an example/model answer (where such usage is permitted in their relevant jurisdiction(s)). The Customer does not acquire the copyright or the rights to submit the Work, in whole, or in part, as their own. In addition, the Customer undertakes not to carry out any unauthorized distribution, display, or resale of the Work and the Customer agrees to handle the Work in a way that fully respects the fact that the Customer does not hold the copyright to the Work.</li>
            <li>The Customer is not permitted to pass the Work off as their own, as they do not hold the copyright to the Work and this is a violation of the terms of use.</li>
            <li>The Agency displays the Fair Use Policy on its website and the Customer agrees to read, understand and follow the Fair Use Policy (to the extent that such usage is permitted in their relevant jurisdiction(s)) as a condition of using the service.</li>
            <li>The Customer agrees that if they hand in the Work supplied by the Principal as their own, either in whole or in part, that they are in breach of copyright and that they will automatically forfeit all of their rights under these terms and conditions. Any further remedy following such instances is entirely at the discretion of the Agency.</li>
            <li>The Customer acknowledges that the Agency, its employees and the experts do not support or condone plagiarism, and that the Agency reserves the right to refuse supply of services to those suspected of such behaviour. The Customer accepts that the Agency offers a service that locates suitably qualified experts for the provision of independent personalized research services in order to help students learn and to advance educational standards.</li>
            <li>The Customer acknowledges that if the Agency suspects that materials are being used in violation of the above rules then the Agency has the right to refuse to facilitate or process further work for the person or organization involved and the Agency bears no liability for any such undetected and/or unauthorized use.</li>
            <li>The Agency agrees that all Work supplied through its service will not be resold, or distributed, for remuneration or otherwise after its completion. The Agency also undertakes that Work will not be placed on any website or essay bank after it has been completed. The Principal agrees to never publish, resell, share or otherwise redistribute any Work that has been submitted and/or sold through the Agency.</li>
            <li>The Customer warrants to the Agency that the Work supplied by the Agency will only be used for purposes that are legal in all jurisdictions relevant to the supply and use of the Work. The Customer further agrees to fully indemnify the Agency from and against all and any liability, claims, loss, damages, costs and expenses suffered and all fines, compensation or remedial action or payments imposed on the Agency and/or its employees or subcontractors arising from the Customer's use of the Work.</li>
        </ul>
    
        <h2>Final Mark Awarded</h2>
        <ul>
            <li>The Customer agrees that the quality standard that is ordered is not a guarantee of the mark they will receive when submitting their own piece of work, nor any guarantee of the Customer's final degree mark.</li>
        </ul>
    
        <h2>Refunds</h2>
        <ul>
            <li>The Agency is authorized by the Principal to investigate, process and adjudicate refund requests under the main Promises detailed at Clauses 16-18 of this agreement.</li>
            <li>The Agency is authorized by the Principal to investigate, process and adjudicate refund requests for any other reason for which the Customer feels that the Principal has not met their obligations under this agreement and as part of the Order specifications.</li>
            <li>The Agency undertakes to process such requests in compliance with existing consumer protection legislation and contractual principles. The Agency undertakes to reach a fair resolution in all circumstances, taking into account fairness to both the Customer and the Principal.</li>
            <li>If the Agency agrees to refund the Customer in full or part, refunds will be done only through the Original Mode of Payment. Please allow for up to 45 days for the refund transfer to be completed. If the Customer deposited the fee directly into the Agency's bank account, the Agency will offer the Customer a choice of refund via bank transfer or credit towards a future order. All refunds are made at the discretion of the Agency.</li>
        </ul>
    
        <h2>Delivery - "Completion on Time Promise"</h2>
        <ul>
            <li>The Agency agrees to facilitate delivery of all Work before midnight on the due date, unless the due date falls on a Bank Holiday, Christmas Day, Boxing Day or New Year's Day ("a Non-Working Day"), in which case the Work will be delivered the following day before midnight.</li>
            <li>On occasion, the Agency may deem further days to be Non-Working Days for the purposes of 16.1 above. These will be communicated by placing a notice on the service website.</li>
            <li>The Agency undertakes that all Work will be completed by the Principal on time or they will refund the Customer's money in full and deliver their Work for free.</li>
            <li>The relevant due date for the purposes of this promise is the Customer due date that is set on the Order. This is initially set when the Order is allocated to the Principal.</li>
            <li>Where a variation to the relevant due date is agreed between the Agency and the Customer, the Completion on Time Promise applies to the rearranged Customer due date.</li>
            <li>The Agency will not be held liable under this promise for any lateness due to technical problems that may arise due to third parties or otherwise, including, but not limited to issues caused by Internet Service Providers, Mail Account Providers, Database Software, Incompatible Formats and Hosting Providers.</li>
            <li>The Agency undertakes that if such technical problems occur with a system that they are directly responsible for or that third party contractors provide them with, then they will on request provide reasonable proof of these technical problems, so far as such proof is available, or will otherwise honor their Completion On Time Promise in full.</li>
            <li>The Agency is not liable under this promise where any delay is caused by the death or illness of the Principal or their immediate family.</li>
            <li>If the Customer does not receive their Work on the due date, they agree to contact the Agency through the Customer Control Panel the next day (or the next day after a Non-Working Day) to work with them to overcome the technical difficulties. A representative will then assist them on the phone or through the Customer Control Panel until they are able to receive the Work. The Agency will provide proof upon request, where available, of any technical difficulties, death or illness.</li>
            <li>If the Customer decides to wait longer to inform the Agency of non-delivery, they agree that they do so at their own risk and that the Agency will not be held liable for any delay of the Customer to contact them about non- or late delivery. If requested, the Agency will provide proof that either the Work was completed by the Principal on time and uploaded, or that the Work was made available to the Customer on time, or proof that technical difficulties, death or illness prevented the Work being available on time. If the Agency is able to prove at least one of these then the Customer will not be entitled to any refund or discount; otherwise, if the Agency cannot prove at least one of these occurrences, the Customer will receive a full refund and their Work for free. The Customer agrees that they cannot seek any other recourse to a refund for delivery problems.</li>
            <li>The Agency will have no obligations whatsoever in relation to the Completion on Time Promise if the delay in the delivery of the Work is as a result of the Customer's actions - including but not limited to where the Customer has failed to pay an outstanding balance due in relation to the Order, sent in extra information after the order has started or changed any elements of the order instructions. Delays on the part of the Customer may result in the relevant due date being changed according to the extent of the delay without activating the Completion On Time Promise.</li>
            <li>Where the Customer has agreed with the Principal for 'staggered delivery', the Completion on Time Promise relates to the final delivery date of the Work and not to the delivery of individual components of the Work.</li>
        </ul>
    
        <h2>Plagiarism - "$500 No Plagiarism Promise"</h2>
        <ul>
            <li>The $500 No Plagiarism Promise, or credits of equivalent value, applies when the Customer detects plagiarism in the Work.</li>
            <li>Where the Customer detects serious or substantial plagiarism in the Work, the Principal will pay the Customer the sum of $500.</li>
            <li>'Plagiarism' includes where the Principal:
                <ul>
                    <li>Passes off someone else's words as their own.</li>
                    <li>Passes off someone else's ideas as their own.</li>
                    <li>Rewords a source but retains the original ideas it contains, without giving due credit.</li>
                </ul>
            </li>
            <li>Where there is a discrepancy as to whether the Customer's findings constitute Plagiarism or not, the Agency will carefully review the Work and make a decision, having regard to all relevant circumstances and making reference to a qualified expert where they deem it necessary to do so. In such circumstances, the Agency's decision will be final.</li>
            <li>In all cases, no finding of Plagiarism will be made where the Customer has specifically requested that the Principal incorporate material in a way that the Agency would otherwise deem to be Plagiarism.</li>
            <li>In all cases, where the alleged Plagiarism is minor, or it is reasonably obvious that the alleged Plagiarism is as a result of a mistake, the $500 No Plagiarism Promise will not be payable.</li>
            <li>Where the Principal contends that the alleged Plagiarism is as a result of a mistake, the Agency will carefully review the Work and make a decision, having regard to all relevant circumstances and the Principal's history with the Agency, and make reference to a qualified expert where they deem it necessary to do so. In such circumstances, the Agency's decision as to whether the promise is payable or not will be final.</li>
            <li>The promise will not apply in circumstances where the Agency detects plagiarism and contacts the Customer to inform them of this, in advance of the Customer contacting the Agency about that plagiarism. In such circumstances, a rewrite will be provided where requested by the Customer.</li>
            <li>The Agency agrees that if a Principal is responsible for a confirmed Plagiarism offence who fails to award the $500 compensation, then they will provide all reasonable assistance to the Customer including the provision of a copy of the Principal's contract with the Agency, and the Principal's name and address, for the Customer to bring a remedial action directly. The Agency is not responsible for reimbursing the Customer with the $500 compensation. However, if the plagiarism bond becomes payable and the Agency holds sums that are due to the Principal, the Agency undertakes to retain those funds until the Principal has paid the Customer the plagiarism bond or, if this is not forthcoming, to release those funds (up to the value of the plagiarism bond) to the Customer after a reasonable period of time and on reasonable notice to the Principal. If the Agency is subsequently involved in litigation as a result of holding these funds, it reserves the right to pay these into Court.</li>
        </ul>
    
        <h2>General</h2>
        <ul>
            <li>Pakistan is our country of domicile. All disputes arising in connection therewith shall be heard only by a court of competent jurisdiction in Pakistan.</li>
            <li>Customers using the website who are minor/under the age of 18 shall not register as a User of the website and shall not transact on or use the website.</li>
            <li>The Agency’s customer support is available 24 hours a day, 7 days a week, ensuring that any queries or concerns are addressed promptly at all times.</li>
            <li>Due to the popularity of the Agency's services, telephone and email support requests cannot always be dealt with immediately, but the Agency pledges to make all reasonable endeavors to respond to the Customer's requests expeditiously and to deal with urgent requests promptly.</li>
            <li>The Customer undertakes that any decision to rely on the research provided through the Agency to an extent that any delay in delivery may cause the Customer's deadlines to be missed is done so at their own risk, and that the Agency, its employees and experts shall not be liable for any aforesaid lateness in delivery, except for that provided for in these terms.</li>
            <li>The Customer agrees that all views expressed by the Agency, its employees and experts about the use of its service are given as opinions only and do not constitute advice. Equally, the Customer accepts that all statements and views expressed by the Agency's marketing agents and affiliates are not endorsed by the Agency and may not accurately reflect the policies and regulations of the Agency.</li>
            <li>The Customer undertakes to check their university guidelines and regulations before ordering and to fully satisfy themselves of their individual institute or universities rules, regulations and guidelines. The Customer acknowledges that any decision to use an expert's research services is made on their own initiative and agrees that the Agency, its employees and experts are in no way to be held liable for any decision to use its services that may be in contrary or in breach of the Customer's institution or university rules, regulations or guidelines.</li>
            <li>The Customer accepts that the Agency provides all services subject to availability and that the Work supplied is provided strictly as academic support and as such do not constitute professional advice.</li>
            <li>The Customer agrees that, whilst every effort is made to ensure that all Work is completely, accurately and fully custom written, inaccuracies may from time to time occur and that the Agency, its employees and experts will not be held responsible, bar free amendments as allowed by these terms and a discretionary discount, for such occurrences.</li>
            <li>The Agency reserves the right to refuse any order and/or to refuse to enter into an agreement with any Customer and all terms in this agreement are subject to this reservation.</li>
            <li>The Agency reserves the right, on behalf of the Principal, to refuse to continue with any order if it has reason to believe that the Customer intends to use the Work supplied by the Agency in contravention of these terms or of the Agency's Fair Use Policy.</li>
            <li>Both parties agree that these terms and conditions are intended to be legally binding from the Commencement Date.</li>
            <li>These terms represent the entire terms that exist between the Principal/Agency and the Customer from the Commencement Date and supersede and replace any prior written or oral agreements, representations or understandings between them.</li>
            <li>The parties, in entering into an agreement for the location of an expert to provide research services, confirm that they do not do so on the basis of any representation that is not expressly incorporated into these terms.</li>
            <li>For the purposes of the Contracts (Rights of Third Parties) Act 1999, the Parties do not intend to, and do not, give any person who is not a party to the agreement between the parties any right to enforce any of its provisions.</li>
            <li>If any provision of the Agreement between the Customer and the Agency is prohibited by law or judged by a court to be unlawful, void or unenforceable, the provision shall, to the extent required, be severed from the agreement and rendered ineffective as far as possible without modifying the remaining provisions of the agreement, and shall not in any way affect any other circumstances of or the validity or enforcement of the agreement.</li>
            <li>All calls are recorded for training and quality assurance purposes.</li>
        </ul>
    
        <h2>Promotional Email Campaigns</h2>
        <ul>
            <li>The Agency also offers student education-related products such as plagiarism software, past papers, marking, and proofreading services.</li>
            <li>In the Customer account interface, Customers have the option to consent to the Agency contacting them by telephone, email, and SMS/MMS to let them know about any goods, services, or promotions which may be of interest to them.</li>
        </ul>
    </section>

</body>
   
@endsection
