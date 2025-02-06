<div>
    	{{-- Stop trying to control. --}}
<button wire:click="toggleTheme" class="px-4 py-2 bg-gray-200 dark:bg-gray-700 rounded">
    {{ $this->isDark ? 'Switch to Light Mode' : 'Switch to Dark Mode' }}
</button>



</div>
