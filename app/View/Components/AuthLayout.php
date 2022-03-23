<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AuthLayout extends Component
{
    public $title;
    public $subtitle;
    public $withRegister;

    public function __construct($title, $subtitle, $withRegister = false)
    {
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->withRegister = $withRegister;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.auth-layout');
    }
}
