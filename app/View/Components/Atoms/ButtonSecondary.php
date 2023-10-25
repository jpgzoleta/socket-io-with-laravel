<?php

namespace App\View\Components\Atoms;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ButtonSecondary extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $type = "button"
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.atoms.button-secondary');
    }
}
