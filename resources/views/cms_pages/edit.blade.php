@extends('custom_layout.master')
@section('main_content')

<style>
    .color_set{
        color: white;
    }
</style>
    <h1 class="color_set">Edit CMS Page</h1>
    <form action="{{ route('admin.cms_pages.update', $cmsPage->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title" class="color_set">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $cmsPage->title) }}" required>
        </div>

        <div class="form-group">
            <label for="slug" class="color_set">Slug</label>
            <input type="text" name="slug" id="slug" class="form-control" value="{{ old('slug', $cmsPage->slug) }}" required>
        </div>

        <div class="form-group">
            <label for="heading_one" class="color_set">Heading One</label>
            <input type="text" name="heading_one" id="heading_one" class="form-control" value="{{ old('heading_one', $cmsPage->heading_one) }}">
        </div>

        <div class="form-group">
            <label for="heading_two" class="color_set">Heading Two</label>
            <input type="text" name="heading_two" id="heading_two" class="form-control" value="{{ old('heading_two', $cmsPage->heading_two) }}">
        </div>

        <div class="form-group">
            <label for="content_one" class="color_set">Content One</label>
            <textarea name="content_one" id="content_one" class="form-control">{{ old('content_one', $cmsPage->content_one) }}</textarea>
        </div>

       

        {{-- <div class="form-group">
            <label for="content_two">Content Two</label>
            <textarea name="content_two" id="content_two" class="form-control">{{ old('content_two', $cmsPage->content_two) }}</textarea>
        </div> --}}

        <div class="form-group">
            <label for="heading_three" class="color_set">Heading Three</label>
            <input type="text" name="heading_three" id="heading_three" class="form-control" value="{{ old('heading_three', $cmsPage->heading_three) }}">
        </div>

        <div class="form-group">
            <label for="heading_four" class="color_set">Heading Four</label>
            <input type="text" name="heading_four" id="heading_four" class="form-control" value="{{ old('heading_four', $cmsPage->heading_four) }}">
        </div>
        <div class="form-group">
            <label for="content_three" class="color_set">Content Three</label>
            <textarea name="content_three" id="content_three" class="form-control">{{ old('content_three', $cmsPage->content_three) }}</textarea>
        </div>

       

        {{-- <div class="form-group">
            <label for="content_four">Content Four</label>
            <textarea name="content_four" id="content_four" class="form-control">{{ old('content_four', $cmsPage->content_four) }}</textarea>
        </div> --}}

        <div class="form-group">
            <label for="status" class="color_set">Status</label>
            <select name="status" id="status" class="form-control">
                <option value="1" {{ old('status', $cmsPage->status) == 1 ? 'selected' : '' }}>Active</option>
                <option value="0" {{ old('status', $cmsPage->status) == 0 ? 'selected' : '' }}>Inactive</option>
            </select>
        </div>
        <br>

        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('admin.cms_pages.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection
