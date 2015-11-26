@extends('layout.main')

@section('content')
<div>
	<form class="form-horizontal" method="post" enctype="multipart/form-data" action="{{ URL::route('buy') }}">
    <div class="row">
        <div class="col-md-6">
		<div class="form-group">
			<label class="condivol-label col-sm-3">{{ Lang::get('ccp.paypal') }}</label>
			<div>
				<input type="email" name="paypal"  {{ (Input::old('paypal'))? 'value='.e(Input::old('paypal')):'' }} >
			</div>
			@if($errors->has('paypal'))
	           <div class="help-block col-sm-4">{{ $errors->first('paypal') }}</div>
	        @else
	           <div class="help-block col-sm-4"></div>
	        @endif
		</div>
        </div>
         <div class="col-md-6">
		<div class="form-group">
			<label class="condivol-label col-sm-3">{{ Lang::get('ccp.amount') }}</label>
			<div>
				<input type="number" name="amount" {{ (Input::old('amount'))? 'value='.e(Input::old('amount')):'' }}>
			</div>
			@if($errors->has('amount'))
	           <div class="help-block col-sm-4">{{ $errors->first('amount') }}</div>
	        @else
	           <div class="help-block col-sm-4"></div>
	        @endif
		</div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label class="condivol-label col-sm-3" for="img_back">{{ Lang::get('ccp.img_back') }}</label>
                <div>
                <input type="file" name="img_back"  >
                </div>
                @if($errors->has('img_back'))
                <div class="help-block col-sm-4">{{ $errors->first('img_back')  }}</div>
                @else
                <div class="help-block col-sm-4"></div>
                @endif
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label class="condivol-label col-sm-3" for="img_front">{{Lang::get('ccp.img_front') }}</label>
                <div>
                <input type="file" name="img_front">
                </div>
                @if($errors->has('img_front'))
                <div class="help-block col-sm-4"> {{  $errors->first('img_front')  }}</div>
                @else
                <div class="help-block col-sm-4"></div>
                @endif
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
		<div class="form-group">
			<label class="condivol-label col-sm-3">{{ Lang::get('general.email') }}({{ Lang::get('general.optional') }})</label>
			<div>
				<input type="email" name="email"  {{ (Input::old('email'))? 'value='.e(Input::old('email')):'' }} >
			</div>
			@if($errors->has('email'))
	           <div class="help-block col-sm-4">{{ $errors->first('email') }}</div>
	        @else
	           <div class="help-block col-sm-4"></div>
	        @endif
		</div>
        </div>
        <div class="col-md-6">
		<div class="form-group">
			<label class="condivol-label col-sm-3">{{ Lang::get('general.phone_number') }}({{ Lang::get('general.optional') }})</label>
			<div>
				<input type="number" name="phone_number" {{ (Input::old('phone_number'))? 'value='.e(Input::old('phone_number')):'' }}  >
			</div>
			@if($errors->has('phone_number'))
	           <div class="help-block col-sm-4">{{ $errors->first('phone_number') }}</div>
	        @else
	           <div class="help-block col-sm-4"></div>
	        @endif
		</div>
        </div>
    </div>
            <div class="row">
                <div class="col-md-6 col-md-offset-6">
                    {{  Form::token() }}
                <div class="form-group">
                        <input class="btn btn-success " type='submit' value="{{ Lang::get('ccp.buy_submit') }}"/>
                </div>
            </div>
    </div>
	</form>
</table>


@endsection
