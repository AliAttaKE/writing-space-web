@extends('custom_layout.master')

@section('main_content')
    <div class="container py-4">
        <h1 class="mb-4 text-white" style="color: white">CMS Pages</h1>
        
        <!-- Create New Page Button -->
        <div class="d-flex justify-content-end mb-3">
            <a href="{{ route('admin.cms_pages.create') }}" class="btn btn-primary mb-3">Create New Page</a>

        </div>

        <!-- CMS Pages Table -->
        @if ($cmsPages->count() > 0)
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="text-white" >
                        <tr class="text-center" >
                            <th style="color: white">#</th>
                            <th style="color: white">Title</th>
                            <th style="color: white">Slug</th>
                            <th style="color: white">Status</th>
                            <th style="color: white">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cmsPages as $key => $page)
                            <tr>
                                <td class="text-center" style="color: white">{{ $loop->iteration }}</td>
                                <td style="color: white">{{ $page->title }}</td>
                                <td style="color: white">{{ $page->slug }}</td>
                                <td  class="text-center">
                                    <span class="badge {{ $page->status ? 'bg-success' : 'bg-danger' }}">
                                        {{ $page->status ? 'Active' : 'Inactive' }}
                                    </span>
                                </td>
                                <td class="text-center">
                                    <!-- Edit Button -->
                                    <a href="{{ route('admin.cms_pages.edit', $page->id) }}" class="btn btn-warning">Edit</a>

                                    
                                    <!-- Delete Form -->
                                    <form action="{{ route('admin.cms_pages.destroy', $page->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger">Delete</button>
                                    </form>
                                    
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Pagination Links -->
            <div class="d-flex justify-content-center">
                {{-- {{ $cmsPages->links('pagination::bootstrap-5') }} --}}
            </div>
        @else
            <!-- No Data Message -->
            <div class="alert alert-info text-center">
                <p>No CMS pages found. <a href="{{ route('admin.cms_pages.create') }}">Create a new page</a>.</p>
            </div>
        @endif
    </div>
@endsection
