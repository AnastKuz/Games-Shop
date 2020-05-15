<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class GamesController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return view('pages.index', ['orders' => $orders]);
    }
}
