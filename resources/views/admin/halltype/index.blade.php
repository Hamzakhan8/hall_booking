@extends('layouts.master')




@section('content')
@section('title','HallType')

<a href="{{route('halltype.create')}}"  class="btn btn-warning">
    add hall Type
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

                        <th scope="col">name</th>
                        <th scope="col">prize</th>
                        <th scope="col">IMAGES</th>


                        <th scope="col">delete</th>
                        <th scope="col">edit</th>



                    </tr>
                </thead>
                <tbody>



                    @foreach ($data as $halltype)


                    <tr>
                        <td>{{$halltype->id}}</td>

                        <td>{{$halltype->name}}</td>
                        <td>{{$halltype->prize}}</td>
                        <td>{{count($halltype->halltypeimage)}}</td>



                        <td class="rounded-sm">

                            <form method="post" action="{{ route('halltype.destroy', $halltype->id) }}">
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>

                            </form>

                        </td>
                        <td> <a href="{{route('halltype.edit',$halltype->id)}}" class="action-links" ><i class="fa fa-edit"></i></a></td>



                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection

