@extends('view::layouts.web.site.master')

@push('css')
	{!! Html::style('css/pages/auth.css') !!}
@endpush

@section('content')
	<div class="content content-fixed content-auth-alt">
		<div class="container ht-100p">
			<div class="row">
				<div class="col-12">
					{{-- 'name', 'label', 'default', 'required', 'attributes'--}}
					{!! Form::nRange('rating', 'Satisafation Rating', '50', true, ['min' => 0, 'max' => 100])!!}
					{!! Form::nSearch('search', 'Search', 'Demo', true, [])!!}
					{!! Form::nTel('telephone', 'Telephone', null, true, [])!!}
					{!! Form::nNumber('number', 'Number', null, true, [])!!}
					{!! Form::nDate('date', 'Date', null, true, [])!!}
					{!! Form::nUrl('url', 'Url', null, true, [])!!}
					{!! Form::nFile('file', 'File', null, true, [])!!}
					{!! Form::nTextarea('description', 'Description', 'I am a Programmer', true, ['rows' => 5])!!}
					{!! Form::nSelect('select', 'Select Name',[
					1 => 'Ami',2 => 'Ki',3 => 'Korbo',4 => 'Bolo'], null, true, [])!!}
					{!! Form::nSelectRange('selectrange', 'Select Range',1,100, null, true, ['step' => 5])!!}
					{!! Form::nSelectYear('selectyear', 'Select Year',2001,2021, null, true, ['step' => 5])!!}
					{!! Form::nSelectMonth('selectmonth', 'Select Month', null, true, ['step' => 5])!!}
					{!! Form::nCheckbox('check Data', 'checkbox', null, true, [])!!}
					{!! Form::nRadio('Click On', 'radio', null, true, [])!!}
				</div>
			</div><!-- row -->
		</div><!-- container -->
	</div><!-- content -->
	
	
	
	
	<!--         Horizontal Form          -->
	
	
	<div class="content content-fixed content-auth-alt">
		<div class="container">
			<div class="form-group row">
				{!! Form::hText('text', 'User Name', 'Test Users', true, [])!!}
			</div>
			<div class="form-group row">
				{!! Form::hEmail('email', 'Email Address', 'example@gmail.com', true, [])!!}
			</div>
			<div class="form-group row">
				{!! Form::hSearch('search', 'Search', 'Demo', true, [])!!}
			</div>
			<div class="form-group row">
				{!! Form::hTel('telephone', 'Telephone', null, true, [])!!}
			</div>
			<div class="form-group row">
				{!! Form::hNumber('number', 'Number', null, true, [])!!}
			</div>
			<div class="form-group row">
				{!! Form::hDate('date', 'Date', null, true, [])!!}
			</div>
			<div class="form-group row">
				{!! Form::hUrl('url', 'Url', null, true, [])!!}
			</div>
			<div class="form-group row">
				{!! Form::hTextarea('description', 'Description', 'I am a Programmer', true, ['rows' => 5])!!}
			</div>
			<div class="form-group row">
				{!! Form::hSelect('select', 'Select Name',[
				1 => 'Ami',2 => 'Ki',3 => 'Korbo',4 => 'Bolo'], null, true, [])!!}
			</div>
			<div class="form-group row">
				{!! Form::hSelectRange('selectrange', 'Select Range',1,100, null, true, ['step' => 5])!!}
			</div>
			<div class="form-group row">
				{!! Form::hSelectYear('selectyear', 'Select Year',2001,2021, null, true, ['step' => 5])!!}
			</div>
			<div class="form-group row">
				{!! Form::hSelectMonth('selectmonth', 'Select Month', null, true, ['step' => 5])!!}
			</div>
			<div class="form-group row">
				{!! Form::hCheckbox('check Data', 'checkbox', null, true, [])!!}
			</div>
			<div class="form-group row">
				{!! Form::hRadio('Click On', 'radio', null, true, [])!!}
			</div>
		</div><!-- container -->
	</div>



@endsection

@section('script')

@endsection

@section('js')

@endsection