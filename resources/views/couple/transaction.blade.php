@extends('couple.dashboard')

@section('body-title')
    <h2>Transaction Records</h2>
@endsection

@section('body-upper-content')
<div class="card-shadow">
    <div class="card-shadow-body p-0">
        <div class="table-responsive">
            <table class="table table-hover mb-0">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">Hall Name</th>
                        <th scope="col">User Name</th>
                        <th scope="col">Amount </th>
                        <th scope="col">Transaction Date</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @foreach ($halls as $hall) --}}
                    <tr>
                        <th scope="row">New Resturant In Pesahwar</th>
                        <td>Behram Khattak</td>
                        <td>900$</td>
                        <td>22/4/2022</td>
                        <td><a href="javascript:" class="action-links"><i class="fa fa-trash"></i>Delete</a></td>
                    </tr>
                    {{-- @endforeach --}}
                </tbody>
            </table>
        </div>
    </div>
</div>

{{-- {{ $halls->links() }} --}}
@endsection
