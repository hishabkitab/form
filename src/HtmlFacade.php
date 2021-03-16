<?php

namespace HishabKitab\Form;

use Illuminate\Support\Facades\Facade;

/**
 * @see \HishabKitab\Form\Html
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
