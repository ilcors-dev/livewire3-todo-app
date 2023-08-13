<?php

namespace App\Livewire\Ui;

use Livewire\Component;
use App\Traits\HtmlAttributes;
use Livewire\Attributes\Modelable;

class Toggle extends Component
{
    use HtmlAttributes;

    public $size = 'md';

    public $sizeClasses = [
        'sm' => ['wrapper' => 'h-4 w-8', 'circle' => 'h-2.5 w-2.5 checked:translate-x-3.5'],
        'md' => ['wrapper' => 'h-5 w-9', 'circle' => 'h-3.5 w-3.5 checked:translate-x-3.5'],
        'lg' => ['wrapper' => 'h-6 w-11', 'circle' => 'h-4 w-4 checked:translate-x-5 left-0.5'],
        'xl' => ['wrapper' => 'h-7 w-12', 'circle' => 'h-5 w-5 checked:translate-x-5 left-0.5']
    ];

    #[Modelable]
    public $checked = false;

    public function render()
    {
        return view('livewire.ui.toggle');
    }
}
