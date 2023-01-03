@extends('layouts.app')

@section('content')
    @if (Session::has('message'))
        <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
    @endif

    <div class="blog-page">
        <h1 class="text-center heading-title">{{ $title }}</h1>
        <div class="info">
            <div class="tags">
                <a class="tag" href="{{ route('blog.index') }}"><i class="fa-solid fa-tags"></i> Blog</a>
                <a class="tag" href="{{ route('category.index') }}"><i class="fa-solid fa-tags"></i> Category</a>
                <a class="tag" href="{{ route('category.show', $blog->category_id) }}">
                    <i class="fa-solid fa-tags"></i>
                    {{ $blog->category_name }}
                </a>
            </div>
            <div>
                <p>
                    <span>Author:</span>
                    <a href="{{ route('blog.author', $blog->user_id) }}" class="author">{{ $blog->author }}</a>
                </p>
                <p class="created_at">{{ $blog->created_at }}</p>
            </div>
        </div>
        <div class="row description">
            <p class="col-10 m-auto text-center">{{ $blog->description }}</p>
        </div>
        <img class="image" src="{{ asset('images/uploads/' . $blog->image) }}" alt="" srcset="">
        <p class="content">{{ $blog->content }}</p>
        <div class="d-flex justify-content-center">
            <a href="{{ url()->previous() }}" class="btn btn-outline-success">
                Go Back
            </a>
        </div>
    </div>
@endsection
