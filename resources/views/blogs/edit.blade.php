@extends('layouts.app')

@section('content')
    <div class="blog-page row">
        <div class="col-8 m-auto">
            <h1 class="heading-title">Update</h1>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form class="form" action="{{ route('blog.update', $blog->id) }}" enctype="multipart/form-data" method="POST">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" id="id" value="{{ $blog->id }}">
                <div class="mb-3">
                    <label for="title" class="form-label label">Title</label>
                    <input type="text" class="form-control input @error('title') is-invalid @enderror" id="title"
                        name="title" value="{{ $blog->title }}" placeholder="Enter title">
                    @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label label">Description</label>
                    <textarea class="form-control input @error('description') is-invalid @enderror" id="description" name="description"
                        rows="3" placeholder="Enter description">{{ $blog->description }}</textarea>
                    @error('description')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="content" class="form-label label">Content</label>
                    <textarea class="form-control input @error('content') is-invalid @enderror" id="content" name="content" rows="8"
                        placeholder="Enter content">{{ $blog->content }}</textarea>
                    @error('content')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                @if (Auth::user()->role === 1)
                    <div class="mb-3">
                        <label class="form-label label">Status</label>
                        <div class="form-check">
                            <input class="form-check-input input" type="radio" value="-1" name="status"
                                id="status_1" checked {{ $blog->status === -1 ? 'checked' : '' }}>
                            <label class="form-check-label" for="status_1">
                                Pending
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input input" type="radio" value="10" name="status"
                                id="status_10" {{ $blog->status === 10 ? 'checked' : '' }}>
                            <label class="form-check-label" for="status_10">
                                Approved
                            </label>
                        </div>
                    </div>
                @else
                    <input type="hidden" value="{{ $blog->status }}" name="status">
                @endif

                <div class="mb-3">
                    <label class="form-label label">Category</label>
                    <select class="form-select input @error('category') is-invalid @enderror"
                        aria-label="Default select example" name="category" required>
                        <option value="">--- Choose Category ---</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}"
                                {{ $blog->category_id === $category->id ? 'selected="selected"' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('category')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label label">Image</label>
                    <input class="form-control input image-selected" title=" " type="file" name="image">
                </div>

                <div class="btns">
                    <button type="submit" class="btn btn-main me-4">Update</button>
                    <a href="{{ route('blog.index') }}" type="button" class="btn btn-outline-success">Cancel</a>
                </div>
            </form>
        </div>
    </div>
@endsection
