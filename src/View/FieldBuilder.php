<?php

namespace HishabKitab\Form\View;

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

class FieldBuilder extends FormBuilder
{
    use Macroable, Componentable {
        Macroable::__call as macroCall;
        Componentable::__call as componentCall;
    }

    /**
     * An array of label names we've created.
     *
     * @var array
     */
    protected $labels = [];

    protected $request;

    /**
     * The types of inputs to not fill values on by default.
     *
     * @var array
     */
    protected $skipValueTypes = ['file', 'password', 'checkbox', 'radio'];


    /**
     * Input Type.
     *
     * @var null
     */
    protected $type = null;

    /**
     * Create a new form builder instance.
     *
     * @param HtmlBuilder $html
     * @param UrlGenerator $url
     * @param Factory $view
     * @param string $csrfToken
     * @param Request $request
     */
    public function __construct(HtmlBuilder $html, UrlGenerator $url, Factory $view, $csrfToken, Request $request = null)
    {
        parent::__construct($html, $url, $view, $csrfToken, $request = null);
    }

    /**
     * Create a text input field.
     *
     * @param string $name
     * @param string $value
     * @param array $options
     *
     * @return HtmlString
     */
    public function text($name, $value = null, $options = [])
    {
        return $this->input('text', $name, $value, $options);
    }

    /**
     * Create a password input field.
     *
     * @param string $name
     * @param array $options
     *
     * @return HtmlString
     */
    public function password($name, $options = [])
    {
        return $this->input('password', $name, '', $options);
    }

    /**
     * Create a range input field.
     *
     * @param string $name
     * @param string $value
     * @param array $options
     *
     * @return HtmlString
     */
    public function range($name, $value = null, $options = [])
    {
        return $this->input('range', $name, $value, $options);
    }

    /**
     * Create a search input field.
     *
     * @param string $name
     * @param string $value
     * @param array $options
     *
     * @return HtmlString
     */
    public function search($name, $value = null, $options = [])
    {
        return $this->input('search', $name, $value, $options);
    }

    /**
     * Create an e-mail input field.
     *
     * @param string $name
     * @param string $value
     * @param array $options
     *
     * @return HtmlString
     */
    public function email($name, $value = null, $options = [])
    {
        return $this->input('email', $name, $value, $options);
    }

    /**
     * Create a tel input field.
     *
     * @param string $name
     * @param string $value
     * @param array $options
     *
     * @return HtmlString
     */
    public function tel($name, $value = null, $options = [])
    {
        return $this->input('tel', $name, $value, $options);
    }

    /**
     * Create a number input field.
     *
     * @param string $name
     * @param string $value
     * @param array $options
     *
     * @return HtmlString
     */
    public function number($name, $value = null, $options = [])
    {
        return $this->input('number', $name, $value, $options);
    }

    /**
     * Create a date input field.
     *
     * @param string $name
     * @param string $value
     * @param array $options
     *
     * @return HtmlString
     */
    public function date($name, $value = null, $options = [])
    {
        if ($value instanceof DateTime) {
            $value = $value->format('Y-m-d');
        }

        return $this->input('date', $name, $value, $options);
    }

    /**
     * Create a datetime input field.
     *
     * @param string $name
     * @param string $value
     * @param array $options
     *
     * @return HtmlString
     */
    public function datetime($name, $value = null, $options = [])
    {
        if ($value instanceof DateTime) {
            $value = $value->format(DateTime::RFC3339);
        }

        return $this->input('datetime', $name, $value, $options);
    }

    /**
     * Create a datetime-local input field.
     *
     * @param string $name
     * @param string $value
     * @param array $options
     *
     * @return HtmlString
     */
    public function datetimeLocal($name, $value = null, $options = [])
    {
        if ($value instanceof DateTime) {
            $value = $value->format('Y-m-d\TH:i');
        }

        return $this->input('datetime-local', $name, $value, $options);
    }

    /**
     * Create a time input field.
     *
     * @param string $name
     * @param string $value
     * @param array $options
     *
     * @return HtmlString
     */
    public function time($name, $value = null, $options = [])
    {
        if ($value instanceof DateTime) {
            $value = $value->format('H:i');
        }

        return $this->input('time', $name, $value, $options);
    }

    /**
     * Create a url input field.
     *
     * @param string $name
     * @param string $value
     * @param array $options
     *
     * @return HtmlString
     */
    public function url($name, $value = null, $options = [])
    {
        return $this->input('url', $name, $value, $options);
    }

