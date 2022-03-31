<?php

namespace App\View\Components;

use Illuminate\View\Component;

class DashboardInfo extends Component
{
    public $title;
    public $value;
    public $type;
    public $icon;

    public function __construct($title, $value, $type, $icon)
    {
        $this->title = $title;
        $this->value = $value;
        $this->type = $type;
        $this->icon = $icon;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.dashboard-info');
    }
}
