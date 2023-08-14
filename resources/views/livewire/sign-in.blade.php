<div>
    <div class="flex items-center justify-center">
        <div class="mt-5 w-10/12 rounded-md bg-white p-6 sm:w-8/12 lg:w-6/12">
            <form wire:submit="submit" class="flex flex-col space-y-6">
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
                @error('credentials')
                    <div>
                        <small>
                            <span class="text-red-500">{{ $message }}</span>
                        </small>
                    </div>
                @enderror
                <div class="flex justify-center">
                    <livewire:ui.button type="submit" label="sign in" />
                </div>
            </form>
        </div>
    </div>
</div>
