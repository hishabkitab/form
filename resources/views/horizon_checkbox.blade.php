
    {!! Form::hLabel($name, $label, $required) !!}

    @php
        $options = ['class' => 'form-control col-md-10'];

        if(isset($required) && $required == true)
            $options['required'] = 'required';
    @endphp

    {!! Form::checkbox($name, $checked, array_merge($options, $attributes)) !!}

