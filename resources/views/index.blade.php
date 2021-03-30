@extends('view::layouts.web.site.master')

@push('css')
    {!!  Html::style('css/pages/auth.css') !!}
@endpush

@section('content')
    <div class="content content-fixed content-auth-alt">
        <div class="container ht-100p tx-center">
            <div class="row justify-content-center">
                <div class="form-group">
                    {{ Label::normal('test') }}
                </div>
                {{ Field::text('text', 'text', ['class' => 'form-control']) }}
            </div><!-- row -->
        </div><!-- container -->
    </div><!-- content -->
@endsection

@section('script')

@endsection

@section('js')

@endsection
