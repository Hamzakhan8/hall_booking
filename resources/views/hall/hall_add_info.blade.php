@extends('hall.dashboard')
@section('body-upper-content')
@section('body-title')
<div class="d-flex justify-content-between">
    <h2>Add Hall Credentials</h2>
</div>
@endsection
<div class="card-shadow">
    <div class="card-shadow-body p-4">
        <form action="{{ route('hall.halls.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="exampleFormControlInput1">Add Images </label>
              <input  class="form-control" type="file" name="images[]" multiple>
            </div>
            <div class="form-group col-lg-10">
              <label for="exampleFormControlSelect1">Select Category</label>
              <select class="form-control" name="hall_category" id="exampleFormControlSelect1">
                @foreach ($categories as $category)
                    <option class="select_input_option"
                        value="{{ $category['id'] }}"
                        data-category="{{ $category['category'] }}">
                        {{ $category['category'] }}
                    </option>
                @endforeach
              </select>
            </div>

            <div class="form-group">
                <label for="exampleFormControlTitle1">Title</label>
                <input type="text" class="form-control" id="exampleFormControlTitle1" name="title">
            </div>

            <div class="form-group">
              <label for="exampleFormControlTextarea1">Description</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3"></textarea>
            </div>

            <div class="form-check pb-3">
                <label class="form-check-label" for="exampleCheck1">Wedding</label>
                <div class="d-flex align-items-center">
                    <input type="number" class="form-control ml-3 col-4" name="wedding_price" placeholder="Enter price">
                    <input type="number" class="form-control ml-3 col-4" name="wedding_guests" placeholder="Enter guests">
                </div>
            </div>

            <div class="form-check pb-3">
                <label class="form-check-label" for="exampleCheck2">Birthday</label>
                <div class="d-flex align-items-center">
                    <input type="number" class="form-control ml-3 col-4" name="birthday_price" placeholder="Enter price">
                    <input type="number" class="form-control ml-3 col-4" name="birthday_guests" placeholder="Enter guests">
                </div>
            </div>

            <div class="form-check pb-3">
                <label class="form-check-label" for="exampleCheck3">Concert</label>
                <div class="d-flex align-items-center">
                    <input type="number" class="form-control ml-3 col-4" name="concert_price" placeholder="Enter price">
                    <input type="number" class="form-control ml-3 col-4" name="concert_guests" placeholder="Enter guests">
                </div>
            </div>

            <div class="form-check pb-3">
                <label class="form-check-label" for="exampleCheck4">Festival</label>
                <div class="d-flex align-items-center">
                    <input type="number" class="form-control ml-3 col-4" name="festival_price" placeholder="Enter price">
                    <input type="number" class="form-control ml-3 col-4" name="festival_guests" placeholder="Enter guests">
                </div>
            </div>

            <button type="submit" class="btn btn-primary mt-4">Save changes</button>
        </form>
    </div>
</div>
@endsection

