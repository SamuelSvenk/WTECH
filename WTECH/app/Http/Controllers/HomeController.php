<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $tag = 'new';

        $products = Product::whereHas('tags', function ($query) use ($tag) {
            $query->where('tag', $tag);
        })->get()->take(4);
        
        return view('homepage', ['products' => $products]);
    }
}
