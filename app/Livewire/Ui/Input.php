<?php

namespace App\Livewire\Ui;

use Livewire\Component;
use App\Traits\HtmlAttributes;

class Input extends Component
{
    use HtmlAttributes;

    public string $type = "text";

    public ?string $placeholder = "";

    public function render()
    {
        return view('livewire.ui.input');
    }
}
