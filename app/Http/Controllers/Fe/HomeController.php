<?php

namespace App\Http\Controllers\Fe;

use App\Models\Admin\Sales\Category;
use App\Models\Admin\Sales\EachTypeProduct;
use App\Models\Admin\Sales\ImgProducts;
use App\Models\Admin\Sales\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $products = Product::all();
        $productSide1 = Product::skip(0)->take(8)->get();
        $productSide2 = Product::skip(8)->take(8)->get();
        $banner = Product::where('banner',1)->get();
        $new = Product::all()->sortByDesc('created_at')->take(16);
        $imgProducts = ImgProducts::all();
        $pr = Product::all();
        return view('fe.home.index',compact('categories','products','banner','new','pr','productSide1','productSide2'));
    }

    public function aboutUs()
    {
        return view('fe.home.about-us');
    }

    public function blog()
    {
        return view('fe.home.blogs');
    }

    public function contact()
    {
        return view('fe.home.contact');
    }

    public function myAccount()
    {
        return view('fe.home.my-account');
    }

    public function wishList()
    {
        return view('fe.home.wishlist');
    }

    public function cart()
    {
        return view('fe.home.cart');
    }

    public function checkout()
    {
        return view('fe.home.checkout');
    }

    public function privacyPolicy()
    {
        return view('fe.home.privacy-policy');
    }

    public function termsOfService()
    {
        return view('fe.home.terms-of-service');
    }

    public function signUp()
    {
        return view('fe.home.sign-up');
    }

    public function signIn()
    {
        return view('fe.home.sign-in');
    }

    public function blogDetail()
    {
        return view('fe.home.blog-detail');
    }
}