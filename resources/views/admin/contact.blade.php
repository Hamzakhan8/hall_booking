@extends('admin.dashboard')

@section('body-title')
    <h2>
        Contact
    </h2>
@endsection

@section('body-upper-content')
<div class="card-shadow">
    <div class="card-shadow-body p-0">
        <div class="table-responsive">
            <table class="table table-hover mb-0">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">User Name</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Mobile</th>
                        <th scope="col">Your Message</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contacts as $contact)
                    <tr>
                        <th scope="row">{{ $contact['username'] }}</th>
                        <td>{{ $contact['first_name'] }}</td>
                        <td>{{ $contact['last_name'] }}</td>
                        <td>{{ $contact['email'] }}</td>
                        <td>{{ $contact['mobile'] }}</td>
                        <td>{{ $contact['your_message'] }}</td>
                        <td class="d-flex">
                            <a href="{{ route('admin.contact.delete', $contact['id']) }}" class="action-links">
                                <lord-icon
                                src="https://cdn.lordicon.com/qsloqzpf.json"
                                trigger="loop"
                                colors="primary:#121331"
                                state="hover-empty"
                                style="width:25px;height:25px">
                                </lord-icon>
                            </a> |
                            <a data-id="{{ $contact['id'] }}" class="myModalBtn" style="color: #17a2b8" data-toggle="modal">
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
                                        <form class="myModalForm" action="{{ route('admin.contact.reply.submit') }}" method="POST">
                                            @csrf
                                            <div class="form-group">
                                              <label for="exampleInputEmail1">Message Reply</label>
                                              <input type="hidden" id="contact_id" name="id">
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

{{ $contacts->links() }}
@endsection
