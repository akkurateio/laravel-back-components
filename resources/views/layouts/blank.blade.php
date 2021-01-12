<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('back::layouts.includes.head')
    </head>
    <body data-layout="blank">
        <div id="app">
            @if(auth()->user() && auth()->user()->account)
                <akk-initer user-props="{{ json_encode(auth()->user()) }}"
                            account-props="{{ json_encode(\Akkurate\LaravelCore\Models\Account::where('slug', request('uuid'))->first()) }}"></akk-initer>
            @endif
            @yield('content')
        </div>

        @include('back::layouts.includes.scripts')
    </body>
</html>
