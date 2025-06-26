

<html>
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
<!-- INCLUDE SESSION.JS JAVASCRIPT LIBRARY -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://test-bankalfalah.gateway.mastercard.com/form/version/74/merchant/TESTWRITINGSPACE/session.js"></script>


<!-- APPLY CLICK-JACKING STYLING AND HIDE CONTENTS OF THE PAGE -->
<style id="antiClickjack">body{display:none !important;}</style>

 <style>
        body {
            font-family: Inter, Helvetica, "sans-serif";
            background-image: url("/backend/assets/media/ws/customer-dashboard.jpg");
        }
        .pata{

        }
        .lock {
            height: 18px;
            width: 20px;
        }

        .visaCard {
            width: 100%;
        }

        .masterCard {
            width: 100%;
        }

        .fs-12 {
            font-size: 12px;
        }

        .total-amt {
            background-color: #EDF9ED;
        }

        .border {
            border: 1px solid #CED4DA;
        }

        @media screen and (max-width: 568px) {
            .visa-card {
                width: 30px;
                height: 25px;
            }

            .master-card {
                width: 40px;
                height: 25px;
            }

            .me-3 {
                margin-right: 0.5rem !important;
            }
        }

        .custom-border {
            box-shadow: 0px 3px 4px 0px rgba(0, 0, 0, 0.03);
            border: 1px solid #f1f1f4;
            background-color: #ffffff;
            border-radius: 0.625rem;
        }

        .w-25 {
            width: 25% !important;
        }
        .badge-custom-bg, #badge-custom-bg, .library-buttons button:nth-child(1), .library-buttons button:nth-child(2), .library-buttons button:nth-child(3), .badge-custom-bg:hover, .btn.btn-secondary:hover:not(.btn-active), .btn.btn-primary:hover:not(.btn-active), .btn.btn-light-primary:hover:not(.btn-active), .btn.btn-light-primary:focus:not(.btn-active), .btn.btn-active-light-primary:hover:not(.btn-active){
    background: #783AFB !important;
    color: #fff !important;
}
.btn-dark-primary, #btn-dark-primary:hover, .btn-dark-primary.btn.btn-active-light-primary:hover:not(.btn-active) {
    border: 1px solid #783AFB !important;
    background-color: #1515158a !important;
    color: #fff !important;
}
    </style>
</head>
<body>
<div class="p-3  mb-4">
        <img src="{{asset("backend/assets/media/ws/logo.png")}}" class="" alt="">
    </div>
