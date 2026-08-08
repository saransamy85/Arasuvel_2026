@extends('admin.layouts.app')

@section('title','Upload Image')
@section('page-title','Upload Image')

@section('content')

<div class="card shadow-sm">

    <div class="card-header">

        <h5 class="mb-0">
            Upload Image
        </h5>

    </div>

    <div class="card-body">

        <form action="{{ route('createimage') }}" method="POST" enctype="multipart/form-data">

            @csrf

            <div class="row">

                <div class="col-md-6 mb-3">

                    <label class="form-label">
                        Category
                    </label>

                    <select name="category_id" class="form-select">

                        <option value="">Select Category</option>

                        @foreach($categories as $category)

                        <option value="{{ $category->id }}">

                            {{ $category->name }}

                        </option>

                        @endforeach

                    </select>

                </div>

            </div>


            <div class="mb-4">

                <label class="form-label">

                    Image

                </label>

                <input type="file" name="image" id="image" class="form-control" accept="image/*">

            </div>


            <div class="text-center mb-4">

                <img id="preview" src="https://placehold.co/600x350?text=Image+Preview" class="img-fluid rounded border" style="max-height:300px;">

            </div>


            <div class="row">

                <div class="col-md-6 mb-3">

                    <label class="form-label">

                        Title

                    </label>

                    <input type="text" name="title" class="form-control">

                </div>


                <div class="col-md-6 mb-3">

                    <label class="form-label">

                        Alt Text

                    </label>

                    <input type="text" name="alt_text" class="form-control">

                </div>

            </div>


            <div class="row">

                <div class="col-md-6 mb-3">

                    <label class="form-label">

                        Caption

                    </label>

                    <input type="text" name="caption" class="form-control">

                </div>


                <div class="col-md-6 mb-3">

                    <label class="form-label">

                        Focus Keyword

                    </label>

                    <input type="text" name="focus_keyword" class="form-control">

                </div>

            </div>


            <div class="mb-3">

                <label class="form-label">

                    Description

                </label>

                <textarea name="description" rows="4" class="form-control"></textarea>

            </div>


            <div class="mb-4">

                <label class="form-label">

                    Status

                </label>

                <select name="status" class="form-select">

                    <option value="1">

                        Active

                    </option>

                    <option value="0">

                        Inactive

                    </option>

                </select>

            </div>


            <button class="btn btn-primary">

                <i class="fa fa-save"></i>

                Save Image

            </button>

        </form>

    </div>

</div>

@endsection
