<div class="modal fade" id="exampleModal{{$roleassigner->id}}" tabindex="-1" role="dialog" aria-labelledby="formModal" aria-hidden="true">
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
            <div class="academic_level">
                <div class="modal-body">
                    <input type="hidden" name="roleassign_id" value="{{$roleassigner->id}}">
                    <label for="email_address1">User Name</label>
                    <div class="form-group">
                        <div class="form-line">
                            <select class="form-control select2" id="Quiz-type" name="user_id" data-placeholder="Select">
                                @foreach($data['users'] as $user )
                                    @if ($user->id != Auth::user()->id)
                                        <option {{$user->id == $roleassigner->user_id ? 'selected' : '' }}  value="{{$user->id}}"> {{$user->name}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <label for="email_address1">Commission</label>
                    <div class="form-group">
                        <div class="form-line">
                            <select class="form-control select2" id="Quiz-type" name="Commission_id" data-placeholder="Select">

                                @foreach($data['commission'] as $commission)

                                    <option  {{$commission->id == $roleassigner->commission_id ? 'selected' : '' }}  value="{{$commission->id}}"> {{$commission->package_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="submit" class="btn btn-danger waves-effect" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-info waves-effect">Save Changes</button>
            </div>
        </div>
    </div>

</div>
