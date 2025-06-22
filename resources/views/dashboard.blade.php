<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-6 px-4 max-w-7xl mx-auto">
        {{-- Info Card Section --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
            <div class="bg-white dark:bg-gray-800 rounded-xl shadow p-6 text-center">
                <p class="text-gray-600 dark:text-gray-300 text-sm">Jumlah Produk</p>
                <h1 class="text-3xl font-bold text-blue-600 dark:text-blue-400">{{ $getCountProduct }}</h1>
            </div>
            <div class="bg-white dark:bg-gray-800 rounded-xl shadow p-6 text-center">
                <p class="text-gray-600 dark:text-gray-300 text-sm">Jumlah Kategori</p>
                <h1 class="text-3xl font-bold text-green-600 dark:text-green-400">{{ $getCountCategory }}</h1>
            </div>
        </div>

        @php
    $bgUrlCarousel1 = asset("storage/carousel/carousel1.jpg");
    $bgUrlCarousel2 = asset("storage/carousel/carousel2.jpg");
    $bgUrlCarousel3 = asset("storage/carousel/carousel3.jpg");
    @endphp

        {{-- Carousel Upload Section --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            {{-- Carousel 1 --}}
            <div class="bg-white dark:bg-gray-800 rounded-xl shadow p-4 flex flex-col items-center">
                <div class="mb-4 w-full h-40 bg-cover bg-center rounded-lg"
                    style="background-image: url('{{ $bgUrlCarousel1 }}');">
                </div>
                <form action="{{ route('dashboard.update', ['id' => 1]) }}" method="POST" enctype="multipart/form-data" class="w-full">
                    @csrf
                    @method('PUT')
                    <input type="file" name="image" class="block w-full mb-2 text-sm text-gray-700 dark:text-gray-300">
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white py-1 px-4 rounded text-sm w-full">
                        Upload
                    </button>
                </form>
            </div>

            {{-- Carousel 2 --}}
            <div class="bg-white dark:bg-gray-800 rounded-xl shadow p-4 flex flex-col items-center">
                <div class="mb-4 w-full h-40 bg-cover bg-center rounded-lg"
                    style="background-image: url('{{ $bgUrlCarousel2 }}');">
                </div>
                <form action="{{ route('dashboard.update', ['id' => 2]) }}" method="POST" enctype="multipart/form-data" class="w-full">
                    @csrf
                    @method('PUT')
                    <input type="file" name="image" class="block w-full mb-2 text-sm text-gray-700 dark:text-gray-300">
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white py-1 px-4 rounded text-sm w-full">
                        Upload
                    </button>
                </form>
            </div>

            {{-- Carousel 3 --}}
            <div class="bg-white dark:bg-gray-800 rounded-xl shadow p-4 flex flex-col items-center">
                <div class="mb-4 w-full h-40 bg-cover bg-center rounded-lg"
                    style="background-image: url('{{ $bgUrlCarousel3 }}');">
                </div>
                <form action="{{ route('dashboard.update', ['id' => 3]) }}" method="POST" enctype="multipart/form-data" class="w-full">
                    @csrf
                    @method('PUT')
                    <input type="file" name="image" class="block w-full mb-2 text-sm text-gray-700 dark:text-gray-300">
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white py-1 px-4 rounded text-sm w-full">
                        Upload
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
