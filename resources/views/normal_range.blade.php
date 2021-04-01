<div class="form-group">
    {!! Form::nLabel($name, $label, $required) !!}

    @php
        $options = ['class' => 'form-control-range custom-range'];

        if(isset($required) && $required == true)
            $options['required'] = 'required';
    @endphp

    {!! Form::range($name, $default, array_merge($options, $attributes)) !!}
</div>