<?php

namespace Kanekescom\LaravelViewBladeComponent\View\Components;

use Illuminate\View\Component;

class Modal extends Component
{
    /**
     * The modal name.
     *
     * @var string
     */
    public $name;

    /**
     * The modal title.
     *
     * @var string
     */
    public $title;

    /**
     * The modal static.
     *
     * @var boolean
     */
    public $static;

    /**
     * The modal size.
     *
     * @var boolean
     */
    public $size;

    /**
     * The modal close button.
     *
     * @var bool
     */
    public $hideCloseButton;

    /**
     * The modal footer.
     *
     * @var string
     */
    public $footer;

    /**
     * Create a new component instance.
     *
     * @param  string  $name
     * @param  string  $title
     * @param  string  $static
     * @param  string  $size
     * @param  string  $hideCloseButton
     * @param  string  $footer
     * @return void
     */
    public function __construct(
        $name = null,
        $title = null,
        $static = false,
        $size = null,
        $hideCloseButton = false,
        $footer = null
    ) {
        $this->name = $name;
        $this->title = $title;
        $this->static = $static ? 'static' : null;
        $this->size = $size ? 'modal-' . $size : '';
        $this->hideCloseButton = $hideCloseButton;
        $this->footer = $footer;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('view-blade-component::components.modal');
    }
}
