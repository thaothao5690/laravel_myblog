@extends('admin.layouts.app')

@section('content')
    <div class="page-wrapper">
        <div class="table-wrapper">
            @if (Session::has('message'))
                <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
            @endif

            <h5 class="title text-center">Blogs</h5>
            <div class="d-flex justify-content-center mb-4">
                <a href="{{ route('admin_blog.create') }}" class="btn btn-main">
                    Create new blog
                </a>
            </div>
            <table class="table table-data table-hover border align-middle">
                <caption>Blogs table</caption>
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Image</th>
                        <th scope="col">Title</th>
                        <th scope="col">Created At</th>
                        <th scope="col">Status</th>
                        <th scope="col">Author</th>
                        <th scope="col">Category</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @if ($blogs->count() !== 0)
                        @foreach ($blogs as $id => $blog)
                            <tr>
                                <td>{{ $blog->id }}</td>
                                <td>
                                    <img class="image" src="{{ asset('images/uploads/' . $blog->image) }}" alt="">
                                </td>
                                <td class="table-column-title">{{ $blog->title }}</td>
                                <td>{{ $blog->created_at }}</td>
                                @if ($blog->status === 10)
                                    <td class="approved">Approved</td>
                                @elseif($blog->status === 1)
                                    <td class="rejected">Rejected</td>
                                @elseif($blog->status === 0)
                                    <td class="deleted">Deleted</td>
                                @else
                                    <td class="pending">Pending</td>
                                @endif
                                <td>{{ $blog->author }}</td>
                                <td>{{ $blog->category->name }}</td>
                                <td>
                                    <a href="{{ route('admin_blog.show', $blog->id) }}" class="btn btn-success">View</a>
                                </td>
                                <td>
                                    <a href="{{ route('admin_blog.edit', $blog->id) }}" class="btn btn-warning">Edit</a>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#deleteModal_{{ $blog->id }}"
                                        data-action="{{ route('admin_blog.destroy', $blog->id) }}">
                                        Delete
                                    </button>
                                </td>
                            </tr>
                            <div class="modal fade" id="deleteModal_{{ $blog->id }}" tabindex="-1"
                                aria-labelledby="deleteModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="deleteModalLabel">Delete blog</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <form action="{{ route('admin_blog.destroy', $blog->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <div class="modal-body">
                                                Are you sure want to delete this blog?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button class="btn btn-danger" type="submit">
                                                    Delete
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="11" class="text-center">No blog</td>
                        </tr>
                    @endif
                </tbody>
            </table>
            <div class="d-flex justify-content-center">
                {{ $blogs->links() }}
            </div>
        </div>
    </div>
@endsection
