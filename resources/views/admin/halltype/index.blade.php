@extends('layouts.master')

@section('title','myhall')


@section('content')


<div class="card-shadow">
    <div class="card-shadow-body p-0">
        <div class="table-responsive">
            <table class="table table-hover mb-0">
                <thead class="thead-light">
                    <tr>



                        <th scope="col">name</th>
                        <th scope="col">delet</th>
                        <th scope="col">edit</th>

                        <th scope="col">view</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>

                        <td>hamza khan</td>
                        <td class="rounded-sm">
                            <a href="javascript:" class="action-links"><i class="fa fa-trash"></i></a>



                        </td>
                        <td> <a href="javascript:" class="action-links"><i class="fa fa-edit"></i></a></td>
                        <td>
                            <a href="javascript:" class="action-links"><i class="fa fa-eye"></i></a>
                        </td>


                    </tr>


                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
