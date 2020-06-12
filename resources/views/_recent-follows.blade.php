<h3>You follow</h3>

<ul class="list-group">
  @if(auth()->user()->follows->isNotEmpty())
  @foreach(auth()->user()->follows as $artist)
  <li class="list-group-item">
    <div class="container">
      <div class="row h-100">
          <img src="https://i.pravatar.cc/50?u={{$artist->id}}" alt="Profile Picture" class="rounded-circle pr-2">
          <p class="my-auto">{{$artist->name}}</p>
      </div>
    </div>
  </li>
  @endforeach
  @else
  <li class="list-group-item">
    <p>You do not follow any artists</p>
  </li>
  @endif
</ul>
