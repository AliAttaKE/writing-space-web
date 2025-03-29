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
                                    <input type="hidden" value="{{$data['new_order']['order']['id']}}" name="order_id">
                                    <input type="hidden" value="{{$data['new_order']['order']['erp_team']}}" name="team_id">
                                    <input type="hidden" value="{{$data['new_order']['order']['erp_user_id']}}" name="user_id">
                                    <input type="hidden" value="{{$data['new_order']['id']}}" name="team_order_id">
                                    <input type="hidden" value="{{$data['new_order']['erp_commission_id']}}" name="commission_id">
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <input type="text" id="title" name="title" class="form-control"
                                                   placeholder="Main Title">
                                            <small style="color: #414244">EXAMPLE: "Causes and Effects of the Great
                                                Depression of 1929"
                                            </small>
                                        </div>
                                        <br>
                                    </div>
                                    <br>
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <input type="text" id="sec_title" class="form-control"
                                                   name="sec_title" placeholder="Secondary Title">
                                            <small style="color: #414244">EXAMPLE: "Great Depression of 1929: Causes
                                                and Effects"
                                            </small>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group row">
                                        <div class="col-sm-4">
                                            <input type="text" id="keywords" class="form-control"
                                                   name="keywords[]" placeholder="Three Keywords">
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" id="keywords" class="form-control"
                                                   name="keywords[]" placeholder="Three Keywords">
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" id="keywords" class="form-control"
                                                   name="keywords[]" placeholder="Three Keywords">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <label for="email_address1">Post Work Cited / Bibliography page *:</label>
                                            <label for="description"></label><textarea name="description"
                                                                                       class="form-control"
                                                                                       id="description"
                                                                                       cols="30" rows="10">
                                            </textarea>
                                            <br>
                                        </div>
                                    </div>
                                    <br>
                                    <label for="">Category 1</label>
                                    <label for="cat_1"></label><select class="form-control select2" name="cat_1"
                                                                       id="cat_1"
                                                                       data-placeholder="Select">
                                        <option value="option1">Option1</option>
                                        <option value="option2">option2</option>
                                        <option value="option3"> option3</option>
                                    </select>
                                    <br>
                                    <label for="">Category 2</label>
                                    <label for="cat_2"></label><select class="form-control select2" name="cat_2" id="cat_2"
                                                                       data-placeholder="Select">
                                        <option value="option1">Option1</option>
                                        <option value="option2">option2</option>
                                        <option value="option3"> option3</option>
                                    </select>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="file-field input-field">
                                                <div class="btn col-md-2">
                                                    <span>Main File</span>
                                                    <input type="file" name="main_file">
                                                </div>
                                                <div class="file-path-wrapper col-md-10">
                                                    <input class="file-path validate"  type="text"
                                                           placeholder="Main file">
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
