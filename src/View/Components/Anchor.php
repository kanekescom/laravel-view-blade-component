<?php

namespace Kanekescom\LaravelViewBladeComponent\View\Components;

use Illuminate\View\Component;

class Anchor extends Component
{
    /**
     * The anchor label.
     *
     * @var string
     */
    public $label;

    /**
     * The anchor href.
     *
     * @var string
     */
    public $href;

    /**
     * The anchor class.
     *
     * @var string
     */
    public $class;

    /**
     * Create a new component instance.
     *
     * @param  string  $label
     * @param  string  $href
     * @param  string  $url
     * @param  string  $route
     * @param  mixed   $params
     * @param  bool    $back
     * @param  bool    $activeByRoute
     * @param  string  $activeClass
     * @return void
     */
    public function __construct(
        $label = null,
        $href = null,
        $url = null,
        $route = null,
        $params = [],
        $back = false,
        $refresh = false,
        $activeByRoute = false,
        $activeClass = 'active'
    ) {
        $this->label = $label;

        if ($back) {
            $this->href = url()->previous();
        } elseif ($url) {
            $this->href = url($url, $params);
        } elseif ($route) {
            $this->href = route($route, $params);
        } elseif ($refresh) {
            $this->href = url()->current();
        } else {
            $this->href = $href;
        }

        $this->class = $activeByRoute ? active_route($route, $activeClass) : '';
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('view-blade-component::components.anchor');
    }
}
