@extends('layouts.app')

@section('content')
  <h1>Posts</h1>
  @if(count($posts) > 0)
    @foreach($posts as $post)
      <div class="well" style="padding:1rem; border:3px solid #DDD; margin: 0.5rem auto;">
        <h3> <a href="/posts/{{$post->id}}"> {{$post->title}} </a> </h3>
        <small>Written on {{$post->created_at}} </small>
      </div>
    @endforeach
    {{-- This code is for to display pagination PLEASE UNCOMMENT BELLOW COMMENT IF YOU WANT TO ACTIVE PAGINATION--}}
    
    {{-- {{$posts->links()}} --}}
  @else
    <p>No Posts Found !!</p>
  @endif



@endsection
