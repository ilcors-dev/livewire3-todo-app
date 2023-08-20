<div class="p-10 dark:text-white">
    <div class="grid grid-cols-12 gap-12">
        <section name="user-actions" class="col-span-3">
            <div class="sticky left-0 top-28 flex flex-col items-center space-y-4">
                <livewire:ui.button
                    class="flex w-full cursor-pointer items-center space-x-2 rounded px-6 py-2 hover:bg-slate-200/40 hover:no-underline dark:hover:bg-slate-100/40"
                    left-icon="lucide-user" label="hello, {{ auth()->user()->name }}" variant="link" />
                <livewire:ui.button href="#todo" variant="link" label="post"
                    class="flex w-full cursor-pointer items-center space-x-2 rounded px-6 py-2 hover:bg-slate-200/40 hover:no-underline dark:hover:bg-slate-100/40"
                    left-icon="lucide-plus" />
            </div>
        </section>
        <section name="user-feed" class="col-span-6">
            <livewire:create-post />
            <ul class="mt-6">
                @foreach ($posts as $post)
                    <x-post-card :post="$post" />
                @endforeach
            </ul>
        </section>
    </div>
</div>
