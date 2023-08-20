<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use App\Models\User;
use Livewire\Attributes\Rule;

class SignUpForm extends Form
{
    #[Rule(['required', 'min:3'])]
    public string $name = '';

    #[Rule(['required', 'unique:users,email', 'email'])]
    public string $email = '';

    #[Rule(['required', 'min:8', 'confirmed'])]
    public string $password = '';

    #[Rule(['required'])]
    public string $password_confirmation = '';

    #[Rule(['required', 'unique:users,handle'])]
    public string $handle = '';

    public function store(): User
    {
        $this->validate();

        $user = User::create(
            $this->only(['name', 'email', 'password', 'handle'])
        );

        return $user;
    }
}
