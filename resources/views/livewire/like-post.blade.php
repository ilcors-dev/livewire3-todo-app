<form wire:submit="store">
    <div class="flex items-center">
        <livewire:ui.button type="submit"
            left-icon="{{ $post->liked_by_auth_user ? 'lucide-heart-handshake' : 'lucide-heart' }}" variant="icon">
        </livewire:ui.button>
        <span class="ml-3 text-sm">{{ $post->likes_count }}</span>
    </div>
</form>
