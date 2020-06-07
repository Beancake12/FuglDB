@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <a href="{{route('bird.create')}}">Opret fugl</a>
                </div>
                <div class="card-body">
                    <a href="{{route('bird.list')}}">Alle fugle</a>
                </div>
                <div class="card-body">
                    <a href="{{route('location.create')}}">Opret område</a>
                </div>
                <div class="card-body">
                    <a href="{{route('location.list')}}">Alle områder</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
