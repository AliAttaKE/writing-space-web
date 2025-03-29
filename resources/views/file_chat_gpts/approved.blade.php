@extends('custom_layout.customer')
@section('main_content')

<style>
    .textcolor{
        color:white
    }
</style>
    <div class="container mt-4">
        <h1 class="text-white">Order Files</h1>

        @if ($approvedFiles->isEmpty())
            <div class="alert alert-info text-white" style="color:black !important">No approved files available at the moment.</div>
        @else
            <div class="table-responsive">
                <table class="table table-bordered text-white">
                    <thead>
                        <tr>
                            <th style="color: white">#</th>
                            <th style="color: white">Order ID</th>
                            <th style="color: white">File Name</th>
                            <th style="color: white">Title</th>
                            
                          
                            <th style="color: white">File Type</th>
                            <th style="color: white">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($approvedFiles as $index => $file)
                            <tr>
                                <td style="color: white">{{ $index + 1 }}</td>
                                <td style="color: white">{{ $file->order_id }}</td>
                                <td style="color: white">{{ $file->file_name }}</td>
                                <td style="color: white">{{ $file->title ?? 'N/A' }}</td>
                                
                              
                                <td style="color: white">{{ $file->file_type }}</td>
                                <td style="color: white">
                                    <a href="{{ Storage::url($file->file_path) }}" class="btn btn-sm btn-info" target="_blank">View</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
@endsection
