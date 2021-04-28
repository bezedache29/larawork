@extends('layouts.app')

@section('content')
    <h1>Salut {{ Auth::user()->name }}</h1>

    @foreach (Auth::user()->likes as $like)
        {{ $like->title }}
    @endforeach

@endsection