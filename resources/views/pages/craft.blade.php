@extends('layouts.app')
@section('content')
    <h1>{{$title}}</h1>
    <p>This is the start of my change!!!</p>
    @if(count($crafts) > 0)
      @foreach($crafts as $craft)
      <div class="col-xs6 col-sm-4">
        <div class="thumbnail">
          <img src="storage/cover_image/Sketch_1528651922.png" alt="php">
          <div class="caption">
            <h3>{{$craft}}</h3>
            <p>The level of {{$craft}} is Bigginer...</p>
            <a class="btn btn-info" href="#">more info</a>
          </div>
        </div>  
      </div>
      @endforeach
    @endif 
@endsection('content')