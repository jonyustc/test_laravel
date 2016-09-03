@extends('layout')

@section('title','home')


@section('content')
      <div class="container">
        <div class="content">
            <div class="title">Home Page</div>
            <div class="quote">Our Home page!</div>
            @foreach($people as $person)
             <li> {{ $person }}</li>
            @endforeach
        </div>
    </div>
@stop