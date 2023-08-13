<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Livewire\Forms\SignUpForm;

class SignUp extends Component
{
    public SignUpForm $form;

    public function submit()
    {
        $user = $this->form->store();

        auth()->login($user);

        return redirect()->route('home');
    }

    #[Title('Sign Up')]
    public function render()
    {
        return view('livewire.sign-up');
    }
}
