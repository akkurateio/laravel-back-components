<?php

if (!function_exists('app_name')) {
    /**
     * Helper to grab the application name.
     *
     * @return mixed
     */
    function app_name()
    {
        return config('app.name');
    }
}

if (!function_exists('currentAccount')) {
    function currentAccount()
    {

        if (!class_exists(\Akkurate\LaravelCore\Models\Account::class)) {
            return null;
        }

        $account = \Akkurate\LaravelCore\Models\Account::where('slug', request('uuid'))
            ->with(['preference'])
            ->first();

        if(empty($account)) {
            $account = \Akkurate\LaravelCore\Models\Account::where('slug', request('uuid') ?? auth()->user()->account->slug)
                ->with(['preference'])
                ->first();
        }

        return $account;
    }
}

if (!function_exists('sidenavAdapter')) {
    function sidenavAdapter()
    {

        $sidenav = config('akk-sidenav');

        foreach ($sidenav['sidenav'] as $position => $nav) {
            foreach ($nav as $i => $item) {

                if (!auth()->user() || !$item['show'] || config('laravel-access') && isset($item['guard']) && !auth()->user()->can($item['guard'])) {
                    unset($sidenav['sidenav'][$position][$i]);
                    continue;
                } else {
                    if ($item['type'] == 'uri') {
                        if(Route::has($item['route'])) {
                            $sidenav['sidenav'][$position][$i]['href'] = route($item['route'], uuid());
                        } else {
                            unset($sidenav['sidenav'][$position][$i]);
                            continue;
                        }
                    }
                }

                // clean of the object
                unset($sidenav['sidenav'][$position][$i]['guard']);
                unset($sidenav['sidenav'][$position][$i]['route']);
                unset($sidenav['sidenav'][$position][$i]['show']);
            }

            // regenerate a simple array
            $sidenav['sidenav'][$position] = array_values($sidenav['sidenav'][$position]);
        }

        foreach($sidenav['panels'] as $panel => $nav) {
            foreach($nav['items'] as $i => $item) {
                if (!auth()->user() || config('laravel-access') && isset($item['guard']) && !auth()->user()->can($item['guard'])) {
                    unset($sidenav['panels'][$panel]['items'][$i]);
                    continue;
                } else {
                    if ($item['type'] == 'uri') {
                        if(Route::has($item['route'])) {
                            $sidenav['panels'][$panel]['items'][$i]['href'] = route($item['route'], uuid());
                        } else {
                            unset($sidenav['panels'][$panel]['items'][$i]);
                            continue;
                        }
                    }
                }

                // clean of the object
                unset($sidenav['panels'][$panel]['items'][$i]['guard']);
                unset($sidenav['panels'][$panel]['items'][$i]['route']);
                unset($sidenav['panels'][$panel]['items'][$i]['show']);
                unset($sidenav['panels'][$panel]['items'][$i]['view']);
            }

            // regenerate a simple array
            $sidenav['panels'][$panel]['items'] = array_values($sidenav['panels'][$panel]['items']);
        }

        return $sidenav;
    }
}

if (!function_exists('uuid')) {
    function uuid()
    {
        if (auth()->user() && auth()->user()->account) {
            return ['uuid' => request('uuid') ?? auth()->user()->account->slug];
        } else {
            return ['uuid' => auth()->user()->uuid];
        }
    }
}

if (!function_exists('agent')) {
    /**
     * Provide Agent instance
     *
     * @return mixed
     */
    function agent()
    {
        return new \Jenssegers\Agent\Agent();
    }
}

if (!function_exists('uiShortcuts')) {
    /**
     * Convert media to Base64
     *
     * @return mixed
     */
    function uiShortcuts()
    {
        $shortcuts = config('akk-menus.add');
//        $adds = config('akk-menus.add');
//        foreach($adds as $add) {
//            $shortcuts[] = $add;
//        }
        return $shortcuts;
    }
}

if (!function_exists('pagination')) {
    function pagination() {
        if (auth()->user()) {
            if (auth()->user()->preference || auth()->user()->account) {
                return auth()->user()->preference->pagination ?: auth()->user()->account->preference->pagination;
            }
        } else {
            return config('api.pagination') ?: 30;
        }
    }
}

if (! function_exists('previousRoute')) {
    /**
     * Generate a route name for the previous request.
     *
     * @return string|null
     */
    function previousRoute()
    {
        $previousRequest = app('request')->create(app('url')->previous());

        try {
            $routeName = app('router')->getRoutes()->match($previousRequest)->getName();
        } catch (NotFoundHttpException $exception) {
            return null;
        }

        return $routeName;
    }
}
