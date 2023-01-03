@extends('admin.layouts.app')

@section('content')
    <div class="page-wrapper row">
        <div class="col-8 m-auto">
            <h1 class="heading-title">Reply contact #{{ $contact->id }}</h1>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('admin_contact.update', $contact->id) }}" method="POST" class="form">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="full_name" class="form-label label">Full name</label>
                    <input type="text" class="form-control input" id="full_name" disabled
                        value="{{ $contact->full_name }}">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label label">Email</label>
                    <input type="text" class="form-control input" id="email" disabled value="{{ $contact->email }}">
                </div>

                <div class="mb-3">
                    <label for="phone" class="form-label label">Phone</label>
                    <input type="text" class="form-control input" id="phone" disabled value="{{ $contact->phone }}">
                </div>

                <div class="mb-3">
                    <label for="title" class="form-label label">Title</label>
                    <textarea rows="3" type="text" class="form-control input" id="title" disabled>{{ $contact->title }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="content" class="form-label label">Content</label>
                    <textarea rows="5" type="text" class="form-control input" id="content" disabled>{{ $contact->content }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="reply" class="form-label label">Reply Message</label>
                    <textarea rows="3" type="text" class="form-control input" id="reply" name="reply"
                        placeholder="Enter reply message..."></textarea>
                </div>

                <div class="btns">
                    <button type="submit" class="btn btn-main me-4">Reply</button>
                    <a href="{{ route('admin_contact.index') }}" type="button" class="btn btn-outline-success">Cancel</a>
                </div>
            </form>
        </div>
    </div>
@endsection
