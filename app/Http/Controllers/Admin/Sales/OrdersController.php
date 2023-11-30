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
        $orders = Order::all();
        return view('admin.pages.sales.orders.index',compact('orders'));
    }

    public function add(cartHelper $cart,Request $request){


        Order::create($request->all());

        $new = Order::all()->sortByDesc('created_at')->first();

        foreach ($cart->list() as $key => $value) {
            OrderDetail::create([
                'order_id' => $new->id,
                'product_id'=>$value['product_id'],
                'quantity' =>$value['quantity'],
                'price'=>$value['price'],
                'total_price'=>$value['quantity'] * $value['price'],
                'image'=>$value['image'],
                'name'=>$value['name']
            ]);
        }
        session()->forget('cart');

        alert()->success('Chúc Mừng !','Bạn đã Order thành công !');
        return redirect()->route('home.index');

    }

    public function orderDetails(Order $order){
        $orderDetails = OrderDetail::where('order_id',$order->id)->get();
        return view('admin.pages.sales.orders.orderDetail',compact('orderDetails'));
    }
}