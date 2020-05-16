@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="card my-5">
            <div class="card-header">
                <h2>{{$disc->name}}</h2>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <p class="card-text">{{$disc->description}}</p>
                    </div>
                    <div class="col pt-2">
                        <img src="{{$disc->photo}}" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
