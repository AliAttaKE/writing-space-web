    @extends('worker/layouts/master')
@section('title')
    Order Details
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="body">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs tab-nav-right" role="tablist">
                            <li role="presentation">
                                <a href="#home" data-toggle="tab" class="show active">Order Detail</a>
                            </li>
                            <li role="presentation">
                                <a href="#Messages" data-toggle="tab" class="">Messages</a>
                            </li>
                            <li role="presentation">
                                <a href="#Upload" data-toggle="tab" class="">Upload File</a>
                            </li>

                        </ul>
                        <!-- Tab panes -->
                        @include('management/layouts/error')

                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active show" id="home">
                                <div class="tab-content">
                                    <!--Orders tab Start-->
                                    <div id="tab1" class="pt-3 tab-pane fade in active show">
                                        <div class="row blockquote bg-white">
                                            <div class="col-md-2 col-12 ">
                                                <a href="#"
                                                   class="btn btn-primary h-auto text-left mb-3 width100"
                                                   data-toggle="modal" data-target="#exampleModal_5"
                                                   data-whatever="@mdo" style="display: block;
                                    width: 100%" data-type="review-deadline">Deadline Extension Request
                                                </a>
                                                <div class="modal fade" id="exampleModal_5" tabindex="-1" role="dialog"
                                                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <form action="{{url('/newdeadline')}}" method="post" enctype="multipart/form-data">
                                                            @csrf
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" style="color: black"
                                                                    id="formModal">Deadline Extension Request</h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                        aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">

                                                                    <div class="form-group">
                                                                        <label for="recipient-name">Select
                                                                            Deadline</label>
                                                                        <select class="form-control"
                                                                                id="deadline" name="deadline">
                                                                            <option readonly disabled selected> Select</option>
                                                                            <option value="bid">My Bid Date</option>
                                                                            <option value="client">Client Date</option>
                                                                        </select>
                                                                        <input type="hidden" name="order_id" id="order_id" value="{{$data['order']->id}}">
                                                                        <input type="hidden" name="erp_date" id="order_id" value="{{$data['order']->erp_datetime}}">
                                                                        <input type="hidden"  name="user_id" value="{{auth::user()->id}}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="message-text">Original Date and
                                                                            Time</label>
                                                                        <div class="col-sm-12">
                                                                            <div class="form-group">
                                                                                <div class="form-line" id="datetimeext">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="message-text">New Date and
                                                                            Time</label>
                                                                        <div class="col-sm-12">
                                                                            <div class="form-group">
                                                                                <div class="form-line">

                                                                                    <input id="newdate"
                                                                                           type="datetime-local"
                                                                                               name="newdate">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                <label for="recipient-name">Select
                                                                    Deadline</label>
                                                                <div class="form-group row">

                                                                    <div class="col-sm-12">
                                                                        <div class="dropdown">

                                                                            <select id="" class="form-control reasons">
                                                                                <   option value="0">Select</option>
                                                                                @foreach($data['reasons'] as $res)
                                                                                    <option value="{{$res->id}}" data-description="{{$res->description}}">{{$res->name}}</option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <script>
                                                                        $('.reasons').on('change',function(){

                                                                            let x = $(this).find(':selected').data("description");
                                                                            $('#reason').text(x);
                                                                        })
                                                                    </script>
                                                                </div>



                                                                    <div class="form-group">

                                                                        <label for="email_address1">Reason</label>
                                                                        <textarea name="reason"
                                                                                  class="form-control" id="reason"
                                                                                  cols="30" rows="10"></textarea>
                                                                    </div>




                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel
                                                                </button>
                                                                <button type="submit" class="btn btn-danger">Submit
                                                                </button>
                                                            </div>
                                                        </div>
                                                        </form>

                                                    </div>
                                                </div>


                                                <button class="btn btn-primary text-left mb-3 h-auto width100 btnOrdersDetail"
                                                        style="display: block;
                                    width: 100%" data-type="return-to-available" data-toggle="modal"
                                                        data-target="#result1">Request Revision
                                                </button>
                                                <div class="modal fade" id="result1" tabindex="-1" role="dialog"
                                                     aria-labelledby="formModal" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <form action="{{url('revision-request')}}" method="post">
                                                            @Csrf
                                                        <div class="modal-content">
                                                            <div class="create_questions">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" style="color: black"
                                                                        id="formModal">Request Revision</h5>
                                                                    <button type="button" class="close"
                                                                            data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">×</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                        <div>
                                                                            <label for="">Select Role & Worker</label>
                                                                            <select class="form-control select2"
                                                                                    name="teamorder_id" id="teamorder_id"
                                                                                    data-placeholder="Select">
                                                                                <option disabled readonly selected value="">Select</option>
                                                                                @foreach($data['workers'] as $worker)
                                                                                    @if($worker['users'] != null && auth()->user()->id !=$worker['users']->id)
                                                                                <option value=" {{$worker->id}}">{{'Role: '.$worker['commissionwork']->package_name}} | {{'Name: '. $worker['users']->name}} </option>
                                                                           @endif
                                                                            @endforeach
                                                                            </select>
                                                                            <br>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="email_address1">Reason</label>
                                                                            <textarea name="reason"
                                                                                      class="form-control"
                                                                                      id="reason" cols="30"
                                                                                      rows="10"></textarea>
                                                                        </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">


                                                                <button type="Button" class="btn btn-info waves-effect" data-dismiss="modal">
                                                                    Cancel
                                                                </button>
                                                                <button type="submit"
                                                                        class="btn btn-danger waves-effect">Submit
                                                                </button>
                                                            </div>
                                                        </div>
                                                        </form>

                                                    </div>

                                                </div>
                                                <button class="btn btn-primary text-left mb-3 h-auto width100 btnOrdersDetail"
                                                        style="display: block;
                                    width: 100%" data-type="return-to-available" data-toggle="modal"
                                                        data-target="#result2">Request More Pages
                                                </button>
                                                <div class="modal fade" id="result2" tabindex="-1" role="dialog"
                                                     aria-labelledby="formModal" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <form action="{{Url('PageRequest')}}" method="post"
                                                              enctype="multipart/form-data">
                                                            @csrf
                                                        <div class="modal-content">
                                                            <div class="create_questions">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" style="color: black"
                                                                        id="formModal">Request More Pages</h5>
                                                                    <button type="button" class="close"
                                                                            data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">×</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">

                                                                        <input type="hidden" value="{{$data['name']['id']}}" name="team_order_id">
                                                                    <input type="hidden" name="erp_date" id="order_id" value="{{$data['order']->erp_datetime}}">


                                                                    <div>
                                                                            <label for="">No of Pages</label>
                                                                            <input type="number" class="form-control" min="0" name="pages_no">
                                                                            <br>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="message-text">Select
                                                                                Deadline</label>
                                                                            <div class="col-sm-12">

                                                                                <div class="form-group">
                                                                                    <div class="form-line">

                                                                                        <input id="party"
                                                                                               type="datetime-local"
                                                                                               name="DateTime"
                                                                                        >
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    <label for="recipient-name">Select
                                                                        Deadline</label>
                                                                    <div class="form-group row">

                                                                        <div class="col-sm-12">
                                                                            <div class="dropdown">

                                                                                <select id="" class="form-control reas">
                                                                                    <option value="0">Select</option>
                                                                                    @foreach($data['reasons'] as $res)
                                                                                        <option value="{{$res->id}}" data-description="{{$res->description}}">{{$res->name}}</option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <script>
                                                                            $('.reas').on('change',function(){

                                                                                let x = $(this).find(':selected').data("description");
                                                                                $('#reasons').text(x);
                                                                            })
                                                                        </script>
                                                                    </div>

                                                                    <div class="form-group">

                                                                            <label for="email_address1">Reason</label>
                                                                            <textarea name="description"
                                                                                      class="form-control"
                                                                                      id="reasons" cols="30"
                                                                                      rows="10"></textarea>
                                                                        </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">

                                                                <button type="submit"
                                                                        class="btn btn-danger waves-effect"
                                                                        data-dismiss="modal">Cancel
                                                                </button>
                                                                <button type="submit" class="btn btn-info waves-effect">
                                                                    Save
                                                                </button>
                                                            </div>
                                                        </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <button  onclick="saveDiv('pdf','Title')" class="btn btn-primary text-left mb-3 h-auto width100 btnOrdersDetail"
                                                         style="display: block;
                                    width: 100%">Download Order Summary
                                                </button>

                                                <button class="btn btn-primary text-left mb-3 h-auto width100 btnOrdersDetail"
                                                        style="display: block;
                                    width: 100%" data-type="return-to-available" data-toggle="modal"
                                                        data-target="#Flag">Flag
                                                </button>
                                                <div class="modal fade" id="Flag" tabindex="-1" role="dialog"
                                                     aria-labelledby="formModal" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <form method="post" action="{{url('flag-order-user')}}">
                                                            @csrf
                                                            <input type="hidden" name="order_id" value="{{$data['order']->id}}">
                                                        <div class="modal-content">
                                                            <div class="create_questions">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" style="color: black"
                                                                        id="formModal">Flag</h5>
                                                                    <button type="button" class="close"
                                                                            data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">×</span>
                                                                    </button>
                                                                </div>
                                                                <div class="container">
                                                                    <div class="form-group row">
                                                                        <div class="col-sm-12">
                                                                            <div class="form-group">
                                                                                <label for="email_address1">Are you sure
                                                                                    you want to Flag this order?</label>
                                                                                <textarea name="reason"
                                                                                          class="form-control"
                                                                                          id="reason" cols="30"
                                                                                          rows="10"></textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer pb-0">

                                                                        <button type="button" data-dismiss="modal"
                                                                                class="btn btn-primary">No
                                                                        </button>
                                                                        <button type="submit" class="btn btn-primary">
                                                                            Yes
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <button class="btn btn-primary text-left mb-3 h-auto width100 btnOrdersDetail"
                                                        style="display: block;
                                    width: 100%" data-type="return-to-available" data-toggle="modal"
                                                        data-target="#Reasons">Return To Available
                                                </button>
                                                <div class="modal fade" id="Reasons" tabindex="-1" role="dialog"
                                                     aria-labelledby="formModal" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="create_questions">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" style="color: black"
                                                                        id="formModal">Return To Available</h5>
                                                                    <button type="button" class="close"
                                                                            data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">×</span>
                                                                    </button>
                                                                </div>
                                                                <div class="card-body text-dark">
                                                                    <div class="form-group">
                                                                        <form action="{{url('/return-order')}}" method="post"
                                                                              enctype="multipart/form-data">
                                                                            @csrf
                                                                            @php
                                                                                $team_orderid ='';
                                                                            @endphp
                                                                            @foreach ($data['workers'] as $row)
                                                                            @if($row['erp_user_id'] == Auth()->user()->id)

                                                                                @php
                                                                                    $team_orderid = $row['id'];

                                                                                    @endphp

                                                                                @endif
                                                                            @endforeach
                                                                            <input type="hidden" name="team_order_id" value="{{$team_orderid}}">
                                                                            <input type="hidden" name="user_id" value="{{Auth()->user()->id}}">
                                                                            <input type="hidden" name="order_id" value="{{$row->erp_order_id}}">


                                                                            <label for="email_address1">Reason</label>
                                                                        <textarea name="reason"
                                                                                  class="form-control" id="comment_text"
                                                                                  cols="30" rows="10"></textarea>

                                                                    <div class="modal-footer">


                                                                        <button type="submit"
                                                                                class="btn btn-danger waves-effect" data-dismiss="modal">Cancel
                                                                        </button>
                                                                        <button type="submit"
                                                                                class="btn btn-info waves-effect"
                                                                                >Submit
                                                                        </button>

                                                                    </div>
                                                                    </div>
                                                                </form>

                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-10" >
                                                <table id="pdf" class="d-none">
                                                    <tbody>
                                                    <tr>
                                                        <td>
                                                            <p style="font-style: italic; background-color: #f1efef !important; color: #070808; font-size: 14px;padding:15px;border-radius:20px;">
                                                                Team : {{$data['workers'][0]['teams']['erp_team_name']}} <br>
                                                            @foreach($data['workers'] as $details)

                                                                {{$details['commissionwork']['package_name']}}
                                                                : {{$details['users'] != null ? $details['users']['name'] : 'Not Assign' }}</br>

                                                                @endforeach
                                                            </p>
                                                        </td>

                                                        <td style="font-style: italic;background-color: #f1efef !important; color: #070808;font-size: 14px;border-radius:20px;">

                                                              <p style="margin:0px;font-style: italic;background-color: #f1efef !important; color: #070808;font-size: 14px;border-radius:20px;">
                                                                Order ID :
                                                                            {{$details->erp_order_id}}
                                                            </p>
                                                            <p  style="margin:0px;font-style: italic;background-color: #f1efef !important; color: #070808;font-size: 14px;border-radius:20px;">
                                                           Number of Pages: {{$details['order']['erp_number_Pages']}}
                                                            </p>

                                                            <p  style="margin:0px;font-style: italic;background-color: #f1efef !important; color: #070808;font-size: 14px;border-radius:20px;">
                                                            Topic: {{$details['order']['erp_order_topic']}}
                                                        </p>
                                                            <p  style="margin:0px;font-style: italic;background-color: #f1efef !important; color: #070808;font-size: 14px;border-radius:20px;">
                                                            Spacing: {{$details['order']['erp_spacing'] == '1' ? 'Double' : 'single'}}
                                                        </p>
                                                            <p  style="margin:0px;font-style: italic;background-color: #f1efef !important; color: #070808;font-size: 14px;border-radius:20px;">
                                                            Sources: {{$details['order']['erp_copy_sources']}}
                                                        </p>
                                                            <p  style="margin:0px;font-style: italic;background-color: #f1efef !important; color: #070808;font-size: 14px;border-radius:20px;">
                                                            Customer
                                                                        @if ($details['order']['erp_deadline'] == "erp_eight_hrs")
                                                                    Deadline:8 Hours
                                                                @elseif($details['order']['erp_deadline'] == "erp_tf_hrs")
                                                                    Deadline:24 Hours
                                                                @elseif($details['order']['erp_deadline'] == "erp_fe_hrs")
                                                                    Deadline:48 Hours
                                                                @elseif($details['order']['erp_deadline'] == "erp_three_days")
                                                                    Deadline:Three days
                                                                @elseif($details['order']['erp_deadline'] == "erp_five_days")
                                                                    Deadline: 5 days
                                                                @elseif($details['order']['erp_deadline'] == "erp_seven_days")
                                                                    Deadline: 7 days
                                                                @elseif($details['order']['erp_deadline'] == "erp_fourteen_days")
                                                                    Deadline: 14 Hours
                                                                @elseif($details['order']['erp_deadline'] == "erp_fourteen_plus_days")
                                                                    Deadline:14+ Hours
                                                                @endif
                                                        </p>
                                                            <p class="types" style="margin:0px;font-style: italic;background-color: #f1efef !important; color: #070808;font-size: 14px;border-radius:20px;">
                                                            Paper Format: {{$details['order']['erp_paper_format']}}
                                                        </p>
                                                            <p class="types" style="margin:0px;font-style: italic;background-color: #f1efef !important; color: #070808;font-size: 14px;border-radius:20px;">
                                                            Academic Level: {{$details['order']['erp_academic_name']}}
                                                        </p>
                                                            <p class="types" style="margin:0px;font-style: italic;background-color: #f1efef !important; color: #070808;font-size: 14px;border-radius:20px;">
                                                            Paper Type : {{$details['order']['erp_paper_type']}}
                                                        </p>
                                                            <p class="types" style="margin:0px;font-style: italic;background-color: #f1efef !important; color: #070808;font-size: 14px;border-radius:20px;">
                                                            Subject:  {{$details['order']['erp_subject_name']}}
                                                        </p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                             <p class="types  d-block text-left" style="font-style: italic;background-color: #f1efef !important; color: #070808;font-size: 14px;border-radius:20px;">
                                                                    PowerPoint: {{$details['order']['erp_powerPoint_slides']}}   <br>
                                                                         1-Page Summary: {{$details['order']['erp_page_summary']}}<br>
                                                                             Statistical Analysis: {{$details['order']['erp_statistical_analysis']}}<br>

                                                                    Abstract: {{$details['order']['erp_abstract_page']}}</br>
                                                                 A Copy of Sources: {{$details['order']['erp_copy_sources']}}</br>
                                                                 Outline in Bullets: {{$details['order']['erp_paper_outline']}}</br>

                                                                 <footer>  <h5 style=""> Writing Management System <span> <a href="https://eliteblue.net/"> ELiteblue Technologies</a></span> </h5></footer>

                            </p>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>

                                                <div class="row">
                                                    <div class="col-md-4 mb-3">

                                                                     <span class="types  d-block text-left">
                         <h5 class="font-weight-bold">Team:</h5>
                                    Name : {{$data['workers'][0]['teams']['erp_team_name']}} <br>
                                                                         @foreach($data['workers'] as $details)

                                                                             {{$details['commissionwork']['package_name']}}
                                                                             : {{$details['users'] != null ? $details['users']['name'] : 'Not Assign' }}</br>

                                                                         @endforeach
                            </span>
                                                        <div class="table-responsive d-none">
                                                            <table class="table table-bordered">
                                                                <tbody>
                                                                <tr>
                                                                    <td>Team Name
                                                                        : {{$data['workers'][0]['teams']['erp_team_name']}}</td>
                                                                </tr>
                                                                @foreach($data['workers'] as $details)
                                                                    <tr>
                                                                        <td> {{$details['commissionwork']['package_name']}}
                                                                            : {{$details['users'] != null ? $details['users']['name'] : 'Not Assign' }}</td>
                                                                    </tr>
                                                                @endforeach


                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mb-3 ">



                                                    </div>
                                                    <div class="col-md-4 mb-3 ">

                                                                     <span class="types  d-block text-left bg-danger text-white">
                         <h5 class="font-weight-bold">Order's Deadline:</h5>
                                                                      <h6>   {{ date('d-M-Y  | h:i A', strtotime($details['order']['erp_datetime']))}} </h6>



                            </span>

                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered">
{{--                                                                <tbody>--}}
{{--                                                                <tr>--}}
{{--                                                                    <td>Your--}}
{{--                                                                        Deadline: {{ date('d-m-Y h:i', strtotime($data['bids']['erp_datetime']))}}</td>--}}
{{--                                                                </tr>--}}
{{--                                                                <tr>--}}
{{--                                                                    @php--}}
{{--                                                                        $biddate = new DateTime($data['bids']['erp_datetime']);--}}
{{--                                                                        $current = new DateTime();--}}
{{--                                                                        $difference = $biddate->diff($current);--}}
{{--                                                                    @endphp--}}
{{--                                                                    <td>Time Left--}}
{{--                                                                        : {{$difference->d.' Days '. $difference->h.' Hours '. $difference->i.' Minutes' }} </td>--}}
{{--                                                                </tr>--}}
{{--                                                                </tbody>--}}
                                                            </table>
                                                        </div>
                                                    </div>
{{--                                                    <div class="col-md-4 mb-3">--}}
{{--                                                        <div class="table-responsive">--}}
{{--                                                            <table class="table table-bordered">--}}
{{--                                                                <tbody>--}}
{{--                                                                <tr>--}}
{{--                                                                    <td>Profits: $XXX</td>--}}
{{--                                                                </tr>--}}
{{--                                                                <tr>--}}
{{--                                                                    <td>Role 1: $XXX</td>--}}
{{--                                                                </tr>--}}
{{--                                                                <tr>--}}
{{--                                                                    <td>Role 2: $XXX</td>--}}
{{--                                                                </tr>--}}
{{--                                                                <tr>--}}
{{--                                                                    <td>Role 3: $XXX</td>--}}
{{--                                                                </tr>--}}
{{--                                                                </tbody>--}}
{{--                                                            </table>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
                                                    <div class="col-md-12 mb-3">
                                                          <span class="types">
                                                                Order ID :
                                                                            {{$details->erp_order_id}}
                                                            </span>
                                                        <span class="types">
                                                           Number of Pages: {{$details['order']['erp_number_Pages']}}
                                                            </span>

                                                        <span class="types">
                                                            Topic: {{$details['order']['erp_order_topic']}}
                                                        </span>
                                                        <span class="types">
                                                            Spacing: {{$details['order']['erp_spacing'] == '1' ? 'Double' : 'single'}}
                                                        </span>
                                                        <span class="types">
                                                            Sources: {{$details['order']['erp_copy_sources']}}
                                                        </span>
                                                        <span class="types">
                                                            Customer’s
                                                                        @if ($details['order']['erp_deadline'] == "erp_eight_hrs")
                                                                Deadline:8 Hours
                                                            @elseif($details['order']['erp_deadline'] == "erp_tf_hrs")
                                                                Deadline:24 Hours
                                                            @elseif($details['order']['erp_deadline'] == "erp_fe_hrs")
                                                                Deadline:48 Hours
                                                            @elseif($details['order']['erp_deadline'] == "erp_three_days")
                                                                Deadline:Three days
                                                            @elseif($details['order']['erp_deadline'] == "erp_five_days")
                                                                Deadline: 5 days
                                                            @elseif($details['order']['erp_deadline'] == "erp_seven_days")
                                                                Deadline: 7 days
                                                            @elseif($details['order']['erp_deadline'] == "erp_fourteen_days")
                                                                Deadline: 14 Hours
                                                            @elseif($details['order']['erp_deadline'] == "erp_fourteen_plus_days")
                                                                Deadline:14+ Hours
                                                            @endif
                                                        </span>
                                                        <span class="types">
                                                            Paper Format: {{$details['order']['erp_paper_format']}}
                                                        </span>
                                                        <span class="types">
                                                            Academic Level: {{$details['order']['erp_academic_name']}}
                                                        </span>
                                                        <span class="types">
                                                            Paper Type : {{$details['order']['erp_paper_type']}}
                                                        </span>
                                                        <span class="types">
                                                            Subject:  {{$details['order']['erp_subject_name']}}
                                                        </span>
                                                        <div class="row">
                                                            <div class="col-md-4 mb-3">

                                                                     <span class="types  d-block text-left">
                                                                    PowerPoint: {{$details['order']['erp_powerPoint_slides']}}   <br>
                                                                         1-Page Summary: {{$details['order']['erp_page_summary']}}<br>
                                                                             Statistical Analysis: {{$details['order']['erp_statistical_analysis']}}<br>

                                                                    Abstract: {{$details['order']['erp_abstract_page']}}</br>
                                                                A Copy of Sources: {{$details['order']['erp_copy_sources']}}</br>
                                                               Outline in Bullets: {{$details['order']['erp_paper_outline']}}</br>

                                                       </span>
                                                            </div>
                                                        </div>

                                                        <div class="table-responsive d-none">
                                                            <table class="table table-bordered">
                                                                <tbody>
                                                                <tr>
                                                                    <td>Order ID: {{$details->erp_order_id}} </td>
                                                                    <td> Number of Pages: {{$details['order']['erp_number_Pages']}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Topic: {{$details['order']['erp_order_topic']}} </td>
                                                                    <td>Spacing: {{$details['order']['erp_spacing'] == '1' ? 'Double' : 'single'}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Sources: {{$details['order']['erp_copy_sources']}}</td>
                                                                    <td>Customer’s
                                                                        @if ($details['order']['erp_deadline'] == "erp_eight_hrs")
                                                                            Deadline:8 Hours
                                                                        @elseif($details['order']['erp_deadline'] == "erp_tf_hrs")
                                                                                Deadline:24 Hours
                                                                        @elseif($details['order']['erp_deadline'] == "erp_fe_hrs")
                                                                                Deadline:48 Hours
                                                                        @elseif($details['order']['erp_deadline'] == "erp_three_days")
                                                                                Deadline:Three days
                                                                        @elseif($details['order']['erp_deadline'] == "erp_five_days")
                                                                                Deadline: 5 days
                                                                        @elseif($details['order']['erp_deadline'] == "erp_seven_days")
                                                                                Deadline: 7 days
                                                                        @elseif($details['order']['erp_deadline'] == "erp_fourteen_days")
                                                                                Deadline: 14 Hours
                                                                        @elseif($details['order']['erp_deadline'] == "erp_fourteen_plus_days")
                                                                                Deadline:14+ Hours
                                                                        @endif
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Paper Format: {{$details['order']['erp_paper_format']}}</td>
                                                                    <td>Academic Level: {{$details['order']['erp_academic_name']}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Paper Type : {{$details['order']['erp_paper_type']}}</td>
                                                                    <td>Subject:  {{$details['order']['erp_subject_name']}}</td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mb-3 d-none">
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered">
                                                                <tbody>
                                                                <tr>
                                                                    <td>PowerPoint: {{$details['order']['erp_powerPoint_slides']}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>1-Page Summary: {{$details['order']['erp_page_summary']}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Statistical Analysis: {{$details['order']['erp_statistical_analysis']}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Abstract: {{$details['order']['erp_abstract_page']}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>A Copy of Sources: {{$details['order']['erp_copy_sources']}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Outline in Bullets: {{$details['order']['erp_paper_outline']}}</td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>


{{--                                                    <div class="col-md-6 mb-3">--}}
{{--                                                        <div class="blockquote">--}}
{{--                                                            <label>Instruction Details</label>--}}
{{--                                                            <textarea name="" id="" cols="30" rows="10"--}}
{{--                                                                      class="form-control">xxxxxxx</textarea>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
                                                </div>
                                            </div>


{{--                                            <a href="javascript:genPDF()">Download PDF</a>--}}


                                            <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>



{{--                                            <button onclick="printDiv('pdf','Title')">print div</button>--}}

{{--                                            <button onclick="saveDiv('pdf','Title')">save div as pdf</button>--}}





                                            <script>
                                                var doc = new jsPDF();

                                                function saveDiv(divId, title) {
                                                    doc.fromHTML(`<html><head><title>${title}</title></head><body>` + document.getElementById(divId).innerHTML + `</body></html>`);
                                                    doc.save('div.pdf');
                                                }

                                                function printDiv(divId,
                                                                  title) {

                                                    let mywindow = window.open('', 'PRINT', 'height=650,width=900,top=100,left=150');

                                                    mywindow.document.write(`<html><head><title>${title}</title>`);
                                                    mywindow.document.write('</head><body >');
                                                    mywindow.document.write(document.getElementById(divId).innerHTML);
                                                    mywindow.document.write('</body></html>');

                                                    mywindow.document.close(); // necessary for IE >= 10
                                                    mywindow.focus(); // necessary for IE >= 10*/

                                                    mywindow.print();
                                                    mywindow.close();

                                                    return true;
                                                }

                                            </script>




                                        </div>
                                        <div id="ordersDetailModal" class="modal fade" role="dialog">
                                            <div class="modal-dialog">
                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Modal Header</h4>
                                                        <button type="button" class="close" data-dismiss="modal">×
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="orderBody return-to-available-body">
                                                            <h5>
                                                                Are you sure you want to proceed with this action?
                                                            </h5>
                                                            <div class="modal-footer pb-0">
                                                                <button type="button" class="btn btn-primary">Yes
                                                                </button>
                                                                <button type="button" class="btn btn-primary"
                                                                        data-dismiss="modal">No
                                                                </button>
                                                            </div>
                                                        </div>

                                                        <div class="orderBody bonus-penalty-body">
                                                            <form>
                                                                <div class="form-group row">
                                                                    <label class="col-sm-4">Select Worker</label>
                                                                    <div class="col-sm-8">
                                                                        <div class="dropdown">
                                                                            <select name="" id="" class="form-control">
                                                                                <option value="0">Select</option>
                                                                                <option value="">Worker 1</option>
                                                                                <option value="">Worker 2</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-sm-4">Select Action</label>
                                                                    <div class="col-sm-8">
                                                                        <div class="dropdown">
                                                                            <select name="" id="" class="form-control">
                                                                                <option value="0">Select</option>
                                                                                <option value="0">Bonus</option>
                                                                                <option value="0">Penalty</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row">
                                                                    <label class="col-sm-4">Enter Amount</label>
                                                                    <div class="col-sm-8">
                                                                        <input type="text" class="form-control" id=""
                                                                               placeholder="Enter Amount Here">
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row">
                                                                    <label class="col-sm-4">Reason</label>
                                                                    <div class="col-sm-8">
                                                                        <textarea name="" id="" cols="30" rows="10"
                                                                                  class="form-control"></textarea>
                                                                    </div>
                                                                </div>

                                                            </form>

                                                            <div class="modal-footer pb-0">
                                                                <button type="button" class="btn btn-primary">Submit
                                                                </button>
                                                                <button type="button" class="btn btn-primary"
                                                                        data-dismiss="modal">Cancel
                                                                </button>
                                                            </div>
                                                        </div>

                                                        <div class="orderBody request-revision-body">
                                                            <form>
                                                                <div class="form-group row">
                                                                    <label class="col-sm-4">Select Worker</label>
                                                                    <div class="col-sm-8">
                                                                        <div class="dropdown">
                                                                            <select name="" id="" class="form-control">
                                                                                <option value="0">Select</option>
                                                                                <option value="">Worker 1</option>
                                                                                <option value="">Worker 2</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row">

                                                                  <label class="col-sm-4">Reason</label>
                                                                    <div class="col-sm-8">
                                                                        <textarea name="" id="" cols="30" rows="10"
                                                                                  class="form-control"></textarea>
                                                                    </div>
                                                                </div>

                                                            </form>

                                                            <div class="modal-footer pb-0">
                                                                <button type="button" class="btn btn-primary">Submit
                                                                </button>
                                                                <button type="button" class="btn btn-primary"
                                                                        data-dismiss="modal">Cancel
                                                                </button>
                                                            </div>

                                                        </div>

                                                        <div class="orderBody force-assign-body">
                                                            <form>
                                                                <div class="form-group row">
                                                                    <label class="col-sm-4">Select Team/Group</label>
                                                                    <div class="col-sm-8">
                                                                        <div class="dropdown">
                                                                            Profits                             <select name="" id="" class="form-control">
                                                                                <option value="0">Select</option>
                                                                                <option value="">Team/Group 1</option>
                                                                                <option value="">Team/Group 2</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-sm-4">Select Role</label>
                                                                    <div class="col-sm-8">
                                                                        <div class="dropdown">
                                                                            <select name="" id="" class="form-control">
                                                                                <option value="0">Select</option>
                                                                                <option value="">Role 1</option>
                                                                                <option value="">Role 2</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-sm-4">Select Worker</label>
                                                                    <div class="col-sm-8">
                                                                        <div class="dropdown">
                                                                            <select name="" id="" class="form-control">
                                                                                <option value="0">Select</option>
                                                                                <option value="">Worker 1</option>
                                                                                <option value="">Worker 2</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row">
                                                                    <label class="col-sm-4">Reason</label>
                                                                    <div class="col-sm-8">
                                                                        <textarea name="" id="" cols="30" rows="10"
                                                                                  class="form-control"></textarea>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <div class="modal-footer pb-0">
                                                                <button type="button" class="btn btn-primary">Confirm
                                                                </button>
                                                                <button type="button" class="btn btn-primary"
                                                                        data-dismiss="modal">Cancel
                                                                </button>
                                                            </div>
                                                        </div>
{{--                                                        <form action="{{url('new-order-status')}}" method="post">--}}
{{--                                                        <div class="orderBody order-status-body">--}}
{{--                                                            <div class="row">--}}
{{--                                                                <div class="col-md-5"><label>Change Order Status</label>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="col-md-7">--}}
{{--                                                                    <select name="order_status" id="order_status" class="form-control">--}}
{{--                                                                        <option readonly disabled value="">Select</option>--}}
{{--                                                                        <option value="">New Order</option>--}}
{{--                                                                        <option value="">Available Order</option>--}}
{{--                                                                        <option value="">Open Bid</option>--}}
{{--                                                                        <option value="">Hidden Order</option>--}}
{{--                                                                        <option value="">Pending Order</option>--}}
{{--                                                                        <option value="">Pending Late Order</option>--}}
{{--                                                                        <option value="">Pending Late Order</option>--}}
{{--                                                                        <option value="">Orders Completed</option>--}}
{{--                                                                        <option value="">Orders Completed</option>--}}
{{--                                                                        <option value="">Pending Rewrite</option>--}}
{{--                                                                        <option value="">Rewrite Order Completed--}}
{{--                                                                        </option>--}}
{{--                                                                        <option value="">Rewrite Order Completed--}}
{{--                                                                        </option>--}}
{{--                                                                        <option value="">Cancelled</option>--}}
{{--                                                                        <option value="">Dispute</option>--}}
{{--                                                                        <option value="">Refunded</option>--}}
{{--                                                                    </select>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="modal-footer pb-0">--}}
{{--                                                                <button type="button" class="btn btn-primary">Save--}}
{{--                                                                </button>--}}
{{--                                                                <button type="button" class="btn btn-primary"--}}
{{--                                                                        data-dismiss="modal">Cancel--}}
{{--                                                                </button>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        </form>--}}

                                                        <div class="orderBody flag-body">
                                                            <h5>
                                                                Are you sure you want to Flag this order?
                                                            </h5>

                                                            <div class="modal-footer pb-0">
                                                                <button type="button" class="btn btn-primary">Yes
                                                                </button>
                                                                <button type="button" class="btn btn-primary"
                                                                        data-dismiss="modal">No
                                                                </button>
                                                            </div>
                                                        </div>

                                                        <div class="orderBody order-hidden-body">
                                                            order-hidden Popup Body

                                                            <div class="modal-footer pb-0">
                                                                <button type="button" class="btn btn-primary">Yes
                                                                </button>
                                                                <button type="button" class="btn btn-primary"
                                                                        data-dismiss="modal">No
                                                                </button>
                                                            </div>
                                                        </div>

                                                        <div class="orderBody order-return-body">
                                                            <div class="table-responsive">
                                                                <table class="table table-bordered">
                                                                    <thead>
                                                                    <tr>
                                                                        <th>Worker’s Name</th>
                                                                        <th>Role</th>
                                                                        <th>Reason</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <tr>
                                                                        <td>XXXXX</td>
                                                                        <td>XXXXX</td>
                                                                        <td>XXXXX</td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div class="modal-footer pb-0">
                                                                <button type="button" class="btn btn-primary"
                                                                        data-dismiss="modal">Cancel
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div id="tab3" class="pt-3 tab-pane">
                                        <div class="row">
                                            <button type="button" class="btn btn-primary ml-4" data-toggle="modal"
                                                    data-target=".bd-example-modal-lg10">Upload File As Worker
                                            </button>

                                            <div class="modal fade bd-example-modal-lg10" tabindex="-1" role="dialog"
                                                 aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="col-lg-12 grid-margin stretch-card">
                                                            <div class="card">
                                                                <div class="card-body">

                                                                    <h5 class="mb-4 text-primary">Upload File as
                                                                        Worker</h5>


                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <label for="">Select Group</label>

                                                                            <select class="form-control select2"
                                                                                    name="quiz_type" id="Quiz-type"
                                                                                    data-placeholder="Select">
                                                                                <option value="option1">Option1</option>
                                                                                <option value="option2">option2</option>
                                                                                <option value="option3"> option3
                                                                                </option>
                                                                            </select>

                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <label for="">Select Role</label>

                                                                            <select class="form-control select2"
                                                                                    name="quiz_type" id="Quiz-type"
                                                                                    data-placeholder="Select">
                                                                                <option value="option1">Option1</option>
                                                                                <option value="option2">option2</option>
                                                                                <option value="option3"> option3
                                                                                </option>
                                                                            </select>

                                                                        </div>
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col-md-2">
                                                                            <button type="button"
                                                                                    class="btn btn-primary mt-3">Edit
                                                                            </button>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col-md-12 blockquote mt-5">
                                                                            <form>
                                                                                <div class="form-group row">
                                                                                    <div class="col-sm-12">
                                                                                        <input type="text"
                                                                                               id="email_address1"
                                                                                               class="form-control"
                                                                                               name="question_text"
                                                                                               placeholder="Main Title">
                                                                                        <small style="color: #414244">EXAMPLE:
                                                                                            "Causes and Effects of the
                                                                                            Great
                                                                                            Depression of 1929"
                                                                                        </small>
                                                                                    </div>
                                                                                    <br>
                                                                                </div>
                                                                                <br>
                                                                                <div class="form-group row">

                                                                                    <div class="col-sm-12">
                                                                                        <input type="text"
                                                                                               id="email_address1"
                                                                                               class="form-control"
                                                                                               name="question_text"
                                                                                               placeholder="Secondary Title">
                                                                                        <small style="color: #414244">EXAMPLE:
                                                                                            "Great Depression of 1929:
                                                                                            Causes
                                                                                            and Effects"
                                                                                        </small>
                                                                                    </div>

                                                                                </div>

                                                                                <br>
                                                                                <div class="form-group row">

                                                                                    <div class="col-sm-12">
                                                                                        <input type="text"
                                                                                               id="email_address1"
                                                                                               class="form-control"
                                                                                               name="question_text"
                                                                                               placeholder="Three Keywords">
                                                                                        <small style="color: #414244">EXAMPLE
                                                                                            (must be comma-separated):
                                                                                            Great Depression, 1929,
                                                                                            Black Tuesday
                                                                                        </small>
                                                                                    </div>
                                                                                </div>
                                                                                <br>

                                                                                <div class="form-group row">

                                                                                    <div class="col-sm-12">


                                                                                        <label for="email_address1">Post
                                                                                            Work Cited / Bibliography
                                                                                            page *:</label>
                                                                                        <textarea name="comment_text"
                                                                                                  class="form-control"
                                                                                                  id="comment_text"
                                                                                                  cols="30"
                                                                                                  rows="10"></textarea>
                                                                                        <br>
                                                                                    </div>
                                                                                </div>


                                                                                <br>
                                                                                <label for="">Category 1</label>

                                                                                <select class="form-control select2"
                                                                                        name="quiz_type" id="Quiz-type"
                                                                                        data-placeholder="Select">
                                                                                    <option value="option1">Option1
                                                                                    </option>
                                                                                    <option value="option2">option2
                                                                                    </option>
                                                                                    <option value="option3"> option3
                                                                                    </option>
                                                                                </select>


                                                                                <br>
                                                                                <label for="">Category 1</label>

                                                                                <select class="form-control select2"
                                                                                        name="quiz_type" id="Quiz-type"
                                                                                        data-placeholder="Select">
                                                                                    <option value="option1">Option1
                                                                                    </option>
                                                                                    <option value="option2">option2
                                                                                    </option>
                                                                                    <option value="option3"> option3
                                                                                    </option>
                                                                                </select>
                                                                                <br>

                                                                                <div class="row ">
                                                                                    <div class="col-md-2">
                                                                                        <button type="button"
                                                                                                class="btn btn-primary mb-2">
                                                                                            Send
                                                                                        </button>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="row">
                                                                                    <div class="col-md-12">
                                                                                        <label>Upload Additional files
                                                                                            for Workers and
                                                                                            Customer</label>
                                                                                        <label>Here you need to upload
                                                                                            all the Resource
                                                                                            files used to complete the
                                                                                            order:</label>
                                                                                    </div>
                                                                                    <div class="col-md-12">
                                                                                        <select name="" id=""
                                                                                                class="form-control">
                                                                                            <option value="">Select
                                                                                            </option>
                                                                                            <option value="">worker
                                                                                            </option>
                                                                                            <option value="">Customer
                                                                                            </option>
                                                                                            <option value="">Both
                                                                                            </option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-md-6 ">
                                                                                        <div class="file-field input-field">
                                                                                            <div class="btn">
                                                                                                <span>File</span>
                                                                                                <input type="file">
                                                                                            </div>
                                                                                            <div class="file-path-wrapper">
                                                                                                <input class="file-path validate"
                                                                                                       type="text">
                                                                                            </div>
                                                                                        </div>

                                                                                        <label class="btn btn-primary h-auto fileUploadInput mt-2"
                                                                                               for="file">Sent</label>
                                                                                    </div>
                                                                                </div>

                                                                            </form>
                                                                        </div>
                                                                    </div>


                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>
                                            <div class="container">
                                                <div class="body table-responsive py-5">
                                                    <table class="table">
                                                        <thead>
                                                        <tr>
                                                            <th class="ml-2 ">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" type="checkbox"
                                                                           value="20">
                                                                    <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                                                                </label>

                                                            </th>
                                                            <th>Orderno</th>
                                                            <th>Topic:</th>
                                                            <th>Words</th>
                                                            <th>Sources</th>
                                                            <th>Due</th>
                                                            <th>Citation</th>
                                                            <th>Subject</th>
                                                            <th>Level</th>
                                                            <th> Total</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <th scope="row">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" type="checkbox"
                                                                           value="20">
                                                                    <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                                                                </label>
                                                            </th>
                                                            <td><a href="OrderDetail">xxx</a></td>
                                                            <td>xxx</td>
                                                            <td>xxx</td>
                                                            <td>xxx</td>
                                                            <td>xxx</td>
                                                            <td>xxx</td>
                                                            <td>xxx</td>
                                                            <td>xxx</td>
                                                            <td>xxx</td>

                                                        </tr>


                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <!--File Upload Ends-->

                                    <!--Client History and bids Starts-->
                                    <div id="tab4" class="tab-pane ">
                                        <div class="card">


                                            <!-- #START# Modal Form Example -->
                                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">


                                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                                     aria-labelledby="formModal" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="formModal">New Quiz</h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                        aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form>
                                                                    <label for="email_address1">Name</label>
                                                                    <div class="form-group">
                                                                        <div class="form-line">
                                                                            <input type="text" id="email_address1"
                                                                                   class="form-control" name="quiz_name"
                                                                                   placeholder="Type quiz name Here">
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                                                        <label for="password">Quiz format</label>


                                                                        <select class="form-control select2"
                                                                                name="format" data-placeholder="Select">
                                                                            <option value="1">one question per screen
                                                                            </option>
                                                                            <option value="2">show all questions on a
                                                                                page
                                                                            </option>


                                                                        </select>

                                                                    </div>
                                                                    <div class="mt-4">
                                                                        <label for="password">Quiz distribution
                                                                            time</label>


                                                                        <select class="form-control select2 "
                                                                                name="time" data-placeholder="Select">
                                                                            <option></option>
                                                                            <option value="1">upon singup</option>
                                                                            <option value="2">upon login</option>
                                                                            <option value="3">Both of the above</option>

                                                                        </select>

                                                                    </div>

                                                                    <br>


                                                                </form>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button"
                                                                        class="btn btn-info waves-effect">Create Quiz
                                                                </button>
                                                                <button type="button"
                                                                        class="btn btn-danger waves-effect"
                                                                        data-dismiss="modal">Cancel
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="body table-responsive">
                                                <table class="table">
                                                    <thead>
                                                    <tr>
                                                        <th class="ml-2 ">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" type="checkbox"
                                                                       value="20">
                                                                <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                                                            </label>

                                                        </th>
                                                        <th>Order No</th>
                                                        <th>Topic:</th>
                                                        <th>Words</th>
                                                        <th>Sources</th>
                                                        <th>Due</th>
                                                        <th>Citation</th>

                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <th scope="row">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" type="checkbox"
                                                                       value="20">
                                                                <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                                                            </label>
                                                        </th>
                                                        <td><a href="OrderDetail">xxx</a></td>
                                                        <td>xxx</td>
                                                        <td>xxx</td>
                                                        <td>xxx</td>
                                                        <td>xxx</td>
                                                        <td>xxx</td>


                                                    </tr>


                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Client History and bids Ends-->

                                    <!--Review Starts-->
                                    <div id="tab5" class="pt-3 tab-pane">
                                        <div class="row">
                                            <div class="col-lg-12 grid-margin stretch-card">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h5 class="mb-4 text-primary">Client Review</h5>
                                                        <h5 class="mb-4 text-primary">Order Incomplete. Complete the
                                                            order for Customer Feedback</h5>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <form>
                                                                    <div class="form-group row py-4">
                                                                        <label class="col-sm-4" style="font-size: 20px">Research
                                                                            Skills:</label>
                                                                        <div class="col-sm-6">
                                                                            <div id="rating" class="rating">
                                                                                <span><i class="fa fa-star"
                                                                                         style="color: orange;"></i></span>
                                                                                <span><i class="fa fa-star"
                                                                                         style="color: orange;"></i></span>
                                                                                <span><i class="fa fa-star"
                                                                                         style="color: orange;"></i></span>
                                                                                <span><i class="fa fa-star"
                                                                                         style="color: orange;"></i></span>
                                                                                <span><i class="fa fa-star"
                                                                                         style="color: orange;"></i></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row py-4">
                                                                        <label class="col-sm-4" style="font-size: 20px">Writing
                                                                            Quality:</label>
                                                                        <div class="col-sm-6">
                                                                            <div id="rating" class="rating">
                                                                                <span><i class="fa fa-star"
                                                                                         style="color: orange;"></i></span>
                                                                                <span><i class="fa fa-star"
                                                                                         style="color: orange;"></i></span>
                                                                                <span><i class="fa fa-star"
                                                                                         style="color: orange;"></i></span>
                                                                                <span><i class="fa fa-star"
                                                                                         style="color: orange;"></i></span>
                                                                                <span><i class="fa fa-star"
                                                                                         style="color: orange;"></i></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row py-4">
                                                                        <label class="col-sm-4" style="font-size: 20px">Meeting
                                                                            Deadlines:</label>
                                                                        <div class="col-sm-6">
                                                                            <div id="rating" class="rating">
                                                                                <span><i class="fa fa-star"
                                                                                         style="color: orange;"></i></span>
                                                                                <span><i class="fa fa-star"
                                                                                         style="color: orange;"></i></span>
                                                                                <span><i class="fa fa-star"
                                                                                         style="color: orange;"></i></span>
                                                                                <span><i class="fa fa-star"
                                                                                         style="color: orange;"></i></span>
                                                                                <span><i class="fa fa-star"
                                                                                         style="color: orange;"></i></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row py-4">
                                                                        <label class="col-sm-4" style="font-size: 20px">Clarity
                                                                            in
                                                                            Communication:</label>
                                                                        <div class="col-sm-6">
                                                                            <div id="rating" class="rating">
                                                                                <span><i class="fa fa-star"
                                                                                         style="color: orange;"></i></span>
                                                                                <span><i class="fa fa-star"
                                                                                         style="color: orange;"></i></span>
                                                                                <span><i class="fa fa-star"
                                                                                         style="color: orange;"></i></span>
                                                                                <span><i class="fa fa-star"
                                                                                         style="color: orange;"></i></span>
                                                                                <span><i class="fa fa-star"
                                                                                         style="color: orange;"></i></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row py-4">
                                                                        <label class="col-sm-4" style="font-size: 20px">Promptness
                                                                            in
                                                                            Communication:</label>
                                                                        <div class="col-sm-6">
                                                                            <div id="rating" class="rating">
                                                                                <span><i class="fa fa-star"
                                                                                         style="color: orange;"></i></span>
                                                                                <span><i class="fa fa-star"
                                                                                         style="color: orange;"></i></span>
                                                                                <span><i class="fa fa-star"
                                                                                         style="color: orange;"></i></span>
                                                                                <span><i class="fa fa-star"
                                                                                         style="color: orange;"></i></span>
                                                                                <span><i class="fa fa-star"
                                                                                         style="color: orange;"></i></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group row py-4">
                                                                        <label class="col-sm-4" style="font-size: 20px">
                                                                            No Review found</label>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Review Ends-->
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="Messages">

{{--                                                <div class="row">--}}
{{--                                                    <div class="col-md-3 border border-dark p-3">--}}
{{--                                                        <label>View Messages From</label>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="col-md-9 border border-dark p-3">--}}
{{--                                                        <label>Message Details</label>--}}
{{--                                                    </div>--}}

{{--                                                </div>--}}
                                                @include('worker.OrderDetails.message')
                                                <div class="row justify-content-center">
                                                    <div class="col-md-4 p-3 text-center">
                                                    </div>


                                                </div>


                            </div>
                                            @include('worker.OrderDetails.Tab.UploadFile')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div></div>

    </div>



@endsection
