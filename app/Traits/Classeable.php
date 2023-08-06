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
        $this->class = TailwindMerge::instance()->merge(
            $this->class,
            "h-10 w-full border border-gray-300 rounded-md focus:ring-black focus:outline-none focus:ring-2 focus:ring-offset-2 px-3 py-2"
        );
    }
}
