<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div>
        <p>jumlah produk</p>
        <h1>{{ $getCountProduct }}</h1>
    </div>
    <div>
        <p>jumlah kategori</p>
        <h1>{{ $getCountCategory }}</h1>
    </div>

    @php
    $bgUrlCarousel1 = asset("storage/carousel/carousel1.jpg");
    $bgUrlCarousel2 = asset("storage/carousel/carousel2.jpg");
    $bgUrlCarousel3 = asset("storage/carousel/carousel3.jpg");
    @endphp

    <form action="{{ route('dashboard.update', ['id' => 1]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <input type="file" name="image">
        <button type="submit">Upload</button>
    </form>
    <div class="flex justify-center items-center bg-cover bg-center h-[100px] w-[200px]"
        style="background-image: url('{{ $bgUrlCarousel1 }}') !important;">
        <!-- Optional: tambahkan overlay atau konten -->
    </div>
    <form action="{{ route('dashboard.update', ['id' => 2]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <input type="file" name="image">
        <button type="submit">Upload</button>
    </form>
    <div class="flex justify-center items-center bg-cover bg-center h-[100px] w-[200px]"
        style="background-image: url('{{ $bgUrlCarousel2 }}') !important;">
        <!-- Optional: tambahkan overlay atau konten -->
    </div>
    <form action="{{ route('dashboard.update', ['id' => 3]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <input type="file" name="image">
        <button type="submit">Upload</button>
    </form>
    <div class="flex justify-center items-center bg-cover bg-center h-[100px] w-[200px]"
        style="background-image: url('{{ $bgUrlCarousel3 }}') !important;">
        <!-- Optional: tambahkan overlay atau konten -->
    </div>
    



</x-app-layout>