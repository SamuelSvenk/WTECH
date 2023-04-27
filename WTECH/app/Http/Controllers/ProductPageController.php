<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Controllers\console;

class ProductPageController extends Controller
{
    public function index($title)
    {
        $product = Product::where('title', $title)->firstOrFail();
        return view('productpage', ['product' => $product]);
    }
}
