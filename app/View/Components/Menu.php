<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Menu extends Component
{
    public $href;
    public $icon;
    public $text;
    public $active;
    
    public function __construct($href,$icon,$text,$active)
    {
        $this->href = $href;
        $this->icon = $icon;
        $this->text = $text;
        $this->active = $active;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.menu');
    }
}
