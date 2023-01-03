@extends('layouts.app')

@section('content')
    <div class="category-page">
        @if ($blogs->count() !== 0)
            @include('layouts.cards')
        @else
            <h5 class="text-center bg-dark p-5 text-light mb-0">Sorry, we don't have any blogs yet!!</h5>
            <div class="error-image">
                <img src="{{ asset('images/105155.jpg') }}" alt="">
            </div>
        @endif
    </div>
@endsection
