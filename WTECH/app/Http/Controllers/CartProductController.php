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
        $allproducts = CartProduct::where('user_id', Auth::user()->id)->get();

        $totalprice = 0;
        foreach ($allproducts as $product) {
            $totalprice += $product->product->price * $product->quantity;
        }
        return view('cart')->with('cartItems', $allproducts)->with('totalprice', $totalprice);
    }

    public function store(Request $request)
    {


        $request->validate([
            'quantity' => 'required|integer|min:1',
        ]);

        if(CartProduct::where('user_id', Auth::user()->id)->where('product_id', $request->product_id)->exists()){
            $cartProduct = CartProduct::where('user_id', Auth::user()->id)->where('product_id', $request->product_id)->first();
            $cartProduct->quantity += $request->quantity;
            $cartProduct->save();
            return redirect()->route('cart');
        }

        $cartProduct = new CartProduct();
        $cartProduct->user_id = Auth::user()->id;
        $cartProduct->product_id = $request->product_id;
        $cartProduct->quantity = $request->quantity;
        $cartProduct->save();

        return redirect()->route('cart');
    }

    public function destroy($id)
    {
        $cartProduct = CartProduct::find($id);
        $cartProduct->delete();
        return redirect()->route('cart')->with('success', 'Product deleted successfully');
    }

    public function update(Request $request, $id)
    {
        $cartProduct = CartProduct::find($id);
        $cartProduct->quantity = $request->input('quantity');
        $cartProduct->save();

        return response()->json(['quantity' => $cartProduct->quantity,
        'price' => $cartProduct->product->price * $cartProduct->quantity,]);
    }

}
