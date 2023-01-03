@extends('layouts.app')

@section('content')
    <div class="contact-page">
        @if (Session::has('message'))
            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
        @endif

        <h5 class="inform-submitted">We already received your information as below:</h5>
        <div class="information">
            <p><b>Full name: </b> <span>{{ $contact->full_name }}</span></p>
            <p><b>Email: </b> <span>{{ $contact->email }}</span></p>
            <p><b>Phone: </b> <span>{{ $contact->phone }}</span></p>
            <p><b>Title: </b> <span>{{ $contact->title }}</span></p>
            <p><b>Content: </b> <span>{{ $contact->content }}</span></p>
        </div>
        <p class="inform-thankyou">Thank you for submitted, we will contact you soon!</p>
    </div>
@endsection
