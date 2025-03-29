@extends('custom_layout.master')
@section('main_content')
    <div class="container mt-4">
        <h1 class="text-white">Add Order File</h1>
        
        <!-- Display Validation Errors -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('file_chat_gpts.store') }}" method="POST" enctype="multipart/form-data" class="mt-4">
            @csrf

            <div class="form-group mb-3">
                <label for="file_name" class="text-white">File Name</label>
                <input type="text" name="file_name" id="file_name" class="form-control @error('file_name') is-invalid @enderror" placeholder="Enter File Name" value="{{ old('file_name') }}" required>
                @error('file_name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="title" class="text-white">Title</label>
                <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" placeholder="Enter Title" value="{{ old('title') }}">
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="orders_id" class="text-white">Order Number</label>
                <select name="order_id" id="orders_id" class="form-control select2 @error('order_id') is-invalid @enderror" required>
                    <option value="" selected disabled>Select Order Numbers</option>
                    @foreach ($Orders as $o)
                        <option value="{{ $o->order_id }}" {{ old('order_id') == $o->id ? 'selected' : '' }}>{{ $o->order_id }}</option>
                    @endforeach
                </select>
                
                @error('orders_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="file" class="text-white">Upload File</label>
                <input type="file" name="file" id="file" class="form-control @error('file') is-invalid @enderror" required>
                @error('file')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="status" class="text-white">Status</label>
                <select name="status" id="status" class="form-control">
                    <option value="1" {{ old('status') == 1 ? 'selected' : '' }}>Active</option>
                    <option value="0" {{ old('status') == 0 ? 'selected' : '' }}>Inactive</option>
                </select>
            </div>

            <button type="submit" class="btn btn-sm btn-primary">Save File</button>
        </form>
    </div>
@endsection

@section('scripts')
    <!-- Include Select2 JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            // Initialize Select2 on the order number dropdown
            $('#orders_id').select2({
                placeholder: 'Search Order Numbers',
                allowClear: true,
            });
        });
    </script>
@endsection

@section('styles')
    <!-- Include Select2 CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0/css/select2.min.css" rel="stylesheet">
@endsection
