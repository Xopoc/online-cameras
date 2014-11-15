@extends('layout')

@section('content')
    <div class="container">
        <h1>Hidy {{ $name }}</h1>
        <ul>
            @foreach($people as $person)
                <li><a href="{{ URL::route('startPageRoute', array('name' => $person)) }}">{{ $person }}</a></li>
            @endforeach
        </ul>
    </div>


     <div class="container">
        <div class="example">
             <input type="checkbox" id="customcheckbox"/>
             <label for="customcheckbox">
                 <i class="glyphicon glyphicon-play"></i>
                 <i class="glyphicon glyphicon-stop"></i>
             </label>
        </div>
        <div class="example2">
            <input type="checkbox" id="customcheckbox2"/>
            <label for="customcheckbox2" data-off="play" data-on="stop"></label>
        </div>
     </div>

     <div class="my-carousel">
        <div class="my-carousel-inner">
            <img src="http://lorempixel.com/300/200/animals/" alt=""/>
            <img src="http://lorempixel.com/300/200/animals/1" alt=""/>
            <img src="http://lorempixel.com/300/200/animals/2" alt=""/>
            <img src="http://lorempixel.com/300/200/animals/3" alt=""/>
            <img src="http://lorempixel.com/300/200/animals/4" alt=""/>
            <img src="http://lorempixel.com/300/200/animals/5" alt=""/>
            <img src="http://lorempixel.com/300/200/animals/6" alt=""/>
            <img src="http://lorempixel.com/300/200/animals/7" alt=""/>
            <img src="http://lorempixel.com/300/200/animals/8" alt=""/>
        </div>
     </div>
@stop