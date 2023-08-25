<?php

namespace Vrmnt\Ui\View\Components;

use Illuminate\View\Component;

class Navbar extends Component
{
    public $menu;

    public $languages;

    public function __construct($menu = [], $languages = [])
    {
        $this->menu      = $menu;
        $this->languages = $languages;
    }

    public function render()
    {
        return view('ui::components.navbar');
    }
}
