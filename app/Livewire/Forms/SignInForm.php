<?php

namespace App\Livewire\Forms;

use App\Models\User;
use Livewire\Form;
use Livewire\Attributes\Rule;

class SignInForm extends Form
{
    #[Rule(['required', 'email'])]
    public string $email = '';

    #[Rule(['required'])]
    public string $password = '';

    public function store()
    {
        $user = User::query()->where('email', $this->email)->first();

        throw_if(!$user, \Exception::class, 'No user found. Please register first.');

        $credentialsOk = auth()->attempt(['email' => $this->email, 'password' => $this->password]);

        throw_if(!$credentialsOk, \Exception::class, 'Wrong credentials.');
    }
}
