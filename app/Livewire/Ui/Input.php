<?php

namespace App\Livewire\Ui;

use App\Traits\HtmlAttributes;
use Livewire\Component;

class Input extends Component
{
    use HtmlAttributes;

    public ?string $label;

    public string $value;

    public ?string $placeholder = "";

    public function render()
    {
        return view('livewire.ui.input');
    }
}
