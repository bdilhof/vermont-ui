<?php

namespace Vrmnt\Ui\View\Components;

use Illuminate\View\Component;

class TableEmpty extends Component
{
    public int $colspan;

    public function __construct($colspan = 1)
    {
        $this->colspan = $colspan;
    }

    public function render()
    {
        return view('ui::components.table-empty');
    }
}
