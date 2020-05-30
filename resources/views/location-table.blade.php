@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @foreach ($locations as $location)
                        <div class="card">
                            <div class="card-body">
                                Adress: {{$location->adress}}
                                <br>
                                City: {{$location->city}}
                                <br>
                                Zip: {{$location->zip}}
                                <br>
                                Longitude: {{$location->longitude}}
                                <br>
                                Latitude: {{$location->latitude}}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection