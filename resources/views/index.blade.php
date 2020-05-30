@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <a href="{{route('bird.index')}}">Bird</a>
                </div>
                <div class="card-body">
                    <a href="{{route('bird.table')}}">Birds</a>
                </div>
                <div class="card-body">
                    <a href="{{route('location.index')}}">Location</a>
                </div>
                <div class="card-body">
                    <a href="{{route('location.table')}}">Locations</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
