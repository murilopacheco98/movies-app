<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Pagination extends Component
{
    public $link;
    public $page;
    public $totalPages;
    public function __construct($page, $totalPages, $link)
    {
        $this->page = $page;
        $this->totalPages = $totalPages;
        $this->link = $link;
    }

    public function render(): View|Closure|string
    {
        return view('components.pagination');
    }
}
