<?php

namespace Kanekescom\LaravelViewBladeComponent\View\Components;

use Illuminate\View\Component;

class FormInvalid extends Component
{

    /**
     * The form name.
     *
     * @var string
     */
    public $name;

    /**
     * Create a new component instance.
     *
     * @param  string  $name
     * @return void
     */
    public function __construct(
        $name
    ) {
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('view-blade-component::components.form-invalid');
    }
}
