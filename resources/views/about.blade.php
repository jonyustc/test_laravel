@extends('layout')

@section('title','home')

@section('content')
      <div class="container">
        <div class="content">
            <div class="title">About Page</div>
            <div class="quote">Hello <strong>{{$name}}</strong> welcome to Our About page!</div>
        </div>
    </div>
@stop