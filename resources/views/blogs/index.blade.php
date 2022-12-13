@extends('layouts.app')

{{ print_r($blogs) }}

@section('content')
    <h1>This is blog page</h1>

    @foreach ($blogs as $blog)
        {{-- <p>Go to <a href="">{{ $blog }}</a></p> --}}
    @endforeach
@endsection
