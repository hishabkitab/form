<?php

namespace HishabKitab\Form\Providers\Components;

use Illuminate\Support\ServiceProvider;
use Form;

class LabelProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }

    /**
     * Loading All Label Style
     */
    public function boot()
    {
        Form::macro('normalLabel', function ($name, $value, $required = false) {

            if ($required) {
                $value .= '<span style="color: #dc3545; font-weight:700">*</span>';
            }

            return Form::label($name, $value, [], false);
        });

        Form::macro('horizonLabel', function ($name, $value, $col_size = "col-md-2", $required = false) {

            if ($required) {
                $value .= '<span style="color: #dc3545; font-weight:700">*</span>';
            }

            return Form::label($name, $value, ['class' => "$col_size col-form-label"], false);
        });
    }
}
