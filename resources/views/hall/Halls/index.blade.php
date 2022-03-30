@extends('hall.dashboard')




@section('body-upper-content')
@section('body-title','Hall')

<a href="{{route('Halls.create')}}"  class="btn btn-warning">
    Add Hall
</a>
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

                <thead class="">
                    <tr>


                        <th scope="col">ID</th>

                        <th scope="col">title</th>
                        <th scope="col">delete</th>
                        <th scope="col">edit</th>



                    </tr>
                </thead>
                <tbody>

                    @foreach ($data as $Halls)



                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection

