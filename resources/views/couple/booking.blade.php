@extends('couple.dashboard')

@section('body-title')
    <h2>Booked Halls</h2>
@endsection

@section('body-upper-content')
<div class="card-shadow">
    <div class="card-shadow-body p-0">
        <div class="table-responsive">
            <table class="table table-hover mb-0">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">Hall Name</th>
                        <th scope="col">Booked Date</th>
                        <th scope="col">Cheakin Date</th>
                        <th scope="col">CheackOut Date</th>
                        <th scope="col">Budget</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @foreach ($halls as $hall) --}}
                    <tr>
                        <th scope="row">Umar FarooQ</th>
                        <td>1/03/2022</td>
                        <td>11/12/2020</td>
                        <td>11/12/2023  </td>
                        <td>$950</td>
                        <td><a href="javascript:" class="action-links btn btn-danger btn-sm"><i class="fa fa-trash"></i>Delete</a> <a href="javascript:" class="action-links btn btn-info btn-sm"><i class="fa fa-trash"></i>View</a></td>
                        <td> </td>
                    </tr>
                    {{-- @endforeach --}}
                </tbody>
            </table>
        </div>
    </div>
</div>

{{-- {{ $halls->links() }} --}}
@endsection
