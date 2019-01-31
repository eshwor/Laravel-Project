@extends('layouts.app')

@section('content')

  <div class="" style="text-align:center;">
      <h1> {{$title}} </h1>
      <h1> This is the about us page </h1>

      @if(count($skills) > 0)

        <ul>
        @foreach($skills as $skill)
          <li> {{$skill}} </li>
        @endforeach
        </ul>

      @else
        <p>No</p>
      @endif

  </div>

@endsection
