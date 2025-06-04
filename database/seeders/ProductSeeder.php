<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use Illuminate\Support\Str;
use App\Models\Product;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = ['Drink', 'Milkshake', 'Snack'];

        foreach ($categories as $cat) {
            $category = Category::create([
                'name' => $cat,
                'slug' => Str::slug($cat),
            ]);

            // Tambahkan 3 produk untuk setiap kategori
            for ($i = 1; $i <= 3; $i++) {
                Product::create([
                    'category_id' => $category->id,
                    'name' => "{$cat} Product {$i}",
                    'price' => rand(10000, 30000),
                ]);
            }
        }
    }
}
