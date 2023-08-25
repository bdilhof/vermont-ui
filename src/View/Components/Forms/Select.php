<?php

namespace Vrmnt\Ui\View\Components\Forms;

use Illuminate\View\Component;

class Select extends Component
{
    public $label;

    public $name;

    public $id;

    public $options;

    public $value;

    public $error;

    public function __construct($label, $name, $id, $options, $value, $error = '')
    {
        $this->label = $label;
        $this->name = $name;
        $this->id = $id;
        $this->options = $options;
        $this->value = $value;
        $this->error = $error;
    }

    public function render()
    {
        return view('ui::components.forms.select');
    }
}
