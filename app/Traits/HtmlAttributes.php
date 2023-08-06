<?php

namespace App\Traits;

use TailwindMerge\TailwindMerge;

trait HtmlAttributes
{
    public string $id;

    public int $tabIndex;

    public string $hidden;

    public string $style;


    public string $class = '';

    /**
     * Merges the
     *
     * @param string $class
     * @return void
     */
    public function mergeClasses(string $class): void
    {
        $this->class = TailwindMerge::factory()->make()->merge($this->class, $class);
    }
}
