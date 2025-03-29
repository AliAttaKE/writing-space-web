<div class="container">

    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <ul class="breadcrumb breadcrumb-style ">
                        <li class="breadcrumb-item">
                            <h4 class="page-title"> Role, Group and Level Summary</h4>
                        </li>

                    </ul>
                </div>


            </div>
            <div class="card">


                <div class="body table-responsive">
                    <table class="table" id="myTable">
                        <thead>
                        <tr>
                            <th class="col-lg-2">#</th>
                            <th class="col-lg-4">Date Assigned</th>
                            <th class="col-lg-3">Role</th>
                            <th class="col-lg-3">Package/Level	</th>
                            <th class="col-lg-3">Teams	</th>


                        </tr>
                        </thead>
                        <tbody>

                        <?php
                        $count=1
                        ?>
                        @foreach($data['roles'] as $row)
                            <tr>
                                <th scope="row">{{$count++}}</th>
                                <td>{{date('d-M-Y h.i.A', strtotime($row['created_at']))}}</td>
                                <td> {{$row['role']['erp_work_flow_role']}}</td>
                                <td> {{$row['level']['erp_commission_level']}}</td>

                                @foreach($data['teams'] as $rows)
                                    <td> {{$rows['erp_team_name']}} </td>

                                @endforeach


                            </tr>
                        @endforeach
                        <?php
                        $count++
                        ?>

                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>
