@extends('custom_layout.master')
@section('main_content')
<div class="container">
    <h2 style="color: white">Edit Campaign</h2>

    <form action="{{ route('admin.campaigns.update', $campaign->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="subject" style="color: white" class="form-label">Email Subject</label>
            <input type="text" class="form-control" name="subject" id="subject" value="{{ $campaign->subject }}" required>
        </div>

        <div class="mb-3">
            <label for="content" style="color: white" class="form-label">Email Content</label>
            <textarea class="form-control" name="content" id="content" rows="5" required>{{ $campaign->content }}</textarea>
        </div>

        <div class="mb-3">
            <label for="start_time" style="color: white" class="form-label">Start Time</label>
            <input type="datetime-local" class="form-control" name="start_time" id="start_time"
                   value="{{ \Carbon\Carbon::parse($campaign->start_time)->format('Y-m-d\TH:i') }}" required>
        </div>

        <div class="mb-3">
            <label for="emails" style="color: white" class="form-label">Upload New Email List (Optional)</label>
            <input type="file" class="form-control" name="emails" id="emails">
            <small class="text-muted">Leave empty to keep existing emails.</small>
        </div>

        <button type="submit" class="btn btn-primary">Update Campaign</button>
        <a href="{{ route('admin.campaigns.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
