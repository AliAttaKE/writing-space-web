
<div id="tab1" class="pt-3 tab-pane fade in active show">
    <div class="tab-content">

        <!--OrderDetail Starts-->
        <!--Orders tab Start-->
        <div id="tab1" class="pt-3 tab-pane fade in active show">
            <div class="row blockquote w-100 mx-auto">
                <div class="col-md-2 col-12 ">



                    <button class="btn btn-primary text-left mb-3 h-auto width100 btnOrdersDetail"
                            style="display: block;
                            width: 100%"
                            data-type="return-to-available" data-toggle="modal"
                            data-target="#add">Post Additional <info></info>
                    </button>
                    <div class="modal fade" id="add" tabindex="-1" role="dialog"
                         aria-labelledby="formModal" aria-hidden="true">
                        <form action="{{url('instructions')}}" method="post">
                            @csrf
                            <input type="hidden" name="erp_order_id" value="{{$data['order']->id}}">
                            <input type="hidden" name="erp_user_id" value="{{auth()->user()->id}}">

                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="create_questions">
                                        <div class="modal-header">
                                            <h5 class="modal-title" style="color: black" id="formModal">
                                                Additional instruction</h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="container">
                                            <div class="form-group row">
                                                <div class="col-sm-12">
                                                    <label for="">Are you sure you want to send this instruction to wokers?</label>
                                                    <textarea class="form-control" name="erp_message"></textarea>
                                                </div>
                                            </div>
                                            <div class="modal-footer pb-0">

                                                <button type="button" data-dismiss="modal"
                                                        class="btn btn-primary" aria-label="Close">No
                                                </button>
                                                <button type="submit" class="btn btn-primary">Yes</button>                                    </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>


                </div>
                <div class="col-md-10">
                    <div class="row pb-3">
                        <div class="col-md-4 mb-3">

                     <span class="types  d-block text-left">
                         <h5 class="font-weight-bold">Team:</h5>

                         Order not assigned to anyone<br>

                                                </span>

                        </div>

                        <div class="col-md-4 mb-3">
                      <span class="types text-left d-block">
                          <h5 class="font-weight-bold"> Profits: </h5>



                                                               Order not assigned to anyone<br>



                      </span>
                            <div class="table-responsive d-none">
                                <table class="table table-bordered">
                                    <tbody>
                                    <tr>
                                        <td>Profits:</td>
                                    </tr>
                                    <tr>
                                        <td>Researcher: $6090</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                    <span class="types  d-block text-left">
                        <h5 class="font-weight-bold">  Order Deadline: </h5>
                        {{ date('d-M-Y  | h:i A', strtotime($data['order']['erp_datetime']))}}
                    </span>

                            <span class="types  d-block text-left">
                         @php
                             $biddate = new DateTime($data['order']['erp_datetime']);
                             $current = new DateTime();
                             $difference = $biddate->diff($current);
                         @endphp
                        <h5 class="font-weight-bold">    Time Left : </h5>
                                                                {{$difference->d.' Days '. $difference->h.' Hours '. $difference->i.' Minutes' }}

                    </span>


                            <div class="table-responsive d-none">
                                <table class="table table-bordered">
                                    <tbody>
                                    <tr>
                                        <td>Order Deadline: 10-06-2022 08:16</td>
                                    </tr>
                                    <tr>
                                        <td>Time Left
                                            : 0 Days 15 Hours 39 Minutes </td>

                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                    <hr>
                    <div class="row pb-5">
                        <div class="col-md-12 mb-3">

                    <span class="types">
                        Order ID :
                                    {{$data['order']['id']}}
                    </span>
                            <span class="types">
                        Number of Pages:
                                  {{$data['order']['erp_number_Pages']}}
                    </span>
                            <span class="types">
                      Topic:
                                  {{$data['order']['erp_order_topic']}}
                    </span>
                            <span class="types">
                        Spacing:
                                    {{$data['order']['erp_spacing'] == '1' ? 'Double' : 'single'}}

                    </span>



                            <span class="types">
                        Sources:
                                  {{$data['order']['erp_copy_sources']}}
                    </span>

                            <span class="types">
                       Customer’s
                                    @if ($data['order']['erp_deadline'] == "erp_eight_hrs")
                                    Deadline:8 Hours
                                @elseif($data['order']['erp_deadline'] == "erp_tf_hrs")

                                    Deadline:24 Hours

                                @elseif($data['order']['erp_deadline'] == "erp_fe_hrs")

                                    Deadline:48 Hours
                                @elseif($data['order']['erp_deadline'] == "erp_three_days")
                                    Deadline:Three days
                                @elseif($data['order']['erp_deadline'] == "erp_five_days")
                                    Deadline: 5 days
                                @elseif($data['order']['erp_deadline'] == "erp_seven_days")
                                    Deadline: 7 days
                                @elseif($data['order']['erp_deadline'] == "erp_fourteen_days")
                                    Deadline: 14 Hours
                                @elseif($data['order']['erp_deadline'] == "erp_fourteen_plus_days")
                                    Deadline:14+ Hours


                                @endif
                    </span>
                            <span class="types">
                        Paper Format:
                                {{$data['order']['erp_paper_format']}}

                    </span>

                            <span class="types">
                        Academic Level:
                                {{$data['order']['erp_academic_name']}}


                    </span>

                            <span class="types">
                        Paper Type:
                                   {{$data['order']['erp_paper_type']}} =>
                    </span>

                            <span class="types">
                      Paper Type  file =>
    <a class="text-decoration-none text-dark"  href="{{asset('image/announcement'.'/'.$data['order']['papertype_file'])}}" download>  <i class="fa fa-file fa-2x mx-2" aria-hidden="true"> </i> </a>
                    </span>

                            <span class="types">
                      Paper Format file =>

                                    <a class="text-decoration-none text-dark" href="{{asset('image/announcement'.'/'.$data['order']['paperformat_file'])}}" download>  <i class="fa fa-file fa-2x mx-2" aria-hidden="true"> </i> </a>

                    </span>


                            <span class="types">
                      Paper Type description:
                                {{$data['order']['papertype_desc']}}


                    </span>

                            <span class="types">

                                Paper format description:
                                {{$data['order']['paperformat_desc']}}


                    </span>





                        </div>
                        <div class="col-md-6 mb-3">
                                    <span class="types text-left d-block">
                                    1-Page Summary:PowerPoit Slides :
                            {{$data['order']['erp_powerPoint_slides']}}

                                    </span>
                        </div>
                        <div class="col-md-6 mb-3">
                                    <span class="types text-left d-block">
                                    1-Page Summary:
                                        {{$data['order']['erp_page_summary']}}

                                    </span>
                        </div>
                        <div class="col-md-6 mb-3">
                                    <span class="types text-left d-block">
                                    Statistical Analysis:
                                    {{$data['order']['erp_statistical_analysis']}}

                                    </span>
                        </div>
                        <div class="col-md-6 mb-3">
                                    <span class="types text-left d-block">
                                    Abstract:
                                    {{$data['order']['erp_abstract_page']}}

                                    </span>
                        </div>
                        <div class="col-md-6 mb-3">
                                    <span class="types text-left d-block">
                                    A Copy of Sources:
                                    {{$data['order']['erp_copy_sources']}}

                                    </span>
                        </div>
                        <div class="col-md-6 mb-3">
                                    <span class="types text-left d-block">
                                    Outline in Bullets:
                                    {{$data['order']['erp_paper_outline']}}

                                    </span>

                        </div>
                    </div>
                    @if($data['additional'] != null)
                        <label> <div class="col-12">
                                <h3 class="m-0">
                                    Additional instructions
                                </h3>
                            </div>
                        </label>

                        @foreach($data['additional'] as $row)

                            <div class=" col-md-8 d-block mb-4">
                                <div class="d-block types  text-left py-4 my-4 ">
                                    <div class="">
                                        <h6 class="mt-3 mb-0">
                                            Message:
                                        </h6>
                                        <p class="m-0">
                                        <p class="m-0">
                                            <strong> {{$row->erp_message}}  </strong>
                                        </p>
                                        </p>

                                    </div>
                                </div>
                                <span class="px-3 text-dark">
                                       {{$row->created_at}}
                    </span>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
{{--            <div id="ordersDetailModal" class="modal fade" role="dialog">--}}
{{--                <div class="modal-dialog">--}}
{{--                    <!-- Modal content-->--}}
{{--                    <div class="modal-content">--}}
{{--                        <div class="modal-header">--}}
{{--                            <h4 class="modal-title">Modal Header</h4>--}}
{{--                            <button type="button" class="close" data-dismiss="modal">×--}}
{{--                            </button>--}}
{{--                        </div>--}}
{{--                        <div class="modal-body">--}}
{{--                            <div class="orderBody return-to-available-body">--}}
{{--                                <h5>--}}
{{--                                    Are you sure you want to proceed with this action?--}}
{{--                                </h5>--}}
{{--                                <div class="modal-footer pb-0">--}}
{{--                                    <button type="button" class="btn btn-primary">Yes</button>--}}
{{--                                    <button type="button" class="btn btn-primary" data-dismiss="modal">No--}}
{{--                                    </button>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="orderBody bonus-penalty-body">--}}

