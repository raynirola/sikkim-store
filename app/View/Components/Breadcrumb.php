<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class Breadcrumb extends Component
{
    public array $links;
    public string $currentPage;

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
        return view('components.breadcrumb');
    }
}
