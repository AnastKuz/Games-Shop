@extends('layouts.app')


@section('content')

    <div class="container">

        @foreach($orders as $order)
            <p>{{$order->discs->name}}</p>
        @endforeach
    </div>

@endsection
