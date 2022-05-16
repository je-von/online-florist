<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Transaction;
use App\TransactionDetail;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function showTransactionHistory(){
        $transaction = Transaction::all();
        return view('transaction', compact('transaction'));
    }

    public function checkout(Request $request){
        $request->validate([
            'courier' => 'required|exists:couriers,id'
        ]);
        $courier_id = $request->post('courier');

        $cart = Cart::where('user_id', '=', auth()->user()->id)->first();
        if($cart != null){
            $tran = Transaction::create([
                'user_id' => auth()->user()->id,
                'transaction_date' => now(),
                'courier_id' => $courier_id
            ]);
            foreach ($cart->cartDetail as $cd){
                TransactionDetail::create([
                    'transaction_id' => $tran->id,
                    'flower_id' => $cd->flower_id,
                    'quantity' => $cd->quantity
                ]);
            }

            $cart->delete(); // cart detail simpen FK cart_id dan udah on delete cascade, jd bakal kehapus juga
        }

        return redirect('/');
    }
}
