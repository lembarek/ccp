@extends('layout.main')

@section('title')
sign up | admin | ccp
@stop

@section('content')
<form class="form-horizontal" method="post" action="{{ URL::route('admin_signup') }}">
    <div class="form-group">
        <label class="control-label col-sm-2">{{ Lang::get('general.name') }}: </label>
        <div class="col-sm-6">
            <input class="form-control" type="text" name="name"  {{ Input::old('name')? "value='".Input::old('name')."'":""  }} placeholder="{{ Lang::get('general.name') }}" >
        </div>
        @if($errors->has('name'))
            <div class="help-block col-sm-4">{{ $errors->first('name') }}</div>
        @else
            <div class="help-block col-sm-4"></div>
        @endif
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2">{{ Lang::get('general.password') }}: </label>
        <div class="col-sm-6">
            <input class="form-control" type="password" name="password"  {{ Input::old('password')? "value='".Input::old('password')."'":""  }} placeholder="{{ Lang::get('general.password') }}" >
        </div>
        @if($errors->has('password'))
            <div class="help-block col-sm-4">{{ $errors->first('password') }}</div>
        @else
            <div class="help-block col-sm-4"></div>
        @endif
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2">{{ Lang::get('general.password_again') }}: </label>
        <div class="col-sm-6">
            <input class="form-control" type="password" name="password_again"  {{ Input::old('password_again')? "value='".Input::old('password_again')."'":""  }} placeholder="{{ Lang::get('general.password_again') }}" >
        </div>
        @if($errors->has('password_again'))
            <div class="help-block col-sm-4">{{ $errors->first('password_again') }}</div>
        @else
            <div class="help-block col-sm-4"></div>
        @endif
    </div>
    <div class="form-group">
        <div class=" col-sm-offset-2 col-sm-10">
            <input class="btn btn-default" type="submit"  value="{{ Lang::get('general.create_account') }}"/>
        </div>
    </div>
    
</form>				
@stop	