<div class="{{ $class }} flex w-10 items-center" {{ $this->attributes() }}>
    <label tabindex="-1" class="group relative flex select-none items-center">
        <input
            class="{{ $sizeClasses[$size]['circle'] }} peer absolute inset-y-0 left-0.5 mx-0.5 my-auto translate-x-0 transform cursor-pointer appearance-none rounded-full border-0 bg-black shadow outline-none transition duration-200 ease-in-out checked:bg-none checked:text-white focus:outline-none dark:bg-white"
            type="checkbox" {{ $checked ? 'checked' : '' }} wire:model="checked"
            x-on:change="(event) => $dispatch('toggle', { checked: event.target.checked })" />

        <div
            class="{{ $sizeClasses[$size]['wrapper'] }} block cursor-pointer rounded-full border-2 border-black transition duration-100 ease-in-out focus:outline-none focus:outline-1 dark:border-white">
        </div>
    </label>
</div>
