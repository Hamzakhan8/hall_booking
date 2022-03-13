@extends('layouts.super')

@section('title','dashboard')


@section('content')

<div class="card-shadow">
    <div class="card-shadow-body">
        <div class="couple-info p-0">
            <div class="row row-cols-2 row-cols-md-4 row-cols-sm-2">
                <div class="col">
                    <div class="couple-status-item">
                        <div class="counter">
                            0
                        </div>
                        <div class="text">
                            <strong>Guests</strong>
                            <small>From Total</small>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="couple-status-item">
                        <div class="counter">
                            0
                        </div>
                        <div class="text">
                            <strong>Accepted</strong>
                            <small>From Total</small>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="couple-status-item">
                        <div class="counter">
                            0
                        </div>
                        <div class="text">
                            <strong>Waiting</strong>
                            <small>From Total</small>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="couple-status-item">
                        <div class="counter">
                            0
                        </div>
                        <div class="text">
                            <strong>acccept</strong>
                            <small>From Total</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
