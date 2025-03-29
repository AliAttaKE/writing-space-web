<!--Client History and bids Starts-->
<div id="tab4" class="tab-pane show ">
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
                                        <input type="text" id="email_address1" class="form-control"
                                               name="quiz_name" placeholder="Type quiz name Here">
                                    </div>
                                </div>
                                <div>
                                    <label for="password">Quiz format</label>
                                    <select class="form-control select2" name="format"
                                            data-placeholder="Select">
                                        <option value="1">one question per screen</option>
                                        <option value="2">show all questions on a page</option>
                                    </select>
                                </div>
                                <div class="mt-4">
                                    <label for="password">Quiz distribution time</label>
                                    <select class="form-control select2 " name="time"
                                            data-placeholder="Select">
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
                            <button type="button" class="btn btn-info waves-effect">Create Quiz
                            </button>
                            <button type="button" class="btn btn-danger waves-effect"
                                    data-dismiss="modal">Cancel
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @if($data['bids'] != null)
            @foreach($data['bids'] as $key => $bids)
                <div class="body table-responsive">
                    <table class="table">
                        <thead>
                        <tr>

                            <th>OrderID</th>
                            <th>Name</th>
                            <th>Date</th>
                            <th>Description</th>
                            <th>Assign</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($bids as $record)
                            <tr>
                                <td>{{$record->erp_order_id}}</td>
                                <td>{{$record['UserName']['name']}}</td>
                                <td>{{$record->erp_datetime}}</td>
                                <td>{!! $record->erp_description !!}</td>
                                <td>

                                    @if($record->erp_status == 1)
                                        Assigned ({{$record->erp_type}})
                                    @else
                                        <button type="button" class="btn btn-primary text-white" data-toggle="modal"
                                                data-target="#exampleModal{{$record->id}}">Assign
                                        </button>
                                        <div class="modal fade" id="exampleModal{{$record->id}}" tabindex="-1"
                                             role="dialog"
                                             aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalCenterTitle">Assign
                                                            Order
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Are you sure want to Assign This Order To
                                                        <strong>{{$record['UserName']['name']}} </strong>?
                                                    </div>
                                                    <div class="modal-footer">

                                                        <button type="submit" class="btn btn-danger waves-effect"
                                                                data-dismiss="modal">Close
                                                        </button>
                                                        <form action="{{route('new-order.update',$record->id)}}"
                                                              method="post">
                                                            @csrf
                                                            @method('PUT')

                                                            <input type="hidden" value="{{$record->erp_order_id}}"
                                                                   name="order_id">
                                                            <input type="hidden" value="{{$record->erp_user_id}}"
                                                                   name="user_id">
                                                            <input type="hidden" value="{{$record->erp_user_id}}"
                                                                   name="user_id">
                                                            <input type="hidden" value="{{$record->erp_datetime}}"
                                                                   name="date_time">
                                                            <button type="submit" class="btn btn-info waves-effect">
                                                                Send
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div></td>
                                @endif
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            @endforeach
        @else
            <h3 class="text-dark">No Bids Found</h3>
        @endif
    </div>
</div>

