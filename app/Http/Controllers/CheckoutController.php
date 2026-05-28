<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Coupon;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CheckoutController extends Controller
{
    public function checkout(Request $request)
    {
        $cart = Cart::with('items.variant.product')
            ->where('user_id', Auth::id())
            ->firstOrFail();

        if ($cart->items->isEmpty()) {
            return back()->withErrors(['error' => 'Cart kosong']);
        }

        return DB::transaction(function () use ($request, $cart) {

            $total = 0;

            foreach ($cart->items as $item) {
                $total += $item->quantity * ($item->variant->price ?? $item->variant->product->base_price);
            }

            if ($request->filled('coupon_code')) {
                $coupon = Coupon::where('code', $request->coupon_code)
                    ->where(function ($q) {
                        $q->whereNull('expired_at')
                          ->orWhere('expired_at', '>', now());
                    })->first();

                if ($coupon) {
                    $total = $coupon->type === 'fixed'
                        ? $total - $coupon->value
                        : $total - ($total * $coupon->value / 100);
                }
            }

            $total = max(0, $total);

            $order = Order::create([
                'user_id' => Auth::id(),
                'total_price' => $total,
                'status' => 'pending'
            ]);

            foreach ($cart->items as $item) {
                
                if ($item->quantity > $item->variant->stock) {
                    throw \Illuminate\Validation\ValidationException::withMessages([
                        'stock' => "Stok {$item->variant->product->name} habis/tidak cukup."
                    ]);
                }

                OrderItem::create([
                    'order_id' => $order->id,
                    'product_variant_id' => $item->product_variant_id,
                    'quantity' => $item->quantity,
                    'price' => $item->price
                ]);

                $item->variant->decrement('stock', $item->quantity);
            }

            $cart->items()->delete();

            return redirect()->route('checkout.success');
        });
    }

    public function success()
    {
        return view('checkout.success');
    }
}