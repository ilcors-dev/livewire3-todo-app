<a href="{{ $href }}"
    class="{{ $this->mergeClasses('cursor-pointer text-black hover:underline dark:text-white', $class) }}"
    {{ $spa ? 'wire:navigate' : '' }} {{ $this->attributes() }}>{{ $text }}</a>
