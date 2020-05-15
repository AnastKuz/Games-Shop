@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>You are logged in! Now you can buy games for your favourite console.</p>
                        <a href="{{ url('/') }}" class="btn btn-dark">Buy games</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
