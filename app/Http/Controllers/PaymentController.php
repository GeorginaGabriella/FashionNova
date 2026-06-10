<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PaymentController extends Controller
{
    
    public function create($orderId)
    {
       
        $order = Order::where('id', $orderId)
            ->where('user_id', Auth::id())
            ->where('status', 'pending')
            ->firstOrFail();

        return view('payments.create', compact('order'));
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'order_id' => 'required|exists:orders,id',
            'payment_proof' => 'required|image|mimes:jpeg,png,jpg|max:2048' // Harus gambar, max 2MB
        ]);

        $order = Order::where('id', $request->order_id)
            ->where('user_id', Auth::id())
            ->where('status', 'pending')
            ->firstOrFail();

        
        if ($order->payment) {
            return redirect()->route('orders.index')->withErrors(['error' => 'Bukti pembayaran untuk pesanan ini sudah diunggah.']);
        }

  
        $path = $request->file('payment_proof')->store('payments', 'public');

        Payment::create([
            'order_id' => $order->id,
            'payment_proof' => $path,
            'status' => 'pending'
        ]);

        return redirect()->route('orders.index')->with('success', 'Bukti pembayaran berhasil diunggah! Menunggu verifikasi admin.');
    }
}
