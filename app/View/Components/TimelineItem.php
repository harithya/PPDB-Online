<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TimelineItem extends Component
{
    public $date;
    public $title;
    public $description;

    public function __construct($date, $title, $description)
    {
        $this->date = $date;
        $this->title = $title;
        $this->description = $description;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.timeline-item');
    }
}
