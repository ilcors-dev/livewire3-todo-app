<?php

namespace App\Traits;

use TailwindMerge\TailwindMerge;

trait Classeable
{
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
