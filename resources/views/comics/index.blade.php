@extends('layouts.main')


@section('main-content')
<div class="row row-cols-1 row-cols-md-4 row-cols-lg-5 g-4 my-3 mx-3">
@foreach ($comics as $comic)
<div class="col">
    <div class="card h-50">
        <img src="{{asset($comic->thumb)}}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{$comic->title}}</h5>
            <p class="card-text">{{$comic->description}}</p>
        </div>
        <div class="card-footer">
            <small class="text-muted">Prezzo: {{$comic->price}} €</small>
        </div>
        </div>
    </div>
@endforeach
</div>
<div class="col-12 col-md-6 offset-md-5">
   {{--  {{$comic->links()}} --}}
</div>
@endsection
