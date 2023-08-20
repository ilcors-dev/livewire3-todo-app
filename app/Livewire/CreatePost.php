<?php

namespace App\Livewire;

use Livewire\Component;
use App\Livewire\Forms\CreatePostForm;

class CreatePost extends Component
{
    public CreatePostForm $form;

    public function submit()
    {
        try {
            $this->form->store();

            $this->dispatch('post:created');
        } catch (\Exception $e) {
            $this->addError('error', $e->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.create-post');
    }
}
