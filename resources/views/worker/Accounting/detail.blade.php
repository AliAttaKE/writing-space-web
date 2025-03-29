@extends('worker/layouts/master')
@section('title')
    Accounts
@endsection
@section('content')
    <div class="content">
        {{--    Pending Orders--}}
        <div class="card my-4">
            <div class="header">
                <h2 class="text-center">
                    <strong>In-Progress Orders Payout</strong></h2>
            </div>
            <div class="body table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Order’s Number</th>
                        <th>Order’s Topic</th>
                        <th>Role Assigned</th>
                        <th>Outcome</th>
                        <th>Date</th>

                    </tr>
                    </thead>
                    <tbody>
                    @if($data['pending'] != null)
                        @foreach($data['pending'] as $key=> $pendingpay)
                            @php unset($pendingorderbyrole) @endphp
                            @foreach($pendingpay as $rolewise)
                                <tr>
                                    <td>{{$rolewise['order_id']}}</td>
                                    <td>{{$rolewise['title']}}</td>
                                    <td>{{$key}}</td>
                                    <td>{{$rolewise['amount']}}</td>
                                    <td>{{date('Y-m-d', strtotime($rolewise['date']))}}</td>
                                </tr>
                                @php
                                    $pendingorderbyrole[] = $rolewise['amount'];
                                    $countpending[] = count($pendingpay);
                                    $totalpending[]=$rolewise['amount'];
                                @endphp
                            @endforeach
                        @endforeach
                        <tr>
                            <td colspan="2">Total Number of Orders</td>
                            <td></td>
                            <td>{{array_sum($countpending)}}</td>
                        </tr>
                        <tr>
                            <td colspan="2">Total Orders Payout</td>
                            <td></td>
                            <td>{{array_sum($totalpending)}}</td>
                        </tr>
                    @endif
                    </tbody>
                </table>
            </div>
        </div>

        {{--    in-progress Orders--}}
        <div class="card my-4">
            <div class="header">
                <h2 class="text-center">
                    <strong>Completed But (In-Progress) Orders Payout</strong></h2>
            </div>
            <div class="body table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Order’s Number</th>
                        <th>Order’s Topic</th>
                        <th>Role Assigned</th>
                        <th>Outcome</th>
                        <th>Date</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($data['process'] != null)
                        @foreach($data['process'] as $key=> $processgpay)
                            @php unset($processorderbyrole) @endphp
                            @foreach($processgpay as $rolewise)
                                <tr>
                                    <td>{{$rolewise['order_id']}}</td>
                                    <td>{{$rolewise['title']}}</td>
                                    <td>{{$key}}</td>
                                    <td>{{$rolewise['amount']}}</td>
                                    <td>{{date('Y-m-d', strtotime($rolewise['date']))}}</td>
                                </tr>
                                @php
                                    $processorderbyrole[] = $rolewise['amount'];
                                    $countprocess[] = count($processgpay);
                                    $totalprocess[]=$rolewise['amount'];
                                @endphp
                            @endforeach
                        @endforeach
                        <tr>
                            <td colspan="2">Total Number of Orders</td>
                            <td></td>
                            <td>{{array_sum($countprocess)}}</td>
                        </tr>
                        <tr>
                            <td colspan="2">Total Orders Payout</td>
                            <td></td>
                            <td>{{array_sum($totalprocess)}}</td>
                        </tr>
                    @endif
                    </tbody>
                </table>
            </div>
        </div>

        {{--    Completed Orders--}}
        <div class="card my-4">
            <div class="header">
                <h2 class="text-center">
                    <strong>Completed But (In-Progress) Orders Payout</strong></h2>
            </div>
            <div class="body table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Order’s Number</th>
                        <th>Order’s Topic</th>
                        <th>Role Assigned</th>
                        <th>Outcome</th>
                        <th>Date</th>
                        <th>Status</th>

                    </tr>
                    </thead>
                    <tbody>
                    @if($data['completed'] != null)
                        @foreach($data['completed'] as $key=> $completedgpay)
                            @php unset($completedorderbyrole) @endphp
                            @if(isset($completedgpay['normal']))
                                @foreach($completedgpay['normal'] as $rolewise)
                                <tr>
                                    <td>{{$rolewise['order_id']}}</td>
                                    <td>{{$rolewise['title']}}</td>
                                    <td>{{$key}}</td>
                                    <td>{{$rolewise['amount']}}</td>
                                    <td>{{date('Y-m-d', strtotime($rolewise['date']))}}</td>
                                    <td>Order Pay</td>
                                </tr>
                                @php
                                    $completedorderbyrole[] = $rolewise['amount'];
                                    $countcompleted[] = count($completedgpay['normal']);
                                    $totalcompleted[]=$rolewise['amount'];
                                @endphp
                            @endforeach
                            @endif
                            @if(isset($completedgpay['refunded']))
                                @foreach($completedgpay['refunded'] as $rolewise)
                                    <tr>
                                        <td>{{$rolewise['order_id']}}</td>
                                        <td>{{$rolewise['title']}}</td>
                                        <td>{{$key}}</td>
                                        <td>{{$rolewise['amount']}}</td>
                                        <td>{{date('Y-m-d', strtotime($rolewise['date']))}}</td>
                                        <td class="text-danger">Refunded</td>
                                    </tr>
                                @endforeach
                            @endif
                        @endforeach
                        @if($data['bounaspenalty'] != null)
                            @foreach($data['bounaspenalty'] as $BnP)
                                @if($BnP['type']=='penalty')
                                    <tr>
                                        <td>{{$BnP['order_id']}}</td>
                                        <td>{{$BnP['reason']}}</td>
                                        <td>{{$BnP['commission']['package_name']}}</td>
                                        <td>{{$BnP['amount']}}</td>
                                        <td>{{date('Y-m-d', strtotime($BnP['created_at']))}}</td>
                                        <td class="text-danger">{{$BnP['type']}}</td>
                                    </tr>
                                    @php $bnpamount[]= -$BnP->amount @endphp
                                @else
                                    <tr>
                                        <td>{{$BnP['order_id']}}</td>
                                        <td>{{$BnP['reason']}}</td>
                                        <td>{{$BnP['commission']['package_name']}}</td>
                                        <td>{{$BnP['amount']}}</td>
                                        <td>{{date('Y-m-d', strtotime($BnP['created_at']))}}</td>
                                        <td class="text-success">{{$BnP['type']}}</td>
                                    </tr>
                                    @php $bnpamount[]= $BnP->amount @endphp
                                @endif
                            @endforeach
                        @endif
                        <tr>
                            <td colspan="2">Total Number of Orders</td>
                            <td></td>
                            <td>{{array_sum($countcompleted)}}</td>
                        </tr>
                        <tr>
                            <td colspan="2">Total Orders Payout</td>
                            <td></td>
                            @php $BnPtotal = (isset($bnpamount)? array_sum($bnpamount): 0);
                                  $completedtotal =(isset($totalcompleted) ? array_sum($totalcompleted) :0 ) ;
                             @endphp

                            <td>{{$completedtotal+$BnPtotal}}</td>
                        </tr>
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
@endsection
