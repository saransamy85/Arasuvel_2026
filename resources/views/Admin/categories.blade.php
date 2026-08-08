@extends('admin.layouts.app')

@section('title', 'Dashboard')
@section('page-title', 'Dashboard')

@section('content')

<form action="{{ route('createcategory') }}" method="post">
    @csrf

    <div class="mb-3">

        <label class="form-label">Category Name</label>

        <input type="text" name="name" class="form-control" required>

    </div>

    <div class="mb-3">

        <label class="form-label">Slug</label>

        <input type="text" name="slug" class="form-control" required>

    </div>

    <div class="mb-3">

        <label class="form-label">Description</label>

        <textarea name="description" rows="4" class="form-control"></textarea>

    </div>

    <div class="mb-3">

        <label class="form-label">Status</label>

        <select name="status" class="form-select">

            <option value="1">Active</option>

            <option value="0">Inactive</option>

        </select>

    </div>

    <button class="btn btn-primary">

        Save Category

    </button>
</form>
@endsection
