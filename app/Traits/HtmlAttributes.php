<?php

namespace App\Traits;

use TailwindMerge\TailwindMerge;

trait HtmlAttributes
{
    public string $id = '';

    public int $tabIndex = 1;

    public string $hidden = '';

    public string $style = '';

    public string $class = '';

    /**
     * Merges the passed class from the user with the default class.
     *
     * @param string $class the classes to merge
     * @return string
     */
    public function mergeClasses(string ...$class): string
    {
        return TailwindMerge::factory()->make()->merge($this->class, $class);
    }

    /**
     * Returns the HTML attributes for the component.
     *
     * @return string
     */
    public function attributes(): string
    {
        $attributes = [
            'id' => $this->id,
            'tabindex' => $this->tabIndex,
            'hidden' => $this->hidden,
            'style' => $this->style,
        ];

        return collect($attributes)
            ->filter(fn($value) => $value !== '')
            ->map(fn($value, $key) => "{$key}=\"{$value}\"")
            ->join(' ');
    }
}
