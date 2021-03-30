@extends('view::layouts.web.site.master')

@push('css')
    {!!  Html::style('css/pages/auth.css') !!}
@endpush

@section('content')
    <div class="content content-fixed content-auth-alt">
        <div class="container ht-100p tx-center">
            <div class="row justify-content-center">
                {!! Form::normalLabel('email', 'Email Address'); !!}
                {!! Form::horizonLabel('email', 'Email Address', 'col-md-2'); !!}
            </div><!-- row -->
        </div><!-- container -->
    </div><!-- content -->
@endsection

@section('script')

@endsection

@section('js')

@endsection
