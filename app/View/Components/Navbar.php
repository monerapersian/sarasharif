<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Navbar extends Component
{
    public array $menu;
    public string $currentUrl;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->menu = [
            [
                'title' => 'صفحه اصلی',
                'url' => '/',
                'icon' => 'house'
            ],
            [
                'title' => 'مقالات',
                'url' => '/blogs',
                'icon' => 'book-open'
            ],
            [
                'title' => 'درباره سارا شریف',
                'url' => '/about',
                'icon' => 'user-round'
            ],
            [
                'title' => 'تماس با ما',
                'url' => '/contact',
                'icon' => 'phone'
            ],
        ];

        $this->currentUrl = request()->path();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.navbar');
    }
}
