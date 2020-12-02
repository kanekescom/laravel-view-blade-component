<?php

namespace Kanekescom\LaravelViewBladeComponent;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Kanekescom\LaravelViewBladeComponent\View\Components\ActionGrid;
use Kanekescom\LaravelViewBladeComponent\View\Components\Alert;
use Kanekescom\LaravelViewBladeComponent\View\Components\Alerts;
use Kanekescom\LaravelViewBladeComponent\View\Components\AlertValidation;
use Kanekescom\LaravelViewBladeComponent\View\Components\Anchor;
use Kanekescom\LaravelViewBladeComponent\View\Components\Card;
use Kanekescom\LaravelViewBladeComponent\View\Components\Form;
use Kanekescom\LaravelViewBladeComponent\View\Components\FormButton;
use Kanekescom\LaravelViewBladeComponent\View\Components\FormGroup;
use Kanekescom\LaravelViewBladeComponent\View\Components\FormGroupView;
use Kanekescom\LaravelViewBladeComponent\View\Components\FormInput;
use Kanekescom\LaravelViewBladeComponent\View\Components\FormSelect;
use Kanekescom\LaravelViewBladeComponent\View\Components\FormSelectOption;
use Kanekescom\LaravelViewBladeComponent\View\Components\FormTextarea;
use Kanekescom\LaravelViewBladeComponent\View\Components\Image;
use Kanekescom\LaravelViewBladeComponent\View\Components\FormInvalid;
use Kanekescom\LaravelViewBladeComponent\View\Components\Modal;
use Kanekescom\LaravelViewBladeComponent\View\Components\Navbar;

class ViewBladeComponentServiceProvider extends ServiceProvider
{
    /**
     * Register any package services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->configureComponents();
        $this->configurePublishing();
    }

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'view-blade-component');
    }

    /**
     * Configure the Jetstream Blade components.
     *
     * @return void
     */
    protected function configureComponents()
    {
        Blade::component('a', Anchor::class);
        Blade::component('action-grid', ActionGrid::class);
        Blade::component('alert', Alert::class);
        Blade::component('alerts', Alerts::class);
        Blade::component('alert-validation', AlertValidation::class);
        Blade::component('button', FormButton::class);
        Blade::component('card', Card::class);
        Blade::component('form', Form::class);
        Blade::component('form-group', FormGroup::class);
        Blade::component('form-group-view', FormGroupView::class);
        Blade::component('img', Image::class);
        Blade::component('input', FormInput::class);
        Blade::component('invalid', FormInvalid::class);
        Blade::component('modal', Modal::class);
        Blade::component('navbar', Navbar::class);
        Blade::component('option', FormSelectOption::class);
        Blade::component('select', FormSelect::class);
        Blade::component('textarea', FormTextarea::class);
        Blade::componentNamespace('Kanekescom\\LaravelViewBladeComponent\\View\\Components', 'tag');
    }

    /**
     * Configure publishing for the package.
     *
     * @return void
     */
    protected function configurePublishing()
    {
        if (!$this->app->runningInConsole()) {
            return;
        }

        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/kanekescom/laravel-view-blade-component'),
        ], 'view-blade-component-views');
    }
}
