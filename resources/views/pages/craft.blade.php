@extends('layouts.app')
@section('content')
  <div class="container-fluid craft-container">
    <div class="col-lg-8 craft-columns craft-work">
      @if(count($crafts) > 0)
        @foreach($crafts as $craft)
            <div class="row">
              <div class="col-md-5">
                <img src="/storage/cover_image/{{$craft}}.JPG" style="">                
              </div>
              <div class="col-md-6">
                <h3>{{$craft}}</h3>
                <p>The level of {{$craft}} is Bigginer...</p>
                <a class="btn btn-info">Preview</a>
                <a class="btn btn-info" href="localhost/{{$craft}}/index.html">Visit</a>
              </div>  
            </div>
        @endforeach
      @endif 
    </div>
    <div class="col-lg-4 text-xs-center craft-form ">
      <h1>Get in Touch</h1>
      <div class="row social">        
        <span class="social_icons">
            <a href="https://github.com/kilmatic/Portfolio">
                <i class="fab fa-github fa-3x"></i>
            </a>
        </span>
        <span class="social_icons">
            <a href="https://stackoverflow.com/users/9205996/kanya">
                <i class="fab fa-stack-overflow fa-3x"></i>
            </a>
        </span> 
        <span class="social_icons">
            <a href="https://www.linkedin.com/in/kanya-kila-89385090">
                <i class="fab fa-linkedin-in fa-3x"></i>
            </a>
        </span>
        <span class="social_icons">
            <a href="https://twitter.com/Kanya80330712">
                <i class="fab fa-twitter fa-3x"></i>
            </a>
        </span>         
      </div>
      <hr style="width:40%;">
      <h4 style="text-align:center">kilakanya@gmail.com</h4>
      <hr style="width:40%;">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2 text-xs-center">
          {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}
            <div class="form-group col-md-6">
              {{Form::label('name','Name')}}
              {{Form::Text('name', '', ['class' => 'form-control', 'placeholder' => 'Enter Name']) }}
            </div>
            <div class="form-group col-md-6">
                {{Form::label('lastname','Lastname')}}
                {{Form::Text('lastname', '', ['class' => 'form-control', 'placeholder' => 'Enter Lastname']) }} 
            </div>
            <div class="form-group col-md-12">
              {{Form::label('title', 'Title')}}
              {{Form::text('title', '', ['class' => 'form-control', 'placeholder' =>'Title'])}}
            </div>
            <div class="form-group col-md-12">
              {{Form::label('body', 'Body')}}
              {{Form::textarea('body', '', ['class' => 'form-control', 'placeholder' =>'Body Text', 'rows' => '6'])}}
            </div>
            <div class="col-md-12 text-center">
              {{Form::submit('Submit', ['id' => 'submit-form'])}}
            </div>
          {!! Form::close() !!}
        </div> 
      </div>
    </div>
  </div>
@endsection