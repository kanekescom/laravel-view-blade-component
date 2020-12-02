<?php

namespace Kanekescom\LaravelViewBladeComponent\View\Components;

use Illuminate\View\Component;

class FormButton extends Component
{
    /**
     * The button label.
     *
     * @var string
     */
    public $label;

    /**
     * The button color.
     *
     * @var string
     */
    public $color;

    /**
     * The button type.
     *
     * @var string
     */
    public $type;

    /**
     * The button class name.
     *
     * @var string
     */
    public $class = 'btn';

    /**
     * Create a new component instance.
     *
     * @param  string  $label
     * @param  string  $color
     * @param  string  $type
     * @return void
     */
    public function __construct(
        $label = null,
        $color = 'light',
        $type = 'submit',
        $class = null
    ) {
        $this->label = $label;
        $this->color = $color;
        $this->type = $type;
        $this->class .= ' btn-' . $this->color;

        if ($class) {
            $this->class = $class;
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('view-blade-component::components.form-button');
    }
}
