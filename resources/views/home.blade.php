@extends('layouts.app')

@section('content')
    <h1>Salut {{ Auth::user()->name }}</h1>
@endsection