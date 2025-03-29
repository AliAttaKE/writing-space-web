<div class="d-none">
@extends('worker/layouts/master')
@section('title')
    Revisions
@endsection
@section('content')
</div>
    <div class="container">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                <div class="card mt-5">
                    <div class="header">
                        <form class="m-0" method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a href="#"  :href="route('logout')"
                               onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                <button type="button" class="btn btn-primary float-right mt-3">Logout
                                </button>                            </a>
                        </form>
                    </div>
                    @php
                        $quiz = DB::table('registrationquizzes')->where(['quiz_type'=>'signup','user_id'=>Auth()->user()->id,'quiz_is_done'=>null])->orderBy('quiz_reorder', 'ASC')->get()->first();
                    @endphp

{{--@dd($quiz);--}}
                    <div class="row mt-2 align-items-center py-5">

                        <div class="col-12 text-center">
                            <i class="far fa-smile  fa-10x"></i>

{{--                            <p class="font-12"> Lorem ispum is a dummy text for absoulute beginners and advanced programmers</p>--}}
                            @if($quiz != null)
                                <h3 class="mt-5">You'r passed a previous quiz please click below to take a next quiz to complete your registration </h3>
                                <a class="btn btn-primary  mt-3" href="{{url('user-dashboard')}}" >
                                    NEXT QUIZ
                                </a>
                            @else
                                <h3 class="mt-5">You'r passed please waiting for your account approval</h3>
                            @endif
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>



@endsection


