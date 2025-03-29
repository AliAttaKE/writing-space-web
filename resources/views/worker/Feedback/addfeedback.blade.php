@extends('worker/layouts/master')
@section('title')
    Feedback
@endsection
@section('content')
    <div class="container my-5">
        @include('worker.layouts.error')
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-lg-4 col-4">
                        <div><img src="{{asset('management/images/logo_23e95417-e868-4de7-96b3-74c3eebc48a2_180x (1).png')}}" height="80px" alt=""></div>
                    </div>
                    <div class="col-lg-8 col-8 my-5">
                        <h4>Emirati Coffee Client Feedback Form </h4>
                    </div>

                    <div class="col-lg-12 col-12">
                        {{--                    <div class="card">--}}
                        <form action="{{route('feedback.store')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="formGroupExampleInput">Feedback on our coutomer services?</label>
                                <input type="text" name="erp_coutomer_services" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput" >Feedback on our beans?</label>
                                <input type="text" name="erp_feedback_beans" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput" >Feedback on delivery and delivery drives?</label>
                                <input type="text" name="erp_delivery_drives" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput" >Requirements and Needs</label>
                                <input type="text" name="erp_requirement_need" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput" >Genteral Feedback</label>
                                <input type="text" name="erp_general_feedback" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput" >Current type of beans clients is using and why?</label>
                                <input type="text" name="erp_beans_clients" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput" >is the client interested in having a retail shelve to sell our beans? <br>
                                    and capsules and instant coffee in their shop?</label>
                                <div>
                                    <textarea name="erp_feedback_message" class="input_2 text" id="" cols="30" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput" >Suggestion</label>
                                <input type="text" name="erp_suggestion" placeholder="">
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <button type="submit"
                                        class="btn btn-primary float-right waves-effect mb-5">Feedback</button></div>
                            {{--                        </div>--}}
                        </form>
                    </div>
                </div>
            </div>



        </div>
    </div>
    </div>

@endsection
