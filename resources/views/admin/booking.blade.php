@extends('admin.dashboard')

@section('body-title')
    <h2>
        Bookings
    </h2>
@endsection

@section('body-upper-content')
<div class="card-shadow">
    <div class="card-shadow-body p-0">
        <div class="table-responsive">
            <table class="table table-hover mb-0">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Booking Date</th>
                        <th scope="col">checkin_date</th>
                        <th scope="col">checkout_date</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Hitesh Mahavar</th>
                        <td>11/12/2020</td>
                        <td>11/12/2020</td>
                        <td>11/12/2020</td>
                        <td>
                            <a href="javascript:" class="action-links">
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
                </tbody>
            </table>
        </div>
    </div>
</div>

{{ $bookings->links() }}
@endsection
