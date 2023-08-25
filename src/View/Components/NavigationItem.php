<?php

namespace Vrmnt\Ui\View\Components;

use Illuminate\View\Component;

class NavigationItem extends Component
{
    public $link;

    public $text;

    public bool $active;

    public function __construct($link, $text, $active)
    {
        $this->link = $link;
        $this->text = $text;
        $this->active = $active;
    }

    public function render()
    {
        return view('ui::components.navigation-item');
    }
}
