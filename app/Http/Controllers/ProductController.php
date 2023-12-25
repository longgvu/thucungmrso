<?php

namespace App\Http\Controllers;

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
