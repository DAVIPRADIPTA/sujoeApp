<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth scroll-pt-36">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>sujoe</title>
    <link rel="icon" href="{{ asset('favicon.png') }}" type="image/png" />


    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DynaPuff:wght@400..700&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
    <!-- Leaflet CSS -->
    <!-- Tambahkan di dalam <head> atau sebelum penutup </body> -->
    <!-- <link
        rel="stylesheet"
        href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <script
        src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js">
    </script> -->





    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- @else
           
        @endif -->

</head>

<body class="font-dynapuff text-primary">
    <!-- HERO SECTION -->
    <div class="bg-sujoe_base overflow-hidden">
        <div class="h-screen w-screen relative overflow-hidden">
            <div class="bg-sujoe h-full absolute animate-fade-in"></div>
            <div class="absolute top-32 w-full text-center">
                <div class="relative inline-block">
                    <x-application-logo class="w-40 absolute -top-20 z-10 right-18 opacity-0  animate-zoom-out " style="animation-delay: calc(2500 * 1ms);" />
                    <h1 class="text-[120px]/[130px] font-bold">
                        <div class="block">
                            <span class="opacity-0 delay-300 inline-block animate-text-in">susu</span>
                        </div>
                        <div class="block">
                            <span class="opacity-0 animate-text-in inline-block delay-700">sapi</span>
                        </div>
                        <div class="flex w-fit mx-auto">
                            <span class="opacity-0 inline-block animate-maju-in delay-1100">m</span>
                            <span class="opacity-0 inline-block animate-maju-in delay-1300">a</span>
                            <span class="opacity-0 inline-block animate-maju-in delay-1500">j</span>
                            <span class="opacity-0 inline-block animate-maju-in delay-1700">u</span>
                        </div>
                    </h1>
                </div>
            </div>
        </div>
    </div>

    <!-- HOME SECTION -->
    <div class=" bg-sujoe_base ">
        <nav>
            <div class="drawer  ">
                <input id="my-drawer-3" type="checkbox" class="drawer-toggle" />
                <div class="drawer-content  flex flex-col">
                    <!-- Navbar -->
                    <div class="bg-transparent sticky top-0 backdrop-blur-md h-4">

                    </div>
                    <div class="bg-sujoe sticky top-4  rounded-full navbar z-30   w-10/12 mx-auto">
                        <div class="mx-2 flex-1 px-2">
                            <x-application-logo class="w-12" />
                        </div>
                        <div class="flex-none lg:hidden p-0">
                            <label for="my-drawer-3" aria-label="open sidebar" class="btn  btn-square btn-ghost">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    class="inline-block h-6 w-6 stroke-current">
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M4 6h16M4 12h16M4 18h16"></path>
                                </svg>
                            </label>
                        </div>
                        <div class="hidden flex-none lg:block">
                            <ul class="menu menu-horizontal">
                                <!-- Navbar menu content here -->
                                <li><a href="#tentang">Tentang</a></li>
                                <li><a href="#menu">Menu</a></li>
                                <li><a href="#alamat">Alamat</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Page content here -->
                    <div id="tentang" class="container mx-auto py-8">
                        <div class="flex flex-col w-10/12 mx-auto gap-10">
                            <div class="flex justify-between items-center">
                                <div class="text-[30px] lg:text-[90px] leading-[45px] tracking-tighter lg:leading-sujoe ">
                                    susu <br /> cerdas <br /> <span class="text-secondary">sekeluarga</span>
                                </div>
                                <img class="w-[150px] lg:w-[250px] " src="{{ asset('assets/maskot.png') }}" alt="">
                            </div>
                            <p class="text-[10px] lg:text-xs">
                                Cafe susu sapi yang menyediakan susu sapi dan kambing murni berkualitas sejak 1980 dengan berbagai varian rasa, snack, dan makanan berat yang terus dikembangkan. Serta menyediakan berbagai fasilitas tempat yang pastinya nyaman untuk semua kalangan </p>
                        </div>
                    </div>
                    @php
                    $bgCarousel1 = asset("storage/carousel/carousel1.jpg");
                    $bgCarousel2 = asset("storage/carousel/carousel2.jpg");
                    $bgCarousel3 = asset("storage/carousel/carousel3.jpg");
                    @endphp

                    <div class=" flex aspect-[19/9]  w-10/12 mx-auto">
                        <swiper-container class="bg-sujoe h-full w-full   mx-auto rounded-3xl  "
                            loop="true"
                            pagination="true"
                            pagination-clickable="true"
                            navigation="true"
                            space-between="100"
                            centered-slides="true">
                            <swiper-slide class="flex justify-center items-center bg-cover bg-center h-full rounded-3xl"
                                style="background-image: url('{{ $bgCarousel1 }}')">
                                <!-- Optional: tambahkan overlay atau konten -->
                            </swiper-slide>

                            <swiper-slide class="flex justify-center items-center bg-cover bg-center h-full rounded-3xl"
                                style="background-image: url('{{ $bgCarousel2 }}')">
                                <!-- Optional: tambahkan overlay atau konten -->
                            </swiper-slide>
                            <swiper-slide class="flex justify-center items-center bg-cover bg-center h-full rounded-3xl"
                                style="background-image: url('{{ $bgCarousel3 }}') ">
                                <!-- Optional: tambahkan overlay atau konten -->
                            </swiper-slide>
                        </swiper-container>
                    </div>

                    <h2 id="menu" class="text-xl font-bold mb-4 flex justify-center  mt-20 ">Menu Favorit</h2>
                    <div>
                        <div class="w-10/12 mx-auto mt-8 ">

                            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4">
                                @foreach($favoriteProducts as $product)
                                @php
                                $bgProduct = asset('storage/' . $product->image);
                                $bgDefault = asset('storage/logo-sujoe.png');
                                @endphp
                                <div class=" border rounded-xl bg-sujoe shadow w-full ">
                                    @if($product->image)
                                    <div class="h-32 w-full bg-cover bg-clip-border bg-white   bg-no-repeat bg-center rounded-xl"
                                        style="background-image: url('{{ $bgProduct }}')">
                                    </div>
                                    @else
                                    <div class="h-32 w-full bg-cover bg-clip-border bg-sujoe_base bg-no-repeat bg-center rounded"
                                        style="background-image: url('{{ $bgDefault }}')">
                                    </div>
                                    @endif
                                    <h3 class="font-light mt-2 mx-2 text-[15px] lg:font-semibold">{{ $product->name }}</h3>
                                    <p class="mx-2 text-[12px] text-gray-900">{{ $product->description }}</p>
                                    <p class="mx-2 mt-1 text-slate-700  font-bold">Rp {{ number_format($product->price, 0) }}</p>
                                </div>
                                @endforeach
                            </div>
                        </div>

                    </div>

                    <h1 class="mt-20 font-bold mx-auto text-xl">Menu</h1>
                    <div class="flex gap-0 w-10/12 mx-auto lg:bg-sujoe lg:h-96 lg:rounded-3xl mt-8">
                        <div class="hidden lg:block lg:w-1/2">
                            <img src="{{ asset('assets/milkshake.webp') }}" alt="" class="w-full h-full rounded-l-3xl">
                        </div>
                        <div x-data="{ activeTab: '{{ $categories->first()->slug }}' }" class="lg:py-1 lg:w-1/2 lg:h-96 h-80 rounded-3xl lg:rounded-r-3xl max-w-4xl mx-auto  lg:mt-0 bg-sujoe w-full">
                            <!-- Tab Buttons -->
                            <div class="flex border items-center  bg-sujoe_base my-2 lg:my-0 mx-2 lg:12 rounded-full scrollbar-hidden border-gray-300 overflow-x-scroll">
                                @foreach($categories as $category)
                                <button @click="activeTab = '{{ $category->slug }}'"
                                    :class="activeTab === '{{ $category->slug }}' ? 'border bg-sujoe text-gray-900  rounded-full' : 'text-gray-600'"
                                    class="py-2 focus:outline-none font-medium px-3 text-sm  my-1 mx-1">
                                    {{ $category->name }}
                                </button>
                                @endforeach
                            </div>

                            <!-- Tab Contents -->
                            <div class="mt-3">
                                @foreach($categories as $category)
                                <div x-show="activeTab === '{{ $category->slug }}'" class="space-y-1 overflow-y-scroll scrollbar-hidden mx-2 bg-sujoe_base rounded-3xl lg:h-[310px]  h-60" x-cloak>
                                    @foreach($category->products as $product)
                                    <div class="p-1 border-b border-slate-800 text-[15px] flex justify-between mx-3 shadow-sm text-xs">
                                        <h1>{{ $product->name }}</h1>
                                        <p>Rp {{ number_format($product->price, 0) }}</p>
                                    </div>
                                    @endforeach
                                </div>
                                @endforeach
                            </div>

                        </div>
                    </div>

                    <h1 id="alamat" class="mt-20 mx-auto font-bold text-xl">Alamat</h1>
                    <div class=" w-full mt-8">
                        <div class="flex w-10/12 flex-col lg:flex-row mx-auto gap-6 ">
                            @php
                            $bgInstagram = asset('assets/logo-instagram.png');
                            $bgSujoeWerkudoro = asset('assets/foto-depan-sujoe.png');
                            $bgSujoeKeramat = asset('assets/sujoe-karamat.jpg');
                            @endphp
                            <div class=" border rounded-xl bg-sujoe shadow w-full ">
                                <div class="h-32 lg:h-52 w-full bg-cover bg-clip-border bg-white   bg-no-repeat bg-center rounded-t-xl"
                                    style="background-image: url('{{ $bgSujoeWerkudoro }}')">
                                </div>
                                <h3 class="font-light mt-2 mx-2 text-[15px] lg:font-semibold">sujoe werkudoro</h3>
                                <p class="mx-2 text-[12px] text-gray-900"> Jl Werkudoro no. 213 RT01 RW06, Slerok, Tegal Timur, Kota Tegal 52125</p>
                                <!-- <p class="mx-2 mt-1 text-slate-700  font-bold">Rp {{ number_format($product->price, 0) }}</p> -->
                                <div class="flex mx-2 mt-4 mb-2 gap-2">
                                    <a href=" https://www.instagram.com/sujoecafe_?utm_source=ig_web_button_share_sheet&igsh=MjNyZXBzaHBibTVv"
                                        class="cursor-pointer">
                                        <img src="{{ asset('assets/logo-instagram.png') }}" alt="" class=" w-7 h-7">
                                    </a>
                                    <a href="https://maps.app.goo.gl/PJeWXrwpmUpTkn4r7"
                                        class="cursor-pointer">
                                        <img src="{{ asset('assets/logo-point.png') }}" alt="" class=" w-7 h-7">
                                    </a>
                                </div>
                            </div>
                            <div class=" border rounded-xl bg-sujoe shadow w-full ">
                                <div class="h-32 lg:h-52 w-full bg-cover bg-clip-border bg-white   bg-no-repeat bg-center rounded-t-xl"
                                    style="background-image: url('{{ $bgSujoeKeramat }}')">
                                </div>
                                <h3 class="font-light mt-2 mx-2 text-[15px] lg:font-semibold">sujoe kramat</h3>
                                <p class="mx-2 text-[12px] text-gray-900">Jl. Garuda No.24, Bulak, Babakan, Kec. Kramat, Kabupaten Tegal, Jawa Tengah 52181</p>
                                <!-- <p class="mx-2 mt-1 text-slate-700  font-bold">Rp {{ number_format($product->price, 0) }}</p> -->
                                <div class="flex mx-2 mt-4 mb-2 gap-2">
                                    <a href="https://www.instagram.com/sujoecafe2?utm_source=ig_web_button_share_sheet&igsh=MTdsMzFjbTN6ZXRocA=="
                                        class="cursor-pointer">
                                        <img src="{{ asset('assets/logo-instagram.png') }}" alt="" class=" w-7 h-7">
                                    </a>
                                    <a href="https://maps.app.goo.gl/zbzRPvUZUJHCd2AN7"
                                        class="cursor-pointer">
                                        <img src="{{ asset('assets/logo-point.png') }}" alt="" class=" w-7 h-7">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="mb-0 h-16 w-full" preserveAspectRatio="none">
                        <path fill="#FCB92D" fill-opacity="1" d="M0,96L40,106.7C80,117,160,139,240,133.3C320,128,400,96,480,96C560,96,640,128,720,117.3C800,107,880,53,960,58.7C1040,64,1120,128,1200,144C1280,160,1360,128,1400,112L1440,96L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path>
                    </svg>
                    <footer class="bg-[#FCB92D] text-black py-10">
                        <div class="w-10/12 mx-auto grid grid-cols-1 md:grid-cols-3 gap-8 text-center md:text-left">
                            <!-- Brand Info -->
                            <div>
                                <x-application-logo class="w-16 mx-auto md:mx-0 mb-2" />
                                <p class="font-bold text-lg">Sujoe Cafe</p>
                                <p class="text-sm mt-1">Susu sapi segar dan nikmat. Hadirkan energi dan semangat setiap hari.</p>
                            </div>

                            <!-- Navigasi -->
                            <div>
                                <p class="font-bold mb-2">Navigasi</p>
                                <ul class="space-y-1 text-sm">
                                    <li><a href="#tentang" class="hover:underline">Tentang</a></li>
                                    <li><a href="#menu" class="hover:underline">Menu</a></li>
                                    <li><a href="#alamat" class="hover:underline">Alamat</a></li>
                                </ul>
                            </div>

                            <!-- Kontak -->
                            <div>
                                <p class="font-bold mb-2">Hubungi Kami</p>
                                <p class="text-sm">sujoecafe@gmail.com</p>
                                <a href="https://wa.me/6285695328781" target="_blank" rel="noopener noreferrer">
                                    <p class="text-sm mb-2">0856 9532 8781</p>
                                </a>

                                <!-- <div class="flex justify-center md:justify-start gap-3 mt-2">
                                    <a href="https://instagram.com/sujoecafe_" target="_blank">
                                        <img src="{{ asset('assets/logo-instagram.png') }}" class="w-6 h-6" alt="Instagram" />
                                    </a>
                                    <a href="https://maps.app.goo.gl/PJeWXrwpmUpTkn4r7" target="_blank">
                                        <img src="{{ asset('assets/logo-point.png') }}" class="w-6 h-6" alt="Maps" />
                                    </a>
                                </div> -->
                            </div>
                        </div>

                        <div class="text-center text-xs mt-10">
                            &copy; {{ date('Y') }} Sujoe Cafe. All rights reserved.
                        </div>
                    </footer>
                </div>
                <div class="drawer-side z-40">
                    <ul class="menu bg-base-200 min-h-full w-full p-4 flex flex-col items-center">
                        <label for="my-drawer-3" aria-label="close sidebar" class="drawer-overlay self-end">
                            <img src="{{ asset('assets/close.png') }}" alt="">
                        </label>
                        <li><a href="#tentang" onclick="document.getElementById('my-drawer-3').checked = false">Tentang</a></li>
                        <li><a href="#menu" onclick="document.getElementById('my-drawer-3').checked = false">Menu</a></li>
                        <li><a href="#alamat" onclick="document.getElementById('my-drawer-3').checked = false">Alamat</a></li>
                    </ul>
                </div>

            </div>
        </nav>
    </div>

</body>

</html>