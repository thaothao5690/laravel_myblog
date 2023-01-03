@extends('admin.layouts.app')

@section('content')
    <div class="page-wrapper">
        <div class="information row">
            @if (Session::has('message'))
                <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
            @endif

            <div class="col-4">
                <img class="image" src="{{ asset('images/uploads/' . $category->image) }}" alt="">
            </div>
            <div class="col-8">
                <div class="column"><span class="column-name">ID: </span> <span>{{ $category->id }}</span></div>
                <div class="column"><span class="column-name">Name: </span> <span>{{ $category->name }}</span></div>
                <div class="column"><span class="column-name">Created_at: </span> <span>{{ $category->created_at }}</span>
                </div>
                <div class="column"><span class="column-name">Updated_at: </span> <span>{{ $category->updated_at }}</span>
                </div>
                <div class="column"><span class="column-name">Status: </span>
                    <ul>
                        <li><span>Value: </span> {{ $category->status }} </li>
                        <li>
                            <span>Type: </span>
                            @if ($category->status === 10)
                                Active
                            @else
                                Inactive
                            @endif
                        </li>
                    </ul>
                </div>
                <div class="column"><span class="column-name">Image path:</span> {{ $category->image }}</div>
            </div>
        </div>
    </div>
@endsection
