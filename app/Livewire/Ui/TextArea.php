<?php

namespace App\Livewire\Ui;

use Livewire\Component;
use App\Traits\HtmlAttributes;
use Livewire\Attributes\Modelable;

class TextArea extends Component
{
    use HtmlAttributes;

    public int $rows = 3;

    public int $cols = 50;

    public string $placeholder = '';

    #[Modelable]
    public string $value = '';

    public function render()
    {
        return view('livewire.ui.text-area');
    }
}
