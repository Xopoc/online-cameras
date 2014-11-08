@extends('layout')

@section('content')
    <h1>Hidy {{ $name }}</h1>
    <ul>
        @foreach($people as $person)
            <li><a href="{{ URL::route('startPageRoute', array('name' => $person)) }}">{{ $person }}</a></li>
        @endforeach
    </ul>

@stop