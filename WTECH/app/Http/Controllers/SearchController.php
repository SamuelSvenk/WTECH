<?php

namespace App\Http\Controllers;

use App\Http\Controllers\console;
use Illuminate\Http\Request;
use DB;
use App\Http\requests;
use App\Http\Controllers\Controller;
use App\Models\Product;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('search');

        $products = Product::where('title', 'like', "%$query%");

        $platform = "none";

        $products = $products->paginate(12); 
        return view('products', ["platform" => $platform, 'products' => $products]);
    }
}
