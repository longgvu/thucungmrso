<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category_1;
use App\Models\Category_2;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PageController extends Controller
{
    Public function home(){
        return view('pages.home');
    }
    public function index()
    {
        $user = Session::get('user'); // Lấy thông tin người dùng từ Session
$cart = Session::get('cart', []);
        $products = Product::all();
        $category_1 = Category_1::all();
        $category_2 = Category_1::all();
        return view('pages.home', compact('products','user','cart','category_1','category_2'));
    }

    public function addToCart(Request $request, Product $product)
    {
        // Assuming you have a logged-in user, you can get the user's cart
        $cart = auth()->user()->cart;

        // Attach the product to the cart
        $cart->products()->attach($product);

        return redirect()->route('pages.home')->with('success', 'Product added to cart');
    }
}
