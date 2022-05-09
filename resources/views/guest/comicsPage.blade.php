@extends('guest.templates.base')

@section('title', 'Comics bellissimi')

@section('content')
<main>
    <h1>Comics</h1>
        @foreach ($comic as $item)
            <img src="{{ $item->thumb }}" class="" alt="">
            <h2>{{ $item->series }}</h2>
            <p>{{ $item->description }}</p>
        @endforeach
        {{ $comic->links() }}
</main>
