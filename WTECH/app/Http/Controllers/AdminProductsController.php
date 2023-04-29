<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class AdminProductsController extends Controller
{
    public function index()
    {
        $products = Product::paginate(12);

        return view('adminproducts', ['products' => $products]);
    }

    public function filterProducts(Request $request)
    {
        $query = $request->input('search');

        $products = Product::where('title', 'like', "%$query%");

        $products = $products->paginate(12); 
        return view('adminproducts', ['products' => $products]);
    }

    public function deleteProduct(Request $request)
    {
        $product_del = Product::where("title", "like", $request["title"]) -> delete();

        $products = Product::paginate(12);

        return view("adminproducts", ["products" => $products]);
    }
}
