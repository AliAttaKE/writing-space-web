<!-- Plugins Js -->
<script src="{{asset('management/js/form.min.js')}}"></script>
<script src="{{asset('management/js/app.min.js')}}"></script>
<!-- Custom Js -->

<script src="{{asset('management/js/admin.js')}}"></script>
<script src="{{asset('management/js/pages/index.js')}}"></script>
<script src="{{asset('management/js/pages/sparkline/sparkline-data.js')}}"></script>
<script src="{{asset('management/js/pages/medias/carousel.js')}}"></script>
{{--Text editor--}}
<script src="https://cdn.tiny.cloud/1/4j9bq6sx1bfvu1ttvrzaiuyh0vum4x410pyov0w8w46sv6cf/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js" referrerpolicy="origin"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/29.2.0/classic/ckeditor.js"></script>


<script>
    $(document).ready( function () {
        $('#myTable').DataTable();
        $('#myTable2').DataTable();
        $('#myTable3').DataTable();
        $('#myTable4').DataTable();

    } );
</script>
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

    const hid = document.querySelector('#hid')
    const divlist= document.querySelector('.listholder')

    hid.addEventListener('click', () =>)
    if (divlist.style.display=== 'none'){
        divlist.style.display = 'blokc';
    }
    else {
        divlist.style.display = 'none';
    }
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

{{--Deadline Extension Request--}}
<script>
    $('#deadline').change(function(){
        var did = $(this).val();
        var orderid =$('#order_id').val();
        console.log(did,orderid)
        if(did){
            $.ajax({
                type:"post",
                data: {
                    "_token": "{{ csrf_token() }}",
                    did:did,
                    orderid:orderid,
                },

                url:"{{url('/deadlineext')}}",

                success:function(data)
                {
                    if(data)
                    {
                        console.log(data)
                        $("#datetimeext").empty();
                        // $("#datetimeext").append('<option selected disabled value="">Select Worker</option>');
                        $.each(data,function(key,value){
                            $("#datetimeext").append('<option value="'+value+'">'+value+'</option>');
                        });
                    }
                }

            });
        }
    });




</script>




</body>
</html>
