<?php

namespace Vrmnt\Ui\View\Components;

use Illuminate\View\Component;

class Button extends Component
{
    public string $type;

    public string $size;

    public bool $outline;

    public string $icon;

    public string $link;

    public string $text;

    public function __construct($icon = '', $size = '', $outline = false, $type = 'primary', $link = '', $text = '')
    {
        $this->icon    = $icon;
        $this->size    = $size;
        $this->outline = $outline;
        $this->type    = $type;
        $this->link    = $link;
        $this->text    = $text;
    }

    public function render()
    {
        return view('ui::components.button');
    }
}
