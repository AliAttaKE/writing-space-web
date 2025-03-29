@extends('custom_layout.master')
@section('main_content')


<style>
    .color_set{
        color: white;
    }
</style>
    <h1 class="color_set">Create CMS Page</h1>
    <form action="{{ route('admin.cms_pages.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="title" class="color_set">Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="slug" class="color_set">Slug</label>
            <input type="text" name="slug" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="heading_one" class="color_set">Heading One</label>
            <input type="text" name="heading_one" class="form-control">
        </div>
        <div class="form-group">
            <label for="heading_two" class="color_set">Heading Two</label>
            <input type="text" name="heading_two" class="form-control">
        </div>

        <div class="form-group">
            <label for="content_one" class="color_set">Content One</label>
            <textarea name="content_one" class="form-control" rows="3"></textarea>
        </div>

       

        {{-- <div class="form-group">
            <label for="content_two" class="color_set">Content Two</label>
            <textarea name="content_two" class="form-control" rows="3"></textarea>
        </div> --}}

        <div class="form-group">
            <label for="heading_three" class="color_set">Heading Three</label>
            <input type="text" name="heading_three" class="form-control">
        </div>

        <div class="form-group">
            <label for="heading_four" class="color_set">Heading Four</label>
            <input type="text" name="heading_four" class="form-control">
        </div>

        <div class="form-group">
            <label for="content_three" class="color_set">Content Three</label>
            <textarea name="content_three" class="form-control" rows="3"></textarea>
        </div>

      

        {{-- <div class="form-group">
            <label for="content_four" class="color_set">Content Four</label>
            <textarea name="content_four" class="form-control" rows="3"></textarea>
        </div> --}}

        <div class="form-group">
            <label for="status" class="color_set">Status</label>
            <select name="status" class="form-control">
                <option value="1">Active</option>
                <option value="0">Inactive</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success">Create</button>
    </form>
@endsection
