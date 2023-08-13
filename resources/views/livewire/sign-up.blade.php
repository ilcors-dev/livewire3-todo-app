<div>
    <div class="flex items-center justify-center">
        <div class="mt-5 w-10/12 rounded-md bg-white p-6 sm:w-8/12 lg:w-6/12">
            <form wire:submit="submit" class="flex flex-col space-y-6">
                <div>
                    <livewire:ui.label for="name" text="name" />
                    <livewire:ui.input name="name" placeholder="name" wire:model="form.name" />
                    @error('form.name')
                        <small>
                            <span class="text-red-500">{{ $message }}</span>
                        </small>
                    @enderror
                </div>
                <div>
                    <livewire:ui.label for="email" text="email" />
                    <livewire:ui.input type="email" name="email" placeholder="email" wire:model="form.email" />
                    @error('form.email')
                        <small>
                            <span class="text-red-500">{{ $message }}</span>
                        </small>
                    @enderror
                </div>
                <div>
                    <livewire:ui.label for="password" text="password" />
                    <livewire:ui.input name="password" type="password" placeholder="password"
                        wire:model="form.password" />
                    @error('form.password')
                        <small>
                            <span class="text-red-500">{{ $message }}</span>
                        </small>
                    @enderror
                </div>
                <div>
                    <livewire:ui.label for="password_confirmation" text="repeat password" />
                    <livewire:ui.input name="password_confirmation" type="password" placeholder="repeat password"
                        wire:model="form.password_confirmation" />
                    @error('form.passwordConfirmation')
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
