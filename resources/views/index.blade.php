@extends('view::layouts.web.site.master')

@push('css')
{!! Html::style('css/pages/auth.css') !!}
@endpush

@section('content')
<div class="content content-fixed content-auth-alt">
    <div class="container ht-100p">
        <div class="row">
            <div class="col-12">
                <form action="{{ route('forms.store') }}" method="POST">
                    @csrf
                    {{-- 'name', 'label', 'default', 'required', 'attributes'--}}
                    <!-- Normal Form  -->
                    {!! Form::nRange('field', 'Satisafation Rating', '50', false, ['min' => 0, 'max' => 100])!!}
                    {!! Form::nSearch('field', 'Search')!!}
                    {!! Form::nTel('field', 'Telephone', null, false, [])!!}
                    {!! Form::nNumber('field', 'Number', null, false, [])!!}
                    {!! Form::nDate('field', 'Date', null, false, [])!!}
                    {!! Form::nUrl('field', 'Url', null, false, [])!!}
                    {!! Form::nFile('field', 'File', null, false, [])!!}
                    {!! Form::nTextarea('field', 'Description', null, false, ['rows' => 5])!!}
                    {!! Form::nSelect('field', 'Select Name',[], null, false, [])!!}
                    {!! Form::nSelectRange('field', 'Select Range',1,100, null, false, ['step' => 5])!!}
                    {!! Form::nSelectYear('field', 'Select Year',2001,2021, null, false, ['step' => 5])!!}
                    {!! Form::nSelectMonth('field', 'Select Month', null, false, ['step' => 5])!!}
                    {!! Form::nCheckbox('check Data', 'field', null, false, [])!!}
                    {!! Form::nRadio('Click On', 'field', null, false, [])!!}


                    <!-- Horizontal -->
                    {!! Form::hText('field', 'User Name', null)!!}
                    {!! Form::hEmail('field', 'Email Address', 'example@gmail.com')!!}
                    {!! Form::hSearch('field', 'Search', null)!!}
                    {!! Form::hTel('field', 'Telephone', null)!!}
                    {!! Form::hNumber('field', 'Number', null )!!}
                    {!! Form::hDate('field', 'Date', null )!!}
                    {!! Form::hUrl('field', 'Url', null )!!}
                    {!! Form::hTextarea('field', 'Description', 'I am a Programmer')!!}
                    {!! Form::hSelect('field', 'Select Name',[
                    1 => 'What',2 => 'Where',3 => 'Why',4 => 'How'], null )!!}
                    {!! Form::hSelectRange('field', 'Select Range',1,100, null)!!}
                    {!! Form::hSelectYear('field', 'Select Year',2001,2021, null)!!}
                    {!! Form::hSelectMonth('field', 'Select Month', null)!!}
                    {!! Form::hCheckbox('check Data', 'checkbox', null )!!}
                    {!! Form::hRadio('Click On', 'radio', null )!!}




                                        <!-- Group Form  -->
                    {!! Form::gText('field', 'User Name', 'Me', true, 'fas fa-heading')!!}
                    {!! Form::gEmail('field', 'Email Address', 'example@gmail.com', true, 'fas fa-envelope')!!}
                    {!! Form::gSearch('field', 'Search', null, true, 'fas fa-search')!!}
                    {!! Form::gTel('field', 'Telephone', null, true, 'fas fa-phone-square-alt')!!}
                    {!! Form::gNumber('field', 'Number', null, true, 'fas fa-sort-numeric-up-alt' )!!}
                    {!! Form::gDate('field', 'Date', null , true, 'fas fa-calendar')!!}
                    {!! Form::gUrl('field', 'Url', null , true, 'fas fa-link')!!}
                    {!! Form::gTextarea('field', 'Description', 'I am a Programmer', true, 'fas fa-info', ['rows' => 3])!!}
                    {!! Form::gSelect('field', 'Select Name',[
                    1 => 'What',2 => 'Where',3 => 'Why',4 => 'How'], null , true, 'fas fa-caret-down')!!}
                    {!! Form::gSelectRange('field', 'Select Range',1,100, null, true, 'fas fa-caret-down')!!}
                    {!! Form::gSelectYear('field', 'Select Year',2001,2021, null, true, 'fas fa-caret-down')!!}
                    {!! Form::gSelectMonth('field', 'Select Month', null, true, 'fas fa-caret-down')!!}

                    <button class="btn btn-primary btn-block">Submit</button>
                </form>
            </div><!-- container -->
        </div>
    </div>
</div>

@endsection

@section('script')

@endsection

@section('js')

@endsection
