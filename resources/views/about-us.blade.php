@extends('layouts.app')

@section('content')
    <div class="about-us-page">
        <div class="heading">
            <h2 class="name">myBLOG</h2>
            <p class="slogan">Find your inspiration here.</p>
        </div>
        <div class="content">
            <p>What is myBLOG? What it can do? </p>
            <p>myBLOG is a website about manage blogs. It's help people find their idea or contribute their idea to all
                users using myBLOG. We always try our best to make users feel interesting, happy and give people the best
                experience as we can do.</p>
            <p>Fast, convenience, minimalist,... We hope you enjoy it!</p>
            <p>Don't hesitate to
                <a class="link" href="{{ route('contact-us.submit') }}">contact us</a>, our information
                below:
            </p>
            <p><b>Phone: </b> <span>(028) 73 081 888</span></p>
            <p><b>Email: </b> <span>contact.myblog@gmail.com</span></p>
            <p><b>Facebook: </b><span>www.facebook.com/myblog</span></p>
            <div class="end">
                <div class="thanks">
                    <p>Thanks from myBLOG team
                        <i class="fa-solid fa-hand-holding-heart"></i>
                        <i class="fa-regular fa-face-grin-hearts"></i>
                        <i class="fa-regular fa-face-kiss-wink-heart"></i>
                        <i class="fa-regular fa-heart"></i>
                    </p>
                    <img src="{{ asset('images/logo.png') }}" alt="" width="100" height="100">
                </div>
            </div>
        </div>
    </div>
@endsection
