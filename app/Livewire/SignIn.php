<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\Attributes\Layout;

class SignIn extends Component
{
    #[Layout('components.layouts.guest'), Title('Sign In')]
    public function render()
    {
        return view('livewire.sign-in');
    }
}
