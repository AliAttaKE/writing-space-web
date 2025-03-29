<form action="{{route('teams.store')}}" method="post">
    @csrf
    <div class="academic_level">
        <div class="modal-body">
            <div class="modal-body">
                <label for="email_address1">Status</label>
                <div class="row">
                    <div class="col-sm-3 col-lg-3">
                        <div class="form-check form-check-radio">
                            <label>
                                <input name="erp_status" checked class="erp_status" type="radio" value="1"/>
                                <span>Enable</span>
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-3 col-lg-3">
                        <div class="form-check form-check-radio">
                            <label>
                                <input name="erp_status" class="erp_status" type="radio" value="0"/>
                                <span>Disable</span>
                            </label>
                        </div>
                    </div>
                </div>

                <label for="email_address1">Team Name</label>
                <div class="form-group">
                    <div class="form-line">
                        <input type="text" id="erp_team_name"
                               class="form-control" name="erp_team_name"
                               placeholder="Type Team Name Here">
                    </div>
                </div>
                <label for="email_address1">Package Name</label>
                <div class="form-group">
                    <div class="form-line">
                        <select class="form-control select2" id="erp_package" name="erp_package[]"
                                data-placeholder="Select">
                            @foreach($data['commission'] as $commission )
                                <option value="{{$commission->id}}"> {{$commission->package_name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>


                <div class="team_main">
                    <div class="row clone_data">
                        <div class=" col-lg-10">
                            <div class="form-group">
                                <div class="form-line">
                                    <select class="form-control select2" id="erp_package" name="erp_package[]"
                                            data-placeholder="Select">
                                        @foreach($data['commission'] as $commission )
                                            <option value="{{$commission->id}}">  {{$commission->package_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-1">
                            <a href="javascript:void(0);" class="add_clone" title="Add field"><i class="fas fa-plus"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="modal-footer">
            <div class="modal-footer">
                <button type="submit" class="btn btn-danger waves-effect"
                        data-dismiss="modal">Close
                </button>
                <button type="submit"
                        class="btn btn-info waves-effect">Make Team
                </button>
            </div>
        </div>
    </div>
</form>


    <script>
        $(document).ready(function () {
            var maxField = 10; //Input fields increment limitation
            var addButton = $('.add_clone'); //Add button selector
            var wrapper = $('.team_main'); //Input field wrapper
            var fieldHTML = jQuery('.team_sub .clone_data');
            var fieldHTML2 = '<a href="javascript:void(0);" class="remove_button btn btn-dark mx-1">Cancel</a>';
            var x = 1; //Initial field counter is 1

            //Once add button is clicked
            $(addButton).click(function () {
                var wow = $(this);
                //Check maximum number of input fields
                if (x < maxField) {
                    x++;
                    $(wow).parents('.team_main').append($(fieldHTML).clone());
                }
            });
            //Once remove button is clicked
            $(wrapper).on('click', '.remove_button', function (e) {
                e.preventDefault();
                $(this).parents('.clone_data',).remove(); //Remove field html
                x--; //Decrement field counter
            });
        });

    </script>
