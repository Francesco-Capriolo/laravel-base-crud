@extends('layouts.main')

@section('title', '-New Comics')

@section('main-content')
<main class="container my-5">
    <h1 class="text-center">New comic</h1>
    <form action="{{ route('comics.store') }}" method="POST" class="d-flex flex-column">
        @csrf
        <label for="title">Title</label>
        <input type="text" class="mb-3" name="title">

        <label for="description">Description</label>
        <textarea name="description" class="mb-3"></textarea>

        <label for="thumb">Thumb</label>
        <input type="text" class="mb-3" name="thumb">

        <label for="type">Type</label>
        <input type="text" class="mb-3" name="type">

        <label for="series">Series</label>
        <input type="text" class="mb-3" name="series">

        <label for="price">Price</label>
        <input type="number" class="mb-3" name="price" step="0.1" min="0">

        <label for="sale_date">Sale Date</label>
        <input type="text" class="mb-3" name="sale_date">
        <div class="text-center">
            <button type="submit" class="btn btn-primary">
                Add
            </button>
        </div>

    </form>
</main>
@endsection
