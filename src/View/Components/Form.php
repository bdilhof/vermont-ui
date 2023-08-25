<?php

namespace Vrmnt\Ui\View\Components;

use Illuminate\View\Component;

class Form extends Component
{
    public $action;

    public $method;

    public function __construct($action, $method = 'POST')
    {
        $this->action = $action;
        $this->method = $method;
    }

    public function render()
    {
        return view('ui::components.form');
    }
}
