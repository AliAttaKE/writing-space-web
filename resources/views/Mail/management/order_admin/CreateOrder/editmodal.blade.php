<div class="modal fade" id="exampleModal1{{$row->id}}" tabindex="-1" role="dialog"
     aria-labelledby="formModal" aria-hidden="true">
    <div class="modal-dialog" style="max-width: 80%" role="document">
        <div class="modal-content " >
            <div class="create_questions">
                <div class="modal-header">
                    <h5 class="modal-title" id="formModal">Edit Paper Details:</h5>
                    <button type="button" class="close" data-dismiss="modal"
                            aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action="{{route('create-order.update',$row->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <label><b>Subject or Discipline:</b> "If the required type of paper is missing, feel free to pick “Other” and write your specific type of paper in the appeared tab."
                        </label>


                        <label for="email_address1">Subject or Discipline:</label>

                        <div class="form-line">




                            <select class="form-control select2 "  name="erp_subject_name" id="Quiz-type" data-placeholder="Select">
                                <?php $i=0; ?>
                                @foreach($subject_type as $record)
                                        <?php  if($row->erp_subject_name == $record->erp_subject_name){ $i++; } ?>
                                    <option value="{{$record->erp_subject_name}}" <?= ($row->erp_subject_name == $record->erp_subject_name) ? 'selected' : '' ?> >{{$record->erp_subject_name}}</option>

                                @endforeach
                                <option <?= ( $i == 0) ? 'selected' : '' ?>  value="other">Other (not listed above)</option>
                            </select>


                            <div class="mt-4 dc" id="">

                               <input type="text"{{$row->erp_subject_name}}   value="{{$row->erp_subject_name}}" name="erp_sub" class="other_input"  placeholder="Add course">
                            </div>

                        </div>

                        <br><br>
                        <label><b>Topic:</b> "Please provide us with a clear topic
                            of your assignment up to 300 symbols. If you don’t have a specific
                            topic, use the default writer’s choice option or use the “Subject or
                            Discipline” chosen above." </label>


                        <label for="email_address1">Topic</label>

                        <div class="form-line">
                            <?= $i=0; ?>
                            <select class="form-control select2" name="erp_order_topic" id="Quiz-type" data-placeholder="Select">

                                <?php  if($row->erp_order_topic == $record->erp_order_topic){ $i++; } ?>

                                <option value="{{$record->erp_subject_name}}">Let the Writer Choose</option>
                                <option value="{{$record->erp_subject_name}}">Same as Subject/Discipline Chosen Above</option>
                                <option <?= ( $i == 0) ? 'selected' : '' ?>  value="other">I’ll Write the Topic</option>
                            </select>
                            <div class="mt-3 dc">
                                <input type="text" {{$row->erp_order_topic}}  value="{{$row->erp_order_topic}}" name="erp_order_text"  class="form-control other_input" id="">
                            </div>
                        </div>
                        <br>

                        <div>

                            <label><b>Paper Instructions:</b> "To ensure that the final paper meets your
                                requirements,
                                make sure your instructions are as clear and detailed as possible. This
                                will decrease the chance of revisions in your order."</label>
                            <label for="email_address1">Message</label>
                            <input type="text" name="erp_order_message" value="{{$row->erp_order_message}}" class="ckeditor form-control" id="comment_text" cols="30" rows="10">
                            <br>
                        </div>

                        <label for="email_address1">Academic Level:</label>
                        <div class="form-line">
                            <select class="form-control select2"  name="erp_academic_name" data-placeholder="Select">
                                <?= $i=0; ?>


                            @foreach($academic_level as $record)
                                        <?php  if($row->erp_academic_name == $record->erp_academic_name){ $i++; } ?>
                                    <option  value="{{$record->erp_academic_name}}" {{$record->erp_academic_name == $row->erp_academic_name ? 'selected' : ''}}>{{$record->erp_academic_name}}</option>
                                @endforeach
                                <option <?= ( $i == 0) ? 'selected' : '' ?> value="other" >Other (not listed above)</option>
                            </select>


                                <div class="mt-4 dc">
                                    <input type="text" class="other_input" value="{{$row->erp_academic_name}}"  name="erp_academic_description"  placeholder="Description Here">
                                </div>


                            <br>
                            <label for="">"Please select the option that is the closest to your next obtainable degree."</label>
                        </div>
                        <br><br>
                        <label><b>Type of Paper:</b> "If the required type of paper is missing, feel free to pick “Other” and write your specific type of paper in the appeared tab."
                        </label>


                        <label for="email_address1">Type of Pape:</label>

                        <div class="form-line">
                            <select class="form-control select2"  name="erp_paper_type" id="Quiz-type" data-placeholder="Select">
                                <?= $i=0; ?>

                            @foreach($paper_type as $record)
                                    <?php  if($row->erp_paper_type == $record->erp_paper_type){ $i++; } ?>
                                    <option  value="{{$record->erp_paper_type}}" {{$row->erp_paper_type == $record->erp_paper_type ? 'selected' : ''}}>{{$record->erp_paper_type}}</option>

                                    @endforeach
{{--                                <option   <?= ( $i == 0) ? 'selected' : '' ?> value="other" >Other (not listed above)</option>--}}
                            </select>


                            <div class="mt-4 dc" id="" style="{{$row->erp_paper_description == 'text' ? 'display:block;' : 'display:none;' }}">
                                <input type="text" class="other_input" value="{{$row->erp_paper_type}}" name="erp_paper_description" placeholder="Description Here">
                            </div>
                        </div>
                        <br><br>


                        <label><b>Paper Format: </b> "Format of your in-text citations, references and title page. The format/citation style also applies to any Works Cited and/or References pages."
                        </label>


                        <label for="email_address1">Paper Format:</label>

                        <div class="form-line">
                            <select class="form-control select2" value="{{$row->erp_paper_format}}" name="erp_paper_format" id="Quiz-type" data-placeholder="Select">
                                <?= $i=0; ?>

                            @foreach($paper_format as $record)
                                    <?php  if($row->erp_paper_format == $record->erp_paper_format){ $i++; } ?>
                                    <option value="{{$record->erp_paper_format}}" {{$record->erp_paper_format == $row->erp_paper_format ? 'selected' : ''}}>{{$record->erp_paper_format}}</option>
                                @endforeach
{{--                                <option   <?= ( $i == 0) ? 'selected' : '' ?> value="other">Other (not listed above)</option>--}}
                            </select>


                            <div class="mt-4 dc" id="" style="{{$row->erp_format_description == 'text' ? 'display:block;' : 'display:none;' }}">
                                <input type="text" value="{{$row->erp_paper_format}}" class="other_input"  name="erp_format_description"  placeholder="Description Here">
                            </div>

                        </div>
                        <br><br>
                        <label for="email_address1"><b>Language and spelling style:</b></label>

                        <div class="form-line">
                            <select class="form-control select2"  value="{{$row->erp_language_name}}" name="erp_language_name" id="Quiz-type" data-placeholder="Select">
                                @foreach($language_style as $record)

                                    <option value="{{$record->erp_language_name}}" {{$row->erp_language_name == $record->erp_language_name ? 'selected' : '' }} >{{$record->erp_language_name}}</option>

                                @endforeach
                            </select>
                            <br>
                            <label for="email_address1">For Example: color (American) ---- Colour (British)</label>

                        </div>
                        <br>
                        <label for="email_address1"><b>Commission Level:</b></label>

                        <div class="form-line">
                            <select class="form-control select2" name="erp_team" id="Quiz-type" data-placeholder="Select">
                                <?= $i=0; ?>
                                @foreach($team as $record)
                                        <?php  if($row->erp_team == $record->id){ $i++; } ?>
                                    <option value="{{$record->id}}" {{$row->erp_team == $record->id ? 'selected' : '' }} >{{$record->erp_team_name}}</option>
                                @endforeach
                                    <option   <?= ( $i == 0) ? 'selected' : '' ?> value="none">None of these</option>
                            </select>
                            <br>

                        </div>
                        {{--                                                    <label for="email_address1">Will you provide any resource materials:</label>--}}
                        <label for="email_address1">Will you provide any resource materials:</label>
                        <div class="form-line">
                            <select class="form-control select2 " value="{{$row->erp_resource_materials}}" name="erp_resource_materials" data-placeholder="Select">
                                <option value="">Select</option>
                                <option value="yes" {{ $row->erp_resource_materials == 'yes' ? 'selected' : ''}}>Yes</option>
                                <option value="No" {{ $row->erp_resource_materials == 'No' ? 'selected' : ''}}>No</option>

                            </select>
                            <div class="mt-4 bc file-field input-field">
                                <div class="btn">
                                    <span>File</span>
                                    <input name="erp_resource_file" type="file">
                                </div>
                                <div class="file-path-wrapper">
                                    <input value="{{$row->erp_resource_file}}" class="file-path validate" name="erp_resource_file" type="text">
                                </div>
                            </div>
                                <div class=" container d-flex justify-content-center" >



                                        <a href="{{asset('image/resource'.'/'.$row->erp_resource_file)}}" download>  <i class="fa fa-file fa-3x" aria-hidden="true" height="200px" width="200px"> </i> </a>


                                </div>
                            </div>
                       <br><br>
                        {{--                                                    <div class="form-line">--}}
                        {{--                                                        <select class="form-control select2" name="quiz_type" id="Quiz-type" data-placeholder="Select">--}}
                        {{--                                                            <option value="Select">Select</option>--}}
                        {{--                                                            <option value="Yes">Yes</option>--}}
                        {{--                                                            <option value="No">No</option>--}}
                        {{--                                                        </select>--}}
                        {{--                                                        <br><br></div>--}}
                        <label><b>Number of Pages: </b> "Select the number of pages needed. Do not include Bibliography, Works Cited, or References pages because they are free."
                        </label>


                        <label for="email_address1">Number of Pages:</label>

                        <div class="form-line">
                            <input type="text" value="{{$row->erp_number_Pages}}" name="erp_number_Pages" class="form-control" id="">

                        </div>
                        <br><br>
                        <label><b>Spacing: </b> “Double spaced pages contain approximately 300 words each, while single-spaced have 600.”
                        </label>


                        <label for="email_address1">Spacing:</label>

                        <div class="form-line">
                            <select class="form-control select2" name="erp_spacing" id="Quiz-type" data-placeholder="Select">
                                <option {{$row->erp_spacing == '2' ? 'selected' : '' }} value="2">Single Spacing</option>
                                <option {{$row->erp_spacing == '1' ? 'selected' : '' }} value="1">Double Spacing</option>
                            </select>

                        </div>
                        <br><br>
                        <label><b>PowerPoint Slides:</b> "The number of Power Point slides that will be delivered to you separately from your paper. Useful for those who need to present in front of class."
                        </label>


                        <label for="email_address1">PowerPoint Slides:</label>

                        <div class="form-line">
                            <input type="text" value="{{$row->erp_powerPoint_slides}}" name="erp_powerPoint_slides" class="form-control" id="">

                        </div>
                        <br><br>
                        <label><b>Sources: </b> "This number of entries will be in your reference list or bibliography page.”
                        </label>
                        <br><br>
                        <label><b>FREE SOURCES:  </b> If needed, you may request one (1) free source for every one (1) page of text that you order. For example, if you order 20 pages of text, you can request up to 20 sources for free.”
                        </label>
                        <br><br>
                        <label><b>EXTRA SOURCES: </b>  There is an additional cost of $1 per each extra source that exceeds the number of pages that you order. For example, if you order 10 pages and request 15 sources, there will be a total additional cost of $5 for the 5 extra sources.
                        </label>
                        <br><br>
                        <label for="email_address1">No. of EXTRA SOURCES:</label>

                        <div class="form-line">
                            <input type="text" value="{{$row->erp_extra_source}}" name="erp_extra_source" class="form-control" id="">

                        </div>
                        <br><br>
                        <label><b>Deadline: </b>  "The time in which you will receive your completed paper. The countdown starts when we receive payment for your order. Please note that revision requests may exceed your deadline."
                        </label>


                        <label for="email_address1">Deadline:</label>

                        <div class="form-line">
                            <select class="form-control select2"  name="erp_deadline" id="Quiz-type" data-placeholder="Select">
                                <option value="">Select</option>
                                <option {{$row->erp_deadline == 'erp_eight_hrs' ? 'selected' : '' }} value="erp_eight_hrs">8 hours</option>
                                <option {{$row->erp_deadline == 'erp_tf_hrs' ? 'selected' : '' }} value="erp_tf_hrs">24 hours</option>
                                <option {{$row->erp_deadline == 'erp_fe_hrs' ? 'selected' : '' }} value="erp_fe_hrs">48 hours</option>
                                <option {{$row->erp_deadline == 'erp_three_days' ? 'selected' : '' }} value="erp_three_days">3 days</option>
                                <option {{$row->erp_deadline == 'erp_five_days' ? 'selected' : '' }} value="erp_five_days">5 days</option>
                                <option {{$row->erp_deadline == 'erp_seven_days' ? 'selected' : '' }} value="erp_seven_days">7 days</option>
                                <option {{$row->erp_deadline == 'erp_fourteen_days' ? 'selected' : '' }} value="erp_fourteen_days">14 days</option>
                                <option {{$row->erp_deadline == 'erp_fourteen_plus_days' ? 'selected' : '' }} value="erp_fourteen_plus_days">14+ days</option>
                            </select>

                        </div>
                        <br><br>
                        <label for="email_address1">Copy of Sources:</label>

                        <div class="form-line">
                            <select class="form-control select2" name="erp_copy_sources" id="Quiz-type" data-placeholder="Select">
                                <option  value="">Select</option>
                                <option  {{$row->erp_copy_sources == 'Yes' ? 'selected' : '' }} value="Yes">Yes</option>
                                <option  {{$row->erp_copy_sources == 'No' ? 'selected' : '' }} value="No">No</option>
                            </select>

                        </div>
                        <br><br>
                        <label for="email_address1">1 Page Summary:</label>

                        <div class="form-line">
                            <select class="form-control select2" name="erp_page_summary" id="Quiz-type" data-placeholder="Select">
                                <option  value="">Select</option>
                                <option {{$row->erp_page_summary == 'Yes' ? 'selected' : '' }} value="Yes">Yes</option>
                                <option {{$row->erp_page_summary == 'No' ? 'selected' : '' }} value="No">No</option>
                            </select>

                        </div>
                        <br><br>
                        <label for="email_address1">Paper Outline in Bullets:</label>

                        <div class="form-line">
                            <select class="form-control select2"  name="erp_paper_outline" id="Quiz-type" data-placeholder="Select">
                                <option  value="">Select</option>
                                <option {{$row->erp_paper_outline == 'Yes' ? 'selected' : '' }} value="Yes">Yes</option>
                                <option {{$row->erp_paper_outline == 'No' ? 'selected' : '' }} value="No">No</option>
                            </select>

                        </div>
                        <br><br>
                        <label for="email_address1">Abstract Page:</label>

                        <div class="form-line">
                            <select class="form-control select2" name="erp_abstract_page" id="Quiz-type" data-placeholder="Select">
                                <option  value="">Select</option>
                                <option {{$row->erp_abstract_page == 'Yes' ? 'selected' : '' }} value="Yes">Yes</option>
                                <option {{$row->erp_abstract_page == 'No' ? 'selected' : '' }} value="No">No</option>
                            </select>

                        </div>
                        <br><br>
                        <label><b>Statistical Analysis:  </b>  If your order requires statistical analysis or a significant amount of mathematical calculations, there will be an additional charge of 15%. To see a list of features that qualify as "statistical analysis,"   <b>click here.</b>
                        </label>


                        <label for="email_address1">Statistical Analysis:</label>

                        <div class="form-line">
                            <select class="form-control select2" name="erp_statistical_analysis" id="Quiz-type" data-placeholder="Select">
                                <option  value="">Select</option>
                                <option {{$row->erp_statistical_analysis == 'Yes' ? 'selected' : '' }} value="Yes">Yes</option>
                                <option {{$row->erp_statistical_analysis == 'No' ? 'selected' : '' }} value="No">No</option>
                            </select>

                        </div>
                        <br><br>


                        {{--                                        <div class="file_upload">--}}
                        {{--                                            <div class="modal-header">--}}
                        {{--                                                <h5 class="modal-title" id="formModal">File Upload</h5>--}}
                        {{--                                            </div>--}}
                        {{--                                            <div class="modal-body">--}}
                        {{--                                                <form>--}}
                        {{--                                                    <div class="file-field input-field">--}}
                        {{--                                                        <div class="btn">--}}
                        {{--                                                            <span>File</span>--}}
                        {{--                                                            <input name="file" type="file">--}}
                        {{--                                                        </div>--}}
                        {{--                                                        <div class="file-path-wrapper">--}}
                        {{--                                                            <input class="file-path validate" name="file" type="text">--}}
                        {{--                                                        </div>--}}
                        {{--                                                    </div>--}}



                        {{--                                                    <br>--}}


                        {{--                                                </form>--}}
                        {{--                                            </div>--}}
                        {{--                                        </div>--}}













                        <div class="modal-footer">
                            <button type="submit" class="btn btn-danger waves-effect"
                                    data-dismiss="modal">Cancel</button>
                            <button type="submit"
                                    class="btn btn-info waves-effect">Update Place Order</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
