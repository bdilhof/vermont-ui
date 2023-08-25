<?php

namespace Vrmnt\Ui\View\Components\Forms;

use Illuminate\View\Component;

class Input extends Component
{
    public $label;

    public $type;

    public $name;

    public $id;

    public $value;

    public $error;

    public $placeholder;

    public bool $required;

    public function __construct(
        $label = '',
        $type = 'text',
        $name = '',
        $id = '',
        $value = '',
        $error = '',
        $placeholder = '',
        $required = false
    ) {
        $this->label = $label;
        $this->type = $type;
        $this->name = $name;
        $this->id = $id;
        $this->value = $value;
        $this->error = $error;
        $this->placeholder = $placeholder;
        $this->required = $required;
    }

    public function render()
    {
        return view('ui::components.forms.input');
    }
}
