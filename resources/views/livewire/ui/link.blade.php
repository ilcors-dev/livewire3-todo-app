<a href="{{ $href }}" class="cursor-pointer py-0 text-black hover:underline dark:text-white"
    {{ $spa ? 'wire:navigate' : '' }} {{ $this->attributes() }}>{{ $text }}</a>
