<?php

namespace Kanekescom\LaravelViewBladeComponent\View\Components;

use Illuminate\View\Component;

class FormSelectOption extends Component
{
    /**
     * The form name.
     *
     * @var string
     */
    public $name;

    /**
     * The form value option.
     *
     * @var string
     */
    public $value;

    /**
     * The form label option.
     *
     * @var string
     */
    public $label;

    /**
     * The form default selected option.
     *
     * @var string
     */
    public $defaultSelected;

    /**
     * The form selected attribute.
     *
     * @var bool
     */
    public $selectedAtt;

    /**
     * Determine whether the form selected provided is derived from a default selected or old selected.
     *
     * @param  string  $defaultSelected
     * @return string
     */
    public function getSelected($defaultSelected)
    {
        return old($this->name, $defaultSelected);
    }

    /**
     * Determine if the given option is the current selected option.
     *
     * @return bool
     */
    public function isSelected()
    {
        foreach ((array) $this->defaultSelected as $select) {
            if ((string) $select !== '' && $select === $this->value) {
                return true;
            }
        }

        return false;
    }

    /**
     * Determine whether the form name is has selected or not.
     *
     * @return bool
     */
    public function selectedAtt()
    {
        return $this->isSelected() ? 'selected' : '';
    }

    /**
     * Create a new component instance.
     *
     * @param  string  $name
     * @param  string  $value
     * @param  string  $label
     * @param  string  $defaultSelected
     * @return void
     */
    public function __construct(
        $name,
        $value = null,
        $label = null,
        $defaultSelected = null
    ) {
        $this->name = $name;
        $this->value = $value;
        $this->label = $label;
        $this->defaultSelected = $this->getSelected($defaultSelected);
        $this->selectedAtt = $this->selectedAtt();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('view-blade-component::components.form-select-option');
    }
}
