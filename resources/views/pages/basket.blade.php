@extends('layouts.app')

@section('count_cart') {{$orders->count() ?? 0}} @endsection

@section('content')

    <div class="container">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Basket</li>
            </ol>
        </nav>

        <h2>You have chosen:</h2>

        <div class="cart">

            <table class="table">
                <tbody>
                <tr>
                    <td>#</td>
                    <td>Image</td>
                    <td>Name</td>
                    <td>Delete</td>
                    <td>Quantity</td>
                    <td>Unit price</td>
                    <td>Total price</td>
                </tr>
                @foreach($orders as $order)
                    <tr>
                        <td>{{$order->id}}</td>
                        <td><img src='{{asset($order->playstations->image)}}' width="50" height="40" alt="img" /></td>
                        <td>{{--{{$order->playstations->name}}--}}</td>
                        <td><a href="{{route('basket.delete', [$order->id])}}">Delete</a></td>
                        <td>{{$order->count}}</td>
                        <td>{{--{{$order->playstations->price}}--}}</td>
                        <td>{{--{{$order->playstations->price * $order->count}}--}}</td>
                    </tr>
                @endforeach

                </tbody>
            </table>

        </div>

        <div class="row">
            <div class="col-3 offset-md-6">
                <strong>TOTAL:{{$total}}</strong>
            </div>
        </div>
        @auth
            <div class="row mt-1">
                <div class="col-3 offset-md-6">
                    <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#dollarModal">
                        Buy
                    </button>
                </div>
            </div>
        @endauth
        @guest
            <div class="row mt-1">
                <div class="col-3 offset-md-6">
                    <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#registerModal">
                        Buy
                    </button>
                </div>
            </div>
    @endguest


    <!-- Modal register -->
        <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="registerModalLabel">Register!</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Please, register before buying games!
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>


    </div>

@endsection
