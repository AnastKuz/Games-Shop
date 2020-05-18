@extends('layouts.app')

@section('count_cart') {{$orders->count() ?? 0}} @endsection

@section('content')

    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ url()->previous() }}">Basket</a></li>
                <li class="breadcrumb-item active" aria-current="page">Order</li>
            </ol>
        </nav>

        <div class="card my-5">
            <h5 class="card-header">Fill in the information</h5>
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div><br />
                @endif
                    <table class="table">
                        <tbody>
                        <tr>
                            <td>Name</td>
                            <td>Quantity</td>
                            <td>Unit price</td>
                        </tr>
                        @foreach($orders as $order)
                            <tr>
                                <td>{{$order->discs->name}}</td>
                                <td>{{$order->count}}</td>
                                <td>{{$order->discs->price}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="col-3 offset-8">
                        <p class="font-weight-bolder mr-5">Total price: {{$total}}</p>
                    </div>
                <form method="POST" action="{{ route('pages.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" value="{{ old('email') }}">
                    </div>
                    <div class="form-group">
                        <label for="name">Full name</label>
                        <input type="text" class="form-control" id="name" placeholder="Name" name="name" value="{{ old('name') }}">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone number</label>
                        <input type="tel" id="phone" name="phone" class="form-control" placeholder="Phone number" pattern="8-[0-9]{3}-[0-9]{3}-[0-9]{2}-[0-9]{2}" value="{{ old('phone') }}">
                        <small>Format: 8-911-000-00-00</small>
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" placeholder="Address" name="address" value="{{ old('address') }}">
                    </div>
                    <div class="form-group">
                        <label for="date" class="col-form-label">Date</label>
                        <input class="form-control" type="date" value="2020-06-01" id="date" name="date">
                    </div>
                    <div class="form-group">
                        <label for="time" class="col-form-label">Time</label>
                        <input class="form-control" type="time" value="13:00" id="time" name="time">
                    </div>
                    <div class="form-group">
                        <label for="wishes">Additional info</label>
                        <textarea class="form-control" id="wishes" rows="3" placeholder="Enter additional info here..." name="wishes"></textarea>
                    </div>
                    <a href="{{route('orders')}}" class="btn btn-dark">Order</a>
                </form>
            </div>
        </div>
    </div>

@endsection
