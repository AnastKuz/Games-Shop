@extends('layouts.app')

@section('count_cart') {{$orders->count() ?? 0}} @endsection

@section('content')

    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                @if($disc->type == 'playstation')
                    <li class="breadcrumb-item"><a href="{{url('/playstation')}}">Games for PlayStation</a></li>
                @elseif($disc->type == 'xbox')
                    <li class="breadcrumb-item"><a href="{{url('/xbox')}}">Games for X-box</a></li>
                @elseif($disc->type == 'nintendo')
                    <li class="breadcrumb-item"><a href="{{url('/nintendo')}}">Games for Nintendo</a></li>
                @endif
                <li class="breadcrumb-item active" aria-current="page">{{$disc->name}}</li>
            </ol>
        </nav>

        <div class="card my-5">
            <div class="card-header">
                <h2>{{$disc->name}}</h2>
            </div>
            <div class="card-body">
                <div class="row py-5">
                    <div class="col-6 offset-1">
                        <p class="card-text">{{$disc->description}}</p>
                        <a href="{{route('basket.add', ['id'=>$disc->id])}}" class="btn btn-dark mr-2">Buy</a>
                        ₽{{$disc->price}}
                    </div>
                    <div class="col-4 pt-2 offset-1">
                        <img src="{{asset($disc->image)}}" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
