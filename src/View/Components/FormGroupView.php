<?php

namespace Kanekescom\LaravelViewBladeComponent\View\Components;

use Illuminate\View\Component;

class FormGroupView extends Component
{
    /**
     * The form name.
     *
     * @var string
     */
    public $name;

    /**
     * The form label.
     *
     * @var string
     */
    public $label;

    /**
     * The form label width.
     *
     * @var string
     */
    public $labelWidth;

    /**
     * The form width.
     *
     * @var string
     */
    public $formWidth;

    /**
     * Create a new component instance.
     *
     * @param  string  $name
     * @param  string  $label
     * @param  string  $labelWidth
     * @param  string  $formWidth
     * @return void
     */
    public function __construct(
        $name = null,
        $label = null,
        $labelWidth = 'col-md-4',
        $formWidth = 'col-md-6'
    ) {
        $this->name = $name;
        $this->label = $label;
        $this->labelWidth = $labelWidth;
        $this->formWidth = $formWidth;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('view-blade-component::components.form-group-view');
    }
}
