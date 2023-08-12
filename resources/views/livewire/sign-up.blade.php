<div>
    <div class="flex items-center justify-center">
        <div class="mt-5 w-10/12 rounded-md bg-white p-6 sm:w-8/12 lg:w-6/12">
            <form wire:submit="save" class="flex flex-col space-y-6">
                <div wire:model="name">
                    <livewire:ui.label for="name" text="name" />
                    <livewire:ui.input id="name" placeholder="name" />
                    @error('name')
                        <small>
                            <span class="text-red-500">{{ $message }}</span>
                        </small>
                    @enderror
                </div>
                <div wire:model="email">
                    <livewire:ui.label for="email" text="email" />
                    <livewire:ui.input id="email" placeholder="email" />
                    @error('email')
                        <small>
                            <span class="text-red-500">{{ $message }}</span>
                        </small>
                    @enderror
                </div>
                <div wire:model="password">
                    <livewire:ui.label for="password" text="password" />
                    <livewire:ui.input id="password" type="password" placeholder="password" />
                    @error('password')
                        <small>
                            <span class="text-red-500">{{ $message }}</span>
                        </small>
                    @enderror
                </div>
                <div wire:model="passwordConfirmation">
                    <livewire:ui.label for="repeat-password" text="repeat password" />
                    <livewire:ui.input id="repeat-password" type="password" placeholder="repeat password" />
                    @error('repeat password')
                        <small>
                            <span class="text-red-500">{{ $message }}</span>
                        </small>
                    @enderror
                </div>
                <div class="flex justify-center">
                    <livewire:ui.button label="sign up" />
                </div>
            </form>
        </div>
    </div>
</div>
