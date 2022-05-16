@extends('guest.templates.base')

@section('title', 'Comics Create')

@section('content')
<div class="container">
    <div class="row">
        <div class="col my-3">
            {{-- method deve essere post e action store  --}}
            <form method="POST" action="{{ route('comics.store') }}">

                {{-- token di sicurezza  --}}
                @csrf

                <div class="my-4">
                  <label for="title" class="form-label">Title</label>
                  <input type="text" class="form-control" id="title" name="title">
                </div>
                <div class="my-4">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description"></textarea>
                    {{-- <input type="text" class="form-control" id="description" name="description"> --}}
                </div>
                <div class="my-4">
                    <label for="thumb" class="form-label">Image link</label>
                    <input type="url" class="form-control" id="thumb" name="thumb">
                </div>
                <div class="my-4">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" class="form-control" id="price" name="price">
                </div>
                <div class="my-4">
                    <label for="series" class="form-label">Series</label>
                    <input type="text" class="form-control" id="series" name="series">
                </div>
                <div class="my-4">
                    <label for="sale_date" class="form-label">Sale date</label>
                    <input type="date" class="form-control" id="sale_date" name="sale_date">
                </div>
                <div class="my-4">
                    <label for="type" class="form-label">Type</label>
                    <input type="text" class="form-control" id="type" name="type">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
