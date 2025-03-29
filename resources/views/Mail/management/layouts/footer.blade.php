<!-- Plugins Js -->
<script src="{{asset('management/js/app.min.js')}}"></script>
<script src="{{asset('management/js/chart.min.js')}}"></script>
<!-- Custom Js -->
<script src="{{asset('management/js/admin.js')}}"></script>
<script src="{{asset('management/js/pages/index.js')}}"></script>
<script src="{{asset('management/js/pages/charts/jquery-knob.js')}}"></script>
<script src="{{asset('management/js/pages/sparkline/sparkline-data.js')}}"></script>
<script src="{{asset('management/js/pages/medias/carousel.js')}}"></script>
<script src="{{asset('management/js/pages/forms/basic-form-elements.js')}}"></script>
<script src="{{asset('management/js/form.min.js')}}"></script>
<script  src="{{asset('management/js/jquery.dataTables.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/29.2.0/classic/ckeditor.js"></script>
<script src="https://cdn.tiny.cloud/1/4j9bq6sx1bfvu1ttvrzaiuyh0vum4x410pyov0w8w46sv6cf/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>


{{--<script src="{{asset('management/js/bundles/multiselect/js/jquery.multi-select.js')}}"></script>--}}
{{--<script src="{{asset('management/js/app.min.js')}}"></script>--}}

{{--<script src="{{asset('management/js/form.min.js')}}"></script>--}}
{{--<script src="{{asset('management/js/bundles/multiselect/js/jquery.multi-select.js')}}"></script>--}}
{{--<script src="{{asset('management/js/bundles/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.js')}}"></script>--}}
{{--<!-- Custom Js -->--}}
{{--<script src="{{asset('management/js/admin.js')}}"></script>--}}
{{--<script src="{{asset('management/js/pages/forms/advanced-form-elements.js')}}"></script>--}}




<script>

    $(document).ready( function () {
        $('#myTable').DataTable({
            pageLength : 5,
            lengthMenu: [[5, 10, 25, 50,100], [5, 10, 25, 50,100]]
        });
        $('#myTable2').DataTable(
            {
                pageLength : 5,
                lengthMenu: [[5, 10, 25, 50,100], [5, 10, 25, 50,100]]
            }
        );
        $('#myTable3').DataTable(
            {
                pageLength : 5,
                lengthMenu: [[5, 10, 25, 50,100], [5, 10, 25, 50,100]]
            }
        );
        $('#myTable4').DataTable(
            {
                pageLength : 5,
                lengthMenu: [[5, 10, 25, 50,100], [5, 10, 25, 50,100]]
            }
        );
    } );
    $(document).ready(function () {
        $('.question_checkbox').css('display','none');
        $('.file_upload').css('display','none');
        $('.comment_box').css('display','none');
        $(document).on('change','#erp_quiz_type',function(){
            if($(this).val() == 'check_boxes'){
                $('.question_checkbox').css('display','block');
                $('.file_upload').css('display','none');
                $('.comment_box').css('display','none');
            }
            else if($(this).val() == 'file_upload'){
                $('.file_upload').css('display','block');
                $('.question_checkbox').css('display','none');
                $('.comment_box').css('display','none');
            }
            else if($(this).val() == 'comment_box'){
                $('.comment_box').css('display','block');
                $('.question_checkbox').css('display','none');
                $('.file_upload').css('display','none');
            }else{
                $('.question_checkbox').css('display','none');
                $('.file_upload').css('display','none');
                $('.comment_box').css('display','none');
            }
        });
    });
</script>

{{--Question Checkbox Adding--}}
<script>
    $(document).ready(function() {
        $('.form-check-input').val('20');
        $(document).on('click','.form-check-input',function(){
            if($(this).is(':checked')){
                $(this).val('1');
            }else{
                $(this).val('0');
            }
        })



        var maxField = 10; //Input fields increment limitation
        var addButton = $('.add_button'); //Add button selector
        var wrapper = $('.ajeeb2'); //Input field wrapper
        var fieldHTML = jQuery('.multinone .multiple_branches');
        var fieldHTML2 = '<a href="javascript:void(0);" class="remove_button btn btn-dark mx-1">Cancel</a>';
        var x = 1; //Initial field counter is 1

        //Once add button is clicked
        $(addButton).click(function(){
            //Check maximum number of input fields
            if(x < maxField){
                x++; //Increment field counter
                // $(wrapper).append(fieldHTML); //Add field html
                $(wrapper).append($(fieldHTML).clone());
            }
        });
        //Once remove button is clicked
        $(wrapper).on('click', '.remove_button', function(e){
            e.preventDefault();
            $(this).parents('.multiple_branches' , ).remove(); //Remove field html
            x--; //Decrement field counter
        });
    });
