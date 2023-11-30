<?php

namespace App\Http\Controllers\Fe;

use App\Http\Controllers\Controller;
use App\Models\Admin\Sales\Product;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Helper\cartHelper;
class CartsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(cartHelper $cart)
    {
        $products = Product::all();
        $cartItems = $cart->list();
        return view('fe.home.cart',compact('products','cartItems','cart'));
    }


    public function add(Request $request,cartHelper $cart){
        $product = Product::find($request->id);
        $quantity = $request->quantity;
        $cart->add($product,$quantity);
        toast('Thêm mới 1 sản phẩm vào giỏ hàng thành công !','success','top-right');
        return redirect()->route('cart.index');
    }

    public function remove(cartHelper $cart,$id){
        $cart->remove($id);
        alert()->success('Sản phẩm đã xóa khỏi giỏ hàng');
        return redirect()->back();
    }

    // public function update(cartHelper $cart,Request $request){
    //     $cart->updateCart($request->id,$request->quantity);
    //     alert()->success('Update giỏ hàng thành công !');
    //     return redirect()->back();
    // }
}