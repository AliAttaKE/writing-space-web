<style>
    .sender-color{
        background:#d9fdd3 !important;
    }
</style>
<div class="row">
    <div class="col-3">
        <div class="nav flex-column nav-pills" id="v-pills-tab"
             role="tablist" aria-orientation="vertical">
            @php  $i=1 @endphp
            @foreach($data['workers'] as $worker)
                @if($worker->erp_user_id != Auth()->user()->id &&  $worker->erp_user_id != null)
                    <a class="nav-link {{$i == 1 ? 'active' : '' }} btn btn-primary text-left mb-3 h-auto width100 btnOrdersDetail" id="v-pills-{{$i}}-tab"
                       data-toggle="pill" href="#v-pills-{{$i}}" role="tab"
                       aria-controls="v-pills-home" aria-selected="true">{{$worker['users']['name']}}
                        ({{$worker['commissionwork']['package_name']}})
                    </a>
                @endif
                @php  $i++ @endphp
            @endforeach
            @if($data['workers'][0]['teams']['id'])
                <a class="nav-link btn btn-primary text-left mb-3 h-auto width100 btnOrdersDetail" id="v-pills-TeamModal-tab"
                   data-toggle="pill" href="#v-pills-TeamModal" role="tab"
                   aria-controls="v-pills-home" aria-selected="true">
                    Team:{{$data['workers'][0]['teams']['erp_team_name']}}
                </a>
            @endif
            <a class="nav-link btn btn-primary text-left mb-3 h-auto width100 btnOrdersDetail" id="v-pills-TeamModal-tab"
               data-toggle="pill" href="#v-pills-single" role="tab"
               aria-controls="v-pills-home" aria-selected="true">
                {{--                    Team:{{$data['workers'][0]['teams']['erp_team_name']}}--}}
                Hello World
            </a>
        </div>


    </div>

    <div class="col-9 ">
        <div class="tab-content" id="v-pills-tabContent">
            @php  $i=1 @endphp
            @foreach($data['workers'] as $worker)
                @if($worker->erp_user_id != Auth()->user()->id && $worker->erp_user_id != null)
                    <div class="tab-pane fade {{$i == 1 ? 'active show' : '' }} " id="v-pills-{{$i}}"
                         role="tabpanel" aria-labelledby="v-pills-{{$i}}-tab">

                        @foreach($data['messages'] as $message)
                            @if ($worker->erp_user_id == $message->sender_id)
                                <div class="d-block mb-4 w-75 float-left ">
                                    <div class="d-block types   text-left py-4 my-4 ">
                                        <div class="">
                                            {{--                                                <p>--}}
                                            {{--                                                    Message From  {{$message['users']['name']}}--}}
                                            {{--                                                </p>--}}
                                            <div>
                                                <h6 class="mb-0"> <strong> SUBJECT :</strong>  </h6>
                                                {{$message->subject}}
                                            </div>
                                            <h6 class="mt-3 mb-0">
                                                Message:
                                            </h6>
                                            <p class="m-0">
                                                <strong> {{$message->description}}  </strong>
                                            </p>



                                        </div>
                                    </div>
                                    <span class="px-3">
                                        {{ date('d-M-Y  h:i A', strtotime($message->created_at))}}
                                   </span>
                                </div>
                            @endif
                            @if ($worker->erp_user_id == $message->reciever_id)
                                <div class="d-block mb-4 w-75 float-right">
                                    <div class="d-block types  text-left sender-color py-4 my-4 ">
                                        <div class="">
                                            {{--                                                <p>--}}
                                            {{--                                              Message From  {{$message['users']['name']}}--}}
                                            {{--                                                </p>--}}
                                            <div>
                                                <h6 class="mb-0"> <strong> SUBJECT :</strong>  </h6>
                                                {{$message->subject}}
                                            </div>
                                            <h6 class="mt-3 mb-0">
                                                Message:
                                            </h6>
                                            <p class="m-0">
                                                <strong> {{$message->description}}  </strong>
                                            </p>



                                        </div>
                                    </div>
                                    <span class="px-3">
                                        {{ date('d-M-Y  h:i A', strtotime($message->created_at))}}
                                   </span>
                                </div>
                            @endif
                        @endforeach
                            <div class="row justify-content-end my-3 w-100 mx-auto">

                            <div class="col-md-6 text-right">
                            <button type="button" class="btn btn-primary"
                                    data-toggle="modal" data-target=".bd-example-modal-{{$worker->erp_user_id}}">
                                Compose Message
                            </button>
                            <div class="modal fade bd-example-modal-{{$worker->erp_user_id}}" tabindex="-1"
                                 role="dialog" aria-labelledby="myLargeModalLabel"
                                 aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="card">
                                            <div class="card-body">

                                                <h5 class="mb-4 text-primary">Upload File as
                                                    {{$worker['users']['name']}} </h5>
                                                <div class="row">
                                                    <div class="col-md-12 blockquote mt-5">


                                                        <form action="{{Url('message')}}" method="post"
                                                              enctype="multipart/form-data">
                                                            @csrf

                                                            <input type="hidden" value="{{$worker->erp_user_id}}" name="reciever_id">
                                                            <input type="hidden" value="{{Auth()->user()->id}}" name="sender_id">
                                                            <input type="hidden" value="{{$worker->erp_team_id}}" name="team_id">
                                                            <input type="hidden" value="{{$worker->erp_order_id}}" name="order_id">
                                                            <input type="hidden" value="{{$worker->erp_commission_id}}" name="commission_id">


                                                            <div class="form-group row py-3">

                                                                <div class="col-sm-12">
                                                                    <input type="text"
                                                                           id="email_address1"
                                                                           class="form-control"
                                                                           name="subject"
                                                                           placeholder="Subject">

                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="form-group row">

                                                                <div class="col-sm-12" >


                                                                    <label for="email_address1">Post
                                                                        Work Cited /
                                                                        Bibliography page
                                                                        *:</label>
                                                                    <textarea
                                                                            name="description"
                                                                            class="form-control "
                                                                            id="comment_text"
                                                                            cols="30"
                                                                            rows="10"style="border: #a0aec0 solid 1px;"></textarea>

                                                                    <br>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6 ">
                                                                    <div class="file-field input-field">
                                                                    </div>
                                                                    <button type="submit" class="btn btn-primary">Submit
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                            </div>


                    </div>

                @endif
                @php  $i++ @endphp
            @endforeach


            @if($data['workers'][0]['teams']['id'])
                <div class="tab-pane fade" id="v-pills-TeamModal"
                     role="tabpanel" aria-labelledby="v-pills-TeamModal-tab">

                    @foreach($data['messages'] as $message)
                            @if ($message->reciever_id == '' && $message->sender_id != Auth::user()->id)
                                <div class="d-block mb-4 float-left w-75">
                                    <div class="d-block types  text-left px-4 pb-4 my-4 ">
                                        <div class="">
                                            <p class="fw-bold" style="font-size:12px;font-weight:bold;">
                                                {{$message['users']['name']}}
                                            </p>
                                            <div>
                                                <h6 class="mb-0"> <strong> SUBJECT :</strong>  </h6>
                                                {{$message->subject}}
                                            </div>
                                            <h6 class="mt-3 mb-0">
                                                Message:
                                            </h6>
                                            <p class="m-0">
                                                <strong> {{$message->description}}  </strong>
                                            </p>
                                            @if($message->erp_file != null)

                                                <h6 class="mt-3 mb-0">
                                                    file:
                                                </h6>

                                                <div class="mt-3">
                                                    <a  class="btn btn-default btn-circle waves-effect waves-circle waves-float"  href="{{asset('image/messages'.'/'.$message->erp_file)}}" download>
                                                        <i class="material-icons">publish</i>
                                                    </a>
                                                </div>

                                            @endif
                                        </div>
                                    </div>
                                    <span class="px-3">
                                        {{ date('d-M-Y  h:i A', strtotime($message->created_at))}}
                                   </span>
                                </div>
                            @endif
                            @if ($message->reciever_id == '' && $message->sender_id == Auth::user()->id)
                                <div class="d-block mb-4 w-75 float-right">
                                    <div class="d-block types  text-left py-4 my-4 sender-color ">
                                        <div class="">
                                            <p class="fw-bold" style="font-size:12px;font-weight:bold;">
                                                You
                                            </p>
                                            <div>
                                                <h6 class="mb-0"> <strong> SUBJECT :</strong>  </h6>
                                                {{$message->subject}}
                                            </div>
                                            <h6 class="mt-3 mb-0">
                                                Message:
                                            </h6>
                                            <p class="m-0">
                                                <strong> {{$message->description}}  </strong>
                                            </p>
                                            @if($message->erp_file != null)

                                                <h6 class="mt-3 mb-0">
                                                    file:
                                                </h6>

                                                <div class="mt-3">
                                                    <a  class="btn btn-default btn-circle waves-effect waves-circle waves-float"  href="{{asset('image/messages'.'/'.$message->erp_file)}}" download>
                                                        <i class="material-icons">publish</i>
                                                    </a>
                                                </div>

                                            @endif
                                        </div>
                                    </div>
                                    <span class="px-3">
                                        {{ date('d-M-Y  h:i A', strtotime($message->created_at))}}
                                   </span>
                                </div>
                            @endif
                    @endforeach
                        <div class="row justify-content-end w-100 mx-auto">
                    <div class="col-md-6 text-right">
                        <button type="button" class="btn btn-primary"
                                data-toggle="modal" data-target=".bd-example-modal-{{$worker->erp_team_id}}">
                            Compose Message
                        </button>
                        <div class="modal fade bd-example-modal-{{$worker->erp_team_id}}" tabindex="-1"
                             role="dialog" aria-labelledby="myLargeModalLabel"
                             aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="card">
                                        <div class="card-body">

                                            <h5 class="mb-4 text-primary">Upload File as
                                                @if($worker['users'] !=  null )
                                                    {

                                                    {{$worker['users']['name']}} </h5>
                                            }
                                            @endif
                                            <div class="alert alert-danger mt-3" role="alert">
                                                Warning: You may not in any way communicate your phone number,fax
                                                number, email addres, mailing
                                                addres, off-site username(s), or any other contact information to the
                                                customer ,neither in this
                                                message board no r in a transmitted file, violating this rule will
                                                likely result in the
                                                immediate closure of your account.
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 blockquote mt-5">


                                                    <form action="{{Url('message')}}" method="post"
                                                          enctype="multipart/form-data">
                                                        @csrf

                                                        <input type="hidden" value="{{$worker->erp_team_id}}"
                                                               name="team_id">
                                                        <input type="hidden" value="{{Auth()->user()->id}}"
                                                               name="sender_id">
                                                        <input type="hidden" value="{{$worker->erp_order_id}}"
                                                               name="order_id">
                                                        <input type="hidden" value="{{$worker->erp_commission_id}}"
                                                               name="commission_id">

                                                        <div class="form-group row py-3">

                                                            <div class="col-sm-12">
                                                                <input type="text"
                                                                       id="email_address1"
                                                                       class="form-control"
                                                                       name="subject"
                                                                       placeholder="Subject">

                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="form-group row">
                                                            <div class="col-sm-12">
                                                                <label for="email_address1">Post
                                                                    Work Cited /
                                                                    Bibliography page
                                                                    *:</label>
                                                                <textarea
                                                                        name="description"
                                                                        class="form-control "
                                                                        id="comment_text"
                                                                        cols="30"
                                                                        rows="10"
                                                                        style="border: #a0aec0 solid 1px;"></textarea>
                                                                <div class="file-field input-field">
                                                                    <div class="btn">
                                                                        <span>File</span>
                                                                        <input name="erp_file" type="file">
                                                                    </div>
                                                                    <div class="file-path-wrapper">
                                                                        <input class="file-path validate"
                                                                               name="erp_file" type="text">
                                                                    </div>
                                                                </div>
                                                                <br>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6 ">
                                                                <div class="file-field input-field">


                                                                </div>


                                                                <button type="submit" class="btn btn-primary">Submit
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
                        </div>
                    </div>
                            </div>

                </div>

        @endif


        <div class="tab-pane fade" id="v-pills-single"
             role="tabpanel" aria-labelledby="v-pills-TeamModal2-tab">

            @foreach($data['messages'] as $message)


            @endforeach

                <div class="row justify-content-end my-3 w-100 mx-auto">
                <div class="col-md-6 text-right ">
                    <button type="button" class="btn btn-primary"
                            data-toggle="modal" data-target=".bd-example-modal-2">
                        Compose Message
                    </button>
                    <div class="modal fade bd-example-modal-2" tabindex="-1"
                         role="dialog" aria-labelledby="myLargeModalLabel"
                         aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="card">
                                    <div class="card-body">

                                        {{--                                                <h5 class="mb-4 text-primary">Upload File as--}}
                                        {{--                                                    @if($worker['users'] !=  null )--}}
                                        {{--                                                        {--}}

                                        {{--                                                        {{$worker['users']['name']}} </h5>--}}
                                        {{--                                                }--}}
                                        {{--                                                @endif--}}

                                        <div class="row">
                                            <div class="col-md-12 blockquote mt-5">


                                                <form action="{{Url('message')}}" method="post"
                                                      enctype="multipart/form-data">
                                                    @csrf

                                                    <input type="hidden" value="{{$worker->erp_team_id}}"
                                                           name="team_id">
                                                    <input type="hidden" value="{{Auth()->user()->id}}"
                                                           name="sender_id">
                                                    <input type="hidden" value="{{$worker->erp_order_id}}"
                                                           name="order_id">
                                                    <input type="hidden" value="{{$worker->erp_commission_id}}"
                                                           name="commission_id">
                                                    <input type="hidden" value="{{$data['admin']['id']}}"
                                                           name="reciever_id">


                                                    <div class="form-group row py-3">

                                                        <div class="col-sm-12">
                                                            <input type="text"
                                                                   id="email_address1"
                                                                   class="form-control"
                                                                   name="subject"
                                                                   placeholder="Subject">

                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label for="email_address1">Post
                                                                Work Cited /
                                                                Bibliography page
                                                                *:</label>
                                                            <textarea
                                                                    name="description"
                                                                    class="form-control "
                                                                    id="comment_text"
                                                                    cols="30"
                                                                    rows="10"
                                                                    style="border: #a0aec0 solid 1px;"></textarea>
                                                            <div class="file-field input-field">
                                                                <div class="btn">
                                                                    <span>File</span>
                                                                    <input name="erp_file" type="file">
                                                                </div>
                                                                <div class="file-path-wrapper">
                                                                    <input class="file-path validate"
                                                                           name="erp_file" type="text">
                                                                </div>
                                                            </div>
                                                            <br>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 ">
                                                            <div class="file-field input-field">


                                                            </div>


                                                            <button type="submit" class="btn btn-primary">Submit
                                                            </button>
                                                        </div>


                                                    </div>
                                                </form>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>



            {{--                    <div class="col-md-3 border border-dark p-3 " style="float:right;top:100px;">--}}
            {{--                        <button type="button" class="btn btn-primary"--}}
            {{--                                data-toggle="modal" data-target=".bd-example-modal-{{$worker->erp_team_id}}">--}}
            {{--                            Compose Message--}}
            {{--                        </button>--}}
            {{--                        <div class="modal fade bd-example-modal-{{$worker->erp_team_id}}" tabindex="-1"--}}
            {{--                             role="dialog" aria-labelledby="myLargeModalLabel"--}}
            {{--                             aria-hidden="true">--}}
            {{--                            <div class="modal-dialog modal-lg">--}}
            {{--                                <div class="modal-content">--}}
            {{--                                    <div class="card">--}}
            {{--                                        <div class="card-body">--}}

            {{--                                            <h5 class="mb-4 text-primary">Upload File as--}}
            {{--                                                @if($worker['users'] !=  null )--}}
            {{--                                                    {--}}

            {{--                                                    {{$worker['users']['name']}} </h5>--}}
            {{--                                            }--}}
            {{--                                            @endif--}}
            {{--                                            <div class="alert alert-danger mt-3" role="alert">--}}
            {{--                                                Warning: You may not in any way communicate your phone number,fax--}}
            {{--                                                number, email addres, mailing--}}
            {{--                                                addres, off-site username(s), or any other contact information to the--}}
            {{--                                                customer ,neither in this--}}
            {{--                                                message board no r in a transmitted file, violating this rule will--}}
            {{--                                                likely result in the--}}
            {{--                                                immediate closure of your account.--}}
            {{--                                            </div>--}}
            {{--                                            <div class="row">--}}
            {{--                                                <div class="col-md-12 blockquote mt-5">--}}


            {{--                                                    <form action="{{Url('message')}}" method="post"--}}
            {{--                                                          enctype="multipart/form-data">--}}
            {{--                                                        @csrf--}}

            {{--                                                        <input type="hidden" value="{{$worker->erp_team_id}}"--}}
            {{--                                                               name="team_id">--}}
            {{--                                                        <input type="hidden" value="{{Auth()->user()->id}}"--}}
            {{--                                                               name="sender_id">--}}
            {{--                                                        <input type="hidden" value="{{$worker->erp_order_id}}"--}}
            {{--                                                               name="order_id">--}}
            {{--                                                        <input type="hidden" value="{{$worker->erp_commission_id}}"--}}
            {{--                                                               name="commission_id">--}}


            {{--                                                        <div class="form-group row py-3">--}}

            {{--                                                            <div class="col-sm-12">--}}
            {{--                                                                <input type="text"--}}
            {{--                                                                       id="email_address1"--}}
            {{--                                                                       class="form-control"--}}
            {{--                                                                       name="subject"--}}
            {{--                                                                       placeholder="Subject">--}}

            {{--                                                            </div>--}}
            {{--                                                        </div>--}}
            {{--                                                        <br>--}}
            {{--                                                        <div class="form-group row">--}}
            {{--                                                            <div class="col-sm-12">--}}
            {{--                                                                <label for="email_address1">Post--}}
            {{--                                                                    Work Cited /--}}
            {{--                                                                    Bibliography page--}}
            {{--                                                                    *:</label>--}}
            {{--                                                                <textarea--}}
            {{--                                                                        name="description"--}}
            {{--                                                                        class="form-control "--}}
            {{--                                                                        id="comment_text"--}}
            {{--                                                                        cols="30"--}}
            {{--                                                                        rows="10"--}}
            {{--                                                                        style="border: #a0aec0 solid 1px;"></textarea>--}}
            {{--                                                                <div class="file-field input-field">--}}
            {{--                                                                    <div class="btn">--}}
            {{--                                                                        <span>File</span>--}}
            {{--                                                                        <input name="erp_file" type="file">--}}
            {{--                                                                    </div>--}}
            {{--                                                                    <div class="file-path-wrapper">--}}
            {{--                                                                        <input class="file-path validate"--}}
            {{--                                                                               name="erp_file" type="text">--}}
            {{--                                                                    </div>--}}
            {{--                                                                </div>--}}
            {{--                                                                <br>--}}
            {{--                                                            </div>--}}
            {{--                                                        </div>--}}
            {{--                                                        <div class="row">--}}
            {{--                                                            <div class="col-md-6 ">--}}
            {{--                                                                <div class="file-field input-field">--}}


            {{--                                                                </div>--}}


            {{--                                                                <button type="submit" class="btn btn-primary">Submit--}}
            {{--                                                                </button>--}}
            {{--                                                            </div>--}}


            {{--                                                        </div>--}}
            {{--                                                    </form>--}}
            {{--                                                    </form>--}}
            {{--                                                </div>--}}
            {{--                                            </div>--}}
            {{--                                        </div>--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}

        </div>


    </div>
</div>