    /**
     * Create a week input field.
     *
     * @param string $name
     * @param string $value
     * @param array $options
     *
     * @return HtmlString
     */
    public function week($name, $value = null, $options = [])
    {
        if ($value instanceof DateTime) {
            $value = $value->format('Y-\WW');
        }

        return $this->input('week', $name, $value, $options);
    }

    /**
     * Create a file input field.
     *
     * @param string $name
     * @param array $options
     *
     * @return HtmlString
     */
    public function file($name, $options = [])
    {
        return $this->input('file', $name, null, $options);
    }

    /**
     * Create a textarea input field.
     *
     * @param string $name
     * @param string $value
     * @param array $options
     *
     * @return HtmlString
     */
    public function textarea($name, $value = null, $options = [])
    {
        $this->type = 'textarea';

        if (!isset($options['name'])) {
            $options['name'] = $name;
        }

        // Next we will look for the rows and cols attributes, as each of these are put
        // on the textarea element definition. If they are not present, we will just
        // assume some sane default values for these attributes for the developer.
        $options = $this->setTextAreaSize($options);

        $options['id'] = $this->getIdAttribute($name, $options);

        $value = (string)$this->getValueAttribute($name, $value);

        unset($options['size']);

        // Next we will convert the attributes into a string form. Also we have removed
        // the size attribute, as it was merely a short-cut for the rows and cols on
        // the element. Then we'll create the final textarea elements HTML for us.
        $options = $this->html->attributes($options);

        return $this->toHtmlString('<textarea' . $options . '>' . e($value, false) . '</textarea>');
    }

    /**
     * Set the text area size on the attributes.
     *
     * @param array $options
     *
     * @return array
     */
    protected function setTextAreaSize($options)
    {
        if (isset($options['size'])) {
            return $this->setQuickTextAreaSize($options);
        }

        // If the "size" attribute was not specified, we will just look for the regular
        // columns and rows attributes, using sane defaults if these do not exist on
        // the attributes array. We'll then return this entire options array back.
        $cols = Arr::get($options, 'cols', 50);

        $rows = Arr::get($options, 'rows', 10);

        return array_merge($options, compact('cols', 'rows'));
    }

    /**
     * Set the text area size using the quick "size" attribute.
     *
     * @param array $options
     *
     * @return array
     */
    protected function setQuickTextAreaSize($options)
    {
        $segments = explode('x', $options['size']);

        return array_merge($options, ['cols' => $segments[0], 'rows' => $segments[1]]);
    }

    /**
     * Create a select box field.
     *
     * @param string $name
     * @param array $list
     * @param string|bool $selected
     * @param array $selectAttributes
     * @param array $optionsAttributes
     * @param array $optgroupsAttributes
     *
     * @return HtmlString
     */
    public function select($name, $list = [], $selected = null, array $selectAttributes = [], array $optionsAttributes = [], array $optgroupsAttributes = [])
    {
        $this->type = 'select';

        // When building a select box the "value" attribute is really the selected one
        // so we will use that when checking the model or session for a value which
        // should provide a convenient method of re-populating the forms on post.
        $selected = $this->getValueAttribute($name, $selected);

        $selectAttributes['id'] = $this->getIdAttribute($name, $selectAttributes);

        if (!isset($selectAttributes['name'])) {
            $selectAttributes['name'] = $name;
        }

        // We will simply loop through the options and build an HTML value for each of
        // them until we have an array of HTML declarations. Then we will join them
        // all together into one single HTML element that can be put on the form.
        $html = [];

        if (isset($selectAttributes['placeholder'])) {
            $html[] = $this->placeholderOption($selectAttributes['placeholder'], $selected);
            unset($selectAttributes['placeholder']);
        }

        foreach ($list as $value => $display) {
            $optionAttributes = $optionsAttributes[$value] ?? [];
            $optgroupAttributes = $optgroupsAttributes[$value] ?? [];
            $html[] = $this->getSelectOption($display, $value, $selected, $optionAttributes, $optgroupAttributes);
        }

        // Once we have all of this HTML, we can join this into a single element after
        // formatting the attributes into an HTML "attributes" string, then we will
        // build out a final select statement, which will contain all the values.
        $selectAttributes = $this->html->attributes($selectAttributes);

        $list = implode('', $html);

        return $this->toHtmlString("<select{$selectAttributes}>{$list}</select>");
    }

    /**
     * Create a select range field.
     *
     * @param string $name
     * @param string $begin
     * @param string $end
     * @param string $selected
     * @param array $options
     *
     * @return HtmlString
     */
    public function selectRange($name, $begin, $end, $selected = null, $options = [])
    {
        $range = array_combine($range = range($begin, $end), $range);

        return $this->select($name, $range, $selected, $options);
    }

