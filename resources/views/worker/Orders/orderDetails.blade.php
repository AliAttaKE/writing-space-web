@extends('worker/layouts/master')
@section('title')
     OrderDetail
@endsection
@section('content')
    <style>
        .types {
             margin: 8px auto !important;
            text-align: left;
            padding: 15px 25px !important;
        }
    </style>
    <div class="container-fluid">
        @include('worker.layouts.error')

        <div class="card px-3">
            <div class="header">
                <div class="row align-items-center">
                    <div class="col-6">
                        <h3 class="m-0">
                            {{$data['create-order']->erp_order_topic}}
                        </h3>
                    </div>
                    <div class="col-6">
                        <h5 class="text-success text-right m-0">
                            {{$data['bids']['erp_bids']}} Available Bids <br>

                        </h5>
                        <h5 class=" text-right m-0">
                            Order Deadline: {{ date('d-M-Y  | h:i A', strtotime($data['create-order']['erp_datetime']))}}
                        </h5>

                    </div>


                </div>
            </div>
            <div class="body">
                <p class=" pt-3 ">
                    <i class="far fa-flag "></i>
                    <span class=" font-weight-bold">Subject :</span> {{$data['create-order']->erp_subject_name}}
                </p>
                <p class=" justify-content-center ">
                    <i class="fas fa-envelope"></i>
                    <span class="font-weight-bold">Message :</span> <br>
                <div >{!!$data['create-order']->erp_order_message!!}</div>
                </p>
                <p>
                    <i class="far fa-flag "></i>
                    <span class=" font-weight-bold">Academic Name :</span> {{$data['create-order']->erp_academic_name}}
                </p>
                <p>
                    <i class="far fa-flag "></i>
                    <span class="font-weight-bold ">Paper Type :</span> {{$data['create-order']->erp_paper_type}}
                </p>
                <p>
                    <i class="far fa-flag "></i>
                    <span class=" font-weight-bold" >Paper Format :</span> {{$data['create-order']->erp_paper_format}}
                </p>
                <div class="row">
                    <div class="col-lg-6 col-12 bg-white p-text-color py-4  text-center text-dark">
                        <p class=" font-weight-bold">
                            <i class="fas fa-language"></i>
                            Language and spelling style :
                        </p>
                        <p class="">
                            {{$data['create-order']->erp_language_name}}
                        </p>





                    </div>
                    <div class="col-lg-6 col-12 bg-white p-text-color py-4  text-center text-dark">
                        <p class=" font-weight-bold">
                            <i class="fas fa-layer-group"></i>
                            <span class=" font-weight-bold">Will you provide any resource materials?</span>
                        </p>

                        @if($data['create-order']->erp_resource_materials !='null')
                            <p class=" ">
                                <i class="far fa-flag "></i>
                                <span class=" font-weight-bold">Your Resource of this order</span>


                                <a href="{{asset('image/resource'.'/'.$data['create-order']['erp_resource_file'])}}" download>  <i class="fa fa-file fa-2x mx-2" aria-hidden="true"> </i> </a>
                                </a>

                            </p>
                        @else
                            <p>
                                <i class="far fa-flag "></i>
                                <span class=" font-weight-bold">No Resources Available for this order</span>
                            </p>
                        @endif

                            <p class=" ">
                                <i class="far fa-flag "></i>
                                <span class=" font-weight-bold">Click to download paperType file</span>


                                <a href="{{asset('image/announcement'.'/'.$data['create-order']['papertype_file'])}}" download>  <i class="fa fa-file fa-2x mx-2" aria-hidden="true"> </i> </a>
                                </a>

                            </p>
                        <p >
                                <i class="far fa-flag "></i>
                                <span class=" font-weight-bold">Click to download paperFormat file</span>


                                <a href="{{asset('image/announcement'.'/'.$data['create-order']['paperformat_file'])}}" download>  <i class="fa fa-file fa-2x mx-2" aria-hidden="true"> </i> </a>
                                </a>

                            </p>






                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <p class="px-2 pt-3 types d-block">
                            <i class="far fa-flag "></i>
                            <span class=" font-weight-bold">Number Of Pages :</span> {{$data['create-order']->erp_number_Pages}}
                        </p>

                        <p class="px-2 pt-3 types d-block">
                            <i class="far fa-flag "></i>
                            <span class=" font-weight-bold">PowerPoint Slides :</span> {{$data['create-order']->erp_powerPoint_slides}}
                        </p>

