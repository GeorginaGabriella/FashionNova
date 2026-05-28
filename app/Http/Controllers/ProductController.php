<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->get();

        return view('products.index', compact('products'));
    }

    public function show($id)
    {
        $product = Product::with(['variants', 'images', 'reviews'])->findOrFail($id);

        return view('products.detail', compact('product'));
    }
}