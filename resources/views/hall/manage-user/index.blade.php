@extends('hall.dashboard')




@section('body-upper-content')
@section('body-title','ManageCustomer')

<div class="card-shadow">
    <div class="card-shadow-body p-0">
        <div class="table-responsive">
            <table id="myTable" class="table table-bordered table-hover mb-0">
                @if (Session::has('success'))
                <p class="alert alert-success">{{session('success')}}</p>

                @endif
                @if (Session::has('massage'))
                <p class="alert alert-danger">{{session('massage')}}</p>

                @endif


                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Wedding Date</th>
                            <th scope="col">Email</th>

                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>


                        @foreach ($customers as $customer)
                        <tr>
                          <td>{{$customer->name}}</td>
                          <td>{{$customer->created_at}}</td>
                          <td>{{$customer->email}}</td>
                          <td>
                          <form method="post" action="{{ route('Manage-user.destroy', $customer->id) }}">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger btn-sm">delete</button>

                        </form></td>



                        </tr>
                        @endforeach
                    </tbody>


            </table>
        </div>
    </div>
</div>


@endsection

