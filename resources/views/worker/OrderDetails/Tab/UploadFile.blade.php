<div role="tabpanel" class="tab-pane fade" id="Upload">
    <div class="col-lg-12 grid-margin stretch-card m-0">
        <div class="card">
            <div class="card-body">


                <div class="row">
                    <div class="container mt-3 " style="width:1000px;">
                        <h3 class="text-center mb-3">
                            Uploaded By Admin <i class="fas fa-user-shield"></i>
                        </h3>
                        <div class="" style="box-shadow: 0 0 1rem rgb(0 0 0 / 15%);padding:20px;border-radius:5px;">


                            @foreach($data['submission'] as $row)

                                @if ($row['user']['user_type'] == 'admin')
                                    <div>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <p><strong> Title:</strong></p>
                                            </div>
                                            <div class="col-md-7">
                                                <p><strong>  @if (isset($row->title))

                                                            {{$row->title}}
                                                        @else
                                                            {{'No Title  Found'}}
                                                        @endif
                                                    </strong>
                                                </p>
                                            </div>
                                            <div class="col-md-3">
                                                <p><strong>
                                                            Date:
                                                            {{($row->created_at)}}

                                                    </strong>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-2">
                                                <p><strong> Description:</strong></p>
                                            </div>
                                            <div class="col-md-8">
                                                <p><strong>
                                                        @if (isset($row->description))

                                                            {{$row->description}}
                                                        @else
                                                            {{'No Description Found'}}
                                                        @endif
                                                    </strong>
                                                </p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-2">
                                                <p><strong> Main file:</strong></p>
                                            </div>
                                            <div class="col-md-8">
                                                <p><strong>
                                                        @if(isset($row->main_file))

                                                            <a  class="btn btn-default btn-circle waves-effect waves-circle waves-float mx-2" href="{{asset('image/Orderdetails'.'/'.$row->main_file)}}"
                                                                download style="position: relative;
                                                                        line-height: 1.2;
                                                                        transform: rotate(
                                                                    180deg);">
                                                                <i class="material-icons">publish</i>

                                                            </a>


                                                        @else {{"No Main File Found "}}
                                                        @endif
                                                    </strong>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-2">
                                                <p><strong> Source Files:</strong></p>
                                            </div>
                                            <div class="col-md-8">
                                                <p><strong>
                                                        @if(isset($row->sources))
                                                            @foreach(json_decode($row->sources, true) as $var)

                                                                <a  class="btn btn-default btn-circle waves-effect waves-circle waves-float mx-2"  href="{{asset('image/Orderdetails'.'/'.$var)}}"
                                                                    download style="position: relative;
                                                                        line-height: 1.2;
                                                                        transform: rotate(
                                                                    180deg);">
                                                                    <i class="material-icons">publish</i>

                                                                </a>


                                                            @endforeach

                                                        @else {{"NO Source File Found "}}
                                                        @endif
                                                    </strong>
                                                </p>
                                            </div>
                                        </div>
                                        <hr>
                                    </div>
                                @endif
                            @endforeach

                        </div>

                        {{--                ********   User section starting    ***********8--}}


                        <h3 class="text-center mb-3 mt-5"> Submissions By Team member <i class="fa fa-user" aria-hidden="true"></i>
                        </h3>
                        <div class="" style="box-shadow: 0 0 1rem rgb(0 0 0 / 15%);padding:20px;border-radius:5px;">
                            @foreach($data['submission'] as $sub)
                                @if ($sub['user']['user_type'] == 'worker')
                                    <div>
                                        <div class="row">
                                            <div class="col-2">
                                                <p><strong> Package Name:</strong></p>
                                            </div>
                                            <div class="col-md-6">
                                                <p><strong>  {{$sub['commission']['package_name']}}</strong></p>
                                            </div>
                                            <div class="col-md-4">
                                                <p><strong> Submitted by: {{$sub['user']['name']}}</strong></p>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-2">
                                                <p><strong> Title :</strong></p>
                                            </div>
                                            <div class="col-md-6">
                                                <p><strong>
                                                        @if (isset($sub->title))
                                                            {{$sub->title}}
                                                        @else
                                                            {{'No Title  Found'}}
                                                        @endif
                                                    </strong>
                                                </p>
                                            </div>
                                            <div class="col-md-4">
                                                <p><strong>
                                                            Date:
                                                            {{($row->created_at)}}
                                                    </strong>
                                                </p>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-2">
                                                <p><strong> Sec Title :</strong></p>
                                            </div>
                                            <div class="col-md-8">
                                                <p><strong>   @if (isset($sub->sec_title))
                                                            {{$sub->sec_title}}
                                                        @else
                                                            {{'No Sec Title Found'}}
                                                        @endif
                                                    </strong>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-2">
                                                <p><strong> Keywords :</strong></p>
                                            </div>
                                            <div class="col-md-8">
                                                <p><strong>
                                                        @if(isset($sub->keywords))
                                                            @foreach(json_decode($sub->keywords, true) as $val)
                                                                {{$val}}
                                                            @endforeach;
                                                        @else
                                                            {{'No Keywords Found'}}
                                                        @endif
                                                    </strong>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-2">
                                                <p><strong> Description :</strong></p>
                                            </div>
                                            <div class="col-md-8">
                                                <p><strong>
                                                        @if (isset($sub->description))
                                                            {{$sub->description}}
                                                        @else
                                                            {{'No Description  Found'}}
                                                        @endif
                                                    </strong>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-2">
                                                <p><strong> Cat 1:</strong></p>
                                            </div>
                                            <div class="col-md-8">
                                                <p><strong>
                                                        @if (isset($sub->cat_1))
                                                            {{$sub->cat_1}}
                                                        @else
                                                            {{'No Cat 1 Found'}}
                                                        @endif
                                                    </strong>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-2">
                                                <p><strong> Cat 2:</strong></p>
                                            </div>
                                            <div class="col-md-8">
                                                <p><strong>
                                                        @if (isset($sub->cat_2))
                                                            {{$sub->cat_2}}
                                                        @else
                                                            {{'No Cat 2 Found'}}
                                                        @endif
                                                    </strong>
                                                </p>

                                            </div>
                                        </div>
                                        <div class="row">

                                            <div class="col-2">
                                                <p><strong>Main file</strong></p>
                                            </div>
                                            <div class="col-md-8">
                                                <p><strong>
                                                        @if(isset($row->main_file))

                                                            <a  class="btn btn-default btn-circle waves-effect waves-circle waves-float mx-2" href="{{asset('image/Orderdetails'.'/'.$row->main_file)}}"
                                                                download style="position: relative;
                                                                        line-height: 1.2;
                                                                        transform: rotate(
                                                                    180deg);">
                                                                <i class="material-icons">publish</i>

                                                            </a>


                                                        @else {{"No Main File Found "}}
                                                        @endif
                                                    </strong>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <p><strong>Source Files</strong></p>
                                            </div>
                                            <div class="col-md-8">
                                                <p><strong>
                                                        @if(isset($row->sources))
                                                            @foreach(json_decode($row->sources, true) as $var)

                                                                <a  class="btn btn-default btn-circle waves-effect waves-circle waves-float mx-2"  href="{{asset('image/Orderdetails'.'/'.$var)}}"
                                                                    download style="position: relative;
                                                                        line-height: 1.2;
                                                                        transform: rotate(
                                                                    180deg);">
                                                                    <i class="material-icons">publish</i>

                                                                </a>


                                                            @endforeach

                                                        @else {{"NO Source File Found "}}
                                                        @endif
                                                    </strong>
                                                </p>
                                            </div>
                                        </div>
                                        <hr>
                                    </div>

                                @endif
                            @endforeach






                        </div>
                    </div>

                </div>

            </div>
        </div>

    </div>
</div>
</div>
