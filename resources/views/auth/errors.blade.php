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
@elseif (Session::has('created'))
<div class="alert alert-success" role="alert">
    <strong>{{ Session::get('created') }}</strong>
</div>
@elseif (Session::has('updated'))
<div class="alert alert-success" role="alert">
    <strong>{{ Session::get('updated') }}</strong>
</div>
@elseif (Session::has('deleted'))
<div class="alert alert-success" role="alert">
    <strong>{{ Session::get('deleted') }}</strong>
</div>
@endif
