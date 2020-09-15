<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class Breadcrumb extends Component
{
    public $links;
    public $currentPage;

    /**
     * Create a new component instance.
     *
     * @param string $currentPage
     * @param  $links
     */
    public function __construct(string $currentPage, array $links = null)
    {
        ($links != null) ? $this->links = $links : $this->links = [];
        $this->currentPage = $currentPage;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|string
     */
    public function render()
    {
        return view('front-end.components.breadcrumb');
    }
}
