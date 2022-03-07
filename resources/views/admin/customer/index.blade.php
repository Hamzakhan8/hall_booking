@extends('layouts.master')




@section('content')
@section('title','Customer')

<a href="{{route('customer.create')}}"  class="btn btn-warning">
    add Customer
</a>
<div class="card-shadow">
    <div class="card-shadow-body p-0">
        <div class="table-responsive">
            <table class="table table-hover mb-0">
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

                    @foreach ($data as $halltype)


                    <tr>
                        <td>{{$halltype->hall_types_id}}</td>

                        <td>{{$halltype->title}}</td>
                        <td class="rounded-sm">

                            <form method="post" action="{{ route('hall.destroy', $halltype->id) }}">
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>

                            </form>

                        </td>
                        <td> <a href="{{route('hall.edit',$halltype->id)}}" class="action-links" ><i class="fa fa-edit"></i></a></td>



                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
@include('admin.halltype.modal.index')

@endsection

