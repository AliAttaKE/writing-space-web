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
{{--<script  src="{{asset('management/js/jquery.dataTables.min.js')}}"></script>--}}
<script src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/29.2.0/classic/ckeditor.js"></script>



<script>

    $(document).ready( function () {
        $('#myTable').DataTable();
        $('#myTable2').DataTable();
        $('#myTable3').DataTable();
        $('#myTable4').DataTable();
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

<script>


    $(document).ready(function() {
        $('.form-check-input').val('20');
        $(document).on('click','.form-check-input',function(){
        })
        var maxField = 10; //Input fields increment limitation
        var addButton = $('.add_data'); //Add button selector
        var wrapper = $('.record2'); //Input field wrapper
        var fieldHTML = jQuery('.record .multiple_data');
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
<script src="https://cdn.tiny.cloud/1/4j9bq6sx1bfvu1ttvrzaiuyh0vum4x410pyov0w8w46sv6cf/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
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
        searchResultLimit:10,
        renderChoiceLimit:10
    });
    });

</script>
<script>
    $(document).ready(function() {
        $('.dc').hide();
        $('.form-line select').on('change', function () {
            //  alert( this.value ); // or $(this).val()
            if ($(this).val() == "other") {
                $(this).parents('.form-line').find('.dc').show();
                $(this).parents('.form-line').find('.other_input').attr('required',true);
            } else {

                $(this).parents('.form-line').find('.dc').hide();
                $(this).parents('.form-line').find('.other_input').removeAttr('required');

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
        console.log(cid)
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
                        console.log(users)
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
</body>
</html>
