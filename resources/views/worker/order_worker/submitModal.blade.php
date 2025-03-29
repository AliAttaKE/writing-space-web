<div class="modal fade bd-example-modal-{{$row['order']->id}}" tabindex="-1" role="dialog"
     aria-labelledby="myLargeModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h5 class="mb-4 text-primary">Submit - {{$row['order']->erp_order_text}}</h5>
                        <div class="row">
                            <div class="col-md-12 blockquote mt-5">
                                <form action="{{route('in-progress-orders.store')}}" method="post"
                                      enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" value="{{$row->erp_order_id}}" name="order_id">
                                    <input type="hidden" value="{{$row->erp_team_id}}" name="team_id">
                                    <input type="hidden" value="{{$row->erp_user_id}}" name="user_id">
                                    <input type="hidden" value="{{$row->id}}" name="team_order_id">
                                    <input type="hidden" value="{{$row->erp_commission_id}}" name="commission_id">


                                    {{--                                    @foreach($data['sub'] as $data)--}}

                                    @php
                                        $submission =DB::table('submissions')->where('order_id',$row->erp_order_id)->get()->first();
                                    @endphp
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <input type="text" id="title" name="title" class="form-control"
                                                   placeholder="Heading "
                                                   value="{{$submission != null && $submission->title != null  ? $submission->title : '' }}">
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
                                                   name="sec_title" placeholder="Secondary Title"
                                                   value="{{$submission != null && $submission->sec_title ? $submission->sec_title :''}}">
                                            <small style="color: #414244">EXAMPLE: "Great Depression of 1929: Causes
                                                and Effects"
                                            </small>
                                        </div>
                                    </div>
                                    <br>


                                    @if(isset($submission) && $submission->keywords != null)
                                        @php
                                            $keywords = json_decode($submission->keywords)
                                        @endphp
                                    @else
                                        @php
                                            $keywords[] = null;
                                        @endphp
                                    @endif


                                    <div class="form-group row">
                                        <div class="col-sm-4">
                                            <input type="text" id="keywords" class="form-control"
                                                   name="keywords[]" placeholder="Three Keywords"
                                                   value="{{is_array($keywords) && array_key_exists(0,$keywords) ? $keywords[0] :'' }}">
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" id="keywords" class="form-control"
                                                   name="keywords[]" placeholder="Three Keywords"
                                                   value="{{is_array($keywords) && array_key_exists(1,$keywords) ? $keywords[1] :'' }}">

                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" id="keywords" class="form-control"
                                                   name="keywords[]" placeholder="Three Keywords"
                                                   value="{{is_array($keywords) && array_key_exists(2,$keywords) ? $keywords[2] :'' }}">
                                        </div>
                                    </div>

                                    <br>
                                    <div class="form-group row">
                                        <div class="col-sm-12"><label for="email_address1">
                                                Text </label><textarea name="description"
                                                                                      class="form-control"
                                                                                      id="description"
                                                                                      cols="30"
                                                                                      rows="10">{{$submission != null && $submission->description ? $submission->description :''}}</textarea>
                                            <br>
                                        </div>
                                    </div>
                                    <br>
                                    <label for="">Category 1</label>
                                    <label for="cat_1"></label><select class="form-control select2" name="cat_1"
                                                                       id="cat_1"
                                                                       data-placeholder="Select">
                                        <option {{isset($submission->cat_1) && $submission->cat_1 == 'option1' ? 'selected' : ''}}  value="option1">
                                            Option1
                                        </option>
                                        <option {{ isset($submission->cat_1) && $submission->cat_1 == 'option2' ? 'selected' : ''}}  value="option2">
                                            option2
                                        </option>
                                        <option {{isset($submission->cat_1) && $submission->cat_1 == 'option3' ? 'selected' : ''}}  value="option3">
                                            option3
                                        </option>
                                    </select>
                                    <br>
                                    <label for="">Category 2</label>
                                    <label for="cat_2"></label><select class="form-control select2" name="cat_2"
                                                                       id="cat_2"
                                                                       data-placeholder="Select">
                                        <option {{isset($submission->cat_2) && $submission->cat_2 == 'option1' ? 'selected' : ''}}  value="option1">
                                            Option1
                                        </option>
                                        <option {{isset($submission->cat_2) && $submission->cat_2 == 'option2' ? 'selected' : ''}}  value="option2">
                                            option2
                                        </option>
                                        <option {{isset($submission->cat_2) && $submission->cat_2 == 'option3' ? 'selected' : ''}} value="option3">
                                            option3
                                        </option>
                                    </select>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <div class="file-field input-field">
                                                        <div class="btn">
                                                            <span>File</span>
                                                            <input type="file" name="main_file">
                                                        </div>
                                                        <div class="file-path-wrapper">
                                                            <input class="file-path validate"
                                                                   type="text"
                                                                   placeholder="Source file" name="main_file">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mx-5">

                                        <p><strong>
                                                @if(isset($submission->main_file))
                                                    {{'Download main file'}}

                                                    <a class="btn btn-default btn-circle waves-effect waves-circle waves-float mx-2"
                                                       href="{{asset('image/Orderdetails'.'/'.$submission->main_file)}}"
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
                                                                       placeholder="Source file" name="sources[]">
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
                                    <div class="mx-4">

                                        @if(isset($submission->sources))

                                            {{'Download source file'}}

                                            @foreach(json_decode($submission->sources, true) as $var)

                                                <a class="btn btn-default btn-circle waves-effect waves-circle waves-float mx-2"
                                                   href="{{asset('image/Orderdetails'.'/'.$var)}}"
                                                   download style="position: relative;
                                                                        line-height: 1.2;
                                                                        transform: rotate(
                                                                    180deg);">
                                                    <i class="material-icons ">publish</i>

                                                </a>


                                            @endforeach

                                        @else {{"NO Source File Found "}}
                                        @endif
                                    </div>


                                  <div class="col-12 text-right mt-4">
                                    <button type="submit" class="btn btn-primary">Submit
                                    </button>
                                  </div>

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
        </div>
    </div>
</div>


