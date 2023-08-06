<?php

namespace App\View\Components\items;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DashboardItem extends Component
{
    public string $label;

    public string $class;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($label,$class)
    {
        $this->label = $label;
        $this->class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return Application|Factory|View
     */
    public function render(): View|Factory|Application
    {
        return view('components.items.dashboard-item');
    }
}
