@extends('admin.layouts.app')

@section('content')
    <div class="page-wrapper row">
        <div class="col-8 m-auto">
            <h1 class="heading-title">Create new blog</h1>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('admin_blog.store') }}" method="POST" enctype="multipart/form-data" class="form">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label label">Title</label>
                    <input type="text" class="form-control input @error('title') is-invalid @enderror" id="title"
                        name="title" value="{{ old('title') }}" placeholder="Enter title">
                    @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label label">Description</label>
                    <textarea placeholder="Enter description" class="form-control input @error('description') is-invalid @enderror"
                        id="description" name="description" rows="3">{{ old('description') }}</textarea>
                    @error('description')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="content" class="form-label label">Content</label>
                    <textarea class="form-control input @error('content') is-invalid @enderror" id="content" name="content" rows="8"
                        placeholder="Enter content">{{ old('content') }}</textarea>
                    @error('content')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label label">Status</label>
                    <div class="form-check">
                        <input class="form-check-input input" type="radio" value="-1" name="status" id="status_1"
                            checked {{ old('status') == -1 ? 'checked' : '' }}>
                        <label class="form-check-label" for="status_1">
                            Pending
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input input" type="radio" value="10" name="status" id="status_10"
                            {{ old('status') == 10 ? 'checked' : '' }}>
                        <label class="form-check-label" for="status_10">
                            Approved
                        </label>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label label">Category</label>
                    <select class="form-select input @error('category') is-invalid @enderror"
                        aria-label="Default select example" name="category">
                        <option value="">--- Choose Category ---</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{ old('category') == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}</option>
                        @endforeach
                    </select>
                    @error('category')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label label">Image</label>
                    <input class="form-control input" type="file" name="image"
                        accept="image/png, image/jpg, 'image/jpeg">
                </div>

                <div class="btns">
                    <button type="submit" class="btn btn-main me-4">Create</button>
                    <a href="{{ route('admin_blog.index') }}" type="button" class="btn btn-outline-success">Cancel</a>
                </div>
            </form>
        </div>
    </div>
@endsection
