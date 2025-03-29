{{--<div role="tabpanel" class="tab-pane fade" id="Messages">--}}
{{--    <div class="row">--}}



{{--        <div class="col-3">--}}

{{--            <div class="nav flex-column nav-pills" id="v-pills-tab"--}}
{{--                 role="tablist" aria-orientation="vertical">--}}
{{--                @if($data['workers'][0]['teams']['id'])--}}

{{--                    <a class="nav-link my-1 btn-primary border-0" id="v-pills-TeamModal-tab"--}}
{{--                       data-toggle="pill" href="#v-pills-TeamModal" role="tab"--}}
{{--                       aria-controls="v-pills-home" aria-selected="true"> Team:{{$data['workers'][0]['teams']['erp_team_name']}}--}}
{{--                    </a>--}}
{{--                @endif--}}
{{--                @php  $i=1 @endphp--}}
{{--                @foreach($data['workers'] as $worker)--}}

{{--                    @if($worker->erp_user_id != Auth()->user()->id &&  $worker->erp_user_id != null)--}}
{{--                        <a class="nav-link my-1  btn-primary border-0 {{$i == 1 ? 'active' : '' }}" id="v-pills-{{$i}}-tab"--}}
{{--                           data-toggle="pill" href="#v-pills-{{$i}}" role="tab"--}}
{{--                           aria-controls="v-pills-home" aria-selected="true">{{$worker['users']['name']}} ({{$worker['commissionwork']['package_name']}})--}}
{{--                        </a>--}}
{{--                    @endif--}}


{{--                    @php  $i++ @endphp--}}
{{--                @endforeach--}}
{{--            </div>--}}






{{--        </div>--}}

{{--        <div class="col-9 ">--}}
{{--            <div class="tab-content" id="v-pills-tabContent">--}}
{{--                @php  $i=1 @endphp--}}
{{--                @foreach($data['workers'] as $worker)--}}
{{--                    @if($worker->erp_user_id != Auth()->user()->id && $worker->erp_user_id != null)--}}
{{--                        <div class="tab-pane fade {{$i == 1 ? 'active show' : '' }} " id="v-pills-{{$i}}"--}}
{{--                             role="tabpanel" aria-labelledby="v-pills-{{$i}}-tab">--}}
{{--                            @foreach($data['messages'] as $message)--}}
{{--                                @if ($worker->erp_user_id == $message->reciever_id)--}}
{{--                                    <div id="accordion">--}}
{{--                                        <div class="card">--}}
{{--                                            <div class="card-header p-0 px-0" id="headingOne">--}}
{{--                                                <h5 class="mb-0">--}}
{{--                                                    <button class="btn btn-link btn-block w-100 bg-white text-dark px-0" style="height:50px;" data-toggle="collapse" data-target="#collapse{{$message->id}}" aria-expanded="true" aria-controls="collapse">--}}
{{--                                                        <p><strong> ( {{$message['users']['name']}}) {{$message->subject}}  </strong></p>--}}

{{--                                                    </button>--}}
{{--                                                </h5>--}}
{{--                                            </div>--}}

