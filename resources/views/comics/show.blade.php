@extends('layouts.main')

@section('main-content')
    <div class="container">
        <div class="row mb-5">
                <div class="col-4 offset-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Il treno: {{$train->trainCode}}</h5>
                            <p class="card-text">Treno in partenza da {{$train->departureStation}} <br> alle ore {{$train->departureTime}} <br> arriverà a {{$train->arrivalStation}} <br> alle ore {{$train->arrivalTime}}</p>
                        </div>
                    </div>
                </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-5 offset-md-5">
                <button class="btn btn-primary">
                    <a class="text-white" href="{{route('trains.index')}}">Torna alla Homepage dei treni</a>
                </button>
            </div>
        </div>
    </div>
@endsection
