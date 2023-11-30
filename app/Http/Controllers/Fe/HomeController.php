<?php

namespace App\Http\Controllers\Fe;

use App\Helper\cartHelper;
use App\Models\Admin\Sales\Category;
use App\Models\Admin\Sales\EachTypeProduct;
use App\Models\Admin\Sales\ImgProducts;
use App\Models\Admin\Sales\Order;
use App\Models\Admin\Sales\paymentMethod;
use App\Models\Admin\Sales\Product;
use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    public function index(cartHelper $cart)
    {
        $fearture = Product::where('fearture',1)->get();
        $cartItems = $cart->list();
        $categories = Category::all();
        $products = Product::all();
        $productSide1 = Product::skip(0)->take(8)->get();
        $productSide2 = Product::skip(8)->take(8)->get();
        $banner = Product::where('banner',1)->get();
        $new = Product::all()->sortByDesc('created_at')->take(16);
        $imgProducts = ImgProducts::all();
        $pr = Product::all();
        return view('fe.home.index',compact('categories','products','banner','new','pr','productSide1','productSide2','fearture','cartItems','cart'));
    }

    public function aboutUs(cartHelper $cart)
    {
        $cartItems = $cart->list();
        return view('fe.home.about-us',compact('cart','cartItems'));
    }

    public function blog(cartHelper $cart)
    {
        $cartItems = $cart->list();

        return view('fe.home.blogs',compact('cart','cartItems'));
    }

    public function contact(cartHelper $cart)
    {
        $cartItems = $cart->list();

        return view('fe.home.contact',compact('cart','cartItems'));
    }

    public function myAccount(cartHelper $cart)
    {
        $cartItems = $cart->list();
        $user = Auth::user();
        $orders = Order::where('email',$user->email)->get();
        return view('fe.home.my-account',compact('cart','cartItems','orders'));
    }

    public function wishList(cartHelper $cart)
    {
        $cartItems = $cart->list();

        return view('fe.home.wishlist',compact('cart','cartItems'));
    }

    public function cart(cartHelper $cart)
    {
        $products = Product::all();
        return view('fe.home.cart',compact('cart','cartItems'));
    }

    public function checkout(cartHelper $cart)
    {
        $cartItems = $cart->list();
        $paymentMethods = paymentMethod::where('name','!=','Thanh Toán Khi Nhận Hàng')->get();
        $products = Product::all();
        return view('fe.home.checkout',compact('products','paymentMethods','cart','cartItems'));
    }

    public function privacyPolicy(cartHelper $cart)
    {
        $cartItems = $cart->list();

        return view('fe.home.privacy-policy',compact('cart','cartItems'));
    }

    public function termsOfService(cartHelper $cart)
    {
        $cartItems = $cart->list();

        return view('fe.home.terms-of-service',compact('cart','cartItems'));
    }

    public function signUp(cartHelper $cart)
    {
        $cartItems = $cart->list();

        return view('fe.home.sign-up',compact('cart','cartItems'));
    }

    public function signIn()
    {
        
        return view('fe.home.sign-in');
    }

    public function blogDetail(cartHelper $cart)
    {
        $cartItems = $cart->list();

        return view('fe.home.blog-detail',compact('cart','cartItems'));
    }
}