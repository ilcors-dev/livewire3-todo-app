<?php

namespace App\Livewire\Ui;

use App\Traits\HtmlAttributes;
use Livewire\Component;

class Input extends Component
{
    use HtmlAttributes;

    public string $id;

    public ?string $label;

    public string $value;

    public ?string $placeholder = "miao";

    public function mount()
    {
        $class = "h-10 w-full border border-gray-300 rounded-md focus:ring-black focus:outline-none focus:ring-2 focus:ring-offset-2 px-3 py-2";

        $this->mergeClasses($class);
    }

    public function render()
    {
        return view('livewire.ui.input');
    }
}
