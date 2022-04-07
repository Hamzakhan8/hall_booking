@extends('couple.dashboard')

@section('body-title')
    <h2>Replies</h2>
@endsection

@section('body-upper-content')
@if (Session::has('replied_to_reply'))
<div class="alert alert-success" role="alert">
    <strong>{{ Session::get('replied_to_reply') }}</strong>
</div>
@endif
<div class="card-shadow">
    <div class="card-shadow-body p-0">
        <div class="table-responsive">
            <table class="table table-hover mb-0">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">Username</th>
                        <th scope="col">Reply</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($replies as $reply)
                    <tr>
                        <td>{{ $reply['username'] }}</td>
                        <td>{{ $reply['reply'] }}</td>
                        <td>
                            <a data-id="{{ $reply['id'] }}" class="myModalBtn" style="color: #17a2b8" data-toggle="modal">
                                <i class="fa fa-reply"></i>
                            </a>
                        </td>

                    <!-- Modal -->
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Reply User's Message</h5>
                                </div>
                                <div class="modal-body">
                                    <form class="myModalForm" action="{{ route('couple.re_reply') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Message Reply</label>
                                            <input type="hidden" id="contact_id" name="reply_id">
                                            <input type="text" id="contactReply" name="reply" class="form-control" placeholder="Enter reply here">
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
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

{{ $replies->links() }}
@endsection
