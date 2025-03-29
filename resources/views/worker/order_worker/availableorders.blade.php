{{--@extends('worker/layouts/master')--}}
{{--@section('title')--}}
{{--    Available orders--}}
{{--@endsection--}}
{{--@section('content')--}}


{{--    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-12">--}}

{{--        <div class="card my-4">--}}
{{--            <div class="header">--}}
{{--                <h2 class="text-center">--}}
{{--                    <strong>        Available orders--}}
{{--                    </strong>--}}
{{--                </h2>--}}
{{--            </div>--}}
{{--            <!-- #START# Modal Form Example -->--}}
{{--            <div class="body table-responsive">--}}
{{--                <table class="table" id="myTable">--}}
{{--                    <thead>--}}

{{--                    <th class="ml-2 ">--}}
{{--                        Sno--}}
{{--                    </th>--}}

{{--                    <th>OrderNo</th>--}}
{{--                    <th>Subject</th>--}}
{{--                    <th>P.type</th>--}}
{{--                    <th>p.format</th>--}}
{{--                    <th>Language</th>--}}
{{--                    <th>Level</th>--}}
{{--                    <th>Pages</th>--}}
{{--                    <th>Sources</th>--}}

{{--                    </thead>--}}
{{--                    <tbody>--}}
{{--                    <tr>--}}
{{--                        <?php--}}
{{--                        $count = 1--}}
{{--                        ?>--}}

{{--                            @if($data['noorders']) != "Null")--}}
{{--                                @foreach($data['noorders'] as $bids)--}}
{{--                                    @foreach($data['usersallow'] as $key=> $value)--}}
{{--                                        @if($bids->id == $key)--}}
{{--                                            @if(in_array(Auth::user()->id,$value))--}}

{{--                                                <td>{{$count++}}</td></td>--}}
{{--                                                <td>{{$bids->erp_order_topic}}</td>--}}
{{--                                                <td>{{$bids->erp_order_topic}}</td>--}}
{{--                                                <td>{{$bids->erp_paper_type}}</td>--}}
{{--                                                <td>{{$bids->erp_paper_format}}</td>--}}
{{--                                                <td>{{$bids->erp_language_name}}</td>--}}
{{--                                                <td>{{$bids->erp_academic_name}}</td>--}}
{{--                                                <td>{{$bids->erp_number_Pages}}</td>--}}
{{--                                                <td>--}}
{{--                                                    <a href="{{route('user-dashboard.show',$bids->id)}}">--}}
{{--                                                        <button  class="btn btn-primary"> Read more</button>--}}
{{--                                                    </a>--}}
{{--                                                </td>--}}
{{--                    </tr>--}}

{{--                    @endif--}}
{{--                    @endif--}}
{{--                    @endforeach--}}

{{--                    @endforeach--}}
{{--                    <?php--}}
{{--                    $count++;--}}
{{--                    ?>--}}
{{--                    @else--}}
{{--                        <h1>No Orders Available</h1>--}}
{{--                    @endif--}}





{{--                    </tbody>--}}
{{--                </table>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--    </div>--}}


{{--@endsection--}}
