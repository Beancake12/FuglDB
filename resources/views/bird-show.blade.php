@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>
                    <bird-component :bird="{{$bird}}"></bird-component>
                </div>
            </div>
        </div>
    </div>
@endsection