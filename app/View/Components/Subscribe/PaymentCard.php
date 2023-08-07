<?php

namespace App\View\Components\Subscribe;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PaymentCard extends Component
{
    public string $src;
    public string $label;
    public string $price;
    public string $link;

    /**
     * @param string $src
     * @param string $label
     * @param string $price
     * @param string $link
     */
    public function __construct(string $src, string $label, string $price, string $link)
    {
        $this->src = $src;
        $this->label = $label;
        $this->price = $price;
        $this->link = $link;
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
        return view('components.subscribe.payment-card');
    }
}