{{--                                <form>--}}
{{--                                    <div class="form-group row">--}}
{{--                                        <label class="col-sm-4">Select Worker</label>--}}
{{--                                        <div class="col-sm-8">--}}
{{--                                            <div class="dropdown">--}}
{{--                                                <select name="" id="" class="form-control">--}}
{{--                                                    <option value="0">Select</option>--}}
{{--                                                    <option value="">Worker 1</option>--}}
{{--                                                    <option value="">Worker 2</option>--}}
{{--                                                </select>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="form-group row">--}}
{{--                                        <label class="col-sm-4">Select Action</label>--}}
{{--                                        <div class="col-sm-8">--}}
{{--                                            <div class="dropdown">--}}
{{--                                                <select name="" id="" class="form-control">--}}
{{--                                                    <option value="0">Select</option>--}}
{{--                                                    <option value="0">Action 1</option>--}}
{{--                                                    <option value="0">Action 2</option>--}}
{{--                                                </select>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                    <div class="form-group row">--}}
{{--                                        <label class="col-sm-4">Enter Amount</label>--}}
{{--                                        <div class="col-sm-8">--}}
{{--                                            <input type="text" class="form-control" id="" placeholder="Enter Amount Here">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                    <div class="form-group row">--}}
{{--                                        <label class="col-sm-4">Reason</label>--}}
{{--                                        <div class="col-sm-8">--}}
{{--                                            <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                </form>--}}

