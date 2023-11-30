<?php

namespace App\Http\Controllers\Admin\Sales;

use App\Helper\cartHelper;
use App\Http\Controllers\Controller;
use App\Models\Admin\Sales\Order;
use App\Models\Admin\Sales\OrderDetail;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function index(){

    }

    public function add(cartHelper $cart,Request $request){


        Order::create($request->all());

        $new = Order::all()->sortByDesc('created_at')->first();

        foreach ($cart->list() as $key => $value) {
            OrderDetail::create([
                'order_id' => $new->id,
                'product_id'=>$value['product_id'],
                'quantity' =>$value['quantity'],
                'total_price'=>$value['quantity'] * $value['price'],
                'image'=>$value['image']
            ]);
        }
        session()->forget('cart');

    }
}