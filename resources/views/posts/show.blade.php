@extends('layouts.app')
@section('content')
    <div class="posts-container">
        <a href="/posts" class="btn btn-default">Go Back</a>
        <h1 class="center">{{$post->title}}</h1> 
        <div class="row post">
            <div class="col-md-11">
                <p>{!!$post->body!!}</p>  
                <small class="pull-right">Writtin on: {{$post->created_at}}</small><br>
                <small class="pull-right">By {{$post->user->name}}</small>
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
    </div>
@endsection