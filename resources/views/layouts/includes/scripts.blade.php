<!-- Scripts -->
@stack('before-scripts')
@if(App::environment('production'))
    <script src="{{ asset(mix('js/app.js', config('back-components.js') ?? null )) }}"></script>
@else
    <script src="{{ asset(config('back-components.js') . 'js/app.js') }}"></script>
@endif
@includeIf('includes.scripts')
@stack('after-scripts')