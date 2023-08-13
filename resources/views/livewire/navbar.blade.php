<div class="flex h-20 w-full justify-between p-6 px-5 sm:px-10">
    <p class="text-4xl font-bold text-gray-800 dark:text-neutral-50">todos</p>
    <div class="flex items-center space-x-4 lg:space-x-10">
        @if (!auth()->check())
            <livewire:ui.link spa href="{{ route('auth.sign-in') }}" text="login" />
            <livewire:ui.link spa href="{{ route('auth.sign-up') }}" text="sign up" />
        @else
            <livewire:ui.link href="{{ route('auth.sign-out') }}" text="logout" />
        @endif
        <div class="flex items-end space-x-2" x-on:toggle="$dispatch('dark-mode-toggle', $event.detail)">
            <x-lucide-sun class="h-6 w-6 dark:text-white" />
            <livewire:ui.toggle size="md" class="my-auto" />
            <x-lucide-moon class="h-6 w-6 dark:text-white" />
        </div>
    </div>
</div>