    /**
     * Create a select year field.
     *
     * @param string $name
     * @param string $begin
     * @param string $end
     * @param string $selected
     * @param array $options
     *
     * @return mixed
     */
    public function selectYear()
    {
        return call_user_func_array([$this, 'selectRange'], func_get_args());
    }

    /**
     * Create a select month field.
     *
     * @param string $name
     * @param string $selected
     * @param array $options
     * @param string $format
     *
     * @return HtmlString
     */
    public function selectMonth($name, $selected = null, $options = [], $format = '%B')
    {
        $months = [];

        foreach (range(1, 12) as $month) {
            $months[$month] = strftime($format, mktime(0, 0, 0, $month, 1));
        }

        return $this->select($name, $months, $selected, $options);
    }

    /**
     * Get the select option for the given value.
     *
     * @param string $display
     * @param string $value
     * @param string $selected
     * @param array $attributes
     * @param array $optgroupAttributes
     *
     * @return HtmlString
     */
    public function getSelectOption($display, $value, $selected, array $attributes = [], array $optgroupAttributes = [])
    {
        if (is_iterable($display)) {
            return $this->optionGroup($display, $value, $selected, $optgroupAttributes, $attributes);
        }

        return $this->option($display, $value, $selected, $attributes);
    }

    /**
     * Create an option group form element.
     *
     * @param array $list
     * @param string $label
     * @param string $selected
     * @param array $attributes
     * @param array $optionsAttributes
     * @param integer $level
     *
     * @return HtmlString
     */
    protected function optionGroup($list, $label, $selected, array $attributes = [], array $optionsAttributes = [], $level = 0)
    {
        $html = [];
        $space = str_repeat("&nbsp;", $level);
        foreach ($list as $value => $display) {
            $optionAttributes = $optionsAttributes[$value] ?? [];
            if (is_iterable($display)) {
                $html[] = $this->optionGroup($display, $value, $selected, $attributes, $optionAttributes, $level + 5);
            } else {
                $html[] = $this->option($space . $display, $value, $selected, $optionAttributes);
            }
        }
        return $this->toHtmlString('<optgroup label="' . e($space . $label, false) . '"' . $this->html->attributes($attributes) . '>' . implode('', $html) . '</optgroup>');
    }

    /**
     * Create a select element option.
     *
     * @param string $display
     * @param string $value
     * @param string $selected
     * @param array $attributes
     *
     * @return HtmlString
     */
    protected function option($display, $value, $selected, array $attributes = [])
    {
        $selected = $this->getSelectedValue($value, $selected);

        $options = array_merge(['value' => $value, 'selected' => $selected], $attributes);

        $string = '<option' . $this->html->attributes($options) . '>';
        if ($display !== null) {
            $string .= e($display, false) . '</option>';
        }

        return $this->toHtmlString($string);
    }

    /**
     * Create a placeholder select element option.
     *
     * @param $display
     * @param $selected
     *
     * @return HtmlString
     */
    protected function placeholderOption($display, $selected)
    {
        $selected = $this->getSelectedValue(null, $selected);

        $options = [
            'selected' => $selected,
            'value' => '',
        ];

        return $this->toHtmlString('<option' . $this->html->attributes($options) . '>' . e($display, false) . '</option>');
    }

    /**
     * Determine if the value is selected.
     *
     * @param string $value
     * @param string $selected
     *
     * @return null|string
     */
    protected function getSelectedValue($value, $selected)
    {
        if (is_array($selected)) {
            return in_array($value, $selected, true) || in_array((string)$value, $selected, true) ? 'selected' : null;
        } elseif ($selected instanceof Collection) {
            return $selected->contains($value) ? 'selected' : null;
        }
        if (is_int($value) && is_bool($selected)) {
            return (bool)$value === $selected;
        }
        return ((string)$value === (string)$selected) ? 'selected' : null;
    }

    /**
     * Create a checkbox input field.
     *
     * @param string $name
     * @param mixed $value
     * @param bool $checked
     * @param array $options
     *
     * @return HtmlString
     */
    public function checkbox($name, $value = 1, $checked = null, $options = [])
    {
        return $this->checkable('checkbox', $name, $value, $checked, $options);
    }

    /**
     * Create a radio button input field.
     *
     * @param string $name
     * @param mixed $value
     * @param bool $checked
     * @param array $options
     *
     * @return HtmlString
     */
    public function radio($name, $value = null, $checked = null, $options = [])
    {
        if (is_null($value)) {
            $value = $name;
        }

        return $this->checkable('radio', $name, $value, $checked, $options);
    }

