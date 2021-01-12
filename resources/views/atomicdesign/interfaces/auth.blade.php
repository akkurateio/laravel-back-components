<div class="interface interface-auth" id="app">
    <div class="interface__header">
        @if(Route::has('front.homepage'))
            <a href="{{route('front.homepage')}}">
                <img src="{{asset('images/brands/' . config('akk-style.theme') . '/logo.svg')}}" alt="" class="logo">
            </a>
        @else
            <img src="{{asset('images/brands/' . config('akk-style.theme') . '/logo.svg')}}" alt="" class="logo">
        @endif
    </div>

    <div class="interface__body">
        @yield('content')
    </div>
</div>
