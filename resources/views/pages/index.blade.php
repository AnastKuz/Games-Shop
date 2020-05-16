@extends('layouts.app')

@section('count_cart') {{$orders->count() ?? 0}} @endsection

@section('content')

    <div class="container">
        {{--Breadcrumbs--}}
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Home</li>
            </ol>
        </nav>

        <div class="row">

            <div class="col mt-5">
                <div class="card">
                    <img class="card-img-top" src="{{asset('img/playstation.png')}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Games for PlayStation</h5>
                        <p class="card-text">
                            Looking for something awesome to play on PlayStation?
                            Lots of great games are available right now. Click to learn more.
                        </p>
                        <a href="{{ url('playstation') }}" class="btn btn-dark">PlayStation games</a>
                    </div>
                </div>
            </div>
            <div class="col mt-5">
                <div class="card">
                    <img class="card-img-top" src="{{asset('img/xbox.png')}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Games for X-box</h5>
                        <p class="card-text">
                            Looking for something awesome to play on X-box?
                            Lots of great games are available right now. Click to learn more.
                        </p>
                        <a href="{{ url('xbox') }}" class="btn btn-dark">X-box games</a>
                    </div>
                </div>
            </div>
            <div class="col mt-5">
                <div class="card">
                    <img class="card-img-top" src="{{asset('img/nintendo.png')}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Games for Nintendo</h5>
                        <p class="card-text">
                            Looking for something awesome to play on Nintendo?
                            Lots of great games are available right now. Click to learn more.
                        </p>
                        <a href="{{ url('nintendo') }}" class="btn btn-dark">Nintendo games</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
