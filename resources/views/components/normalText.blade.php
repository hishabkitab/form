@extends('form::layouts.normal')

@section('label')
    {!! Form::label($name, $value) !!}
@endsection

@section('field')
    {!! Form::text($name, $value) !!}
@endsection


