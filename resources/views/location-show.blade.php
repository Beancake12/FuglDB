@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>
                <location-component :location="{{$location}}"></location-component>
                </div>
            </div>
        </div>
    </div>
@endsection