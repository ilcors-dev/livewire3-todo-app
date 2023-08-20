<textarea {{ $this->attributes() }} placeholder="{{ $placeholder }}"
    class="{{ $this->mergeClasses('border-input bg-background placeholder:text-muted-foreground focus-visible:ring-ring flex min-h-[80px] w-full rounded-md border px-3 py-2 text-sm text-black focus:ring-black focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50', $class) }}"
    wire:model.live="value" style="white-space: pre-wrap;">
</textarea>
