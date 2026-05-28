<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartItem;
use App\Models\ProductVariant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $cart = Cart::with('items.variant.product')
            ->firstOrCreate(['user_id' => Auth::id()]);

        return view('cart.index', compact('cart'));
    }

    public function add(Request $request)
    {
        $request->validate([
            'product_variant_id' => 'required|exists:product_variants,id',
            'quantity' => 'required|integer|min:1'
        ]);

        $cart = Cart::firstOrCreate(['user_id' => Auth::id()]);
        $variant = ProductVariant::with('product')->findOrFail($request->product_variant_id);

        $existingItem = CartItem::where([
            'cart_id' => $cart->id,
            'product_variant_id' => $variant->id
        ])->first();

        $currentQty = $existingItem ? $existingItem->quantity : 0;
        
        if ($currentQty + $request->quantity > $variant->stock) {
            return back()->withErrors([
                'error' => "Stok tidak cukup. Sisa: {$variant->stock}, di cart: {$currentQty}"
            ]);
        }

        if ($existingItem) {
            $existingItem->quantity += $request->quantity;
            $existingItem->save();
        } else {
            CartItem::create([
                'cart_id' => $cart->id,
                'product_variant_id' => $variant->id,
                'quantity' => $request->quantity,
                'price' => $variant->price ?? $variant->product->base_price
            ]);
        }

        return back()->with('success', 'Item berhasil masuk keranjang');
    }

    public function remove($id)
    {
        CartItem::findOrFail($id)->delete();
        return back()->with('success', 'Item dihapus dari keranjang');
    }
}