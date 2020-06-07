@extends('layouts.app')

@section('content')
    <bird-create-component :errors="{{$errors}}" :locations="{{$locations}}"></bird-create-component>
@endsection
