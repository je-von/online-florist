<?php

namespace App\Http\Controllers;

use App\Cart;
use App\CartDetail;
use App\Courier;
use Illuminate\Http\Request;

class CartController extends Controller
{

    public function showCartPage(){
        $cart = Cart::where('user_id', '=', auth()->user()->id)->first();
        $courier = Courier::all();
//        dd($c);
        return view('cart')
                ->with('cart',$cart)
                ->with('courier', $courier);
    }

    public function remove($id){
        $user_id = auth()->user()->id;
        $cart = Cart::where('user_id', '=', $user_id)->first();
        if($cart != null){
            $detail = $cart->cartDetail->where('flower_id', '=', $id)->first();
            if($detail != null)
                $detail->delete();
        }

        return redirect('/cart');
    }

    public function addToCart(Request $request, $id){
        $request->validate([
            'quantity' => 'required|integer|min:1'
        ]);

        $quantity = $request->get('quantity');

        $cart = Cart::where('user_id', '=', auth()->user()->id)->first();
        if($cart == null){
            $cart = Cart::create(['user_id' => auth()->user()->id]);
        }

        $detail = $cart->cartDetail->where('flower_id', '=', $id)->first();
        if($detail == null){
            CartDetail::create([
                'cart_id' => $cart->id,
                'flower_id' => $id,
                'quantity' => $quantity
            ]);
        }else{
            $detail->quantity += $quantity;
            $detail->save();
        }

//        return redirect('/cart');
        return redirect()->back();

    }

}
