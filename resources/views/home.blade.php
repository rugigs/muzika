@extends('layouts.app')

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col">
      @include('_left-sidebar')
    </div>
    <div class="col-6">
      <div class="border rounded text-center">
        <form class="" action="index.html" method="post">
          <input type="text" name="" placeholder="Search for a song to share!" class="w-100 border rounded">
          <hr>
          <textarea name="name" rows="4" placeholder="Describe the song!" class="w-100 border rounded"></textarea>
          <hr>
          <button type="button" name="button" class="btn btn-secondary">Share!</button>
        </form>
      </div>
      @foreach($posts as $post)
        <div class="card">
          <div class="card-body">
            <div class="row h-100">
              <img src="https://i.pravatar.cc/40?u={{$post->user->email}}" alt="Profile Picture" class="rounded-circle pr-2">
              <p class="my-auto font-weight-bold">{{$post->user->name}}</p>
            </div>
            <div class="row pt-3">
              <p class="px-2">Dziesma</p>
            </div>
            <div class="row px-4 py-2">
              <p>{{$post->body}}</p>
            </div>
          </div>
        </div>
      @endforeach
    </div>
    <div class="col">
      @include('_recent-follows')
    </div>
  </div>
</div>
@endsection
