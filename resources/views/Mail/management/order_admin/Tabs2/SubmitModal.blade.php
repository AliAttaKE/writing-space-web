<div class="modal bd-example-modal-{{$data['new_order']['order']['erp_order_id']}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h5 class="mb-4 text-primary">Submit -</h5>
                        <div class="row">
                            <div class="col-md-12 blockquote mt-5">
                                <form action="{{route('OrderDetail.store')}}" method="post"
                                      enctype="multipart/form-data">
                                    @csrf
{{--                                        @dd($data['new_order']['order'])--}}
                                    <input type="hidden" value="{{$data['new_order']['order']['id']}}" name="order_id">
                                    <input type="hidden" value="{{$data['new_order']['order']['erp_team']}}" name="team_id">
                                    <input type="hidden" value="{{$data['new_order']['order']['erp_user_id']}}" name="user_id">
                                    <input type="hidden" value="{{$data['new_order']['id']}}" name="team_order_id">
                                    <input type="hidden" value="{{$data['new_order']['erp_commission_id']}}" name="commission_id">
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <input type="text" id="title" name="title" class="form-control"
                                                   placeholder="Main Title">

                                        </div>
                                        <br>
                                    </div>

                                    <br>


                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <label for="email_address1">Post Work Cited / Bibliography page *:</label>
                                            <label for="description"></label><textarea name="description"
                                                                                       class="form-control"
                                                                                       id="description"
                                                                                       cols="30" rows="10" style="border:#a0aec0 solid 1px;">
                                            </textarea>
                                            <br>
                                        </div>
                                    </div>

                                    <br>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <div class="file-field input-field col-md-10">
                                                        <div class="btn">
                                                            <span>File</span>
                                                            <input type="file" name="main_file">
                                                        </div>
                                                        <div class="file-path-wrapper">
                                                            <input class="file-path validate"
                                                                   type="text"
                                                                   placeholder="Main file">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="source2 ">
                                        <div class="row multiple_data">
                                            <div class=" col-lg-10">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <div class="file-field input-field">
                                                            <div class="btn">
                                                                <span>File</span>
                                                                <input type="file" name="sources[]">
                                                            </div>
                                                            <div class="file-path-wrapper">
                                                                <input class="file-path validate"
                                                                       type="text"
                                                                       placeholder="Source file">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-1">
                                                <a href="javascript:void(0);" class="add_datas" title="Add field"><i
                                                            class="fas fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Submit
                                    </button>
                                </form>

                                <div class="d-none  source" style="display:none;">
                                    <div class="multiple_data">
                                        <div class="row">
                                            <div class=" col-lg-10">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <div class="file-field input-field">
                                                            <div class="btn">
                                                                <span>File</span>
                                                                <input type="file" name="sources[]">
                                                            </div>
                                                            <div class="file-path-wrapper">
                                                                <input class="file-path validate"
                                                                       type="text"
                                                                       placeholder="Source file">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-lg-1">
                                                <a class="fas fa-window-close remove_button"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div></div></div>
