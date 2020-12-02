<?php

namespace Kanekescom\LaravelViewBladeComponent\View\Components;

use Illuminate\View\Component;

class Image extends Component
{
    /**
     * The image src.
     *
     * @var string
     */
    public $src;

    /**
     * Create a new component instance.
     *
     * @param  string  $src
     * @param  string  $url
     * @param  mixed   $params
     * @return void
     */
    public function __construct(
        $src = null,
        $url = null,
        $params = []
    ) {
        $this->src = $src ?? url($url, $params);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('view-blade-component::components.image');
    }
}
