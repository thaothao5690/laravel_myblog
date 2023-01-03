@extends('admin.layouts.app')

@section('content')
    <div class="page-wrapper">
        <div class="information row">
            <div class="">
                @if (Session::has('message'))
                    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                @endif

                <h1 class="heading-title">Contact #{{ $contact->id }}</h1>
                <div class="d-flex justify-content-between">
                    <div class="column"><span class="column-name">ID: </span> <span>{{ $contact->id }}</span></div>
                    <div class="column">
                        <span class="column-name">Full Name: </span> <span>{{ $contact->full_name }}</span>
                    </div>
                    <div class="column"><span class="column-name">Email: </span> <span>{{ $contact->email }}</span></div>
                    <div class="column"><span class="column-name">Phone: </span> <span>{{ $contact->phone }}</span></div>
                </div>
                <div class="column"><span class="column-name">Title: </span> <span>{{ $contact->title }}</span></div>
                <div class="column"><span class="column-name">Content: </span> <span>{{ $contact->content }}</span></div>
                <div class="column">
                    <span class="column-name">Created_at: </span> <span>{{ $contact->created_at }}</span>
                </div>
                <div class="column">
                    <span class="column-name">Status: </span>
                    <ul>
                        <li><span>Value: </span> {{ $contact->status }} </li>
                        <li>
                            <span>Type: </span>
                            @if ($contact->status === 10)
                                Replied
                            @else
                                Hasn't replied yet
                            @endif
                        </li>
                    </ul>
                </div>
                @if ($contact->reply)
                    <div class="border">
                        <div class="column">
                            <span class="column-name">Reply Message: </span> <span>{{ $contact->reply }}</span>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
    </div>
@endsection
