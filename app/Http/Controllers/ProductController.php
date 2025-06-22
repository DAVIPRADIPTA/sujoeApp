<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Ambil data produk per kategori
        $categories = Category::with('products')->get();
        $favoriteProducts = Product::where('is_favorite', true)->get();

        return view('home', compact(['categories', 'favoriteProducts']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();

        return view('products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'category_id' => 'required|exists:categories,id',
            'description' => 'nullable|string',
            'is_favorite' => 'nullable|boolean',
            'image' => 'nullable|image|max:2048', // Jika ada field type
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('products', 'public');
        }

        $data['is_favorite'] = $request->has('is_favorite');

        Product::create($validated);

        return redirect()->route('product')
            ->with('success', 'Produk berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories = Category::with('products')->get();
        return view('products.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'category_id' => 'required|exists:categories,id',
            'description' => 'nullable|string',
            'is_favorite' => 'nullable|boolean',
            'image' => 'nullable|image|max:2048',
        ]);

        // Handle checkbox is_favorite (karena unchecked tidak akan terkirim)
        $validated['is_favorite'] = $request->has('is_favorite');

        // Handle file upload jika ada
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($product->image && Storage::disk('public')->exists($product->image)) {
                Storage::disk('public')->delete($product->image);
            }

            // Simpan gambar baru
            $validated['image'] = $request->file('image')->store('products', 'public');
        }

        // Update produk
        $product->update($validated);

        return redirect()->route('product')
            ->with('success', 'Produk berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('product')->with('success', 'Produk berhasil dihapus!');
    }
    /**
     * Search for products based on the query.
     */
    public function search(Request $request)
    {
        $query = $request->input('query');

        // Pencarian produk
        $products = Product::with('category')
            ->where('name', 'like', '%' . $query . '%')
            ->get();

        return view('dashboard', [
            'products' => $products,
            'query' => $query,
        ]);
    }
}
