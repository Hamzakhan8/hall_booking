@extends('admin.dashboard')

@section('body-title')
    <h2>
        Comments
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
                        <th scope="col">Wedding Date</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">No .of Guest</th>
                        <th scope="col">Budget</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Hitesh Mahavar</th>
                        <td>11/12/2020</td>
                        <td><a href="mailto:hiteshmahavar22@gmail.com" class="btn btn-link btn-link-primary text-lowercase p-0">hiteshmahavar22@gmail.com</a></td>
                        <td><a href="tel:+91-9596880088" class="btn btn-link btn-link-primary text-lowercase p-0">+91 9596880088</a></td>
                        <td>250</td>
                        <td>$950</td>
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

{{ $comments->links() }}
@endsection
