@extends('layouts.master')




@section('content')
@section('title','Hall')

<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">
    add hall
  </button>
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

                        <th scope="col">name</th>
                        <th scope="col">delete</th>
                        <th scope="col">edit</th>



                    </tr>
                </thead>
                <tbody>

                    @foreach ($data as $hall)


                    <tr>
                        <td>{{$hall->id}}</td>

                        <td>{{$hall->name}}</td>
                        <td class="rounded-sm">

                            <form method="post" action="{{ route('hall.destroy', $hall->id) }}">
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>

                            </form>

                        </td>
                        <td> <a href="{{route('hall.edit',$hall->id)}}" class="action-links" ><i class="fa fa-edit"></i></a></td>



                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
@include('admin.Hall.modal.index')

@endsection

