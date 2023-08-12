<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\Attributes\Title;

class SignUp extends Component
{
    #[Rule('required|min:3')]
    public string $name = '';

    #[Rule('required|unique:users|email')]
    public string $email = '';

    #[Rule('required|min:8|confirmed')]
    public string $password = '';

    #[Rule('required')]
    public string $passwordConfirmation = '';

    public function save()
    {
        $user = User::create(
            $this->only(['name', 'email', 'password'])
        );

        auth()->login($user);

        return redirect()->route('home');
    }

    #[Title('Sign Up')]
    public function render()
    {
        return view('livewire.sign-up');
    }
}
