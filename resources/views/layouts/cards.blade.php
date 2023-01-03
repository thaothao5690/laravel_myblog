<div class="cards">
    @foreach ($blogs as $blog)
        <div class="card-item">
            <div class="card">
                <a href="{{ route('blog.show', $blog->id) }}">
                    <img src="{{ asset('images/uploads/' . $blog->image) }}" class="card-img-top card-img" alt="...">
                </a>
                <div class="card-body card-content">
                    @if (Request::path() === 'blog/user')
                        <p class="card-content-status">
                            <span class="label">Status: </span>
                            @if ($blog->status === 10)
                                <span class="approved">Approved</span>
                            @elseif($blog->status === 1)
                                <span class="rejected">Rejected</span>
                            @else
                                <span class="pending">Pending</span>
                            @endif

                        </p>
                    @endif

                    <a class="card-content-title" href="{{ route('blog.show', $blog->id) }}">
                        <h5 class="card-title title">{{ $blog->title }}</h5>
                    </a>
                    <p class="card-text card-content-text">{{ $blog->description }}</p>
                    <div class="btns">
                        <a href="{{ route('blog.show', $blog->id) }}" class="btn btn-main me-2">Read</a>

                        @if (Request::path() === 'blog/user')
                            <a href="{{ route('blog.show', $blog->id) }}/edit" class="btn btn btn-outline-success me-2"
                                type="button">
                                <i class="fa-solid fa-pencil"></i>
                            </a>
                            <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal"
                                data-bs-target="#deleteModal_{{ $blog->id }}"
                                data-action="{{ route('blog.destroy', $blog->id) }}">
                                <i class="fa-regular fa-trash-can"></i>
                            </button>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="deleteModal_{{ $blog->id }}" tabindex="-1" aria-labelledby="deleteModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="deleteModalLabel">Delete blog</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('blog.destroy', $blog->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <div class="modal-body">
                            Are you sure want to delete this blog?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button class="btn btn-danger" type="submit">
                                Delete
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
</div>
