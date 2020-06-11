@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row row-cols-3">
    @foreach($artists as $artist)
      <div class="col bg-light w-100 my-2 py-2">
        <div class="row h-100">
          <img src="https://i.pravatar.cc/50?u={{$artist->id}}" alt="Artist Pic" class="rounded-circle mx-auto">
          <p class="my-auto ">{{$artist->name}}</p>
          <button type="button" name="button" class="btn-secondary btn-sm mx-auto">Follow</button>
        </div>
      </div>
    @endforeach
  </div>
</div>
@endsection
