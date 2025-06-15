@extends('custom_layout.master')
@section('main_content')

<div class="container">
    <h2 style="
    color: white;
">Add New Revision</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.revisions.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="days" class="form-label" style="
    color: white;
">Days</label>
            <input type="number" name="days" class="form-control" value="{{ old('days') }}" required>
        </div>

        <div class="mb-3">
            <label for="hours" class="form-label" style="
    color: white;
">Hours</label>
            <input type="number" name="hours" class="form-control" value="{{ old('hours') }}" required>
        </div>

        <button type="submit" class="btn btn-success">Create</button>
        <a href="{{ route('admin.revisions.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection
