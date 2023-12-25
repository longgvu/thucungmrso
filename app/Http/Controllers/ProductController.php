<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category_1;
use App\Models\Category_2;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {
        // Apply authentication middleware except for the 'index' method
        $this->middleware('auth')->except('index');
    }

    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }
    public function detail($link){
        $category_1 = Category_1::all();
        $category_2 = Category_1::all();
        $detail = Product::where('link',$link)->firstOrFail();;
        return view('pages.product.detail-product', compact('detail','category_1','category_2'));
    }
    public function addToCart(Request $request, Product $product)
    {
        // Ensure the user is authenticated
        if (!auth()->check()) {
            return redirect()->route('login')->with('error', 'Please log in to add items to your cart.');
        }

        // Get the user's cart
        $cart = auth()->user()->cart;

        // Attach the product to the cart
        $cart->products()->attach($product);

        return redirect()->route('products.index')->with('success', 'Product added to cart');
    }


}
