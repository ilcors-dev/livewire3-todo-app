<?php

namespace App\Livewire\Ui;

use App\Traits\HtmlAttributes;
use Livewire\Component;

class Link extends Component
{
    use HtmlAttributes;

    public string $href = '';

    public string $text = '';

    public bool $spa = false;

    public function mount()
    {
        throw_if(strlen($this->href) === 0, new \Exception('The href attribute is required'));
    }

    public function render()
    {
        return view('livewire.ui.link');
    }
}
