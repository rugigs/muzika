@extends('layouts.app')

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col">
      @include('_left-sidebar')
    </div>
    <div class="col-6">
      @include('_publish-post')
      @if($posts->isNotEmpty())
      @foreach($posts as $post)
        <div class="card">
          <div class="card-body">
            <div class="row h-100">
              <img src="https://i.pravatar.cc/40?u={{$post->user->email}}" alt="Profile Picture" class="rounded-circle pr-2">
              <p class="my-auto font-weight-bold">{{$post->user->name}}</p>
            </div>
            <div class="row pt-3">
              <p class="px-2">Song: {{$post->music->name}}</p>
            </div>
            <div class="row px-4 py-2">
              <p>{{$post->body}}</p>
            </div>
          </div>
        </div>
      @endforeach
      @else
        <p>No posts</p>
      @endif
    </div>
    <div class="col">
      @include('_recent-follows')
    </div>
  </div>
</div>
@endsection
