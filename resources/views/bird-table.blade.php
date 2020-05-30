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
                                Name: {{$bird->name}}
                                <br>
                                Ring: {{$bird->ring}}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection