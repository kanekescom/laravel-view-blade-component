<?php

namespace Kanekescom\LaravelViewBladeComponent\View\Components;

use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\View\Component;

class FormTextarea extends Component
{
    /**
     * The form name.
     *
     * @var string
     */
    public $name;

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
     * Determine whether the form value provided is derived from a value or default value.
     *
     * @param  string  $value
     * @return string
     */
    public function getValue($value)
    {
        return $value ?? $this->oldValue;
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
        }

        if ($this->isHasError) {
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
     * Create the component instance.
     *
     * @param  string  $name
     * @param  string  $value
     * @param  string  $defaultValue
     * @param  string  $customClass
     * @return void
     */
    public function __construct(
        $name,
        $value = null,
        $defaultValue = null,
        $customClass = null
    ) {
        $this->name = $name;
        $this->convertedName = Str::slug($this->name);
        $this->customClass = $customClass;
        $this->defaultValue = $defaultValue;
        $this->oldValue = old($this->name, $this->defaultValue);
        $this->value = $this->getValue($value);
        $this->isHasError = $this->isHasError($name);
        $this->class = $this->getClassName();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('view-blade-component::components.form-textarea');
    }
}
