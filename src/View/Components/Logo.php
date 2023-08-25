<?php

namespace Vrmnt\Ui\View\Components;

use Illuminate\View\Component;

class Logo extends Component
{
    public function __construct()
    {
        //
    }

    public function render()
    {
        return view('ui::components.logo');
    }
}
