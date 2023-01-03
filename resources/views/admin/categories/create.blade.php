@extends('admin.layouts.app')

@section('content')
    <div class="page-wrapper row">
        <div class="col-8 m-auto">
            <h1 class="heading-title">Create new category</h1>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('admin_category.store') }}" method="POST" enctype="multipart/form-data" class="form">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label label">Name</label>
                    <input type="text" class="form-control input @error('name') is-invalid @enderror" id="name"
                        name="name" value="{{ old('name') }}" placeholder="Enter name">
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label label">Status</label>
                    <div class="form-check">
                        <input class="form-check-input input" type="radio" value="-1" name="status" id="status_1"
                            checked {{ old('status') == -1 ? 'checked' : '' }}>
                        <label class="form-check-label" for="status_1">
                            Active
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input input" type="radio" value="10" name="status" id="status_2"
                            {{ old('status') == 10 ? 'checked' : '' }}>
                        <label class="form-check-label" for="status_2">
                            Inactive
                        </label>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label label">Image</label>
                    <input class="form-control input @error('image') is-invalid @enderror" type="file" name="image"
                        accept="image/png, image/jpg, 'image/jpeg">
                    @error('image')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="btns">
                    <button type="submit" class="btn btn-main me-4">Create</button>
                    <a href="{{ route('admin_category.index') }}" type="button" class="btn btn-outline-success">Cancel</a>
                </div>
            </form>
        </div>
    </div>
@endsection
