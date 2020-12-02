<?php

namespace Kanekescom\LaravelViewBladeComponent\View\Components;

use Illuminate\View\Component;

class Alerts extends Component
{
    /**
     * The alert validation message.
     *
     * @var string
     */
    public $validationMessage;

    /**
     * The alert type will be shown.
     *
     * @var string
     */
    public $showType;

    /**
     * The alert close button.
     *
     * @var bool
     */
    public $hideCloseButton;

    /**
     * To hide validation errors at all.
     *
     * @var bool
     */
    public $hideValidation;

    /**
     * To hide validation error messages.
     *
     * @var bool
     */
    public $showErrorMessages;

    /**
     * Create a new component instance.
     *
     * @param  bool  $hideCloseButton
     * @param  bool  $hideValidation
     * @param  bool  $showErrorMessages
     * @return void
     */
    public function __construct(
        $validationMessage = 'Please check these error!',
        $showType = [
            'primary',
            'secondary',
            'success',
            'danger',
            'warning',
            'info',
            'light',
            'dark',
            'status',
            'verified',
            'failed',
            'message',
            'validation',
        ],
        $hideCloseButton = false,
        $hideValidation = false,
        $showErrorMessages = false
    ) {
        $this->validationMessage = $validationMessage;
        $this->showType = $showType;
        $this->hideCloseButton = $hideCloseButton;
        $this->hideValidation = $hideValidation;
        $this->showErrorMessages = $showErrorMessages;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('view-blade-component::components.alerts');
    }
}
