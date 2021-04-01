
    {!! Form::hLabel($name, $label, $required) !!}

    @php
        $options = ['class' => 'form-control custom-select  col-md-10'];

        if(isset($required) && $required == true)
            $options['required'] = 'required';
    @endphp

    {!! Form::select($name, $data, $selected, array_merge($options, $attributes)) !!}
