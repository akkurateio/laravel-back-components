<div class="interface interface-blank" id="app">
    @if(auth()->user() && auth()->user()->account)
        <akk-initer user-props="{{ json_encode(auth()->user()) }}"
                    account-props="{{ json_encode(currentAccount()) }}"
                    shortcuts-props="{{ json_encode(uiShortcuts()) }}"></akk-initer>
    @endif

    <div class="interface__header">
        <div class="container-fluid">
            @yield('header')
        </div>
    </div>

    <div class="interface__body">
        @yield('content')
    </div>
</div>
