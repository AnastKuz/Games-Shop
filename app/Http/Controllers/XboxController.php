<?php

namespace App\Http\Controllers;

use App\Discs;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class XboxController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        $discs = DB::table('discs')->where('type', '=', 'xbox')->get();
        return view('pages.xbox', ['discs'=>$discs, 'orders' => $orders]);
    }
    public function show($id)
    {
        $orders = Order::all();
        return view('pages.show', ['disc' => Discs::findOrFail($id), 'orders' => $orders]);
    }
}
