<style>
    .choices__inner .choices__inner {
        display: none;
    }

    .choices {
        margin-bottom: 0 !important;
    }
</style>

<div class="modal fade " id="exampleModal" tabindex="-1" role="dialog"
     aria-labelledby="formModal" aria-hidden="true">
    <div class="modal-dialog" style="max-width: 80%" role="document">


        <div class="modal-content ">
            <div class="create_questions">
                <div class="modal-header">
                    <h5 class="modal-title" id="formModal">Paper Details:</h5>
                    <button type="button" class="close" data-dismiss="modal"
                            aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
                    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
                    @include('management.layouts.error')
                    <form action="{{route('create-order.store')}}" method="post" enctype="multipart/form-data"
                          id="createOrder">
                        @csrf
                        <label><b>Subject or Discipline:</b> "If the required type of paper is missing, feel free to
                            pick “Other” and write your specific type of paper in the appeared tab."
                        </label>

                        <label for="email_address1">Subject or Discipline:</label>
                        <div class="form-group">
                            <select class="form-control select2" name="erp_subject_name"
                                    data-placeholder="Select">
                                @foreach($subject_type as $record)
                                    <option {{ old('erp_subject_name') == $record->erp_subject_name ? 'Selected' : '' }} value="{{$record->erp_subject_name}}">{{$record->erp_subject_name}}</option>
                                @endforeach

                                <option {{old('erp_subject_name') == 'other' ? 'Selected' : '' }}  value="other">Other
                                    (not listed above)
                                </option>
                            </select>


                            <div class="mt-4 dc" id="">
                                <input value="{{old('erp_sub') }}" class="other_input" type="text" name="erp_sub"
                                       placeholder="Add course">
                            </div>


                        </div>
                        <br><br>
                        <label><b>Topic:</b> "Please provide us with a clear topic
                            of your assignment up to 300 symbols. If you don’t have a specific
                            topic, use the default writer’s choice option or use the “Subject or
                            Discipline” chosen above." </label>


                        <label for="email_address1"><b>Topic</b></label>

                        <div class="form-group">
                            <select class="form-control select2" name="erp_order_topic" id="Quiz-type"
                                    data-placeholder="Select">
                                <option {{old('erp_order_topic')  == 'other' ? 'Selected' : '' }}  value="other">I’ll
                                    Write the Topic
                                </option>
                                <option {{old('erp_order_topic') == 'writer' ? 'Selected' : '' }} value="writer">Let the
                                    Writer Choose
                                </option>
                                <option {{old('erp_order_topic')  == 'same' ? 'Selected' : '' }} value="same">Same as
                                    Subject/Discipline Chosen Above
                                </option>
                            </select>
                            <div class="mt-3 dc">
                                <input value="{{old('erp_order_text') }}" type="text" name="erp_order_text"
                                       class="form-control other_input" id="">
                            </div>
                        </div>
                        <br>

                        <div class="form-group">

                            <label><b>Paper Instructions:</b> "To ensure that the final paper meets your
                                requirements,
                                make sure your instructions are as clear and detailed as possible. This
                                will decrease the chance of revisions in your order."</label>
                            <label for="email_address1">Message</label>
                            <textarea value="{{old('erp_order_message') }}" type="text" name="erp_order_message"
                                      id="erp_order_message"  class="ckeditor form-control choices" cols="30"
                                      rows="10"
                                      ></textarea>

                            <span id="erp_order_message-error" class="error invalid-feedback"></span>

                            <br>
                        </div>


                        <label for="email_address1"><b>Academic Level:</b></label>

                        <div class="form-group">
                            <select class="form-control select2 choices" name="erp_academic_name" id="Quiz-type"
                                    data-placeholder="Select" required>
                                @foreach($academic_level as $record)
                                    <option {{ old('erp_academic_name') == $record->erp_academic_name ? 'Selected' : '' }}  value="{{$record->erp_academic_name}}">{{$record->erp_academic_name}}</option>
                                @endforeach
                                <option {{ old('erp_academic_name') == 'other' ? 'Selected' : '' }}  value="other">Other
                                    (not listed above)
                                </option>
                            </select>
                            <div class="mt-4 dc" id="">
                                <input value="{{old('erp_academic_description') }}" type="text"
                                       name="erp_academic_description" class="other_input choices"
                                       placeholder="Description Here">
                            </div>
                            <br>
                            <label for="">"Please select the option that is the closest to your next obtainable
                                degree."</label>
                        </div>
                        <br><br>
                        <label><b>Type of Paper:</b> "If the required type of paper is missing, feel free to pick
                            “Other” and write your specific type of paper in the appeared tab."
                        </label>


                        <label><b>Type of Paper:</b></label>

                        <div class="form-group">
                            <select class="form-control select2 choices" name="erp_paper_type" id="Quiz-type"
                                    data-placeholder="Select">
                                @foreach($paper_type as $record)

                                    <option {{old('erp_document_title') == $record->erp_document_title ? 'Selected' : '' }}  value="{{$record->id}}">{{$record->erp_document_title}}</option>
                                @endforeach
                                {{--                                <option {{old('erp_document_title') == 'other' ? 'Selected' : '' }}  value="other">Other (not listed above)</option>--}}
                            </select>
                            <div class="mt-4 dc" id="">
                                <input value="{{old('erp_document_title') }}" type="text" name="erp_paper_description"
                                       class="other_input choices" placeholder="Description Here">
                            </div>
                        </div>

                        <br><br>
                        <label><b>Paper Format: </b> "Format of your in-text citations, references and title page. The
                            format/citation style also applies to any Works Cited and/or References pages."
                        </label>


                        <label for="email_address1">Paper Format:</label>

                        <div class="form-group">
                            <select class="form-control select2 choices" name="erp_paper_format" id="Quiz-type"
                                    data-placeholder="Select">
                                @foreach($paper_format as $record)
                                    <option {{ old('erp_title') == $record->erp_title ? 'Selected' : '' }} value="{{$record->id}}">{{$record->erp_title }}</option>
                                @endforeach
                                {{--                                <option {{old('erp_title') == 'other' ? 'Selected' : '' }} value="other">Other (not listed above)</option>--}}
                            </select>
                            <div class="mt-4 dc" id="">
                                <input value="{{old('erp_format_description') }}" type="text"
                                       name="erp_format_description" class="other_input choices"
                                       placeholder="Description Here">
                            </div>

                        </div>

                        <br><br>
                        <label for="email_address1"><b>Language and spelling style:</b></label>

                        <div class="form-group">
                            <select class="form-control select2 choices" name="erp_language_name" id="Quiz-type"
                                    data-placeholder="Select">
                                @foreach($language_style as $record)
                                    <option {{ old('erp_language_name') == $record->erp_language_name ? 'Selected' : '' }} value="{{$record->erp_language_name}}">{{$record->erp_language_name}}</option>
                                @endforeach
                            </select>
                            <br>
                            <label for="email_address1">For Example: color (American) ---- Colour (British)</label>

                        </div>


                        <div>
                        <label for="email_address1"><b>Team:</b></label>
                            <div class="form-group">
                                <select id="choices-multiple-remove-button" class="js-example-basi-multiple choices team" name="erp_team[]"
                                        multiple="multiple" style="width:1100px;">
                                    @foreach($team as $record)
                                    <option value="{{$record->id}}" data-description="{{$record->id}}"> {{$record->erp_team_name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <input class="wowinput d-none" type="text" name="erpnone" value="">
                            </div>

                        </div>

                        <label for="email_address1">Will you provide any resource materials:</label>
                        <div class="form-group">
                            <select class="form-control select2 choices"  name="erp_resource_materials"
                                    data-placeholder="Select" required>
                                <option value="">Select</option>
                                <option {{ old('erp_resource_materials') == 'Yes'? 'Selected' : '' }} value="yes">Yes
                                </option>
                                <option {{ old('erp_resource_materials') == 'No' ? 'Selected' : '' }} value="No">No
                                </option>
                            </select>


                            <div class="mt-4 bc file-field input-field">
                                <div class="btn">
                                    <span>File</span>
                                    <input name="erp_resource_file" type="file">
                                </div>
                                <div class="file-path-wrapper choices">
                                    <input value="{{old('erp_resource_file') }}" class="file-path validate choices"
                                           name="erp_resource_file" type="text" >


                                </div>
                            </div>
                            <br>
                            <label><b>Number of Pages: </b> "Select the number of pages needed. Do not include
                                Bibliography, Works Cited, or References pages because they are free."
                            </label>


                            <label for="erp_number_Pages">Number of Pages:</label>

                            <div class="form-group">
                                <input type="number" value="{{ old('erp_number_Pages')}}"
                                       name="erp_number_Pages" class="form-control choices" id="erp_number_Pages">
                            </div>
                        </div>
                        <br><br>
                        <label><b>Spacing: </b> “Double spaced pages contain approximately 300 words each, while
                            single-spaced have 600.”
                        </label>


                        <label for="email_address1">Spacing:</label>

                        <div class="form-group">
                            <select class="form-control select2 choices" name="erp_spacing" id="Quiz-type"
                                    data-placeholder="Select" required>
                                <option value="">Select</option>
                                <option {{ old('erp_spacing') == 2 ? 'Selected' : '' }}  value="2">Single Spacing
                                </option>
                                <option {{ old('erp_spacing') == 1 ? 'Selected' : '' }}  value="1">Double Spacing
                                </option>
                            </select>

                        </div>

                        <br><br>
                        <label><b>PowerPoint Slides:</b> "The number of Power Point slides that will be delivered to you
                            separately from your paper. Useful for those who need to present in front of class."
                        </label>


                        <label for="email_address1">PowerPoint Slides:</label>

                        <div class="form-group">
                            <input value="{{old('erp_powerPoint_slides') }}" type="number" min="0"
                                   name="erp_powerPoint_slides" class="form-control choices" required>

                        </div>

                        <br><br>
                        <label><b>Sources: </b> "This number of entries will be in your reference list or bibliography
                            page.”
                        </label>
                        <br><br>
                        <label><b>FREE SOURCES: </b> If needed, you may request one (1) free source for every one (1)
                            page of text that you order. For example, if you order 20 pages of text, you can request up
                            to 20 sources for free.”
                        </label>
                        <br><br>
                        <label><b>EXTRA SOURCES: </b> There is an additional cost of $1 per each extra source that
                            exceeds the number of pages that you order. For example, if you order 10 pages and request
                            15 sources, there will be a total additional cost of $5 for the 5 extra sources.
                        </label>
                        <br><br>
                        <label for="email_address1">No. of EXTRA SOURCES:</label>

                        <div class="form-group">
                            <input value="{{old('erp_extra_source') }}" type="number" min="0" name="erp_extra_source"
                                   class="form-control choices" id="" required>

                        </div>
                        <br><br>
                        <label><b>Deadline: </b> "The time in which you will receive your completed paper. The countdown
                            starts when we receive payment for your order. Please note that revision requests may exceed
                            your deadline."
                        </label>


                        <label for="email_address1">Deadline:</label>

                        <div class="form-group">
                            <select class="form-control select2 choices" name="erp_deadline"
                                    data-placeholder="Select" required>
                                <option value="">Select</option>
                                <option {{ old('erp_deadline') == 'erp_eight_hrs' ? 'Selected' : '' }} value="erp_eight_hrs">
                                    8 hours
                                </option>
                                <option {{ old('erp_deadline') == 'erp_tf_hrs' ? 'Selected' : '' }} value="erp_tf_hrs">
                                    24 hours
                                </option>
                                <option {{ old('erp_deadline') == 'erp_fe_hrs' ? 'Selected' : '' }} value="erp_fe_hrs">
                                    48 hours
                                </option>
                                <option {{ old('erp_deadline') == 'erp_three_days' ? 'Selected' : '' }} value="erp_three_days">
                                    3 days
                                </option>
                                <option {{ old('erp_deadline') == 'erp_five_days' ? 'Selected' : '' }}  value="erp_five_days">
                                    5 days
                                </option>
                                <option {{ old('erp_deadline') == 'erp_seven_days' ? 'Selected' : '' }} value="erp_seven_days">
                                    7 days
                                </option>
                                <option {{ old('erp_deadline') == 'erp_fourteen_days' ? 'Selected' : '' }} value="erp_fourteen_days">
                                    14 days
                                </option>
                                <option {{ old('erp_deadline') == 'erp_fourteen_plus_days' ? 'Selected' : '' }} value="erp_fourteen_plus_days">
                                    14+ days
                                </option>
                            </select>

                        </div>
                        <br><br>
                        <label for="email_address1">Copy of Sources:</label>

                        <div class="form-group">
                            <select class="form-control select2 choices" name="erp_copy_sources"
                                    data-placeholder="Select" required>
                                <option value="">Select</option>
                                <option {{ old('erp_copy_sources') == 'Yes' ? 'Selected' : '' }}  value="Yes">Yes
                                </option>
                                <option {{ old('erp_copy_sources') == 'No' ? 'Selected' : '' }} value="No">No</option>
                            </select>

                        </div>
                        <br><br>
                        <label for="email_address1">1 Page Summary:</label>

                        <div class="form-group">
                            <select class="form-control select2 choices" name="erp_page_summary"
                                    data-placeholder="Select" required>
                                <option value="">Select</option>
                                <option {{ old('erp_page_summary') == 'Yes' ? 'Selected' : '' }} value="Yes">Yes
                                </option>
                                <option {{ old('erp_page_summary') == 'No' ? 'Selected' : '' }} value="No">No</option>
                            </select>

                        </div>
                        <br><br>
                        <label for="email_address1">Paper Outline in Bullets:</label>

                        <div class="form-group">
                            <select class="form-control select2 choices" name="erp_paper_outline"
                                    data-placeholder="Select" required>
                                <option value="">Select</option>
                                <option {{ old('erp_paper_outline') == 'Yes' ? 'Selected' : '' }} value="Yes">Yes
                                </option>
                                <option {{ old('erp_paper_outline') == 'No' ? 'Selected' : '' }} value="No">No</option>
                            </select>

                        </div>

                        <br><br>
                        <label for="email_address1">Abstract Page:</label>

                        <div class="form-group">
                            <select class="form-control select2 choices" name="erp_abstract_page"
                                    data-placeholder="Select" required>
                                <option value="">Select</option>
                                <option {{ old('erp_abstract_page') == 'Yes' ? 'Selected' : '' }} value="Yes">Yes
                                </option>
                                <option {{ old('erp_abstract_page') == 'No' ? 'Selected' : '' }} value="No">No</option>
                            </select>

                        </div>
                        <br><br>
                        <label><b>Statistical Analysis: </b> If your order requires statistical analysis or a
                            significant amount of mathematical calculations, there will be an additional charge of 15%.
                            To see a list of features that qualify as "statistical analysis," <b>click here.</b>
                        </label>


                        <label for="email_address1">Statistical Analysis:</label>

                        <div class="form-group">
                            <select class="form-control select2 choices" name="erp_statistical_analysis"
                                    data-placeholder="Select" >
                                <option value="">Select</option>
                                <option {{ old('erp_statistical_analysis') == 'Yes' ? 'Selected' : '' }}  value="Yes">
                                    Yes
                                </option>
                                <option {{ old('erp_statistical_analysis') == 'No' ? 'Selected' : '' }}  value="No">No
                                </option>
                            </select>

                        </div>

                        <br><br>
                        <div class="modal-footer">
                            <button class="btn btn-danger waves-effect"
                                    data-dismiss="modal">Cancel
                            </button>
                            <button type="submit"
                                    class="btn btn-info waves-effect" value="submit" >Place Order
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

{{--        <script>--}}
{{--            $(document).ready(function() {--}}
{{--                $('.js-example-basic-multiple').select2();--}}
{{--            });--}}
{{--        </script>--}}
    {{--    <script>--}}
    {{--        $(document).ready(function(){--}}

    {{--            var multipleCancelButton = new Choices('#choices-multiple-remove-button', {--}}
    {{--                removeItemButton: true,--}}
    {{--                maxItemCount:20,--}}
    {{--                searchResultLimit:5,--}}
    {{--                renderChoiceLimit:5--}}
    {{--            });--}}


    {{--        });--}}
    {{--    </script>--}}

</div>

