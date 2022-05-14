@extends('guest.templates.base')

@section('title', $title)

@section('content')
<main>
    <div class="container">

        <div class="row row-cols-sm-1 row-cols-md-3">

            <div class="col">
                <div class="card">
                    <img src="{{ $item->thumb }}" class="card-img-top p-3" alt="$item->series">

                    <div class="card-body d-flex flex-column">
                        <h2 class="card-title">{{ $item->series }}</h2>
                        <p>{{ $item->description }}</p>
                        <a href="{{ route('comics.edit', $item->id) }}" class="btn btn-primary align-self-end">Modifica Comic</a>
                    </div>
                </div>
            </div>

        </div>

    </div>

@endsection
