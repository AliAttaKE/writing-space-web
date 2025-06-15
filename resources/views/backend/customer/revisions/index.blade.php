@extends('custom_layout.master')
@section('main_content')

<div class="container">
    <h2 style="
    color: white;" >Revisions</h2>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    {{-- <a href="{{ route('admin.revisions.create') }}" class="btn btn-primary mb-3">Add New Revision</a> --}}

    <table class="table table-bordered">
        <thead>
            <tr >
                <th style="
    color: white;
">ID</th>
                <th style="
    color: white;
">Days</th>
                <th style="
    color: white;
">Hours</th>
                <th style="
    color: white;
">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($revisions as $revision)
                <tr>
                    <td style="
    color: white;
">{{ $revision->id }}</td>
                    <td style="
    color: white;
">{{ $revision->days }}</td>
                    <td style="
    color: white;
">{{ $revision->hours }}</td>
                    <td style="
    color: white;
">
                        <a href="{{ route('admin.revisions.edit', $revision->id) }}" class="btn btn-sm btn-warning">Edit</a>

                        <form action="{{ route('admin.revisions.destroy', $revision->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach

            @if ($revisions->isEmpty())
                <tr >
                    <td colspan="4" class="text-center" style="
    color: white;
">No revisions found.</td>
                </tr>
            @endif
        </tbody>
    </table>
</div>


@endsection