@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <h1>Bird</h1>
                    <form action="/bird/create" method="POST">
                        @csrf
                        <label>Name</label>
                        <input type="text" name="name">
                        <label>Ring</label>
                        <input type="text" name="ring">
                        <label>Dead</label>
                        <input type="checkbox" name="dead">
                        <input type="submit" value="Gem">
                    </form>

                    <h1>Location</h1>
                    <form action="/location/create" method="POST">
                        @csrf
                        <label>Bird id</label>
                        <input type="text" name="bird_id">
                        <label>Adress</label>
                        <input type="text" name="adress">
                        <label>City</label>
                        <input type="text" name="city">
                        <label>Zip</label>
                        <input type="text" name="zip">
                        <label>Latitude</label>
                        <input type="text" name="latitude">
                        <label>Longitude</label>
                        <input type="text" name="longitude">
                        <input type="submit" value="Gem">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
