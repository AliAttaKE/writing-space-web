<div class="container">
    <h4 class="page-title">Account Summary
    </h4>
    <div class="row clearfix">
        <div class="card">


            <ul class="nav nav-tabs" id="myTab" role="tablist" style="padding: 20px 30px";>

                <li class="nav-item">
                    <a class="nav-link active" id="activated-tab" data-toggle="tab" href="#activated" role="tab" aria-controls="activated" aria-selected="true">Account Activated		</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="Active-tab" data-toggle="tab" href="#Active" role="tab" aria-controls="Active" aria-selected="false">Account Active	</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="inctive-tab" data-toggle="tab" href="#inctive" role="tab" aria-controls="inctive" aria-selected="false">Account inctive		</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="Mediated-tab" data-toggle="tab" href="#Mediated" role="tab" aria-controls="Mediated	" aria-selected="false">Account Mediated		</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="Unmediated-tab" data-toggle="tab" href="#Unmediated" role="tab" aria-controls="Unmediated" aria-selected="false">Account Unmediated			</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="blocked-tab" data-toggle="tab" href="#blocked" role="tab" aria-controls="blocked" aria-selected="false">Account blocked			</a>
                </li>


            </ul>
            <div class="tab-content" id="myTabContent" style="padding: 20px 30px";>

                <div class="tab-pane fade show active" id="activated" role="tabpanel" aria-labelledby="activated-tab">
                    <div class="body table-responsive">
                        @if($data['activated'] != null)
                            <table class="table" >
                                <thead>
                                <tr>

                                    <th class="col-lg-4">Activated Date	</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data['activated'] as $row)

                                        <tr>
                                            <td>{{date('d-M-Y h.i.A', strtotime($row['created_at']))}}</td>
                                        </tr>
                                @endforeach()
                            </table>
                            </tbody>
                        @else
                            <tr>

                                <label><strong> No record found</strong> </label>
                            </tr>
                        @endif

                    </div>
                </div>
                <div class="tab-pane fade" id="Active" role="tabpanel" aria-labelledby="Active-tab">

                    <div class="body table-responsive">
                        @if($data['stats'] != null)
                            <table class="table" >
                                <thead>
                                <tr>

                                    <th class="col-lg-4"> Date and time	</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data['stats'] as $row)
                                    @if($row->status ==1)
                                        <tr>
                                            <td>{{date('d-M-Y h.i.A', strtotime($row['created_at']))}}</td>
                                        </tr>
                                @endif
                                @endforeach()
                            </table>
                            </tbody>
                        @else
                            <tr>

                                <label><strong> No record found</strong> </label>
                            </tr>
                        @endif

                    </div>
                </div>

                {{--decline section start--}}
                <div class="tab-pane fade" id="inctive" role="tabpanel" aria-labelledby="inctive-tab">
                    <div class="body table-responsive">
                        @if($data['stats'] != null)
                            <table class="table">
                                <thead>
                                <tr>

                                    <th class="col-lg-4"> Date and time	</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data['stats'] as $row)
                                    @if($row->status ==0)
                                        <tr>
                                            <td>{{date('d-M-Y h.i.A', strtotime($row['created_at']))}}</td>
                                        </tr>
                                @endif
                                @endforeach()
                            </table>
                            </tbody>
                        @else
                            <tr>

                                <label><strong> No record found</strong> </label>
                            </tr>
                        @endif

                    </div>
                </div>

                {{--hidden section start--}}

                <div class="tab-pane fade" id="Mediated" role="tabpanel" aria-labelledby="Mediated-tab">


                                <div class="body table-responsive">
                                    @if($data['stats'] != null)
                                        <table class="table">
                                            <thead>
                                            <tr>

                                                <th class="col-lg-4"> Date and time	</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($data['stats'] as $row)
                                                @if($row->monitor == 1)
                                                    <tr>
                                                        <td>{{date('d-M-Y h.i.A', strtotime($row['created_at']))}}</td>
                                                    </tr>
                                            @endif
                                            @endforeach()
                                        </table>
                                        </tbody>
                                    @else
                                        <tr>

                                            <label><strong> No record found</strong> </label>
                                        </tr>
                                    @endif
                                </div>
                </div>

                {{--completed section start--}}
                <div class="tab-pane fade" id="Unmediated" role="tabpanel" aria-labelledby="Unmediated-tab">


                    <div class="body table-responsive">
                        @if($data['stats'] != null)
                            <table class="table">
                                <thead>
                                <tr>

                                    <th class="col-lg-4"> Date and time	</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data['stats'] as $row)
                                    @if($row->monitor == 0)
                                        <tr>
                                            <td>{{date('d-M-Y h.i.A', strtotime($row['created_at']))}}</td>
                                        </tr>
                                @endif
                                @endforeach()
                            </table>
                            </tbody>
                        @else
                            <tr>

                                <label><strong> No record found</strong> </label>
                            </tr>
                        @endif
                    </div>
                </div>

                <div class="tab-pane fade" id="blocked" role="tabpanel" aria-labelledby="blocked-tab">


                    <div class="body table-responsive">
                        @if($data['stats'] != null)
                            <table class="table">
                                <thead>
                                <tr>

                                    <th class="col-lg-4"> Date and time	</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data['stats'] as $row)
                                    @if($row->status == 2)
                                        <tr>
                                            <td>{{date('d-M-Y h.i.A', strtotime($row['created_at']))}}</td>
                                        </tr>
                                @endif
                                @endforeach()
                            </table>
                            </tbody>
                        @else
                            <tr>

                                <label><strong> No record found</strong> </label>
                            </tr>
                        @endif
                    </div>
                </div>


            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="formModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="create_questions">
                    <div class="modal-header">
                        <h5 class="modal-title" id="formModal">Assign Role</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                </div>
                <form action="{{route('role-Assign.store')}}" method="post">
                    @csrf
                    <div class="academic_level">
                        <div class="modal-body">
                            <div class="modal-body">
                                <label for="email_address1">User Name</label>
                                <div class="form-group">
                                    <div class="form-line">
{{--                                        <select class="form-control select2" readonly id="Quiz-type" name="user_id" data-placeholder="Select" readonly>--}}
{{--                                            <option value="{{$data['id']}}"> {{$data['name']}}</option>--}}
{{--                                        </select>--}}
                                        <input type="hidden" value="{{$data['id']}}" name="user_id"  id="name" class="form-control" placeholder="Full Name" readonly>
                                        <input type="text"value="{{$data['name']}}"   id="name" class="form-control" placeholder="Full Name" readonly>
                                    </div>


