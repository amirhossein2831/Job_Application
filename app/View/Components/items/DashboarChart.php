<?php

namespace App\View\Components\items;

use Illuminate\View\Component;

class DashboarChart extends Component
{
    public string $title;
    public string $class;
    public string $id;
    /**
     * @param string $title
     * @param string $class
     */
    public function __construct(string $title, string $class,string $id)
    {
        $this->title = $title;
        $this->class = $class;
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.items.dashboar-chart');
    }
}
