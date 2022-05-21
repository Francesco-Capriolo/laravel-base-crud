@extends('layouts.main')

@section('title', "-detail")

@section('main-content')
<main class="my-5">
    <div class="container d-flex">
        <div class="img">
            <img src="{{ $comic['thumb']}}" alt="">
        </div>
        <div class="info ms-2">
            <h5 class="fw-bold"> {{ $comic['title'] }}</h5>
            <p>
                {{ $comic['description']}}
            </p>
            <h6>Type: {{ $comic->type}}</h6>
            <h6>Series: {{ $comic->series}}</h6>
            <h6>Price: {{ $comic->price}} &dollar;</h6>
        </div>
    </div>
</main>
@endsection
