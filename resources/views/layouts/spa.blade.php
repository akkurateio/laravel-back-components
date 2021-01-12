<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('back::layouts.includes.head')
    </head>
    <body class="{{ agent()->isMobile() ? 'is-mobile' : 'is-desktop' }}">
        <div class="akkurate akkurate-spa" id="app">
            @if(auth()->user() && auth()->user()->account)
                <akk-initer user-props="{{ json_encode(auth()->user()) }}"
                            account-props="{{ json_encode(currentAccount()) }}"
                shortcuts-props="{{ json_encode(uiShortcuts()) }}"></akk-initer>
            @endif

            <div class="sidebar">
                @includeIf('includes.sidebar')
            </div>
            <div class="ui">
                <div class="ui__navigation">
                    @yield('header')
                </div>
                <div class="ui__content">
                    <div id="overlay"></div>
                    @yield('content')
                </div>
            </div>
        </div>

        @include('back::layouts.includes.scripts')
    </body>
</html>
