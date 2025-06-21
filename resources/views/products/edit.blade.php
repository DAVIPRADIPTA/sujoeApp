<x-app-layout>
    <div class="max-w-2xl mx-auto p-6 bg-white rounded-lg shadow-md mt-10">
        <h1 class="text-3xl font-semibold text-gray-800 mb-6 border-b pb-2">Edit Produk</h1>

        <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Nama Produk -->
            <div class="mb-5">
                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nama Produk</label>
                <input type="text" name="name" id="name" value="{{ old('name', $product->name) }}"
                    class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
                @error('name')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Harga -->
            <div class="mb-5">
                <label for="price" class="block text-sm font-medium text-gray-700 mb-1">Harga</label>
                <input type="number" name="price" id="price" step="0.01"
                    value="{{ old('price', $product->price) }}"
                    class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
                @error('price')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Kategori -->
            <div class="mb-5">
                <label for="category_id" class="block text-sm font-medium text-gray-700 mb-1">Kategori</label>
                <select name="category_id" id="category_id"
                    class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    <option value="">-- Pilih Kategori --</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}"
                            {{ old('category_id', $product->category_id) == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
                @error('category_id')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Deskripsi -->
            <div class="mb-5">
                <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Deskripsi</label>
                <textarea name="description" id="description" rows="4"
                    class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">{{ old('description', $product->description) }}</textarea>
                @error('description')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Favorit -->
            <div class="mb-5 flex items-center space-x-2">
                <input type="checkbox" name="is_favorite" id="is_favorite" value="1"
                    class="text-blue-600 border-gray-300 rounded focus:ring-blue-500"
                    {{ old('is_favorite', $product->is_favorite) ? 'checked' : '' }}>
                <label for="is_favorite" class="text-sm text-gray-700">Jadikan Favorit</label>
            </div>

            <!-- Gambar -->
            <div class="mb-6">
                <label for="image" class="block text-sm font-medium text-gray-700 mb-1">Gambar Produk</label>
                <input type="file" name="image" id="image"
                    class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
                @error('image')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror

                @if ($product->image)
                    <div class="mt-3">
                        <p class="text-gray-600 text-sm mb-1">Gambar saat ini:</p>
                        <img src="{{ asset('storage/' . $product->image) }}" alt="Gambar Produk"
                            class="w-32 h-32 object-cover rounded-lg border border-gray-200">
                    </div>
                @endif
            </div>

            <!-- Tombol Submit -->
            <div class="flex justify-end">
                <button type="submit"
                    class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-6 rounded-lg shadow-sm transition duration-150">
                    Update Produk
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
