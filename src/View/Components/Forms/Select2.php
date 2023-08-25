<?php

namespace Vrmnt\Ui\View\Components\Forms;

use Illuminate\View\Component;

class Select2 extends Component
{
    public $label;

    public $name;

    public $id;

    public $options;

    public $value;

    public bool $required;

    public function __construct($name, $id, $options, $label = '', $value = '', $required = false)
    {
        $this->label = $label;
        $this->name = $name;
        $this->id = $id;
        $this->options = $options;
        $this->value = $value;
        $this->required = $required;
    }

    public function render()
    {
        return view('ui::components.forms.select2');
    }
}
