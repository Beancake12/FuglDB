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
                                Addresse: {{$location->adress}}
                                <br>
                                By: {{$location->city}}
                                <br>
                                Post nr.: {{$location->zip}}
                                <br>
                                Længdegrad: {{$location->longitude}}
                                <br>
                                Breddegrad: {{$location->latitude}}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection