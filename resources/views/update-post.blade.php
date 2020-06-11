@extends('layouts.app')

@section('content')
<div class="border rounded text-center">

    <p>Edit post about:</p>
    <h4>{{$post->music->name}}</h4>

    <hr>

    <form  action="/post/update/{{$post->id}}" method="post">
      @csrf
    <textarea
    name="body" rows="4"
     class="w-50 border rounded"
     >{{$post->body}}</textarea>

    <hr>

    <button
    type="submit"
    name="button"
    class="btn btn-secondary"
    >Edit</button>

  </form>
</div>
@endsection
