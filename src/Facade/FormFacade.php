<?php

namespace HishabKitab\Form\Facade;

use Illuminate\Support\Facades\Facade;

/**
 * @see \HishabKitab\Form\FormBuilder
 */
class FormFacade extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'form';
    }
}
