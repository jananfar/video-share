<?php

namespace App\View\Components;

use App\Models\Video;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MostViewedVideos extends Component
{
    public $mostViewedVideos;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->mostViewedVideos = Video::all()->random(6);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.most-viewed-videos');
    }
}
