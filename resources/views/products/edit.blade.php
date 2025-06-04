<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Edit Produk</h1>

    <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <!-- Nama Produk -->
        <div class="mb-4">
            <label for="name" class="block text-gray-700">Nama Produk</label>
            <input type="text" name="name" id="name"
                value="{{ old('name', $product->name) }}"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
            @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <!-- Harga -->
        <div class="mb-4">
            <label for="price" class="block text-gray-700">Harga</label>
            <input type="number" name="price" id="price" step="0.01"
                value="{{ old('price', $product->price) }}"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
            @error('price') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <!-- Kategori -->
        <div class="mb-4">
            <label for="category_id" class="block text-gray-700">Kategori</label>
            <select name="category_id" id="category_id" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                <option value="">-- Pilih Kategori --</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ old('category_id', $product->category_id) == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
            @error('category_id') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <!-- Deskripsi -->
        <div class="mb-4">
            <label for="description" class="block text-gray-700">Deskripsi</label>
            <textarea name="description" id="description" rows="3"
                      class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">{{ old('description', $product->description) }}</textarea>
            @error('description') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <!-- Favorit -->
        <div class="mb-4 flex items-center">
            <input type="checkbox" name="is_favorite" id="is_favorite" value="1" 
                   class="mr-2" {{ old('is_favorite', $product->is_favorite) ? 'checked' : '' }}>
            <label for="is_favorite" class="text-gray-700">Jadikan Favorit</label>
        </div>

        <!-- Gambar -->
        <div class="mb-4">
            <label for="image" class="block text-gray-700">Gambar Produk</label>
            <input type="file" name="image" id="image" class="mt-1 block w-full">
            @error('image') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror

            @if ($product->image)
                <div class="mt-2">
                    <p class="text-gray-600 text-sm">Gambar saat ini:</p>
                    <img src="{{ asset('storage/' . $product->image) }}" alt="Gambar Produk" class="w-32 h-32 object-cover mt-1 rounded">
                </div>
            @endif
        </div>

        <!-- Tombol Submit -->
        <button type="submit"
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Update Produk
        </button>
    </form>
</div>
