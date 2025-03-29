<div class="d-none">
    @extends('worker/layouts/master')
    @section('title')
        Revisions
    @endsection
    @section('content')
</div>
{{--<div>--}}
@php
    $quiz = DB::table('assignquiz')->where('users_id',Auth()->user()->id)->where('quiz_is_done',null)->orderBy('order_by', 'ASC')->get()->first();
@endphp
<div class="container">
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

            <div class="card mt-5">
                <div class="header">
                    <a href="{{url('user-dashboard')}}" class="btn btn-primary float-right mt-3">Continue Work
                    </a>
                </div>
                <div class="row mt-2 align-items-center py-5">

                    <div class="col-12 text-center">
                        <i class="far fa-smile  fa-10x"></i>
{{--                        <h3 class="mt-5">  Your are Passed</h3>--}}
{{--                        <p class="font-12"> Lorem ispum is a dummy text for absoulute beginners and advanced programmers</p>--}}
                        @if($quiz != null)
                            <h3 class="mt-5">You're passed a previous quiz please click below to take a next quiz to continue your work </h3>
                            <a class="btn btn-primary  mt-3" href="{{url('user-dashboard')}}" >
                                NEXT QUIZ
                            </a>
                        @else
                            <h3 class="mt-5">You're passed a previous quiz</h3>
                        @endif

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>



@endsection


