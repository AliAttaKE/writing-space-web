@extends('management/layouts/master')
@section('title')
    Accounting
@endsection
@section('content')
    <div class="container pt-3">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title"> Payout</h4>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <button type="button" class="btn btn-primary float-right mt-3"> Back
                        </button>
                    </div>
                </div>
                <div class="card col-12">
                    <div class="header">
                        <h2>
                            <strong>Payout </strong></h2>
                        <!-- #START# Modal Form Example -->
                    </div>
                    <div class="body">
                        <table class="table" id="myTable">
                            <thead>
                            <tr>
                                <th>Complete Name</th>
                                <th>Email</th>
                                <th>Join Date</th>
                                <th>Payout</th>
                                <th>Check Details</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($accounts['payments'] as $account)
                                @php
                              unset($name);
                              unset($email);
                              unset($join);
                              unset($comptotal);
                              unset($user_id);
                                @endphp
                                @foreach($account as $payment)
                                    @php
                                    $comptotal[] = $payment->commission_rate * $payment->pages * $payment->spacing;
                                    $name = $payment['worker']['name'];
                                    $email = $payment['worker']['email'];
                                    $join = $payment['worker']['created_at'];
                                    $user_id = $payment['worker']['id'];
                                    @endphp
                                @endforeach
                                <tr>
                                <td>{{$name}}</td>
                                    <td>{{$email}}</td>
                                    <td>{{$join->format('d/m/Y')}}</td>
                                    <td> ${{array_sum($comptotal)}}</td>
                                <td><a href="{{route('admin-account.show',base64_encode($user_id))}}">
                                        <button type="button" class="btn btn-primary"> Click Here
                                        </button>
                                    </a></td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
@endsection
