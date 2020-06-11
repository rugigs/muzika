@extends('layouts.app')

@section('content')
<ul class="list-group">
  <li class="list-group-item">
    <div class="container">
      <div class="row h-100">
        <div class="col-3">
          <p class="my-auto">Name</p>
        </div>
        <div class="col-3">
          <p class="my-auto">Song</p>
        </div>
        <div class="col-2">
          <p class="my-auto">Genre</p>
        </div>
        <div class="col-2">
          <p class="my-auto">Listens</p>
        </div>
      </div>
    </div>
  </li>
  @foreach($songs as $song)
  <li class="list-group-item">
    <div class="container">
      <div class="row h-100">
        <div class="col-3">
          @foreach($song->artists as $artist)
          <p class="my-auto">{{$artist->name}}</p>
          @endforeach
        </div>

        <div class="col-3">
          <p class="my-auto">{{$song->name}}</p>
        </div>
        <div class="col-2">
          <p class="my-auto">{{$song->genres}}</p>
        </div>
        <div class="col-2">
          <p class="my-auto">{{$song->listens}}</p>
        </div>
        <div class="col-2">
          <a href="/post/{{$song->id}}" class="btn btn-secondary">Share!</a>
        </div>
      </div>
    </div>
  </li>
  @endforeach
</ul>
@endsection
