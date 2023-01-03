@extends('layouts.app')

@section('content')
    <div class="blog-page">
        @if (Session::has('message'))
            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
        @endif

        <h1 class="heading-title">Blogs</h1>

        @if (Auth::user())
            <div class="mb-4 d-flex justify-content-center">
                <a class="btn btn-main me-2" type="button" href="{{ route('blog.create') }}">Create new blog</a>
                <a class="btn btn-outline-success me-2" type="button" href="{{ route('blog.user') }}">Your blog</a>
            </div>
        @else
            <div class="d-flex justify-content-center">
                <a class="btn btn-main mb-4" type="button" href="{{ route('login') }}">Submit your blog</a>
            </div>
        @endif

        @if ($blogs->count() !== 0)
            @include('layouts.cards')
        @else
            <h5 class="text-center bg-dark p-5 text-light mb-0">Sorry, we don't have any blogs yet!!</h5>
            <div class="error-image">
                <img src="{{ asset('images/105155.jpg') }}" alt="">
            </div>
        @endif

        <div class="d-flex justify-content-center">
            {{ $blogs->links() }}
        </div>
    </div>
@endsection
