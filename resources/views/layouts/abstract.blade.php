<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('back::layouts.includes.head')
    </head>
    <body class="{{ agent()->isMobile() ? 'is-mobile' : 'is-desktop' }}">

        @if(!empty($interface))
            @include('back::atomicdesign.interfaces.' . $interface)
        @else
            @include('back::atomicdesign.interfaces.base')
        @endif

        @include('back::layouts.includes.scripts')
    </body>
</html>
