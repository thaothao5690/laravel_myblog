@extends('admin.layouts.app')

@section('content')
    <div class="page-wrapper">
        <div class="table-wrapper">
            <h5 class="title text-center">Today new blogs</h5>
            <table class="table table-data table-hover align-middle">
                <caption>Blogs table</caption>
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Image</th>
                        <th scope="col">Title</th>
                        <th scope="col">Author</th>
                        <th scope="col">Created At</th>
                        <th scope="col">Status</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @if ($blogs->count() > 0)
                        @foreach ($blogs as $blog)
                            <tr>
                                <td>{{ $blog->id }}</td>
                                <td>
                                    <img class="image" src="{{ asset('images/uploads/' . $blog->image) }}" alt="">
                                </td>
                                <td>{{ $blog->title }}</td>
                                <td>{{ $blog->author }}</td>
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

                                <td>
                                    <a href="{{ route('admin_blog.show', $blog->id) }}" class="btn btn-success">View</a>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr class="text-center">
                            <td colspan="8">No new blog today</td>
                        </tr>
                    @endif
                </tbody>
            </table>
            <a href="{{ route('admin_blog.index') }}" class="view-more">View more >></a>
        </div>

        <div class="table-wrapper">
            <h5 class="title text-center">Today new contacts</h5>
            <table class="table table-data table-hover align-middle">
                <caption>Contacts table</caption>
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Title</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">Created At</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @if ($contacts->count() > 0)
                        @foreach ($contacts as $contact)
                            <tr>
                                <td>{{ $contact->id }}</td>
                                <td class="table-column-title">{{ $contact->title }}</td>
                                <td>{{ $contact->full_name }}</td>
                                <td>{{ $contact->created_at }}</td>
                                <td>
                                    <a href="{{ route('admin_contact.show', $contact->id) }}"
                                        class="btn btn-success">View</a>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr class="text-center">
                            <td colspan="6">No new contact today</td>
                        </tr>
                    @endif
                </tbody>
            </table>
            <a href="{{ route('admin_contact.index') }}" class="view-more">View more >></a>
        </div>
    </div>
@endsection
