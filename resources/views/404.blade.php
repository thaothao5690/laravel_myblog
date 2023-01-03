@extends('layouts.app')

@section('content')
    <h5 class="text-center bg-dark p-5 text-light mb-4">Page not found !!!</h5>
    <div class="error-image">
        <img src="{{ asset('images/404.png') }}" alt="">
    </div>
@endsection
