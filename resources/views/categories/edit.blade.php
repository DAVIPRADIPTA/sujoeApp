<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Edit Kategori
        </h2>
    </x-slot>

    <div class="container mx-auto p-6">
        <div class="max-w-xl bg-white rounded-lg shadow p-6">
            <form action="{{ route('categories.update', $category->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label for="name" class="block font-medium text-gray-700">Nama Kategori</label>
                    <input type="text" name="name" id="name"
                        value="{{ old('name', $category->name) }}"
                        class="w-full mt-1 p-2 border rounded-md shadow-sm focus:ring focus:border-blue-300" required>
                </div>

                <div class="flex justify-end">
                    <a href="{{ route('categories.index') }}"
                        class="bg-gray-300 text-gray-700 px-4 py-2 rounded hover:bg-gray-400 mr-2">
                        Batal
                    </a>
                    <button type="submit"
                        class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                        Simpan Perubahan
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
