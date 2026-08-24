<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function checkout()
    {
        $cart = session()->get('cart', []);

        $total = 0;

        foreach ($cart as $item) {
            $total += $item['price'] * $item['quantity'];
        }

        return view('checkout.index', compact('cart', 'total'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'customer_name' => 'required',
            'customer_email' => 'required|email',
            'customer_address' => 'required',
        ]);

        $cart = session()->get('cart', []);

        if (empty($cart)) {
            return redirect('/products')
                ->with('error', 'Keranjang masih kosong.');
        }

        $total = 0;

        foreach ($cart as $item) {
            $total += $item['price'] * $item['quantity'];
        }

        Order::create([
            'customer_name' => $request->customer_name,
            'customer_email' => $request->customer_email,
            'customer_address' => $request->customer_address,
            'total' => $total,
            'status' => 'pending',
        ]);

        session()->forget('cart');

        return redirect('/products')
            ->with('success', 'Pesanan berhasil dibuat!');
    }
}