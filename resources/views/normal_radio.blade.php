<div class="form-group">
    {!! Form::nLabel($name, $label, $required) !!}

    @php
        $options = ['class' => 'form-control'];

        if(isset($required) && $required == true)
            $options['required'] = 'required';
    @endphp

    {!! Form::radio($name, $checked, array_merge($options, $attributes)) !!}
</div>
