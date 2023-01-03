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

            <form class="form" action="{{ route('admin_category.update', $category->id) }}" enctype="multipart/form-data"
                method="POST">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" id="id" value="{{ $category->id }}">
                <div class="mb-3">
                    <label for="name" class="form-label label">Name</label>
                    <input type="text" class="form-control input" id="name" name="name"
                        value="{{ $category->name }}" placeholder="Enter name">
                </div>

                <div class="mb-3">
                    <label class="form-label label">Status</label>
                    <div class="form-check">
                        <input class="form-check-input input" type="radio" value="-1" name="status" id="status_1"
                            {{ $category->status === -1 ? 'checked="checked"' : '' }}>
                        <label class="form-check-label" for="status_1">
                            Inactive
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input input" type="radio" value="10" name="status" id="status_2"
                            {{ $category->status === 10 ? 'checked="checked"' : '' }}>
                        <label class="form-check-label" for="status_2">
                            Active
                        </label>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label label">Image</label>
                    <input class="form-control input" type="file" name="image">
                </div>

                <div class="btns">
                    <button type="submit" class="btn btn-main me-4">Update</button>
                    <a href="{{ route('admin_category.index') }}" type="button" class="btn btn-outline-success">Cancel</a>
                </div>
            </form>
        </div>
    </div>
@endsection
