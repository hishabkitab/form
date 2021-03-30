<?php

namespace HishabKitab\Form\Facade;

use Illuminate\Support\Facades\Facade;

/**
 * @see \HishabKitab\Form\FieldBuilder
 */
class FieldFacade extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'field';
    }
}
