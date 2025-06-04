
<div x-data="{ activeTab: 'profile' }" class="max-w-3xl mx-auto p-4">
  <!-- Tab Header -->
  <div class="flex border-b border-gray-200">
    <!-- Tab 1 -->
    <button
      @click="activeTab = 'profile'"
      :class="{
        'border-b-2 border-blue-500 text-blue-600': activeTab === 'profile',
        'text-gray-500 hover:text-gray-700': activeTab !== 'profile'
      }"
      class="px-4 py-2 font-medium text-sm focus:outline-none"
    >
      Profile
    </button>
    
    <!-- Tab 2 -->
    <button
      @click="activeTab = 'settings'"
      :class="{
        'border-b-2 border-blue-500 text-blue-600': activeTab === 'settings',
        'text-gray-500 hover:text-gray-700': activeTab !== 'settings'
      }"
      class="px-4 py-2 font-medium text-sm focus:outline-none"
    >
      Settings
    </button>
    
    <!-- Tab 3 -->
    <button
      @click="activeTab = 'messages'"
      :class="{
        'border-b-2 border-blue-500 text-blue-600': activeTab === 'messages',
        'text-gray-500 hover:text-gray-700': activeTab !== 'messages'
      }"
      class="px-4 py-2 font-medium text-sm focus:outline-none"
    >
      Message
    </button>
  </div>

  <!-- Tab Content -->
  <div class="mt-4">
    <!-- Content 1 -->
    <div x-show="activeTab === 'profile'" class="space-y-2">
      <h3 class="text-lg font-medium">Profile Information</h3>
      <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </div>
    
    <!-- Content 2 -->
    <!-- <div x-show="activeTab === 'settings'" class="space-y-2">
      <h3 class="text-lg font-medium">System Settings</h3>
      <p class="text-gray-600">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div> -->
    
    Content 3
    <!-- <div x-show="activeTab === 'messages'" class="space-y-2">
      <h3 class="text-lg font-medium">Message Inbox</h3>
      <p class="text-gray-600">Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    </div> -->
  </div>
</div>