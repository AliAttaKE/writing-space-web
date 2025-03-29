{{-- <div class="row">--}}
{{--    <div class="col-4">--}}
{{--        <label for="month"></label>--}}
{{--        <select class="d-block" id="month" name="month">--}}
{{--            <option value="01">January</option>--}}
{{--            <option value="02">February</option>--}}
{{--            <option value="03">March</option>--}}
{{--            <option value="04">April</option>--}}
{{--            <option value="05">May</option>--}}
{{--            <option value="06">June</option>--}}
{{--            <option value="07">July</option>--}}
{{--            <option value="08">August</option>--}}
{{--            <option value="09">September</option>--}}
{{--            <option value="10">October</option>--}}
{{--            <option value="11">November</option>--}}
{{--            <option value="12">December</option>--}}
{{--        </select>--}}
{{--    </div>--}}
{{--    <div class="col-4">--}}
{{--        <label for="year"></label>--}}
{{--        <select class="d-block" id="year" name="year">--}}
{{--            <option value="2021">2021</option>--}}
{{--            <option value="2022">2022</option>--}}
{{--            <option value="2023">2023</option>--}}
{{--            <option value="2024">2024</option>--}}
{{--            <option value="2025">2025</option>--}}
{{--        </select>--}}
{{--    </div>--}}

{{--    <div class="col-4">--}}
{{--        <input type="submit" value="view" class="btn btn-primary mt-4">--}}


