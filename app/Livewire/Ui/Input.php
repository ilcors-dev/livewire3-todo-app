<?php

namespace App\Livewire\Ui;

use Livewire\Component;
use App\Traits\HtmlAttributes;
use Livewire\Attributes\Modelable;

class Input extends Component
{
    use HtmlAttributes;

    #[Modelable]
    public string $value = '';

    public string $type = "text";

    public ?string $placeholder = "";

    public function render()
    {
        return view('livewire.ui.input');
    }
}
