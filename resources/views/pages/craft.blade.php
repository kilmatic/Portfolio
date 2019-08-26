@extends('layouts.app')
@section('content')
    <h1>{{$title}}</h1>
    <hr>
    @if(count($crafts) > 0)
      @foreach($crafts as $craft)
          <div class="col-xs6 col-sm-4" style="">
          <div class="thumbnail kars" style="background-image:url('/storage/cover_image/{{$craft}}.JPG');background-size:cover;">
              <div class="caption">
                <h3>{{$craft}}</h3>
                <p>The level of {{$craft}} is Bigginer...</p>
                <a class="btn btn-info" href="localhost/{{$craft}}">more info</a>
              </div>
            </div>  
          </div>
      @endforeach
    @endif 
@endsection('content')