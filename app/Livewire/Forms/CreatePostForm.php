<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use App\Models\Post;
use Livewire\Attributes\Rule;

class CreatePostForm extends Form
{
    #[Rule(['required', 'string', 'min:3', 'max:500'])]
    public string $content = '';

    public function store()
    {
        $this->validate();

        Post::create([
            'content' => $this->content,
            'user_id' => auth()->id()
        ]);

        $this->reset();
    }
}
