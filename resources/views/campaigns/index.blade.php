@extends('custom_layout.master')
@section('main_content')
<style>
   .textcolor{
    color: white;
   } 
</style>
<div class="container">
    <h2 style="color: white">Email Campaigns</h2>
    <a style="
    float: right;
" href="{{ route('admin.campaigns.create') }}" class="btn btn-primary mb-3">Create Campaign</a>
    
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    
    <table class="table">
        <thead>
            <tr>
                <th style="color: white">Subject</th>
                <th style="color: white">Send At</th>
                <th style="color: white">Status</th>
                <th style="color: white">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($campaigns as $campaign)
            <tr>
                <td style="color: white">{{ $campaign->subject }}</td>
                <td style="color: white">{{ $campaign->start_time }}</td>
                <td style="color: white">{{ ucfirst($campaign->status) }}</td>
                <td style="color: white">
                    <a href="{{ route('admin.campaigns.edit', $campaign->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('admin.campaigns.destroy', $campaign->id) }}" method="POST" style="display:inline;">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>



<script>
    function confirmDelete(id) {
        if (confirm('Are you sure you want to delete this campaign?')) {
            document.getElementById('delete-form-' + id).submit();
        }
    }
</script>

{{-- <form id="delete-form-{{ $campaign->id }}" action="{{ route('campaigns.destroy', $campaign->id) }}" method="POST" style="display:none;">
    @csrf @method('DELETE')
</form> --}}

@endsection
