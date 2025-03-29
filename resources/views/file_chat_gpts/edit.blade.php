@extends('custom_layout.master')
@section('main_content')
    <h1>Edit File</h1>
    <form action="{{ route('file_chat_gpts.update', $fileChatGPT->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="file_name">File Name</label>
            <input type="text" name="file_name" id="file_name" class="form-control" value="{{ $fileChatGPT->file_name }}" required>
        </div>
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $fileChatGPT->title }}">
        </div>
        <div class="form-group">
            <label for="file">File</label>
            <input type="file" name="file" id="file" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
@endsection
