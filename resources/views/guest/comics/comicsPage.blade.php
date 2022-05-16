@extends('guest.templates.base')

@section('title', 'Comics bellissimi')

@section('content')
<main>
    <div class="container">
        <h1 class="text-center py-5">Comics</h1>

        {{-- <a href="">Visualizza lista Comics</a> --}}
        {{-- <a href="{{ route('comics.create') }}">Crea nuovo comic</a> --}}

        <div class="row row-cols-sm-1 row-cols-md-3">
            @foreach ($comic as $item)
            <div class="col">
                <div class="card">
                    <img src="{{ $item->thumb }}" class="card-img-top p-3" alt="$item->series">

                    <div class="card-body vh-100 d-flex flex-column">
                        <h2 class="card-title">{{ $item->series }}</h2>
                        <p>{{ $item->description }}</p>
                        <a href="{{ route('comics.show', $item->id) }}" class="btn btn-primary align-self-end">Scopri di più</a>
                    </div>

                </div>
            </div>
            @endforeach
        </div>

        <div class="my-3">
            {{ $comic->links() }}
            {{-- per paginete --}}
        </div>
    </div>

</main>
@stop
