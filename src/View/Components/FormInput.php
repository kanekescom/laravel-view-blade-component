<?php

namespace Kanekescom\LaravelViewBladeComponent\View\Components;

use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\View\Component;

class FormInput extends Component
{
    /**
     * The form name.
     *
     * @var string
     */
    public $name;

    /**
     * The form type.
     *
     * @var string
     */
    public $type;

    /**
     * The form value.
     *
     * @var string
     */
    public $value;

    /**
     * The form old value.
     *
     * @var string
     */
    public $oldValue;

    /**
     * The form default defaultValue.
     *
     * @var string
     */
    public $defaultValue;

    /**
     * The form class name.
     *
     * @var string
     */
    public $class = 'form-control';

    /**
     * The form custom class name.
     *
     * @var string
     */
    public $customClass;

    /**
     * The form error class name.
     *
     * @var string
     */
    public $errorClass = 'is-invalid';

    /**
     * The form has error.
     *
     * @var boolean
     */
    public $isHasError;

    /**
     * The converted form name.
     *
     * @var string
     */
    public $convertedName;

    /**
     * The form checked attribute.
     *
     * @var string
     */
    public $checkedAtt;

    /**
     * Determine whether the form value provided is derived from a value or default value.
     *
     * @param  string  $value
     * @return string
     */
    public function getValue($value)
    {
        if ($this->selectable()) {
            $this->oldValue = old($this->name, $this->defaultValue);

            return $this->value = $value ?? $this->oldValue;
        }

        return $this->value = old($this->name, $this->defaultValue ? $this->defaultValue : $value);
    }

    /**
     * Determine whether the form class name.
     *
     * @return string
     */
    public function getClassName()
    {
        if (!is_null($this->customClass)) {
            $this->class = $this->customClass;
        } elseif ($this->type === 'hidden') {
            $this->class = null;
        } elseif (in_array($this->type, ['checkbox', 'radio'])) {
            $this->class = 'form-check-input';
        } elseif ($this->type === 'file') {
            $this->class = 'form-control-file';
        } elseif ($this->type === 'range') {
            $this->class = 'form-control-range';
        }

        if ($this->isHasError && ($this->type !== 'hidden')) {
            $this->class .= ' ' . $this->errorClass;
        }

        return $this->class;
    }

    /**
     * Determine whether the form name is has error or not.
     *
     * @param  string  $name
     * @return bool
     */
    public function isHasError($name)
    {
        return Arr::has(optional(session('errors'))->messages(), $name);
    }

    /**
     * Determine whether the form is selectable.
     *
     * @return bool
     */
    public function selectable()
    {
        return in_array($this->type, ['checkbox', 'radio']);
    }

    /**
     * Determine if the given option is the current selected option.
     *
     * @return bool
     */
    public function isChecked()
    {
        return $this->selectable()
            && $this->value
            && ($this->oldValue === $this->value);
    }

    /**
     * Determine whether the form name is has checked or not.
     *
     * @return bool
     */
    public function checkedAtt()
    {
        return $this->isChecked() ? 'checked' : '';
    }

    /**
     * Create the component instance.
     *
     * @param  string  $name
     * @param  string  $type
     * @param  string  $value
     * @param  string  $defaultValue
     * @param  string  $customClass
     * @return void
     */
    public function __construct(
        $name,
        $type = 'text',
        $value = null,
        $defaultValue = null,
        $customClass = null
    ) {
        $this->name = $name;
        $this->convertedName = Str::slug($this->name);
        $this->type = $type;
        $this->customClass = $customClass;
        $this->defaultValue = $defaultValue;
        $this->value = $this->getValue($value);
        $this->isHasError = $this->isHasError($name);
        $this->class = $this->getClassName();
        $this->checkedAtt = $this->checkedAtt();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('view-blade-component::components.form-input');
    }
}
