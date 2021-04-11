<?php

namespace HishabKitab\Form\Providers\Components;

use Illuminate\Support\ServiceProvider;

class GroupFieldProvider extends ServiceProvider
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
        \Form::component('gText', 'form::group.text', ['name', 'label', 'default' => null, 'required' => false, 'icon' => null, 'attributes' => []]);
        /**
         * @parem string $name
         * @parem string $label
         * @parem mixed $default
         * @parem bool $required
         * @parem array $attributes
         */
        \Form::component('gEmail', 'form::group.email', ['name', 'label', 'default' => null, 'required' => false, 'icon' => null, 'attributes' => []]);

        /**
         * @parem string $name
         * @parem string $label
         * @parem bool $required
         * @parem array $attributes
         */
        \Form::component('gPassword', 'form::group.password', ['name', 'label', 'required' => false, 'icon' => null, 'attributes' => []]);

        /**
         * @parem string $name
         * @parem string $label
         * @parem bool $required
         * @parem array $attributes
         */
        \Form::component('gRange', 'form::group.range', ['name', 'label', 'default' => null, 'required' => false, 'icon' => null, 'attributes' => []]);


        /**
         * @parem string $name
         * @parem string $label
         * @parem bool $required
         * @parem array $attributes
         */
        \Form::component('gSearch', 'form::group.search', ['name', 'label', 'default' => null, 'required' => false, 'icon' => null, 'attributes' => []]);

        /**
         * @parem string $name
         * @parem string $label
         * @parem bool $required
         * @parem array $attributes
         */
        \Form::component('gTel', 'form::group.tel', ['name', 'label', 'default' => null, 'required' => false, 'icon' => null, 'attributes' => []]);

        /**
         * @parem string $name
         * @parem string $label
         * @parem bool $required
         * @parem array $attributes
         */
        \Form::component('gNumber', 'form::group.number', ['name', 'label', 'default' => null, 'required' => false, 'icon' => null, 'attributes' => []]);


        /**
         * @parem string $name
         * @parem string $label
         * @parem bool $required
         * @parem array $attributes
         */
        \Form::component('gDate', 'form::group.date', ['name', 'label', 'default' => date('Y-m-d'), 'required' => false, 'icon' => null, 'attributes' => []]);


        /**
         * @parem string $name
         * @parem string $label
         * @parem bool $required
         * @parem array $attributes
         */
        \Form::component('gUrl', 'form::group.url', ['name', 'label', 'default' => null, 'required' => false, 'icon' => null, 'attributes' => []]);

        /**
         * @parem string $name
         * @parem string $label
         * @parem bool $required
         * @parem array $attributes
         */
        \Form::component('gFile', 'form::group.file', ['name', 'label', 'default' => null, 'required' => false, 'icon' => null, 'attributes' => []]);


        /**
         * @parem string $name
         * @parem string $label
         * @parem bool $required
         * @parem array $attributes
         */
        \Form::component('gTextarea', 'form::group.textarea', ['name', 'label', 'default' => null, 'required' => false, 'icon' => null, 'attributes' => []]);



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
        \Form::component('gSelect', 'form::group.select', ['name', 'label', 'data', 'selected', 'required' => false, 'icon' => null, 'attributes' => []]);

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
        \Form::component('gSelectRange', 'form::group.selectrange', ['name', 'label', 'begin', 'end', 'selected', 'required' => false, 'icon' => null, 'attributes' => []]);


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
        \Form::component('gSelectYear', 'form::group.selectyear', ['name', 'label', 'begin', 'end', 'selected' => date('Y'), 'required' => false, 'icon' => null, 'attributes' => []]);


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
        \Form::component('gSelectMonth', 'form::group.selectmonth', ['name', 'label', 'selected' => date('m'), 'required' => false, 'icon' => null, 'attributes' => []]);


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
        \Form::component('gCheckbox', 'form::group.checkbox', ['name', 'label', 'checked', 'required' => false, 'icon' => null, 'attributes' => []]);



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
        \Form::component('gRadio', 'form::group.radio', ['name', 'label', 'checked', 'required' => false, 'icon' => null, 'attributes' => []]);

























    }
}
