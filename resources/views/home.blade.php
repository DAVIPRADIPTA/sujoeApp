<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

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
    <link
        rel="stylesheet"
        href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <script
        src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js">
    </script>





    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- @else
           
        @endif -->

</head>

<body class="font-dynapuff text-primary">
    <!-- HERO SECTION -->
    <div class="bg-sujoe_base overflow-hidden  ">

        <div class="h-screen w-screen relative overflow-hidden">
            <div class="bg-sujoe h-full absolute animate-fade-in"></div>
            <h1 class="absolute top-32 text-[120px]/[130px] font-bold  text-center w-full">
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

    <!-- HOME SECTION -->
    <div class=" bg-sujoe_base ">
        <nav>
            <div class="drawer  ">
                <input id="my-drawer-3" type="checkbox" class="drawer-toggle" />
                <div class="drawer-content  flex flex-col">
                    <!-- Navbar -->
                    <div class="bg-transparent sticky top-0 backdrop-blur-md h-4">

                    </div>
                    <div class="bg-sujoe sticky top-4  rounded-full navbar z-30   w-11/12 mx-auto">
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
                                <li><a>Navbar Item 1</a></li>
                                <li><a>Navbar Item 2</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Page content here -->
                    <div class="container mx-auto py-8">
                        <div class="flex flex-col w-10/12 mx-auto gap-10">
                            <div class="flex justify-between items-center">
                                <div class="text-[90px]  tracking-tighter leading-sujoe ">
                                    Lorem ipsum <br /> dolor sit <br /> <span class="text-secondary">amet</span>
                                </div>
                                <img class=" w-[250px] " src="{{ asset('assets/maskot.png') }}" alt="">
                            </div>
                            <p>
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minus, repellendus molestiae eligendi illo iusto facilis ad ea rem perferendis doloribus! Quis sint, accusantium architecto, amet minus reiciendis magnam incidunt neque distinctio ut expedita enim, aspernatur asperiores et repellat nisi temporibus maiores quidem eius. Vero ad dolores esse placeat repudiandae laborum.
                            </p>
                        </div>

                    </div>
                    <div class="h-96 flex ">
                        <swiper-container class="bg-sujoe h-full w-11/12 mx-auto rounded-3xl "
                            loop="true"
                            pagination="true"
                            pagination-clickable="true"
                            navigation="true"
                            space-between="100"
                            centered-slides="true">
                            <swiper-slide class="flex justify-center items-center">Slide </swiper-slide>
                            <swiper-slide class="flex justify-center items-center">Slide 2</swiper-slide>
                            <swiper-slide class="flex justify-center items-center">Slide 3</swiper-slide>
                        </swiper-container>
                    </div>
                    <div>
                        <h2 class="text-xl font-bold mb-4">Favorite Products</h2>
                        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                            @foreach($favoriteProducts as $product)
                            <div class="p-4 border rounded-lg shadow">
                                <h3 class="font-semibold">{{ $product->name }}</h3>
                                <p class="text-sm text-gray-600">{{ $product->description }}</p>
                                <p class="mt-1 text-blue-500 font-bold">Rp {{ number_format($product->price, 0) }}</p>

                                @if($product->image)
                                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-32 h-32 object-cover">
                                @endif

                            </div>
                            @endforeach
                        </div>

                    </div>
                    <div x-data="{ activeTab: '{{ $categories->first()->slug }}' }" class="w-full max-w-4xl mx-auto mt-8">

                        <!-- Tab Buttons -->
                        <div class="flex border-b border-gray-300">
                            @foreach($categories as $category)
                            <button @click="activeTab = '{{ $category->slug }}'"
                                :class="activeTab === '{{ $category->slug }}' ? 'border-b-2 border-blue-600 text-blue-600' : 'text-gray-600'"
                                class="py-2 px-4 focus:outline-none font-medium">
                                {{ $category->name }}
                            </button>
                            @endforeach

                        </div>

                        <!-- Tab Contents -->

                        <div class="mt-6">
                            <!-- Drink Tab -->


                            <!-- Milkshake Tab -->
                            @foreach($categories as $category)
                            <div x-show="activeTab === '{{ $category->slug }}'" class="space-y-4" x-cloak>
                                @foreach($category->products as $product)
                                <div class="p-4 border rounded-lg shadow-sm">{{ $product->name }}</div>
                                @endforeach
                            </div>
                            @endforeach

                        </div>
                    </div>
                    <div class="flex mx-auto gap-6 mt-6">
                        <x-card
                            :img="asset('assets/foto-depan-sujoe.png')"
                            title="Sujoe Kramat"
                            address="Alamat Sujoe Kramat"
                            instagram="ini instagram"
                            instagramLink="https://instagram.com/sujoekramat">

                            <p>Ini adalah produk yang sedang diskon.</p>
                        </x-card>
                        <x-card
                            :img="asset('assets/foto-depan-sujoe.png')"
                            title="Sujoe Kramat"
                            address="Alamat Sujoe Kramat"
                            instagram="ini instagram"
                            instagramLink="https://instagram.com/sujoekramat">

                            <p>Ini adalah produk yang sedang diskon.</p>
                        </x-card>
                    </div>

                    <div id="map" style="height: 400px;" class="rounded-md shadow"></div>


                </div>
                <div class="drawer-side">
                    <label for="my-drawer-3" aria-label="close sidebar" class="drawer-overlay"></label>
                    <ul class="menu bg-base-200 min-h-full w-80 p-4">
                        <!-- Sidebar content here -->
                        <li><a>Sidebar Item 1</a></li>
                        <li><a>Sidebar Item 2</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>




    <script>
        const swiperEl = document.querySelector('swiper-container');
        const btnNext = document.querySelector('#btnNext')
        const btnPrev = document.querySelector('#btnPrev')

        btnNext.addEventListener('click', () => {
            swiperEl.swiper.slideNext();
        });
        btnPrev.addEventListener('click', () => {
            swiperEl.swiper.slidePrev();
        });
        document.addEventListener('DOMContentLoaded', function() {
            // Buat map dan tentukan titik koordinat serta zoom
            var map = L.map('map').setView([-6.885628211166777, 109.137952922638], 13); // Jakarta

            // Gunakan tile dari OpenStreetMap
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '© OpenStreetMap contributors'
            }).addTo(map);

            // Tambahkan marker ke lokasi tersebut
            L.marker([-6.885628211166777, 109.137952922638])
                .addTo(map)
                .bindPopup('<b>Halo!</b><br>Ini Jakarta.')
                .openPopup();
        });
    </script>
</body>

</html>