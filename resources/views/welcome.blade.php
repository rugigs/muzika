@extends('layouts.app')
@section('content')
      <div class="container align-self-center pt-5">
          <div class="row justify-content-center my-auto">
                <h1 class="display-1">Music</h1>
          </div>
          <div class="row justify-content-center my-auto">
              <div class="list-group list-group-horizontal">
                @if (Route::has('login'))
                        @auth
                            <a class="list-group-item list-group-item-action" href="{{ url('/home') }}">Home</a>
                        @else
                            <a class="list-group-item list-group-item-action" href="{{ route('login') }}">Login</a>

                            @if (Route::has('register'))
                                <a class="list-group-item list-group-item-action" href="{{ route('register') }}">Register</a>
                            @endif
                        @endauth
                @endif

              </div>
          </div>
      </div>
  </div>
@endsection
