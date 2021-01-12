<div class="view view-search {{ $wrapperClass ?? '' }}">
    <div class="view__left">
        <div class="inner">
            {!! form_start($form) !!}
            {!! form_row($form->q) !!}
            {!! form_rest($form) !!}
            <div class="d-flex justify-content-between">
                <button type="reset" class="btn btn-sm btn-outline-light">{{ __('Réinit.') }}</button>
                <button type="submit" class="btn btn-sm btn-light">{{ __('Rechercher') }}</button>
            </div>
            {!! form_end($form) !!}
        </div>
        {{ $left ?? null }}
    </div>
    <div class="view__body">
        {{--        <pre class="text-2xs">@json($items, JSON_PRETTY_PRINT)</pre>--}}
        @if(!empty($isSearch))
            @if($items['search']->count() > 0)
                @component('back::atomicdesign.components.search.body-results', [
                    'q' => $q,
                    'items' => $items['search'],
                    'routes' => $routes,
                    'labels' => $labels,
                    'componentEntry' => $componentEntry,
                ])@endcomponent
            @else
                @component('back::atomicdesign.components.search.body-noresult', [
                    'q' => $q,
                    'routes' => $routes,
                    'labels' => $labels,
                ])@endcomponent
            @endif
        @else
            @if(
                empty($items['all']) &&
                empty($items['lastupdated']) &&
                empty($items['lastcreated']) &&
                empty($items['custom1']) &&
                empty($items['custom2']) &&
                empty($items['custom3'])
            )
                @component('back::atomicdesign.components.search.body-noentry', [
                    'routes' => $routes,
                    'labels' => $labels,
                ])@endcomponent
            @else
                @component('back::atomicdesign.components.search.body-items', [
                    'routes' => $routes,
                    'labels' => $labels,
                    'alphabetical' => $alphabetical ?? null,
                    'componentEntry' => $componentEntry,
                    'items' => $items,
                ])@endcomponent
            @endif
        @endif
    </div>
</div>

@isset($routes['create'])
    @component('back::atomicdesign.atoms.add', ['route' => $routes['create']])@endcomponent
@endisset

@component('back::atomicdesign.atoms.toast')@endcomponent
