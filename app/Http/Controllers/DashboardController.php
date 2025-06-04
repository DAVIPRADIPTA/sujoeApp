<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;


class DashboardController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->get();
        return view('dashboard', [
            'products' => $products,
        ]);
    }

    public function kategori()
    {
    $categories = Category::all();
        return view('category', compact('categories')
        );
    }
}
