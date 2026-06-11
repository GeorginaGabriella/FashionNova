<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;

class DashboardController extends Controller
{
    public function index()
    {
        $pendingOrders = Order::where('status', 'pending')->count();

        $processingOrders = Order::where('status', 'processing')->count();

        $totalRevenue = Order::where('status', 'delivered')
            ->sum('total_price');

        $totalProducts = Product::count();

        return view(
            'admin.dashboard',
            compact(
                'pendingOrders',
                'processingOrders',
                'totalRevenue',
                'totalProducts'
            )
        );
    }
}