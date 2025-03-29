<div class="container">
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <ul class="breadcrumb breadcrumb-style ">
                    <li class="breadcrumb-item">
                        <h4 class="page-title">Role Based</h4>
                    </li>

                    {{--                        <li class="breadcrumb-item active"></li>--}}
                </ul>
            </div>

            <div class="card">
                <div class="header">
                    <!-- #START# Modal Form Example -->
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <button type="button" class="btn btn-primary " data-toggle="modal"
                                data-target="#Modal"> Add Commission
                        </button>
                        @include('management/ManageSetting/addCommission/add')
                    </div>
                </div>

                <div>








                    <ul class="nav  mb-3" id="pills-tab" role="tablist">
                                                        @foreach($workflow as  $datas)
                        @if($workflow[0] == $datas)
                            @php
                            $active = 'active';
                                    @endphp
                            @else
                                                                @php
                                                                    $active = '';
                                                                @endphp
                            @endif

                            <li class="nav-item">
                                <a class="nav-link {{$active}}" id="pills-{{$datas->id}}{{$datas->erp_work_flow_role}}-tab" data-toggle="pill" href="#pills-{{$datas->id}}{{$datas->erp_work_flow_role}}" role="tab" aria-controls="pills-{{$datas->id}}{{$datas->erp_work_flow_role}}" aria-selected="true">{{$datas->erp_work_flow_role}}</a>
                            </li>
                                                        @endforeach



                                    </ul>
                                    <div class="tab-content" id="pills-tabContent">
                                        @foreach($workflow as  $datas)
                                                                    @if($workflow[0] == $datas)
                                                                        @php
                                                                            $active = 'active show';
                                                                        @endphp
                                                                    @else
                                                                        @php
                                                                            $active = '';
                                                                        @endphp
                                                                    @endif
{{--                                                                @if($datas->id == $addcommission->erp_role_id)--}}
                                        <div class="tab-pane fade {{$active}}" id="pills-{{$datas->id}}{{$datas->erp_work_flow_role}}" role="tabpanel" aria-labelledby="pills-{{$datas->id}}{{$datas->erp_work_flow_role}}-tab">

                                            <table class="table" id="myTable">
                                                <thead>
                                                <tr>
                                                    <th>Package Name</th>

                                                    <th>Role Level</th>

                                                    <th>No of bids</th>
                                                    <th>No of claims</th>
                                                    <th>8 hours order</th>

                                                    <th>5 days order</th>
                                                    <th>7 days order</th>
                                                    <th>Action</th>

                                                </tr>
                                                </thead>




                                                @foreach($addCommission as $addcommission)
                                                                  @if($datas->id == $addcommission->erp_role_id)
                                                <tr>
                                                                      <td>
                                                                                        {{$addcommission->package_name}}
                                                                                    </td>

                                                                                        <td> {{$addcommission['Rolelevel'] ['erp_commission_level'] }}</td>

                                                                                    <td>
                                                                                        {{$addcommission->erp_daily_bids}}
                                                                                    </td>
                                                                                    <td>
                                                                                        {{$addcommission->erp_daily_claims}}
                                                                                    </td>
                                                                                    <td>{{$addcommission->erp_eight_hrs}}</td>

                                                                                    <td>
                                                                                        {{$addcommission->erp_five_days}}
                                                                                    </td>
                                                                                    <td>
                                                                                        {{$addcommission->erp_seven_days}}
                                                                                    </td>

                                                    <td>

                                                        <button type="button" class="btn bg-blue btn-circle waves-effect waves-circle waves-float" data-toggle="modal" data-target="#exampleModal1{{$addcommission->id}}">
                                                                                                    <i class="material-icons">edit</i>
                                                                                                </button>
                                                        @include('management/ManageSetting/addCommission/edit')


                                                        <button type="button" class="btn bg-red btn-circle waves-effect waves-circle waves-float" data-toggle="modal" data-target="#exampleModalCenter1{{$addcommission->id}}">
                                                                                                    <i class="material-icons"> delete  </i>
                                                                                                </button>

                                                        <div class="modal fade" id="exampleModalCenter1{{$addcommission->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                                                                    <div class="modal-content">
                                                                                                        <div class="modal-header">
                                                                                                            <h5 class="modal-title" id="exampleModalCenterTitle">Delete
                                                                                                            </h5>
                                                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                                <span aria-hidden="true">×</span>
                                                                                                            </button>
                                                                                                        </div>
                                                                                                        <div class="modal-body">
                                                                                                            Are you sure you want to proceed with this action?
                                                                                                        </div>
                                                                                                        <div class="modal-footer">

                                                                                                            <button type="submit" class="btn btn-danger waves-effect" data-dismiss="modal">Close</button>
                                                                                                            <form action="{{route('addCommission.destroy',$addcommission->id)}}" method="post">
                                                                                                                @csrf
                                                                                                                @method('DELETE')
                                                                                                                <button type="submit" class="btn btn-info waves-effect">Delete</button>
                                                                                                            </form>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                        </td>
                                                                   </tr>
                                                   @endif
                                                @endforeach
                                            </table>
                                        </div>

                                        @endforeach


                                    </div>




                </div>

            </div>
        </div>
    </div>

</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
