<?php

namespace App\Http\Controllers;

use App\Order;
use App\Playstation;
use Illuminate\Http\Request;

class PlaystationController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        $playstations = Playstation::all();
        return view('pages.playstation', ['playstations'=>$playstations, 'orders' => $orders]);
    }

    public function info()
    {
        return view('pages.info');
    }

}
