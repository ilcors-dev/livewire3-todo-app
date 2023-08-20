<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\Attributes\On;

class Home extends Component
{
    public $posts;

    #[On('post:created')]
    public function getPosts()
    {
        $this->posts = Post::query()->latest()->with('user:name,handle,id')->get();
    }

    public function render()
    {
        $this->getPosts();

        return view('livewire.home');
    }
}
