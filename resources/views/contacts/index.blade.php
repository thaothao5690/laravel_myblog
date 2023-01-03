@extends('layouts.app')

@section('content')
    <div class="contact-page">
        <h1 class="heading-title">Contact Us</h1>
        <div class="d-flex justify-content-center submit-button">
            <a class="btn btn-main" type="button" href="{{ route('contact-us.submit') }}">Submit your contact</a>
        </div>
        <p class="description">We always want to know any questions or if you have any blogs and you want to send it to us,
            please don't hesitate to submit it. We love to hear from you and we will send our reponse to you as soon as
            possible!</p>
    </div>
@endsection