</div>
                                <label for="email_address1">Status</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <select class="form-control select2" readonly id="status" name="status" data-placeholder="Select">
                                            <option  {{$data->status == 0 ? 'selected' : '' }} value="0">  inactive</option>
                                            <option  {{$data->status == 1 ? 'selected' : '' }} value="1"> active</option>
                                            <option {{$data->status == 2 ? 'selected' : '' }} value="2"> Block</option>
                                        </select>
                                    </div>
                                </div>
                                <label for="email_address1">Account Terminate</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <select class="form-control select2" name="erp_terminate" data-placeholder="Select">
                                            <option  {{$data->erp_terminate == 1 ? 'selected' : '' }} value="1"> yes</option>
                                            <option  {{$data->erp_terminate == 0 ? 'selected' : '' }} value="0"> no</option>
                                        </select>
                                    </div>
                                </div>

                                <label for="email_address1">Mediate</label>
                                <div class="row">
                                    <div class="col-sm-3 col-lg-3">
                                        <div class="form-check form-check-radio">
                                            <label>
                                                <input  {{$data->monitor == 1 ? 'checked' : '' }} name="monitor" class="erp_status" type="radio"  value="1" />
                                                <span>Yes</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-lg-3">
                                        <div class="form-check form-check-radio">
                                            <label>
                                                <input  {{$data->monitor == 0 ? 'checked' : '' }}  name="monitor" class="erp_status" type="radio" value="0" />
                                                <span>No</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="modal-footer">
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-danger waves-effect"
                                        data-dismiss="modal">Close</button>
                                <button type="submit"
                                        class="btn btn-info waves-effect">Submit</button>
                            </div>
                        </div>

                    </div>
                </form>

            </div>
        </div>
    </div>

</div>
