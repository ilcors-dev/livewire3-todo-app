<?php

namespace App\Livewire\Ui;

use Livewire\Component;
use App\Traits\HtmlAttributes;

class Button extends Component
{
    use HtmlAttributes;

    protected array $variants = [
        'primary' => 'bg-black text-white hover:bg-black/80 focus:ring-black',
        'secondary' => 'bg-gray-200 text-black hover:bg-gray-300 focus:ring-gray-300 ',
        'danger' => 'bg-red-500 text-white hover:bg-red-600 focus:ring-red-600',
        'success' => 'bg-green-500 text-white hover:bg-green-600 focus:ring-green-600',
        'outline' => 'border border-black text-black hover:bg-gray-50 focus:ring-black',
        'link' => 'hover:underline focus:ring-black cursor-pointer',
    ];

    public string $variant = 'primary';

    /**
     * The text to show on the button.
     * 
     * @var string|null
     */
    public ?string $label;

    /**
     * The icon name (component name) to show on the left side of the button.
     *
     * @var string|null
     */
    public ?string $leftIcon;

    /**
     * The icon name (component name) to show on the right side of the button.
     *
     * @var string|null
     */
    public ?string $rightIcon;

    /**
     * The button type.
     *
     * @var string supported types are button|submit|reset
     */
    public string $type = 'button';

    public function render()
    {
        return view('livewire.ui.button');
    }
}
