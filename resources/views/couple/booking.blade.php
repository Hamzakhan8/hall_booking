@extends('couple.dashboard')

@section('body-title')
    <h2>Booked Halls</h2>
@endsection

@section('body-upper-content')
@if (Session::has('booking_deleted'))
    <div class="alert alert-success" role="alert">
        <strong>{{ Session::get('booking_deleted') }}</strong>
    </div>
@endif
<div class="card-shadow">
    <div class="card-shadow-body p-0">
        <div class="table-responsive">
            <table class="table table-hover mb-0">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">Hall Name</th>
                        <th scope="col">Booking Date</th>
                        <th scope="col">checkin_date</th>
                        <th scope="col">checkout_date</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bookings as $booking)
                    <tr>
                        <td>{{ $booking['hall_name'] }}</td>
                        <td>{{ $booking['booking_date'] }}</td>
                        <td>{{ $booking['checkin_date'] }}</td>
                        <td>{{ $booking['checkout_date'] }}</td>
                        <td>
                            <a href="  class="action-links">
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

{{ $bookings->links() }}
@endsection
