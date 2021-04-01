<?php

namespace HishabKitab\Form\Providers\Components;

use Illuminate\Support\ServiceProvider;

class NormalFieldProvider extends ServiceProvider
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
     * Load All Normal Bootstrap Style Forms
     *
     * Example:
     *
     * Label
     *  +-----------------------------------+
     *  |            Field                  |
     *  +-----------------------------------+
     */
    public function boot()
    {
        /**
         * @parem string $name
         * @parem string $label
         * @parem mixed $default
         * @parem bool $required
         * @parem array $attributes
         */
        \Form::component('nText', 'form::normal_text', ['name', 'label', 'default', 'required', 'attributes']);
        /**
         * @parem string $name
         * @parem string $label
         * @parem mixed $default
         * @parem bool $required
         * @parem array $attributes
         */
        \Form::component('nEmail', 'form::normal_email', ['name', 'label', 'default', 'required', 'attributes']);

        /**
         * @parem string $name
         * @parem string $label
         * @parem bool $required
         * @parem array $attributes
         */
        \Form::component('nPassword', 'form::normal_password', ['name', 'label', 'required', 'attributes']);

        /**
         * @parem string $name
         * @parem string $label
         * @parem bool $required
         * @parem array $attributes
         */
        \Form::component('nRange', 'form::normal_range', ['name', 'label', 'default', 'required', 'attributes']);


        /**
         * @parem string $name
         * @parem string $label
         * @parem bool $required
         * @parem array $attributes
         */
        \Form::component('nSearch', 'form::normal_search', ['name', 'label', 'default', 'required', 'attributes']);

        /**
         * @parem string $name
         * @parem string $label
         * @parem bool $required
         * @parem array $attributes
         */
        \Form::component('nTel', 'form::normal_tel', ['name', 'label', 'default', 'required', 'attributes']);

        /**
         * @parem string $name
         * @parem string $label
         * @parem bool $required
         * @parem array $attributes
         */
        \Form::component('nNumber', 'form::normal_number', ['name', 'label', 'default', 'required', 'attributes']);


        /**
         * @parem string $name
         * @parem string $label
         * @parem bool $required
         * @parem array $attributes
         */
        \Form::component('nDate', 'form::normal_date', ['name', 'label', 'default', 'required', 'attributes']);

        /**
         * @parem string $name
         * @parem string $label
         * @parem bool $required
         * @parem array $attributes
         */
        \Form::component('nUrl', 'form::normal_url', ['name', 'label', 'default', 'required', 'attributes']);

        /**
         * @parem string $name
         * @parem string $label
         * @parem bool $required
         * @parem array $attributes
         */
        \Form::component('nFile', 'form::normal_file', ['name', 'label', 'default', 'required', 'attributes']);


        /**
         * @parem string $name
         * @parem string $label
         * @parem bool $required
         * @parem array $attributes
         */
        \Form::component('nTextarea', 'form::normal_textarea', ['name', 'label', 'default', 'required', 'attributes']);



        /**
         * Create a select box field.
         *
         * @param  string $name
         * @param  array  $list
         * @param  string|bool $selected
         * @param  array  $selectAttributes
         * @param  array  $optionsAttributes
         * @param  array  $optgroupsAttributes
         */
        \Form::component('nSelect', 'form::normal_select', ['name', 'label', 'data', 'selected', 'required', 'attributes']);

        /**
         * Create a select range field.
         *
         * @param  string $name
         * @param  string $begin
         * @param  string $end
         * @param  string $selected
         * @param  array  $options
         *
         * @return \Illuminate\Support\HtmlString
         */
        \Form::component('nSelectRange', 'form::normal_selectrange', ['name', 'label', 'begin', 'end', 'selected', 'required', 'attributes']);


        /**
         * Create a select year field.
         *
         * @param  string $name
         * @param  string $begin
         * @param  string $end
         * @param  string $selected
         * @param  array  $options
         *
         * @return mixed
         */
        \Form::component('nSelectYear', 'form::normal_selectyear', ['name', 'label', 'begin', 'end', 'selected', 'required', 'attributes']);


        /**
         * Create a select month field.
         *
         * @param  string $name
         * @param  string $selected
         * @param  array  $options
         * @param  string $format
         *
         * @return \Illuminate\Support\HtmlString
         */
        \Form::component('nSelectMonth', 'form::normal_selectmonth', ['name', 'label', 'selected', 'required', 'attributes']);


        /**
         * Create a checkbox input field.
         *
         * @param  string $name
         * @param  mixed  $value
         * @param  bool   $checked
         * @param  array  $options
         *
         * @return \Illuminate\Support\HtmlString
         */
        \Form::component('nCheckbox', 'form::normal_checkbox', ['name', 'label', 'checked', 'required', 'attributes']);



        /**
         * Create a radio button input field.
         *
         * @param  string $name
         * @param  mixed  $value
         * @param  bool   $checked
         * @param  array  $options
         *
         * @return \Illuminate\Support\HtmlString
         */
        \Form::component('nRadio', 'form::normal_radio', ['name', 'label', 'checked', 'required', 'attributes']);
    



















        
        //       Horizontal Form   start

        /**
         * @parem string $name
         * @parem string $label
         * @parem mixed $default
         * @parem bool $required
         * @parem array $attributes
         */
        \Form::component('hText', 'form::horizon_text', ['name', 'label', 'default', 'required', 'attributes']);
        /**
         * @parem string $name
         * @parem string $label
         * @parem mixed $default
         * @parem bool $required
         * @parem array $attributes
         */
        \Form::component('hEmail', 'form::horizon_email', ['name', 'label', 'default', 'required', 'attributes']);
    
    
    
        /**
         * @parem string $name
         * @parem string $label
         * @parem bool $required
         * @parem array $attributes
         */
        \Form::component('hSearch', 'form::horizon_search', ['name', 'label', 'default', 'required', 'attributes']);

        /**
         * @parem string $name
         * @parem string $label
         * @parem bool $required
         * @parem array $attributes
         */
        \Form::component('hTel', 'form::horizon_tel', ['name', 'label', 'default', 'required', 'attributes']);

        /**
         * @parem string $name
         * @parem string $label
         * @parem bool $required
         * @parem array $attributes
         */
        \Form::component('hNumber', 'form::horizon_number', ['name', 'label', 'default', 'required', 'attributes']);


        /**
         * @parem string $name
         * @parem string $label
         * @parem bool $required
         * @parem array $attributes
         */
        \Form::component('hDate', 'form::horizon_date', ['name', 'label', 'default', 'required', 'attributes']);

        /**
         * @parem string $name
         * @parem string $label
         * @parem bool $required
         * @parem array $attributes
         */
        \Form::component('hUrl', 'form::horizon_url', ['name', 'label', 'default', 'required', 'attributes']);

        /**
         * @parem string $name
         * @parem string $label
         * @parem bool $required
         * @parem array $attributes
         */
        \Form::component('hFile', 'form::horizon_file', ['name', 'label', 'default', 'required', 'attributes']);


        /**
         * @parem string $name
         * @parem string $label
         * @parem bool $required
         * @parem array $attributes
         */
        \Form::component('hTextarea', 'form::horizon_textarea', ['name', 'label', 'default', 'required', 'attributes']);



        /**
         * Create a select box field.
         *
         * @param  string $name
         * @param  array  $list
         * @param  string|bool $selected
         * @param  array  $selectAttributes
         * @param  array  $optionsAttributes
         * @param  array  $optgroupsAttributes
         */
        \Form::component('hSelect', 'form::horizon_select', ['name', 'label', 'data', 'selected', 'required', 'attributes']);

        /**
         * Create a select range field.
         *
         * @param  string $name
         * @param  string $begin
         * @param  string $end
         * @param  string $selected
         * @param  array  $options
         *
         * @return \Illuminate\Support\HtmlString
         */
        \Form::component('hSelectRange', 'form::horizon_selectrange', ['name', 'label', 'begin', 'end', 'selected', 'required', 'attributes']);


        /**
         * Create a select year field.
         *
         * @param  string $name
         * @param  string $begin
         * @param  string $end
         * @param  string $selected
         * @param  array  $options
         *
         * @return mixed
         */
        \Form::component('hSelectYear', 'form::horizon_selectyear', ['name', 'label', 'begin', 'end', 'selected', 'required', 'attributes']);


        /**
         * Create a select month field.
         *
         * @param  string $name
         * @param  string $selected
         * @param  array  $options
         * @param  string $format
         *
         * @return \Illuminate\Support\HtmlString
         */
        \Form::component('hSelectMonth', 'form::horizon_selectmonth', ['name', 'label', 'selected', 'required', 'attributes']);


        /**
         * Create a checkbox input field.
         *
         * @param  string $name
         * @param  mixed  $value
         * @param  bool   $checked
         * @param  array  $options
         *
         * @return \Illuminate\Support\HtmlString
         */
        \Form::component('hCheckbox', 'form::horizon_checkbox', ['name', 'label', 'checked', 'required', 'attributes']);



        /**
         * Create a radio button input field.
         *
         * @param  string $name
         * @param  mixed  $value
         * @param  bool   $checked
         * @param  array  $options
         *
         * @return \Illuminate\Support\HtmlString
         */
        \Form::component('hRadio', 'form::horizon_radio', ['name', 'label', 'checked', 'required', 'attributes']);
    


    
    }
}
