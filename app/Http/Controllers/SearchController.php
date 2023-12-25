<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $keyword = $request->input('keyword');
        
        $detail = Product::where('tittle', 'like', '%' . $keyword . '%')->get();
                    //  $policy = Policy::all();
                    $category_1 = Category_1::all();
                    $category_2 = Category_1::all();
        return view('product', compact('detail','category_1','category'));
    }
}
