<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CartProduct;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ShippingController extends Controller
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
        $cart = CartProduct::where('user_id', Auth::user()->id)->get();
        if ((count($cart) < 1)) 
        {
            return redirect('/cart')->with('result', 'Your cart is empty.');
        }
        return view('shipping');
    }

    public function store(Request $request) 
    {
        $validator = Validator::make($request->all(), [
            'shippingMethod' => 'required',
            'town' => ['required', 'max:255', 'string'],
            'address' => ['required', 'max:255', 'string'],
            'phoneNumber' => ['required', 'regex:/(09)[0-9]{8}/'],
            'payment' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        } else {
            CartProductController::clear();
            return redirect('/success')->with('is_success', 'Your order has been accepted.');
        }
    
    }
}
