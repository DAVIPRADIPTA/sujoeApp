@php
  $drinks = App\Models\Product::where('type', 'drink')->get();
  $milkshakes = App\Models\Product::where('type', 'milkshake')->get();
  $snacks = App\Models\Product::where('type', 'snack')->get();
@endphp

<div x-data="{ activeTab: 'drink' }" class="w-full max-w-4xl mx-auto mt-8">
  <!-- Tab Buttons -->
  <div class="flex border-b border-gray-300">
    <button 
      @click="activeTab = 'drink'" 
      :class="activeTab === 'drink' ? 'border-b-2 border-blue-600 text-blue-600' : 'text-gray-600'" 
      class="py-2 px-4 focus:outline-none font-medium"
    >
      Drink
    </button>
    <button 
      @click="activeTab = 'milkshake'" 
      :class="activeTab === 'milkshake' ? 'border-b-2 border-blue-600 text-blue-600' : 'text-gray-600'" 
      class="py-2 px-4 focus:outline-none font-medium"
    >
      Milkshake
    </button>
    <button 
      @click="activeTab = 'snack'" 
      :class="activeTab === 'snack' ? 'border-b-2 border-blue-600 text-blue-600' : 'text-gray-600'" 
      class="py-2 px-4 focus:outline-none font-medium"
    >
      Snack
    </button>
  </div>

  <!-- Tab Contents -->
  <div class="mt-6">
    <!-- Drink Tab -->
    <div x-show="activeTab === 'drink'" class="space-y-4">
      @foreach($drinks as $product)
        <div class="p-4 border rounded-lg shadow-sm">
          <h3 class="font-bold">{{ $product->name }}</h3>
          <p class="text-gray-600">Rp {{ number_format($product->price, 0) }}</p>
        </div>
      @endforeach
    </div>

    <!-- Milkshake Tab -->
    <div x-show="activeTab === 'milkshake'" class="space-y-4" x-cloak>
      @foreach($milkshakes as $product)
        <div class="p-4 border rounded-lg shadow-sm">
          <h3 class="font-bold">{{ $product->name }}</h3>
          <p class="text-gray-600">Rp {{ number_format($product->price, 0) }}</p>
        </div>
      @endforeach
    </div>

    <!-- Snack Tab -->
    <div x-show="activeTab === 'snack'" class="space-y-4" x-cloak>
      @foreach($snacks as $product)
        <div class="p-4 border rounded-lg shadow-sm">
          <h3 class="font-bold">{{ $product->name }}</h3>
          <p class="text-gray-600">Rp {{ number_format($product->price, 0) }}</p>
        </div>
      @endforeach
    </div>
  </div>
</div>