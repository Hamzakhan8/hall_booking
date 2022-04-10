@extends('couple.dashboard')

@section('body-title')
    <h2>Replies</h2>
@endsection

@section('body-upper-content')
@if (Session::has('reply_sent'))
<div class="alert alert-success" role="alert">
    <strong>{{ Session::get('reply_sent') }}</strong>
</div>
@endif
<div class="card-shadow">
    <div class="card-shadow-body p-0">
        <div class="card" style="overflow-y: scroll;height:30rem">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            @foreach ($replies as $reply)
                                <div class="media pb-5">
                                    <img class="mr-3 rounded-circle" alt="Bootstrap Media Preview" src="{{ asset('assets/images/author_img.png') }}" />
                                    <div class="media-body">
                                        <div class="row">
                                            <div class="col-8 d-flex">
                                                <h5 class="pr-3">{{ $reply['username'] }}</h5>
                                                <span>{{ \Carbon\Carbon::parse($reply['created_at'])->diffForHumans() }}</span>
                                            </div>
                                        </div> {{ $reply['reply'] }}
                                        <div class="col-4">
                                            <a style="color: #17a2b8;cursor: pointer;" data-id="{{ $reply['id'] }}" class="myModalBtn" data-toggle="modal"><i class="fa fa-reply"></i></a>
                                        </div>
                                        @foreach ($re_replies as $re_reply)

                                            @if ($reply['id'] == $re_reply['reply_id'])
                                                <div class="media mt-4">
                                                    <a class="pr-3" href="#"><img class="rounded-circle" alt="Bootstrap Media Another Preview" src="{{ asset('assets/images/author_img.png') }}" /></a>
                                                    <div class="media-body">
                                                        <div class="row">
                                                            <div class="col-12 d-flex">
                                                                <h5 class="pr-3">{{ $re_reply['username'] }} to {{ $reply['username'] }}</h5>
                                                                <span>{{ \Carbon\Carbon::parse($re_reply['created_at'])->diffForHumans() }}</span>
                                                            </div>
                                                        </div> {{ $re_reply['reply'] }}
                                                        <div class="col-4">
                                                            <a style="color: #17a2b8;cursor: pointer;" data-id="{{ $re_reply['reply_id'] }}" class="myModalBtn" data-toggle="modal"><i class="fa fa-reply"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif

                                        @endforeach
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Reply User's Message</h5>
                    </div>
                    <div class="modal-body">
                        <form class="myModalForm" action="{{ route('couple.re_reply', $comment_id) }}" method="POST">
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
    </div>
</div>

{{-- {{ $replies->links() }} --}}
@endsection

{{-- <div class="table-responsive">
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
                            <form class="myModalForm" action="{{ route('couple.re_reply', $id) }}" method="POST">
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
</div> --}}
