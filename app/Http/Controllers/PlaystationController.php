<?php

namespace App\Http\Controllers;

use App\Order;
use App\Discs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PlaystationController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        $discs = DB::table('discs')->where('type', '=', 'playstation')->get();
        return view('pages.playstation', ['discs'=>$discs, 'orders' => $orders]);
    }

    public function show($id)
    {
        $orders = Order::all();
        return view('pages.show', ['disc' => Discs::findOrFail($id), 'orders' => $orders]);
    }

}
