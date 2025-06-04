<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="container mx-auto p-6">
        <div class="flex justify-between mb-7">
            <h2 class="text-2xl font-bold mb-4 text-gray-800">Daftar Produk</h2>
            <a href="{{ route('products.create') }}"
                class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg mb-4 inline-block">
                + Tambah Produk
            </a>
        </div>

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white rounded-lg overflow-hidden">
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="py-3 px-4 text-left">No</th>
                        <th class="py-3 px-4 text-left">Gambar</th>
                        <th class="py-3 px-4 text-left">Nama Produk</th>
                        <th class="py-3 px-4 text-left">Harga</th>
                        <th class="py-3 px-4 text-left">Kategori</th>
                        <th class="py-3 px-4 text-left">Favorit</th>
                        <th class="py-3 px-4 text-left">Aksi</th>
                    </tr>
                </thead>

                <tbody class="text-gray-700">
                    @foreach ($products as $product)
                        <tr class="border-b border-gray-200 hover:bg-gray-50">
                            <td class="py-3 px-4">{{ $loop->iteration }}</td>

                            <!-- Gambar -->
                            <td class="py-3 px-4">
                                @if ($product->image)
                                    <img src="{{ asset('storage/' . $product->image) }}" alt="Produk" class="w-12 h-12 object-cover rounded">
                                @else
                                    <span class="text-gray-400 italic">Tidak ada</span>
                                @endif
                            </td>

                            <!-- Nama Produk -->
                            <td class="py-3 px-4">{{ $product->name }}</td>

                            <!-- Harga -->
                            <td class="py-3 px-4">Rp {{ number_format($product->price, 0, ',', '.') }}</td>

                            <!-- Kategori -->
                            <td class="py-3 px-4">
                                {{ $product->category->name ?? '-' }}
                            </td>

                            <!-- Favorit -->
                            <td class="py-3 px-4">
                                @if ($product->is_favorite)
                                    <span class="text-green-500 font-bold">✅</span>
                                @else
                                    <span class="text-gray-400">❌</span>
                                @endif
                            </td>

                            <!-- Aksi -->
                            <td class="py-3 px-4 flex space-x-2">
                                <a href="{{ route('products.edit', $product->id) }}"
                                    class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-1 rounded">
                                    Edit
                                </a>
                                <form action="{{ route('products.destroy', $product->id) }}" method="POST"
                                    onsubmit="return confirm('Yakin ingin menghapus produk ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700">
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