    /**
     * Create a checkable input field.
     *
     * @param string $type
     * @param string $name
     * @param mixed $value
     * @param bool $checked
     * @param array $options
     *
     * @return HtmlString
     */
    protected function checkable($type, $name, $value, $checked, $options)
    {
        $this->type = $type;

        $checked = $this->getCheckedState($type, $name, $value, $checked);

        if ($checked) {
            $options['checked'] = 'checked';
        }

        return $this->input($type, $name, $value, $options);
    }

    /**
     * Get the check state for a checkable input.
     *
     * @param string $type
     * @param string $name
     * @param mixed $value
     * @param bool $checked
     *
     * @return bool
     */
    protected function getCheckedState($type, $name, $value, $checked)
    {
        switch ($type) {
            case 'checkbox':
                return $this->getCheckboxCheckedState($name, $value, $checked);

            case 'radio':
                return $this->getRadioCheckedState($name, $value, $checked);

            default:
                return $this->compareValues($name, $value);
        }
    }

    /**
     * Get the check state for a checkbox input.
     *
     * @param string $name
     * @param mixed $value
     * @param bool $checked
     *
     * @return bool
     */
    protected function getCheckboxCheckedState($name, $value, $checked)
    {
        $request = $this->request($name);

        if (isset($this->session) && !$this->oldInputIsEmpty() && is_null($this->old($name)) && !$request) {
            return false;
        }

        if ($this->missingOldAndModel($name) && is_null($request)) {
            return $checked;
        }

        $posted = $this->getValueAttribute($name, $checked);

        if (is_array($posted)) {
            return in_array($value, $posted);
        } elseif ($posted instanceof Collection) {
            return $posted->contains('id', $value);
        } else {
            return (bool)$posted;
        }
    }

    /**
     * Get the check state for a radio input.
     *
     * @param string $name
     * @param mixed $value
     * @param bool $checked
     *
     * @return bool
     */
    protected function getRadioCheckedState($name, $value, $checked)
    {
        $request = $this->request($name);

        if ($this->missingOldAndModel($name) && !$request) {
            return $checked;
        }

        return $this->compareValues($name, $value);
    }

    /**
     * Create a HTML reset input element.
     *
     * @param string $value
     * @param array $attributes
     *
     * @return HtmlString
     */
    public function reset($value, $attributes = [])
    {
        return $this->input('reset', null, $value, $attributes);
    }

    /**
     * Create a HTML image input element.
     *
     * @param string $url
     * @param string $name
     * @param array $attributes
     *
     * @return HtmlString
     */
    public function image($url, $name = null, $attributes = [])
    {
        $attributes['src'] = $this->url->asset($url);

        return $this->input('image', $name, null, $attributes);
    }

    /**
     * Create a month input field.
     *
     * @param string $name
     * @param string $value
     * @param array $options
     *
     * @return HtmlString
     */
    public function month($name, $value = null, $options = [])
    {
        if ($value instanceof DateTime) {
            $value = $value->format('Y-m');
        }

        return $this->input('month', $name, $value, $options);
    }

    /**
     * Create a color input field.
     *
     * @param string $name
     * @param string $value
     * @param array $options
     *
     * @return HtmlString
     */
    public function color($name, $value = null, $options = [])
    {
        return $this->input('color', $name, $value, $options);
    }

    /**
     * Create a submit button element.
     *
     * @param string $value
     * @param array $options
     *
     * @return HtmlString
     */
    public function submit($value = null, $options = [])
    {
        return $this->input('submit', null, $value, $options);
    }

    /**
     * Create a button element.
     *
     * @param string $value
     * @param array $options
     *
     * @return HtmlString
     */
    public function button($value = null, $options = [])
    {
        if (!array_key_exists('type', $options)) {
            $options['type'] = 'button';
        }

        return $this->toHtmlString('<button' . $this->html->attributes($options) . '>' . $value . '</button>');
    }

    /**
     * Create a datalist box field.
     *
     * @param string $id
     * @param array $list
     *
     * @return HtmlString
     */
    public function datalist($id, $list = [])
    {
        $this->type = 'datalist';

        $attributes['id'] = $id;

        $html = [];

        if ($this->isAssociativeArray($list)) {
            foreach ($list as $value => $display) {
                $html[] = $this->option($display, $value, null, []);
            }
        } else {
            foreach ($list as $value) {
                $html[] = $this->option($value, $value, null, []);
            }
        }

        $attributes = $this->html->attributes($attributes);

        $list = implode('', $html);

        return $this->toHtmlString("<datalist{$attributes}>{$list}</datalist>");
    }

    /**
     * Dynamically handle calls to the class.
     *
     * @param  string $method
     * @param  array  $parameters
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
