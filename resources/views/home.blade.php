@extends('layouts.app')

@section('content')
    <div class="home">
        <img class="banner" src="{{ asset('images/banner.jpg') }}" alt="" srcset="">
        <h2 class="title">Welcome to myBLOG</h2>
        <p>We provide our best and newest blogs to you, we help to find your inspiration.</p>
        <span class="badge text-bg-primary badge-title">Latest news</span>

        @if ($blogs->count() !== 0)
            @include('layouts.cards')
        @else
            <h5 class="text-center bg-dark p-5 text-light mb-0">Sorry, we don't have any blogs yet!!</h5>
            <div class="error-image">
                <img src="{{ asset('images/105155.jpg') }}" alt="">
            </div>
        @endif

        <a class="view-more" href="{{ route('blog.index') }}">View more >></a>
    </div>
@endsection
