<?php

namespace Kanekescom\LaravelViewBladeComponent\View\Components;

use Illuminate\View\Component;

class Form extends Component
{
    /**
     * The form method.
     *
     * @var string
     */
    public $method;

    /**
     * The form action.
     *
     * @var string
     */
    public $action;

    /**
     * The form animation.
     *
     * @var string
     */
    public $hideAnimation;

    /**
     * The form processing label.
     *
     * @var string
     */
    public $processingLabel;

    /**
     * Create a new component instance.
     *
     * @param  string  $method
     * @param  string  $action
     * @param  string  $route
     * @param  mixed   $params
     * @return void
     */
    public function __construct(
        $method = 'POST',
        $action = null,
        $route = null,
        $hideAnimation = false,
        $processingLabel = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Processing',
        $params = []
    ) {
        $this->method = $method;

        if ($action) {
            $this->action = url($action, $params);
        } elseif ($route) {
            $this->action = route($route, $params);
        }

        $this->hideAnimation = $hideAnimation;
        $this->processingLabel = $processingLabel;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('view-blade-component::components.form');
    }
}
