<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class LikePost extends Component
{
    public Post $post;

    public function refresh()
    {
        $this->post->load('likes:id,post_id,user_id')->refresh();
    }

    public function store()
    {
        $exists = $this->post->likes()->firstWhere('user_id', auth()->id());

        if ($exists) {
            $exists->delete();
            return;
        }

        $this->post->likes()->create([
            'user_id' => auth()->id()
        ]);

        $this->refresh();
    }

    public function render()
    {
        return view('livewire.like-post');
    }
}
