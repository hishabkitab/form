
    {!! Form::hLabel($name, $label, $required) !!}

    @php
        $options = ['class' => 'form-control col-md-10'];

        if(isset($required) && $required == true)
            $options['required'] = 'required';
    @endphp

    {!! Form::selectRange($name, $begin, $end, $selected, array_merge($options, $attributes)) !!}

