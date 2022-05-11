@extends('hall.dashboard')
@section('body-upper-content')
@section('body-title')
<div class="d-flex justify-content-between">
    <h2>Edit Hall Credentials</h2>
</div>
@endsection
<div class="card-shadow">
    <div class="card-shadow-body p-4">
        <form action="{{ route('hall.halls.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="exampleFormControlInput1">Add Images </label>
              <input  class="form-control" type="file" value="{{ $hall->image }}" name="images[]" multiple>
            </div>
            <div class="form-group col-lg-10">
              <label for="exampleFormControlSelect1">Select Category</label>
              <select class="form-control" name="hall_category" value="{{ $hall->hallCategory->category }}" id="exampleFormControlSelect1">
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

            @foreach ($events[0] as $event => $value)
            @php
                $values = explode('-', $value);
            @endphp
                <div class="form-check pb-3">
                    <label class="form-check-label" for="exampleCheck1">{{ $event }}</label>
                    <div class="d-flex align-items-center">
                        <input type="number" class="form-control ml-3 col-4" value="{{ $values[0] }}" name="wedding_price" placeholder="Enter price">
                        <input type="number" class="form-control ml-3 col-4" value="{{ $values[1] }}" name="wedding_guests" placeholder="Enter guests">
                    </div>
                </div>
            @endforeach

            <button type="submit" class="btn btn-primary mt-4">Save changes</button>
        </form>
    </div>
</div>
@endsection

