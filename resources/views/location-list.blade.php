@extends('layouts.app')

@section('content')
    <location-list-component :locations="{{$locations}}"></location-list-component>
@endsection