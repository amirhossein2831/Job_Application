<?php

namespace App\View\Components;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Field extends Component
{
    public string $fieldName;
    public string $label;
    public string $type;
    public string $containerClass;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($fieldName,$type,$label,$containerClass)
    {
        $this->fieldName = $fieldName;
        $this->type = $type;
        $this->label = $label;
        $this->containerClass = $containerClass;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return Application|Factory|View
     */
    public function render(): View|Factory|Application
    {
        return view('components.field');
    }
}
