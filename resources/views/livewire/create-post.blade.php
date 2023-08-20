<form wire:submit="submit">
    <livewire:ui.text-area wire:model="form.content" placeholder="what's on your mind?" />
    @error('form.content')
        <small>
            <span class="text-red-500">{{ $message }}</span>
        </small>
    @enderror
    @error('error')
        <small>
            <span class="text-red-500">{{ $message }}</span>
        </small>
    @enderror
    <livewire:ui.button type="submit" label="post" class="ml-auto mt-5 flex w-16 justify-center" />
</form>
