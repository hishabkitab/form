<?php

namespace HishabKitab\Form;

use BadMethodCallException;
use DateTime;
use HishabKitab\Form\Componentable;
use HishabKitab\Form\FormBuilder;
use Illuminate\Contracts\Routing\UrlGenerator;
use Illuminate\Contracts\Session\Session;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Illuminate\Support\HtmlString;
use Illuminate\Support\Traits\Macroable;

class LabelBuilder extends FormBuilder
{
    use Macroable, Componentable {
        Macroable::__call as macroCall;
        Componentable::__call as componentCall;
    }

    public function __construct(HtmlBuilder $html, UrlGenerator $url, Factory $view, $csrfToken, Request $request = null)
    {
        parent::__construct($html, $url, $view, $csrfToken, $request);
    }

    /**
     * Create a form label element.
     *
     * @param string $name
     * @param string $value
     * @param array $options
     * @param bool $escape_html
     *
     * @return HtmlString
     */
    public function label($name, $value = null, $options = [], $escape_html = true)
    {
        $options = $this->html->attributes($options);

        $value = $this->formatLabel($name, $value);

        if ($escape_html) {
            $value = $this->html->entities($value);
        }

        return $this->toHtmlString('<label for="' . $name . '"' . $options . '>' . $value . '</label>');
    }

    /**
     * Format the label value.
     *
     * @param string $name
     * @param string|null $value
     *
     * @return string
     */
    protected function formatLabel($name, $value)
    {
        return $value ?: ucwords(str_replace('_', ' ', $name));
    }


    public function normal($name, $value = null, $options = [], $required = false)
    {
        if ($required) {
            $value .= '<span style="color: #dc3545; font-weight:700">*</span>';
        }
        return $this->label($name, $value, $options);
    }

    /**
     * Dynamically handle calls to the class.
     *
     * @param string $method
     * @param array $parameters
     *
     * @return View|mixed
     *
     * @throws \BadMethodCallException
     */
    public function __call($method, $parameters)
    {
        if (static::hasComponent($method)) {
            return $this->componentCall($method, $parameters);
        }

        if (static::hasMacro($method)) {
            return $this->macroCall($method, $parameters);
        }

        throw new BadMethodCallException("Method {$method} does not exist.");
    }
}
