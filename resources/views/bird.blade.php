@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <form action="/bird/create" method="POST">
                        @csrf
                    	<h1>Bird</h1>
                        <label>Name</label>
                        <input type="text" name="name">
                        {{$errors->first('name')}}
                        <br>
                        <label>Ring</label>
                        <input type="text" name="ring">
                        <br>
                        <label>Dead</label>
                        <input type="checkbox" name="dead" value="0">
                        <br>
                        <input type="submit" value="Gem">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
