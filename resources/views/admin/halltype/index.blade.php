@extends('layouts.master')




@section('content')
@section('title','myhall')

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
                <thead class="">
                    <tr>



                        <th scope="col">title</th>
                        <th scope="col">delet</th>
                        <th scope="col">edit</th>

                        <th scope="col">view</th>

                    </tr>
                </thead>
                <tbody>

                    @foreach ($data as $halltype)


                    <tr>

                        <td>{{$halltype->name}}</td>
                        <td class="rounded-sm">
                            <a href="javascript:" class="action-links"><i class="fa fa-trash"></i></a>



                        </td>
                        <td> <a href="javascript:" class="action-links" data-toggle="" data-target="#exampleModal"><i class="fa fa-edit"></i></a></td>
                        <td>
                            <a href="javascript:" class="action-links"><i class="fa fa-eye"></i></a>
                        </td>


                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
@include('admin.halltype.modal.index')

@endsection

