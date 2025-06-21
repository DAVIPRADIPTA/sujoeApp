<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Product;
use App\Models\Category;


class DashboardController extends Controller
{
    public function index()
    {
        $countProduct = Product::count();
        $countCategory = Category::count();
        return view('dashboard', [
            'getCountProduct' => $countProduct,
            'getCountCategory' => $countCategory
        ]);
    }

    public function kategori()
    {
        $categories = Category::all();
        return view(
            'categories.category',
            compact('categories')
        );
    }

    public function product()
    {
        $products = Product::with('category')->get();
        return view('products.product', [
            'products' => $products,
        ]);
    }

    public function update(Request $request, $id)
{
    $request->validate([
        'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    $filename = "carousel$id.jpg";
    $path = "carousel/$filename"; // cukup 'carousel/...', karena disk sudah public

    // Hapus file lama jika ada
    if (Storage::disk('public')->exists($path)) {
        Storage::disk('public')->delete($path);
    }

    // Simpan file baru
    $request->file('image')->storeAs('carousel', $filename, 'public');

    return back()->with('success', 'Gambar carousel berhasil diperbarui.');
}

}
