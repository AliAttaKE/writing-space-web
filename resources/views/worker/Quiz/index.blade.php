<div class="d-none">
@extends('worker/layouts/master')
@section('title')
    Quiz
@endsection
@section('content')
</div>
{{--<div class="row align-items-center " style="position:absolute;top:0;left:0;height:100vh;width:100%;background:#000000c2;z-index:999;">--}}
{{--    <div class="bg-white col-md-4 col-sm-4 col-xs-4 mx-auto" style="z-index:999;">--}}
{{--        <div class="modal-header  p-0 w-100 d-block">--}}
{{--            <h4 class="page-title text-center"style="color:#0D0A0A;margin-top:10px;"> Click to start Quiz </h4>--}}
{{--        </div>--}}
{{--        <div class="modal-footer  p-0 w-100 d-block">--}}
{{--            <form class="m-0 float-left" method="POST" action="{{ route('logout') }}">--}}
{{--                @csrf--}}
{{--                <a href="#"  :href="route('logout')"--}}
{{--                   onclick="event.preventDefault();--}}
{{--                                                this.closest('form').submit();">--}}
{{--                    <button type="button" class="btn btn-primary float-right my-3">Logout--}}
{{--                    </button>                            </a>--}}
{{--            </form>--}}
{{--            <button type="submit" class="btn btn-info waves-effect start-btn float-right my-3" id="hid">--}}
{{--                Start--}}
{{--            </button>--}}

{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<div class="modal start-popup fade show"  data-keyboard="false"  data-backdrop="static" id="exampleModalCenter13" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" style="display: block;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="background: #5783c7 ;">
            <div class="modal-header">
                <h5 class="modal-title text-white font-20" id="exampleModalCenterTitle">Alert
                    <i class="fas fa-exclamation-triangle"></i></h5>
            </div>
            <div class="modal-body text-white">
                PLease Attempt Quiz  <br>




                <strong>INSTRUCTIONS:</strong> <br>
                <ul>
                    <li>Finish your quiz before the given.</li>
                    <li>Please don't try to change your tabs once you start the Quiz otherwise Quiz submitted</li>
                </ul>

            </div>
            <div class="modal-footer  p-0 w-100 d-block">
                <form class="m-0 float-left" method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a href="#"  :href="route('logout')"
                       onclick="event.preventDefault();
                                                this.closest('form').submit();">
                        <button type="button" class="btn btn-dark float-right my-3">Logout
                        </button>                            </a>
                </form>
                <button type="submit" class="btn btn-dark waves-effect start-btn float-right my-3" id="hid">
                    Start
                </button>

            </div>
        </div>
    </div>
</div>
    <div class="container pt-3">
@if($data != null)
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <ul class="breadcrumb breadcrumb-style">
                            <li class="breadcrumb-item">
                                <h4 class="page-title"> {{$data[0]['erp_quiz_name']}} <span data-timer><small>( {{$data[0]['erp_quiz_timer']}} Minutes )</small></span></h4>
                            </li>
                        </ul>
                    </div>
{{--                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">--}}
{{--                        <button type="button" class="btn btn-primary float-right mt-3"> Back--}}
{{--                        </button>--}}

{{--                    </div>--}}
                </div>
                @if($data[0]['erp_quiz_formats'] == 'multiple')
                    <form id="" action="{{route('take_quiz.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card">
                            <div class="header">
                                <h2>
                                    <strong>Total Question {{$data[0]['count']}} </strong>
                                </h2>
                            </div>

                            @foreach($data as $questions)
                                <input type="hidden" name="erp_quiz_id" value="{{$questions['erp_quiz_id']}}">
                                <div class="header">
                                    <div class="container">
                                        <div class="row mt-4">
                                            <div class="col">
{{--                                                @php $ques = json_decode($questions['erp_question_text'],true) @endphp--}}
{{--                                                @foreach($ques as $data)--}}
                                                    {!! $questions['erp_question_text'] !!}
{{--                                                @endforeach                                          --}}
                                            </div>
                                        </div>
                                        @if($questions['erp_question_type'] == 'check_boxes')
                                            @php
                                                $question_hint = json_decode( $questions['erp_checkbox_option'] );
                                            @endphp
                                            @foreach($question_hint as $key => $value )
                                                <div class="row mt-4">
                                                    <div class="col">
                                                        <label>
                                                            <input type="hidden" name="erp_question_data_id[]" value="{{$questions['erp_question_data_id']}}">
                                                            <input name="erp_question_answer[{{$questions['erp_question_data_id']}}]" type="radio" value="{{$key}}">
                                                            <span>{{$key}}</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @elseif($questions['erp_question_type'] == 'file_upload')
                                            <div class="row mt-4">
                                                <div class="col">
                                                    <div class="file-field input-field " >
                                                        <div class="btn ">
                                                            <span>File</span>
                                                            <input  name="file"  type="file" class="fileupload">
                                                        </div>
                                                        <div class="file-path-wrapper col-6">
                                                            <input class="file-path validate"  name="erp_question_answer[{{$questions['erp_question_data_id']}}]" type="text">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @else
                                            <div class="row mt-4 col-6">
                                                <textarea name="erp_question_answer[{{$questions['erp_question_data_id']}}]" class="form-control" id="comment_text" cols="10" rows="6"></textarea>
                                            </div>
                                        @endif
                                        <div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <div class="footer p-5 ">
                                <button type="submit" class="btn btn-primary float-right">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                @else
                    <form id="regForm" action="{{route('take_quiz.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card">
{{--                            <div class="col-lg-12 col-sm-12 container-fluid">--}}
{{--                                <div class="counter-box white">--}}
{{--                                    <div class="container">--}}
{{--                                        <div class="row mt-5">--}}
{{--                                            <div class="col">--}}
{{--                                                <h2>--}}
{{--                                                    <strong>Passage--}}
{{--                                                    </strong>--}}
{{--                                                </h2>--}}
{{--                                                    <br>--}}
{{--                                                {{$data[0]['erp_quiz_passage']}}--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                            </div>--}}
                            <div class="header">
                                <h2>
                                    <strong>Passage </strong>
                                </h2>

                            </div>
                            <div class="header">
                                <h5>
                                    <strong>{{$data[0]['erp_quiz_passage']}} </strong>
                                </h5>

                            </div>

                            <div class="header">
                                <h2>
                                    <strong>Total  Questions {{$data[0]['count']}} </strong>
                                </h2>

                            </div>
                            <div  class="d-none" style="text-align:center;margin-top:40px;">
                                @foreach($data as $questions)
                                <span class="step"></span>
                                @endforeach

                            </div>
                            <?php $count =1 ?>
                            @foreach($data as $questions)
                                <div class="tab">
                                <input type="hidden" name="erp_quiz_id" value="{{$questions['erp_quiz_id']}}">
                                <div class="header">
                                    <div class="container">
                                        <div class="row mt-4">
                                            <div class="col-12">
{{--                                                @php $ques = json_decode($questions['erp_question_text'],true) @endphp--}}
{{--                                                @foreach($ques as $data)--}}
                                                <h5>
                                                    {!! $questions['erp_question_text'] !!}
                                                </h5>
{{--                                                @endforeach                                            --}}
                                        </div>
                                        </div>
                                        @if($questions['erp_question_type'] == 'check_boxes')
                                            @php
                                                $question_hint = json_decode($questions['erp_checkbox_option']);
                                            @endphp
                                            @foreach($question_hint as $key => $value )
                                                <div class="row mt-4">
                                                    <div class="col">
                                                        <label>
                                                            <input type="hidden" name="erp_question_data_id[]" value="{{$questions['erp_question_data_id']}}">
                                                            <input name="erp_question_answer[{{$questions['erp_question_data_id']}}]" type="radio" value="{{$key}}">
                                                            <span>{{$key}}</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @elseif($questions['erp_question_type'] == 'file_upload')
                                            <div class="row mt-4">
                                                <div class="col">
                                                    <div class="file-field input-field " >
                                                        <div class="btn ">
                                                            <span>File</span>
                                                            <input  name="file"  type="file" class="fileupload">
                                                        </div>
                                                        <div class="file-path-wrapper col-6">
                                                            <input class="file-path validate"  name="erp_question_answer[{{$questions['erp_question_data_id']}}]" type="text">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @else
                                            <div class="row mt-4 col-6">
                                                <textarea name="erp_question_answer[{{$questions['erp_question_data_id']}}]" class="form-control" id="comment_text" cols="10" rows="6"></textarea>
                                            </div>
                                        @endif
                                        <div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <?php $count++ ?>
                            @endforeach
                            <div class="footer p-5 ">
                                <div style="overflow:auto;">
                                                                <div style="float:right;">
{{--                                                                    <button type="button" id="prevBtn" onclick="nexrev(-1)">Previous</button>--}}
                                                                    <button type="button" class="btn btn-primary float-right" id="nextBtn" onclick="nexrev(1)">Next</button>
                                                                </div>
                                                            </div>


                                                            <!-- Circles which indicates the steps of the form: -->

{{--                                <button type="submit" class="btn btn-primary float-right">--}}
{{--                                    Submit--}}
{{--                                </button>--}}
                            </div>
                        </div>



                        <div class="modal fade"  data-keyboard="false"  data-backdrop="static" id="alertdanger" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" style="display: none;" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content bg-danger">
                                    <div class="modal-header">
                                        <h5 class="modal-title text-white font-20" id="exampleModalCenterTitle">Time's Up
                                            <i class="fas fa-exclamation-triangle"></i></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true" class="text-white">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body text-white">
                                        Quiz time is end please click below to submit your Quiz
                                    </div>
                                    <div class="modal-footer">

                                        <button type="submit" class="btn btn-dark">SUBMIT</button>


                                    </div>
                                </div>
                            </div>
                        </div>



                    </form>


                @endif
            </div>
        </div>

        @else
         <div class="m-auto text-center h-100 mt-5">
             <h1> Quiz is not available </h1>
         </div>

    @endif



    </div>
    </div>
<button type="button " class="d-none btn bg-red submitalert btn-circle waves-effect waves-circle waves-float" data-toggle="modal" data-target="#alertdanger">
    <i class="material-icons"> delete  </i>
</button>


@endsection


<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    jQuery(document).ready(function(){
        $(".fileupload").change(function(e) {
            var  ajeeb = $(this);
            var data = new FormData();
            data.append('image', $('input[type=file]')[0].files[0]);
            data.append('_token', "{{ csrf_token() }}");
            console.log(data)
            $.ajax({
                url:'{{url('/fileupload')}}',
                type: 'POST',
                data : data,
                enctype : 'multipart/form-data',
                contentType: false,
                processData: false,
                success: function( data ) {
                    console.log(data);
                    $(ajeeb).parents('.file-field').find('.file-path').val(data);
                },
                error: function() {
                    alert('unable to insert watermark on image');
                }
            });
        });










        var currentTab = 0; // Current tab is set to be the first tab (0)
        showTab(currentTab); // Display the current tab

    })
    var currentTab = 0; // Current tab is set to be the first tab (0)
    showTab(currentTab); // Display the current tab

    function showTab(n) {
        // This function will display the specified tab of the form ...
        var x = document.getElementsByClassName("tab");
        x[n].style.display = "block";
        // ... and fix the Previous/Next buttons:
        if (n == 0) {
            document.getElementById("prevBtn").style.display = "none";
        } else {
            document.getElementById("prevBtn").style.display = "inline";
        }
        if (n == (x.length - 1)) {
            document.getElementById("nextBtn").innerHTML = "Submit";
        } else {
            document.getElementById("nextBtn").innerHTML = "Next";
        }
        // ... and run a function that displays the correct step indicator:
        fixStepIndicator(n)
    };
    function fixStepIndicator(n) {
        // This function removes the "active" class of all steps...
        var i, x = document.getElementsByClassName("step");
        for (i = 0; i < x.length; i++) {
            x[i].className = x[i].className.replace(" active", "");
        }
        //... and adds the "active" class to the current step:
        x[n].className += " active";
    }
    function validateForm() {
        // This function deals with validation of the form fields
        var x, y, i, valid = true;
        x = document.getElementsByClassName("tab");
        y = x[currentTab].getElementsByTagName("input");
        // A loop that checks every input field in the current tab:
        for (i = 0; i < y.length; i++) {
            // If a field is empty...
            if (y[i].value == "") {
                // add an "invalid" class to the field:
                y[i].className += " invalid";
                // and set the current valid status to false:
                valid = false;
            }
        }
        // If the valid status is true, mark the step as finished and valid:
        if (valid) {
            document.getElementsByClassName("step")[currentTab].className += " finish";
        }
        return valid; // return the valid status
    }
    function nexrev(n) {
        // This function will figure out which tab to display
        var x = document.getElementsByClassName("tab");
        // Exit the function if any field in the current tab is invalid:
        if (n == 1 && !validateForm()) return false;
        // Hide the current tab:
        x[currentTab].style.display = "none";
        // Increase or decrease the current tab by 1:
        currentTab = currentTab + n;
        // if you have reached the end of the form... :
        if (currentTab >= x.length) {
            //...the form gets submitted:
            document.getElementById("regForm").submit();
            return false;
        }
        // Otherwise, display the correct tab:
        showTab(currentTab);
    }

</script>



<style>
    /* Style the form */
    #regForm {
        /*background-color: #ffffff;*/
        /*margin: 100px auto;*/
        /*padding: 40px;*/
        /*width: 70%;*/
        /*min-width: 300px;*/
    }

    /* Style the input fields */
    input {
        padding: 10px;
        width: 100%;
        font-size: 17px;
        font-family: Raleway;
        border: 1px solid #aaaaaa;
    }

    /* Mark input boxes that gets an error on validation: */
    input.invalid {
        background-color: #ffdddd;
    }

    /* Hide all steps by default: */
    .tab {
        display: none;
    }

    /* Make circles that indicate the steps of the form: */
    .step {
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbbbbb;
        border: none;
        border-radius: 50%;
        display: inline-block;
        opacity: 0.5;
    }

    /* Mark the active step: */
    .step.active {
        opacity: 1;
    }

    /* Mark the steps that are finished and valid: */
    .step.finish {
        background-color: #04AA6D;
    }
</style>



<script>
    $(document).ready(function (){
        jQuery('#hid').click(function(e){
            var countdown = parseInt(jQuery('[data-timer]').text().split(' ')[1]) * 60 * 1000;
            var timerId = setInterval(function(){
                countdown -= 1000;
                var min = Math.floor(countdown / (60 * 1000));
                var sec = Math.floor((countdown - (min * 60 * 1000)) / 1000);

                if (countdown == 0) {
                    // alert("Time Is UP");
                    $('.submitalert').trigger('click');
                    clearInterval(timerId);
                    // jQuery('#regForm').trigger('submit');
                } else {
                    jQuery('[data-timer]').text(`${min} : ${sec} Minutes`);
                    console.log(`${min} : ${sec} Minutes`);
                }

            }, 1000);
        })
        $('.start-btn').on('click',function(){
            $(this).parents('.start-popup').removeClass('show');
            $(this).parents('.start-popup').addClass('hide');
        })
    })
</script>
