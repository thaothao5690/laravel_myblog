@extends('admin.layouts.app')

@section('content')
    <div class="page-wrapper row">
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

            <form class="form" action="{{ route('admin_blog.update', $blog->id) }}" enctype="multipart/form-data"
                method="POST">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" id="id" value="{{ $blog->id }}">
                <div class="mb-3">
                    <label for="title" class="form-label label">Title</label>
                    <input type="text" class="form-control input" id="title" name="title"
                        value="{{ $blog->title }}" placeholder="Enter title">
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label label">Description</label>
                    <textarea class="form-control input" id="description" name="description" rows="3" placeholder="Enter description">{{ $blog->description }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="content" class="form-label label">Content</label>
                    <textarea class="form-control input" id="content" name="content" rows="8" placeholder="Enter content">{{ $blog->content }}</textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label label">Status</label>
                    <div class="form-check">
                        <input class="form-check-input input" type="radio" value="-1" name="status" id="status_1"
                            {{ $blog->status === -1 ? 'checked="checked"' : '' }} @disabled(true)>
                        <label class="form-check-label" for="status_1">
                            Pending
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input input" type="radio" value="0" name="status" id="status_1"
                            {{ $blog->status === 0 ? 'checked="checked"' : '' }}>
                        <label class="form-check-label" for="status_1">
                            Deleted
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input input" type="radio" value="1" name="status" id="status_2"
                            {{ $blog->status === 1 ? 'checked="checked"' : '' }}>
                        <label class="form-check-label" for="status_2">
                            Rejected
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input input" type="radio" value="10" name="status" id="status_3"
                            {{ $blog->status === 10 ? 'checked="checked"' : '' }}>
                        <label class="form-check-label" for="status_3">
                            Approved
                        </label>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label label">Category</label>
                    <select class="form-select input" aria-label="Default select example" name="category" required>
                        <option value="">--- Choose Category ---</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}"
                                {{ $blog->category_id === $category->id ? 'selected="selected"' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label label">Image</label>
                    <input class="form-control input" type="file" name="image">
                </div>

                <div class="btns">
                    <button type="submit" class="btn btn-main me-4">Update</button>
                    <a href="{{ route('admin_blog.index') }}" type="button" class="btn btn-outline-success">Cancel</a>
                </div>
            </form>
        </div>
    </div>
@endsection
