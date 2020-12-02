<?php

namespace Kanekescom\LaravelViewBladeComponent\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{
    /**
     * The alert type.
     *
     * @var string
     */
    public $type;

    /**
     * The alert class name.
     *
     * @var string
     */
    public $class;

    /**
     * The alert message.
     *
     * @var string
     */
    public $message;

    /**
     * The alert title.
     *
     * @var string
     */
    public $title;

    /**
     * The validation errors.
     *
     * @var array
     */
    public $validationErrors;

    /**
     * The alert close button.
     *
     * @var bool
     */
    public $hideCloseButton;

    /**
     * Create the component instance.
     *
     * @param  string  $type
     * @param  string  $title
     * @param  string  $message
     * @param  array   $validationErrors
     * @param  bool    $hideCloseButton
     * @return void
     */
    public function __construct(
        $type,
        $message = null,
        $title = null,
        $validationErrors = [],
        $hideCloseButton = false
    ) {
        $this->type = $type;
        $this->class = 'alert alert-' . $this->type;
        $this->message = $message;
        $this->title = $title;
        $this->validationErrors = $validationErrors;
        $this->hideCloseButton = $hideCloseButton;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('view-blade-component::components.alert');
    }
}
