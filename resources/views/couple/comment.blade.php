@extends('couple.dashboard')

@section('body-title')
    <h2>Comments</h2>
@endsection

@section('body-upper-content')
@if (Session::has('comment_deleted'))
<div class="alert alert-success" role="alert">
    <strong>{{ Session::get('comment_deleted') }}</strong>
</div>
@endif
<div class="card-shadow">
    <div class="card-shadow-body p-0">
        <div class="table-responsive">
            <table class="table table-hover mb-0">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">Username</th>
                        <th scope="col">Hall Name</th>
                        <th scope="col">Comment</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($comments as $comment)
                    <tr>
                        <td>{{ $comment['username'] }}</td>
                        <td>{{ $comment['hall_name'] }}</td>
                        <td>{{ $comment['comment'] }}</td>
                        <td>
                            <a href="{{ route('couple.comment.delete', $comment['id']) }}" class="action-links">
                                <lord-icon
                                src="https://cdn.lordicon.com/qsloqzpf.json"
                                trigger="loop"
                                colors="primary:#121331"
                                state="hover-empty"
                                style="width:25px;height:25px">
                                </lord-icon>
                            </a> |
                            <a href="{{ route('couple.reply', $comment['id']) }}" style="color: #17a2b8">
                                <i class="fa fa-reply"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

{{ $comments->links() }}
@endsection
