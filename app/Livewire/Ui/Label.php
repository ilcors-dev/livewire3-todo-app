<?php

namespace App\Livewire\Ui;

use App\Traits\HtmlAttributes;
use Livewire\Component;

class Label extends Component
{
    use HtmlAttributes;

    public string $for;

    public string $text;

    public function mount(): void
    {
        $this->mergeClasses("text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70");
    }

    public function render()
    {
        return view('livewire.ui.label');
    }
}
