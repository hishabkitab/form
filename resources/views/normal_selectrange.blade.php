<div class="form-group">
	{!! Form::nLabel($name, $label, $required) !!}
	
	@php
		$options = ['class' => 'form-control'];

		if(isset($required) && $required == true)
			$options['required'] = 'required';
	@endphp
	
	{!! Form::selectRange($name, $begin, $end, $selected, array_merge($options, $attributes)) !!}
</div>
