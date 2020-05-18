<?php

namespace App\Http\Controllers;

use App\Buyer;
use App\Mail\OrderSent;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OrderRegisterController extends Controller
{
    public function index()
    {
        $order = Order::all();
        $total = 0;

        foreach ($order as $item) {
            $total += $item->discs->price * $item->count;
        }

        return view('pages.order', [
            'orders' => $order,
            'total' => $total,
        ]);
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
            'wishes'=>'required'
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
    }

    public function send() {
        $data = Order::all();
        Mail::to('liannatartt@gmail.com')->send(new OrderSent($data));
        return redirect('/')->with('status', 'Your order has been accepted! Check your email.');
    }

}
