<div class="d-none">
    @extends('worker/layouts/master')
    @section('title')
        Quiz
    @endsection
    @section('content')
</div>
<style>
.bg-disabled{
    background-color:#d8d8d8;

}
</style>
<div class="container h-100 py-5">
    <div class="row h-100 align-items-">
        <div class="col-12">
            @include('worker/layouts/error')
            <div class="row px-md-4">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <ul class="breadcrumb breadcrumb-style ">
                        <li class="breadcrumb-item">
                            <h4 class="page-title">Your Quiz</h4>
                        </li>

                    </ul>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 ">
                    <form class="m-0 float-right" method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="#"  :href="route('logout')"
                           onclick="event.preventDefault();
                                                this.closest('form').submit();">
                            <button type="button" class="btn btn-dark float-right my-3">Logout
                            </button>                            </a>
                    </form>
                </div>

            </div>
{{--            @dd($data)--}}
            @foreach($data as $row)

            <div class="card {{$row['quiz_is_done'] != null ? 'bg-disabled' : ''}}">
                <div class="body">

                    wcjnofcnwoifnio

                        <div class="row w-100 m-auto">
                            <div class="col-md-3 m-0 d-flex align-items-center text-uppercase">
                                {{$row['erp_quiz_name']}}
                            </div>
                            <div class="col-md-3 m-0 d-flex align-items-center" >
                                <strong class="font-weight-bold">Time : </strong> {{$row['erp_quiz_timer']}} Mins
                            </div>
                            <div class="col-md-3 m-0 d-flex align-items-center">
                                <strong class="font-weight-bold">Question : </strong> {{$row['count']}}
                            </div>
                            <div class="col-md-3 m-0">
                                @if($row['erp_quiz_type'] == 'signup')
                                <a href="{{url('take-signup',$row['id'])}} " {{$row['quiz_is_done'] != null ? 'disabled' : ''}} class="btn btn-dark waves-effect d-flex align-items-center start-btn float-right my3" class="font-weight-bold">Start</a>
                                @else
                                    <a href="{{url('take-login',$row['id'])}} " class="btn btn-dark waves-effect d-flex align-items-center start-btn float-right my3" class="font-weight-bold">Start</a>
                                @endif
                            </div>
                        </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
