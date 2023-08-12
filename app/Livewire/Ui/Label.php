<?php

namespace App\Livewire\Ui;

use App\Traits\HtmlAttributes;
use Livewire\Component;

class Label extends Component
{
    use HtmlAttributes;

    public string $for;

    public string $text;

    public function render()
    {
        return view('livewire.ui.label');
    }
}
