<?php

namespace App\Livewire;

use Livewire\Component;
use App\Livewire\Forms\SignInForm;

class SignIn extends Component
{
    public SignInForm $form;

    public function submit()
    {
        try {
            $this->form->store();

            return redirect()->route('home');
        } catch (\Throwable $th) {
            $this->addError('credentials', $th->getMessage());
        }

        $this->addError('credentials', 'Unknown error.');
    }

    public function render()
    {
        return view('livewire.sign-in');
    }
}
