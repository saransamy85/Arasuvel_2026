@extends('admin.layouts.app')

@section('title','Edit Image')
@section('page-title','Edit Image')

@section('content')

<div class="card shadow-sm">

    <div class="card-header">
        <h5 class="mb-0">
            Edit Image
        </h5>
    </div>

    <div class="card-body">
        <form action="{{ route('updatemedia', $media->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">
                        Category
                    </label>
                    <select name="category_id" class="form-select">
                        <option value="">Select Category</option>
                        @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ $media->category_id == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="mb-4">
                <label class="form-label">
                    Image (Leave blank to keep current image)
                </label>
                <input type="file" name="image" id="image" class="form-control" accept="image/*">
            </div>

            <div class="text-center mb-4">
                <img id="preview" src="{{ asset($media->file_path) }}" class="img-fluid rounded border" style="max-height:300px;">
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">
                        Title
                    </label>
                    <input type="text" name="title" class="form-control" value="{{ old('title', $media->title) }}">
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">
                        Alt Text
                    </label>
                    <input type="text" name="alt_text" class="form-control" value="{{ old('alt_text', $media->alt_text) }}">
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">
                        Caption
                    </label>
                    <input type="text" name="caption" class="form-control" value="{{ old('caption', $media->caption) }}">
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">
                        Focus Keyword
                    </label>
                    <input type="text" name="focus_keyword" class="form-control" value="{{ old('focus_keyword', $media->focus_keyword) }}">
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">
                    Description
                </label>
                <textarea name="description" rows="4" class="form-control">{{ old('description', $media->description) }}</textarea>
            </div>

            <div class="mb-4">
                <label class="form-label">
                    Status
                </label>
                <select name="status" class="form-select">
                    <option value="1" {{ $media->status == '1' ? 'selected' : '' }}>
                        Active
                    </option>
                    <option value="0" {{ $media->status == '0' ? 'selected' : '' }}>
                        Inactive
                    </option>
                </select>
            </div>

            <button class="btn btn-primary">
                <i class="fa fa-save"></i>
                Update Image
            </button>
        </form>
    </div>
</div>

@endsection
