<?php

namespace HishabKitab\Form;

use Illuminate\Support\Facades\Facade;

/**
 * @see \HishabKitab\Form\HtmlBuilder
 */
class HtmlFacade extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'html';
    }
}
