<div class="flex h-20 w-full justify-between p-6 px-10">
    <p class="text-4xl font-bold text-gray-800 dark:text-neutral-50">todos</p>
    <div class="flex items-center space-x-2" x-on:toggle="$dispatch('dark-mode-toggle', $event.detail)">
        <x-lucide-sun class="h-6 w-6 dark:text-white" />
        <livewire:ui.toggle x-data size="md" />
        <x-lucide-moon class="h-6 w-6 dark:text-white" />
    </div>
</div>
