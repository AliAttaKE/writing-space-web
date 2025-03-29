

   @if($data['no_teams'] != null)

   @foreach($data['no_teams']  as $bids)
        <a href="{{route('user-dashboard.show',$bids['id'])}}">
            <div class="row bid-section">
                <div class="col-lg-12 col-12 ">
                    <div class="card">
                        <div class="header">
                            <div class="row">
                                <div class="col-md-6">
                                  <h3>  {{$bids['erp_order_topic']}}
                                  </h3>
                                </div>
                                <div class="col-md-6 text-right">
                                    Order Deadline: {{ date('d-M-Y  | h:i A', strtotime($bids['erp_datetime']))}}
                                </div>
                            </div>

                        </div>
                        <div class="body">
                            <p class="message-description">
                            <div class="text-dark">
                                {!! (substr($bids['erp_order_message'],0, 370,)) !!}
                                <b>{{"Read More......"}} </b>
                            </div>
                            </p>
                            <div class="row">
                                <div class="col-lg-12">
                                                <span class="types">
                                                    Language style:
                                                    {{$bids['erp_language_name']}}
                                                </span>
                                    <span class="types">
                                                    Spacing: {{$bids['erp_spacing'] == '1'? 'Double spacing' :'single_spacing'}}
                                                </span>
                                    <span class="types">
                                                    Deadline :{{  date("d-M-Y h:i-A" , strtotime(isset($bids['order']['erp_datetime']) ? $bids['order']['erp_datetime'] : '' )) }}
                                                </span>
                                    <span class="types">
                                                    Copy of Sources: {{$bids['erp_copy_sources']}}
                                                </span>
                                    <span class="types">
                                                    Page Summary: {{$bids['erp_page_summary']}}
                                                </span>
                                    <span class="types">
                                                    Statistical Analysis: {{$bids['erp_statistical_analysis']}}
                                                </span>

                                    <span class="types">
                                                    Subject name: {{$bids['erp_subject_name']}}
                                                </span>

                                    <span class="types">
                                                    Paper Type : {{$bids['erp_paper_type']}}
                                                </span>
                                    <span class="types">
                                                    Pages :{{$bids['erp_number_Pages']}}
                                                </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
{{--      @endif--}}
    @endforeach
   @else


       <div class="header">
           <div class="body table-responsive">
               <div class="container">
                   <div class="row clearfix">
                       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                           <div class="card mt-5">
                               <div class="header">
{{--                                   <form class="m-0" method="POST" action="{{ route('logout') }}">--}}
{{--                                       @csrf--}}
{{--                                       <a href="#"  :href="route('logout')"--}}
{{--                                          onclick="event.preventDefault();--}}
{{--                                                this.closest('form').submit();">--}}
{{--                                           <button type="button" class="btn btn-primary float-right mt-3">Logout--}}
{{--                                           </button>                            </a>--}}
{{--                                   </form>--}}

                               </div>
                               <div class="row mt-2 align-items-center py-5">

                                   <div class="col-12 text-center">



                                       {{--                            <h3 class="mt-5"> Sorry Better Luck Next Time </h3>--}}
                                       {{--                            <p class="font-12"> Lorem ispum is a dummy text for absoulute beginners and advanced programmers</p>--}}

                                           <i class="far fa-frown  fa-10x"></i>
                                           <h3 class="mt-5">There is no order for You.

                                           </h3>
                                       @if(@auth()->user()->erp_terminate ==1)
                                       <h6 class="mt-5 text-danger">Your Account has been terminated

                                       </h6>
                                           @endif
                                   </div>
                               </div>

                           </div>
                       </div>
                   </div>
               </div>

           </div>

       </div>

       @endif























