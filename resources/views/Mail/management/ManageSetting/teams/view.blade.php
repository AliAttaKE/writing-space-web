<div class="modal fade" id="exampleModal2{{$datas->id}}" tabindex="-1" role="dialog" aria-labelledby="formModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="create_questions">
                <div class="modal-header">
                    <h5 class="modal-title" id="formModal">View Teams</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
            </div>
            <div class="">
                <div class="modal-body">
                    <label for="">Status</label>
                    <div class="row">
                         @if($datas->erp_status == '1')
                             <div class="mx-3"><label class="badge badge-info" data-toggle="modal" data-target="#active_inactive">Enable</label> </div>
                        @else
                            <div><label class="badge badge-danger" data-toggle="modal" data-target="#active_inactive">Disable</label></div>
                        @endif
                    </div>
                    <label for="email_address1">Team Name</label>
                    <div class="form-group">
                    <div class="form-line">
                      <span> {{$datas->erp_team_name}} </span>
                    </div>
                    </div>
                    @foreach ($data['commission'] as $value )
                        <div class="form-group">
                            <?php $i =0; ?>
                            @foreach($data['com'] as $key => $commission )
                                @if($value->id == $commission->commission_id)
                                    @if($i==0)
                                        <h5> {{$value->package_name}} </h5>
                                        <?php $i ++; ?>
                                    @endif
                                    <p>{{$commission['user']['name']}}</p>
                                @endif
                            @endforeach
                        </div>
                    @endforeach
                    <div class="form-group">
                      <div class="form-line">

                      </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-danger waves-effect" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
