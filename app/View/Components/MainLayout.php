<?php

namespace App\View\Components;

use Illuminate\View\Component;

class MainLayout extends Component
{
    public $title;
    public $badge;

    public function __construct($title)
    {
        $this->title = $title;
        $this->badge = explode("/", request()->path());
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.main-layout');
    }
}
