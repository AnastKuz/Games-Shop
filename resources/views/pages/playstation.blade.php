@extends('layouts.app')

@section('count_cart') {{$orders->count() ?? 0}} @endsection

@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Games for PlayStation</li>
            </ol>
        </nav>

        <div class="album py-5 bg-light">
            <div class="container">
                <div class="row">
                    @foreach($discs as $disc)
                        <div class="col-md-4">
                            <div class="card mb-4 shadow-sm">
                                <img class="bd-placeholder-img card-img-top img-fluid p-5" width="100%" src="{{asset($disc->image)}}">
                                <div class="card-body">
                                    <h4>{{$disc->name}}</h4>
                                    <p class="card-text">{{$disc->description}}</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <a href="{{route('basket.add', ['id'=>$disc->id])}}" class="btn btn-dark mr-2">Buy</a>
                                            <a href="{{route('pages.show', ['disc'=>$disc->id])}}" class="btn btn-dark">Info</a>
                                        </div>
                                        <small>
                                            ₽{{$disc->price}}
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