{{--        <li class="nav-item">--}}
{{--            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">PROFILE</a>--}}
{{--        </li>--}}
{{--    </div>--}}
{{--</div>--}}
<div class="card">


    <ul class="nav nav-tabs" id="myTab" role="tablist" style="padding: 20px 30px";>

        <li class="nav-item">
            <a class="nav-link active" id="bid-tab" data-toggle="tab" href="#bid" role="tab" aria-controls="bid" aria-selected="true">Bids	</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="claim-tab" data-toggle="tab" href="#claim" role="tab" aria-controls="claim" aria-selected="false">Claims</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="Decline-tab" data-toggle="tab" href="#Decline	" role="tab" aria-controls="Decline	" aria-selected="false">Decline	</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="Hidden-tab" data-toggle="tab" href="#Hidden	" role="tab" aria-controls="Hidden	" aria-selected="false">Hidden	</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="completed-tab" data-toggle="tab" href="#completed	" role="tab" aria-controls="completed" aria-selected="false">Orders Completed		</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="Refunded-tab" data-toggle="tab" href="#Refunded" role="tab" aria-controls="Refunded" aria-selected="false">Orders Refunded		</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="Cancelled-tab" data-toggle="tab" href="#Cancelled" role="tab" aria-controls="Cancelled" aria-selected="false">Orders Cancelled		</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="Late-tab" data-toggle="tab" href="#Late" role="tab" aria-controls="Late" aria-selected="false">Late  Cancelled</a>
        </li>

    </ul>
    <div class="tab-content" id="myTabContent" style="padding: 20px 30px";>

        <div class="tab-pane fade show active" id="bid" role="tabpanel" aria-labelledby="bid-tab">
            <div class="body table-responsive">
                @if($data['ss'] != null)
                <table class="table">
                    <thead>
                    <tr>
                        <th class="col-lg-4">order id	</th>
                        <th class="col-lg-4">Assign Date	</th>
                    </tr>
                    </thead>
                    <tbody>
                   @foreach($data['ss'] as $row)
                    @if($row->erp_type == 'bid')
                    <tr>
                        <td> {{$row->erp_order_id}}</td>
                         <td>{{date('d-M-Y h.i.A', strtotime($row['created_at']))}}</td>
                    </tr>
                    @endif
               @endforeach()
                </table>
                    </tbody>
                @else
                    <tr>

                        <label><strong> No record found</strong> </label>
                    </tr>
                @endif

            </div>
        </div>
        <div class="tab-pane fade" id="claim" role="tabpanel" aria-labelledby="claim-tab">


            <div class="body table-responsive">
                @if($data['ss'] != null)
                <table class="table" >
                    <thead>
                    <tr>
                        <th class="col-lg-4">order id	</th>
                        <th class="col-lg-4">Date and Time	</th>


                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data['ss'] as $row)
                        @if($row->erp_type == 'claim')
                            <tr>


                                <td> {{$row->erp_order_id}}</td>
                                <td>{{date('d-M-Y h.i.A', strtotime($row['created_at']))}}</td>


                            </tr>
                        @endif
                    @endforeach()

                    </tbody>
                </table>
                @else
                    <tr>

                        <label><strong> No record found</strong> </label>
                    </tr>
                @endif
            </div>
                    </div>

          {{--decline section start--}}
        <div class="tab-pane fade" id="Decline" role="tabpanel" aria-labelledby="Decline-tab">
            <div class="body table-responsive">
                @if($data['return'] != null)
                    <table class="table" >
                        <thead>
                        <tr>
                            <th class="col-lg-4">order id	</th>
                            <th class="col-lg-4">Date and Time	</th>


                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data['return'] as $row)
                                <tr>
                                    <td> {{$row->order_id}}</td>
                                    <td>{{date('d-M-Y h.i.A', strtotime($row['created_at']))}}</td>
                                </tr>
                        @endforeach()

                        </tbody>
                    </table>
                @else
                    <tr>

                        <label><strong> No record found</strong> </label>
                    </tr>
                @endif
            </div>
        </div>

        {{--hidden section start--}}

        <div class="tab-pane fade" id="Hidden" role="tabpanel" aria-labelledby="Hidden-tab">

            Hidden
            {{--            <div class="body table-responsive">--}}
            {{--                @if($data['ss'] != null)--}}
            {{--                    <table class="table" id="myTable2">--}}
            {{--                        <thead>--}}
            {{--                        <tr>--}}
            {{--                            <th class="col-lg-4">order id	</th>--}}
            {{--                            <th class="col-lg-4">Date and Time	</th>--}}


            {{--                        </tr>--}}
            {{--                        </thead>--}}
            {{--                        <tbody>--}}
            {{--                        @foreach($data['ss'] as $row)--}}
            {{--                            @if($row->erp_type == 'claim')--}}
            {{--                                <tr>--}}


            {{--                                    <td> {{$row->erp_order_id}}</td>--}}
            {{--                                    <td>{{date('d-M-Y h.i.A', strtotime($row['created_at']))}}</td>--}}


            {{--                                </tr>--}}
            {{--                            @endif--}}
            {{--                        @endforeach()--}}

            {{--                        </tbody>--}}
            {{--                    </table>--}}
            {{--                @else--}}
            {{--                    <tr>--}}

            {{--                        <label><strong> No record found</strong> </label>--}}
            {{--                    </tr>--}}
            {{--                @endif--}}
            {{--            </div>--}}
        </div>

        {{--completed section start--}}
        <div class="tab-pane fade" id="completed" role="tabpanel" aria-labelledby="completed-tab">


                        <div class="body table-responsive">
                            @if($data['completed'] != null)
                                <table class="table" id="myTable2">
                                    <thead>
                                    <tr>
                                        <th class="col-lg-3">order id	</th>
                                        <th class="col-lg-3">Date and Time	</th>


                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data['completed'] as $row)

                                            <tr>


                                                <td> {{$row->erp_order_id}}</td>
                                                <td>{{date('d-M-Y h.i.A', strtotime($row['created_at']))}}</td>


                                            </tr>
                                    @endforeach()

                                    </tbody>
                                </table>
                            @else
                                <tr>

                                    <label><strong> No record found</strong> </label>
                                </tr>
                            @endif
                        </div>
        </div>


        {{--Order Refunded  section start--}}
        <div class="tab-pane fade" id="Refunded" role="tabpanel" aria-labelledby="Refunded-tab">

            Refunded
            {{--            <div class="body table-responsive">--}}
            {{--                @if($data['ss'] != null)--}}
            {{--                    <table class="table" id="myTable2">--}}
            {{--                        <thead>--}}
            {{--                        <tr>--}}
            {{--                            <th class="col-lg-4">order id	</th>--}}
            {{--                            <th class="col-lg-4">Date and Time	</th>--}}


            {{--                        </tr>--}}
            {{--                        </thead>--}}
            {{--                        <tbody>--}}
            {{--                        @foreach($data['ss'] as $row)--}}
            {{--                            @if($row->erp_type == 'claim')--}}
            {{--                                <tr>--}}


            {{--                                    <td> {{$row->erp_order_id}}</td>--}}
            {{--                                    <td>{{date('d-M-Y h.i.A', strtotime($row['created_at']))}}</td>--}}


            {{--                                </tr>--}}
            {{--                            @endif--}}
            {{--                        @endforeach()--}}

            {{--                        </tbody>--}}
            {{--                    </table>--}}
            {{--                @else--}}
            {{--                    <tr>--}}

            {{--                        <label><strong> No record found</strong> </label>--}}
            {{--                    </tr>--}}
            {{--                @endif--}}
            {{--            </div>--}}
        </div>

        {{--Order cancelled  section start--}}
        <div class="tab-pane fade" id="Cancelled" role="tabpanel" aria-labelledby="Cancelled-tab">

            cancel
            {{--            <div class="body table-responsive">--}}
            {{--                @if($data['ss'] != null)--}}
            {{--                    <table class="table" id="myTable2">--}}
            {{--                        <thead>--}}
            {{--                        <tr>--}}
            {{--                            <th class="col-lg-4">order id	</th>--}}
            {{--                            <th class="col-lg-4">Date and Time	</th>--}}


            {{--                        </tr>--}}
            {{--                        </thead>--}}
            {{--                        <tbody>--}}
            {{--                        @foreach($data['ss'] as $row)--}}
            {{--                            @if($row->erp_type == 'claim')--}}
            {{--                                <tr>--}}


            {{--                                    <td> {{$row->erp_order_id}}</td>--}}
            {{--                                    <td>{{date('d-M-Y h.i.A', strtotime($row['created_at']))}}</td>--}}


            {{--                                </tr>--}}
            {{--                            @endif--}}
            {{--                        @endforeach()--}}

            {{--                        </tbody>--}}
            {{--                    </table>--}}
            {{--                @else--}}
            {{--                    <tr>--}}

            {{--                        <label><strong> No record found</strong> </label>--}}
            {{--                    </tr>--}}
            {{--                @endif--}}
            {{--            </div>--}}
        </div>


        {{--Late  cancelled  section start--}}
        <div class="tab-pane fade" id="Late" role="tabpanel" aria-labelledby="Late-tab">

                        <div class="body table-responsive">
                            @if($data['late'] != null)
                                <table class="table" id="myTable2">
                                    <thead>
                                    <tr>
                                        <th class="col-lg-4">order id	</th>
                                        <th class="col-lg-4">Date and Time	</th>


                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data['late'] as $row)

                                            <tr>


                                                <td> {{$row->erp_order_id}}</td>
                                                <td>{{date('d-M-Y h.i.A', strtotime($row['created_at']))}}</td>


                                            </tr>

                                    @endforeach()

                                    </tbody>
                                </table>
                            @else
                                <tr>

                                    <label><strong> No record found</strong> </label>
                                </tr>
                            @endif
                        </div>
        </div>


    </div>
