@extends('layout.main')

@section('content')
	<div class="row row-eq-height">
		<div id="buy"  class="col-sm-6 col-md-5 col-lg-4  col-md-offset-1 col-lg-offset-2" >
			<div class="panel panel-default">
				@if($buy == "yes")
                                        <div class="panel-heading">
					    <h2>{{ Lang::get('ccp.buy_h1') }} </h2>
                                        </div>
                                        <div class="panel-body">
					    <p> {{ Lang::get('ccp.buy_desc') }} </p>
			 		    <p><a class="btn btn-primary btn-block"  href="{{ URL::route('buy') }}" >{{ Lang::get('ccp.buy') }}</a></p>
                                        </div>
			 	@elseif($buy == "no")
                                        <div class="panel-heading">
			 		    <h2>{{ Lang::get('ccp.buy_h1_try_later') }}</h2>
                                        </div>
                                        <div class="panel-body">
			 		    <p> {{ Lang::get('ccp.buy_desc_try_later') }} </p>
			 		    <p><a class="btn btn-warning btn-block">{{ Lang::get('ccp.try_after_24')  }}</a></p>
                                        </div>
			 	@endif
			 </div>
		</div>

		<div id="sell" class="col-sm-6 col-md-5 col-lg-4">
			<div class="panel panel-default">
				@if($sell == "yes")
                                        <div class="panel-heading">
					    <h2> {{ Lang::get('ccp.sell_h1') }} </h2>
                                        </div>
                                        <div class="panel-body">
					    <p> {{ Lang::get('ccp.sell_desc') }} </p>
					    <p><a class="btn btn-primary btn-block" href="{{ URL::route('sell') }}" >{{ Lang::get('ccp.sell') }}</a></p>
                                        </div>
				@elseif($sell == "no")
                                        <div class="panel-heading">
					    <h2> {{ Lang::get('ccp.sell_h1_try_later') }} </h2>
                                        </div>
                                        <div class="panel-body">
					    <p> {{ Lang::get('ccp.sell_desc_try_later') }} </p>
					    <p><a class="btn btn-warning btn-block">{{ Lang::get('ccp.try_after_24') }}</a> </p>
                                        </div>
				@endif
			</div>
		</div>
	</div>
@endsection
