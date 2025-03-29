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
                                <h4 class="page-title"> Accounting Summary</h4>
                            </li>

                        </ul>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <button type="button" class="btn btn-primary float-right mt-3"> Back
                        </button>
                    </div>
                </div>
                <form action="{{url('admin-account-search'.'/'.$data['user_id'])}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-4">
                            <label for="month"></label>
                            <select class="d-block" id="month" name="month">
                                <option value="01">January</option>
                                <option value="02">February</option>
                                <option value="03">March</option>
                                <option value="04">April</option>
                                <option value="05">May</option>
                                <option value="06">June</option>
                                <option value="07">July</option>
                                <option value="08">August</option>
                                <option value="09">September</option>
                                <option value="10">October</option>
                                <option value="11">November</option>
                                <option value="12">December</option>
                            </select>
                        </div>
                        <div class="col-4">
                            <label for="year"></label>
                            <select class="d-block" id="year" name="year">
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
                                <option value="2023">2023</option>
                                <option value="2024">2024</option>
                                <option value="2025">2025</option>
                            </select>
                        </div>

                        <div class="col-4">
                            <input type="submit" value="view" class="btn btn-primary mt-4">
                        </div>
                    </div>
                </form>
                {{-- *************************** In progress Order ************************ --}}
                <div class="card my-4">
                    <div class="header">
                        <h2 class="text-center">
                            <strong>In-Progress Orders Payout</strong></h2>
                    </div>
                    <div class="body table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Role</th>
                                <th>Total Orders</th>
                                <th>Payout</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if($data['pending'] != null)
                                @foreach($data['pending'] as $key=> $pendingpay)
                                    @php unset($pendingorderbyrole,$countpending) @endphp
                                    @foreach($pendingpay as $rolewise)
                                        @php
                                            $month = $rolewise['date'];
                                            $pendingorderbyrole[] = $rolewise['amount'];
                                            $countpending = count($pendingpay);
                                            $totalpending[]=$rolewise['amount'];

                                        @endphp
                                    @endforeach
                                    <tr>
                                        <td>{{$key}}</td>
                                        <td>{{$countpending}}</td>
                                        <td>{{array_sum($pendingorderbyrole)}}</td>
                                    </tr>
                                @endforeach
                                <tr>
                                    <td colspan="2"><a href="{{url('account-detail'.'/'.$data['user_id'].'/'.base64_encode($month))}}"><strong>{{(isset($month)) ? 'More Accounting Details for '.date("F Y", strtotime($month)) : ''}}</strong></a>
                                    </td>
                                    <td>{{array_sum($totalpending)}}</td>
                                </tr>
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
                {{-- *************************** Completed but In progress Order ************************ --}}
                <div class="card my-4">
                    <div class="header">
                        <h2 class="text-center">
                            <strong>Completed But (In-Progress) Orders Payout</strong></h2>
                    </div>
                    <div class="body table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Role</th>
                                <th>Total Orders</th>
                                <th>Payout</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if($data['process'] != null)
                                @foreach($data['process'] as $key=> $processpay)
                                    @php unset($processorderbyrole,$countprocess) @endphp
                                    @foreach($processpay as $processrolewise)
                                        @php
                                            $pmonth = $processrolewise['date'];
                                            $processorderbyrole[] = $processrolewise['amount'];
                                            $countprocess = count($processpay);
                                            $totalprocess[]=$processrolewise['amount'];

                                        @endphp
                                    @endforeach
                                    <tr>
                                        <td>{{$key}}</td>
                                        <td>{{$countprocess}}</td>
                                        <td>{{array_sum($processorderbyrole)}}</td>
                                    </tr>
                                @endforeach
                                <tr>

                                    <td colspan="2"><a
                                                href="{{url('account-detail'.'/'.$data['user_id'].'/'.base64_encode($pmonth))}}"><strong>{{(isset($pmonth)) ? 'More Accounting Details for '.date("F Y", strtotime($pmonth)) : ''}}</strong></a>
                                    </td>
                                    <td>{{array_sum($totalprocess)}}</td>
                                </tr>
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
                {{-- *************************** Completed Order ************************ --}}
                <div class="card my-4">
                    <div class="header">
                        <h2 class="text-center">
                            <strong>Completed Orders Payout</strong></h2>
                    </div>
                    <div class="body table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Role</th>
                                <th>Total Orders</th>
                                <th>Payout</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if($data['completed'] != null)
                                @foreach($data['completed'] as $key=> $compay)
                                    @php unset($comorderbyrole,$countcom) @endphp
                                    @if(isset($compay['normal']))
                                        @foreach($compay['normal'] as $comrolewise)
                                            @php
                                                $cmonth = $comrolewise['date'];
                                                $comorderbyrole[] = $comrolewise['amount'];
                                                $countcom = count($compay);
                                                $totalcom[]=$comrolewise['amount'];
                                            @endphp
                                        @endforeach
                                    @endif
                                    @if(isset($compay['refunded']))
                                        @foreach($compay['refunded'] as $ref)
                                            @php
                                                $refunded[] = $ref['amount'];
                                                $refcount = count($compay['refunded']);
                                            @endphp
                                        @endforeach
                                    @endif
                                    <tr>
                                        <td>{{$key}}</td>
                                        <td>{{isset($countcom)? $countcom : 0}}</td>
                                        <td>{{isset($comorderbyrole) ? array_sum($comorderbyrole) :0}}</td>
                                    </tr>
                                @endforeach
                            @endif
                            @if($data['bounaspenalty'] != null)
                                @foreach($data['bounaspenalty'] as $BnP)
                                    @if($BnP['type']=='penalty')
                                        @php $bnpamount[]= -$BnP->amount @endphp
                                    @else
                                        @php $bnpamount[]= $BnP->amount @endphp
                                    @endif
                                @endforeach
                            @endif
                            <tr>
                                <td>Refunded</td>
                                <td>{{isset($refcount) ? $refcount : 0}}</td>
                                <td>{{isset($refunded) ? array_sum($refunded) : 0}}</td>
                            </tr>
                            <tr>
                                <td>Bonus & Penalty</td>
                                @php $bonuspenalty = isset($bnpamount) ? array_sum($bnpamount) : '0';
                        $ordertotal = isset($totalcom) ? array_sum($totalcom) : '0';
                                @endphp
                                <td>{{isset($data['bounaspenalty']) ? count($data['bounaspenalty']) : '0'}}</td>
                                <td>{{isset($bonuspenalty) ? ($bonuspenalty) : '0'}}</td>
                            </tr>
                            <tr>
{{--                                <td colspan="2"><a--}}
{{--                                            href="{{url('account-detail'.'/'.$data['user_id'].'/'.base64_encode($cmonth))}}"><strong>{{(isset($cmonth)) ? 'More Accounting Details for '.date("F Y", strtotime($cmonth)) : ''}}</strong></a>--}}
{{--                                </td>--}}
                                <td>{{$ordertotal + $bonuspenalty}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
