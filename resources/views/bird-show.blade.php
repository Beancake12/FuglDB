@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <div class="card">
                        <div class="card-body">
                            @if ($bird)
                                {{$bird->name}}
                                <br>
                                {{$bird->ring}}
                                <br>
                                {{$bird->dead}}
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
                            @else
                                No bird was found with that ID
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection