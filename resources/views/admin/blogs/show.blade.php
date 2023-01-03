@extends('admin.layouts.app')

@section('content')
    <div class="page-wrapper">
        <div class="information row">
            @if (Session::has('message'))
                <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
            @endif

            <div class="col-4">
                <img class="image" src="{{ asset('images/uploads/' . $blog->image) }}" alt="">
            </div>
            <div class="col-8">
                <div class="column"><span class="column-name">ID: </span> <span>{{ $blog->id }}</span></div>
                <div class="column"><span class="column-name">Title: </span> <span>{{ $blog->title }}</span></div>
                <div class="column">
                    <span class="column-name">Description: </span> <span>{{ $blog->description }}</span>
                </div>
                <div class="column"><span class="column-name">Content: </span> <span>{{ $blog->content }}</span></div>
                <div class="column"><span class="column-name">Created_at: </span> <span>{{ $blog->created_at }}</span></div>
                <div class="column"><span class="column-name">Updated_at: </span> <span>{{ $blog->updated_at }}</span></div>
                <div class="column">
                    <span class="column-name">Status: </span>
                    <ul>
                        <li><span>Value: </span> {{ $blog->status }} </li>
                        <li>
                            <span>Type: </span>
                            @if ($blog->status === 10)
                                Approved
                            @elseif($blog->status === 1)
                                Rejected
                            @elseif($blog->status === 0)
                                Deleted
                            @else
                                Pending
                            @endif
                        </li>
                    </ul>
                </div>
                <div class="column"><span class="column-name">Author: </span>
                    <ul>
                        <li><span>ID: </span> {{ $blog->user_id }} </li>
                        <li><span>Name: </span> {{ $blog->author }}</li>
                    </ul>
                </div>
                <div class="column"><span class="column-name">Category: </span>
                    <ul>
                        <li><span>ID: </span>{{ $blog->category_id }} </li>
                        <li><span>Name: </span>{{ $blog->category->name }}</li>
                    </ul>
                </div>
                <div class="column"><span class="column-name">Image path:</span> {{ $blog->image }}</div>
            </div>
        </div>
    </div>
@endsection
