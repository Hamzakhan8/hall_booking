@extends('layouts.master')




@section('content')
@section('title','booking')



<div class="card-shadow-body">
    <form action="{{route('booking.store')}} " method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <select class="form-control" name="customer_id" >
                    <option > ----Select Customers </option>
                    @foreach ($customers as $customer )

                    <option value="{{$customer->id}}" >{{$customer->full_name}}</option>

                    @endforeach
                </select>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <label class="text-danger  ">checkin_date</label>

                    <input type="date" class="form-control form-dark checkin-date" name="checkin_date" placeholder="checkin_date">
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <label class="text-danger">checkout_date</label>

                    <input type="date" class="form-control form-dark" name="checkout_date" placeholder="checkin_date" >
                </div>
            </div>

            <div class="col-md-12">
                <select class="form-control" name="hall_id">
                    <option > ----Select hall </option>
                  {{--  @foreach ($customers as $customer )

                    <option value="{{$customer->id}}" >{{$customer->full_name}}</option>

                    @endforeach --}}
                </select>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label class="text-danger">total_adult</label>

                    <input type="number" class="form-control form-dark" name="total_adults" placeholder="Enter adult"  >
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label class="text-danger">total_kids</label>

                    <input type="number" class="form-control form-dark" name="total_childern"  placeholder="Enter kids " >
                </div>
            </div>







            <div class="col-md-12">
                <button type="submit" class="btn btn-primary btn-rounded">save</button>
            </div>
</div>
 @endsection
