@extends('layouts.app')


@section('content')
<div class="border rounded text-center">

    <p>Song you are sharing: {{$song->name}} by</p>
    @foreach($song->artists as $artist)
    <p>{{$artist->name}}</p>
    @endforeach
    <hr>

    <form  action="/music" method="post">
      @csrf
      <input type="text" name="id" value="{{$song->id}}" class="d-none">
    <textarea
    name="body" rows="4"
    placeholder="Describe the song!"
     class="w-50 border rounded"
     ></textarea>

    <hr>

    <button
    type="submit"
    name="button"
    class="btn btn-secondary"
    >Share!</button>

  </form>
</div>
@endsection
