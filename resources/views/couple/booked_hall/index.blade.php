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
                        <td>11/12/2020</td>
                        <td><a href="mailto:hiteshmahavar22@gmail.com" class="btn btn-link btn-link-primary text-lowercase p-0">umar@gmail.com</a></td>
                        <td><a href="tel:+91-9596880088" class="btn btn-link btn-link-primary text-lowercase p-0">+91 9596880088</a></td>
                        <td>$950</td>
                        <td><a href="javascript:" class="action-links"><i class="fa fa-trash"></i></a> </td>
                    </tr>
                    {{-- @endforeach --}}
                </tbody>
            </table>
        </div>
    </div>
</div>

{{-- {{ $halls->links() }} --}}
@endsection