</script>
<script>

    $(document).ready(function (){

        if( $('.types select option:selected').val() == "subs"){
            $(this).parents('.types').find('.hidden').show();
        }

        $('.hidden').hide();

        $('.types select').on('change', function() {
            //  alert( this.value ); // or $(this).val()
            if($(this).val() == "subs") {
                $(this).parents('.types').find('.hidden').show();
            } else {

            }
        })
    });
</script>
<script>

    $(document).ready(function (){

        if( $('.product select option:selected').val() == "subscription"){
            $(this).parents('.product').find('.hid').show();
        }

        $('.hid').hide();

        $('.product select').on('change', function() {
            //  alert( this.value ); // or $(this).val()
            if($(this).val() == "subscription") {
                $(this).parents('.product').find('.hid').show();
            } else {
                $('.hid').hide();

            }
        })
    });
</script>
{{-- // subscription starting time--}}
<script>

    $(document).ready(function (){

        if( $('.products select option:selected').val() == "scheduled"){
            $(this).parents('.products').find('.hidd').show();
        }

        $('.hidd').hide();

        $('.products select').on('change', function() {
            //  alert( this.value ); // or $(this).val()
            if($(this).val() == "scheduled") {
                $(this).parents('.products').find('.hidd').show();
            } else {
                $('.hidd').hide();

            }
        })
    });
</script>
<script>
    $(document).ready(function (){


        if( $('.test select option:selected').val() == "date"){
            $(this).parents('.test').find('.ic').show();
        }


        $('.ic').hide();

        $('.test select').on('change', function() {
            //  alert( this.value ); // or $(this).val()
            if($(this).val() == "date") {
                $(this).parents('.test').find('.ic').show();
            } else {
                $('.ic').hide();

            }
        });

    // Select2 Commission
        var multipleCancelButton = new Choices('#choices-multiple-remove-button', {
            removeItemButton: true,
            maxItemCount:10,
            allowHTML: true,
            searchResultLimit:10,
            renderChoiceLimit:10
        });
    })

    // Quiz
    $(document).ready(function (){


        if( $('.result select option:selected').val() == "immediate"){
            $(this).parents('.result').find('.num').show();
        }


        $('.num').hide();

        $('.result select').on('change', function() {
            //  alert( this.value ); // or $(this).val()
            if($(this).val() == "immediate") {
                $(this).parents('.result').find('.num').show();
            } else {
                $('.num').hide();

            }
        });


    })
</script>
<script>




</script>
@yield('script')



{{--Question Adding--}}
{{--<script>--}}
{{--    $(document).ready(function() {--}}
{{--        $('.form-check-input').val('20');--}}
{{--        $(document).on('click','.form-check-input',function(){--}}
{{--        })--}}
{{--        var maxField = 10; //Input fields increment limitation--}}
{{--        var addButton = $('.add_data'); //Add button selector--}}
{{--        var wrapper = $('.record2'); //Input field wrapper--}}
{{--        var fieldHTML = jQuery('.record .multiple_data');--}}
{{--        var fieldHTML2 = '<a href="javascript:void(0);" class="remove_button btn btn-dark mx-1">Cancel</a>';--}}
{{--        var x = 1; //Initial field counter is 1--}}

{{--        //Once add button is clicked--}}
{{--        $(addButton).click(function(){--}}
{{--            //Check maximum number of input fields--}}
{{--            if(x < maxField){--}}
{{--                x++; //Increment field counter--}}
{{--                // $(wrapper).append(fieldHTML); //Add field html--}}
{{--                $(wrapper).append($(fieldHTML).clone());--}}
{{--            }--}}
{{--        });--}}
{{--        //Once remove button is clicked--}}
{{--        $(wrapper).on('click', '.remove_button', function(e){--}}
{{--            e.preventDefault();--}}
{{--            $(this).parents('.multiple_data' , ).remove(); //Remove field html--}}
{{--            x--; //Decrement field counter--}}
{{--        });--}}
{{--    });--}}
{{--</script>--}}
<script>
    // Getting Roles on Level id----------------------------------
    $('#level_id').change(function(){
        var lid = $(this).val();
        if(lid){
            $.ajax({
                type:"get",
                url:"{{url('/getrole')}}/"+lid,
                success:function(level)
                {
                    if(level)
                    {
                        $("#role_id").empty();
                        $("#role_id").append('<option selected disabled>Select Role</option>');
                        $.each(level,function(key,value){
                            $("#role_id").append('<option value="'+value.role_id+'">'+value.role.erp_work_flow_role+'</option>');
                        });
                    }
                }

            });
        }
    });
    // Getting Users on Role Id----------------------------------
    $('#role_id').change(function(){
        var rid = $(this).val();
        var lid = $('#level_id option:selected').val();
        if(rid){
            $.ajax({
                type:"post",
                data: {
                    "_token": "{{ csrf_token() }}",
                    lid:lid,
                    rid:rid,
                },

                url:"{{url('/getusers')}}/"+rid,

                success:function(users)
                {
                    if(users)
                    {
                        console.log(users)
                        $("#users_id").empty();
                        $("#users_id").append('<option selected disabled>Select Worker</option>');
                        $.each(users,function(key,value){
                            $("#users_id").append('<option value="'+value.user_id+'">'+value.user.name+'</option>');
                        });
                    }
                }

            });
        }
    });
    // Getting Quiz on Type of Quiz (login/signup)----------------------------------
    $('#quiz_type').change(function(){
        var quiz_type = $(this).val();
        // var lid = $('#level_id option:selected').val();
        if(quiz_type){
            $.ajax({
                type:"post",
                data: {
                    "_token": "{{ csrf_token() }}",
                    // lid:lid,
                    quiz_type:quiz_type,
                },

                url:"{{url('/getquiz')}}",

                success:function(quiz)
                {
                    if(quiz)
                    {
                        console.log(quiz)
                        $("#quizzes").empty();
                        $("#quizzes").append('<option selected disabled>Select Quiz</option>');
                        $.each(quiz,function(key,value){
                            $("#quizzes").append('<option value="'+value.id+'">'+value.erp_quiz_name+'</option>');
                        });
                    }
                }

            });
        }
    });



</script>
<script  src="//cdn.datatables.net/1.11.2/js/jquery.dataTables.min.js"></script>
{{--Text editor--}}
<script src="https://cdn.tiny.cloud/1/gkvyt9df3d1o1tzdwtfp9rz10d1i3uu54lylmdwadcdcbx9d/tinymce/4/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: '.ckeditor',

        image_class_list: [
            {title: 'img-responsive', value: 'img-responsive'},
        ],
        height: 200,
        setup: function (editor) {
            editor.on('init change', function () {
                editor.save();
            });
        },
        plugins: [
            "advlist autolink lists link image charmap print preview anchor",
            "searchreplace visualblocks code fullscreen",
            "insertdatetime media table contextmenu paste imagetools"
        ],
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image ",

        image_title: true,
        automatic_uploads: true,
        images_upload_url: '{{ url("/upload") }}',
        file_picker_types: 'image',
        file_picker_callback: function(cb, value, meta) {
            var input = document.createElement('input');
            input.setAttribute('type', 'file');
            input.setAttribute('accept', 'image/*');
            input.onchange = function() {
                var file = this.files[0];

                var reader = new FileReader();
                reader.readAsDataURL(file);
                reader.onload = function () {
                    var id = 'blog' + (new Date()).getTime();
                    var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
                    var base64 = reader.result.split(',')[1];
                    var blobInfo = blobCache.create(id, file, base64);
                    blobCache.add(blobInfo);
                    cb(blobInfo.blobUri(), { title: file.name });
                };
            };
            input.click();
        }
    });
    // setTimeout(function (){
    //     $('.ckeditor').show();
    // }, 5000);

</script>
<script>
    $(document).ready(function () {
        $('.question_checkbox').css('display','none');
        $('.file_upload').css('display','none');
        $('.comment_box').css('display','none');
        $(document).on('change','#erp_quiz_type',function(){
            if($(this).val() == 'check_boxes'){
                $('.question_checkbox').css('display','block');
                $('.file_upload').css('display','none');
                $('.comment_box').css('display','none');
            }
            else if($(this).val() == 'file_upload'){
                $('.file_upload').css('display','block');
                $('.question_checkbox').css('display','none');
                $('.comment_box').css('display','none');
            }
            else if($(this).val() == 'comment_box'){
                $('.comment_box').css('display','block');
                $('.question_checkbox').css('display','none');
                $('.file_upload').css('display','none');
            }else{
                $('.question_checkbox').css('display','none');
                $('.file_upload').css('display','none');
                $('.comment_box').css('display','none');
            }
        });
    });
</script>

{{--Question Checkbox Adding--}}
<script>
    $(document).ready(function() {
        $('.form-check-input').val('20');
        $(document).on('click','.form-check-input',function(){
            if($(this).is(':checked')){
                $(this).val('1');
            }else{
                $(this).val('0');
            }
        })
        $(".bc").each(function(){
            if($(this).parents('.form-line').find('select').val() == "text") {
                $(this).show();
            }
            else if($(this).parents('.form-line').find('select').val() == "file"){
                $(this).show();
            }
            else {
                $(this).hide();
            }
        });

        var maxField = 10; //Input fields increment limitation
        var addButton = $('.add_button'); //Add button selector
        var wrapper = $('.ajeeb2'); //Input field wrapper
        var fieldHTML = jQuery('.multinone .multiple_branches');
        var fieldHTML2 = '<a href="javascript:void(0);" class="remove_button btn btn-dark mx-1">Cancel</a>';
        var x = 1; //Initial field counter is 1

        //Once add button is clicked
        $(addButton).click(function(){
            //Check maximum number of input fields
            if(x < maxField){
                x++; //Increment field counter
                // $(wrapper).append(fieldHTML); //Add field html
                $(wrapper).append($(fieldHTML).clone());
            }
        });
        //Once remove button is clicked
        $(wrapper).on('click', '.remove_button', function(e){
            e.preventDefault();
            $(this).parents('.multiple_branches' , ).remove(); //Remove field html
            x--; //Decrement field counter
        });
    });







    var multipleCancelButton = new Choices('#choices-multiple-remove-button', {
        removeItemButton: true,
        maxItemCount:10,
        allowHTML: true,
        searchResultLimit:10,
        renderChoiceLimit:10
    });

    // ye wali team ki field ki hai //

    // function formValidator() {
    //     // let y =
    //     let x = $(".choices");
    //     $(x).each(function() {
    //         if(x.val() === '' && x.val() !== null){
    //             // x.css("border","solid 1px red");
    //             // x.focus();
    //             x.parent().find(".req").toggle();
    //             console.log("if");
    //             return false;
    //         }else{
    //             document.getElementById("create_order").submit();
    //             // console.log("rage");
    //         }
    //     });
    //
    // }

</script>

<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
{{--<script>--}}

{{--    $(document).ready(function () {--}}
{{--        $('#createOrder').validate();--}}

{{--    });--}}
{{--</script>--}}





<script>
    $(document).ready(function () {
        var validator = $("#createOrder").submit(function() {
            // update underlying textarea before submit validation
            tinymce.triggerSave();

        }).validate({

            ignore: '',
            rules: {
                erp_subject_name: "required",
                erp_order_message: "required",
                erp_order_topic: "required",
                erp_academic_name: "required",
                erp_paper_type: "required",
                erp_paper_format: "required",
                erp_language_name: "required",
                erpnone: "required",
                erp_resource_materials: "required",
                //erp_resource_file: "required",
                erp_number_Pages: "required",
                erp_spacing: "required",
                erp_powerPoint_slides: "required",
                erp_extra_source: "required",
                erp_deadline: "required",
                erp_copy_sources: "required",
                erp_page_summary: "required",
                erp_paper_outline: "required",
                erp_abstract_page: "required",
                erp_statistical_analysis: "required"
            },
            errorPlacement: function(label, element) {
                console.log(element);
                // position error label after generated textarea
                if (element.is("textarea")) {
                    label.insertAfter(element.next());
                } else {
                    label.insertAfter(element)
                }
            }
        });
        // validator.focusInvalid = function() {
        //     // put focus on tinymce on submit validation
        //     if (this.settings.focusInvalid) {
        //         try {
        //             var toFocus = $(this.findLastActive() || this.errorList.length && this.errorList[0].element || []);
        //             if (toFocus.is("textarea")) {
        //                 tinyMCE.get(toFocus.attr("id")).focus();
        //             } else {
        //                 toFocus.filter(":visible").focus();
        //             }
        //         } catch (e) {
        //             // ignore IE throwing errors when focusing hidden elements
        //         }
        //     }
        // }
    });




    $(document).on('change','.team',function(){
        if($(this).val().length != 0){
            console.log('wow');
            $('.wowinput').val('wow');
        }else{
            console.log('no wow');
            $('.wowinput').val('');
        }

    })
      /*  $('#createOrder').validate({

            rules: {
                // erp_order_message: {
                //     required: true
                // },

            },
            errorElement: 'span',
            errorPlacement: function (error, element) {

                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight: function (element, errorClass, validClass) {
                $(element).addClass('is-invalid');
                console.log('highlight');
                console.log(element);
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).removeClass('is-invalid');
                console.log('unhighlight');
                console.log(element);
            }
        });    });*/





    $('.waves-effect').on('click', function() {
        if ($('#erp_order_message').val() == '') {
            $(this).parents('.form-group').append('oye fill it');
        }
    });

</script>

<script>
    $(document).ready(function() {
        $('.dc').hide();
        $('.form-group select').on('change', function () {
            // console.log( this.value );
            if ($(this).val() == "other") {

                $(this).parents('.form-group').find('.dc').show();
                $(this).parents('.form-group').find('.other_input').attr('required',true);
                // $(this).parents('.form-line').find('.other_input').addClass('choices');
            } else {

                $(this).parents('.form-group').find('.dc').hide();
                $(this).parents('.form-group').find('.other_input').removeAttr('required');
                // $(this).parents('.form-line').find('.other_input').removeClass('choices');


            }


        });

        $('.form-line select').trigger('change');

    });


    $('.dte').hide();
    $('.test select').on('change', function () {
        //  alert( this.value ); // or $(this).val()
        if ($(this).val() == "erp_date") {
            $(this).parents('.test').find('.dte').show();
        } else {
            $('.dte').hide();
        }
        $('.form-line select').trigger();

    });



</script>

<script>


    $(document).ready(function() {
        $('.form-check-input').val('20');
        $(document).on('click','.form-check-input',function(){
        })
        var maxField = 10; //Input fields increment limitation
        var addButton = $('.add_datas'); //Add button selector
        var wrapper = $('.source2'); //Input field wrapper
        var fieldHTML = jQuery('.source .multiple_data');
        var fieldHTML2 = '<a href="javascript:void(0);" class="remove_button btn btn-dark mx-1">Cancel</a>';
        var x = 1; //Initial field counter is 1

        //Once add button is clicked
        $(addButton).click(function(){
            //Check maximum number of input fields
            if(x < maxField){
                x++; //Increment field counter
                // $(wrapper).append(fieldHTML); //Add field html
                $(wrapper).append($(fieldHTML).clone());
            }
        });
        //Once remove button is clicked
        $(wrapper).on('click', '.remove_button', function(e){
            e.preventDefault();
            $(this).parents('.multiple_data' , ).remove(); //Remove field html
            x--; //Decrement field counter
        });
    });
</script>
<script>
    $('#commission_id').change(function(){
        var cid = $(this).val();
//        console.log(cid)
        if(cid){
            $.ajax({
                type:"post",
                data: {
                    "_token": "{{ csrf_token() }}",
                    cid:cid,
                },

                url:"{{url('/getcommission')}}/"+cid,

                success:function(users)
                {
                    if(users)
                    {
                        // console.log(users)
                        $("#users_id").empty();
                        $("#users_id").append('<option selected disabled value="">Select Worker</option>');
                        $.each(users,function(key,value){
                            $("#users_id").append('<option value="'+value.user_id+'">'+value.user.name+'</option>');
                        });
                    }
                }

            });
        }
    });
</script>
<script>
    $(function() {
        var filter = $('#logs');
        filter.on('change', function() {
            if (this.selectedIndex) return; //not `Select All`
            filter.find('option:gt(0)').prop('selected', true);
            filter.find('option').eq(0).prop('selected', false);
        });
    });
</script>

@yield('script')
</body>
</html>
