@extends('layouts.app')

@section('content')
    <div class="category-page">
        <div class="categories">
            @foreach ($categories as $category)
                <div class="category-item">
                    <div class="category">
                        <img class="image" src="{{ asset('images/uploads/' . $category->image) }}" alt="">
                        <a class="name" href="{{ route('category.show', $category->id) }}">{{ $category->name }}</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
