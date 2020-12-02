<?php

namespace Kanekescom\LaravelViewBladeComponent\View\Components;

use Illuminate\View\Component;

class FormGroup extends Component
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
     * The form has row.
     *
     * @var boolean
     */
    public $noRow;

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
     * The hide invalid message.
     *
     * @var boolean
     */
    public $hideInvalid;

    /**
     * Create a new component instance.
     *
     * @param  string  $name
     * @param  string  $label
     * @param  boolean $noRow
     * @param  string  $labelWidth
     * @param  string  $formWidth
     * @param  boolean $hideInvalid
     * @return void
     */
    public function __construct(
        $name,
        $label = null,
        $noRow = false,
        $labelWidth = 'col-md-4',
        $formWidth = 'col-md-6',
        $hideInvalid = false
    ) {
        $this->name = $name;
        $this->label = $label;
        $this->noRow = $noRow;
        $this->labelWidth = $labelWidth;
        $this->formWidth = $formWidth;
        $this->hideInvalid = $hideInvalid;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        if ($this->noRow) {
            return view('view-blade-component::components.form-group-no-row');
        }

        return view('view-blade-component::components.form-group');
    }
}
