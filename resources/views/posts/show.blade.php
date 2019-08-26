@extends('layouts.app')
@section('content')
    <a href="/posts" class="btn btn-default">Go Back</a>
    <h1 style="text-align:center;">{{$post->title}}</h1><hr>   
    <div class="row">
        <div class="col-md-3">
            <img class="img-circle center-block" style="width:150px;height:150px;" src="/storage/cover_image/{{$post->cover_image}}">
            <h4 style="text-align:center;">{{$post->user->name}}</h4><br><br><br><hr>
            <small>Writtin on: {{$post->created_at}}</small>
        </div>    
        <div class="col-md-9" style="padding-left:3em;">
            <blockquote>{!!$post->body!!}</blockquote>  
        </div>
    </div> 
    <hr>    
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
            {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
        @endif
    @endif
@endsection