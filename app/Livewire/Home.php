<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\Attributes\On;

class Home extends Component
{
    public $posts;

    #[On('post:created')]
    public function refreshPosts()
    {
        $this->posts = Post::query()->latest()->get();
    }

    public function render()
    {
        $this->posts = Post::query()->latest()->get();

        return view('livewire.home');
    }
}
