@extends('admin.layouts.app')

@section('title', 'Category List')
@section('page-title', 'Category List')

@section('content')

<div class="card shadow-sm border-0">
    <div class="card-header bg-white d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Categories Library</h5>
        <a href="{{ route('categories') }}" class="btn btn-primary btn-sm">
            <i class="fa-solid fa-plus"></i> Add New Category
        </a>
    </div>

    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover mb-0 align-middle">
                <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Status</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($categoryList as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>
                            <strong>{{ $category->name }}</strong>
                        </td>
                        <td>{{ $category->slug ?? 'N/A' }}</td>
                        <td>
                            @if($category->status == '1')
                            <span class="badge bg-success">Active</span>
                            @else
                            <span class="badge bg-danger">Inactive</span>
                            @endif
                        </td>
                        <td>{{ $category->created_at->format('d M Y') }}</td>
                        <td>
                            <div class="d-flex gap-2">
                                <a href="{{ route('editcategory', $category->id) }}" class="btn btn-sm btn-outline-primary">
                                    <i class="fa fa-edit"></i> Edit
                                </a>
                                <form action="{{ route('deletecategory', $category->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this category?');">
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
                        <td colspan="6" class="text-center py-4">No categories found.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    
    <div class="card-footer bg-white border-top-0 mt-3 d-flex justify-content-end">
        {{ $categoryList->links('pagination::bootstrap-5') }}
    </div>
</div>

@endsection
