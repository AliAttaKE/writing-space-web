@extends('custom_layout.master')
@section('main_content')
<div class="container">
    <h2 style="color: white">Create New Campaign</h2>

    <form action="{{ route('admin.campaigns.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div id="campaign-fields">
            <div class="campaign-group p-3 border rounded bg-dark text-white position-relative">
                <div class="mb-3">
                    <label for="subject" class="form-label"  style="color: white">Email Subject</label>
                    <input type="text" class="form-control" name="subject[]" required>
                </div>

                <div class="mb-3">
                    <label for="content" class="form-label"  style="color: white">Email Content</label>
                    <textarea class="form-control" name="content[]" rows="5" required></textarea>
                </div>

                <div class="mb-3">
                    <label for="start_time" class="form-label"  style="color: white">Start Time</label>
                    <input type="datetime-local" class="form-control" name="start_time[]" required>
                </div>
                <button type="button" class="btn btn-danger remove-btn position-absolute top-0 end-0 m-2">×</button>
            </div>
        </div>

        <button type="button" class="btn btn-primary mt-3" id="add-more">Add More</button>
        <br><br>
        
        <div class="mb-3">
            <label for="emails" class="form-label"  style="color: white">Upload Email List (CSV or Excel)</label>
            <input type="file" class="form-control" name="emails" required>
        </div>

        <button type="submit" class="btn btn-success">Create Campaign</button>
        <a href="{{ route('admin.campaigns.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>

<script>
    document.getElementById('add-more').addEventListener('click', function () {
        let container = document.getElementById('campaign-fields');
        let newFields = document.createElement('div');
        newFields.classList.add('campaign-group', 'p-3', 'border', 'rounded', 'bg-dark', 'text-white', 'position-relative', 'mt-3');
        newFields.innerHTML = `
            <div class="mb-3">
                <label class="form-label"  style="color: white">Email Subject</label>
                <input type="text" class="form-control" name="subject[]" required>
            </div>

            <div class="mb-3">
                <label class="form-label"  style="color: white">Email Content</label>
                <textarea class="form-control" name="content[]" rows="5" required></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label"  style="color: white">Start Time</label>
                <input type="datetime-local" class="form-control" name="start_time[]" required>
            </div>
            <button type="button" class="btn btn-danger remove-btn position-absolute top-0 end-0 m-2">×</button>
        `;
        container.appendChild(newFields);
    });

    document.addEventListener('click', function (e) {
        if (e.target && e.target.classList.contains('remove-btn')) {
            e.target.parentElement.remove();
        }
    });
</script>
@endsection
