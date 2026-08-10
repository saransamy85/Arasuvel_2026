@extends('admin.layouts.app')

@section('title', 'Media List')
@section('page-title', 'Media List')

@section('content')

<div class="card shadow-sm border-0">
    <div class="card-header bg-white d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Media Library</h5>
        <a href="{{ route('mediapage') }}" class="btn btn-primary btn-sm">
            <i class="fa-solid fa-plus"></i> Upload New
        </a>
    </div>

    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover mb-0 align-middle">
                <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Status</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($mediaList as $media)
                    <tr>
                        <td>{{ $media->id }}</td>
                        <td>
                            <img src="{{ asset($media->file_path) }}" class="rounded" style="width: 60px; height: 60px; object-fit: cover;" alt="{{ $media->alt_text }}">
                        </td>
                        <td>
                            <strong>{{ $media->title }}</strong>
                            <br><small class="text-muted">{{ $media->file_name }}</small>
                        </td>
                        <td>{{ $media->category->name ?? 'No Category' }}</td>
                        <td>
                            @if($media->status == '1')
                            <span class="badge bg-success">Active</span>
                            @else
                            <span class="badge bg-danger">Inactive</span>
                            @endif
                        </td>
                        <td>{{ $media->created_at->format('d M Y') }}</td>
                        <td>
                            <div class="d-flex gap-2">
                                <a href="{{ route('editmedia', $media->id) }}" class="btn btn-sm btn-outline-primary">
                                    <i class="fa fa-edit"></i> Edit
                                </a>
                                <form action="{{ route('deletemedia', $media->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this media?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger">
                                        <i class="fa fa-trash"></i> Delete
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="text-center py-4">No media files found.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    
    <div class="card-footer bg-white border-top-0 mt-3 d-flex justify-content-end">
        {{ $mediaList->links('pagination::bootstrap-5') }}
    </div>
</div>

@endsection
