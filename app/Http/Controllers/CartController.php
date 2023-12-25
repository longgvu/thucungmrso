<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
class CartController extends Controller
{
    public function __construct()
    {
        // Apply authentication middleware except for the 'index' method
        $this->middleware('auth')->except('index');
    }
    public function addToCart(Request $request, Product $product)
    {
        if (!auth()->check()) {
            return redirect()->route('login')->with('error', 'Please log in to add items to your cart.');
        }
        // Get the user
   $user = auth()->user();
   
    // Check if the user has a cart, if not, create one
    if (!$user->cart) {
         // Attach the product to the cart
     $user_id = session('user_id');
    // $cart->user_id = $user_id; 
        $cart = new Cart();
        $products_id = $request->input('products_id');
    $cart->products()->attach($product->id);
        $cart->save();
        $user->cart()->associate($cart);
        $user->save();
    }
    $cart = $user->cart;

   

        return redirect()->route('pages.home')->with('success', 'Product added to cart');
    }
}
