<div class="form-group">
	{!!  Form::fLabel($name, $label, $required, ['class' => 'd-block mb-2']) !!}
	<div class="custom-file">
		@php
			$options = ['class' => 'custom-file-input'];

			if(isset($required) && $required == true)
				$options['required'] = 'required';
		@endphp
		
		{!! Form::file($name, array_merge($options, $attributes)) !!}
		{!! Form::nLabel($name, $label, $required, ['class' => 'custom-file-label']) !!}
	</div>
</div>
