@extends('custom_layout.master')
@section('styles')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0/css/select2.min.css" rel="stylesheet">
@endsection
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
                <label for="orders_id" class="text-white">Order Number</label>
                <select name="order_id" id="orders_id" class="form-control select2 @error('order_id') is-invalid @enderror" required>
                    <option value="" selected disabled>Select Order Number</option>
                    @foreach ($Orders as $o)
                        <option value="{{ $o->order_id }}" {{ old('order_id') == $o->order_id ? 'selected' : '' }}>{{ $o->order_id }}</option>
                    @endforeach
                </select>
                @error('order_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        
            @for ($i = 0; $i < 5; $i++)
                <div class="border p-3 mb-3 rounded bg-dark">
                    <h6 class="text-white">File {{ $i + 1 }}</h6>
        
                    <div class="form-group mb-2">
                        <label class="text-white">Title</label>
                        <input type="text" name="title[]" class="form-control" placeholder="Enter Title">
                    </div>
        
                    <div class="form-group mb-2">
                        <label class="text-white">File</label>
                        <input type="file" name="file[]" class="form-control">
                    </div>
                </div>
            @endfor
        
            <div class="form-group mb-3">
                <label for="status" class="text-white">Status</label>
                <select name="status" id="status" class="form-control">
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>
                </select>
            </div>
        
            <button type="submit" class="btn btn-sm btn-primary">Save Files</button>
        </form>
        
    </div>
@endsection


<!-- SCRIPTS -->
@section('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- ✅ jQuery FIRST -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0/js/select2.min.js"></script> <!-- ✅ Select2 -->
    <script>
        $(document).ready(function() {
            $('#orders_id').select2({
                placeholder: 'Search Order Numbers',
                allowClear: true,
                width: '100%'
            });
        });
    </script>
@endsection

@section('styles')
    <!-- Include Select2 CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0/css/select2.min.css" rel="stylesheet">
@endsection
