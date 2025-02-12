<?php

namespace App\View\Components\mylayouts;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class LayoutDefault extends Component
{
    public string $title;
    public bool $hideBanner;
    /**
     * Create a new component instance.
     */
    public function __construct($title = "Ecommerce", $hideBanner = false)
    {
        $this->title = $title;
        $this->hideBanner = $hideBanner;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.mylayouts.layout-default');
    }
}
