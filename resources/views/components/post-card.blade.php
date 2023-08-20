<div class="rounded-md p-4 hover:bg-gray-700/80">
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
</div>
