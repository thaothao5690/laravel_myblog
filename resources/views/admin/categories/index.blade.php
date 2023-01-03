@extends('admin.layouts.app')

@section('content')
    <div class="page-wrapper">
        <div class="table-wrapper">
            @if (Session::has('message'))
                <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
            @endif

            <h5 class="title text-center">Categories</h5>
            <div class="d-flex justify-content-center mb-4">
                <a href="{{ route('admin_category.create') }}" class="btn btn-main">
                    Create new category
                </a>
            </div>
            <table class="table table-data table-hover border align-middle">
                <caption>Categories table</caption>
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Image</th>
                        <th scope="col">Name</th>
                        <th scope="col">Created At</th>
                        <th scope="col">Status</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @if ($categories->count() !== 0)
                        @foreach ($categories as $id => $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>
                                    <img class="image" src="{{ asset('images/uploads/' . $category->image) }}"
                                        alt="">
                                </td>
                                <td class="table-column-title">{{ $category->name }}</td>
                                <td>{{ $category->created_at }}</td>
                                @if ($category->status === 10)
                                    <td class="approved">Active</td>
                                @else
                                    <td class="rejected">Inactive</td>
                                @endif
                                <td>
                                    <a href="{{ route('admin_category.show', $category->id) }}"
                                        class="btn btn-success">View</a>
                                </td>
                                <td>
                                    <a href="{{ route('admin_category.edit', $category->id) }}"
                                        class="btn btn-warning">Edit</a>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#deleteModal_{{ $category->id }}"
                                        data-action="{{ route('admin_category.destroy', $category->id) }}">
                                        Delete
                                    </button>
                                </td>
                            </tr>
                            <div class="modal fade" id="deleteModal_{{ $category->id }}" tabindex="-1"
                                aria-labelledby="deleteModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="deleteModalLabel">Delete category</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <form action="{{ route('admin_category.destroy', $category->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <div class="modal-body">
                                                Are you sure want to delete this category?
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
                            <td colspan="11" class="text-center">No category</td>
                        </tr>
                    @endif
                </tbody>
            </table>
            <div class="d-flex justify-content-center">
                {{ $categories->links() }}
            </div>
        </div>
    </div>
@endsection
