@props([
'img'=> null,
'title' => 'Default Title',
'address' => null,
'instagramLink' => '#',
'instagram' => null
])

<div class="border rounded-lg shadow-md p-4 bg-white dark:bg-gray-800">
    @if ($img)
    <img src="{{ $img }}" alt="{{ $title }}" class="..." />
    @endif

    <h2 class="text-lg font-semibold mb-1">{{ $title }}</h2>

    <p class="text-sm text-gray-700 dark:text-gray-200 mb-2">{{ $address }}</p>

    <a href="{{ $instagramLink }}" target="_blank" class="text-blue-500 hover:underline text-sm">
        {{ $instagram }}
    </a>

    <div class="mt-3 text-sm text-gray-600 dark:text-gray-300">
        {{ $slot }}
    </div>
</div>