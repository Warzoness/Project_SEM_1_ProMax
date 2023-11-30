<?php

namespace App\Http\Controllers\Fe;

use App\Helper\cartHelper;
use App\Models\Admin\Sales\Category;
use App\Models\Admin\Sales\Color;
use App\Models\Admin\Sales\ImgProducts;
use App\Models\Admin\Sales\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(cartHelper $cart)
    {
        $cartItems = $cart->list();
        $products = Product::all();
        $colors = Color::all();
        $categories = Category::all();
        return view('fe.product.index',compact('products','categories','colors','cart','cartItems'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function detail($slug,cartHelper $cart)
    {
        $cartItems = $cart->list();
        $product = Product::where('slug',$slug)->first();
        $products = Product::all();
        $colors = Color::all();
        $imgProducts = ImgProducts::where('product_id',$product->id)->get();
        return view('fe.product.detail',compact('products','colors','product','imgProducts','cart','cartItems'));
    }
}