<?php

namespace App\View\Components;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InputField extends Component
{
    public string $label;
    public string $name;
    public string $type;
    public string $id;

    /**
     * @param string $label
     * @param string $name
     * @param string $type
     * @param string $id
     */
    public function __construct(string $label, string $name, string $type, string $id)
    {
        $this->label = $label;
        $this->name = $name;
        $this->type = $type;
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return Application|Factory|View
     */
    public function render(): View|Factory|Application
    {
        return view('components.input-field');
    }
}
