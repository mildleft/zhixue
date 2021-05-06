@extends('layouts.app')

@section('content')
  @auth
  {{ __('Dashboard') }}
        @if (session('status'))
                {{ session('status') }}
        @endif
        {{ __('You are logged in!') }}
  @endauth
@endsection
