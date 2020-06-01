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
                        <input type="text" name="adress" value="{{old('adress')}}">
                        {{$errors->first('adress')}}
                        <br>
                        <label>By</label>
                        <input type="text" name="city" value="{{old('city')}}">
                        {{$errors->first('city')}}
                        <br>
                        <label>Post nr.</label>
                        <input type="text" name="zip" value="{{old('zip')}}">
                        {{$errors->first('zip')}}
                        <br>
                        <label>Længdegrad</label>
                        <input type="text" name="longitude" value="{{old('longitude')}}">
                        {{$errors->first('longitude')}}
                        <br>
                        <label>Breddegrad</label>
                        <input type="text" name="latitude" value="{{old('latitude')}}">
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
