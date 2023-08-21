<button {{ $this->attributes() }}
    class="{{ $this->mergeClasses('px-3 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 inline-flex items-center space-x-1', $this->variants[$variant], $class) }}"
    type="{{ $type }}">

    @if ($leftIcon)
        @svg($leftIcon, ['class' => 'h-4 w-4'])
    @endif

    @if ($label)
        <span>{{ $label }}</span>
    @endif

    @isset($rightIcon)
        @svg($rightIcon, ['class' => 'h-4 w-4'])
    @endisset
</button>
