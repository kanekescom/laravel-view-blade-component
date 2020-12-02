<?php

namespace Kanekescom\LaravelViewBladeComponent\View\Components;

use Illuminate\Support\Facades\Route;
use Illuminate\View\Component;

class Card extends Component
{
    /**
     * The card type.
     *
     * @var string
     */
    public $type;

    /**
     * The additional card header class name.
     *
     * @var string
     */
    public $headerClass;

    /**
     * The additional card body class name.
     *
     * @var string
     */
    public $bodyClass;

    /**
     * The additional card footer class name.
     *
     * @var string
     */
    public $footerClass;

    /**
     * The card image src.
     *
     * @var string
     */
    public $imgSrc;

    /**
     * The card image location.
     *
     * @var string
     */
    public $imgLoc;

    /**
     * The card header.
     *
     * @var string
     */
    public $header;

    /**
     * The hide header.
     *
     * @var string
     */
    public $hideHeader;

    /**
     * The card title.
     *
     * @var string
     */
    public $title;

    /**
     * The card sub title.
     *
     * @var string
     */
    public $subtitle;

    /**
     * The card text.
     *
     * @var string
     */
    public $text;

    /**
     * The card footer.
     *
     * @var string
     */
    public $footer;

    /**
     * Create a new component instance.
     *
     * @param  string  $type
     * @param  string  $headerClass
     * @param  string  $bodyClass
     * @param  string  $footerClass
     * @param  string  $imgSrc
     * @param  string  $imgLoc
     * @param  string  $header
     * @param  bool    $hideHeader
     * @param  string  $title
     * @param  string  $subtitle
     * @param  string  $text
     * @param  string  $footer
     * @return void
     */
    public function __construct(
        $type = null,
        $headerClass = null,
        $bodyClass = null,
        $footerClass = null,
        $imgSrc = null,
        $imgLoc = 'top',
        $header = null,
        $titleByRouteName = false,
        $hideHeader = false,
        $title = null,
        $subtitle = null,
        $text = null,
        $footer = null
    ) {
        $this->type = $type;
        $this->headerClass = $headerClass;
        $this->bodyClass = $bodyClass;
        $this->footerClass = $footerClass;
        $this->imgSrc = $imgSrc;
        $this->imgLoc = $imgLoc;
        $this->header = $titleByRouteName ? __('routes.' . Route::currentRouteName()) : $header;
        $this->hideHeader = $hideHeader ? null : $this->header;
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->text = $text;
        $this->footer = $footer;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        if ($this->type === 'horizontal') {
            $this->imgLoc = in_array($this->imgLoc, ['left', 'right']) ? $this->imgLoc : 'left';

            return view('view-blade-component::components.card-horizontal');
        }

        return view('view-blade-component::components.card');
    }
}
