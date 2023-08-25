<?php

namespace Vrmnt\Ui\View\Components;

use Illuminate\View\Component;

class Filter extends Component
{
    public string $url;

    public bool $open;

    public function __construct($url, $open = true)
    {
        $this->url = $url;
        $this->open = $open;
    }

    public function render()
    {
        return view('ui::components.filter');
    }
}
