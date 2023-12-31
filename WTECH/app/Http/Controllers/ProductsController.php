<?php

namespace App\Http\Controllers;

use App\Http\Controllers\console;
use Illuminate\Http\Request;
use DB;
use App\Http\requests;
use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductsController extends Controller
{
    /*
    public function __construct()
    {
        $this->middleware('auth');
    }
    */

    public function index()
    {
        $products = Product::paginate(12);
        $platform = "none";

        return view('products', ["platform" => $platform, 'products' => $products]);
    }

    public function filteredProducts($platform, Request $request)
    {
        $products = Product::query();
        if ($platform != "none") {
            $products = $products->where("platform", "like", $platform);
        }

        if ($request->input("price_asc")) {
            $products = $products->orderby("price","asc");
        }
        if ($request->input("price_desc")) {
            $products = $products->orderby("price","desc");
        }

        if ($request->input("price_min")) {
            $products = $products->where("price", ">=", $request["price_min"]);
        }

        if ($request->input("price_max")) {
            $products = $products->where("price", "<=", $request["price_max"]);
        }

        if ($request->has("fps")) {
            $products = $products->whereHas('tags', function ($query) {
                $query->where('tag', 'fps');
            });
        }

        if ($request->has("rpg")) {
            $products = $products->whereHas('tags', function ($query) {
                $query->where('tag', 'rpg');
            });
        }

        if ($request->has("moba")) {
            $products = $products->whereHas('tags', function ($query) {
                $query->where('tag', 'moba');
            });
        }

        if ($request->has("activision")) {
            $products = $products->whereHas('tags', function ($query) {
                $query->where('tag', 'activision');
            });
        }

        if ($request->has("blizzard")) {
            $products = $products->whereHas('tags', function ($query) {
                $query->where('tag', 'blizzard');
            });
        }

        if ($request->has("nintendo")) {
            $products = $products->whereHas('tags', function ($query) {
                $query->where('tag', 'nintendo');
            });
        }

        $products = $products->paginate(12);

        return view('products', ["platform" => $platform, 'products' => $products]);
    }
    public function platform($platform, Request $request)
    {
        $products = Product::query();
        $products = $products->where("platform", "like", $platform);

        $products = $products->paginate(12);

        return view('products', ['platform' => $platform, 'products' => $products]);

    }
}
