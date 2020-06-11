@extends('layouts.app')

@section('content')
<div class="container">
@if($posts->isNotEmpty())
@foreach($posts as $post)
  <div class="row h-100">
    <div class="col-8">
      <div class="card">
        <div class="card-body">
          <div class="row h-100">
            <img src="{{$post->user->avatar}}" alt="Profile Picture" class="rounded-circle pr-2">
            <p class="my-auto font-weight-bold">{{$post->user->name}}</p>
          </div>
          <div class="row pt-3">
            <p class="px-2">Song:{{$post->music->name}} </p>
          </div>
          <div class="row px-4 py-2">
            <p>{{$post->body}}</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-2 my-auto">
      <a href="/post/{{$post->id}}" class="btn btn-info mb-1">Edit</a>
      <form class="" action="/post/delete/{{$post->id}}" method="post">
        @csrf
        <button type="submit" name="button" class="btn btn-danger">Delete</button>
      </form>
    </div>
  </div>
@endforeach
@else
<h3>You have no posts</h3>
@endif
</div>


@endsection
