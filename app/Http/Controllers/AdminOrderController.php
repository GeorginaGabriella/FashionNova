<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Shipping;
use App\Models\Notification;
use Illuminate\Http\Request;

class AdminOrderController extends Controller
{
    public function index()
    {
        $orders = Order::with(
            'user',
            'items',
            'shipping'
        )
        ->latest()
        ->get();

        return view(
            'admin.orders',
            compact('orders')
        );
    }

    public function updateStatus(
        Request $request,
        $id
    )
    {
        $order = Order::findOrFail($id);

        $request->validate([
            'status' =>
                'required|in:pending,processing,shipped,delivered,cancelled'
        ]);

        $oldStatus = $order->status;

        $order->update([
            'status' => $request->status
        ]);

        if ($oldStatus !== $request->status) {

            Notification::create([
                'user_id' => $order->user_id,
                'order_id' => $order->id,
                'title' => 'Status Pesanan Diperbarui',
                'message' =>
                    "Pesanan #{$order->id} berubah dari {$oldStatus} menjadi {$request->status}"
            ]);
        }

        return back();
    }

    public function inputResi(
        Request $request,
        $id
    )
    {
        $request->validate([
            'courier' => 'required',
            'tracking_number' => 'required'
        ]);

        Shipping::create([
            'order_id' => $id,
            'courier' => $request->courier,
            'tracking_number' => $request->tracking_number
        ]);

        $order = Order::findOrFail($id);

        $order->update([
            'status' => 'shipped'
        ]);

        Notification::create([
            'user_id' => $order->user_id,
            'order_id' => $order->id,
            'title' => 'Pesanan Dikirim',
            'message' =>
                "Pesanan #{$order->id} telah dikirim. Resi: {$request->tracking_number}"
        ]);

        return back();
    }
}