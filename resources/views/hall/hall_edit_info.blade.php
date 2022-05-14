@extends('hall.dashboard')
@section('body-upper-content')
@section('body-title')
<div class="d-flex justify-content-between">
    <h2>Edit Hall Credentials</h2>
</div>
@endsection
<div class="card-shadow">
    <div class="card-shadow-body p-4">
        <form action="{{ route('hall.halls.update', $hall->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
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
              <label for="exampleFormControlInput1">Add Images </label>
              <input  class="form-control" type="file" value="{{ $hall->image }}" name="images[]" multiple>
            </div>
            <div class="form-group col-lg-10">
              <label for="exampleFormControlSelect1">Select Category</label>
              <select class="form-control" name="hall_category" value="{{ $hall->halls_category_id }}" id="exampleFormControlSelect1">
                <option value="{{ $hall->halls_category_id }}">
                    {{ $hall->hallCategory->category }}
                </option>
                @foreach ($categories as $category)
                    <option value="{{ $category['id'] }}">
                        {{ $category['category'] }}
                    </option>
                @endforeach
              </select>
            </div>

            <div class="form-group">
                <label for="exampleFormControlTitle1">Title</label>
                <input type="text" class="form-control" id="exampleFormControlTitle1" value="{{ $hall->title }}" name="title">
            </div>

            <div class="form-group">
              <label for="exampleFormControlTextarea1">Description</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3">{{ $hall->description }}</textarea>
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">City</label>
                <input type="text" class="form-control col-4" value="{{ $hall->location }}" name="location">
            </div>

            @foreach ($events[0] as $event => $value)
            @php
                $values = explode('-', $value);
            @endphp
                @if ($event === "wedding")
                    <div class="form-check pb-3">
                        <label class="form-check-label" for="exampleCheck1">{{ $event }}</label>
                        <div class="d-flex align-items-center">
                            <input type="number" class="form-control ml-3 col-4" value="{{ $values[0] }}" name="wedding_price" placeholder="Enter price">
                            <input type="number" class="form-control ml-3 col-4" value="{{ $values[1] }}" name="wedding_guests" placeholder="Enter guests">
                        </div>
                    </div>
                    @elseif ($event === "birthday")
                    <div class="form-check pb-3">
                        <label class="form-check-label" for="exampleCheck1">{{ $event }}</label>
                        <div class="d-flex align-items-center">
                            <input type="number" class="form-control ml-3 col-4" value="{{ $values[0] }}" name="birthday_price" placeholder="Enter price">
                            <input type="number" class="form-control ml-3 col-4" value="{{ $values[1] }}" name="birthday_guests" placeholder="Enter guests">
                        </div>
                    </div>
                    @elseif ($event === "concert")
                    <div class="form-check pb-3">
                        <label class="form-check-label" for="exampleCheck1">{{ $event }}</label>
                        <div class="d-flex align-items-center">
                            <input type="number" class="form-control ml-3 col-4" value="{{ $values[0] }}" name="concert_price" placeholder="Enter price">
                            <input type="number" class="form-control ml-3 col-4" value="{{ $values[1] }}" name="concert_guests" placeholder="Enter guests">
                        </div>
                    </div>
                    @elseif ($event === "festival")
                    <div class="form-check pb-3">
                        <label class="form-check-label" for="exampleCheck1">{{ $event }}</label>
                        <div class="d-flex align-items-center">
                            <input type="number" class="form-control ml-3 col-4" value="{{ $values[0] }}" name="festival_price" placeholder="Enter price">
                            <input type="number" class="form-control ml-3 col-4" value="{{ $values[1] }}" name="festival_guests" placeholder="Enter guests">
                        </div>
                    </div>
                @endif
            @endforeach

            <button type="submit" class="btn btn-primary mt-4">Save changes</button>
        </form>
    </div>
</div>
@endsection

