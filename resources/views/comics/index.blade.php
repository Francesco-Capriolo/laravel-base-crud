@extends('layouts.main')


@section('main-content')
<div class="row row-cols-1 row-cols-md-4 row-cols-lg-5 g-4 my-5 mx-5">
@foreach ($comics as $comic)
<div class="col">
    <div class="card" >
        <img src="{{asset($comic->thumb)}}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><a href="{{ route('comics.show', $comic->id)}}">{{$comic->title}}</a></h5>
            <p class="card-text">{{$comic->description}}</p>
        </div>
        <div class="card-footer">
            <small class="text-muted">Prezzo: {{$comic->price}} €</small>
        </div>
        </div>
    </div>
@endforeach
</div>
<div class="my-3 text-center">
        <a href="{{ route('comics.create')}}" class="btn btn-secondary">Add comic</a>
    </div>
@endsection
