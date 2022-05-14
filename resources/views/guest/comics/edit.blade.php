@extends('guest.templates.base')

@section('title', 'Comics Edit')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            {{-- method deve essere post e action update  --}}
            <form method="POST" action="{{ route('comics.update', $comic->id) }}">

                {{-- token di sicurezza  --}}
                @csrf

                {{-- metodo put necessario per edit  --}}
                @method('PUT')
                <div class="my-4">
                <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $comic->title }}">
                </div>
                <div class="my-4">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" value="{{ $comic->description }}"></textarea>
                    {{-- <input type="text" class="form-control" id="description" name="description"> --}}
                </div>
                <div class="my-4">
                    <label for="thumb" class="form-label">Image link</label>
                    <input type="url" class="form-control" id="thumb" name="thumb" value="{{ $comic->thumb }}">
                </div>
                <div class="my-4">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" class="form-control" id="price" name="price" value="{{ $comic->price }}">
                </div>
                <div class="my-4">
                    <label for="series" class="form-label">Series</label>
                    <input type="text" class="form-control" id="series" name="series" value="{{ $comic->series }}">
                </div>
                <div class="my-4">
                    <label for="sale_date" class="form-label">Sale date</label>
                    <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{ $comic->sale_date }}">
                </div>
                <div class="my-4">
                    <label for="type" class="form-label">Type</label>
                    <input type="text" class="form-control" id="type" name="type" value="{{ $comic->type }}">
                </div>


                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
