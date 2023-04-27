<?php

namespace App\Http\Controllers;

use App\Models\CartProduct;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CartProductController extends Controller
{
    public function index()
    {
        return view('cart');
    }

    public function store(Request $request)
    {
        $request->validate([
            'quantity' => 'required|integer|min:1',
        ]);

        $cartProduct = new CartProduct();
        $cartProduct->user_id = Auth::user()->id;
        $cartProduct->product_id = $request->product_id;
        $cartProduct->quantity = $request->quantity;
        $cartProduct->save();

        return redirect()->route('cart');
    }
}
