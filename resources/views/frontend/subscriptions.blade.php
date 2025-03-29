@extends('frontend.master_layout.master')
@section('main-theme')
    <section class="page_banner mt-5 pt-5">
        <div class="container px-5 mt-5 pt-5">
            <!-- <div class="content_wrapper" style="background-image:url(assets/images/banner/hero_banner_img_1.png)"> -->
            <div class="row align-items-center px-lg-5 px-0">
                <div class="col col-lg-6">
                    <ul class="breadcrumb_nav unordered_list">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="products.php">Products</a></li>
                        <li>Packages</li>
                    </ul>
                    <h1 class="page_title" style="font-size: 60px; line-height-0">Unlock Savings with Writing-Space
                        package!</h1>
                    <p class="page_description">Invest in your academic success with our budget-friendly, flexible
                        package plans designed for every student’s need.</p>
                    <form action="#">
                        <div class="form_item mb-0" onclick="alertfunction()">
                            <input type="search" name="search" placeholder="What do you want to learn ?">
                            <button type="submit" class="btn btn_dark"><span><small>Search</small>
                                    <small>Search</small></span></button>
                        </div>
                    </form>
                </div>
                <div class="col col-lg-6 mt-lg-5 pt-lg-5">
                    <img src="assets/images/banner/hero_banner_img_1.png" alt="">
                </div>
            </div>

        </div>
        </div>
    </section>
    <section class="pricing_section section_space_lg pb-0">
        <div class="container decoration_wrap">
            <div class="section_heading text-center">
                <h2 class="heading_text mb-0">Package Plans</h2>
            </div>
            <div class="pricing_cards_wrapper row align-items-center">
                @if ($subscription)
                    @foreach ($subscription as $s)
                        <div class="col col-lg-4">
                            <div class="pricing_card text-center tilt">
                                <h3 class="card_heading">{{ $s->subscription_name }}</h3>
                                <div class="pricing_wrap"><span
                                        class="price_value"><sup>$</sup>{{ $s->cost_per_page }}</span> <small
                                        class="d-block">per Per Page</small></div>
                                <hr>
                                <ul class="info_list unordered_list_block text-start">
                                    <li><i class="fas fa-caret-right"></i> <span>Cost: ${{ $s->cost_per_page }} Per
                                            Page</span></li>
                                            <input type="hidden" class="costperpage1"  value="{{$s->cost_per_page}}"/>
                                    <li><i class="fas fa-caret-right"></i> <span>Time: {{ $s->set_time }}</span></li>
                                    <li><i class="fas fa-caret-right"></i> <span>Purchase between {{ $s->min_page }} to
                                            {{ $s->max_page }} pages</span></li>
                                    <li><i class="fas fa-caret-right"></i> <span>Total Pages in Subscription
                                            {{ $s->total_subscription }}</span></li>
                                    <li><i class="fas fa-caret-right"></i> <span>Inform Before Expire
                                            {{ $s->inform_customer_expiry_date }}</span></li>
                                    <li><i class="fas fa-caret-right"></i> <span>Inform Customer Everyday
                                            {{ $s->inform_customer_email }}</span></li>
                                    @if ($s->restrictions != null)
                                        @foreach (json_decode($s->restrictions) as $r)
                                            <li><i class="fas fa-caret-right"></i> <span>{{ $r }}</span></li>
                                        @endforeach
                                    @endif

                                    @if ($s->more_restrictions != null)
                                        @foreach (json_decode($s->more_restrictions) as $mr)
                                            @if ($mr->status = true)
                                                <li><i class="fas fa-caret-right"></i> <span>{{ $mr->title }}</span>
                                                </li>
                                            @endif
                                        @endforeach
                                    @endif

                                </ul>
                                @if (Auth()->user())
                                    <div class="btn_wrap pb-0"><button type="button"
                                            onclick="open_modal({{ $s->id }},{{ $s->cost_per_page }},{{ $s->total_subscription }})"><a
                                                class="btn border_dark"><span><small>Select Plan </small> <small>Select Plan
                                                    </small></span></a></button></div>
                                    <input type="hidden" id="user_id" value="{{ Auth()->user()->id }}">
                                @else
                                    <div class="btn_wrap pb-0"><button type="button" onclick="open_modal_login()"><a
                                                class="btn border_dark"><span><small>Select Plan </small> <small>Select Plan
                                                    </small></span></a></button></div>
                                    <input type="hidden" id="user_id" value="">
                                @endif
                            </div>
                        </div>
                        <!--end::App-->
                    @endforeach
                @endif

                <br>
                
                <div class="modal fade mt-5" id="modal-15" tabindex="-1" aria-labelledby="exampleModalLabel">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header border-0">
                                <h5 class="modal-title " id="exampleModalLabel">Add Promotion Code</h5>
                                <button type="button" class="ms-0 btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>

                            <div class="modal-body">
                                <div data-kt-stepper-content="true" data-kt-stepper-content-for="stepper-id"
                                    data-kt-stepper-type="step" class='step'>
                                    <!--begin::Step 4-->
                                    <div data-kt-stepper-element="content">
                                        <div class="w-100">
                                            <!--begin::Input group-->
                                            <div class="d-flex flex-column mb-7 fv-row">
                                                <!--begin::Label-->
                                                <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                                    <span class="required">Coupon</span>
                                                    <span class="ms-1" data-bs-toggle="tooltip"
                                                        title="Specify a card holder's name">
                                                        <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                                                class="path1"></span><span class="path2"></span><span
                                                                class="path3"></span></i></span>
                                                </label>
                                                <!--end::Label-->
                                                <input type="text" class="form-control" id="coupon" name="coupon">

                                                <input type="hidden" class="form-control" id="totalamount"
                                                    name="totalamount">
                                                <input type="hidden" class="form-control" id="selectplanid"
                                                    name="selectplanid">
                                            </div>


                                        </div>
                                    </div>
                                    <!--end::Step 4-->
                                </div>
                            </div>


                            <div class="modal-footer border-0">


                                <button type="button" class="btn btn-secondary" onclick="check_coupon()">Next</button>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                            </div>
                        </div>
                    </div>
                </div>


                <div class="modal fade" id="modal-156" tabindex="-1" aria-labelledby="exampleModalLabel">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header border-0">
                                <h5 class="modal-title " id="exampleModalLabel">please Login First!</h5>
                                <button type="button" class="ms-0 btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>

                            <div class="modal-body">



                                <div class="modal-footer border-0">



                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>

                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="deco_item shape_img_1" data-parallax='{"y" : 130, "smoothness": 6}'><img
                        src="{{ asset('frontend/assets/images/shape/shape_img_4.png') }}"
                        alt="Collab – Online Learning Platform"></div>
                <div class="deco_item shape_img_2" data-parallax='{"y" : -130, "smoothness": 6}'><img
                        src="{{ asset('frontend/assets/images/shape/shape_img_5.png') }}"
                        alt="Collab – Online Learning Platform"></div>
            </div>
    </section>
    <br><br><br>
    <section>
        <div class="container">
            <div class="section_heading text-center mb-3">
                <div class="row justify-content-center">
                    <div class="col col-lg-12">
                        <h3>Purchase Custom Orders written Exclusively for You</h3><br>
                        <table style="text-align: center;" class="table table-striped table-bordered">
                            <thead>
                                <th>Deadline</th>
                                <th>Cost Per Page</th>
                                <th>Page Limit</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Over 15 Days</td>
                                    <td>$18</td>
                                    <td>Unlimited</td>

                                </tr>
                                <tr>
                                    <td>168 to 336 Hours</td>
                                    <td>$20</td>
                                    <td>150 Pages</td>

                                </tr>
                                <tr>
                                    <td>120 to 167 Hours</td>
                                    <td>$24</td>
                                    <td>50 Pages</td>

                                </tr>
                                <tr>
                                    <td>71 to 119 Hours</td>
                                    <td>$28</td>
                                    <td>40 Pages</td>

                                </tr>
                                <tr>
                                    <td>48 to 71 Hours</td>
                                    <td>$32</td>
                                    <td>30 Pages</td>

                                </tr>
                                <tr>
                                    <td>24 to 47 Hours</td>
                                    <td>$36</td>
                                    <td>20 Pages</td>

                                </tr>
                                <tr>
                                    <td>8 to 23 Hours</td>
                                    <td>$45</td>
                                    <td>10 Pages</td>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br><br>
    <section class="newslatter_section">
        <div class="container">
            <!-- <div class="newslatter_box " style=" height:1171px; width:100%;background-image:url(assets/images/banner/hero_banner_img_3.webp)"> -->
            <div class="img-sub mx-4 mx-lg-5 " style="box-shadow: 20px 20px 0 0 yellow;border-radius: 8px;width: 87%;">
                <img class="img-sub" src="assets/images/banner/hero_banner_img_3.webp" alt="">
            </div>
            <!-- <div class="row justify-content-center ">
           <div class="col col-lg-6">
            <div class="section_heading text-center ">
             <h2 class="heading_text">Unlock Seamless Academic Support</h2>
             <p class="heading_description mb-0">Delve into a world where premium writing services meet affordability. With our subscription plans, enjoy consistent, quality assistance without the stress of fluctuating prices. Subscribe now to start your journey of uncompromised quality and undeniable value.</p>
            </div>
            <form action="#">
             <div class="form_item m-0" onclick=" alertfunction()">
              <input type="email" name="email" placeholder="Your Email">
              <button type="submit" class="btn btn_dark"><span><small>Subsctibe</small> <small>Subsctibe</small></span></button>
             </div>
            </form>
           </div>
          </div> -->
        </div>
        </div>
    </section>
    </main>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    <script>
        function check_coupon() {
            var coupon = document.getElementById('coupon').value;
            let id = $('#selectplanid').val();
            let user_id = document.getElementById('user_id').value;
            let totalamount = $('#totalamount').val();
           // alert(totalamount);

        
            var url4 ='{{ route('customer.check.package', ['sub_id' => ':sub_id']) }}';
                                url4 = url4.replace(':sub_id', id);
                $.ajax({
                    type: 'post',
                    url: url4,
                    data: {
                        sub_id: id,
                        _token: '{{ csrf_token() }}',
                    },
                    // Assuming id is a parameter you want to send
                    success: function(response) {
                        console.log(response);
            if (coupon !== null && coupon !== '') {
                console.log(coupon);

                let url = "{{ route('check-coupon') }}";
                $.ajax({
                    type: 'post',
                    url: url,
                    data: {
                        coupon: coupon,
                        _token: '{{ csrf_token() }}',
                    },
                    // Assuming id is a parameter you want to send
                    success: function(response) {
                        promotion = response.coupon;
                        
                        if(promotion !== "The promotion has ended"){
                          console.log("Promotion-1:", promotion);
                          
                            if (response.start_date && response.end_date && response.decrease_everyday)
                            {
                              
                                    const decreaseEveryday = JSON.parse(response.decrease_everyday);
                                    const startDate = new Date(response.start_date);
                                    const endDate = new Date(response.end_date);
                                    const currentDate = new Date();
                              
                  
                        
                                if (currentDate >= startDate && currentDate <= endDate) {
                                    const daysDiff = Math.floor((currentDate - startDate) / (1000 * 60 * 60 * 24));
                                    const discountIndex = Math.min(daysDiff, decreaseEveryday.length - 1);
                                    const discountPercentage = decreaseEveryday[discountIndex];
                                    console.log("Discount Percentage:", discountPercentage);
                                    
                                    
                                        console.log(totalamount );
                                        totalamount =  parseInt(totalamount) - (parseInt(totalamount) * parseInt(discountPercentage) / 100);
                                            console.log(discountPercentage );
                                

                                } else {
                                    console.log("Promotion is not active for the current date.");
                                
                            }
                        
                              
                          }

                            
    			
                            
                        }
                      
    							
                   var url2 = '{{ route('customer.checkout') }}';
                $.ajax({
                    type: 'GET',
                    url: url2,

                    // Assuming id is a parameter you want to send
                    success: function(response) {
                       console.log(response.sessionId);


                        let idgetsession = response.sessionId;
                        
                    localStorage.setItem('sub_id', JSON.stringify(id));

                    localStorage.setItem('totalamount', JSON.stringify(totalamount)); 

                         alert('Add Payment Details!');
                        // Swal.fire('Success', 'Add Payment Details!', 'success');

                                if (response && response.sessionId) {

                      
                        window.location.href = '{{ route("customer.card.show.sub", ["sessionid" => ":sessionId"]) }}'.replace(':sessionId', response.sessionId);


                        } else {
                        console.error('Invalid response format or missing sessionId.');
                        }


                    },

                    error: function(error) {
                      window.location.href = '{{ route("login") }}';
                        console.error(error);
                    }
                });
   
                    },
                    error: function(error) {
                        // Handle any errors here
                        console.error(error);
                        var url2 = '{{ route('customer.checkout') }}';
                $.ajax({
                    type: 'GET',
                    url: url2,

                    // Assuming id is a parameter you want to send
                    success: function(response) {
                       console.log(response.sessionId);

                        localStorage.setItem('sub_id', JSON.stringify(id));
                        localStorage.setItem('totalamount', JSON.stringify(totalamount));      
                        let idgetsession = response.sessionId;

                       alert('Add Payment Details!');
                        // Swal.fire('Success', 'Add Payment Details!', 'success');

                                if (response && response.sessionId) {

                      
                        window.location.href = '{{ route("customer.card.show.sub", ["sessionid" => ":sessionId"]) }}'.replace(':sessionId', response.sessionId);


                        } else {
                        console.error('Invalid response format or missing sessionId.');
                        }


                    },

                    error: function(error) {
                      window.location.href = '{{ route("login") }}';
                        console.error(error);
                    }
                });
                        
        
                    }
                });
            } else {
                console.log('coupon is null or empty');
                var url2 = '{{ route('customer.checkout') }}';
                $.ajax({
                    type: 'GET',
                    url: url2,

                    // Assuming id is a parameter you want to send
                    success: function(response) {
                       console.log(response.sessionId);


                        let idgetsession = response.sessionId;
                        localStorage.setItem('sub_id', JSON.stringify(id));
                        localStorage.setItem('totalamount', JSON.stringify(totalamount));          
                         alert('Add Payment Details!');
                        // Swal.fire('Success', 'Add Payment Details!', 'success');

                                if (response && response.sessionId) {

                      
                        window.location.href = '{{ route("customer.card.show.sub", ["sessionid" => ":sessionId"]) }}'.replace(':sessionId', response.sessionId);


                        } else {
                        console.error('Invalid response format or missing sessionId.');
                        }


                    },

                    error: function(error) {
                      window.location.href = '{{ route("login") }}';
                        console.error(error);
                    }
                });
   
            }},
            error: function(response) {

             alert("You Already Purchased Packages");
                console.log(response);
                                        // Handle any errors here
                                        console.log(response);
                                        console.log(response.responseJSON.message);
                                    //    alert(response.responseJSON.message); 
									
                                    }
                                });
        }

        // function submit_payment() {
        //     // alert('ok');
        //             var card_name = document.getElementById('card_name').value;
        //             var card_number = document.getElementById('card_number').value;
        //             var card_expiry_month = document.getElementById('card_expiry_month').value;
        //             var card_expiry_year = document.getElementById('card_expiry_year').value;
        //             var card_cvv = document.getElementById('card_cvv').value;
        //             var selectplanid = $('.selectplanid').val();
        //             var totalamount = $('.totalamount').val();
        //             var authuser = $('.authuser').val();



        //             var card_detail = {
        //                 card_name: card_name,
        //                 card_number: card_number,
        //                 card_expiry_month: card_expiry_month,
        //                 card_expiry_year: card_expiry_year,
        //                 card_cvv: card_cvv,
        //                 totalamount: totalamount,
        //                 authuser: authuser
        //             }
        //             localStorage.setItem('card_detail', JSON.stringify(card_detail))
        //             console.log(card_detail);
        //             user_id = authuser;

        //             var url = '{{ route('customer.customer_payment', ['id' => ':id']) }}';
        //             url = url.replace(':id', user_id);

        //             $.ajax({
        //                 type: 'post',
        //                 url: url,
        //                 data: {
        //                     card: card_detail,
        //                     _token: '{{ csrf_token() }}',
        //                 },
        //                 // Assuming id is a parameter you want to send
        //                 success: function(response) {
        //                     console.log(response);
        //                     message = response.message;
        //                     card = message.card;
        //                     var url2 = '{{ route('customer.select-plan', ['sub_id' => ':sub_id']) }}';
        //                     url2 = url2.replace(':sub_id', selectplanid);
        //                     $.ajax({
        //                         type: 'post',
        //                         url: url2,
        //                         data: {
        //                             card: card_detail,
        //                             user_id: user_id,
        //                             totalamount: totalamount,

        //                             _token: '{{ csrf_token() }}',
        //                         },
        //                         // Assuming id is a parameter you want to send
        //                         success: function(response) {
        //                             console.log(response);
        //                             location.reload();



        //                         },
        //                         error: function(error) {
        //                             // Handle any errors here
        //                             console.error(error);
        //                         }
        //                     });

        //                 },
        //                 error: function(error) {
        //                     // Handle any errors here
        //                     console.error(error);
        //                 }
        //             });
        //         };

        function open_modal(id, costPerPage, totalSubscription) {
            
           // alert(totalSubscription);
     $.ajax({
    type: 'get',
    url: "{{ route('pakage_limit.get') }}",
    data: { totalSubscription: totalSubscription },
    success: function (response) {
       
        
        if (response.success === 'Package limit exceeded') {
            console.log("Package limit exceeded");
            
            
             var totalamount = costPerPage * totalSubscription;

            $('#selectplanid').val('');
            $('#totalamount').val('');
            $('#selectplanid').val(id);
            $('#totalamount').val(totalamount);
            
                  
        
                         localStorage.removeItem('costPerPage');
                         localStorage.setItem('costperpage1', JSON.stringify(costPerPage));
            
            
		var value = $('#totalamount').val();
console.log(value);
            var modal = new bootstrap.Modal(document.getElementById("modal-15"));
            modal.show();
            document.getElementsByClasName("modal-backdrop").style.position = "static";
            
            
            
            
        } else if (response.success === 'Package limit not exceeded') {
              alert("Thank you for your interest in our services! We are currently at full capacity and unable to take new subscriptions at this moment. Please leave your email with us, and we'll notify you as soon as slots become available. We appreciate your understanding and look forward to serving you in the future.");
           
        } else {
            console.log("An unexpected error occurred");
           
        }
    },
    error: function (error) {
        // Handle any errors here
        console.error(error);
    }
});
 
            
         
            
            
           
        }

        function open_modal_login() {
            console.log('hello');
            var modal = new bootstrap.Modal(document.getElementById("modal-156"));
            modal.show();
            document.getElementsByClassName("modal-backdrop6")[0].style.position = "static";
        }
    </script>
@endsection
