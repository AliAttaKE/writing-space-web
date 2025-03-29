@extends('worker/layouts/master')
@section('title')
    Show
@endsection
@section('content')
    <div class="container pt-3">
        <div class="row clearfix">



            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title"> {{$data[0]['erp_quiz_name']}} <span><small>( {{$data[0]['erp_quiz_timer']}} Minutes )</small></span></h4>
                            </li>

                        </ul>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <a href="{{url()->previous()}}">
                            <button type="button" class="btn btn-primary float-right mt-3"> Back
                            </button>
                        </a>
                    </div>

                </div>
                <div class="card">
                    <div class="header">
                        <!-- #START# Modal Form Example -->

                        @if($data[0]['erp_quiz_result_type'] == 'immediate')

                            <div class="card">
                                <div class="header">
                                    <h2>
                                        <strong>No  of  Questions {{$data[0]['count']}} </strong>
                                    </h2>
                                </div>
                                @foreach($data as $questions)
                                    <input type="hidden" name="erp_quiz_id" value="{{$questions['erp_quiz_id']}}">
                                    <div class="header">
                                        <div class="container">
                                            <div class="row mt-4">
                                                <div class="col">
{{--                                                    @php $ques = json_decode($questions['erp_question_text'],true) @endphp--}}
{{--                                                    @foreach($ques as $data)--}}
                                                        {!! $questions['erp_question_text'] !!}
{{--                                                    @endforeach--}}
                                                </div>
                                            </div>
                                            @if($questions['erp_question_type'] == 'check_boxes')
                                                @php
                                                    $question_hint = json_decode($questions['erp_checkbox_option'],true);
                                                @endphp
                                                @foreach($question_hint as $key => $value )
                                                    @php
                                                        if(array_key_exists($questions['erp_question_data_id'],$questions['quiz_answer'])){
                                                    $check = ($questions['quiz_answer'][$questions['erp_question_data_id']] == $key) ? 'checked' :'disabled';
                                                    }

                                                    @endphp
                                                    <div class="row mt-4">
                                                        <div class="col">
                                                            <label>


                                                                <input type="hidden" name="erp_question_data_id[]" value="{{$questions['erp_question_data_id']}}">
                                                                <input {{$check}} name="erp_question_answer[{{$questions['erp_question_data_id']}}]" type="radio" value="{{$key}}">
                                                                <span>{{$key}}</span>
                                                            </label>

                                                            @if($value == 1 )
                                                                <i class="float-right  {{$questions['quiz_answer'][$questions['erp_question_data_id']] == $key ? 'fas fa-check text-success' : 'fas fa-times text-danger'}} "></i>

                                                            @endif

                                                        </div>
                                                    </div>
                                                @endforeach
                                            @elseif($questions['erp_question_type'] == 'file_upload')
                                                <div class="row mt-4">
                                                    <div class="col">
                                                        <div class="file-field input-field " >
                                                            <div class="btn ">
                                                                <span>File</span>
                                                                <input name="file" type="file">
                                                            </div>
                                                            <div class="file-path-wrapper col-6">
                                                                <input class="file-path validate" name="file" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @else
                                                <div class="row mt-4 col-6">
                                                    <textarea name="comment_text" class="form-control" id="comment_text" cols="10" rows="6"></textarea>
                                                </div>
                                            @endif
                                            <div>
                                            </div>
                                        </div>
                                    </div>


                                @endforeach
                            </div>
                        @else
                            <div class="card">
                                <div class="header">
                                    <h2>
                                        <strong>No  of  Questions {{$data[0]['count']}} </strong>
                                    </h2>
                                </div>
                                <div class="header">
                                    <div class="container">
                                        @php $answer  = $data[0]['quiz_answer'];
                                                       $i = 1
                                        @endphp

                                        @foreach($answer as $key => $value)
                                            <?php

                                            $supported_image = array(
                                                'gif','jpg', 'jpeg', 'png', 'pdf', 'xls', 'ppt', 'DOC', 'DOCX'
                                            );

                                            $src_file_name = $value;
                                            $ext = strtolower(pathinfo($src_file_name, PATHINFO_EXTENSION)); // Using strtolower to overcome case sensitive


                                            ?>
                                            @php
                                                $questions = \App\Models\Management\Quiz\Questions::where('id',$key)->get()->first();
                                            @endphp
                                            <div class="row mt-4">
                                                <div class="col">
                                                    Question {{$i}} = {{$questions->erp_question_text}}
                                                </div>
                                            </div>
                                            <div class="row mt-4">
                                                <div class="col">
                                                    Answer :
                                                    <?php if (in_array($ext, $supported_image)) {?>
                                                    <a href="{{$value}}" target="_blank">{{$value}}</a>

                                                    <?php }else{?>
                                                    {{$value}}
                                                    <?php }?>
                                                </div>
                                            </div>
                                            <?php $i++ ?>
                                        @endforeach
                                        <div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        @endif


                    </div>
                </div>
            </div>
        </div>
    </div>

















    {{--    <div class="container pt-3">--}}
{{--        <div class="row clearfix">--}}
{{--            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">--}}
{{--                        <ul class="breadcrumb breadcrumb-style ">--}}
{{--                            <li class="breadcrumb-item">--}}
{{--                                <h4 class="page-title">Quiz Result</h4>--}}
{{--                            </li>--}}

{{--                        </ul>--}}
{{--                    </div>--}}
{{--                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">--}}
{{--                        <button type="button" class="btn btn-primary float-right mt-3"> Back--}}
{{--                        </button>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--                <div class="card">--}}
{{--                    <div class="header">--}}
{{--                        <h2>--}}
{{--                            <strong>No  of  Questions</strong></h2>--}}
{{--                        <!-- #START# Modal Form Example -->--}}
{{--                        <div class="container">--}}



{{--                            <div class="row mt-4">--}}
{{--                                <div class="col">--}}
{{--                                    Question 1 (Checkbox): xxx--}}
{{--                                </div>--}}
{{--                                <div class="col">--}}
{{--                                    Total Marks: <strong class="font-weight-bold">1</strong>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="row mt-4">--}}
{{--                                <div class="col">--}}
{{--                                    Answer: xxx--}}
{{--                                </div>--}}
{{--                                <div class="col">--}}
{{--                                    Marks Awarded: <strong class="font-weight-bold">1</strong>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="row mt-4">--}}
{{--                                <div class="col">--}}

{{--                                </div>--}}
{{--                                <div class="col">--}}
{{--                                    Status: <strong class="font-weight-bold">Correct</strong>--}}
{{--                                </div>--}}
{{--                            </div>--}}



{{--                            <div>--}}

{{--                            </div></div>--}}
{{--                        --}}







{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}





@endsection
