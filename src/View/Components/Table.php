<?php

namespace Vrmnt\Ui\View\Components;

use Illuminate\View\Component;

class Table extends Component
{
    public string $caption;

    public function __construct($caption = '')
    {
        $this->caption = $caption;
    }

    public function render()
    {
        return view('ui::components.table');
    }
}
