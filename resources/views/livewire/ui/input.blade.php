<input wire:model="value" id="{{ $id }}" type="{{ $type }}"
    class="{{ $this->mergeClasses($class, 'h-10 w-full border border-gray-300 rounded-md focus:ring-black focus:outline-none focus:ring-2 focus:ring-offset-2 px-3 py-2') }}"
    placeholder="{{ $placeholder }}" {{ $this->attributes() }} autocomplete="{{ $autocomplete ? 'on' : 'off' }}" />
