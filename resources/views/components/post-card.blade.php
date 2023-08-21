<div class="rounded-md hover:bg-gray-700/80">
    <div class="p-4">
        <div class="mb-4 flex items-center space-x-4">
            <x-lucide-user class="h-6 w-6" />
            <div>
                <h4 class="-mb-2">{{ $post->user->name }}</h4>
                <small>{{ $post->user->handle }}</small>
            </div>
        </div>
        <div>
            {{ $post->html_content }}
        </div>
        <div class="mt-2 text-sm text-slate-300">
            <small class="lowercase">{{ $post->created_at->format('D d/m/Y H:i:s') }}</small>
            <small>&middot;</small>
            <small>{{ $post->created_at->diffForHumans() }}</small>
        </div>
    </div>
    <hr class="my-2 border-b border-slate-300">
    <div class="p-4">
        <livewire:like-post :post="$post" />
    </div>
</div>
