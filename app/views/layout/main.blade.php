            @include('layout.include.head')
            @if(isset($info))
            <div class="row">
	             <div class=" col-sm-8 col-sm-offset-2">
                            <div class="btn btn-block btn-info">
	                            {{ $info }}
                            </div>
	             </div>
            </div>
            @endif
            @if(Session::has('global'))
            <div class="row">
                    <div class=" col-sm-8 col-sm-offset-2">
                            <div class="btn btn-block btn-info">
                                {{ Session::get('global') }}
                            </div>
                    </div>
            </div>
            @endif
            @yield('content')
            @include('layout.include.footer')
