<nav class="navbar navbar-default  ">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapse">
	      <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
		</button>
	</div>
	<div class="collapse navbar-collapse" id="collapse">
	    <ul class="nav  navbar-nav nav-responsive navbar-left">
	        <li><a href="{{ URL::route('home') }}">{{ Lang::get('general.home') }}</a></li>
	        @if(Auth::check())
	        @else
	        @endif
	        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">{{  Lang::get('general.lang')  }} <b class="caret"></b></a>
    			<ul class="dropdown-menu">
		    			<li><a href="{{ URL::route('lang_chooser') }}?locale=en">{{ Lang::get('lang.en') }}</a></li>
				    	<li><a href="{{ URL::route('lang_chooser') }}?locale=fr">{{ Lang::get('lang.fr') }}</a></li>
				    	<li><a href="{{ URL::route('lang_chooser') }}?locale=ar">{{ Lang::get('lang.ar') }}</a></li>
	    		</ul>
    		</li>
	    </ul>
	 </div>


</nav>
