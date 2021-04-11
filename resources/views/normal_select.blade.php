<div class="form-group">
	{!! Form::nLabel($name, $label, $required) !!}
	
	@php
		$options = ['class' => 'form-control custom-select'];

		if(isset($required) && $required == true)
			$options['required'] = 'required';
	@endphp
	
	{!! Form::select($name, $data, $selected, array_merge($options, $attributes)) !!}
</div>
