@if($files->file_name == null)
    <img src="https://cdn.icon-icons.com/icons2/2570/PNG/512/image_icon_153794.png" width="50" height="50" alt="">
@else
    @php
        $fileExtension = pathinfo($files->file_name, PATHINFO_EXTENSION);
    @endphp

    @if(in_array($fileExtension, ['jpg', 'jpeg', 'png', 'gif']))
        {{-- Display image --}}
        <img src="{{ asset('storage/uploads_folders/'.$folder_name.'/'. $files->file_name) }}" width="100px" alt="Image">

        <div class="menu-item px-3">
            <a href="{{ route('customer.files.download', ['id' => $files->id,'folder_name'=>$folder_name]) }}" class="menu-link px-3 text-center">Download File</a>
        </div>

        
    @elseif(in_array($fileExtension, ['mp4', 'avi', 'mkv']))
        {{-- Display video --}}
        <video width="100" height="100" controls>
            <source src="{{ asset('storage/uploads_folders/'.$folder_name.'/'. $files->file_name) }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>


    @elseif(in_array($fileExtension, ['pdf']))
        {{-- Display PDF --}}
        <!--<iframe src="{{ asset('storage/uploads_folders/'.$folder_name.'/'. $files->file_name) }}" width="100%" height="100%"></iframe>-->

        <div class="menu-item px-3">
            <a href="{{ route('customer.files.download', ['id' => $files->id,'folder_name'=>$folder_name]) }}" class="menu-link px-3 text-center">Download File</a>
        </div>

    @elseif(in_array($fileExtension, ['doc', 'docx']))
        {{-- Display Word document --}}
        <!--<iframe src="{{ asset('storage/uploads_folders/'.$folder_name.'/'. $files->file_name) }}" width="100%" height="500px"></iframe>-->
        <div class="menu-item px-3">
            <a href="{{ route('customer.files.download', ['id' => $files->id,'folder_name'=>$folder_name]) }}" class="menu-link px-3 text-center">Download File</a>
        </div>
    @else
        {{-- Unknown file type --}}
        <p>File type not supported</p>
    @endif
@endif




<!--Old code-->
<!--@if($files->file_name == null)-->
<!--    <img src="https://cdn.icon-icons.com/icons2/2570/PNG/512/image_icon_153794.png" width="50" height="50" alt="">-->
<!--@else-->
<!--    @php-->
<!--        $fileExtension = pathinfo($files->file_name, PATHINFO_EXTENSION);-->
<!--    @endphp-->

<!--    @if(in_array($fileExtension, ['jpg', 'jpeg', 'png', 'gif']))-->
<!--        {{-- Display image --}}-->
<!--        <img src="{{ asset('storage/uploads_folders/'.$folder_name.'/'. $files->file_name) }}" width="100px" alt="Image">-->
<!--    @elseif(in_array($fileExtension, ['mp4', 'avi', 'mkv']))-->
<!--        {{-- Display video --}}-->
<!--        <video width="100" height="100" controls>-->
<!--            <source src="{{ asset('storage/uploads_folders/'.$folder_name.'/'. $files->file_name) }}" type="video/mp4">-->
<!--            Your browser does not support the video tag.-->
<!--        </video>-->
<!--    @elseif(in_array($fileExtension, ['pdf']))-->
<!--        {{-- Display PDF --}}-->
<!--        <iframe src="{{ asset('storage/uploads_folders/'.$folder_name.'/'. $files->file_name) }}" width="100%" height="100%"></iframe>-->
<!--    @elseif(in_array($fileExtension, ['doc', 'docx']))-->
<!--        {{-- Display Word document --}}-->
<!--        <iframe src="{{ asset('storage/uploads_folders/'.$folder_name.'/'. $files->file_name) }}" width="100%" height="500px"></iframe>-->


<!--    @else-->
<!--        {{-- Unknown file type --}}-->
<!--        <p>File type not supported</p>-->
<!--    @endif-->
<!--@endif-->
