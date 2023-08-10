<?php

namespace App\View\Components\items;

use Closure;
use Date;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DashboardData extends Component
{
//<th>Name</th>
//<th>Position</th>
//<th>Office</th>
//<th>Age</th>
//<th>Start date</th>
//<th>Salary</th>
    public string $name;
    public string $position;
    public string $office;
    public string $age;
    public string $salary;
    public Date $startDate;

    /**
     * @param string $name
     * @param string $position
     * @param string $office
     * @param string $age
     * @param string $salary
     * @param Date $startDate
     */
    public function __construct(string $name, string $position, string $office, string  $age, string $salary, Date $startDate)
    {
        $this->name = $name;
        $this->position = $position;
        $this->office = $office;
        $this->age = $age;
        $this->salary = $salary;
        $this->startDate = $startDate;
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
        return view('components.items.dashboard-data');
    }
}
