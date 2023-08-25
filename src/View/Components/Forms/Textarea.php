<?php

namespace Vrmnt\Ui\View\Components\Forms;

use Illuminate\View\Component;

class Textarea extends Component
{
    public $label;

    public $name;

    public $id;

    public $value;

    public $error;

    public $required;

    public function __construct($label, $name, $id, $value, $error = '', $required = false)
    {
        $this->label    = $label;
        $this->name     = $name;
        $this->id       = $id;
        $this->value    = $value;
        $this->error    = $error;
        $this->required = $required;
    }

    public function render()
    {
        return view('ui::components.forms.textarea');
    }
}