<div class="d-flex justify-content-center align-items-center">
    <div class="col-md-9">
        <div class="row justify-content-between h-100 px-3">
            <div class="col-lg-7 mb-3">
                <div class="card p-4 btn-dark-primary">
                    <div class="card-head border-bottom mb-2 d-flex align-items-center">
                        <h5>Payment Details</h5> <img src="{{asset("backend/assets/media/ws/locked.png")}}"
                            class="lock" alt="">
                    </div>
                    <div class="d-flex justify-content-end fs-12">
                        * Required Field
                    </div>
                    <div class="row mb-2">
                        <div class="col-lg-4 mb-2">
                            <div class="label">Card Holder Name*</div>
                        </div>
                        <div class="col-lg-5 mb-2">
                            <input type="text" id="cardholder-name"
                                class="input-field form-control bg-transparent border text-white" title="cardholder name"
                                aria-label="enter name on card" value="" tabindex="5" readonly>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-lg-4 mb-2">
                            <div class="label">Card Number*</div>
                        </div>
                        <div class="col-lg-5 mb-2">
                            <input type="text" id="card-number" class="input-field form-control bg-transparent border text-white"
                                title="card number" aria-label="enter your card number" value="" tabindex="1" readonly>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-lg-4 mb-2 ">
                            <div class="label">Expiration Month*</div>
                        </div>
                        <div class="col-lg-5 mb-2">
                            <input type="text" id="expiry-month" class="input-field form-control bg-transparent border text-white"
                                title="expiry month" aria-label="two digit expiry month" value="" tabindex="2" readonly>
                        </div>

                    </div>
                    <div class="row mb-2">
                        <div class="col-lg-4 mb-2 ">
                            <div class="label">Expiration Year*</div>
                        </div>
                        <div class="col-lg-5 mb-2">
                            <input type="text" id="expiry-year" class="input-field form-control bg-transparent border text-white"
                                title="expiry year" aria-label="two digit expiry year" value="" tabindex="3" readonly>
                        </div>

                    </div>
                    <div class="row mb-2">
                        <div class="col-lg-4 mb-2 ">
                            <div class="label">CVN*</div>

                        </div>
                        <div class="col-lg-8 mb-2">
                            <p class="fs-12 mb-0">
                                The code is three or four digit number printed on the back or front of credit
                                cards.
                            </p>

                            <input type="text" id="security-code"
                                class="input-field form-control bg-transparent border w-25 text-white" title="security code"
                                aria-label="three digit CCV security code" value="" tabindex="4" readonly>

                        </div>
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="{{ url()->previous() }}" class="btn btn-dark-primary px-4">
                            Cancel
                        </a>

                        <button id="payButton" onclick="pay('card');" class="btn badge-custom-bg">Pay Now</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-3">
                <div class="card p-4 mb-4 btn-dark-primary">
                    <div class="card-head border-bottom mb-2 d-flex align-items-center">
                        <h5>Order Details</h5>
                    </div>
                    <div class="card-bod total-amt py-3 px-2 rounded-3 bg-transparent">
                        <ul class="d-flex d-flex list-unstyled justify-content-between">
                             <li class="">Cost Per Page :</li>
                            <li class=""><span id="cost_per_page">00</span></li>
                        </ul>
                        <ul class="d-flex d-flex list-unstyled justify-content-between">
                             <li class="">Number of Pages :</li>
                            <li class=""><span id="no_of_page">00</span></li>
                        </ul>

                        <ul class="d-flex d-flex list-unstyled justify-content-between">
                            <li class="">Total Amount :</li>
                            <li class="">$ <span id="order_total">00</span></li>
                        </ul>
                    </div>
                </div>
                <div class="card p-4 btn-dark-primary">
                    <div class="card-head border-bottom mb-2 d-flex align-items-center">
                        <h5>Payment Via</h5>
                    </div>
                <div class="row">
                    <div class="col-6 d-flex align-items-center">
                    <img src="{{asset("backend/assets/media/ws/visaCard.png")}}"
                            class="visaCard mb-3" alt="">
                            </div>
                    <div class="col-6 d-flex align-items-center">
                            <img src="{{asset("backend/assets/media/ws/masterCard.png")}}"
                            class="masterCard mb-3" alt="">
                </div>
                    <div class="col-6 d-flex align-items-center">
                    <img src="{{asset("backend/assets/media/ws/discover.png")}}"
                            class="visaCard mb-3" alt="">
                            </div>
                    <div class="col-6 d-flex align-items-center">
                            <img src="{{asset("backend/assets/media/ws/american-express.png")}}"
                            class="masterCard mb-3" alt="">
                </div>
                   
                </div>
            </div>
        </div>
        </div>
    </div>
</div>

<!-- JAVASCRIPT FRAME-BREAKER CODE TO PROVIDE PROTECTION AGAINST IFRAME CLICK-JACKING -->


<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

<script type="text/javascript">
if (self === top) {
    var antiClickjack = document.getElementById("antiClickjack");
    antiClickjack.parentNode.removeChild(antiClickjack);
} else {
    top.location = self.location;
}

