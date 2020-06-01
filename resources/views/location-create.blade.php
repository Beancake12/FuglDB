@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <form action="/location/create" method="POST">
                        @csrf
                        <h1>Område</h1>
                        <label>Addresse</label>
                        <input type="text" name="adress">
                        {{$errors->first('adress')}}
                        <br>
                        <label>By</label>
                        <input type="text" name="city">
                        {{$errors->first('city')}}
                        <br>
                        <label>Post nr.</label>
                        <input type="text" name="zip">
                        {{$errors->first('zip')}}
                        <br>
                        <label>Længdegrad</label>
                        <input type="text" name="longitude">
                        {{$errors->first('longitude')}}
                        <br>
                        <label>Breddegrad</label>
                        <input type="text" name="latitude">
                        {{$errors->first('latitude')}}
                        <br>
                        <input type="submit" value="Gem">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