{{--                                <div class="modal-footer pb-0">--}}
{{--                                    <button type="button" class="btn btn-primary">Submit</button>--}}
{{--                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel--}}
{{--                                    </button>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="orderBody request-revision-body">--}}
{{--                                <form>--}}
{{--                                    <div class="form-group row">--}}
{{--                                        <label class="col-sm-4">Select Worker</label>--}}
{{--                                        <div class="col-sm-8">--}}
{{--                                            <div class="dropdown">--}}
{{--                                                <select name="" id="" class="form-control">--}}
{{--                                                    <option value="0">Select</option>--}}
{{--                                                    <option value="">Worker 1</option>--}}
{{--                                                    <option value="">Worker 2</option>--}}
{{--                                                </select>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                    <div class="form-group row">--}}
{{--                                        <label class="col-sm-4">Reason</label>--}}
{{--                                        <div class="col-sm-8">--}}
{{--                                            <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                </form>--}}

{{--                                <div class="modal-footer pb-0">--}}
{{--                                    <button type="button" class="btn btn-primary">Submit</button>--}}
{{--                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel--}}
{{--                                    </button>--}}
{{--                                </div>--}}

{{--                            </div>--}}

{{--                            <div class="orderBody force-assign-body">--}}
{{--                                <form>--}}
{{--                                    <div class="form-group row">--}}
{{--                                        <label class="col-sm-4">Select Team/Group</label>--}}
{{--                                        <div class="col-sm-8">--}}
{{--                                            <div class="dropdown">--}}
{{--                                                <select name="" id="" class="form-control">--}}
{{--                                                    <option value="0">Select</option>--}}
{{--                                                    <option value="">Team/Group 1</option>--}}
{{--                                                    <option value="">Team/Group 2</option>--}}
{{--                                                </select>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="form-group row">--}}
{{--                                        <label class="col-sm-4">Select Role</label>--}}
{{--                                        <div class="col-sm-8">--}}
{{--                                            <div class="dropdown">--}}
{{--                                                <select name="" id="" class="form-control">--}}
{{--                                                    <option value="0">Select</option>--}}
{{--                                                    <option value="">Role 1</option>--}}
{{--                                                    <option value="">Role 2</option>--}}
{{--                                                </select>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="form-group row">--}}
{{--                                        <label class="col-sm-4">Select Worker</label>--}}
{{--                                        <div class="col-sm-8">--}}
{{--                                            <div class="dropdown">--}}
{{--                                                <select name="" id="" class="form-control">--}}
{{--                                                    <option value="0">Select</option>--}}
{{--                                                    <option value="">Worker 1</option>--}}
{{--                                                    <option value="">Worker 2</option>--}}
{{--                                                </select>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                    <div class="form-group row">--}}
{{--                                        <label class="col-sm-4">Reason</label>--}}
{{--                                        <div class="col-sm-8">--}}
{{--                                            <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                </form>--}}

{{--                                <div class="modal-footer pb-0">--}}
{{--                                    <button type="button" class="btn btn-primary">Confirm</button>--}}
{{--                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel--}}
{{--                                    </button>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="orderBody order-status-body">--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-md-5"><label>Change Order Status</label></div>--}}
{{--                                    <div class="col-md-7">--}}

{{--                                        <select name="" id="" class="form-control">--}}
{{--                                            <option value="">Select</option>--}}
{{--                                            <option value="">New Order</option>--}}
{{--                                            <option value="">Available Order</option>--}}
{{--                                            <option value="">Open Bid</option>--}}
{{--                                            <option value="">Hidden Order</option>--}}
{{--                                            <option value="">Pending Order</option>--}}
{{--                                            <option value="">Pending Late Order</option>--}}
{{--                                            <option value="">Pending Late Order</option>--}}
{{--                                            <option value="">Orders Completed</option>--}}
{{--                                            <option value="">Orders Completed</option>--}}
{{--                                            <option value="">Pending Rewrite</option>--}}
{{--                                            <option value="">Rewrite Order Completed</option>--}}
{{--                                            <option value="">Rewrite Order Completed</option>--}}
{{--                                            <option value="">Cancelled</option>--}}
{{--                                            <option value="">Dispute</option>--}}
{{--                                            <option value="">Refunded</option>--}}
{{--                                        </select>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div class="modal-footer pb-0">--}}
{{--                                    <button type="button" class="btn btn-primary">Save</button>--}}
{{--                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel--}}
{{--                                    </button>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="orderBody flag-body">--}}
{{--                                <h5>--}}
{{--                                    Are you sure you want to Flag this order?--}}
{{--                                </h5>--}}

{{--                                <div class="modal-footer pb-0">--}}
{{--                                    <button type="button" class="btn btn-primary">Yes</button>--}}
{{--                                    <button type="button" class="btn btn-primary" data-dismiss="modal">No--}}
{{--                                    </button>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="orderBody order-hidden-body">--}}
{{--                                order-hidden Popup Body--}}

{{--                                <div class="modal-footer pb-0">--}}
{{--                                    <button type="button" class="btn btn-primary">Yes</button>--}}
{{--                                    <button type="button" class="btn btn-primary" data-dismiss="modal">No--}}
{{--                                    </button>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="orderBody order-return-body">--}}
{{--                                <div class="table-responsive">--}}
{{--                                    <table class="table table-bordered">--}}
{{--                                        <thead>--}}
{{--                                        <tr>--}}
{{--                                            <th>Worker’s Name</th>--}}
{{--                                            <th>Role</th>--}}
{{--                                            <th>Reason</th>--}}
{{--                                        </tr>--}}
{{--                                        </thead>--}}
{{--                                        <tbody>--}}
{{--                                        <tr>--}}
{{--                                            <td>XXXXX</td>--}}
{{--                                            <td>XXXXX</td>--}}
{{--                                            <td>XXXXX</td>--}}
{{--                                        </tr>--}}
{{--                                        </tbody>--}}
{{--                                    </table>--}}
{{--                                </div>--}}
{{--                                <div class="modal-footer pb-0">--}}
{{--                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel--}}
{{--                                    </button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
        <!--Orders tab Ends-->
        <!--Messages Ends-->


        <!--Messages Start-->


    </div></div>

