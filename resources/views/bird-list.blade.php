@extends('layouts.app')

@section('content')
    <bird-list-component :birds="{{$birds}}"></bird-list-component>
@endsection