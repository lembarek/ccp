@extends('layout.main')

@section('content')
	<div class="row row-eq-height">
		<div id="buy"  class="col-sm-6 col-md-5 col-lg-4  col-md-offset-1 col-lg-offset-2" >
			<div class="jumbotron">
				@if($buy == "yes")
					<h1>{{ Lang::get('ccp.buy_h1') }} </h1>
					<p> {{ Lang::get('ccp.buy_desc') }} </p>
			 		<p><a class="btn btn-primary btn-block"  href="{{ URL::route('buy') }}" >{{ Lang::get('ccp.buy') }}</a></p>
			 	@elseif($buy == "no")
			 		<h1>{{ Lang::get('ccp.buy_h1_try_later') }}</h1>
			 		<p> {{ Lang::get('ccp.buy_desc_try_later') }} </p>
			 		<p><a class="btn btn-warning btn-block">{{ Lang::get('ccp.try_after_24')  }}</a></p>
			 	@endif
			 </div>
		</div>

		<div id="sell" class="col-sm-6 col-md-5 col-lg-4">
			<div class="jumbotron">
				@if($sell == "yes")
					<h1> {{ Lang::get('ccp.sell_h1') }} </h1>
					<p> {{ Lang::get('ccp.sell_desc') }} </p>
					<p><a class="btn btn-primary btn-block" href="{{ URL::route('sell') }}" >{{ Lang::get('ccp.sell') }}</a></p>
				@elseif($sell == "no")
					<h1> {{ Lang::get('ccp.sell_h1_try_later') }} </h1>
					<p> {{ Lang::get('ccp.sell_desc_try_later') }} </p>
					<p><a class="btn btn-warning btn-block">{{ Lang::get('ccp.try_after_24') }}</a> </p>
				@endif
			</div>
		</div>
	</div>
@endsection
