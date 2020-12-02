<?php

namespace Kanekescom\LaravelViewBladeComponent\View\Components;

use Illuminate\View\Component;

class Navbar extends Component
{
    /**
     * The navbar hide container.
     *
     * @var bool
     */
    public $hideContainer;

    /**
     * The navbar brand name.
     *
     * @var string
     */
    public $brandName;

    /**
     * The navbar brand link.
     *
     * @var string
     */
    public $brandLink;

    /**
     * The navbar toggler.
     *
     * @var bool
     */
    public $hideToggler;

    /**
     * The navbar class name.
     *
     * @var string
     */
    public $class = 'navbar navbar-expand-md shadow-sm';

    /**
     * The card clean body.
     *
     * @var bool
     */
    public $cleanBody;

    /**
     * Create a new component instance.
     *
     * @param  bool    $hideContainer
     * @param  string  $brandName
     * @param  string  $brandLink
     * @param  string  $brandRoute
     * @param  bool    $hideToggler
     * @param  bool    $cleanBody
     * @param  string  $colorSchemes
     * @return void
     */
    public function __construct(
        $hideContainer = false,
        $brandName = null,
        $brandLink = null,
        $brandRoute = '/',
        $hideToggler = false,
        $cleanBody = false,
        $colorSchemes = null
    ) {
        $this->hideContainer = $hideContainer;
        $this->brandName = !is_null($brandName) ? $brandName : config('app.name');
        $this->brandLink = $brandLink ? $brandLink : route($brandRoute);
        $this->hideToggler = $hideToggler;
        $this->cleanBody = $cleanBody;
        $this->class .= $colorSchemes ?? ' navbar-light bg-white';
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('view-blade-component::components.navbar');
    }
}
