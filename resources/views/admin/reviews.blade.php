@extends('admin.dashboard')

@section('body-title')
    <h2>
        Reviews
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
                        <th scope="col">Hall Name</th>
                        <th scope="col">Reviews</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($reviews as $review)
                    <tr>
                        <th scope="row">{{ $review['username'] }}</th>
                        <td>{{ $review['hall_name'] }}</td>
                        <td>{{ $review['reviews'] }}</td>
                        <td>
                            <a href="{{ route('admin.reviews.delete', $review['id']) }}" class="action-links">
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

{{ $reviews->links() }}
@endsection
