@extends('admin.layouts.app')

@section('content')
    <div class="page-wrapper">
        <div class="table-wrapper">
            <h5 class="title text-center">Contacts</h5>
            <table class="table table-data table-hover border align-middle">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">Title</th>
                        <th scope="col">Email</th>
                        <th scope="col">Created At</th>
                        <th scope="col">Status</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @if ($contacts->count() !== 0)
                        @foreach ($contacts as $id => $contact)
                            <tr>
                                <td>{{ $contact->id }}</td>
                                <td>{{ $contact->full_name }}</td>
                                <td class="table-column-title">{{ $contact->title }}</td>
                                <td>{{ $contact->email }}</td>
                                <td>{{ $contact->created_at }}</td>
                                <td>{{ $contact->status === 10 ? 'Replied' : "Hasn't replied yet" }}</td>
                                @if ($contact->status === -1)
                                    <td>
                                        <a href="{{ route('admin_contact.reply', $contact->id) }}"
                                            class="btn btn-warning">Reply</a>
                                    </td>
                                @else
                                    <td></td>
                                @endif
                                <td>
                                    <a href="{{ route('admin_contact.show', $contact->id) }}"
                                        class="btn btn-success">View</a>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="11" class="text-center">No contact</td>
                        </tr>
                    @endif
                </tbody>
            </table>
            <div class="d-flex justify-content-center">
                {{ $contacts->links() }}
            </div>
        </div>
    </div>
@endsection
