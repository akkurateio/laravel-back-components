<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

@includeIf('includes.meta')

<title>@if(!empty($meta->title)){{$meta->title}}@else{{ app_name() }}@endif</title>

<!-- Favicons -->
<link href="{{ asset('favicons/apple-touch-icon.png') }}" rel="apple-touch-icon" sizes="180x180">
<link href="{{ asset('favicons/favicon-32x32.png') }}" rel="icon" type="image/png" sizes="32x32">
<link href="{{ asset('favicons/favicon-16x16.png') }}" rel="icon" type="image/png" sizes="16x16">
<link href="{{ asset('favicons/manifest.json') }}" rel="manifest">
<link href="{{ asset('favicons/safari-pinned-tab.svg') }}" rel="mask-icon">

<!-- Styles -->
@stack('before-styles')
@if(App::environment('production'))
    <link rel="stylesheet"
          href="{{ asset(mix('css/back/' . config('akk-style.theme') . '.css', config('back-components.css') ?? null )) }}">
@else
    <link rel="stylesheet"
          href="{{ asset(config('back-components.css') . 'css/back/' . config('akk-style.theme') . '.css') }}">
@endif
@stack('after-styles')
