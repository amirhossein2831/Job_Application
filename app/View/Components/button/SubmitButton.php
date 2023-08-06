<?php

namespace App\View\Components\button;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SubmitButton extends Component
{
    public string $containerClass;

    public string $label;

    /**
     * @param string $containerClass
     * @param string $label
     */
    public function __construct(string $containerClass, string $label)
    {
        $this->containerClass = $containerClass;
        $this->label = $label;
    }
    /**
     * Create a new component instance.
     *
     * @return void
     */


    /**
     * Get the view / contents that represent the component.
     *
     * @return Application|Factory|View
     */
    public function render(): View|Factory|Application
    {
        return view('components.button.submit-button');
    }
}