{{--                        @if($data['create-order']['erp_deadline'] == "erp_eight_hrs")--}}
{{--                            <p class="px-2 pt-3 types d-block">--}}
{{--                                <i class="far fa-flag "></i>--}}
{{--                                <span class=" font-weight-bold"> Erp deadline :  </span> 8 hours--}}
{{--                            </p>--}}

{{--                        @elseif($data['create-order']['erp_deadline'] == "erp_tf_hrs")--}}
{{--                            <p class="px-2 pt-3 types d-block">--}}
{{--                                <i class="far fa-flag "></i>--}}
{{--                                <span class=" font-weight-bold">  Erp deadline : </span> 24 Hours--}}
{{--                            </p>--}}

{{--                        @elseif($data['create-order']['erp_deadline'] == "erp_fe_hrs")--}}
{{--                            <p class="px-2 pt-3 types d-block">--}}
{{--                                <i class="far fa-flag "></i>--}}
{{--                                <span class=" font-weight-bold"> Erp deadline : </span>  48 hours--}}
{{--                            </p>--}}

{{--                        @elseif($data['create-order']['erp_deadline'] == "erp_three_days")--}}
{{--                            <p class="px-2 pt-3 types d-block">--}}
{{--                                <i class="far fa-flag "></i>--}}
{{--                                <span class=" font-weight-bold"> Erp deadline :  </span> 3 days--}}
{{--                            </p>--}}


{{--                        @elseif($data['create-order']['erp_deadline'] == "erp_five_days")--}}
{{--                            <p class="px-2 pt-3 types d-block">--}}
{{--                                <i class="far fa-flag "></i>--}}
{{--                                <span class=" font-weight-bold"> Erp deadline :  </span> 5 days--}}
{{--                            </p>--}}

{{--                        @elseif($data['create-order']['erp_deadline'] == "erp_seven_days")--}}
{{--                            <p class="px-2 pt-3 types d-block" >--}}
{{--                                <i class="far fa-flag "></i>--}}
{{--                                <span class=" font-weight-bold"> Erp deadline :  </span> 7 days--}}
{{--                            </p>--}}

{{--                        @elseif($data['create-order']['erp_deadline'] == "erp_fourteen_days")--}}
{{--                            <p class="px-2 pt-3 types d-block">--}}
{{--                                <i class="far fa-flag "></i>--}}
{{--                                <span class=" font-weight-bold"> Erp deadline :  </span> 14 days--}}
{{--                            </p>--}}

