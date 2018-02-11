@extends('layouts.app')
@section('content')
    <h1>{{$title}}</h1>
    <p>This is the start of my change!!!</p>
    @if(count($crafts) > 0)
      <ul class="list-group">
      @foreach($crafts as $craft)
        <li class="list-group-item">{{$craft}}</li>
      @endforeach
      </ul>
    @endif 
@endsection('content')