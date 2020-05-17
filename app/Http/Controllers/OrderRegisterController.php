<?php

namespace App\Http\Controllers;

use App\Buyer;
use App\Order;
use Illuminate\Http\Request;

class OrderRegisterController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return view('pages.order', ['orders' => $orders]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'email'=>'required',
            'name'=>'required',
            'phone'=>'required',
            'address'=>'required',
            'date'=>'required',
            'time'=>'required',
        ]);

        $buyer = new Buyer([
            'email' => $request->get('email'),
            'name' => $request->get('name'),
            'phone' => $request->get('phone'),
            'address' => $request->get('address'),
            'date' => $request->get('date'),
            'time' => $request->get('time'),
            'wishes' => $request->get('wishes'),
        ]);

        $buyer->save();
        return redirect('/')->with('success', 'Ordered!');
    }

}
