<form action="{{route('role-Assign.store')}}" method="post">
    @csrf
    <div class="academic_level">
        <div class="modal-body">
            <div class="modal-body">
                <label for="email_address1">User Name</label>
                <div class="form-group">
                    <div class="form-line">
                        <select class="form-control select2" id="Quiz-type" name="user_id" data-placeholder="Select">



                            @foreach($data['users'] as $user)

                             @if ($user->id != Auth::user()->id)
                                    <option value="{{$user->id}}"> {{$user->name}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                <label for="email_address1">Commission</label>
                <div class="form-group">
                    <div class="form-line">
                        <select class="form-control select2" id="Quiz-type" name="Commission_id" data-placeholder="Select">
                            @foreach($data['commission'] as $commission )
                                <option value="{{$commission->id}}"> {{$commission->package_name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

            </div>
        </div>

        <div class="modal-footer">
            <div class="modal-footer">
                <button type="submit" class="btn btn-danger waves-effect"
                        data-dismiss="modal">Close</button>
                <button type="submit"
                        class="btn btn-info waves-effect">Assign Role</button>
            </div>
        </div>
    </div>
</form>
