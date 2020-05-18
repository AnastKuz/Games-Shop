<?php

namespace App\Http\Controllers;

use App\Buyer;
use App\Discs;
use App\Order;
use Illuminate\Http\Request;

class TestController extends Controller
{
    /*public function index() {
        $buyers = Buyer::all();
        return view('pages.test', ['buyers' => $buyers]);
    }*/

    public function index()
    {
        $buyers = Buyer::all();
        $orders = Order::all();
        $discs = Discs::all();
        return view('pages.test', ['buyers' => $buyers, 'orders'=>$orders, 'discs'=>$discs]);
    }


}
