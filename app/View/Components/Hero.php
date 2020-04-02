<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Hero extends Component
{
    public $title;

    public $subtitle;

    public $reverse;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $title, string $subtitle = null, bool  $reverse = false)
    {
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->reverse = $reverse;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.hero');
    }
}
