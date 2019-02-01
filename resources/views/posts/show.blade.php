@extends('layouts.app')

@section('content')
  <br/><br/>
  <a href="/posts">Go Back</a>
  <h3>{{$post->title}}</h3>
  <small>Written on {{$post->created_at}}</small>
  <div class="" style="border:1px solid #DDD; padding: 1rem; margin-top: 1rem;">
    <p>{{$post->body}}</p>
  </div>

@endsection
