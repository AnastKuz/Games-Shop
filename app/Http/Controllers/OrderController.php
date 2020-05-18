<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index()
    {
        $order = Order::all();
        $total = 0;

        foreach ($order as $item) {
            $total += $item->discs->price * $item->count;
        }

        return view('pages.basket', [
            'orders' => $order,
            'total' => $total,
        ]);
    }

    public function addProduct($id)
    {
        $order = Order::query()
            ->where('product_id', '=', $id)
            ->where('session_id', '=', session()->getId())
            ->first();

        if($order) {
            $order->count = $order->count + 1;
            $order->save();
        } else {
            $order= new Order([
                'product_id'=>$id,
                'session_id'=>session()->getId(),
                'count'=>1,
            ]);
            $order->save();
        }
        return redirect()->back();
    }

    public function delete($id)
    {
        $order = DB::table('orders')->where('id',$id)->delete();
        return redirect()->back();
    }
}
