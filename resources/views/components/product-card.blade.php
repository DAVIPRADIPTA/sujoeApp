@props([
    'img' => null,
 'productName' => null,
    'price' => null,
    'description' => null,
])

<div class="border rounded-lg shadow-md p-4 bg-white dark:bg-gray-800">
    @if ($img)
    <img src="{{ $img }}" alt="{{ $productName }}" class="..." />
    @endif

    <h2 class="text-lg font-semibold mb-1">{{ $productName }}</h2>

    <p class="text-sm text-gray-700 dark:text-gray-200 mb-2">{{ $price }}</p>

    <div class="mt-3 text-sm text-gray-600 dark:text-gray-300">
        {{ $description }}
    </div>
</div>