{{--                                            <div id="collapse{{$message->id}}" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">--}}
{{--                                                <div class="card-body">--}}

{{--                                                    <div class="body table-responsive">--}}

{{--                                                        <div>--}}





{{--                                                            <p><strong> Message: {{$message->description}}  </strong></p>--}}



{{--                                                        </div>--}}
{{--                                                    </div>--}}

{{--                                                </div>--}}
{{--                                            </div>--}}



{{--                                        </div>--}}


{{--                                    </div>--}}

{{--                                @endif--}}

{{--                            @endforeach--}}
{{--                            <div class="col-md-3 border border-dark p-3 " style="float:right;top:100px;">--}}
{{--                                <button type="button" class="btn btn-primary"--}}
{{--                                        data-toggle="modal" data-target=".bd-example-modal-{{$worker->erp_user_id}}">--}}
{{--                                    Compose Message--}}
{{--                                </button>--}}
{{--                                <div class="modal fade bd-example-modal-{{$worker->erp_user_id}}" tabindex="-1"--}}
{{--                                     role="dialog" aria-labelledby="myLargeModalLabel"--}}
{{--                                     aria-hidden="true">--}}
{{--                                    <div class="modal-dialog modal-lg">--}}
{{--                                        <div class="modal-content">--}}
{{--                                            <div class="card">--}}
{{--                                                <div class="card-body">--}}

{{--                                                    <h5 class="mb-4 text-primary">Upload File as--}}
{{--                                                        {{$worker['users']['name']}} </h5>--}}
{{--                                                    <div class="row">--}}
{{--                                                        <div class="col-md-12 blockquote mt-5">--}}


{{--                                                            <form action="{{Url('/admin_message')}}" method="post"--}}
{{--                                                                  enctype="multipart/form-data">--}}
{{--                                                                @csrf--}}

{{--                                                                <input type="hidden" value="{{$worker->erp_user_id}}" name="reciever_id">--}}
{{--                                                                <input type="hidden" value="{{Auth()->user()->id}}" name="sender_id">--}}
{{--                                                                <input type="hidden" value="{{$worker->erp_team_id}}" name="team_id">--}}
{{--                                                                <input type="hidden" value="{{$worker->erp_order_id}}" name="order_id">--}}
{{--                                                                <input type="hidden" value="{{$worker->erp_commission_id}}" name="commission_id">--}}


{{--                                                                <div class="form-group row py-3">--}}

{{--                                                                    <div class="col-sm-12">--}}
{{--                                                                        <input type="text"--}}
{{--                                                                               id="email_address1"--}}
{{--                                                                               class="form-control"--}}
{{--                                                                               name="subject"--}}
{{--                                                                               placeholder="Subject">--}}

{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                                <br>--}}
{{--                                                                <div class="form-group row">--}}

{{--                                                                    <div class="col-sm-12" >--}}


{{--                                                                        <label for="email_address1">Post--}}
{{--                                                                            Work Cited /--}}
{{--                                                                            Bibliography page--}}
{{--                                                                            *:</label>--}}
{{--                                                                        <textarea--}}
{{--                                                                                name="description"--}}
{{--                                                                                class="form-control "--}}
{{--                                                                                id="comment_text"--}}
{{--                                                                                cols="30"--}}
{{--                                                                                rows="10"style="border: #a0aec0 solid 1px;"></textarea>--}}

{{--                                                                        <br>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="row">--}}
{{--                                                                    <div class="col-md-6 ">--}}
{{--                                                                        <div class="file-field input-field">--}}


{{--                                                                        </div>--}}


{{--                                                                        <button type="submit" class="btn btn-primary">Submit--}}
{{--                                                                        </button>--}}
{{--                                                                    </div>--}}


{{--                                                                </div>--}}
{{--                                                            </form>--}}
{{--                                                            </form>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                        </div>--}}

{{--                    @endif--}}
{{--                    @php  $i++ @endphp--}}
{{--                @endforeach--}}


{{--                @if($data['workers'][0]['teams']['id'])--}}
{{--                    <div class="tab-pane fade active show" id="v-pills-TeamModal"--}}
{{--                         role="tabpanel" aria-labelledby="v-pills-TeamModal-tab">--}}

{{--                        @foreach($data['messages'] as $message)--}}


{{--                            @if ($message->reciever_id == '')--}}


{{--                                <div id="accordion">--}}
{{--                                    <div class="card">--}}
{{--                                        <div class="card-header p-0 px-0" id="headingOne">--}}
{{--                                            <h5 class="mb-0">--}}
{{--                                                <button class="btn btn-link btn-block w-100 bg-white text-dark px-0" style="height:50px;" data-toggle="collapse" data-target="#collapse{{$message->id}}" aria-expanded="true" aria-controls="collapse">--}}
{{--                                                    ( {{$message['users']['name']}}) <strong> {{$message->subject}} </strong></p>--}}

{{--                                                </button>--}}
{{--                                            </h5>--}}
{{--                                        </div>--}}

{{--                                        <div id="collapse{{$message->id}}" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">--}}
{{--                                            <div class="card-body">--}}

{{--                                                <div class="body table-responsive">--}}

{{--                                                    <div>--}}
{{--                                                        <p><strong> Message: {{$message->description}}  </strong></p>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}

{{--                                            </div>--}}
{{--                                        </div>--}}



{{--                                    </div>--}}


{{--                                </div>--}}

{{--                            @endif--}}

{{--                        @endforeach--}}

{{--                        <div class="col-md-3 border border-dark p-3 " style="float:right;top:100px;">--}}
{{--                            <button type="button" class="btn btn-primary"--}}
{{--                                    data-toggle="modal" data-target=".bd-example-modal-{{$worker->erp_team_id}}">--}}
{{--                                Compose Message--}}
{{--                            </button>--}}
{{--                            <div class="modal fade bd-example-modal-{{$worker->erp_team_id}}" tabindex="-1"--}}
{{--                                 role="dialog" aria-labelledby="myLargeModalLabel"--}}
{{--                                 aria-hidden="true">--}}
{{--                                <div class="modal-dialog modal-lg">--}}
{{--                                    <div class="modal-content">--}}
{{--                                        <div class="card">--}}
{{--                                            <div class="card-body">--}}


{{--                                                @if ($worker['users'] == !null)--}}

{{--                                                    <h5 class="mb-4 text-primary">Upload File as--}}

{{--                                                    {{$worker['users']['name']}} </h5>--}}

{{--                                                @endif--}}
{{--                                                <div class="row">--}}
{{--                                                    <div class="col-md-12 blockquote mt-5">--}}


{{--                                                        <form action="{{Url('/admin_message')}}" method="post"--}}
{{--                                                              enctype="multipart/form-data">--}}
{{--                                                            @csrf--}}

{{--                                                            <input type="hidden" value="{{$worker->erp_team_id}}" name="team_id">--}}
{{--                                                            <input type="hidden" value="{{Auth()->user()->id}}" name="sender_id">--}}
{{--                                                            <input type="hidden" value="{{$worker->erp_order_id}}" name="order_id">--}}
{{--                                                            <input type="hidden" value="{{$worker->erp_commission_id}}" name="commission_id">--}}


{{--                                                            <div class="form-group row py-3">--}}

{{--                                                                <div class="col-sm-12">--}}
{{--                                                                    <input type="text"--}}
{{--                                                                           id="email_address1"--}}
{{--                                                                           class="form-control"--}}
{{--                                                                           name="subject"--}}
{{--                                                                           placeholder="Subject">--}}

{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <br>--}}
{{--                                                            <div class="form-group row">--}}

{{--                                                                <div class="col-sm-12" >--}}


{{--                                                                    <label for="email_address1">Post--}}
{{--                                                                        Work Cited /--}}
{{--                                                                        Bibliography page--}}
{{--                                                                        *:</label>--}}
{{--                                                                    <textarea--}}
{{--                                                                            name="description"--}}
{{--                                                                            class="form-control "--}}
{{--                                                                            id="comment_text"--}}
{{--                                                                            cols="30"--}}
{{--                                                                            rows="10"style="border: #a0aec0 solid 1px;"></textarea>--}}

{{--                                                                    <br>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="row">--}}
{{--                                                                <div class="col-md-6 ">--}}
{{--                                                                    <div class="file-field input-field">--}}


{{--                                                                    </div>--}}


{{--                                                                    <button type="submit" class="btn btn-primary">Submit--}}
{{--                                                                    </button>--}}
{{--                                                                </div>--}}


{{--                                                            </div>--}}
{{--                                                        </form>--}}
{{--                                                        </form>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </div>--}}

{{--            </div>--}}

{{--            @endif--}}




{{--        </div>--}}
{{--    </div>--}}

{{--</div>--}}
<div role="tabpanel" class="tab-pane fade" id="Messages">
    <div class="row w-100 mx-auto">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
            <h3 class="text-dark">Order not assigned yet to anyone</h3>
        </div>
    </div>
</div>
