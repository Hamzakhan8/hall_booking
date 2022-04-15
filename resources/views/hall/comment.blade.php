@extends('hall.dashboard')

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
                    @php
                        $comment_id;
                    @endphp
                    @foreach ($comments as $comment)
                    {{ $comment_id = $comment['id'] }}
                    <tr>
                        <td>{{ $comment['username'] }}</td>
                        <td>{{ $comment['hall_name'] }}</td>
                        <td>{{ $comment['comment'] }}</td>
                        <td>
                            <a style="color: #17a2b8"
                            data-name="{{ $comment['username'] }}"
                            data-id="{{ $comment['id'] }}"
                            data-toggle="tooltip"
                            data-placement="top"
                            class="myModalBtn"
                            title="Reply">
                               <i class="fa fa-reply"></i>
                           </a> |
                            <a href="{{ route('hall.reply', $comment['id']) }}"
                             style="color: #17a2b8"
                             data-toggle="tooltip"
                             data-placement="top"
                             title="Replies">
                                <i class="fa fa-reply-all"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Reply User's Message</h5>
                    </div>
                    <div class="modal-body">
                        <form class="myModalForm" action="{{ route('hall.reply.create', $comment_id) }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Message Reply To</label>
                                <input type="text" class="form-control" id="contact_username" name="comment_username">
                            </div>
                            <div class="form-group">
                                <input type="hidden" id="contact_id" name="comment_id">
                                <input type="text" id="contactReply" name="reply" class="form-control" placeholder="Enter reply here" required>
                            </div>
                            <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{ $comments->links() }}
@endsection
