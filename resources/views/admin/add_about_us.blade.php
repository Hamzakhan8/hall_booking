@extends('hall.dashboard')
@section('body-upper-content')
@section('body-title')
<div class="d-flex justify-content-between">
    <h2>Add About Us Here</h2>
</div>
@endsection
<div class="card-shadow">
    <div class="card-shadow-body p-4">
        <form action="{{ route('admin.about.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if ($errors && (is_array($errors) || $errors->all()))
            <div class="alert alert-danger" role="alert">
                <strong class="text-danger">Errors encounteded!</strong>
                <br>
                <ul>
                    @foreach ((is_array($errors) ? $errors : $errors->all()) as $error)
                    <li>
                        <strong>{{ $error }}</strong>
                    </li>
                    @endforeach
                </ul>
            </div>
            @endif


            <div class="form-group">
              <label for="exampleFormControlTextarea1">Write About Your Website</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" name="about_us" rows="10"></textarea>
            </div>
            <button type="submit" class="btn btn-primary mt-4">Save changes</button>
        </form>
    </div>
</div>
@endsection

