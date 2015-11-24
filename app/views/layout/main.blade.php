            @include('layout.include.head')
            @if(isset($info))
	             <div class=" col-sm-8 col-sm-offset-2 btn btn-warning">
	                            {{ $info }}
	             </div>
            @endif
            @if(Session::has('global'))
                    <div class=" col-sm-8 col-sm-offset-2 btn btn-warning">
                            {{ Session::get('global') }}
                    </div>
            @endif
            @yield('content')
            @include('layout.include.footer')