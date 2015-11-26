@extends('layout.main')

@section('content')
<div class="stepwizard">
    <div class="stepwizard-row setup-panel">
        <div class="stepwizard-step">
            <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
            <p>Step 1</p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
            <p>Step 2</p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
            <p>Step 3</p>
        </div>
    </div>
</div>
<form role="form" method="post" enctype="multipart/form-data" action="{{ URL::route('buy') }}" >
   {{  Form::token() }}
    <div class="row setup-content" id="step-1">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3> Step 1</h3>
                <div class="form-group">
                    <label class="control-label">{{ Lang::get('ccp.paypal') }}</label>
                    <input type="email" name="paypal"  {{ (Input::old('paypal'))? 'value='.e(Input::old('paypal')):'' }}   maxlength="100"  required="required" class="form-control" placeholder=""  />
                </div>
                <div class="form-group">
                    <label class="control-label">{{ Lang::get('ccp.amount') }}</label>
                    <input type="number" name="amount" {{ (Input::old('amount'))? 'value='.e(Input::old('amount')):'' }}   maxlength="100" required="required" class="form-control" placeholder="" />
                </div>
                <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
            </div>
        </div>
    </div>
    <div class="row setup-content" id="step-2">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3> Step 2</h3>
                <div class="form-group">
                    <label class="control-label">{{ Lang::get('ccp.img_back') }}</label>
                    <input type="file" name="img_back" required="required"  placeholder="Enter Company Name"  >
                </div>
                <div class="form-group">
                    <label class="control-label">{{Lang::get('ccp.img_front') }}</label>
                    <input type="file" name="img_front">
                </div>
                <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
            </div>
        </div>
    </div>
    <div class="row setup-content" id="step-3">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3> Step 3</h3>
                 <div class="form-group">
                    <label class="control-label">{{ Lang::get('general.email') }}({{ Lang::get('general.optional') }})</label>
	            <input type="email" name="email"  {{ (Input::old('email'))? 'value='.e(Input::old('email')):'' }} maxlength="100" class="form-control" placeholder="" >
                </div>
                 <div class="form-group">
                    <label class="control-label">{{ Lang::get('general.phone_number') }}({{ Lang::get('general.optional') }})</label>
                    <input type="number" name="phone_number" {{ (Input::old('phone_number'))? 'value='.e(Input::old('phone_number')):'' }}  maxlength="100" class="form-control" placeholder=""    >
                </div>
                <button class="btn btn-success btn-lg pull-right" type="submit">Finish!</button>
            </div>
        </div>
    </div>
    <br/>
</form>

@endsection
