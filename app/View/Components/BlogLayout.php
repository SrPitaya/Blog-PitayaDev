<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BlogLayout extends Component
{
    /**
     * Create a new component instance.
     */
public function __construct(
        public string $metaTitle = 'Default Title',
        public string $metaDescription = 'Default Description',
    ) {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.layouts.blog-layout');
    }
}
