@extends('management/layouts/master')
@section('title')
    Manage Files
@endsection
@section('content')


    <div class="container">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title"> Manage Files</h4>
                            </li>

                        </ul>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <button type="button" class="btn btn-primary float-right mt-3"> Back
                        </button>
                    </div>

                </div>

                @include('management.layouts.error')

                @foreach ( $data['files'] as $key => $data)

                <div class="card">
                    <div class="header">
                        <!-- #START# Modal Form Example -->

                        <div class="body table-responsive">
                            <table class="table" >
                                <thead>
                                <div class="row">
                                    <div class="col-md-9" >
                                        <strong><p> Order ID:
                                            {{$key}}</p></strong>
                                    </div>
                                    <div class="col-md-3">

                                        <strong> Topic: </strong>
                                    </div>
                                </div>


                                <div class="admin">
                                <div class="row">
                                    <div class="col-md-9" >
                                        <strong><p> File Uploaded BY Admin </p></strong>
                                    </div>
                                </div>

                                <tr>
                                    <th class="col-lg-3">Filename</th>
                                    <th class="col-lg-3">File Type</th>
                                    <th class="col-lg-3">file size</th>
                                    <th class="col-lg-3">UploadTime</th>
                                    <th class="col-lg-3">Download</th>
                                </tr>



                                        @foreach($data as $row)



                                            @if ($row['user']['user_type'] == 'admin')



                                        <tr>
                                    <td> {{$row->title}}</td>
                                    <td>

                                        <?php    $infoPath = pathinfo(public_path('image/Orderdetails'.'/'.$row->main_file));

                                            $extension = $infoPath['extension'];

                                            ?>

                                        {{$extension}}


                                    </td>
                                    <td>
                                        <?php
                                        $fileSize = File::size(public_path('image/Orderdetails'.'/'.$row->main_file));



                                        ?>

                                            {{$fileSize}} Kb


                                    </td>



                                    <td> {{$row->created_at}}</td>
                                    <td>  @if(isset($row->main_file))


                                            <div class="">
                                                <a  class="btn btn-default btn-circle waves-effect waves-circle waves-float" href="{{asset('image/Orderdetails'.'/'.$row->main_file)}}" download>
                                                    <i class="material-icons">publish</i>
                                                </a>
                                            </div>


                                        @else {{"No Main File Found "}}
                                        @endif</td>
                                   </tr>
                                        @endif
                                    @endforeach





                                </div>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                        <div class="body table-responsive">
                            <table class="table" >
                                <thead>

                                <div class="worker">
                                <div class="row">

                                    <div class="col-md-3">
                                        <strong> File Uploaded BY customers </strong>
                                    </div>
                                </div>


                                <tr>
                                    <th class="col-lg-3"> Name </th>
                                    <th class="col-lg-3">Filename</th>
                                    <th class="col-lg-3">File Type</th>
                                    <th class="col-lg-3">file size</th>
                                    <th class="col-lg-3">UploadTime</th>
                                    <th class="col-lg-3">Download</th>
                                </tr>







                                </thead>
                                <tbody>



                                 @foreach($data as $row)



                                            @if ($row['user']['user_type'] == 'worker')

                                        <tr>
                                            <td> {{$row['user']['name']}} </td>
                                    <td> {{$row->title}}</td>
                                            <td>

                                                <?php    $infoPath = pathinfo(public_path('image/Orderdetails'.'/'.$row->main_file));

                                                $extension = $infoPath['extension'];

                                                ?>

                                                {{$extension}}

                                            </td>
                                            <td>
                                                <?php
                                                $fileSize = File::size(public_path('image/Orderdetails'.'/'.$row->main_file));



                                                ?>

                                                {{$fileSize}} Kb


                                            </td>
                                    <td> {{$row->created_at}}</td>
                                    <td>  @if(isset($row->main_file))



                                            <div>
                                                <a  class="btn btn-default btn-circle waves-effect waves-circle waves-float" href="{{asset('image/Orderdetails'.'/'.$row->main_file)}}" download>
                                                    <i class="material-icons">publish</i>
                                                </a>
                                            </div>


                                        @else {{"No Main File Found "}}
                                        @endif</td>
                                   </tr>
                                        @endif
                                    @endforeach
                        </div>
                        </div>
                                </tbody>
                            </table>

                        </div>


                        </div>
                    </div>

                @endforeach




</div>
            </div>
        </div>








@endsection

