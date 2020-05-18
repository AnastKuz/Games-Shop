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
                    <td>Image</td>
                    <td>Name</td>
                    <td>Quantity</td>
                    <td>Unit price</td>
                    <td>Total price</td>
                    <td>Delete</td>
                </tr>
                @foreach($orders as $order)
                    <tr>
                        <td><img src='{{asset($order->discs->image)}}' alt="img" /></td>
                        <td>{{$order->discs->name}}</td>
                        <td>{{$order->count}}</td>
                        <td>{{$order->discs->price}}</td>
                        <td>{{$order->discs->price * $order->count}}</td>
                        <td><a href="{{route('basket.delete', [$order->id])}}">Delete</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>

        <div class="row mb-5">
            <div class="col-2 offset-md-7 pl-5">
                <p class="font-weight-bolder">TOTAL: {{$total}}</p>
            </div>
            @auth
                <div class="col-3">
                    <a href="{{route('pages.order')}}" class="btn btn-dark mr-2">
                        Buy
                    </a>
                </div>
            @endauth
            @guest
                <div class="col-3">
                    <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#registerModal">
                        Buy
                    </button>
                </div>
            @endguest
        </div>

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
