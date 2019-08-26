@extends('layouts.app')
@section('content')
    <h1 style="text-align:center;">Posts</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="media">
                <div class="row"><a href="/posts/{{$post->id}}">
                    <div class="col-md-3 col-sm-4">
                        <img style="width:100px;height:100px" src="/storage/cover_image/{{$post->cover_image}}" class="img-circle">
                    </div>
                    <div class="col-md-9 col-sm-8">
                        <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>                          
                        <small>Written on: {{$post->created_at}}</small>
                    </div>
                </div></a>
            </div><hr>
        @endforeach
        {{$posts->links()}}
    @else
        <p>No posts yet</p>
    @endif
@endsection