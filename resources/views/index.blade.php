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
                    <a href="{{route('bird.table')}}">Alle fugle</a>
                </div>
                <div class="card-body">
                    <a href="{{route('location.index')}}">Opret område</a>
                </div>
                <div class="card-body">
                    <a href="{{route('location.table')}}">Alle områder</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
