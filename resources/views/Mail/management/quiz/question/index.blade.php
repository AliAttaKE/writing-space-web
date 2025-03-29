@extends('management/layouts/master')
@section('title')
    Quiz -
@endsection
@section('content')

    <div class="container">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row ">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
            @if($data != null)
                                {
                                <h4 class="page-title">{{$data[0]['Quizes']['erp_quiz_name']}}</h4>
                                }
                                    @endif
                            </li>
                        </ul>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 mt">
                        <a href="{{url()->previous()}}">
                            <button type="button" class="btn btn-primary float-right mt-3"> Back
                            </button>
                        </a>
                    </div>
                </div>
                @include('management.layouts.error')
                <div class="card">
                    <div class="header">
                        <!-- #START# Modal Form Example -->
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <button type="button" class="btn btn-primary " data-toggle="modal"
                                    data-target="#exampleModal"> Create question
                            </button>
                            @include('management/quiz/question/addmodal')
                        </div>

                    </div>
                    <div class="body table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Quiz Type</th>
                                <th>Quiz Question</th>
                                <th>Status</th>
                                <th>Action</th>
                                {{--                                <th>Actions</th>--}}
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $count=1
                            ?>
                            @foreach($data as $row)

                                <tr>
                                    <th scope="row">{{$count++}}</th>
                                    <td>{{ $row->erp_quiz_type == 'check_boxes' ? 'Check Box' : ($row->erp_quiz_type == 'file_upload' ? 'File' : 'Comment') }}</td>
                                    <td>{{$row->erp_question_text}}</td>
{{--                                    <td> @foreach(json_decode($row['$erp_question_text']) as $erp_question_text)--}}
{{--                                        <input type="hidden" name="erp_question_text[]" value="{{$erp_question_text}}">--}}
{{--                                    @endforeach</td>--}}
                                    <td><label class="badge badge-{{($row->erp_status == "1" ) ? 'info ' : 'danger'}}" data-toggle="modal" data-target="#active_inactive">{{($row->erp_status == "1" ) ? 'Enable ' : 'Disable'}}</label></td>
                                    <td>

                                        {{--                                            onclick="custom_ajax('#edit','.result',event);"--}}
                                        <button type="button" class="btn bg-blue btn-circle waves-effect waves-circle waves-float" data-toggle="modal" data-target="#exampleModal1{{$row->id}}">
                                            <i class="material-icons">edit</i>
                                        </button>
                                        @include('management/quiz/question/editmodal')
                                        {{--                                                <input type="hidden"  value="{{route('question.show',$row->id)}}" >--}}
                                        <button type="submit" class="btn bg-red btn-circle waves-effect waves-circle waves-float" data-toggle="modal" data-target="#exampleModalCenter1{{$row->id}}">
                                            <i class="material-icons"> delete  </i>
                                        </button>

                                        {{--                                        <button type="button" class="deletemodal btn bg-red btn-circle waves-effect waves-circle waves-float" data-toggle="" data-target="">--}}
                                        {{--                                            <i class="material-icons"> delete  </i>--}}
                                        {{--                                            <input type="hidden" id="deleteurl"  value="{{route('question.destroy',$row->id)}}" name="deleteurl" class="deleteurl">--}}
                                        {{--                                        </button>--}}


                         @if ($row->erp_status == '0')

                            <div class="modal fade" id="exampleModalCenter1{{$row->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenteTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalCenterTitle">Delete
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Are you sure want to proceed this action?
                                                    </div>
                                                    <div class="modal-footer">

                                                        <button type="" class="btn btn-danger waves-effect" data-dismiss="modal">Close</button>

                                                        <form id="delete" action="{{route('question.destroy',$row->id)}}" method="post">
                                                            @csrf
                                                            @method('DELETE')

                                                            <button type="submit" class="btn btn-info waves-effect">Delete</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        @else
                                            <div class="modal fade" id="exampleModalCenter1{{$row->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenteTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content bg-danger">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title text-white font-20" id="exampleModalCenterTitle" >Alert
                                                                <i class="fas fa-exclamation-triangle"></i></h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                <span aria-hidden="true" class="text-white">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body text-white">
                                                            Only Disabled Question will be deleted
                                                        </div>
                                                        <div class="modal-footer">

                                                            <button type="submit" class="btn btn-danger waves-effect"
                                                                    data-dismiss="modal">Close</button>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                            @endforeach
                                    </td>
                                </tr>
                                <?php
                                $count++;
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--    <script>--}}
    {{--        $(document).ready(function() {--}}
    {{--        var maxField = 10; //Input fields increment limitation--}}
    {{--        var addButton = $('.add_button'); //Add button selector--}}
    {{--        var wrapper = $('.ajeeb2'); //Input field wrapper--}}
    {{--        var fieldHTML = jQuery('.multinone .multiple_branches');--}}
    {{--        var fieldHTML2 = '<a href="javascript:void(0);" class="remove_button btn btn-dark mx-1">Cancel</a>';--}}
    {{--        var x = 1; //Initial field counter is 1--}}

    {{--        //Once add button is clicked--}}
    {{--        $(addButton).click(function(){--}}
    {{--            //Check maximum number of input fields--}}
    {{--            if(x < maxField){--}}
    {{--                x++; //Increment field counter--}}
    {{--                // $(wrapper).append(fieldHTML); //Add field html--}}
    {{--                $(wrapper).append($(fieldHTML).clone());--}}
    {{--            }--}}
    {{--        });--}}
    {{--        //Once remove button is clicked--}}
    {{--        $(wrapper).on('click', '.remove_button', function(e){--}}
    {{--            e.preventDefault();--}}
    {{--            $(this).parents('.multiple_branches' , ).remove(); //Remove field html--}}
    {{--            x--; //Decrement field counter--}}
    {{--        });--}}
    {{--        });--}}

    {{--    </script>--}}

@endsection
