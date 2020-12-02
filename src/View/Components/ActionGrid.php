<?php

namespace Kanekescom\LaravelViewBladeComponent\View\Components;

use Illuminate\View\Component;

class ActionGrid extends Component
{
    /**
     * The model.
     *
     * @var string
     */
    public $model;

    /**
     * The action resource name.
     *
     * @var string
     */
    public $resource;

    /**
     * The action hide.
     *
     * @var array
     */
    public $hides;

    /**
     * The action use permission.
     *
     * @var boolean
     */
    public $usePermission;

    /**
     * The action use icon.
     *
     * @var boolean
     */
    public $useIcon;

    /**
     * The action use label.
     *
     * @var boolean
     */
    public $useLabel;

    /**
     * The delete message.
     *
     * @var boolean
     */
    public $confirmDelete;

    /**
     * The action label.
     *
     * @var array
     */
    public $actionLabel;

    /**
     * Create a new component instance.
     *
     * @param  object  $model
     * @param  string  $resource
     * @param  string  $hides
     * @param  boolean $usePermission
     * @param  boolean $useDisplay
     * @param  string  $confirmDelete
     * @param  array   $actionLabel
     * @return void
     */
    public function __construct(
        $model,
        $resource = null,
        $hides = [],
        $usePermission = false,
        $useDisplay = [
            'icon',
            'label',
        ],
        $confirmDelete = 'Are you sure you want to delete this item?',
        $actionLabel = [
            'show' => 'Show',
            'edit' => 'Edit',
            'delete' => 'Delete',
        ]
    ) {
        $this->model = $model;
        $this->resource = $model->resource ?? $resource;
        $this->hides = $hides;
        $this->usePermission = $usePermission;
        $this->useIcon = in_array('icon', $useDisplay);
        $this->useLabel = in_array('label', $useDisplay);
        $this->confirmDelete = $confirmDelete;
        $this->actionLabel = $actionLabel;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('view-blade-component::components.action-grid');
    }
}