PaymentSession.configure({


    session: "{{$sessionid}}",
    fields: {
        // ATTACH HOSTED FIELDS TO YOUR PAYMENT PAGE FOR A CREDIT CARD
        card: {
            number: "#card-number",
            securityCode: "#security-code",
            expiryMonth: "#expiry-month",
            expiryYear: "#expiry-year",
            nameOnCard: "#cardholder-name"
        }
    },

    //SPECIFY YOUR MITIGATION OPTION HERE
    frameEmbeddingMitigation: ["javascript"],
    callbacks: {
        initialized: function(response) {
            // HANDLE INITIALIZATION RESPONSE
        },
        formSessionUpdate: function(response) {
            // HANDLE RESPONSE FOR UPDATE SESSION
            if (response.status) {
                if ("ok" == response.status) {
                    console.log(response.session.id);

                    console.log("Session updated with data: " + response.session.id);
                   // alert("Session updated with data: " + response.session.id);


               var no_of_page = JSON.parse(localStorage.getItem('no_of_page'));

               var used_package_id = JSON.parse(localStorage.getItem('used_package_id'));
               var package_id = JSON.parse(localStorage.getItem('package_id'));
               var cost_per_page = JSON.parse(localStorage.getItem('cost_per_page'));
               var order_id = JSON.parse(localStorage.getItem('order_id'));



                 console.log(no_of_page);
                  console.log(used_package_id);
                   console.log(package_id);
                    console.log(cost_per_page);
                     console.log(order_id);


                     if (order_id !== null) {
                         console.log("asasass");
                            $.ajax({
                            url: '{{ route("customer.payment.store.addpages") }}',
                            type: 'POST',
                            data: { 'session': response.session.id ,'no_of_page':no_of_page,'used_package_id':used_package_id,'package_id':package_id,'cost_per_page':cost_per_page,'order_id':order_id},
                            dataType: 'json',
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            success: function (ajaxResponse) {

                                     console.log(ajaxResponse);
                               // alert(ajaxResponse);
                                var responseHtml = ajaxResponse.response;



                                    var tempDiv = document.createElement('div');
                                    tempDiv.innerHTML = responseHtml;
                                    var creqInput = tempDiv.querySelector('input[name="creq"]');
                                    if (creqInput) {
                                        var creqValue = creqInput.getAttribute('value');
                                        console.log(creqValue);
                                     //   alert(creqValue);
                                    } else {
                                        console.log('Input element with name "creq" not found in the HTML content');
                                        //alert('Input element with name "creq" not found in the HTML content');
                                    }



                                var Url = "{{ route('customer.otp', ['creqValue' => ':creqValue']) }}".replace(':creqValue', creqValue);

                                if (ajaxResponse) {
                                    console.log(Url);
                                  window.location.href = Url;
                                } else {
                                    console.log('Error or other condition');
                                }


                            },
                            error: function (xhr) {
                                console.log(xhr);


                            }

                        });


} else {

      $.ajax({
                            url: '{{ route("customer.payment.store.addpages") }}',
                            type: 'POST',
                            data: { 'session': response.session.id ,'no_of_page':no_of_page,'used_package_id':used_package_id,'package_id':package_id,'cost_per_page':cost_per_page},
                            dataType: 'json',
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            success: function (ajaxResponse) {

                                     console.log(ajaxResponse);
                               // alert(ajaxResponse);
                                var responseHtml = ajaxResponse.response;



                                    var tempDiv = document.createElement('div');
                                    tempDiv.innerHTML = responseHtml;
                                    var creqInput = tempDiv.querySelector('input[name="creq"]');
                                    if (creqInput) {
                                        var creqValue = creqInput.getAttribute('value');
                                        console.log(creqValue);
                                     //   alert(creqValue);
                                    } else {
                                        console.log('Input element with name "creq" not found in the HTML content');
                                        //alert('Input element with name "creq" not found in the HTML content');
                                    }



                                var Url = "{{ route('customer.otp', ['creqValue' => ':creqValue']) }}".replace(':creqValue', creqValue);

                                if (ajaxResponse) {
                                    console.log(Url);
                                  window.location.href = Url;
                                } else {
                                    console.log('Error or other condition');
                                }


                            },
                            error: function (xhr) {
                                console.log(xhr);


                            }

                        });
}




                    //check if the security code was provided by the user
                    if (response.sourceOfFunds.provided.card.securityCode) {
                        console.log("Security code was provided.");
                     //   alert("Security code was provided.");
                    }

                    //check if the user entered a Mastercard credit card
                    if (response.sourceOfFunds.provided.card.scheme == 'MASTERCARD') {
                        console.log("The user entered a Mastercard credit card.")
                       // alert("The user entered a Mastercard credit card.");
                    }
                } else if ("fields_in_error" == response.status)  {

                    console.log("Session update failed with field errors.");
                   // alert("Session update failed with field errors.");

                    if (response.errors.cardNumber) {
                        console.log("Card number invalid or missing.");
                     //   alert("Card number invalid or missing.");
                    }
                    if (response.errors.expiryYear) {
                        console.log("Expiry year invalid or missing.");
                      //  alert("Expiry year invalid or missing.");
                    }
                    if (response.errors.expiryMonth) {
                        console.log("Expiry month invalid or missing.");
                      //  alert("Expiry month invalid or missing.");
                    }
                    if (response.errors.securityCode) {
                        console.log("Security code invalid.");
                      //  alert("Security code invalid.");
                    }
                } else if ("request_timeout" == response.status)  {
                    console.log("Session update failed with request timeout: " + response.errors.message);
                  //  alert("Session update failed with request timeout: " + response.errors.message);
                } else if ("system_error" == response.status)  {
                    console.log("Session update failed with system error: " + response.errors.message);
                  //  alert("Session update failed with system error: " + response.errors.message);
                }
            } else {
                console.log("Session update failed: " + response);
              //  alert("Session update failed: " + response);
            }
        }
    },
    interaction: {
        displayControl: {
            formatCard: "EMBOSSED",
            invalidFieldCharacters: "REJECT"
        }
    }
 });

function pay() {

    // UPDATE THE SESSION WITH THE INPUT FROM HOSTED FIELDS
    PaymentSession.updateSessionFromForm('card');
}


 var cost_per_page = JSON.parse(localStorage.getItem('cost_per_page'));
  var no_of_page = JSON.parse(localStorage.getItem('no_of_page'));

  var totalAmountPage = no_of_page*cost_per_page;
  document.getElementById("order_total").innerText = totalAmountPage;
    document.getElementById("no_of_page").innerText = no_of_page;
    document.getElementById("cost_per_page").innerText = cost_per_page;





</script>
</body>
</html>
