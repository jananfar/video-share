<?php

namespace App\View\Components;

use App\Models\Video;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MostLatestVideos extends Component
{
    public $mostLatestVideos;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->mostLatestVideos = Video::latest()->take(6)->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.most-latest-videos');
    }
}
