@extends('layouts.app')

@section('content')
    <h1 class="mb-3 text-3xl text-green-500">Nos dernières missions</h1>

    @foreach ($jobs as $job)

        @livewire('job', ['job' => $job])
        
    @endforeach
@endsection