{{--                        @elseif($data['create-order']['erp_deadline'] == "erp_fourteen_plus_days")--}}
                            <p class="px-2 pt-3 types d-block">
                                <i class="far fa-flag "></i>
                                <span class=" font-weight-bold"> deadline :  </span> :{{  date("d-M-Y h:i-A" , strtotime($data['create-order']->erp_datetime)) }}
                            </p>
{{--                        @endif--}}
                        <p class="px-2 pt-3 types d-block">
                            <i class="far fa-flag "></i>
                            <span class=" font-weight-bold">1 Page Summary :</span> {{$data['create-order']->erp_page_summary}}
                        </p>
                        <p class="px-2 pt-3 types d-block">
                            <i class="far fa-flag "></i>
                            <span class=" font-weight-bold">Abstract Page :</span> {{$data['create-order']->erp_abstract_page}}
                        </p>
                    </div>
                    <div class="col-lg-6">
                        <p class="px-2 py-3 types d-block">
                            <i class="far fa-flag "></i>
                            <span class=" font-weight-bold">Spacing :</span>
                            {{$data['create-order']->erp_spacing == '1'? 'Double spacing' :'single_spacing'}}
                        </p>
                        <p class="px-2 py-3 types d-block">
                            <i class="far fa-flag "></i>
                            <span class=" font-weight-bold">No. of EXTRA SOURCES :</span> {{$data['create-order']->erp_extra_source}}
                        </p>
                        <p class="px-2 py-3 types d-block">
                            <i class="far fa-flag "></i>
                            <span class=" font-weight-bold">Copy of Sources :</span> {{$data['create-order']->erp_copy_sources}}
                        </p>
                        <p class="px-2 py-3 types d-block">
                            <i class="far fa-flag "></i>
                            <span class=" font-weight-bold">Paper Outline in Bullets :</span> {{$data['create-order']->erp_paper_outline}}
                        </p>
                        <p class="px-2 py-3 my-3 types d-block">
                            <i class="far fa-flag "></i>
                            <span class=" font-weight-bold">Statistical Analysis :</span> {{$data['create-order']->erp_statistical_analysis}}
                        </p>

                    </div>

                </div>
                @if($data['additional'] != null)
                <label> <div class="col-12">
                        <h3 class="m-0">
                            Additional instructions
                        </h3>
                    </div>
                </label>
                @else
                    @endif
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
                    <span class="px-3">
                                       {{$row->created_at}}
                                   </span>
                </div>
                @endforeach
                <div class="row">
                    <div class="col-12">
                        <div class="text-right mt-4 mb-3 mr-3">
                            <div>
                                @if (count($data['userbids']) == 0)

                                    <button type="button" class="btn btn-primary text-white" data-toggle="modal" data-target="#exampleModal"> Bid This Project
                                    </button>
                                @else
                                    <button class="text-danger btn btn-tranparent px-3">
                                        You already apllied for this job!
                                    </button>

                                @endif
                                <button type="button" class="btn btn-primary text-white" data-toggle="modal" data-target="#exampleModalOne">Claim This Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
        </div>

            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                 aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="create_questions">
                            <div class="modal-header">
                                <h5 class="modal-title" id="formModal">Bids Details</h5>
                                <h6 style="text-align:right;color:red;">  your remainig bids {{$data['bids']['erp_bids']}} </h6>

                                <button type="button" class="close" data-dismiss="modal"
                                        aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{route('users-bids.store')}}" method="post" id="bids">
                                    @csrf
                                    <input type="hidden" name="erp_order_id" value="{{$data['create-order']['id']}}">
                                    <input type="hidden" name="erp_dt" value="{{$data['create-order']['erp_datetime']}}">
                                    <input type="hidden" name="created_at" value="{{$data['create-order']['created_at']}}">
                                    <input type="text" name="erp_description"  class="ckeditor form-control">
                                    <input type="datetime-local" class="col-8" name="erp_datetime">
{{--                                    <input type="time" class="col-4"  name="erp_time">--}}
                                @if($data['create-order']['erp_team'] == null)
                                    <select class="form-control col-8 " name="erp_team_id">
                                        <option value=""> select Team </option>
                                        @foreach($data['team'] as $row)
{{--                                            @dd($row['id'])--}}
                                            <option value="{{$row->id}}"> {{$row->erp_team_name}} </option>
                                        @endforeach
                                    </select>
                                        @endif
                                    <button type="submit" value="bid" name="bidbutton"
                                            class="btn btn-primary waves-effect mt-1 text-white text-center float-right mt-3 mb-3">Bids</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="exampleModalOne" tabindex="-1" role="dialog"
                 aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="create_questions">
                            <div class="modal-header">
                                <h5 class="modal-title" id="formModal">Claims Details</h5>
                                <button type="button" class="close" data-dismiss="modal"
                                        aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{route('users-bids.store')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="erp_order_id" value="{{$data['create-order']['id']}}">
                                    <input type="hidden" name="erp_dt" value="{{$data['create-order']['erp_datetime']}}">
                                    <input type="hidden" name="created_at" value="{{$data['create-order']['created_at']}}">

                                    <div class="row ">
                                        <div class="col-12">
                                            <input type="text" name="erp_description"  class="ckeditor form-control">
                                            <input type="datetime-local" class="col-8" name="erp_datetime">
{{--                                            <input type="time" class="col-4"  name="erp_time">--}}
                                            @if($data['create-order']['erp_team'] == null)
                                                <select class="form-control col-8 " name="erp_team_id">
                                                    <option value=""> select Team </option>
                                                    @foreach($data['team'] as $row)
                                                        <option value="{{$row->id}}"> {{$row->erp_team_name}} </option>
                                                    @endforeach
                                                </select>
                                            @endif
                                            <button type="submit" value="claim" name="claimbutton" class="btn btn-primary float-right waves-effect mb-5 mt-3 text-white text-center col-2">Claim</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

{{--            <div class="row d-none">--}}

{{--        <div class="col-lg-12 col-12 bg-white p-text-color mt-5 px-0 text-dark">--}}
{{--<div class="row">--}}
{{--    <div class="col-6">--}}
{{--        <h3 class=" py-3 px-2">--}}
{{--            {{$data['create-order']->erp_order_topic}}--}}
{{--        </h3>--}}
{{--    </div>--}}
{{--    <div class="col-md-6">--}}
{{--        <h6 class="text-right text-success" >  {{$data['bids']['erp_bids']}} Available Bids</h6>--}}
{{--    </div>--}}
{{--</div>--}}
{{--            <div class="border">--}}




{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-lg-12 col-12 bg-white p-text-color text-dark  border">--}}

{{--            <p class=" pt-3 ">--}}
{{--                <i class="far fa-flag "></i>--}}
{{--                <span class=" font-weight-bold">Subject:</span> {{$data['create-order']->erp_subject_name}} </p>--}}



{{--        </div>--}}
{{--        <div class="col-lg-12 col-12 bg-white p-text-color px-0 text-dark">--}}
{{--            <div class="border">--}}
{{--                <p class="px-3 justify-content-center pt-3">--}}
{{--                    <i class="fas fa-envelope"></i>--}}
{{--                    <span class="font-weight-bold">Message:</span> <br>--}}
{{--                    <div class=px-3>{!!$data['create-order']->erp_order_message!!}</div>--}}
{{--                </p>--}}
{{--        </div>--}}
{{--        <div class="col-lg-12 col-12 bg-white p-text-color px-0 text-dark">--}}
{{--            <div class="border">--}}

{{--                <p class="px-3 pt-3 ">--}}
{{--                    <i class="far fa-flag "></i>--}}
{{--                    <span class=" font-weight-bold">Academic Name:</span> {{$data['create-order']->erp_academic_name}}--}}
{{--                </p>--}}

{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-lg-12 col-12 bg-white p-text-color px-0 text-dark">--}}
{{--            <div class="border">--}}

{{--                <p class="px-3 pt-3 ">--}}
{{--                    <i class="far fa-flag "></i>--}}
{{--                    <span class="font-weight-bold ">Paper Type:</span> {{$data['create-order']->erp_paper_type}}--}}
{{--                </p>--}}

{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-lg-12 col-12 bg-white p-text-color px-0 text-dark">--}}
{{--            <div class="border">--}}

{{--                <p class="px-3 pt-3 ">--}}
{{--                    <i class="far fa-flag "></i>--}}
{{--                    <span class=" font-weight-bold" >Paper Format:</span> {{$data['create-order']->erp_paper_format}}--}}
{{--                </p>--}}

{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="row col-12 mx-1">--}}
{{--        <div class="col-lg-6 col-12 bg-white p-text-color py-4 border text-center text-dark">--}}
{{--            <p class=" font-weight-bold">--}}
{{--                <i class="fas fa-language"></i>--}}
{{--                Language and spelling style :--}}
{{--            </p>--}}
{{--            <p class="">--}}
{{--                {{$data['create-order']->erp_language_name}}--}}
{{--            </p>--}}
{{--        </div>--}}
{{--        <div class="col-lg-6 col-12 bg-white p-text-color py-4 border text-center text-dark">--}}
{{--            <p class=" font-weight-bold">--}}
{{--                <i class="fas fa-layer-group"></i>--}}
{{--                <span class=" font-weight-bold">Will you provide any resource materials?</span>--}}
{{--            </p>--}}

{{--             @if($data['create-order']->erp_resource_materials !='No')--}}
{{--            <p class="">--}}
{{--                <p class="px-2 pt-3 ">--}}
{{--                    <i class="far fa-flag "></i>--}}
{{--                    <span class=" font-weight-bold">Your Resource of this order</span>--}}


{{--                    <a href="{{asset('image/resource'.'/'.$data['create-order']['erp_resource_file'])}}" download>  <i class="fa fa-file fa-2x mx-2" aria-hidden="true"> </i> </a>--}}
{{--                    </a>--}}
{{--                </p>--}}
{{--            </p>--}}

{{--            @else--}}
{{--                <p class="px-2 pt-3 ">--}}
{{--                                    <i class="far fa-flag "></i>--}}
{{--                                    <span class=" font-weight-bold">No Resources Available for this order</span>--}}
{{--                                </p>--}}
{{--            @endif--}}





{{--        </div>--}}
{{--            <div class="col-lg-6 col-12 bg-white p-text-color  border text-dark">--}}
{{--                <p class="px-2 pt-3 ">--}}
{{--                    <i class="far fa-flag "></i>--}}
{{--                    <span class=" font-weight-bold">Number Of Pages:</span> {{$data['create-order']->erp_number_Pages}}--}}
{{--                </p>--}}
{{--            </div>--}}

{{--            <div class="col-lg-6 col-12 bg-white p-text-color  text-dark border">--}}
{{--                <p class="px-2 pt-3 ">--}}
{{--                    <i class="far fa-flag "></i>--}}
{{--                    <span class=" font-weight-bold">Spacing:</span>--}}
{{--                    {{$data['create-order']->erp_spacing == '1'? 'Double spacing' :'single_spacing'}}--}}

{{--                </p>--}}
{{--            </div>--}}
{{--            <div class="col-lg-6 col-12 bg-white p-text-color  text-dark border">--}}
{{--                <p class="px-2 pt-3 ">--}}
{{--                    <i class="far fa-flag "></i>--}}
{{--                    <span class=" font-weight-bold">PowerPoint Slides:</span> {{$data['create-order']->erp_powerPoint_slides}}--}}
{{--                </p>--}}
{{--            </div>--}}
{{--            <div class="col-lg-6 col-12 bg-white p-text-color  text-dark border">--}}
{{--                <p class="px-2 pt-3 ">--}}
{{--                    <i class="far fa-flag "></i>--}}
{{--                    <span class=" font-weight-bold">No. of EXTRA SOURCES:</span> {{$data['create-order']->erp_extra_source}}--}}
{{--                </p>--}}
{{--            </div>--}}
{{--            <div class="col-lg-6 col-12 bg-white p-text-color  text-dark border">--}}
{{--                @if($data['create-order']['erp_deadline'] == "erp_eight_hrs")--}}
{{--                <p class="px-2 pt-3 ">--}}
{{--                    <i class="far fa-flag "></i>--}}
{{--                    <span class=" font-weight-bold"> Erp deadline:  </span> 8 hours--}}
{{--                </p>--}}

{{--                @elseif($data['create-order']['erp_deadline'] == "erp_tf_hrs")--}}
{{--                    <p class="px-2 pt-3 ">--}}
{{--                        <i class="far fa-flag "></i>--}}
{{--                        <span class=" font-weight-bold">  Erp deadline: </span> 24 Hours--}}
{{--                    </p>--}}

{{--                @elseif($data['create-order']['erp_deadline'] == "erp_fe_hrs")--}}
{{--                    <p class="px-2 pt-3 ">--}}
{{--                        <i class="far fa-flag "></i>--}}
{{--                        <span class=" font-weight-bold"> Erp deadline: </span>  48 hours--}}
{{--                    </p>--}}

{{--                @elseif($data['create-order']['erp_deadline'] == "erp_three_days")--}}
{{--                    <p class="px-2 pt-3 ">--}}
{{--                        <i class="far fa-flag "></i>--}}
{{--                        <span class=" font-weight-bold"> Erp deadline:  </span> 3 days--}}
{{--                    </p>--}}


{{--                @elseif($data['create-order']['erp_deadline'] == "erp_five_days")--}}
{{--                    <p class="px-2 pt-3 ">--}}
{{--                        <i class="far fa-flag "></i>--}}
{{--                        <span class=" font-weight-bold"> Erp deadline:  </span> 5 days--}}
{{--                    </p>--}}

{{--                @elseif($data['create-order']['erp_deadline'] == "erp_seven_days")--}}
{{--                    <p class="px-2 pt-3 ">--}}
{{--                        <i class="far fa-flag "></i>--}}
{{--                        <span class=" font-weight-bold"> Erp deadline:  </span> 7 days--}}
{{--                    </p>--}}

{{--                @elseif($data['create-order']['erp_deadline'] == "erp_fourteen_days")--}}
{{--                    <p class="px-2 pt-3 ">--}}
{{--                        <i class="far fa-flag "></i>--}}
{{--                        <span class=" font-weight-bold"> Erp deadline:  </span> 14 days--}}
{{--                    </p>--}}

{{--                @elseif($data['create-order']['erp_deadline'] == "erp_fourteen_plus_days")--}}
{{--                    <p class="px-2 pt-3 ">--}}
{{--                        <i class="far fa-flag "></i>--}}
{{--                        <span class=" font-weight-bold">Erp deadline:  </span> 14+ days--}}
{{--                    </p>--}}






{{--                @endif--}}

{{--            </div>--}}
{{--            <div class="col-lg-6 col-12 bg-white p-text-color  text-dark border">--}}
{{--                <p class="px-2 pt-3 ">--}}
{{--                    <i class="far fa-flag "></i>--}}
{{--                    <span class=" font-weight-bold">Copy of Sources:</span> {{$data['create-order']->erp_copy_sources}}--}}
{{--                </p>--}}
{{--            </div>--}}
{{--            <div class="col-lg-6 col-12 bg-white p-text-color  text-dark border">--}}
{{--                <p class="px-2 pt-3 ">--}}
{{--                    <i class="far fa-flag "></i>--}}
{{--                    <span class=" font-weight-bold">1 Page Summary:</span> {{$data['create-order']->erp_page_summary}}--}}
{{--                </p>--}}
{{--            </div>--}}
{{--            <div class="col-lg-6 col-12 bg-white p-text-color  text-dark border">--}}
{{--                <p class="px-2 pt-3 ">--}}
{{--                    <i class="far fa-flag "></i>--}}
{{--                    <span class=" font-weight-bold">Paper Outline in Bullets:</span> {{$data['create-order']->erp_paper_outline}}--}}
{{--                </p>--}}
{{--            </div>--}}
{{--            <div class="col-lg-6 col-12 bg-white p-text-color  text-dark border">--}}
{{--                <p class="px-2 pt-3 ">--}}
{{--                    <i class="far fa-flag "></i>--}}
{{--                    <span class=" font-weight-bold">Abstract Page:</span> {{$data['create-order']->erp_abstract_page}}--}}
{{--                </p>--}}
{{--            </div>--}}
{{--            <div class="col-lg-6 col-12 bg-white p-text-color  text-dark border">--}}
{{--                <p class="px-2 pt-3 ">--}}
{{--                    <i class="far fa-flag "></i>--}}
{{--                    <span class=" font-weight-bold">Statistical Analysis:</span> {{$data['create-order']->erp_statistical_analysis}}--}}
{{--                </p>--}}
{{--            </div>--}}
{{--        </div>--}}


{{--            <div class="text-right mt-4 mb-3 mr-3">--}}
{{--                <div>--}}
{{--                    @if (count($data['userbids']) == 0)--}}

{{--                    <button type="button" class="btn btn-primary text-white" data-toggle="modal" data-target="#exampleModal"> Bid This Project--}}
{{--            </button>--}}
{{--                    @else--}}
{{--                        {{'You have already bid on this project'}}--}}

{{--                    @endif--}}
{{--            <button type="button" class="btn btn-primary text-white" data-toggle="modal" data-target="#exampleModalOne">Claim This Project--}}
{{--            </button>--}}
{{--                </div>--}}
{{--            </div>--}}







{{--            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"--}}
{{--                 aria-labelledby="exampleModalCenterTitle" aria-hidden="true">--}}
{{--                <div class="modal-dialog modal-dialog-centered" role="document">--}}
{{--                    <div class="modal-content">--}}
{{--                        <div class="create_questions">--}}
{{--                            <div class="modal-header">--}}
{{--                                <h5 class="modal-title" id="formModal">Bids Details</h5>--}}
{{--                                <h6 style="text-align:right;color:red;">  yourremainig bids {{$data['bids']['erp_bids']}} </h6>--}}

{{--                                <button type="button" class="close" data-dismiss="modal"--}}
{{--                                        aria-label="Close">--}}
{{--                                    <span aria-hidden="true">&times;</span>--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                        <div class="modal-body">--}}
{{--                                <form action="{{route('users-bids.store')}}" method="post" id="bids">--}}
{{--                                    @csrf--}}
{{--                                    <input type="hidden" name="erp_order_id" value="{{$data['create-order']['id']}}">--}}
{{--                                    <input type="text" name="erp_description"  class="ckeditor form-control">--}}
{{--                                    <input type="datetime-local" class="col-8" name="erp_datetime">--}}
{{--                                    <input type="time" class="col-4"  name="erp_time">--}}
{{--                                    <button type="submit" value="bid" name="bidbutton"--}}
{{--                                            class="btn btn-primary waves-effect mt-1 text-white text-center float-right mt-3 mb-3">Bids</button>--}}
{{--                                </form>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            </div>--}}
{{--                <div class="modal fade" id="exampleModalOne" tabindex="-1" role="dialog"--}}
{{--                     aria-labelledby="exampleModalCenterTitle" aria-hidden="true">--}}
{{--                    <div class="modal-dialog modal-dialog-centered" role="document">--}}
{{--                        <div class="modal-content">--}}
{{--                            <div class="create_questions">--}}
{{--                                <div class="modal-header">--}}
{{--                                    <h5 class="modal-title" id="formModal">Claims Details</h5>--}}
{{--                                    <button type="button" class="close" data-dismiss="modal"--}}
{{--                                            aria-label="Close">--}}
{{--                                        <span aria-hidden="true">&times;</span>--}}
{{--                                    </button>--}}
{{--                                </div>--}}
{{--                                <div class="modal-body">--}}
{{--                                    <form action="{{route('users-bids.store')}}" method="post">--}}
{{--                                        @csrf--}}
{{--                                        <input type="hidden" name="erp_order_id" value="{{$data['create-order']['id']}}">--}}
{{--                                        <div class="row ">--}}
{{--                                            <div class="col-12">--}}
{{--                                                <input type="text" name="erp_description"  class="ckeditor form-control">--}}
{{--                                                <input type="datetime-local" class="col-8" name="erp_datetime">--}}
{{--                                                <input type="time" class="col-4"  name="erp_time">--}}
{{--                                                <button type="submit" value="claim" name="claimbutton" class="btn btn-primary float-right waves-effect mb-5 mt-3 text-white text-center col-2">Claim</button>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </form>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--        </div>--}}
{{--        </div>--}}
{{--    </div>--}}
        </div>
</div>
</div>
@endsection
