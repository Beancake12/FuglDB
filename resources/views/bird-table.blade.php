@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @foreach ($birds as $bird)
                        <div class="card">
                            <div class="card-body">
                                Navn: {{$bird->name}}
                                <br>
                                Ring nr.: {{$bird->ring}}
                                <br>
                                Områder:
                                <br>
                                @foreach ($bird->locations as $location)
                                    {{$location->adress}}
                                    <br>
                                    {{$location->city}}
                                    <br>
                                    {{$location->zip}}
                                    <br>
                                    {{$location->latitude}}
                                    <br>
                                    {{$location->longitude}}
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection