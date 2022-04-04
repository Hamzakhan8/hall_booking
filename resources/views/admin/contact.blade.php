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
                        <td>
                            <a href="{{ route('admin.contact.delete', $contact['id']) }}" class="action-links">
                                <lord-icon
                                src="https://cdn.lordicon.com/qsloqzpf.json"
                                trigger="loop"
                                colors="primary:#121331"
                                state="hover-empty"
                                style="width:25px;height:25px">
                                </lord-icon>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

{{ $contacts->links() }}
@endsection
