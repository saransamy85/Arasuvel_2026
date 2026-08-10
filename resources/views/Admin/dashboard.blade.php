@extends('admin.layouts.app')

@section('title', 'Dashboard')
@section('page-title', 'Dashboard')

@section('content')

<div class="row g-4">

    <!-- Categories -->
    <div class="col-lg-3 col-md-6">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body d-flex align-items-center">
                <div class="bg-primary bg-opacity-10 rounded-circle p-3 me-3">
                    <i class="fa-solid fa-folder-tree fa-2x text-primary"></i>
                </div>

                <div>
                    <h3 class="fw-bold mb-0">{{ $categoryCount ?? 0 }}</h3>
                    <small class="text-muted">Categories</small>
                </div>
            </div>

            <div class="card-footer bg-transparent border-0">
                <a href="{{ route('categorylist') }}" class="text-decoration-none">
                    Manage Categories
                    <i class="fa-solid fa-arrow-right ms-1"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- Media -->
    <div class="col-lg-3 col-md-6">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body d-flex align-items-center">
                <div class="bg-success bg-opacity-10 rounded-circle p-3 me-3">
                    <i class="fa-solid fa-images fa-2x text-success"></i>
                </div>

                <div>
                    <h3 class="fw-bold mb-0">{{ $mediaCount ?? 0}}</h3>
                    <small class="text-muted">Media Library</small>
                </div>
            </div>

            <div class="card-footer bg-transparent border-0">
                <a href="{{ route('medialist') }}" class="text-decoration-none">
                    Manage Media
                    <i class="fa-solid fa-arrow-right ms-1"></i>
                </a>
            </div>
        </div>
    </div>

</div>


<div class="row mt-4">

    <!-- Recent Categories -->
    <div class="col-lg-6">

        <div class="card shadow-sm border-0">

            <div class="card-header bg-white">
                <h5 class="mb-0">Recent Categories</h5>
            </div>

            <div class="card-body p-0">

                <table class="table table-hover mb-0">

                    <thead class="table-light">

                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>

                    </thead>

                    <tbody>
                        @foreach($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                            <td>
                                @if($category->status)
                                <span class="badge bg-success">Active</span>
                                @else
                                <span class="badge bg-danger">Inactive</span>
                                @endif
                            </td>
                            <td>
                                <div class="d-flex gap-1">
                                    <a href="{{ route('editcategory', $category->id) }}" class="btn btn-sm btn-outline-primary">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <form action="{{ route('deletecategory', $category->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-danger">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>

                </table>

            </div>

        </div>

    </div>


    <!-- Recent Media -->
    <!-- Recent Media -->
    <div class="col-lg-6">

        <div class="card shadow-sm border-0">

            <div class="card-header bg-white">
                <h5 class="mb-0">Recent Media</h5>
            </div>

            <div class="card-body">

                <div class="row">

                    @forelse($recentMedia as $media)

                    <div class="col-md-4 mb-3">

                        <div class="card border h-100">

                            <img src="{{ asset($media->file_path) }}" class="card-img-top" style="height:150px;object-fit:cover;">

                            <div class="card-body p-2">

                                <h6 class="mb-1 text-truncate">
                                    {{ $media->title }}
                                </h6>

                                <small class="text-muted d-block">
                                    {{ $media->category->name ?? 'No Category' }}
                                </small>

                                <div class="d-flex justify-content-between align-items-center mt-2">
                                    <small class="text-secondary">
                                        {{ $media->created_at->format('d M Y') }}
                                    </small>
                                    <div class="d-flex gap-1">
                                        <a href="{{ route('editmedia', $media->id) }}" class="btn btn-sm btn-outline-primary">
                                            <i class="fa fa-edit"></i> Edit
                                        </a>
                                        <form action="{{ route('deletemedia', $media->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-outline-danger">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>

                    @empty

                    <div class="col-12 text-center py-5">

                        <i class="fa-solid fa-images fa-3x text-secondary mb-3"></i>

                        <p>No Media Uploaded</p>

                    </div>

                    @endforelse

                </div>

            </div>

        </div>

    </div>

</div>

@endsection