</div>


<div class="card">


    <ul class="nav nav-tabs" id="myTab" role="tablist" style="padding: 20px 30px";>

        <li class="nav-item">
            <a class="nav-link active" id="Deadline-tab" data-toggle="tab" href="#Deadline " role="tab" aria-controls="Deadline " aria-selected="true">Deadline Extensions	 	</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="Revisions-tab" data-toggle="tab" href="#Revisions" role="tab" aria-controls="Revisions " aria-selected="false">Revisions by Team	 </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="Customers-tab" data-toggle="tab" href="#Customers" role="tab" aria-controls="Customers" aria-selected="false">Revision by Customers		</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="Bonus-tab" data-toggle="tab" href="#Bonus" role="tab" aria-controls="Bonus	" aria-selected="false">Bonus</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="Penalty-tab" data-toggle="tab" href="#Penalty" role="tab" aria-controls="Penalty" aria-selected="false">Penalty </a>
        </li>



    </ul>
    <div class="tab-content" id="myTabContent" style="padding: 20px 30px";>

        <div class="tab-pane fade show active" id="Deadline" role="tabpanel" aria-labelledby="Deadline-tab">
            <div class="body table-responsive">
                @if($data['deadline'] != null)
                    <table class="table" id="myTable2">
                        <thead>
                        <tr>
                            <th class="col-lg-4">order id	</th>
                            <th class="col-lg-4">Extension Type	</th>
                            <th class="col-lg-4">Date and Time	</th>


                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data['deadline'] as $row)
                            @if($row->erp_type == 'claim')
                                <tr>


                                    <td> {{$row->erp_order_id}}</td>
                                    <td> {{$row->exttype}}</td>
                                    <td>{{date('d-M-Y h.i.A', strtotime($row['created_at']))}}</td>


                                </tr>
                            @endif
                        @endforeach()

                        </tbody>
                    </table>
                @else
                    <tr>

                        <label><strong> No record found</strong> </label>
                    </tr>
                @endif
            </div>

        </div>
        <div class="tab-pane fade" id="Revisions" role="tabpanel" aria-labelledby="Revisions-tab">


            <div class="body table-responsive">
                @if($data['revision'] != null)
                    <table class="table" id="myTable2">
                        <thead>
                        <tr>
                            <th class="col-lg-4">order id	</th>

                            <th class="col-lg-4">Date and Time	</th>


                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data['revision'] as $row)
                            <tr>
                                    <td> {{$row->erp_order_id}}</td>
                                    <td>{{date('d-M-Y h.i.A', strtotime($row['updated_at']))}}</td>
                                </tr>
                        @endforeach()
                        </tbody>
                    </table>
                @else
                    <tr>

                        <label><strong> No record found</strong> </label>
                    </tr>
                @endif
            </div>
        </div>

        {{--decline section start--}}
        <div class="tab-pane fade" id="Customers" role="tabpanel" aria-labelledby="Customers-tab">
            Decline

            {{--            <div class="body table-responsive">--}}
            {{--                @if($data['ss'] != null)--}}
            {{--                    <table class="table" id="myTable2">--}}
            {{--                        <thead>--}}
            {{--                        <tr>--}}
            {{--                            <th class="col-lg-4">order id	</th>--}}
            {{--                            <th class="col-lg-4">Date and Time	</th>--}}


            {{--                        </tr>--}}
            {{--                        </thead>--}}
            {{--                        <tbody>--}}
            {{--                        @foreach($data['ss'] as $row)--}}
            {{--                            @if($row->erp_type == 'claim')--}}
            {{--                                <tr>--}}


            {{--                                    <td> {{$row->erp_order_id}}</td>--}}
            {{--                                    <td>{{date('d-M-Y h.i.A', strtotime($row['created_at']))}}</td>--}}


            {{--                                </tr>--}}
            {{--                            @endif--}}
            {{--                        @endforeach()--}}

            {{--                        </tbody>--}}
            {{--                    </table>--}}
            {{--                @else--}}
            {{--                    <tr>--}}

            {{--                        <label><strong> No record found</strong> </label>--}}
            {{--                    </tr>--}}
            {{--                @endif--}}
            {{--            </div>--}}
        </div>

        {{--hidden section start--}}

        <div class="tab-pane fade" id="Bonus" role="tabpanel" aria-labelledby="Bonus-tab">

                        <div class="body table-responsive">
                            @if($data['bonus'] != null)
                                <table class="table" id="myTable2">
                                    <thead>
                                    <tr>
                                        <th>order id </th>
                                        <th>amount </th>
                                        <th>reason </th>
                                        <th>Date and Time</th>


                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data['bonus'] as $row)
                                        @if($row->type == 'bonus')
                                            <tr>
                                                <td > {{$row->order_id}}</td>
                                                <td> {{$row->amount}}</td>
                                                <td>{{$row->reason}}</td>
                                                <td>{{date('d-M-Y h.i.A', strtotime($row['created_at']))}}</td>
                                            </tr>
                                        @endif
                                    @endforeach()

                                    </tbody>
                                </table>
                            @else
                                <tr>

                                    <label><strong> No record found</strong> </label>
                                </tr>
                            @endif
                        </div>
        </div>

        {{--completed section start--}}
        <div class="tab-pane fade" id="Penalty" role="tabpanel" aria-labelledby="Penalty-tab">


                        <div class="body table-responsive">
                            @if($data['bonus'] != null)
                                <table class="table" id="myTable2">
                                    <thead>
                                    <tr>
                                        <th>order id </th>
                                        <th>amount </th>
                                        <th>reason </th>
                                        <th>Date and Time</th>
                                    </tr>

                                    </thead>
                                    <tbody>
                                    @foreach($data['bonus']  as $row)
                                        @if($row->type == 'penalty')
                                            <tr>
                                                <td > {{$row->order_id}}</td>
                                                <td> {{$row->amount}}</td>
                                                <td>{{$row->reason}}</td>
                                                <td>{{date('d-M-Y h.i.A', strtotime($row['created_at']))}}</td>


                                            </tr>
                                        @endif
                                    @endforeach()

                                    </tbody>
                                </table>
                            @else
                                <tr>

                                    <label><strong> No record found</strong> </label>
                                </tr>
                            @endif
                        </div>
        </div>




    </div>
</div>


