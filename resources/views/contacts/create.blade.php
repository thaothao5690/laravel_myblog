@extends('layouts.app')

@section('content')
    <div class="contact-page">
        <div class="col-8 m-auto">
            <h1 class="heading-title">Contact Us</h1>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('contact-us.store') }}" method="POST" class="form">
                @csrf
                <div class="mb-3">
                    <label for="full_name" class="form-label label">Full Name</label>
                    <input type="text" class="form-control input @error('full_name') is-invalid @enderror" id="full_name"
                        name="full_name" value="{{ old('full_name') }}" placeholder="Enter full name">
                    @error('full_name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label label">Email</label>
                    <input placeholder="Enter email" class="form-control input @error('email') is-invalid @enderror"
                        id="email" name="email" value="{{ old('email') }}">
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="phone" class="form-label label">Phone</label>
                    <input class="form-control input @error('phone') is-invalid @enderror" id="phone" name="phone"
                        value="{{ old('phone') }}" placeholder="Enter phone">
                    @error('phone')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="title" class="form-label label">Title</label>
                    <textarea class="form-control input @error('title') is-invalid @enderror" id="title" name="title" rows="3"
                        placeholder="Enter title">{{ old('title') }}</textarea>
                    @error('title')
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

                <div class="btns">
                    <button type="submit" class="btn btn-main me-4">Submit</button>
                    <a href="{{ route('contact-us.index') }}" type="button" class="btn btn-outline-success">Cancel</a>
                </div>
            </form>
        </div>
    </div>
@endsection
