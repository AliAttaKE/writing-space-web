{{--@dd($datas)--}}
<div class="modal fade" id="exampleModal{{$datas->id}}" tabindex="-1" role="dialog" aria-labelledby="formModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="create_questions">
                <div class="modal-header">
                    <h5 class="modal-title" id="formModal">Edit Level</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
            </div>
            <div class="team_record">
                <div class="modal-body">
                    <form action="{{route('teams.update',$datas->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                    <label for="">Status</label>
                    <div class="row">
                        <div class="col-sm-3 col-lg-3">
                            <div class="form-check form-check-radio">
                                <label>
                                    <input {{$datas->erp_status == '1' ? 'checked' : ''}} name="erp_status" class="erp_status" type="radio"  value="1" />
                                    <span>Enable</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-3 col-lg-3">
                            <div class="form-check form-check-radio">
                                <label>
                                    <input {{$datas->erp_status == '0' ? 'checked' : ''}} name="erp_status" class="erp_status" type="radio" value="0" />
                                    <span>Disable</span>
                                </label>
                            </div>
                        </div>
                    </div>


                    <label for="email_address1">Team Name</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input value=" {{$datas->erp_team_name}}" type="text" id="erp_team_name"
                                   class="form-control" name="erp_team_name"
                                   placeholder="Type Team Name Here">
                        </div>
                    </div>

                        <div class="team_main ">
                            @if($erp_package = json_decode($datas->erp_package,true))
                                @foreach($erp_package as $question_text)
                            <div class="row clone_data">
                                <div class=" col-lg-10">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <select class="form-control select2" id="erp_package" name="erp_package[]"
                                                    data-placeholder="Select">

                                                @foreach($data['commission'] as $commission )
                                                          <?php
                                                            if($question_text == $commission->id){
                                                                $selected = 'selected';
                                                            }else{
                                                                $selected = '';
                                                            }
                                                            ?>
                                                    <option {{$selected}} value="{{$commission->id}}"> {{$commission->package_name}}</option>

                                                @endforeach

                                            </select>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-1">
                                    <a class="fas fa-window-close remove_button"></a>
                                </div>
                                <div class="col-lg-1">
                                    <a href="javascript:void(0);" class="add_clone " title="Add field"><i class="fas fa-plus"></i></a>
                                </div>
                            </div>
                                @endforeach
                            @endif
                        </div>

{{--                        --}}
{{--                        <div class="team_mian_edit">--}}
{{--                            <div class="row multiple_team1">--}}
{{--                                <div class=" col-lg-10">--}}
{{--                                    <div class="form-group">--}}
{{--                                        <div class="form-line">--}}
{{--                                            @if($erp_package = json_decode($datas->erp_package,true))--}}
{{--                                                @foreach($erp_package as $question_text)--}}

{{--                                                    <div class="multiple_team ">--}}
{{--                                                        @foreach($data['commission'] as $dat)--}}
{{--                                                        <div class="row">--}}
{{--                                                            <div class="col-lg-11">--}}
{{--                                                                     @if($question_text == $dat->id)--}}
{{--                                                                <label>{{$dat->package_name}} </label>--}}
{{--                                                                <input type="hidden" name="erp_package[]"  value="{{$question_text}}">--}}
{{--                                                                     @endif--}}

{{--                                                            </div>--}}
{{--                                                            <div class="col-lg-1">--}}
{{--                                                                <a class="fas fa-window-close remove_team"></a>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        @endforeach--}}
{{--                                                    </div>--}}

{{--                                                @endforeach--}}
{{--                                            @endif--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                </div>--}}
{{--                                <div class="col-lg-1">--}}
{{--                                    <a href="javascript:void(0);" class="add_team_edit" title="Add field"><i class="fas fa-plus"></i></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}


                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-danger waves-effect" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-info waves-effect">Save Changes</button>
            </div>
            </form>
        </div>
    </div>

</div>

    <script>


        // $(document).ready(function() {
        //
        //     var maxField = 10; //Input fields increment limitation
        //     var addButton = $('.add_team_edit'); //Add button selector
        //     var wrapper = $('.team_mian_edit'); //Input field wrapper
        //     var fieldHTML = jQuery('.team_sub_edit .clone_data_edit');
        //     var fieldHTML2 = '<a href="javascript:void(0);" class="remove_team btn btn-dark mx-1">Cancel</a>';
        //     var x = 1; //Initial field counter is 1
        //
        //     //Once add button is clicked
        //     $(addButton).click(function(){
        //         //Check maximum number of input fields
        //         if(x < maxField){
        //             x++; //Increment field counter
        //             // $(wrapper).append(fieldHTML); //Add field html
        //             $(wrapper).append($(fieldHTML).clone());
        //         }
        //     });
        //     //Once remove button is clicked
        //     $(wrapper).on('click', '.remove_team', function(e){
        //         e.preventDefault();
        //         $(this).parents('.multiple_team1' , ).remove(); //Remove field html
        //         x--; //Decrement field counter
        //     });
        // });

    </script>
